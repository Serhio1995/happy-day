<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <?php wp_head(); ?>
</head>
<body id="top" <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="site-header">
  <div class="header-brand-bar">
    <div class="hd-wrap header-brand-bar-inner">
      <span><i class="fa-solid fa-location-dot" aria-hidden="true"></i> Toronto &amp; the GTA</span>
      <span class="header-brand-message">Custom decor <i></i> Thoughtful setup <i></i> Photo-ready moments</span>
      <a href="mailto:happydaytorontoballoons@gmail.com"><i class="fa-solid fa-envelope" aria-hidden="true"></i> Let’s plan your event</a>
    </div>
  </div>
  <div class="header-main">
    <div class="hd-wrap header-row">
      <div class="site-branding"><?php if (has_custom_logo()) { the_custom_logo(); } else { ?><a class="site-logo" href="<?php echo esc_url(home_url('/')); ?>">HAPPY DAY<span>TORONTO</span></a><?php } ?></div>
      <nav class="site-nav" id="site-nav" aria-label="Primary navigation">
        <div class="mobile-menu-top">
          <div class="mobile-menu-logo"><?php if(has_custom_logo()){the_custom_logo();}else{?><a class="site-logo" href="<?php echo esc_url(home_url('/')); ?>">HAPPY DAY<span>TORONTO</span></a><?php } ?></div>
          <span>Explore Happy Day</span>
        </div>
        <?php wp_nav_menu(['theme_location'=>'primary','container'=>false,'fallback_cb'=>'hd_fallback_menu']); ?>
        <div class="mobile-menu-bottom">
          <a class="mobile-menu-phone" href="tel:+16475275505"><i class="fa-solid fa-phone" aria-hidden="true"></i><span><small>Call us</small>647-527-5505</span></a>
          <a class="hd-btn mobile-menu-quote" href="<?php echo esc_url(hd_local_url('contact')); ?>">Request a Quote <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
        </div>
      </nav>
      <div class="header-actions">
        <a class="phone icon-link" href="tel:+16475275505"><i class="fa-solid fa-phone" aria-hidden="true"></i><span>647-527-5505</span></a>
        <a class="hd-btn" href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>">Request a Quote <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
        <button class="mobile-toggle" aria-controls="site-nav" aria-expanded="false" aria-label="Open menu"><span class="mobile-toggle-lines" aria-hidden="true"><i></i><i></i></span><span class="screen-reader-text">Open menu</span></button>
      </div>
    </div>
  </div>
</header>
<main class="site-main">
