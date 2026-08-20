---
title: 'A/B Testing'
template: service-landing
eyebrow: 'A/B Testing'
headline: 'Stop Trusting Test Results That Were Never Statistically Real'
tagline: 'We calculate sample size and run time before launch, so you get a result you can trust, not a number that looked good on day two.'
primary_intent: 'commercial - service research'
entities: ['A/B Testing', 'Multivariate Testing', 'Statistical Significance', 'Sample Size', 'VWO', 'Optimizely']
service_url: /services/conversion-optimization/ab-testing
taxonomy:
    service: ['A/B Testing']
metadata:
    description: 'A/B and multivariate testing services with proper sample size calculation and statistical validation.'
sitemap:
    changefreq: monthly
    priority: !!float 0.6

hero_cta:
    primary_label: 'Get a Testing Setup Review'
    primary_url: /contact
    secondary_label: 'Talk to an Expert'
    secondary_url: /contact

definition: "<p>A/B testing here means running a properly powered test, with sample size calculated in advance and the result read only once significance and a full weekly traffic cycle are both reached.</p><p>Skipping the calculation costs trust in the result itself: a test called early because the number looked good creates false confidence in what was likely noise, and the same problem shows up in reverse when a genuinely working variant gets killed too early because the first few days looked flat.</p><p>It's different from conversion rate optimisation as a whole, which includes the diagnostic work that produces the hypothesis, and from multivariate testing specifically, which changes several elements at once and needs substantially more traffic to reach significance.</p>"
definition_answer: "A/B testing here means running a properly powered test, with sample size calculated in advance and the result read only once significance and a full weekly traffic cycle are both reached."

problems:
    - { title: 'Tests called too early', body: 'A test gets stopped the moment a variant pulls ahead, before the result is statistically real.' }
    - { title: 'Working variants killed early', body: 'A genuinely effective variant gets abandoned because the first few days looked flat.' }
    - { title: 'No sample size calculated', body: 'Tests launch without a defined stopping rule, so any number can look convincing at the wrong moment.' }
    - { title: 'Guardrail metrics ignored', body: 'A win on the primary goal can hide a loss elsewhere that nobody checked for.' }
    - { title: 'No searchable test history', body: "Past results aren't documented, so the same question gets tested again without realising it." }

included:
    - { title: 'Test Design', body: 'Hypothesis definition, variant scoping, and minimum detectable effect setting.' }
    - { title: 'Sample Size & Power Calculation', body: 'Pre-test statistical power calculation and minimum run time based on weekly traffic patterns.' }
    - { title: 'Multivariate & Sequential Testing', body: 'Multivariate test design for interacting variables, with correction methods for sequential testing.' }
    - { title: 'Statistical Validation', body: 'Significance testing at test end alongside guardrail metric monitoring throughout.' }
    - { title: 'Tool Setup & QA', body: 'VWO, Optimizely, and GA4 implementation with cross-device and cross-browser QA before launch.' }

methodology:
    - { title: 'Hypothesis', body: 'Each test starts from a specific, evidence-backed hypothesis rather than a general idea worth trying.' }
    - { title: 'Sample Size', body: 'Statistical power sets the sample size and minimum run time before anything is built.' }
    - { title: 'Build', body: 'Variants are QA-checked across devices and browsers before the test goes live.' }
    - { title: 'Launch', body: 'The test runs to its planned duration - we track it but do not call it early because an early number looks good.' }
    - { title: 'Readout', body: 'Significance and guardrail metrics are both checked before declaring a winner.' }
    - { title: 'Documentation', body: 'The result, including inconclusive or negative ones, is documented so the next test builds on it.' }

before_after:
    headers: ['Before', 'After']
    rows:
        - { a: 'Test stopped once the number looks good', b: 'Sample size and run time set before the test starts' }
        - { a: 'Results checked daily, driving early calls', b: 'Result read once, after the planned duration completes' }
        - { a: 'Only the primary goal metric gets checked', b: 'Guardrail metrics are checked alongside the primary goal' }
        - { a: 'Past tests undocumented and re-run by accident', b: 'A searchable history prevents re-testing the same question' }

results:
    - { label: 'Tests reaching real significance', desc: 'Reported as the share of tests that hit their pre-calculated sample size before a result is read.' }
    - { label: 'Guardrail metric checks', desc: 'Tracked for every test, not just the ones with an obvious primary-goal win.' }
    - { label: 'Test history depth', desc: 'Reported as the growing, searchable record of wins, losses, and inconclusive results.' }
    - { label: 'Winning variant rollout', desc: 'Tracked from declared winner to shipped change, tied to the GA4 events already in place.' }

