@extends('layouts.master')

@section('content')
    @component('partials.components.title', ['breadcrumbs' => 'page'])
        {{ $page->title }}
    @endcomponent
    <section class="section section-height-2">
        <div class="container">
            @if(isset($page->parent) && ($page->parent->settings->show_menu ?? false) && !($page->settings->full_page ?? false))
                @include('page::style.left-sidebar')
            @elseif($page && ($page->settings->list_page ?? false))
                @include('page::style.list')
            @elseif($page && !($page->settings->list_page ?? false) && !($page->parent->settings->show_menu ?? false))
                @include('page::style.full-width')
            @endif
        </div>
    </section>
    <div class="clearfix"></div>
@stop
