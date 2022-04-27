@extends('layouts.master')

@section('content')
    <div role="main" class="main">

        @component('partials.components.title', ['breadcrumbs' => 'portfolio.index'])
            {{ $category->title }}
        @endcomponent

        <div class="container">
            <ul class="nav sort-source mb-3 mt-3">
                <li class="nav-item" data-option-value="*"><a class="nav-link active" href="{{ route('portfolio.index') }}">TÜMÜ</a></li>
                @foreach($categories as $category)
                <li class="nav-item" data-option-value=".{{ $category->slug }}"><a class="nav-link text-uppercase" href="{{ $category->url }}">{{ $category->title }}</a>
                </li>
                @endforeach
            </ul>

            <div class="row">
                @foreach($category->portfolios as $portfolio)
                    @include('portfolio::partials._portfolio')
                @endforeach
            </div>

            <div class="row align-items-center justify-content-between mt-5 mb-5">
                <nav aria-label="Page navigation example">
                    {!! $portfolios->links('partials.pagination') !!}
                </nav>
            </div>

        </div>
    </div>
@endsection