import re

file_path = r"C:\Users\HP\Downloads\Mega Menu\Contact_us.html"
with open(file_path, "r", encoding="utf-8") as f:
    content = f.read()

# Build static HTML fallback with CF7 pill class wrappers
static_form_html = '''
    <div class="c8cf-field">
      <label class="c8cf-flabel">Pick Service(s) Required</label>
      <div class="c8cf-services wpcf7-checkbox">
        <span class="wpcf7-list-item"><input type="checkbox" name="services[]" value="Web Design"><span class="wpcf7-list-item-label">Web Design &amp; Development</span></span>
        <span class="wpcf7-list-item"><input type="checkbox" name="services[]" value="Custom Dev"><span class="wpcf7-list-item-label">Custom Development</span></span>
        <span class="wpcf7-list-item"><input type="checkbox" name="services[]" value="AI MVP"><span class="wpcf7-list-item-label">AI MVP &amp; Product Builds</span></span>
        <span class="wpcf7-list-item"><input type="checkbox" name="services[]" value="Brand Strategy"><span class="wpcf7-list-item-label">Brand Strategy</span></span>
        <span class="wpcf7-list-item"><input type="checkbox" name="services[]" value="Brand Identity"><span class="wpcf7-list-item-label">Brand Identity</span></span>
        <span class="wpcf7-list-item"><input type="checkbox" name="services[]" value="SEO"><span class="wpcf7-list-item-label">SEO &amp; Content Architecture</span></span>
        <span class="wpcf7-list-item"><input type="checkbox" name="services[]" value="E-Commerce"><span class="wpcf7-list-item-label">E-Commerce (Shopify / WC)</span></span>
        <span class="wpcf7-list-item"><input type="checkbox" name="services[]" value="Digital Marketing"><span class="wpcf7-list-item-label">Digital Marketing</span></span>
      </div>
    </div>

    <div class="c8cf-row">
      <div class="c8cf-field">
        <label class="c8cf-flabel">Your Name</label>
        <input type="text" name="your-name" class="c8cf-input wpcf7-form-control" placeholder="Alex Morgan">
      </div>
      <div class="c8cf-field">
        <label class="c8cf-flabel">Your Email</label>
        <input type="email" name="your-email" class="c8cf-input wpcf7-form-control" placeholder="alex@company.com">
      </div>
    </div>

    <div class="c8cf-field">
      <label class="c8cf-flabel">Project Details &amp; Objectives</label>
      <textarea name="your-message" class="c8cf-textarea wpcf7-form-control" placeholder="Tell us about your project goals, scope, and timeline..."></textarea>
    </div>

    <div class="c8cf-submit-row">
      <input type="submit" value="SEND MESSAGE →" class="c8cf-submit wpcf7-submit">
    </div>

    <!-- Contact Form 7 Shortcode -->
    <!-- [contact-form-7 id="70c8d19" title="Contact Page"] -->
'''

content = content.replace('[contact-form-7 id="70c8d19" title="Contact Page"]', static_form_html)

with open(file_path, "w", encoding="utf-8") as f:
    f.write(content)

print("Updated Contact_us.html with visible interactive service pills!")
