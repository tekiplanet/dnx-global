@extends('layouts.public')

@section('title', 'Home — DNX Global')

@section('page-hero')
<section class="hero">
  <div class="hero-media">
    <img src="https://res.cloudinary.com/di8wnb4va/image/upload/v1762523431/2148503628_ieqhks.jpg" alt="Hero portrait">
  </div>
  <div class="hero-overlay"></div>
  <div class="container hero-content">
    <h1>Character, like a photograph, develops in darkness</h1>
    <p class="lead">Elevate your story with cinematic photography and videography crafted for impact.</p>
    <div class="hero-cta">
      <a href="#portfolio" class="btn btn-primary">View Our Work</a>
    </div>
  </div>
</section>
@endsection

@section('page-content')
<section class="section logos" aria-label="Partners">
  <div class="container">
    <div class="logos-slider" data-speed="28">
      <div class="logos-track">
        <div class="logo-item">YOGA</div>
        <div class="logo-item">COSMETICS</div>
        <div class="logo-item">GIRL POWER</div>
        <div class="logo-item">BEAUTY</div>
        <div class="logo-item">NATURAL</div>
        <div class="logo-item">STUDIO</div>
      </div>
    </div>
  </div>
  
</section>

<section id="about" class="section about">
  <div class="container about-wrap">
    <div class="about-media media-stack">
      <figure class="media-main card-media">
        <img src="https://images.unsplash.com/photo-1520975916090-3105956dac38?q=80&w=1600&auto=format&fit=crop" alt="Creative body paint portrait">
        <button class="media-play" aria-label="Play reel"></button>
      </figure>
      <figure class="media-secondary card-media">
        <img src="https://images.unsplash.com/photo-1519345182560-3f2917c472ef?q=80&w=800&auto=format&fit=crop" alt="Studio portrait">
      </figure>
      <div class="stat-badge">
        <strong>35+</strong>
        <span>Won Awards</span>
      </div>
    </div>
    <div class="about-copy">
      <div class="kicker">Introducing Us</div>
      <h2 class="title">Make your photos stand out from the rest</h2>
      <p>DNX Global delivers cinematic photography and videography for brands, events, products, and portraits. We combine studio precision with bold creativity so your visuals cut through and connect.</p>
      <a href="/about" class="btn btn-primary">Discover More</a>
    </div>
  </div>
  
</section>

<section id="services" class="section services">
  <div class="container">
    <div class="headline">
      <div class="kicker">Our Services</div>
      <h2 class="section-title">What we can offer you</h2>
    </div>
    <div class="svc-grid reveal-group">
      <article class="service reveal">
        <div class="svc-icon">
          <svg viewBox="0 0 24 24" aria-hidden="true"><rect x="3" y="7" width="14" height="10" rx="2"/><circle cx="10" cy="12" r="3"/></svg>
        </div>
        <div class="svc-body">
          <h3>Shooting</h3>
          <p>Studio and location shoots tailored to your brief.</p>
        </div>
      </article>
      <article class="service reveal">
        <div class="svc-icon">
          <svg viewBox="0 0 24 24" aria-hidden="true"><rect x="3" y="7" width="12" height="10" rx="2"/><path d="M15 10l6-3v10l-6-3z"/></svg>
        </div>
        <div class="svc-body">
          <h3>Recording</h3>
          <p>Cinematic videography with precision sound.</p>
        </div>
      </article>
      <article class="service reveal">
        <div class="svc-icon">
          <svg viewBox="0 0 24 24" aria-hidden="true"><rect x="4" y="6" width="16" height="8" rx="2"/><rect x="6" y="14" width="12" height="4" rx="1"/></svg>
        </div>
        <div class="svc-body">
          <h3>Printing</h3>
          <p>Gallery-grade prints and bespoke albums.</p>
        </div>
      </article>
      <article class="service reveal">
        <div class="svc-icon">
          <svg viewBox="0 0 24 24" aria-hidden="true"><line x1="4" y1="7" x2="20" y2="7"/><circle cx="8" cy="7" r="2"/><line x1="4" y1="13" x2="20" y2="13"/><circle cx="14" cy="13" r="2"/><line x1="4" y1="19" x2="20" y2="19"/><circle cx="10" cy="19" r="2"/></svg>
        </div>
        <div class="svc-body">
          <h3>Editing</h3>
          <p>Advanced retouching and color grading.</p>
        </div>
      </article>
      <article class="service reveal">
        <div class="svc-icon">
          <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 16c4-1 6-3 8-7 1.2-2.4 3.5-3 6-3"/><path d="M4 16l3 3"/><path d="M16 6l4-2"/></svg>
        </div>
        <div class="svc-body">
          <h3>Styling</h3>
          <p>On-set styling and makeup artist network.</p>
        </div>
      </article>
      <article class="service reveal">
        <div class="svc-icon">
          <svg viewBox="0 0 24 24" aria-hidden="true"><rect x="5" y="5" width="14" height="14" rx="2"/><rect x="8" y="8" width="8" height="6" rx="1"/></svg>
        </div>
        <div class="svc-body">
          <h3>Studio</h3>
          <p>Full-service studio with controlled lighting.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<section id="pricing" class="section pricing" data-pricing data-currency="GBP" data-rate-usd="0.0012" data-rate-gbp="0.00095">
  <div class="container">
    <div class="headline center">
      <div class="kicker">Pricing & Packages</div>
      <h2 class="section-title">Flexible packages tailored to your session</h2>
    </div>
    <div class="pricing-controls">
      <div class="segmented" role="tablist" aria-label="Service">
        <button class="seg active" data-service="photo" role="tab" aria-selected="true">Photography</button>
        <button class="seg" data-service="video" role="tab" aria-selected="false">Videography</button>
      </div>
      <div class="chips duration" role="group" aria-label="Duration">
        <button class="chip active" data-hours="2">2 hrs</button>
        <button class="chip" data-hours="4">4 hrs</button>
        <button class="chip" data-hours="6">6 hrs</button>
        <button class="chip" data-hours="8">Full day</button>
      </div>
      <div class="chips currency" role="group" aria-label="Currency">
        <button class="chip active" data-currency="GBP">GBP</button>
        <button class="chip" data-currency="USD">USD</button>
      </div>
    </div>
    <div class="pricing-grid reveal-group">
      <article class="pricing-card tier-basic reveal" data-tier="basic">
        <div class="pc-head">
          <h3>Basic</h3>
          <div class="price"><span class="currency"></span><span class="amount">—</span></div>
        </div>
        <ul class="pc-features">
          <li>Professional shooter</li>
          <li>Up to <span class="hours">2</span> hours coverage</li>
          <li>Standard editing</li>
          <li>Online gallery delivery</li>
        </ul>
        <div class="pc-cta"><a href="#" class="btn btn-secondary">Choose Basic</a></div>
      </article>

      <article class="pricing-card tier-premium featured reveal" data-tier="premium">
        <div class="pc-head">
          <div class="badge">Most Popular</div>
          <h3>Premium</h3>
          <div class="price"><span class="currency"></span><span class="amount">—</span></div>
        </div>
        <ul class="pc-features">
          <li>Lead photographer</li>
          <li>Up to <span class="hours">4</span> hours coverage</li>
          <li>Advanced editing & color grade</li>
          <li>Priority delivery</li>
        </ul>
        <div class="pc-cta"><a href="#" class="btn btn-primary">Choose Premium</a></div>
      </article>

      <article class="pricing-card tier-deluxe reveal" data-tier="deluxe">
        <div class="pc-head">
          <h3>Deluxe</h3>
          <div class="price"><span class="currency"></span><span class="amount">—</span></div>
        </div>
        <ul class="pc-features">
          <li>Senior creative team</li>
          <li>Up to <span class="hours">6</span> hours coverage</li>
          <li>Signature retouch & art direction</li>
          <li>Premium delivery package</li>
        </ul>
        <div class="pc-cta"><a href="#" class="btn btn-secondary">Choose Deluxe</a></div>
      </article>
    </div>

    <div class="addons">
      <div class="addons-title">Add-ons</div>
      <div class="chips addons-chips">
        <button class="chip addon" data-key="second" data-price="40000">Second shooter</button>
        <button class="chip addon" data-key="drone" data-price="60000">Drone</button>
        <button class="chip addon" data-key="booth" data-price="80000">360° Booth</button>
        <button class="chip addon" data-key="express" data-price="50000">Express editing</button>
      </div>
    </div>
    <div class="pricing-note">Prices update as you change service, duration, or add-ons.</div>
    <div class="hero-cta" style="margin-top:12px">
      <a href="/pricing" class="btn btn-primary">View Full Pricing</a>
    </div>
  </div>
</section>

