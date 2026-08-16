---
title: 'AI UTM Generator'
template: app-detail
eyebrow: 'AI UTM Generator'
headline: 'The UTM_Parameter.xlsx spreadsheet, finally retired'
tagline: 'A multi-tenant UTM and tracking-taxonomy platform that replaces the fragile team spreadsheet with governed, validated data entry and live, paste-ready GA4/CRM code.'
tools: ['UTM Governance', 'Campaign Link Builder', 'GA4 Snippet Generator', 'Multi-Tenant Workspaces', 'Role-Based Access']
metadata:
    description: 'AI UTM Generator is a multi-tenant UTM and tracking-taxonomy platform with a campaign link builder, live GA4/CRM snippet generation, and role-based workspaces - built to replace the team UTM spreadsheet.'
sitemap:
    changefreq: monthly
    priority: !!float 0.5
---

<p>Every marketing team ends up with the same file: a <code>UTM_Parameter.xlsx</code> with tabs for verticals, form types, page types, funnel stages, lead magnets. It works until it doesn't - no access control, no validation, copy-paste errors in campaign URLs, no single source of truth for what <code>utm_cv</code> actually means, and no audit trail for who changed what. AI UTM Generator is that spreadsheet's replacement: a proper multi-tenant web app built to run on the same kind of affordable shared hosting a spreadsheet-era team already has, not a $50/month SaaS stack.</p>

<h2>What It Is</h2>

<p>A multi-tenant PHP/MySQL web app where each company gets its own login and manages its own landing pages, UTM and event taxonomy, campaign UTM links, and auto-generated GA4/CRM tracking snippets - turning a fragile spreadsheet workflow into governed, validated, auditable data entry with live-rendered code output.</p>

<h2>Built to Be Universal, Not Hardcoded</h2>

<p>The original spreadsheet had nine fixed categories - verticals, services, page types, form types, form locations, funnel stages, events, lead magnets, traffic types. Rather than force every future tenant into those exact nine buckets, a Custom Variables system lets any tenant add their own data-layer keys - an A/B test variant, a partner code, an ad format - as either a fixed list or free text, and those become <code>{{tokens}}</code> usable everywhere in the app.</p>

<p>Paired with tenant-defined Naming Conventions, a real customer's spreadsheet formula was reproduced exactly, without a spreadsheet formula in sight:</p>

<p><code>PA{{seq}}-{{service_vertical}}-{{service_name}}-{{channel}}-{{format}}-{{objective}}-{{date}}-{{version}}</code> &rarr; <code>PA1-DT-CPQ-GA-RSA-Traffic-Aug2026-V1</code></p>

<p>The deliberate design call here: we rejected rewriting the nine existing modules into a more "pure" generic EAV structure, because that would mean migrating working code for no functional gain. Adding a variables layer on top shipped faster and reused patterns already proven elsewhere in the app - additive over architecturally elegant, when elegance doesn't actually buy anything.</p>

<h2>The Bug That Only Shows Up at Click-Time</h2>

<p>Google and Bing Ads use placeholders like <code>{keyword}</code>, <code>{device}</code>, and <code>{matchtype}</code> in ad URLs, substituted live the moment someone clicks the ad - but only if they appear literally unencoded. PHP's <code>http_build_query()</code> percent-encodes <code>{</code> and <code>}</code> like any other character, silently turning <code>utm_term={keyword}</code> into <code>utm_term=%7Bkeyword%7D</code>. Google Ads simply doesn't recognise the encoded version, and the literal string <code>%7Bkeyword%7D</code> shows up in analytics instead of the actual keyword someone searched.</p>

<p>It's the kind of bug that passes every code review and only surfaces once real ad spend hits it. Fixed with a matching PHP and JavaScript unencode step at the point URLs get built and rendered, plus a one-time data migration that retroactively repaired every URL already saved before the fix shipped.</p>

<h2>Tenant Isolation at the Data Layer, Not Per-Controller</h2>

<p>Rather than trusting every controller to remember to add <code>WHERE tenant_id = ?</code>, a shared <code>BaseModel</code> class enforces tenant scoping centrally - every model that extends it automatically gets tenant-scoped queries. One shared MySQL database, practical on shared hosting where you often get exactly one; the tenant is resolved from the logged-in user rather than the subdomain, so no wildcard DNS is needed. A bug in any one controller cannot leak another company's data, because the isolation lives one layer down in the data models, not scattered across application logic in fifteen different controllers.</p>

<h2>Deliberately Boring Deployment</h2>

<p>No Docker, no Composer, no build step, no Node in production. Plain PHP 8 and PDO, deployed via cPanel's native Git Version Control - the kind of hosting a small agency or a two-person marketing team can actually afford and self-manage, instead of assuming everyone has a cloud platform and a DevOps person on staff. Boring tech, deliberately, because the people actually using this tool are marketers, not infrastructure engineers.</p>

<h2>Real, Paste-Ready Code Output</h2>

<p>Snippet Templates use <code>{{token}}</code> substitution to produce live GA4 dataLayer pushes and CRM lead objects per landing page, so a non-technical marketer configuring a landing page in the UI gets back the exact JavaScript block their dev team pastes into GTM - not a data export someone still has to translate into code.</p>

<p>The Campaign/UTM Link Builder works the same way for campaign URLs: pick a channel - Google Ads Search, Meta, LinkedIn, Email, and more - and it recommends the GA4-correct source/medium combination most marketers don't have memorised, reveals channel-specific extra parameters, and live-previews the final URL before anything gets copied.</p>

<h2>Built for How Marketing Teams Actually Work</h2>

<p>Role-based access runs Owner &gt; Admin &gt; Editor &gt; Viewer, with invite links so a teammate can self-onboard into the right company workspace with their own password instead of an admin hand-typing every account. It maps to how a real marketing org chart is structured, not a generic permissions system bolted on afterward.</p>

<h2>Full Feature List</h2>

<ul>
<li><strong>Landing Pages module</strong> with CSV bulk import - rows are matched to other modules by human-readable name, not internal ID, so a typo in a reference warns instead of silently failing the whole row</li>
<li><strong>Tracking Configurations</strong> linking a landing page to the taxonomy, auto-building a unique <code>form_id</code> and rendering live snippets, with two CSV export modes (basic + snippets, full + snippets)</li>
<li><strong>Campaign/UTM Link Builder</strong> with channel-aware defaults and live preview</li>
<li><strong>Ad Channels</strong> as tenant-editable presets, not hardcoded into the app</li>
<li><strong>Custom Variables and Naming Conventions</strong> - the universal layer described above</li>
<li><strong>Per-tenant editable Snippet Templates</strong>, each toggleable for whether it applies to Tracking Configs</li>
<li><strong>CSV exports that resolve every foreign key to a real name</strong> - no raw database IDs in exported spreadsheets</li>
<li><strong>Super Admin back office</strong> for the platform operator, including the ability to suspend or reactivate tenant workspaces</li>
<li><strong>Clean URLs</strong> (<code>/campaigns/edit/3</code>, not <code>/index.php?r=...</code>)</li>
</ul>

<p><a href="/contact">Get in touch</a> if your team is still living in a UTM spreadsheet and you want to see what replacing it actually looks like.</p>
