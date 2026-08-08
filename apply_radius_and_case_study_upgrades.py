import os
import re

case_studies_dir = r"c:\Users\HP\Downloads\Mega Menu\Case Studies"

sequence = [
    ("the-duch-apartments.html", "The Duch Apartments"),
    ("bridgepoint-consulting.html", "Bridgepoint Advisory"),
    ("bridgepoints.html", "BridgePoints Brand Identity"),
    ("wp-publishion-ai.html", "WP Publishion AI"),
    ("stride-plus-media.html", "Stride Plus Media"),
    ("blvck-hair-ng.html", "blvck Hair NG"),
    ("sweetermen-ng.html", "SweeterMen NG"),
    ("victorias-lane.html", "Victoria's Lane"),
    ("mkenny-properties.html", "Mkenny Properties"),
    ("kiri-city-stays.html", "Kiri City Stays")
]

nav_css = """
    /* Next / Prev Case Study Pagination Bar */
    .c8cs-nav-bar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 1.5rem;
      max-width: 900px;
      margin: 3.5rem auto 0 auto;
      padding-top: 2.5rem;
      border-top: 1px solid rgba(8, 8, 8, 0.1);
      position: relative;
      z-index: 2;
    }
    .c8cs-nav-item {
      display: flex;
      flex-direction: column;
      text-decoration: none;
      transition: transform 0.25s ease;
    }
    .c8cs-nav-item:hover {
      transform: translateY(-2px);
    }
    .c8cs-nav-item.is-right {
      text-align: right;
      margin-left: auto;
    }
    .c8cs-nav-lbl {
      font-family: 'Space Mono', monospace;
      font-size: 9px;
      text-transform: uppercase;
      letter-spacing: 0.12em;
      color: #8A8A8A;
      margin-bottom: 4px;
    }
    .c8cs-nav-title {
      font-family: 'Michroma', sans-serif;
      font-size: 13px;
      font-weight: 700;
      color: #0047E1;
      text-transform: uppercase;
      letter-spacing: 0.02em;
    }
"""

def process_file(index):
    filename, title = sequence[index]
    filepath = os.path.join(case_studies_dir, filename)
    
    if not os.path.exists(filepath):
        print(f"File not found: {filepath}")
        return
        
    with open(filepath, 'r', encoding='utf-8') as f:
        content = f.read()

    # 1. Update border-radius in CSS to 4px
    content = re.sub(r'border-radius:\s*(?:24px|20px|16px|12px|10px|8px|6px)', 'border-radius: 4px', content)
    
    # 2. Inject nav_css if not present
    if '.c8cs-nav-bar' not in content:
        content = content.replace('</style>', nav_css + '\n  </style>')

    # 3. Ensure back link uses exact '../portfolio/' URL
    content = re.sub(r'href=["\']\.\./portfolio/index\.html["\']', 'href="../portfolio/"', content)

    # 4. Generate Next/Prev HTML
    prev_idx = (index - 1) % len(sequence)
    next_idx = (index + 1) % len(sequence)
    
    prev_file, prev_title = sequence[prev_idx]
    next_file, next_title = sequence[next_idx]

    nav_html = f"""
        <!-- Next / Prev Case Study Navigation -->
        <div class="c8cs-nav-bar">
          <a href="{prev_file}" class="c8cs-nav-item">
            <span class="c8cs-nav-lbl">&larr; Previous Case Study</span>
            <span class="c8cs-nav-title">{prev_title}</span>
          </a>
          <a href="{next_file}" class="c8cs-nav-item is-right">
            <span class="c8cs-nav-lbl">Next Case Study &rarr;</span>
            <span class="c8cs-nav-title">{next_title}</span>
          </a>
        </div>"""

    # Remove any existing c8cs-nav-bar HTML block first to prevent duplicates
    content = re.sub(r'\s*<!-- Next / Prev Case Study Navigation -->\s*<div class="c8cs-nav-bar">.*?</div>', '', content, flags=re.DOTALL)
    content = re.sub(r'\s*<div class="c8cs-nav-bar">.*?</div>', '', content, flags=re.DOTALL)

    # Insert nav_html right after </div> of c8cs-cta-card
    if '</div>\n      </div>\n    </section>' in content:
        content = content.replace('</div>\n      </div>\n    </section>', '</div>\n' + nav_html + '\n      </div>\n    </section>')
    elif '</div>\n    </section>' in content:
        content = content.replace('</div>\n    </section>', nav_html + '\n    </div>\n    </section>')

    with open(filepath, 'w', encoding='utf-8') as f:
        f.write(content)

    print(f"Updated {filename} successfully.")

for i in range(len(sequence)):
    process_file(i)

print("All 10 case study files processed successfully!")
