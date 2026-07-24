<?php if(!defined('ABSPATH')) exit; ?>
<nav class="store-quick-nav" aria-label="Store navigation">
  <a class="<?php echo function_exists('is_shop')&&is_shop()?'is-active':''; ?>" href="<?php echo esc_url(function_exists('wc_get_page_permalink')?wc_get_page_permalink('shop'):home_url('/')); ?>"><i class="fa-solid fa-bag-shopping" aria-hidden="true"></i><span>Shop</span></a>
  <a class="<?php echo function_exists('is_cart')&&is_cart()?'is-active':''; ?>" href="<?php echo esc_url(function_exists('wc_get_cart_url')?wc_get_cart_url():home_url('/')); ?>"><i class="fa-solid fa-cart-shopping" aria-hidden="true"></i><span>Cart</span><?php if(function_exists('WC')&&WC()->cart): ?><b><?php echo esc_html(WC()->cart->get_cart_contents_count()); ?></b><?php endif; ?></a>
</nav>
