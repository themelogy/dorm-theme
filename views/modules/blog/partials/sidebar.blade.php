<aside class="sidebar col-md-4 col-lg-3 order-2">
    <div class="accordion accordion-default accordion-toggle accordion-style-1" role="tablist">
        @blogCategories()
        @isset($post)
            @blogTags($post, 10)
        @endisset
        @isset($posts)
            @blogTags($posts, 2)
        @endisset
    </div>
</aside>