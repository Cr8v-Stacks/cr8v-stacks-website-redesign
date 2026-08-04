import re

file_path = r"C:\Users\HP\Downloads\Mega Menu\homepage_hero_section.html"
with open(file_path, "r", encoding="utf-8") as f:
    content = f.read()

# 1. Remove unwanted left/right padding from .sw-case-section
content = re.sub(r'\.sw-case-section\s*\{\s*padding:\s*5rem\s+3\.5rem;', '.sw-case-section {\n    padding: 5rem 0;', content)
content = re.sub(r'padding:\s*5rem\s+3\.5rem;', 'padding: 5rem 0;', content)

print("Removed unwanted left and right padding from .sw-case-section.")

# 2. Fix Hero Subtitle font color to muted sub-text color (NEVER white)
hero_sub_css_new = '''.c8-hero-sub {
  font-family: var(--font-body);
  font-size: 1.05rem;
  line-height: 1.65;
  font-weight: 400;
  color: rgba(255, 255, 255, 0.65) !important;
  max-width: 760px;
  margin-bottom: 2rem;
}'''

content = re.sub(r'\.c8-hero-sub\s*\{[^}]*\}', hero_sub_css_new, content)

# 3. Case 2 (The Duch Apartments): Strictly use WordPress CDN Logo
cs2_avatar_new = '''<div class="sw-testimonial-avatar" style="width:36px;height:36px;border-radius:4px;background:rgba(33,117,155,0.12);display:flex;align-items:center;justify-content:center;border:1px solid rgba(33,117,155,0.3);">
                <img src="https://cdn.simpleicons.org/wordpress/21759B" alt="WordPress" style="width:20px;height:20px;">
              </div>'''

# 4. Case 3 (Nativus Dashboard Pro): Accurately described without Anthropic, using WordPress CDN Logo
cs3_full_section = '''    <!-- ── CASE 3: NATIVUS DASHBOARD PRO (PROPRIETARY SHOWCASE) ── -->
    <section class="sw-case-section" id="cs-nativus-dashboard" data-index="2">
      <div class="sw-container">
        <div class="sw-left">
          <div class="c8-eyebrow"><span class="c8-eyebrow-slash">//</span> PROPRIETARY PRODUCT SHOWCASE</div>
          <h2 class="sw-h2">Nativus Dashboard Pro — Custom WP Admin Ecosystem.</h2>
          <p class="sw-sub">
            We don't just build for clients — we showcase our own proprietary engineering. Nativus Dashboard Pro is our custom WordPress admin dashboard plugin engineered for agency handovers, client onboarding, and streamlined WooCommerce management.
          </p>

          <!-- WHAT WE DID CARD -->
          <div class="sw-testimonial-card">
            <p class="sw-testimonial-quote">Engineered as our in-house flagship plugin: white-label WP admin customization, WooCommerce control panels, custom dashboard widgets, and clean client handover features.</p>
            <div class="sw-testimonial-meta">
              <div class="sw-testimonial-avatar" style="width:36px;height:36px;border-radius:4px;background:rgba(33,117,155,0.12);display:flex;align-items:center;justify-content:center;border:1px solid rgba(33,117,155,0.3);">
                <img src="https://cdn.simpleicons.org/wordpress/21759B" alt="WordPress" style="width:20px;height:20px;">
              </div>
              <div>
                <div class="sw-testimonial-role">WordPress Custom Plugin · Proprietary Product</div>
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
            <div class="sw-stat-floating">
              <div class="sw-stat-val">100% Custom</div>
              <div class="sw-stat-label">In-House Plugin</div>
              <div class="sw-stat-author" style="display:flex;align-items:center;gap:0.75rem;margin-top:0.75rem;">
                <div style="width:36px;height:36px;border-radius:4px;background:rgba(33,117,155,0.12);display:flex;align-items:center;justify-content:center;border:1px solid rgba(33,117,155,0.3);">
                  <img src="https://cdn.simpleicons.org/wordpress/21759B" alt="WordPress" style="width:20px;height:20px;">
                </div>
                <div>
                  <div class="sw-stat-name" style="font-family:var(--font-mono);font-size:10px;letter-spacing:0.12em;text-transform:uppercase;color:var(--c8-blue);">WORDPRESS PLUGIN</div>
                  <div class="sw-stat-role" style="font-family:var(--font-body);font-size:0.78rem;color:rgba(8,8,8,0.6);">Proprietary Build</div>
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

content = re.sub(r'<section class="sw-case-section" id="cs-nativus-dashboard".*?</section>', cs3_full_section, content, flags=re.DOTALL)
content = re.sub(r'<section class="sw-case-section" id="cs-nativerse-dashboard".*?</section>', cs3_full_section, content, flags=re.DOTALL)

with open(file_path, "w", encoding="utf-8") as f:
    f.write(content)

print("Saved homepage_hero_section.html fixes.")
