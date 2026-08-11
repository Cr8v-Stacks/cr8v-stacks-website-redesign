<?php
/**
 * CR8V Stacks — tag.php
 * Blog tag archive — same layout as category.php
 */
defined('ABSPATH') || exit;
$tag = get_queried_object();
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>#<?php echo esc_html($tag->name); ?> — Blog | <?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class('cr8v-blog-tag'); ?>>
<?php wp_body_open(); ?>
<?php get_template_part('parts/header-blog'); ?>

<main id="cr8v-main" class="fylla-outer-frame">
  <div class="fylla-blog-hero">
    <div class="fylla-blog-hero-inner">
      <div class="fylla-mono-tag">// TAG</div>
      <h1 class="fylla-blog-hero-h1">#<?php echo esc_html($tag->name); ?></h1>
    </div>
  </div>
  <div class="fylla-grid-outer">
    <div class="fylla-post-grid">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <article class="fylla-post-card">
        <?php if (has_post_thumbnail()) : ?>
        <a href="<?php the_permalink(); ?>" class="fylla-post-card-img-wrap">
          <?php the_post_thumbnail('cr8v-card', ['class' => 'fylla-post-card-img']); ?>
        </a>
        <?php endif; ?>
        <div class="fylla-post-card-body">
          <div class="fylla-post-card-meta">
            <?php $cats = get_the_category(); if ($cats) : ?>
            <span class="fylla-post-cat-pill"><?php echo esc_html($cats[0]->name); ?></span>
            <?php endif; ?>
            <span class="fylla-post-read-time"><?php echo cr8v_reading_time(get_the_ID()); ?></span>
          </div>
          <h2 class="fylla-post-card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <p class="fylla-post-card-excerpt"><?php echo cr8v_excerpt(get_the_excerpt(), 20); ?></p>
          <a href="<?php the_permalink(); ?>" class="fylla-post-card-link">Read Article →</a>
        </div>
      </article>
      <?php endwhile; else : ?>
      <p class="fylla-no-posts">No posts with this tag yet.</p>
      <?php endif; ?>
    </div>
    <div class="fylla-pagination">
      <?php echo paginate_links(['prev_text' => '← Previous', 'next_text' => 'Next →']); ?>
    </div>
  </div>
</main>

<?php get_template_part('parts/footer'); ?>
<?php wp_footer(); ?>
</body>
</html>
