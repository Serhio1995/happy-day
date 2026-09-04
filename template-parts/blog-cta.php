<?php
/**
 * Call-to-action appended after every blog article by single.php.
 * Pulls the phone number from the Customizer contact helpers.
 */
if(!defined('ABSPATH')) exit;
$hd_cta_url=hd_local_url('contact');
?>
<aside class="hd-blog-cta" aria-labelledby="hd-blog-cta-title">
  <span class="hd-blog-cta-balloons" aria-hidden="true"><i></i><i></i><i></i><i></i></span>
  <span class="hd-blog-cta-tag" aria-hidden="true"><i class="fa-solid fa-sparkles"></i> Happy Day Toronto</span>
  <div class="hd-blog-cta-body">
    <p class="hd-blog-cta-eyebrow">Ready when you are</p>
    <h2 id="hd-blog-cta-title">Let&rsquo;s design this for your celebration.</h2>
    <p class="hd-blog-cta-text">Custom, colour-matched balloon installations for birthdays, weddings, corporate events and every moment worth marking &mdash; planned around your date, venue and palette across Toronto &amp; the GTA.</p>
    <div class="hd-blog-cta-actions">
      <a class="hd-btn" href="<?php echo esc_url($hd_cta_url); ?>">Request a Quote <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
      <?php if(hd_phone_href()): ?>
      <a class="hd-blog-cta-phone" href="<?php echo esc_url(hd_phone_href()); ?>"><i class="fa-solid fa-phone" aria-hidden="true"></i><span><?php echo esc_html(hd_phone()); ?></span></a>
      <?php endif; ?>
    </div>
  </div>
</aside>
