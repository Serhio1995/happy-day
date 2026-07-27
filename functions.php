<?php
if (!defined('ABSPATH')) exit;
function hd_setup(){
  add_theme_support('title-tag'); add_theme_support('post-thumbnails'); add_theme_support('custom-logo'); add_theme_support('align-wide');
  add_theme_support('woocommerce');
  add_theme_support('wc-product-gallery-zoom');
  add_theme_support('wc-product-gallery-lightbox');
  add_theme_support('wc-product-gallery-slider');
  register_nav_menus(['primary'=>'Primary Menu','footer'=>'Footer Menu']);
}
add_action('after_setup_theme','hd_setup');

/* Keep the rental offering visually separate from balloon decoration services
   without requiring a second WordPress menu level for a single link. */
function hd_primary_menu_item_classes($classes,$item,$args,$depth){
  if(($args->theme_location??'')!=='primary'||$depth!==1) return $classes;
  $path=(string)wp_parse_url((string)$item->url,PHP_URL_PATH);
  $is_backdrop=str_ends_with(untrailingslashit($path),'/backdrop-rental')
    ||sanitize_title(wp_strip_all_tags((string)$item->title))==='backdrop-rental';
  if($is_backdrop) $classes[]='hd-rental-menu-item';
  return $classes;
}
add_filter('nav_menu_css_class','hd_primary_menu_item_classes',10,4);

/* XAMPP installs this site in a directory containing a space. WordPress writes
   an absolute encoded substitution into .htaccess in that case, which Apache
   treats as a literal path and returns its own 404 page. Keep the generated
   RewriteBase, but use a directory-relative front-controller substitution.
   The filter is deliberately limited to localhost and does not affect prod. */
function hd_fix_local_xampp_rewrite_rules($rules){
  $host=(string)wp_parse_url(home_url('/'),PHP_URL_HOST);
  $path=rawurldecode((string)wp_parse_url(home_url('/'),PHP_URL_PATH));
  if(!in_array($host,['localhost','127.0.0.1'],true)||strpos($path,' ')===false) return $rules;
  return preg_replace('~^RewriteRule \.\s+\S+/index\.php\s+\[L\]$~m','RewriteRule . index.php [L]',$rules);
}
add_filter('mod_rewrite_rules','hd_fix_local_xampp_rewrite_rules');

/* Preserve links created before posts moved under /blog/. This only runs for
   genuine root-level 404 requests whose slug belongs to a published post. */
function hd_redirect_legacy_post_permalink(){
  if(!is_404()||is_admin()) return;
  $request_path=trim(rawurldecode((string)wp_parse_url($_SERVER['REQUEST_URI']??'',PHP_URL_PATH)),'/');
  $home_path=trim(rawurldecode((string)wp_parse_url(home_url('/'),PHP_URL_PATH)),'/');
  if($home_path!==''&&str_starts_with($request_path,$home_path.'/')) $request_path=substr($request_path,strlen($home_path)+1);
  if($request_path===''||str_contains($request_path,'/')) return;
  $post=get_page_by_path(sanitize_title($request_path),OBJECT,'post');
  if(!$post instanceof WP_Post||$post->post_status!=='publish') return;
  wp_safe_redirect(get_permalink($post),301,'Happy Day legacy post URL');
  exit;
}
add_action('template_redirect','hd_redirect_legacy_post_permalink',1);

