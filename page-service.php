<?php
/* Template Name: Happy Day Service */
if (!defined('ABSPATH')) exit;
$slug=get_post_field('post_name',get_queried_object_id());
$data_file=get_template_directory().'/inc/services/'.$slug.'.php';
if(!file_exists($data_file)){get_template_part('page');return;}
$service_data=require $data_file;
$faq_file=get_template_directory().'/inc/service-faqs.php';
if(file_exists($faq_file)){
    $service_faqs=require $faq_file;
    if(!empty($service_faqs[$slug])) $service_data['faq']=$service_faqs[$slug];
}
get_header();
require get_template_directory().'/template-parts/service-layout.php';
get_footer();
