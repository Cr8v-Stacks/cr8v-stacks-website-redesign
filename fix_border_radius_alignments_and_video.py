import re

file_path = r"C:\Users\HP\Downloads\Mega Menu\homepage_hero_section.html"
with open(file_path, "r", encoding="utf-8") as f:
    content = f.read()

# 1. Update :root radius CSS variables to 4px
content = re.sub(r'--radius-sm:\s*\d+px;', '--radius-sm: 4px;', content)
content = re.sub(r'--radius-md:\s*\d+px;', '--radius-md: 4px;', content)
content = re.sub(r'--radius-card:\s*\d+px;', '--radius-card: 4px;', content)
content = re.sub(r'--radius-btn:\s*\d+px;', '--radius-btn: 4px;', content)
content = re.sub(r'--radius-pill:\s*\d+px;', '--radius-pill: 4px;', content)
content = re.sub(r'--radius-badge:\s*\d+px;', '--radius-badge: 4px;', content)
content = re.sub(r'--radius-lg:\s*\d+px;', '--radius-lg: 4px;', content)
content = re.sub(r'--c8-radius:\s*\d+px;', '--c8-radius: 4px;', content)

# 2. Replace hardcoded non-circle border-radii in CSS with 4px
def radius_replacer(match):
    val = match.group(1).strip()
    if val in ['50%', '0', '0px', '4px']:
        return match.group(0)
    # Convert any other pixel value (e.g. 50px, 100px, 28px, 20px, 16px, 12px, 10px, 8px, 6px, 5px) to 4px
    return 'border-radius: 4px;'

content = re.sub(r'border-radius:\s*([^;]+);', radius_replacer, content)

print("Sitewide border-radius capped at 4px across all elements, badges, pills, buttons, and cards.")

# 3. Align How We Work section header to LEFT on mobile and desktop
content = re.sub(
    r'\.hww-header\s*\{[^}]*\}',
    '.hww-header { text-align: left; max-width: 780px; margin: 0 0 3.5rem 0; }',
    content
)

# 4. Align Testimonials section header to LEFT
content = re.sub(
    r'\.tmn-header\s*\{[^}]*\}',
    '.tmn-header { text-align: left; max-width: 680px; margin: 0 0 3rem 0; }',
    content
)

# Fix mobile media queries for .hww-header and .tmn-header to force text-align: left !important
content = re.sub(
    r'\.hww-header,\s*\.wwa-header\s*\{\s*text-align:\s*center;\s*\}',
    '.hww-header, .wwa-header { text-align: left !important; }',
    content
)

print("How We Work and Testimonial headers configured to left-align on desktop and mobile.")

# 5. Disable Picture-In-Picture, hover controls, and pointer events on all video elements for 100% seamless experience & WebM priority
video_css = '''
    /* Seamless Video Rules: Disable pointer events & hover controls */
    video {
      pointer-events: none !important;
      user-select: none !important;
      -webkit-user-select: none !important;
    }
'''
if 'video {' not in content:
    content = content.replace('</style>', video_css + '</style>', 1)

# Add video attributes disablePictureInPicture disableRemotePlayback controlsList
def add_video_attrs(match):
    tag = match.group(0)
    if 'disablePictureInPicture' not in tag:
        tag = tag.replace('<video', '<video disablePictureInPicture disableRemotePlayback controlsList="nodownload no-user-select noplaybackrate"')
    return tag

content = re.sub(r'<video[^>]*>', add_video_attrs, content)

# Set WebM first in CTA video container for top performance & transparency
cta_video_new = '''<div class="cta-arc-container">
        <video autoplay loop muted playsinline disablePictureInPicture disableRemotePlayback controlsList="nodownload no-user-select noplaybackrate" class="cta-arc-video">
          <source src="assets/seven_badges_alpha.webm" type="video/webm">
          <source src="assets/download.mp4" type="video/mp4">
          <img src="assets/seven_badges_transparent.webp" alt="Cr8v Stacks Tech Stack Ecosystem" class="cta-arc-img">
        </video>
      </div>'''

content = re.sub(r'<div class="cta-arc-container">.*?</div>', cta_video_new, content, flags=re.DOTALL)

print("Configured videos with pointer-events:none, disablePictureInPicture, and WebM performance priority.")

with open(file_path, "w", encoding="utf-8") as f:
    f.write(content)

print("Saved all fixes to homepage_hero_section.html successfully!")
