@extends('layouts.public')

@section('title', 'About Us — DNX Global')

@section('page-hero')
<section class="hero">
  <div class="hero-media">
    <img src="https://images.unsplash.com/photo-1520975916090-3105956dac38?q=80&w=1600&auto=format&fit=crop" alt="Studio team at work">
  </div>
  <div class="hero-overlay"></div>
  <div class="container hero-content">
    <h1>Story-first visuals crafted by a dedicated team</h1>
    <p class="lead">We combine studio precision with bold creativity to help brands and people stand out.</p>
    <div class="hero-cta">
      <a href="/gallery" class="btn btn-primary">View Our Gallery</a>
    </div>
  </div>
</section>
@endsection

@section('page-content')
<section class="section about-intro">
  <div class="container about-wrap">
    <div class="about-media media-stack">
      <figure class="media-main card-media">
        <img src="https://images.unsplash.com/photo-1519345182560-3f2917c472ef?q=80&w=1600&auto=format&fit=crop" alt="Creative portrait session">
        <button class="media-play" aria-label="Play reel"></button>
      </figure>
      <figure class="media-secondary card-media">
        <img src="https://images.unsplash.com/photo-1524504388940-b1c1722653e1?q=80&w=800&auto=format&fit=crop" alt="Behind the scenes">
      </figure>
      <div class="stat-badge">
        <strong>35+</strong>
        <span>Won Awards</span>
      </div>
    </div>
    <div class="about-copy">
      <div class="kicker">Who We Are</div>
      <h2 class="title">Cinematic photography and videography built for impact</h2>
      <p>From weddings and events to brand campaigns and product launches, DNX Global delivers visual stories that connect. Our process blends concept development, precise lighting, and refined post to deliver consistent, premium results.</p>
      <a href="/contact" class="btn btn-secondary">Get In Touch</a>
    </div>
  </div>
</section>

<section class="section mission-vision">
  <div class="mv-media" aria-hidden="true">
    <img src="https://res.cloudinary.com/di8wnb4va/image/upload/v1762523431/2148503628_ieqhks.jpg" alt="">
  </div>
  <div class="mv-overlay" aria-hidden="true"></div>
  <div class="container">
    <div class="mv-wrap reveal-group">
      <article class="mv-item reveal">
        <h2 class="mv-title">MISSION</h2>
        <p class="mv-text">To elevate stories with cinematic visuals that move audiences and drive real outcomes for our clients.</p>
        <svg class="mv-connector mv-conn-1" viewBox="0 0 560 80" preserveAspectRatio="none" aria-hidden="true">
          <circle cx="18" cy="40" r="7" fill="currentColor"/>
          <path d="M28 40 H 240 Q 320 40 380 18 L 560 18" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/>
        </svg>
      </article>
      <article class="mv-item reveal">
        <h2 class="mv-title">VISION</h2>
        <p class="mv-text">To be the creative partner of choice for brands and people across Africa and beyond.</p>
        <svg class="mv-connector mv-conn-2" viewBox="0 0 560 80" preserveAspectRatio="none" aria-hidden="true">
          <circle cx="18" cy="40" r="7" fill="currentColor"/>
          <path d="M28 40 H 280 Q 360 40 420 62 L 560 62" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/>
        </svg>
      </article>
    </div>
  </div>
</section>

