<div class="container pb-3 pt-3">
    <div class="row text-center mb-4">
        <div class="col-md-12">
            <span class="top-sub-title text-color-primary text-uppercase">@lang('themes::theme.home.services alt')</span>
            <h2 class="font-weight-bold">@lang('themes::theme.home.services')</h2>
        </div>
    </div>
    <div class="row justify-content-center mb-5">
        @foreach($children as $page)
            <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
                <div class="card card-services rounded bg-light-5 border-0 mb-4">
                    <img src="{{ $page->present()->firstImage(600,300,'fit',80) }}" class="card-img-top" alt="{{ $page->title }}" />
                    <div class="card-body">
                        <h4 class="font-weight-bold mb-3">{{ $page->title }}</h4>
                        <p class="mb-0">{{ strip_tags($page->body) }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>s