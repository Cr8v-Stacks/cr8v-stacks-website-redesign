import re

file_path = r"C:\Users\HP\Downloads\Mega Menu\Contact_us.html"
with open(file_path, "r", encoding="utf-8") as f:
    content = f.read()

# 1. Headings: Michroma
content = re.sub(r'\.c8ct-h1\s*\{[^}]*\}', ".c8ct-h1 { font-family: 'Michroma', sans-serif !important; font-size: 2.2rem; line-height: 1.15; color: var(--ink); letter-spacing: .01em; max-width: 18ch; margin-bottom: .85rem; font-weight: 700; }", content)

# 2. Eyebrows, Stamp & Labels: Space Mono
content = re.sub(r'\.c8ct-tag\s*\{[^}]*\}', ".c8ct-tag { font-family: 'Space Mono', monospace !important; font-size: 9px; letter-spacing: .28em; text-transform: uppercase; color: var(--blue); margin-bottom: 16px; display: flex; align-items: center; gap: 8px; font-weight: 700; }", content)
content = re.sub(r'\.c8ct-stamp span\s*\{[^}]*\}', ".c8ct-stamp span { display: block; font-family: 'Space Mono', monospace !important; font-size: 8.5px; letter-spacing: .1em; text-transform: uppercase; color: var(--blue); line-height: 1.5; font-weight: 700; }", content)
content = re.sub(r'\.c8ct-meta-label\s*\{[^}]*\}', ".c8ct-meta-label { font-family: 'Space Mono', monospace !important; font-size: 9px; letter-spacing: .18em; text-transform: uppercase; color: var(--gray); margin-bottom: 6px; font-weight: 700; }", content)
content = re.sub(r'\.c8ct-form-label\s*\{[^}]*\}', ".c8ct-form-label { font-family: 'Space Mono', monospace !important; font-size: 9px; letter-spacing: .18em; text-transform: uppercase; color: var(--gray); margin-bottom: 1.5rem; font-weight: 700; }", content)
content = re.sub(r'\.c8cf-flabel\s*\{[^}]*\}', ".c8cf-flabel { font-family: 'Space Mono', monospace !important; font-size: 9px; letter-spacing: .16em; text-transform: uppercase; color: var(--c8cf-gray); margin-bottom: 8px; display: block; font-weight: 700; }", content)

# 3. Body & Inputs: DM Sans
content = re.sub(r'\.c8ct-lede\s*\{[^}]*\}', ".c8ct-lede { font-family: 'DM Sans', sans-serif !important; font-size: 14.5px; line-height: 1.6; color: #4a4a4a; font-weight: 300; max-width: 38ch; }", content)

with open(file_path, "w", encoding="utf-8") as f:
    f.write(content)

print("Saved Contact_us.html with strict font hierarchy rules.")
