@extends('layouts.master')

@section('content')
    @component('partials.components.title', ['breadcrumbs' => 'blog'])
        {{ trans('themes::blog.title') }}
    @endcomponent
    <div class="container mb-5 mt-5">
        <div class="row">
            @include('blog::partials.sidebar')
            <div class="col-md-8 col-lg-9 order-1 mb-5 mb-md-0">
                @foreach($posts as $post)
                    @include('blog::partials._post')
                @if(!$loop->last)
                <hr class="my-5">
                @endif
                @endforeach
                @if($posts->links()!="")
                <hr class="mt-5 mb-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto">
                        {!! $posts->links() !!}
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
@stop
