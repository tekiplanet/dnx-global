@extends('layouts.public')

@section('title', 'Gallery — DNX Global')

@section('page-hero')
<section class="hero" aria-label="Gallery Hero">
  <div class="hero-media">
    <img src="https://res.cloudinary.com/di8wnb4va/image/upload/v1762963123/2149893841_qvint6.jpg" alt="Dramatic portrait in neon lighting">
  </div>
  <div class="hero-overlay"></div>
  <div class="container hero-content">
    <h1>Gallery & Portfolio</h1>
    <p class="lead">Explore our photography and videography across weddings, corporate, lifestyle, studio, events, and product.</p>
  </div>
</section>
@endsection

@section('page-content')
<section id="portfolio" class="section" aria-labelledby="portfolio-title">
  <div class="container">
    <div class="section-head">
      <h2 id="portfolio-title" class="section-title">Our Work</h2>
    </div>

    <div class="portfolio-filters" role="region" aria-label="Filter gallery by category">
      <div class="chips filter" role="group" aria-label="Filter projects">
        <button class="chip active" data-cat="all" aria-pressed="true">All</button>
        <button class="chip" data-cat="weddings" aria-pressed="false">Weddings</button>
        <button class="chip" data-cat="corporate" aria-pressed="false">Corporate Events</button>
        <button class="chip" data-cat="lifestyle" aria-pressed="false">Lifestyle Photography</button>
        <button class="chip" data-cat="studio" aria-pressed="false">Studio Sessions</button>
        <button class="chip" data-cat="events" aria-pressed="false">Events Coverage</button>
        <button class="chip" data-cat="products" aria-pressed="false">Product Photography</button>
      </div>
      </div>

    <div class="gallery collage no-gap reveal-group" aria-live="polite">
      <figure class="gallery-item ratio-4-3 reveal collage-left-1" data-cat="weddings">
        <a href="https://res.cloudinary.com/di8wnb4va/image/upload/v1762523431/2148503628_ieqhks.jpg" class="gi-link" role="button" aria-label="Open Wedding Portrait">
          <img src="https://res.cloudinary.com/di8wnb4va/image/upload/v1762523431/2148503628_ieqhks.jpg" alt="Wedding couple portrait">
          <figcaption class="gi-overlay">
            <span class="gi-tag">Weddings</span>
            <h3 class="gi-title">Golden Hour Vows</h3>
          </figcaption>
        </a>
      </figure>
      
      <figure class="gallery-item ratio-1-1 reveal collage-left-2" data-cat="products">
        <a href="https://res.cloudinary.com/di8wnb4va/image/upload/v1762861489/2149659570_xrdwmy.jpg" class="gi-link" role="button" aria-label="Open Product Beauty Shot">
          <img src="https://res.cloudinary.com/di8wnb4va/image/upload/v1762861489/2149659570_xrdwmy.jpg" alt="Cosmetics product beauty shot">
          <figcaption class="gi-overlay">
            <span class="gi-tag">Products</span>
            <h3 class="gi-title">Studio Beauty</h3>
          </figcaption>
        </a>
      </figure>

      <figure class="gallery-item ratio-3-4 reveal collage-center" data-cat="events">
        <a href="https://res.cloudinary.com/di8wnb4va/image/upload/v1762963123/2149893841_qvint6.jpg" class="gi-link" role="button" aria-label="Open Event Coverage">
          <img src="https://res.cloudinary.com/di8wnb4va/image/upload/v1762963123/2149893841_qvint6.jpg" alt="Corporate event stage lighting">
          <figcaption class="gi-overlay">
            <span class="gi-tag">Events</span>
            <h3 class="gi-title">Stage Lights</h3>
          </figcaption>
        </a>
      </figure>

      <figure class="gallery-item ratio-4-3 reveal collage-left-3" data-cat="lifestyle">
        <a href="https://res.cloudinary.com/di8wnb4va/image/upload/v1762522725/samples/people/kitchen-bar.jpg" class="gi-link" role="button" aria-label="Open Lifestyle Editorial">
          <img src="https://res.cloudinary.com/di8wnb4va/image/upload/v1762522725/samples/people/kitchen-bar.jpg" alt="Lifestyle editorial portrait in city">
          <figcaption class="gi-overlay">
            <span class="gi-tag">Lifestyle</span>
            <h3 class="gi-title">Urban Editorial</h3>
          </figcaption>
        </a>
      </figure>

      <figure class="gallery-item ratio-4-3 reveal collage-right-1" data-cat="studio">
        <a href="https://res.cloudinary.com/di8wnb4va/image/upload/v1762522725/samples/people/kitchen-bar.jpg" class="gi-link" role="button" aria-label="Open Studio Portrait">
          <img src="https://res.cloudinary.com/di8wnb4va/image/upload/v1762522725/samples/people/kitchen-bar.jpg" alt="Studio portrait with soft light">
          <figcaption class="gi-overlay">
            <span class="gi-tag">Studio</span>
            <h3 class="gi-title">Pure Studio</h3>
          </figcaption>
        </a>
      </figure>

      <figure class="gallery-item ratio-3-4 reveal collage-right-2" data-cat="corporate">
        <a href="https://res.cloudinary.com/di8wnb4va/image/upload/v1762523431/2148503628_ieqhks.jpg" class="gi-link" role="button" aria-label="Open Corporate Portrait">
          <img src="https://res.cloudinary.com/di8wnb4va/image/upload/v1762523431/2148503628_ieqhks.jpg" alt="Corporate team working scene">
          <figcaption class="gi-overlay">
            <span class="gi-tag">Corporate</span>
            <h3 class="gi-title">Team Energy</h3>
          </figcaption>
        </a>
      </figure>

      <figure class="gallery-item ratio-16-9 reveal collage-right-3" data-cat="weddings">
        <a href="https://res.cloudinary.com/di8wnb4va/image/upload/v1762522735/samples/smile.jpg" class="gi-link" role="button" aria-label="Open Wedding Dance">
          <img src="https://res.cloudinary.com/di8wnb4va/image/upload/v1762522735/samples/smile.jpg" alt="Wedding dance floor">
          <figcaption class="gi-overlay">
            <span class="gi-tag">Weddings</span>
            <h3 class="gi-title">First Dance</h3>
          </figcaption>
        </a>
      </figure>

      <figure class="gallery-item ratio-1-1 reveal" data-cat="products">
        <a href="https://res.cloudinary.com/di8wnb4va/image/upload/v1762861489/2149659570_xrdwmy.jpg" class="gi-link" role="button" aria-label="Open Product Still Life">
          <img src="https://res.cloudinary.com/di8wnb4va/image/upload/v1762861489/2149659570_xrdwmy.jpg" alt="Product still life on dark surface">
          <figcaption class="gi-overlay">
            <span class="gi-tag">Products</span>
            <h3 class="gi-title">Still Life</h3>
          </figcaption>
        </a>
      </figure>

      <figure class="gallery-item ratio-3-4 reveal" data-cat="events">
        <a href="https://res.cloudinary.com/di8wnb4va/image/upload/v1762963123/2149893841_qvint6.jpg" class="gi-link" role="button" aria-label="Open Event Crowd">
          <img src="https://res.cloudinary.com/di8wnb4va/image/upload/v1762963123/2149893841_qvint6.jpg" alt="Concert crowd with lights">
          <figcaption class="gi-overlay">
            <span class="gi-tag">Events</span>
            <h3 class="gi-title">Crowd Energy</h3>
          </figcaption>
        </a>
      </figure>
    </div>

    <div class="mt-4" style="margin-top: 20px;">
      <button class="btn btn-secondary load-more" type="button" aria-label="Load more items">Load More</button>
    </div>
  </div>
