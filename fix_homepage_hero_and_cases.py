import re

file_path = r"C:\Users\HP\Downloads\Mega Menu\homepage_hero_section.html"
with open(file_path, "r", encoding="utf-8") as f:
    content = f.read()

# 1. Hero Eyebrow: Original agency eyebrow
hero_eyebrow_new = '<div class="c8-eyebrow"><span class="c8-eyebrow-slash">//</span> SCALE WITH AUTHORITY</div>'
content = re.sub(r'<div class="c8-eyebrow">.*?LOOK LIKE THE COMPANY YOU ARE BECOMING.*?</div>', hero_eyebrow_new, content, flags=re.DOTALL)

# 2. Hero Subtitle: Clean 1-paragraph description with standard text color
hero_sub_new = '<p class="c8-hero-sub">We build custom digital platforms, high-converting websites, and AI-powered systems tailored to your exact business operations. No bloated frameworks or generic templates — just clean code, liquid performance, and dedicated execution from day one.</p>'
content = re.sub(r'<p class="c8-hero-sub">.*?</p>', hero_sub_new, content, count=1, flags=re.DOTALL)

# 3. Case 1 (blvck Hair NG): Replace avatar with Shopify CDN logo
cs1_avatar_old = r'<div class="sw-testimonial-avatar">\s*<img src="assets/client_avatar_bearded\.jpg"[^>]*>\s*</div>'
cs1_avatar_new = '''<div class="sw-testimonial-avatar" style="width:36px;height:36px;border-radius:4px;background:rgba(149,191,71,0.12);display:flex;align-items:center;justify-content:center;border:1px solid rgba(149,191,71,0.3);">
                <img src="https://cdn.simpleicons.org/shopify/95BF47" alt="Shopify" style="width:20px;height:20px;">
              </div>'''

content = re.sub(cs1_avatar_old, cs1_avatar_new, content)

# 4. Case 2 (The Duch Apartments): Replace avatar with WordPress CDN logo
cs2_avatar_old = r'<div class="sw-testimonial-avatar">\s*<img src="assets/client_avatar_bearded\.jpg"[^>]*>\s*</div>'
cs2_avatar_new = '''<div class="sw-testimonial-avatar" style="width:36px;height:36px;border-radius:4px;background:rgba(33,117,155,0.12);display:flex;align-items:center;justify-content:center;border:1px solid rgba(33,117,155,0.3);">
                <img src="https://cdn.simpleicons.org/wordpress/21759B" alt="WordPress" style="width:20px;height:20px;">
              </div>'''

content = re.sub(cs2_avatar_old, cs2_avatar_new, content)

# 5. Case 3 (Nativus Dashboard Pro): Matching exact layout structure
cs3_full_section = '''    <!-- ── CASE 3: NATIVUS DASHBOARD PRO (PROPRIETARY AI MVP SHOWCASE) ── -->
    <section class="sw-case-section" id="cs-nativus-dashboard" data-index="2">
      <div class="sw-container">
        <div class="sw-left">
          <div class="c8-eyebrow"><span class="c8-eyebrow-slash">//</span> PROPRIETARY AI MVP SHOWCASE</div>
          <h2 class="sw-h2">Nativus Dashboard Pro — Custom WP Admin Ecosystem.</h2>
          <p class="sw-sub">
            We don't just build for clients — we showcase our own proprietary engineering. Nativus Dashboard Pro is our custom WordPress admin dashboard plugin engineered for agency handovers, client onboarding, and WooCommerce management.
          </p>

          <!-- WHAT WE DID CARD -->
          <div class="sw-testimonial-card">
            <p class="sw-testimonial-quote">Engineered as our in-house flagship product: white-label WP admin customization, WooCommerce control panels, and Anthropic Claude AI assistant integration for frictionless client management.</p>
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
            <div class="sw-stat-floating">
              <div class="sw-stat-val">100% Custom</div>
              <div class="sw-stat-label">In-House AI MVP</div>
            </div>

            <div class="sw-card-img-wrapper">
              <img src="assets/case_study_bridgepoint_compliance_1785571461489.jpg" alt="Nativus Dashboard Pro" class="sw-card-img">

              <div class="sw-card-bottom">
                <div>
                  <div class="sw-client-title">Nativus Dashboard Pro</div>
                  <div class="sw-client-role">Proprietary AI MVP</div>
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

print("Saved homepage_hero_section.html updates.")
