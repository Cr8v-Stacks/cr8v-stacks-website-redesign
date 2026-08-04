import re

file_path = r"C:\Users\HP\Downloads\Mega Menu\homepage_hero_section.html"
with open(file_path, "r", encoding="utf-8") as f:
    content = f.read()

# 1. Update .sw-case-section padding to 5rem 3.5rem
content = re.sub(
    r'\.sw-case-section\s*\{[^}]*padding:\s*7\.5rem\s+3\.5rem;([^}]*)\}',
    r'.sw-case-section {\n    padding: 5rem 3.5rem;\1}',
    content
)
content = re.sub(r'padding:\s*7\.5rem\s+3\.5rem;', 'padding: 5rem 3.5rem;', content)

print("Updated .sw-case-section padding to 5rem 3.5rem.")

# 2. Remove box-shadow from .sw-card-wrapper and .sw-stat-floating
content = re.sub(r'box-shadow:\s*0\s+24px\s+60px\s+rgba\(0,\s*71,\s*225,\s*0\.12\);', '/* box-shadow removed */', content)
content = re.sub(r'box-shadow:\s*0\s+8px\s+32px\s+rgba\(0,\s*71,\s*225,\s*0\.15\)[^;]*;', '/* box-shadow removed */', content)

# 3. Remove box-shadow from primary buttons
content = re.sub(r'box-shadow:\s*0\s+10px\s+25px\s+rgba\(0,\s*71,\s*225,\s*0\.22\);', '/* box-shadow removed */', content)
content = re.sub(r'box-shadow:\s*0\s+14px\s+30px\s+rgba\(0,\s*71,\s*225,\s*0\.35\);', '/* box-shadow removed */', content)

print("Removed box shadows from .sw-card-wrapper, .sw-stat-floating, and primary buttons.")

# 4. Update Hero Eyebrow text and styling
# Replace old hero eyebrow text 'Web Design AI MVP & Custom Development'
content = content.replace(
    'Web Design AI MVP &amp; Custom Development',
    'STRATEGY &nbsp;&middot;&nbsp; DESIGN &nbsp;&middot;&nbsp; CODE &nbsp;&middot;&nbsp; AI MVPs'
)
content = content.replace(
    'Web Design AI MVP & Custom Development',
    'STRATEGY &nbsp;&middot;&nbsp; DESIGN &nbsp;&middot;&nbsp; CODE &nbsp;&middot;&nbsp; AI MVPs'
)

# Remove light accent blue background and light blue border from .c8-eyebrow and eyebrows sitewide
eyebrow_css_old = r'\.c8-eyebrow\s*\{[^}]*\}'
eyebrow_css_new = '''.c8-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: 0.5rem;
  font-family: var(--font-mono);
  font-size: 0.72rem;
  letter-spacing: 0.16em;
  text-transform: uppercase;
  color: var(--c8-blue);
  background: transparent !important;
  border: none !important;
  padding: 0 !important;
  margin-bottom: 1.5rem;
}'''

content = re.sub(eyebrow_css_old, eyebrow_css_new, content)

# Remove background and borders from ALL eyebrow classes sitewide (.sdv-eyebrow, .dp-eyebrow, .hww-eyebrow, .wwa-eyebrow, .tmn-eyebrow, .faq-eyebrow, .cta-badge)
content = re.sub(r'background:\s*rgba\(0,\s*71,\s*225,\s*0\.08\);?', 'background: transparent !important;', content)
content = re.sub(r'background:\s*rgba\(0,\s*71,\s*225,\s*0\.06\);?', 'background: transparent !important;', content)
content = re.sub(r'border:\s*1px\s+solid\s+rgba\(0,\s*71,\s*225,\s*0\.\d+\);?', 'border: none !important;', content)

print("Updated Hero eyebrow text and removed eyebrow backgrounds/borders sitewide.")

with open(file_path, "w", encoding="utf-8") as f:
    f.write(content)

print("Saved all CSS and eyebrow updates to homepage_hero_section.html!")
