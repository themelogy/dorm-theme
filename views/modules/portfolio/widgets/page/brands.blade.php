<div class="main mt-5 mb-5">
    <div class="container">
        <div class="row">
            @foreach($brands as $brand)
            <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
                <a href="{{ $brand->website }}" rel="nofollow" target="_blank">
                <div class="card card-style-1 mb-4">
                    <img src="{{ $brand->present()->firstImage(null,100,'resize',80) }}" class="card-img-top" alt="" />
                    <div class="card-body p-1">
                        <h4 class="font-weight-bold mb-3 text-center">{{ $brand->title }}</h4>
                    </div>
                </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>