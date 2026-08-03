# Person Schema Implementation Guide — Mallami Adekunle

## First, addressing what you just shared
The Fiezie92 AI Overview result confirms exactly the disambiguation problem you suspected — Google has a moderately strong entity signal for "Fiezie92" as a Nigerian author/poet/tech blogger, built from old sources (Steemit, Moonlight Consulting). That's not a blank slate you're building from — it's an existing, competing identity you need to fold into your current one, not erase. Schema won't delete those old pages, but done correctly, it tells Google "Fiezie92 and Mallami Adekunle are the same entity" — which redirects that existing authority toward your current identity instead of leaving it as a separate, outdated thing.

Your two name variants (Mallami Adekunle / Adekunle Mallami) need the same treatment — both go in as `alternateName`, not just one.

---

## The Code Itself (Person Schema, JSON-LD)

```json
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Person",
  "@id": "https://cr8vstacks.com/about-us/#mallami-adekunle",
  "name": "Mallami Adekunle",
  "alternateName": ["Adekunle Mallami", "Fiezie92"],
  "url": "https://cr8vstacks.com/about-us/",
  "image": "https://cr8vstacks.com/wp-content/uploads/[your-photo].jpg",
  "jobTitle": "Founder",
  "description": "Founder of Cr8v Stacks, leading strategy, design, and development. Published author and poet, and creator of educational content on design and development.",
  "worksFor": {
    "@type": "Organization",
    "@id": "https://cr8vstacks.com/#organization",
    "name": "Cr8v Stacks"
  },
  "sameAs": [
    "https://www.linkedin.com/in/[your-linkedin-handle]",
    "https://www.youtube.com/@cr8vstacks",
    "https://www.amazon.com/author/[your-amazon-author-slug]",
    "https://www.instagram.com/cr8v_stacks",
    "https://steemit.com/@fiezie92"
  ],
  "knowsAbout": ["Web Design", "SEO", "Brand Strategy", "AI-Assisted Development", "Poetry", "Content Writing"]
}
</script>
```

**Notes on filling this in:**
- Replace every `[bracketed]` placeholder with your real URLs.
- Include the Steemit link deliberately, even though it's old — this is what tells Google "this old profile and this current one are the same person," which is the actual fix for your disambiguation problem. Leaving it out would keep the two identities separate.
- If you have a personal LinkedIn separate from the Cr8v Stacks company page, use that — Person schema should link to your personal profile, not the company one.

---

## Companion: Organization Schema (Do This Too, Not Instead)
This connects Cr8v Stacks back to you, which strengthens the relationship in both directions.

```json
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "@id": "https://cr8vstacks.com/#organization",
  "name": "Cr8v Stacks",
  "url": "https://cr8vstacks.com",
  "logo": "https://cr8vstacks.com/wp-content/uploads/2022/08/1.png",
  "founder": {
    "@id": "https://cr8vstacks.com/about-us/#mallami-adekunle"
  },
  "sameAs": [
    "https://www.facebook.com/cr8vstacks",
    "https://www.instagram.com/cr8v_stacks",
    "https://www.linkedin.com/company/cr8v-stacks/",
    "https://www.youtube.com/@cr8vstacks"
  ]
}
</script>
```

---

## Where To Actually Put This Code
Since your site runs on WordPress/Elementor, you have a few options, easiest first:

1. **An SEO plugin (Yoast SEO or RankMath)** — both let you add custom schema/Person data through their settings without editing theme files directly. If either is already installed, this is the safest route.
2. **Elementor's HTML widget** — drop the `<script>` block directly into an HTML widget placed anywhere on the About Us page (it doesn't need to be visible — schema works regardless of where it sits on the page, as long as it's in the page's HTML).
3. **Your theme's header/footer via a code snippets plugin** (e.g., WPCode) — if you want this to load sitewide rather than just on one page, this is the cleaner option, though for Person schema specifically, having it live once on the About page is standard and sufficient.

**After adding it:** test the code using Google's Rich Results Test (search "Google Rich Results Test," paste your URL) to confirm it's read correctly before considering this done.

---

## The Second Half — Consistency Across Profiles
Schema only works if your actual profiles agree with it. Right now, you likely have three different bios floating around (LinkedIn, YouTube, Amazon author page) that don't say the same thing. Fix needed:

1. **Pick one core description** — a shortened version of the bio I wrote (2-3 sentences: founder of Cr8v Stacks, author/poet background, SEO/design work) and use it, close to verbatim, on:
   - Your LinkedIn "About" section
   - Your YouTube channel "About" description
   - Your Amazon author page bio
   - Any Steemit profile description you're still able to edit

2. **Make sure your name is written the same way everywhere** — pick one primary form (I'd suggest "Mallami Adekunle" as the primary, since that's what you've used throughout this whole project) and use the other variant only as a secondary mention if needed, e.g., "also known as Adekunle Mallami."

3. **Link everything to everything** — your About page should link out to LinkedIn/YouTube/Amazon; your LinkedIn and YouTube profiles should link back to cr8vstacks.com. This mutual linking is what schema's `sameAs` property is describing — the code just makes it machine-readable, but the actual links still need to exist on the human-facing pages too.

**Realistic expectation on the Fiezie92 result specifically:** this won't disappear immediately, and it may take months for Google to fully merge the two identities even after all of this is in place. But every piece above is a real, correct step toward that merge — there isn't a faster shortcut.
