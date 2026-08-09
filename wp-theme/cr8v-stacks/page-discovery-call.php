<?php
/**
 * CR8V Stacks — page-discovery-call.php
 * Template Name: Discovery Call
 * Tropos Theme Discovery Call Page (100% full design fidelity from discovery-call.html)
 */
defined('ABSPATH') || exit;
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Book a Discovery Call | <?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class('cr8v-discovery-call'); ?>>
<?php wp_body_open(); ?>
<?php get_template_part('parts/header'); ?>

<main id="cr8v-main">
<div class="c8dc-wrap">
  <div class="c8dc-card">
    <div class="c8dc-stamp"><span>PROJECT<br>SCOPING</span></div>

    <div class="c8dc-tag" data-customizer="dc_tag"><?php echo esc_html(cr8v_mod('dc_tag', '↳ DISCOVERY CALL')); ?></div>
    <h1 class="c8dc-h1" data-customizer="dc_h1"><?php echo esc_html(cr8v_mod('dc_h1', 'BOOK A DISCOVERY CALL')); ?></h1>
    <p class="c8dc-lede" data-customizer="dc_lede"><?php echo esc_html(cr8v_mod('dc_lede', 'Select an available time slot below to scope your project requirements, architecture, timelines, and execution strategy directly with our core engineering team.')); ?></p>

    <!-- ── 1. BOOKING FORM EMBED PLACED FIRST RIGHT AFTER LEDE ── -->
    <div class="c8dc-booking-section">
      <h2 class="c8dc-section-h2">Available Booking Slots</h2>
      <div class="c8dc-booking-card">
        <!-- BOOKING PLUGIN SHORTCODE / IFRAME EMBED PLACED HERE -->
        [booking-form-embed]
      </div>
    </div>

    <div class="c8dc-tear"></div>

    <!-- ── 2. BOTTOM DETAILS & HIGH-END TESTIMONIAL ── -->
    <div class="c8dc-bottom-grid">
      
      <!-- Pillars -->
      <div>
        <h2 class="c8dc-section-h2">What We Scope On The Call</h2>
        <div class="c8dc-pillars-list">
          <div class="c8dc-pillar-item">
            <div class="c8dc-pillar-num">01</div>
            <div class="c8dc-pillar-text">
              <strong>Technical Requirements &amp; Brief</strong>
              <span>Deep-dive into your platform objectives, audience, and functional requirements.</span>
            </div>
          </div>
          <div class="c8dc-pillar-item">
            <div class="c8dc-pillar-num">02</div>
            <div class="c8dc-pillar-head c8dc-pillar-text">
              <strong>Stack &amp; Architecture Selection</strong>
              <span>Determining the optimal stack — WordPress, Shopify, Next.js, AI MVPs, or Supabase.</span>
            </div>
          </div>
          <div class="c8dc-pillar-item">
            <div class="c8dc-pillar-num">03</div>
            <div class="c8dc-pillar-text">
              <strong>Fixed Pricing &amp; Milestone Roadmap</strong>
              <span>Transparent milestone timelines with fixed pricing and zero mid-build surprises.</span>
            </div>
          </div>
        </div>
      </div>

      <!-- High-End Dark Testimonial Card -->
      <div class="c8dc-testi-card">
        <div class="c8dc-testi-header">
          <h2 class="c8dc-testi-heading">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="#0047E1"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 14.5v-9l6 4.5-6 4.5z"/></svg>
            VERIFIED CLIENT FEEDBACK
          </h2>
          <div class="c8dc-testi-stars">★★★★★</div>
        </div>

        <p class="c8dc-testi-quote">"What stood out wasn't just the design or code individually — it was having one agency handle technical architecture, liquid performance, and growth strategy without anything getting lost in translation."</p>

        <div class="c8dc-testi-author" style="display:flex;align-items:center;justify-content:space-between;width:100%;">
          <div style="display:flex;align-items:center;gap:0.75rem;">
            <div style="display:flex;align-items:center;gap:0.5rem;background:rgba(255,255,255,0.06);padding:6px 12px;border-radius:4px;border:1px solid rgba(255,255,255,0.1);">
              <img src="https://cdn.jsdelivr.net/gh/glincker/thesvg@main/public/icons/openai/dark.svg" alt="OpenAI" style="width:16px;height:16px;">
              <img src="https://cdn.simpleicons.org/shopify/95BF47" alt="Shopify" style="width:16px;height:16px;">
              <img src="https://cdn.simpleicons.org/nextdotjs/ffffff" alt="Next.js" style="width:16px;height:16px;">
              <img src="https://cdn.simpleicons.org/wordpress/21759B" alt="WordPress" style="width:16px;height:16px;">
            </div>
          </div>
          <div style="text-align:right;">
            <div class="c8dc-author-name" style="font-family:var(--font-mono);font-size:9px;letter-spacing:0.14em;text-transform:uppercase;color:var(--blue-hi);">VERIFIED TECH STACK</div>
            <div class="c8dc-author-role" style="font-family:var(--font-heading);font-size: 0.52rem;font-weight:700;color:rgba(255,255,255,0.6);">Enterprise Digital Architecture</div>
          </div>
        </div>
      </div>

    </div>

  </div>
</div>


</main>

<?php get_template_part('parts/footer'); ?>
<?php wp_footer(); ?>
</body>
</html>
