---
title: 'Personal Finance'
template: app-detail
eyebrow: 'Personal Finance'
headline: 'Every part of your money, tracked in one system you actually own'
tagline: 'A self-hosted finance app built for how Indian money actually moves - SIPs, family lending, EMIs, and rent - with an AI receipt scanner that turns a photo into a logged transaction.'
tools: ['AI Receipt Scanner', 'Budgeting & Alerts', 'Net Worth', 'Credit Cards & EMIs', 'Loans', 'Lending & Borrowing', 'Investments & SIP', 'Rental Management', 'Bank CSV Import']
metadata:
    description: 'A self-hosted personal finance app with an AI receipt scanner, India-first tracking (SIPs, family lending, EMIs), budgets, credit cards, loans, rentals, and automated reports.'
sitemap:
    changefreq: monthly
    priority: !!float 0.5
---

<p>Most finance apps we tried were built for someone else's financial life. They were either too generic to be useful, too India-agnostic to handle SIPs, family lending, or fuel surcharge on credit cards, locked behind a subscription, or storing our data on someone else's server. So we built our own - self-hosted, India-first, and free to run.</p>

<h2>What It Is</h2>

<p>Personal Finance is a self-hosted PHP web app that runs on ordinary shared cPanel hosting. It's mobile-first, installs as a Progressive Web App straight to a home screen, sits behind a PIN lock, and keeps every record in a private MySQL database - no cloud sync, no third-party storage, no vendor deciding what happens to the data next.</p>

<p>The stack is deliberately plain: vanilla PHP 8 with no framework, PDO for MySQL, zero npm dependencies, pure CSS, and a custom SMTP mailer with no external library. Nothing here depends on a service that could raise its price or shut down.</p>

<h2>AI Receipt Scanner</h2>

<p>The fastest way to lose the habit of tracking spending is friction at the point of purchase. The AI Receipt Scanner removes almost all of it: photograph or upload a receipt, and the AI reads the image directly - date, total amount, merchant name, and individual line items - then pre-fills the transaction form. Review it, adjust anything that needs it, and save. What used to be a minute of manual typing per purchase becomes a five-second confirmation.</p>

<p>It's built to handle the messiness of real receipts - faded thermal paper, angled photos, handwritten totals - and it errs on the side of asking for a quick review rather than silently guessing wrong. Nothing posts to an account until it's confirmed, so a misread merchant name or total never quietly corrupts the ledger.</p>

<h3>More AI, Working Quietly in the Background</h3>

<ul>
<li><strong>Category suggestions.</strong> Based on merchant name and past entries, the app suggests a category and subcategory for new transactions instead of leaving every field blank.</li>
<li><strong>Narrative daily summaries.</strong> The automated daily spending email doesn't just dump numbers - it includes a short, plain-language summary of where yesterday's money went, not just a category table.</li>
<li><strong>Merchant normalisation.</strong> Receipt and CSV-import merchant names get cleaned up automatically, so "SWIGGY*BLR0123" and "Swiggy Bangalore" don't end up as two different entities in the spending breakdown.</li>
</ul>

<h2>Accounts &amp; Net Worth</h2>

<ul>
<li>Multiple account types - savings, current, credit cards, cash, wallet - plus fully custom types you define yourself</li>
<li>Live balances computed from the actual transaction history, not a stored number that quietly drifts out of sync</li>
<li>Dashboard summary tiles showing total assets, liabilities, and net position at a glance</li>
</ul>

<h2>Transactions</h2>

<ul>
<li>Add income, expense, or transfers between accounts in seconds, with a quick-add widget right on the dashboard</li>
<li>Every transaction attaches to a contact, category, subcategory, and payment method</li>
<li>Transfers auto-name themselves with the real account ("Transfer to HDFC Savings," not "Transfer to account #3")</li>
<li>One filterable list across every account, plus a calendar view with per-day drill-down</li>
</ul>

<h2>Analytics &amp; Budgets</h2>

