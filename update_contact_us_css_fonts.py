import re

css_path = r"C:\Users\HP\Downloads\Mega Menu\contact_us.css"
html_path = r"C:\Users\HP\Downloads\Mega Menu\Contact_us.html"

# Read contact_us.css
with open(css_path, "r", encoding="utf-8") as f:
    css = f.read()

# Add Google Fonts import at top if missing
font_import = "@import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=DM+Sans:wght@300;400;500;700&family=Michroma&family=Space+Mono:wght@400;700&display=swap');\n\n"
if '@import url' not in css:
    css = font_import + css

# Enforce font rules in contact_us.css
css = re.sub(r'font-family:\s*\'Bebas Neue\',\s*sans-serif;', "font-family: 'Michroma', sans-serif !important;", css)
css = re.sub(r'font-family:\s*Bebas Neue,\s*sans-serif;', "font-family: 'Michroma', sans-serif !important;", css)
css = re.sub(r'\.c8ct-h1\s*\{[^}]*\}', ".c8ct-h1 { font-family: 'Michroma', sans-serif !important; font-size: 2.2rem; line-height: 1.15; color: var(--c8cf-ink); letter-spacing: .01em; max-width: 18ch; margin-bottom: .85rem; font-weight: 700; }", css)
css = re.sub(r'\.c8ct-tag\s*\{[^}]*\}', ".c8ct-tag { font-family: 'Space Mono', monospace !important; font-size: 9px; letter-spacing: .28em; text-transform: uppercase; color: var(--c8cf-blue); margin-bottom: 16px; display: flex; align-items: center; gap: 8px; font-weight: 700; }", css)
css = re.sub(r'\.c8ct-stamp span\s*\{[^}]*\}', ".c8ct-stamp span { display: block; font-family: 'Space Mono', monospace !important; font-size: 8.5px; letter-spacing: .1em; text-transform: uppercase; color: var(--c8cf-blue); line-height: 1.5; font-weight: 700; }", css)
css = re.sub(r'\.c8ct-meta-label\s*\{[^}]*\}', ".c8ct-meta-label { font-family: 'Space Mono', monospace !important; font-size: 9px; letter-spacing: .18em; text-transform: uppercase; color: var(--c8cf-gray); margin-bottom: 6px; font-weight: 700; }", css)
css = re.sub(r'\.c8ct-form-label\s*\{[^}]*\}', ".c8ct-form-label { font-family: 'Space Mono', monospace !important; font-size: 9px; letter-spacing: .18em; text-transform: uppercase; color: var(--c8cf-gray); margin-bottom: 1.5rem; font-weight: 700; }", css)
css = re.sub(r'\.c8cf-flabel\s*\{[^}]*\}', ".c8cf-flabel { font-family: 'Space Mono', monospace !important; font-size: 9px; letter-spacing: .16em; text-transform: uppercase; color: var(--c8cf-gray); margin-bottom: 8px; display: block; font-weight: 700; }", css)

with open(css_path, "w", encoding="utf-8") as f:
    f.write(css)

print("Updated contact_us.css with Google Fonts import and strict font hierarchy rules.")

# Update Contact_us.html to link contact_us.css and embed the font link
with open(html_path, "r", encoding="utf-8") as f:
    html = f.read()

# Update form label text from Your Turn / Your Form to FILL OUT THE PROJECT FORM BELOW
html = html.replace('<div class="c8ct-form-label">Your Turn</div>', '<div class="c8ct-form-label">FILL OUT THE PROJECT FORM BELOW</div>')
html = html.replace('<div class="c8ct-form-label">Your Form</div>', '<div class="c8ct-form-label">FILL OUT THE PROJECT FORM BELOW</div>')

# Ensure <link href="https://fonts.googleapis.com..."> is present in Contact_us.html
font_link = '<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@300;400;500;700&family=Michroma&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">\n'
if 'fonts.googleapis.com' not in html:
    html = font_link + html

with open(html_path, "w", encoding="utf-8") as f:
    f.write(html)

print("Saved Contact_us.html with Google Fonts link and updated form label!")
