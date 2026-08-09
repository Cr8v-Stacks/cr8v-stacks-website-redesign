<?php
/**
 * CR8V Stacks — index.php
 * Required WordPress fallback template.
 * All real page routing is handled by named templates (front-page.php, etc.)
 */
defined('ABSPATH') || exit;
get_template_part('parts/header');
if (have_posts()) : while (have_posts()) : the_post();
    the_content();
endwhile; endif;
get_template_part('parts/footer');
