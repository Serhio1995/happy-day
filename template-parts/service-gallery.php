<?php
if(!defined('ABSPATH')) return;

$service_slug=get_post_field('post_name',get_queried_object_id());
$gallery_match=function_exists('hd_get_gallery_category_for_service')
  ?hd_get_gallery_category_for_service($service_slug)
  :null;
if(!$gallery_match) return;

$gallery_category=$gallery_match['slug'];
$gallery_label=$gallery_match['title'];

$gallery_items=function_exists('hd_get_gallery_items_by_category')
  ?hd_get_gallery_items_by_category($gallery_category,6)
  :[];
if(!$gallery_items) return;

$gallery_url=hd_local_url('gallery').'?filter='.rawurlencode($gallery_category);
?>
<section class="service-gallery-section soft"><div class="hd-wrap">
  <div class="section-head"><h2>Real <?php echo esc_html($gallery_label); ?> We’ve Installed</h2><p>A few photos from our gallery, filtered to this style of celebration.</p></div>
  <div class="service-gallery-grid">
    <?php foreach($gallery_items as $item):
      $full=wp_get_attachment_image_url($item['id'],'full');
      if(!$full) continue;
    ?>
      <button class="service-gallery-card" type="button"
        data-full="<?php echo esc_url($full); ?>"
        data-title="<?php echo esc_attr($item['title']); ?>"
        data-event="<?php echo esc_attr($item['event']??''); ?>"
        aria-label="<?php echo esc_attr('View '.$item['title']); ?>">
        <?php echo wp_get_attachment_image($item['id'],'medium_large',false,[
          'loading'=>'lazy',
          'decoding'=>'async',
          'alt'=>$item['title'],
        ]); ?>
        <span class="service-gallery-card-icon" aria-hidden="true"><i class="fa-solid fa-expand"></i></span>
      </button>
    <?php endforeach; ?>
  </div>
  <a class="hd-btn service-gallery-cta" href="<?php echo esc_url($gallery_url); ?>">View all <?php echo esc_html($gallery_label); ?> photos <i class="fa-solid fa-arrow-right"></i></a>
</div>
<dialog class="hd-gallery-lightbox" aria-label="Photo viewer">
  <div class="hd-gallery-lightbox-inner">
    <button class="hd-gallery-lightbox-close" type="button" aria-label="Close image viewer"><i class="fa-solid fa-xmark"></i></button>
    <button class="hd-gallery-lightbox-nav hd-gallery-lightbox-prev" type="button" aria-label="Previous image"><i class="fa-solid fa-chevron-left"></i></button>
    <figure><img src="" alt=""><figcaption><small></small><strong></strong></figcaption></figure>
    <button class="hd-gallery-lightbox-nav hd-gallery-lightbox-next" type="button" aria-label="Next image"><i class="fa-solid fa-chevron-right"></i></button>
  </div>
</dialog>
</section>
