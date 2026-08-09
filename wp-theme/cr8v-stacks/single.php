<?php
/**
 * CR8V Stacks — single.php
 * Individual blog post. Body content = Gutenberg rich editor.
 */
defined('ABSPATH') || exit;
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php the_title(); ?> | <?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class('cr8v-single-post'); ?>>
<?php wp_body_open(); ?>
<?php get_template_part('parts/header'); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<main id="cr8v-main" class="art-outer-frame">

  <!-- Back to Blog -->
  <div class="art-back-row">
    <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>" class="art-back-btn">← Back to Blog</a>
  </div>

  <!-- Hero -->
  <div class="art-hero">
    <div class="art-hero-inner">
      <!-- Category Pill -->
      <?php
      $cats = get_the_category();
      if ($cats) :
      ?>
      <a href="<?php echo esc_url(get_category_link($cats[0]->term_id)); ?>" class="art-cat-pill">
        <?php echo esc_html($cats[0]->name); ?>
      </a>
      <?php endif; ?>

      <h1 class="art-hero-h1"><?php the_title(); ?></h1>

      <div class="art-hero-meta">
        <span class="art-hero-date"><?php echo get_the_date('F j, Y'); ?></span>
        <span class="art-hero-sep">·</span>
        <span class="art-hero-read"><?php echo cr8v_reading_time(get_the_ID()); ?></span>
      </div>

      <?php if (has_post_thumbnail()) : ?>
      <div class="art-hero-img-wrap">
        <?php the_post_thumbnail('cr8v-hero', ['class' => 'art-hero-img']); ?>
      </div>
      <?php endif; ?>
    </div>
  </div>

  <!-- Article Body — full Gutenberg content -->
  <div class="art-body-wrap">
    <div class="art-body-text">
      <?php the_content(); ?>
    </div>

    <!-- Tags -->
    <?php $tags = get_the_tags(); if ($tags) : ?>
    <div class="art-tags-row">
      <?php foreach ($tags as $tag) : ?>
      <a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>" class="art-tag-pill"><?php echo esc_html($tag->name); ?></a>
      <?php endforeach; ?>
    </div>
    <?php endif; ?>
  </div>

</main>

<?php endwhile; endif; ?>

<?php get_template_part('parts/footer'); ?>
<?php wp_footer(); ?>
</body>
</html>
