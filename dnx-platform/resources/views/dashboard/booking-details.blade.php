@extends('layouts.dashboard')

@section('title', 'Booking details — DNX Global')

@section('page-content')
  <section class="booking-detail">
    <header class="bd-head">
      <div class="bd-head-main">
        <span class="bd-label">Booking</span>
        <h2>Engagement shoot #322</h2>
        <p>Hyde Park • Sat, 23 Nov • 10:00 AM • 2h coverage</p>
      </div>
      <div class="bd-head-side">
        <span class="bd-status bd-status--active">Active</span>
        <div class="bd-amount-wrap">
          <span class="bd-amount">$640</span>
          <span class="bd-amount-note">Balance due before session</span>
        </div>
      </div>
    </header>

    <div class="bd-layout">
      <section class="bd-main-card">
        <h3 class="bd-section-title">Session overview</h3>
        <dl class="bd-grid">
          <div>
            <dt>Client</dt>
            <dd>Jane Cooper</dd>
          </div>
          <div>
            <dt>Service type</dt>
            <dd>Engagement shoot</dd>
          </div>
          <div>
            <dt>Package</dt>
            <dd>Storytelling session — 2h on location</dd>
          </div>
          <div>
            <dt>Location</dt>
            <dd>Hyde Park, London</dd>
          </div>
          <div>
            <dt>Date & time</dt>
            <dd>Sat, 23 Nov • 10:00 AM – 12:00 PM</dd>
          </div>
          <div>
            <dt>Session type</dt>
            <dd>Outdoor • Lifestyle</dd>
          </div>
        </dl>

        <h3 class="bd-section-title" style="margin-top:20px">Add-ons</h3>
        <ul class="bd-list">
          <li>Extra 20 edited images</li>
          <li>Same-day preview gallery</li>
        </ul>

        <h3 class="bd-section-title" style="margin-top:20px">Notes for the day</h3>
        <p class="bd-notes">Arrive 15 minutes early to walk through locations. Golden-hour portraits near the lake at the end of the session. Neutral outfits, warm layers recommended.</p>
      </section>

      <aside class="bd-side">
        <section class="bd-card">
          <h3 class="bd-section-title">Payment summary</h3>
          <dl class="bd-summary">
            <div>
              <dt>Package</dt>
              <dd>$520</dd>
            </div>
            <div>
              <dt>Add-ons</dt>
              <dd>$120</dd>
            </div>
            <div>
              <dt>Discount</dt>
              <dd>– $0</dd>
            </div>
            <div class="bd-summary-total">
              <dt>Total</dt>
              <dd>$640</dd>
            </div>
            <div>
              <dt>Paid</dt>
              <dd>$320 (deposit)</dd>
            </div>
            <div>
              <dt>Outstanding</dt>
              <dd>$320</dd>
            </div>
          </dl>
          <div class="bd-actions">
            <button class="btn-primary-outline bd-btn-primary">Record payment</button>
            <button class="bd-btn-ghost">Send payment link</button>
          </div>
        </section>

        <section class="bd-card">
          <h3 class="bd-section-title">Timeline</h3>
          <ol class="bd-timeline">
            <li class="done">
              <span class="dot"></span>
              <div>
                <h4>Booking created</h4>
                <p>Mon, 11 Nov • Via website form</p>
              </div>
            </li>
            <li class="done">
              <span class="dot"></span>
              <div>
                <h4>Deposit paid</h4>
                <p>Tue, 12 Nov • Card payment</p>
              </div>
            </li>
            <li class="current">
              <span class="dot"></span>
              <div>
                <h4>Session upcoming</h4>
                <p>In 5 days • Reminder email scheduled</p>
              </div>
            </li>
            <li>
              <span class="dot"></span>
              <div>
                <h4>Gallery delivery</h4>
                <p>Expected within 7 days after session</p>
              </div>
            </li>
          </ol>
        </section>
      </aside>
    </div>

    <section class="bd-footer-cta">
      <button class="bd-btn-outline">Request modification</button>
      <button class="bd-btn-danger">Cancel booking</button>
    </section>
  </section>
@endsection
