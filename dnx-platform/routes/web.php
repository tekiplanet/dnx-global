<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/pricing', function () {
    return view('pricing');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/contact', function (Request $request) {
    $validated = $request->validate([
        'name' => 'required|string|max:120',
        'email' => 'required|email',
        'phone' => 'nullable|string|max:60',
        'message' => 'required|string|max:3000',
    ]);

    return back()->with('status', "Thanks, your message has been sent. We'll get back to you shortly.");
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::post('/login', function (Request $request) {
    $validated = $request->validate([
        'email' => 'required|email',
        'password' => 'required|string|min:6',
    ]);

    return back()->with('status', 'Logged in successfully (stub).');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::post('/register', function (Request $request) {
    $validated = $request->validate([
        'name' => 'required|string|max:120',
        'email' => 'required|email',
        'password' => 'required|string|min:6|confirmed',
        'terms' => 'accepted',
        'privacy' => 'accepted',
    ]);

    return back()->with('status', 'Account created successfully (stub).');
});

Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
});

Route::post('/forgot-password', function (Request $request) {
    $validated = $request->validate([
        'identifier' => 'required|string|max:120',
    ]);

    return back()->with('status', 'If an account exists for that email or phone, a reset link has been sent.');
});

Route::get('/reset-password/{token}', function (string $token) {
    return view('auth.reset-password', compact('token'));
});

Route::post('/reset-password', function (Request $request) {
    $validated = $request->validate([
        'token' => 'required|string',
        'password' => 'required|string|min:6|confirmed',
    ]);

    return redirect('/login')->with('status', 'Password reset successfully (stub).');
});

Route::get('/dashboard', function () {
    return view('dashboard.home');
});

Route::get('/dashboard/home', function () {
    return view('dashboard.home');
});

Route::get('/dashboard/bookings', function () {
    return view('dashboard.bookings');
});

Route::get('/dashboard/payments', function () {
    return view('dashboard.payments');
});

Route::get('/dashboard/payments/invoice/{id}', function (string $id) {
    return view('dashboard.invoice-details', ['id' => $id]);
});

Route::get('/dashboard/sessions', function () {
    return view('dashboard.sessions');
});

Route::get('/dashboard/sessions/{id}/gallery', function (string $id) {
    return view('dashboard.session-gallery', ['id' => $id]);
});

Route::get('/dashboard/sessions/{id}/download', function (string $id) {
    return view('dashboard.session-download', ['id' => $id]);
});

Route::get('/dashboard/bookings/{id}', function (string $id) {
    return view('dashboard.booking-details', ['id' => $id]);
});

Route::get('/dashboard/booking/new/step1-service', function () {
    return view('dashboard.booking-new-step1');
});

Route::get('/dashboard/booking/new/step2-session', function () {
    return view('dashboard.booking-new-step2');
});

Route::get('/dashboard/booking/new/step3-package', function () {
    return view('dashboard.booking-new-step3');
});

Route::get('/dashboard/booking/new/step4-location', function () {
    return view('dashboard.booking-new-step4');
});

Route::get('/dashboard/booking/new/step5-coverage', function () {
    return view('dashboard.booking-new-step5');
});

Route::get('/dashboard/booking/new/step6-addons', function () {
    return view('dashboard.booking-new-step6');
});

Route::get('/dashboard/booking/new/step7-review', function () {
    return view('dashboard.booking-new-step7');
});

Route::get('/dashboard/booking/new/step8-confirmation', function () {
    return view('dashboard.booking-new-step8');
});
