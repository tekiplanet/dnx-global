@extends('layouts.base')

@section('title', 'Forgot Password — DNX Global')

@section('content')
<div class="auth-bg">
  <div class="auth-blobs" aria-hidden="true"></div>
  <div class="auth-card" role="dialog" aria-labelledby="fpTitle" aria-describedby="fpDesc">
    <span class="edge-glow" aria-hidden="true"></span>
    <span class="glass-noise" aria-hidden="true"></span>
    <span class="corner-peel" aria-hidden="true"></span>
    <button type="button" class="auth-close" aria-label="Close">
      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-width="2"><path d="M6 6l12 12M18 6l-12 12"/></svg>
    </button>

    <div class="auth-head">
      <div class="auth-avatar" aria-hidden="true">
        <svg width="26" height="26" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <rect x="3" y="5" width="18" height="14" rx="3" fill="rgba(242,246,250,.85)"/>
          <path d="M3 7l9 6 9-6" stroke="rgba(15,20,26,.8)" stroke-width="1.2"/>
        </svg>
      </div>
      <h1 id="fpTitle" class="auth-title">Forgot password?</h1>
      <p id="fpDesc" class="auth-sub">Enter your email or phone and we'll send you a reset link</p>
    </div>

    @if (session('status'))
      <div class="auth-status">{{ session('status') }}</div>
    @endif

    <form class="auth-form" method="POST" action="{{ url('/forgot-password') }}" novalidate>
      @csrf
      <div class="auth-field">
        <label for="identifier">Email or phone number</label>
        <div class="control">
          <svg class="icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" stroke="currentColor" stroke-width="1.5"><rect x="3" y="5" width="18" height="14" rx="3"/><path d="M3 7l9 6 9-6"/></svg>
          <input id="identifier" class="auth-input padded" type="text" name="identifier" value="{{ old('identifier') }}" required autocomplete="username" placeholder="Enter your email or phone number...">
        </div>
        @error('identifier')
          <div class="auth-error">{{ $message }}</div>
        @enderror
      </div>

      <button type="submit" class="btn btn-primary auth-submit">Send reset link</button>
    </form>

    <p class="auth-meta">Remembered your password? <a href="{{ url('/login') }}">Sign in</a></p>
  </div>
</div>
@endsection
