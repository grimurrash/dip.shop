@extends('layouts.app')

@section('title',"Бытовая техника и электроника в Казани - интернет-магазин Мир котлов" )
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
                    <li data-target="#myCarousel" data-slide-to="3" class=""></li>
                    <li data-target="#myCarousel" data-slide-to="4" class=""></li>
                    <li data-target="#myCarousel" data-slide-to="5" class=""></li>
                    <li data-target="#myCarousel" data-slide-to="6" class=""></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="item active" id="bx_3218110189_411094">
                        <a href="/news/vyigrayte-odin-iz-shesti-televizorov/">
                            <img class="third-slide"
                                 src="//opt-860641.ssl.1c-bitrix-cdn.ru/upload/iblock/009/009953451973a30538071fe0ba00630c.jpg?155505596139857"
                                 alt="Выиграйте телевизор">
                        </a>
                    </div>
                    <div class="item " id="bx_3218110189_406914">
                        <a href="/news/vmeste-vygodno/">
                            <img class="third-slide"
                                 src="//opt-860641.ssl.1c-bitrix-cdn.ru/upload/iblock/7d8/7d8fb6f7367fcfb8313be35409d9b5f2.jpg?155248471059792"
                                 alt="Canon вместе выгодно">
                        </a>
                    </div>
                    <div class="item " id="bx_3218110189_413607">
                        <a href="/news/may-pokupay-ne-zevay/">
                            <img class="third-slide"
                                 src="//opt-860641.ssl.1c-bitrix-cdn.ru/upload/iblock/c70/c701638d55e5600b24c475d92435db88.jpg?155660906039215"
                                 alt="Май покупай не зевай">
                        </a>
                    </div>
                    <div class="item " id="bx_3218110189_404885">
                        <a href="search/?q=Sony+MHC-V">
                            <img class="third-slide"
                                 src="//opt-860641.ssl.1c-bitrix-cdn.ru/upload/iblock/466/466ef15c2ae66ce323eded2e2670978a.jpg?155136775349166"
                                 alt="Sony MHC-V71D (цветная)">
                        </a>
                    </div>
                    <div class="item " id="bx_3218110189_411093">
                        <a href="/news/do-15-000-rubley-v-podarok-ot-lg/">
                            <img class="third-slide"
                                 src="//opt-860641.ssl.1c-bitrix-cdn.ru/upload/iblock/074/074dd49fad5049d093b66a0019063b42.jpg?155505572142900"
                                 alt="Сертификат в подарок (с 15 апр. - 12 мая)">
                        </a>
                    </div>
                    <div class="item " id="bx_3218110189_412837">
                        <a href="/news/rubetek-umnyy-podkhod/">
                            <img class="third-slide"
                                 src="//opt-860641.ssl.1c-bitrix-cdn.ru/upload/iblock/010/010b1d43678bfe28b01d5e0e11f433a9.jpg?155602858534984"
                                 alt="Лампочка с датчиком движения">
                        </a>
                    </div>
                    <div class="item " id="bx_3218110189_396111">
                        <a href="/search/?q=SRS-XB41">
                            <img class="third-slide"
                                 src="//opt-860641.ssl.1c-bitrix-cdn.ru/upload/iblock/313/31370e14126836b789487ce46a960399.jpg?154529969074062"
                                 alt="Sony SRS-XB41">
                        </a>
                    </div>
                </div>
            </div>

            <div class="mini-banner col-lgx-2 visible-lgx" id="bx_651765591_411852">
                <a href="/reviews/?utm_source=obzor&utm_medium=banner&utm_campaign=obzory">
                    <img class="img-responsive"
                         src="//opt-860641.ssl.1c-bitrix-cdn.ru/upload/iblock/465/4651d164d70c547cba3af10bbe6c7def.jpg?155559952316929"
                         alt="Помогаем сделать выбор">
                </a>
            </div>
            <div class="mini-banner col-lgx-2 visible-lgx" id="bx_651765591_262437">
                <a href="https://vk.com/positronica">
                    <img class="img-responsive"
                         src="//opt-860641.ssl.1c-bitrix-cdn.ru/upload/iblock/abb/abb72d9e7aba1c021df594a464537750.jpg?151194924618146"
                         alt="Вконтакте">
                </a>
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

        <div class="well hidden-xs hidden-sm" id="bx_1373509569_413608">
            <a href="#">
                <img src="//opt-860641.ssl.1c-bitrix-cdn.ru/upload/iblock/81d/81da5fc22f354278c3395b584223e16f.jpg?155660913328429"
                     alt="Май покупай не зевай"/>
            </a>
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

        <div class="well hidden-xs hidden-sm" id="bx_3485106786_314026">
            <a href="#">
                <img src="//opt-860641.ssl.1c-bitrix-cdn.ru/upload/iblock/7b6/7b62fc7d5b9acb12fc5d413dad965ac5.jpg?150711527422250"
                     alt="Акции и скидки"/>
            </a>
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
                        <span> Доставка по России </span></div>
                </div>
                <div class="col-xs-2">
                    <div class="list-group-item mback active">
                        <span> MoneyBack в течение 7 дней </span></div>
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
                <h1>Федеральная сеть магазинов электроники и бытовой техники ПОЗИТРОНИКА</h1>
                <p>Магазины электроники и бытовой техники ПОЗИТРОНИКА представлены во всех федеральных
                    округах
                    России. На сегодняшний день открыто более 200 магазинов в городах и населенных пунктах
                    страны. Сеть ПОЗИТРОНИКА входит в ТОП-100 ритейлеров электроники и бытовой техники
                    России.</p>
                <p>Совершить покупку электроники и бытовой техники можно не только в розничном магазине, но
                    и
                    через сайт www.positronica.ru. Заказ в интернет-магазине гарантирует привлекательную
                    цену и
                    доставку в кратчайшие сроки.</p>
                <p>Девиз компании « Легкий выбор сложной техники» подтверждает стратегию предоставления
                    покупателю демократичных цен на рынке электронной и бытовой техники при качественном
                    сервисе.</p>
                <!--/noindex--></div>
        </div>
    </div>
@endsection

{{-- Include JS Scripts --}}
@push('scripts')
    <script type="text/javascript"
            src="/local/components/positronica/city.selector/script.min.js"></script>
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