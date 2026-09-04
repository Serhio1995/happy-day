<?php get_header(); ?>
<div class="contact-page">
  <section class="contact-main"><div class="hd-wrap contact-layout">
    <div class="contact-intro"><span class="contact-intro-kicker">Your celebration starts here</span><h2>Let’s Make It Happen.</h2><p>Tell us what you are celebrating, where it is happening, and the atmosphere you want to create. We’ll help shape the colours, setup, and details into something that feels entirely yours.</p>
      <div class="direct-contact"><span class="direct-intro">Prefer a quick conversation?</span><div class="direct-links"><a class="direct-email" href="<?php echo esc_url(hd_email_href()); ?>"><i class="fa-solid fa-envelope" aria-hidden="true"></i><span><?php echo esc_html(hd_email()); ?></span></a><a class="direct-phone" href="<?php echo esc_url(hd_phone_href()); ?>"><i class="fa-solid fa-phone" aria-hidden="true"></i><span><?php echo esc_html(hd_phone()); ?></span></a></div></div>
    </div>
    <div class="contact-quote-form hd-cf7-card"><?php hd_render_quote_form(); ?></div>
  </div></section>

</div>
<?php get_footer(); ?>
