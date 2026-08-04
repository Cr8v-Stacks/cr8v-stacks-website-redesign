import re

file_path = r"C:\Users\HP\Downloads\Mega Menu\homepage_hero_section.html"
with open(file_path, "r", encoding="utf-8") as f:
    content = f.read()

# 1. Update .sw-intro padding
content = re.sub(
    r'\.sw-intro\s*\{[^}]*padding:\s*7rem\s+3\.5rem\s+4rem\s+3\.5rem;([^}]*)\}',
    r'.sw-intro {\n    padding: 7rem 0rem 2rem 0rem;\1}',
    content
)
content = re.sub(r'padding:\s*7rem\s+3\.5rem\s+4rem\s+3\.5rem;', 'padding: 7rem 0rem 2rem 0rem;', content)

# 2. Case Study 3 (Nativus Dashboard Pro): Change floating stat badge CDN logo to WordPress
cs3_stat_floating = '''<div class="sw-stat-floating" style="padding:0.75rem 1rem;">
              <div class="sw-stat-author" style="display:flex;align-items:center;gap:0.75rem;">
                <div style="width:32px;height:32px;border-radius:4px;background:rgba(33,117,155,0.12);display:flex;align-items:center;justify-content:center;border:1px solid rgba(33,117,155,0.3);">
                  <img src="https://cdn.simpleicons.org/wordpress/21759B" alt="WordPress" style="width:18px;height:18px;">
                </div>
                <div>
                  <div class="sw-stat-name" style="font-family:var(--font-mono);font-size:9.5px;letter-spacing:0.12em;text-transform:uppercase;color:var(--c8-blue);">WORDPRESS STACK</div>
                  <div class="sw-stat-role" style="font-family:var(--font-body);font-size:0.75rem;color:rgba(8,8,8,0.6);">Proprietary Build</div>
                </div>
              </div>
            </div>'''

content = re.sub(r'<div class="sw-stat-floating".*?CLAUDE AI STACK.*?</div>\s*</div>\s*</div>', cs3_stat_floating, content, flags=re.DOTALL)

# 3. Case Study 2 (The Duch Apartments): Change testimonial avatar CDN logo to WordPress
cs2_testimonial_meta = '''<div class="sw-testimonial-meta">
              <div class="sw-testimonial-avatar" style="width:36px;height:36px;border-radius:4px;background:rgba(33,117,155,0.12);display:flex;align-items:center;justify-content:center;border:1px solid rgba(33,117,155,0.3);">
                <img src="https://cdn.simpleicons.org/wordpress/21759B" alt="WordPress" style="width:20px;height:20px;">
              </div>
              <div>
                <div class="sw-testimonial-role">Web Design &amp; SEO · Lagos, Nigeria</div>
              </div>
            </div>'''

# Replace Shopify logo in Duch Apartments section with WordPress logo
content = re.sub(r'id="cs-duch-apartments".*?<div class="sw-testimonial-meta">.*?</div>\s*</div>', lambda m: m.group(0).split('<div class="sw-testimonial-meta">')[0] + cs2_testimonial_meta + '</div>', content, flags=re.DOTALL)

with open(file_path, "w", encoding="utf-8") as f:
    f.write(content)

print("Saved homepage_hero_section.html sw-intro padding and WordPress CDN logo updates.")
