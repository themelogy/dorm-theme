<div class="container mb-5 pb-3 pt-3">
    <div class="row justify-content-center mb-5">
        @foreach($children as $page)
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card flip-card text-center rounded">
                    <div class="flip-front rounded p-5">
                        <div class="flip-content my-4" style="min-height: 235px;">
                            <strong class="font-weight-bold text-color-dark line-height-1 text-13 mb-3 d-inline-block">0{{ $loop->iteration }}</strong>
                            <h4 class="font-weight-bold text-color-primary text-4">{{ $page->title }}</h4>
                            <p class="mb-0">{{ strip_tags($page->body) }}</p>
                        </div>
                    </div>
                    <div class="flip-back d-flex align-items-center bg-dark-5 rounded p-5" style="background-image: url({{ $page->present()->firstImage(400,500,'fit',80) }}); background-size: cover; background-position: center;">
                        <div class="flip-content my-4">
                            <h4 class="font-weight-bold text-color-light mb-3">{{ $page->title }}</h4>
                            <p class="font-weight-light text-color-light opacity-5 mb-4">{{ strip_tags($page->body) }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>