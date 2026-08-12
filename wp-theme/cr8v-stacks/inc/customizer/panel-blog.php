<?php
/**
 * CR8V Stacks — inc/customizer/panel-blog.php
 * Customizer Panel for Blog Archive, Category/Tag Archives, and Single Blog Post settings.
 * Grouped under ONE master panel ('cr8v_blog_panel') with 3 clean sections:
 *  1. Blog Archive Hero & Grid
 *  2. Blog Discovery CTA
 *  3. Single Post Master Settings (Share Bar, AI Bar, Sidebar Card, Author Box, Related Grid & FAQ Accordion)
 */

defined('ABSPATH') || exit;

// ONE SINGLE MASTER PANEL FOR ALL BLOG & ARCHIVE SETTINGS
$wp_customize->add_panel('cr8v_blog_panel', [
    'title'           => __('CR8V Blog & Archive Settings', 'cr8v-stacks'),
    'priority'        => 38,
    'description'     => __('Manage hero text, post grid count, Discovery CTA, social share buttons, AI summary bar, sidebar CTA, author box, and FAQ section.', 'cr8v-stacks'),
    'active_callback' => function () {
        return is_home() || is_archive() || is_single() || is_category() || is_tag() || is_page('blog') || is_page_template('home.php');
    },
]);

// ── SECTION 1: BLOG ARCHIVE HERO & GRID ────────────────────────
$wp_customize->add_section('cr8v_blog_hero_sec', [
    'title'    => __('1. Blog Archive Hero & Grid', 'cr8v-stacks'),
    'panel'    => 'cr8v_blog_panel',
    'priority' => 10,
]);

_cr8v_text($wp_customize, 'blog_eyebrow', 'cr8v_blog_hero_sec', 'Blog Eyebrow', '// TECHNICAL JOURNAL');
_cr8v_text($wp_customize, 'blog_h1', 'cr8v_blog_hero_sec', 'Blog Main H1 Title', 'ENGINEERING & DESIGN INSIGHTS');
_cr8v_textarea($wp_customize, 'blog_subtitle', 'cr8v_blog_hero_sec', 'Blog Subtitle Paragraph', 'Technical breakdowns, platform engineering guides, and custom plugin case studies from our core team.');

// POSTS PER PAGE GRID COUNT CONTROL
$wp_customize->add_setting('blog_posts_per_page', [
    'default'           => '9',
    'sanitize_callback' => 'absint',
    'transport'         => 'refresh',
]);
$wp_customize->add_control('blog_posts_per_page', [
    'label'       => __('Posts Per Page (Grid Capacity)', 'cr8v-stacks'),
    'description' => __('Select grid capacity. Default is 9 for 3-column symmetry (3 rows of 3).', 'cr8v-stacks'),
    'section'     => 'cr8v_blog_hero_sec',
    'type'        => 'select',
    'choices'     => [
        '6'  => '6 Posts (2 rows of 3)',
        '9'  => '9 Posts (3 rows of 3)',
        '12' => '12 Posts (4 rows of 3)',
        '15' => '15 Posts (5 rows of 3)',
    ],
    'priority'    => 40,
]);


// ── SECTION 2: DISCOVERY CTA SECTION ───────────────────────────
$wp_customize->add_section('cr8v_blog_cta_sec', [
    'title'    => __('2. Blog Discovery CTA', 'cr8v-stacks'),
    'panel'    => 'cr8v_blog_panel',
    'priority' => 20,
]);

_cr8v_text($wp_customize, 'blog_cta_eyebrow', 'cr8v_blog_cta_sec', 'CTA Eyebrow', '↳ READY TO SCALE YOUR PLATFORM?');
_cr8v_text($wp_customize, 'blog_cta_h2', 'cr8v_blog_cta_sec', 'CTA Heading', 'Book A Discovery Call');
_cr8v_textarea($wp_customize, 'blog_cta_sub', 'cr8v_blog_cta_sec', 'CTA Subtitle', 'Speak directly with our technical architecture team to scope your custom website build, WooCommerce system, or AI platform integration.');
_cr8v_text($wp_customize, 'blog_cta_shortcode', 'cr8v_blog_cta_sec', 'Embedded Shortcode', '[sb_booking_form]');


