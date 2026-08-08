import os
import re

case_studies_dir = r"c:\Users\HP\Downloads\Mega Menu\Case Studies"

case_studies_data = {
    "the-duch-apartments.html": {
        "title": "The Duch Apartments",
        "category": "WEB DESIGN & SEO",
        "related": [
            {
                "url": "kiri-city-stays.html",
                "tag": "01 / Web Design & Booking",
                "title": "Kiri City Stays",
                "desc": "Direct booking platform & luxury stay catalog engineered for seamless reservations and local SEO visibility.",
                "image": "https://images.unsplash.com/photo-1566073771259-6a8506099945?q=80&w=800&auto=format&fit=crop"
            },
            {
                "url": "bridgepoint-consulting.html",
                "tag": "02 / Custom Development",
                "title": "Bridgepoint Advisory",
                "desc": "Bespoke compliance analysis web application built with zero template bloat and custom SQL queries.",
                "image": "https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=800&auto=format&fit=crop"
            },
            {
                "url": "mkenny-properties.html",
                "tag": "03 / WordPress Custom",
                "title": "Mkenny Properties",
                "desc": "Full real estate platform featuring custom Elementor widgets, listing archives, and property detail templates.",
                "image": "https://images.unsplash.com/photo-1560518883-ce09059eeffa?q=80&w=800&auto=format&fit=crop"
            }
        ]
    },
    "bridgepoint-consulting.html": {
        "title": "Bridgepoint Advisory",
        "category": "CUSTOM DEVELOPMENT",
        "related": [
            {
                "url": "wp-publishion-ai.html",
                "tag": "01 / AI MVP Development",
                "title": "WP Publishion AI",
                "desc": "Autonomous AI content engine powered by Python FastAPI, Claude API, OpenAI, and vector database retrieval.",
                "image": "https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?q=80&w=800&auto=format&fit=crop"
            },
            {
                "url": "the-duch-apartments.html",
                "tag": "02 / Web Design & SEO",
                "title": "The Duch Apartments",
                "desc": "Brand identity and direct booking platform engineered with SEO architecture built in from day one.",
                "image": "https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?q=80&w=800&auto=format&fit=crop"
            },
            {
                "url": "bridgepoints.html",
                "tag": "03 / Brand Identity Design",
                "title": "BridgePoints Brand Identity",
                "desc": "High-trust corporate visual identity system, vector logo marks, typography scales, and Figma guidelines.",
                "image": "https://images.unsplash.com/photo-1600132806370-bf17e65e942f?q=80&w=800&auto=format&fit=crop"
            }
        ]
    },
    "bridgepoints.html": {
        "title": "BridgePoints Brand Identity",
        "category": "BRAND IDENTITY DESIGN",
        "related": [
            {
                "url": "stride-plus-media.html",
                "tag": "01 / Digital Marketing",
                "title": "Stride Plus Media",
                "desc": "Brand strategy positioning and multi-channel paid acquisition funnels for Stride Radio.",
                "image": "https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?q=80&w=800&auto=format&fit=crop"
            },
            {
                "url": "the-duch-apartments.html",
                "tag": "02 / Web Design & SEO",
                "title": "The Duch Apartments",
                "desc": "Brand identity and direct booking platform engineered with SEO architecture built in from day one.",
                "image": "https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?q=80&w=800&auto=format&fit=crop"
            },
            {
                "url": "victorias-lane.html",
                "tag": "03 / Shopify Storefront",
                "title": "Victoria's Lane",
                "desc": "Luxury handbag e-commerce storefront hand-coded in custom Liquid with AJAX cart drawer.",
                "image": "https://images.unsplash.com/photo-1548036328-c9fa89d128fa?q=80&w=800&auto=format&fit=crop"
            }
        ]
    },
    "wp-publishion-ai.html": {
        "title": "WP Publishion AI",
        "category": "AI MVP DEVELOPMENT",
        "related": [
            {
                "url": "bridgepoint-consulting.html",
                "tag": "01 / Custom Development",
                "title": "Bridgepoint Advisory",
                "desc": "Bespoke compliance analysis web application built with zero template bloat and custom SQL queries.",
                "image": "https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=800&auto=format&fit=crop"
            },
            {
                "url": "blvck-hair-ng.html",
                "tag": "02 / SEO & Content Strategy",
                "title": "blvck Hair NG",
                "desc": "Organic revenue growth powered by semantic keyword mapping and entity search architecture.",
                "image": "https://images.unsplash.com/photo-1522337360788-8b13dee7a37e?q=80&w=800&auto=format&fit=crop"
            },
            {
                "url": "stride-plus-media.html",
                "tag": "03 / Digital Marketing",
                "title": "Stride Plus Media",
                "desc": "Brand strategy positioning and multi-channel paid acquisition funnels for Stride Radio.",
                "image": "https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?q=80&w=800&auto=format&fit=crop"
            }
        ]
    },
    "stride-plus-media.html": {
        "title": "Stride Plus Media",
        "category": "DIGITAL MARKETING & STRATEGY",
        "related": [
            {
                "url": "sweetermen-ng.html",
                "tag": "01 / WooCommerce & Paid Ads",
                "title": "SweeterMen NG",
                "desc": "Full-stack luxury watch e-commerce store with custom checkout hooks and paid Meta/Google ad campaigns.",
                "image": "https://images.unsplash.com/photo-1523275335684-37898b6baf30?q=80&w=800&auto=format&fit=crop"
            },
            {
                "url": "bridgepoints.html",
                "tag": "02 / Brand Identity Design",
                "title": "BridgePoints Brand Identity",
                "desc": "High-trust corporate visual identity system, vector logo marks, typography scales, and Figma guidelines.",
                "image": "https://images.unsplash.com/photo-1600132806370-bf17e65e942f?q=80&w=800&auto=format&fit=crop"
            },
            {
                "url": "blvck-hair-ng.html",
                "tag": "03 / SEO & Content Strategy",
                "title": "blvck Hair NG",
                "desc": "Organic revenue growth powered by semantic keyword mapping and entity search architecture.",
                "image": "https://images.unsplash.com/photo-1522337360788-8b13dee7a37e?q=80&w=800&auto=format&fit=crop"
            }
        ]
    },
    "blvck-hair-ng.html": {
        "title": "blvck Hair NG",
        "category": "SEO & CONTENT STRATEGY",
        "related": [
            {
                "url": "the-duch-apartments.html",
                "tag": "01 / Web Design & SEO",
                "title": "The Duch Apartments",
                "desc": "Brand identity and direct booking platform engineered with SEO architecture built in from day one.",
                "image": "https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?q=80&w=800&auto=format&fit=crop"
            },
            {
                "url": "stride-plus-media.html",
                "tag": "02 / Digital Marketing",
                "title": "Stride Plus Media",
                "desc": "Brand strategy positioning and multi-channel paid acquisition funnels for Stride Radio.",
                "image": "https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?q=80&w=800&auto=format&fit=crop"
            },
            {
                "url": "sweetermen-ng.html",
                "tag": "03 / WooCommerce & Paid Ads",
                "title": "SweeterMen NG",
                "desc": "Full-stack luxury watch e-commerce store with custom checkout hooks and paid Meta/Google ad campaigns.",
                "image": "https://images.unsplash.com/photo-1523275335684-37898b6baf30?q=80&w=800&auto=format&fit=crop"
            }
        ]
    },
    "sweetermen-ng.html": {
        "title": "SweeterMen NG",
        "category": "WOOCOMMERCE & PAID ADS",
        "related": [
            {
                "url": "victorias-lane.html",
                "tag": "01 / Shopify Storefront",
                "title": "Victoria's Lane",
                "desc": "Luxury handbag e-commerce storefront hand-coded in custom Liquid with AJAX cart drawer.",
                "image": "https://images.unsplash.com/photo-1548036328-c9fa89d128fa?q=80&w=800&auto=format&fit=crop"
            },
            {
                "url": "stride-plus-media.html",
                "tag": "02 / Digital Marketing",
                "title": "Stride Plus Media",
                "desc": "Brand strategy positioning and multi-channel paid acquisition funnels for Stride Radio.",
                "image": "https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?q=80&w=800&auto=format&fit=crop"
            },
            {
                "url": "blvck-hair-ng.html",
                "tag": "03 / SEO & Content Strategy",
                "title": "blvck Hair NG",
                "desc": "Organic revenue growth powered by semantic keyword mapping and entity search architecture.",
                "image": "https://images.unsplash.com/photo-1522337360788-8b13dee7a37e?q=80&w=800&auto=format&fit=crop"
            }
        ]
    },
    "victorias-lane.html": {
        "title": "Victoria's Lane",
        "category": "SHOPIFY STOREFRONT & CRO",
        "related": [
            {
                "url": "sweetermen-ng.html",
                "tag": "01 / WooCommerce & Paid Ads",
                "title": "SweeterMen NG",
                "desc": "Full-stack luxury watch e-commerce store with custom checkout hooks and paid Meta/Google ad campaigns.",
                "image": "https://images.unsplash.com/photo-1523275335684-37898b6baf30?q=80&w=800&auto=format&fit=crop"
            },
            {
                "url": "the-duch-apartments.html",
                "tag": "02 / Web Design & SEO",
                "title": "The Duch Apartments",
                "desc": "Brand identity and direct booking platform engineered with SEO architecture built in from day one.",
                "image": "https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?q=80&w=800&auto=format&fit=crop"
            },
            {
                "url": "bridgepoints.html",
                "tag": "03 / Brand Identity Design",
                "title": "BridgePoints Brand Identity",
                "desc": "High-trust corporate visual identity system, vector logo marks, typography scales, and Figma guidelines.",
                "image": "https://images.unsplash.com/photo-1600132806370-bf17e65e942f?q=80&w=800&auto=format&fit=crop"
            }
        ]
    },
    "mkenny-properties.html": {
        "title": "Mkenny Properties",
        "category": "WORDPRESS CUSTOM WIDGETS",
        "related": [
            {
                "url": "kiri-city-stays.html",
                "tag": "01 / Web Design & Booking",
                "title": "Kiri City Stays",
                "desc": "Direct booking platform & luxury stay catalog engineered for seamless reservations and local SEO visibility.",
                "image": "https://images.unsplash.com/photo-1566073771259-6a8506099945?q=80&w=800&auto=format&fit=crop"
            },
            {
                "url": "the-duch-apartments.html",
                "tag": "02 / Web Design & SEO",
                "title": "The Duch Apartments",
                "desc": "Brand identity and direct booking platform engineered with SEO architecture built in from day one.",
                "image": "https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?q=80&w=800&auto=format&fit=crop"
            },
            {
                "url": "bridgepoint-consulting.html",
                "tag": "03 / Custom Development",
                "title": "Bridgepoint Advisory",
                "desc": "Bespoke compliance analysis web application built with zero template bloat and custom SQL queries.",
                "image": "https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=800&auto=format&fit=crop"
            }
        ]
    },
    "kiri-city-stays.html": {
        "title": "Kiri City Stays",
        "category": "WEB DESIGN & BOOKING",
        "related": [
            {
                "url": "the-duch-apartments.html",
                "tag": "01 / Web Design & SEO",
                "title": "The Duch Apartments",
                "desc": "Brand identity and direct booking platform engineered with SEO architecture built in from day one.",
                "image": "https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?q=80&w=800&auto=format&fit=crop"
            },
            {
                "url": "mkenny-properties.html",
                "tag": "02 / WordPress Custom",
                "title": "Mkenny Properties",
                "desc": "Full real estate platform featuring custom Elementor widgets, listing archives, and property detail templates.",
                "image": "https://images.unsplash.com/photo-1560518883-ce09059eeffa?q=80&w=800&auto=format&fit=crop"
            },
            {
                "url": "victorias-lane.html",
                "tag": "03 / Shopify Storefront",
                "title": "Victoria's Lane",
                "desc": "Luxury handbag e-commerce storefront hand-coded in custom Liquid with AJAX cart drawer.",
                "image": "https://images.unsplash.com/photo-1548036328-c9fa89d128fa?q=80&w=800&auto=format&fit=crop"
            }
        ]
    }
}

