<?php
if(!defined('ABSPATH')) exit;

/**
 * Central contact + social details.
 *
 * Header, footer, quote sections and service pages all read phone, email,
 * address, hours and social links from here, so they can be edited under
 * Appearance -> Customize -> Contact & Social without touching templates.
 * Every default reproduces the value that used to be hard-coded, so the
 * rendered output is unchanged until an option is edited.
 */
function hd_contact_defaults(){
  return [
    'phone'     => '647-527-5505',
    'email'     => 'happydaytorontoballoons@gmail.com',
    'address'   => 'Richmond Hill, Ontario',
    'hours'     => '',
    'instagram' => 'https://www.instagram.com/happydaytoronto/',
    'facebook'  => 'https://www.facebook.com/HappyDayToronto/',
    'tiktok'    => '',
    'youtube'   => '',
    'pinterest' => '',
    'whatsapp'  => '',
  ];
}

/* Optional fields (defaulting to '') stay empty when unset; the rest fall
   back to their packaged default if the stored value is blank. */
function hd_contact_option($key){
  $defaults=hd_contact_defaults();
  $default=$defaults[$key] ?? '';
  $value=get_theme_mod('hd_'.$key,$default);
  $value=is_string($value)?trim($value):'';
  return $value!==''?$value:$default;
}

function hd_phone(){return hd_contact_option('phone');}

/* Build a dialable tel: href from whatever format the phone is stored in. */
function hd_phone_href(){
  $raw=hd_contact_option('phone');
  $has_plus=str_starts_with($raw,'+');
  $digits=preg_replace('/\D+/','',$raw);
  if($digits==='') return '';
  if(!$has_plus&&strlen($digits)===10) $digits='1'.$digits;
  return 'tel:+'.$digits;
}

function hd_email(){return hd_contact_option('email');}
function hd_email_href(){$email=hd_email();return $email?'mailto:'.$email:'';}
function hd_address(){return hd_contact_option('address');}

function hd_hours(){return hd_contact_option('hours');}
function hd_hours_lines(){
  $raw=hd_hours();
  if($raw==='') return [];
  return array_values(array_filter(array_map('trim',preg_split('/\r\n|\r|\n/',$raw)),'strlen'));
}

function hd_whatsapp_href(){
  $digits=preg_replace('/\D+/','',hd_contact_option('whatsapp'));
  return $digits?'https://wa.me/'.$digits:'';
}

function hd_instagram_url(){return hd_contact_option('instagram');}
function hd_instagram_handle(){
  $path=trim((string)wp_parse_url(hd_instagram_url(),PHP_URL_PATH),'/');
  $handle=$path!==''?basename($path):'';
  return $handle?'@'.$handle:'';
}

/**
 * Configured social profiles, in display order, as
 * [key => ['label'=>..., 'icon'=>..., 'url'=>...]]. Only non-empty ones.
 */
function hd_social_links(){
  $config=[
    'instagram'=>['label'=>'Instagram','icon'=>'fa-brands fa-instagram'],
    'facebook' =>['label'=>'Facebook','icon'=>'fa-brands fa-facebook-f'],
    'tiktok'   =>['label'=>'TikTok','icon'=>'fa-brands fa-tiktok'],
    'youtube'  =>['label'=>'YouTube','icon'=>'fa-brands fa-youtube'],
    'pinterest'=>['label'=>'Pinterest','icon'=>'fa-brands fa-pinterest-p'],
  ];
  $links=[];
  foreach($config as $key=>$meta){
    $url=hd_contact_option($key);
    if($url==='') continue;
    $links[$key]=$meta+['url'=>$url];
  }
  $whatsapp=hd_whatsapp_href();
  if($whatsapp) $links['whatsapp']=['label'=>'WhatsApp','icon'=>'fa-brands fa-whatsapp','url'=>$whatsapp];
  return $links;
}

/* Appearance -> Customize -> Contact & Social */
function hd_customize_register($wp_customize){
  $wp_customize->add_section('hd_contact',[
    'title'=>'Contact & Social',
    'priority'=>25,
  ]);

  $fields=[
    'phone'    =>['label'=>'Phone number','type'=>'text','sanitize'=>'sanitize_text_field','description'=>'Shown in the header, footer and quote sections. The tel: link is generated automatically.'],
    'email'    =>['label'=>'Email address','type'=>'text','sanitize'=>'sanitize_email'],
    'address'  =>['label'=>'Location','type'=>'text','sanitize'=>'sanitize_text_field'],
    'hours'    =>['label'=>'Business hours','type'=>'textarea','sanitize'=>'sanitize_textarea_field','description'=>'One line per row, e.g. "Mon-Fri: 9am - 6pm". Leave blank to hide.'],
    'instagram'=>['label'=>'Instagram URL','type'=>'url','sanitize'=>'esc_url_raw'],
    'facebook' =>['label'=>'Facebook URL','type'=>'url','sanitize'=>'esc_url_raw'],
    'tiktok'   =>['label'=>'TikTok URL','type'=>'url','sanitize'=>'esc_url_raw'],
    'youtube'  =>['label'=>'YouTube URL','type'=>'url','sanitize'=>'esc_url_raw'],
    'pinterest'=>['label'=>'Pinterest URL','type'=>'url','sanitize'=>'esc_url_raw'],
    'whatsapp' =>['label'=>'WhatsApp number','type'=>'text','sanitize'=>'sanitize_text_field','description'=>'Digits with country code, e.g. 16475275505. Adds a WhatsApp icon to the footer.'],
  ];
  $defaults=hd_contact_defaults();
  $priority=10;
  foreach($fields as $key=>$field){
    $wp_customize->add_setting('hd_'.$key,[
      'default'=>$defaults[$key] ?? '',
      'type'=>'theme_mod',
      'sanitize_callback'=>$field['sanitize'],
      'transport'=>'refresh',
    ]);
    $wp_customize->add_control('hd_'.$key,[
      'section'=>'hd_contact',
      'label'=>$field['label'],
      'type'=>$field['type'],
      'description'=>$field['description'] ?? '',
      'priority'=>$priority,
    ]);
    $priority+=10;
  }
}
add_action('customize_register','hd_customize_register');
