{{--@php Breadcrumbs::setView('portfolio::breadcrumbs'); @endphp--}}

@extends('layouts.master')

@section('content')

    @component('partials.components.title', ['breadcrumbs' => 'portfolio.view'])
        {{ $portfolio->title }}
    @endcomponent

    <div role="main" class="main">
        <div class="container">
            <div class="row align-items-center justify-content-between py-4">
                <div class="col-auto">
                    @if($previous = $portfolio->present()->previous)
                    <a href="{{ $previous->url }}">
                        <div class="d-flex align-items-center">
                            <i class="lnr lnr-arrow-left text-color-primary text-4 me-3"></i>
                            <div class="d-none d-md-block">
                                <span class="top-sub-title text-color-primary">ÖNCEKİ PROJE</span>
                                <h4 class="font-weight-bold text-3 mb-0">{{ $previous->title }}</h4>
                            </div>
                        </div>
                    </a>
                    @endif
                </div>
                <div class="col-auto text-center">
                    <a href="{{ route('portfolio.index') }}" class="link-color-dark font-weight-bold text-2">
                        <i class="fas fa-th-large me-1" aria-label="view all"></i>
                        PROJELER
                    </a>
                </div>
                <div class="col-auto">
                    @if($next = $portfolio->present()->next)
                    <a href="{{ $next->url }}">
                        <div class="d-flex align-items-center">
                            <div class="text-end d-none d-md-block">
                                <span class="top-sub-title text-color-primary">SONRAKİ PROJE</span>
                                <h4 class="font-weight-bold text-3 mb-0">{{ $next->title }}</h4>
                            </div>
                            <i class="lnr lnr-arrow-right text-color-primary text-4 ms-3"></i>
                        </div>
                    </a>
                    @endif
                </div>
            </div>
        </div>
        <hr class="my-0 opacity-1">
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 order-2 order-md-1">
                        <div class="row">
                            <div class="lightbox" data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}}">
                            @foreach($portfolio->present()->images(null,740,'resize',60) as $image)
                            <div class="col-12 mb-4">
                                <a href="{{ $image }}">
                                <span class="image-frame image-frame-style-1 image-frame-effect-1">
                                    <span class="image-frame-wrapper">
                                        <img src="{{ $image }}" class="img-fluid" alt="{{ $portfolio->title }}">
                                        <span class="image-frame-inner-border"></span>
                                        <span class="image-frame-action">
                                            <span class="image-frame-action-icon">
                                                <i class="lnr lnr-magnifier text-color-light"></i>
                                            </span>
                                        </span>
                                    </span>
                                </span>
                                </a>
                            </div>
                            @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 order-1 order-md-2 mb-5 mb-md-0">
                        <div data-plugin-sticky data-plugin-options="{'offset_top': 100}">
                            <div class="row mb-3">
                                <div class="col">
                                    <span class="top-sub-title text-color-primary">{{ trans('themes::portfolio.title.portfolio') }}</span>
                                    <h1 class="font-weight-bold mb-3">{{ $portfolio->title }}</h1>
                                    @if(!empty($portfolio->description))
                                        <div class="description">{!! $portfolio->description !!}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <span class="top-sub-title">{{ trans('themes::portfolio.title.year') }}</span>
                                    <hr class="my-2">
                                    <span class="font-primary text-color-dark font-weight-bold text-2">{{ $portfolio->start_at->formatLocalized('%B %Y') }}</span>
                                </div>
                                @if($portfolio->categories()->exists())
                                <div class="col-md-6 mb-4">
                                    <span class="top-sub-title">{{ trans('themes::portfolio.title.category') }}</span>
                                    <hr class="my-2">
                                    <ul class="list-inline mb-0">
                                        {!! $portfolio->categories->map(function($category){
                                                $link = '<li class="list-inline-item"><a class="badge bg-dark badge-sm badge-pill rounded-pill px-3 py-2 mb-2" href="'.$category->url.'">'.$category->title.'</a></li>';
                                                return $link;
                                        })->implode(' ') !!}
                                    </ul>
                                </div>
                                @endif
                                @if(!empty(@$portfolio->settings->partner))
                                <div class="col-md-6 mb-4 mb-md-0">
                                    <span class="top-sub-title">{{ trans('themes::portfolio.title.partner') }}</span>
                                    <hr class="my-2">
                                    <span class="font-primary text-color-dark font-weight-bold text-2">{{ $portfolio->settings->partner }}</span>
                                </div>
                                @endif
                                @if(!empty(@$portfolio->website))
                                <div class="col-md-6">
                                    <span class="top-sub-title">{{ trans('themes::portfolio.title.website') }}</span>
                                    <hr class="my-2">
                                    <a target="_blank" href="{{ $portfolio->website }}" class="link font-primary text-color-primary font-weight-semibold text-2">{{ $portfolio->website }}</a>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection