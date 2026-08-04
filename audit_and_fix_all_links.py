import re

file_path = r"C:\Users\HP\Downloads\Mega Menu\homepage_hero_section.html"
with open(file_path, "r", encoding="utf-8") as f:
    content = f.read()

# Fix case study buttons
content = content.replace('href="#blvck-hair-details"', 'href="blvck-hair-ng.html"')
content = content.replace('href="#duch-details"', 'href="the-duch-apartments.html"')

# Fix Dev Playground button
content = content.replace('href="#start"', 'href="discovery-call.html"')

with open(file_path, "w", encoding="utf-8") as f:
    f.write(content)

print("Saved all link target updates in homepage_hero_section.html!")
