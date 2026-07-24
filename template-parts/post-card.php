<?php
if (!defined('ABSPATH')) exit;
$fallback_image = 16;
$image_id = get_post_thumbnail_id() ?: $fallback_image;
$categories = get_the_category();
?>
<article <?php post_class('blog-card'); ?>>
  <a class="blog-card-image" href="<?php the_permalink(); ?>" aria-label="<?php echo esc_attr(get_the_title()); ?>">
    <?php echo wp_get_attachment_image($image_id, 'large', false, ['loading'=>'lazy']); ?>
  </a>
  <div class="blog-card-body">
    <?php if ($categories): ?><a class="blog-category" href="<?php echo esc_url(get_category_link($categories[0])); ?>"><?php echo esc_html($categories[0]->name); ?></a><?php endif; ?>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <p><?php echo esc_html(wp_trim_words(get_the_excerpt(), 22)); ?></p>
    <div class="blog-card-footer">
      <span><i class="fa-solid fa-calendar-days" aria-hidden="true"></i><?php echo esc_html(get_the_date('M j, Y')); ?></span>
      <a href="<?php the_permalink(); ?>">Read article <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
    </div>
  </div>
</article>
