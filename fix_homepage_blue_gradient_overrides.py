import re

file_path = r"C:\Users\HP\Downloads\Mega Menu\homepage_hero_section.html"
with open(file_path, "r", encoding="utf-8") as f:
    content = f.read()

# 1. Update line 3414 to exclude .wwa-section from var(--c8-paper) override
content = content.replace('.hww-section, .wwa-section {', '.hww-section {')

# 2. Hide or adjust sdv-bg-blob opacity so the radial blue gradient is fully visible
content = re.sub(r'\.sdv-bg-blob\s*\{[^}]*opacity:\s*0\.18;[^}]*\}', '.sdv-bg-blob { position: absolute; border-radius: 50%; filter: blur(120px); pointer-events: none; opacity: 0.05; }', content)

# 3. Ensure .sdv-section and .wwa-section background rules at top of style block
css_override = '''
    /* Ambient Radial Blue Gradient Background for What We Actually Do and Who We Are */
    .sdv-section, .wwa-section {
      background: #080808 radial-gradient(circle at 20% 20%, rgba(0, 71, 225, 0.45) 0%, transparent 60%), radial-gradient(circle at 85% 85%, rgba(0, 56, 192, 0.35) 0%, transparent 60%) !important;
      position: relative;
      overflow: hidden;
    }
    .sdv-section::after, .wwa-section::after {
      content: '';
      position: absolute;
      inset: 0;
      background-image: url("data:image/svg+xml;utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='140' height='140'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='2' stitchTiles='stitch'/%3E%3CfeColorMatrix type='matrix' values='0 0 0 0 1  0 0 0 0 1  0 0 0 0 1  0 0 0 0.04 0'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)'/%3E%3C/svg%3E");
      background-size: 140px 140px;
      mix-blend-mode: screen;
      pointer-events: none;
      z-index: 0;
    }
    .sdv-inner, .wwa-inner {
      position: relative;
      z-index: 1;
    }
'''

content = content.replace('/* ── SERVICES DEEP DIVE', css_override + '\n    /* ── SERVICES DEEP DIVE')

with open(file_path, "w", encoding="utf-8") as f:
    f.write(content)

print("Fixed homepage_hero_section.html section background conflicts.")
