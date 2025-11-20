 @extends('layouts.base')

@section('title', 'Log in — DNX Global')

 

@section('content')
<div class="auth-bg">
  <div class="auth-blobs" aria-hidden="true"></div>
  <div class="auth-card" role="dialog" aria-labelledby="loginTitle" aria-describedby="loginDesc">
    <span class="edge-glow" aria-hidden="true"></span>
    <span class="glass-noise" aria-hidden="true"></span>
    <span class="corner-peel" aria-hidden="true"></span>
    <button type="button" class="auth-close" aria-label="Close">
      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-width="2"><path d="M6 6l12 12M18 6l-12 12"/></svg>
    </button>
    <div class="auth-head">
      <div class="auth-avatar" aria-hidden="true">
        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M12 12c2.761 0 5-2.686 5-6s-2.239-6-5-6-5 2.686-5 6 2.239 6 5 6z" transform="translate(0 4)" fill="rgba(242,246,250,.85)"/>
          <circle cx="12" cy="8" r="4" fill="rgba(242,246,250,.9)"/>
          <path d="M4 20c0-3.314 3.582-6 8-6s8 2.686 8 6" stroke="rgba(198,208,220,.9)" stroke-width="1.2"/>
        </svg>
      </div>
      <h1 id="loginTitle" class="auth-title">Welcome Back</h1>
      <p id="loginDesc" class="auth-sub">Please enter your info to sign in to DNX Global</p>
    </div>

    <div class="auth-socials" aria-label="Continue with social accounts">
      <a href="#" class="sbtn" aria-label="Continue with Google">
        <svg width="18" height="18" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path fill="#FFC107" d="M43.611 20.083H42V20H24v8h11.303C33.602 32.91 29.197 36 24 36c-6.627 0-12-5.373-12-12s5.373-12 12-12c3.059 0 5.842 1.153 7.957 3.043l5.657-5.657C34.826 6.053 29.65 4 24 4 12.955 4 4 12.955 4 24s8.955 20 20 20 20-8.955 20-20c0-1.341-.138-2.65-.389-3.917z"/><path fill="#FF3D00" d="M6.306 14.691l6.571 4.817C14.403 16.367 18.83 12 24 12c3.059 0 5.842 1.153 7.957 3.043l5.657-5.657C34.826 6.053 29.65 4 24 4c-7.79 0-14.426 4.418-17.694 10.691z"/><path fill="#4CAF50" d="M24 44c5.132 0 9.807-1.97 13.29-5.183l-6.142-5.192C29.12 35.447 26.702 36 24 36c-5.178 0-9.576-3.077-11.292-7.46l-6.54 5.037C9.394 39.466 16.13 44 24 44z"/><path fill="#1976D2" d="M43.611 20.083H42V20H24v8h11.303c-1.02 3.003-3.225 5.409-6.155 6.625l.001.001 6.142 5.192C38.87 36.798 44 31.602 44 24c0-1.341-.138-2.65-.389-3.917z"/></svg>
      </a>
      <a href="#" class="sbtn" aria-label="Continue with Facebook">
        <svg width="18" height="18" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path fill="#1877F2" d="M24 12.073C24 5.404 18.627 0 12 0S0 5.404 0 12.073C0 18.1 4.388 23.094 10.125 24v-8.437H7.078V12.07h3.047V9.414c0-3.007 1.792-4.668 4.533-4.668 1.312 0 2.686.235 2.686.235v2.953h-1.513c-1.49 0-1.953.927-1.953 1.878v2.26h3.328l-.532 3.493h-2.796V24C19.612 23.094 24 18.1 24 12.073z"/></svg>
      </a>
      <a href="#" class="sbtn" aria-label="Continue with Apple">
        <svg width="18" height="18" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path fill="#F2F6FA" d="M16.365 1.43c0 1.14-.433 2.19-1.15 2.99-.743.84-1.956 1.49-3.07 1.4-.14-1.12.454-2.26 1.17-3.03.76-.82 2.07-1.41 3.05-1.36zM20.74 17.07c-.59 1.38-.88 1.98-1.64 3.2-1.06 1.72-2.56 3.87-4.47 3.9-1.04.02-1.75-.31-2.77-.31-1.03 0-1.76.33-2.78.32-1.91-.02-3.38-1.95-4.44-3.66-3.04-4.9-3.36-10.67-1.49-13.7.99-1.58 2.56-2.58 4.34-2.6 1.01-.02 1.97.35 2.75.35.78 0 1.93-.44 3.24-.38 1.1.04 2.1.46 2.9 1.2-1.15.92-1.66 2.28-1.56 3.6.12 1.45.86 2.77 2.02 3.61.6.44 1.4.8 2.14.83-.17.51-.35 1.01-.58 1.54z"/></svg>
      </a>
    </div>

    <div class="auth-divider"></div>

    @if (session('status'))
      <div class="auth-status">{{ session('status') }}</div>
    @endif

    <form class="auth-form" method="POST" action="{{ url('/login') }}" novalidate>
      @csrf
      <div class="auth-field">
        <label for="email">Email Address</label>
        <div class="control">
          <svg class="icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" stroke="currentColor" stroke-width="1.5"><rect x="3" y="5" width="18" height="14" rx="3"/><path d="M3 7l9 6 9-6"/></svg>
          <input id="email" class="auth-input padded" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter your email...">
        </div>
        @error('email')
          <div class="auth-error">{{ $message }}</div>
        @enderror
      </div>
      <div class="auth-field">
        <label for="password">Password</label>
        <div class="control">
          <svg class="icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" stroke="currentColor" stroke-width="1.5"><rect x="4" y="10" width="16" height="10" rx="2"/><path d="M8 10V8a4 4 0 018 0v2"/></svg>
          <input id="password" class="auth-input padded padded-r" type="password" name="password" required autocomplete="current-password" placeholder="••••••••••">
          <button type="button" class="toggle-btn" data-toggle="password" aria-label="Show password" aria-pressed="false">
            <svg class="eye" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M2 12s4-7 10-7 10 7 10 7-4 7-10 7S2 12 2 12Z" stroke-width="1.6"/><circle cx="12" cy="12" r="3.2" stroke-width="1.6"/></svg>
            <svg class="eye-off" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M3 3l18 18" stroke-width="1.6"/><path d="M10.6 10.6A3 3 0 0115 12c0 .6-.18 1.16-.49 1.62M9 15a3 3 0 01-1.5-2.6 3 3 0 01.58-1.77" stroke-width="1.6"/><path d="M2 12s4-7 10-7a9.8 9.8 0 015.3 1.6M22 12s-4 7-10 7a9.8 9.8 0 01-5.3-1.6" stroke-width="1.6"/></svg>
          </button>
        </div>
        @error('password')
          <div class="auth-error">{{ $message }}</div>
        @enderror
      </div>
      <div class="auth-row">
        <span></span>
        <a class="auth-help" href="{{ url('/forgot-password') }}">Forgot Password?</a>
      </div>
      <a href="{{ url('/dashboard') }}" class="btn btn-primary auth-submit">Sign in</a>
    </form>

    <p class="auth-meta">Don't have an account yet? <a href="{{ url('/register') }}">Sign up</a></p>
  </div>
</div>
@endsection

@push('scripts')
<script>
  document.addEventListener('DOMContentLoaded', function () {
    var btn = document.querySelector('[data-toggle="password"]');
    if (!btn) return;
    var input = document.getElementById('password');
    function setState(show) {
      input.setAttribute('type', show ? 'text' : 'password');
      btn.setAttribute('aria-pressed', show ? 'true' : 'false');
      btn.setAttribute('aria-label', show ? 'Hide password' : 'Show password');
    }
    btn.addEventListener('click', function () {
      var isShown = input.getAttribute('type') === 'text';
      setState(!isShown);
      input.focus({ preventScroll: true });
      try {
        var len = input.value.length;
        input.setSelectionRange(len, len);
      } catch (e) {}
    });
  });
</script>
@endpush
