@extends('layouts.master')

@php
    seo_helper()->setTitle('404 - Sayfa bulunamadı');
@endphp

@section('content')
    @component('partials.components.title')
        404 - Sayfa Bulunamadı
    @endcomponent
    <section class="section">
        <img src="{!! Theme::url('img/others/lamp-holder.png') !!}" class="img-fluid lamp-style-2 position-absolute transform-center-x appear-animation" data-appear-animation="fadeIn" alt="" />
        <div class="container">
            <div class="row justify-content-center text-center py-2 mb-5">
                <div class="col-md-8 col-lg-6 pt-4 mt-5">
                    <h1 class="font-weight-bold text-6 mb-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200"><strong class="d-block font-weight-bold text-20">404!</strong>SAYFA BULUNAMADI</h1>
                    <a href="{!! LaravelLocalization::getLocalizedURL(locale(), route('homepage')) !!}" class="btn btn-primary btn-rounded btn-v-3 btn-h-3 font-weight-bold appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800"><i class="fas fa-angle-left me-3 text-3"></i> ANASAYFAYA DÖN</a>
                </div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
@stop