homepage_cta_html = """
    <!-- ══════════════════════════════════════════
         SECTION 7: HOMEPAGE CTA SECTION
         ══════════════════════════════════════════ -->
    <style>
      .cta-section {
        background: #FFFFFF !important;
        padding: clamp(5rem, 9vw, 8rem) 0 !important;
        position: relative !important;
        overflow: hidden !important;
        border-top: 1px solid rgba(8,8,8,0.08) !important;
      }
      .cta-inner {
        max-width: 860px !important;
        margin: 0 auto !important;
        padding: 0 clamp(1.5rem, 5vw, 4rem) !important;
        text-align: center !important;
        position: relative !important;
        z-index: 2 !important;
      }
      .cta-arc-container {
        width: 100% !important;
        max-width: 780px !important;
        margin: 0 auto 0 !important;
        display: flex !important;
        justify-content: center !important;
      }
      .cta-arc-video {
        width: 100% !important;
        max-width: 780px !important;
        height: auto !important;
        display: block !important;
        object-fit: contain !important;
        pointer-events: none !important;
        user-select: none !important;
      }
      .cta-content-group {
        margin-top: -6.5rem !important;
        position: relative !important;
        z-index: 5 !important;
      }
      @media (max-width: 768px) {
        .cta-content-group {
          margin-top: -3.5rem !important;
        }
      }
      .cta-badge {
        display: inline-flex !important;
        align-items: center !important;
        gap: 0.4rem !important;
        font-family: 'Space Mono', monospace !important;
        font-size: 0.68rem !important;
        letter-spacing: 0.12em !important;
        text-transform: uppercase !important;
        color: #0047E1 !important;
        background: transparent !important;
        border: none !important;
        padding: 0.4rem 1.1rem !important;
        border-radius: 4px !important;
        margin-bottom: 1.5rem !important;
      }
      .cta-h2 {
        font-family: 'Michroma', sans-serif !important;
        font-size: clamp(1.9rem, 4.2vw, 3rem) !important;
        font-weight: 400 !important;
        color: #080808 !important;
        letter-spacing: 0.01em !important;
        line-height: 1.25 !important;
        max-width: 780px !important;
        margin: 0 auto 1.4rem !important;
      }
      .cta-h2 em {
        font-style: normal !important;
        color: #0047E1 !important;
      }
      .cta-desc {
        font-family: 'DM Sans', sans-serif !important;
        font-size: 0.95rem !important;
        font-weight: 300 !important;
        color: #555555 !important;
        line-height: 1.7 !important;
        max-width: 620px !important;
        margin: 0 auto 2.5rem !important;
      }
      .cta-btn-pill {
        display: inline-flex !important;
        align-items: center !important;
        justify-content: center !important;
        gap: 0.8rem !important;
        background: #0047E1 !important;
        color: #FFFFFF !important;
        font-family: 'DM Sans', sans-serif !important;
        font-size: 0.9rem !important;
        font-weight: 600 !important;
        padding: 1rem 2.2rem !important;
        border-radius: 4px !important;
        text-decoration: none !important;
        box-shadow: 0 10px 28px rgba(0, 71, 225, 0.28) !important;
        transition: all 0.25s ease !important;
      }
      .cta-btn-pill:hover {
        background: #0037B5 !important;
        transform: translateY(-2px) !important;
        box-shadow: 0 14px 35px rgba(0, 71, 225, 0.38) !important;
      }
      .cta-btn-arrow {
        background: rgba(255,255,255,0.2) !important;
        width: 26px !important;
        height: 26px !important;
        border-radius: 50% !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        font-size: 0.85rem !important;
        transition: transform 0.25s ease !important;
      }
      .cta-btn-pill:hover .cta-btn-arrow {
        transform: translateX(4px) !important;
      }
    </style>

    <section class="cta-section" id="contact">
      <div class="cta-inner">
        <div class="cta-arc-container">
          <video autoplay loop muted playsinline disablePictureInPicture disableRemotePlayback controlsList="nodownload no-user-select noplaybackrate" class="cta-arc-video">
            <source src="../assets/download.mp4" type="video/mp4">
            <source src="../assets/seven_circular_badges.webm" type="video/webm">
          </video>
        </div>

        <div class="cta-content-group">
          <div class="cta-badge"><span style="color:#0047E1;font-weight:800;margin-right:4px;">//</span> START A PROJECT</div>
          
          <h2 class="cta-h2">
            Ready to launch your <em>custom digital platform?</em>
          </h2>

          <p class="cta-desc">
            Cr8v Stacks requires no guesswork. Transparent fixed scoping, dedicated engineering, and custom digital systems tailored to your exact business goals.
          </p>

          <div>
            <a href="https://cr8vstacks.com/contact/" class="cta-btn-pill" target="_blank" rel="noopener">
              Book a Scoping Call <span class="cta-btn-arrow">&rarr;</span>
            </a>
          </div>
        </div>
      </div>
    </section>
"""

