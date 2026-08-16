<?php
/**
 * CR8V Stacks — page-discovery-call.php
 * Template Name: Discovery Call
 * 100% exact parity with discovery-call.html prototype.
 * Includes ticket stub layout, embedded [sb_booking_form] shortcode, perforated tear line, scope pillars, and dark verified feedback card.
 */

defined('ABSPATH') || exit;

get_header();
?>

<style>
:root {
  --ink: #080808;
  --paper: #F2F1EC;
  --paper-hi: #FAFAF7;
  --blue: #0047E1;
  --blue-mid: #0038C0;
  --blue-hi: #4A9EFF;
  --gray: #8A8A8A;
  --line: rgba(8, 8, 8, 0.14);
  --radius: 4px;
  --font-heading: 'Michroma', sans-serif;
  --font-mono: 'Space Mono', monospace;
  --font-body: 'DM Sans', sans-serif;
}

.c8dc-wrap {
  position: relative;
  background: var(--ink);
  overflow: hidden;
  padding: 8.5rem 1.5rem 5rem 1.5rem;
  min-height: 100vh;
}
.c8dc-wrap::before {
  content: '';
  position: absolute;
  inset: 0;
  background: none !important;
  pointer-events: none;
}
.c8dc-wrap::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml;utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='140' height='140'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='2' stitchTiles='stitch'/%3E%3CfeColorMatrix type='matrix' values='0 0 0 0 1  0 0 0 0 1  0 0 0 0 1  0 0 0 0.04 0'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)'/%3E%3C/svg%3E");
  background-size: 140px 140px;
  mix-blend-mode: screen;
  pointer-events: none;
}

.c8dc-card {
  position: relative;
  z-index: 1;
  max-width: 1080px;
  margin: 0 auto;
  background: var(--paper);
  padding: clamp(2rem, 4vw, 3.5rem);
  border-radius: var(--radius) !important;
  overflow: visible;
}

.c8dc-stamp {
  position: absolute;
  top: 2.25rem;
  right: 2.25rem;
  width: 82px;
  height: 82px;
  border: 1.5px dashed rgba(8,8,8,0.32);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  transform: rotate(-8deg);
  text-align: center;
}
.c8dc-stamp span {
  display: block;
  font-family: var(--font-mono);
  font-size: 8px;
  letter-spacing: 0.1em;
  text-transform: uppercase;
  color: var(--blue);
  line-height: 1.35;
  font-weight: 700;
}

.c8dc-tag {
  font-family: var(--font-mono);
  font-size: 9.5px;
  letter-spacing: 0.26em;
  text-transform: uppercase;
  color: var(--blue);
  margin-bottom: 12px;
  display: flex;
  align-items: center;
  gap: 8px;
  font-weight: 700;
}
.c8dc-tag::before {
  content: '';
  width: 16px;
  height: 1px;
  background: var(--blue);
}

.c8dc-h1 {
  font-family: var(--font-heading);
  font-size: clamp(1.6rem, 3.2vw, 2.4rem);
  line-height: 1.15;
  color: var(--ink);
  letter-spacing: 0.01em;
  margin-bottom: 0.75rem;
  text-transform: uppercase;
}
.c8dc-lede {
  font-size: 14.5px;
  line-height: 1.6;
  color: #4a4a4a;
  font-weight: 300;
  max-width: 680px;
  margin-bottom: 2rem;
}

.c8dc-booking-section { margin-bottom: 3rem; }
.c8dc-section-h2 {
  font-family: var(--font-heading);
  font-size: 0.65rem !important;
  font-weight: 700;
  color: var(--gray);
  letter-spacing: 0.16em;
  margin-bottom: 0.85rem;
  text-transform: uppercase;
}
.c8dc-booking-card {
  background: #FFFFFF;
  border: 1px solid var(--line);
  border-radius: var(--radius) !important;
  padding: 0;
  min-height: 420px;
  display: block;
  text-align: left;
  position: relative;
}