function hd_assets(){
  $fa=get_template_directory().'/assets/vendor/fontawesome/css/fontawesome.min.css';
  wp_enqueue_style('font-awesome-core',get_template_directory_uri().'/assets/vendor/fontawesome/css/fontawesome.min.css',[],(string) filemtime($fa));
  wp_enqueue_style('font-awesome-solid',get_template_directory_uri().'/assets/vendor/fontawesome/css/solid.min.css',['font-awesome-core'],'7.3.0');
  wp_enqueue_style('font-awesome-brands',get_template_directory_uri().'/assets/vendor/fontawesome/css/brands.min.css',['font-awesome-core'],'7.3.0');
  wp_enqueue_style('happy-day',get_stylesheet_uri(),[],(string) filemtime(get_stylesheet_directory().'/style.css'));
  $header_css=get_template_directory().'/assets/header.css';
  wp_enqueue_style('happy-day-header',get_template_directory_uri().'/assets/header.css',['happy-day'],(string) filemtime($header_css));
  wp_enqueue_script('happy-day',get_template_directory_uri().'/assets/site.js',[],(string) filemtime(get_template_directory().'/assets/site.js'),true);
  $floating_cart_js=get_template_directory().'/assets/floating-cart.js';
  if(class_exists('WooCommerce')) wp_enqueue_script('happy-day-floating-cart',get_template_directory_uri().'/assets/floating-cart.js',[],(string) filemtime($floating_cart_js),true);
  wp_script_add_data('happy-day','strategy','defer');
  if(function_exists('is_woocommerce')&&(is_woocommerce()||is_cart()||is_checkout()||is_account_page())){
    $woo_css=get_template_directory().'/assets/woocommerce.css';
    wp_enqueue_style('happy-day-woocommerce',get_template_directory_uri().'/assets/woocommerce.css',['happy-day'],(string) filemtime($woo_css));
  }
  if(function_exists('is_shop')&&(is_shop()||is_product_category())){
    $shop_filter_js=get_template_directory().'/assets/shop-filter.js';
    wp_enqueue_script('happy-day-shop-filter',get_template_directory_uri().'/assets/shop-filter.js',[],(string)filemtime($shop_filter_js),true);
    wp_localize_script('happy-day-shop-filter','hdShopFilter',[
      'ajaxUrl'=>admin_url('admin-ajax.php'),
      'nonce'=>wp_create_nonce('hd_shop_filter'),
    ]);
    wp_script_add_data('happy-day-shop-filter','strategy','defer');
  }
  if(is_404()){
    $not_found_css=get_template_directory().'/assets/404.css';
    wp_enqueue_style('happy-day-404',get_template_directory_uri().'/assets/404.css',['happy-day-header'],(string) filemtime($not_found_css));
  }
  if(is_page_template('page-legal.php')){
    $legal_css=get_template_directory().'/assets/legal.css';
    wp_enqueue_style('happy-day-legal',get_template_directory_uri().'/assets/legal.css',['happy-day-header'],(string) filemtime($legal_css));
  }
  if(is_page_template('page-service.php')){
    wp_enqueue_style('leaflet',get_template_directory_uri().'/assets/vendor/leaflet/leaflet.css',[],'1.9.4');
    wp_enqueue_script('leaflet',get_template_directory_uri().'/assets/vendor/leaflet/leaflet.js',[],'1.9.4',true);
    wp_enqueue_script('happy-day-gta-map',get_template_directory_uri().'/assets/gta-map.js',['leaflet'],(string) filemtime(get_template_directory().'/assets/gta-map.js'),true);
    wp_script_add_data('leaflet','strategy','defer');
    wp_script_add_data('happy-day-gta-map','strategy','defer');
  }
}
add_action('wp_enqueue_scripts','hd_assets');

function hd_page_uses_woocommerce_content(){
  if(function_exists('is_woocommerce')&&(is_woocommerce()||is_cart()||is_checkout()||is_account_page())) return true;
  if(!is_singular()) return false;
  $post=get_post();
  $content=$post instanceof WP_Post?$post->post_content:'';
  if(strpos($content,'<!-- wp:woocommerce/')!==false) return true;
  foreach(['products','product','product_page','add_to_cart','woocommerce_cart','woocommerce_checkout','woocommerce_my_account'] as $shortcode){
    if(has_shortcode($content,$shortcode)) return true;
  }
  return false;
}
function hd_trim_woocommerce_frontend_assets(){
  if(is_admin()||hd_page_uses_woocommerce_content()) return;
  foreach(['wc-blocks-style','woocommerce-layout','woocommerce-smallscreen','woocommerce-general','woocommerce-inline'] as $handle) wp_dequeue_style($handle);
  wp_deregister_style('wc-blocks-style');
  foreach(['wc-jquery-blockui','wc-add-to-cart','wc-js-cookie','woocommerce','wc-cart-fragments','sourcebuster-js','wc-order-attribution'] as $handle) wp_dequeue_script($handle);
}
add_action('wp_enqueue_scripts','hd_trim_woocommerce_frontend_assets',100);
add_action('wp_print_styles','hd_trim_woocommerce_frontend_assets',1000);
add_filter('body_class',function($classes){
  if(hd_page_uses_woocommerce_content()) return $classes;
  remove_action('wp_footer','wc_no_js');
  return array_values(array_diff($classes,['woocommerce-no-js','woocommerce-js']));
},1000);

