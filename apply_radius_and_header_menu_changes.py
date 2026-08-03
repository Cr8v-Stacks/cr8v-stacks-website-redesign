import re

file_path = r"C:\Users\HP\Downloads\Mega Menu\homepage_hero_section.html"
with open(file_path, "r", encoding="utf-8") as f:
    content = f.read()

# 1. Remove header navigation menu links (<ul class="c8-nav-menu">...</ul>)
old_menu_pattern = r'<ul class="c8-nav-menu">.*?</ul>'
if re.search(old_menu_pattern, content, flags=re.DOTALL):
    content = re.sub(old_menu_pattern, '', content, flags=re.DOTALL)
    print("Header navigation menu links removed.")

# Also hide .c8-nav-menu in CSS
content = re.sub(r'\.c8-nav-menu\s*\{[^}]*\}', '.c8-nav-menu { display: none !important; }', content)

# 2. Replace all instances of border-radius: 12px with border-radius: 4px
content = re.sub(r'border-radius:\s*12px', 'border-radius: 4px', content)
content = re.sub(r'border-radius:\s*16px', 'border-radius: 4px', content)
content = re.sub(r'border-radius:\s*20px', 'border-radius: 4px', content)
content = re.sub(r'--c8-radius:\s*12px', '--c8-radius: 4px', content)
content = re.sub(r'--c8-radius:\s*16px', '--c8-radius: 4px', content)

print("Updated border-radius to 4px sitewide.")

with open(file_path, "w", encoding="utf-8") as f:
    f.write(content)

print("Saved all updates to homepage_hero_section.html!")
