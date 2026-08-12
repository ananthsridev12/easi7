---
title: 'What Is GA4?'
template: glossary-term
summary: 'GA4 (Google Analytics 4) is an event-based analytics platform that replaced Universal Analytics, built around user actions rather than sessions.'
service_url: /services/analytics-tracking
taxonomy:
    topic: [Analytics]
metadata:
    description: 'A plain-language explanation of Google Analytics 4 (GA4) and how it differs from Universal Analytics.'
sitemap:
    changefreq: yearly
    priority: !!float 0.4
---

**GA4** is Google's current analytics platform, built entirely around events instead of the pageview-and-session model Universal Analytics used. Every interaction — a page view, a scroll, a form submission, a video play — is logged as an event with parameters attached, rather than being forced into a rigid pageview/goal structure.

That shift matters for two reasons. First, it makes cross-platform measurement (web and app together) possible in one property. Second, it means most of the useful reporting comes from *configuring events properly*, not from GA4's default reports — a poorly configured GA4 property will look empty even on a busy site.

For most businesses, a proper GA4 setup means: key conversion events explicitly marked, a data layer feeding Google Tag Manager, and at least a handful of custom dimensions capturing whatever your business actually needs to segment by (plan type, lead source, product category).
