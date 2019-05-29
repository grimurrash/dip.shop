@extends('layouts.app')

@section('title',"Купить ".$subcategory->title." в Казани, цена на ".$subcategory->title."  в интернет-магазине Позитроника")
@section('description','Интернет-магазин Позитроника предлагает большой выбор электроники и бытовой техники по выгодным ценам в Казани')

@push('styles')
    <link href="{{ asset('css/products.css') }}" type="text/css" data-template-style="true" rel="stylesheet">
@endpush

@section('content')
    @include('components.wrap_menu')
    <div class="content">
        @component('components.breadcrumb')
            @slot('parent_href') {{ route('catalog.index') }} @endslot
            @slot('parent') Каталог @endslot
            @slot('active') {{ $subcategory->title }} @endslot
        @endcomponent
        <div class="panel panel-row">
            <div class="panel-heading main-head">
                <h1 class="section-name">{{ $subcategory->title }} </h1>
            </div>

            <div class="panel-body">
                <ul class="productList col-xs-12 content">
                    @forelse($products as $product)
                        <li class='col-xs-12 col-sm-6 col-md-4 col-lg-3 col-lgx-2 product'
                            data-productid="{{ $product->id }}">
                            <a href="{{ route('catalog.products.show',$product) }}" class="pic">
                                <div class="flags">
                                </div>
                                <img class="img-responsive"
                                     src="{{ $product->image->url }}"
                                     alt="{{ $product->name }}"
                                     title="{{ $product->name }}">
                            </a>
                            <div class="name">
                                <span>
                                    <a class="ga_detail" data-category="{{ $product->category->title }}"
                                       data-price="{{ $product->price }}" data-name="{{ $product->name }}"
                                       href="{{ route('catalog.products.show',$product) }}">{{ $product->name }}</a>
                                    <span class="dopinfo"><small> {{ $product->details }}</small></span>
                                </span>
                            </div>
                            <div class="row">
                                <div class="col-xs-6 text-left">
                                    @if($product->quantity > 0)
                                        <span class="glyphicon glyphicon-ok"></span>
                                    @else
                                        <span class="glyphicon glyphicon-remove"></span>
                                    @endif
                                    <span class="status stock">{{ $product->status() }}</span>
                                </div>
                            </div>
                            <div class="price">
                                <div class="action">
                                </div>
                                {{  $product->price() }}
                                <span class="old"></span>
                                <div class="action"></div>
                            </div>
                            <div class="row">
                                <div class="buy">
                                    <a class="ga btn btn-default js_add2basket"
                                       data-category="{{ $product->category->title }}" data-name="{{ $product->name }}"
                                       data-id="{{ $product->id }}">КУПИТЬ</a>
                                </div>
                            </div>
                            <div class="margin-border-mb"></div>
                        </li>
                    @empty
                        <li class="text-center">Нет продуктов</li>
                    @endforelse
                </ul>
            </div>
        </div>

        <div class="panel panel-row container-fluid paging">
            <div class="row">
                <div class="col-xs-12 col-md-4 col-lg-3 col-lgx-2">
                    <div class="block total">Товаров: {{ $products->firstItem() }} - {{ $products->lastItem() }}
                        из {{ $products->total() }}</div>
                </div>
                <div class="col-xs-12 col-md-6 col-lg-7 col-lgx-8 text-center">
                    {{ $products->links() }}
                </div>
                <div class="col-xs-12 col-md-2 text-right">
                    <div class="block">
                        <a class="btn btn-default btn-sort asc btn-up">Наверх <span class="icon-product"></span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="well hidden-xs hidden-sm tags">
            <div class="block">
                Интернет-магазин Позитроника.ру предлагает купить Телевизоры с доставкой по Казани или в любой другой
                город РФ. В нашем каталоге представлено большое количество товаров на ваш выбор по цене от 6790 рублей.
                Для того, чтобы купить Телевизоры вам достаточно сделать заказ на сайте, или позвонить по телефону 8
                (800) 333-0-333
            </div>
        </div>

    </div>
@endsection

{{-- Include JS Scripts --}}
@push('scripts')
    <script type="text/javascript"
            src="/local/components/positronica/city.selector/script.min.js"></script>
    <script type="text/javascript"
            src="/local/components/positronica/bx_main.register/script.min.js?1544189094858"></script>
    <script type="text/javascript"
            src="//opt-860641.ssl.1c-bitrix-cdn.ru/bitrix/components/bitrix/search.title/script.min.js?15556635956443"></script>
    <script type="text/javascript"
            src="/local/templates/components/search.title/script.min.js?15441890951164"></script>
    <script type="text/javascript"
            src="/local/components/positronica/filials.contact_info/script.min.js?15441890941696"></script>
    <script type="text/javascript"
            src="/local/components/positronica/menu/script.min.js?15441890943714"></script>
    <script type="text/javascript"
            src="/local/templates/components/news.list/script.min.js?1544189095185"></script>
    <script type="text/javascript"
            src="/local/components/positronica/bx_catalog.top/script.js?15441890943019"></script>
    <script type="text/javascript"
            src="/local/components/positronica/catalog.selected_in_cart/script.min.js?1544189094662"></script>
    <script type="text/javascript"
            src="/local/components/positronica/bx_catalog.main_horizontal/scripts.min.js"></script>
@endpush