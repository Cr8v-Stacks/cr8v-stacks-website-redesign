import re

file_path = r"C:\Users\HP\Downloads\Mega Menu\homepage_hero_section.html"
with open(file_path, "r", encoding="utf-8") as f:
    content = f.read()

content = content.replace(
    '<div class="tmn-eyebrow"><span class="c8-eyebrow-slash">//</span> <span class="tmn-eyebrow-slash">/</span> WHAT CLIENTS SAY</div>',
    '<div class="tmn-eyebrow"><span class="c8-eyebrow-slash">//</span> WHAT CLIENTS SAY</div>'
)

with open(file_path, "w", encoding="utf-8") as f:
    f.write(content)

print("Cleaned up Testimonials eyebrow slash.")
