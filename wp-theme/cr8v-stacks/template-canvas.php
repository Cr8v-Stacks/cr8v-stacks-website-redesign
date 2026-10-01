<?php
/**
 * Template Name: Full-Width Canvas (Custom HTML)
 * Template Post Type: post, page
 * Description: Unconstrained full-width canvas for custom HTML, interactive tutorials, scroll effects, and raw stylesheets.
 * 
 * Perfect for pages and blog posts containing full HTML/CSS/JS copy-pasted from Elementor or custom code.
 */

defined('ABSPATH') || exit;

get_header();
?>

<style>
/* Reset container constraints for custom HTML canvas */
.c8-canvas-main {
  width: 100% !important;
  min-height: 100vh;
  margin: 0 !important;
  padding: 0 !important;
  position: relative;
  overflow-x: hidden;
  box-sizing: border-box;
}

/* Ensure embedded style blocks and scripts execute with 100% layout freedom */
.c8-canvas-content {
  width: 100%;
  margin: 0;
  padding: 0;
}
</style>

<main id="primary" class="c8-canvas-main site-main">
  <?php while (have_posts()) : the_post(); ?>
    <div class="c8-canvas-content">
      <?php the_content(); ?>
    </div>
  <?php endwhile; ?>
</main>

<?php
get_footer();
