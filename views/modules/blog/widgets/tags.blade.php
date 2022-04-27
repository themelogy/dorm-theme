<div class="card">
    <div class="card-header accordion-header" role="tab" id="tags">
        <h3 class="text-3 mb-0">
            <a href="#" data-bs-toggle="collapse" data-bs-target="#toggleTags" aria-expanded="false" aria-controls="toggleTags">@lang('tag::tags.tag')</a>
        </h3>
    </div>
    <div id="toggleTags" class="accordion-body collapse show p-0" role="tabpanel" aria-labelledby="tags">
        <div class="card-body">
            <ul class="list-inline">
                @foreach($tags as $tag)
                <li class="list-inline-item"><a href="{{ route('blog.tag', $tag->slug) }}" class="badge bg-dark badge-sm badge-pill rounded-pill px-3 py-2 mb-2">{{ $tag->name }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
</div>