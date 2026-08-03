import re

file_path = r"C:\Users\HP\Downloads\Mega Menu\homepage_hero_section.html"
with open(file_path, "r", encoding="utf-8") as f:
    content = f.read()

# 1. Update OpenAI logo in C4 card ("What Shapes Every Project")
c4_old_pattern = r'<span class="hww-tag">\s*<svg[^>]*>.*?</svg>\s*OpenAI\s*</span>'
c4_new = '<span class="hww-tag"><img src="https://cdn.jsdelivr.net/gh/glincker/thesvg@main/public/icons/openai/default.svg" alt="OpenAI" style="width:12px;height:12px;filter:invert(1);">OpenAI</span>'

content = re.sub(c4_old_pattern, c4_new, content, flags=re.DOTALL)

# 2. Update OpenAI logo in Testimonials thumbnail column
tmn_old_pattern = r'<button class="tmn-thumb-btn"[^>]*data-index="2"[^>]*>\s*<svg class="tmn-thumb-logo-img"[^>]*>.*?</svg>\s*<div class="tmn-progress-bar">'
tmn_new = '''<button class="tmn-thumb-btn" data-index="2" aria-label="View OpenAI AI MVP testimony">
            <img src="https://cdn.jsdelivr.net/gh/glincker/thesvg@main/public/icons/openai/default.svg" alt="OpenAI" class="tmn-thumb-logo-img">
            <div class="tmn-progress-bar">'''

content = re.sub(tmn_old_pattern, tmn_new, content, flags=re.DOTALL)

with open(file_path, "w", encoding="utf-8") as f:
    f.write(content)

print("Updated OpenAI logo CDN in C4 card and Testimonial section successfully!")
