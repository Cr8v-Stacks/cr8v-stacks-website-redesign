<?php
/**
 * CR8V Stacks — page-service.php
 * Template Name: Service Page
 *
 * A single flexible template for ALL 11 service pages.
 * Content driven by ACF fields (or native post meta as fallback).
 * Assign this template to a page via: Edit Page → Page Attributes → Template → Service Page
 *
 * Required ACF group: "Service Page Fields"
 * Keys:
 *   service_eyebrow       — e.g. "Strategic Interface & User Experience Engineering"
 *   service_headline      — e.g. "Conversion-Driven Web Design & UX"
 *   service_headline_em   — italic emphasis part of headline (optional)
 *   service_intro         — hero paragraph
 *   service_cta_text      — primary CTA label
 *   service_cta_link      — primary CTA URL
 *   service_pills[]       — tech stack pills (repeater: label)
 *   service_benefits[]    — why-us cards (repeater: title, desc)
 *   service_process[]     — how we work steps (repeater: num, title, desc)
 *   service_faq[]         — FAQs (repeater: question, answer)
 *   related_case_study_id — post ID of a related case study to showcase
 */
defined('ABSPATH') || exit;

$pid = get_the_ID();

// ── ACF / meta fields ─────────────────────────────────────────
$eyebrow     = cr8v_get_meta($pid, 'service_eyebrow',     get_the_title());
$headline    = cr8v_get_meta($pid, 'service_headline',    get_the_title());
$headline_em = cr8v_get_meta($pid, 'service_headline_em', '');
$intro       = cr8v_get_meta($pid, 'service_intro',       get_the_excerpt());
$cta_text    = cr8v_get_meta($pid, 'service_cta_text',    'Get a Quote');
$cta_link    = cr8v_get_meta($pid, 'service_cta_link',    home_url('/discovery-call/'));

$pills      = function_exists('get_field') ? (get_field('service_pills', $pid)    ?: []) : [];
$benefits   = function_exists('get_field') ? (get_field('service_benefits', $pid) ?: []) : [];
$process    = function_exists('get_field') ? (get_field('service_process', $pid)  ?: []) : [];
$faqs       = function_exists('get_field') ? (get_field('service_faq', $pid)      ?: []) : [];
$related_id = cr8v_get_meta($pid, 'related_case_study_id', 0);

// Default fallbacks if ACF repeaters have not been populated yet
if (empty($benefits)) {
    $benefits = [
        ['title' => 'High-Performance Engineering', 'desc' => 'Custom architecture engineered for sub-second load times, maximum SEO indexing, and liquid smooth 60fps animations.'],
        ['title' => 'Conversion-Focused UX', 'desc' => 'Strategic user flows, persuasive micro-copy, and frictionless CTAs designed to turn visitors into qualified leads.'],
        ['title' => 'Scalable & Future-Proof', 'desc' => 'Modular component architecture built to grow with your business without technical debt or legacy clutter.']
    ];
}

if (empty($process)) {
    $process = [
        ['num' => '01', 'title' => 'Discovery & Architecture', 'desc' => 'Deep dive into goals, user personas, tech stack, and content hierarchy.'],
        ['num' => '02', 'title' => 'Design & Prototyping', 'desc' => 'High-fidelity UI design, visual systems, and interactive motion prototypes.'],
        ['num' => '03', 'title' => 'Engineering & Integration', 'desc' => 'Clean code, responsive layout engineering, custom fields, and CMS integration.'],
        ['num' => '04', 'title' => 'Launch & Optimization', 'desc' => 'Pre-launch audit, performance testing, SEO verification, and live deployment.']
    ];
}

if (empty($faqs)) {
    $faqs = [
        ['question' => 'How long does a project typically take?', 'answer' => 'Typically 2 to 6 weeks depending on project scope, custom interactive features, and content readiness.'],
        ['question' => 'Can I manage and update content myself?', 'answer' => 'Yes! All headlines, text copy, images, case studies, and menus are fully editable via WordPress Admin and Live Customizer.'],
        ['question' => 'Do you provide ongoing support & maintenance?', 'answer' => 'Yes, we offer ongoing performance optimization, security monitoring, and continuous design and feature updates.']
    ];
}
if (empty($pills)) {
    $pills = ['Strategy', 'UI/UX Design', 'Engineering', 'Performance', 'SEO'];
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo esc_html($headline); ?> | <?php bloginfo('name'); ?></title>
  <meta name="description" content="<?php echo esc_attr(wp_trim_words($intro, 25)); ?>">
  <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri() . '/assets/css/shared-service-components.css'); ?>">
  <?php wp_head(); ?>
</head>
<body <?php body_class('cr8v-service-page'); ?>>
<?php wp_body_open(); ?>
<?php get_template_part('parts/header'); ?>

