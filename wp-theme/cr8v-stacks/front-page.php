<?php
/**
 * CR8V Stacks — front-page.php
 * Homepage template. All text/images editable via:
 * WP Admin → Appearance → Customize → 🏠 Homepage
 */
defined('ABSPATH') || exit;

// Pull all Customizer values with defaults
$hero_eyebrow   = cr8v_mod('hero_eyebrow',   'Cr8v Stacks — Design & Engineering Studio');
$hero_h1        = cr8v_mod('hero_headline_1','We Build Businesses');
$hero_h2        = cr8v_mod('hero_headline_2','That Win Online');
$hero_sub       = cr8v_mod('hero_sub',       'Strategy, design, and liquid performance engineering for ambitious brands.');
$hero_cta_text  = cr8v_mod('hero_cta_text',  'Get an Estimate');
$hero_cta_link  = cr8v_mod('hero_cta_link',  home_url('/discovery-call/'));
$hero_video     = cr8v_mod('hero_video_url', '');
$hero_poster    = cr8v_mod('hero_poster_img','');

// Testimonials
$test_eyebrow  = cr8v_mod('testimonials_eyebrow', '// WHAT CLIENTS SAY');
$test_heading  = cr8v_mod('testimonials_heading',  'Trusted by ambitious brands');

// Stats / Matrix
$matrix_eyebrow = cr8v_mod('matrix_eyebrow', '// BY THE NUMBERS');
$matrix_heading  = cr8v_mod('matrix_heading', 'Delivering measurable results');

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class('cr8v-homepage'); ?>>
<?php wp_body_open(); ?>

<?php get_template_part('parts/header'); ?>

<main id="cr8v-main">

  <!-- ══════════════════════════════════════════════════
       HERO SECTION
       Edit: WP Admin → Customize → Homepage → Hero Section
  ══════════════════════════════════════════════════ -->
  <section class="dp-hero-section" id="hero">

    <?php if ($hero_video) : ?>
    <video class="dp-hero-video" autoplay muted loop playsinline
           preload="none"
           <?php if ($hero_poster) : ?>poster="<?php echo esc_url($hero_poster); ?>"<?php endif; ?>
           controlsList="nodownload nofullscreen noremoteplayback"
           disablePictureInPicture>
      <source src="<?php echo esc_url($hero_video); ?>" type="video/mp4">
    </video>
    <?php elseif ($hero_poster) : ?>
    <div class="dp-hero-poster" style="background-image:url('<?php echo esc_url($hero_poster); ?>')"></div>
    <?php endif; ?>

    <div class="dp-hero-inner">
      <div class="c8-hero-eyebrow" data-customizer="hero_eyebrow"><?php echo esc_html($hero_eyebrow); ?></div>
      <h1 class="dp-headline">
        <span class="line-1" data-customizer="hero_headline_1"><?php echo esc_html($hero_h1); ?></span>
        <em class="line-2" data-customizer="hero_headline_2"><?php echo esc_html($hero_h2); ?></em>
      </h1>
      <p class="dp-sub c8-hero-sub" data-customizer="hero_sub"><?php echo esc_html($hero_sub); ?></p>
      <div class="dp-cta-row">
        <a href="<?php echo esc_url($hero_cta_link); ?>" class="c8-btn-primary c8-hero-cta-btn" data-customizer="hero_cta_text">
          <?php echo esc_html($hero_cta_text); ?> →
        </a>
      </div>
    </div>
  </section>

  <!-- ══════════════════════════════════════════════════
       TESTIMONIALS SECTION
       Edit: WP Admin → Customize → Homepage → Testimonials Section
  ══════════════════════════════════════════════════ -->
  <section class="sw-testimonial-section">
    <div class="sw-testimonial-inner">
      <div class="sw-mono-tag"><?php echo esc_html($test_eyebrow); ?></div>
      <h2 class="sw-testimonial-heading"><?php echo esc_html($test_heading); ?></h2>
      <div class="sw-testimonial-track">
        <?php for ($i = 1; $i <= 3; $i++) :
          $quote  = cr8v_mod("testimonial_{$i}_quote",  '');
          $name   = cr8v_mod("testimonial_{$i}_name",   '');
          $role   = cr8v_mod("testimonial_{$i}_role",   '');
          $avatar = cr8v_mod("testimonial_{$i}_avatar", '');
          if (!$quote) continue;
        ?>
        <div class="sw-testimonial-card">
          <p class="sw-testimonial-quote"><?php echo esc_html($quote); ?></p>
          <div class="sw-testimonial-meta">
            <?php if ($avatar) : ?>
            <div class="sw-testimonial-avatar"><img src="<?php echo esc_url($avatar); ?>" alt="<?php echo esc_attr($name); ?>"></div>
            <?php endif; ?>
            <div>
              <div class="sw-testimonial-name"><?php echo esc_html($name); ?></div>
              <div class="sw-testimonial-role"><?php echo esc_html($role); ?></div>
            </div>
          </div>
        </div>
        <?php endfor; ?>
      </div>
    </div>
  </section>

  <!-- ══════════════════════════════════════════════════
       STATS / MATRIX SECTION
       Edit: WP Admin → Customize → Homepage → Stats / Matrix Section
  ══════════════════════════════════════════════════ -->
  <section class="sw-matrix-section">
    <div class="sw-matrix-inner">
      <div class="sw-mono-tag"><?php echo esc_html($matrix_eyebrow); ?></div>
      <h2 class="sw-matrix-h2"><?php echo esc_html($matrix_heading); ?></h2>
      <div class="sw-matrix-grid">
        <?php for ($i = 1; $i <= 4; $i++) :
          $val   = cr8v_mod("matrix_stat_{$i}_value", '');
          $label = cr8v_mod("matrix_stat_{$i}_label", '');
          if (!$val) continue;
        ?>
        <div class="sw-matrix-stat">
          <div class="sw-matrix-stat-floating"><?php echo esc_html($val); ?></div>
          <div class="sw-matrix-stat-label"><?php echo esc_html($label); ?></div>
        </div>
        <?php endfor; ?>
      </div>
    </div>
  </section>

  <!-- ══════════════════════════════════════════════════
       CASE STUDIES PREVIEW
       Auto-populated from Case Studies CPT — no editing needed
  ══════════════════════════════════════════════════ -->
  <?php
  $case_studies = new WP_Query([
      'post_type'      => 'case_study',
      'posts_per_page' => 3,
      'orderby'        => 'date',
      'order'          => 'DESC',
      'post_status'    => 'publish',
  ]);
  if ($case_studies->have_posts()) :
  ?>
  <section class="sw-cs-preview-section">
    <div class="sw-cs-preview-inner">
      <div class="sw-cs-preview-grid">
        <?php while ($case_studies->have_posts()) : $case_studies->the_post(); ?>
        <a href="<?php the_permalink(); ?>" class="sw-cs-card">
          <?php if (has_post_thumbnail()) : ?>
          <div class="sw-cs-card-img"><?php the_post_thumbnail('cr8v-card'); ?></div>
          <?php endif; ?>
          <div class="sw-cs-card-body">
            <div class="sw-cs-card-title"><?php the_title(); ?></div>
            <p class="sw-cs-card-excerpt"><?php echo cr8v_excerpt(get_the_excerpt(), 15); ?></p>
            <span class="sw-cs-card-link">View Case Study →</span>
          </div>
        </a>
        <?php endwhile; wp_reset_postdata(); ?>
      </div>
    </div>
  </section>
  <?php endif; ?>

</main>

<?php get_template_part('parts/footer'); ?>
<?php wp_footer(); ?>
</body>
</html>
