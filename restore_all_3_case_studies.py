import re

file_path = r"C:\Users\HP\Downloads\Mega Menu\homepage_hero_section.html"

# Read file
with open(file_path, "r", encoding="utf-8") as f:
    content = f.read()

# Build all 3 complete, un-collapsed Case Studies HTML
case_studies_clean_html = '''    <!-- ── CASE 1: BLVCK HAIR NG (Text LEFT, Image RIGHT) ── -->
    <section class="sw-case-section" id="cs-blvck-hair" data-index="0">
      <div class="sw-container">
        <div class="sw-left">
          <div class="c8-eyebrow"><span class="c8-eyebrow-slash">//</span> Built for Live Performance</div>
          <h2 class="sw-h2">Organic E-Commerce Growth From The Ground Up.</h2>
          <p class="sw-sub">
            We ran SEO for blvck Hair NG from their early growth stage. Since then, they've grown exponentially — from a single storefront to running active stores in both Nigeria and the UK.
          </p>

          <!-- WHAT WE DID CARD -->
          <div class="sw-testimonial-card">
            <p class="sw-testimonial-quote">We handled their SEO end-to-end — keyword mapping, page architecture, and content — from the ground up. We built out the strategy for two markets simultaneously, and both storefronts are now ranking and converting independently.</p>
            <div class="sw-testimonial-meta">
              <div class="sw-testimonial-avatar" style="width:36px;height:36px;border-radius:4px;background:rgba(149,191,71,0.12);display:flex;align-items:center;justify-content:center;border:1px solid rgba(149,191,71,0.3);">
                <img src="https://cdn.simpleicons.org/shopify/95BF47" alt="Shopify" style="width:20px;height:20px;">
              </div>
              <div>
                <div class="sw-testimonial-role">SEO &amp; E-Commerce · Nigeria &amp; UK</div>
              </div>
            </div>
          </div>

          <a href="blvck-hair-ng.html" class="c8-btn-primary">
            <span>Explore Case Study</span>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
          </a>
        </div>

        <div class="sw-right">
          <div class="sw-card-wrapper" id="sw-card-1">
            <div class="sw-stat-floating">
              <div class="sw-stat-val">2 Active Stores</div>
              <div class="sw-stat-label">UK &amp; Nigeria Growth</div>
            </div>

            <div class="sw-card-img-wrapper">
              <img src="assets/case_studies/case_study_blvck_hair.jpg" alt="blvck Hair NG" class="sw-card-img">

              <div class="sw-card-bottom">
                <div>
                  <div class="sw-client-title">blvck Hair NG</div>
                  <div class="sw-client-role">SEO &amp; Organic Acquisition</div>
                </div>
                <a href="blvck-hair-ng.html" class="sw-play-btn" title="View Case Study">
                  <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ── CASE 2: THE DUCH APARTMENTS (Image LEFT, Text RIGHT — ZIG ZAG) ── -->
    <section class="sw-case-section" id="cs-duch-apartments" data-index="1">
      <div class="sw-container">
        <div class="sw-left">
          <div class="c8-eyebrow"><span class="c8-eyebrow-slash">//</span> Built-In SEO Architecture</div>
          <h2 class="sw-h2">Website Design With SEO Folded In From Day One.</h2>
          <p class="sw-sub">
            A full website design for The Duch Apartments — with search engine optimization folded into the code from day one rather than added afterward.
          </p>

          <!-- WHAT WE DID CARD -->
          <div class="sw-testimonial-card">
            <p class="sw-testimonial-quote">We designed and built the full site — custom layout, zero template base — with SEO architecture already coded in before a single page went live. Direct booking integration was included from the first sprint, maximising their direct revenue channel from day one.</p>
            <div class="sw-testimonial-meta">
              <div class="sw-testimonial-avatar" style="width:36px;height:36px;border-radius:4px;background:rgba(33,117,155,0.12);display:flex;align-items:center;justify-content:center;border:1px solid rgba(33,117,155,0.3);">
                <img src="https://cdn.simpleicons.org/wordpress/21759B" alt="WordPress" style="width:20px;height:20px;">
              </div>
              <div>
                <div class="sw-testimonial-role">Web Design &amp; SEO · Lagos, Nigeria</div>
              </div>
            </div>
          </div>

          <a href="the-duch-apartments.html" class="c8-btn-primary">
            <span>Explore Case Study</span>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
          </a>
        </div>

        <div class="sw-right">
          <div class="sw-card-wrapper" id="sw-card-2">
            <div class="sw-stat-floating">
              <div class="sw-stat-val">100% Custom</div>
              <div class="sw-stat-label">Design &amp; SEO — Day 1</div>
            </div>

            <div class="sw-card-img-wrapper">
              <img src="assets/case_studies/case_study_duch_apartments.jpg" alt="The Duch Apartments" class="sw-card-img">

              <div class="sw-card-bottom">
                <div>
                  <div class="sw-client-title">The Duch Apartments</div>
                  <div class="sw-client-role">Web Design &amp; SEO</div>
                </div>
                <a href="the-duch-apartments.html" class="sw-play-btn" title="View Case Study">
                  <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ── CASE 3: NATIVUS DASHBOARD PRO (PROPRIETARY SHOWCASE) ── -->
    <section class="sw-case-section" id="cs-nativus-dashboard" data-index="2">
      <div class="sw-container">
        <div class="sw-left">
          <div class="c8-eyebrow"><span class="c8-eyebrow-slash">//</span> IN-HOUSE AI MVP PLATFORM</div>
          <h2 class="sw-h2">Nativus Dashboard Pro — Custom WP Admin Ecosystem.</h2>
          <p class="sw-sub">
            We don't just build for clients — we showcase our own proprietary engineering. Nativus Dashboard Pro is our custom WordPress admin dashboard plugin engineered for agency handovers, client onboarding, and streamlined WooCommerce management.
          </p>

          <!-- WHAT WE DID CARD -->
          <div class="sw-testimonial-card">
            <p class="sw-testimonial-quote">Engineered as our in-house flagship plugin: white-label WP admin customization, WooCommerce control panels, custom dashboard widgets, and clean client handover features.</p>
            <div class="sw-testimonial-meta">
              <div class="sw-testimonial-avatar" style="width:36px;height:36px;border-radius:4px;background:rgba(217,119,87,0.12);display:flex;align-items:center;justify-content:center;border:1px solid rgba(217,119,87,0.3);">
                <img src="https://cdn.simpleicons.org/anthropic/D97757" alt="Anthropic Claude" style="width:20px;height:20px;">
              </div>
              <div>
                <div class="sw-testimonial-role">Claude AI MVP · Proprietary Agency Product</div>
              </div>
            </div>
          </div>

          <a href="nativus-dashboard-pro.html" class="c8-btn-primary">
            <span>Explore Nativus Pro</span>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
          </a>
        </div>

        <div class="sw-right">
          <div class="sw-card-wrapper" id="sw-card-3">
            <div class="sw-stat-floating" style="padding:0.75rem 1rem;">
              <div class="sw-stat-author" style="display:flex;align-items:center;gap:0.75rem;">
                <div style="width:32px;height:32px;border-radius:4px;background:rgba(33,117,155,0.12);display:flex;align-items:center;justify-content:center;border:1px solid rgba(33,117,155,0.3);">
                  <img src="https://cdn.simpleicons.org/wordpress/21759B" alt="WordPress" style="width:18px;height:18px;">
                </div>
                <div>
                  <div class="sw-stat-name" style="font-family:var(--font-mono);font-size:9.5px;letter-spacing:0.12em;text-transform:uppercase;color:var(--c8-blue);">WORDPRESS STACK</div>
                  <div class="sw-stat-role" style="font-family:var(--font-body);font-size:0.75rem;color:rgba(8,8,8,0.6);">Proprietary Build</div>
                </div>
              </div>
            </div>

            <div class="sw-card-img-wrapper">
              <img src="assets/case_study_bridgepoint_compliance_1785571461489.jpg" alt="Nativus Dashboard Pro" class="sw-card-img">

              <div class="sw-card-bottom">
                <div>
                  <div class="sw-client-title">Nativus Dashboard Pro</div>
                  <div class="sw-client-role">Proprietary WP Plugin</div>
                </div>
                <a href="nativus-dashboard-pro.html" class="sw-play-btn" title="View Product">
                  <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>'''

# Replace all content from <!-- ── CASE 1 to before </div>\n\n  <!-- High-Performance 60FPS
old_cases_pattern = r'<!-- ── CASE 1: BLVCK HAIR NG.*?</section>\s*</section>'
if not re.search(old_cases_pattern, content, flags=re.DOTALL):
    old_cases_pattern = r'<!-- ── CASE 1: BLVCK HAIR NG.*?(?=<!-- High-Performance 60FPS)'

content = re.sub(old_cases_pattern, case_studies_clean_html + '\n\n', content, flags=re.DOTALL)

with open(file_path, "w", encoding="utf-8") as f:
    f.write(content)

print("Restored all 3 Case Study sections cleanly in homepage_hero_section.html!")
