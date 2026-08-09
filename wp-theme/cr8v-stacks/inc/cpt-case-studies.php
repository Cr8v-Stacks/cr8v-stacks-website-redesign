<?php
/**
 * CR8V Stacks — inc/cpt-case-studies.php
 * Registers the Case Studies custom post type + taxonomies.
 */

defined('ABSPATH') || exit;

add_action('init', 'cr8v_register_case_study_cpt');

function cr8v_register_case_study_cpt(): void {
    // ── Custom Post Type: Case Study ──────────────────────
    register_post_type('case_study', [
        'labels' => [
            'name'               => 'Case Studies',
            'singular_name'      => 'Case Study',
            'menu_name'          => 'Case Studies',
            'add_new'            => 'Add New',
            'add_new_item'       => 'Add New Case Study',
            'edit_item'          => 'Edit Case Study',
            'view_item'          => 'View Case Study',
            'all_items'          => 'All Case Studies',
            'search_items'       => 'Search Case Studies',
            'not_found'          => 'No case studies found.',
            'not_found_in_trash' => 'No case studies in trash.',
        ],
        'public'              => true,
        'has_archive'         => true,
        'rewrite'             => ['slug' => 'case-studies'],
        'supports'            => ['title', 'editor', 'thumbnail', 'custom-fields', 'excerpt'],
        'show_in_rest'        => true,   // enables Gutenberg sidebar
        'menu_icon'           => 'dashicons-portfolio',
        'menu_position'       => 5,
        'show_in_nav_menus'   => true,
    ]);

    // ── Taxonomy: Industry ────────────────────────────────
    register_taxonomy('industry', 'case_study', [
        'labels' => [
            'name'          => 'Industries',
            'singular_name' => 'Industry',
            'menu_name'     => 'Industries',
            'all_items'     => 'All Industries',
            'edit_item'     => 'Edit Industry',
            'add_new_item'  => 'Add New Industry',
        ],
        'hierarchical'      => true,    // like categories
        'public'            => true,
        'show_in_rest'      => true,
        'rewrite'           => ['slug' => 'industry'],
        'show_admin_column' => true,
    ]);

    // ── Taxonomy: Service Type ────────────────────────────
    register_taxonomy('service_type', 'case_study', [
        'labels' => [
            'name'          => 'Service Types',
            'singular_name' => 'Service Type',
            'menu_name'     => 'Service Types',
            'all_items'     => 'All Service Types',
            'edit_item'     => 'Edit Service Type',
            'add_new_item'  => 'Add New Service Type',
        ],
        'hierarchical'      => false,   // like tags
        'public'            => true,
        'show_in_rest'      => true,
        'rewrite'           => ['slug' => 'service'],
        'show_admin_column' => true,
    ]);
}
