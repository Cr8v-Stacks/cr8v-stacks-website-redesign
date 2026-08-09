<?php
/**
 * CR8V Stacks — single-case_study.php
 * Single Case Study template. ACF fields drive all content.
 * Edit each case study: WP Admin → Case Studies → [title] → Edit
 *
 * Required ACF field group: "Case Study Fields"
 * Keys: client_name, project_type, timeline, industry,
 *       metric_1_value, metric_1_label, metric_2_value, metric_2_label,
 *       metric_3_value, metric_3_label, metric_4_value, metric_4_label,
 *       project_lead, overview_headline, overview_body,
 *       scope_items (repeater: icon_svg, title, description),
 *       gallery_asset_1, gallery_asset_2, gallery_asset_3 (tall),
 *       results_headline, results_body
 */
defined('ABSPATH') || exit;

if (!have_posts()) { wp_redirect(home_url('/case-studies/')); exit; }
the_post();

$post_id = get_the_ID();

// ── Meta fields (ACF or native meta fallback) ─────────────────
$client_name     = cr8v_get_meta($post_id, 'client_name',     get_the_title());
$project_type    = cr8v_get_meta($post_id, 'project_type',    '');
$timeline        = cr8v_get_meta($post_id, 'timeline',        '');
$industry        = cr8v_get_meta($post_id, 'industry',        '');
$project_lead    = cr8v_get_meta($post_id, 'project_lead',    'CR8V Stacks');

$m1v = cr8v_get_meta($post_id, 'metric_1_value', '');
$m1l = cr8v_get_meta($post_id, 'metric_1_label', '');
$m2v = cr8v_get_meta($post_id, 'metric_2_value', '');
$m2l = cr8v_get_meta($post_id, 'metric_2_label', '');
$m3v = cr8v_get_meta($post_id, 'metric_3_value', '');
$m3l = cr8v_get_meta($post_id, 'metric_3_label', '');
$m4v = cr8v_get_meta($post_id, 'metric_4_value', '');
$m4l = cr8v_get_meta($post_id, 'metric_4_label', '');

$overview_headline = cr8v_get_meta($post_id, 'overview_headline', 'Project Overview');
$overview_body     = cr8v_get_meta($post_id, 'overview_body',     '');
$results_headline  = cr8v_get_meta($post_id, 'results_headline',  'The Results');
$results_body      = cr8v_get_meta($post_id, 'results_body',      '');

// Gallery images
$gallery_1 = cr8v_get_meta($post_id, 'gallery_asset_1', '');
$gallery_2 = cr8v_get_meta($post_id, 'gallery_asset_2', '');
$gallery_3 = cr8v_get_meta($post_id, 'gallery_asset_3', '');

// Scope items (ACF repeater — fallback to empty array)
$scope_items = function_exists('get_field') ? (get_field('scope_items', $post_id) ?: []) : [];

// Service taxonomy pills
$service_terms = get_the_terms($post_id, 'service_type') ?: [];
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Case Study: <?php echo esc_html($client_name); ?> | <?php bloginfo('name'); ?></title>
  <meta name="description" content="<?php echo esc_attr(get_the_excerpt()); ?>">
  <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri() . '/assets/css/shared-service-components.css'); ?>">
  <?php wp_head(); ?>
</head>
<body <?php body_class('cr8v-case-study'); ?>>
<?php wp_body_open(); ?>
<?php get_template_part('parts/header'); ?>