.c8dc-tear {
  position: relative;
  margin: 2.5rem -3.5rem;
  border-top: 2px dashed rgba(8,8,8,0.28);
}
.c8dc-tear::before, .c8dc-tear::after {
  content: '';
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  width: 34px;
  height: 34px;
  border-radius: 50%;
  background: var(--ink);
}
.c8dc-tear::before { left: -17px; }
.c8dc-tear::after { right: -17px; }

.c8dc-bottom-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 2rem;
  align-items: start;
}

.c8dc-pillars-list { display: flex; flex-direction: column; gap: 0.85rem; }
.c8dc-pillar-item {
  display: flex; align-items: flex-start; gap: 0.75rem;
  background: rgba(8,8,8,0.03); border: 1px solid var(--line);
  border-radius: var(--radius) !important; padding: 0.9rem 1.1rem;
}
.c8dc-pillar-num { font-family: var(--font-mono); font-size: 10px; color: var(--blue); font-weight: 700; }
.c8dc-pillar-text strong { display: block; font-size: 0.88rem; color: var(--ink); margin-bottom: 0.15rem; }
.c8dc-pillar-text span { font-size: 0.8rem; color: #555555; }

.c8dc-testi-card {
  background: #080808; color: #FFFFFF;
  border-radius: var(--radius) !important; padding: 1.75rem; position: relative;
}
.c8dc-testi-header {
  display: flex; align-items: center; justify-content: space-between;
  margin-bottom: 1.25rem; padding-bottom: 1rem; border-bottom: 1px solid rgba(255,255,255,0.1);
}
.c8dc-testi-heading {
  font-family: var(--font-heading); font-size: 0.6rem !important; font-weight: 700;
  letter-spacing: 0.16em; text-transform: uppercase; color: var(--blue-hi);
  display: inline-flex; align-items: center; gap: 0.5rem;
}
.c8dc-testi-stars { color: #FFB800; font-size: 12px; letter-spacing: 2px; }
.c8dc-testi-quote { font-size: 0.92rem; line-height: 1.6; color: rgba(255,255,255,0.88); font-style: normal; margin-bottom: 1.5rem; }
.c8dc-author-name { font-family: var(--font-mono); font-size: 9px; letter-spacing: 0.14em; text-transform: uppercase; color: var(--blue-hi); }
.c8dc-author-role { font-family: var(--font-heading); font-size: 0.55rem; font-weight: 700; color: rgba(255,255,255,0.6); }

@media (max-width: 820px) {
  .c8dc-bottom-grid { grid-template-columns: 1fr; }
  .c8dc-tear { margin: 2rem -2rem; }
  .c8dc-stamp { display: none; }
}
</style>

<div class="c8dc-wrap">
  <div class="c8dc-card">
    <div class="c8dc-stamp"><span>PROJECT<br>SCOPING</span></div>

    <div class="c8dc-tag">↳ DISCOVERY CALL</div>
    <h1 class="c8dc-h1">BOOK A DISCOVERY CALL</h1>
    <p class="c8dc-lede">Select an available time slot below to scope your project requirements, architecture, timelines, and execution strategy directly with our core engineering team.</p>

    <!-- ── 1. BOOKING FORM EMBED PLACED FIRST RIGHT AFTER LEDE ── -->
    <div class="c8dc-booking-section">
      <h2 class="c8dc-section-h2">Available Booking Slots</h2>
      <div class="c8dc-booking-card">
        <?php echo do_shortcode('[sb_booking_form]'); ?>
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
            <div class="c8dc-pillar-text">
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
            <div class="c8dc-author-name">VERIFIED TECH STACK</div>
            <div class="c8dc-author-role">Enterprise Digital Architecture</div>
          </div>
        </div>
      </div>

    </div>

  </div>
</div>

<?php get_footer(); ?>
