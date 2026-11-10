<?php
if(!defined('ABSPATH')) exit;

/**
 * Front-end asset trimming.
 *
 * YITH Product Add-ons enqueues the whole single-product stack (jQuery UI,
 * selectWoo, variations, underscore, dashicons, its own CSS and icon font)
 * on every page, and CF7 loads Cloudflare Turnstile up front even though the
 * quote form sits at the bottom. Keep the store stack on store pages only and
 * hand Turnstile to assets/site.js, which loads it next to the form.
 */
function hd_is_store_page(){
  return function_exists('is_woocommerce')&&(is_woocommerce()||is_cart()||is_checkout()||is_account_page());
}

function hd_trim_frontend_assets(){
  if(is_admin()) return;
  wp_dequeue_script('cloudflare-turnstile');
  if(hd_is_store_page()) return;
  foreach(['yith_wapo_front','wc-single-product','wc-add-to-cart-variation','selectWoo','jquery-ui-datepicker','jquery-ui-progressbar','wp-util'] as $handle){
    wp_dequeue_script($handle);
  }
  foreach(['yith_wapo_front','yith-plugin-fw-icon-font','wc-ppcp-mini-cart-buttons'] as $handle){
    wp_dequeue_style($handle);
  }
  if(!is_admin_bar_showing()) wp_dequeue_style('dashicons');
}
add_action('wp_enqueue_scripts','hd_trim_frontend_assets',100);
/* Some of these are enqueued late, after wp_enqueue_scripts has run. */
add_action('wp_footer','hd_trim_frontend_assets',1);
