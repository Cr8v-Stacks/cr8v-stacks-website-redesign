import re

file_path = r"C:\Users\HP\Downloads\Mega Menu\Contact_us.html"
with open(file_path, "r", encoding="utf-8") as f:
    content = f.read()

# Add service picker CSS styling and HTML block above form embed in Contact_us.html
service_picker_css = '''
.c8ct-service-picker {
  margin-bottom: 2rem;
}
.c8ct-service-label {
  font-family: 'Space Mono', monospace;
  font-size: 9px;
  letter-spacing: 0.18em;
  text-transform: uppercase;
  color: var(--gray);
  margin-bottom: 0.85rem;
}
.c8ct-service-grid {
  display: flex;
  flex-wrap: wrap;
  gap: 0.6rem;
}
.c8ct-service-pill {
  display: inline-flex;
  align-items: center;
  gap: 0.4rem;
  font-family: 'DM Sans', sans-serif;
  font-size: 12.5px;
  font-weight: 500;
  color: var(--ink);
  background: rgba(8,8,8,0.05);
  border: 1px solid var(--line);
  border-radius: 4px;
  padding: 0.5rem 0.9rem;
  cursor: pointer;
  user-select: none;
  transition: all 0.25s ease;
}
.c8ct-service-pill:hover,
.c8ct-service-pill.is-selected {
  background: var(--blue);
  color: #FFFFFF;
  border-color: var(--blue);
}
.c8ct-service-pill input[type="checkbox"] {
  display: none;
}
'''

service_picker_html = '''
    <!-- Recreated Service Picker Area -->
    <div class="c8ct-service-picker">
      <div class="c8ct-service-label">Pick Service(s) Required</div>
      <div class="c8ct-service-grid" id="c8ct-service-grid">
        <label class="c8ct-service-pill"><input type="checkbox" name="services[]" value="Web Design"><span>Web Design &amp; Development</span></label>
        <label class="c8ct-service-pill"><input type="checkbox" name="services[]" value="Custom Dev"><span>Custom Development</span></label>
        <label class="c8ct-service-pill"><input type="checkbox" name="services[]" value="AI MVP"><span>AI MVP &amp; Product Builds</span></label>
        <label class="c8ct-service-pill"><input type="checkbox" name="services[]" value="Brand Strategy"><span>Brand Strategy</span></label>
        <label class="c8ct-service-pill"><input type="checkbox" name="services[]" value="Brand Identity"><span>Brand Identity</span></label>
        <label class="c8ct-service-pill"><input type="checkbox" name="services[]" value="SEO"><span>SEO &amp; Content</span></label>
        <label class="c8ct-service-pill"><input type="checkbox" name="services[]" value="E-Commerce"><span>E-Commerce (Shopify / WC)</span></label>
        <label class="c8ct-service-pill"><input type="checkbox" name="services[]" value="Digital Marketing"><span>Digital Marketing</span></label>
      </div>
    </div>
'''

service_picker_js = '''
<script>
(function(){
  var pills = document.querySelectorAll('.c8ct-service-pill');
  pills.forEach(function(pill){
    pill.addEventListener('click', function(){
      var cb = pill.querySelector('input[type="checkbox"]');
      if (cb) {
        cb.checked = !cb.checked;
        if (cb.checked) {
          pill.classList.add('is-selected');
        } else {
          pill.classList.remove('is-selected');
        }
      }
    });
  });
})();
</script>
'''

# Insert CSS into <style> block
content = content.replace('</style>', service_picker_css + '\n</style>')

# Insert Service Picker HTML above [contact-form-7 ...]
content = content.replace('<div class="c8ct-form-label">Your Turn</div>', service_picker_html + '\n    <div class="c8ct-form-label">Your Turn</div>')

# Insert JS before closing div
content = content.replace('</div>\n</div>', service_picker_js + '\n</div>\n</div>')

with open(file_path, "w", encoding="utf-8") as f:
    f.write(content)

print("Updated Contact_us.html with recreated service picker area!")
