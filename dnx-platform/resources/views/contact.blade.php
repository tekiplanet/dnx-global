@extends('layouts.public')

@section('title', 'Contact — DNX Global')

@section('page-hero')
<section class="hero" aria-label="Contact Hero">
  <div class="hero-media">
    <img src="https://res.cloudinary.com/di8wnb4va/image/upload/v1763049072/6582_zvupml.jpg" alt="Studio contact desk with moody lighting">
  </div>
  <div class="hero-overlay"></div>
  <div class="container hero-content">
    <h1>Get in touch</h1>
    <p class="lead">Questions, bookings, or custom quotes — we’d love to hear from you.</p>
    <div class="hero-cta">
      <a href="#contact" class="btn btn-primary">Contact Us</a>
    </div>
  </div>
</section>
@endsection

@section('page-content')
<section id="contact" class="section contact-page" aria-labelledby="contact-title">
  <div class="container">
    @if (session('status'))
      <div class="alert success" role="status">{{ session('status') }}</div>
    @endif

    <div class="headline center">
      <div class="kicker">Contact</div>
      <h2 id="contact-title" class="section-title">Tell us about your project</h2>
      <p class="section-sub">Share a few details and we’ll respond promptly.</p>
    </div>

    <div class="contact-quick reveal-group" aria-label="Quick contact actions">
      <a class="cq-card reveal" href="mailto:hello@dnxglobal.com" aria-label="Email us">
        <span class="cq-ico" aria-hidden="true">@</span>
        <div class="cq-meta"><span>Email</span><strong>hello@dnxglobal.com</strong></div>
      </a>
      <a class="cq-card reveal" href="tel:+2348000000000" aria-label="Call us">
        <span class="cq-ico" aria-hidden="true">📞</span>
        <div class="cq-meta"><span>Phone</span><strong>+234 800 000 0000</strong></div>
      </a>
      <a class="cq-card reveal" href="https://wa.me/2348000000000" target="_blank" rel="noopener" aria-label="WhatsApp chat">
        <span class="cq-ico" aria-hidden="true">💬</span>
        <div class="cq-meta"><span>WhatsApp</span><strong>Chat now</strong></div>
      </a>
    </div>

    <div class="contact-grid">
      <div class="contact-left">
        <div class="contact-card neo">
          <h3 class="card-title">Contact details</h3>
          <ul class="meta-list">
            <li><span class="meta-label">Phone</span><a href="tel:+2348000000000" class="meta-value">+234 800 000 0000</a></li>
            <li><span class="meta-label">Email</span><a href="mailto:hello@dnxglobal.com" class="meta-value">hello@dnxglobal.com</a></li>
            <li><span class="meta-label">WhatsApp</span><a href="https://wa.me/2348000000000" target="_blank" rel="noopener" class="meta-value">Chat on WhatsApp</a></li>
          </ul>

          <div class="meta-split">
            <div class="meta-col">
              <h4 class="sub">Hours</h4>
              <ul class="meta-list small">
                <li>Mon–Fri: 9:00am – 6:00pm</li>
                <li>Sat: 10:00am – 4:00pm</li>
                <li>Sun: Closed</li>
              </ul>
            </div>
            <div class="meta-col">
              <h4 class="sub">Address</h4>
              <ul class="meta-list small">
                <li>Lagos, Nigeria</li>
                <li><a class="meta-value" target="_blank" rel="noopener" href="https://maps.google.com/?q=Lagos,+Nigeria">Get directions</a></li>
              </ul>
            </div>
          </div>

          <div class="social">
            <a aria-label="Instagram" href="#" class="social-btn ig">ig</a>
            <a aria-label="Twitter/X" href="#" class="social-btn tw">x</a>
            <a aria-label="TikTok" href="#" class="social-btn">tt</a>
          </div>
        </div>

        <div class="map-card neo">
          <div class="ratio-16-9 map-frame">
            <iframe title="DNX Global on Google Maps" loading="lazy" allowfullscreen referrerpolicy="no-referrer-when-downgrade" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15852.587523863315!2d3.379205!3d6.524379!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2sLagos%2C%20Nigeria!5e0!3m2!1sen!2sng!4v1700000000000"></iframe>
          </div>
        </div>
      </div>

      <div class="contact-right">
        <form class="contact-form neo" action="/contact" method="post" novalidate>
          @csrf
          <input type="hidden" name="intent" value="general">

          <div class="intent-tabs" data-tabs>
            <div class="segmented intent" role="tablist" aria-label="Message intent">
              <button class="seg active" data-tab="general" type="button" aria-selected="true">General</button>
              <button class="seg" data-tab="quote" type="button" aria-selected="false">Request a Quote</button>
              <button class="seg" data-tab="booking" type="button" aria-selected="false">Booking</button>
            </div>
            <div class="intent-panels">
              <div class="tab-panel" data-tab-panel="general"></div>
              <div class="tab-panel" data-tab-panel="quote" hidden>
                <div class="field">
                  <label for="budget">Estimated budget</label>
                  <input type="text" id="budget" name="budget" placeholder="e.g. ₦200k – ₦500k (optional)">
                </div>
              </div>
              <div class="tab-panel" data-tab-panel="booking" hidden>
                <div class="field">
                  <label for="service">Service</label>
                  <input type="text" id="service" name="service" placeholder="Photography, Videography, 360° Booth (optional)">
                </div>
                <div class="field">
                  <label for="date">Preferred date</label>
                  <input type="date" id="date" name="date">
                </div>
              </div>
            </div>
          </div>

          <div class="form-grid">
            <div class="field">
              <label for="name">Full name</label>
              <input type="text" id="name" name="name" value="{{ old('name') }}" required aria-required="true" autocomplete="name" placeholder="Your name">
              @error('name')<div class="field-error">{{ $message }}</div>@enderror
            </div>
            <div class="field">
              <label for="email">Email</label>
              <input type="email" id="email" name="email" value="{{ old('email') }}" required aria-required="true" autocomplete="email" placeholder="you@example.com">
              @error('email')<div class="field-error">{{ $message }}</div>@enderror
            </div>
            <div class="field">
              <label for="phone">Phone</label>
              <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" autocomplete="tel" placeholder="(+234) 000 000 0000">
              @error('phone')<div class="field-error">{{ $message }}</div>@enderror
            </div>
            <div class="field full">
              <label for="message">Message</label>
              <textarea id="message" name="message" rows="6" required aria-required="true" placeholder="How can we help?"></textarea>
              @error('message')<div class="field-error">{{ $message }}</div>@enderror
            </div>
          </div>
          <div class="form-actions">
            <button type="submit" class="btn btn-primary">Send Message</button>
            <p class="form-disclaimer">By sending this message you agree to our <a href="/privacy">Privacy Policy</a>.</p>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
@endsection
