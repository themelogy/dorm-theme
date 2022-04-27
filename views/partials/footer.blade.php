@inject("menuService", "Modules\Menu\Services\MenuService")
<section class="section section-background section-height-3 overlay overlay-color-gradient overlay-show overlay-op-5 mt-2 mb-2" data-plugin-image-background data-plugin-options="{'imageUrl': '{{ Theme::url('img/yurt-anka.jpg') }}'}">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-light mb-0">YURT OLMANIN ÖTESİNDE…</h2>
                <p class="font-weight-light text-light mb-0">Sizlere belki aile ortamınızı sağlayamayız ama, ahşap mobilyalı, parke kaplı odalarımızla, geniş ve ferah yemekhanemizle, güler yüzlü personelimizle ev ortamınızı aratmayız.</p>
            </div>
        </div>
    </div>
</section>
<footer id="footer" class="footer bg-light mt-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 align-self-center text-center mb-5 mb-lg-0">
                @location('cebeci-sube', 'home.location')
            </div>
            <div class="col-lg-3 text-center text-lg-start mb-5 mb-lg-0">
                <h4 class="font-weight-bold text-4-5 pb-1 mb-3">{{ $menuService->title('corporate') }}</h4>
                {!! Menu::render('corporate', \Themes\Dorm\Presenter\FooterMenuLinksPresenter::class) !!}
            </div>
            <div class="col-lg-3 text-center text-lg-start">
                <h4 class="font-weight-bold text-4-5 pb-1 mb-3">{{ $menuService->title('services') }}</h4>
                {!! Menu::render('services', \Themes\Dorm\Presenter\FooterMenuLinksPresenter::class) !!}
            </div>
            <div class="col-lg-3 text-center text-lg-start">
                <h4 class="font-weight-bold text-4-5 pb-1 mb-3">{{ $menuService->title('dormitory') }}</h4>
                {!! Menu::render('dormitory', \Themes\Dorm\Presenter\FooterMenuLinksPresenter::class) !!}
            </div>
        </div>
    </div>
    <div class="footer-copyright footer-copyright-container-border-top footer-copyright-container-border-top-opacity bg-light border-top">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <div><a href="https://www.mesalegrup.com.tr/" rel="nofollow"><img style="max-height: 50px;" src="{{ Theme::url('images/logo/mesale-grup.png') }}" alt="Meşale Grup" /></a> - @lang('themes::theme.footer.copyright', ['date' => \Carbon\Carbon::now()->year, 'company' => setting('theme::company-name')])</div>
                </div>
            </div>
        </div>
    </div>
</footer>