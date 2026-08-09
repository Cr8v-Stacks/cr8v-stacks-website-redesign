<?php
/**
 * CR8V Stacks — inc/acf-fields.php
 * Tropos Theme — ACF Field Group Definitions
 *
 * Registers all ACF field groups programmatically.
 * This means you do NOT need to import JSON or use the ACF UI —
 * fields are available on a fresh WordPress install as soon as
 * the theme is activated (as long as ACF Free/Pro is installed).
 *
 * Field Groups:
 *  1. Case Study Fields   — used in single-case_study.php
 *  2. Service Page Fields — used in page-service.php
 *  3. About Page Fields   — used in page-about.php
 */

defined('ABSPATH') || exit;

if (!function_exists('acf_add_local_field_group')) {
    return; // ACF not active — bail gracefully
}

add_action('acf/init', 'cr8v_register_acf_fields');

function cr8v_register_acf_fields(): void {

    /* ────────────────────────────────────────────
       1. CASE STUDY FIELDS
    ──────────────────────────────────────────── */
    acf_add_local_field_group([
        'key'    => 'group_cr8v_case_study',
        'title'  => 'Case Study Fields',
        'fields' => [

            // ── Identity ────────────────────────
            [
                'key'   => 'field_cs_client_name',
                'label' => 'Client Name',
                'name'  => 'client_name',
                'type'  => 'text',
            ],
            [
                'key'   => 'field_cs_project_type',
                'label' => 'Project Type',
                'name'  => 'project_type',
                'type'  => 'text',
                'instructions' => 'e.g. "Full-Stack Web Build & Brand Architecture"',
            ],
            [
                'key'   => 'field_cs_timeline',
                'label' => 'Timeline',
                'name'  => 'timeline',
                'type'  => 'text',
                'instructions' => 'e.g. "6 Weeks"',
            ],
            [
                'key'   => 'field_cs_industry',
                'label' => 'Industry',
                'name'  => 'industry',
                'type'  => 'text',
            ],
            [
                'key'   => 'field_cs_project_lead',
                'label' => 'Project Lead',
                'name'  => 'project_lead',
                'type'  => 'text',
                'default_value' => 'CR8V Stacks',
            ],

            // ── Hero Performance Metrics ────────
            [
                'key'   => 'field_cs_tab_metrics',
                'label' => 'Performance Metrics',
                'type'  => 'tab',
            ],
            [
                'key'   => 'field_cs_m1v',
                'label' => 'Metric 1 — Value',
                'name'  => 'metric_1_value',
                'type'  => 'text',
                'instructions' => 'e.g. "+312%"',
            ],
            [
                'key'   => 'field_cs_m1l',
                'label' => 'Metric 1 — Label',
                'name'  => 'metric_1_label',
                'type'  => 'text',
                'instructions' => 'e.g. "Direct Booking Growth"',
            ],
            [
                'key'   => 'field_cs_m2v',
                'label' => 'Metric 2 — Value',
                'name'  => 'metric_2_value',
                'type'  => 'text',
            ],
            [
                'key'   => 'field_cs_m2l',
                'label' => 'Metric 2 — Label',
                'name'  => 'metric_2_label',
                'type'  => 'text',
            ],
            [
                'key'   => 'field_cs_m3v',
                'label' => 'Metric 3 — Value',
                'name'  => 'metric_3_value',
                'type'  => 'text',
            ],
            [
                'key'   => 'field_cs_m3l',
                'label' => 'Metric 3 — Label',
                'name'  => 'metric_3_label',
                'type'  => 'text',
            ],
            [
                'key'   => 'field_cs_m4v',
                'label' => 'Metric 4 — Value',
                'name'  => 'metric_4_value',
                'type'  => 'text',
            ],
            [
                'key'   => 'field_cs_m4l',
                'label' => 'Metric 4 — Label',
                'name'  => 'metric_4_label',
                'type'  => 'text',
            ],

            // ── Overview ────────────────────────
            [
                'key'   => 'field_cs_tab_overview',
                'label' => 'Overview',
                'type'  => 'tab',
            ],
            [
                'key'   => 'field_cs_overview_headline',
                'label' => 'Overview Headline',
                'name'  => 'overview_headline',
                'type'  => 'text',
                'default_value' => 'Project Overview',
            ],
            [
                'key'   => 'field_cs_overview_body',
                'label' => 'Overview Body',
                'name'  => 'overview_body',
                'type'  => 'textarea',
                'rows'  => 5,
            ],

            // ── Scope Items (Repeater) ───────────
            [
                'key'        => 'field_cs_tab_scope',
                'label'      => 'Scope of Work',
                'type'       => 'tab',
            ],
            [
                'key'        => 'field_cs_scope_items',
                'label'      => 'Scope Deliverable Items',
                'name'       => 'scope_items',
                'type'       => 'repeater',
                'button_label' => 'Add Deliverable',
                'layout'     => 'block',
                'sub_fields' => [
                    [
                        'key'   => 'field_cs_scope_icon',
                        'label' => 'Icon SVG (optional)',
                        'name'  => 'icon_svg',
                        'type'  => 'textarea',
                        'rows'  => 2,
                        'instructions' => 'Paste raw <svg>...</svg> markup. Leave blank for default checkmark.',
                    ],
                    [
                        'key'   => 'field_cs_scope_title',
                        'label' => 'Deliverable Title',
                        'name'  => 'title',
                        'type'  => 'text',
                    ],
                    [
                        'key'   => 'field_cs_scope_desc',
                        'label' => 'Description',
                        'name'  => 'description',
                        'type'  => 'textarea',
                        'rows'  => 3,
                    ],
                ],
            ],

            // ── Gallery ─────────────────────────
            [
                'key'   => 'field_cs_tab_gallery',
                'label' => 'Gallery',
                'type'  => 'tab',
            ],
            [
                'key'   => 'field_cs_gallery_1',
                'label' => 'Asset 01 — Horizontal Image',
                'name'  => 'gallery_asset_1',
                'type'  => 'image',
                'return_format' => 'url',
                'instructions' => 'Landscape/horizontal format. Style guide, branding overview, or desktop screenshot.',
            ],
            [
                'key'   => 'field_cs_gallery_2',
                'label' => 'Asset 02 — Horizontal Image',
                'name'  => 'gallery_asset_2',
                'type'  => 'image',
                'return_format' => 'url',
                'instructions' => 'Landscape/horizontal format. UI detail, code, or technical dashboard.',
            ],
            [
                'key'   => 'field_cs_gallery_3',
                'label' => 'Asset 03 — Tall Image',
                'name'  => 'gallery_asset_3',
                'type'  => 'image',
                'return_format' => 'url',
                'instructions' => 'Tall/portrait format. Mobile mockup, brand poster, or full-page screenshot.',
            ],

            // ── Results ─────────────────────────
            [
                'key'   => 'field_cs_tab_results',
                'label' => 'Results',
                'type'  => 'tab',
            ],
            [
                'key'   => 'field_cs_results_headline',
                'label' => 'Results Headline',
                'name'  => 'results_headline',
                'type'  => 'text',
                'default_value' => 'The Results',
            ],
            [
                'key'   => 'field_cs_results_body',
                'label' => 'Results Body',
                'name'  => 'results_body',
                'type'  => 'textarea',
                'rows'  => 5,
            ],
        ],
        'location' => [
            [['param' => 'post_type', 'operator' => '==', 'value' => 'case_study']],
        ],
        'menu_order'  => 0,
        'position'    => 'normal',
        'style'       => 'default',
        'label_placement' => 'top',
    ]);

    /* ────────────────────────────────────────────
       2. SERVICE PAGE FIELDS
    ──────────────────────────────────────────── */
    acf_add_local_field_group([
        'key'   => 'group_cr8v_service_page',
        'title' => 'Service Page Fields',
        'fields' => [

            // ── Hero ────────────────────────────
            [
                'key'   => 'field_sp_eyebrow',
                'label' => 'Hero Eyebrow',
                'name'  => 'service_eyebrow',
                'type'  => 'text',
                'instructions' => 'e.g. "Strategic Interface & User Experience Engineering"',
            ],
            [
                'key'   => 'field_sp_headline',
                'label' => 'Hero Headline',
                'name'  => 'service_headline',
                'type'  => 'text',
            ],
            [
                'key'   => 'field_sp_headline_em',
                'label' => 'Headline Emphasis (italic part)',
                'name'  => 'service_headline_em',
                'type'  => 'text',
                'instructions' => 'Optional. Appended to headline in italic serif.',
            ],
            [
                'key'   => 'field_sp_intro',
                'label' => 'Hero Intro Paragraph',
                'name'  => 'service_intro',
                'type'  => 'textarea',
                'rows'  => 4,
            ],
            [
                'key'   => 'field_sp_cta_text',
                'label' => 'CTA Button Text',
                'name'  => 'service_cta_text',
                'type'  => 'text',
                'default_value' => 'Get a Quote',
            ],
            [
                'key'   => 'field_sp_cta_link',
                'label' => 'CTA Button Link',
                'name'  => 'service_cta_link',
                'type'  => 'url',
            ],

            // ── Tech Stack Pills ────────────────
            [
                'key'        => 'field_sp_pills',
                'label'      => 'Tech Stack Pills',
                'name'       => 'service_pills',
                'type'       => 'repeater',
                'button_label' => 'Add Pill',
                'layout'     => 'table',
                'sub_fields' => [
                    [
                        'key'   => 'field_sp_pill_label',
                        'label' => 'Label',
                        'name'  => 'label',
                        'type'  => 'text',
                    ],
                ],
            ],

            // ── Benefits / Why Section ──────────
            [
                'key'        => 'field_sp_benefits',
                'label'      => 'Why CR8V Stacks — Benefit Cards',
                'name'       => 'service_benefits',
                'type'       => 'repeater',
                'button_label' => 'Add Benefit Card',
                'layout'     => 'block',
                'sub_fields' => [
                    [
                        'key'   => 'field_sp_benefit_title',
                        'label' => 'Title',
                        'name'  => 'title',
                        'type'  => 'text',
                    ],
                    [
                        'key'   => 'field_sp_benefit_desc',
                        'label' => 'Description',
                        'name'  => 'desc',
                        'type'  => 'textarea',
                        'rows'  => 3,
                    ],
                ],
            ],

            // ── Process Steps ───────────────────
            [
                'key'        => 'field_sp_process',
                'label'      => 'Process Steps',
                'name'       => 'service_process',
                'type'       => 'repeater',
                'button_label' => 'Add Step',
                'layout'     => 'table',
                'sub_fields' => [
                    [
                        'key'   => 'field_sp_process_num',
                        'label' => 'Step Number',
                        'name'  => 'num',
                        'type'  => 'text',
                        'instructions' => 'e.g. "01"',
                    ],
                    [
                        'key'   => 'field_sp_process_title',
                        'label' => 'Step Title',
                        'name'  => 'title',
                        'type'  => 'text',
                    ],
                    [
                        'key'   => 'field_sp_process_desc',
                        'label' => 'Description',
                        'name'  => 'desc',
                        'type'  => 'textarea',
                        'rows'  => 2,
                    ],
                ],
            ],

            // ── Related Case Study ───────────────
            [
                'key'          => 'field_sp_related_cs',
                'label'        => 'Related Case Study',
                'name'         => 'related_case_study_id',
                'type'         => 'post_object',
                'post_type'    => ['case_study'],
                'return_format'=> 'id',
                'instructions' => 'Select a case study to feature in the "From Our Portfolio" section.',
            ],

            // ── FAQ ─────────────────────────────
            [
                'key'        => 'field_sp_faq',
                'label'      => 'FAQ Items',
                'name'       => 'service_faq',
                'type'       => 'repeater',
                'button_label' => 'Add FAQ',
                'layout'     => 'block',
                'sub_fields' => [
                    [
                        'key'   => 'field_sp_faq_q',
                        'label' => 'Question',
                        'name'  => 'question',
                        'type'  => 'text',
                    ],
                    [
                        'key'   => 'field_sp_faq_a',
                        'label' => 'Answer',
                        'name'  => 'answer',
                        'type'  => 'textarea',
                        'rows'  => 4,
                    ],
                ],
            ],
        ],
        'location' => [
            [[
                'param'    => 'page_template',
                'operator' => '==',
                'value'    => 'page-service.php',
            ]],
        ],
        'menu_order'  => 0,
        'position'    => 'normal',
        'style'       => 'default',
        'label_placement' => 'top',
    ]);

    /* ────────────────────────────────────────────
       3. ABOUT PAGE FIELDS
    ──────────────────────────────────────────── */
    acf_add_local_field_group([
        'key'   => 'group_cr8v_about_page',
        'title' => 'About Page Fields',
        'fields' => [
            [
                'key'   => 'field_ab_eyebrow',
                'label' => 'Hero Eyebrow',
                'name'  => 'about_eyebrow',
                'type'  => 'text',
                'default_value' => '// STUDIO',
            ],
            [
                'key'   => 'field_ab_headline',
                'label' => 'Hero Headline',
                'name'  => 'about_headline',
                'type'  => 'text',
                'default_value' => 'We Build Businesses That Win Online',
            ],
            [
                'key'   => 'field_ab_sub',
                'label' => 'Hero Sub Text',
                'name'  => 'about_sub',
                'type'  => 'textarea',
                'rows'  => 3,
                'default_value' => 'Strategy, design, and liquid performance engineering for ambitious brands.',
            ],
        ],
        'location' => [
            [[
                'param'    => 'page_template',
                'operator' => '==',
                'value'    => 'page-about.php',
            ]],
        ],
        'menu_order'  => 0,
        'position'    => 'normal',
        'style'       => 'default',
        'label_placement' => 'top',
    ]);
}
