import re

file_path = r"C:\Users\HP\Downloads\Mega Menu\homepage_hero_section.html"
with open(file_path, "r", encoding="utf-8") as f:
    content = f.read()

# 1. Update .dp-stat-num font-size clamp from 3rem to 2rem
dp_stat_old = '''    .dp-stat-num {
      font-family: 'Michroma', sans-serif;
      font-size: clamp(2rem, 4vw, 3rem);
      font-weight: 700;
      color: #FFFFFF;
      line-height: 1;
      margin-bottom: 0.3rem;
    }'''

dp_stat_new = '''    .dp-stat-num {
      font-family: 'Michroma', sans-serif;
      font-size: clamp(2rem, 4vw, 2rem);
      font-weight: 700;
      color: #FFFFFF;
      line-height: 1;
      margin-bottom: 0.3rem;
    }'''

if dp_stat_old in content:
    content = content.replace(dp_stat_old, dp_stat_new)
    print("Updated .dp-stat-num font-size clamp to (2rem, 4vw, 2rem).")
else:
    content = re.sub(
        r'\.dp-stat-num\s*\{\s*font-family:[^;]+;\s*font-size:\s*clamp\(2rem,\s*4vw,\s*3rem\);',
        '.dp-stat-num {\n      font-family: \'Michroma\', sans-serif;\n      font-size: clamp(2rem, 4vw, 2rem);',
        content
    )
    print("Updated .dp-stat-num font-size clamp via regex.")

# 2. Exclude .dp-btn-primary from default blue button background and give it stark high-contrast white styling
old_btn_group = '''.c8-btn-primary,
    .dp-btn-primary,
    .cta-btn-pill,
    .tmn-schedule-btn,
    .faq-cta-link {'''

new_btn_group = '''.c8-btn-primary,
    .cta-btn-pill,
    .tmn-schedule-btn,
    .faq-cta-link {'''

if old_btn_group in content:
    content = content.replace(old_btn_group, new_btn_group)

# Add dedicated high-contrast .dp-btn-primary styling
dp_btn_css = '''
    /* Dedicated high-contrast styling for Dev Playground button on blue background */
    .dp-btn-primary {
      background: #FFFFFF !important;
      color: var(--c8-ink) !important;
      font-family: var(--font-mono);
      font-size: 0.88rem;
      font-weight: 700;
      padding: 0.9rem 2.2rem;
      border-radius: 4px;
      border: none;
      position: relative;
      overflow: hidden;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
      transition: transform 0.3s ease, box-shadow 0.3s ease, background 0.3s ease;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 0.5rem;
      text-decoration: none;
      cursor: pointer;
    }
    .dp-btn-primary:hover {
      background: #F4F4F4 !important;
      color: var(--c8-blue) !important;
      transform: translateY(-2px);
      box-shadow: 0 14px 30px rgba(0, 0, 0, 0.3);
    }'''

if '.dp-btn-primary {' not in content:
    content = content.replace(new_btn_group, dp_btn_css + '\n\n    ' + new_btn_group)
    print("Added dedicated high-contrast .dp-btn-primary styling.")

with open(file_path, "w", encoding="utf-8") as f:
    f.write(content)

print("Saved all updates to homepage_hero_section.html successfully!")
