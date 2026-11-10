<?php
if(!defined('ABSPATH')) exit;

/**
 * Small SEO fixes for content that lives in the database.
 */

/* Images inserted into posts without alt text get one at render time: the
   Media Library alt if it was filled in later, otherwise the attachment title,
   otherwise the file name ("balloon-garland-toronto" -> "Balloon garland toronto"). */
function hd_content_image_alt($image,$context,$attachment_id){
  if(!preg_match('/\salt=(["\'])\1/',$image)) return $image;
  $alt='';
  if($attachment_id){
    $alt=trim((string)get_post_meta($attachment_id,'_wp_attachment_image_alt',true));
    if($alt==='') $alt=trim((string)get_the_title($attachment_id));
  }
  if($alt===''&&preg_match('/\ssrc=["\']([^"\']+)/',$image,$src)){
    $alt=pathinfo(wp_parse_url($src[1],PHP_URL_PATH),PATHINFO_FILENAME);
  }
  $alt=preg_replace('/-\d+x\d+$|-scaled$|-e\d+$/','',$alt);
  $alt=trim(preg_replace('/[-_]+/',' ',$alt));
  if($alt==='') return $image;
  $alt=ucfirst($alt);
  $alt=preg_replace_callback('/\b(toronto|vaughan|richmond hill|north york|woodbridge|kleinburg|king city|maple|thornhill|gta)\b/i',function($m){
    return strtolower($m[1])==='gta'?'GTA':ucwords(strtolower($m[1]));
  },$alt);
  return preg_replace('/\salt=(["\'])\1/',' alt="'.esc_attr($alt).'"',$image,1);
}
add_filter('wp_content_img_tag','hd_content_image_alt',10,3);

/* Cart, checkout and account pages are noindex; keep them out of the sitemap too. */
function hd_sitemap_exclude_store_pages($ids){
  if(!function_exists('wc_get_page_id')) return $ids;
  foreach(['cart','checkout','myaccount'] as $page){
    $id=(int)wc_get_page_id($page);
    if($id>0) $ids[]=$id;
  }
  return array_values(array_unique(array_map('intval',(array)$ids)));
}
add_filter('wpseo_exclude_from_sitemap_by_post_ids','hd_sitemap_exclude_store_pages');