</section>

<section class="section" aria-labelledby="video-showcase-title">
  <div class="container">
    <div class="headline">
      <div class="kicker">Videography</div>
      <h2 id="video-showcase-title" class="section-title">Video Showcase</h2>
    </div>
    <div class="video-grid">
      <div class="video-card pro" role="button" tabindex="0" aria-label="Play DNX Global Showreel" data-provider="youtube" data-id="1La4QzGeaaQ">
        <img class="video-thumb" src="https://i.ytimg.com/vi/1La4QzGeaaQ/hqdefault.jpg" alt="DNX Global Showreel thumbnail">
        <div class="video-overlay">
          <div class="vo-meta">
            <div class="vo-kicker">Showreel</div>
            <div class="vo-title">DNX Global Showreel</div>
          </div>
          <div class="play-btn" aria-hidden="true"></div>
        </div>
      </div>
      <div class="video-card pro" role="button" tabindex="0" aria-label="Play Events Highlight — Falcon Heavy 4K" data-provider="youtube" data-id="C0DPdy98e4c">
        <img class="video-thumb" src="https://i.ytimg.com/vi/C0DPdy98e4c/hqdefault.jpg" alt="Events highlight thumbnail">
        <div class="video-overlay">
          <div class="vo-meta">
            <div class="vo-kicker">Events</div>
            <div class="vo-title">Events Highlight</div>
          </div>
          <div class="play-btn" aria-hidden="true"></div>
        </div>
      </div>
      <div class="video-card pro" role="button" tabindex="0" aria-label="Play Editorial Film — Tears of Steel" data-provider="youtube" data-id="eRsGyueVLvQ">
        <img class="video-thumb" src="https://i.ytimg.com/vi/eRsGyueVLvQ/hqdefault.jpg" alt="Editorial film thumbnail">
        <div class="video-overlay">
          <div class="vo-meta">
            <div class="vo-kicker">Editorial</div>
            <div class="vo-title">Editorial Film</div>
          </div>
          <div class="play-btn" aria-hidden="true"></div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="lightbox" role="dialog" aria-modal="true" aria-label="Image viewer" aria-hidden="true">
  <button class="lb-close" type="button" aria-label="Close viewer"></button>
  <img src="" alt="Expanded gallery media">
</div>
@endsection
