@extends('layouts.dashboard')

@section('title', 'New booking — Step 7 of 8 — DNX Global')

@section('page-content')
  <section class="bw-shell">
    <header class="bw-top">
      <a href="{{ url('/dashboard/booking/new/step6-addons') }}" class="bw-back" aria-label="Back to step 6 (add-ons)"></a>
      <div class="bw-top-main">
        <div class="bw-kicker">New booking</div>
        <h2 class="bw-title">Step 7 of 8 — Review</h2>
        <p class="bw-sub">Review your selections before you proceed to confirmation and payment in the next phase.</p>
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
        <li class="bw-step bw-step--active">
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
        <h3 class="bw-panel-title">Review your booking details</h3>
        <p class="bw-panel-copy">This is a summary of the key choices youve made so far. In a full implementation, this section will be powered by live booking data.</p>
        <ul class="bw-bullets">
          <li>Service type, session type, package and coverage level.</li>
          <li>Location preference and any selected add-ons.</li>
          <li>Indicative pricing and session timing overview.</li>
        </ul>
      </section>

      <section class="bw-panel bw-panel--options" aria-label="Review summary">
        <div class="bw-cards">
          <div class="bw-card bw-card--service">
            <h4 class="bw-card-title">Booking overview</h4>
            <div class="bw-card-meta">Service, session, package, coverage and location summary placeholder.</div>
          </div>

          <div class="bw-card bw-card--service">
            <h4 class="bw-card-title">Add-ons & notes</h4>
            <div class="bw-card-meta">Any selected add-ons and key notes for the team placeholder.</div>
          </div>
        </div>

        <div class="bw-footer">
          <div class="bw-selection-hint">
            <span class="bw-selection-label">Next:</span>
            <span class="bw-selection-value" data-selection-label>Confirmation</span>
          </div>
          <a href="{{ url('/dashboard/booking/new/step8-confirmation') }}" class="bw-next-btn">Finish review</a>
        </div>
      </section>
    </div>
  </section>
@endsection

@push('scripts')
<script>
  // Placeholder for future dynamic summary behaviour.
</script>
@endpush
