@extends('layouts.app')

@section('title',"Купить Мышь в интернет-магазине Позитроника по низкой цене в Казани")
@section('description','Телевизоры   в каталоге Позитроники представлены по доступной цене. Для того чтобы купить Телевизоры   онлайн, достаточно позвонить по телефону: 8 (800) 333-0-333. Доставка приобретенного товара по Казани, а также возможен самовывоз из магазина.')

@section('content')
    @include('components.wrap_menu')
    <div class="content">
        <ul class="breadcrumb hidden-xs" itemscope="" itemtype="http://schema.org/BreadcrumbList">
            <li itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem"><a itemprop="item"
                                                                                                 href="/"><span
                            itemprop="name">Интернет-магазин</span></a>
                <meta itemprop="position" content="1">
            </li>
            <li itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem"><a itemprop="item"
                                                                                                 href="/catalog/"><span
                            itemprop="name">Каталог</span></a>
                <meta itemprop="position" content="2">
            </li>
            <li itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem"><a itemprop="item"
                                                                                                 href="/catalog/myshitrekboly/"><span
                            itemprop="name">Компьютерные мыши</span></a>
                <meta itemprop="position" content="3">
            </li>
            <li class="active">Мышь</li>
        </ul>
        <div class="panel panel-row" itemscope itemtype="http://schema.org/Product">
            <div class="panel-heading main-head">
                <h1 itemprop="name">Мышь</h1>
                <span class="after-title hidden-xs" itemprop="description">Мышь</span>
            </div>
            <div class="panel-body product-card">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-8 col-md-12">
                            <div class="flags hidden-xs">

                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 slider main-image">
                                <div id="gallerySlider" class="carousel slide" data-interval="false">
                                    <ol class="carousel-indicators visible-xs-block">
                                        <li data-target="#gallerySlider" data-slide-to="0" class="active"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <a class="item active pic"
                                           href="https://img.positronica.ru/items//local/images/system/z350.png"
                                           data-toggle="lightbox" data-gallery="multiimages"
                                           data-slide-number="0">
                                            <img src="https://img.positronica.ru/items//local/images/system/z350.png"
                                                 class="img-responsive"
                                                 alt="Мышь - фото 1"
                                                 title="Мышь - фото 1">
                                        </a>
                                    </div>
                                    <a class="carousel-control left" href="#gallerySlider"
                                       data-slide="prev"></a>
                                    <a class="carousel-control right" href="#gallerySlider"
                                       data-slide="next"></a>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 hidden-xs wrap-gallery"
                                 data-toggle="electroCarousel" data-width-type="px"
                                 data-resize-element="false">
                                <div class="slide-carousel">
                                    <ul class="productList list-inline hidden-xs">
                                        <li>
                                            <a id="carousel-selector-0" class="selected">
                                                <img src="https://img.positronica.ru/items//local/images/system/z350.png"
                                                     class="img-responsive"/>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <a class="btnLeft">
                                    <span class="upl"></span>
                                    <span class="downl"></span>
                                </a>
                                <a class="btnRight">
                                    <span class="upr"></span>
                                    <span class="downr"></span>
                                </a>
                            </div>
                            <div id="buy-block-xs" class="hidden-lg col-md-12 buy-block">
                                <div class="row hidden-xs" itemprop="aggregateRating" itemscope
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
                                                <span style="width: 0%;" class="filled-stars">
                                    <span class="star"><i class="glyphicon glyphicon-star"></i></span><span
                                                            class="star"><i
                                                                class="glyphicon glyphicon-star"></i></span><span
                                                            class="star"><i
                                                                class="glyphicon glyphicon-star"></i></span><span
                                                            class="star"><i
                                                                class="glyphicon glyphicon-star"></i></span><span
                                                            class="star"><i
                                                                class="glyphicon glyphicon-star"></i></span>
                                </span>
                                                <meta itemprop="ratingValue" content="0.00"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 reviews">
                                        отзывов: <span itemprop="reviewCount">0</span>
                                    </div>
                                </div>
                                <div class="container-fluid">
                                    <div class="buy-row" itemprop="offers" itemscope
                                         itemtype="http://schema.org/Offer">
                                        <div class="col-sm-7 hidden-xs buttons">
                                        </div>
                                        <div class="col-xs-6 visible-xs-block">
                                            <div class="item_rating row">
                                                <div class="rating-container rating-xs rating-animate stars-styled">
                                                    <div class="rating">
                                        <span class="empty-stars">
                                            <span class="star"><i
                                                        class="glyphicon glyphicon-star-empty"></i></span><span
                                                    class="star"><i class="glyphicon glyphicon-star-empty"></i></span><span
                                                    class="star"><i class="glyphicon glyphicon-star-empty"></i></span><span
                                                    class="star"><i class="glyphicon glyphicon-star-empty"></i></span><span
                                                    class="star"><i class="glyphicon glyphicon-star-empty"></i></span>
                                        </span>
                                                        <span style="width: 0%;" class="filled-stars">
                                            <span class="star"><i class="glyphicon glyphicon-star"></i></span><span
                                                                    class="star"><i
                                                                        class="glyphicon glyphicon-star"></i></span><span
                                                                    class="star"><i
                                                                        class="glyphicon glyphicon-star"></i></span><span
                                                                    class="star"><i
                                                                        class="glyphicon glyphicon-star"></i></span><span
                                                                    class="star"><i
                                                                        class="glyphicon glyphicon-star"></i></span>
                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="price row text-right">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="visible-xs-block three-butons">
                                        <div class="col-xs-12">
                                            <div class="buy">
                                            </div>
                                            <div class="services">
                                                <a class="btn btn-service js_add2compare" data-id="123288">
                                                    <span class="glyphicon icon-product-add-comparison"></span>
                                                </a>
                                                <a class="btn btn-service js_add2wishlist" data-id="191227">
                                                    <span class="glyphicon glyphicon-heart-empty"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="visible-xs-block">
                                        <div class="col-xs-12">
                                        </div>
                                    </div>
                                </div>
                                <div class="section">
                                    <div class="section-row">
                                        <span class="glyphicon glyphicon-remove"></span>Нет в наличии
                                    </div>

                                    <div class="section-row delivery-time">
                                    </div>
                                </div>
                                <div class="section hidden-xs">
                                    <div class="buttons-row">
                                        <a class="btn btn-service js_add2compare" data-id="123288">
                                            <span class="glyphicon icon-product-add-comparison"></span>
                                            <span class="text">Сравнить</span>
                                        </a>
                                        <a class="btn btn-service js_add2wishlist" data-id="191227">
                                            <span class="glyphicon glyphicon-heart-empty"></span>
                                            <span class="text">В список желаний</span>
                                        </a>
                                        <a class="btn btn-service js_print">
                                            <span class="glyphicon icon-product-print"></span>
                                            <span class="text">Распечатать</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="article">
                                    Артикул: <span>711023</span>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <ul class="nav nav-tabs product-tabs">
                                    <li class="active">
                                        <a aria-expanded="true" href="#characteristics" data-toggle="tab">Характеристики</a>
                                    </li>
                                    <li class="">
                                        <a aria-expanded="false" href="#opinion" id="btn_opinion"
                                           data-toggle="tab" data-xmlid="711023">
                                            Отзывы <span class="count">0</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a aria-expanded="false" data-xmlid="711023" href="#reviews"
                                           id="btn_reviews" data-toggle="tab">
                                            Обзоры
                                        </a>
                                    </li>
                                </ul>
                                <div id="product-tabs" class="tab-content">
                                    <div class="tab-pane fade active in" id="characteristics">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="h4">Основные характеристики</div>
                                                    <table class="table table-hover">
                                                        <tr>
                                                            <td>Тип соединения</td>
                                                            <td>проводная</td>
                                                        </tr>
                                                        <tr>
                                                            <td>PartNumber/Артикул Производителя</td>
                                                            <td>CNR-MSD06</td>
                                                        </tr>
                                                    </table>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="h4">Прочие характеристики</div>
                                                    <table class="table table-hover">
                                                        <tr>
                                                            <td>Тип гарантии</td>
                                                            <td>Гарантия продавца</td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="opinion">
                                        Идет загрузка...
                                    </div>
                                    <div class="tab-pane fade" id="reviews">
                                        Идет загрузка...
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="buy-block-lg" class="col-lg-4 hidden-md hidden-sm hidden-xs buy-block">
                            <div class="row hidden-xs" itemprop="aggregateRating" itemscope
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
                                            <span style="width: 0%;" class="filled-stars">
                                        <span class="star"><i class="glyphicon glyphicon-star"></i></span><span
                                                        class="star"><i class="glyphicon glyphicon-star"></i></span><span
                                                        class="star"><i class="glyphicon glyphicon-star"></i></span><span
                                                        class="star"><i class="glyphicon glyphicon-star"></i></span><span
                                                        class="star"><i class="glyphicon glyphicon-star"></i></span>
                                    </span>
                                            <meta itemprop="ratingValue" content="0.00"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 reviews">
                                    отзывов: <span itemprop="reviewCount">0</span>
                                </div>
                            </div>
                            <div class="container-fluid">
                                <div class="row buy-row" itemprop="offers" itemscope
                                     itemtype="http://schema.org/Offer">
                                    <div class="col-sm-7 hidden-xs buttons">
                                    </div>
                                    <div class="col-xs-6 visible-xs-block">
                                        <div class="item_rating row">
                                            <div class="rating-container rating-xs rating-animate stars-styled">
                                                <div class="rating">
                                            <span class="empty-stars">
                                                <span class="star"><i class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i class="glyphicon glyphicon-star-empty"></i></span>
                                            </span>
                                                    <span style="width: 0%;" class="filled-stars">
                                                <span class="star"><i class="glyphicon glyphicon-star"></i></span><span
                                                                class="star"><i
                                                                    class="glyphicon glyphicon-star"></i></span><span
                                                                class="star"><i
                                                                    class="glyphicon glyphicon-star"></i></span><span
                                                                class="star"><i
                                                                    class="glyphicon glyphicon-star"></i></span><span
                                                                class="star"><i
                                                                    class="glyphicon glyphicon-star"></i></span>
                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="price row text-right">
                                        </div>
                                    </div>
                                </div>
                                <div class="row visible-xs-block three-butons">
                                    <div class="col-xs-12">
                                        <div class="buy">
                                        </div>
                                        <div class="services">
                                            <a class="btn btn-service js_add2compare" data-id="123288">
                                                <span class="glyphicon icon-product-add-comparison"></span>
                                            </a>
                                            <a class="btn btn-service js_add2wishlist" data-id="191227">
                                                <span class="glyphicon glyphicon-heart-empty"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row visible-xs-block">
                                    <div class="col-xs-12">
                                    </div>
                                </div>
                            </div>
                            <div class="section">
                                <div class="section-row">
                                    <span class="glyphicon glyphicon-remove"></span>Нет в наличии
                                </div>

                                <div class="section-row delivery-time">
                                </div>
                            </div>
                            <div class="section hidden-xs">
                                <div class="buttons-row">
                                    <a class="btn btn-service js_add2compare" data-id="123288">
                                        <span class="glyphicon icon-product-add-comparison"></span>
                                        <span class="text">Сравнить</span>
                                    </a>
                                    <a class="btn btn-service js_add2wishlist" data-id="191227">
                                        <span class="glyphicon glyphicon-heart-empty"></span>
                                        <span class="text">В список желаний</span>
                                    </a>
                                    <a class="btn btn-service js_print">
                                        <span class="glyphicon icon-product-print"></span>
                                        <span class="text">Распечатать</span>
                                    </a>
                                </div>
                            </div>
                            <div class="article">
                                Артикул: <span>711023</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="well hidden-xs hidden-sm tags">
            <div class="block">
                <div class="h2">Мышь</div>
                <p>Купите Мышь в магазинах Позитроника с доставкой по Казани. Мышь: характеристики, отзывы
                    покупателей, описание, обзоры и аксессуары.</p>
                <div><br/></div>
                <p><strong>Производитель оставляет за собой право изменять характеристики товара, его внешний
                        вид и комплектность без предварительного уведомления продавца.</strong></p>
                <p><strong>Предложение действительно, пока товар в наличии на складе.</strong></p></div>
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
@endpush