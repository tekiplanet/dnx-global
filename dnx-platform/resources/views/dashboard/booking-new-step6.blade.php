@extends('layouts.dashboard')

@section('title', 'New booking — Step 6 of 8 — DNX Global')

@section('page-content')
  <section class="bw-shell">
    <header class="bw-top">
      <a href="{{ url('/dashboard/booking/new/step5-coverage') }}" class="bw-back" aria-label="Back to step 5 (coverage)"></a>
      <div class="bw-top-main">
        <div class="bw-kicker">New booking</div>
        <h2 class="bw-title">Step 6 of 8 — Add-ons</h2>
        <p class="bw-sub">Fine-tune your booking with optional add-ons like drone coverage, extra crew or express delivery.</p>
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
        <li class="bw-step bw-step--active">
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
        <h3 class="bw-panel-title">Would you like to add anything extra?</h3>
        <p class="bw-panel-copy">Select any optional add-ons that would make this session even more complete. You can always discuss final details with the team after booking.</p>
        <ul class="bw-bullets">
          <li>Add-ons are billed on top of your selected package and coverage.</li>
          <li>You can combine multiple options, such as an extra shooter and express delivery.</li>
          <li>All add-ons will appear clearly in your final review before you confirm.</li>
        </ul>
      </section>

      <section class="bw-panel bw-panel--options" aria-label="Add-on options">
        <div class="bw-cards">
          <button type="button" class="bw-card bw-card--service" data-addon="drone">
            <h4 class="bw-card-title">Drone coverage</h4>
            <div class="bw-card-meta">Aerial angles for venues, crowd shots and cinematic establishing views.</div>
          </button>

          <button type="button" class="bw-card bw-card--service" data-addon="second-shooter">
            <h4 class="bw-card-title">Second shooter</h4>
            <div class="bw-card-meta">Extra photographer or videographer to cover multiple angles and parallel moments.</div>
          </button>

          <button type="button" class="bw-card bw-card--service" data-addon="express">
            <h4 class="bw-card-title">Express delivery</h4>
            <div class="bw-card-meta">Faster turnaround for selects and highlight edits after your session.</div>
          </button>

          <button type="button" class="bw-card bw-card--service" data-addon="makeup">
            <h4 class="bw-card-title">Makeup artist</h4>
            <div class="bw-card-meta">On-site makeup support for portraits, campaigns and special events.</div>
          </button>

          <button type="button" class="bw-card bw-card--service" data-addon="album">
            <h4 class="bw-card-title">Album & prints</h4>
            <div class="bw-card-meta">Curated photo album and premium prints to showcase your favourite moments.</div>
          </button>
        </div>

        <div class="bw-footer">
          <div class="bw-selection-hint">
            <span class="bw-selection-label">Selected:</span>
            <span class="bw-selection-value" data-selection-label>None yet</span>
          </div>
          <a href="{{ url('/dashboard/booking/new/step7-review') }}" class="bw-next-btn">Next step</a>
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
        var title = card.querySelector('.bw-card-title');
        if(selectionLabel && title){ selectionLabel.textContent = title.textContent; }
        card.classList.toggle('bw-card--selected');
      });
    });
  });
</script>
@endpush
