<?php get_header(); ?>
<div class="blog-page blog-archive-page">
  <section class="blog-hero blog-archive-hero"><div class="hd-wrap blog-hero-inner"><span class="blog-kicker">Search the journal</span><h1><?php printf('Results for “%s”', esc_html(get_search_query())); ?></h1></div></section>
  <section class="blog-index"><div class="hd-wrap"><?php if(have_posts()): ?><div class="blog-grid"><?php while(have_posts()):the_post();get_template_part('template-parts/post-card');endwhile; ?></div><nav class="blog-pagination"><?php the_posts_pagination(); ?></nav><?php else: ?><div class="blog-empty"><h2>Nothing matched your search.</h2><p>Try a different phrase or explore the latest articles.</p></div><?php endif; ?></div></section>
</div>
<?php get_footer(); ?>
