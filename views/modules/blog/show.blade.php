@extends('layouts.master')

@section('content')
    @component('partials.components.title', ['breadcrumbs' => 'blog.show'])
        {{ $post->title }}
    @endcomponent
    <div class="container mb-5 mt-5">
        <div class="row">
            @include('blog::partials.sidebar')
            <div class="col-md-8 col-lg-9 order-1 mb-5 mb-md-0">
                <article class="blog-post">
                    <header class="blog-post-header mb-4">
                        <a href="{{ $post->url }}">
                            <img src="{{ $post->present()->firstImage(1170,488,'fit',80) }}" class="img-fluid" alt="{{ $post->title }}" />
                        </a>
                        <i class="post-format-icon lnr lnr-picture bg-primary text-color-light text-7 p-3"></i>
                    </header>
                    <h2 class="text-5">
                        <a href="{{ $post->url }}" class="link-color-dark">
                            {{ $post->title }}
                        </a>
                    </h2>
                    <div class="d-flex mb-3">
                        <span class="post-date text-color-primary pe-3">{{ $post->created_at->formatLocalized('%d %B %Y') }}</span>
                    </div>
                    {!! $post->content !!}
                </article>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
@stop
