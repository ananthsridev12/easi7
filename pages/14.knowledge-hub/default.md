---
title: 'Knowledge Hub'
menu: 'Knowledge Hub'
template: knowledge-hub
metadata:
    description: 'A glossary of marketing and analytics terms, plus in-depth guides on GA4, technical SEO, and answer engine optimisation.'
tagline: 'Plain-language definitions and in-depth guides - the reference material we wish someone had handed us earlier.'
content:
    items: '@self.children'
    order:
        by: default
        dir: asc

guides:
    - { route: /blog/ga4-migration-guide, meta: 'Guide · Analytics' }
    - { route: /blog/technical-seo-checklist, meta: 'Guide · SEO' }
    - { route: /blog/gtm-data-layer-guide, meta: 'Guide · Analytics' }

sitemap:
    changefreq: monthly
    priority: !!float 0.8
---