<section id="testimonials" class="section testimonials" aria-label="What our clients say" hidden>
  <div class="container">
    <div class="headline center">
      <div class="kicker">Testimonials</div>
      <h2 class="section-title">What our clients say</h2>
    </div>
    <div class="tstl" data-mode="data" aria-hidden="true">
      <button class="tstl-nav prev" aria-label="Previous testimonial"></button>
      <div class="tstl-viewport" data-autoplay="true" data-interval="5000">
        <div class="tstl-track">
          <article class="tstl-card">
            <div class="tstl-body">
              <div class="tstl-quote">They captured the energy of our day so beautifully. The edits were cinematic yet natural.</div>
            </div>
            <div class="tstl-meta">
              <img class="tstl-avatar" src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?q=80&w=256&auto=format&fit=crop" alt="Portrait of Amaka">
              <div class="tstl-id">
                <div class="tstl-name">Amaka A.</div>
                <div class="tstl-role">Bride</div>
              </div>
              <div class="tstl-stars" aria-label="5 out of 5 stars">
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3l3.09 6.26L22 10.27l-5 4.87L18.18 22 12 18.56 5.82 22 7 15.14l-5-4.87 6.91-1.01z"/></svg>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3l3.09 6.26L22 10.27l-5 4.87L18.18 22 12 18.56 5.82 22 7 15.14l-5-4.87 6.91-1.01z"/></svg>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3l3.09 6.26L22 10.27l-5 4.87L18.18 22 12 18.56 5.82 22 7 15.14l-5-4.87 6.91-1.01z"/></svg>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3l3.09 6.26L22 10.27l-5 4.87L18.18 22 12 18.56 5.82 22 7 15.14l-5-4.87 6.91-1.01z"/></svg>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3l3.09 6.26L22 10.27l-5 4.87L18.18 22 12 18.56 5.82 22 7 15.14l-5-4.87 6.91-1.01z"/></svg>
              </div>
            </div>
          </article>
          <article class="tstl-card">
            <div class="tstl-body">
              <div class="tstl-quote">Professional from start to finish. Our corporate event highlights looked world-class.</div>
            </div>
            <div class="tstl-meta">
              <img class="tstl-avatar" src="https://images.unsplash.com/photo-1547425260-76bcadfb4f2c?q=80&w=256&auto=format&fit=crop" alt="Portrait of Chinedu">
              <div class="tstl-id">
                <div class="tstl-name">Chinedu O.</div>
                <div class="tstl-role">Event Manager</div>
              </div>
              <div class="tstl-stars" aria-label="5 out of 5 stars">
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3l3.09 6.26L22 10.27l-5 4.87L18.18 22 12 18.56 5.82 22 7 15.14l-5-4.87 6.91-1.01z"/></svg>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3l3.09 6.26L22 10.27l-5 4.87L18.18 22 12 18.56 5.82 22 7 15.14l-5-4.87 6.91-1.01z"/></svg>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3l3.09 6.26L22 10.27l-5 4.87L18.18 22 12 18.56 5.82 22 7 15.14l-5-4.87 6.91-1.01z"/></svg>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3l3.09 6.26L22 10.27l-5 4.87L18.18 22 12 18.56 5.82 22 7 15.14l-5-4.87 6.91-1.01z"/></svg>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3l3.09 6.26L22 10.27l-5 4.87L18.18 22 12 18.56 5.82 22 7 15.14l-5-4.87 6.91-1.01z"/></svg>
              </div>
            </div>
          </article>
          <article class="tstl-card">
            <div class="tstl-body">
              <div class="tstl-quote">From booking to delivery, the team was thoughtful and quick. Our products have never looked better.</div>
            </div>
            <div class="tstl-meta">
              <img class="tstl-avatar" src="https://images.unsplash.com/photo-1531891437562-4301cf35b7e4?q=80&w=256&auto=format&fit=crop" alt="Portrait of Zara">
              <div class="tstl-id">
                <div class="tstl-name">Zara B.</div>
                <div class="tstl-role">Creative Lead</div>
              </div>
              <div class="tstl-stars" aria-label="5 out of 5 stars">
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3l3.09 6.26L22 10.27l-5 4.87L18.18 22 12 18.56 5.82 22 7 15.14l-5-4.87 6.91-1.01z"/></svg>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3l3.09 6.26L22 10.27l-5 4.87L18.18 22 12 18.56 5.82 22 7 15.14l-5-4.87 6.91-1.01z"/></svg>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3l3.09 6.26L22 10.27l-5 4.87L18.18 22 12 18.56 5.82 22 7 15.14l-5-4.87 6.91-1.01z"/></svg>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3l3.09 6.26L22 10.27l-5 4.87L18.18 22 12 18.56 5.82 22 7 15.14l-5-4.87 6.91-1.01z"/></svg>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3l3.09 6.26L22 10.27l-5 4.87L18.18 22 12 18.56 5.82 22 7 15.14l-5-4.87 6.91-1.01z"/></svg>
              </div>
            </div>
          </article>
          <article class="tstl-card">
            <div class="tstl-body">
              <div class="tstl-quote">Lightning-fast turnaround without sacrificing quality. The footage blew us away.</div>
            </div>
            <div class="tstl-meta">
              <img class="tstl-avatar" src="https://res.cloudinary.com/di8wnb4va/image/upload/v1762522735/samples/smile.jpg" alt="Portrait of Tunde">
              <div class="tstl-id">
                <div class="tstl-name">Tunde F.</div>
                <div class="tstl-role">Producer</div>
              </div>
              <div class="tstl-stars" aria-label="5 out of 5 stars">
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3l3.09 6.26L22 10.27l-5 4.87L18.18 22 12 18.56 5.82 22 7 15.14l-5-4.87 6.91-1.01z"/></svg>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3l3.09 6.26L22 10.27l-5 4.87L18.18 22 12 18.56 5.82 22 7 15.14l-5-4.87 6.91-1.01z"/></svg>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3l3.09 6.26L22 10.27l-5 4.87L18.18 22 12 18.56 5.82 22 7 15.14l-5-4.87 6.91-1.01z"/></svg>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3l3.09 6.26L22 10.27l-5 4.87L18.18 22 12 18.56 5.82 22 7 15.14l-5-4.87 6.91-1.01z"/></svg>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3l3.09 6.26L22 10.27l-5 4.87L18.18 22 12 18.56 5.82 22 7 15.14l-5-4.87 6.91-1.01z"/></svg>
              </div>
            </div>
          </article>
          <article class="tstl-card">
            <div class="tstl-body">
              <div class="tstl-quote">Seamless shoot day and flawless delivery. The photos carried our brand tone perfectly.</div>
            </div>
            <div class="tstl-meta">
              <img class="tstl-avatar" src="https://images.unsplash.com/photo-1541216970279-affbfdd55aa8?q=80&w=256&auto=format&fit=crop" alt="Portrait of Mariam">
              <div class="tstl-id">
                <div class="tstl-name">Mariam K.</div>
                <div class="tstl-role">Brand Manager</div>
              </div>
              <div class="tstl-stars" aria-label="5 out of 5 stars">
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3l3.09 6.26L22 10.27l-5 4.87L18.18 22 12 18.56 5.82 22 7 15.14l-5-4.87 6.91-1.01z"/></svg>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3l3.09 6.26L22 10.27l-5 4.87L18.18 22 12 18.56 5.82 22 7 15.14l-5-4.87 6.91-1.01z"/></svg>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3l3.09 6.26L22 10.27l-5 4.87L18.18 22 12 18.56 5.82 22 7 15.14l-5-4.87 6.91-1.01z"/></svg>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3l3.09 6.26L22 10.27l-5 4.87L18.18 22 12 18.56 5.82 22 7 15.14l-5-4.87 6.91-1.01z"/></svg>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3l3.09 6.26L22 10.27l-5 4.87L18.18 22 12 18.56 5.82 22 7 15.14l-5-4.87 6.91-1.01z"/></svg>
              </div>
            </div>
          </article>
          <article class="tstl-card">
            <div class="tstl-body">
              <div class="tstl-quote">Booking was simple, the crew was punctual, and edits landed ahead of schedule.</div>
            </div>
            <div class="tstl-meta">
              <img class="tstl-avatar" src="https://res.cloudinary.com/di8wnb4va/image/upload/v1762522725/samples/people/kitchen-bar.jpg" alt="Portrait of Segun">
              <div class="tstl-id">
                <div class="tstl-name">Segun A.</div>
                <div class="tstl-role">Entrepreneur</div>
              </div>
              <div class="tstl-stars" aria-label="5 out of 5 stars">
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3l3.09 6.26L22 10.27l-5 4.87L18.18 22 12 18.56 5.82 22 7 15.14l-5-4.87 6.91-1.01z"/></svg>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3l3.09 6.26L22 10.27l-5 4.87L18.18 22 12 18.56 5.82 22 7 15.14l-5-4.87 6.91-1.01z"/></svg>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3l3.09 6.26L22 10.27l-5 4.87L18.18 22 12 18.56 5.82 22 7 15.14l-5-4.87 6.91-1.01z"/></svg>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3l3.09 6.26L22 10.27l-5 4.87L18.18 22 12 18.56 5.82 22 7 15.14l-5-4.87 6.91-1.01z"/></svg>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3l3.09 6.26L22 10.27l-5 4.87L18.18 22 12 18.56 5.82 22 7 15.14l-5-4.87 6.91-1.01z"/></svg>
              </div>
            </div>
          </article>
          <article class="tstl-card">
            <div class="tstl-body">
              <div class="tstl-quote">Their eye for light is special. The final video felt premium and exactly on brief.</div>
            </div>
            <div class="tstl-meta">
              <img class="tstl-avatar" src="https://images.unsplash.com/photo-1524504388940-b1c1722653e1?q=80&w=256&auto=format&fit=crop" alt="Portrait of Isabel">
              <div class="tstl-id">
                <div class="tstl-name">Isabel R.</div>
                <div class="tstl-role">Art Director</div>
              </div>
              <div class="tstl-stars" aria-label="5 out of 5 stars">
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3l3.09 6.26L22 10.27l-5 4.87L18.18 22 12 18.56 5.82 22 7 15.14l-5-4.87 6.91-1.01z"/></svg>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3l3.09 6.26L22 10.27l-5 4.87L18.18 22 12 18.56 5.82 22 7 15.14l-5-4.87 6.91-1.01z"/></svg>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3l3.09 6.26L22 10.27l-5 4.87L18.18 22 12 18.56 5.82 22 7 15.14l-5-4.87 6.91-1.01z"/></svg>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3l3.09 6.26L22 10.27l-5 4.87L18.18 22 12 18.56 5.82 22 7 15.14l-5-4.87 6.91-1.01z"/></svg>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3l3.09 6.26L22 10.27l-5 4.87L18.18 22 12 18.56 5.82 22 7 15.14l-5-4.87 6.91-1.01z"/></svg>
              </div>
            </div>
          </article>
          <article class="tstl-card">
            <div class="tstl-body">
              <div class="tstl-quote">They captured the energy of our day so beautifully. The edits were cinematic yet natural.</div>
            </div>
            <div class="tstl-meta">
              <img class="tstl-avatar" src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?q=80&w=256&auto=format&fit=crop" alt="Portrait of Amaka">
              <div class="tstl-id">
                <div class="tstl-name">Amaka A.</div>
                <div class="tstl-role">Bride</div>
              </div>
              <div class="tstl-stars" aria-label="5 out of 5 stars">
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3l3.09 6.26L22 10.27l-5 4.87L18.18 22 12 18.56 5.82 22 7 15.14l-5-4.87 6.91-1.01z"/></svg>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3l3.09 6.26L22 10.27l-5 4.87L18.18 22 12 18.56 5.82 22 7 15.14l-5-4.87 6.91-1.01z"/></svg>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3l3.09 6.26L22 10.27l-5 4.87L18.18 22 12 18.56 5.82 22 7 15.14l-5-4.87 6.91-1.01z"/></svg>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3l3.09 6.26L22 10.27l-5 4.87L18.18 22 12 18.56 5.82 22 7 15.14l-5-4.87 6.91-1.01z"/></svg>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3l3.09 6.26L22 10.27l-5 4.87L18.18 22 12 18.56 5.82 22 7 15.14l-5-4.87 6.91-1.01z"/></svg>
              </div>
            </div>
          </article>
          <article class="tstl-card">
            <div class="tstl-body">
              <div class="tstl-quote">Professional from start to finish. Our corporate event highlights looked world-class.</div>
            </div>
            <div class="tstl-meta">
              <img class="tstl-avatar" src="https://images.unsplash.com/photo-1547425260-76bcadfb4f2c?q=80&w=256&auto=format&fit=crop" alt="Portrait of Chinedu">
              <div class="tstl-id">
                <div class="tstl-name">Chinedu O.</div>
                <div class="tstl-role">Event Manager</div>
              </div>
              <div class="tstl-stars" aria-label="5 out of 5 stars">
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3l3.09 6.26L22 10.27l-5 4.87L18.18 22 12 18.56 5.82 22 7 15.14l-5-4.87 6.91-1.01z"/></svg>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3l3.09 6.26L22 10.27l-5 4.87L18.18 22 12 18.56 5.82 22 7 15.14l-5-4.87 6.91-1.01z"/></svg>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3l3.09 6.26L22 10.27l-5 4.87L18.18 22 12 18.56 5.82 22 7 15.14l-5-4.87 6.91-1.01z"/></svg>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3l3.09 6.26L22 10.27l-5 4.87L18.18 22 12 18.56 5.82 22 7 15.14l-5-4.87 6.91-1.01z"/></svg>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3l3.09 6.26L22 10.27l-5 4.87L18.18 22 12 18.56 5.82 22 7 15.14l-5-4.87 6.91-1.01z"/></svg>
              </div>
            </div>
          </article>
          <article class="tstl-card">
            <div class="tstl-body">
              <div class="tstl-quote">From booking to delivery, the team was thoughtful and quick. Our products have never looked better.</div>
            </div>
            <div class="tstl-meta">
              <img class="tstl-avatar" src="https://images.unsplash.com/photo-1531891437562-4301cf35b7e4?q=80&w=256&auto=format&fit=crop" alt="Portrait of Zara">
              <div class="tstl-id">
                <div class="tstl-name">Zara B.</div>
                <div class="tstl-role">Creative Lead</div>
              </div>
              <div class="tstl-stars" aria-label="5 out of 5 stars">
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3l3.09 6.26L22 10.27l-5 4.87L18.18 22 12 18.56 5.82 22 7 15.14l-5-4.87 6.91-1.01z"/></svg>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3l3.09 6.26L22 10.27l-5 4.87L18.18 22 12 18.56 5.82 22 7 15.14l-5-4.87 6.91-1.01z"/></svg>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3l3.09 6.26L22 10.27l-5 4.87L18.18 22 12 18.56 5.82 22 7 15.14l-5-4.87 6.91-1.01z"/></svg>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3l3.09 6.26L22 10.27l-5 4.87L18.18 22 12 18.56 5.82 22 7 15.14l-5-4.87 6.91-1.01z"/></svg>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3l3.09 6.26L22 10.27l-5 4.87L18.18 22 12 18.56 5.82 22 7 15.14l-5-4.87 6.91-1.01z"/></svg>
              </div>
            </div>
          </article>
          <article class="tstl-card">
            <div class="tstl-body">
              <div class="tstl-quote">Lightning-fast turnaround without sacrificing quality. The footage blew us away.</div>
            </div>
            <div class="tstl-meta">
              <img class="tstl-avatar" src="https://res.cloudinary.com/di8wnb4va/image/upload/v1762522735/samples/smile.jpg" alt="Portrait of Tunde">
              <div class="tstl-id">
                <div class="tstl-name">Tunde F.</div>
                <div class="tstl-role">Producer</div>
              </div>
              <div class="tstl-stars" aria-label="5 out of 5 stars">
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3l3.09 6.26L22 10.27l-5 4.87L18.18 22 12 18.56 5.82 22 7 15.14l-5-4.87 6.91-1.01z"/></svg>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3l3.09 6.26L22 10.27l-5 4.87L18.18 22 12 18.56 5.82 22 7 15.14l-5-4.87 6.91-1.01z"/></svg>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3l3.09 6.26L22 10.27l-5 4.87L18.18 22 12 18.56 5.82 22 7 15.14l-5-4.87 6.91-1.01z"/></svg>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3l3.09 6.26L22 10.27l-5 4.87L18.18 22 12 18.56 5.82 22 7 15.14l-5-4.87 6.91-1.01z"/></svg>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3l3.09 6.26L22 10.27l-5 4.87L18.18 22 12 18.56 5.82 22 7 15.14l-5-4.87 6.91-1.01z"/></svg>
              </div>
            </div>
          </article>
          <article class="tstl-card">
            <div class="tstl-body">
              <div class="tstl-quote">Seamless shoot day and flawless delivery. The photos carried our brand tone perfectly.</div>
            </div>
            <div class="tstl-meta">
              <img class="tstl-avatar" src="https://images.unsplash.com/photo-1541216970279-affbfdd55aa8?q=80&w=256&auto=format&fit=crop" alt="Portrait of Mariam">
              <div class="tstl-id">
                <div class="tstl-name">Mariam K.</div>
                <div class="tstl-role">Brand Manager</div>
              </div>
              <div class="tstl-stars" aria-label="5 out of 5 stars">
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3l3.09 6.26L22 10.27l-5 4.87L18.18 22 12 18.56 5.82 22 7 15.14l-5-4.87 6.91-1.01z"/></svg>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3l3.09 6.26L22 10.27l-5 4.87L18.18 22 12 18.56 5.82 22 7 15.14l-5-4.87 6.91-1.01z"/></svg>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3l3.09 6.26L22 10.27l-5 4.87L18.18 22 12 18.56 5.82 22 7 15.14l-5-4.87 6.91-1.01z"/></svg>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3l3.09 6.26L22 10.27l-5 4.87L18.18 22 12 18.56 5.82 22 7 15.14l-5-4.87 6.91-1.01z"/></svg>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3l3.09 6.26L22 10.27l-5 4.87L18.18 22 12 18.56 5.82 22 7 15.14l-5-4.87 6.91-1.01z"/></svg>
              </div>
            </div>
          </article>
          <article class="tstl-card">
            <div class="tstl-body">
              <div class="tstl-quote">Booking was simple, the crew was punctual, and edits landed ahead of schedule.</div>
            </div>
            <div class="tstl-meta">
              <img class="tstl-avatar" src="https://res.cloudinary.com/di8wnb4va/image/upload/v1762522725/samples/people/kitchen-bar.jpg" alt="Portrait of Segun">
              <div class="tstl-id">
                <div class="tstl-name">Segun A.</div>
                <div class="tstl-role">Entrepreneur</div>
              </div>
              <div class="tstl-stars" aria-label="5 out of 5 stars">
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3l3.09 6.26L22 10.27l-5 4.87L18.18 22 12 18.56 5.82 22 7 15.14l-5-4.87 6.91-1.01z"/></svg>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3l3.09 6.26L22 10.27l-5 4.87L18.18 22 12 18.56 5.82 22 7 15.14l-5-4.87 6.91-1.01z"/></svg>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3l3.09 6.26L22 10.27l-5 4.87L18.18 22 12 18.56 5.82 22 7 15.14l-5-4.87 6.91-1.01z"/></svg>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3l3.09 6.26L22 10.27l-5 4.87L18.18 22 12 18.56 5.82 22 7 15.14l-5-4.87 6.91-1.01z"/></svg>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3l3.09 6.26L22 10.27l-5 4.87L18.18 22 12 18.56 5.82 22 7 15.14l-5-4.87 6.91-1.01z"/></svg>
              </div>
            </div>
          </article>
        </div>
      </div>
      <button class="tstl-nav next" aria-label="Next testimonial"></button>
    </div>
    <div class="tstl-dots" role="tablist" aria-label="Testimonials pagination"></div>
  </div>
