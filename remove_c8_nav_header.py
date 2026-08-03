import re

file_path = r"C:\Users\HP\Downloads\Mega Menu\homepage_hero_section.html"
with open(file_path, "r", encoding="utf-8") as f:
    content = f.read()

# Remove the entire <header class="c8-nav-header">...</header> element
old_header_pattern = r'<!-- Top Navigation Bar -->\s*<header class="c8-nav-header">.*?</header>'

if re.search(old_header_pattern, content, flags=re.DOTALL):
    content = re.sub(old_header_pattern, '', content, flags=re.DOTALL)
    print("Removed <header class=\"c8-nav-header\"> element.")
else:
    # Backup regex match
    content = re.sub(r'<header class="c8-nav-header">.*?</header>', '', content, flags=re.DOTALL)
    print("Removed header via regex.")

with open(file_path, "w", encoding="utf-8") as f:
    f.write(content)

print("Saved homepage_hero_section.html without c8-nav-header!")
