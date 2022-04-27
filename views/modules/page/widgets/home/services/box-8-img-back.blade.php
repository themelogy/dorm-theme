<div class="container mb-5 pb-3 pt-3">
    <div class="row justify-content-center mb-5">
        @foreach($children as $page)
            <div class="col-md-6 col-lg-3 mb-3">
                <div class="card card-image-background rounded border-0 py-5" style="background-image: url({{ $page->present()->firstImage(400,500,'fit',80) }}); background-size: cover; background-position: center;">
                    <div class="card-body text-center p-3" style="min-height: 200px;">
                        <h4 class="font-weight-bold text-color-light mb-3">{{ $page->title }}</h4>
                        <p class="text-color-light-2 mb-4">{{ strip_tags($page->body) }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>