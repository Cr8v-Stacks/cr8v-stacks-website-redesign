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
      <!-- Default fallback blog post cards when no WP posts exist yet -->
      <article class="fylla-post-card">
        <a href="#" class="fylla-post-card-img-wrap">
          <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/hww_workflow_visual.jpg'); ?>" class="fylla-post-card-img" alt="Liquid Performance">
        </a>
        <div class="fylla-post-card-body">
          <div class="fylla-post-card-meta">
            <span class="fylla-post-cat-pill">Engineering</span>
            <span class="fylla-post-read-time">5 Min Read</span>
          </div>
          <h2 class="fylla-post-card-title">
            <a href="#">What Liquid Performance Means For Modern Web Platforms</a>
          </h2>
          <p class="fylla-post-card-excerpt">Why sub-second load times, 60fps animations, and zero third-party plugin bloat are essential for high-converting brands.</p>
          <a href="#" class="fylla-post-card-link">Read Article →</a>
        </div>
      </article>

      <article class="fylla-post-card">
        <a href="#" class="fylla-post-card-img-wrap">
          <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/ai_wp_tree_workflow.jpg'); ?>" class="fylla-post-card-img" alt="Entity SEO">
        </a>
        <div class="fylla-post-card-body">
          <div class="fylla-post-card-meta">
            <span class="fylla-post-cat-pill">SEO &amp; Strategy</span>
            <span class="fylla-post-read-time">7 Min Read</span>
          </div>
          <h2 class="fylla-post-card-title">
            <a href="#">Entity SEO &amp; Content Architecture for High-Growth Brands</a>
          </h2>
          <p class="fylla-post-card-excerpt">How semantic keyword mapping and topical authority structures dominate search engine results without black-hat tactics.</p>
          <a href="#" class="fylla-post-card-link">Read Article →</a>
        </div>
      </article>

      <article class="fylla-post-card">
        <a href="#" class="fylla-post-card-img-wrap">
          <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/c4_tools_bg.jpg'); ?>" class="fylla-post-card-img" alt="Conversion UI/UX">
        </a>
        <div class="fylla-post-card-body">
          <div class="fylla-post-card-meta">
            <span class="fylla-post-cat-pill">UI/UX Design</span>
            <span class="fylla-post-read-time">4 Min Read</span>
          </div>
          <h2 class="fylla-post-card-title">
            <a href="#">Designing for Conversion: High-Contrast Visual Systems</a>
          </h2>
          <p class="fylla-post-card-excerpt">Strategic micro-interactions, dark mode aesthetics, and clear content hierarchies that turn casual visitors into loyal clients.</p>
          <a href="#" class="fylla-post-card-link">Read Article →</a>
        </div>
      </article>
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
