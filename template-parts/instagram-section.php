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
      <a class="hd-instagram-link" href="https://www.instagram.com/happydaytoronto/" target="_blank" rel="noopener noreferrer">
        <i class="fa-brands fa-instagram" aria-hidden="true"></i>
        <span>@happydaytoronto</span>
        <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
      </a>
    </header>
    <div class="hd-instagram-feed">
      <script defer async src="https://cdn.trustindex.io/loader-feed.js?b5e0cc3777e4799777766b8de82"></script>
    </div>
  </div>
</section>
