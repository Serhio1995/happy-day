<?php
if(!defined('ABSPATH')) exit;
$instagram_copy=hd_instagram_section_copy();
?>
<section class="hd-instagram-section" aria-labelledby="hd-instagram-title">
  <div class="hd-wrap">
    <header class="hd-instagram-head">
      <div>
        <span class="eyebrow"><?php echo esc_html($instagram_copy['eyebrow'] ?? 'Fresh from Instagram'); ?></span>
        <h2 id="hd-instagram-title"><?php echo esc_html($instagram_copy['title']); ?></h2>
        <p><?php echo esc_html($instagram_copy['text']); ?></p>
      </div>
      <a class="hd-instagram-link" href="<?php echo esc_url(hd_instagram_url()); ?>" target="_blank" rel="noopener noreferrer">
        <i class="fa-brands fa-instagram" aria-hidden="true"></i>
        <span><?php echo esc_html(hd_instagram_handle()); ?></span>
        <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
      </a>
    </header>
    <div class="hd-instagram-feed">
      <?php echo do_shortcode('[trustindex-feed-instagram]'); ?>
    </div>
  </div>
</section>
