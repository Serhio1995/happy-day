<?php
if(!defined('ABSPATH')) exit;

/**
 * Optional blocks for service page sections (template-parts/service-layout.php).
 *
 *   'cards' => [['icon'=>'sparkles','title'=>'...','text'=>'...','meta'=>'Best for: ...'], ...]
 *   'table' => ['caption'=>'...','head'=>['A','B'],'rows'=>[['...','...'], ...]]
 *   'note'  => 'Short highlighted line under the section text.'
 *
 * Icons must exist in the Font Awesome subset in assets/vendor/fontawesome.
 */

function hd_render_service_cards($cards,$style=''){
  printf('<ul class="service-card-grid%s" role="list">',$style?' is-'.sanitize_html_class($style):'');
  foreach($cards as $card){
    echo '<li class="service-card">';
    if(!empty($card['icon'])){
      printf('<span class="service-card-icon" aria-hidden="true"><i class="fa-solid fa-%s"></i></span>',esc_attr($card['icon']));
    }
    printf('<h3>%s</h3>',esc_html($card['title']));
    printf('<p>%s</p>',wp_kses_post($card['text']));
    if(!empty($card['meta'])){
      /* "Best for: a, b" gets its label split out so it can be styled. */
      $meta=explode(':',$card['meta'],2);
      if(count($meta)===2) printf('<p class="service-card-meta"><span class="service-card-meta-label">%s:</span> %s</p>',esc_html(trim($meta[0])),esc_html(trim($meta[1])));
      else printf('<p class="service-card-meta">%s</p>',esc_html($card['meta']));
    }
    echo '</li>';
  }
  echo '</ul>';
}

function hd_render_service_table($table){
  if(empty($table['rows'])) return;
  echo '<div class="service-table-wrap"><table class="service-table">';
  if(!empty($table['caption'])) printf('<caption>%s</caption>',esc_html($table['caption']));
  if(!empty($table['head'])){
    echo '<thead><tr>';
    foreach($table['head'] as $cell) printf('<th scope="col">%s</th>',esc_html($cell));
    echo '</tr></thead>';
  }
  echo '<tbody>';
  foreach($table['rows'] as $row){
    echo '<tr>';
    foreach(array_values($row) as $i=>$cell){
      /* First column labels the row; on phones each row becomes a card and
         the other cells show their column name from data-label. */
      $label=$table['head'][$i]??'';
      if($i===0) printf('<th scope="row">%s</th>',wp_kses_post($cell));
      else printf('<td data-label="%s">%s</td>',esc_attr($label),wp_kses_post($cell));
    }
    echo '</tr>';
  }
  echo '</tbody></table></div>';
}

/* The New Year a visitor is planning for: the coming one, and the one just
   started during January, so "2027" stays right through the season. */
function hd_upcoming_new_year(){
  $now=current_datetime();
  $year=(int)$now->format('Y');
  return (int)$now->format('n')===1?$year:$year+1;
}

/* Tear-off calendar page for a key date (New Year's page: December 31).
   'calendar' => ['date'=>'2026-12-31','text'=>'...','button'=>'...'] */
function hd_render_date_card($card){
  $date=date_create_immutable($card['date']??'');
  if(!$date) return;
  echo '<div class="hd-date-card">';
  echo '<span class="hd-date-card-rings" aria-hidden="true"><i></i><i></i></span>';
  printf('<p class="hd-date-card-month">%s</p>',esc_html($date->format('F Y')));
  printf('<p class="hd-date-card-day">%s</p>',esc_html($date->format('j')));
  printf('<p class="hd-date-card-weekday">%s</p>',esc_html($date->format('l')));
  if(!empty($card['text'])) printf('<p class="hd-date-card-text">%s</p>',esc_html($card['text']));
  if(!empty($card['button'])) printf('<a class="hd-btn" href="#service-quote">%s <i class="fa-solid fa-arrow-right"></i></a>',esc_html($card['button']));
  echo '</div>';
}

