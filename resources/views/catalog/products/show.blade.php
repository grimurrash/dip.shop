@extends('layouts.app')

@section('title',"Купить товар в интернет-магазине Теплоагзснаб")
@section('description','Котлы  в каталоге Теплогазснаб представлены по доступной цене. Для того чтобы купить котлы  онлайн, достаточно позвонить по телефону.')
@push('styles')
    <link href="{{ asset('css/product.css') }}" type="text/css" data-template-style="true" rel="stylesheet">
@endpush
@section('content')
    @include('components.wrap_menu')
    <div class="content">
        @component('components.breadcrumb')
            @slot('parent') Каталог @endslot
            @slot('parent_href') {{ route('catalog.index') }} @endslot
            @slot('parent_two') {{ $product->category->title }} @endslot
            @slot('parent_two_href') {{ route('catalog.show',$product->category) }} @endslot
            @slot('active') {{ $product->name }} @endslot
        @endcomponent
        <div class="panel panel-row" itemscope itemtype="http://schema.org/Product">
            <div class="panel-heading main-head">
                <h1 itemprop="name">{{ $product->name }}</h1>
                <span class="after-title hidden-xs" itemprop="description">{{ $product->name }}
                    , {{ $product->description }}</span>
            </div>
            <div class="panel-body product-card">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-8 col-md-12">
                            <div class="flags hidden-xs">
                                @if($product->best_price === 1)
                                    <br>
                                    <div class="flag hits">Лучшая цена</div>
                                @endif
                                @if($product->bestsellers === 1)
                                    <br>
                                    <div class="flag lider">Хит продаж</div>
                                @endif
                                @if($product->new_item === 1)
                                    <br>
                                    <div class="flag new">Новинка</div>
                                @endif
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 slider main-image"
                                 style="padding-bottom: 20px">
                                <div id="gallerySlider" class="carousel slide" data-interval="false">
                                    <div class="carousel-inner">
                                        <a class="item active pic"
                                           href="{{ $product->image->url }}"
                                           data-toggle="lightbox" data-gallery="multiimages" data-slide-number="0">
                                            <img src="{{ $product->image->url }}"
                                                 class="img-responsive"
                                                 alt="{{ $product->image->name }}"
                                                 title="{{ $product->image->name }}">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="hidden-lg col-md-12 buy-block" id="buy-block-xs" style="border-bottom: 1px solid #d8d8d8">
                                <div class="row hidden-xs" itemprop="aggregateRating" itemscope=""
                                     itemtype="http://schema.org/AggregateRating">
                                    <div class="col-xs-3 item_rating">
                                        <div class="rating-container rating-xs rating-animate stars-styled">
                                            <div class="rating">
                                <span class="empty-stars">
                                    <span class="star"><i class="glyphicon glyphicon-star-empty"></i></span><span
                                            class="star"><i class="glyphicon glyphicon-star-empty"></i></span><span
                                            class="star"><i class="glyphicon glyphicon-star-empty"></i></span><span
                                            class="star"><i class="glyphicon glyphicon-star-empty"></i></span><span
                                            class="star"><i class="glyphicon glyphicon-star-empty"></i></span>
                                </span>
                                                <span style="width: 0%!important;" class="filled-stars">
                                    <span class="star"><i class="glyphicon glyphicon-star"></i></span><span
                                                            class="star"><i class="glyphicon glyphicon-star"></i></span><span
                                                            class="star"><i class="glyphicon glyphicon-star"></i></span><span
                                                            class="star"><i class="glyphicon glyphicon-star"></i></span><span
                                                            class="star"><i class="glyphicon glyphicon-star"></i></span>
                                </span>
                                                <meta itemprop="ratingValue" content="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 reviews">
                                        отзывов: <span itemprop="reviewCount">0</span>
                                    </div>
                                </div>
                                <div class="container-fluid">
                                    <div class="buy-row" itemprop="offers" itemscope=""
                                         itemtype="http://schema.org/Offer">
                                        <div class="col-sm-5 col-xs-6 price">
                                            <div class="main" itemprop="price">
                                                {{ $product->price }} ₽
                                            </div>
                                            <meta itemprop="priceCurrency" content="RUB">
                                        </div>
                                        <div class="col-sm-7 hidden-xs buttons">
                                            <a class="ga btn btn-primary btn-lg btn-block js_add2basket"
                                               data-id="{{ $product->id }}">Купить </a>
                                        </div>
                                    </div>
                                    <div class="visible-xs-block three-butons">
                                        <div class="col-xs-12">
                                            <div class="buy">
                                                <a class="btn btn-primary" data-id="{{ $product->id }}">КУПИТЬ</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <ul class="nav nav-tabs product-tabs">
                                    <li class="dropdown pull-right tabdrop hide"><a class="dropdown-toggle"
                                                                                    data-toggle="dropdown"
                                                                                    href="#"><span
                                                    class="icon-product"></span> <b class="caret"></b></a>
                                        <ul class="dropdown-menu"></ul>
                                    </li>
                                    <li class="active">
                                        <a aria-expanded="true" href="#characteristics"
                                           data-toggle="tab">Характеристики</a>
                                    </li>
                                    {{--<li class="">--}}
                                        {{--<a aria-expanded="false" href="#opinion" id="btn_opinion" data-toggle="tab"--}}
                                           {{--data-xmlid="442506">--}}
                                            {{--Отзывы <span class="count">1</span>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                </ul>
                                <div id="product-tabs" class="tab-content">
                                    <div class="tab-pane fade active in" id="characteristics">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="h4">Основные характеристики</div>
                                                    <table class="table table-hover">
                                                        <tbody>
                                                        @forelse(explode(';',$product->details) as $item)
                                                            <?php
                                                            $detail = explode(':', $item);
                                                            ?>
                                                            @if(count($detail)>1)
                                                                <tr>
                                                                    <td>{{ $detail[0] }}</td>
                                                                    <td>{{ $detail[1] }}</td>
                                                                </tr>
                                                            @else
                                                                <tr>
                                                                    <td colspan="2">Неправильная характеристика</td>
                                                                </tr>
                                                            @endif
                                                        @empty
                                                            <tr>
                                                                <td colspan="2">Нет характеристик</td>
                                                            </tr>
                                                        @endforelse
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="opinion">
                                        <div id="review-form" class="container-fluid" data-id="442506">
                                            <div class="row no-border">
                                                <div class="col-lg-12 js_data"></div>
                                            </div>
                                        </div>
                                        <div class="container-fluid">
                                            <div class="row comments-row">
                                                <div class="col-md-2">
                                                    <div>
                                                        <a>zulu26</a>
                                                    </div>
                                                    <div class="item_rating">
                                                        <div class="stars_container">
                                                            <div class="rating-container rating-xs rating-animate stars-styled">
                                                                <div class="rating"><span class="empty-stars"><span
                                                                                class="star"><i
                                                                                    class="glyphicon glyphicon-star-empty"></i></span><span
                                                                                class="star"><i
                                                                                    class="glyphicon glyphicon-star-empty"></i></span><span
                                                                                class="star"><i
                                                                                    class="glyphicon glyphicon-star-empty"></i></span><span
                                                                                class="star"><i
                                                                                    class="glyphicon glyphicon-star-empty"></i></span><span
                                                                                class="star"><i
                                                                                    class="glyphicon glyphicon-star-empty"></i></span></span><span
                                                                            style="width: 100%;"
                                                                            class="filled-stars"><span class="star"><i
                                                                                    class="glyphicon glyphicon-star"></i></span><span
                                                                                class="star"><i
                                                                                    class="glyphicon glyphicon-star"></i></span><span
                                                                                class="star"><i
                                                                                    class="glyphicon glyphicon-star"></i></span><span
                                                                                class="star"><i
                                                                                    class="glyphicon glyphicon-star"></i></span><span
                                                                                class="star"><i
                                                                                    class="glyphicon glyphicon-star"></i></span></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="date">19.11.2017</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div id="buy-block-lg" class="col-lg-4 hidden-md hidden-sm hidden-xs buy-block">
                            <div class="container-fluid">
                                <div class="row buy-row" itemprop="offers" itemscope=""
                                     itemtype="http://schema.org/Offer">
                                    <div class="col-sm-5 col-xs-6 price">
                                        <div class="main" itemprop="price">
                                            {{ $product->price }} ₽
                                        </div>
                                        <meta itemprop="priceCurrency" content="RUB">
                                    </div>
                                    <div class="col-sm-7 hidden-xs buttons">
                                        <a class="ga btn btn-primary btn-lg btn-block js_add2basket"
                                           data-category="{{ $product->category->title }}"
                                           data-name="{{ $product->name }}"
                                           data-price="{{ $product->price }}" data-id="{{ $product->id }}">Купить </a>
                                    </div>
                                </div>
                                <div class="row visible-xs-block three-butons">
                                    <div class="col-xs-12">
                                        <div class="buy">
                                            <a class="btn btn-primary js_add2basket"
                                               data-id="{{ $product->id }}">КУПИТЬ</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row visible-xs-block">
                                    <div class="col-xs-12">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="well hidden-xs hidden-sm tags">
            <div class="block">
                <div class="h2">{{ $product->name }}</div>
                <p>Купите {{ $product->name }} в магазине Теплогазснаб с доставкой по Казани. {{ $product->name }}:
                    характеристики, отзывы покупателей, описание</p>
                <div><br/></div>
                <p><strong>Производитель оставляет за собой право изменять характеристики товара, его внешний вид и
                        комплектность без предварительного уведомления продавца.</strong></p>
                <p><strong>Предложение действительно, пока товар в наличии на складе.</strong></p></div>
        </div>
    </div>
@endsection

{{-- Include JS Scripts --}}
@push('scripts')
    <script type="text/javascript"
            src="/local/components/teplo/city.selector/script.min.js"></script>
    <script type="text/javascript"
            src="/local/components/teplo/bx_main.register/script.min.js?1544189094858"></script>
    <script type="text/javascript"
            src="//opt-860641.ssl.1c-bitrix-cdn.ru/bitrix/components/bitrix/search.title/script.min.js?15556635956443"></script>
    <script type="text/javascript"
            src="/local/templates/components/search.title/script.min.js?15441890951164"></script>
    <script type="text/javascript"
            src="/local/components/teplo/filials.contact_info/script.min.js?15441890941696"></script>
    <script type="text/javascript"
            src="/local/components/teplo/menu/script.min.js?15441890943714"></script>
    <script type="text/javascript"
            src="/local/templates/components/news.list/script.min.js?1544189095185"></script>
    <script type="text/javascript"
            src="/local/components/teplo/bx_catalog.top/script.js?15441890943019"></script>
    <script type="text/javascript"
            src="/local/components/teplo/catalog.selected_in_cart/script.min.js?1544189094662"></script>
@endpush