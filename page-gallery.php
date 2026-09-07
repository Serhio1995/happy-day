<?php
/**
 * Template Name: Gallery
 */
if (!defined('ABSPATH')) exit;

$fallback_gallery_items = function_exists('hd_fallback_gallery_items') ? hd_fallback_gallery_items() : [];
$fallback_filters = function_exists('hd_fallback_gallery_filters') ? hd_fallback_gallery_filters() : ['all'=>'All celebrations'];

$managed_gallery_items=function_exists('hd_get_managed_gallery_items')
  ?hd_get_managed_gallery_items()
  :[];
$gallery_items=$managed_gallery_items?:$fallback_gallery_items;

if($managed_gallery_items){
  $filters=['all'=>'All celebrations'];
  if(function_exists('hd_get_gallery_filters')){
    $filters+=hd_get_gallery_filters();
  }
}else{
  $filters=$fallback_filters;
}

/* Photos for the hero filmstrip, picked at random from the whole gallery on
   every request so the header always looks fresh. Rendered twice in the
   markup for a seamless vertical scroll loop. */
$hero_image_pool=array_values(array_unique(array_filter(array_map(
  static fn($item)=>(int)($item['id']??0),
  $gallery_items
))));
shuffle($hero_image_pool);
$hero_image_ids=array_slice($hero_image_pool,0,7);

$gallery_faqs=require get_template_directory().'/inc/gallery-faqs.php';

