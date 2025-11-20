@extends('layouts.base')

@section('title', 'Reset Password — DNX Global')

@section('content')
<div class="auth-bg">
  <div class="auth-blobs" aria-hidden="true"></div>
  <div class="auth-card" role="dialog" aria-labelledby="rpTitle" aria-describedby="rpDesc">
    <span class="edge-glow" aria-hidden="true"></span>
    <span class="glass-noise" aria-hidden="true"></span>
    <span class="corner-peel" aria-hidden="true"></span>
    <button type="button" class="auth-close" aria-label="Close">
      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-width="2"><path d="M6 6l12 12M18 6l-12 12"/></svg>
    </button>

    <div class="auth-head">
      <div class="auth-avatar" aria-hidden="true">
        <svg width="26" height="26" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <rect x="4" y="10" width="16" height="10" rx="2" fill="rgba(242,246,250,.85)"/>
          <path d="M8 10V8a4 4 0 018 0v2" stroke="rgba(15,20,26,.8)" stroke-width="1.2"/>
        </svg>
      </div>
      <h1 id="rpTitle" class="auth-title">Reset your password</h1>
      <p id="rpDesc" class="auth-sub">Enter a new password for your account</p>
    </div>

    @if (session('status'))
      <div class="auth-status">{{ session('status') }}</div>
    @endif

    <form class="auth-form" method="POST" action="{{ url('/reset-password') }}" novalidate>
      @csrf
      <input type="hidden" name="token" value="{{ $token ?? request()->route('token') }}">

      <div class="auth-field">
        <label for="password">New Password</label>
        <div class="control">
          <svg class="icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" stroke="currentColor" stroke-width="1.5"><rect x="4" y="10" width="16" height="10" rx="2"/><path d="M8 10V8a4 4 0 018 0v2"/></svg>
          <input id="password" class="auth-input padded padded-r" type="password" name="password" required autocomplete="new-password" placeholder="Create a new password">
          <button type="button" class="toggle-btn" data-toggle="password" aria-label="Show password" aria-pressed="false">
            <svg class="eye" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M2 12s4-7 10-7 10 7 10 7-4 7-10 7S2 12 2 12Z" stroke-width="1.6"/><circle cx="12" cy="12" r="3.2" stroke-width="1.6"/></svg>
            <svg class="eye-off" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M3 3l18 18" stroke-width="1.6"/><path d="M10.6 10.6A3 3 0 0115 12c0 .6-.18 1.16-.49 1.62M9 15a3 3 0 01-1.5-2.6 3 3 0 01-.58-1.77" stroke-width="1.6"/><path d="M2 12s4-7 10-7a9.8 9.8 0 015.3 1.6M22 12s-4 7-10 7a9.8 9.8 0 01-5.3-1.6" stroke-width="1.6"/></svg>
          </button>
        </div>
        <div class="pw-meter" id="pwMeter" data-score="0" aria-live="polite">
          <div class="bar"><span style="width:0%"></span></div>
          <div class="label" id="pwLabel">Too weak</div>
        </div>
        @error('password')
          <div class="auth-error">{{ $message }}</div>
        @enderror
      </div>

      <div class="auth-field">
        <label for="password_confirmation">Confirm new password</label>
        <div class="control">
          <svg class="icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" stroke="currentColor" stroke-width="1.5"><rect x="4" y="10" width="16" height="10" rx="2"/><path d="M8 10V8a4 4 0 018 0v2"/></svg>
          <input id="password_confirmation" class="auth-input padded padded-r" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm your new password">
          <button type="button" class="toggle-btn" data-toggle="password" aria-label="Show password" aria-pressed="false">
            <svg class="eye" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M2 12s4-7 10-7 10 7 10 7-4 7-10 7S2 12 2 12Z" stroke-width="1.6"/><circle cx="12" cy="12" r="3.2" stroke-width="1.6"/></svg>
            <svg class="eye-off" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M3 3l18 18" stroke-width="1.6"/><path d="M10.6 10.6A3 3 0 0115 12c0 .6-.18 1.16-.49 1.62M9 15a3 3 0 01-1.5-2.6 3 3 0 01-.58-1.77" stroke-width="1.6"/><path d="M2 12s4-7 10-7a9.8 9.8 0 015.3 1.6M22 12s-4 7-10 7a9.8 9.8 0 01-5.3-1.6" stroke-width="1.6"/></svg>
          </button>
        </div>
      </div>

      <ul class="pw-req" id="pwReq">
        <li data-k="len"><span class="ic">•</span><span>At least 6 characters</span></li>
        <li data-k="low"><span class="ic">•</span><span>Contains a lowercase letter</span></li>
        <li data-k="upp"><span class="ic">•</span><span>Contains an uppercase letter</span></li>
        <li data-k="num"><span class="ic">•</span><span>Contains a number</span></li>
        <li data-k="spe"><span class="ic">•</span><span>Contains a special character</span></li>
      </ul>

      <button type="submit" class="btn btn-primary auth-submit">Reset password</button>
    </form>

    <p class="auth-meta">Back to <a href="{{ url('/login') }}">Sign in</a></p>
  </div>
</div>
@endsection

@push('scripts')
<script>
  document.addEventListener('DOMContentLoaded', function () {
    var toggles = document.querySelectorAll('.auth-field .toggle-btn[data-toggle="password"]');
    toggles.forEach(function(btn){
      var control = btn.closest('.control');
      var input = control ? control.querySelector('input[type="password"], input[type="text"]') : null;
      if(!input) return;
      function setState(show){
        input.setAttribute('type', show ? 'text' : 'password');
        btn.setAttribute('aria-pressed', show ? 'true' : 'false');
        btn.setAttribute('aria-label', show ? 'Hide password' : 'Show password');
      }
      btn.addEventListener('click', function(){
        var isShown = input.getAttribute('type') === 'text';
        setState(!isShown);
        input.focus({preventScroll:true});
        try{var len = input.value.length; input.setSelectionRange(len, len);}catch(e){}
      });
    });

    var pw = document.getElementById('password');
    var meter = document.getElementById('pwMeter');
    var req = document.getElementById('pwReq');
    if(pw && meter){
      var bar = meter.querySelector('.bar>span');
      var labelEl = document.getElementById('pwLabel');
      function score(v){
        if(!v) return 0;
        var s = 0;
        if(v.length >= 6) s++;
        if(/[a-z]/.test(v)) s++;
        if(/[A-Z]/.test(v)) s++;
        if(/[0-9]/.test(v)) s++;
        if(/[^A-Za-z0-9]/.test(v)) s++;
        if(v.length >= 12 && s < 5) s++;
        if(s > 5) s = 5;
        return s;
      }
      function update(){
        var v = pw.value || '';
        var sc = score(v);
        var widths = [0,20,40,60,80,100];
        var labels = ['Too weak','Weak','Fair','Good','Strong','Very strong'];
        meter.setAttribute('data-score', String(sc));
        if(bar) bar.style.width = widths[sc] + '%';
        if(labelEl) labelEl.textContent = labels[sc];
        if(req){
          var m = {
            len: v.length >= 6,
            low: /[a-z]/.test(v),
            upp: /[A-Z]/.test(v),
            num: /[0-9]/.test(v),
            spe: /[^A-Za-z0-9]/.test(v)
          };
          Object.keys(m).forEach(function(k){
            var li = req.querySelector('li[data-k="'+k+'"]');
            if(li){ if(m[k]) li.classList.add('ok'); else li.classList.remove('ok'); }
          });
        }
      }
      pw.addEventListener('input', update);
      update();
    }
  });
</script>
@endpush
