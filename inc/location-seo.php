<?php
/** File-driven SEO title/description for location and service pages. Editor overrides remain authoritative. */
if (!defined('ABSPATH')) exit;
function hd_location_seo_value($key, $fallback){
    if(!is_page()) return $fallback;
    $file=hd_page_data_file();
    if(!$file) return $fallback;
    $data=require $file;
    return $data['seo'][$key]??$fallback;
}
function hd_location_yoast_title($title){
    if(get_post_meta(get_queried_object_id(),'_yoast_wpseo_title',true)) return $title;
    return hd_location_seo_value('title',$title);
}
function hd_location_yoast_description($description){
    if(get_post_meta(get_queried_object_id(),'_yoast_wpseo_metadesc',true)) return $description;
    return hd_location_seo_value('description',$description);
}
add_filter('wpseo_title','hd_location_yoast_title');
add_filter('wpseo_metadesc','hd_location_yoast_description');
add_filter('wpseo_opengraph_title','hd_location_yoast_title');
add_filter('wpseo_opengraph_desc','hd_location_yoast_description');
add_filter('wpseo_twitter_title','hd_location_yoast_title');
add_filter('wpseo_twitter_description','hd_location_yoast_description');
add_filter('pre_get_document_title',function($title){
    return defined('WPSEO_VERSION')?$title:hd_location_seo_value('title',$title);
});
add_action('wp_head',function(){
    if(defined('WPSEO_VERSION')) return;
    $description=hd_location_seo_value('description','');
    if($description!=='') printf('<meta name="description" content="%s">' . "\n",esc_attr($description));
});
