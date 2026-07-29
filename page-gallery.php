<?php
/**
 * Template Name: Gallery
 */
if (!defined('ABSPATH')) exit;

$fallback_gallery_items = [
  ['id'=>25,  'title'=>'Birthday balloon backdrop',             'event'=>'Birthday celebration',  'categories'=>['birthdays','backdrops'],          'shape'=>'portrait'],
  ['id'=>103, 'title'=>'Elegant wedding balloon decor',         'event'=>'Wedding reception',     'categories'=>['weddings','backdrops'],           'shape'=>'landscape'],
  ['id'=>106, 'title'=>'Corporate balloon installation',        'event'=>'Branded event',         'categories'=>['corporate','backdrops'],          'shape'=>'square'],
  ['id'=>114, 'title'=>'Baby shower balloon arch',              'event'=>'Baby shower',           'categories'=>['showers','arches'],               'shape'=>'portrait'],
  ['id'=>27,  'title'=>'Playful birthday balloon theme',        'event'=>'Birthday party',        'categories'=>['birthdays'],                      'shape'=>'square'],
  ['id'=>166, 'title'=>'Romantic proposal balloon setup',       'event'=>'Proposal celebration',  'categories'=>['weddings'],                       'shape'=>'portrait'],
  ['id'=>118, 'title'=>'Elegant bridal shower backdrop',        'event'=>'Bridal shower',         'categories'=>['showers','backdrops'],            'shape'=>'landscape'],
  ['id'=>107, 'title'=>'Opening ceremony balloon decor',        'event'=>'Corporate opening',     'categories'=>['corporate'],                      'shape'=>'portrait'],
  ['id'=>126, 'title'=>'Festive Christmas balloon display',     'event'=>'Holiday celebration',   'categories'=>['seasonal'],                       'shape'=>'square'],
  ['id'=>28,  'title'=>'Birthday arch and photo area',          'event'=>'Milestone birthday',    'categories'=>['birthdays','arches','backdrops'], 'shape'=>'landscape'],
  ['id'=>121, 'title'=>'Bridal shower balloon styling',         'event'=>'Bridal shower',         'categories'=>['showers'],                        'shape'=>'portrait'],
  ['id'=>168, 'title'=>'Balloons and flowers for an engagement','event'=>'Engagement party',      'categories'=>['weddings'],                       'shape'=>'square'],
  ['id'=>130, 'title'=>'Valentine balloon decoration',          'event'=>'Valentine’s Day',       'categories'=>['seasonal'],                       'shape'=>'portrait'],
  ['id'=>108, 'title'=>'Corporate balloon arch and backdrop',   'event'=>'Business event',        'categories'=>['corporate','arches','backdrops'], 'shape'=>'landscape'],
  ['id'=>117, 'title'=>'Soft baby shower balloon decor',        'event'=>'Baby shower',           'categories'=>['showers'],                        'shape'=>'square'],
  ['id'=>159, 'title'=>'Graduation balloon celebration',        'event'=>'Graduation party',      'categories'=>['seasonal'],                       'shape'=>'portrait'],
  ['id'=>145, 'title'=>'Statement photo backdrop',              'event'=>'Private celebration',   'categories'=>['backdrops'],                      'shape'=>'landscape'],
  ['id'=>150, 'title'=>'Custom balloon arch',                   'event'=>'Event entrance',        'categories'=>['arches'],                         'shape'=>'portrait'],
  ['id'=>169, 'title'=>'Halloween balloon installation',        'event'=>'Halloween party',       'categories'=>['seasonal'],                       'shape'=>'square'],
  ['id'=>153, 'title'=>'Wedding balloon arch',                  'event'=>'Wedding celebration',   'categories'=>['weddings','arches'],              'shape'=>'landscape'],
];

$fallback_filters = [
  'all'=>'All celebrations',
  'birthdays'=>'Birthdays',
  'weddings'=>'Weddings & engagements',
  'showers'=>'Baby & bridal showers',
  'corporate'=>'Corporate',
  'seasonal'=>'Seasonal & milestones',
  'arches'=>'Arches',
  'backdrops'=>'Backdrops',
];

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

