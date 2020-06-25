{{--
  Template Name: Custom landingPage
--}}


@extends('layouts.landing')

@section('content')
    @include('partials.landing.landing-main-head')
    @include('partials.landing.landing-main-content-first')
    @include('partials.landing.landing-main-content-section')
    @include('partials.landing.landing-main-content-section-primary')
    @include('partials.landing.landing-main-content-section-secundary')
    @include('partials.landing.landing-main-footer')

@endsection
