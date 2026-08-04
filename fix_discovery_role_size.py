import re

file_path = r"C:\Users\HP\Downloads\Mega Menu\discovery-call.html"
with open(file_path, "r", encoding="utf-8") as f:
    content = f.read()

old_role = r'<div class="c8dc-author-role"[^>]*>Enterprise Digital Architecture</div>'
new_role = '<div class="c8dc-author-role" style="font-family:var(--font-heading);font-size: 0.52rem;font-weight:700;color:rgba(255,255,255,0.6);">Enterprise Digital Architecture</div>'

content = re.sub(old_role, new_role, content)

with open(file_path, "w", encoding="utf-8") as f:
    f.write(content)

print("Updated c8dc-author-role font-size to 0.52rem in discovery-call.html!")
