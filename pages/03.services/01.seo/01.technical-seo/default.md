---
title: 'Technical SEO'
template: service-landing
eyebrow: 'Technical SEO'
headline: 'Fix what stops a site from ranking at all'
tagline: "Fix the crawl, indexation, speed, and schema issues that quietly cap your rankings before any other SEO work can pay off."
primary_intent: 'commercial - service research'
entities: ['Crawl Budget', 'Indexation', 'Core Web Vitals', 'Schema Markup', 'Site Architecture', 'XML Sitemaps']
service_url: /services/seo/technical-seo
taxonomy:
    service: ['Technical SEO']
metadata:
    description: 'Technical SEO audits, schema markup, and crawl and indexation fixes - the foundation layer that determines whether a site can rank at all.'
sitemap:
    changefreq: monthly
    priority: !!float 0.7

hero_cta:
    primary_label: 'Get a Technical SEO Audit'
    primary_url: /contact
    secondary_label: 'Talk to an Expert'
    secondary_url: /contact

definition: "<p>Technical SEO is the set of fixes to a site's crawlability, indexation, speed, and markup that determine whether search engines and AI systems can access, understand, and rank its pages at all. Most technical problems are invisible from the front end - a page can look complete and still be unreadable to a crawler, excluded from the index, or too slow to rank.</p><p>Skipping it is expensive in a way that doesn't show up immediately - content and link-building investment quietly underperforms while a robots.txt error or a broken canonical tag keeps pages out of search results, and the damage compounds as the site scales.</p><p>It's different from on-page SEO, which optimises what's already indexed to match search intent, and off-page SEO, which builds authority through links. Technical SEO is the foundation that decides whether either of those gets the chance to work.</p>"
definition_answer: "Technical SEO is the set of fixes to a site's crawlability, indexation, speed, and markup that determine whether search engines and AI systems can access, understand, and rank its pages at all."

problems:
    - { title: 'Pages excluded from the index', body: 'A canonical or robots.txt error is quietly keeping otherwise-good pages out of search results.' }
    - { title: 'Crawl budget wasted', body: 'Search engines spend limited crawl time on duplicate or low-value URLs instead of pages that matter.' }
    - { title: 'Weak Core Web Vitals', body: 'Slow load times and layout instability cap rankings regardless of how good the content is.' }
    - { title: 'Missing structured data', body: "Pages lack the schema markup search engines and AI crawlers need to understand what they are." }
    - { title: 'Content investment underperforming', body: 'Content and link work quietly underperforms because a technical issue is capping it.' }
    - { title: 'AI crawlers blocked or confused', body: "AI bots can't reliably access or parse key pages, cutting them out of AI-generated answers." }

included:
    - { title: 'Crawl & Indexation', body: 'Crawl budget analysis, robots.txt and sitemap review, orphaned page detection, and canonical tag audits.' }
    - { title: 'Site Speed & Core Web Vitals', body: 'LCP, INP, and CLS diagnostics with image, asset, and render-blocking resource fixes.' }
    - { title: 'Structured Data & Schema', body: 'FAQ, HowTo, Article, Product, and organisation-level schema, validated against crawler requirements.' }
    - { title: 'Site Architecture', body: 'URL structure, internal linking depth, and pagination or faceted navigation handling.' }
    - { title: 'AI Crawler Access', body: 'AI bot access review (GPTBot, ClaudeBot, and others) plus llms.txt and machine-readability checks.' }

methodology:
    - { title: 'Audit', body: 'We crawl the entire site the way a search engine would, capturing crawl errors, indexation status, and structural issues before recommending anything.' }
    - { title: 'Prioritise', body: 'Findings are ranked by how much organic potential each one is actually costing, not by how many issues exist in a category.' }
    - { title: 'Fix', body: 'We implement fixes directly or hand off a developer-ready spec, depending on how your team is set up.' }
    - { title: 'Markup', body: 'Structured data is added for the page types that benefit most - product, article, FAQ, and organisation-level entity markup.' }
    - { title: 'Verify', body: "We re-crawl after deployment to confirm fixes actually resolved, not just that code shipped." }
    - { title: 'Monitor', body: 'Recurring crawls flag regressions before they erode months of ranking progress.' }

before_after:
    headers: ['Before', 'After']
    rows:
        - { a: 'Pages silently drop out of the index', b: 'Indexation status monitored and fixed proactively' }
        - { a: 'Broken canonical tags splitting ranking signals', b: 'Clean canonical structure consolidating signals to one URL' }
        - { a: 'Core Web Vitals failing on mobile templates', b: 'LCP, INP, and CLS within passing thresholds' }
        - { a: 'No structured data on key pages', b: 'Schema markup implemented and validated in Search Console' }
        - { a: 'AI crawlers blocked or unable to parse pages', b: 'AI bot access verified across priority pages' }

results:
    - { label: 'Indexation rate', desc: 'Tracked as the share of priority pages actually indexed, not just submitted.' }
    - { label: 'Core Web Vitals', desc: 'Measured per template type against passing thresholds.' }
    - { label: 'Crawl efficiency', desc: 'Reported by how much crawl budget reaches pages that matter versus low-value URLs.' }
    - { label: 'Structured data coverage', desc: 'Tracked by page type and validated in Search Console.' }

