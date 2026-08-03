# Founder Bio — Mallami Adekunle (Reverted to v1 Format, Updated)

Mallami Adekunle is the founder of Cr8v Stacks, leading strategy, design, and development across every project the studio takes on. His path into web design didn't start with code — it started with words. Before Cr8v Stacks, Mallami worked as an author and poet, with several books published on Amazon. That background in writing is what pulled him toward article writing, and from there into SEO — understanding not just how content reads, but how it gets found.

That dual foundation shapes how Cr8v Stacks operates today: design and development handled with the same attention to structure and clarity that good writing demands, backed by an SEO instinct that comes from having written and published content long before building websites professionally.

Beyond client work, Mallami runs a YouTube channel teaching design and development through tutorials, and is an avid follower of renewable energy developments.

Mallami works closely with AI tools throughout his process — using them to move faster on research, drafting, and repetitive work. But the creative direction, the decisions, and the judgment behind every project stay his. AI supports the work; it doesn't lead it.

---

# Your Question: The "AI Search Summary" for a Name

What you're describing is called a **Google Knowledge Panel** (the info box that appears when you search a name or brand) and its downstream effect: **AI Overviews** and other AI systems (ChatGPT, Perplexity, Gemini) citing that entity confidently instead of guessing or blending you with someone else who shares your name.

## Is writing a bio the only way to do this? No.
A bio page is necessary but nowhere close to sufficient. Based on current guidance, three things have to work together:

**1. An "Entity Home"** — one page Google treats as the authoritative source about you. Your About page bio is a good candidate for this, but it needs to consistently repeat the same core facts (full name, role, key credentials) every time your name appears anywhere.

**2. Schema markup (structured data)** — a technical layer (`Person` schema, in JSON-LD format) added to your site's code that explicitly tells Google "this page is about a person named Mallami Adekunle, who is the founder of Cr8v Stacks, who is also this person on LinkedIn/YouTube/Amazon." This is not visible text — it's code search engines and AI systems read directly. **This is the part your bio alone can't do.** Someone needs to add this schema to the About page.

**3. Consistent third-party profiles, linked together** — your LinkedIn, YouTube channel, Amazon author page, and any other public profile need to use the exact same name, description, and framing, and your site's schema should list all of them via a property called `sameAs`. This is what actually solves your disambiguation problem: it explicitly tells Google "the poet on Amazon and the founder at Cr8v Stacks are the same person," rather than leaving Google to guess and split you into two unclear entities.

## Are we doing this correctly right now?
Not yet — the bio above is the content layer, which is necessary, but on its own it won't trigger a Knowledge Panel or reliable AI Overview citation. What's missing:
- Person schema markup on the About page (technical, needs to be added to the site code — I can draft this JSON-LD for you if you want)
- A consistent bio/description used identically across LinkedIn, YouTube, and your Amazon author page — right now these likely all describe you slightly differently, which creates ambiguity rather than confidence
- Ideally, a Wikidata entry — described in current guidance as close to mandatory for personal entity recognition in 2026, and more realistic than a Wikipedia page, which has stricter notability requirements

## Timeline, honestly
Personal Knowledge Panels typically take **12-24 months** to appear even when everything is done correctly, since Google's confidence threshold for recognizing a person is higher than for a business. It's not something that happens because you asked for it or because one page is well-written — it compounds from consistent signals across many places over time.

**If this matters to you, the concrete next step is the Person schema markup for the About page** — that's the one piece that's purely technical and can be done immediately, independent of everything else.