deliverables_checklist:
    - { a: 'Hypothesis & variant scope', b: '✓' }
    - { a: 'Sample size & run time calculation', b: '✓' }
    - { a: 'Cross-device & cross-browser QA', b: '✓' }
    - { a: 'Significance & guardrail readout', b: '✓' }
    - { a: 'Documented test history entry', b: '✓' }

tools_used:
    - { label: 'VWO', icon: '&#129514;' }
    - { label: 'Optimizely', icon: '&#127919;' }
    - { label: 'GA4', icon: '&#128202;' }
    - { label: 'Google Tag Manager', icon: '&#9881;&#65039;' }
    - { label: 'Hotjar', icon: '&#128293;' }

industries:
    - { label: 'E-Commerce', url: /industries/ecommerce, icon: '&#128722;' }
    - { label: 'B2B & SaaS', url: /industries/b2b-saas, icon: '&#128188;' }
    - { label: 'Technology', url: /industries/technology, icon: '&#128187;' }
    - { label: 'Financial Services', url: /industries/financial-services, icon: '&#127974;' }

who_for:
    - { label: 'Teams running tests without a sample size calculation', icon: '&#128202;' }
    - { label: 'Sites with a testing tool installed but no real programme', icon: '&#9881;&#65039;' }
    - { label: 'E-commerce and SaaS growth teams', icon: '&#128722;' }
    - { label: 'Marketing teams wanting trustworthy test results', icon: '&#9989;' }
    - { label: 'Teams checking results daily and stopping early', icon: '&#9201;&#65039;' }

why_us:
    - { title: 'We fix tracking before we touch results', body: "Every engagement starts with the same audit we'd run on our own accounts, so the numbers you're optimizing against are actually true." }
    - { title: 'One accountable team, not siloed vendors', body: 'The same team that does this also owns the rest of your stack - no handoff, no blame-shifting between vendors.' }
    - { title: 'Built for how AI search actually works', body: 'Everything we build is structured to be extractable by AI answer engines, not just ranked in a list of blue links.' }
    - { title: 'Reporting tied to your own dashboard', body: "Every number we report ties back to GA4/GTM events you can see directly - not a screenshot from a tool you can't independently verify." }

deliverables:
    - { a: 'Test Plan', b: 'Hypothesis, variants, sample size, and minimum run time documented before launch' }
    - { a: 'Implementation', b: 'Test build and cross-browser and cross-device QA in the chosen testing platform' }
    - { a: 'Statistical Readout', b: 'Significance result plus guardrail metric check at test end' }
    - { a: 'Knowledge Base', b: 'Documented result added to a searchable test history, win or lose' }

comparison:
    headers: ['Properly Powered Test', 'Test Called Early']
    rows:
        - { a: 'Sample size is set before the test starts', b: 'The test is stopped once a number looks good' }
        - { a: 'The result holds up if the test is run again', b: 'A large share of apparent wins turn out to be noise' }
        - { a: 'Guardrail metrics are checked, not just the primary goal', b: 'A win on one metric can hide a loss somewhere else' }
    note: "Checking results daily and stopping the moment a variant pulls ahead is one of the most common ways a testing programme quietly generates false wins."

faqs:
    - { q: "What's the difference between A/B and multivariate testing?", a: "An A/B test compares two full versions of a page against each other. A multivariate test changes several elements at once and measures how they interact, which needs substantially more traffic to reach significance since it's effectively testing multiple combinations simultaneously." }
    - { q: 'How long should a test run?', a: "Long enough to hit the pre-calculated sample size and to cover at least one full weekly traffic cycle, since behaviour on a Tuesday and a Saturday can differ enough to distort an early read." }
    - { q: 'Is it ok to check results while a test is running?', a: "Checking for technical problems - broken tracking, a variant rendering incorrectly - is fine and worth doing early. Checking the conversion numbers and using them to decide whether to stop the test early is the part that undermines the statistics." }
    - { q: 'Which testing tool do you use - VWO, Optimizely, or GA4?', a: "It depends on your existing stack, traffic volume, and what you need beyond simple A/B splits - GA4's native experimentation is more limited than a dedicated platform like VWO or Optimizely, which matters more for multivariate or sequential testing." }
    - { q: 'Can you guarantee a test will produce a winning variant?', a: "No - most individual tests are inconclusive or come back negative, and that's a normal, useful outcome, not a failure. A testing programme's value comes from the accumulated, trustworthy knowledge across many tests, not from every single test winning." }

cta:
    heading: 'Already running tests but not sure you can trust the results?'
    body: "We'll review your current testing setup for sample size and stopping-rule problems before recommending anything."
    button_label: 'Talk to us'
    button_url: /contact
---
