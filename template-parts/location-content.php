<?php
if (!defined('ABSPATH') || empty($service_data)) return;
$city=$service_data['area']['name']??'Toronto & the GTA';
$is_city=!empty($service_data['area']);
// Each page owns a separate set of section images.
$location_photos = [];
foreach (array_unique($service_data['photo_ids'] ?? []) as $photo_id) {
    if (!wp_get_attachment_image_url((int) $photo_id, 'large')) continue;
    $location_photos[] = ['id' => (int) $photo_id, 'title' => get_the_title($photo_id)];
}
if (!$location_photos && !$is_city && function_exists('hd_gallery_display_items')) {
    $location_photos = array_values(array_filter(hd_gallery_display_items(),
        static fn($item) => !empty($item['id']) && wp_get_attachment_image_url($item['id'], 'large')
    ));
}
$location_photo_index = 0;
?>
<section class="service-hero">
  <img class="service-hero-bg" src="<?php echo esc_url(hd_theme_asset_image_url($service_data['hero_asset'])); ?>" width="<?php echo $is_city?1672:1000; ?>" height="<?php echo $is_city?941:1333; ?>" alt="<?php echo esc_attr($service_data['hero_alt']??$service_data['title']); ?>" loading="eager" fetchpriority="high" decoding="async">
  <div class="hd-wrap service-hero-content"><h1><?php echo esc_html($service_data['title']); ?></h1><?php foreach($service_data['intro'] as $p): ?><p><?php echo wp_kses_post($p); ?></p><?php endforeach; ?><a class="hd-btn" href="#service-quote"><?php echo esc_html($service_data['hero_button']); ?> <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a></div>
</section>
<?php if (!empty($service_data['area_directory'])): $directory = $service_data['area_directory']; ?>
<section class="location-section location-area-directory" id="location-areas" aria-labelledby="location-areas-title">
  <div class="hd-wrap">
    <div class="location-catalog-heading"><span class="eyebrow">Find your area</span><h2 id="location-areas-title"><?php echo esc_html($directory['title']); ?></h2><p><?php echo esc_html($directory['text']); ?></p></div>
    <ul class="location-area-grid">
      <?php foreach ($directory['cards'] as $card):
          $card_url = $card['path'] === '' ? home_url('/') : hd_local_url('service-areas/'.$card['path']);
      ?>
        <li class="location-area-card<?php echo $card['path'] === '' ? ' is-featured' : ''; ?>">
          <?php echo wp_get_attachment_image((int) $card['image_id'], 'medium_large', false, [
              'alt' => '', 'loading' => 'lazy', 'decoding' => 'async',
              'sizes' => '(max-width: 600px) 100vw, (max-width: 900px) 50vw, 25vw',
          ]); ?>
          <div class="location-area-card-body">
            <span class="location-area-region"><?php echo esc_html($card['region']); ?></span>
            <h3><?php echo esc_html($card['name']); ?></h3>
            <p><?php echo esc_html($card['text']); ?></p>
            <a class="location-area-link" href="<?php echo esc_url($card_url); ?>"><?php echo esc_html($card['label']); ?> <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
          </div>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>
<?php endif; ?>
<?php foreach ($service_data['sections'] as $index => $section):
    $section_class = $section['class'] ?? '';
    $is_services = strpos($section_class, 'service-options-section') !== false;
    $is_map = strpos($section_class, 'service-gta-section') !== false;
    if ($is_services) {
        require get_template_directory().'/template-parts/location-services.php';
        continue;
    }
    $section_id = 'location-detail-'.$index;
    $photo = (!$is_map && $location_photos)
        ? ($location_photos[$location_photo_index++] ?? null) : null;
?>
<section id="<?php echo esc_attr($section_id); ?>" class="service-content-section location-content-section <?php echo $index % 2 ? 'service-soft ' : ''; echo esc_attr($section_class); ?>">
  <div class="hd-wrap<?php echo $photo ? ' service-content-split' : ''; ?>">
    <div class="service-prose">
      <span class="eyebrow"><?php echo esc_html($is_map ? 'Areas we serve' : 'Your local celebration'); ?></span>
      <h2><?php echo esc_html($section['title']); ?></h2>
      <?php foreach ($section['paragraphs'] ?? [] as $paragraph): ?><p><?php echo wp_kses_post($paragraph); ?></p><?php endforeach; ?>
      <?php if (!empty($section['lead'])): ?><p class="service-list-lead"><strong><?php echo esc_html($section['lead']); ?></strong></p><?php endif; ?>
      <?php if (!empty($section['list'])): ?>
        <ul class="service-bullet-list">
          <?php foreach ($section['list'] as $item): ?><li><?php echo wp_kses_post($item); ?></li><?php endforeach; ?>
        </ul>
      <?php endif; ?>
      <?php if ($is_map) hd_render_service_area_links(); ?>
    </div>
    <?php if ($photo): ?>
      <figure class="service-section-photo location-section-photo">
        <?php echo wp_get_attachment_image((int) $photo['id'], 'large', false, [
            'alt' => $photo['title'], 'loading' => 'lazy', 'decoding' => 'async',
            'sizes' => '(max-width: 900px) 100vw, 45vw',
        ]); ?>
      </figure>
    <?php endif; ?>
  </div>
</section>
<?php if ($index === 0): ?>
<?php if(shortcode_exists('trustindex')): ?><section class="google-reviews-section service-reviews-section"><div class="hd-wrap"><?php echo do_shortcode('[trustindex no-registration=google]'); ?></div></section><?php endif; ?>
<?php endif; ?>
<?php endforeach; ?>
<section class="location-section location-budget" id="location-budget"><div class="hd-wrap"><div class="section-head"><span class="eyebrow">Plan with confidence</span><h2>What goes into your balloon decor quote?</h2><p>A custom quote reflects your design and the practical details of your venue. Share your budget range so we can recommend a suitable scale and layout.</p></div><div class="location-budget-grid"><article><span class="location-budget-icon" aria-hidden="true"><i class="fa-solid fa-palette"></i></span><h3>Design & materials</h3><p>Installation size, balloon colours and finishes, personalization, flowers, backdrops and number rentals shape the design cost.</p></article><article><span class="location-budget-icon" aria-hidden="true"><i class="fa-solid fa-location-dot"></i></span><h3>Delivery & installation</h3><p>Your event address, parking, loading access, elevators and the available setup window affect installation planning.</p></article><article><span class="location-budget-icon" aria-hidden="true"><i class="fa-solid fa-arrow-rotate-left"></i></span><h3>Rentals & removal</h3><p>Tell us whether the venue requires same-day teardown. Confirm rental returns, removal timing and all inclusions in your written quote.</p></article></div><a class="text-link" href="#service-quote">Get a quote for your event <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a></div></section>
