import re

html_path = r"C:\Users\HP\Downloads\Mega Menu\Contact_us.html"

with open(html_path, "r", encoding="utf-8") as f:
    content = f.read()

# Custom Script and CSS for CF7 Event Animation
cf7_animation_code = '''
<style>
/* Custom CF7 Success Confirmation Card */
.c8cf-success-card {
  background: #FAFAF7;
  border: 1px solid rgba(8,8,8,0.15);
  border-left: 4px solid #0047E1;
  border-radius: 4px;
  padding: 2rem;
  margin-top: 1.5rem;
  animation: c8cfFadeUp 0.4s ease forwards;
}
.c8cf-success-tag {
  font-family: 'Space Mono', monospace;
  font-size: 9px;
  letter-spacing: 0.22em;
  text-transform: uppercase;
  color: #0047E1;
  font-weight: 700;
  margin-bottom: 0.75rem;
  display: block;
}
.c8cf-success-card h3 {
  font-family: 'Michroma', sans-serif;
  font-size: 1.1rem;
  color: #080808;
  margin-bottom: 0.5rem;
  text-transform: uppercase;
}
.c8cf-success-card p {
  font-family: 'DM Sans', sans-serif;
  font-size: 0.92rem;
  color: #4A4A4A;
  line-height: 1.6;
  margin: 0;
}
@keyframes c8cfFadeUp {
  from { opacity: 0; transform: translateY(12px); }
  to { opacity: 1; transform: translateY(0); }
}

/* Submit Button Active Animation State */
.c8cf-submit.is-sending {
  opacity: 0.8;
  pointer-events: none;
  position: relative;
}
.c8cf-submit.is-sending::after {
  content: '';
  width: 14px;
  height: 14px;
  border: 2px solid #FFFFFF;
  border-top-color: transparent;
  border-radius: 50%;
  display: inline-block;
  margin-left: 8px;
  animation: c8cfSpin 0.7s linear infinite;
  vertical-align: middle;
}
@keyframes c8cfSpin {
  to { transform: rotate(360deg); }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
  // Listen to Contact Form 7 Submit Events
  document.addEventListener('wpcf7beforesubmit', function(e) {
    const btn = e.target.querySelector('.c8cf-submit');
    if (btn) {
      btn.classList.add('is-sending');
      btn.value = 'SENDING BRIEF...';
    }
  });

  document.addEventListener('wpcf7mailsent', function(e) {
    const form = e.target;
    const btn = form.querySelector('.c8cf-submit');
    if (btn) {
      btn.classList.remove('is-sending');
      btn.value = 'BRIEF RECEIVED ✓';
      btn.style.background = '#0047E1';
    }

    // Hide standard response output box and append our ticket stub confirmation card
    const responseBox = form.querySelector('.wpcf7-response-output');
    if (responseBox) responseBox.style.display = 'none';

    let successCard = form.querySelector('.c8cf-success-card');
    if (!successCard) {
      successCard = document.createElement('div');
      successCard.className = 'c8cf-success-card';
      successCard.innerHTML = `
        <span class="c8cf-success-tag">↳ ENQUIRY CONFIRMED</span>
        <h3>TICKET #CR8V-9402 RECEIVED</h3>
        <p>Thank you for submitting your project brief. Our team has received your information and will review your scope within 24 hours.</p>
      `;
      form.appendChild(successCard);
    }
  });

  document.addEventListener('wpcf7invalid', function(e) {
    const btn = e.target.querySelector('.c8cf-submit');
    if (btn) {
      btn.classList.remove('is-sending');
      btn.value = 'PLEASE FILL REQUIRED FIELDS ✕';
      setTimeout(() => { btn.value = 'Send Message'; }, 3500);
    }
  });
});
</script>
'''

if '</script>' not in content:
    content += '\n' + cf7_animation_code

with open(html_path, "w", encoding="utf-8") as f:
    f.write(content)

print("Added CF7 interactive submit button animation and custom ticket stub confirmation card to Contact_us.html.")
