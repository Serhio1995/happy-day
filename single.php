<?php get_header(); ?>
<?php while(have_posts()): the_post(); $cats=get_the_category(); $reading=max(1,(int)ceil(str_word_count(wp_strip_all_tags(get_the_content()))/220)); ?>
<article <?php post_class('single-blog'); ?>>
  <header class="single-blog-hero"><div class="hd-wrap single-blog-head">
    <div class="single-breadcrumb"><a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>">Blog</a><i class="fa-solid fa-chevron-right" aria-hidden="true"></i><span><?php echo $cats?esc_html($cats[0]->name):'Journal'; ?></span></div>
    <?php if($cats): ?><a class="blog-category" href="<?php echo esc_url(get_category_link($cats[0])); ?>"><?php echo esc_html($cats[0]->name); ?></a><?php endif; ?>
    <h1><?php the_title(); ?></h1>
    <?php if(has_excerpt()): ?><p class="single-blog-lead"><?php echo esc_html(get_the_excerpt()); ?></p><?php endif; ?>
    <div class="single-blog-meta"><span><i class="fa-solid fa-calendar-days" aria-hidden="true"></i><?php echo esc_html(get_the_date('F j, Y')); ?></span><span><i class="fa-solid fa-clock" aria-hidden="true"></i><?php echo esc_html($reading); ?> min read</span></div>
  </div></header>
  <div class="hd-wrap single-featured-image"><?php echo wp_get_attachment_image(get_post_thumbnail_id()?:16,'full',false,['loading'=>'eager','fetchpriority'=>'high']); ?></div>
  <div class="hd-wrap single-blog-layout">
    <div class="single-blog-content"><?php the_content(); ?></div>
    <aside class="single-blog-aside">
      <div class="single-aside-card"><span>Planning an event?</span><h2>Let’s create your moment.</h2><p>Tell us your date, venue, colours, and the setup you have in mind.</p><a class="hd-btn" href="<?php echo esc_url(hd_local_url('contact')); ?>">Request a Quote <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a></div>
      <div class="single-aside-links"><h3>Explore Services</h3><a href="<?php echo esc_url(hd_local_url('services/balloons-for-birthdays')); ?>">Birthday Balloons</a><a href="<?php echo esc_url(hd_local_url('services/wedding-balloons')); ?>">Wedding Decor</a><a href="<?php echo esc_url(hd_local_url('services/balloon-arch-garland')); ?>">Arches &amp; Garlands</a><a href="<?php echo esc_url(hd_local_url('services/backdrop-rental')); ?>">Backdrop Rental</a></div>
    </aside>
  </div>
  <?php $related=new WP_Query(['post_type'=>'post','posts_per_page'=>3,'post__not_in'=>[get_the_ID()],'category__in'=>wp_list_pluck($cats,'term_id')]); if($related->have_posts()): ?>
  <section class="related-posts"><div class="hd-wrap"><div class="related-head"><span>Keep exploring</span><h2>More from the Journal</h2></div><div class="blog-grid"><?php while($related->have_posts()):$related->the_post();get_template_part('template-parts/post-card');endwhile; ?></div></div></section><?php wp_reset_postdata(); endif; ?>
</article>
<?php endwhile; ?>
<?php get_footer(); ?>
