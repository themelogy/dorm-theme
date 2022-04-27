<div class="section pt-5">
    <div class="container">
        <div class="owl-carousel owl-theme nav-style-3" data-plugin-options="{'responsive': {'0': {'items': 1}, '479': {'items': 1}, '768': {'items': 2}, '979': {'items': 4}, '1199': {'items': 5}}, 'dots': false, 'nav': false, 'animateIn': 'animate__fadeIn', 'animateOut': 'animate__fadeOut', 'margin': 30}">
            @foreach($brands as $brand)
            <div>
                <img src="{{ $brand->present()->firstImage(null,100,'resize',100) }}" alt="{{ $brand->title }}">
            </div>
            @endforeach
        </div>
    </div>
</div>