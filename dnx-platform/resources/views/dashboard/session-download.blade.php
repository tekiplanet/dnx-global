@extends('layouts.dashboard')

@section('title', 'Download files — DNX Global')

@section('page-content')
  <section class="session-download-shell">
    <header class="sd-head">
      <a href="{{ url('/dashboard/sessions') }}" class="sd-back" aria-label="Back to sessions"></a>
      <div class="sd-head-main">
        <div class="sd-kicker">Download center</div>
        <h2 class="sd-title">Session #{{ $id }} — Files download</h2>
        <p class="sd-sub">Choose how you want to download your delivered photos and videos. Download everything in one archive, only selected files, or by category.</p>
        <div class="sd-meta">
          <span>Completed · 18 Jul 2024 · Lifestyle session</span>
          <span>Downloads available for 21 days</span>
        </div>
      </div>
    </header>

    <section class="sd-layout">
      <div class="sd-primary">
        <section class="sd-block" aria-label="Download options">
          <div class="sd-block-head">
            <h3 class="sd-block-title">Download options</h3>
            <p class="sd-block-sub">Pick the option that best fits your device and connection. In the live platform these buttons will start real downloads.</p>
          </div>
          <div class="sd-options-grid">
            <article class="sd-card sd-card--active" data-download-plan="all">
              <div class="sd-card-top">
                <h4>Download all files</h4>
                <span class="sd-pill sd-pill--accent">Recommended</span>
              </div>
              <p class="sd-card-sub">Single ZIP archive with all photos and videos in full resolution.</p>
              <ul class="sd-meta-list">
                <li><span>Total size</span><span>8.4 GB</span></li>
                <li><span>Estimated time</span><span>~12 min on fast connection</span></li>
                <li><span>Includes</span><span>240 photos · 4 videos</span></li>
              </ul>
              <button type="button" class="sd-btn sd-btn-primary sd-plan-btn">Download all</button>
            </article>

            <article class="sd-card" data-download-plan="selected">
              <div class="sd-card-top">
                <h4>Download selected files</h4>
              </div>
              <p class="sd-card-sub">Use the session gallery to pick favourites, then download only what you need.</p>
              <ul class="sd-meta-list">
                <li><span>Current selection</span><span>12 items</span></li>
                <li><span>Approx. size</span><span>420 MB</span></li>
              </ul>
              <button type="button" class="sd-btn sd-btn-ghost sd-plan-btn">Download selected</button>
            </article>

            <article class="sd-card" data-download-plan="category">
              <div class="sd-card-top">
                <h4>By category</h4>
              </div>
              <p class="sd-card-sub">Separate downloads for photos and videos, ideal for backing up or editing.</p>
              <ul class="sd-meta-list">
                <li><span>Photos</span><span>6.1 GB · ZIP</span></li>
                <li><span>Videos</span><span>2.3 GB · ZIP</span></li>
              </ul>
              <div class="sd-card-actions">
                <button type="button" class="sd-btn sd-btn-ghost sd-plan-btn">Download photos</button>
                <button type="button" class="sd-btn sd-btn-ghost sd-plan-btn">Download videos</button>
              </div>
            </article>
          </div>
        </section>

        <section class="sd-block" aria-label="Alternative download links">
          <div class="sd-block-head">
            <h3 class="sd-block-title">Alternative download options</h3>
            <p class="sd-block-sub">Use these options if you experience slow or interrupted downloads.</p>
          </div>
          <div class="sd-alt-grid">
            <article class="sd-alt-card">
              <h4>Cloud backup link</h4>
              <p>Access your files via a secure cloud folder, ideal for sharing with your team.</p>
              <p class="sd-note">Expires in 21 days · Read-only access</p>
            </article>
            <article class="sd-alt-card">
              <h4>Split archives</h4>
              <p>Download multiple smaller ZIP files for unstable connections or limited storage.</p>
              <p class="sd-note">4 parts · 2 GB each</p>
            </article>
          </div>
        </section>
      </div>

      <aside class="sd-sidebar" aria-label="Download summary and status">
        <div class="sd-summary">
          <h3 class="sd-sidebar-title">Download summary</h3>
          <ul class="sd-summary-list">
            <li><span>Current plan</span><span data-sd-current-plan>All files · 8.4 GB</span></li>
            <li><span>Download window</span><span>21 days remaining</span></li>
            <li><span>Last download</span><span>Not started</span></li>
          </ul>
        </div>

        <div class="sd-progress">
          <div class="sd-progress-head">
            <span>Preparing download</span>
            <span>40%</span>
          </div>
          <div class="sd-progress-track">
            <div class="sd-progress-fill" style="width:40%;"></div>
          </div>
          <p class="sd-progress-note">Preview only — in the full platform this will show real-time progress.</p>
        </div>

        <div class="sd-support">
          <h3 class="sd-sidebar-title">Having trouble?</h3>
          <p class="sd-support-copy">If downloads have expired or you need files again, you can request a secure re-upload or talk to support.</p>
          <div class="sd-support-actions">
            <button type="button" class="sd-btn sd-btn-outline">Request re-upload</button>
            <a href="#" class="sd-link-btn">Contact support</a>
          </div>
        </div>
      </aside>
    </section>
  </section>
@endsection
