---
title: 'Cold Email'
template: service-landing
eyebrow: 'Cold Email'
headline: 'Outreach that gets replies, not spam complaints'
tagline: 'We fix deliverability first, so your outreach actually reaches the inbox before we worry about the perfect subject line.'
primary_intent: 'commercial - service research'
entities: ['SPF', 'DKIM', 'DMARC', 'Domain Warming', 'Cold Email Sequencing', 'Deliverability', 'List Verification']
service_url: /services/email-marketing/cold-email
taxonomy:
    service: ['Cold Email']
metadata:
    description: 'Cold email outreach services covering deliverability setup, domain warming, list building, and reply-focused sequencing.'
sitemap:
    changefreq: monthly
    priority: !!float 0.7

hero_cta:
    primary_label: 'Get a Deliverability Check'
    primary_url: /contact
    secondary_label: 'Talk to an Expert'
    secondary_url: /contact

definition: "<p>Cold email is outbound outreach to people who haven't opted in, built on domain authentication and warming so messages reach the inbox, then sequenced and personalised at the account and role level to earn a reply. It solves separate problems in order - reputation and authentication first, list quality second, message relevance third.</p><p>Skipping the deliverability work is expensive in a way that's easy to miss - a new domain sending unsolicited email at volume looks identical to spam infrastructure until it's proven otherwise, so mailbox providers filter it out by default, and no amount of copywriting fixes a message that never gets read.</p><p>It's different from drip campaigns, which nurture people who already opted in, and from automated flows more broadly, where deliverability is largely a given. Cold email is specifically outreach to people who haven't given permission yet.</p>"
definition_answer: "Cold email is outbound outreach to people who haven't opted in, built on domain authentication and warming so messages reach the inbox, then sequenced and personalised at the account and role level to earn a reply."

problems:
    - { title: 'New domain filtered as spam', body: 'A domain sending unsolicited email at volume looks identical to spam infrastructure until it earns trust.' }
    - { title: 'Copy optimised before deliverability', body: 'Teams write the perfect opening line for a message that never reaches an inbox to be judged.' }
    - { title: 'Generic, mail-merged outreach', body: 'Messages get treated as spam the same way once deliverability is fixed, if personalisation stops at a first name.' }
    - { title: 'Domain reputation burned by rushing volume', body: 'Sending real volume before the domain is warmed damages sender reputation quickly.' }
    - { title: 'Open rate tracked as the success metric', body: 'Open tracking has become unreliable since Apple Mail Privacy Protection, making it a poor signal.' }

included:
    - { title: 'Domain & Deliverability Setup', body: 'A dedicated sending domain with SPF, DKIM, and DMARC configuration and a gradual warming schedule.' }
    - { title: 'List Building & Verification', body: 'Prospect list building against a defined ICP with verification to keep bounce rates low.' }
    - { title: 'Sequence & Personalisation', body: '3-5 touch sequences with genuine value at each step, personalised at the account and role level.' }
    - { title: 'Reply Tracking & Optimisation', body: 'Reply-rate and positive-response tracking with sentiment triage and ongoing sequence iteration.' }

methodology:
    - { title: 'Warm', body: 'A dedicated sending domain is configured with SPF, DKIM, and DMARC, then warmed gradually before it carries real send volume.' }
    - { title: 'Build List', body: 'Prospects are sourced against a defined ideal customer profile and verified to keep bounce rates low.' }
    - { title: 'Sequence', body: 'A 3-5 touch sequence is written with a distinct reason to reply at each step, not a single pitch repeated with different subject lines.' }
    - { title: 'Personalise', body: 'Messaging is tailored at the account and role level - what a VP of Ops sees is different from what an IC sees at the same company.' }
    - { title: 'Launch', body: 'Sends are staged and monitored for spam-complaint and bounce signals that could damage sender reputation.' }
    - { title: 'Iterate', body: 'Sequences are refined based on positive-response rate, replacing steps that generate opens but no replies.' }

before_after:
    headers: ['Before', 'After']
    rows:
        - { a: 'A fresh domain sends high volume immediately and gets filtered', b: 'Domain reputation is built deliberately before volume ramps up' }
        - { a: 'Success measured by opens, which are largely untrackable now', b: 'Success measured by reply and positive-response rate' }
        - { a: 'Same message, merge-tagged first name only', b: 'Personalised at the account and role level' }
        - { a: 'One sending domain carries both cold and transactional risk', b: 'Dedicated domain isolates cold outreach risk from your primary domain' }

results:
    - { label: 'Inbox placement', desc: 'Tracked through domain warming and authentication checks, not assumed once DNS records are set.' }
    - { label: 'Reply and positive-response rate', desc: 'Measured directly rather than relying on unreliable open-rate tracking.' }
    - { label: 'List quality', desc: 'Reported by bounce and complaint rate kept within safe thresholds.' }
    - { label: 'Sender reputation', desc: 'Monitored as volume ramps in proportion to what the domain has actually proven it can handle.' }

