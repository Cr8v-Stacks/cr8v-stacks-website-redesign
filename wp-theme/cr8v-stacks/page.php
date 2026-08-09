<?php
/**
 * CR8V Stacks — page.php
 * Default fallback template for standard WordPress pages.
 * Used for any page that doesn't have a specific template assigned.
 */
defined('ABSPATH') || exit;
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class('cr8v-page'); ?>>
<?php wp_body_open(); ?>
<?php get_template_part('parts/header'); ?>

<main id="cr8v-main" class="fylla-outer-frame" style="min-height:60vh;padding:6rem 2rem 4rem;">
  <div style="max-width:860px;margin:0 auto;">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <h1 style="font-family:'Michroma',sans-serif;font-size:clamp(1.6rem,3vw,2.4rem);margin-bottom:1.5rem;"><?php the_title(); ?></h1>
      <div class="cr8v-entry-content" style="font-family:'DM Sans',sans-serif;font-size:15px;line-height:1.75;color:#333;">
        <?php the_content(); ?>
      </div>
    <?php endwhile; endif; ?>
  </div>
</main>

<?php get_template_part('parts/footer'); ?>
<?php wp_footer(); ?>
</body>
</html>
