<?php
/**
 * Schema.org output.
 *
 * The site runs Yoast SEO Free, which emits an `Organization` node (plus
 * WebSite / WebPage / BreadcrumbList) but never `LocalBusiness`, and no
 * `Service` node for the file-driven service pages. Rather than print a
 * second, disconnected <script type="application/ld+json"> block, this file
 * hooks Yoast's own graph so everything stays in one @graph with correct
 * @id references:
 *
 *   - `wpseo_schema_organization` upgrades the existing Organization node in
 *     place so it is also a LocalBusiness (address, area served, price range,
 *     phone, email, opening hours, geo). Only missing keys are added; nothing
 *     Yoast set is removed or replaced.
 *   - `wpseo_schema_graph` appends a `Service` node on service pages and
 *     points that page's WebPage node at it through `mainEntity`.
 *
 * Every business fact is read from Appearance -> Customize -> Business
 * details; nothing is hard-coded here. A blank field simply omits its
 * property. If Yoast is deactivated none of these filters run and the output
 * is exactly what it was before this file existed.
 */

if (!defined('ABSPATH')) exit;

/* ---------------------------------------------------------------------------
 * Customizer: Business details
 * ------------------------------------------------------------------------- */

/**
 * Locality and region default to whatever the free-text Contact "Location"
 * field already says, so an existing install needs no re-entry.
 */
function hd_schema_defaults(){
  $location=function_exists('hd_address')?hd_address():'';
  $parts=array_map('trim',explode(',',$location));
  return [
    'street'      => '',
    'locality'    => $parts[0] ?? '',
    'region'      => 'ON',
    'postal'      => '',
    'country'     => 'CA',
    'area_served' => 'Greater Toronto Area',
    'price_range' => '$$',
    'geo_lat'     => '',
    'geo_lng'     => '',
  ];
}

/* Fall back to the packaged default whenever the stored value is blank. */
function hd_schema_option($key){
  $defaults=hd_schema_defaults();
  $default=$defaults[$key] ?? '';
  $value=get_theme_mod('hd_biz_'.$key,$default);
  $value=is_string($value)?trim($value):'';
  return $value!==''?$value:$default;
}

/* Appearance -> Customize -> Business details */
function hd_schema_customize_register($wp_customize){
  $wp_customize->add_section('hd_business',[
    'title'=>'Business details',
    'priority'=>26,
    'description'=>'Feeds the LocalBusiness and Service structured data in the page source. Leave a field blank to omit that property.',
  ]);

  $fields=[
    'street'      =>['label'=>'Street address','type'=>'text','sanitize'=>'sanitize_text_field','description'=>'Optional. Leave blank if no street address is published.'],
    'locality'    =>['label'=>'City / locality','type'=>'text','sanitize'=>'sanitize_text_field'],
    'region'      =>['label'=>'Province / region code','type'=>'text','sanitize'=>'sanitize_text_field','description'=>'e.g. ON'],
    'postal'      =>['label'=>'Postal code','type'=>'text','sanitize'=>'sanitize_text_field'],
    'country'     =>['label'=>'Country code','type'=>'text','sanitize'=>'sanitize_text_field','description'=>'Two letters, e.g. CA'],
    'area_served' =>['label'=>'Area served','type'=>'text','sanitize'=>'sanitize_text_field','description'=>'e.g. Greater Toronto Area'],
    'price_range' =>['label'=>'Price range','type'=>'text','sanitize'=>'sanitize_text_field','description'=>'Google-style $ to $$$$'],
    'geo_lat'     =>['label'=>'Latitude','type'=>'text','sanitize'=>'sanitize_text_field','description'=>'Optional decimal degrees. Both latitude and longitude are needed for geo output.'],
    'geo_lng'     =>['label'=>'Longitude','type'=>'text','sanitize'=>'sanitize_text_field'],
  ];
  $defaults=hd_schema_defaults();
  $priority=10;
  foreach($fields as $key=>$field){
    $wp_customize->add_setting('hd_biz_'.$key,[
      'default'=>$defaults[$key] ?? '',
      'type'=>'theme_mod',
      'sanitize_callback'=>$field['sanitize'],
      'transport'=>'refresh',
    ]);
    $wp_customize->add_control('hd_biz_'.$key,[
      'section'=>'hd_business',
      'label'=>$field['label'],
      'type'=>$field['type'],
      'description'=>$field['description'] ?? '',
      'priority'=>$priority,
    ]);
    $priority+=10;
  }
}
add_action('customize_register','hd_schema_customize_register');

/* ---------------------------------------------------------------------------
 * Value builders
 * ------------------------------------------------------------------------- */

