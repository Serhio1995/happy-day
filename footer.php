</main>
<?php if(!hd_is_service_page()&&!is_front_page()) get_template_part('template-parts/instagram-section'); ?>
<footer class="site-footer">
  <div class="footer-balloons footer-balloons-left" aria-hidden="true"><i></i><i></i><i></i></div>
  <div class="footer-balloons footer-balloons-right" aria-hidden="true"><i></i><i></i><i></i></div>

  <div class="hd-wrap footer-cta">
    <div>
      <span>Have a celebration in mind?</span>
      <h2>Let’s make the space feel unforgettable.</h2>
    </div>
    <a class="hd-btn" href="<?php echo esc_url(hd_local_url('contact')); ?>">Request a Quote <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
  </div>

  <div class="hd-wrap footer-top">
    <div class="footer-brand">
      <div class="footer-logo"><?php if (has_custom_logo()) { the_custom_logo(); } else { ?>HAPPY DAY<br><small>TORONTO</small><?php } ?></div>
      <p>Custom balloon decoration designed around your moment, your colours, and your space.</p>
      <?php $hd_socials=hd_social_links(); if($hd_socials): ?>
      <div class="footer-socials">
        <?php foreach($hd_socials as $hd_social): ?>
        <a href="<?php echo esc_url($hd_social['url']); ?>" target="_blank" rel="noopener noreferrer" aria-label="<?php echo esc_attr(get_bloginfo('name').' on '.$hd_social['label']); ?>"><i class="<?php echo esc_attr($hd_social['icon']); ?>" aria-hidden="true"></i></a>
        <?php endforeach; ?>
      </div>
      <?php endif; ?>
    </div>

    <nav class="footer-column" aria-label="Footer navigation">
      <div class="footer-title">EXPLORE</div>
      <ul class="footer-links">
        <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
        <li><a href="<?php echo esc_url(hd_local_url('about')); ?>">About</a></li>
        <li><a href="<?php echo esc_url(hd_local_url('blog')); ?>">Blog</a></li>
        <li><a href="<?php echo esc_url(home_url('/#services')); ?>">All Services</a></li>
        <li><a href="<?php echo esc_url(hd_local_url('contact')); ?>">Contact</a></li>
      </ul>
    </nav>

    <nav class="footer-column footer-services" aria-label="Popular services">
      <div class="footer-title">POPULAR SERVICES</div>
      <ul class="footer-links">
        <li><a href="<?php echo esc_url(hd_local_url('services/balloons-for-birthdays')); ?>">Birthday Balloons</a></li>
        <li><a href="<?php echo esc_url(hd_local_url('services/wedding-balloons')); ?>">Wedding Decor</a></li>
        <li><a href="<?php echo esc_url(hd_local_url('services/balloon-arch-garland')); ?>">Arches &amp; Garlands</a></li>
        <li><a href="<?php echo esc_url(hd_local_url('services/backdrop-rental')); ?>">Backdrop Rental</a></li>
      </ul>
    </nav>

    <div class="footer-column footer-contact">
      <div class="footer-title">LET’S TALK</div>
      <p class="footer-contact-list">
        <a href="<?php echo esc_url(hd_phone_href()); ?>"><i class="fa-solid fa-phone" aria-hidden="true"></i><span><?php echo esc_html(hd_phone()); ?></span></a>
        <a href="<?php echo esc_url(hd_email_href()); ?>"><i class="fa-solid fa-envelope" aria-hidden="true"></i><span><?php echo esc_html(hd_email()); ?></span></a>
        <?php if(hd_address()): ?><span><i class="fa-solid fa-location-dot" aria-hidden="true"></i><span><?php echo esc_html(hd_address()); ?></span></span><?php endif; ?>
        <?php foreach(hd_hours_lines() as $hd_hours_line): ?><span><i class="fa-solid fa-clock" aria-hidden="true"></i><span><?php echo esc_html($hd_hours_line); ?></span></span><?php endforeach; ?>
      </p>
    </div>
  </div>

  <nav class="hd-wrap footer-policy-row" aria-label="Legal information">
    <span>Legal &amp; Policies</span>
    <div>
      <a href="<?php echo esc_url(hd_local_url('privacy-policy')); ?>"><i class="fa-solid fa-shield-halved" aria-hidden="true"></i> Privacy Policy</a>
      <a href="<?php echo esc_url(hd_local_url('terms-and-conditions')); ?>"><i class="fa-solid fa-file-contract" aria-hidden="true"></i> Terms &amp; Conditions</a>
      <a href="<?php echo esc_url(hd_local_url('refund-cancellation-policy')); ?>"><i class="fa-solid fa-arrow-rotate-left" aria-hidden="true"></i> Refund &amp; Cancellation</a>
    </div>
  </nav>

  <div class="footer-bottom"><div class="hd-wrap">
    <span>© <?php echo esc_html(wp_date('Y')); ?> Happy Day Toronto. All rights reserved.</span>
    <a href="#top" class="footer-to-top">Back to top <i class="fa-solid fa-arrow-up" aria-hidden="true"></i></a>
  </div></div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
