import re

file_path = r"C:\Users\HP\Downloads\Mega Menu\homepage_hero_section.html"
with open(file_path, "r", encoding="utf-8") as f:
    content = f.read()

# 1. Update Hero Eyebrow Copy
old_hero_eyebrow = r'<div class="c8-eyebrow">.*?HIGH-CONVERTING DIGITAL PRODUCTION.*?</div>'
new_hero_eyebrow = '<div class="c8-eyebrow"><span class="c8-eyebrow-slash">//</span> LOOK LIKE THE COMPANY YOU ARE BECOMING</div>'

content = re.sub(old_hero_eyebrow, new_hero_eyebrow, content, count=1, flags=re.DOTALL)

# 2. Update Hero Subtitle/Description Copy & Typography
old_hero_sub = r'<p class="c8-hero-sub">.*?</p>'
new_hero_sub = '<p class="c8-hero-sub">We engineer high-converting web platforms, custom digital architectures, and production-ready AI MVPs built from scratch for ambitious brands — replacing generic templates with liquid performance, authority-driven design, and scalable code that transforms how your business operates and converts online.</p>'

content = re.sub(old_hero_sub, new_hero_sub, content, count=1, flags=re.DOTALL)

# Enforce standardized Hero Subtitle CSS
hero_sub_css_old = r'\.c8-hero-sub\s*\{[^}]*\}'
hero_sub_css_new = '''.c8-hero-sub {
  font-family: var(--font-body);
  font-size: 1.05rem;
  line-height: 1.65;
  font-weight: 400;
  color: rgba(255, 255, 255, 0.72);
  max-width: 760px;
  margin-bottom: 2rem;
}'''

content = re.sub(hero_sub_css_old, hero_sub_css_new, content)

print("Updated Hero eyebrow copy, expanded hero description, and standardized hero typography.")

# 3. Update Case Studies thumbnails to Tech Stack CDN logos
# Case 1 (blvck Hair): Shopify CDN logo
cs1_old_thumb = r'<div class="sw-stat-author">\s*<img src="[^"]*" alt="[^"]*"\s*class="sw-stat-avatar">\s*<div>\s*<div class="sw-stat-name">.*?</div>\s*<div class="sw-stat-role">.*?</div>\s*</div>\s*</div>'
cs1_new_thumb = '''<div class="sw-stat-author" style="display:flex;align-items:center;gap:0.75rem;">
                <div style="width:36px;height:36px;border-radius:4px;background:rgba(149,191,71,0.12);display:flex;align-items:center;justify-content:center;border:1px solid rgba(149,191,71,0.3);">
                  <img src="https://cdn.simpleicons.org/shopify/95BF47" alt="Shopify" style="width:20px;height:20px;">
                </div>
                <div>
                  <div class="sw-stat-name" style="font-family:var(--font-mono);font-size:10px;letter-spacing:0.12em;text-transform:uppercase;color:var(--c8-blue);">SHOPIFY STACK</div>
                  <div class="sw-stat-role" style="font-family:var(--font-body);font-size:0.78rem;color:rgba(8,8,8,0.6);">E-Commerce Core</div>
                </div>
              </div>'''

# Case 2 (The Duch Apartments): WordPress CDN logo
cs2_new_thumb = '''<div class="sw-stat-author" style="display:flex;align-items:center;gap:0.75rem;">
                <div style="width:36px;height:36px;border-radius:4px;background:rgba(33,117,155,0.12);display:flex;align-items:center;justify-content:center;border:1px solid rgba(33,117,155,0.3);">
                  <img src="https://cdn.simpleicons.org/wordpress/21759B" alt="WordPress" style="width:20px;height:20px;">
                </div>
                <div>
                  <div class="sw-stat-name" style="font-family:var(--font-mono);font-size:10px;letter-spacing:0.12em;text-transform:uppercase;color:var(--c8-blue);">WORDPRESS STACK</div>
                  <div class="sw-stat-role" style="font-family:var(--font-body);font-size:0.78rem;color:rgba(8,8,8,0.6);">Custom CMS Architecture</div>
                </div>
              </div>'''

