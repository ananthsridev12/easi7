---
title: 'A/B Testing'
template: service-detail-a
eyebrow: 'A/B Testing'
headline: 'Tests run long enough and clean enough to trust'
tagline: 'Statistically sound A/B and multivariate testing programmes, not tests called early because a number looked good.'
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
problem: "<p>A test called early because the number looked good is worse than no test at all - it creates false confidence in a result that was likely noise. Teams under pressure to show wins often check a test daily and stop the moment the variant pulls ahead, without a sample size calculated in advance to say whether that lead is real or just early-run volatility.</p><p>The same problem shows up in reverse when a genuinely working variant gets killed too early because the first few days looked flat - weekly traffic patterns mean a test needs to run a full cycle before the result means anything.</p>"
solution: "<p>Run properly, A/B testing means a sample size and minimum run time calculated before launch, a result read only once both are satisfied, and guardrail metrics checked alongside the primary goal so a win on one number cannot hide a loss somewhere else.</p>"
solution_answer: "A/B testing here means running a properly powered test, with sample size calculated in advance and the result read only once significance and a full weekly traffic cycle are both reached."
approach: "<p>We calculate statistical power before a test launches, not after it's already running - that number sets both the sample size needed and the earliest date the result can be trusted. Tests run to that planned duration regardless of how the first few days look, and guardrail metrics are monitored throughout so a variant that wins on the primary goal but damages something else gets caught before rollout, not after.</p>"
capabilities:
    - { title: 'Test Design', items: ['Hypothesis definition and variant scoping', 'Minimum detectable effect setting'] }
    - { title: 'Sample Size & Power Calculation', items: ['Pre-test statistical power calculation', 'Minimum run time based on weekly traffic patterns'] }
    - { title: 'Multivariate & Sequential Testing', items: ['Multivariate test design for interacting variables', 'Correction methods for sequential testing'] }
    - { title: 'Statistical Validation', items: ['Significance testing at test end', 'Guardrail metric monitoring throughout'] }
    - { title: 'Tool Setup & QA', items: ['VWO, Optimizely, and GA4 implementation', 'Cross-device and cross-browser QA before launch'] }
deliverables:
    - { a: 'Test Plan', b: 'Hypothesis, variants, sample size, and minimum run time documented before launch' }
    - { a: 'Implementation', b: 'Test build and cross-browser and cross-device QA in the chosen testing platform' }
    - { a: 'Statistical Readout', b: 'Significance result plus guardrail metric check at test end' }
    - { a: 'Knowledge Base', b: 'Documented result added to a searchable test history, win or lose' }
process:
    - { title: 'Hypothesis & Test Design', body: 'Each test starts from a specific, evidence-backed hypothesis rather than a general idea worth trying.' }
    - { title: 'Sample Size Calculation', body: 'Statistical power sets the sample size and minimum run time before anything is built.' }
    - { title: 'Build & QA', body: 'Variants are QA-checked across devices and browsers before the test goes live.' }
    - { title: 'Launch & Monitor', body: 'The test runs to its planned duration - we track it but do not call it early because an early number looks good.' }
    - { title: 'Statistical Readout', body: 'Significance and guardrail metrics are both checked before declaring a winner.' }
    - { title: 'Documentation & Knowledge Base', body: 'The result, including inconclusive or negative ones, is documented so the next test builds on it.' }
comparison:
    headers: ['Properly Powered Test', 'Test Called Early']
    rows:
        - { a: 'Sample size is set before the test starts', b: 'The test is stopped once a number looks good' }
        - { a: 'The result holds up if the test is run again', b: 'A large share of apparent wins turn out to be noise' }
        - { a: 'Guardrail metrics are checked, not just the primary goal', b: 'A win on one metric can hide a loss somewhere else' }
    note: "Checking results daily and stopping the moment a variant pulls ahead is one of the most common ways a testing programme quietly generates false wins."
tools: ['VWO', 'Optimizely', 'GA4', 'Statistical Significance Calculators']
outcomes:
    - 'Test results hold up when re-run, instead of being one-off noise mistaken for a win'
    - 'Guardrail metrics catch a variant that wins on the primary goal but damages something else'
    - 'A searchable history of past tests prevents re-running an already-answered question'
who_needs_this:
    - { title: 'Teams running tests without a sample size calculation', body: "If a test can be stopped whenever a number looks convincing, there was never a real stopping rule in the first place." }
    - { title: 'Sites with a testing tool installed but no real programme', body: 'Having VWO or Optimizely installed is not the same as running a disciplined testing programme around it.' }
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
