@extends('layouts.dashboard')

@section('title', 'New booking — Step 8 of 8 — DNX Global')

@section('page-content')
  <section class="bw-shell">
    <header class="bw-top">
      <a href="{{ url('/dashboard/booking/new/step7-review') }}" class="bw-back" aria-label="Back to step 7 (review)"></a>
      <div class="bw-top-main">
        <div class="bw-kicker">New booking</div>
        <h2 class="bw-title">Step 8 of 8 — Confirmation</h2>
        <p class="bw-sub">Your booking details are ready to be confirmed. This screen represents the final confirmation state for the booking flow.</p>
      </div>
    </header>

    <div class="bw-progress" aria-label="Booking steps">
      <ol class="bw-steps" role="list">
        <li class="bw-step">
          <span class="bw-step-index">1</span>
          <span class="bw-step-label">Service</span>
        </li>
        <li class="bw-step">
          <span class="bw-step-index">2</span>
          <span class="bw-step-label">Session</span>
        </li>
        <li class="bw-step">
          <span class="bw-step-index">3</span>
          <span class="bw-step-label">Schedule</span>
        </li>
        <li class="bw-step">
          <span class="bw-step-index">4</span>
          <span class="bw-step-label">Location</span>
        </li>
        <li class="bw-step">
          <span class="bw-step-index">5</span>
          <span class="bw-step-label">Coverage</span>
        </li>
        <li class="bw-step">
          <span class="bw-step-index">6</span>
          <span class="bw-step-label">Add-ons</span>
        </li>
        <li class="bw-step">
          <span class="bw-step-index">7</span>
          <span class="bw-step-label">Review</span>
        </li>
        <li class="bw-step bw-step--active">
          <span class="bw-step-index">8</span>
          <span class="bw-step-label">Confirm</span>
        </li>
      </ol>
      <div class="bw-progress-line" aria-hidden="true"></div>
    </div>

    <div class="bw-layout">
      <section class="bw-panel bw-panel--info">
        <h3 class="bw-panel-title">Booking confirmed (UI state)</h3>
        <p class="bw-panel-copy">In the full application, this step will show a live confirmation message, booking reference and next steps. For now, it serves as the final step of the design flow.</p>
        <ul class="bw-bullets">
          <li>Display a clear success message and booking reference ID.</li>
          <li>Show a concise summary: date, time, service, session type and location.</li>
          <li>Explain what happens next and how the client can access their portal.</li>
        </ul>
      </section>

      <section class="bw-panel bw-panel--options" aria-label="Confirmation actions">
        <div class="bw-cards">
          <div class="bw-card bw-card--service bw-card--selected">
            <h4 class="bw-card-title">Thank you — booking created</h4>
            <div class="bw-card-meta">Use this screen to confirm the booking has been created successfully and to direct the client to view all their bookings or open the new booking details.</div>
          </div>
        </div>

        <div class="bw-footer">
          <div class="bw-selection-hint">
            <span class="bw-selection-label">Next:</span>
            <span class="bw-selection-value" data-selection-label>Go to bookings overview</span>
          </div>
          <a href="{{ url('/dashboard/bookings') }}" class="bw-next-btn">Back to bookings</a>
        </div>
      </section>
    </div>
  </section>
@endsection
