<?php
get_header();
$is_store_page=function_exists('is_cart')&&(is_cart()||is_checkout()||is_account_page());
if($is_store_page):
  while(have_posts()):the_post();
    $is_order_received=function_exists('is_order_received_page')&&is_order_received_page();
    $kicker=$is_order_received?'Your celebration is officially in motion':(is_cart()?'Your celebration basket':(is_checkout()?'Secure checkout':'Your Happy Day space'));
    $intro=$is_order_received?'We have received your order. Keep the order number below handy while our team reviews the celebration details and prepares the next step.':(is_cart()?'Review your selected items before checkout.':(is_checkout()?'Complete your details and we’ll take care of the next steps.':'View orders, update details, and manage your account.'));
    $store_title=$is_order_received?'Thank You — Your Order Is Confirmed':get_the_title();
?>
<article <?php post_class('hd-commerce-page'.($is_order_received?' hd-thankyou-page':'')); ?>>
  <header class="commerce-hero"><div class="hd-wrap commerce-hero-inner"><div><span><?php echo esc_html($kicker); ?></span><h1><?php echo esc_html($store_title); ?></h1><p><?php echo esc_html($intro); ?></p></div><?php get_template_part('template-parts/store-nav'); ?></div><span class="commerce-hero-curve" aria-hidden="true"></span></header>
  <section class="commerce-content"><div class="hd-wrap"><?php the_content(); ?></div></section>
</article>
<?php endwhile; else: ?>
<div class="hd-wrap page-shell"><?php while(have_posts()):the_post(); ?><article <?php post_class(); ?>><h1><?php the_title(); ?></h1><?php the_content(); ?></article><?php endwhile; ?></div>
<?php endif; get_footer(); ?>
