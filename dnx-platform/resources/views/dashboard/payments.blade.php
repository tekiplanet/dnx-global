@extends('layouts.dashboard')

@section('title', 'Payments — DNX Global')

@section('page-content')
  <section class="payments">
    <div class="payments-bg">
      <div class="payments-head">
        <div>
          <div class="payments-kicker">Payments &amp; invoices</div>
          <h2 class="payments-title">Settle your session balance</h2>
          <p class="payments-sub">Review a recent booking, confirm the amount due and complete payment securely right inside your dashboard.</p>
        </div>
        <div class="payments-pill">
          <span>Outstanding balance</span>
          <strong>$773.40</strong>
        </div>
      </div>
    </div>

    <div class="payments-overlay">
      <article class="pay-shell" role="dialog" aria-modal="true" aria-label="Payment">
        <header class="pay-head">
          <h2 class="pay-title">Payment</h2>
          <button type="button" class="pay-close" aria-label="Close payment"></button>
        </header>

        <div class="pay-body">
          <section class="pay-col pay-col--details" aria-label="Customer and transaction details">
            <div class="pay-customer">
              <div class="pay-avatar">EG</div>
              <div class="pay-customer-main">
                <div class="pay-customer-name">Emmanuel Godwin</div>
                <div class="pay-customer-sub">Brand campaign &mdash; Studio &amp; on-location</div>
              </div>
              <div class="pay-customer-meta">
                <span>Invoice #INV-2081</span>
                <span>Wed, 18 Jul 2024 &bull; 16:45</span>
              </div>
            </div>

            <div class="pay-section">
              <h3 class="pay-subtitle">Transaction details</h3>
              <ul class="pay-items">
                <li class="pay-item">
                  <div class="pay-item-main">
                    <span class="label">Lifestyle session &mdash; City centre</span>
                    <span class="meta">Package · 3 hour coverage</span>
                  </div>
                  <div class="pay-item-meta">
                    <span class="qty">1x</span>
                    <span class="amount">$420.00</span>
                  </div>
                </li>
                <li class="pay-item">
                  <div class="pay-item-main">
                    <span class="label">Studio portraits &mdash; Studio A</span>
                    <span class="meta">Add-on session</span>
                  </div>
                  <div class="pay-item-meta">
                    <span class="qty">1x</span>
                    <span class="amount">$189.00</span>
                  </div>
                </li>
                <li class="pay-item">
                  <div class="pay-item-main">
                    <span class="label">Highlight reel</span>
                    <span class="meta">Video edit · 60s social cut</span>
                  </div>
                  <div class="pay-item-meta">
                    <span class="qty">1x</span>
                    <span class="amount">$129.00</span>
                  </div>
                </li>
              </ul>

              <div class="pay-summary">
                <div class="row"><span>Items (3)</span><span>$738.00</span></div>
                <div class="row"><span>Tax (5%)</span><span>$36.90</span></div>
                <div class="row total"><span>Total due</span><span>$774.90</span></div>
              </div>
            </div>
          </section>

          <section class="pay-col pay-col--payment" aria-label="Payment amount and method">
            <div class="pay-method-row">
              <div class="pay-method-label">Select a payment method</div>
              <button type="button" class="pay-method-select" aria-haspopup="listbox" aria-expanded="false">
                <span class="pay-method-current">Card ending · 2084</span>
                <span class="pay-method-chevron" aria-hidden="true"></span>
              </button>
            </div>

            <div class="pay-amount-wrap">
              <div class="pay-amount-label">Amount to pay</div>
              <div class="pay-amount-display" data-pay-total="774.90">
                <span class="currency">USD</span>
                <span class="pay-amount" data-pay-amount>$774.90</span>
              </div>
              <p class="pay-amount-remaining" data-pay-remaining>Remaining after payment: $0.00</p>
            </div>

            <div class="pay-chip-row" aria-label="Quick amount presets">
              <button type="button" class="pay-chip" data-pay-chip="100">$100</button>
              <button type="button" class="pay-chip" data-pay-chip="250">$250</button>
              <button type="button" class="pay-chip" data-pay-chip="500">$500</button>
              <button type="button" class="pay-chip" data-pay-chip="775">Full amount</button>
            </div>

            <div class="pay-keypad" aria-label="Amount keypad">
              <button type="button" data-pay-key="1">1</button>
              <button type="button" data-pay-key="2">2</button>
              <button type="button" data-pay-key="3">3</button>
              <button type="button" data-pay-key="4">4</button>
              <button type="button" data-pay-key="5">5</button>
              <button type="button" data-pay-key="6">6</button>
              <button type="button" data-pay-key="7">7</button>
              <button type="button" data-pay-key="8">8</button>
              <button type="button" data-pay-key="9">9</button>
              <button type="button" data-pay-key="C">C</button>
              <button type="button" data-pay-key="0">0</button>
              <button type="button" data-pay-key=".">.</button>
            </div>

            <button type="button" class="pay-submit">Pay now</button>
            <p class="pay-status" data-pay-status aria-live="polite"></p>
            <p class="pay-footnote">Demo only &mdash; in the full platform this will use your saved payment method to process a secure transaction.</p>
          </section>
        </div>
      </article>
    </div>
  </section>
@endsection
