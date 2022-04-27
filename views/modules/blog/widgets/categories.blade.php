<div class="card">
    <div class="card-header accordion-header" role="tab" id="categories">
        <h3 class="text-3 mb-0">
            <a href="#" data-bs-toggle="collapse" data-bs-target="#toggleCategories" aria-expanded="false" aria-controls="toggleCategories">KATEGORİLER</a>
        </h3>
    </div>
    <div id="toggleCategories" class="accordion-body collapse show p-0" aria-labelledby="categories">
        <div class="card-body">
            <ul class="list list-unstyled">
                @foreach($categories as $category)
                <li class="mb-2">
                    <a href="{{ $category->url }}" class="font-weight-semibold"><i class="fas fa-angle-right ms-1 me-1"></i> {{ $category->name }}</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>