get_header();
?>
<div class="hd-gallery-page">
  <section class="hd-gallery-hero">
    <div class="hd-gallery-hero-orb hd-gallery-hero-orb-one" aria-hidden="true"></div>
    <div class="hd-gallery-hero-orb hd-gallery-hero-orb-two" aria-hidden="true"></div>
    <div class="hd-wrap hd-gallery-hero-grid">
      <div class="hd-gallery-hero-copy">
        <h1>Balloon Decoration<br>Ideas &amp; Real Photos</h1>
        <p>Browse real balloon decoration photos and ideas from Happy Day Toronto: balloon arches, garlands, backdrops and themed setups for birthdays, weddings, baby and bridal showers, corporate events and milestones across Toronto and the GTA.</p>
        <a class="hd-gallery-hero-link" href="<?php echo esc_url(home_url('/contact/')); ?>">
          Plan your balloon decor <span aria-hidden="true"><i class="fa-solid fa-arrow-right"></i></span>
        </a>
      </div>
    </div>
    <?php if ($hero_image_ids): ?>
    <div class="hd-gallery-hero-collage">
      <div class="hd-gallery-filmstrip-track">
        <?php for ($pass=0; $pass<2; $pass++): foreach ($hero_image_ids as $image_id): ?>
          <figure class="hd-gallery-frame"><?php echo wp_get_attachment_image($image_id,'large',false,[
            'loading'=>'lazy',
            'decoding'=>'async',
            'alt'=>'',
          ]); ?></figure>
        <?php endforeach; endfor; ?>
      </div>
      <span class="hd-gallery-collage-note"><b><?php echo esc_html(count($gallery_items)); ?>+</b><i>real balloon setups</i></span>
    </div>
    <?php endif; ?>
    <div class="hd-gallery-hero-curve" aria-hidden="true"></div>
  </section>

  <section class="hd-gallery-content" aria-labelledby="gallery-heading">
    <div class="hd-wrap">
      <header class="hd-gallery-heading">
        <div>
          <h2 id="gallery-heading">Browse Balloon Decoration Ideas by Celebration</h2>
        </div>
        <p>Every photo is a real balloon decoration we designed and installed. Filter the gallery by celebration — birthdays, weddings, baby and bridal showers, corporate events — or by style, such as balloon arches, garlands and backdrops.</p>
      </header>

      <div class="hd-gallery-filter-shell">
        <div class="hd-gallery-filter-row">
          <div class="hd-gallery-filters" role="group" aria-label="Filter gallery by event type">
            <?php foreach ($filters as $key=>$label):
              $count=$key==='all'?count($gallery_items):count(array_filter($gallery_items,static fn($item)=>in_array($key,$item['categories'],true)));
            ?>
              <button class="hd-gallery-filter<?php echo $key==='all'?' is-active':''; ?>" type="button" data-filter="<?php echo esc_attr($key); ?>" aria-pressed="<?php echo $key==='all'?'true':'false'; ?>">
                <span><?php echo esc_html($label); ?></span><small><?php echo esc_html((string)$count); ?></small>
              </button>
            <?php endforeach; ?>
          </div>
          <button class="hd-gallery-filter-next" type="button" aria-label="Show more gallery filters">
            <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
          </button>
        </div>
        <p class="hd-gallery-result-count" aria-live="polite">
          Showing <strong class="hd-gallery-visible-count"><?php echo esc_html(count($gallery_items)); ?></strong>
          of <strong class="hd-gallery-total-count"><?php echo esc_html(count($gallery_items)); ?></strong> completed setups
        </p>
      </div>

      <div class="hd-gallery-grid" id="hd-gallery-grid" data-initial-count="9" data-load-count="6">
        <?php foreach ($gallery_items as $index=>$item):
          $full=wp_get_attachment_image_url($item['id'],'full');
          if(!$full) continue;
        ?>
          <article class="hd-gallery-card hd-gallery-card-<?php echo esc_attr($item['shape']); ?>" data-categories="<?php echo esc_attr(implode(' ',$item['categories'])); ?>">
            <button class="hd-gallery-open" type="button"
              data-full="<?php echo esc_url($full); ?>"
              data-title="<?php echo esc_attr($item['title']); ?>"
              data-event="<?php echo esc_attr($item['event']); ?>"
              aria-label="<?php echo esc_attr('View '.$item['title']); ?>">
              <?php echo wp_get_attachment_image($item['id'],'large',false,[
                'loading'=>$index<3?'eager':'lazy',
                'decoding'=>'async',
                'alt'=>$item['title'],
              ]); ?>
              <span class="hd-gallery-card-shade" aria-hidden="true"></span>
              <span class="hd-gallery-card-copy">
                <small><?php echo esc_html($item['event']); ?></small>
                <strong><?php echo esc_html($item['title']); ?></strong>
              </span>
              <span class="hd-gallery-card-icon" aria-hidden="true"><i class="fa-solid fa-expand"></i></span>
            </button>
          </article>
        <?php endforeach; ?>
      </div>

      <div class="hd-gallery-empty" hidden>
        <h3>No balloon decor photos in this category yet.</h3>
        <p>Pick another filter to see more balloon decoration ideas.</p>
      </div>

      <div class="hd-gallery-more-wrap" hidden>
        <button class="hd-gallery-more" type="button" aria-controls="hd-gallery-grid" aria-expanded="false">
          <span>Show more balloon decor</span>
          <small><b class="hd-gallery-more-count">0</b> more</small>
          <i class="fa-solid fa-arrow-down" aria-hidden="true"></i>
        </button>
      </div>
    </div>
  </section>

  <?php if (!empty($gallery_faqs)): ?>
  <section class="service-faq">
    <div class="hd-wrap">
      <h2>Balloon Decoration Ideas: Frequently Asked Questions</h2>
      <div class="faq-list">
        <?php foreach ($gallery_faqs as $i=>$faq): ?>
          <details <?php echo $i===0?'open':''; ?>><summary><?php echo esc_html($faq['q']); ?></summary><p><?php echo wp_kses_post($faq['a']); ?></p></details>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
  <?php
  $faq_schema=[];
  foreach ($gallery_faqs as $faq){
    $faq_schema[]=[
      '@type'=>'Question',
      'name'=>wp_strip_all_tags($faq['q']),
      'acceptedAnswer'=>['@type'=>'Answer','text'=>wp_strip_all_tags($faq['a'])],
    ];
  }
  ?>
  <script type="application/ld+json"><?php echo wp_json_encode(['@context'=>'https://schema.org','@type'=>'FAQPage','mainEntity'=>$faq_schema],JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE); ?></script>
  <?php endif; ?>

  <section class="hd-gallery-cta">
    <div class="hd-wrap hd-gallery-cta-inner">
      <div><span>Seen balloon decor you love?</span><h2>Let’s Create Yours.</h2></div>
      <p>Tell us which balloon decoration ideas from our gallery caught your eye, plus your event type, venue and colours. We’ll design a custom balloon setup for your celebration in Toronto or the GTA.</p>
      <a href="<?php echo esc_url(home_url('/contact/')); ?>">Request a Quote <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
    </div>
  </section>

  <dialog class="hd-gallery-lightbox" aria-label="Gallery image viewer">
    <div class="hd-gallery-lightbox-inner">
      <button class="hd-gallery-lightbox-close" type="button" aria-label="Close image viewer"><i class="fa-solid fa-xmark"></i></button>
      <button class="hd-gallery-lightbox-nav hd-gallery-lightbox-prev" type="button" aria-label="Previous image"><i class="fa-solid fa-chevron-left"></i></button>
      <figure><img src="" alt=""><figcaption><small></small><strong></strong></figcaption></figure>
      <button class="hd-gallery-lightbox-nav hd-gallery-lightbox-next" type="button" aria-label="Next image"><i class="fa-solid fa-chevron-right"></i></button>
    </div>
  </dialog>
</div>
<?php get_footer(); ?>
