<?php get_header(); ?>
<div class="blog-page blog-archive-page">
  <section class="blog-hero blog-archive-hero"><div class="hd-wrap blog-hero-inner"><span class="blog-kicker">Browse the journal</span><h1><?php the_archive_title(); ?></h1><?php the_archive_description('<div class="archive-description">','</div>'); ?></div></section>
  <section class="blog-index"><div class="hd-wrap">
    <?php if (have_posts()): ?><div class="blog-grid"><?php while(have_posts()): the_post(); get_template_part('template-parts/post-card'); endwhile; ?></div><nav class="blog-pagination"><?php the_posts_pagination(['mid_size'=>1,'prev_text'=>'← Previous','next_text'=>'Next →']); ?></nav>
    <?php else: ?><div class="blog-empty"><h2>No articles found.</h2></div><?php endif; ?>
  </div></section>
</div>
<?php get_footer(); ?>
