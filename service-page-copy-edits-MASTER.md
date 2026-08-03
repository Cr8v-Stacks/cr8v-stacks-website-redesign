# Direct Copy Edits — Old → New (Ready to Implement)

## PAGE: Main Service Page

### Edit 1 — "More Ways We Build" section is re-listing services already shown above as tabs
**The bug:** The top of the page correctly shows WordPress, Shopify, WooCommerce, Custom Dev, and AI MVP as tabs *under* "Web Design & Development" (labeled 01-05). Then, a few sections later, "More Ways We Build" lists **Custom Development, Brand Identity, Shopify, WordPress** — repeating 3 of the same 5 items as if they were new, separate offerings. This is the exact duplication problem you flagged.

**OLD:**
```
Full Catalog
More Ways We Build
Hover a service to see it. Standalone offerings you can bring in on their own, or bundle into a full build.

01 — Custom Development — Custom apps & integrations, built from a blank file
02 — Brand Identity — Logo systems & guidelines built to hold up everywhere
03 — Shopify — Custom storefronts engineered for checkout conversion
04 — WordPress — Lightweight, custom-coded builds your team can maintain
```

**NEW:**
```
Full Catalog
Beyond the Build
Once your site exists, these are the services that make sure it performs, gets found, and grows.

01 — Brand Identity — Logo systems, color, and typography built to hold up everywhere your brand shows up
02 — Brand Strategy — Positioning, messaging, and customer profiles that give every other service direction
03 — SEO & Content — Technical search work and content architecture that gets the site found
04 — Digital Marketing — Paid campaigns and funnels that turn that traffic into leads
```

**Why:** This removes the exact repeat (Custom Dev/Shopify/WordPress no longer appear twice) and replaces it with the 4 services that genuinely sit *outside* the "pick your build platform" decision — strategy, identity, findability, and acquisition. This is also where AI MVP can be dropped from this second list entirely, since it's already correctly shown as tab 05 above and doesn't need a second appearance.

---

### Edit 2 — Make the Brand Strategy → Digital Marketing connection explicit in the copy itself
**The bug:** Brand Strategy and Digital Marketing are shown as two separate, parallel items in "The Growth Layer" with no line connecting them — even though the positioning work from Brand Strategy is literally what a good ad campaign is built on.

**OLD:**
```
01 // Brand Strategy
Market Identity & Positioning
Competitor analysis, pricing scoping, and messaging frameworks that give the rest of the build direction before a single pixel is designed. We map out who you're actually competing against and how your brand should sound across every touchpoint.
Explore Brand Strategy →

02 // Digital Marketing
Lead Acquisition & Retainers
Multi-channel campaigns, social ads, and email autoresponders built around the customer journey. We handle conversion audits, target marketing, and test...
Explore Digital Marketing →
```

**NEW:**
```
01 // Brand Strategy
Market Identity & Positioning
Competitor analysis, pricing scoping, and messaging frameworks that give the rest of the build direction before a single pixel is designed. This is also the foundation every ad campaign and piece of content we run for you is built on — get this right first, and everything downstream gets easier and cheaper.
Explore Brand Strategy →

02 // Digital Marketing
Lead Acquisition & Retainers, Built on Your Positioning
Multi-channel campaigns, social ads, and email autoresponders built around the customer journey your Brand Strategy work defined. If you haven't done positioning work with us yet, we'll fold a lightweight version into campaign setup — but a full Brand Strategy engagement first means faster, cheaper testing.
Explore Digital Marketing →
```

**Why:** This makes the relationship you described ("digital marketing is a brand strategy") visible in the actual copy a visitor reads, instead of only existing as a link at the bottom of the page. It also creates a natural upsell: someone interested in Digital Marketing now sees a direct reason to also want Brand Strategy.

---

### Edit 3 — The hero subtext undersells the layered structure
**The bug:** The intro paragraph lists the 5 build platforms as if they're the whole offering, with no mention of the strategy/growth layers that come before and after the build.

**OLD:**
```
Cr8v Stacks designs and builds custom websites and digital products for B2B, SaaS, and ecommerce brands worldwide. From WordPress and Shopify to custom PHP/JS applications and AI-powered MVPs, we cover the whole technical stack — fast, clean, and engineered for search visibility from the first line of code.
```

