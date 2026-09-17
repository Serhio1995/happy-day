<?php
if(!defined('ABSPATH')||empty($service_data['gallery_category'])) return;

$gallery_category=$service_data['gallery_category'];
$gallery_items=function_exists('hd_get_gallery_items_by_category')
  ?hd_get_gallery_items_by_category($gallery_category,6)
  :[];
if(!$gallery_items) return;

$gallery_filters=function_exists('hd_get_gallery_filters')?hd_get_gallery_filters():[];
$gallery_label=$gallery_filters[$gallery_category]??'Balloon Decor';
$gallery_url=hd_local_url('gallery').'?filter='.rawurlencode($gallery_category);
?>
<section class="service-gallery-section soft"><div class="hd-wrap">
  <div class="section-head"><h2>Real <?php echo esc_html($gallery_label); ?> We’ve Installed</h2><p>A few photos from our gallery, filtered to this style of celebration.</p></div>
  <div class="service-gallery-grid">
    <?php foreach($gallery_items as $item):
      if(!wp_get_attachment_image_url($item['id'],'medium')) continue;
    ?>
      <a class="service-gallery-card" href="<?php echo esc_url($gallery_url); ?>">
        <?php echo wp_get_attachment_image($item['id'],'medium_large',false,[
          'loading'=>'lazy',
          'decoding'=>'async',
          'alt'=>$item['title'],
        ]); ?>
      </a>
    <?php endforeach; ?>
  </div>
  <a class="hd-btn service-gallery-cta" href="<?php echo esc_url($gallery_url); ?>">View all <?php echo esc_html($gallery_label); ?> photos <i class="fa-solid fa-arrow-right"></i></a>
</div></section>