/* Persistent WooCommerce cart shortcut with AJAX-updated count and subtotal. */
function hd_floating_cart_markup(){
  if(!function_exists('WC')||!WC()->cart) return '';
  $count=(int)WC()->cart->get_cart_contents_count();
  $subtotal=$count?WC()->cart->get_cart_subtotal():'Cart is empty';
  $label=sprintf(_n('%d item in cart','%d items in cart',$count,'happy-day'),$count);
  $remove_url=class_exists('WC_AJAX')?WC_AJAX::get_endpoint('remove_from_cart'):'';
  ob_start(); ?>
  <div class="hd-floating-cart-shell<?php echo $count?' has-items':' is-empty'; ?>" data-remove-url="<?php echo esc_url($remove_url); ?>">
    <button class="hd-floating-cart" type="button" aria-label="<?php echo esc_attr($label); ?>" aria-expanded="false" aria-controls="hd-mini-cart-panel">
      <span class="hd-floating-cart-icon" aria-hidden="true"><i class="fa-solid fa-bag-shopping"></i></span>
      <span class="hd-floating-cart-copy"><strong>Your cart</strong><small><?php echo wp_kses_post($subtotal); ?></small></span>
      <b class="hd-floating-cart-count" aria-hidden="true"><?php echo esc_html($count); ?></b>
    </button>
    <button class="hd-mini-cart-backdrop" type="button" aria-label="Close cart preview" hidden></button>
    <section id="hd-mini-cart-panel" class="hd-mini-cart-panel" role="dialog" aria-modal="true" aria-label="Cart preview" hidden>
      <header><div><span>YOUR HAPPY DAY CART</span><h2>Ready to celebrate</h2></div><button class="hd-mini-cart-close" type="button" aria-label="Close cart preview"><i class="fa-solid fa-xmark"></i></button></header>
      <div class="hd-mini-cart-items">
        <?php foreach(WC()->cart->get_cart() as $cart_item_key=>$cart_item):
          $product=$cart_item['data']??null;
          if(!$product instanceof WC_Product||!$product->exists()) continue;
          $product_url=$product->is_visible()?$product->get_permalink($cart_item):'';
          $name=$product->get_name();
          ?>
          <article class="hd-mini-cart-item">
            <?php if($product_url): ?><a class="hd-mini-cart-image" href="<?php echo esc_url($product_url); ?>"><?php echo wp_kses_post($product->get_image('woocommerce_thumbnail',['loading'=>'lazy'])); ?></a><?php else: ?><span class="hd-mini-cart-image"><?php echo wp_kses_post($product->get_image('woocommerce_thumbnail',['loading'=>'lazy'])); ?></span><?php endif; ?>
            <div class="hd-mini-cart-item-copy"><?php if($product_url): ?><a href="<?php echo esc_url($product_url); ?>"><?php echo esc_html($name); ?></a><?php else: ?><strong><?php echo esc_html($name); ?></strong><?php endif; ?><small><?php echo esc_html((int)$cart_item['quantity']); ?> × <?php echo wp_kses_post(WC()->cart->get_product_price($product)); ?></small></div>
            <a class="hd-mini-cart-remove" href="<?php echo esc_url(wc_get_cart_remove_url($cart_item_key)); ?>" data-cart-item-key="<?php echo esc_attr($cart_item_key); ?>" aria-label="<?php echo esc_attr(sprintf('Remove %s from cart',$name)); ?>"><i class="fa-solid fa-xmark"></i></a>
          </article>
        <?php endforeach; ?>
      </div>
      <footer><div class="hd-mini-cart-subtotal"><span>Subtotal</span><strong><?php echo wp_kses_post($subtotal); ?></strong></div><a class="hd-mini-cart-view" href="<?php echo esc_url(wc_get_cart_url()); ?>">View full cart <i class="fa-solid fa-arrow-right"></i></a></footer>
    </section>
  </div>
  <?php return (string)ob_get_clean();
}
function hd_floating_cart(){
  if(is_admin()||!class_exists('WooCommerce')) return;
  echo hd_floating_cart_markup(); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
}
add_action('wp_footer','hd_floating_cart',28);
function hd_floating_cart_fragment($fragments){
  $fragments['.hd-floating-cart-shell']=hd_floating_cart_markup();
  return $fragments;
}
add_filter('woocommerce_add_to_cart_fragments','hd_floating_cart_fragment');


/* CSS hero backgrounds do not receive WordPress image srcset handling. Prefer
 * the generated WebP sibling and preload only the above-the-fold image. */
function hd_hero_image_url($attachment_id){
  $attachment_id=(int) $attachment_id;
  $url=wp_get_attachment_image_url($attachment_id,'full');
  $path=get_attached_file($attachment_id);
  if(!$url||!$path) return $url;
  $webp_path=preg_replace('/\.[^.]+$/','.webp',$path);
  if($webp_path&&is_file($webp_path)) return preg_replace('/\.[^.\/]+$/','.webp',$url);
  return $url;
}
function hd_current_hero_image_id(){
  if(is_front_page()) return 16;
  if(!is_page()) return 0;
  $slug=(string) get_post_field('post_name',get_queried_object_id());
  $data_file=get_template_directory().'/inc/services/'.$slug.'.php';
  if(!is_file($data_file)) return 0;
  $data=require $data_file;
  return (int)($data['hero_image']??0);
}
function hd_preload_hero_image(){
  $url=hd_hero_image_url(hd_current_hero_image_id());
  if(!$url) return;
  $type=str_ends_with(strtolower((string)wp_parse_url($url,PHP_URL_PATH)),'.webp')?'image/webp':'image/jpeg';
  printf("<link rel=\"preload\" as=\"image\" href=\"%s\" type=\"%s\" fetchpriority=\"high\">\n",esc_url($url),esc_attr($type));
  echo "<link rel=\"preconnect\" href=\"https://cdn.trustindex.io\" crossorigin>\n";
}
add_action('wp_head','hd_preload_hero_image',1);

/* Service pages are file-driven. Keep their layout even if an editor plugin
 * resets the saved Page Template field while updating SEO metadata. */
function hd_is_service_page(){
  if(!is_page()) return false;
  $slug=(string) get_post_field('post_name',get_queried_object_id());
  $data_file=get_template_directory().'/inc/services/'.$slug.'.php';
  return is_file($data_file);
}
function hd_service_page_template($template){
  if(!hd_is_service_page()) return $template;
  $service_template=get_template_directory().'/page-service.php';
  return file_exists($service_template)?$service_template:$template;
}
add_filter('template_include','hd_service_page_template',30);

