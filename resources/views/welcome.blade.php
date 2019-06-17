@extends('layouts.app')

@section('title',"Теплогазснаб - интернет-магазин котлов в Казани" )
@push('styles')
    <link href="{{ asset('css/welcome.css') }}" type="text/css" data-template-style="true" rel="stylesheet">
@endpush

@section('content')
    @include('components.wrap_menu')
    <div class="content">

        <div class="row gray">
            <div id="myCarousel" class="carousel slide col-md-12 col-lg-12 col-lgx-8" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                    <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="item active" id="bx_3218110189_411094">
                        <a href="#">
                            <img class="third-slide"
                                 src="public/images/10.jpg"
                                 alt="1">
                        </a>
                    </div>
                    <div class="item " id="bx_3218110189_406914">
                        <a href="#">
                            <img class="third-slide"
                                 src="public/images/3.jpg"
                                 alt="2">
                        </a>
                    </div>
                    <div class="item " id="bx_3218110189_413607">
                        <a href="#">
                            <img class="third-slide"
                                 src="public/images/11.jpg"
                                 alt="3">
                        </a>
                    </div>

                </div>
            </div>

        </div>
        <div class="panel panel-slider">
            <div class="panel-heading flags">Лучшая цена
                <div class="hits">ЛУЧШАЯ ЦЕНА</div>
            </div>
            <div class="panel-body">
                <div id="bestPriceCarousel" class="wrap-carousel" data-toggle="electroCarousel">
                    <div class="slide-carousel">
                        <ul class="productList" id="parent_hits" style="display: none;">
                            @forelse($best_price_products as $product)
                                <li class="product"
                                    data-productid="{{ $product->id }}">
                                    <a href="{{ route('catalog.products.show',$product) }}" class="pic">
                                        <img class="img-responsive"
                                             src="{{ $product->image->url }}"
                                             alt="{{ $product->name }}"
                                             title="{{ $product->name }}">
                                    </a>
                                    <div class="name">
                                        <span>
                                            <a class="ga_detail"
                                               data-category="{{ $product->category->title }}"
                                               data-name="{{ $product->name }}"
                                               data-price="{{ $product->price }}"
                                               href="{{ route('catalog.products.show',$product) }}">{{ $product->name }}</a>
                                            <small></small>
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
                                </li>
                            @empty
                                <li class="text-center">Нет продуктов</li>
                            @endforelse
                        </ul>
                    </div>
                    <a class="btnLeft hidden-xs"><span class="upl"></span><span
                                class="downl"></span></a>
                    <a class="btnRight hidden-xs"><span class="upr"></span><span
                                class="downr"></span></a>
                </div>
            </div>
        </div>



        <div class="panel panel-slider">
            <div class="panel-heading flags">Новинки
                <div class="new">НОВИНКИ</div>
            </div>
            <div class="panel-body">
                <div id="newsCarousel" class="wrap-carousel" data-toggle="electroCarousel">
                    <div class="slide-carousel">
                        <ul class="productList" id="parent_new" style="display: none;">
                            @forelse($new_item_products as $product)
                                <li class="product"
                                    data-productid="{{ $product->id }}">
                                    <a href="{{ route('catalog.products.show',$product) }}" class="pic">
                                        <img class="img-responsive"
                                             src="{{ $product->image->url }}"
                                             alt="{{ $product->name }}"
                                             title="{{ $product->name }}">
                                    </a>
                                    <div class="name">
                                        <span>
                                            <a class="ga_detail"
                                               data-category="{{ $product->category->title }}"
                                               data-name="{{ $product->name }}"
                                               data-price="{{ $product->price }}"
                                               href="{{ route('catalog.products.show',$product) }}">{{ $product->name }}</a>
                                            <small></small>
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
                                </li>
                            @empty
                                <li class="text-center">Нет продуктов</li>
                            @endforelse
                        </ul>
                    </div>
                    <a class="btnLeft hidden-xs"><span class="upl"></span><span
                                class="downl"></span></a>
                    <a class="btnRight hidden-xs"><span class="upr"></span><span
                                class="downr"></span></a>
                </div>
            </div>
        </div>


        <div class="panel panel-slider">
            <div class="panel-heading flags">Хиты продаж
                <div class="lider">ХИТЫ ПРОДАЖ</div>
            </div>
            <div class="panel-body">
                <div id="hitsaCarousel" class="wrap-carousel" data-toggle="electroCarousel">
                    <div class="slide-carousel">
                        <ul class="productList" id="parent_lider" style="display: none;">
                            @forelse($bestsellers_products as $product)
                                <li class="product"
                                    data-productid="{{ $product->id }}">
                                    <a href="{{ route('catalog.products.show',$product) }}" class="pic">
                                        <img class="img-responsive"
                                             src="{{ $product->image->url }}"
                                             alt="{{ $product->name }}"
                                             title="{{ $product->name }}">
                                    </a>
                                    <div class="name">
                                        <span>
                                            <a class="ga_detail"
                                               data-category="{{ $product->category->title }}"
                                               data-name="{{ $product->name }}"
                                               data-price="{{ $product->price }}"
                                               href="{{ route('catalog.products.show',$product) }}">{{ $product->name }}</a>
                                            <small></small>
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
                                </li>
                            @empty
                                <li class="text-center">Нет продуктов</li>
                            @endforelse
                        </ul>
                    </div>
                    <a class="btnLeft hidden-xs"><span class="upl"></span><span
                                class="downl"></span></a>
                    <a class="btnRight hidden-xs"><span class="upr"></span><span
                                class="downr"></span></a>
                </div>
            </div>
        </div>

        <div class="well infoblock visible-lg visible-md">
            <div class="row">
                <div class="col-xs-2">
                    <div class="list-group-item dost active">
                        <span> Наличный и безналичный расчет </span></div>
                </div>
                <div class="col-xs-2">
                    <div class="list-group-item nal active">
                        <span> Доставка в течении 7 дней </span></div>
                </div>
                <div class="col-xs-2">
                    <div class="list-group-item mback active">
                        <span> Возврат средств в течение 3 дней </span></div>
                </div>
                <div class="col-xs-2">
                    <div class="list-group-item garant active">
                        <span> Официальная гарантия производителя </span></div>
                </div>
                <div class="col-xs-2">
                    <div class="list-group-item sert active">
                        <span> Сертифицированная продукция </span></div>
                </div>
            </div>
        </div>
        <div class="well hidden-xs hidden-sm tags">
            <div class="block"><!--noindex-->
                <h1>Интернет-магазин газовых котлов и других отопительных оборудований</h1>
                <p>Основным направлением деятельности компании «Теплогазснаб» является поставка высококачественного
                    оборудования для котельных, а также отопительного оборудования и комплектующих. В ассортименте нашей
                    компании представлены изделия наиболее крупных и известных производителей.
                    </p>
                <p> Одним из главных принципов нашей работы является обеспечение качественной поддержки клиенту:
                    мы предоставляем услуги по обслуживанию приобретенного оборудования на протяжении всего срока
                    эксплуатации.</p>
                <p> Заказ в интернет-магазине гарантирует привлекательную
                    цену и
                    доставку в кратчайшие сроки.</p>

                <!--/noindex--></div>
        </div>
    </div>
@endsection

{{-- Include JS Scripts --}}
@push('scripts')
    <script type="text/javascript"
            src="/local/components/teplo/city.selector/script.min.js"></script>
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