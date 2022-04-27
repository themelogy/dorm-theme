<div class="container mb-5 pb-3 pt-3">
    <div class="row justify-content-center mb-5">
        @foreach($children as $page)
            <div class="col-md-6 col-lg-3">
                <div class="card card-style-2 card-style-3 bg-light-5 border-0 text-center mt-5">
                    <img src="{{ $page->present()->firstImage(400,500,'fit',80) }}" class="card-img-top border-light-5" alt="{{ $page->title }}" />
                    <div class="card-body p-5">
                        <h4 class="font-weight-bold mb-3">{{ $page->title }}</h4>
                        <p class="mb-0">{!! strip_tags($page->body) !!}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>