@extends('layouts.base')

@section('hero')
    @include('partials.header')
    @yield('page-hero')
@endsection

@section('content')
    @yield('page-content')
    @include('partials.footer')
@endsection