<section class="section team team-feature" id="team">
  <div class="container">
    <div class="headline">
      <div class="kicker">Team</div>
      <h2 class="section-title">Meet the creatives</h2>
    </div>
  </div>
  <div class="tf-frame" data-team data-mode="strip">
    <div class="tf-strip reveal-group" role="list">
      <button class="tf-card reveal" role="listitem" data-name="Richie Hawtin" data-role="Lead Photographer" data-bio="Crafts cinematic portraits and directs visual language across campaigns." data-image="https://images.unsplash.com/photo-1544005313-94ddf0286df2?q=80&w=1600&auto=format&fit=crop" aria-label="View Richie Hawtin profile">
        <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?q=80&w=800&auto=format&fit=crop" alt="Richie Hawtin portrait">
        <span class="tf-name"><b>Richie</b> Hawtin</span>
      </button>
      <button class="tf-card reveal" role="listitem" data-name="Magda" data-role="Senior Videographer" data-bio="Leads video direction with a focus on story arcs, pacing and light." data-image="https://images.unsplash.com/photo-1547425260-76bcadfb4f2c?q=80&w=1600&auto=format&fit=crop" aria-label="View Magda profile">
        <img src="https://images.unsplash.com/photo-1547425260-76bcadfb4f2c?q=80&w=800&auto=format&fit=crop" alt="Magda portrait">
        <span class="tf-name">Magda</span>
      </button>
      <button class="tf-card reveal" role="listitem" data-name="Paco Osuna" data-role="Producer" data-bio="Runs production logistics and ensures seamless on-set execution." data-image="https://images.unsplash.com/photo-1531891437562-4301cf35b7e4?q=80&w=1600&auto=format&fit=crop" aria-label="View Paco Osuna profile">
        <img src="https://images.unsplash.com/photo-1531891437562-4301cf35b7e4?q=80&w=800&auto=format&fit=crop" alt="Paco Osuna portrait">
        <span class="tf-name"><b>Paco</b> Osuna</span>
      </button>
      <button class="tf-card reveal" role="listitem" data-name="Fabio Florido" data-role="Retoucher" data-bio="Shapes final look with refined color and detail for print and digital." data-image="https://images.unsplash.com/photo-1511283415073-6e4a53ca76f7?q=80&w=1600&auto=format&fit=crop" aria-label="View Fabio Florido profile">
        <img src="https://images.unsplash.com/photo-1520975916090-3105956dac38?q=80&w=1600&auto=format&fit=crop" alt="Fabio Florido portrait">
        <span class="tf-name"><b>Fabio</b> Florido</span>
      </button>
    </div>

    <div class="tf-detail" aria-live="polite">
      <div class="tf-detail-head">
        <button class="tf-back btn btn-secondary" type="button" aria-label="Back to all team">All Team</button>
      </div>
      <div class="tf-detail-body">
        <div class="tfd-copy">
          <h3 class="tfd-name"></h3>
          <div class="tfd-role"></div>
          <p class="tfd-bio"></p>
        </div>
        <div class="tfd-media">
          <img class="tfd-image" src="" alt="">
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section bts bts-feature">
  <div class="container">
    <div class="headline">
      <div class="kicker">Behind the Scenes</div>
      <h2 class="section-title">Where the craft happens</h2>
    </div>
    <div class="bts-tilt reveal-group">
      <figure class="bts-card bts-tilt-item reveal">
        <img src="https://i.pinimg.com/1200x/4c/34/3a/4c343a9810bdd0a261d114db66b7cd4c.jpg" alt="Lighting setup">
        <figcaption class="bts-cap"><span class="cap-kicker">Studio</span><h3 class="cap-title">Lighting Setup</h3></figcaption>
      </figure>
      <figure class="bts-card bts-tilt-item reveal">
        <img src="https://images.unsplash.com/photo-1521334884684-d80222895322?q=80&w=1600&auto=format&fit=crop" alt="Gear and prep">
        <figcaption class="bts-cap"><span class="cap-kicker">Prep</span><h3 class="cap-title">Gear & Prep</h3></figcaption>
      </figure>
      <figure class="bts-card bts-tilt-item reveal">
        <img src="https://i.pinimg.com/736x/a3/60/86/a36086e0f4525f878550d13007a2374f.jpg" alt="On set">
        <figcaption class="bts-cap"><span class="cap-kicker">On Set</span><h3 class="cap-title">Director’s Call</h3></figcaption>
      </figure>
      <figure class="bts-card bts-tilt-item reveal">
        <img src="https://images.unsplash.com/photo-1504384764586-bb4cdc1707b0?q=80&w=1600&auto=format&fit=crop" alt="Crew in action">
        <figcaption class="bts-cap"><span class="cap-kicker">Crew</span><h3 class="cap-title">In Action</h3></figcaption>
      </figure>
    </div>
  </div>
</section>

<section class="section history">
  <div class="container">
    <div class="headline center">
      <div class="kicker">Our Journey</div>
      <h2 class="section-title">Highlights along the way</h2>
    </div>
    <div class="svc-grid reveal-group">
      <article class="service reveal">
        <div class="svc-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><rect x="5" y="5" width="14" height="14" rx="3"/></svg></div>
        <div class="svc-body">
          <h3>2016</h3>
          <p>Founded with a love for storytelling and meticulous craft.</p>
        </div>
      </article>
      <article class="service reveal">
        <div class="svc-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 12h16M12 4v16"/></svg></div>
        <div class="svc-body">
          <h3>2019</h3>
          <p>Expanded to full-service studio and event coverage.</p>
        </div>
      </article>
      <article class="service reveal">
        <div class="svc-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="8"/></svg></div>
        <div class="svc-body">
          <h3>2023</h3>
          <p>Cross-border projects and award-winning campaigns.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<section class="section values">
  <div class="container">
    <div class="headline">
      <div class="kicker">Values</div>
      <h2 class="section-title">Principles that shape our work</h2>
    </div>
    <div class="svc-grid reveal-group">
      <article class="service reveal">
        <div class="svc-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 16l8-8 8 8"/></svg></div>
        <div class="svc-body">
          <h3>Quality</h3>
          <p>Uncompromising standards in shooting, editing, and delivery.</p>
        </div>
      </article>
      <article class="service reveal">
        <div class="svc-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M6 12l4 4 8-8"/></svg></div>
        <div class="svc-body">
          <h3>Ownership</h3>
          <p>Accountability from pre-production to final delivery.</p>
        </div>
      </article>
      <article class="service reveal">
        <div class="svc-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2l4 8 8 2-8 2-4 8-4-8-8-2 8-2z"/></svg></div>
        <div class="svc-body">
          <h3>Creativity</h3>
          <p>Bold ideas backed by solid technique and measurable results.</p>
        </div>
      </article>
    </div>
  </div>
</section>
@endsection