deliverables_checklist:
    - { a: 'Full site crawl', b: '✓' }
    - { a: 'Indexation status report', b: '✓' }
    - { a: 'Core Web Vitals report', b: '✓' }
    - { a: 'Schema implementation', b: '✓' }
    - { a: 'Internal linking recommendations', b: '✓' }
    - { a: 'URL structure recommendations', b: '✓' }
    - { a: 'AI crawler access review', b: '✓' }

tools_used:
    - { label: 'Google Search Console', icon: '&#128269;' }
    - { label: 'Screaming Frog', icon: '&#128056;' }
    - { label: 'Ahrefs', icon: '&#128279;' }
    - { label: 'Google Tag Manager', icon: '&#9881;&#65039;' }
    - { label: 'GA4', icon: '&#128202;' }

industries:
    - { label: 'B2B & SaaS', url: /industries/b2b-saas, icon: '&#128188;' }
    - { label: 'E-Commerce', url: /industries/ecommerce, icon: '&#128722;' }
    - { label: 'Manufacturing', url: /industries/manufacturing, icon: '&#127981;' }
    - { label: 'Technology', url: /industries/technology, icon: '&#128187;' }
    - { label: 'Professional Services', url: /industries/professional-services, icon: '&#129309;' }

who_for:
    - { label: 'Sites with declining organic traffic', icon: '&#128200;' }
    - { label: 'Businesses planning a migration or replatform', icon: '&#128295;' }
    - { label: 'Large catalogues and content libraries', icon: '&#128214;' }
    - { label: 'E-commerce sites', icon: '&#128722;' }
    - { label: 'Enterprise websites', icon: '&#127970;' }

why_us:
    - { title: 'We fix tracking before we touch results', body: "Every engagement starts with the same audit we'd run on our own accounts, so the numbers you're optimizing against are actually true." }
    - { title: 'One accountable team, not siloed vendors', body: 'The same team that does this also owns the rest of your stack - no handoff, no blame-shifting between vendors.' }
    - { title: 'Built for how AI search actually works', body: 'Everything we build is structured to be extractable by AI answer engines, not just ranked in a list of blue links.' }
    - { title: 'Reporting tied to your own dashboard', body: "Every number we report ties back to GA4/GTM events you can see directly - not a screenshot from a tool you can't independently verify." }

ai_relationships:
    diagram: "Technical SEO\n├── On-Page SEO\n├── Off-Page SEO\n├── AI SEO\n└── E-E-A-T & Content Strategy"
    items:
        - { title: 'On-Page SEO', url: /services/seo/on-page-seo, body: 'Builds on a crawlable, indexed foundation to make each page rank for the right search intent.' }
        - { title: 'Off-Page SEO', url: /services/seo/off-page-seo, body: 'Authority signals only compound once the technical foundation lets search engines credit them to the right page.' }
        - { title: 'AI SEO', url: /services/seo/ai-seo, body: 'Extends the same crawl-and-parse requirements to how AI systems access and cite your pages.' }
        - { title: 'E-E-A-T & Content Strategy', url: /services/seo/eeat-content-strategy, body: 'Depends on pages being crawlable and indexed before trust signals can be evaluated at all.' }

deliverables:
    - { a: 'Crawl & Indexation', b: 'Full site crawl, indexation status report, fix list for excluded or misconfigured pages' }
    - { a: 'Performance', b: 'Core Web Vitals report per template type, with prioritised remediation' }
    - { a: 'Structured Data', b: 'Schema implementation across priority page types, validated in Search Console' }
    - { a: 'Architecture', b: 'Internal linking and URL structure recommendations, sequenced by effort and impact' }

comparison:
    headers: ['With a Fixed Technical Foundation', 'Without One']
    rows:
        - { a: 'Pages are consistently crawled and indexed', b: 'Pages silently drop out of the index with no alert' }
        - { a: 'Content and link investment compounds', b: 'Content and link work underperforms for unclear reasons' }
        - { a: 'Site is readable by AI crawlers and assistants', b: "AI systems can't reliably access or parse key pages" }
    note: "Technical SEO doesn't replace content or authority work - it determines whether that work is even given the chance to rank."

faqs:
    - { q: 'How do I know if my problem is technical or content-related?', a: "An audit will tell you, but a fast signal is this - if pages with genuinely good content aren't ranking or aren't even indexed, that points to technical. If pages are indexed and ranking but just not for the right terms, that's a content or intent problem." }
    - { q: 'Will fixing technical SEO alone improve my rankings?', a: "It removes a ceiling, but it isn't a ranking strategy on its own. Technical SEO makes a page eligible to rank for what it deserves to rank for - it doesn't create authority or relevance that isn't already there." }
    - { q: 'How long does a technical SEO fix take to show up in results?', a: "Re-crawling and re-indexing can happen within days to a couple of weeks depending on your site's crawl frequency. The ranking impact, if the fix removed a real constraint, is usually visible within four to eight weeks." }
    - { q: 'Do you need CMS access or a developer to implement fixes?', a: "It depends on the platform and the fix. Some changes (schema, sitemaps, robots.txt) we can implement directly. Structural changes to templates usually require your development team, and we hand off a clear spec rather than a vague recommendation." }
    - { q: 'Is technical SEO a one-time project or ongoing?', a: "The initial fix is a project. But sites change - new pages, new templates, platform updates - and each of those can reintroduce technical issues, so most clients keep a lighter recurring check in place rather than rediscovering problems eight months later." }

cta:
    heading: 'Not sure if your problem is technical?'
    body: "A short crawl is usually enough to tell you. We'll show you what's actually blocking your pages before recommending anything."
    button_label: 'Talk to us'
    button_url: /contact
---
