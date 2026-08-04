import re

file_path = r"C:\Users\HP\Downloads\Mega Menu\discovery-call.html"
with open(file_path, "r", encoding="utf-8") as f:
    content = f.read()

# Add CSS for section H2 headings using Michroma
heading_css = '''
    .c8dc-section-h2 {
      font-family: var(--font-heading);
      font-size: 1.15rem;
      font-weight: 700;
      color: var(--ink);
      letter-spacing: 0.01em;
      margin-bottom: 1rem;
      text-transform: uppercase;
    }
    .c8dc-testi-heading {
      font-family: var(--font-heading);
      font-size: 0.85rem;
      font-weight: 700;
      letter-spacing: 0.08em;
      text-transform: uppercase;
      color: var(--blue-hi);
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
    }
'''

if '.c8dc-section-h2' not in content:
    content = content.replace('</style>', heading_css + '\n</style>')

# Replace Available Slots label with H2 heading
content = re.sub(
    r'<div class="c8dc-booking-label">.*?</div>',
    '<h2 class="c8dc-section-h2">Available Booking Slots</h2>',
    content
)

# Replace What We Scope label with H2 heading
content = re.sub(
    r'<div class="c8dc-pillars-title">.*?</div>',
    '<h2 class="c8dc-section-h2">What We Scope On The Call</h2>',
    content
)

# Replace Verified Client Feedback with H2 heading
content = re.sub(
    r'<div class="c8dc-testi-badge">.*?VERIFIED CLIENT FEEDBACK\s*</div>',
    '''<h2 class="c8dc-testi-heading">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="#0047E1"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 14.5v-9l6 4.5-6 4.5z"/></svg>
            VERIFIED CLIENT FEEDBACK
          </h2>''',
    content,
    flags=re.DOTALL
)

# Enforce Michroma heading font for Enterprise Digital Architecture role
content = content.replace(
    'font-family:var(--font-body);font-size:0.78rem;',
    'font-family:var(--font-heading);font-size:0.72rem;font-weight:700;'
)

with open(file_path, "w", encoding="utf-8") as f:
    f.write(content)

print("Updated discovery-call.html headings to use Michroma font.")