/* Weather-style cards, one per place, with a big typical temperature.
   'zones' => [['label'=>'...','degrees'=>'+21°','temp'=>'Warm','use'=>'...','note'=>'...'], ...] */
function hd_render_service_zones($zones){
  echo '<ol class="hd-zones" role="list">';
  foreach(array_values($zones) as $i=>$zone){
    printf('<li class="hd-zone hd-zone-%d">',$i+1);
    printf('<h3 class="hd-zone-band">%s</h3>',esc_html($zone['label']));
    if(!empty($zone['degrees'])) printf('<p class="hd-zone-deg">%s</p>',esc_html($zone['degrees']));
    printf('<p class="hd-zone-temp">%s</p>',esc_html($zone['temp']));
    printf('<p class="hd-zone-use"><strong>What we use</strong>%s</p>',esc_html($zone['use']));
    printf('<p class="hd-zone-note">%s</p>',wp_kses_post($zone['note']));
    echo '</li>';
  }
  echo '</ol>';
}

/* Side-by-side samples of the year in different decor styles.
   'showcase' => ['text'=>'2027','items'=>[['style'=>'foil|marquee|garland','title'=>'...','looks'=>'...','best'=>'...'], ...]] */
function hd_render_service_showcase($showcase){
  $text=(string)($showcase['text']??'');
  echo '<ul class="hd-showcase" role="list">';
  foreach($showcase['items'] as $item){
    $style=sanitize_html_class($item['style']);
    printf('<li class="hd-showcase-item hd-showcase-item-%s"><figure class="hd-showcase-photo">',$style);
    printf('<div class="hd-showcase-sample hd-showcase-%s" aria-hidden="true">',$style);
    foreach(str_split($text) as $ch) printf('<span>%s</span>',esc_html($ch));
    echo '</div>';
    printf('<figcaption><h3>%s</h3></figcaption></figure>',esc_html($item['title']));
    printf('<p class="hd-showcase-looks">%s</p>',wp_kses_post($item['looks']));
    printf('<p class="hd-showcase-best"><strong>Works best</strong>%s</p>',wp_kses_post($item['best']));
    echo '</li>';
  }
  echo '</ul>';
}

/* Restaurant-menu style list: item name, dotted leader, where it goes.
   'menu' => ['title'=>'...','subtitle'=>'...','items'=>[['Item','Where'], ...]] */
function hd_render_service_menu($menu){
  echo '<div class="hd-menu-card">';
  printf('<div class="hd-menu-head"><p class="hd-menu-title">%s</p>',esc_html($menu['title']??'Menu'));
  if(!empty($menu['subtitle'])) printf('<p class="hd-menu-sub">%s</p>',esc_html($menu['subtitle']));
  echo '</div><ul class="hd-menu-list" role="list">';
  foreach($menu['items'] as [$name,$where]){
    printf('<li><span class="hd-menu-name">%s</span><span class="hd-menu-dots" aria-hidden="true"></span><span class="hd-menu-where">%s</span></li>',esc_html($name),esc_html($where));
  }
  echo '</ul></div>';
}

/* Colour palettes shown as little balloon bunches.
   'palettes' => [['name'=>'...','colors'=>['#hex','clear','outline', ...]], ...]
   'clear' draws a clear confetti balloon, 'outline' an empty dashed one. */
function hd_render_service_palettes($palettes){
  echo '<ul class="hd-palettes" role="list">';
  foreach($palettes as $palette){
    echo '<li class="hd-palette"><span class="hd-palette-bunch" aria-hidden="true">';
    foreach($palette['colors'] as $color){
      if($color==='clear') echo '<i class="is-clear"></i>';
      elseif($color==='outline') echo '<i class="is-outline"></i>';
      else printf('<i style="--c:%s"></i>',esc_attr($color));
    }
    printf('</span><span class="hd-palette-text"><span class="hd-palette-name">%s</span>%s</span></li>',esc_html($palette['name']),!empty($palette['note'])?'<span class="hd-palette-note">'.esc_html($palette['note']).'</span>':'');
  }
  echo '</ul>';
}

