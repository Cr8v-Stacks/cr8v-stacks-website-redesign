<?php
/**
 * CR8V Stacks — inc/customizer/panel-case-studies.php
 * Customizer Panel for Case Studies Portfolio Archive & Single Templates
 */
defined('ABSPATH') || exit;

// ── Register Case Studies Panel ─────────────────────────────
$wp_customize->add_panel('cr8v_panel_case_studies', [
    'title'           => __('⚙️ Case Studies Settings', 'cr8v-stacks'),
    'priority'        => 35,
    'description'     => __('Manage hero headers, archive intro copy, and portfolio section settings for Case Studies.', 'cr8v-stacks'),
    'active_callback' => function() {
        return is_post_type_archive('case_study') || is_singular('case_study') || is_page('portfolio') || is_page_template('archive-case_study.php') || is_page_template('single-case_study.php') || is_page_template('page-portfolio.php');
    },
]);

// ── Section 1: Hero Settings ────────────────────────────────
$wp_customize->add_section('cr8v_cs_sec_hero', [
    'title'    => __('1. Hero Header', 'cr8v-stacks'),
    'panel'    => 'cr8v_panel_case_studies',
    'priority' => 10,
]);

_cr8v_text($wp_customize, 'cs_hero_crumb_parent', 'cr8v_cs_sec_hero', 'Crumb Parent', 'Bespoke Engineering Showcase');
_cr8v_text($wp_customize, 'cs_hero_label',        'cr8v_cs_sec_hero', 'Hero Label',   'Bespoke Engineering Showcase');
_cr8v_text($wp_customize, 'cs_hero_h1_part1',     'cr8v_cs_sec_hero', 'H1 Part 1',    'Selected Projects');
_cr8v_text($wp_customize, 'cs_hero_h1_serif',     'cr8v_cs_sec_hero', 'H1 Serif',     'Case Studies & Audits');
_cr8v_textarea($wp_customize, 'cs_hero_intro',    'cr8v_cs_sec_hero', 'Hero Intro',   'A detailed trace of brand strategy foundations, custom frontend applications, e-commerce re-engineering, and organic search platforms developed by our team.');

// ── Section 2: Archive Filter & Layout ──────────────────────
$wp_customize->add_section('cr8v_cs_sec_archive', [
    'title'    => __('2. Archive & Filter Settings', 'cr8v-stacks'),
    'panel'    => 'cr8v_panel_case_studies',
    'priority' => 20,
]);

_cr8v_text($wp_customize, 'cs_archive_all_label', 'cr8v_cs_sec_archive', 'All Filter Label', 'All Works');
_cr8v_text($wp_customize, 'cs_archive_grid_h2',    'cr8v_cs_sec_archive', 'Grid Section Title', 'Selected Projects');
_cr8v_textarea($wp_customize, 'cs_archive_grid_sub', 'cr8v_cs_sec_archive', 'Grid Subtitle', 'Explore real-world architecture, custom web dev, and e-commerce case studies.');

// ── Section 3: Bottom Call-To-Action (Prototype CTA) ────────
$wp_customize->add_section('cr8v_cs_sec_cta', [
    'title'    => __('3. Bottom Call-To-Action Section', 'cr8v-stacks'),
    'panel'    => 'cr8v_panel_case_studies',
    'priority' => 30,
]);

_cr8v_text($wp_customize, 'cs_cta_badge',     'cr8v_cs_sec_cta', 'CTA Eyebrow Badge', '// START A PROJECT');
_cr8v_text($wp_customize, 'cs_cta_title',     'cr8v_cs_sec_cta', 'CTA Headline',        'Ready to launch your <em>custom digital platform?</em>');
_cr8v_textarea($wp_customize, 'cs_cta_desc',  'cr8v_cs_sec_cta', 'CTA Description',     'Cr8v Stacks requires no guesswork. Transparent fixed scoping, dedicated engineering, and custom digital systems tailored to your exact business goals.');
_cr8v_text($wp_customize, 'cs_cta_btn_text', 'cr8v_cs_sec_cta', 'CTA Button Label',    'Book a Scoping Call');
_cr8v_text($wp_customize, 'cs_cta_btn_url',  'cr8v_cs_sec_cta', 'CTA Button URL',      '/discovery-call/');
