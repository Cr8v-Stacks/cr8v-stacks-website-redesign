import re

file_path = r"C:\Users\HP\Downloads\Mega Menu\homepage_hero_section.html"
with open(file_path, "r", encoding="utf-8") as f:
    content = f.read()

# 1. Restore border to .sw-stat-floating
content = re.sub(
    r'\.sw-stat-floating\s*\{([^}]*)\} border: none !important;',
    r'.sw-stat-floating {\1 border: 1px solid rgba(8, 8, 8, 0.12);',
    content
)
content = re.sub(
    r'(\.sw-stat-floating\s*\{[^}]*?)border:\s*none\s*!important;',
    r'\1border: 1px solid rgba(8, 8, 8, 0.12);',
    content
)

# 2. Hero Eyebrow update: Plain text with // slash
hero_eyebrow_new = '<div class="c8-eyebrow"><span class="c8-eyebrow-slash">//</span> HIGH-CONVERTING DIGITAL PRODUCTION</div>'

content = re.sub(
    r'<div class="c8-eyebrow">.*?</div>',
    hero_eyebrow_new,
    content,
    count=1,
    flags=re.DOTALL
)

print("Updated .sw-stat-floating border and Hero Eyebrow.")

# 3. Ensure ALL eyebrows across homepage have // slash
# Replace any eyebrows missing <span class="c8-eyebrow-slash">//</span>
def add_slash_to_eyebrow(match):
    full = match.group(0)
    if '//' not in full and 'c8-eyebrow-slash' not in full:
        # insert slash right after opening tag
        return re.sub(r'>(.*?)</div>', r'><span class="c8-eyebrow-slash">//</span> \1</div>', full)
    return full

content = re.sub(r'<div class="[^"]*eyebrow[^"]*">.*?</div>', add_slash_to_eyebrow, content)

with open(file_path, "w", encoding="utf-8") as f:
    f.write(content)

print("Saved homepage_hero_section.html updates.")