/* Give the shared Instagram feed relevant editorial context on every service
 * page instead of repeating one generic heading site-wide. */
function hd_instagram_section_copy(){
  $default=[
    'title'=>'See What We’ve Been Celebrating',
    'text'=>'Real balloon setups, recent events and new ideas from Happy Day Toronto.',
  ];
  if(!is_page()) return $default;
  $slug=(string)get_post_field('post_name',get_queried_object_id());
  $service_copy=[
    'balloons-for-birthdays'=>[
      'title'=>'Birthday Ideas Made to Be Remembered',
      'text'=>'See colourful birthday backdrops, number displays and playful balloon details created for celebrations of every age.',
    ],
    'wedding-balloons'=>[
      'title'=>'Wedding Details Worth Saving',
      'text'=>'Explore elegant balloon installations designed for ceremonies, receptions, entrances and picture-perfect wedding moments.',
    ],
    'corporate-event-balloons'=>[
      'title'=>'Polished Events, Real Brand Moments',
      'text'=>'See branded balloon decor, professional backdrops and statement installations created for business events and launches.',
    ],
    'anniversary-balloons'=>[
      'title'=>'Another Year, Beautifully Celebrated',
      'text'=>'Discover romantic anniversary setups shaped with meaningful colours, refined details and photo-ready focal points.',
    ],
    'baby-shower-balloons'=>[
      'title'=>'Sweet Welcomes We’ve Loved Creating',
      'text'=>'Browse soft palettes, charming backdrops and thoughtful balloon details made for joyful baby shower celebrations.',
    ],
    'bridal-shower-balloons'=>[
      'title'=>'Beautiful Moments Before “I Do”',
      'text'=>'See elegant bridal shower balloon decor created for brunches, gift tables, photo areas and time with the bride-to-be.',
    ],
    'baptism-balloons'=>[
      'title'=>'Meaningful Days, Thoughtfully Styled',
      'text'=>'Explore gentle balloon palettes and graceful decor created for baptisms, christenings and treasured family gatherings.',
    ],
    'christmas-balloons'=>[
      'title'=>'Holiday Setups Full of Cheer',
      'text'=>'See festive arches, seasonal backdrops and Christmas balloon details created for warm gatherings and holiday events.',
    ],
    'valentines-day-balloons'=>[
      'title'=>'Romantic Details, Made for the Moment',
      'text'=>'Browse Valentine’s Day balloon installations styled for proposals, dinners, storefronts and heartfelt surprises.',
    ],
    'bar-mitzvah-balloons'=>[
      'title'=>'Milestone Celebrations with Personality',
      'text'=>'See custom Bar Mitzvah balloon decor designed around meaningful themes, family traditions and memorable party moments.',
    ],
    'backdrop-rental'=>[
      'title'=>'Photo-Ready Backdrops in Real Spaces',
      'text'=>'Explore backdrop installations styled for birthdays, showers, weddings, corporate events and standout photo moments.',
    ],
    'balloon-arch-garland'=>[
      'title'=>'Arches & Garlands in Every Style',
      'text'=>'See organic garlands, entrance arches and balloon features tailored to different palettes, venues and celebrations.',
    ],
    'balloon-ceiling-decor'=>[
      'title'=>'Look Up—the Celebration Is Everywhere',
      'text'=>'Discover ceiling balloon installations that bring colour, movement and a more immersive atmosphere to indoor events.',
    ],
    'graduation-balloons'=>[
      'title'=>'Big Achievements, Bold Celebrations',
      'text'=>'Browse graduation backdrops, school-colour displays and custom balloon details made to honour every graduate.',
    ],
    'engagement-balloons'=>[
      'title'=>'The “Yes” Moments We Love',
      'text'=>'See romantic engagement setups created for proposals, intimate gatherings and the first photos of a new chapter.',
    ],
    'halloween-balloons'=>[
      'title'=>'Spooky Setups with Serious Style',
      'text'=>'Explore playful Halloween arches, dramatic palettes and themed balloon installations made for memorable seasonal events.',
    ],
    'balloon-and-flower-decoration'=>[
      'title'=>'Where Balloons Meet Florals',
      'text'=>'See soft floral accents and custom balloon arrangements combined for elegant, layered and naturally beautiful event decor.',
    ],
  ];
  return $service_copy[$slug]??$default;
}

