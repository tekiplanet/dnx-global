@extends('layouts.public')

@section('title', 'Pricing & Packages — DNX Global')

@section('page-hero')
<section class="hero" aria-label="Pricing Hero">
  <div class="hero-media">
    <img src="https://res.cloudinary.com/di8wnb4va/image/upload/v1763116215/2148363421_htjna7.jpg" alt="Elegant studio setup with dramatic lighting">
  </div>
  <div class="hero-overlay"></div>
  <div class="container hero-content">
    <h1>Pricing & Packages</h1>
    <p class="lead">Flexible packages for photography and videography, with add‑ons to tailor your session.</p>
    <div class="hero-cta">
      <a href="#pricing" class="btn btn-primary">View Packages</a>
    </div>
  </div>
</section>
@endsection

@section('page-content')
<section id="pricing" class="section pricing compare" data-pricing data-currency="GBP" data-rate-usd="0.0012" data-rate-gbp="0.00095" aria-labelledby="pricing-title">
  <div class="container">
    <div class="headline center">
      <div class="kicker">Our Packages</div>
      <h2 id="pricing-title" class="section-title">Flexible packages tailored to your session</h2>
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
          <button class="chip addon" data-key="drone" data-price="60000">Drone coverage</button>
          <button class="chip addon" data-key="booth" data-price="80000">360° Booth</button>
          <button class="chip addon" data-key="express" data-price="50000">Express delivery</button>
          <button class="chip addon" data-key="makeup" data-price="45000">Makeup artist</button>
          <button class="chip addon" data-key="album" data-price="35000">Photo album / prints</button>
        </div>
      </div>

      <div class="pricing-note">Prices update as you change service, duration, or add-ons.</div>
    </div>
  </div>
</section>

<!-- <section id="comparison" class="section matrix" aria-labelledby="matrix-title">
  <div class="container">
    <div class="headline center">
      <div class="kicker">Compare Packages</div>
      <h2 id="matrix-title" class="section-title">What you get in each tier</h2>
    </div>
    <div class="matrix-wrap">
      <div class="matrix-table">
        <div class="matrix-head">Feature</div>
        <div class="matrix-head">Basic</div>
        <div class="matrix-head">Premium</div>
        <div class="matrix-head">Deluxe</div>

        <div class="matrix-feature">Lead photographer</div>
        <div class="matrix-cell yes" aria-label="Basic: included"></div>
        <div class="matrix-cell yes" aria-label="Premium: included"></div>
        <div class="matrix-cell yes" aria-label="Deluxe: included"></div>

        <div class="matrix-feature">Coverage hours</div>
        <div class="matrix-cell" aria-label="Basic: up to 2"><span>Up to 2</span></div>
        <div class="matrix-cell" aria-label="Premium: up to 4"><span>Up to 4</span></div>
        <div class="matrix-cell" aria-label="Deluxe: up to 6"><span>Up to 6</span></div>

        <div class="matrix-feature">Editing level</div>
        <div class="matrix-cell" aria-label="Basic: Standard"><span>Standard</span></div>
        <div class="matrix-cell" aria-label="Premium: Advanced"><span>Advanced</span></div>
        <div class="matrix-cell" aria-label="Deluxe: Signature"><span>Signature</span></div>

        <div class="matrix-feature">Priority delivery</div>
        <div class="matrix-cell no" aria-label="Basic: not included"></div>
        <div class="matrix-cell yes" aria-label="Premium: included"></div>
        <div class="matrix-cell yes" aria-label="Deluxe: included"></div>

        <div class="matrix-feature">Senior creative team</div>
        <div class="matrix-cell no" aria-label="Basic: not included"></div>
        <div class="matrix-cell no" aria-label="Premium: not included"></div>
        <div class="matrix-cell yes" aria-label="Deluxe: included"></div>
      </div>
    </div>
  </div>
</section> -->