**NEW:**
```
Cr8v Stacks handles every layer of your presence — brand positioning, design, the build itself, and the growth work after launch. Whichever platform your business runs on (WordPress, Shopify, WooCommerce, or a fully custom stack) the build is only one layer. We start with who you're competing against and end with the campaigns that bring people to the site we just built.
```

**Why:** This sets the reader's expectation correctly from the first sentence — Cr8v Stacks isn't "a web design shop with some add-ons," it's a full-layer studio. This directly supports the architecture (Strategy → Design → Build → Growth) and makes the page's later sections feel connected instead of like a list of unrelated services.

---

## PAGE: AI MVP Service Page

### Edit — Related Services currently points to Shopify/WooCommerce/Custom Dev, which doesn't match AI MVP's actual position in the architecture
**The bug:** AI MVP is really a specialized Custom Dev — visitors here are validating a product idea, not choosing between Shopify/WooCommerce.

**OLD (same 3 hardcoded links used across most pages):**
```
01 / Shopify — Shopify Storefronts
02 / WooCommerce — WooCommerce Custom Stores
03 / Custom Dev — Custom Development
```
**NEW:**
```
01 / Custom Dev — Custom Development — When your AI MVP validates the idea, this is where it becomes a fully custom production application.
02 / Web Design — Web Design & UX — If your AI product needs a polished front-end before launch.
03 / Digital Marketing — Lead Acquisition — Once the MVP is validated, this is how you get your first real users.
```

---

## PAGE: Brand Strategy Service Page

### Edit — Related Services should lead with Brand Identity and Digital Marketing, not build-stack platforms
**The bug:** Someone finishing Brand Strategy is early-stage and strategic — Shopify/WooCommerce are premature next steps for them.

**OLD:**
```
01 / Shopify — Shopify Storefronts
02 / WooCommerce — WooCommerce Custom Stores
03 / Custom Dev — Custom Development
```
**NEW:**
```
01 / Brand Identity Design — Turn this positioning into your visual identity next.
02 / Digital Marketing — This same positioning is what your ad campaigns should be built on.
03 / Web Design — Once your brand and identity are set, this is where it becomes a site.
```

---

## PAGE: SEO & Content Service Page

### Edit — Related Services should lead with Digital Marketing, not build-stack platforms
**The bug:** SEO & Content and Digital Marketing both live at the "growth" layer and should reinforce each other; a visitor here doesn't need a platform decision.

**OLD:**
```
01 / Web Design — Web Design
02 / Brand Strategy — Brand Strategy
03 / Custom Dev — Custom Development
```
**NEW:**
```
01 / Digital Marketing — Paid acquisition works better once your organic search foundation is solid — a natural next step.
02 / Brand Strategy — If your positioning isn't clear yet, that's usually the real reason content isn't converting.
03 / Web Design — If the site itself needs work before content can perform, start here.
```

---

## PAGE: Web Design Service Page

I checked every card, feature block, and FAQ on this page specifically for WordPress bleed-through and could not find it — the one WordPress mention is in a correctly-worded FAQ answer. **I don't want to rewrite something that isn't actually broken.** If you can screenshot or point to the specific card/section where it still reads like a WordPress page to you, I'll give you the exact old→new edit for that spot in the same format as above.

In the meantime, here's one concrete addition that reinforces the layered architecture on this specific page, since Web Design is the page where a visitor hasn't picked a build platform yet:

**ADD — a new short section right after the 4-stage process section, before the FAQ:**
```
Where This Fits In
Web Design is the layer before the build. Once the Figma design is approved, it gets handed to whichever platform fits your business:

→ WordPress — if your team needs to edit content without touching code
→ Shopify — if you're selling products and want hosted infrastructure
→ WooCommerce — if you want full ownership of your store's data and hosting
→ Custom Dev — if nothing off-the-shelf fits what you're building

Not sure which one? That's a normal question at this stage — tell us what you're building and we'll recommend the right platform as part of the design engagement.
```

**Why:** This does exactly what you asked for structurally — it makes the Web Design → build-stack relationship visible *on the page itself*, not buried in a related-services footer link. A visitor lands here, gets their design questions answered, and now sees clearly which of the 4 platforms comes next, with a one-line reason for each — instead of having to guess or scroll to the bottom.