deliverables_checklist:
    - { a: 'Dedicated sending domain', b: '✓' }
    - { a: 'SPF, DKIM, DMARC setup', b: '✓' }
    - { a: 'Domain warming schedule', b: '✓' }
    - { a: 'Verified prospect list', b: '✓' }
    - { a: 'Multi-touch sequences', b: '✓' }
    - { a: 'Reply-rate reporting', b: '✓' }

tools_used:
    - { label: 'HubSpot', icon: '&#129309;' }
    - { label: 'Zapier', icon: '&#128268;' }
    - { label: 'GA4', icon: '&#128202;' }
    - { label: 'Google Tag Manager', icon: '&#9881;&#65039;' }

industries:
    - { label: 'B2B & SaaS', url: /industries/b2b-saas, icon: '&#128188;' }
    - { label: 'Professional Services', url: /industries/professional-services, icon: '&#129309;' }
    - { label: 'Technology', url: /industries/technology, icon: '&#128187;' }
    - { label: 'Manufacturing', url: /industries/manufacturing, icon: '&#127981;' }

who_for:
    - { label: 'B2B teams building outbound pipeline', icon: '&#128188;' }
    - { label: 'Founders and sales teams doing their own outreach today', icon: '&#128100;' }
    - { label: 'SaaS companies with a defined ICP', icon: '&#9729;&#65039;' }
    - { label: 'Teams whose sending domain feels "burned"', icon: '&#128231;' }

why_us:
    - { title: 'We fix tracking before we touch results', body: "Every engagement starts with the same audit we'd run on our own accounts, so the numbers you're optimizing against are actually true." }
    - { title: 'One accountable team, not siloed vendors', body: 'The same team that does this also owns the rest of your stack - no handoff, no blame-shifting between vendors.' }
    - { title: 'Built for how AI search actually works', body: 'Everything we build is structured to be extractable by AI answer engines, not just ranked in a list of blue links.' }
    - { title: 'Reporting tied to your own dashboard', body: "Every number we report ties back to GA4/GTM events you can see directly - not a screenshot from a tool you can't independently verify." }

deliverables:
    - { a: 'Technical Setup', b: 'Sending domain, DNS authentication records, and a documented warming schedule' }
    - { a: 'List', b: 'Verified, ICP-matched prospect list with bounce and complaint rates kept within safe thresholds' }
    - { a: 'Sequences', b: 'Multi-touch outreach sequences with personalisation fields mapped per segment' }
    - { a: 'Reporting', b: 'Reply-rate and positive-response tracking, not open-rate vanity metrics' }

comparison:
    headers: ['Deliverability-First Cold Email', 'Spray-and-Pray Outreach']
    rows:
        - { a: 'Domain reputation is built deliberately before volume ramps up', b: 'A fresh domain sends high volume immediately and gets filtered' }
        - { a: 'Success measured by reply and positive-response rate', b: 'Success measured by opens, which are largely untrackable now' }
        - { a: 'Personalised at the account and role level', b: 'Same message, merge-tagged first name only' }
    note: "Neither approach can guarantee a reply - the difference is whether the message even had a fair chance of being read."

faqs:
    - { q: 'How long does domain warming take before we can send real volume?', a: "Typically two to four weeks, depending on how much daily volume you eventually want to send. Rushing this step is the single most common reason a new sending domain gets flagged early." }
    - { q: 'Can you guarantee a certain reply rate?', a: "No - reply rate depends on your offer, your list quality, and how much the recipient actually needs what you're selling, none of which we control entirely. What we can guarantee is that the message reaches the inbox and is relevant enough to be read, which is the part actually within our influence." }
    - { q: 'Is cold email compliant with spam regulations like CAN-SPAM or GDPR?', a: "We build sequences with required elements like clear sender identification and an easy opt-out, and we advise on list-sourcing practices that keep you within relevant regulations for your target markets. Compliance requirements vary by jurisdiction, so this gets scoped to where your prospects actually are." }
    - { q: 'Why use a separate sending domain instead of our main one?', a: "A dedicated domain isolates cold outreach risk from your primary domain's reputation. If a cold sequence gets flagged, it doesn't put your transactional or marketing email deliverability at risk." }
    - { q: 'How is this different from the automated flows you build for existing customers?', a: "Automation and drip flows target people who already opted in and know you - deliverability is largely a given. Cold email targets people who haven't opted in at all, which is why authentication and warming come first here in a way they don't for a warm list." }

cta:
    heading: 'Sending cold email that never gets a reply?'
    body: "Before we touch a word of copy, we'll check whether your messages are even reaching the inbox."
    button_label: 'Talk to us'
    button_url: /contact
---
