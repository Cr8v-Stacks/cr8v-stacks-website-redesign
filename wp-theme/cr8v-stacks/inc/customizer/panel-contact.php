<?php
/**
 * CR8V Stacks Customizer — Contact Us Panel
 *
 * @package CR8V_Stacks
 */

defined('ABSPATH') || exit;

// Panel: ⚙️ Contact Us Page
$wp_customize->add_panel('cr8v_contact_panel', [
    'title'           => __('⚙️ Contact Us Page', 'cr8v-stacks'),
    'priority'        => 36,
    'description'     => __('Manage eyebrow, title, ticket stub metadata, and form settings on the Contact page.', 'cr8v-stacks'),
    'active_callback' => function() {
        return is_page('contact') || is_page('contact-us') || is_page_template('page-contact.php') || is_page_template('page-contact-us.php');
    },
]);

// Section 1: Hero & Ticket Stub Header
$wp_customize->add_section('cr8v_contact_hero_sec', [
    'title' => __('Ticket Stub Header & Info', 'cr8v-stacks'),
    'panel' => 'cr8v_contact_panel',
]);

_cr8v_text($wp_customize, 'contact_eyebrow', 'cr8v_contact_hero_sec', 'Eyebrow Tag', '↳ Contact');
_cr8v_text($wp_customize, 'contact_heading', 'cr8v_contact_hero_sec', 'Main Headline', "SO, WHAT'S THE PROJECT?");
_cr8v_textarea($wp_customize, 'contact_subtitle', 'cr8v_contact_hero_sec', 'Subtitle / Lede', 'Fill this in — we read every one and reply within a day.');
_cr8v_text($wp_customize, 'contact_stamp_text', 'cr8v_contact_hero_sec', 'Circular Stamp Text', '8+ Yrs Experience');
_cr8v_text($wp_customize, 'contact_location', 'cr8v_contact_hero_sec', 'Location Metadata', 'Ogudu, Lagos State, Nigeria');
_cr8v_text($wp_customize, 'contact_phone', 'cr8v_contact_hero_sec', 'Phone Number', '0705 496 3639');
_cr8v_text($wp_customize, 'contact_email', 'cr8v_contact_hero_sec', 'Email Address', 'info@cr8vstacks.com');

// Section 2: Form Settings
$wp_customize->add_section('cr8v_contact_form_sec', [
    'title' => __('Form & Shortcode Settings', 'cr8v-stacks'),
    'panel' => 'cr8v_contact_panel',
]);

_cr8v_text($wp_customize, 'contact_form_label', 'cr8v_contact_form_sec', 'Form Section Label', 'FILL OUT THE PROJECT FORM BELOW');
_cr8v_textarea($wp_customize, 'contact_form_shortcode', 'cr8v_contact_form_sec', 'Booking / Contact Form Shortcode', '[sb_booking_form]');