function hd_woocommerce_setup(){
  remove_action('woocommerce_before_main_content','woocommerce_output_content_wrapper',10);
  remove_action('woocommerce_after_main_content','woocommerce_output_content_wrapper_end',10);
  remove_action('woocommerce_before_main_content','woocommerce_breadcrumb',20);
  remove_action('woocommerce_sidebar','woocommerce_get_sidebar',10);
}
add_action('wp','hd_woocommerce_setup');
add_filter('loop_shop_columns',function(){return 3;});
add_filter('loop_shop_per_page',function(){return 12;});
add_filter('woocommerce_show_page_title','__return_false');
function hd_shop_category_filter(){
  if(!(is_shop()||is_product_category())) return;
  $categories=get_terms([
    'taxonomy'=>'product_cat',
    'hide_empty'=>true,
    'exclude'=>[(int)get_option('default_product_cat')],
    'orderby'=>'name',
    'order'=>'ASC',
  ]);
  if(is_wp_error($categories)||!$categories) return;
  $current=is_product_category()?(int)get_queried_object_id():0;
  $icons=[
    'backdrops-displays'=>'fa-panorama',
    'balloon-decor-packages'=>'fa-wand-magic-sparkles',
    'celebration-add-ons'=>'fa-gift',
  ];
  echo '<nav class="hd-shop-category-filter" aria-label="Filter products by category">';
  echo '<div class="hd-shop-category-filter-title"><i class="fa-solid fa-sliders" aria-hidden="true"></i><span><small>Browse the shop</small><strong>Filter by category</strong></span></div>';
  echo '<div class="hd-shop-category-options">';
  echo '<a class="'.($current===0?'is-active':'').'" href="'.esc_url(wc_get_page_permalink('shop')).'" data-category="" aria-pressed="'.($current===0?'true':'false').'"><i class="fa-solid fa-border-all" aria-hidden="true"></i><span>All products</span></a>';
  foreach($categories as $category){
    $url=get_term_link($category);
    if(is_wp_error($url)) continue;
    $icon=$icons[$category->slug]??'fa-circle-dot';
    echo '<a class="'.($current===(int)$category->term_id?'is-active':'').'" href="'.esc_url($url).'" data-category="'.esc_attr($category->slug).'" aria-pressed="'.($current===(int)$category->term_id?'true':'false').'"><i class="fa-solid '.esc_attr($icon).'" aria-hidden="true"></i><span>'.esc_html(html_entity_decode($category->name,ENT_QUOTES,'UTF-8')).'</span><b>'.esc_html($category->count).'</b></a>';
  }
  echo '</div></nav>';
}
add_action('woocommerce_before_shop_loop','hd_shop_category_filter',5);

function hd_ajax_filter_shop_products(){
  check_ajax_referer('hd_shop_filter','nonce');
  $category=isset($_POST['category'])?sanitize_title(wp_unslash($_POST['category'])):'';
  $orderby=isset($_POST['orderby'])?wc_clean(wp_unslash($_POST['orderby'])):'menu_order';
  $page=max(1,isset($_POST['page'])?absint($_POST['page']):1);
  $per_page=(int)apply_filters('loop_shop_per_page',12);
  $ordering=WC()->query->get_catalog_ordering_args($orderby,'');
  $tax_query=WC()->query->get_tax_query();
  if($category){
    $tax_query[]=[
      'taxonomy'=>'product_cat',
      'field'=>'slug',
      'terms'=>$category,
    ];
  }
  $args=[
    'post_type'=>'product',
    'post_status'=>'publish',
    'posts_per_page'=>$per_page,
    'paged'=>$page,
    'orderby'=>$ordering['orderby'],
    'order'=>$ordering['order'],
    'meta_query'=>WC()->query->get_meta_query(),
    'tax_query'=>$tax_query,
  ];
  if(!empty($ordering['meta_key'])) $args['meta_key']=$ordering['meta_key'];
  $products=new WP_Query($args);
  global $wp_query;
  $original_query=$wp_query;
  $wp_query=$products;
  wc_setup_loop([
    'name'=>'products',
    'is_paginated'=>true,
    'total'=>$products->found_posts,
    'total_pages'=>$products->max_num_pages,
    'per_page'=>$per_page,
    'current_page'=>$page,
  ]);
  ob_start();
  if($products->have_posts()){
    woocommerce_product_loop_start();
    while($products->have_posts()){
      $products->the_post();
      wc_get_template_part('content','product');
    }
    woocommerce_product_loop_end();
  }else{
    echo '<div class="hd-shop-filter-empty"><i class="fa-solid fa-balloon" aria-hidden="true"></i><h2>No products found</h2><p>Try another category or view all products.</p></div>';
  }
  $products_html=(string)ob_get_clean();
  ob_start();
  if($products->max_num_pages>1) woocommerce_pagination();
  $pagination_html=(string)ob_get_clean();
  ob_start();
  wc_get_template('loop/result-count.php',[
    'total'=>$products->found_posts,
    'per_page'=>$per_page,
    'current'=>$products->post_count,
    'orderedby'=>'',
  ]);
  $count_html=(string)ob_get_clean();
  wp_reset_postdata();
  wc_reset_loop();
  $wp_query=$original_query;
  wp_send_json_success([
    'products'=>$products_html,
    'pagination'=>$pagination_html,
    'count'=>$count_html,
  ]);
}
add_action('wp_ajax_hd_filter_shop_products','hd_ajax_filter_shop_products');
add_action('wp_ajax_nopriv_hd_filter_shop_products','hd_ajax_filter_shop_products');
function hd_shop_card_excerpt(){
  global $product;
  if(!$product) return;
  $text=wp_strip_all_tags($product->get_short_description());
  if(!$text) return;
  echo '<div class="hd-product-card-excerpt">'.esc_html(wp_trim_words($text,18,'…')).'</div>';
}
add_action('woocommerce_after_shop_loop_item_title','hd_shop_card_excerpt',7);
function hd_shop_card_actions_open(){echo '<div class="hd-product-card-actions">';}
function hd_shop_card_actions_close(){
  echo '<a class="hd-product-details-link" href="'.esc_url(get_permalink()).'">View details <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a></div>';
}
add_action('woocommerce_after_shop_loop_item','hd_shop_card_actions_open',7);
add_action('woocommerce_after_shop_loop_item','hd_shop_card_actions_close',15);
function hd_sale_flash_label($html,$post,$product){
  if(!($product instanceof WC_Product)) return $html;
  $discount=0;
  if($product->is_type('variable')){
    foreach($product->get_children() as $variation_id){
      $variation=wc_get_product($variation_id);
      if(!$variation) continue;
      $regular=(float)$variation->get_regular_price();
      $sale=(float)$variation->get_sale_price();
      if($regular>0&&$sale>0&&$sale<$regular) $discount=max($discount,(int)round((($regular-$sale)/$regular)*100));
    }
  }else{
    $regular=(float)$product->get_regular_price();
    $sale=(float)$product->get_sale_price();
    if($regular>0&&$sale>0&&$sale<$regular) $discount=(int)round((($regular-$sale)/$regular)*100);
  }
  $label=$discount>0?sprintf('Save %d%%',$discount):'Special offer';
  return '<span class="onsale">'.esc_html($label).'</span>';
}
add_filter('woocommerce_sale_flash','hd_sale_flash_label',10,3);