/* Three-step "what's included" strip.
   'included' => [['icon'=>'gift','title'=>'...','text'=>'...'], ...] */
function hd_render_service_included($steps){
  echo '<ol class="hd-included" role="list">';
  foreach($steps as $step){
    printf('<li><span class="hd-included-icon" aria-hidden="true"><i class="fa-solid fa-%s"></i></span><h3>%s</h3><p>%s</p></li>',esc_attr($step['icon']),esc_html($step['title']),wp_kses_post($step['text']));
  }
  echo '</ol>';
}

/* Areas as postage stamps. 'stamps' => ['caption'=>'Happy New Year from',
   'items'=>[['name'=>'Vaughan','path'=>'service-areas/vaughan','text'=>'...'], ...]]
   'path' => '' links to the home page, null means no link. */
function hd_render_service_stamps($stamps){
  echo '<ul class="hd-stamps" role="list">';
  foreach($stamps['items'] as $item){
    $url=null;
    if(array_key_exists('path',$item)&&$item['path']!==null){
      $url=$item['path']===''?home_url('/'):hd_local_url($item['path']);
    }
    echo '<li class="hd-stamp"><div class="hd-stamp-inner">';
    if(!empty($stamps['caption'])) printf('<span class="hd-stamp-caption">%s</span>',esc_html($stamps['caption']));
    $name=esc_html($item['name']);
    printf('<h3 class="hd-stamp-name">%s</h3>',$url?'<a href="'.esc_url($url).'">'.$name.'</a>':$name);
    if(!empty($item['text'])) printf('<p class="hd-stamp-text">%s</p>',esc_html($item['text']));
    echo '</div></li>';
  }
  echo '</ul>';
}

/* Holiday service pages (page_class contains hd-holiday) skip the GTA map. */
function hd_is_holiday_service_page(){
  static $result=null;
  if($result!==null) return $result;
  $file=function_exists('hd_page_data_file')?hd_page_data_file():'';
  if(!$file) return $result=false;
  $data=require $file;
  return $result=strpos((string)($data['page_class']??''),'hd-holiday')!==false;
}

/* Delivery route card: cities as stops on a dashed route line.
   'route' => ['title'=>'...','subtitle'=>'...','stops'=>[['name'=>'...','path'=>'service-areas/x'|''|null,'text'=>'...'], ...],
   'all'=>'All service areas'] ; path '' = home page, null = no link. */
function hd_render_service_route($route){
  echo '<div class="hd-route">';
  printf('<div class="hd-route-head"><p class="hd-route-title">%s</p>',esc_html($route['title']??''));
  if(!empty($route['subtitle'])) printf('<p class="hd-route-sub">%s</p>',esc_html($route['subtitle']));
  echo '</div><ol class="hd-route-stops" role="list">';
  foreach($route['stops'] as $stop){
    $url=null;
    if(array_key_exists('path',$stop)&&$stop['path']!==null) $url=$stop['path']===''?home_url('/'):hd_local_url($stop['path']);
    $name=esc_html($stop['name']);
    printf('<li><span class="hd-route-pin" aria-hidden="true"></span><span class="hd-route-name">%s</span><span class="hd-route-text">%s</span></li>',
      $url?'<a href="'.esc_url($url).'">'.$name.'</a>':$name,esc_html($stop['text']??''));
  }
  echo '</ol>';
  $hub=get_page_by_path('service-areas');
  if(!empty($route['all'])&&$hub) printf('<a class="hd-route-all" href="%s">%s <i class="fa-solid fa-arrow-right"></i></a>',esc_url(get_permalink($hub)),esc_html($route['all']));
  echo '</div>';
}
