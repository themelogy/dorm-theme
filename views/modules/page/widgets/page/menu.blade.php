<div class="card p-2">
    <ul class="list list-unstyled p-1 m-0">
        @foreach($children as $child)
            <li>
                @if(collect(Request::segments())->search($child->slug))
                    <a href="{{ $child->url }}" class="font-weight-semibold"><i class="fas fa-angle-right ms-1 me-1 pe-2"></i> {{ $child->title }}</a>
                @endif
            </li>
        @endforeach
    </ul>
</div>