// ── SECTION 3: SINGLE POST MASTER SETTINGS ──────────────────────
// CONSOLIDATED SINGLE POST CONTROLS (SHARE BAR, AI BAR, SIDEBAR CARD, AUTHOR BOX, RELATED GRID, & FAQ ACCORDION)
$wp_customize->add_section('cr8v_single_post_sec', [
    'title'    => __('3. Single Blog Post Settings', 'cr8v-stacks'),
    'panel'    => 'cr8v_blog_panel',
    'priority' => 30,
]);

// ── PART A: SOCIAL SHARE BAR & CDN ICONS ──
$wp_customize->add_setting('single_show_share_bar', ['default' => true, 'sanitize_callback' => 'wp_validate_boolean']);
$wp_customize->add_control('single_show_share_bar', ['label' => __('Show Social Share Bar', 'cr8v-stacks'), 'section' => 'cr8v_single_post_sec', 'type' => 'checkbox']);

_cr8v_text($wp_customize, 'share_label_text', 'cr8v_single_post_sec', 'Share Bar Label', 'SHARE THIS ARTICLE');

$share_platforms = [
    'share_show_x'        => ['lbl' => 'Share on X (Twitter)', 'icon_key' => 'share_icon_x', 'def_icon' => 'https://cdn.simpleicons.org/x/080808'],
    'share_show_linkedin' => ['lbl' => 'Share on LinkedIn', 'icon_key' => 'share_icon_linkedin', 'def_icon' => 'https://cdn.jsdelivr.net/gh/glincker/thesvg@main/public/icons/linkedin/default.svg'],
    'share_show_facebook' => ['lbl' => 'Share on Facebook', 'icon_key' => 'share_icon_facebook', 'def_icon' => 'https://cdn.simpleicons.org/facebook/080808'],
    'share_show_whatsapp' => ['lbl' => 'Share on WhatsApp', 'icon_key' => 'share_icon_whatsapp', 'def_icon' => 'https://cdn.simpleicons.org/whatsapp/080808'],
    'share_show_telegram' => ['lbl' => 'Share on Telegram', 'icon_key' => 'share_icon_telegram', 'def_icon' => 'https://cdn.simpleicons.org/telegram/080808'],
    'share_show_reddit'   => ['lbl' => 'Share on Reddit', 'icon_key' => 'share_icon_reddit', 'def_icon' => 'https://cdn.simpleicons.org/reddit/080808'],
    'share_show_copy'     => ['lbl' => 'Copy Link Button', 'icon_key' => '', 'def_icon' => ''],
];

foreach ($share_platforms as $key => $data) {
    $wp_customize->add_setting($key, ['default' => true, 'sanitize_callback' => 'wp_validate_boolean']);
    $wp_customize->add_control($key, ['label' => __($data['lbl'], 'cr8v-stacks'), 'section' => 'cr8v_single_post_sec', 'type' => 'checkbox']);
    if (!empty($data['icon_key'])) {
        _cr8v_text($wp_customize, $data['icon_key'], 'cr8v_single_post_sec', "{$data['lbl']} Icon CDN URL", $data['def_icon']);
    }
}

// ── PART B: AI DEEP SUMMARY BAR ──
$wp_customize->add_setting('single_show_ai_bar', ['default' => true, 'sanitize_callback' => 'wp_validate_boolean']);
$wp_customize->add_control('single_show_ai_bar', ['label' => __('Show AI Deep Summary Bar', 'cr8v-stacks'), 'section' => 'cr8v_single_post_sec', 'type' => 'checkbox']);

