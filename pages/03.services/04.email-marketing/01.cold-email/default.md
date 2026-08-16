---
title: 'Cold Email'
template: service-detail-a
eyebrow: 'Cold Email'
headline: 'Outreach that gets replies, not spam complaints'
tagline: 'Cold email systems built on deliverability fundamentals first, then personalisation and sequencing - in that order.'
primary_intent: 'commercial - service research'
entities: ['SPF', 'DKIM', 'DMARC', 'Domain Warming', 'Cold Email Sequencing', 'Deliverability', 'List Verification']
tools: ['SPF/DKIM/DMARC', 'Domain Warming Tools', 'Sequencing Platforms', 'List Verification']
service_url: /services/email-marketing/cold-email
taxonomy:
    service: ['Cold Email']
metadata:
    description: 'Cold email outreach services covering deliverability setup, domain warming, list building, and reply-focused sequencing.'
sitemap:
    changefreq: monthly
    priority: !!float 0.7
problem: "<p>Most cold email campaigns fail before a single prospect reads a word of copy. A new domain sending unsolicited email at volume looks identical to spam infrastructure until it's proven otherwise, and mailbox providers err on the side of filtering it out. Teams that skip straight to writing the perfect opening line are often optimising a message that never reaches an inbox to be judged.</p><p>The second failure mode shows up after deliverability is fixed - generic, mail-merged outreach that ignores the account and role it's landing in. A message that could have been sent to anyone reads like it was sent to no one in particular, and gets treated that way.</p>"
solution: "<p>Cold email done properly is a sequence of separate problems solved in order - reputation and authentication first, list quality second, message relevance third. Fixing the technical foundation before the copy means every message that gets read at least had the chance to be read in the first place.</p>"
solution_answer: "Cold email is outbound outreach to people who haven't opted in, built on domain authentication and warming so messages reach the inbox, then sequenced and personalised at the account and role level to earn a reply."
approach: "<p>We treat deliverability as a separate workstream from copy, because conflating them is how most cold email programmes stall. A dedicated sending domain gets warmed up gradually before it carries any real volume, authentication is verified rather than assumed, and only once the technical layer is stable do we start testing sequences and messaging - iterating on reply rate and positive response, not opens, since open tracking has become unreliable since Apple's Mail Privacy Protection.</p>"
capabilities:
    - { title: 'Domain & Deliverability Setup', items: ['Dedicated sending domain, separate from your primary domain', 'SPF, DKIM, and DMARC configuration', 'Gradual domain warming schedule'] }
    - { title: 'List Building & Verification', items: ['Prospect list building against a defined ICP', 'Email verification to keep bounce rates low', 'Suppression list management'] }
    - { title: 'Sequence & Personalisation', items: ['3-5 touch sequences with genuine value in each step', 'Account and role-level personalisation, not merge-tag first names', 'A/B testing on subject lines and opening lines'] }
    - { title: 'Reply Tracking & Optimisation', items: ['Reply-rate and positive-response tracking', 'Sentiment triage so replies get routed correctly', 'Ongoing sequence iteration based on what actually gets responses'] }
deliverables:
    - { a: 'Technical Setup', b: 'Sending domain, DNS authentication records, and a documented warming schedule' }
    - { a: 'List', b: 'Verified, ICP-matched prospect list with bounce and complaint rates kept within safe thresholds' }
    - { a: 'Sequences', b: 'Multi-touch outreach sequences with personalisation fields mapped per segment' }
    - { a: 'Reporting', b: 'Reply-rate and positive-response tracking, not open-rate vanity metrics' }
process:
    - { title: 'Domain Setup & Warming', body: 'A dedicated sending domain is configured with SPF, DKIM, and DMARC, then warmed gradually before it carries real send volume.' }
    - { title: 'List Building & Verification', body: 'Prospects are sourced against a defined ideal customer profile and verified to keep bounce rates low.' }
    - { title: 'Sequence Design', body: 'A 3-5 touch sequence is written with a distinct reason to reply at each step, not a single pitch repeated with different subject lines.' }
    - { title: 'Personalisation Layer', body: 'Messaging is tailored at the account and role level - what a VP of Ops sees is different from what an IC sees at the same company.' }
    - { title: 'Launch & Deliverability Monitoring', body: 'Sends are staged and monitored for spam-complaint and bounce signals that could damage sender reputation.' }
    - { title: 'Reply Tracking & Iteration', body: 'Sequences are refined based on positive-response rate, replacing steps that generate opens but no replies.' }
comparison:
    headers: ['Deliverability-First Cold Email', 'Spray-and-Pray Outreach']
    rows:
        - { a: 'Domain reputation is built deliberately before volume ramps up', b: 'A fresh domain sends high volume immediately and gets filtered' }
        - { a: 'Success measured by reply and positive-response rate', b: 'Success measured by opens, which are largely untrackable now' }
        - { a: 'Personalised at the account and role level', b: 'Same message, merge-tagged first name only' }
    note: "Neither approach can guarantee a reply - the difference is whether the message even had a fair chance of being read."
outcomes:
    - 'Messages consistently reach the inbox instead of being filtered before a prospect sees them'
    - 'Reply and positive-response rate becomes the tracked metric instead of an open rate that no longer means much'
    - 'Sending domain reputation stays protected because volume ramps in proportion to proven deliverability'
who_needs_this:
    - { title: 'B2B teams building outbound pipeline', body: "When inbound alone isn't generating enough qualified conversations, a properly run cold email channel adds a second lane." }
    - { title: 'Founders and sales teams doing their own outreach today', body: 'If replies are rare and the domain feels "burned," the cause is usually deliverability, not the pitch.' }
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
