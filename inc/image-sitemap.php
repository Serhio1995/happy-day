<?php
/**
 * Feed Yoast's XML sitemap the images that only live in PHP templates.
 *
 * Yoast builds each URL's <image:image> list by scanning the stored
 * post_content. The Gallery page and every service page are rendered
 * entirely from templates, so their portfolio and marketing photos never
 * reach the sitemap and Google Images has no sitemap signal to discover
 * them. This hooks `wpseo_sitemap_urlimages` and returns the same
 * attachments the templates output, de-duplicated against anything Yoast
 * already found. If Yoast is inactive the filter never runs.
 */

if (!defined('ABSPATH')) exit;

function hd_sitemap_urlimages($images,$post_id){
  if(!is_array($images)) $images=[];
  $post=get_post($post_id);
  if(!$post||$post->post_type!=='page') return $images;

  $extra=[];

  /* Gallery page: manager-defined albums, or the packaged demo set. */
  if($post->post_name==='gallery'||get_page_template_slug($post_id)==='page-gallery.php'){
    if(function_exists('hd_gallery_display_items')){
      foreach(hd_gallery_display_items() as $item){
        $id=(int)($item['id']??0);
        if(!$id) continue;
        $src=wp_get_attachment_image_url($id,'full');
        if(!$src) continue;
        $title=trim((string)($item['title']??''));
        $extra[]=['src'=>$src,'title'=>$title,'alt'=>$title];
      }
    }
  }

  /* File-driven service pages: hero image plus every section photo. */
  $service_file=get_template_directory().'/inc/services/'.$post->post_name.'.php';
  if(is_file($service_file)){
    $data=require $service_file;
    if(is_array($data)){
      $hero_alt=trim((string)($data['hero_alt']??$data['title']??''));
      if(!empty($data['hero_asset'])&&function_exists('hd_theme_asset_image_url')){
        $extra[]=['src'=>hd_theme_asset_image_url($data['hero_asset']),'title'=>'','alt'=>$hero_alt];
      }elseif(!empty($data['hero_image'])){
        $src=wp_get_attachment_image_url((int)$data['hero_image'],'full');
        if($src) $extra[]=['src'=>$src,'title'=>'','alt'=>$hero_alt];
      }
      foreach($data['sections']??[] as $section){
        $alt=trim((string)($section['image_alt']??$section['title']??''));
        if(!empty($section['image_asset'])&&function_exists('hd_theme_asset_image_url')){
          $extra[]=['src'=>hd_theme_asset_image_url($section['image_asset']),'title'=>'','alt'=>$alt];
        }elseif(!empty($section['image'])){
          $src=wp_get_attachment_image_url((int)$section['image'],'full');
          if($src) $extra[]=['src'=>$src,'title'=>'','alt'=>$alt];
        }
      }
    }
  }

  if(!$extra) return $images;

  $seen=[];
  foreach($images as $img){
    if(!empty($img['src'])) $seen[$img['src']]=true;
  }
  foreach($extra as $img){
    if(empty($img['src'])||isset($seen[$img['src']])) continue;
    $seen[$img['src']]=true;
    $images[]=$img;
  }
  return $images;
}
add_filter('wpseo_sitemap_urlimages','hd_sitemap_urlimages',10,2);
