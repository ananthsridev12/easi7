---
title: 'Post Pilot'
template: app-detail
eyebrow: 'Post Pilot'
headline: 'LinkedIn content, planned, designed, and posted - without opening Canva'
tagline: 'An AI-powered LinkedIn content system that drafts on-brand copy, renders matching graphics from scratch, and posts on schedule - for one brand or a whole agency roster.'
tools: ['AI Content Generation', 'Custom Image Renderer', 'LinkedIn Auto-Posting', 'Content Calendar', 'Multi-Brand Workspaces']
metadata:
    description: 'Post Pilot is an AI-powered LinkedIn content platform that drafts posts, generates matching graphics without Canva or Figma, and auto-publishes on schedule across brands and teams.'
sitemap:
    changefreq: monthly
    priority: !!float 0.5
---

<p>Posting consistently on LinkedIn takes three separate skills most people don't have time for: writing on-brand copy, designing a matching graphic, and actually remembering to post on a schedule. Post Pilot collapses all three into one workflow - give it a topic, it drafts the caption, renders the image, and queues the post.</p>

<h2>What It Is</h2>

<p>Post Pilot is a web app that plans, generates, designs, and schedules LinkedIn content for a person or a team. Every feature below is real and shipped, not a roadmap item.</p>

<h2>Direct LinkedIn Publishing</h2>

<p>Post Pilot OAuth-connects a personal profile and/or company Pages directly, and composes Text, Single Image, or Carousel posts from inside the app. Once scheduled, a cron job handles the actual posting - no reminder needed, no manual copy-paste into LinkedIn's own composer. Carousels get combined into a swipeable PDF the way LinkedIn actually expects them, instead of a series of loose images.</p>

<h2>AI Content Generation, Grounded in a Real Brand</h2>

<p>Captions and slide copy are written from a topic using your choice of Gemini, Claude, or OpenAI - but the model isn't working from a blank prompt. Everything it writes is grounded in a structured brand knowledge base (identity, personas, tone of voice, proof points), which is the difference between output that sounds like the brand and output that reads like generic AI copy with a logo slapped on it.</p>

<h2>A From-Scratch Image Renderer</h2>

<p>No Canva, no Figma, no design tool subscription in the loop. Post Pilot renders graphics itself using PHP's GD library - not a wrapper calling out to someone else's design API. That means 17 distinct design templates, brand color palettes, custom fonts, logos, and adjustable text position and size, all generated directly by the app in the same pipeline that writes the caption.</p>

<h2>Content Calendar Generator</h2>

<p>Describe a date range and Post Pilot proposes a whole batch of on-brand post ideas at once. Nothing publishes itself blindly - the batch moves through review stages (content, then images, then schedule), so a full week or month of posts gets planned in one sitting without ever losing a human check on any of the three steps.</p>

<h2>Bulk Import, News &amp; Trends</h2>

<ul>
<li><strong>Bulk import</strong> - upload a CSV or a ZIP of planned posts, and scheduled content comes out the other side, useful for migrating an existing content calendar in one pass.</li>
<li><strong>News &amp; Trends</strong> - pulls in Google News and Reddit as raw material, so content generation has something timely to draw on instead of producing only evergreen posts.</li>
</ul>

<h2>Blog Studio</h2>

<p>Post Pilot isn't limited to LinkedIn. Blog Studio generates long-form blog posts and publishes them straight to WordPress, Jekyll, or Grav - the same content engine behind the LinkedIn posts, pointed at a different output.</p>

<h2>Workspaces &amp; Knowledge Base</h2>

<p>Workspaces keep brand identity, knowledge base, and content completely separate per brand or client, so one login can run an agency's entire roster without anything bleeding across accounts. Each workspace carries its own knowledge base - company identity, personas, content pillars, tone of voice, proof points and case studies - plus a memory of everything previously generated, so the AI doesn't repeat itself or drift off-brand over time.</p>

<h2>Built for Teams, Not Just One User</h2>

<p>What started as a single-user tool has grown into something a team can actually share: multi-tenant organizations with plan tiers (Free, Pro, Agency), team roles, and per-page access grants - the structure an agency needs to hand a client's workspace to the right people without handing over everything else too.</p>

<h2>A Public Marketing Site of Its Own</h2>

<p>Post Pilot ships with its own public marketing site - home page, step-by-step signup, pricing, and an about page - carrying a distinct visual identity (a violet and cream palette, self-hosted Inter webfont) separate from the in-app dashboard theme. It's built and presented as a real product, not an internal tool with a login screen bolted on.</p>

<p><a href="/contact">Get in touch</a> if you'd like to see it in action or hear how it fits an agency workflow.</p>
