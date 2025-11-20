@extends('layouts.dashboard')

@section('title', 'New booking — Step 1 of 8 — DNX Global')

@section('page-content')
  <section class="bw-shell">
    <header class="bw-top">
      <a href="{{ url('/dashboard/bookings') }}" class="bw-back" aria-label="Back to bookings"></a>
      <div class="bw-top-main">
        <div class="bw-kicker">New booking</div>
        <h2 class="bw-title">Step 1 of 8 — Service type</h2>
        <p class="bw-sub">Start by choosing what you need for this session. You can refine timing, locations and add-ons in the next steps.</p>
      </div>
    </header>

    <div class="bw-progress" aria-label="Booking steps">
      <ol class="bw-steps" role="list">
        <li class="bw-step bw-step--active">
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
        <li class="bw-step">
          <span class="bw-step-index">8</span>
          <span class="bw-step-label">Confirm</span>
        </li>
      </ol>
      <div class="bw-progress-line" aria-hidden="true"></div>
    </div>

    <div class="bw-layout">
      <section class="bw-panel bw-panel--info">
        <h3 class="bw-panel-title">What do you want to book?</h3>
        <p class="bw-panel-copy">Choose the primary service for this booking. You can combine photography, videography and 360° photobooth in later steps and adjust coverage to match your event.</p>
        <ul class="bw-bullets">
          <li>Designed for weddings, corporate events, lifestyle and studio sessions.</li>
          <li>Every booking includes planning support and delivery through your client portal.</li>
          <li>You’ll confirm exact pricing before final approval.</li>
        </ul>
      </section>

      <section class="bw-panel bw-panel--options" aria-label="Service type options">
        <div class="bw-cards">
          <button type="button" class="bw-card bw-card--service bw-card--selected" data-service="photo">
            <div class="bw-card-tag">Most popular</div>
            <h4 class="bw-card-title">Photography only</h4>
            <div class="bw-card-meta">Editorial-quality stills for weddings, portraits, campaigns and events. Ideal for moments that need strong storytelling in images.</div>
          </button>

          <button type="button" class="bw-card bw-card--service" data-service="video">
            <h4 class="bw-card-title">Videography only</h4>
            <div class="bw-card-meta">Cinematic coverage with clean audio, perfect for events, launches and recaps. Great for highlight films, social clips and internal comms.</div>
          </button>

          <button type="button" class="bw-card bw-card--service" data-service="combo">
            <h4 class="bw-card-title">Photo + Video combo</h4>
            <div class="bw-card-meta">One integrated team capturing both stills and motion for full coverage. Best for weddings, large events and key brand moments.</div>
          </button>

          <button type="button" class="bw-card bw-card--service" data-service="360">
            <h4 class="bw-card-title">360° photobooth</h4>
            <div class="bw-card-meta">Immersive 360° experience with instant social-ready clips for your guests. Perfect as an add-on for modern events and launches.</div>
          </button>
        </div>

        <div class="bw-footer">
          <div class="bw-selection-hint">
            <span class="bw-selection-label">Selected:</span>
            <span class="bw-selection-value" data-selection-label>Photography only</span>
          </div>
          <a href="{{ url('/dashboard/booking/new/step2-session') }}" class="bw-next-btn">Next step</a>
        </div>
      </section>
    </div>
  </section>
@endsection
