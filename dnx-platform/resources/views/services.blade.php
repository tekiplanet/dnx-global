@extends('layouts.public')

@section('title', 'Services — DNX Global')

@section('page-hero')
<section class="hero" aria-label="Services Hero">
  <div class="hero-media">
    <img src="https://res.cloudinary.com/di8wnb4va/image/upload/v1763048511/12723_akl89i.jpg" alt="Studio photography setup with dramatic lighting">
  </div>
  <div class="hero-overlay"></div>
  <div class="container hero-content">
    <h1>Services</h1>
    <p class="lead">Photography, Videography, 360° Photobooth, and combined packages tailored for impact.</p>
    <div class="hero-cta">
      <a href="/login" class="btn btn-primary">Book Now</a>
    </div>
  </div>
</section>
@endsection

@section('page-content')
<section id="services" class="section services" aria-labelledby="services-title">
  <div class="container">
    <div class="headline">
      <div class="kicker">What We Do</div>
      <h2 id="services-title" class="section-title">Our Services</h2>
    </div>

    <div data-tabs="services">
      <div class="pricing-controls">
        <div class="segmented" role="tablist" aria-label="Service Categories">
          <button class="seg active" id="tab-photo" data-tab="photo" role="tab" aria-selected="true" aria-controls="panel-photo">Photography</button>
          <button class="seg" id="tab-video" data-tab="video" role="tab" aria-selected="false" aria-controls="panel-video">Videography</button>
          <button class="seg" id="tab-booth" data-tab="booth" role="tab" aria-selected="false" aria-controls="panel-booth">360° Booth</button>
          <button class="seg" id="tab-combo" data-tab="combo" role="tab" aria-selected="false" aria-controls="panel-combo">Combo</button>
        </div>
      </div>

      <div class="svc-panel" id="panel-photo" data-tab-panel="photo" role="tabpanel" aria-labelledby="tab-photo">
        <div class="reveal-group">
          <div class="about-copy">
            <h3 class="title" style="margin:8px 0 6px 0">Photography</h3>
            <p style="margin-bottom:12px; max-width:68ch">Studio and on-location photography for portraits, products, weddings, corporate, lifestyle, and events. Precision lighting and refined post ensure consistent, premium results.</p>
          </div>

          <ul class="pc-features" aria-label="What's included in Photography">
            <li>Pre-shoot consultation</li>
            <li>Professional lighting and direction</li>
            <li>High‑resolution edited photos</li>
            <li>Online gallery for preview and download</li>
          </ul>

          <div class="svc-grid reveal-group" style="margin-top:8px">
            <div class="svc-card reveal">
              <div class="svc-media">
                <img src="https://res.cloudinary.com/di8wnb4va/image/upload/v1763049072/6582_zvupml.jpg" alt="Professional studio portrait">
              </div>
              <div class="svc-body">
                <div class="svc-icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24"><path d="M3 7h4l2-3h6l2 3h4v12H3z"/><circle cx="12" cy="13" r="4"/></svg>
                </div>
                <div>
                  <h3>Portraits</h3>
                  <p>Clean studio and lifestyle portraits for teams and individuals.</p>
                </div>
              </div>
            </div>
            <div class="svc-card reveal">
              <div class="svc-media">
                <img src="https://res.cloudinary.com/di8wnb4va/image/upload/v1762863064/Photo-by-Samson-Ejim-on-Unsplash-samson-ejim-vgGfOByb1_4-unsplash_h9ycud.jpg" alt="Wedding couple portrait">
              </div>
              <div class="svc-body">
                <div class="svc-icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="14" rx="2"/><path d="M8 22l4-4 4 4"/></svg>
                </div>
                <div>
                  <h3>Weddings</h3>
                  <p>Story‑driven coverage from preparation to reception.</p>
                </div>
              </div>
            </div>
            <div class="svc-card reveal">
              <div class="svc-media">
                <img src="https://res.cloudinary.com/di8wnb4va/image/upload/v1762861489/2149659570_xrdwmy.jpg" alt="Product beauty shot in studio">
              </div>
              <div class="svc-body">
                <div class="svc-icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24"><rect x="4" y="4" width="16" height="16" rx="2"/><path d="M8 12h8M12 8v8"/></svg>
                </div>
                <div>
                  <h3>Products</h3>
                  <p>Studio setups and stylized scenes for e‑commerce and brand.</p>
                </div>
              </div>
            </div>
            <div class="svc-card reveal">
              <div class="svc-media">
                <img src="https://res.cloudinary.com/di8wnb4va/image/upload/v1763049072/43560_k9xn7c.jpg" alt="Corporate headshot in office setting">
              </div>
              <div class="svc-body">
                <div class="svc-icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24"><path d="M4 6h16M4 12h10M4 18h16"/></svg>
                </div>
                <div>
                  <h3>Corporate</h3>
                  <p>Brand imagery, headshots, and executive features.</p>
                </div>
              </div>
            </div>
            <div class="svc-card reveal">
              <div class="svc-media">
                <img src="https://res.cloudinary.com/di8wnb4va/image/upload/v1763049082/2151038562_ivfeud.jpg" alt="Lifestyle editorial portrait">
              </div>
              <div class="svc-body">
                <div class="svc-icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="3"/><path d="M2 12h4M18 12h4M12 2v4M12 18v4M4.9 4.9l2.8 2.8M16.3 16.3l2.8 2.8M19.1 4.9l-2.8 2.8M7.7 16.3l-2.8 2.8"/></svg>
                </div>
                <div>
                  <h3>Lifestyle</h3>
                  <p>Editorial storytelling with natural light and locations.</p>
                </div>
              </div>
            </div>
            <div class="svc-card reveal">
              <div class="svc-media">
                <img src="https://res.cloudinary.com/di8wnb4va/image/upload/v1763049083/2150960308_jf9xcm.jpg" alt="Event coverage with stage lighting">
              </div>
              <div class="svc-body">
                <div class="svc-icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24"><path d="M3 12a9 9 0 1 0 18 0A9 9 0 0 0 3 12z"/><path d="M12 7v5l3 3"/></svg>
                </div>
                <div>
                  <h3>Events</h3>
                  <p>Everything from conferences to brand activations.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="hero-cta" style="margin-top:10px">
            <a href="#contact" class="btn btn-primary">Book Photography</a>
            <a href="/gallery" class="btn btn-secondary">View Portfolio</a>
          </div>
        </div>
      </div>

      <div class="svc-panel" id="panel-video" data-tab-panel="video" role="tabpanel" aria-labelledby="tab-video" hidden aria-hidden="true">
        <div class="reveal-group">
          <div class="about-copy">
            <h3 class="title" style="margin:8px 0 6px 0">Videography</h3>
            <p style="margin-bottom:12px; max-width:68ch">From cinematic highlight films to full event documentaries, we produce compelling visuals with clean audio and color‑graded delivery.</p>
          </div>

          <ul class="pc-features" aria-label="What's included in Videography">
            <li>Pre‑production planning</li>
            <li>4K capture and clean audio</li>
            <li>Professional editing and color</li>
            <li>Multiple export formats</li>
          </ul>

          <div class="svc-grid reveal-group" style="margin-top:8px">
            <div class="svc-card reveal">
              <div class="svc-media">
                <img src="https://res.cloudinary.com/di8wnb4va/image/upload/v1762523250/2148503627_zu5s0c.jpg" alt="Cinematic filmmaking camera setup">
              </div>
              <div class="svc-body">
                <div class="svc-icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24"><rect x="3" y="6" width="13" height="12" rx="2"/><path d="M16 10l5-3v10l-5-3z"/></svg>
                </div>
                <div>
                  <h3>Highlight Film</h3>
                  <p>Short cinematic edit with music and motion design.</p>
                </div>
              </div>
            </div>
            <div class="svc-card reveal">
              <div class="svc-media">
                <img src="https://res.cloudinary.com/di8wnb4va/image/upload/v1763049891/2151932835_woyloi.jpg" alt="Conference video coverage on stage">
              </div>
              <div class="svc-body">
                <div class="svc-icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24"><path d="M3 7h14v10H3z"/><path d="M17 9l4-2v10l-4-2z"/></svg>
                </div>
                <div>
                  <h3>Event Coverage</h3>
                  <p>Multi‑angle coverage for conferences and ceremonies.</p>
                </div>
              </div>
            </div>
            <div class="svc-card reveal">
              <div class="svc-media">
                <img src="https://res.cloudinary.com/di8wnb4va/image/upload/v1763050059/8412_ygp97e.jpg" alt="Drone capturing aerial footage">
              </div>
              <div class="svc-body">
                <div class="svc-icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24"><path d="M12 2l3 7h7l-5.5 4 2.5 7-7-4.5L5.5 20 8 13 2 9h7z"/></svg>
                </div>
                <div>
                  <h3>Drone Add‑on</h3>
                  <p>Aerial shots for stunning perspective and scale.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="hero-cta" style="margin-top:10px">
            <a href="#contact" class="btn btn-primary">Book Videography</a>
            <a href="/gallery" class="btn btn-secondary">View Portfolio</a>
          </div>
        </div>
      </div>

      <div class="svc-panel" id="panel-booth" data-tab-panel="booth" role="tabpanel" aria-labelledby="tab-booth" hidden aria-hidden="true">
        <div class="reveal-group">
          <div class="about-copy">
            <h3 class="title" style="margin:8px 0 6px 0">360° Photobooth</h3>
            <p style="margin-bottom:12px; max-width:68ch">Interactive 360° experiences for events with instant sharing that guests love.</p>
          </div>

          <ul class="pc-features" aria-label="What's included in 360 Booth">
            <li>360° camera rig and lighting</li>
            <li>Branded overlays</li>
            <li>Instant sharing station</li>
            <li>On‑site operator</li>
          </ul>

          <div class="svc-grid reveal-group" style="margin-top:8px">
            <div class="svc-card reveal">
              <div class="svc-media">
                <img src="https://res.cloudinary.com/di8wnb4va/image/upload/v1763050625/9873_ceysl8.jpg" alt="360° photobooth event setup with neon lights">
              </div>
              <div class="svc-body">
                <div class="svc-icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M3 12h18"/></svg>
                </div>
                <div>
                  <h3>Event Setups</h3>
                  <p>Compact footprint, fast setup, and reliable throughput.</p>
                </div>
              </div>
            </div>
            <div class="svc-card reveal">
              <div class="svc-media">
                <img src="https://res.cloudinary.com/di8wnb4va/image/upload/v1763050624/3817366_10818_hevpw9.jpg" alt="Branded overlays and design details">
              </div>
              <div class="svc-body">
                <div class="svc-icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24"><rect x="4" y="6" width="16" height="12" rx="2"/><path d="M8 10h8M8 14h5"/></svg>
                </div>
                <div>
                  <h3>Branding</h3>
                  <p>Custom overlays and microsite for brand cohesion.</p>
                </div>
              </div>
            </div>
            <div class="svc-card reveal">
              <div class="svc-media">
                <img src="https://res.cloudinary.com/di8wnb4va/image/upload/v1763050627/459_vwoit9.jpg" alt="Props, backdrops and LED stages">
              </div>
              <div class="svc-body">
                <div class="svc-icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24"><path d="M12 5v14M5 12h14"/></svg>
                </div>
                <div>
                  <h3>Add‑ons</h3>
                  <p>Props, backdrops, and LED stages to elevate the vibe.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="hero-cta" style="margin-top:10px">
            <a href="#contact" class="btn btn-primary">Book 360° Booth</a>
            <a href="/gallery" class="btn btn-secondary">View Portfolio</a>
          </div>
        </div>
      </div>

      <div class="svc-panel" id="panel-combo" data-tab-panel="combo" role="tabpanel" aria-labelledby="tab-combo" hidden aria-hidden="true">
        <div class="reveal-group">
          <div class="about-copy">
            <h3 class="title" style="margin:8px 0 6px 0">Combo Packages</h3>
            <p style="margin-bottom:12px; max-width:68ch">Photography + Videography with optional 360° Booth for complete coverage and value.</p>
          </div>

          <ul class="pc-features" aria-label="What's included in Combo">
            <li>Coordinated photo and video teams</li>
            <li>Unified color and style</li>
            <li>Optimized schedule and shot list</li>
            <li>Streamlined delivery</li>
          </ul>

          <div class="svc-grid reveal-group" style="margin-top:8px">
            <div class="svc-card reveal">
              <div class="svc-media">
                <img src="https://res.cloudinary.com/di8wnb4va/image/upload/v1763050920/2149037847_jbqdns.jpg" alt="Photo and video crew working together">
              </div>
              <div class="svc-body">
                <div class="svc-icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24"><rect x="3" y="6" width="13" height="12" rx="2"/><path d="M16 10l5-3v10l-5-3z"/></svg>
                </div>
                <div>
                  <h3>Photo + Video</h3>
                  <p>One crew, one vision, seamless storytelling.</p>
                </div>
              </div>
            </div>
            <div class="svc-card reveal">
              <div class="svc-media">
                <img src="https://res.cloudinary.com/di8wnb4va/image/upload/v1763050919/79860_ujm0g2.jpg" alt="360° booth experience">
              </div>
              <div class="svc-body">
                <div class="svc-icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M3 12h18"/></svg>
                </div>
                <div>
                  <h3>Optional 360°</h3>
                  <p>Add immersive 360° experience for guests.</p>
                </div>
              </div>
            </div>
            <div class="svc-card reveal">
              <div class="svc-media">
                <img src="https://res.cloudinary.com/di8wnb4va/image/upload/v1763050920/2149762477_nilwik.jpg" alt="Customized creative planning">
              </div>
              <div class="svc-body">
                <div class="svc-icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24"><path d="M4 6h16M4 12h10M4 18h16"/></svg>
                </div>
                <div>
                  <h3>Customized</h3>
                  <p>Tailored deliverables to your event and goals.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="hero-cta" style="margin-top:10px">
            <a href="#contact" class="btn btn-primary">Book Combo</a>
            <a href="/gallery" class="btn btn-secondary">View Portfolio</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="service-compare" class="section pricing compare" data-pricing data-currency="GBP" data-rate-usd="0.0012" data-rate-gbp="0.00095" aria-labelledby="compare-title">
  <div class="container">
    <div class="headline center">
      <div class="kicker">Service Comparison</div>
      <h2 id="compare-title" class="section-title">Choose the package that fits</h2>
    </div>

    <div class="compare-frame">
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
  </div>
</section>
@endsection
