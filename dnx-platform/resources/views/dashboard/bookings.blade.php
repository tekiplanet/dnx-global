@extends('layouts.dashboard')

@section('title', 'Bookings — DNX Global')

@section('page-content')
  <section class="d-hero bookings-hero">
    <div class="bookings-hero-head">
      <div>
        <h2>Bookings overview</h2>
        <p>Review all your sessions, track their status, and jump into what's next.</p>
      </div>
      <div class="bookings-hero-cta">
        <a href="{{ url('/dashboard/booking/new/step1-service') }}" class="btn-primary-outline"> NEW BOOKING</a>
      </div>
    </div>
    <div class="bookings-meta">
      <div class="bm-item bm-item--active">
        <span class="k">Active bookings</span>
        <span class="v">3</span>
      </div>
      <div class="bm-item bm-item--completed">
        <span class="k">Completed</span>
        <span class="v">24</span>
      </div>
      <div class="bm-item bm-item--cancelled">
        <span class="k">Cancelled</span>
        <span class="v">2</span>
      </div>
    </div>
  </section>

  <section class="bookings-shell">
    <header class="bookings-toolbar">
      <div class="bt-left">
        <div class="bt-tabs">
          <button class="bt-tab bt-tab--active bt-tab--active-all" data-filter="all">All</button>
          <button class="bt-tab" data-filter="active">Active</button>
          <button class="bt-tab" data-filter="completed">Completed</button>
          <button class="bt-tab" data-filter="cancelled">Cancelled</button>
        </div>
      </div>
      <div class="bt-right">
        <div class="bt-search">
          <button type="button" class="bt-search-toggle" aria-label="Toggle search"></button>
          <div class="bt-search-field">
            <input type="text" placeholder="Search by client, service or ID">
          </div>
        </div>
      </div>
    </header>

    <div class="booking-list">
      <article class="booking-card bc--active" data-status="active">
        <div class="bc-main">
          <div class="bc-title-row">
            <h3>Engagement shoot #322</h3>
            <span class="bc-status">Active</span>
          </div>
          <div class="bc-meta-row">
            <span>Sat, 23 Nov · 10:00 AM</span>
            <span>· Hyde Park</span>
            <span>· 2h coverage</span>
          </div>
          <div class="bc-client-row">
            <span class="label">Client</span>
            <span class="value">Jane Cooper</span>
          </div>
        </div>
        <div class="bc-side">
          <div class="bc-amount">$640</div>
          <a href="{{ url('/dashboard/bookings/322') }}" class="bc-cta">View details</a>
        </div>
      </article>

      <article class="booking-card bc--cancelled" data-status="cancelled">
        <div class="bc-main">
          <div class="bc-title-row">
            <h3>Studio portrait session #319</h3>
            <span class="bc-status">Cancelled</span>
          </div>
          <div class="bc-meta-row">
            <span>Tue, 26 Nov · 2:00 PM</span>
            <span>· Studio A</span>
            <span>· 1.5h session</span>
          </div>
          <div class="bc-client-row">
            <span class="label">Client</span>
            <span class="value">Leslie Alexander</span>
          </div>
        </div>
        <div class="bc-side">
          <div class="bc-amount">$420</div>
          <a href="{{ url('/dashboard/bookings/319') }}" class="bc-cta">View details</a>
        </div>
      </article>

      <article class="booking-card bc--completed" data-status="completed">
        <div class="bc-main">
          <div class="bc-title-row">
            <h3>Brand campaign shoot #288</h3>
            <span class="bc-status">Completed</span>
          </div>
          <div class="bc-meta-row">
            <span>Fri, 15 Nov · 11:30 AM</span>
            <span>· Downtown studio</span>
            <span>· 4h + edits</span>
          </div>
          <div class="bc-client-row">
            <span class="label">Client</span>
            <span class="value">Acme Studio</span>
          </div>
        </div>
        <div class="bc-side">
          <div class="bc-amount">$1,250</div>
          <a href="{{ url('/dashboard/bookings/288') }}" class="bc-cta">View details</a>
        </div>
      </article>
    </div>
  </section>
@endsection

@push('scripts')
<script>
  document.addEventListener('DOMContentLoaded', function(){
    var tabs = document.querySelectorAll('.bt-tab');
    var cards = document.querySelectorAll('.booking-card');
    var shell = document.querySelector('.bookings-shell');
    var searchToggle = document.querySelector('.bt-search-toggle');
    var searchField = document.querySelector('.bt-search-field');
    if(!tabs.length || !cards.length) return;

    function setActiveTab(target){
      tabs.forEach(function(tab){
        tab.classList.remove('bt-tab--active','bt-tab--active-all','bt-tab--active-active','bt-tab--active-completed','bt-tab--active-cancelled');
      });

      var filter = target.getAttribute('data-filter') || 'all';
      target.classList.add('bt-tab--active');
      if(filter === 'all') target.classList.add('bt-tab--active-all');
      if(filter === 'active') target.classList.add('bt-tab--active-active');
      if(filter === 'completed') target.classList.add('bt-tab--active-completed');
      if(filter === 'cancelled') target.classList.add('bt-tab--active-cancelled');
    }

    function applyFilter(filter){
      cards.forEach(function(card){
        var status = card.getAttribute('data-status') || 'all';
        var show = false;
        if(filter === 'all'){
          show = true;
        }else{
          show = (status === filter);
        }
        card.style.display = show ? 'flex' : 'none';
      });
    }

    tabs.forEach(function(tab){
      tab.addEventListener('click', function(){
        var filter = tab.getAttribute('data-filter') || 'all';
        setActiveTab(tab);
        applyFilter(filter);
      });
    });

    if(searchToggle && shell && searchField){
      searchToggle.addEventListener('click', function(e){
        e.stopPropagation();
        shell.classList.toggle('search-open');
        if(shell.classList.contains('search-open')){
          var input = searchField.querySelector('input');
          if(input){ input.focus(); }
        }
      });

      document.addEventListener('click', function(e){
        if(!shell.classList.contains('search-open')) return;
        if(e.target.closest('.bt-search')) return;
        shell.classList.remove('search-open');
      });
    }
  });
</script>
@endpush
