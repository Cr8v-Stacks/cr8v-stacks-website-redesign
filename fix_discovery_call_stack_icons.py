import re

file_path = r"C:\Users\HP\Downloads\Mega Menu\discovery-call.html"
with open(file_path, "r", encoding="utf-8") as f:
    content = f.read()

# Replace human author avatar with tech stack CDN logos
author_old_pattern = r'<div class="c8dc-testi-author">\s*<img src="https://images\.unsplash\.com/[^"]*"[^>]*>\s*<div>\s*<div class="c8dc-author-name">.*?</div>\s*<div class="c8dc-author-role">.*?</div>\s*</div>\s*</div>'

author_new_stack = '''<div class="c8dc-testi-author" style="display:flex;align-items:center;justify-content:space-between;width:100%;">
          <div style="display:flex;align-items:center;gap:0.75rem;">
            <div style="display:flex;align-items:center;gap:0.5rem;background:rgba(255,255,255,0.06);padding:6px 12px;border-radius:4px;border:1px solid rgba(255,255,255,0.1);">
              <img src="https://cdn.jsdelivr.net/gh/glincker/thesvg@main/public/icons/openai/light.svg" alt="OpenAI" style="width:16px;height:16px;">
              <img src="https://cdn.simpleicons.org/shopify/95BF47" alt="Shopify" style="width:16px;height:16px;">
              <img src="https://cdn.simpleicons.org/nextdotjs/ffffff" alt="Next.js" style="width:16px;height:16px;">
              <img src="https://cdn.simpleicons.org/wordpress/21759B" alt="WordPress" style="width:16px;height:16px;">
            </div>
          </div>
          <div style="text-align:right;">
            <div class="c8dc-author-name" style="font-family:var(--font-mono);font-size:9px;letter-spacing:0.14em;text-transform:uppercase;color:var(--blue-hi);">VERIFIED TECH STACK</div>
            <div class="c8dc-author-role" style="font-family:var(--font-body);font-size:0.78rem;color:rgba(255,255,255,0.6);">Enterprise Digital Architecture</div>
          </div>
        </div>'''

content = re.sub(author_old_pattern, author_new_stack, content, flags=re.DOTALL)

with open(file_path, "w", encoding="utf-8") as f:
    f.write(content)

print("Updated discovery-call.html testimonial to use tech stack CDN logos instead of human avatar.")
