import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
  const header = document.querySelector('.site-header');
  const toggle = document.querySelector('.menu-toggle');
  const navLinks = document.querySelectorAll('.nav a');
  const backTop = document.querySelector('.backtotop');
  const bodyEl = document.body;

  function onScroll() {
    if (header) {
      const scrolled = window.scrollY > 8;
      header.classList.toggle('scrolled', scrolled);
    }
    if (backTop) backTop.classList.toggle('show', window.scrollY > 420);
  }


  onScroll();
  window.addEventListener('scroll', onScroll, { passive: true });

  if (backTop) backTop.addEventListener('click', () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });

  if (toggle && header) {
    toggle.addEventListener('click', () => {
      const isOpen = header.classList.toggle('open');
      toggle.setAttribute('aria-expanded', String(isOpen));
      bodyEl.classList.toggle('menu-open', isOpen);
    });

  const newsForm = document.querySelector('.newsletter-form');
  if (newsForm) {
    newsForm.addEventListener('submit', (e) => {
      e.preventDefault();
      const emailInput = newsForm.querySelector('input[type="email"]');
      const msg = document.querySelector('.news-sub');
      const valid = emailInput && emailInput.checkValidity();
      if (msg) msg.textContent = valid ? 'Thanks for subscribing.' : 'Please enter a valid email address.';
      if (valid) emailInput.value = '';
    });
  }
  }

  if (navLinks && header) {
    navLinks.forEach((a) => a.addEventListener('click', () => {
      header.classList.remove('open');
      if (toggle) toggle.setAttribute('aria-expanded', 'false');
      bodyEl.classList.remove('menu-open');
    }));
  }

  // Mobile nav: close button (single listener)
  const navClose = document.querySelector('.nav .nav-close');
  if (navClose && header) {
    navClose.addEventListener('click', () => {
      header.classList.remove('open');
      if (toggle) toggle.setAttribute('aria-expanded', 'false');
      bodyEl.classList.remove('menu-open');
    });
  }

  const sliders = document.querySelectorAll('.logos-slider');
  sliders.forEach((slider) => {
    const track = slider.querySelector('.logos-track');
    if (!track) return;
    const speed = Number(slider.getAttribute('data-speed') || 28);
    slider.style.setProperty('--logos-speed', `${Math.max(8, speed)}s`);
    const children = Array.from(track.children);
    children.forEach((c) => track.appendChild(c.cloneNode(true)));
  });

  const prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  const revealItems = document.querySelectorAll('.reveal-group .reveal');
  if (!prefersReduced && 'IntersectionObserver' in window) {
    const io = new IntersectionObserver((entries, observer) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add('in');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.18 });
    revealItems.forEach((el) => io.observe(el));
  } else {
    revealItems.forEach((el) => el.classList.add('in'));
  }

  const clients = document.getElementById('clients');
  if (clients) {
    const countEl = clients.querySelector('.count');
    if (countEl) {
      const target = parseInt((countEl.textContent || '0').replace(/[^0-9]/g, ''), 10) || 0;
      function animateCount() {
        if (prefersReduced) { countEl.textContent = target.toLocaleString() + '+'; return; }
        const dur = 1200;
        const start = performance.now();
        function tick(now) {
          const p = Math.min(1, (now - start) / dur);
          const eased = p < 0.5 ? 2*p*p : -1 + (4 - 2*p)*p; // easeInOutQuad
          const val = Math.round(eased * target);
          countEl.textContent = val.toLocaleString() + '+';
          if (p < 1) requestAnimationFrame(tick);
        }
        requestAnimationFrame(tick);
      }
      if ('IntersectionObserver' in window) {
        const io2 = new IntersectionObserver((entries, o) => {
          entries.forEach((e) => { if (e.isIntersecting) { animateCount(); o.unobserve(e.target); } });
        }, { threshold: 0.3 });
        io2.observe(countEl);
      } else {
        animateCount();
      }
    }
  }

  const pricingSections = document.querySelectorAll('[data-pricing]');
  pricingSections.forEach((pricingSection) => {
    const serviceTabs = pricingSection.querySelectorAll('.segmented .seg');
    const durationChips = pricingSection.querySelectorAll('.chips.duration .chip');
    const currencyChips = pricingSection.querySelectorAll('.chips.currency .chip');
    const addonChips = pricingSection.querySelectorAll('.chips.addons-chips .chip.addon');
    const cards = pricingSection.querySelectorAll('.pricing-card');

    const NGN = 'NGN';
    const USD = 'USD';
    const GBP = 'GBP';

    const base = {
      photo: {
        2: { basic: 80000, premium: 140000, deluxe: 220000 },
        4: { basic: 140000, premium: 220000, deluxe: 320000 },
        6: { basic: 200000, premium: 300000, deluxe: 420000 },
        8: { basic: 260000, premium: 380000, deluxe: 520000 },
      },
      video: {
        2: { basic: 110000, premium: 180000, deluxe: 260000 },
        4: { basic: 180000, premium: 270000, deluxe: 380000 },
        6: { basic: 260000, premium: 360000, deluxe: 500000 },
        8: { basic: 340000, premium: 460000, deluxe: 640000 },
      },
    };

    function activeValue(list, attr, fallback) {
      const active = Array.from(list).find((el) => el.classList.contains('active'));
      return active ? active.getAttribute(attr) : fallback;
    }

    function selectedAddonsTotal(currency) {
      const sum = Array.from(addonChips)
        .filter((c) => c.classList.contains('active'))
        .reduce((acc, el) => acc + Number(el.getAttribute('data-price') || 0), 0);
      const rateUSD = Number(pricingSection.getAttribute('data-rate-usd') || 0.0012);
      const rateGBP = Number(pricingSection.getAttribute('data-rate-gbp') || 0.00095);
      if (currency === USD) return sum * rateUSD;
      if (currency === GBP) return sum * rateGBP;
      return sum;
    }

    function format(amount, currency) {
      const opts = { style: 'currency', currency, maximumFractionDigits: (currency === USD || currency === GBP) ? 2 : 0 };
      try { return new Intl.NumberFormat(undefined, opts).format(amount); }
      catch { return (currency === USD ? '$' : (currency === GBP ? '£' : '₦')) + Math.round(amount).toLocaleString(); }
    }

    function updatePricing() {
      const service = activeValue(serviceTabs, 'data-service', 'photo');
      const hours = Number(activeValue(durationChips, 'data-hours', '2'));
      const currency = activeValue(currencyChips, 'data-currency', pricingSection.getAttribute('data-currency') || GBP);
      pricingSection.setAttribute('data-currency', currency);

      const rateUSD = Number(pricingSection.getAttribute('data-rate-usd') || 0.0012);
      const rateGBP = Number(pricingSection.getAttribute('data-rate-gbp') || 0.00095);
      const symbol = currency === USD ? '$' : (currency === GBP ? '£' : '₦');

      cards.forEach((card) => {
        const tier = card.getAttribute('data-tier');
        const baseAmtNGN = base[service][hours][tier];
        let total = baseAmtNGN;
        if (currency === USD) total = baseAmtNGN * rateUSD;
        if (currency === GBP) total = baseAmtNGN * rateGBP;
        total += selectedAddonsTotal(currency);

        const curEl = card.querySelector('.price .currency');
        const amtEl = card.querySelector('.price .amount');
        const hrsEls = card.querySelectorAll('.hours');
        if (curEl) curEl.textContent = symbol;
        const fractionDigits = (currency === USD || currency === GBP) ? 2 : 0;
        const rounded = fractionDigits === 2 ? Math.round(total * 100) / 100 : Math.round(total);
        if (amtEl) amtEl.textContent = rounded.toLocaleString(undefined, { minimumFractionDigits: fractionDigits, maximumFractionDigits: fractionDigits });
        hrsEls.forEach((el) => (el.textContent = String(hours))); 
      });
    }

    function makeExclusive(list, target) {
      list.forEach((el) => el.classList.toggle('active', el === target));
    }

    serviceTabs.forEach((tab) => tab.addEventListener('click', (e) => {
      makeExclusive(serviceTabs, e.currentTarget);
      serviceTabs.forEach((t) => t.setAttribute('aria-selected', t.classList.contains('active') ? 'true' : 'false'));
      updatePricing();
    }));

    durationChips.forEach((chip) => chip.addEventListener('click', (e) => {
      makeExclusive(durationChips, e.currentTarget);
      updatePricing();
    }));

    currencyChips.forEach((chip) => chip.addEventListener('click', (e) => {
      makeExclusive(currencyChips, e.currentTarget);
      updatePricing();
    }));

    addonChips.forEach((chip) => chip.addEventListener('click', (e) => {
      e.currentTarget.classList.toggle('active');
      updatePricing();
    }));

    updatePricing();
  });

  const faqFrames = document.querySelectorAll('[data-faq]');
  faqFrames.forEach((frame) => {
    const items = frame.querySelectorAll('.faq-item-neo');
    items.forEach((item) => {
      const btn = item.querySelector('.faq-q');
      const ans = item.querySelector('.faq-a');
      if (!btn || !ans) return;
      btn.addEventListener('click', () => {
        const expanded = btn.getAttribute('aria-expanded') === 'true';
        frame.querySelectorAll('.faq-q[aria-expanded="true"]').forEach((b) => b.setAttribute('aria-expanded','false'));
        frame.querySelectorAll('.faq-a:not([hidden])').forEach((a) => a.setAttribute('hidden',''));
        if (!expanded) { btn.setAttribute('aria-expanded','true'); ans.removeAttribute('hidden'); }
      });
    });
  });

  const tstl = document.querySelector('.tstl');
  const tstlDataMode = tstl && tstl.getAttribute('data-mode') === 'data';
  const feature = document.querySelector('.tstl2');
  if (feature && tstl && tstlDataMode) {
    const cards = Array.from(tstl.querySelectorAll('.tstl-card'));
    const reviews = cards.map((c) => {
      const quote = c.querySelector('.tstl-quote')?.textContent?.trim() || '';
      const name = c.querySelector('.tstl-name')?.textContent?.trim() || '';
      const role = c.querySelector('.tstl-role')?.textContent?.trim() || '';
      const avatar = c.querySelector('.tstl-avatar')?.getAttribute('src') || '';
      const stars = c.querySelectorAll('.tstl-stars svg').length || 5;
      return { quote, name, role, avatar, stars };
    });

    const imgEl = feature.querySelector('.tstl2-image');
    const idxEl = feature.querySelector('.tstl2-no');
    const nameEl = feature.querySelector('.tstl2-name');
    const textEl = feature.querySelector('.tstl2-text');
    const starsEl = feature.querySelector('.tstl2-stars');
    const prevBtn = feature.querySelector('.tstl2-nav.prev');
    const nextBtn = feature.querySelector('.tstl2-nav.next');

    function renderStars(n){
      if (!starsEl) return;
      starsEl.innerHTML = '';
      for(let i=0;i<n;i++){
        const s = document.createElement('span');
        s.innerHTML = "<svg viewBox='0 0 24 24' aria-hidden='true'><path d='M12 3l3.09 6.26L22 10.27l-5 4.87L18.18 22 12 18.56 5.82 22 7 15.14l-5-4.87 6.91-1.01z'/></svg>";
        starsEl.appendChild(s);
      }
    }

    let current = 0;
    function setActive(i){
      current = (i + reviews.length) % reviews.length;
      const r = reviews[current];
      if (imgEl) { imgEl.src = r.avatar; imgEl.alt = `${r.name} portrait`; }
      if (idxEl) idxEl.textContent = String(current + 1);
      if (nameEl) nameEl.textContent = r.name || '';
      if (textEl) textEl.textContent = r.quote || '';
      renderStars(r.stars || 5);
    }


    prevBtn && prevBtn.addEventListener('click', () => setActive(current - 1));
    nextBtn && nextBtn.addEventListener('click', () => setActive(current + 1));
    window.addEventListener('keydown', (e) => {
      if (e.key === 'ArrowLeft') setActive(current - 1);
      if (e.key === 'ArrowRight') setActive(current + 1);
    });

    setActive(0);
  }
  if (tstl && !tstlDataMode) {
    const viewport = tstl.querySelector('.tstl-viewport');
    const track = tstl.querySelector('.tstl-track');
    const cards = Array.from(tstl.querySelectorAll('.tstl-card'));
    const prev = tstl.querySelector('.tstl-nav.prev');
    const next = tstl.querySelector('.tstl-nav.next');
    const dotsWrap = document.querySelector('.tstl-dots');
    let index = 0;
    const reduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    let autoplay = !reduced && viewport?.getAttribute('data-autoplay') !== 'false';
    const interval = Number(viewport?.getAttribute('data-interval') || 5000);
    let timer;

    function getOffsetFor(i){
      const first = cards[0];
      const target = cards[(i + cards.length) % cards.length];
      const edge = target.offsetLeft - first.offsetLeft;
      const centerShift = (viewport.clientWidth - target.clientWidth) / 2;
      return -(edge - centerShift);
    }

    function setIndex(i){
      index = (i + cards.length) % cards.length;
      track.style.transform = `translateX(${getOffsetFor(index)}px)`;
      syncDots();
    }

    function makeDots(){
      if (!dotsWrap) return;
      dotsWrap.innerHTML = '';
      cards.forEach((_, i) => {
        const b = document.createElement('button');
        b.setAttribute('role','tab');
        b.setAttribute('aria-label', `Go to testimonial ${i+1}`);
        b.addEventListener('click', () => setIndex(i));
        dotsWrap.appendChild(b);
      });
      syncDots();
    }

    function syncDots(){
      if (!dotsWrap) return;
      Array.from(dotsWrap.children).forEach((el, i) => {
        el.classList.toggle('active', i === index);
        el.setAttribute('aria-selected', i === index ? 'true' : 'false');
      });
    }

    function start(){ if (autoplay) timer = setInterval(() => setIndex(index+1), interval); }
    function stop(){ clearInterval(timer); }

    let startX = 0; let dragging = false; let startTx = 0;
    function onDown(e){ dragging = true; startX = (e.touches?e.touches[0].clientX:e.clientX); startTx = getOffsetFor(index); stop(); }
    function onMove(e){ if(!dragging) return; const x=(e.touches?e.touches[0].clientX:e.clientX); const dx=x-startX; track.style.transform=`translateX(${startTx+dx}px)`; }
    function onUp(e){ if(!dragging) return; dragging=false; const x=(e.changedTouches?e.changedTouches[0].clientX:e.clientX); const dx=x-startX; const w=cards[0]?.clientWidth||viewport.clientWidth; if(Math.abs(dx)>w*0.2){ setIndex(index + (dx<0?1:-1)); } else { setIndex(index); } start(); }

    prev?.addEventListener('click', () => setIndex(index-1));
    next?.addEventListener('click', () => setIndex(index+1));
    viewport?.addEventListener('mouseenter', stop);
    viewport?.addEventListener('mouseleave', start);
    viewport?.addEventListener('touchstart', onDown, {passive:true});
    viewport?.addEventListener('touchmove', onMove, {passive:true});
    viewport?.addEventListener('touchend', onUp);
    viewport?.addEventListener('mousedown', onDown);
    window.addEventListener('mousemove', onMove);
    window.addEventListener('mouseup', onUp);
    window.addEventListener('resize', () => setIndex(index));
    window.addEventListener('keydown', (e) => { if (e.key==='ArrowRight') setIndex(index+1); if (e.key==='ArrowLeft') setIndex(index-1); });

    makeDots();
    setIndex(0);
    start();
  }
  // Team feature: strip -> detail interaction
  const teamFrame = document.querySelector('[data-team]');
  if (teamFrame) {
    const cards = Array.from(teamFrame.querySelectorAll('.tf-card'));
    const backBtn = teamFrame.querySelector('.tf-back');
    const nameEl = teamFrame.querySelector('.tfd-name');
    const roleEl = teamFrame.querySelector('.tfd-role');
    const bioEl = teamFrame.querySelector('.tfd-bio');
    const imgEl = teamFrame.querySelector('.tfd-image');
    let index = 0;
    function setDetail(i){
      if (!cards.length) return;
      index = (i + cards.length) % cards.length;
      const c = cards[index];
      if (nameEl) nameEl.textContent = c.getAttribute('data-name') || '';
      if (roleEl) roleEl.textContent = c.getAttribute('data-role') || '';
      if (bioEl) bioEl.textContent = c.getAttribute('data-bio') || '';
      const thumb = (c.querySelector('img') && c.querySelector('img').src) || '';
      const src = c.getAttribute('data-image') || thumb;
      if (imgEl) {
        // Show thumbnail immediately
        imgEl.src = thumb;
        imgEl.alt = `${c.getAttribute('data-name') || 'Team'} portrait`;
        // Preload hi-res then swap
        if (src && src !== thumb) {
          const pre = new Image();
          pre.onload = () => { if (imgEl) imgEl.src = src; };
          pre.src = src;
        }
      }
      teamFrame.setAttribute('data-mode','detail');
      teamFrame.setAttribute('data-index', String(index));
      const section = document.getElementById('team');
      section && section.scrollIntoView({ behavior:'smooth', block:'start' });
      cards.forEach((card, ii)=> card.setAttribute('aria-pressed', ii === index ? 'true':'false'));
    }
    function backToStrip(){
      teamFrame.setAttribute('data-mode','strip');
      const focusEl = cards[index] || cards[0];
      focusEl && focusEl.focus();
    }
    cards.forEach((card, i) => {
      card.setAttribute('type', 'button');
      card.setAttribute('aria-pressed', 'false');
      card.addEventListener('click', ()=> setDetail(i));
      card.addEventListener('keydown', (e)=>{ if(e.key==='Enter' || e.key===' '){ e.preventDefault(); setDetail(i);} });
    });
    backBtn && backBtn.addEventListener('click', backToStrip);
    window.addEventListener('keydown', (e) => {
      if (teamFrame.getAttribute('data-mode') !== 'detail') return;
      if (e.key === 'Escape') backToStrip();
      if (e.key === 'ArrowRight') setDetail(index + 1);
      if (e.key === 'ArrowLeft') setDetail(index - 1);
    });
  }
  const pf = document.querySelector('#portfolio');
  if (pf) {
    const chips = pf.querySelectorAll('.portfolio-filters .chip');
    const items = pf.querySelectorAll('.gallery .gallery-item');
    const gallery = pf.querySelector('.gallery');
    function apply(cat){
      items.forEach((it)=>{
        const v = cat === 'all' || it.getAttribute('data-cat') === cat;
        it.classList.toggle('hide', !v);
      });
      pf.setAttribute('data-filter', cat);
      if (gallery) {
        const isAll = cat === 'all';
        gallery.classList.toggle('collage', isAll);
        gallery.classList.add('no-gap');
      }
    }
    chips.forEach((chip)=>{
      chip.addEventListener('click', ()=>{
        chips.forEach((c)=>c.classList.toggle('active', c===chip));
        chips.forEach((c)=>c.setAttribute('aria-pressed', c.classList.contains('active') ? 'true' : 'false'));
        apply(chip.getAttribute('data-cat') || 'all');
      });
    });
    apply('all');

    const loadMoreBtn = pf.querySelector('.load-more');
    if (loadMoreBtn) {
      loadMoreBtn.addEventListener('click', () => {
        const hiddenItems = pf.querySelectorAll('.gallery .gallery-item[hidden]');
        hiddenItems.forEach((it) => it.removeAttribute('hidden'));
        loadMoreBtn.style.display = 'none';
        apply(pf.getAttribute('data-filter') || 'all');
      });
    }
  }

  const lightbox = document.querySelector('.lightbox');
  if (lightbox) {
    const lbImg = lightbox.querySelector('img');
    const lbClose = lightbox.querySelector('.lb-close');
    function hide(){
      lightbox.classList.remove('show');
      lightbox.setAttribute('aria-hidden','true');
      if (lbImg) lbImg.src = '';
    }
    function show(src, alt){
      if (lbImg) { lbImg.src = src; lbImg.alt = alt || 'Expanded gallery media'; }
      lightbox.classList.add('show');
      lightbox.setAttribute('aria-hidden','false');
    }
    document.addEventListener('click', (e) => {
      const link = e.target && e.target.closest ? e.target.closest('.gi-link') : null;
      if (link) {
        e.preventDefault();
        show(link.getAttribute('href') || '', link.getAttribute('aria-label') || '');
        return;
      }
      if (e.target === lightbox || e.target === lbClose) hide();
    });
    window.addEventListener('keydown', (e) => { if (e.key === 'Escape') hide(); });
  }

  // Video Showcase: lazy-load embeds on interaction
  const videoCards = document.querySelectorAll('.video-card.pro');
  function playVideo(card){
    if (!card || card.classList.contains('is-playing')) return;
    const provider = card.getAttribute('data-provider');
    const id = card.getAttribute('data-id');
    if (!id) return;
    let src = '';
    if (provider === 'youtube') {
      src = `https://www.youtube.com/embed/${id}?autoplay=1&rel=0&modestbranding=1&playsinline=1`; 
    }
    const iframe = document.createElement('iframe');
    iframe.setAttribute('src', src);
    iframe.setAttribute('title', card.getAttribute('aria-label') || 'Video');
    iframe.setAttribute('frameborder', '0');
    iframe.setAttribute('allow', 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share');
    iframe.setAttribute('allowfullscreen', '');
    iframe.style.width = '100%';
    iframe.style.height = '100%';
    card.classList.add('is-playing');
    card.innerHTML = '';
    card.appendChild(iframe);
  }
  videoCards.forEach((card)=>{
    card.addEventListener('click', ()=> playVideo(card));
    card.addEventListener('keydown', (e)=>{ if(e.key==='Enter' || e.key===' '){ e.preventDefault(); playVideo(card);} });
  });

  // Generic segmented tabs controller
  const tabRoots = document.querySelectorAll('[data-tabs]');
  tabRoots.forEach((root) => {
    const tabs = Array.from(root.querySelectorAll('.segmented .seg'));
    const panels = Array.from(root.querySelectorAll('[data-tab-panel]'));
    function setActive(name) {
      tabs.forEach((t) => {
        const isActive = t.getAttribute('data-tab') === name;
        t.classList.toggle('active', isActive);
        t.setAttribute('aria-selected', isActive ? 'true' : 'false');
      });
      panels.forEach((p) => {
        const show = p.getAttribute('data-tab-panel') === name;
        p.toggleAttribute('hidden', !show);
        p.setAttribute('aria-hidden', show ? 'false' : 'true');
      });
    }
    tabs.forEach((tab) => tab.addEventListener('click', (e) => {
      const name = tab.getAttribute('data-tab') || '';
      setActive(name);
    }));
    const initial = (tabs.find((t) => t.classList.contains('active'))?.getAttribute('data-tab'))
      || (tabs[0]?.getAttribute('data-tab')) || '';
    if (initial) setActive(initial);
  });

  // Contact page: keep hidden intent input in sync with tabs
  const intentTabs = document.querySelector('.intent-tabs');
  if (intentTabs) {
    const form = intentTabs.closest('form');
    const hidden = form?.querySelector('input[name="intent"]');
    const segs = intentTabs.querySelectorAll('.segmented.intent .seg');
    function syncIntent(){
      const active = intentTabs.querySelector('.segmented.intent .seg.active');
      if (hidden && active) hidden.value = active.getAttribute('data-tab') || 'general';
    }
    segs.forEach((seg)=> seg.addEventListener('click', syncIntent));
    syncIntent();
  }

  // Contact form: submit loading state
  const contactForm = document.querySelector('.contact-form');
  if (contactForm) {
    contactForm.addEventListener('submit', () => {
      const btn = contactForm.querySelector('button[type="submit"]');
      if (!btn) return;
      btn.classList.add('loading');
      const original = btn.textContent || '';
      btn.setAttribute('data-original', original);
      btn.textContent = 'Sending…';
    });
  }

  // Auth: password show/hide
  document.querySelectorAll('[data-pw-toggle]').forEach((btn) => {
    const id = btn.getAttribute('data-pw-toggle');
    const input = document.getElementById(id);
    if (!input) return;
    btn.addEventListener('click', () => {
      const isShown = input.getAttribute('type') === 'text';
      input.setAttribute('type', isShown ? 'password' : 'text');
      btn.setAttribute('aria-pressed', isShown ? 'false' : 'true');
      btn.setAttribute('aria-label', isShown ? 'Show password' : 'Hide password');
    });
  });

  // Dashboard: sidebar toggle (desktop/mobile)
  const dash = document.querySelector('.dash');
  if (dash) {
    const toggles = document.querySelectorAll('.dash-menu, .dash-close');
    if (toggles.length) {
      toggles.forEach((btn) => {
        btn.addEventListener('click', () => {
          dash.classList.toggle('open');
          document.body.classList.toggle('menu-open', dash.classList.contains('open'));
        });
      });
    }
  }

  // Dashboard: bookings list filters + search toggle
  const bookingsShell = document.querySelector('.bookings-shell');
  if (bookingsShell) {
    const tabs = bookingsShell.querySelectorAll('.bt-tab');
    const cards = bookingsShell.querySelectorAll('.booking-card');
    const searchToggle = bookingsShell.querySelector('.bt-search-toggle');
    const searchField = bookingsShell.querySelector('.bt-search-field');

    function setActiveTab(target) {
      tabs.forEach((tab) => {
        tab.classList.remove(
          'bt-tab--active',
          'bt-tab--active-all',
          'bt-tab--active-active',
          'bt-tab--active-completed',
          'bt-tab--active-cancelled',
        );
      });

      const filter = target.getAttribute('data-filter') || 'all';
      target.classList.add('bt-tab--active');
      if (filter === 'all') target.classList.add('bt-tab--active-all');
      if (filter === 'active') target.classList.add('bt-tab--active-active');
      if (filter === 'completed') target.classList.add('bt-tab--active-completed');
      if (filter === 'cancelled') target.classList.add('bt-tab--active-cancelled');
    }

    function applyFilter(filter) {
      cards.forEach((card) => {
        const status = card.getAttribute('data-status') || 'all';
        const show = filter === 'all' ? true : status === filter;
        card.style.display = show ? 'flex' : 'none';
      });
    }

    if (tabs.length && cards.length) {
      tabs.forEach((tab) => {
        tab.addEventListener('click', () => {
          const filter = tab.getAttribute('data-filter') || 'all';
          setActiveTab(tab);
          applyFilter(filter);
        });
      });
    }

    if (searchToggle && searchField) {
      searchToggle.addEventListener('click', (e) => {
        e.stopPropagation();
        bookingsShell.classList.toggle('search-open');
        if (bookingsShell.classList.contains('search-open')) {
          const input = searchField.querySelector('input');
          if (input) input.focus();
        }
      });

      document.addEventListener('click', (e) => {
        if (!bookingsShell.classList.contains('search-open')) return;
        if (e.target.closest && e.target.closest('.bt-search')) return;
        bookingsShell.classList.remove('search-open');
      });
    }
  }

  // Dashboard: sessions page calendar + slot selection (month/year aware)
  const sessionsShell = document.querySelector('.sessions');
  if (sessionsShell) {
    const daysContainer = sessionsShell.querySelector('.sched-days');
    const slots = sessionsShell.querySelectorAll('.slot');
    const slotsDateEl = sessionsShell.querySelector('.slots-date');
    const monthLabelEl = sessionsShell.querySelector('.sched-month-label');
    const prevBtn = sessionsShell.querySelector('.month-btn[aria-label="Previous month"]');
    const nextBtn = sessionsShell.querySelector('.month-btn[aria-label="Next month"]');

    if (!daysContainer || !monthLabelEl) {
      // Markup is not as expected; safely bail.
      // eslint-disable-next-line no-console
      console.warn('Sessions calendar markup missing required elements.');
      return;
    }

    const monthNames = [
      'January',
      'February',
      'March',
      'April',
      'May',
      'June',
      'July',
      'August',
      'September',
      'October',
      'November',
      'December',
    ];

    const labelText = monthLabelEl.textContent.trim();
    const labelParts = labelText.split(/\s+/);
    const initialMonthIndex = monthNames.indexOf(labelParts[0]);
    const parsedYear = labelParts[1] ? parseInt(labelParts[1], 10) : Number.NaN;
    const today = new Date();

    const state = {
      year: Number.isNaN(parsedYear) ? today.getFullYear() : parsedYear,
      monthIndex: initialMonthIndex >= 0 ? initialMonthIndex : today.getMonth(),
      selectedDay: null,
    };

    function renderMonthLabel() {
      monthLabelEl.textContent = `${monthNames[state.monthIndex]} ${state.year}`;
    }

    function updateSlotsDate(dayNumber) {
      if (!slotsDateEl || !dayNumber) return;
      const dateObj = new Date(state.year, state.monthIndex, dayNumber);
      const weekdayNames = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
      const weekday = weekdayNames[dateObj.getDay()];
      const monthName = monthNames[state.monthIndex];
      slotsDateEl.textContent = `${weekday} ${dayNumber} ${monthName}`;
    }

    function renderCalendar() {
      renderMonthLabel();

      const firstOfMonth = new Date(state.year, state.monthIndex, 1);
      const daysInMonth = new Date(state.year, state.monthIndex + 1, 0).getDate();
      const prevMonthDays = new Date(state.year, state.monthIndex, 0).getDate();

      // JS getDay(): 0=Sun..6=Sat, we want Monday start (0=Mon..6=Sun)
      const jsWeekday = firstOfMonth.getDay();
      const startIndex = (jsWeekday + 6) % 7;

      if (!state.selectedDay || state.selectedDay > daysInMonth) {
        const isCurrentMonth =
          state.year === today.getFullYear() && state.monthIndex === today.getMonth();
        state.selectedDay = isCurrentMonth ? today.getDate() : Math.min(15, daysInMonth);
      }

      let totalCells = startIndex + daysInMonth;
      totalCells = totalCells <= 35 ? 35 : 42; // 5 or 6 full weeks

      let html = '';
      for (let i = 0; i < totalCells; i += 1) {
        let label;
        let classes = 'sched-day';
        let disabled = false;

        if (i < startIndex) {
          // previous month (muted)
          label = prevMonthDays - (startIndex - 1 - i);
          classes += ' sched-day--muted';
          disabled = true;
        } else if (i < startIndex + daysInMonth) {
          // current month
          const dayNum = i - startIndex + 1;
          label = dayNum;

          const isToday =
            state.year === today.getFullYear() &&
            state.monthIndex === today.getMonth() &&
            dayNum === today.getDate();
          if (isToday) classes += ' sched-day--today';
          if (dayNum === state.selectedDay) classes += ' sched-day--selected';
        } else {
          // next month (muted)
          label = i - (startIndex + daysInMonth) + 1;
          classes += ' sched-day--muted';
          disabled = true;
        }

        const disabledAttr = disabled ? ' disabled' : '';
        html += `<button type="button" class="${classes}"${disabledAttr}>${label}</button>`;
      }

      daysContainer.innerHTML = html;

      const activeDays = daysContainer.querySelectorAll(
        '.sched-day:not(.sched-day--muted):not([disabled])',
      );
      activeDays.forEach((btn) => {
        btn.addEventListener('click', () => {
          const dayNumber = parseInt(btn.textContent || '', 10);
          if (Number.isNaN(dayNumber)) return;
          state.selectedDay = dayNumber;
          updateSlotsDate(dayNumber);
          renderCalendar();
        });
      });
    }

    // Month navigation updates month/year, then re-renders
    if (prevBtn) {
      prevBtn.addEventListener('click', () => {
        state.monthIndex -= 1;
        if (state.monthIndex < 0) {
          state.monthIndex = 11;
          state.year -= 1;
        }
        renderCalendar();
        updateSlotsDate(state.selectedDay);
      });
    }
    if (nextBtn) {
      nextBtn.addEventListener('click', () => {
        state.monthIndex += 1;
        if (state.monthIndex > 11) {
          state.monthIndex = 0;
          state.year += 1;
        }
        renderCalendar();
        updateSlotsDate(state.selectedDay);
      });
    }

    renderCalendar();
    updateSlotsDate(state.selectedDay);

    function selectSlot(slotEl) {
      if (!slotEl) return;
      slots.forEach((el) => el.classList.remove('slot--selected'));
      slotEl.classList.add('slot--selected');
    }

    if (slots.length) {
      const initialSelectedSlot =
        sessionsShell.querySelector('.slot--selected') || slots[0];
      if (initialSelectedSlot) {
        selectSlot(initialSelectedSlot);
      }

      slots.forEach((slotEl) => {
        slotEl.addEventListener('click', () => selectSlot(slotEl));
      });
    }

    // Sessions list: filter and sort
    const sessionsList = sessionsShell.querySelector('.sessions-list');
    if (sessionsList) {
      const filterButtons = sessionsList.querySelectorAll('.sessions-filter');
      const sessionCards = Array.from(
        sessionsList.querySelectorAll('.sessions-card'),
      );
      const sortSelect = sessionsList.querySelector('.sessions-sort-select');

      function applyFilter(filter) {
        sessionCards.forEach((card) => {
          const status = card.getAttribute('data-download-status') || 'available';
          const show = filter === 'all' || filter === status;
          card.style.display = show ? 'flex' : 'none';
        });
      }

      function applySort(mode) {
        const grid = sessionsList.querySelector('.sessions-grid');
        if (!grid) return;
        const cardsCopy = [...sessionCards];
        cardsCopy.sort((a, b) => {
          const aDate = a.getAttribute('data-session-date') || '';
          const bDate = b.getAttribute('data-session-date') || '';
          if (!aDate || !bDate) return 0;
          if (mode === 'oldest') {
            return aDate.localeCompare(bDate);
          }
          // default: most recent first
          return bDate.localeCompare(aDate);
        });

        cardsCopy.forEach((card) => {
          grid.appendChild(card);
        });
      }

      if (filterButtons.length) {
        filterButtons.forEach((btn) => {
          btn.addEventListener('click', () => {
            filterButtons.forEach((b) =>
              b.classList.remove('sessions-filter--active'),
            );
            btn.classList.add('sessions-filter--active');
            const filter = btn.getAttribute('data-filter') || 'all';
            applyFilter(filter);
          });
        });
      }

      if (sortSelect) {
        sortSelect.addEventListener('change', () => {
          const mode = sortSelect.value || 'recent';
          applySort(mode);
        });
        applySort(sortSelect.value || 'recent');
      }
    }
  }

  // Dashboard: session gallery interactions
  const galleryShell = document.querySelector('.session-gallery-shell');
  if (galleryShell) {
    galleryShell.classList.add('sg-watermarked');

    const modeButtons = galleryShell.querySelectorAll('.sg-mode-btn');
    const watermarkInput = galleryShell.querySelector('.sg-watermark-input');
    const selectAll = galleryShell.querySelector('.sg-select-all-input');
    const checks = galleryShell.querySelectorAll('.sg-check');
    const favButtons = galleryShell.querySelectorAll('.sg-fav');
    const items = Array.from(galleryShell.querySelectorAll('.sg-item'));
    const filterButtons = galleryShell.querySelectorAll('.sg-filter-btn');

    function setMode(mode) {
      galleryShell.classList.toggle('sg-mode-list', mode === 'list');
    }

    if (modeButtons.length) {
      modeButtons.forEach((btn) => {
        btn.addEventListener('click', () => {
          const mode = btn.getAttribute('data-gallery-mode') || 'grid';
          modeButtons.forEach((b) => {
            b.classList.remove('sg-mode-btn--active');
            b.setAttribute('aria-selected', 'false');
          });
          btn.classList.add('sg-mode-btn--active');
          btn.setAttribute('aria-selected', 'true');
          setMode(mode);
        });
      });
    }

    if (watermarkInput) {
      watermarkInput.addEventListener('change', () => {
        galleryShell.classList.toggle('sg-watermarked', watermarkInput.checked);
      });
    }

    function applyMediaFilter(filter) {
      items.forEach((item) => {
        const type = item.getAttribute('data-media-type') || 'photo';
        const show = filter === 'all' || filter === type;
        item.style.display = show ? '' : 'none';
      });
    }

    if (filterButtons.length) {
      filterButtons.forEach((btn) => {
        btn.addEventListener('click', () => {
          const filter = btn.getAttribute('data-filter') || 'all';
          filterButtons.forEach((b) => b.classList.remove('sg-filter-btn--active'));
          btn.classList.add('sg-filter-btn--active');
          applyMediaFilter(filter);
        });
      });
      applyMediaFilter('all');
    }

    function syncSelectAll() {
      if (!selectAll) return;
      const allChecked = items.length
        ? items.every((item) => {
            const input = item.querySelector('.sg-check');
            return input && input.checked;
          })
        : false;
      selectAll.checked = allChecked;
    }

    if (selectAll) {
      selectAll.addEventListener('change', () => {
        const isChecked = selectAll.checked;
        items.forEach((item) => {
          const input = item.querySelector('.sg-check');
          if (input) {
            input.checked = isChecked;
            item.classList.toggle('sg-item--selected', isChecked);
          }
        });
      });
    }

    if (checks.length) {
      checks.forEach((input) => {
        input.addEventListener('change', () => {
          const item = input.closest('.sg-item');
          if (item) item.classList.toggle('sg-item--selected', input.checked);
          syncSelectAll();
        });
      });
    }

    if (favButtons.length) {
      favButtons.forEach((btn) => {
        btn.addEventListener('click', () => {
          const pressed = btn.getAttribute('aria-pressed') === 'true';
          btn.setAttribute('aria-pressed', pressed ? 'false' : 'true');
        });
      });
    }

    // Lightbox
    const lightbox = galleryShell.querySelector('.sg-lightbox');
    const lightboxImg = lightbox?.querySelector('.sg-lightbox-img');
    const closeBtn = lightbox?.querySelector('.sg-lightbox-close');
    const prevBtnLb = lightbox?.querySelector('.sg-lightbox-prev');
    const nextBtnLb = lightbox?.querySelector('.sg-lightbox-next');
    let currentIndex = 0;

    function openLightbox(index) {
      if (!lightbox || !lightboxImg) return;
      const item = items[index];
      if (!item) return;
      const thumb = item.querySelector('.sg-thumb');
      const fullSrc = thumb?.getAttribute('data-full');
      const img = thumb?.querySelector('img');
      if (!fullSrc || !img) return;
      currentIndex = index;
      lightboxImg.src = fullSrc;
      lightboxImg.alt = img.alt || '';
      galleryShell.classList.add('sg-lightbox-open');
      lightbox.setAttribute('aria-hidden', 'false');
    }

    function closeLightbox() {
      if (!lightbox || !lightboxImg) return;
      lightboxImg.src = '';
      galleryShell.classList.remove('sg-lightbox-open');
      lightbox.setAttribute('aria-hidden', 'true');
    }

    function stepLightbox(delta) {
      const total = items.length;
      if (!total) return;
      currentIndex = (currentIndex + delta + total) % total;
      openLightbox(currentIndex);
    }

    items.forEach((item, index) => {
      const thumb = item.querySelector('.sg-thumb');
      if (!thumb) return;
      thumb.addEventListener('click', () => openLightbox(index));
    });

    if (closeBtn) {
      closeBtn.addEventListener('click', () => {
        closeLightbox();
      });
    }
    if (prevBtnLb) {
      prevBtnLb.addEventListener('click', () => {
        stepLightbox(-1);
      });
    }
    if (nextBtnLb) {
      nextBtnLb.addEventListener('click', () => {
        stepLightbox(1);
      });
    }

    document.addEventListener('keydown', (event) => {
      if (!galleryShell.classList.contains('sg-lightbox-open')) return;
      if (event.key === 'Escape') {
        closeLightbox();
      }
      if (event.key === 'ArrowRight') {
        stepLightbox(1);
      }
      if (event.key === 'ArrowLeft') {
        stepLightbox(-1);
      }
    });
  }

  // Dashboard: session downloads interactions
  const downloadsShell = document.querySelector('.session-download-shell');
  if (downloadsShell) {
    const cards = Array.from(downloadsShell.querySelectorAll('.sd-card'));
    const summaryPlan = downloadsShell.querySelector('[data-sd-current-plan]');

    function setActiveCard(targetCard) {
      if (!targetCard) return;
      cards.forEach((card) => card.classList.remove('sd-card--active'));
      targetCard.classList.add('sd-card--active');

      if (!summaryPlan) return;
      const titleEl = targetCard.querySelector('.sd-card-top h4');
      const sizeSource = targetCard.querySelector('.sd-meta-list li span:last-child');
      const titleText = titleEl ? titleEl.textContent.trim() : '';
      const sizeText = sizeSource ? sizeSource.textContent.trim() : '';
      summaryPlan.textContent = sizeText ? `${titleText} · ${sizeText}` : titleText;
    }

    if (cards.length) {
      cards.forEach((card) => {
        const planButtons = card.querySelectorAll('.sd-plan-btn');

        card.addEventListener('click', () => {
          setActiveCard(card);
        });

        if (planButtons.length) {
          planButtons.forEach((btn) => {
            btn.addEventListener('click', (event) => {
              event.stopPropagation();
              setActiveCard(card);
            });
          });
        }
      });
    }

    // Ensure the initially marked card syncs with the summary on load
    const initialActive = downloadsShell.querySelector('.sd-card.sd-card--active');
    if (initialActive) {
      setActiveCard(initialActive);
    }
  }

  // Dashboard: payments popup keypad
  const paymentsPage = document.querySelector('.payments');
  if (paymentsPage) {
    const amountEl = paymentsPage.querySelector('[data-pay-amount]');
    const keypadButtons = paymentsPage.querySelectorAll('[data-pay-key]');
    const chips = paymentsPage.querySelectorAll('[data-pay-chip]');
    const totalEl = paymentsPage.querySelector('[data-pay-total]');
    const remainingEl = paymentsPage.querySelector('[data-pay-remaining]');
    const methodButton = paymentsPage.querySelector('.pay-method-select');
    const methodLabel = paymentsPage.querySelector('.pay-method-current');
    const statusEl = paymentsPage.querySelector('[data-pay-status]');
    const paySubmit = paymentsPage.querySelector('.pay-submit');

    const totalValue = totalEl ? Number.parseFloat(totalEl.getAttribute('data-pay-total') || '0') || 0 : 0;
    let amountValue = '774.90';

    function formatAmount(value) {
      if (!value) return '$0.00';
      const numeric = Number.parseFloat(value.replace(/[^0-9.]/g, ''));
      if (Number.isNaN(numeric)) return '$0.00';
      return `$${numeric.toFixed(2)}`;
    }

    function updateAmountDisplay() {
      if (!amountEl) return;
      amountEl.textContent = formatAmount(amountValue);

      if (remainingEl) {
        const paidNumeric = Number.parseFloat(amountValue.replace(/[^0-9.]/g, '')) || 0;
        const remaining = Math.max(totalValue - paidNumeric, 0);
        const remainingFormatted = formatAmount(String(remaining));
        remainingEl.textContent = `Remaining after payment: ${remainingFormatted}`;
      }
    }

    function setAmountFromChip(chip) {
      const raw = chip.getAttribute('data-pay-chip') || '0';
      amountValue = String(raw);
      chips.forEach((c) => c.classList.remove('pay-chip--active'));
      chip.classList.add('pay-chip--active');
      updateAmountDisplay();
    }

    if (chips.length) {
      chips.forEach((chip) => {
        chip.addEventListener('click', () => {
          setAmountFromChip(chip);
        });
      });
    }

    if (keypadButtons.length) {
      keypadButtons.forEach((btn) => {
        btn.addEventListener('click', () => {
          const key = btn.getAttribute('data-pay-key') || '';
          if (!key) return;

          if (key === 'C') {
            amountValue = '0';
            chips.forEach((c) => c.classList.remove('pay-chip--active'));
            updateAmountDisplay();
            return;
          }

          if (key === '.') {
            if (!amountValue.includes('.')) {
              amountValue += '.';
            }
            updateAmountDisplay();
            return;
          }

          if (/^[0-9]$/.test(key)) {
            if (amountValue === '0') {
              amountValue = key;
            } else {
              amountValue += key;
            }
            chips.forEach((c) => c.classList.remove('pay-chip--active'));
            updateAmountDisplay();
          }
        });
      });
    }

    updateAmountDisplay();

    if (methodButton && methodLabel) {
      const methods = ['Card ending · 2084', 'Apple Pay', 'PayPal'];
      let currentMethodIndex = 0;
      methodButton.addEventListener('click', () => {
        currentMethodIndex = (currentMethodIndex + 1) % methods.length;
        methodLabel.textContent = methods[currentMethodIndex];
      });
    }

    if (paySubmit) {
      paySubmit.addEventListener('click', (event) => {
        event.preventDefault();
        const numeric = Number.parseFloat(amountValue.replace(/[^0-9.]/g, '')) || 0;
        if (numeric <= 0) {
          if (!statusEl) return;
          statusEl.textContent = 'Enter an amount greater than $0.00 to continue.';
          statusEl.classList.remove('pay-status--success');
          statusEl.classList.add('pay-status--error');
          return;
        }

        if (statusEl) {
          const methodText = methodLabel ? methodLabel.textContent.trim() : 'saved payment method';
          statusEl.textContent = `Payment of ${formatAmount(amountValue)} scheduled via ${methodText}.`;
          statusEl.classList.remove('pay-status--error');
          statusEl.classList.add('pay-status--success');
        }

        window.location.href = '/dashboard/payments/invoice/INV-2081';
      });
    }
  }

  // Dashboard: booking wizard card selection (steps 1–7)
  const bookingShells = document.querySelectorAll('.bw-shell');
  bookingShells.forEach((shell) => {
    const cards = shell.querySelectorAll('.bw-card--service');
    if (!cards.length) return;
    const selectionLabel = shell.querySelector('[data-selection-label]');

    cards.forEach((card) => {
      const isAddon = card.hasAttribute('data-addon');
      card.addEventListener('click', () => {
        if (isAddon) {
          // Step 6: allow multiple add-ons to be toggled
          card.classList.toggle('bw-card--selected');
        } else {
          // Other steps: single selection
          cards.forEach((c) => c.classList.remove('bw-card--selected'));
          card.classList.add('bw-card--selected');
        }

        const title = card.querySelector('.bw-card-title');
        if (selectionLabel && title) {
          selectionLabel.textContent = title.textContent;
        }
      });
    });
  });
})
;
