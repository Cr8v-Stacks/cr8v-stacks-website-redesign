<?php
/**
 * CR8V Stacks — page-about.php
 * Template Name: About Us
 * Edit: WP Admin → Pages → About Us → Edit (uses Customizer + ACF fields)
 */
defined('ABSPATH') || exit;

$pid = get_the_ID();

// Customizer / ACF fields
$hero_eyebrow = cr8v_get_meta($pid, 'about_eyebrow', '// STUDIO');
$hero_h1      = cr8v_get_meta($pid, 'about_headline', 'We Build Businesses That Win Online');
$hero_sub     = cr8v_get_meta($pid, 'about_sub', 'Strategy, design, and liquid performance engineering for ambitious brands.');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Studio — <?php bloginfo('name'); ?></title>
  <meta name="description" content="<?php echo esc_attr(get_the_excerpt() ?: 'CR8V Stacks — Design, development and growth systems for ambitious businesses.'); ?>">
  <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri() . '/assets/css/shared-service-components.css'); ?>">
  <?php wp_head(); ?>
</head>
<body <?php body_class('cr8v-about'); ?>>
<?php wp_body_open(); ?>
<?php get_template_part('parts/header'); ?>

<main id="cr8v-main">
  <div class="fylla-outer-frame">

    <!-- ── Hero ── -->
    <div class="fylla-hero-section">
      <div class="fylla-hero-inner">
        <span class="fylla-meta-tag"><?php echo esc_html($hero_eyebrow); ?></span>
        <h1 class="fylla-hero-h1"><?php echo esc_html($hero_h1); ?></h1>
        <p class="fylla-hero-sub"><?php echo esc_html($hero_sub); ?></p>
        <a href="<?php echo esc_url(home_url('/discovery-call/')); ?>" class="c8-btn-primary">
          Start a Project →
        </a>
      </div>
    </div>

    <!-- ── Page Body Content (Gutenberg editor or ACF) ── -->
    <div class="fylla-body-content">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; endif; ?>
    </div>

  </div>
</main>

<?php get_template_part('parts/footer'); ?>
<?php wp_footer(); ?>
</body>
</html>
