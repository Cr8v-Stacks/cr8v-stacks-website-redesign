import re

file_path = r"C:\Users\HP\Downloads\Mega Menu\discovery-call.html"
with open(file_path, "r", encoding="utf-8") as f:
    content = f.read()

# Update discovery-call.html heading font sizes to 0.52rem
heading_css_exact = '''
    .c8dc-section-h2 {
      font-family: var(--font-heading);
      font-size: 0.52rem !important;
      font-weight: 700;
      color: var(--gray);
      letter-spacing: 0.16em;
      margin-bottom: 0.85rem;
      text-transform: uppercase;
    }
    .c8dc-testi-heading {
      font-family: var(--font-heading);
      font-size: 0.52rem !important;
      font-weight: 700;
      letter-spacing: 0.16em;
      text-transform: uppercase;
      color: var(--blue-hi);
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
    }
    .c8dc-author-role {
      font-family: var(--font-heading) !important;
      font-size: 0.52rem !important;
      font-weight: 700 !important;
      letter-spacing: 0.14em !important;
      text-transform: uppercase !important;
      color: rgba(255,255,255,0.6) !important;
    }
'''

content = re.sub(r'\.c8dc-section-h2\s*\{[^}]*\}', '.c8dc-section-h2 {\n      font-family: var(--font-heading);\n      font-size: 0.52rem !important;\n      font-weight: 700;\n      color: var(--gray);\n      letter-spacing: 0.16em;\n      margin-bottom: 0.85rem;\n      text-transform: uppercase;\n    }', content)
content = re.sub(r'\.c8dc-testi-heading\s*\{[^}]*\}', '.c8dc-testi-heading {\n      font-family: var(--font-heading);\n      font-size: 0.52rem !important;\n      font-weight: 700;\n      letter-spacing: 0.16em;\n      text-transform: uppercase;\n      color: var(--blue-hi);\n      display: inline-flex;\n      align-items: center;\n      gap: 0.5rem;\n    }', content)

with open(file_path, "w", encoding="utf-8") as f:
    f.write(content)

print("Updated discovery-call.html headings to exact 0.52rem font size.")