def generate_related_section_html(filename):
    data = case_studies_data[filename]
    cards_html = ""
    for card in data["related"]:
        cards_html += f"""
        <a href="{card['url']}" class="c8isv-related-card">
          <div class="c8isv-related-card-icon">
            <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="#0047E1" stroke-width="2"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
          </div>
          <span class="c8isv-related-card-platform">{card['tag']}</span>
          <h3 class="c8isv-related-card-title">{card['title']}</h3>
          <p class="c8isv-related-card-desc">{card['desc']}</p>
          <span class="c8isv-related-card-link">Explore Case Study &rarr;</span>
        </a>"""

    section_html = f"""
    <!-- ══════════════════════════════════════════
         SECTION 6: STANDALONE RELATED PROJECTS DECK (Service Page UI)
         ══════════════════════════════════════════ -->
    <div class="c8isv-related-outer" style="background: #080808 !important; padding: 6rem 0 !important; color: #FFFFFF !important;">
      <div class="c8isv-wrap" style="max-width: 1200px; margin: 0 auto; padding: 0 2rem;">
        <div class="c8isv-label is-muted" style="color: #8A8A8A !important;">More Case Studies</div>
        <h2 class="c8isv-section-title" style="color: #FFFFFF !important; margin-bottom: 1rem;">Explore Related Projects</h2>
        <p class="c8isv-lead" style="color: #A3A3A3 !important; max-width: 750px; margin-bottom: 3rem;">Discover how we engineered custom platforms, brand identities, and growth funnels for other industry leaders.</p>
        <div class="c8isv-related-grid" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 2rem;">
          {cards_html}
        </div>
      </div>
    </div>
    """
    return section_html

