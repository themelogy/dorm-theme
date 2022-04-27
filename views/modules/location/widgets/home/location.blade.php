<a href="@homepage">
    <img style="filter: grayscale(1) opacity(.5); height: 70px !important;" src="{{ Theme::url('images/logo/logo-icon-dark.svg') }}" class="mb-lg-3" alt="@setting('theme::company-name')">
</a>
<div>
    {{ $location->present()->address }}<br/>
    {{ $location->phone1 }}<br/>
    {!! Html::email($location->email) !!}
</div>
@include('partials.components.socials')