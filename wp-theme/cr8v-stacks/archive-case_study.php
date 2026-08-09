<?php
/**
 * CR8V Stacks — archive-case_study.php
 * Case Studies index/archive. Auto-populated from CPT.
 * No editing needed — add new case studies via WP Admin → Case Studies → Add New
 */
defined('ABSPATH') || exit;
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Case Studies | <?php bloginfo('name'); ?></title>
  <meta name="description" content="Real results for real businesses. Browse our portfolio of web design, development, and growth projects.">
  <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri() . '/assets/css/shared-service-components.css'); ?>">
  <?php wp_head(); ?>
</head>
<body <?php body_class('cr8v-case-studies-archive'); ?>>
<?php wp_body_open(); ?>
<?php get_template_part('parts/header'); ?>

<main id="cr8v-main">

  <!-- Hero -->
  <div class="c8cs-hero" style="padding-top:7rem;padding-bottom:3rem;">
    <div class="c8cs-wrap">
      <div class="c8cs-label">PORTFOLIO</div>
      <h1 class="c8cs-headline">Case <span class="c8cs-serif">Studies</span></h1>
      <p class="c8cs-lead">Real results for real businesses. Every project is built with strategy, precision, and long-term growth in mind.</p>

      <!-- Industry filter pills (taxonomy) -->
      <?php
      $industries = get_terms(['taxonomy' => 'industry', 'hide_empty' => true]);
      if ($industries && !is_wp_error($industries)) :
      ?>
      <div class="fylla-pill-row">
        <a href="<?php echo esc_url(get_post_type_archive_link('case_study')); ?>" class="fylla-pill" style="background:#0047E1;color:#fff;border-color:#0047E1;">All</a>
        <?php foreach ($industries as $ind) : ?>
        <a href="<?php echo esc_url(get_term_link($ind)); ?>" class="fylla-pill"><?php echo esc_html($ind->name); ?></a>
        <?php endforeach; ?>
      </div>
      <?php endif; ?>
    </div>
  </div>

  <!-- Case Study Grid -->
  <div class="c8cs-wrap">
    <?php if (have_posts()) : ?>
    <div class="c8cs-index-grid" style="display:grid;grid-template-columns:repeat(auto-fill,minmax(340px,1fr));gap:2rem;padding-bottom:4rem;">
      <?php while (have_posts()) : the_post();
        $pid      = get_the_ID();
        $type     = cr8v_get_meta($pid, 'project_type', '');
        $m1v      = cr8v_get_meta($pid, 'metric_1_value', '');
        $m1l      = cr8v_get_meta($pid, 'metric_1_label', '');
        $s_terms  = get_the_terms($pid, 'service_type') ?: [];
      ?>
      <a href="<?php the_permalink(); ?>" class="c8cs-index-card" style="display:flex;flex-direction:column;border:1px solid rgba(8,8,8,0.1);border-radius:4px;overflow:hidden;background:#fff;text-decoration:none;color:inherit;transition:box-shadow .25s,transform .25s;" onmouseenter="this.style.boxShadow='0 12px 40px rgba(0,71,225,0.1)';this.style.transform='translateY(-3px)'" onmouseleave="this.style.boxShadow='';this.style.transform=''">

        <?php if (has_post_thumbnail()) : ?>
        <div style="width:100%;aspect-ratio:16/9;overflow:hidden;">
          <?php the_post_thumbnail('cr8v-card', ['style' => 'width:100%;height:100%;object-fit:cover;display:block;']); ?>
        </div>
        <?php endif; ?>

        <div style="padding:1.75rem 1.5rem;flex:1;display:flex;flex-direction:column;gap:0.75rem;">
          <!-- Service type pills -->
          <?php if ($s_terms) : ?>
          <div style="display:flex;flex-wrap:wrap;gap:0.4rem;">
            <?php foreach (array_slice($s_terms, 0, 2) as $t) : ?>
            <span class="fylla-pill" style="font-size:0.65rem;"><?php echo esc_html($t->name); ?></span>
            <?php endforeach; ?>
          </div>
          <?php endif; ?>

          <h2 style="font-family:'Michroma',sans-serif;font-size:1.1rem;font-weight:700;text-transform:uppercase;color:#080808;line-height:1.25;"><?php the_title(); ?></h2>
          <p style="font-family:'DM Sans',sans-serif;font-size:13.5px;color:#555;line-height:1.65;flex:1;"><?php echo cr8v_excerpt(get_the_excerpt(), 18); ?></p>

          <?php if ($m1v) : ?>
          <div style="display:flex;align-items:baseline;gap:6px;margin-top:auto;padding-top:1rem;border-top:1px solid rgba(8,8,8,0.07);">
            <span style="font-family:'Michroma',sans-serif;font-size:1.5rem;font-weight:700;color:#0047E1;"><?php echo esc_html($m1v); ?></span>
            <span style="font-family:'DM Sans',sans-serif;font-size:12px;color:#888;"><?php echo esc_html($m1l); ?></span>
          </div>
          <?php endif; ?>

          <span style="font-family:'Space Mono',monospace;font-size:10px;letter-spacing:.1em;color:#0047E1;text-transform:uppercase;">View Case Study →</span>
        </div>
      </a>
      <?php endwhile; ?>
    </div>

    <!-- Pagination -->
    <div class="fylla-pagination" style="padding-bottom:3rem;">
      <?php echo paginate_links(['prev_text' => '← Previous', 'next_text' => 'Next →']); ?>
    </div>

    <?php else : ?>
    <!-- Fallback default showcase cards when no CPT posts exist yet -->
    <div class="c8cs-index-grid" style="display:grid;grid-template-columns:repeat(auto-fill,minmax(340px,1fr));gap:2rem;padding-bottom:4rem;">
      
      <!-- Card 1: The Duch Apartments -->
      <a href="<?php echo esc_url(home_url('/case-studies/the-duch-apartments/')); ?>" class="c8cs-index-card" style="display:flex;flex-direction:column;border:1px solid rgba(8,8,8,0.1);border-radius:4px;overflow:hidden;background:#fff;text-decoration:none;color:inherit;">
        <div style="width:100%;aspect-ratio:16/9;overflow:hidden;">
          <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/hww_stacks_visual.jpg'); ?>" style="width:100%;height:100%;object-fit:cover;display:block;" alt="The Duch Apartments">
        </div>
        <div style="padding:1.75rem 1.5rem;flex:1;display:flex;flex-direction:column;gap:0.75rem;">
          <div style="display:flex;flex-wrap:wrap;gap:0.4rem;">
            <span class="fylla-pill" style="font-size:0.65rem;">Hospitality</span>
            <span class="fylla-pill" style="font-size:0.65rem;">Web Design</span>
          </div>
          <h2 style="font-family:'Michroma',sans-serif;font-size:1.1rem;font-weight:700;text-transform:uppercase;color:#080808;line-height:1.25;">The Duch Apartments</h2>
          <p style="font-family:'DM Sans',sans-serif;font-size:13.5px;color:#555;line-height:1.65;flex:1;">A bespoke hospitality platform with a 100% direct booking engine and automated reservation management.</p>
          <div style="display:flex;align-items:baseline;gap:6px;margin-top:auto;padding-top:1rem;border-top:1px solid rgba(8,8,8,0.07);">
            <span style="font-family:'Michroma',sans-serif;font-size:1.5rem;font-weight:700;color:#0047E1;">+340%</span>
            <span style="font-family:'DM Sans',sans-serif;font-size:12px;color:#888;">Direct Bookings</span>
          </div>
          <span style="font-family:'Space Mono',monospace;font-size:10px;letter-spacing:.1em;color:#0047E1;text-transform:uppercase;">View Case Study →</span>
        </div>
      </a>

      <!-- Card 2: MKenny Properties -->
      <a href="<?php echo esc_url(home_url('/case-studies/mkenny-properties/')); ?>" class="c8cs-index-card" style="display:flex;flex-direction:column;border:1px solid rgba(8,8,8,0.1);border-radius:4px;overflow:hidden;background:#fff;text-decoration:none;color:inherit;">
        <div style="width:100%;aspect-ratio:16/9;overflow:hidden;">
          <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/services_visual_montage.jpg'); ?>" style="width:100%;height:100%;object-fit:cover;display:block;" alt="MKenny Properties">
        </div>
        <div style="padding:1.75rem 1.5rem;flex:1;display:flex;flex-direction:column;gap:0.75rem;">
          <div style="display:flex;flex-wrap:wrap;gap:0.4rem;">
            <span class="fylla-pill" style="font-size:0.65rem;">Real Estate</span>
            <span class="fylla-pill" style="font-size:0.65rem;">Custom Dev</span>
          </div>
          <h2 style="font-family:'Michroma',sans-serif;font-size:1.1rem;font-weight:700;text-transform:uppercase;color:#080808;line-height:1.25;">MKenny Properties</h2>
          <p style="font-family:'DM Sans',sans-serif;font-size:13.5px;color:#555;line-height:1.65;flex:1;">Full-scale real estate platform featuring property filtering, interactive floor plans, and lead capture system.</p>
          <div style="display:flex;align-items:baseline;gap:6px;margin-top:auto;padding-top:1rem;border-top:1px solid rgba(8,8,8,0.07);">
            <span style="font-family:'Michroma',sans-serif;font-size:1.5rem;font-weight:700;color:#0047E1;">4.8x</span>
            <span style="font-family:'DM Sans',sans-serif;font-size:12px;color:#888;">Lead Conversion</span>
          </div>
          <span style="font-family:'Space Mono',monospace;font-size:10px;letter-spacing:.1em;color:#0047E1;text-transform:uppercase;">View Case Study →</span>
        </div>
      </a>

      <!-- Card 3: Victorias Lane -->
      <a href="<?php echo esc_url(home_url('/case-studies/victorias-lane/')); ?>" class="c8cs-index-card" style="display:flex;flex-direction:column;border:1px solid rgba(8,8,8,0.1);border-radius:4px;overflow:hidden;background:#fff;text-decoration:none;color:inherit;">
        <div style="width:100%;aspect-ratio:16/9;overflow:hidden;">
          <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/wwa_studio_visual.jpg'); ?>" style="width:100%;height:100%;object-fit:cover;display:block;" alt="Victorias Lane">
        </div>
        <div style="padding:1.75rem 1.5rem;flex:1;display:flex;flex-direction:column;gap:0.75rem;">
          <div style="display:flex;flex-wrap:wrap;gap:0.4rem;">
            <span class="fylla-pill" style="font-size:0.65rem;">Luxury E-Com</span>
            <span class="fylla-pill" style="font-size:0.65rem;">Brand Identity</span>
          </div>
          <h2 style="font-family:'Michroma',sans-serif;font-size:1.1rem;font-weight:700;text-transform:uppercase;color:#080808;line-height:1.25;">Victorias Lane</h2>
          <p style="font-family:'DM Sans',sans-serif;font-size:13.5px;color:#555;line-height:1.65;flex:1;">Luxury e-commerce storefront with liquid performance engineering and bespoke checkout experience.</p>
          <div style="display:flex;align-items:baseline;gap:6px;margin-top:auto;padding-top:1rem;border-top:1px solid rgba(8,8,8,0.07);">
            <span style="font-family:'Michroma',sans-serif;font-size:1.5rem;font-weight:700;color:#0047E1;">99.8%</span>
            <span style="font-family:'DM Sans',sans-serif;font-size:12px;color:#888;">Performance Score</span>
          </div>
          <span style="font-family:'Space Mono',monospace;font-size:10px;letter-spacing:.1em;color:#0047E1;text-transform:uppercase;">View Case Study →</span>
        </div>
      </a>

    </div>
    <?php endif; ?>
  </div>

</main>

<?php get_template_part('parts/footer'); ?>
<?php wp_footer(); ?>
</body>
</html>
