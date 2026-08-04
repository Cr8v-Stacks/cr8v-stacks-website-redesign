file_path = r"C:\Users\HP\Downloads\Mega Menu\wordpress_conversion_strategy.md"

with open(file_path, "r", encoding="utf-8") as f:
    content = f.read()

# Append Section 4 ACF & Native Meta Field Mapping Schema intelligently
acf_schema_doc = """

---

## 4. Comprehensive ACF & Native Meta Field Mapping Schema

To ensure a seamless transition into a fully functional WordPress theme and custom plugin suite, the following field schema maps every visual component across our blog archive, single article, and single service page:

### A. Blog Grid & Resources Archive (`home.php` / `blog.html`)
| Field Name | Meta Key / Field Key | Field Type | Target Component | Description / Guidelines |
| :--- | :--- | :--- | :--- | :--- |
| **Archive Eyebrow** | `_cr8v_archive_eyebrow` | Text | Hero Tag | Default: `// ARTICLES & CASE STUDIES` |
| **Archive Main Title** | `_cr8v_archive_title` | Text | Hero `<h1>` | Default: `RESOURCES` (Michroma font) |
| **Archive Intro Subtitle** | `_cr8v_archive_subtitle` | Textarea | Hero Description | Concise intro summary paragraph |
| **Grid Card Title** | `post_title` | Native WP | Card Headline | Rendered at `0.8rem` Michroma font |
| **Grid Card Category** | `tax_category` | WP Taxonomy | Meta Pill | Mono font category tag |
| **Grid Card Image** | `_thumbnail_id` | WP Media | Card Image | 16:10 aspect ratio image |

### B. Single Article & Post Page (`single.php` / `single-blog.html`)
| Field Name | Meta Key / Field Key | Field Type | Target Component | Description / Guidelines |
| :--- | :--- | :--- | :--- | :--- |
| **Article Category Pill** | `tax_category` | WP Taxonomy | Top Pill | Liquid Performance / Entity SEO tag |
| **Featured Media** | `_thumbnail_id` | WP Media | Top Banner Image | 16:9 responsive featured asset |
| **Sidebar Stack Logos** | `_cr8v_sidebar_stack_logos` | Repeater / Array | Left Sidebar | Stack CDN icons (Shopify, WP, Claude, OpenAI) |
| **Sidebar Trust Label** | `_cr8v_sidebar_trust_label` | Text | Left Sidebar | Default: `ENGINEERED ON MODERN STACKS` |
| **Sidebar Graphic Visual**| `_cr8v_sidebar_graphic` | Image | Left Sidebar | Unique tech badge graphic asset |
| **Sidebar CTA Title** | `_cr8v_sidebar_cta_title` | Text | Left Sidebar | Default: `Your design + build partner` |
| **Sidebar CTA Button Link**| `_cr8v_sidebar_cta_link` | URL | Left Sidebar Button | Target link (`discovery-call.html`) |
| **AI Deep Summary Prompt**| `_cr8v_ai_summary_prompt` | Textarea | AI Bar Component | Dynamic prompt passed to ChatGPT, Claude, Gemini & Perplexity |
| **Share Channels Config** | `_cr8v_share_channels` | Checkbox Group | Share Bar | Enable/Disable X, LinkedIn, FB, WA, Telegram, Reddit |

### C. Single Service Page (`single-service.php`)
| Field Name | Meta Key / Field Key | Field Type | Target Component | Description / Guidelines |
| :--- | :--- | :--- | :--- | :--- |
| **Service Title** | `post_title` | Native WP | Service Hero | Custom service title in Michroma font |
| **Service Scope Pillars**| `_cr8v_service_pillars` | Repeater | Core Breakdown | List of technical scope deliverables |
| **Service Deliverables** | `_cr8v_service_deliverables` | Repeater | Feature Grid | Professional high-end agency terminology |
| **Service FAQ Accordion**| `_cr8v_service_faqs` | Repeater | Bottom FAQ | Question + Answer accordion pairs |
"""

if "## 4. Comprehensive ACF & Native Meta Field Mapping Schema" not in content:
    content += acf_schema_doc

with open(file_path, "w", encoding="utf-8") as f:
    f.write(content)

print("Intelligently merged ACF field mapping schema into wordpress_conversion_strategy.md.")