_cr8v_text($wp_customize, 'single_ai_bar_text', 'cr8v_single_post_sec', 'AI Bar Label', 'AI DEEP SUMMARY');

$ai_platforms = [
    'ai_show_chatgpt'    => ['lbl' => 'ChatGPT Extraction Button', 'icon_key' => 'ai_icon_chatgpt', 'def_icon' => 'https://cdn.jsdelivr.net/gh/glincker/thesvg@main/public/icons/openai/light.svg'],
    'ai_show_claude'     => ['lbl' => 'Claude Extraction Button', 'icon_key' => 'ai_icon_claude', 'def_icon' => 'https://cdn.jsdelivr.net/gh/glincker/thesvg@main/public/icons/claude/default.svg'],
    'ai_show_gemini'     => ['lbl' => 'Google Gemini Extraction Button', 'icon_key' => 'ai_icon_gemini', 'def_icon' => 'https://cdn.jsdelivr.net/gh/glincker/thesvg@main/public/icons/gemini/default.svg'],
    'ai_show_perplexity' => ['lbl' => 'Perplexity AI Extraction Button', 'icon_key' => 'ai_icon_perplexity', 'def_icon' => 'https://cdn.jsdelivr.net/gh/glincker/thesvg@main/public/icons/perplexity/default.svg'],
];
foreach ($ai_platforms as $key => $data) {
    $wp_customize->add_setting($key, ['default' => true, 'sanitize_callback' => 'wp_validate_boolean']);
    $wp_customize->add_control($key, ['label' => __($data['lbl'], 'cr8v-stacks'), 'section' => 'cr8v_single_post_sec', 'type' => 'checkbox']);
    _cr8v_text($wp_customize, $data['icon_key'], 'cr8v_single_post_sec', "{$data['lbl']} Icon CDN URL", $data['def_icon']);
}

// ── PART C: SIDEBAR CTA CARD & TECH BADGES ──
_cr8v_text($wp_customize, 'sidebar_cta_trust_label', 'cr8v_single_post_sec', 'Tech Stack Trust Label', 'ENGINEERED ON MODERN STACKS');

$sidebar_icons = [
    'sidebar_show_shopify'   => ['lbl' => 'Shopify CDN Logo', 'icon_key' => 'sidebar_icon_shopify', 'def_icon' => 'https://cdn.simpleicons.org/shopify/FFFFFF'],
    'sidebar_show_wordpress' => ['lbl' => 'WordPress CDN Logo', 'icon_key' => 'sidebar_icon_wordpress', 'def_icon' => 'https://cdn.simpleicons.org/wordpress/FFFFFF'],
    'sidebar_show_claude'    => ['lbl' => 'Claude CDN Logo', 'icon_key' => 'sidebar_icon_claude', 'def_icon' => 'https://cdn.jsdelivr.net/gh/glincker/thesvg@main/public/icons/claude/default.svg'],
    'sidebar_show_openai'    => ['lbl' => 'OpenAI CDN Logo', 'icon_key' => 'sidebar_icon_openai', 'def_icon' => 'https://cdn.jsdelivr.net/gh/glincker/thesvg@main/public/icons/openai/dark.svg'],
];
foreach ($sidebar_icons as $key => $data) {
    $wp_customize->add_setting($key, ['default' => true, 'sanitize_callback' => 'wp_validate_boolean']);
    $wp_customize->add_control($key, ['label' => __($data['lbl'], 'cr8v-stacks'), 'section' => 'cr8v_single_post_sec', 'type' => 'checkbox']);
    _cr8v_text($wp_customize, $data['icon_key'], 'cr8v_single_post_sec', "{$data['lbl']} Icon CDN URL", $data['def_icon']);
}

