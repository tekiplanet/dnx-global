@extends('layouts.dashboard')

@section('title', 'Sessions — DNX Global')

@section('page-content')
  <section class="sessions">
    <section class="sessions-hero">
      <div class="sessions-hero-inner">
        <div class="sessions-hero-main">
          <div class="sessions-kicker">Plan intake</div>
          <h2>Book a free, no-strings-attached virtual consultation</h2>
          <p>Every collaboration starts with a free consultation to get to know each other a little better. This is completely non-binding &mdash; it's just to see if we're a good fit for your project.</p>
          <p>During the intake we'll explore your vision, timeline and budget, and walk through any questions you might have. If everything feels right, we'll outline a tailored proposal for your session.</p>
          <p class="sessions-signoff">Love, the DNX Global team</p>
        </div>

        <div class="sessions-hero-photo" aria-hidden="true">
          <div class="sessions-photo-frame">
            <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?q=80&amp;w=900&amp;auto=format&amp;fit=crop" alt="Portrait of a photographer in a studio setting">
          </div>
        </div>
      </div>
    </section>

    <section class="sessions-scheduler" aria-label="Schedule a consultation">
      <header class="sched-head">
        <p class="sched-kicker">Schedule your free consultation</p>
        <h3>Pick a day and time that works for you</h3>
        <p class="sched-copy">Use the calendar to select a day, then choose from the available time slots. In the full application, these options will be powered by your real availability and timezone.</p>
      </header>

      <div class="sched-grid">
        <div class="sched-card" aria-label="Choose a date">
          <div class="sched-month">
            <span class="sched-month-label">July 2024</span>
            <div class="sched-month-controls">
              <button type="button" class="month-btn" aria-label="Previous month">&#8249;</button>
              <button type="button" class="month-btn" aria-label="Next month">&#8250;</button>
            </div>
          </div>
          <div class="sched-weekdays" aria-hidden="true">
            <span>Mon</span>
            <span>Tue</span>
            <span>Wed</span>
            <span>Thu</span>
            <span>Fri</span>
            <span>Sat</span>
            <span>Sun</span>
          </div>
          <div class="sched-days">
            <button type="button" class="sched-day sched-day--muted" disabled>29</button>
            <button type="button" class="sched-day sched-day--muted" disabled>30</button>
            <button type="button" class="sched-day sched-day--muted" disabled>31</button>
            <button type="button" class="sched-day">1</button>
            <button type="button" class="sched-day">2</button>
            <button type="button" class="sched-day">3</button>
            <button type="button" class="sched-day">4</button>
            <button type="button" class="sched-day">5</button>
            <button type="button" class="sched-day">6</button>
            <button type="button" class="sched-day">7</button>
            <button type="button" class="sched-day">8</button>
            <button type="button" class="sched-day">9</button>
            <button type="button" class="sched-day">10</button>
            <button type="button" class="sched-day">11</button>
            <button type="button" class="sched-day">12</button>
            <button type="button" class="sched-day">13</button>
            <button type="button" class="sched-day sched-day--today">14</button>
            <button type="button" class="sched-day sched-day--available">15</button>
            <button type="button" class="sched-day sched-day--available">16</button>
            <button type="button" class="sched-day sched-day--available">17</button>
            <button type="button" class="sched-day">18</button>
            <button type="button" class="sched-day">19</button>
            <button type="button" class="sched-day">20</button>
            <button type="button" class="sched-day">21</button>
            <button type="button" class="sched-day">22</button>
            <button type="button" class="sched-day">23</button>
            <button type="button" class="sched-day">24</button>
            <button type="button" class="sched-day">25</button>
            <button type="button" class="sched-day">26</button>
            <button type="button" class="sched-day">27</button>
            <button type="button" class="sched-day">28</button>
          </div>
        </div>

        <div class="sched-card sched-slots" aria-label="Choose a time">
          <div class="slots-head">
            <div class="slots-date">Mon 22 July</div>
            <div class="slots-range">12 hour — Local time</div>
          </div>
          <div class="slots-grid">
            <button type="button" class="slot slot--selected">3:30pm</button>
            <button type="button" class="slot">4:00pm</button>
            <button type="button" class="slot">4:30pm</button>
            <button type="button" class="slot">5:00pm</button>
          </div>
          <p class="slots-note">Once you confirm your consultation, you'll receive an email with all details and a link to your client portal. From there you can manage bookings, sessions and final deliveries.</p>
        </div>
      </div>
    </section>

    <section class="sessions-list">
      <div class="sessions-list-head">
        <div class="section-head">
          <h3 class="section-title">Recent sessions</h3>
          <a href="#" class="view-link">View all sessions</a>
        </div>
        <div class="sessions-toolbar">
          <div class="sessions-filters" aria-label="Filter sessions">
            <button type="button" class="sessions-filter sessions-filter--active" data-filter="all">All</button>
            <button type="button" class="sessions-filter" data-filter="available">Downloads available</button>
            <button type="button" class="sessions-filter" data-filter="expired">Expired</button>
          </div>
          <label class="sessions-sort" aria-label="Sort sessions">
            <span>Sort by</span>
            <select class="sessions-sort-select">
              <option value="recent">Most recent</option>
              <option value="oldest">Oldest first</option>
            </select>
          </label>
        </div>
      </div>

      <div class="dl-grid sessions-grid">
        <article class="dl-card sessions-card" data-download-status="available" data-session-date="2024-07-18">
          <div class="dl-media"><img src="https://images.unsplash.com/photo-1526170375885-4d8ecf77b99f?q=80&amp;w=900&amp;auto=format&amp;fit=crop" alt="Completed lifestyle session"></div>
          <div class="dl-body">
            <div>
              <h4>Lifestyle session &mdash; City centre</h4>
              <div class="dl-meta">Completed &mdash; 18 Jul 2024 &mdash; Downloads available for 21 days</div>
            </div>
          </div>
          <div class="sessions-meta-row">
            <span class="sessions-status sessions-status--available">Downloads available</span>
            <span class="sessions-expiry">Expires in 21 days</span>
          </div>
          <div class="sessions-actions">
            <a href="{{ url('/dashboard/sessions/801/gallery') }}" class="sessions-btn sessions-btn--primary">View gallery</a>
            <a href="{{ url('/dashboard/sessions/801/download') }}" class="sessions-btn sessions-btn--ghost">Download files</a>
          </div>
        </article>

        <article class="dl-card sessions-card" data-download-status="available" data-session-date="2024-07-09">
          <div class="dl-media"><img src="https://images.unsplash.com/photo-1529354100300-681b6f3f0cde?q=80&amp;w=900&amp;auto=format&amp;fit=crop" alt="Studio portrait session"></div>
          <div class="dl-body">
            <div>
              <h4>Studio portraits &mdash; Studio A</h4>
              <div class="dl-meta">Completed &mdash; 09 Jul 2024 &mdash; All files delivered</div>
            </div>
          </div>
          <div class="sessions-meta-row">
            <span class="sessions-status sessions-status--available">All files delivered</span>
            <span class="sessions-expiry">No expiry</span>
          </div>
          <div class="sessions-actions">
            <a href="{{ url('/dashboard/sessions/802/gallery') }}" class="sessions-btn sessions-btn--primary">View gallery</a>
            <a href="{{ url('/dashboard/sessions/802/download') }}" class="sessions-btn sessions-btn--ghost">Download files</a>
          </div>
        </article>

        <article class="dl-card sessions-card" data-download-status="expired" data-session-date="2024-06-24">
          <div class="dl-media"><img src="https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?q=80&amp;w=900&amp;auto=format&amp;fit=crop" alt="Brand campaign session"></div>
          <div class="dl-body">
            <div>
              <h4>Brand campaign &mdash; Studio &amp; on-location</h4>
              <div class="dl-meta">Completed &mdash; 24 Jun 2024 &mdash; Downloads expired</div>
            </div>
          </div>
          <div class="sessions-meta-row">
            <span class="sessions-status sessions-status--expired">Downloads expired</span>
            <span class="sessions-expiry">Request re-upload</span>
          </div>
          <div class="sessions-actions">
            <a href="{{ url('/dashboard/sessions/803/gallery') }}" class="sessions-btn sessions-btn--primary">View gallery</a>
            <a href="{{ url('/dashboard/sessions/803/download') }}" class="sessions-btn sessions-btn--ghost">Download files</a>
          </div>
        </article>
      </div>
    </section>
  </section>
@endsection