/** PostalAddress node, or null when no locality is known. */
function hd_schema_address(){
  $locality=hd_schema_option('locality');
  if($locality==='') return null;
  $address=['@type'=>'PostalAddress','addressLocality'=>$locality];
  $street=hd_schema_option('street');
  if($street!=='') $address['streetAddress']=$street;
  $region=hd_schema_option('region');
  if($region!=='') $address['addressRegion']=$region;
  $postal=hd_schema_option('postal');
  if($postal!=='') $address['postalCode']=$postal;
  $country=hd_schema_option('country');
  if($country!=='') $address['addressCountry']=$country;
  return $address;
}

/** GeoCoordinates node, or null unless both coordinates are set and numeric. */
function hd_schema_geo(){
  $lat=hd_schema_option('geo_lat');
  $lng=hd_schema_option('geo_lng');
  if($lat===''||$lng===''||!is_numeric($lat)||!is_numeric($lng)) return null;
  return ['@type'=>'GeoCoordinates','latitude'=>(float)$lat,'longitude'=>(float)$lng];
}

/**
 * Turn the free-text "Business hours" Customizer field into
 * openingHoursSpecification entries. Any line that does not parse cleanly is
 * skipped, so a malformed row can never emit invalid schema. Days that are
 * marked closed are left out entirely (an omitted day already means closed).
 *
 * Understood shapes (case-insensitive), one per line:
 *   Mon-Fri: 9am - 6pm
 *   Monday to Friday: 09:00 - 18:00
 *   Saturday: 10am - 4pm
 *   Sunday: Closed
 */
function hd_schema_opening_hours(){
  if(!function_exists('hd_hours_lines')) return [];
  $lines=hd_hours_lines();
  if(!$lines) return [];

  $days=[
    'mon'=>'Monday','monday'=>'Monday',
    'tue'=>'Tuesday','tues'=>'Tuesday','tuesday'=>'Tuesday',
    'wed'=>'Wednesday','weds'=>'Wednesday','wednesday'=>'Wednesday',
    'thu'=>'Thursday','thur'=>'Thursday','thurs'=>'Thursday','thursday'=>'Thursday',
    'fri'=>'Friday','friday'=>'Friday',
    'sat'=>'Saturday','saturday'=>'Saturday',
    'sun'=>'Sunday','sunday'=>'Sunday',
  ];
  $order=['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'];

  $to_24h=static function($token){
    $token=strtolower(trim((string)$token));
    if(!preg_match('/^(\d{1,2})(?::(\d{2}))?\s*(am|pm)?$/',$token,$m)) return null;
    $h=(int)$m[1];
    $min=isset($m[2])?(int)$m[2]:0;
    $mer=$m[3]??'';
    if($mer==='am'&&$h===12) $h=0;
    elseif($mer==='pm'&&$h!==12) $h+=12;
    if($h>23||$min>59) return null;
    return sprintf('%02d:%02d',$h,$min);
  };

  $specs=[];
  foreach($lines as $line){
    $pos=strpos($line,':');
    if($pos===false) continue;
    $left=strtolower(trim(substr($line,0,$pos)));
    $right=trim(substr($line,$pos+1));
    if($left===''||$right==='') continue;

    /* Normalise the day part: "monday to friday", "sat & sun", "sat-sun". */
    $left=str_replace([' to ',' – ',' — ',' and ','&'],['-','-','-',',',','],$left);
    $day_names=[];
    if(in_array($left,['everyday','every day','daily','all week','7 days','mon-sun'],true)){
      $left='monday-sunday';
    }
    foreach(preg_split('/\s*,\s*/',$left) as $chunk){
      $chunk=trim($chunk);
      if($chunk==='') continue;
      if(strpos($chunk,'-')!==false){
        [$a,$b]=array_map('trim',explode('-',$chunk,2));
        if(!isset($days[$a],$days[$b])){ $day_names=[]; break; }
        $ia=array_search($days[$a],$order,true);
        $ib=array_search($days[$b],$order,true);
        if($ia===false||$ib===false||$ia>$ib){ $day_names=[]; break; }
        $day_names=array_merge($day_names,array_slice($order,$ia,$ib-$ia+1));
      }elseif(isset($days[$chunk])){
        $day_names[]=$days[$chunk];
      }else{
        $day_names=[]; break;
      }
    }
    if(!$day_names) continue;
    $day_names=array_values(array_unique($day_names));

    if(preg_match('/closed/i',$right)) continue;

    $range=preg_split('/\s*[-–—]\s*/',$right,2);
    if(count($range)!==2) continue;
    $opens=$to_24h($range[0]);
    $closes=$to_24h($range[1]);
    if($opens===null||$closes===null) continue;

    $specs[]=[
      '@type'=>'OpeningHoursSpecification',
      'dayOfWeek'=>$day_names,
      'opens'=>$opens,
      'closes'=>$closes,
    ];
  }
  return $specs;
}