</section>

<section id="testimonials-feature" class="section testimonials feature" aria-label="What our clients say">
  <div class="container">
    <div class="headline center">
      <div class="kicker">Testimonials</div>
      <h2 class="section-title">What our clients say</h2>
    </div>
    <div class="tstl2">
      <div class="tstl2-media">
        <img class="tstl2-image" src="" alt="">
      </div>
      <div class="tstl2-copy">
        <div class="tstl2-index">#<span class="tstl2-no">1</span></div>
        <h3 class="tstl2-name"></h3>
        <p class="tstl2-text"></p>
        <div class="tstl2-stars" aria-label="rating"></div>
      </div>
      <button class="tstl2-nav prev" aria-label="Previous testimonial"></button>
      <button class="tstl2-nav next" aria-label="Next testimonial"></button>
    </div>
  </div>
</section>

<section id="clients" class="section clients" aria-label="Our clients">
  <div class="container">
    <div class="headline center">
      <div class="kicker">Our Clients</div>
      <h2 class="section-title">Trusted by over <span class="count">786+</span> clients.</h2>
      <p class="subline">Our clients are our top priority, and we are committed to providing them with the highest level of service.</p>
    </div>
    <div class="clients-grid reveal-group">
      <div class="client-card reveal" role="img" aria-label="YouTube" tabindex="0">
        <div class="cc-inner"><span class="cc-logo" data-brand="YouTube"></span></div>
      </div>
      <div class="client-card reveal" role="img" aria-label="Google" tabindex="0">
        <div class="cc-inner"><span class="cc-logo" data-brand="Google"></span></div>
      </div>
      <div class="client-card reveal" role="img" aria-label="Facebook" tabindex="0">
        <div class="cc-inner"><span class="cc-logo" data-brand="Facebook"></span></div>
      </div>
      <div class="client-card reveal" role="img" aria-label="Pinterest" tabindex="0">
        <div class="cc-inner"><span class="cc-logo" data-brand="Pinterest"></span></div>
      </div>
      <div class="client-card reveal" role="img" aria-label="Behance" tabindex="0">
        <div class="cc-inner"><span class="cc-logo" data-brand="Behance"></span></div>
      </div>
      <div class="client-card reveal" role="img" aria-label="Discord" tabindex="0">
        <div class="cc-inner"><span class="cc-logo" data-brand="Discord"></span></div>
      </div>
      <div class="client-card reveal" role="img" aria-label="SpaceX" tabindex="0">
        <div class="cc-inner"><span class="cc-logo" data-brand="SpaceX"></span></div>
      </div>
      <div class="client-card reveal" role="img" aria-label="Microsoft" tabindex="0">
        <div class="cc-inner"><span class="cc-logo" data-brand="Microsoft"></span></div>
      </div>
      <div class="client-card reveal" role="img" aria-label="Amazon" tabindex="0">
        <div class="cc-inner"><span class="cc-logo" data-brand="Amazon"></span></div>
      </div>
      <div class="client-card reveal" role="img" aria-label="Android" tabindex="0">
        <div class="cc-inner"><span class="cc-logo" data-brand="Android"></span></div>
      </div>
      <div class="client-card reveal" role="img" aria-label="WordPress" tabindex="0">
        <div class="cc-inner"><span class="cc-logo" data-brand="WordPress"></span></div>
      </div>
      <div class="client-card reveal" role="img" aria-label="Dropbox" tabindex="0">
        <div class="cc-inner"><span class="cc-logo" data-brand="Dropbox"></span></div>
      </div>
    </div>
  </div>
