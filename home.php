<?php get_header(); ?>
<div class="blog-page">
  <section class="blog-hero"><div class="hd-wrap blog-hero-inner"><span class="blog-kicker">Ideas, details &amp; inspiration</span><h1>Stories Worth Celebrating.</h1><p>Practical planning advice, balloon decor ideas, colour inspiration, and thoughtful details for events across Toronto and the GTA.</p></div><span class="blog-hero-curve" aria-hidden="true"></span></section>
  <section class="blog-index"><div class="hd-wrap">
    <div class="blog-index-head"><div><span>From the Happy Day journal</span><h2>Latest from the Blog</h2></div><p>Fresh ideas to help you create an event that feels personal, polished, and ready for photos.</p></div>
    <?php if (have_posts()): ?><div class="blog-grid"><?php while(have_posts()): the_post(); get_template_part('template-parts/post-card'); endwhile; ?></div>
      <nav class="blog-pagination" aria-label="Blog pagination"><?php the_posts_pagination(['mid_size'=>1,'prev_text'=>'← Previous','next_text'=>'Next →']); ?></nav>
    <?php else: ?><div class="blog-empty"><h2>New stories are coming soon.</h2><p>Check back for balloon decor ideas and event planning inspiration.</p></div><?php endif; ?>
  </div></section>
</div>
<?php get_footer(); ?>