<section id="faq" class="section faq-neo" data-faq aria-labelledby="faq-title">
  <div class="container">
    <div class="faq-wrap">
      <div class="headline center">
        <div class="kicker">FAQs</div>
        <h2 id="faq-title" class="section-title">Have questions? Here are quick answers to common queries</h2>
      </div>
      <ul class="faq-list-neo">
        <li class="faq-item-neo">
          <button class="faq-q" aria-expanded="false" aria-controls="faq-a-1" id="faq-q-1">
            <span class="q-ico" aria-hidden="true">?</span>
            <span class="q-label">Do you offer revisions on designs?</span>
            <span class="q-act" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M4 19h4l4 3v-3h4a3 3 0 0 0 3-3V6a3 3 0 0 0-3-3H7a3 3 0 0 0-3 3z"/></svg></span>
          </button>
          <div class="faq-a" id="faq-a-1" role="region" aria-labelledby="faq-q-1" hidden>
            <div class="a-inner">
              <p>Yes, we include revisions to ensure the final delivery aligns with your expectations.</p>
              <span class="a-act" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M4 19h4l4 3v-3h4a3 3 0 0 0 3-3V6a3 3 0 0 0-3-3H7a3 3 0 0 0-3 3z"/></svg></span>
            </div>
          </div>
        </li>

        <li class="faq-item-neo">
          <button class="faq-q" aria-expanded="false" aria-controls="faq-a-2" id="faq-q-2">
            <span class="q-ico" aria-hidden="true">?</span>
            <span class="q-label">What tools do you use for your work?</span>
            <span class="q-act" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M4 19h4l4 3v-3h4a3 3 0 0 0 3-3V6a3 3 0 0 0-3-3H7a3 3 0 0 0-3 3z"/></svg></span>
          </button>
          <div class="faq-a" id="faq-a-2" role="region" aria-labelledby="faq-q-2" hidden>
            <div class="a-inner">
              <p>Pro cameras and lenses, controlled lighting, and color‑managed editing in Lightroom and DaVinci/Final Cut.</p>
              <span class="a-act" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M4 19h4l4 3v-3h4a3 3 0 0 0 3-3V6a3 3 0 0 0-3-3H7a3 3 0 0 0-3 3z"/></svg></span>
            </div>
          </div>
        </li>

        <li class="faq-item-neo">
          <button class="faq-q" aria-expanded="false" aria-controls="faq-a-3" id="faq-q-3">
            <span class="q-ico" aria-hidden="true">?</span>
            <span class="q-label">Can you help with branding from scratch?</span>
            <span class="q-act" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M4 19h4l4 3v-3h4a3 3 0 0 0 3-3V6a3 3 0 0 0-3-3H7a3 3 0 0 0-3 3z"/></svg></span>
          </button>
          <div class="faq-a" id="faq-a-3" role="region" aria-labelledby="faq-q-3" hidden>
            <div class="a-inner">
              <p>Yes. We guide look‑and‑feel, art direction, and consistent delivery assets for your brand.</p>
              <span class="a-act" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M4 19h4l4 3v-3h4a3 3 0 0 0 3-3V6a3 3 0 0 0-3-3H7a3 3 0 0 0-3 3z"/></svg></span>
            </div>
          </div>
        </li>

        <li class="faq-item-neo">
          <button class="faq-q" aria-expanded="false" aria-controls="faq-a-4" id="faq-q-4">
            <span class="q-ico" aria-hidden="true">?</span>
            <span class="q-label">How do you approach a new project?</span>
            <span class="q-act" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M4 19h4l4 3v-3h4a3 3 0 0 0 3-3V6a3 3 0 0 0-3-3H7a3 3 0 0 0-3 3z"/></svg></span>
          </button>
          <div class="faq-a" id="faq-a-4" role="region" aria-labelledby="faq-q-4" hidden>
            <div class="a-inner">
              <p>Discovery call, scoped brief, moodboard, scheduling, production, editing, and on‑time delivery.</p>
              <span class="a-act" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M4 19h4l4 3v-3h4a3 3 0 0 0 3-3V6a3 3 0 0 0-3-3H7a3 3 0 0 0-3 3z"/></svg></span>
            </div>
          </div>
        </li>

        <li class="faq-item-neo">
          <button class="faq-q" aria-expanded="false" aria-controls="faq-a-5" id="faq-q-5">
            <span class="q-ico" aria-hidden="true">?</span>
            <span class="q-label">What is the cost of your services?</span>
            <span class="q-act" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M4 19h4l4 3v-3h4a3 3 0 0 0 3-3V6a3 3 0 0 0-3-3H7a3 3 0 0 0-3 3z"/></svg></span>
          </button>
          <div class="faq-a" id="faq-a-5" role="region" aria-labelledby="faq-q-5" hidden>
            <div class="a-inner">
              <p>Use the configurator above to explore current packages. For custom bundles, request a quote.</p>
              <span class="a-act" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M4 19h4l4 3v-3h4a3 3 0 0 0 3-3V6a3 3 0 0 0-3-3H7a3 3 0 0 0-3 3z"/></svg></span>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</section>

<section id="cta" class="section" aria-label="Custom package inquiry">
  <div class="container">
    <div class="compare-frame" style="text-align:center">
      <h3 style="margin:0 0 8px 0">Need a custom package?</h3>
      <p style="margin:0 0 14px 0;color:var(--text-2)">Tell us what you need and we’ll craft the perfect bundle.</p>
      <a href="/contact" class="btn btn-primary">Request a Quote</a>
    </div>
  </div>
</section>
@endsection