$hero_image_ids=array_slice(array_values(array_filter(array_map(
  static fn($item)=>(int)($item['id']??0),
  $gallery_items
))),0,3);

get_header();
?>
<main class="hd-gallery-page">
  <section class="hd-gallery-hero">
    <div class="hd-gallery-hero-orb hd-gallery-hero-orb-one" aria-hidden="true"></div>
    <div class="hd-gallery-hero-orb hd-gallery-hero-orb-two" aria-hidden="true"></div>
    <div class="hd-wrap hd-gallery-hero-grid">
      <div class="hd-gallery-hero-copy">
        <span class="hd-gallery-eyebrow">Our work · Toronto & the GTA</span>
        <h1>Balloon Decor<br>We’ve Created</h1>
        <p>Explore real balloon installations designed and set up by Happy Day Toronto for birthdays, weddings, showers, corporate events, and milestone celebrations.</p>
        <a class="hd-gallery-hero-link" href="<?php echo esc_url(home_url('/contact/')); ?>">
          Plan your celebration <span aria-hidden="true"><i class="fa-solid fa-arrow-right"></i></span>
        </a>
      </div>
      <div class="hd-gallery-hero-collage" aria-label="A selection of Happy Day Toronto balloon decor">
        <?php foreach ($hero_image_ids as $index=>$image_id): ?>
          <figure class="hd-gallery-hero-image hd-gallery-hero-image-<?php echo esc_attr((string)($index+1)); ?>">
            <?php echo wp_get_attachment_image($image_id,'large',false,[
              'loading'=>$index===0?'eager':'lazy',
              'fetchpriority'=>$index===0?'high':'auto',
              'decoding'=>'async',
            ]); ?>
          </figure>
        <?php endforeach; ?>
        <span class="hd-gallery-collage-note"><b><?php echo esc_html(count($gallery_items)); ?>+</b> real setups</span>
      </div>
    </div>
    <div class="hd-gallery-hero-curve" aria-hidden="true"></div>
  </section>

  <section class="hd-gallery-content" aria-labelledby="gallery-heading">
    <div class="hd-wrap">
      <header class="hd-gallery-heading">
        <div>
          <span class="hd-gallery-eyebrow">Happy Day Toronto portfolio</span>
          <h2 id="gallery-heading">Explore Our Balloon Decor</h2>
        </div>
        <p>Every photo shows decor created by our team. Use the filters to browse our work by celebration type and setup style.</p>
      </header>

      <div class="hd-gallery-filter-shell">
        <div class="hd-gallery-filters" role="group" aria-label="Filter gallery by event type">
          <?php foreach ($filters as $key=>$label):
            $count=$key==='all'?count($gallery_items):count(array_filter($gallery_items,static fn($item)=>in_array($key,$item['categories'],true)));
          ?>
            <button class="hd-gallery-filter<?php echo $key==='all'?' is-active':''; ?>" type="button" data-filter="<?php echo esc_attr($key); ?>" aria-pressed="<?php echo $key==='all'?'true':'false'; ?>">
              <span><?php echo esc_html($label); ?></span><small><?php echo esc_html((string)$count); ?></small>
            </button>
          <?php endforeach; ?>
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
        <h3>No projects in this category yet.</h3>
        <p>Choose another filter to browse more of our work.</p>
      </div>

      <div class="hd-gallery-more-wrap" hidden>
        <button class="hd-gallery-more" type="button" aria-controls="hd-gallery-grid" aria-expanded="false">
          <span>Show more work</span>
          <small><b class="hd-gallery-more-count">0</b> more</small>
          <i class="fa-solid fa-arrow-down" aria-hidden="true"></i>
        </button>
      </div>
    </div>
  </section>

  <section class="hd-gallery-cta">
    <div class="hd-wrap hd-gallery-cta-inner">
      <div><span>Seen a setup you love?</span><h2>Let’s Create Yours.</h2></div>
      <p>Tell us which details from our work caught your eye, along with your event type, venue, and colours. We’ll create a custom setup for your celebration.</p>
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
</main>
<?php get_footer(); ?>
