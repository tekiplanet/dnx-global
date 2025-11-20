@extends('layouts.dashboard')

@section('title', 'New booking — Step 3 of 8 — DNX Global')

@section('page-content')
  <section class="bw-shell">
    <header class="bw-top">
      <a href="{{ url('/dashboard/booking/new/step2-session') }}" class="bw-back" aria-label="Back to step 2 (session type)"></a>
      <div class="bw-top-main">
        <div class="bw-kicker">New booking</div>
        <h2 class="bw-title">Step 3 of 8 — Package</h2>
        <p class="bw-sub">Choose a package that matches how long you need us and how much delivery you expect. You can still fine-tune coverage and add-ons later.</p>
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
        <li class="bw-step bw-step--active">
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
        <li class="bw-step">
          <span class="bw-step-index">8</span>
          <span class="bw-step-label">Confirm</span>
        </li>
      </ol>
      <div class="bw-progress-line" aria-hidden="true"></div>
    </div>

    <div class="bw-layout">
      <section class="bw-panel bw-panel--info">
        <h3 class="bw-panel-title">Which package fits this session?</h3>
        <p class="bw-panel-copy">Pick a baseline package for how long we should cover the session and what you expect to receive. You can still extend coverage and add extras in later steps.</p>
        <ul class="bw-bullets">
          <li>All packages include professional planning, on-site coverage and secure delivery via your client portal.</li>
          <li>Use this step to choose the overall level — we will refine timing, locations and add-ons next.</li>
          <li>You will see a full price breakdown before final confirmation.</li>
        </ul>
      </section>

      <section class="bw-panel bw-panel--options" aria-label="Package options">
        <div class="bw-cards">
          <button type="button" class="bw-card bw-card--service bw-card--selected" data-package="basic">
            <h4 class="bw-card-title">Basic</h4>
            <div class="bw-card-meta">Core coverage for shorter sessions such as studio portraits, small events or focused brand shoots.</div>
          </button>

          <button type="button" class="bw-card bw-card--service" data-package="premium">
            <div class="bw-card-tag">Recommended</div>
            <h4 class="bw-card-title">Premium</h4>
            <div class="bw-card-meta">Extended coverage for most weddings, corporate events and lifestyle sessions with more edited deliverables.</div>
          </button>

          <button type="button" class="bw-card bw-card--service" data-package="deluxe">
            <h4 class="bw-card-title">Deluxe</h4>
            <div class="bw-card-meta">Full‑day or multi‑segment coverage for large events and key brand moments where nothing can be missed.</div>
          </button>
        </div>

        <div class="bw-footer">
          <div class="bw-selection-hint">
            <span class="bw-selection-label">Selected:</span>
            <span class="bw-selection-value" data-selection-label>Basic</span>
          </div>
          <a href="{{ url('/dashboard/booking/new/step4-location') }}" class="bw-next-btn">Next step</a>
        </div>
      </section>
    </div>
  </section>
@endsection
