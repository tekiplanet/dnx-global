@extends('layouts.base')

@section('title', 'Dashboard — DNX Global')

@section('content')
<div class="dash">
  <aside class="dash-sidebar" aria-label="Sidebar navigation">
    <button class="dash-close" aria-label="Close sidebar"></button>
    <div class="dash-sb-head">
      <a href="{{ url('/dashboard') }}" class="dash-brand">DNX Global</a>
    </div>
    <nav class="dash-nav" role="navigation">
      <a href="{{ url('/dashboard') }}" class="dn-link {{ request()->is('dashboard') || request()->is('dashboard/home') ? 'active' : '' }}">
        <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M3 12l9-9 9 9"/><path d="M9 21V9h6v12"/></svg>
        <span>Home</span>
      </a>
      <a href="{{ url('/dashboard/bookings') }}" class="dn-link {{ (request()->is('dashboard/bookings') || request()->is('dashboard/bookings/*') || request()->is('dashboard/booking/*')) ? 'active' : '' }}">
        <svg viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="14" rx="3"/><path d="M3 7l9 6 9-6"/></svg>
        <span>Bookings</span>
      </a>
      <a href="{{ url('/dashboard/sessions') }}" class="dn-link {{ (request()->is('dashboard/sessions') || request()->is('dashboard/sessions/*')) ? 'active' : '' }}">
        <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M12 7v6l4 2"/></svg>
        <span>Sessions</span>
      </a>
      <a href="{{ url('/dashboard/payments') }}" class="dn-link {{ (request()->is('dashboard/payments') || request()->is('dashboard/payments/*')) ? 'active' : '' }}">
        <svg viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="16" rx="2"/><path d="M3 10h18"/></svg>
        <span>Payments</span>
      </a>
      <a href="#" class="dn-link">
        <svg viewBox="0 0 24 24"><path d="M12 20l9-4-9-4-9 4 9 4z"/><path d="M12 12l9-4-9-4-9 4 9 4z"/></svg>
        <span>Projects</span>
      </a>
    </nav>
    <div class="dash-sb-foot">
      <a href="{{ url('/logout') }}" class="dn-link logout">
        <svg viewBox="0 0 24 24"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/><path d="M16 17l5-5-5-5"/><path d="M21 12H9"/></svg>
        <span>Logout</span>
      </a>
    </div>
  </aside>

  <main class="dash-main">
    <div class="dash-top">
      <button class="dash-menu" aria-label="Toggle menu">
        <span></span>
      </button>
      <div class="dash-top-right">
        <button class="icon-btn" aria-label="Notifications">
          <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M18 8a6 6 0 10-12 0c0 7-3 7-3 9h18c0-2-3-2-3-9"/><path d="M13.73 21a2 2 0 01-3.46 0"/></svg>
        </button>
        <div class="user-mini">
          <div class="avatar">
            <img src="https://images.unsplash.com/photo-1525130413817-d45c1d127c42?q=80&amp;w=200&amp;h=200&amp;fit=crop&amp;auto=format" alt="User avatar">
          </div>
          <span class="name">Hi, Emmanuel</span>
        </div>
      </div>
    </div>

    <section class="dash-content">
      @yield('page-content')
    </section>
  </main>
</div>
@endsection
