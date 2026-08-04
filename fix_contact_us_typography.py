import re

file_path = r"C:\Users\HP\Downloads\Mega Menu\Contact_us.html"
with open(file_path, "r", encoding="utf-8") as f:
    content = f.read()

# Ensure Michroma heading font for .c8ct-h1
content = re.sub(r'font-family:\s*\'Bebas Neue\',\s*sans-serif;', "font-family: 'Michroma', sans-serif;", content)
content = re.sub(r'font-family:\s*Bebas Neue,\s*sans-serif;', "font-family: 'Michroma', sans-serif;", content)

# Ensure Space Mono font for eyebrows, tags, stamps, and field labels
content = re.sub(r'\.c8ct-tag\s*\{[^}]*\}', ".c8ct-tag { font-family: 'Space Mono', monospace; font-size: 9px; letter-spacing: 0.28em; text-transform: uppercase; color: var(--blue); margin-bottom: 16px; display: flex; align-items: center; gap: 8px; font-weight: 700; }", content)
content = re.sub(r'\.c8ct-stamp span\s*\{[^}]*\}', ".c8ct-stamp span { display: block; font-family: 'Space Mono', monospace; font-size: 8.5px; letter-spacing: .1em; text-transform: uppercase; color: var(--blue); line-height: 1.5; font-weight: 700; }", content)
content = re.sub(r'\.c8ct-meta-label\s*\{[^}]*\}', ".c8ct-meta-label { font-family: 'Space Mono', monospace; font-size: 9px; letter-spacing: .18em; text-transform: uppercase; color: var(--gray); margin-bottom: 6px; }", content)
content = re.sub(r'\.c8ct-form-label\s*\{[^}]*\}', ".c8ct-form-label { font-family: 'Space Mono', monospace; font-size: 9px; letter-spacing: .18em; text-transform: uppercase; color: var(--gray); margin-bottom: 1.5rem; font-weight: 700; }", content)

with open(file_path, "w", encoding="utf-8") as f:
    f.write(content)

print("Updated Contact_us.html typography rules.")
