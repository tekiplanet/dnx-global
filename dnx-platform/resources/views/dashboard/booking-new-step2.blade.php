@extends('layouts.dashboard')

@section('title', 'New booking — Step 2 of 8 — DNX Global')

@section('page-content')
  <section class="bw-shell">
    <header class="bw-top">
      <a href="{{ url('/dashboard/booking/new/step1-service') }}" class="bw-back" aria-label="Back to step 1 (service type')"></a>
      <div class="bw-top-main">
        <div class="bw-kicker">New booking</div>
        <h2 class="bw-title">Step 2 of 8 — Session type</h2>
        <p class="bw-sub">Choose what kind of session this is. This helps us recommend the right coverage, timing and packages in the next steps.</p>
      </div>
    </header>

    <div class="bw-progress" aria-label="Booking steps">
      <ol class="bw-steps" role="list">
        <li class="bw-step">
          <span class="bw-step-index">1</span>
          <span class="bw-step-label">Service</span>
        </li>
        <li class="bw-step bw-step--active">
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
        <li class="bw-step">
          <span class="bw-step-index">8</span>
          <span class="bw-step-label">Confirm</span>
        </li>
      </ol>
      <div class="bw-progress-line" aria-hidden="true"></div>
    </div>

    <div class="bw-layout">
      <section class="bw-panel bw-panel--info">
        <h3 class="bw-panel-title">What kind of session is this?</h3>
        <p class="bw-panel-copy">Tell us the primary context for this booking. We use this to match the right crew, planning checklist and coverage suggestions in later steps.</p>
        <ul class="bw-bullets">
          <li>Optimised presets for weddings, corporate events, lifestyle shoots and more.</li>
          <li>Each session type can be paired with any service and package in the next steps.</li>
          <li>You can refine timing, locations and add-ons after you confirm the session type.</li>
        </ul>
      </section>

      <section class="bw-panel bw-panel--options" aria-label="Session type options">
        <div class="bw-cards">
          <button type="button" class="bw-card bw-card--service bw-card--selected" data-session="wedding">
            <div class="bw-card-tag">Popular</div>
            <h4 class="bw-card-title">Wedding</h4>
            <div class="bw-card-meta">Ceremonies, receptions and pre‑wedding events with storytelling coverage for the full day.</div>
          </button>

          <button type="button" class="bw-card bw-card--service" data-session="corporate">
            <h4 class="bw-card-title">Corporate event</h4>
            <div class="bw-card-meta">Conferences, launches, offsites or brand experiences with clean, on‑brand coverage.</div>
          </button>

          <button type="button" class="bw-card bw-card--service" data-session="lifestyle">
            <h4 class="bw-card-title">Lifestyle / portrait</h4>
            <div class="bw-card-meta">Editorial, personal branding or lifestyle sessions for individuals, couples or small teams.</div>
          </button>

          <button type="button" class="bw-card bw-card--service" data-session="product">
            <h4 class="bw-card-title">Product / catalog</h4>
            <div class="bw-card-meta">Studio or on‑location shoots focused on products, menus, collections or campaigns.</div>
          </button>

          <button type="button" class="bw-card bw-card--service" data-session="studio">
            <h4 class="bw-card-title">Studio session</h4>
            <div class="bw-card-meta">Controlled lighting in the DNX Global studio for portraits, campaigns or small product sets.</div>
          </button>

          <button type="button" class="bw-card bw-card--service" data-session="outdoor">
            <h4 class="bw-card-title">Outdoor / on‑location</h4>
            <div class="bw-card-meta">Parks, city streets, venues or client locations with natural or mixed lighting.</div>
          </button>
        </div>

        <div class="bw-footer">
          <div class="bw-selection-hint">
            <span class="bw-selection-label">Selected:</span>
            <span class="bw-selection-value" data-selection-label>Wedding</span>
          </div>
          <a href="{{ url('/dashboard/booking/new/step3-package') }}" class="bw-next-btn">Next step</a>
        </div>
      </section>
    </div>
  </section>
@endsection