/* Conditional presentation for the free YITH add-ons used on the demo product. */
function hd_yith_product_options_assets(){
  if(!function_exists('is_product')||!is_product(188)) return;
  $file=get_template_directory().'/assets/yith-product-options.js';
  wp_enqueue_script('happy-day-yith-options',get_template_directory_uri().'/assets/yith-product-options.js',[],(string)filemtime($file),true);
}
add_action('wp_enqueue_scripts','hd_yith_product_options_assets',35);

/* Make YITH add-ons discoverable from the WooCommerce product editor. */
function hd_product_personalization_tab($tabs){
  if(!function_exists('YITH_WAPO_DB')) return $tabs;
  $tabs['hd_personalization']=[
    'label'=>'Personalization',
    'target'=>'hd_personalization_product_data',
    'class'=>[],
    'priority'=>75,
  ];
  return $tabs;
}
add_filter('woocommerce_product_data_tabs','hd_product_personalization_tab',30);

function hd_product_personalization_panel(){
  global $post,$wpdb;
  if(!$post||!function_exists('YITH_WAPO_DB')) return;
  $product=wc_get_product($post->ID);
  $block_ids=$product?YITH_WAPO_DB()->yith_wapo_get_blocks_by_product($product,null,false):[];
  $block_ids=array_values(array_unique(array_map('absint',(array)$block_ids)));
  $blocks_url=admin_url('admin.php?page=yith_wapo_panel&tab=blocks');
  ?>
  <div id="hd_personalization_product_data" class="panel woocommerce_options_panel hidden hd-personalization-panel">
    <div class="hd-personalization-intro">
      <span class="dashicons dashicons-art"></span>
      <div><h3>Product personalization</h3><p>Manage colour palettes, inscriptions, upgrades, and other customer choices connected to this product.</p></div>
    </div>
    <?php if($block_ids): ?>
      <div class="hd-personalization-status is-configured"><span class="dashicons dashicons-yes-alt"></span><strong>Personalization is configured</strong><small><?php echo esc_html(count($block_ids)); ?> option block<?php echo count($block_ids)===1?'':'s'; ?> currently applies to this product.</small></div>
      <div class="hd-personalization-blocks">
      <?php foreach($block_ids as $block_id):
        $block=$wpdb->get_row($wpdb->prepare("SELECT id,name,visibility FROM {$wpdb->prefix}yith_wapo_blocks WHERE id=%d",$block_id));
        if(!$block) continue;
        $addon_rows=$wpdb->get_results($wpdb->prepare("SELECT settings FROM {$wpdb->prefix}yith_wapo_addons WHERE block_id=%d AND visibility=1 ORDER BY priority,id",$block_id));
        $addon_titles=[];
        foreach($addon_rows as $addon_row){$settings=maybe_unserialize($addon_row->settings);if(!empty($settings['title']))$addon_titles[]=wp_strip_all_tags($settings['title']);}
        $edit_url=add_query_arg(['page'=>'yith_wapo_panel','tab'=>'blocks','block_id'=>$block_id],admin_url('admin.php'));
        ?>
        <section class="hd-personalization-block">
          <div class="hd-personalization-block-head"><div><span>YITH option block</span><h4><?php echo esc_html($block->name?:'Untitled personalization block'); ?></h4></div><b class="<?php echo $block->visibility?'is-live':'is-off'; ?>"><?php echo $block->visibility?'Active':'Disabled'; ?></b></div>
          <?php if($addon_titles): ?><ul><?php foreach($addon_titles as $title): ?><li><span class="dashicons dashicons-yes"></span><?php echo esc_html($title); ?></li><?php endforeach; ?></ul><?php else: ?><p class="hd-empty-options">This block does not contain any fields yet.</p><?php endif; ?>
          <a class="button button-primary" href="<?php echo esc_url($edit_url); ?>"><span class="dashicons dashicons-edit"></span>Edit personalization options</a>
        </section>
      <?php endforeach; ?>
      </div>
      <p class="hd-personalization-help"><span class="dashicons dashicons-info-outline"></span><span>Changes are saved inside YITH and automatically appear on this product page. Colour circles are generated from clear English option names such as <strong>Red</strong>, <strong>Navy &amp; Gold</strong>, or <strong>Blush &amp; Ivory</strong>.</span></p>
    <?php else: ?>
      <div class="hd-personalization-status"><span class="dashicons dashicons-info-outline"></span><strong>No personalization connected</strong><small>This product currently has no customer-selectable options.</small></div>
      <div class="hd-personalization-empty"><h4>Add options to this product</h4><p>Create a YITH option block, then choose <strong>Specific products</strong> in its display rules and select this product.</p><a class="button button-primary" href="<?php echo esc_url($blocks_url); ?>"><span class="dashicons dashicons-plus-alt2"></span>Open product options</a></div>
    <?php endif; ?>
  </div>
  <?php
}
add_action('woocommerce_product_data_panels','hd_product_personalization_panel');

