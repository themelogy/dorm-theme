<section class="section section-content-pull-top-5 p-0">
    <div class="container-fluid px-0">
        <div class="row text-center mb-4">
            <div class="col-md-12">
                <span class="top-sub-title text-color-primary text-uppercase">@lang('themes::theme.home.best alt')</span>
                <h1 class="font-weight-bold">@lang('themes::theme.home.best')</h1>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-md-6 col-xl-2-5 order-1">
                @foreach($children->slice(0,1) as $p)
                <div class="row justify-content-end bg-primary pe-xl-5 px-0 py-5">
                    <div class="col-lg-12 col-xl-10 ps-0 pe-4 appear-animation"
                         data-appear-animation="fadeInLeftShorter">
                        <div class="icon-box icon-box-reverse icon-box-style-7">
                            <div class="icon-box-icon border-0">
                                <i class="lnr lnr-tag text-color-light text-10"></i>
                            </div>
                            <div class="icon-box-info">
                                <div class="icon-box-info-title">
                                    <h2 class="text-color-light text-4">{{ $p->title }}</h2>
                                </div>
                                <p class="text-color-light mb-0">{{ strip_tags($p->body) }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @foreach($children->slice(2,1) as $p)
                <div class="row justify-content-end bg-light pe-xl-5 px-0 py-5">
                    <div class="col-lg-12 col-xl-10 ps-0 pe-4 appear-animation"
                         data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">
                        <div class="icon-box icon-box-reverse icon-box-style-7">
                            <div class="icon-box-icon border-0">
                                <i class="lnr lnr-magnifier text-color-primary text-10"></i>
                            </div>
                            <div class="icon-box-info border-0">
                                <div class="icon-box-info-title">
                                    <h2 class="text-4">{{ $p->title }}</h2>
                                </div>
                                <p class="mb-0">{{ strip_tags($p->body) }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="col-md-6 col-xl-2-5 order-3">
                @foreach($children->slice(1,1) as $p)
                <div class="row bg-light ps-xl-5 px-0 py-5">
                    <div class="col-lg-12 col-xl-10 ps-4 pe-0 appear-animation"
                         data-appear-animation="fadeInRightShorter">
                        <div class="icon-box icon-box-style-7">
                            <div class="icon-box-icon border-0">
                                <i class="lnr lnr-tablet text-color-primary text-10"></i>
                            </div>
                            <div class="icon-box-info">
                                <div class="icon-box-info-title">
                                    <h2 class="text-4">{{ $p->title }}</h2>
                                </div>
                                <p class="mb-0">{{ strip_tags($p->body) }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @foreach($children->slice(3,1) as $p)
                <div class="row bg-primary ps-xl-5 px-0 py-5">
                    <div class="col-lg-12 col-xl-10 ps-4 pe-0 appear-animation"
                         data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
                        <div class="icon-box icon-box-style-7">
                            <div class="icon-box-icon border-0">
                                <i class="lnr lnr-screen text-color-light text-10"></i>
                            </div>
                            <div class="icon-box-info">
                                <div class="icon-box-info-title">
                                    <h2 class="text-color-light text-4">{{ $p->title }}</h2>
                                </div>
                                <p class="text-color-light mb-0">{{ strip_tags($p->body) }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="col-lg-1-5 d-none d-xl-block order-2 p-0 z-index-1">
                <div class="card card-style-4 border-0 scale-1">
                    <div class="image-frame rounded">
                        <span class="image-frame-wrapper">
                            <img src="{{ $page->present()->firstImage(600,400,'fit',80) }}" class="card-img-top rounded" alt="{{ $page->title }}">
                        </span>
                    </div>
                    <div class="overflow-hidden">
                        <div class="card-body rounded bg-dark-5 text-center appear-animation"
                             data-appear-animation="maskDown">
                            <h3 class="mb-0 text-color-light opacity-4 text-5">{{ $page->settings->slogan->{locale()} }}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>