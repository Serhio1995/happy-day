<?php
if(!defined('ABSPATH')||empty($service_data)) return;
$faq_schema=[];
foreach($service_data['faq']??[] as $faq){
  $faq_schema[]=[
    '@type'=>'Question',
    'name'=>wp_strip_all_tags($faq[0]),
    'acceptedAnswer'=>[
      '@type'=>'Answer',
      'text'=>wp_strip_all_tags($faq[1]),
    ],
  ];
}
?>
<article class="service-page">
  <?php $service_hero_alt=$service_data['hero_alt']??$service_data['title']; ?>
  <section class="service-hero"><?php
    if(!empty($service_data['hero_asset'])){
      printf('<img class="service-hero-bg" src="%s" alt="%s" loading="eager" fetchpriority="high" decoding="async">',esc_url(get_template_directory_uri().'/'.ltrim($service_data['hero_asset'],'/')),esc_attr($service_hero_alt));
    }elseif(!empty($service_data['hero_image'])){
      echo wp_get_attachment_image((int)$service_data['hero_image'],'full',false,['class'=>'service-hero-bg','loading'=>'eager','fetchpriority'=>'high','decoding'=>'async','sizes'=>'100vw','alt'=>$service_hero_alt]);
    }
  ?><div class="hd-wrap service-hero-content"><h1><?php echo esc_html($service_data['title']); ?></h1><?php foreach($service_data['intro'] as $p): ?><p><?php echo wp_kses_post($p); ?></p><?php endforeach; ?><a class="hd-btn" href="#service-quote"><?php echo esc_html($service_data['hero_button']); ?> <i class="fa-solid fa-arrow-right"></i></a></div></section>
  <?php foreach($service_data['sections'] as $index=>$section): $has_visual=!empty($section['image_asset'])||!empty($section['image'])||!empty($section['placeholder']); ?><section class="service-content-section <?php echo $index%2?'service-soft ':''; echo esc_attr($section['class']??''); ?>"><div class="hd-wrap<?php echo $has_visual?' service-content-split':''; ?>"><div class="service-prose"><h2><?php echo esc_html($section['title']); ?></h2><?php foreach($section['paragraphs']??[] as $p): ?><p><?php echo wp_kses_post($p); ?></p><?php endforeach; ?><?php if(!empty($section['lead'])): ?><p class="service-list-lead"><strong><?php echo esc_html($section['lead']); ?></strong></p><?php endif; ?><?php if(!empty($section['list'])): ?><ul class="service-bullet-list"><?php foreach($section['list'] as $item): ?><li><?php echo wp_kses_post($item); ?></li><?php endforeach; ?></ul><?php endif; ?></div><?php if(!empty($section['image_asset'])): ?><figure class="service-section-photo"><img src="<?php echo esc_url(get_template_directory_uri().'/'.ltrim($section['image_asset'],'/')); ?>" alt="<?php echo esc_attr($section['image_alt']??$section['title']); ?>" width="<?php echo esc_attr($section['image_width']??1000); ?>" height="<?php echo esc_attr($section['image_height']??1333); ?>" loading="lazy" decoding="async"></figure><?php elseif(!empty($section['image'])): ?><figure class="service-section-photo"><?php echo wp_get_attachment_image($section['image'],'large',false,['loading'=>'lazy']); ?></figure><?php elseif(!empty($section['placeholder'])): ?><div class="service-visual-placeholder" aria-label="Photo placeholder"><span>Photo placeholder</span></div><?php endif; ?></div></section><?php if($index===0): ?><section class="google-reviews-section service-reviews-section"><div class="hd-wrap"><?php echo do_shortcode('[trustindex no-registration=google]'); ?></div></section><?php get_template_part('template-parts/instagram-section'); ?><?php endif; ?><?php endforeach; ?>
  <section class="service-process soft"><div class="hd-wrap"><h2><?php echo esc_html($service_data['process_title']); ?></h2><div class="process-grid"><?php foreach($service_data['process'] as $i=>$step): ?><div class="step"><b>0<?php echo $i+1; ?>.</b><h3><?php echo esc_html($step[0]); ?></h3><p><?php echo esc_html($step[1]); ?></p></div><?php endforeach; ?></div></div></section>
  <section class="service-quote-section" id="service-quote"><div class="hd-wrap quote-box"><div class="quote-copy"><h2><?php echo esc_html($service_data['cta_title']); ?></h2><?php foreach($service_data['cta_text'] as $p): ?><p><?php echo esc_html($p); ?></p><?php endforeach; ?><p class="contact-list"><a href="<?php echo esc_url(hd_phone_href()); ?>"><i class="fa-solid fa-phone"></i><span><?php echo esc_html(hd_phone()); ?></span></a><a href="<?php echo esc_url(hd_email_href()); ?>"><i class="fa-solid fa-envelope"></i><span><?php echo esc_html(hd_email()); ?></span></a></p></div><div class="quote-form hd-cf7-card"><?php hd_render_quote_form($service_data['event_type']??''); ?></div></div></section>
  <section class="service-faq"><div class="hd-wrap"><h2>Frequently Asked Questions</h2><div class="faq-list"><?php foreach($service_data['faq'] as $i=>$faq): ?><details <?php echo $i===0?'open':''; ?>><summary><?php echo esc_html($faq[0]); ?></summary><p><?php echo esc_html($faq[1]); ?></p></details><?php endforeach; ?></div></div></section>
  <?php if($faq_schema): ?><script type="application/ld+json"><?php echo wp_json_encode(['@context'=>'https://schema.org','@type'=>'FAQPage','mainEntity'=>$faq_schema],JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE); ?></script><?php endif; ?>
</article>