</section>

<section id="portfolio" class="section portfolio">
  <div class="container">
    <div class="section-head">
      <h2 class="section-title">More Creativity. More Photography</h2>
      <a class="btn btn-secondary" href="#">View All Projects</a>
    </div>
    <div class="portfolio-filters">
      <div class="chips filter" role="group" aria-label="Filter projects">
        <button class="chip active" data-cat="all">All</button>
        <button class="chip" data-cat="portraits">Portraits</button>
        <button class="chip" data-cat="events">Events</button>
        <button class="chip" data-cat="products">Products</button>
        <button class="chip" data-cat="weddings">Weddings</button>
      </div>
    </div>
    <div class="gallery reveal-group">
      <figure class="gallery-item ratio-4-3 reveal" data-cat="portraits">
        <a href="#" class="gi-link">
          <img src="https://images.unsplash.com/photo-1520975916090-3105956dac38?q=80&w=1600&auto=format&fit=crop" alt="Urban editorial portrait">
          <div class="gi-overlay">
            <span class="gi-tag">Portraits</span>
            <h3 class="gi-title">Urban Editorial</h3>
          </div>
        </a>
      </figure>
      <figure class="gallery-item ratio-1-1 reveal" data-cat="products">
        <a href="#" class="gi-link">
          <img src="https://res.cloudinary.com/di8wnb4va/image/upload/v1762861489/2149659570_xrdwmy.jpg" alt="Product beauty shot">
          <div class="gi-overlay">
            <span class="gi-tag">Products</span>
            <h3 class="gi-title">Studio Beauty</h3>
          </div>
        </a>
      </figure>
      <figure class="gallery-item ratio-3-4 reveal" data-cat="events">
        <a href="#" class="gi-link">
          <img src="https://images.unsplash.com/photo-1521334884684-d80222895322?q=80&w=1600&auto=format&fit=crop" alt="Corporate event lighting">
          <div class="gi-overlay">
            <span class="gi-tag">Events</span>
            <h3 class="gi-title">Conference Night</h3>
          </div>
        </a>
      </figure>
      <figure class="gallery-item ratio-16-9 reveal" data-cat="weddings">
        <a href="#" class="gi-link">
          <img src="https://images.unsplash.com/photo-1511285560929-80b456fea0bc?q=80&w=1600&auto=format&fit=crop" alt="Wedding bouquet backlight">
          <div class="gi-overlay">
            <span class="gi-tag">Weddings</span>
            <h3 class="gi-title">Golden Hour Vows</h3>
          </div>
        </a>
      </figure>
      <figure class="gallery-item ratio-4-3 reveal" data-cat="portraits">
        <a href="#" class="gi-link">
          <img src="https://images.unsplash.com/photo-1519741497674-611481863552?q=80&w=1600&auto=format&fit=crop" alt="Winter portrait">
          <div class="gi-overlay">
            <span class="gi-tag">Portraits</span>
            <h3 class="gi-title">Winter Streets</h3>
          </div>
        </a>
      </figure>
      <figure class="gallery-item ratio-1-1 reveal" data-cat="products">
        <a href="#" class="gi-link">
          <img src="https://res.cloudinary.com/di8wnb4va/image/upload/v1762861885/100714_nw9ire.jpg" alt="Jewelry macro">
          <div class="gi-overlay">
            <span class="gi-tag">Products</span>
            <h3 class="gi-title">Jewelry Macro</h3>
          </div>
        </a>
      </figure>
      <figure class="gallery-item ratio-3-4 reveal" data-cat="events">
        <a href="#" class="gi-link">
          <img src="https://res.cloudinary.com/di8wnb4va/image/upload/v1762862026/2151194138_wezvjr.jpg" alt="Live concert highlights">
          <div class="gi-overlay">
            <span class="gi-tag">Events</span>
            <h3 class="gi-title">Live Highlights</h3>
          </div>
        </a>
      </figure>
      <figure class="gallery-item ratio-16-9 reveal" data-cat="weddings">
        <a href="#" class="gi-link">
          <img src="https://res.cloudinary.com/di8wnb4va/image/upload/v1762863064/Photo-by-Samson-Ejim-on-Unsplash-samson-ejim-vgGfOByb1_4-unsplash_h9ycud.jpg" alt="Bride and groom silhouettes">
          <div class="gi-overlay">
            <span class="gi-tag">Weddings</span>
            <h3 class="gi-title">Silhouette Frame</h3>
          </div>
        </a>
      </figure>
    </div>
  </div>
</section>
@endsection
