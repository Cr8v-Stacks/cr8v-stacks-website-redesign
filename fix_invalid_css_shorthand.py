file_path = r"C:\Users\HP\Downloads\Mega Menu\homepage_hero_section.html"

with open(file_path, "r", encoding="utf-8") as f:
    content = f.read()

# Replace invalid background shorthand with valid background-color & background-image
invalid_str = "background: #080808 radial-gradient(circle at 15% 15%, rgba(0, 71, 225, 0.45) 0%, transparent 60%), radial-gradient(circle at 90% 85%, rgba(0, 56, 192, 0.35) 0%, transparent 60%) !important;"
valid_str = "background-color: #080808 !important;\n      background-image: radial-gradient(circle at 15% 15%, rgba(0, 71, 225, 0.45) 0%, transparent 60%), radial-gradient(circle at 90% 85%, rgba(0, 56, 192, 0.35) 0%, transparent 60%) !important;"

content = content.replace(invalid_str, valid_str)

# Also fix any other background shorthand with radial-gradient
content = content.replace("background: #080808 radial-gradient", "background-color: #080808 !important;\n      background-image: radial-gradient")

with open(file_path, "w", encoding="utf-8") as f:
    f.write(content)

print("Fixed homepage_hero_section.html background syntax to valid W3C background-color and background-image.")
