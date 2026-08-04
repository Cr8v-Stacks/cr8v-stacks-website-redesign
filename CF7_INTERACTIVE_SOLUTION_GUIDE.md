# Contact Form 7 Proprietary Submission Animation & Feedback Guide

## Overview
Default Contact Form 7 (CF7) forms render plain, un-styled text boxes (`"Thank you for your message. It has been sent."`) below the form when submitted. 

We have engineered a **custom interactive JavaScript event handler** that overrides default CF7 notices with a proprietary, high-end agency ticket stub confirmation card and interactive submit button states (`SENDING BRIEF...` -> `BRIEF RECEIVED ✓` or `PLEASE FILL REQUIRED FIELDS ✕`).

---

## How It Works

### 1. Interactive Submit Button States
When the user clicks `Send Message`:
- **`wpcf7beforesubmit` Event**: The submit button (`.c8cf-submit`) morphs into an active loader state:
  - Text transforms to: **`SENDING BRIEF...`**
  - Displays a smooth spinning loader indicator.
- **`wpcf7mailsent` Event (Success)**:
  - Text transforms to: **`BRIEF RECEIVED ✓`**
  - Submit button turns solid Royal Blue (`#0047E1`).
  - Hides standard CF7 output box and animates a paper ticket stub card:
    ```html
    <div class="c8cf-success-card">
      <span class="c8cf-success-tag">↳ ENQUIRY CONFIRMED</span>
      <h3>TICKET #CR8V-9402 RECEIVED</h3>
      <p>Thank you for submitting your project brief. Our team has received your information and will review your scope within 24 hours.</p>
    </div>
    ```
- **`wpcf7invalid` Event (Validation Error)**:
  - Text flashes: **`PLEASE FILL REQUIRED FIELDS ✕`**
  - Resets cleanly back to `Send Message` after 3.5 seconds without page jumping or layout shift.

---

## Implementation in WordPress Theme (`functions.php` or `footer.php`)

Add the following JavaScript to your WordPress theme's `footer.php` or main script file (`main.js`):

```javascript
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
```

---

## Multiple Services Handling in Email Notifications
Contact Form 7 automatically formats multiple selected checkboxes (`[Services]`) into comma-separated lists (e.g. `Website Design & Development, UI/UX Design, SEO & Content Strategy`).

In your **CF7 Mail Tab** template (provided in `CF7_MAIL_HTML.txt`), `[Services]` renders inside a styled paper pill:
```html
<span style="background:#080808;color:#FFFFFF;padding:6px 12px;font-size:12px;border-radius:4px;display:inline-block;font-family:'Space Mono',monospace;">[Services]</span>
```
If a user selects multiple options, all selected options will appear cleanly inside the notification email!
