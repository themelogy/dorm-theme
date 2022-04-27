<div class="owl-carousel owl-theme carousel-stripes nav-style-7 nav-color-light nav-size-2" data-plugin-options="{'responsive': {'0': {'items': 1}, '479': {'items': 1}, '768': {'items': 2}, '979': {'items': 3}, '1199': {'items': 4}}, 'dots': false, 'nav': true}">
    @foreach($portfolios as $portfolio)
    <div>
        <div class="carousel-stripe-item image-frame overlay overlay-color-dark image-frame-style-5">
            <div class="image-frame-wrapper overlay overlay-show overlay-op-5 bg-dark-3">
                <div class="image-frame-background appear-animation" data-appear-animation="fadeInUpShorter" data-plugin-image-background data-plugin-options="{'imageUrl': '{{ $portfolio->present()->firstImage(null,600,'resize',80) }}'}"></div>
                <div class="image-frame-bottom-bar image-frame-bottom-bar-style-2 px-4 py-3">
                    <div class="image-frame-bottom-bar-info text-color-light-2">
                        <h2 class="text-color-light font-weight-bold text-4 mb-0">{{ $portfolio->title }}</h2>
                        {!! strip_tags($portfolio->present()->categories()) !!}
                    </div>
                    <a href="{{ $portfolio->url }}">
                        <div class="image-frame-bottom-bar-action">
                            <i class="lnr lnr-link text-color-light"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>