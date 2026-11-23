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

/* Font Awesome's two subset fonts are only discovered after the CSS is
   parsed; preload them so icons don't wait on that chain. */
function hd_preload_icon_fonts(){
  $base=get_template_directory_uri().'/assets/vendor/fontawesome/webfonts/';
  foreach(['fa-solid-900.woff2','fa-brands-400.woff2'] as $font){
    printf("<link rel=\"preload\" href=\"%s\" as=\"font\" type=\"font/woff2\" crossorigin>\n",esc_url($base.$font));
  }
}
add_action('wp_head','hd_preload_icon_fonts',2);

/* Styles for below-the-fold widgets (quote form, WhatsApp button, chat widget) don't need
   to block the first paint; load them without blocking. Trustindex CSS must
   stay blocking: its scripts lay out the reviews and Instagram feed on init
   and break if the stylesheet arrives later. */
function hd_async_style_tag($tag,$handle){
  if(is_admin()) return $tag;
  $async=in_array($handle,['contact-form-7','ht_ctc_main_css','hdc-widget'],true);
  if(!$async||strpos($tag,"media='all'")===false) return $tag;
  $deferred=str_replace("media='all'","media='print' onload=\"this.media='all'\"",$tag);
  return $deferred.'<noscript>'.$tag.'</noscript>';
}
add_filter('style_loader_tag','hd_async_style_tag',10,2);

/* jQuery is only used by the WhatsApp button script, which already loads in
   the footer, and no inline script calls it. Moving it out of <head> takes
   about 30 KB off the render-blocking path. Store pages keep it in <head>
   for WooCommerce and YITH. */
function hd_jquery_to_footer(){
  if(is_admin()||hd_is_store_page()) return;
  $scripts=wp_scripts();
  foreach(['jquery','jquery-core','jquery-migrate'] as $handle){
    if(isset($scripts->registered[$handle])) $scripts->add_data($handle,'group',1);
  }
}
add_action('wp_enqueue_scripts','hd_jquery_to_footer',1);
