{{-- BREADCRUMB --}}
<ul class="breadcrumb hidden-xs">
    <li itemscope="" itemprop="itemListElement">
        <a itemprop="item" href="/">
            <span itemprop="name">Интернет-магазин</span>
        </a>
        <meta itemprop="position" content="1">
    </li>
    @isset($parent)
        <li itemscope="" itemprop="itemListElement">
            <a itemprop="item"
               href="{{ $parent_href }}">
                <span itemprop="name">{{ $parent }}</span>
            </a>
            <meta itemprop="position" content="2">
        </li>
    @endisset
    @isset($parent_two)
        <li itemscope="" itemprop="itemListElement">
            <a itemprop="item"
               href="{{ $parent_two_href }}">
                <span itemprop="name">{{ $parent_two }}</span>
            </a>
            <meta itemprop="position" content="2">
        </li>
    @endisset
    <li class="active">{{ $active }}</li>
</ul>
{{-- END BREADCRUMB--}}