<article class="blog-post">
    <header class="blog-post-header mb-4">
        <a href="{{ $post->url }}">
            <img src="{{ $post->present()->firstImage(1170,488,'fit',80) }}" class="img-fluid" alt="{{ $post->title }}" />
        </a>
        <i class="post-format-icon lnr lnr-picture bg-primary text-color-light text-7 p-3"></i>
    </header>
    <h2 class="text-5">
        <a href="{{ $post->url }}" class="link-color-dark">
            {{ $post->title }}
        </a>
    </h2>
    <div class="d-flex mb-3">
        <span class="post-date text-color-primary pe-3">{{ $post->created_at->formatLocalized('%d %B %Y') }}</span>
    </div>
    <p>{{ strip_tags($post->intro) }}</p>
    <a href="{{ $post->url }}" class="text-color-primary font-weight-bold learn-more">@lang('global.buttons.read more') <i class="fas fa-angle-right text-2" aria-label="Read more"></i></a>
</article>