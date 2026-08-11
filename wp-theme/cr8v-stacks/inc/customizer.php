<?php
/**
 * CR8V Stacks — inc/customizer.php
 * Master Customizer Configuration for Tropos Theme
 * Modular panel loader with active_callbacks for fast Customizer performance.
 */

defined('ABSPATH') || exit;

// Load helper functions
require_once get_template_directory() . '/inc/customizer/helpers.php';

add_action('customize_register', function ($wp_customize) {
    // Load Panel Modules
    require_once get_template_directory() . '/inc/customizer/panel-homepage.php';
    require_once get_template_directory() . '/inc/customizer/panel-about.php';
    require_once get_template_directory() . '/inc/customizer/panel-services.php';
    require_once get_template_directory() . '/inc/customizer/panel-web-design.php';
    require_once get_template_directory() . '/inc/customizer/panel-shopify.php';
    require_once get_template_directory() . '/inc/customizer/panel-seo-content.php';
});
