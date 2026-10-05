<?php
if (!defined('ABSPATH') || empty($city)) return;
$location_service_groups = [
    ['Celebrations', 'Decor for your special moments', [
        ['balloons-for-birthdays', 'Birthday balloons', 'cake-candles'],
        ['wedding-balloons', 'Wedding balloon decor', 'heart'],
        ['baby-shower-balloons', 'Baby shower balloons', 'gift'],
        ['bridal-shower-balloons', 'Bridal shower balloons', 'heart'],
        ['engagement-balloons', 'Engagement balloons', 'heart'],
        ['anniversary-balloons', 'Anniversary balloons', 'calendar-days'],
        ['baptism-balloons', 'Baptism balloons', 'gift'],
        ['bar-mitzvah-balloons', 'Bar / Bat Mitzvah balloons', 'sparkles'],
    ]],
    ['Decor & rentals', 'Build the look for your venue', [
        ['balloon-arch-garland', 'Balloon arches & garlands', 'panorama'],
        ['balloon-and-flower-decoration', 'Balloon & flower decor', 'palette'],
        ['balloon-ceiling-decor', 'Balloon ceiling decor', 'arrow-up'],
        ['backdrop-rental', 'Backdrop rental', 'panorama'],
        ['number-rental', 'Marquee number rental', 'hashtag'],
    ]],
    ['Events & holidays', 'From brand events to seasonal parties', [
        ['corporate-event-balloons', 'Corporate event balloons', 'file-contract'],
        ['graduation-balloons', 'Graduation balloons', 'sparkles'],
        ['christmas-balloons', 'Christmas balloons', 'gift'],
        ['valentines-day-balloons', 'Valentine’s Day balloons', 'heart'],
        ['halloween-balloons', 'Halloween balloons', 'wand-magic-sparkles'],
    ]],
];
?>
<section class="location-section location-services-catalog" id="location-services" aria-labelledby="location-services-title">
  <div class="hd-wrap">
    <div class="location-catalog-heading">
      <span class="eyebrow">Choose your decor</span>
      <?php if ($is_city): ?>
      <h2 id="location-services-title"><?php echo esc_html('Balloon Decor & Rentals in '.$city); ?></h2>
      <p><?php echo esc_html('Explore all our services available in '.$city.'. Choose your occasion or the decor you have in mind to see ideas and details.'); ?></p>
      <?php else: ?>
      <h2 id="location-services-title"><?php echo esc_html($section['title']); ?></h2>
      <p><?php echo esc_html($section['paragraphs'][0] ?? ''); ?></p>
      <?php endif; ?>
    </div>
    <div class="location-catalog-groups">
      <?php foreach ($location_service_groups as [$group_title, $group_description, $services]): ?>
        <div class="location-catalog-group">
          <div class="location-catalog-group-heading"><h3><?php echo esc_html($group_title); ?></h3><p><?php echo esc_html($group_description); ?></p></div>
          <ul class="location-catalog-links">
            <?php foreach ($services as [$slug, $label, $icon]): ?>
              <li><a href="<?php echo esc_url(hd_local_url('services/'.$slug)); ?>"><span class="location-catalog-icon" aria-hidden="true"><i class="fa-solid fa-<?php echo esc_attr($icon); ?>"></i></span><span><?php echo esc_html($label); ?></span><i class="fa-solid fa-arrow-right location-catalog-arrow" aria-hidden="true"></i></a></li>
            <?php endforeach; ?>
          </ul>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
