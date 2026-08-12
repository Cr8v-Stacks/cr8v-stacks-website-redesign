<?php
/**
 * CR8V Stacks — inc/customizer/helpers.php
 * Customizer Helper Registration Wrappers
 */

defined('ABSPATH') || exit;

if (!function_exists('_cr8v_section')) {
    function _cr8v_section($wp_customize, $id, $title, $panel = 'cr8v_homepage', $priority = 10) {
        $wp_customize->add_section($id, [
            'title'    => $title,
            'panel'    => $panel,
            'priority' => $priority,
        ]);
    }
}

if (!function_exists('_cr8v_text')) {
    function _cr8v_text($wp_customize, $id, $section, $label, $default = '', $selector = '') {
        $wp_customize->add_setting($id, [
            'default'           => $default,
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'postMessage',
        ]);
        $wp_customize->add_control($id, [
            'label'    => $label,
            'section'  => $section,
            'type'     => 'text',
        ]);
        if (isset($wp_customize->selective_refresh)) {
            $sel = $selector ? $selector : "[data-customizer='{$id}']";
            $wp_customize->selective_refresh->add_partial($id, [
                'selector'            => $sel,
                'render_callback'     => function() use ($id, $default) {
                    return esc_html(cr8v_mod($id, $default));
                },
                'container_inclusive' => false,
            ]);
        }
    }
}

if (!function_exists('_cr8v_textarea')) {
    function _cr8v_textarea($wp_customize, $id, $section, $label, $default = '', $selector = '') {
        $wp_customize->add_setting($id, [
            'default'           => $default,
            'sanitize_callback' => 'sanitize_textarea_field',
            'transport'         => 'postMessage',
        ]);
        $wp_customize->add_control($id, [
            'label'   => $label,
            'section' => $section,
            'type'    => 'textarea',
        ]);
        if (isset($wp_customize->selective_refresh)) {
            $sel = $selector ? $selector : "[data-customizer='{$id}']";
            $wp_customize->selective_refresh->add_partial($id, [
                'selector'            => $sel,
                'render_callback'     => function() use ($id, $default) {
                    return wp_kses_post(cr8v_mod($id, $default));
                },
                'container_inclusive' => false,
            ]);
        }
    }
}

if (!function_exists('_cr8v_img')) {
    function _cr8v_img($wp_customize, $id, $section, $label, $default = '', $selector = '') {
        _cr8v_image($wp_customize, $id, $section, $label, $default, $selector);
    }
}

if (!function_exists('_cr8v_image')) {
    function _cr8v_image($wp_customize, $id, $section, $label, $default = '', $selector = '') {
        $wp_customize->add_setting($id, [
            'default'           => $default,
            'sanitize_callback' => 'esc_url_raw',
            'transport'         => 'postMessage',
        ]);
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $id, [
            'label'   => $label,
            'section' => $section,
        ]));
        if (isset($wp_customize->selective_refresh)) {
            $sel = $selector ? $selector : "[data-customizer='{$id}']";
            $wp_customize->selective_refresh->add_partial($id, [
                'selector'            => $sel,
                'render_callback'     => function() use ($id, $default) {
                    return esc_url(cr8v_mod($id, $default));
                },
                'container_inclusive' => false,
            ]);
        }
    }
}

if (!function_exists('cr8v_add_text_control')) {
    function cr8v_add_text_control($wp_customize, $id, $section, $label, $default = '', $selector = '') {
        _cr8v_text($wp_customize, $id, $section, $label, $default, $selector);
    }
}

if (!function_exists('cr8v_add_textarea_control')) {
    function cr8v_add_textarea_control($wp_customize, $id, $section, $label, $default = '', $selector = '') {
        _cr8v_textarea($wp_customize, $id, $section, $label, $default, $selector);
    }
}

