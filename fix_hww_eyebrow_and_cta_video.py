import re

file_path = r"C:\Users\HP\Downloads\Mega Menu\homepage_hero_section.html"
with open(file_path, "r", encoding="utf-8") as f:
    content = f.read()

# 1. Update .hww-eyebrow CSS to justify-content: flex-start (or start)
hww_eyebrow_old = r'\.hww-eyebrow\s*\{[^}]*\}'
hww_eyebrow_new = '''.hww-eyebrow {
    font-family: var(--font-mono);
    font-size: 0.72rem;
    font-weight: 700;
    letter-spacing: 0.16em;
    text-transform: uppercase;
    color: var(--c8-blue);
    margin-bottom: 1.25rem;
    display: flex;
    align-items: center;
    justify-content: flex-start;
    gap: 0.35rem;
}'''

content = re.sub(hww_eyebrow_old, hww_eyebrow_new, content)
print("Updated .hww-eyebrow to justify-content: flex-start.")

# 2. Update CTA video container to strictly use assets/download.mp4 as primary video source
# with disablePictureInPicture, disableRemotePlayback, controlsList, and pointer-events: none
cta_video_container = '''<div class="cta-arc-container">
        <video autoplay loop muted playsinline disablePictureInPicture disableRemotePlayback controlsList="nodownload no-user-select noplaybackrate" class="cta-arc-video">
          <source src="assets/download.mp4" type="video/mp4">
          <source src="assets/seven_circular_badges.webm" type="video/webm">
        </video>
      </div>'''

content = re.sub(r'<div class="cta-arc-container">.*?</div>', cta_video_container, content, flags=re.DOTALL)
print("Set assets/download.mp4 as primary CTA video source with disablePictureInPicture.")

# 3. Update Mascot video container in Dev Playground to use WebM & compressed MP4 with video protection
mascot_video_container = '''<div class="dp-mascot-wrap">
          <video autoplay loop muted playsinline disablePictureInPicture disableRemotePlayback controlsList="nodownload no-user-select noplaybackrate">
            <source src="assets/cartoon_fox_winks.webm" type="video/webm">
            <source src="assets/Cartoon_fox_winks_web.mp4" type="video/mp4">
            <source src="assets/download_mascot.mp4" type="video/mp4">
          </video>
        </div>'''

content = re.sub(r'<div class="dp-mascot-wrap">.*?</div>', mascot_video_container, content, flags=re.DOTALL)
print("Updated mascot video with WebM + compressed MP4 and video protection attributes.")

# 4. Ensure global CSS rules disable pointer events on all video elements
if 'video {' not in content:
    content = content.replace('</style>', '\n    video { pointer-events: none !important; user-select: none !important; -webkit-user-select: none !important; }\n</style>', 1)
else:
    content = re.sub(r'video\s*\{[^}]*\}', 'video { pointer-events: none !important; user-select: none !important; -webkit-user-select: none !important; }', content)

with open(file_path, "w", encoding="utf-8") as f:
    f.write(content)

print("Saved all updates to homepage_hero_section.html successfully!")
