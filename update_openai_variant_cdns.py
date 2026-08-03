import re

file_path = r"C:\Users\HP\Downloads\Mega Menu\homepage_hero_section.html"
with open(file_path, "r", encoding="utf-8") as f:
    content = f.read()

# 1. C4 Card ("What Shapes Every Project"): dark.svg variant
c4_old = r'<span class="hww-tag"><img src="https://cdn\.jsdelivr\.net/gh/glincker/thesvg@main/public/icons/openai/default\.svg"[^>]*>OpenAI</span>'
c4_new = '<span class="hww-tag"><img src="https://cdn.jsdelivr.net/gh/glincker/thesvg@main/public/icons/openai/dark.svg" alt="OpenAI">OpenAI</span>'

content = re.sub(c4_old, c4_new, content)

# 2. Testimonial Section: light.svg variant
tmn_old = r'<img src="https://cdn\.jsdelivr\.net/gh/glincker/thesvg@main/public/icons/openai/default\.svg" alt="OpenAI" class="tmn-thumb-logo-img">'
tmn_new = '<img src="https://cdn.jsdelivr.net/gh/glincker/thesvg@main/public/icons/openai/light.svg" alt="OpenAI" class="tmn-thumb-logo-img">'

content = re.sub(tmn_old, tmn_new, content)

with open(file_path, "w", encoding="utf-8") as f:
    f.write(content)

print("Updated OpenAI logo variant CDNs successfully!")