<div class="c8isv-root">

  <!-- ══ HERO (Dark with animated SVG blobs) ═════════════════════ -->
  <div class="c8isv-hero-wrap" data-c8isv-hero>
    <div class="c8isv-hero-atmos">
      <svg class="c8isv-atmos-svg" viewBox="0 0 400 200" preserveAspectRatio="none">
        <defs>
          <filter id="c8srvGoo" x="-50%" y="-50%" width="200%" height="200%">
            <feTurbulence type="fractalNoise" baseFrequency="0.008 0.02" numOctaves="2" seed="9" result="turb">
              <animate attributeName="baseFrequency" values="0.008 0.02;0.022 0.048;0.008 0.02" dur="18s" repeatCount="indefinite"/>
            </feTurbulence>
            <feDisplacementMap in="SourceGraphic" in2="turb" scale="44" xChannelSelector="R" yChannelSelector="G"/>
            <feGaussianBlur stdDeviation="5"/>
          </filter>
        </defs>
        <g filter="url(#c8srvGoo)">
          <circle class="c8isv-atmos-blob" cx="80" cy="60" r="75" fill="#0047E1">
            <animate attributeName="cx" values="80;165;55;80" dur="21s" repeatCount="indefinite"/>
            <animate attributeName="cy" values="60;28;110;60" dur="21s" repeatCount="indefinite"/>
          </circle>
          <circle class="c8isv-atmos-blob" cx="290" cy="140" r="55" fill="#3D6BFF">
            <animate attributeName="cx" values="290;175;320;290" dur="17s" repeatCount="indefinite"/>
            <animate attributeName="cy" values="140;88;162;140" dur="17s" repeatCount="indefinite"/>
          </circle>
          <circle class="c8isv-atmos-blob" cx="200" cy="80" r="42" fill="#0A1A6E">
            <animate attributeName="cx" values="200;330;145;200" dur="24s" repeatCount="indefinite"/>
            <animate attributeName="cy" values="80;160;48;80" dur="24s" repeatCount="indefinite"/>
          </circle>
        </g>
      </svg>
    </div>
    <div class="c8isv-hero-glow" data-c8isv-glow></div>
    <div class="c8isv-wrap">
      <div class="c8isv-hero-grid">
        <div class="c8isv-hero-content">

          <!-- Breadcrumb -->
          <div class="c8isv-breadcrumb">
            <a href="<?php echo esc_url(home_url('/services/')); ?>">SERVICES</a>
            <span>/</span>
            <span class="is-current"><?php the_title(); ?></span>
          </div>

          <div class="c8isv-label is-light"><?php echo esc_html($eyebrow); ?></div>

          <h1 class="c8isv-headline">
            <?php echo esc_html($headline); ?>
            <?php if ($headline_em) : ?>
            <span class="c8isv-serif"> <?php echo esc_html($headline_em); ?></span>
            <?php endif; ?>
          </h1>

          <p class="c8isv-hero-intro"><?php echo esc_html($intro); ?></p>

          <div class="c8isv-hero-ctas">
            <a href="<?php echo esc_url($cta_link); ?>" class="c8isv-btn-primary"><?php echo esc_html($cta_text); ?> →</a>
            <a href="<?php echo esc_url(home_url('/case-studies/')); ?>" class="c8isv-btn-ghost">See Our Work →</a>
          </div>

          <!-- Tech stack pills -->
          <?php if ($pills) : ?>
          <div class="c8isv-pill-row">
            <?php foreach ($pills as $pill) : ?>
            <span class="c8isv-pill"><?php echo esc_html($pill['label'] ?? $pill); ?></span>
            <?php endforeach; ?>
          </div>
          <?php endif; ?>

        </div>

        <!-- Right: Canvas animation area (shared JS from assets) -->
        <div class="c8isv-anim-container" id="c8isv-anim-wrapper">
          <canvas id="c8isv-canvas-bg"></canvas>
          <canvas id="c8isv-canvas-main"></canvas>
          <canvas id="c8isv-canvas-noise"></canvas>
          <div id="c8isv-anim-fog"></div>
        </div>
      </div>
    </div>
  </div>

  <!-- ══ WHY SECTION (Benefits / Flank Cards) ════════════════════ -->
  <?php if (!empty($benefits)) : ?>
  <div class="c8isv-flank-section">
    <div class="c8isv-flank-inner">
      <div class="c8isv-label c8isv-reveal is-center">Why Choose CR8V Stacks</div>
      <h2 class="c8isv-section-title c8isv-reveal">Built for Performance, Precision &amp; Growth</h2>
      <div class="c8isv-flank-container" data-c8isv-flank-trigger>
        <?php foreach ($benefits as $i => $b) : ?>
        <div class="c8isv-flank-card" data-c8isv-flank-card="<?php echo esc_attr($i); ?>">
          <div class="c8isv-flank-card-inner">
            <div class="c8isv-flank-title"><?php echo esc_html($b['title'] ?? ''); ?></div>
            <p class="c8isv-flank-desc"><?php echo esc_html($b['desc'] ?? ''); ?></p>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
  <?php endif; ?>

  <!-- ══ BODY CONTENT (Gutenberg) ════════════════════════════════ -->
  <?php if (have_posts()) : while (have_posts()) : the_post();
    $content = get_the_content();
    if ($content) : ?>
  <div class="c8isv-wrap" style="padding:4rem 0;">
    <div class="c8isv-body-content"><?php the_content(); ?></div>
  </div>
  <?php endif; endwhile; endif; ?>

  <!-- ══ PROCESS STEPS ═══════════════════════════════════════════ -->
  <?php if (!empty($process)) : ?>
  <div class="c8srv-process-section">
    <div class="c8isv-wrap">
      <div class="c8isv-label is-center">// HOW WE WORK</div>
      <h2 class="c8isv-section-title" style="text-align:center;">Our Process</h2>
      <div class="c8srv-process-grid">
        <?php foreach ($process as $step) : ?>
        <div class="c8srv-process-item">
          <div class="c8srv-process-num"><?php echo esc_html($step['num'] ?? '01'); ?></div>
          <div class="c8srv-process-title"><?php echo esc_html($step['title'] ?? ''); ?></div>
          <p class="c8srv-process-desc"><?php echo esc_html($step['desc'] ?? ''); ?></p>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
  <?php endif; ?>

  <!-- ══ RELATED CASE STUDY ══════════════════════════════════════ -->
  <?php if ($related_id) :
    $cs = get_post($related_id);
    if ($cs && $cs->post_status === 'publish') :
      $cs_m1v = cr8v_get_meta($cs->ID, 'metric_1_value', '');
      $cs_m1l = cr8v_get_meta($cs->ID, 'metric_1_label', '');
  ?>
  <div class="c8isv-wrap" style="padding:0 0 4rem;">
    <div class="c8srv-related-section">
      <div class="c8isv-label">// FEATURED WORK</div>
      <h2 class="c8isv-section-title">From Our Portfolio</h2>
      <a href="<?php echo esc_url(get_permalink($cs->ID)); ?>" class="c8srv-related-card">
        <?php if (has_post_thumbnail($cs->ID)) : ?>
        <div class="c8srv-related-img">
          <?php echo get_the_post_thumbnail($cs->ID, 'cr8v-card', ['class' => 'c8srv-related-img-el']); ?>
        </div>
        <?php endif; ?>
        <div class="c8srv-related-body">
          <div class="c8isv-label">CASE STUDY</div>
          <h3 class="c8srv-related-title"><?php echo esc_html($cs->post_title); ?></h3>
          <p class="c8srv-related-desc"><?php echo cr8v_excerpt($cs->post_excerpt, 20); ?></p>
          <?php if ($cs_m1v) : ?>
          <div class="c8srv-related-metric">
            <span class="c8srv-related-val"><?php echo esc_html($cs_m1v); ?></span>
            <span class="c8srv-related-lbl"><?php echo esc_html($cs_m1l); ?></span>
          </div>
          <?php endif; ?>
          <span class="c8srv-related-link">View Case Study →</span>
        </div>
      </a>
    </div>
  </div>
  <?php endif; endif; ?>

  <!-- ══ FAQ ACCORDION ═══════════════════════════════════════════ -->
  <?php if (!empty($faqs)) : ?>
  <div class="c8isv-wrap" style="padding-bottom:5rem;">
    <div class="c8srv-faq-section">
      <div class="c8isv-label is-center">// FAQ</div>
      <h2 class="c8isv-section-title" style="text-align:center;">Frequently Asked Questions</h2>
      <div class="c8srv-faq-list">
        <?php foreach ($faqs as $i => $faq) : ?>
        <details class="c8srv-faq-item" <?php echo $i === 0 ? 'open' : ''; ?>>
          <summary class="c8srv-faq-q"><?php echo esc_html($faq['question'] ?? ''); ?></summary>
          <div class="c8srv-faq-a"><p><?php echo esc_html($faq['answer'] ?? ''); ?></p></div>
        </details>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
  <?php endif; ?>

  <!-- ══ BOTTOM CTA ══════════════════════════════════════════════ -->
  <div class="c8isv-cta-section">
    <div class="c8isv-wrap">
      <div class="c8isv-cta-inner">
        <div class="c8isv-label is-center">// READY TO START</div>
        <h2 class="c8isv-cta-title">Let's Build Something That Works</h2>
        <p class="c8isv-cta-sub">Book a no-obligation discovery call and let's scope your project.</p>
        <a href="<?php echo esc_url(home_url('/discovery-call/')); ?>" class="c8isv-btn-primary">
          Book a Discovery Call →
        </a>
      </div>
    </div>
  </div>

</div><!-- /.c8isv-root -->

<?php get_template_part('parts/footer'); ?>
<?php wp_footer(); ?>
</body>
</html>
