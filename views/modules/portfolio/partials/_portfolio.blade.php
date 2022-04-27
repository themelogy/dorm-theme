<div class="col-sm-6 col-md-4 col-lg-4 mb-3">
    <div class="text-center">
        <a href="{{ $portfolio->url }}">
                                <span class="image-frame image-frame-style-1 image-frame-effect-1 mb-3">
                                    <span class="image-frame-wrapper">
                                        <img src="{{ $portfolio->present()->firstImage(600,400,'fit',80) }}" class="img-fluid"
                                             alt="">
                                        <span class="image-frame-inner-border"></span>
                                        <span class="image-frame-action image-frame-action-effect-1 image-frame-action-sm">
                                            <span class="image-frame-action-icon">
                                                <i class="lnr lnr-link text-color-light"></i>
                                            </span>
                                        </span>
                                    </span>
                                </span>
        </a>
        <h2 class="font-weight-bold line-height-2 text-3 mb-0">
            <a href="{{ $portfolio->url }}" class="link-color-dark">{{ $portfolio->title }}</a>
        </h2>
    </div>
</div>