# Case 3 (Overhaul Bridgepoint -> Nativerse Dashboard Pro AI MVP): Claude CDN logo
cs3_old_section = r'<section class="sw-case-section" id="cs-bridgepoint".*?</section>'
cs3_new_section = '''<section class="sw-case-section" id="cs-nativerse-dashboard" data-index="2">
      <div class="sw-container">
        <div class="sw-left">
          <div class="c8-eyebrow"><span class="c8-eyebrow-slash">//</span> PROPRIETARY AI MVP SHOWCASE</div>
          <h2 class="sw-h2">Nativerse Dashboard Pro — Custom WP Admin Ecosystem.</h2>
          <p class="sw-sub">
            We don't just build for clients — we showcase our own proprietary engineering. Nativerse Dashboard Pro is our custom WordPress admin dashboard plugin engineered for agency handovers, client onboarding, and WooCommerce management.
          </p>
          <div class="sw-deliverables">
            <div class="sw-deliv-item">Bespoke WP Admin Interface</div>
            <div class="sw-deliv-item">WooCommerce Client Controls</div>
            <div class="sw-deliv-item">Anthropic AI API Integration</div>
            <div class="sw-deliv-item">White-Label Client Handover</div>
          </div>
          <div class="sw-actions">
            <a href="nativerse-dashboard-pro.html" class="sw-btn-primary">Explore Nativerse Pro →</a>
            <a href="discovery-call.html" class="sw-btn-secondary">Build Similar AI MVP</a>
          </div>
        </div>

        <div class="sw-right">
          <div class="sw-card-wrapper">
            <div class="sw-stat-floating">
              <div class="sw-stat-val">100%</div>
              <div class="sw-stat-lbl">Proprietary Build</div>
              <div class="sw-stat-author" style="display:flex;align-items:center;gap:0.75rem;margin-top:0.75rem;">
                <div style="width:36px;height:36px;border-radius:4px;background:rgba(217,119,87,0.12);display:flex;align-items:center;justify-content:center;border:1px solid rgba(217,119,87,0.3);">
                  <img src="https://cdn.simpleicons.org/anthropic/D97757" alt="Anthropic Claude" style="width:20px;height:20px;">
                </div>
                <div>
                  <div class="sw-stat-name" style="font-family:var(--font-mono);font-size:10px;letter-spacing:0.12em;text-transform:uppercase;color:var(--c8-blue);">CLAUDE AI STACK</div>
                  <div class="sw-stat-role" style="font-family:var(--font-body);font-size:0.78rem;color:rgba(8,8,8,0.6);">Proprietary AI Product</div>
                </div>
              </div>
            </div>
            <div class="sw-card-inner">
              <img src="assets/case_study_bridgepoint_compliance_1785571461489.jpg" alt="Nativerse Dashboard Pro AI MVP" class="sw-card-img">
            </div>
          </div>
        </div>
      </div>
    </section>'''

# Apply Case Study replacements
content = re.sub(r'id="cs-blvck-hair".*?<div class="sw-stat-author">.*?</div>\s*</div>', lambda m: m.group(0).split('<div class="sw-stat-author">')[0] + cs1_new_thumb + '</div>', content, flags=re.DOTALL)
content = re.sub(r'id="cs-duch-apartments".*?<div class="sw-stat-author">.*?</div>\s*</div>', lambda m: m.group(0).split('<div class="sw-stat-author">')[0] + cs2_new_thumb + '</div>', content, flags=re.DOTALL)
content = re.sub(cs3_old_section, cs3_new_section, content, flags=re.DOTALL)

print("Updated Case Studies to use Shopify, WordPress, and Anthropic Claude CDN logos and replaced Bridgepoint with Nativerse Dashboard Pro.")

# 4. Link Audit: Update href="#" to valid internal targets
content = content.replace('href="#start"', 'href="discovery-call.html"')
content = content.replace('href="#contact"', 'href="Contact_us.html"')

with open(file_path, "w", encoding="utf-8") as f:
    f.write(content)

print("Saved homepage_hero_section.html successfully!")
