@extends('layouts.dashboard')

@section('title', 'Invoice details — DNX Global')

@section('page-content')
  <section class="invoice-shell">
    <header class="invoice-head">
      <div class="invoice-head-left">
        <div class="invoice-brand-mark">DG</div>
        <div class="invoice-brand-copy">
          <div class="invoice-brand-name">DNX Global</div>
          <div class="invoice-brand-sub">Photography &amp; Videography Studio</div>
          <div class="invoice-brand-meta">
            <span>Office 14, Creative Hub</span>
            <span>South Mountain, YK</span>
            <span>+234 (0) 812 345 6789</span>
          </div>
        </div>
      </div>
      <div class="invoice-head-right">
        <div class="invoice-label">Invoice</div>
        <div class="invoice-id">INV-2081</div>
        <div class="invoice-date-row">
          <span>Date</span>
          <span>18 Jul 2024</span>
        </div>
      </div>
    </header>

    <section class="invoice-meta">
      <div class="invoice-meta-block">
        <h3 class="invoice-meta-title">Bill from</h3>
        <p class="invoice-meta-name">DNX Global Studio</p>
        <p class="invoice-meta-line">Office 14, Creative Hub</p>
        <p class="invoice-meta-line">South Mountain, YK</p>
        <p class="invoice-meta-line">invoices@dnx.global</p>
      </div>
      <div class="invoice-meta-block">
        <h3 class="invoice-meta-title">Bill to</h3>
        <p class="invoice-meta-name">Emmanuel Godwin</p>
        <p class="invoice-meta-line">Brand campaign &mdash; Studio &amp; on-location</p>
        <p class="invoice-meta-line">emmanuel@example.com</p>
      </div>
      <div class="invoice-meta-block invoice-meta-block--compact">
        <div class="invoice-pill">
          <span>Status</span>
          <strong>Paid (demo)</strong>
        </div>
        <p class="invoice-meta-line">Due date: 25 Jul 2024</p>
      </div>
    </section>

    <section class="invoice-table" aria-label="Invoice line items">
      <header class="invoice-table-head">
        <span class="col-desc">Items description</span>
        <span class="col-unit">Unit price</span>
        <span class="col-qty">Qty</span>
        <span class="col-total">Total</span>
      </header>
      <div class="invoice-table-body">
        <article class="invoice-row">
          <div class="col-desc">
            <div class="label">Lifestyle session &mdash; City centre</div>
            <div class="sub">Package &middot; 3 hour coverage</div>
          </div>
          <div class="col-unit">$420.00</div>
          <div class="col-qty">1</div>
          <div class="col-total">$420.00</div>
        </article>
        <article class="invoice-row">
          <div class="col-desc">
            <div class="label">Studio portraits &mdash; Studio A</div>
            <div class="sub">Add-on session</div>
          </div>
          <div class="col-unit">$189.00</div>
          <div class="col-qty">1</div>
          <div class="col-total">$189.00</div>
        </article>
        <article class="invoice-row">
          <div class="col-desc">
            <div class="label">Highlight reel</div>
            <div class="sub">Video edit &middot; 60s social cut</div>
          </div>
          <div class="col-unit">$129.00</div>
          <div class="col-qty">1</div>
          <div class="col-total">$129.00</div>
        </article>
      </div>
    </section>

    <section class="invoice-bottom">
      <div class="invoice-note">
        <h3 class="invoice-note-title">Note</h3>
        <p class="invoice-note-copy">This invoice is a preview for DNX Global. In the full platform you&apos;ll be able to download a PDF version, print it, and see a complete payment history for this booking.</p>
      </div>
      <aside class="invoice-summary" aria-label="Totals">
        <dl class="invoice-summary-list">
          <div class="row"><dt>Subtotal</dt><dd>$738.00</dd></div>
          <div class="row"><dt>Tax VAT 5%</dt><dd>$36.90</dd></div>
          <div class="row"><dt>Discount</dt><dd>$0.00</dd></div>
          <div class="row row-total"><dt>Total due</dt><dd>$774.90</dd></div>
        </dl>
        <div class="invoice-summary-actions">
          <button type="button" class="invoice-btn invoice-btn-outline">Download PDF</button>
          <button type="button" class="invoice-btn invoice-btn-ghost">Print invoice</button>
        </div>
      </aside>
    </section>

    <footer class="invoice-footer">
      <div class="invoice-footer-col">
        <h4>Thank you for your business</h4>
        <p>We appreciate you trusting DNX Global with your photography and videography projects.</p>
      </div>
      <div class="invoice-footer-col">
        <h5>Questions?</h5>
        <p>Email invoices@dnx.global · +234 (0) 812 345 6789</p>
      </div>
      <div class="invoice-footer-col">
        <h5>Payment info</h5>
        <p>Card ending 2084 &middot; Processed securely via DNX Pay (demo).</p>
      </div>
    </footer>
  </section>
@endsection
