{{--<div class="top-banner" style="background: url({{ Theme::url('img/imza-1.jpg') }}) no-repeat; background-size: contain; background-position: center; height: 50px; background-color: #bd0000;"></div>--}}
<div class="header-top">
    <div class="header-top-container container">
        <div class="header-row">
            <div class="header-column justify-content-start">
                <ul class="list-infos">
                    <li class="list-info-item-increase-size d-lg-flex">
                        <i class="lnr lnr-phone-handset text-color-primary font-weight-semibold me-1"></i>
                        <a href="tel:@setting('theme::phone')" class="text-color-primary"><strong>@setting('theme::phone')</strong></a>
                    </li>
                    <li class="list-info-item-increase-icon-size d-none d-lg-flex">
                        <i class="lnr lnr-envelope me-1"></i>
                        <a href="mailto:{!! Html::email(setting('theme::email')) !!}">{!! Html::email(setting('theme::email')) !!}</a>
                    </li>
{{--                    <li class="list-info-item-increase-icon-size">--}}
{{--                        <i class="icon icon-location-pin text-2 position-relative top-1 me-1"></i>--}}
{{--                        @setting('theme::address')--}}
{{--                    </li>--}}
                </ul>
            </div>
            <div class="header-column justify-content-end">
                <ul class="nav">
                    <li class="nav-item">
                        <a href="{{ url(locale()) }}" class="nav-link dropdown-menu-toggle py-2" id="dropdownLanguage" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            {{ mb_strtoupper(LaravelLocalization::getCurrentLocaleNative()) }}	<i class="fas fa-angle-down fa-sm"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownLanguage">
                            @foreach(LaravelLocalization::getSupportedLocales() as $locale => $supportedLocale)
                            <li><a href="{{ url($locale) }}" class="no-skin"> {{ mb_strtoupper($supportedLocale['native']) }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                </ul>
                @include('partials.components.socials')
{{--                <a href="{{ route('contact') }}" class="btn btn-primary btn-3 font-weight-bold text-1 rounded-0 ms-3">@lang('themes::contact.contact us')</a>--}}
            </div>
        </div>
    </div>
</div>