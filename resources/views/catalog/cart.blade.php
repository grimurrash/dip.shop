@extends('layouts.app')

@section('title',"Бытовая техника и электроника в Казани - интернет-магазин Позитроника")
@section('description','Федеральный интернет-магазин Позитроника предлагает большой выбор электроники и бытовой техники по выгодным ценам в Казани')
@push('styles')
    <link href="{{ asset('css/basket.css') }}" type="text/css" data-template-style="true" rel="stylesheet">
    <link href="{{ asset('css/page_basket.css') }}" type="text/css" data-template-style="true" rel="stylesheet">
@endpush
@section('content')
    @include('components.wrap_menu')
    <div class="content">
        @component('components.breadcrumb')
            @slot('active')Корзина @endslot
        @endcomponent
        <form method="post" action="/cart/" name="basket_form" id="basket_form">
            <input type="hidden" id="column_headers"
                   value="NAME,DELETE,DELAY,PRICE,QUANTITY,SUM,PROPERTY_REITING_VALUE,PROPERTY_ADDING_PICTURE_SMALL_VALUE">
            <input type="hidden" id="offers_props" value="">
            <input type="hidden" id="action_var" value="basketAction">
            <input type="hidden" id="quantity_float" value="N">
            <input type="hidden" id="count_discount_4_all_quantity" value="N">
            <input type="hidden" id="price_vat_show_value" value="N">
            <input type="hidden" id="hide_coupon" value="N">
            <input type="hidden" id="use_prepayment" value="N">
            <input type="hidden" id="auto_calculation" value="Y">


            <?php
            if (session()->get('basket') !== null) {
                $basket = session()->get('basket');
            } else {
                $basket = [];
            }
            $total = 0;
            foreach ($basket as $item) {
                $total += $item['count'] * $item['product']['price'];
            }
            ?>
            <div class="panel basket_content">
                <div class="panel-heading">
                    <h1>Корзина</h1>
                </div>
                <div class="panel-body" id="basket_container">
                    @if(count($basket) > 0)
                        <div class="row">
                            <div class="col-md-12 col-lg-8 header_basket hidden-sm hidden-xs">
                                <div class="col-md-8 col-lg-7 col-lgx-8">Товар</div>
                                <div class="col-md-2 text-center">Наличие</div>
                                <div class="col-md-2 col-lg-3 col-lgx-2 text-right">Цена</div>
                            </div>
                            <div class="col-md-12 col-lg-8 col-lgx-8" id="basket_items">

                                @forelse($basket as $item)
                                    <?php
                                    $product = \App\Product::find($item['product_id']);
                                    ?>
                                    <div class="row_basket" data-id="{{ $product->id }}">
                                        <div class="col-xs-4 col-md-3 col-lg-3 col-lgx-2 row_col">
                                            <div class="pic text-center">
                                                <a href="{{ route('catalog.products.show',$product) }}" rel="nofollow">
                                                    <img style="width: 100%" src="{{ $product->image->url }}">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-xs-8 col-sm-7 col-md-5 col-lg-4 col-lgx-6 row_col wrap_title">
                                            <div class="title">
                                                <span class="name">
                                                    <a href="{{ route('catalog.products.show',$product) }}">{{ $product->name }}</a>
                                                </span>
                                                <div class="extra hidden-sm hidden-xs"></div>
                                            </div>
                                        </div>
                                        <div class="col-xs-4 col-md-2 col-lg-2 col-lgx-2 row_col">
                                            <div class="status text-center">
                                                <span class="status stock">{{ $product->status() }}</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-md-2 col-lg-3 col-lgx-2 row_col">
                                            <div class="price text-right">
                                                <div data-name="{{ $product->name }}"
                                                     data-price="{{ $product->price }} ₽" data-qty="1"
                                                     class="ga_checkout_elem price_value">{{ $product->price }} ₽
                                                </div>
                                                <div class="input-group spinner">
                                                    <span class="input-group-btn">
                                                        <a href="{{ route('cart.remove', $product) }}" class="btn btn-default btn-spin">
                                                            <span class="glyphicon glyphicon-minus"></span>
                                                        </a>
                                                    </span>
                                                    <input type="text" class="form-control js_amt" data-min="1"
                                                           value="{{ $item['count'] }}">
                                                    <span class="input-group-btn">
                                                        <a href="{{ route('cart.add', $product) }}" class="btn btn-default btn-spin">
                                                            <span class="glyphicon glyphicon-plus"></span>
                                                        </a>
                                                    </span>
                                                </div>
                                                <a data-brand="DIGMA" class="ga_remove"
                                                   href="{{ route('cart.delete') }}">Удалить</a>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 row_bottom">

                                        </div>
                                    </div>
                                @empty
                                @endforelse
                            </div>

                            <div class="buy col-xs-12 col-lg-4 col-lgx-4">
                                <div class="wrap_buy form-horizontal">
                                    <div class="form-group title">Сумма к оплате</div>
                                    <div class="form-group info">
                                        <div class="container-fluid row">
                                            <div class="col-xs-7">Сумма покупки:</div>
                                            <div class="col-xs-5 text-right" id="sum_container">{{ $total }} ₽</div>
                                        </div>
                                        <div class="container-fluid row sum">
                                            <div class="col-xs-5">Итого:</div>
                                            <div class="col-xs-7 text-right text-nowrap"
                                                 id="all_sum_container">{{ $total }} ₽
                                            </div>
                                        </div>
                                        <div class="container-fluid row sum">
                                            <div class="col-xs-12">
                                                <a href="/order/" class="ga_checkout btn btn-primary btn-lg">ОФОРМИТЬ
                                                    ЗАКАЗ</a>
                                            </div>
                                            <div class="col-xs-5 text-right text-nowrap padding0">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="row container-fluid">
                            <div class="col-xs-12">
                                <p><span>Ваша корзина пуста<br>Воспользуйтесь поиском или каталогом, выберите нужные товары и добавьте их вкорзину</span>
                                </p>
                                <a href="/" class="btn btn-primary btn-lg">Главная страница</a>
                            </div>
                        </div>
                    @endif
                    <div class="container-fluid row">
                        <a href="/" class="btn btn-default btn-lg continue">
                            <span class="upl"></span>
                            <span class="downl"></span>
                            ПРОДОЛЖИТЬ ПОКУПКИ
                        </a>
                    </div>
                </div>
            </div>
            <input type="hidden" name="BasketOrder" value="BasketOrder">
        </form>
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
@endpush