<p>Spending breaks down by category and subcategory, with a 12-month income-vs-expense trend, account-wise spending, day-of-week patterns, and a daily expense heat chart. Everything can be filtered by date range, category, subcategory, or purchase source. Categories like internal transfers or refunds can be flagged out of analytics entirely, and the app distinguishes real earnings - salary, freelance income - from pass-through money that isn't actually yours to spend.</p>

<p>Budgets are set at the category or subcategory level, with visual progress bars and automated email alerts at 80% and again at 100% of a budget - each firing at most once per month, so it warns without becoming noise.</p>

<h2>Credit Cards &amp; Loans</h2>

<p>Credit cards track billing cycle, due date, credit limit, and fuel surcharge rate, with the outstanding balance calculated live from real transactions instead of manually re-entered each month. Statement snapshots, EMI plans, a 30-day upcoming EMI schedule on the dashboard, and an automated email three days before each due date round it out.</p>

<p>Loans - home, vehicle, personal, or anything else - get a full EMI schedule with pay-off tracking, the ability to record prior payments when migrating an existing loan, and the option to link a loan directly to a lending record for the case where you borrowed money and re-lent it to someone else.</p>

<h2>Lending, Borrowing &amp; Investments</h2>

<p>Money lent to contacts and money borrowed from contacts are tracked separately, each with partial repayment history and optional automatic email notifications to the contact when a repayment is recorded - a small feature that matters a lot for the very Indian pattern of informal family lending.</p>

<p>On the investment side, a portfolio of mutual funds, stocks, FDs, or anything else supports buy/sell transactions per holding, a portfolio summary of invested amount, current value, and gain or loss, and SIP schedules with upcoming installment reminders.</p>

<h2>Rental Management</h2>

<p>On the landlord side: track properties, tenants, and contracts with rent amount and dates, record rent, maintenance, and other payments, and send email receipts to tenants automatically on payment. On the tenant side: track the home you live in, with advance, monthly rent, maintenance, electricity, and deposit-refund payments recorded against a full expense history per property.</p>

<h2>Recurring Transactions &amp; Bank Import</h2>

<p>Recurring transactions are template-based - name, amount, account, category, and frequency, with monthly items pinnable to a specific day of the month. When one comes due, it lands in an approval queue rather than posting itself automatically, so you review, edit, or skip a cycle without ever losing the schedule or getting a surprise entry.</p>

<p>Bank statement CSV imports work the same way: upload a file, the parser maps columns to transaction fields, and every row goes into a staging queue for individual approval. Nothing is auto-committed.</p>

<h2>Reminders, Notes &amp; Reports</h2>

<p>A simple reminder system flags upcoming payments and due dates, and a built-in notepad holds financial notes and plans without needing a separate app. On-demand email reports cover any date range, and an automated daily report goes out by cron with yesterday's totals and category breakdown.</p>

<h2>Automation</h2>

<p>Two cron jobs keep the app running itself: a daily report at 8 AM emailing yesterday's spending summary by category, and an alerts job at 9 AM that checks every budget category and every credit card due date, sending warnings before thresholds are breached. A deduplication log ensures each alert fires exactly once per cycle - no repeat spam if the job runs more than expected.</p>

<h2>Security</h2>

<p>The entire app sits behind a PIN lock with a configurable session timeout, and every record lives on our own server and database - no cloud sync, no third-party storage, nothing leaving our control.</p>

<h2>Why Self-Hosted</h2>

<ul>
<li><strong>Privacy</strong> - financial data stays on our own server, not someone else's cloud</li>
<li><strong>Cost</strong> - shared cPanel hosting runs about &#8377;1,000/year, with no subscription on top</li>
<li><strong>Control</strong> - features get shaped around real Indian financial patterns (SIPs, fuel surcharge, family lending) instead of waiting on a vendor's roadmap</li>
<li><strong>No lock-in</strong> - it's plain PHP and MySQL, portable to any host that runs both</li>
</ul>

<h2>What's Next</h2>

<p>On the roadmap: a net-worth tracker over time, an investment return calculator, WhatsApp alerts alongside email, and multi-currency support.</p>

<p><a href="/contact">Get in touch</a> if you'd like to hear more about how it works or where it's headed.</p>
