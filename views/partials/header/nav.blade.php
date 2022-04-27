<div class="header-nav header-nav-light-dropdown"><!-- header-nav-top-line -->
    <div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1">
        <nav class="collapse">
            {!! Menu::render('header', \Themes\Dorm\Presenter\HeaderMenuPresenter::class) !!}
        </nav>
    </div>
{{--    <a href="#" class="header-search-button order-1 text-4 order-2 mt-1 me-xl-2 ms-3">--}}
{{--        <i class="icon icon-magnifier font-weight-bold"></i>--}}
{{--    </a>--}}
    <button class="header-btn-collapse-nav order-3 ms-3" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
        <span class="hamburguer">
            <span></span>
            <span></span>
            <span></span>
        </span>
        <span class="close">
            <span></span>
            <span></span>
        </span>
    </button>
</div>