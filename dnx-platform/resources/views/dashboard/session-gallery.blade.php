@extends('layouts.dashboard')

@section('title', 'Session gallery — DNX Global')

@section('page-content')
  <section class="session-gallery-shell">
    <header class="sg-head">
      <a href="{{ url('/dashboard/sessions') }}" class="sg-back" aria-label="Back to sessions"></a>
      <div class="sg-head-main">
        <div class="sg-kicker">Session gallery</div>
        <h2 class="sg-title">Session #{{ $id }} — Gallery preview</h2>
        <p class="sg-sub">Preview and manage your delivered photos and videos for this session. Select files to download, share or favorite for quick access later.</p>
        <div class="sg-meta">
          <span>Completed · 18 Jul 2024 · Lifestyle session</span>
          <span>Downloads available for 21 days</span>
        </div>
        <div class="sg-stats">
          <div class="sg-stat">
            <span class="k">Media files</span>
            <span class="v">3 items</span>
          </div>
          <div class="sg-stat">
            <span class="k">Photos</span>
            <span class="v">2</span>
          </div>
          <div class="sg-stat">
            <span class="k">Videos</span>
            <span class="v">1</span>
          </div>
        </div>
      </div>
    </header>

    <section class="sg-controls" aria-label="Gallery view and filters">
      <div class="sg-left">
        <div class="sg-mode-toggle" role="tablist" aria-label="Gallery layout">
          <button type="button" class="sg-mode-btn sg-mode-btn--active" role="tab" aria-selected="true" data-gallery-mode="grid">Grid view</button>
          <button type="button" class="sg-mode-btn" role="tab" aria-selected="false" data-gallery-mode="list">List view</button>
        </div>
        <label class="sg-watermark-toggle">
          <input type="checkbox" class="sg-watermark-input" checked>
          <span>Watermarked preview</span>
        </label>
      </div>
      <div class="sg-right">
        <div class="sg-filter-group" aria-label="Media type filter">
          <button type="button" class="sg-filter-btn sg-filter-btn--active" data-filter="all">All media</button>
          <button type="button" class="sg-filter-btn" data-filter="photo">Photos</button>
          <button type="button" class="sg-filter-btn" data-filter="video">Videos</button>
        </div>
        <div class="sg-legend">
          <span class="dot dot--photo"></span><span>Photos</span>
          <span class="dot dot--video"></span><span>Videos</span>
        </div>
      </div>
    </section>

    <section class="sg-main" aria-label="Session media">
      <div class="sg-toolbar">
        <label class="sg-select-all">
          <input type="checkbox" class="sg-select-all-input">
          <span>Select all</span>
        </label>
        <div class="sg-toolbar-actions">
          <button type="button" class="sg-btn sg-btn-primary">Download selected</button>
          <button type="button" class="sg-btn sg-btn-ghost">Share selected</button>
        </div>
      </div>

      <div class="sg-viewport">
        <div class="sg-grid">
          <article class="sg-item" data-media-type="photo" data-index="0">
            <label class="sg-check-wrap">
              <input type="checkbox" class="sg-check">
              <span class="sr-only">Select image 1</span>
            </label>
            <button type="button" class="sg-thumb" data-full="https://images.unsplash.com/photo-1519681393784-d120267933ba?q=80&amp;w=1600&amp;auto=format&amp;fit=crop" aria-label="Open image 1 in full screen">
              <img src="https://images.unsplash.com/photo-1519681393784-d120267933ba?q=80&amp;w=800&amp;auto=format&amp;fit=crop" alt="Portrait session in studio lighting">
              <span class="sg-watermark">DNX GLOBAL</span>
            </button>
            <div class="sg-meta-block">
              <h3>Portrait — studio light</h3>
              <div class="sg-meta-row">
                <span>Photo · 3:2 · 24MP</span>
                <button type="button" class="sg-fav" aria-pressed="false" aria-label="Favorite image 1">
                  <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 21s-6.5-4.35-9-7.88C1.2 11.2 1 9.9 1.5 8.8 2.5 6.5 5 5.7 6.9 6.4 8 6.8 8.9 7.7 9.3 8.4 9.7 7.7 10.6 6.8 11.7 6.4 13.6 5.7 16.1 6.5 17.1 8.8c.5 1.1.3 2.4-.5 3.32C18.5 16.65 12 21 12 21z"/></svg>
                </button>
              </div>
            </div>
          </article>

          <article class="sg-item" data-media-type="photo" data-index="1">
            <label class="sg-check-wrap">
              <input type="checkbox" class="sg-check">
              <span class="sr-only">Select image 2</span>
            </label>
            <button type="button" class="sg-thumb" data-full="https://images.unsplash.com/photo-1515378791036-0648a3ef77b2?q=80&amp;w=1600&amp;auto=format&amp;fit=crop" aria-label="Open image 2 in full screen">
              <img src="https://images.unsplash.com/photo-1515378791036-0648a3ef77b2?q=80&amp;w=800&amp;auto=format&amp;fit=crop" alt="Couple during lifestyle session">
              <span class="sg-watermark">DNX GLOBAL</span>
            </button>
            <div class="sg-meta-block">
              <h3>Outdoor lifestyle</h3>
              <div class="sg-meta-row">
                <span>Photo · 3:2 · 24MP</span>
                <button type="button" class="sg-fav" aria-pressed="false" aria-label="Favorite image 2">
                  <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 21s-6.5-4.35-9-7.88C1.2 11.2 1 9.9 1.5 8.8 2.5 6.5 5 5.7 6.9 6.4 8 6.8 8.9 7.7 9.3 8.4 9.7 7.7 10.6 6.8 11.7 6.4 13.6 5.7 16.1 6.5 17.1 8.8c.5 1.1.3 2.4-.5 3.32C18.5 16.65 12 21 12 21z"/></svg>
                </button>
              </div>
            </div>
          </article>

          <article class="sg-item" data-media-type="video" data-index="2">
            <label class="sg-check-wrap">
              <input type="checkbox" class="sg-check">
              <span class="sr-only">Select video 1</span>
            </label>
            <button type="button" class="sg-thumb sg-thumb--video" data-full="https://images.unsplash.com/photo-1526170375885-4d8ecf77b99f?q=80&amp;w=1600&amp;auto=format&amp;fit=crop" aria-label="Open video 1 in full screen">
              <img src="https://images.unsplash.com/photo-1526170375885-4d8ecf77b99f?q=80&amp;w=800&amp;auto=format&amp;fit=crop" alt="Behind-the-scenes video still">
              <span class="sg-watermark">DNX GLOBAL</span>
              <span class="sg-play"></span>
            </button>
            <div class="sg-meta-block">
              <h3>Highlight reel</h3>
              <div class="sg-meta-row">
                <span>Video · 4K · 01:12</span>
                <button type="button" class="sg-fav" aria-pressed="false" aria-label="Favorite video 1">
                  <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 21s-6.5-4.35-9-7.88C1.2 11.2 1 9.9 1.5 8.8 2.5 6.5 5 5.7 6.9 6.4 8 6.8 8.9 7.7 9.3 8.4 9.7 7.7 10.6 6.8 11.7 6.4 13.6 5.7 16.1 6.5 17.1 8.8c.5 1.1.3 2.4-.5 3.32C18.5 16.65 12 21 12 21z"/></svg>
                </button>
              </div>
            </div>
          </article>
        </div>
      </div>
    </section>

    <div class="sg-lightbox" aria-hidden="true">
      <div class="sg-lightbox-backdrop"></div>
      <div class="sg-lightbox-dialog" role="dialog" aria-modal="true" aria-label="Media preview">
        <button type="button" class="sg-lightbox-close" aria-label="Close preview"></button>
        <div class="sg-lightbox-media">
          <img src="" alt="" class="sg-lightbox-img">
        </div>
        <div class="sg-lightbox-footer">
          <button type="button" class="sg-lightbox-nav sg-lightbox-prev" aria-label="Previous media"></button>
          <button type="button" class="sg-lightbox-nav sg-lightbox-next" aria-label="Next media"></button>
          <div class="sg-lightbox-meta">
            <div class="sg-lightbox-title">Session media</div>
            <div class="sg-lightbox-sub">Use the arrows to move between files. Download and sharing will be available in the full application.</div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
