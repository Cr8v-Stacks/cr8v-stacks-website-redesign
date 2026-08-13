<?php
/**
 * CR8V Stacks — inc/cpt-business-talk.php
 * Registers Custom Post Type for "Business Talk" news & articles
 * Guaranteeing 100% URL parity with live site cr8vstacks.com/business-talk/
 */

defined('ABSPATH') || exit;

function cr8v_register_business_talk_cpt() {
    $labels = [
        'name'               => _x('Business Talk', 'post type general name', 'cr8v-stacks'),
        'singular_name'      => _x('Business Talk Post', 'post type singular name', 'cr8v-stacks'),
        'menu_name'          => _x('Business Talk', 'admin menu', 'cr8v-stacks'),
        'name_admin_bar'     => _x('Business Talk Post', 'add new on admin bar', 'cr8v-stacks'),
        'add_new'            => _x('Add New Post', 'business talk', 'cr8v-stacks'),
        'add_new_item'       => __('Add New Business Talk Post', 'cr8v-stacks'),
        'new_item'           => __('New Business Talk Post', 'cr8v-stacks'),
        'edit_item'          => __('Edit Business Talk Post', 'cr8v-stacks'),
        'view_item'          => __('View Business Talk Post', 'cr8v-stacks'),
        'all_items'          => __('All Business Talk Posts', 'cr8v-stacks'),
        'search_items'       => __('Search Business Talk Posts', 'cr8v-stacks'),
        'parent_item_colon'  => __('Parent Business Talk Posts:', 'cr8v-stacks'),
        'not_found'          => __('No business talk posts found.', 'cr8v-stacks'),
        'not_found_in_trash' => __('No business talk posts found in Trash.', 'cr8v-stacks'),
    ];

    $args = [
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => ['slug' => 'business-talk', 'with_front' => false],
        'capability_type'    => 'post',
        'has_archive'        => 'business-talk',
        'hierarchical'       => false,
        'menu_position'      => 6,
        'menu_icon'          => 'dashicons-welcome-widgets-menus',
        'supports'           => ['title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'revisions'],
        'show_in_rest'       => true,
        'taxonomies'         => ['category', 'post_tag'],
    ];

    register_post_type('business-talk', $args);
}
add_action('init', 'cr8v_register_business_talk_cpt');
