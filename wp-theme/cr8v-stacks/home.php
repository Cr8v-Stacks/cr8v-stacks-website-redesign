<?php
/**
 * CR8V Stacks — home.php
 * Blog archive — auto-generated list of posts.
 * No editing needed; posts managed via WP Admin → Posts
 */
defined('ABSPATH') || exit;
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog | <?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class('cr8v-blog-archive'); ?>>
<?php wp_body_open(); ?>
<?php get_template_part('parts/header'); ?>

<main id="cr8v-main" class="fylla-outer-frame">
  <div class="fylla-blog-hero">
    <div class="fylla-blog-hero-inner">
      <div class="fylla-mono-tag">// INSIGHTS &amp; RESOURCES</div>
      <h1 class="fylla-blog-hero-h1">The CR8V Blog</h1>
      <p class="fylla-blog-hero-sub">Design, development, and growth strategies for ambitious businesses.</p>
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
            <span class="fylla-post-cat-pill">
              <?php
              $cats = get_the_category();
              if ($cats) echo esc_html($cats[0]->name);
              ?>
            </span>
            <span class="fylla-post-read-time"><?php echo cr8v_reading_time(get_the_ID()); ?></span>
          </div>
          <h2 class="fylla-post-card-title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </h2>
          <p class="fylla-post-card-excerpt"><?php echo cr8v_excerpt(get_the_excerpt(), 20); ?></p>
          <a href="<?php the_permalink(); ?>" class="fylla-post-card-link">Read Article →</a>
        </div>
      </article>
      <?php endwhile; else : ?>
      <p class="fylla-no-posts">No posts found. Check back soon.</p>
      <?php endif; ?>
    </div>

    <!-- Pagination -->
    <div class="fylla-pagination">
      <?php
      echo paginate_links([
          'prev_text' => '← Previous',
          'next_text' => 'Next →',
          'class'     => 'fylla-page-link',
      ]);
      ?>
    </div>
  </div>
</main>

<?php get_template_part('parts/footer'); ?>
<?php wp_footer(); ?>
</body>
</html>
