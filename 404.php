<?php
if (!defined('ABSPATH')) exit;
get_header();
?>
<section class="hd-404" aria-labelledby="hd-404-title">
  <div class="hd-404-orbit hd-404-orbit-one" aria-hidden="true"></div>
  <div class="hd-404-orbit hd-404-orbit-two" aria-hidden="true"></div>
  <div class="hd-404-bunch hd-404-bunch-left" aria-hidden="true"><i></i><i></i><i></i></div>
  <div class="hd-404-bunch hd-404-bunch-right" aria-hidden="true"><i></i><i></i><i></i></div>

  <div class="hd-wrap hd-404-inner">
    <div class="hd-404-number" aria-hidden="true">
      <span>4</span>
      <span class="hd-404-zero"><i></i></span>
      <span>4</span>
    </div>

    <div class="hd-404-copy">
      <span class="hd-404-kicker">Oops — one balloon got away</span>
      <h1 id="hd-404-title">This page floated away.</h1>
      <p>The celebration is still on. Head back home, explore our balloon decor services, or search for what you need.</p>

      <div class="hd-404-actions">
        <a class="hd-btn" href="<?php echo esc_url(home_url('/')); ?>">Back to Home <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
        <a class="hd-404-secondary" href="<?php echo esc_url(home_url('/#services')); ?>">Explore Services</a>
      </div>

      <form class="hd-404-search" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
        <label class="screen-reader-text" for="hd-404-search-field">Search the website</label>
        <i class="fa-solid fa-magnifying-glass" aria-hidden="true"></i>
        <input id="hd-404-search-field" type="search" name="s" placeholder="Search services, ideas, or articles…" value="<?php echo esc_attr(get_search_query()); ?>">
        <button type="submit" aria-label="Search"><i class="fa-solid fa-arrow-right" aria-hidden="true"></i></button>
      </form>

      <nav class="hd-404-links" aria-label="Helpful links">
        <a href="<?php echo esc_url(hd_local_url('services/balloons-for-birthdays')); ?>"><i class="fa-solid fa-cake-candles" aria-hidden="true"></i><span>Birthday Balloons</span></a>
        <a href="<?php echo esc_url(hd_local_url('services/wedding-balloons')); ?>"><i class="fa-solid fa-heart" aria-hidden="true"></i><span>Wedding Decor</span></a>
        <a href="<?php echo esc_url(hd_local_url('contact')); ?>"><i class="fa-solid fa-envelope" aria-hidden="true"></i><span>Contact Us</span></a>
      </nav>
    </div>
  </div>
</section>
<?php get_footer(); ?>
