@extends('layouts.master')

@section('content')
        @component('partials.components.title', ['breadcrumbs' => 'contact'])
            @lang('themes::contact.title')
        @endcomponent
        @locations('contact.maps')
        <section class="section p-0 mt-5">
            <div class="container mb-lg-5">
                @locations('contact.locations')
            </div>
        </section>
        <div class="section p-0 mb-5">
            <div class="container">
                <div class="row text-center">
                    <div class="col">
                        <h2 class="font-weight-bold appear-animation" data-appear-animation="fadeInUpShorter">@lang('themes::contact.contact us')</h2>
                        <p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">@lang('themes::contact.messages.info')</p>
                    </div>
                </div>
                @includeIf('contact::form')
            </div>
        </div>
@endsection