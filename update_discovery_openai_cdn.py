import re

file_path = r"C:\Users\HP\Downloads\Mega Menu\discovery-call.html"
with open(file_path, "r", encoding="utf-8") as f:
    content = f.read()

# Replace OpenAI CDN link in discovery-call.html
old_openai = 'https://cdn.simpleicons.org/openai/FFFFFF'
new_openai = 'https://cdn.jsdelivr.net/gh/glincker/thesvg@main/public/icons/openai/dark.svg'

content = content.replace(old_openai, new_openai)

with open(file_path, "w", encoding="utf-8") as f:
    f.write(content)

print("Updated discovery-call.html with dark.svg OpenAI CDN link.")
