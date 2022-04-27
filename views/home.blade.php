@extends('layouts.master')

@section('content')
    @themeSlide('anasayfa', 'slide3')
    @include('page::widgets.home.call.call-2')
    @findChildren('hizmetlerimiz', 'home.services.box-8')
    @findChildren('bizimle-basariya-yuruyun', 'home.services.box-4')
    @portfolioLatest(10, 'home.latest-2')
    @portfolioBrands()
{{--    @include('page::widgets.home.about.about-1')--}}
{{--    @include('page::widgets.home.counters.counter-1')--}}
{{--    @include('page::widgets.home.testimonials.testimonial-1')--}}
{{--    @include('page::widgets.home.services.box-6-icon')--}}
    @include('contact::home')
@endsection