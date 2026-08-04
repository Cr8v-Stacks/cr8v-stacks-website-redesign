import re

file_path = r"C:\Users\HP\Downloads\Mega Menu\discovery-call.html"
with open(file_path, "r", encoding="utf-8") as f:
    content = f.read()

# Revert section heading font sizes to exact compact label sizes while keeping Michroma font
heading_css_compact = '''
    .c8dc-section-h2 {
      font-family: var(--font-heading);
      font-size: 9px;
      font-weight: 700;
      color: var(--gray);
      letter-spacing: 0.2em;
      margin-bottom: 0.85rem;
      text-transform: uppercase;
    }
    .c8dc-testi-heading {
      font-family: var(--font-heading);
      font-size: 8.5px;
      font-weight: 700;
      letter-spacing: 0.16em;
      text-transform: uppercase;
      color: var(--blue-hi);
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
    }
'''

content = re.sub(r'\.c8dc-section-h2\s*\{[^}]*\}', '.c8dc-section-h2 {\n      font-family: var(--font-heading);\n      font-size: 9px;\n      font-weight: 700;\n      color: var(--gray);\n      letter-spacing: 0.2em;\n      margin-bottom: 0.85rem;\n      text-transform: uppercase;\n    }', content)
content = re.sub(r'\.c8dc-testi-heading\s*\{[^}]*\}', '.c8dc-testi-heading {\n      font-family: var(--font-heading);\n      font-size: 8.5px;\n      font-weight: 700;\n      letter-spacing: 0.16em;\n      text-transform: uppercase;\n      color: var(--blue-hi);\n      display: inline-flex;\n      align-items: center;\n      gap: 0.5rem;\n    }', content)

with open(file_path, "w", encoding="utf-8") as f:
    f.write(content)

print("Reverted discovery-call.html heading sizes to original compact label size.")
