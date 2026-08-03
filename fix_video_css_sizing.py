import re

file_path = r"C:\Users\HP\Downloads\Mega Menu\homepage_hero_section.html"
with open(file_path, "r", encoding="utf-8") as f:
    content = f.read()

# Restore Mascot video sizing & floating animation + add video protection
mascot_css_old = r'\.dp-mascot-wrap img,\s*\.dp-mascot-wrap video\s*\{[^}]*\}'
mascot_css_new = '''.dp-mascot-wrap img,
    .dp-mascot-wrap video {
      width: 100%;
      height: auto;
      display: block;
      animation: dpFloat 4.5s ease-in-out infinite;
      pointer-events: none !important;
      user-select: none !important;
      -webkit-user-select: none !important;
    }'''

content = re.sub(mascot_css_old, mascot_css_new, content)

# Restore CTA video sizing + add video protection
cta_css_old = r'\.cta-arc-img,\s*\.cta-arc-video\s*\{[^}]*\}'
cta_css_new = '''.cta-arc-img,
    .cta-arc-video {
      width: 100%;
      max-width: 780px;
      height: auto;
      display: block;
      object-fit: contain;
      pointer-events: none !important;
      user-select: none !important;
      -webkit-user-select: none !important;
    }'''

content = re.sub(cta_css_old, cta_css_new, content)

with open(file_path, "w", encoding="utf-8") as f:
    f.write(content)

print("Restored video sizing & floating animation with complete pointer-events protection.")
