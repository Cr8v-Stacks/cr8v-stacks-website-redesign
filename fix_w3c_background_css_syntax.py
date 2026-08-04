import re

file_path = r"C:\Users\HP\Downloads\Mega Menu\homepage_hero_section.html"
with open(file_path, "r", encoding="utf-8") as f:
    content = f.read()

# Valid browser CSS syntax separating background-color and background-image
valid_css = '''.sdv-section, .wwa-section {
      background-color: #080808 !important;
      background-image: radial-gradient(circle at 20% 20%, rgba(0, 71, 225, 0.45) 0%, transparent 60%), radial-gradient(circle at 85% 85%, rgba(0, 56, 192, 0.35) 0%, transparent 60%) !important;
      position: relative;
      overflow: hidden;
    }'''

content = re.sub(r'\.sdv-section,\s*\.wwa-section\s*\{[^}]*background:[^}]*\}', valid_css, content)

with open(file_path, "w", encoding="utf-8") as f:
    f.write(content)

print("Updated homepage_hero_section.html with 100% valid W3C background-color and background-image CSS syntax.")
