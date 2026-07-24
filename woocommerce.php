<?php
if(!defined('ABSPATH')) exit;
get_header();
$is_product_view=function_exists('is_product')&&is_product();
$is_shop_view=function_exists('is_shop')&&is_shop();
$is_order_received=function_exists('is_order_received_page')&&is_order_received_page();
$title=$is_order_received?'Thank You — Your Order Is Confirmed':($is_product_view?get_the_title():($is_shop_view?'Balloon Decor Shop in Toronto & the GTA':woocommerce_page_title(false)));
$kicker=$is_order_received?'Your celebration is officially in motion':($is_product_view?'Made for memorable moments':($is_shop_view?'Balloon decorations for Toronto celebrations':'Thoughtful details for every celebration'));
$intro=$is_product_view
  ?'A special detail selected to make your celebration feel even more personal.'
  :($is_order_received
    ?'We have received your order. Keep the order number below handy while our team reviews the celebration details and prepares the next step.'
    :($is_shop_view
    ?'Shop balloon decorations, garlands, arches, backdrops and personalized event displays for birthdays, showers, weddings, corporate events and other celebrations across Toronto and the GTA.'
    :'Discover celebration-ready details curated in the joyful Happy Day Toronto style.'));
?>
<article class="hd-commerce-page <?php echo $is_order_received?'hd-thankyou-page':($is_product_view?'hd-product-page':'hd-shop-page'); ?>">
  <header class="commerce-hero"><div class="hd-wrap commerce-hero-inner"><div><span><?php echo esc_html($kicker); ?></span><h1><?php echo esc_html($title); ?></h1><p><?php echo esc_html($intro); ?></p></div><?php get_template_part('template-parts/store-nav'); ?></div><span class="commerce-hero-curve" aria-hidden="true"></span></header>
  <section class="commerce-content"><div class="hd-wrap woocommerce-shell">
    <?php woocommerce_content(); ?>
    <?php if($is_shop_view): ?>
      <section class="hd-shop-guide" aria-labelledby="hd-shop-guide-title">
        <div class="hd-shop-guide-copy">
          <span>Designed around your moment</span>
          <h2 id="hd-shop-guide-title">A balloon decoration shop built around your celebration</h2>
          <p>Happy Day Toronto brings online ordering and custom event styling together. Browse balloon decor packages for a ready starting point, then choose the details available for that product, such as colour palettes or a personalized inscription.</p>
          <p>Our shop is designed for customers planning celebrations in Toronto and across the Greater Toronto Area. Product pages explain what is included, while our team can confirm event-date availability, setup requirements and any location-specific details before the order is finalized.</p>
        </div>
        <div class="hd-shop-guide-points" aria-label="Shopping benefits">
          <article><i class="fa-solid fa-palette" aria-hidden="true"></i><div><h3>Choose your look</h3><p>Select from available palettes or request custom colours on eligible products.</p></div></article>
          <article><i class="fa-solid fa-wand-magic-sparkles" aria-hidden="true"></i><div><h3>Add personal details</h3><p>Selected decorations can include names, short messages or event wording.</p></div></article>
          <article><i class="fa-solid fa-location-dot" aria-hidden="true"></i><div><h3>Made for local events</h3><p>Created for homes, venues and business celebrations across Toronto and the GTA.</p></div></article>
        </div>
      </section>

      <section class="hd-shop-faq" aria-labelledby="hd-shop-faq-title">
        <header class="section-head"><span class="eyebrow">Ordering made simple</span><h2 id="hd-shop-faq-title">Shopping for balloon decorations</h2><p>Quick answers about selecting and ordering products from the Happy Day Toronto shop.</p></header>
        <div class="faq-list">
          <details open><summary>Are the balloon decorations ready-made or customizable?</summary><p>Each product provides a clear starting design. Available customization depends on the item and may include a preset colour palette, a custom colour request, or a short personalized inscription. The selectable options shown on the product page are the options available for online ordering.</p></details>
          <details><summary>How do I choose the right balloon decor package?</summary><p>Start with the location and purpose of the display. A backdrop works well for photos, a garland can frame a dessert table, and an arch can define an entrance. Review the product description, dimensions and included elements, then contact us before ordering if your venue has unusual access or installation rules.</p></details>
          <details><summary>Can I order online for an event in Toronto or the GTA?</summary><p>Yes. The shop is intended for celebrations in Toronto and the Greater Toronto Area. Availability can depend on your event date, exact address, installation requirements and venue access, so provide accurate event details during checkout and contact us if your location or schedule needs confirmation.</p></details>
          <details><summary>What should I check before placing an order?</summary><p>Confirm the event date, venue address, selected colours, quantity and any personalized wording. Also review what the listed price includes. Delivery, installation, rentals and removal can vary by product and location and should not be assumed unless they are stated in the product description or confirmed by our team.</p></details>
        </div>
      </section>
    <?php endif; ?>
  </div></section>
</article>
<?php get_footer(); ?>
