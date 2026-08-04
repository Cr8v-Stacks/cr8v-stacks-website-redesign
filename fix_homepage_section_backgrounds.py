import re

file_path = r"C:\Users\HP\Downloads\Mega Menu\homepage_hero_section.html"
with open(file_path, "r", encoding="utf-8") as f:
    content = f.read()

# Replace .sdv-section CSS definition
sdv_css_new = '''.sdv-section {
      background: #080808 radial-gradient(circle at 15% 15%, rgba(0, 71, 225, 0.45) 0%, transparent 60%), radial-gradient(circle at 90% 85%, rgba(0, 56, 192, 0.35) 0%, transparent 60%) !important;
      padding: 9rem 3.5rem;
      position: relative;
      overflow: hidden;
    }'''

content = re.sub(r'\.sdv-section\s*\{[^}]*background:\s*#080808;[^}]*\}', sdv_css_new, content)

# Replace .wwa-section CSS definition
wwa_css_new = '''.wwa-section {
        background: #080808 radial-gradient(circle at 15% 15%, rgba(0, 71, 225, 0.45) 0%, transparent 60%), radial-gradient(circle at 90% 85%, rgba(0, 56, 192, 0.35) 0%, transparent 60%) !important;
        padding: clamp(5rem, 9vw, 8rem) 0;
        position: relative;
        overflow: hidden;
      }'''

content = re.sub(r'\.wwa-section\s*\{[^}]*background:\s*var\(--c8-ink\);[^}]*\}', wwa_css_new, content)

with open(file_path, "w", encoding="utf-8") as f:
    f.write(content)

print("Updated homepage_hero_section.html to enforce ambient radial blue gradient on What We Actually Do (.sdv-section) and Who We Are (.wwa-section) sections.")
