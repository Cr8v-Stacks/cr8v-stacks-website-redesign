import subprocess

output = subprocess.check_output(['git', 'show', '64a4fc0:about-us (1).html'], cwd=r'C:\Users\HP\Downloads\Mega Menu').decode('utf-8')
with open(r'C:\Users\HP\Downloads\Mega Menu\original_about_us_content.html', 'w', encoding='utf-8') as f:
    f.write(output)

print(f"Saved original about-us content ({len(output)} bytes) to original_about_us_content.html")
