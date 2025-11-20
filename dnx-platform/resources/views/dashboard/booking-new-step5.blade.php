@extends('layouts.dashboard')

@section('title', 'New booking — Step 5 of 8 — DNX Global')

@section('page-content')
  <section class="bw-shell">
    <header class="bw-top">
      <a href="{{ url('/dashboard/booking/new/step4-location') }}" class="bw-back" aria-label="Back to step 4 (location)"></a>
      <div class="bw-top-main">
        <div class="bw-kicker">New booking</div>
        <h2 class="bw-title">Step 5 of 8 — Coverage</h2>
        <p class="bw-sub">Choose how much coverage you need for this session. You can combine hours and crew size to match the flow of your event.</p>
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
        <li class="bw-step bw-step--active">
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
        <h3 class="bw-panel-title">How much coverage do you need?</h3>
        <p class="bw-panel-copy">Pick a coverage level that matches the length and complexity of your session. You can still refine exact timing in your final review.</p>
        <ul class="bw-bullets">
          <li>Short coverage works for studio portraits, product shoots and compact events.</li>
          <li>Standard coverage suits most weddings, receptions and corporate events.</li>
          <li>Extended coverage is ideal for full-day or multi-location sessions.</li>
        </ul>
      </section>

      <section class="bw-panel bw-panel--options" aria-label="Coverage options">
        <div class="bw-cards">
          <button type="button" class="bw-card bw-card--service bw-card--selected" data-coverage="short">
            <h4 class="bw-card-title">Short coverage</h4>
            <div class="bw-card-meta">Up to 2–3 hours of coverage for focused sessions and smaller events.</div>
          </button>

          <button type="button" class="bw-card bw-card--service" data-coverage="standard">
            <div class="bw-card-tag">Most common</div>
            <h4 class="bw-card-title">Standard coverage</h4>
            <div class="bw-card-meta">Around 4–6 hours for ceremonies, receptions and core program moments.</div>
          </button>

          <button type="button" class="bw-card bw-card--service" data-coverage="extended">
            <h4 class="bw-card-title">Extended coverage</h4>
            <div class="bw-card-meta">Full-day or split coverage across multiple locations and key segments.</div>
          </button>
        </div>

        <div class="bw-footer">
          <div class="bw-selection-hint">
            <span class="bw-selection-label">Selected:</span>
            <span class="bw-selection-value" data-selection-label>Short coverage</span>
          </div>
          <a href="{{ url('/dashboard/booking/new/step6-addons') }}" class="bw-next-btn">Next step</a>
        </div>
      </section>
    </div>
  </section>
@endsection

@push('scripts')
<script>
  document.addEventListener('DOMContentLoaded', function(){
    var shell = document.querySelector('.bw-shell');
    if(!shell) return;
    var cards = shell.querySelectorAll('.bw-card--service');
    var selectionLabel = shell.querySelector('[data-selection-label]');

    cards.forEach(function(card){
      card.addEventListener('click', function(){
        cards.forEach(function(c){ c.classList.remove('bw-card--selected'); });
        card.classList.add('bw-card--selected');
        var title = card.querySelector('.bw-card-title');
        if(selectionLabel && title){ selectionLabel.textContent = title.textContent; }
      });
    });
  });
</script>
@endpush
