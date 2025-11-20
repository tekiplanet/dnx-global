@extends('layouts.dashboard')

@section('title', 'Dashboard — DNX Global')

@section('page-content')
  <section class="d-hero">
    <h2>Welcome back, Emmanuel!</h2>
    <p>Ready to continue your creative journey? Here’s a quick snapshot.</p>
    <div class="mini-kpis">
      <div class="mini mini--blue">
        <div class="left">
          <div class="ic">
            <svg viewBox="0 0 24 24"><path d="M3 12l9-9 9 9"/><path d="M9 21V9h6v12"/></svg>
          </div>
          <div class="txt"><span class="k">Total bookings</span><span class="v">12</span></div>
        </div>
      </div>
      <div class="mini mini--green">
        <div class="left">
          <div class="ic">
            <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M12 7v6l4 2"/></svg>
          </div>
          <div class="txt"><span class="k">Upcoming sessions</span><span class="v">3</span></div>
        </div>
      </div>
    </div>
  </section>

  <div class="kpi-grid">
    <div class="kpi kpi--purple">
      <div class="ic"><svg viewBox="0 0 24 24"><path d="M4 19h16"/><path d="M7 19V9"/><path d="M12 19V5"/><path d="M17 19v-7"/></svg></div>
      <div class="txt"><span class="k">Completed projects</span><span class="v">24</span></div>
    </div>
    <div class="kpi kpi--yellow">
      <div class="ic"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div>
      <div class="txt"><span class="k">Hours booked</span><span class="v">68h</span></div>
    </div>
    <div class="kpi kpi--blue">
      <div class="ic"><svg viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="14" rx="3"/><path d="M3 7l9 6 9-6"/></svg></div>
      <div class="txt"><span class="k">Unread messages</span><span class="v">4</span></div>
    </div>
  </div>

  <div class="grid-12">
    <div>
      <div class="d-card d-card--upcoming">
        <div class="section-head">
          <h3 class="section-title">Upcoming bookings</h3>
          <a href="#" class="view-link">View all</a>
        </div>
        <div class="dl-grid">
          <article class="dl-card">
            <div class="dl-media"><img src="https://images.unsplash.com/photo-1515378791036-0648a3ef77b2?q=80&w=800&auto=format&fit=crop" alt="Engagement shoot"></div>
            <div class="dl-body">
              <div>
                <h4>Engagement shoot</h4>
                <div class="dl-meta">Sat, 23 Nov · 10:00 AM · Hyde Park</div>
              </div>
            </div>
          </article>
          <article class="dl-card">
            <div class="dl-media"><img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?q=80&w=800&auto=format&fit=crop" alt="Portrait session"></div>
            <div class="dl-body">
              <div>
                <h4>Portrait session</h4>
                <div class="dl-meta">Tue, 26 Nov · 2:00 PM · Studio A</div>
              </div>
            </div>
          </article>
          <article class="dl-card">
            <div class="dl-media"><img src="https://images.unsplash.com/photo-1515378791036-0648a3ef77b2?q=80&w=800&auto=format&fit=crop" alt="Product shoot"></div>
            <div class="dl-body">
              <div>
                <h4>Product shoot</h4>
                <div class="dl-meta">Fri, 29 Nov · 11:30 AM · Client HQ</div>
              </div>
            </div>
          </article>
        </div>
      </div>
    </div>

    <aside>
      <div class="d-card d-card--quick">
        <h3>Quick actions</h3>
        <div class="chips" style="margin-top:8px">
          <button class="chip">Create booking</button>
          <button class="chip">Upload media</button>
          <button class="chip">View payments</button>
        </div>
      </div>

      <div class="d-card d-card--activity">
        <div class="section-head">
          <h3 class="section-title">Recent activity</h3>
          <a href="#" class="view-link">View all</a>
        </div>
        <ul class="pw-req">
          <li class="ok"><span class="ic">•</span><span>Booking #1243 confirmed by client</span></li>
          <li class="ok"><span class="ic">•</span><span>New message from Jane Cooper</span></li>
          <li class="ok"><span class="ic">•</span><span>Invoice #552 paid</span></li>
        </ul>
      </div>
    </aside>
  </div>
@endsection