<div class="c8cs-root">

  <!-- ══ HERO ══════════════════════════════════════════════════ -->
  <div class="c8cs-hero">

    <!-- Atmospheric SVG backdrop -->
    <div class="c8cs-hero-atmos" id="c8cs-hero-atmos">
      <svg class="c8cs-atmos-svg" viewBox="0 0 1440 600" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice">
        <defs>
          <radialGradient id="blobA" cx="30%" cy="30%" r="60%"><stop offset="0%" stop-color="#0047E1" stop-opacity="0.18"/><stop offset="100%" stop-color="#0047E1" stop-opacity="0"/></radialGradient>
          <radialGradient id="blobB" cx="75%" cy="70%" r="50%"><stop offset="0%" stop-color="#3D6BFF" stop-opacity="0.12"/><stop offset="100%" stop-color="#3D6BFF" stop-opacity="0"/></radialGradient>
        </defs>
        <ellipse class="c8cs-atmos-blob" cx="320" cy="180" rx="480" ry="340" fill="url(#blobA)"/>
        <ellipse class="c8cs-atmos-blob" cx="1100" cy="420" rx="380" ry="260" fill="url(#blobB)"/>
      </svg>
      <div class="c8cs-atmos-glow" id="c8cs-atmos-glow"></div>
    </div>

    <div class="c8cs-wrap">
      <!-- Back link -->
      <a href="<?php echo esc_url(home_url('/case-studies/')); ?>" class="c8cs-back-btn" style="display:inline-flex;align-items:center;gap:6px;font-family:'Space Mono',monospace;font-size:10px;letter-spacing:.15em;text-transform:uppercase;color:#0047E1;margin-bottom:2.5rem;">
        ← Back to Case Studies
      </a>

      <div class="c8cs-label">CASE STUDY</div>
      <h1 class="c8cs-headline">
        <?php echo esc_html(get_the_title()); ?>
        <?php if ($project_type) : ?>
        <span class="c8cs-serif"> — <?php echo esc_html($project_type); ?></span>
        <?php endif; ?>
      </h1>

      <p class="c8cs-lead"><?php echo esc_html(get_the_excerpt()); ?></p>

      <!-- Service type pills -->
      <?php if ($service_terms) : ?>
      <div class="fylla-pill-row">
        <?php foreach ($service_terms as $term) : ?>
        <span class="fylla-pill"><?php echo esc_html($term->name); ?></span>
        <?php endforeach; ?>
      </div>
      <?php endif; ?>

      <!-- Meta grid: 4 key metrics -->
      <div class="c8cs-meta-grid">
        <?php
        $meta_pairs = [
            ['Client',       $client_name],
            ['Industry',     $industry ?: (($terms = get_the_terms($post_id, 'industry')) ? $terms[0]->name : '')],
            ['Timeline',     $timeline],
            ['Lead',         $project_lead],
        ];
        foreach ($meta_pairs as [$lbl, $val]) :
            if (!$val) continue;
        ?>
        <div class="c8cs-meta-item">
          <div class="c8cs-meta-lbl"><?php echo esc_html($lbl); ?></div>
          <div class="c8cs-meta-val"><?php echo esc_html($val); ?></div>
        </div>
        <?php endforeach; ?>
      </div>

      <!-- Performance metrics (from ACF fields) -->
      <?php if ($m1v || $m2v || $m3v || $m4v) : ?>
      <div class="c8cs-meta-grid" style="margin-top:1.5rem;">
        <?php
        $metrics = [[$m1v,$m1l],[$m2v,$m2l],[$m3v,$m3l],[$m4v,$m4l]];
        foreach ($metrics as [$val, $lbl]) :
            if (!$val) continue;
        ?>
        <div class="c8cs-meta-item">
          <div class="c8cs-meta-val" style="font-size:1.75rem;color:#0047E1;"><?php echo esc_html($val); ?></div>
          <div class="c8cs-meta-lbl"><?php echo esc_html($lbl); ?></div>
        </div>
        <?php endforeach; ?>
      </div>
      <?php endif; ?>
    </div>
  </div>

  <!-- ══ MAIN HERO IMAGE (Scroll-grow) ═════════════════════════ -->
  <?php if (has_post_thumbnail()) : ?>
  <div class="c8cs-grow-media-wrapper">
    <div class="c8cs-main-img-box" id="c8cs-main-img-box">
      <?php the_post_thumbnail('cr8v-hero', ['class' => 'c8cs-main-img']); ?>
    </div>
  </div>
  <?php endif; ?>

  <!-- ══ OVERVIEW SPLIT SECTION ════════════════════════════════ -->
  <div class="c8cs-wrap">
    <div class="c8cs-split-section">

      <!-- Left: sticky headline -->
      <div class="c8cs-split-left">
        <div class="c8cs-label">// OVERVIEW</div>
        <div class="c8cs-split-title"><?php echo esc_html($overview_headline); ?></div>
        <div class="c8cs-body-content">
          <?php echo wpautop(esc_html($overview_body)); ?>
        </div>
      </div>

      <!-- Right: scope deliverables -->
      <div class="c8cs-split-right">
        <?php if (!empty($scope_items)) :
          foreach ($scope_items as $item) : ?>
        <div class="fylla-value-item">
          <div class="fylla-value-icon-box">
            <?php if (!empty($item['icon_svg'])) : ?>
              <?php echo wp_kses_post($item['icon_svg']); ?>
            <?php else : ?>
              <svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" width="24" height="24"><path d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/></svg>
            <?php endif; ?>
          </div>
          <div>
            <div class="fylla-value-h3"><?php echo esc_html($item['title'] ?? ''); ?></div>
            <div class="fylla-value-desc"><?php echo esc_html($item['description'] ?? ''); ?></div>
          </div>
        </div>
          <?php endforeach;
        else : ?>
        <!-- Fallback: use post content as scope body -->
        <div class="fylla-value-item">
          <div class="c8cs-body-content" style="padding:2rem;"><?php the_content(); ?></div>
        </div>
        <?php endif; ?>
      </div>

    </div>
  </div>

  <!-- ══ GALLERY GRID ══════════════════════════════════════════ -->
  <?php if ($gallery_1 || $gallery_2 || $gallery_3) : ?>
  <div class="c8cs-gallery-section">
    <div class="c8cs-wrap">
      <div class="c8cs-gallery-outer-box">
        <div class="c8cs-gallery-header">
          <div class="c8cs-label">// VISUAL SHOWCASE</div>
          <div class="c8cs-gallery-h2">Design &amp; Execution Assets</div>
        </div>
        <div class="c8cs-gallery-grid">
          <?php if ($gallery_1) : ?>
          <div class="c8cs-gallery-img-box">
            <img src="<?php echo esc_url($gallery_1); ?>" alt="<?php echo esc_attr($client_name); ?> — Asset 01" loading="lazy">
          </div>
          <?php endif; ?>
          <?php if ($gallery_2) : ?>
          <div class="c8cs-gallery-img-box">
            <img src="<?php echo esc_url($gallery_2); ?>" alt="<?php echo esc_attr($client_name); ?> — Asset 02" loading="lazy">
          </div>
          <?php endif; ?>
          <?php if ($gallery_3) : ?>
          <div class="c8cs-gallery-img-box is-tall">
            <img src="<?php echo esc_url($gallery_3); ?>" alt="<?php echo esc_attr($client_name); ?> — Asset 03" loading="lazy">
          </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
  <?php endif; ?>

  <!-- ══ RESULTS SECTION ═══════════════════════════════════════ -->
  <?php if ($results_body) : ?>
  <div class="c8cs-wrap" style="padding-bottom:5rem;">
    <div class="c8cs-split-section">
      <div class="c8cs-split-left">
        <div class="c8cs-label">// OUTCOME</div>
        <div class="c8cs-split-title"><?php echo esc_html($results_headline); ?></div>
      </div>
      <div class="c8cs-split-right">
        <div class="fylla-value-item">
          <div class="c8cs-body-content"><?php echo wpautop(esc_html($results_body)); ?></div>
        </div>
      </div>
    </div>
  </div>
  <?php endif; ?>

</div><!-- /.c8cs-root -->

<?php get_template_part('parts/footer'); ?>

<script>
// Scroll-grow main image
(function(){
  var box = document.getElementById('c8cs-main-img-box');
  if (!box) return;
  function grow() {
    var s = window.scrollY, maxW = 100, minW = 85;
    var pct = Math.min(maxW, minW + (s / 400) * (maxW - minW));
    box.style.width = pct + '%';
  }
  window.addEventListener('scroll', grow, { passive: true });
  grow();

  // Glow follow cursor on hero
  var atmos = document.getElementById('c8cs-hero-atmos');
  var glow  = document.getElementById('c8cs-atmos-glow');
  if (atmos && glow) {
    atmos.addEventListener('mousemove', function(e) {
      atmos.classList.add('is-active');
      var r = atmos.getBoundingClientRect();
      glow.style.transform = 'translate(' + (e.clientX - r.left - 160) + 'px,' + (e.clientY - r.top - 160) + 'px)';
    });
    atmos.addEventListener('mouseleave', function() { atmos.classList.remove('is-active'); });
  }
})();
</script>

<?php wp_footer(); ?>
</body>
</html>