def process_file(filename):
    filepath = os.path.join(case_studies_dir, filename)
    if not os.path.exists(filepath):
        print(f"File not found: {filepath}")
        return

    with open(filepath, 'r', encoding='utf-8') as f:
        content = f.read()

    # 1. Update border-radius in CSS to 4px
    content = re.sub(r'border-radius:\s*(?:24px|20px|16px|12px|10px|8px|6px)', 'border-radius: 4px', content)

    # 2. Strip ALL duplicate/scattered nav-bar HTML blocks and old cta-card HTML blocks
    content = re.sub(r'\s*<!-- Next / Prev Case Study Navigation -->\s*<div class="c8cs-nav-bar">.*?</div>', '', content, flags=re.DOTALL)
    content = re.sub(r'\s*<div class="c8cs-nav-bar">.*?</div>', '', content, flags=re.DOTALL)
    content = re.sub(r'\s*<section class="c8cs-footer-cta">.*?</section>', '', content, flags=re.DOTALL)
    content = re.sub(r'\s*<!-- ══════════════════════════════════════════\s*SECTION 6: STANDALONE RELATED PROJECTS DECK.*?</div>\s*</div>', '', content, flags=re.DOTALL)
    content = re.sub(r'\s*<!-- ══════════════════════════════════════════\s*SECTION 7: HOMEPAGE CTA SECTION.*?</div>\s*</section>', '', content, flags=re.DOTALL)

    # 3. Add Back Link at top of hero if not present
    if 'c8cs-back-btn' not in content:
        hero_insert = '<a href="../portfolio/" class="c8cs-back-btn">&larr; Back to Portfolio</a>\n'
        content = re.sub(r'(<section class="c8cs-hero">.*?<div class="c8cs-wrap">)', r'\1\n        ' + hero_insert, content, count=1, flags=re.DOTALL)

    # 4. Generate related section HTML
    related_html = generate_related_section_html(filename)

    # 5. Combine and insert related_html + homepage_cta_html before </div>\n\n  <!-- Hero background tracker script -->
    if '<!-- Hero background tracker script -->' in content:
        content = content.replace('<!-- Hero background tracker script -->', related_html + '\n\n' + homepage_cta_html + '\n\n  <!-- Hero background tracker script -->')
    elif '</div>\n\n  <script>' in content:
        content = content.replace('</div>\n\n  <script>', related_html + '\n\n' + homepage_cta_html + '\n\n  </div>\n\n  <script>')
    else:
        # Fallback to replacing before </body>
        content = content.replace('</body>', related_html + '\n\n' + homepage_cta_html + '\n\n</body>')

    with open(filepath, 'w', encoding='utf-8') as f:
        f.write(content)

    print(f"Re-architected {filename} successfully.")

for filename in case_studies_data:
    process_file(filename)

print("All 10 single case study files successfully updated!")