function hd_product_personalization_admin_css(){
  $screen=get_current_screen();
  if(!$screen||$screen->post_type!=='product') return;
  ?>
  <style>
    #woocommerce-product-data ul.wc-tabs li.hd_personalization_options a:before{content:"\f309";font-family:dashicons;color:#d94f80}
    #woocommerce-product-data ul.wc-tabs li.hd_personalization_options.active a{color:#c83f73}
    .hd-personalization-panel{padding:24px!important;color:#253250}.hd-personalization-intro{display:flex;align-items:flex-start;gap:14px;margin-bottom:20px}.hd-personalization-intro>.dashicons{display:grid;place-items:center;width:42px;height:42px;border-radius:12px;background:linear-gradient(135deg,#2b477f,#725080);color:#fff;box-shadow:4px 5px 0 #f5bfd1}.hd-personalization-intro h3{margin:1px 0 4px;font-size:18px}.hd-personalization-intro p{margin:0;color:#65708a;line-height:1.45}.hd-personalization-status{display:grid;grid-template-columns:28px 1fr;align-items:center;padding:15px 17px;border:1px solid #eadde4;border-radius:13px;background:#fff8fa}.hd-personalization-status>.dashicons{grid-row:1/3;color:#d94f80}.hd-personalization-status strong{font-size:13px}.hd-personalization-status small{margin-top:2px;color:#727c91}.hd-personalization-status.is-configured{border-color:#dce8df;background:#f7fcf8}.hd-personalization-status.is-configured>.dashicons{color:#39965a}.hd-personalization-blocks{display:grid;gap:14px;margin-top:16px}.hd-personalization-block{padding:18px;border:1px solid #e7dce2;border-radius:14px 32px 14px 14px;background:#fff;box-shadow:0 9px 25px rgba(37,61,120,.07)}.hd-personalization-block-head{display:flex;align-items:flex-start;justify-content:space-between;gap:15px}.hd-personalization-block-head span{color:#d94f80;font-size:9px;font-weight:800;letter-spacing:.12em;text-transform:uppercase}.hd-personalization-block h4{margin:3px 0 0;font-size:15px}.hd-personalization-block-head b{padding:5px 8px;border-radius:20px;background:#e8f7ec;color:#2f8550;font-size:10px}.hd-personalization-block-head b.is-off{background:#f1f1f3;color:#777}.hd-personalization-block ul{display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:7px 18px;margin:16px 0;padding:13px 15px;border-radius:10px;background:#fff7fa}.hd-personalization-block li{display:flex;align-items:center;gap:5px;margin:0;color:#48536d;font-size:12px}.hd-personalization-block li .dashicons{width:15px;height:15px;color:#df5686;font-size:15px}.hd-personalization-block .button,.hd-personalization-empty .button{display:inline-flex;align-items:center;gap:5px}.hd-personalization-block .button .dashicons,.hd-personalization-empty .button .dashicons{width:16px;height:16px;font-size:16px}.hd-personalization-help{display:flex;align-items:flex-start;gap:7px;margin:16px 2px 0;color:#68738a;font-size:11px}.hd-personalization-help .dashicons{color:#df5686}.hd-personalization-empty{margin-top:16px;padding:22px;border:1px dashed #e4cbd5;border-radius:14px;background:#fffafd}.hd-personalization-empty h4{margin:0 0 7px;font-size:15px}.hd-personalization-empty p{max-width:650px;margin:0 0 14px;color:#647089;line-height:1.55}.hd-empty-options{color:#7c8495;font-style:italic}@media(max-width:782px){.hd-personalization-block ul{grid-template-columns:1fr}}
  </style>
  <?php
}
add_action('admin_head-post.php','hd_product_personalization_admin_css');
add_action('admin_head-post-new.php','hd_product_personalization_admin_css');

/**
 * Render the single Contact Form 7 quote form used throughout the site.
 * Keeping the ID in an option lets the form be edited safely in the CF7 admin.
 */
function hd_quote_form_id(){
  $id=(int)get_option('hd_cf7_quote_form_id');
  if($id&&get_post($id)) return $id;
  $form=get_page_by_title('Happy Day Balloon Quote',OBJECT,'wpcf7_contact_form');
  if($form){
    update_option('hd_cf7_quote_form_id',(int)$form->ID,false);
    return (int)$form->ID;
  }
  return 0;
}

function hd_render_quote_form($event_type=''){
  $id=hd_quote_form_id();
  if(!$id||!shortcode_exists('contact-form-7')){
    echo '<div class="hd-form-unavailable"><p>Please email <a href="mailto:happydaytorontoballoons@gmail.com">happydaytorontoballoons@gmail.com</a> or call <a href="tel:+16475275505">647-527-5505</a>.</p></div>';
    return;
  }
  printf(
    '<div class="hd-cf7-shell" data-event-type="%1$s">%2$s</div>',
    esc_attr($event_type),
    do_shortcode('[contact-form-7 id="'.(int)$id.'" title="Happy Day Balloon Quote"]')
  );
}
function hd_fallback_menu(){$contact=get_page_by_path('contact');echo '<ul><li><a href="'.esc_url(home_url('/')).'">Home</a></li><li><a href="'.esc_url(home_url('/#services')).'">Services</a></li><li><a href="'.esc_url(home_url('/#about')).'">About</a></li><li><a href="'.esc_url($contact?get_permalink($contact):home_url('/')).'">Contact</a></li></ul>';}
function hd_local_url($path){$clean=trim((string)$path,'/');$page=get_page_by_path($clean);return $page?get_permalink($page):home_url('/'.$clean.'/');}

/* Keep legacy custom menu links portable between localhost, LAN preview and production. */
function hd_portable_menu_link($atts){
  if(empty($atts['href'])) return $atts;
  $base=untrailingslashit(home_url());
  $atts['href']=str_replace(
    ['http://localhost/Happy%20Day','http://localhost/Happy Day'],
    $base,
    $atts['href']
  );
  return $atts;
}
add_filter('nav_menu_link_attributes','hd_portable_menu_link');

function hd_login_assets(){
  $login_css=get_template_directory().'/assets/login.css';
  wp_enqueue_style('happy-day-login',get_template_directory_uri().'/assets/login.css',[],(string) filemtime($login_css));
  $logo_id=(int) get_theme_mod('custom_logo');
  if(!$logo_id) $logo_id=13;
  $logo=wp_get_attachment_image_url($logo_id,'full');
  if($logo) wp_add_inline_style('happy-day-login','.login h1 a{background-image:url("'.esc_url($logo).'")}');
}
add_action('login_enqueue_scripts','hd_login_assets');
add_filter('login_headerurl',function(){return home_url('/');});
add_filter('login_headertext',function(){return get_bloginfo('name');});
add_filter('login_message',function($message){
  if(strpos($message,'hd-login-welcome')!==false) return $message;
  return '<div class="hd-login-welcome"><span>Welcome to Happy Day</span><strong>Let’s create something memorable.</strong></div>'.$message;
});

/* Small, low-risk WordPress hardening and frontend cleanup. */
function hd_clean_frontend_head(){
  remove_action('wp_head','rsd_link');
  remove_action('wp_head','wlwmanifest_link');
  remove_action('wp_head','wp_generator');
  remove_action('wp_head','wp_shortlink_wp_head',10);
  remove_action('template_redirect','wp_shortlink_header',11);
  remove_action('wp_head','wp_oembed_add_discovery_links');
  remove_action('wp_head','print_emoji_detection_script',7);
  remove_action('wp_print_styles','print_emoji_styles');
  remove_filter('the_content_feed','wp_staticize_emoji');
  remove_filter('comment_text_rss','wp_staticize_emoji');
  remove_filter('wp_mail','wp_staticize_emoji_for_email');
}
add_action('init','hd_clean_frontend_head');
add_filter('xmlrpc_methods',function($methods){unset($methods['pingback.ping'],$methods['pingback.extensions.getPingbacks']);return $methods;});
add_filter('wp_headers',function($headers){unset($headers['X-Pingback']);return $headers;});
add_action('send_headers',function(){if(function_exists('header_remove')) header_remove('X-Powered-By');});
add_filter('login_errors',function(){return 'The login details are incorrect.';});
add_action('pre_ping',function(&$links){$home=home_url();foreach($links as $key=>$link){if(strpos($link,$home)===0) unset($links[$key]);}});
