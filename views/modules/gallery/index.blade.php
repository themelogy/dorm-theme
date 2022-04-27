@extends('layouts.master')

@section('content')
    @component('partials.components.title', ['breadcrumbs' => 'gallery.index'])
        @lang('themes::gallery.meta.title')
    @endcomponent
    <div role="main" class="main">
        <div class="container mt-5 pb-3 mb-5">
            <div class="row align-items-center mb-4">
                <div class="col-12 col-md-8 col-lg-9">
                    <ul id="portfolioLoadMoreFilter"
                        class="nav sort-source justify-content-center justify-content-md-start mb-4 mb-md-0"
                        data-sort-id="portfolio" data-option-key="filter"
                        data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*'}">
                        <li class="nav-item" data-option-value="*"><a class="nav-link active" href="#">SHOW ALL</a></li>
                        @foreach($albums as $album)
                            <li class="nav-item" data-option-value=".{{ $album->slug }}"><a class="nav-link text-uppercase" href="#">{{ $album->title }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-12 ps-3">
                    <div class="sort-destination-loader sort-destination-loader-showing">
                        <ul id="portfolioLoadMoreWrapper" class="portfolio-list sort-destination lightbox" data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}}"
                            data-sort-id="portfolio" data-ajax-url="ajax/portfolio-overlay-ajax-load-more.html"
                            data-total-pages="3">
                            @foreach($albums as $album)
                                @foreach($album->files as $file)
                                <li class="col-12 col-md-6 col-lg-4 p-0 isotope-item {{ $album->slug }}">
                                    <div class="portfolio-item appear-animation"
                                         data-appear-animation="fadeInUpShorter">

                                        <a href="{{ \Imagy::getImage($file->filename, "albumImage", ['width' => 1100, 'height' => 800, 'mode' => 'fit', 'quality' => 80]) }}">
											<span class="image-frame image-frame-style-1 image-frame-effect-1">
												<span class="image-frame-wrapper">
													<img src="{{ \Imagy::getImage($file->filename, 'albumImage', ['width' => 600, 'height' => 400, 'mode' => 'fit', 'quality' => 80]) }}" class="img-fluid" alt="{{ $album->title }}">
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
                                </li>
                                @endforeach
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection