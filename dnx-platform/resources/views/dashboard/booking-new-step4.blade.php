@extends('layouts.dashboard')

@section('title', 'New booking — Step 4 of 8 — DNX Global')

@section('page-content')
  <section class="bw-shell">
    <header class="bw-top">
      <a href="{{ url('/dashboard/booking/new/step3-package') }}" class="bw-back" aria-label="Back to step 3 (package)"></a>
      <div class="bw-top-main">
        <div class="bw-kicker">New booking</div>
        <h2 class="bw-title">Step 4 of 8 — Location</h2>
        <p class="bw-sub">Tell us where the session will take place so we can plan travel, timing and the right gear. You can refine exact addresses and notes next.</p>
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
        <li class="bw-step bw-step--active">
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
        <h3 class="bw-panel-title">Where will this session happen?</h3>
        <p class="bw-panel-copy">Choose whether you want to use the DNX Global studio or a custom location. Well confirm full address details and access notes in later steps.</p>
        <ul class="bw-bullets">
          <li>Studio sessions are ideal for controlled lighting, portraits and product work.</li>
          <li>On-location sessions are perfect for venues, offices, homes or outdoor spaces.</li>
          <li>You can add detailed notes about parking, access and timing after choosing a type.</li>
        </ul>
      </section>

      <section class="bw-panel bw-panel--options" aria-label="Location options">
        <div class="bw-cards">
          <button type="button" class="bw-card bw-card--service bw-card--selected" data-location="studio">
            <h4 class="bw-card-title">DNX Global studio</h4>
            <div class="bw-card-meta">Shoot in our controlled studio environment with professional lighting and backdrops.</div>
          </button>

          <button type="button" class="bw-card bw-card--service" data-location="client">
            <h4 class="bw-card-title">Client location</h4>
            <div class="bw-card-meta">Your venue, office, home or event space. Well confirm the full address and access details later.</div>
          </button>
        </div>

        <div class="bw-footer">
          <div class="bw-selection-hint">
            <span class="bw-selection-label">Selected:</span>
            <span class="bw-selection-value" data-selection-label>DNX Global studio</span>
          </div>
          <a href="{{ url('/dashboard/booking/new/step5-coverage') }}" class="bw-next-btn">Next step</a>
        </div>
      </section>
    </div>
  </section>
@endsection
