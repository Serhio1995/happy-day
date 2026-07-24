<?php
/* Template Name: Happy Day Legal */
if (!defined('ABSPATH')) exit;
get_header();
while(have_posts()): the_post();
  $kicker=get_post_meta(get_the_ID(),'_hd_legal_kicker',true)?:'Clear, thoughtful, and transparent';
  $intro=get_post_meta(get_the_ID(),'_hd_legal_intro',true);
  $sections=json_decode((string)get_post_meta(get_the_ID(),'_hd_legal_sections',true),true);
  if(!is_array($sections)) $sections=[];
?>
<article <?php post_class('legal-page'); ?>>
  <header class="legal-hero">
    <div class="legal-orbit legal-orbit-one" aria-hidden="true"></div>
    <div class="legal-orbit legal-orbit-two" aria-hidden="true"></div>
    <div class="hd-wrap legal-hero-inner">
      <div>
        <span class="legal-kicker"><?php echo esc_html($kicker); ?></span>
        <h1><?php the_title(); ?></h1>
        <?php if($intro): ?><p><?php echo esc_html($intro); ?></p><?php endif; ?>
      </div>
      <div class="legal-hero-mark" aria-hidden="true"><i class="fa-solid fa-file-shield"></i><span></span><span></span></div>
    </div>
  </header>

  <div class="legal-main">
    <div class="hd-wrap legal-layout">
      <aside class="legal-aside">
        <div class="legal-aside-card">
          <span>On this page</span>
          <nav aria-label="Page contents">
            <?php foreach($sections as $section): if(empty($section['id'])||empty($section['label'])) continue; ?>
              <a href="#<?php echo esc_attr($section['id']); ?>"><?php echo esc_html($section['label']); ?></a>
            <?php endforeach; ?>
          </nav>
          <div class="legal-help">
            <i class="fa-solid fa-envelope" aria-hidden="true"></i>
            <div><strong>Questions?</strong><a href="mailto:happydaytorontoballoons@gmail.com">Email our team</a></div>
          </div>
        </div>
      </aside>
      <div class="legal-content">
        <div class="legal-updated"><i class="fa-solid fa-calendar" aria-hidden="true"></i> Last updated: July 13, 2026</div>
        <?php the_content(); ?>
        <div class="legal-closing">
          <i class="fa-solid fa-heart" aria-hidden="true"></i>
          <div><strong>Thank you for choosing Happy Day Toronto.</strong><span>We believe clear expectations make every celebration easier to enjoy.</span></div>
        </div>
      </div>
    </div>
  </div>
</article>
<?php endwhile; get_footer(); ?>
