import re

file_path = r"C:\Users\HP\Downloads\Mega Menu\homepage_hero_section.html"
with open(file_path, "r", encoding="utf-8") as f:
    content = f.read()

# CSS snippet for the Contact Us radial blue gradient + noise overlay
blue_gradient_css = '''
    .sdv-section, .wwa-section {
      background: #080808 !important;
      position: relative;
      overflow: hidden;
    }
    .sdv-section::before, .wwa-section::before {
      content: '';
      position: absolute;
      inset: 0;
      background: radial-gradient(circle at 15% 15%, rgba(0, 71, 225, 0.4) 0%, transparent 50%), radial-gradient(circle at 90% 85%, rgba(0, 56, 192, 0.25) 0%, transparent 50%);
      pointer-events: none;
      z-index: 0;
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

# Insert the blue_gradient_css into the main <style> block of homepage_hero_section.html
content = content.replace('/* ── SERVICES DEEP DIVE', blue_gradient_css + '\n    /* ── SERVICES DEEP DIVE')

with open(file_path, "w", encoding="utf-8") as f:
    f.write(content)

print("Applied Contact Us ambient blue gradient background to What We Actually Do and Who We Are sections.")
