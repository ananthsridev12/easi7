---
title: 'Core Web Vitals'
template: service-detail-b
eyebrow: 'Web Optimization'
headline: 'The three metrics Google actually measures'
tagline: 'Core Web Vitals optimisation targeting LCP, INP, and CLS specifically - not generic speed advice that misses the metrics that count.'
tools: ['LCP', 'INP', 'CLS']
service_url: /services/web-optimization/core-web-vitals
taxonomy:
    service: ['Core Web Vitals']
metadata:
    description: 'Core Web Vitals optimisation services targeting LCP, INP, and CLS for both SEO and user experience.'
sitemap:
    changefreq: monthly
    priority: !!float 0.6

primary_intent: 'informational - concept explainer'
entities: ['Largest Contentful Paint', 'Interaction to Next Paint', 'Cumulative Layout Shift', 'Search Console Field Data', 'Core Web Vitals']

overview: "<p>Core Web Vitals are three specific, named metrics Google uses to judge a page's real-world experience: Largest Contentful Paint (how fast the main content appears), Interaction to Next Paint (how quickly the page responds when someone actually clicks or taps), and Cumulative Layout Shift (whether elements jump around while the page loads). A page can score well on a generic speed test and still fail one of these, because they measure specific moments a generic test doesn't isolate.</p><p>This distinction matters because fixing the wrong thing is common. A team that shrinks images to improve 'speed' may do nothing for INP if the actual problem is a heavy JavaScript bundle blocking the main thread when a user taps a button. Each metric has its own cause and its own fix.</p>"
overview_answer: "Core Web Vitals optimisation is the process of diagnosing and fixing the three specific metrics Google measures for page experience - LCP, INP, and CLS - individually, rather than applying general speed advice and hoping it covers all three."
capabilities:
    - { title: 'LCP Diagnosis & Fixes', items: ['Identifying the actual largest content element and what delays it', 'Server response time and render-path fixes', 'Preloading and prioritising the correct resource'] }
    - { title: 'INP Optimisation', items: ['Main-thread blocking script identification', 'Event handler and input responsiveness tuning', 'Third-party script impact assessment'] }
    - { title: 'CLS Elimination', items: ['Reserving space for images, ads, and embeds before they load', 'Font-loading strategy to prevent layout jumps', 'Dynamic content injection review'] }
    - { title: 'Field Data Monitoring', items: ['Search Console Core Web Vitals report tracking', 'Real-user monitoring, not just lab test scores'] }
included:
    - { a: 'Diagnosis', b: 'Per-metric breakdown of what is causing each Core Web Vitals score to fail, by page template' }
    - { a: 'Fixes', b: 'Implementation of the specific technical changes each metric requires' }
    - { a: 'Field Data Setup', b: 'Search Console and real-user monitoring configured to track real visitor experience, not just a lab score' }
    - { a: 'Regression Tracking', b: 'Ongoing monitoring so a passing score does not quietly slip back to failing' }
how_we_work:
    - { title: 'Field data review', body: "We start with real-user data from Search Console, not just a single lab test, since lab scores can miss what actual visitors on real networks experience." }
    - { title: 'Per-metric diagnosis', body: "Each failing metric is diagnosed on its own terms - LCP, INP, and CLS have different root causes and do not share a fix." }
    - { title: 'Template-level fixes', body: "Fixes are applied at the template level where possible, since most Core Web Vitals problems repeat across every page using the same layout." }
    - { title: 'Verification against field data', body: "Changes are checked against real-user field data, not just a lab re-test, since lab and field results can diverge." }
    - { title: 'Ongoing tracking', body: "Search Console and monitoring stay in place after the fix, so a new script or image doesn't quietly push a metric back into the red." }
comparison:
    headers: ['Metric-Specific Diagnosis', 'Generic Speed Advice']
    rows:
        - { a: 'Identifies which of LCP, INP, or CLS is actually failing', b: 'Treats "speed" as one undifferentiated problem' }
        - { a: 'Fixes match the specific cause per metric', b: 'Common fixes (image compression) may not touch INP or CLS at all' }
        - { a: 'Verified against Search Console field data', b: 'Often verified against a single lab test only' }
use_cases:
    - 'A site ranks well but Search Console flags Core Web Vitals as "Needs Improvement," which can affect how it competes against pages that pass'
    - 'A redesign introduced layout shift from ads or embeds that were not accounted for during development'
    - 'A page feels fast to load but sluggish to interact with, which points to an INP problem rather than a loading problem'
who_needs_this:
    - { title: 'Sites flagged in Search Console', body: 'Where the Core Web Vitals report shows pages in the "Needs Improvement" or "Poor" category.' }
    - { title: 'Sites that pass lab tests but underperform in the field', body: 'A gap between lab and field data usually means real users on real devices are having a different experience than the test.' }
benefits:
    - 'Pages meet the specific thresholds Google measures, rather than a general sense of "faster"'
    - 'Interactions feel responsive because INP is diagnosed and fixed on its own terms, not bundled into a generic speed pass'
    - 'Layout stops jumping during load, which removes a common source of accidental clicks and visitor frustration'
why_choose_us:
    - 'We diagnose LCP, INP, and CLS as three separate problems with three separate causes, instead of one generic speed pass'
    - 'We verify against Search Console field data, not just a lab score that may not reflect what real visitors experience'
faqs:
    - { q: 'Do Core Web Vitals directly affect search rankings?', a: "They're a confirmed ranking signal, but a modest one relative to content relevance and backlinks. The more consistent impact is on conversion - visitors leave a slow, jumpy, unresponsive page before they ever see your offer, regardless of where it ranks." }
    - { q: 'Can you guarantee our pages will pass all three metrics?', a: "No. We can diagnose exactly what is failing and fix the specific cause, and most sites do reach passing thresholds once the real bottleneck is addressed - but third-party scripts, ad networks, or platform constraints outside our control can limit what's achievable on some pages." }
    - { q: 'Why does Search Console show different numbers than a speed testing tool?', a: "Search Console reports field data - real visits from real users on real devices and networks - while most speed testing tools report a single lab simulation. The two can diverge, especially on INP, which depends heavily on the visitor's actual device." }
    - { q: 'Which metric is usually the hardest to fix?', a: "INP tends to take the most work, because it is often caused by third-party scripts (analytics, chat widgets, ad tags) that are outside your own codebase and harder to control directly." }
    - { q: 'How long until Search Console reflects an improvement?', a: "Field data is based on a rolling 28-day window of real visits, so even a fix deployed today will not show improvement in Search Console for several weeks. A lab test will show the change immediately, but the field report lags by design." }
    - { q: 'Is this different from general website speed optimisation?', a: "There's overlap, but Core Web Vitals work targets these three specific metrics and their specific causes, while general speed optimisation covers broader load-time and asset concerns that may not move LCP, INP, or CLS directly." }
cta: { heading: 'Flagged in Search Console for Core Web Vitals?', body: 'We can tell you which of the three metrics is actually failing and why, before recommending a fix.', button_label: 'Talk to us', button_url: /contact }
---
