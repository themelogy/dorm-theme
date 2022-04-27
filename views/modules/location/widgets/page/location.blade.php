<div class="card bg-light-5 border-0">
    <div class="card-body">
        <span class="top-sub-title">@setting('theme::company-name')</span>
        <h3 class="font-weight-bold text-4">{{ $location->name }}</h3>
        <span class="d-block">
        <i class="fa fa-map-marker me-2"></i> {!! $location->present()->address !!}</span>
        <a href="#"><span class="__cf_email__"><i class="fa fa-envelope me-2"></i> {!! Html::email($location->email) !!}</span></a>
        <span class="d-block mb-3">
        <a href="tel:{{ $location->phone1 }}"><i class="fa fa-phone-alt me-2"></i> {{ $location->phone1 }}</a>
        <br/>&nbsp;@if($location->mobile)<a href="tel:{{ $location->mobile }}"><i class="fa fa-mobile-alt me-2"></i> {{ $location->mobile }}</a>@endif
    </span>
        <a href="https://www.google.com/maps/dir/Current+Location/{{ $location->lat }},{{ $location->long }}"
           class="btn btn-primary btn-2 font-weight-bold learn-more" target="_blank" rel="nofollow">
            YOL TARİFİ AL
        </a>
    </div>
</div>