import re

file_path = r"C:\Users\HP\Downloads\Mega Menu\homepage_hero_section.html"
with open(file_path, "r", encoding="utf-8") as f:
    content = f.read()

# Replace Anthropic logo with official Claude logo CDN
old_anthropic = 'https://cdn.simpleicons.org/anthropic/D97757'
new_claude = 'https://cdn.jsdelivr.net/gh/glincker/thesvg@main/public/icons/claude/default.svg'

content = content.replace(old_anthropic, new_claude)

with open(file_path, "w", encoding="utf-8") as f:
    f.write(content)

print("Updated homepage_hero_section.html to use official Claude CDN logo.")