/* ---------------------------------------------------------------------------
 * Upgrade Yoast's Organization node to LocalBusiness, in place
 * ------------------------------------------------------------------------- */

function hd_schema_localbusiness($data){
  if(!is_array($data)) return $data;

  /* Keep every type Yoast already declared and add LocalBusiness. */
  $types=array_values(array_filter((array)($data['@type']??'Organization'),'strlen'));
  if(!$types) $types=['Organization'];
  if(!in_array('LocalBusiness',$types,true)) $types[]='LocalBusiness';
  $data['@type']=count($types)===1?$types[0]:$types;

  if(empty($data['telephone'])&&function_exists('hd_phone')){
    $phone=hd_phone();
    if($phone!=='') $data['telephone']=$phone;
  }
  if(empty($data['email'])&&function_exists('hd_email')){
    $email=hd_email();
    if($email!=='') $data['email']=$email;
  }

  $area=hd_schema_option('area_served');
  if($area!==''&&empty($data['areaServed'])) $data['areaServed']=$area;

  $price=hd_schema_option('price_range');
  if($price!==''&&empty($data['priceRange'])) $data['priceRange']=$price;

  if(empty($data['address'])){
    $address=hd_schema_address();
    if($address) $data['address']=$address;
  }

  if(empty($data['geo'])){
    $geo=hd_schema_geo();
    if($geo) $data['geo']=$geo;
  }

  if(empty($data['openingHoursSpecification'])){
    $hours=hd_schema_opening_hours();
    if($hours) $data['openingHoursSpecification']=$hours;
  }

  return $data;
}
add_filter('wpseo_schema_organization','hd_schema_localbusiness');

/* ---------------------------------------------------------------------------
 * Add a Service node on file-driven service pages
 * ------------------------------------------------------------------------- */

function hd_schema_service_graph($graph,$context){
  unset($context);
  if(!is_array($graph)||!function_exists('hd_is_service_page')||!hd_is_service_page()) return $graph;

  $id=get_queried_object_id();
  $slug=(string) get_post_field('post_name',$id);
  $data_file=get_template_directory().'/inc/services/'.$slug.'.php';
  if(!is_file($data_file)) return $graph;
  $service_data=require $data_file;
  if(!is_array($service_data)) return $graph;

  $permalink=get_permalink($id);
  if(!$permalink) return $graph;
  $service_id=$permalink.'#service';

  /* Reuse the exact @id Yoast minted for the Organization and for this page's
   * WebPage node, so the Service links into the same graph rather than
   * floating loose. */
  $org_ref=null;
  $webpage_key=null;
  foreach($graph as $key=>$node){
    if(empty($node['@id'])) continue;
    $types=(array)($node['@type']??'');
    if($org_ref===null&&(in_array('Organization',$types,true)||in_array('LocalBusiness',$types,true))){
      $org_ref=$node['@id'];
    }
    if($webpage_key===null&&in_array('WebPage',$types,true)&&!empty($node['url'])
      &&untrailingslashit((string)$node['url'])===untrailingslashit($permalink)){
      $webpage_key=$key;
    }
  }

  $name=get_the_title($id);
  if($name==='') $name=$service_data['title']??'Balloon decoration';

  $service=[
    '@type'=>'Service',
    '@id'=>$service_id,
    'name'=>wp_strip_all_tags((string)$name),
    'serviceType'=>'Balloon decoration',
    'url'=>$permalink,
    'provider'=>$org_ref?['@id'=>$org_ref]:null,
    'areaServed'=>hd_schema_option('area_served')?:null,
  ];

  if(!empty($service_data['intro'][0])){
    $service['description']=wp_strip_all_tags((string)$service_data['intro'][0]);
  }
  if(function_exists('hd_current_hero_image_url')){
    $image=hd_current_hero_image_url();
    if($image) $service['image']=$image;
  }

  if($webpage_key!==null){
    $service['mainEntityOfPage']=['@id'=>$graph[$webpage_key]['@id']];
    if(empty($graph[$webpage_key]['mainEntity'])){
      $graph[$webpage_key]['mainEntity']=['@id'=>$service_id];
    }
  }

  $graph[]=array_filter($service,static function($value){
    return $value!==null&&$value!=='';
  });

  return $graph;
}
add_filter('wpseo_schema_graph','hd_schema_service_graph',10,2);