_cr8v_image($wp_customize, 'sidebar_cta_badge_img', 'cr8v_single_post_sec', 'Badge Illustration Image');
_cr8v_text($wp_customize, 'single_cta_title', 'cr8v_single_post_sec', 'Sidebar CTA Title', 'Your design + build partner');
_cr8v_textarea($wp_customize, 'single_cta_sub', 'cr8v_single_post_sec', 'Sidebar CTA Subtitle', 'Product, websites, and brand — designed and shipped by one senior team.');
_cr8v_text($wp_customize, 'single_cta_btn_text', 'cr8v_single_post_sec', 'Sidebar CTA Button Text', 'Book an intro call');
_cr8v_text($wp_customize, 'single_cta_btn_url', 'cr8v_single_post_sec', 'Sidebar CTA Button URL', '/discovery-call/');

// ── PART D: WORDPRESS AUTHOR CARD BOX ──
$wp_customize->add_setting('single_show_author_card', ['default' => true, 'sanitize_callback' => 'wp_validate_boolean']);
$wp_customize->add_control('single_show_author_card', ['label' => __('Show Author Card Box', 'cr8v-stacks'), 'section' => 'cr8v_single_post_sec', 'type' => 'checkbox']);

_cr8v_text($wp_customize, 'single_author_label', 'cr8v_single_post_sec', 'Author Card Header Label', 'Written By');

// ── PART E: RELATED ARTICLES & FAQ ACCORDION ──
$wp_customize->add_setting('single_show_related', ['default' => true, 'sanitize_callback' => 'wp_validate_boolean']);
$wp_customize->add_control('single_show_related', ['label' => __('Show Related Articles Grid', 'cr8v-stacks'), 'section' => 'cr8v_single_post_sec', 'type' => 'checkbox']);

_cr8v_text($wp_customize, 'single_related_title', 'cr8v_single_post_sec', 'Related Section Title', 'RELATED ARTICLES');

$wp_customize->add_setting('single_show_faq', ['default' => true, 'sanitize_callback' => 'wp_validate_boolean']);
$wp_customize->add_control('single_show_faq', ['label' => __('Show Common Questions FAQ Accordion', 'cr8v-stacks'), 'section' => 'cr8v_single_post_sec', 'type' => 'checkbox']);

_cr8v_text($wp_customize, 'single_faq_title', 'cr8v_single_post_sec', 'FAQ Section Title', 'COMMON QUESTIONS');

// Editable FAQ Questions & Answers
$faq_defaults = [
    1 => ['q' => 'How much does it cost to work with Cr8v Stacks?', 'a' => 'It depends on scope — a brochure site, an ecommerce store, and a custom AI MVP all price differently. Use our cost calculator for an instant range, or talk to us directly for a full quote.'],
    2 => ['q' => 'How long does a typical project take?', 'a' => 'Most website builds run a few weeks from approved design to launch; custom development and AI MVPs vary based on scope. We will give you a real timeline once we understand what you are building.'],
    3 => ['q' => 'What services do you actually offer?', 'a' => 'Web design, AI MVP development, and custom development are our core focus — alongside brand strategy, brand identity, and digital marketing.'],
    4 => ['q' => 'Do you build on WordPress, Shopify, or something else?', 'a' => 'All of the above, plus WooCommerce and fully custom builds. We recommend the platform based on what your business needs.'],
    5 => ['q' => 'Which payment gateways do you integrate?', 'a' => 'This depends on your platform and region — we will confirm exact options (Stripe, Paystack, and others) once we know your setup.'],
    6 => ['q' => 'Can you redesign or rebuild a site that already exists?', 'a' => 'Yes — a large share of our work is exactly this. We have rebuilt everything from basic landing pages to full property platforms.'],
];

foreach ($faq_defaults as $num => $faq) {
    _cr8v_text($wp_customize, "single_faq_q{$num}", 'cr8v_single_post_sec', "FAQ #{$num} Question", $faq['q']);
    _cr8v_textarea($wp_customize, "single_faq_a{$num}", 'cr8v_single_post_sec', "FAQ #{$num} Answer", $faq['a']);
}
