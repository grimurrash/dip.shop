@extends('layouts.app')

@section('title',"Бытовая техника и электроника в Казани - интернет-магазин Позитроника")
@section('description','Интернет-магазин Позитроника предлагает большой выбор электроники и бытовой техники по выгодным ценам в Казани')

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
                            <li class="product"
                                data-productid="354168"
                                data-parentproductid="354049">
                                <a href="/catalog/product/tcl-l50p6us-1003066/" class="pic">
                                    <img class="img-responsive"
                                         src="https://img.positronica.ru/items/1003066_v01_m.jpg"
                                         alt="Телевизор LED TCL L50P6US"
                                         title="Телевизор LED TCL L50P6US">
                                </a>
                                <div class="item_rating">
                                    <div class="rating-container rating-xs rating-animate stars-styled">
                                        <div class="rating"><span class="empty-stars"><span class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span></span><span
                                                    style="width: 0%!important;" class="filled-stars"><span
                                                        class="star"><i
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
                                <div class="name"><span><a class="ga_detail"
                                                           data-brand="TCL"
                                                           data-category="Телевизоры"
                                                           data-articul="1003066"
                                                           data-name="Телевизор LED TCL L50P6US"
                                                           data-price="36990"

                                                           href="/catalog/product/tcl-l50p6us-1003066/">Телевизор LED TCL L50P6US</a><small></small></span>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6 text-left"><span
                                                class="glyphicon glyphicon-ok"></span>
                                        <span
                                                class="status">На складе</span></div>
                                    <div class="col-xs-6 article">Артикул: 1003066</div>
                                </div>
                                <div class="price">
                                    <div class="action"></div>
                                    36 990 ₽ <span class="old"></span>
                                    <div class="action"></div>
                                </div>
                                <div class="row">
                                    <div class="buy">
                                        <a class="ga btn btn-default js_add2basket"
                                           data-brand="TCL" data-category="Телевизоры"
                                           data-articul="1003066" data-name="Телевизор LED TCL L50P6US"
                                           data-id="354168">
                                            КУПИТЬ
                                        </a>
                                    </div>
                                    <div class="services">
                                        <a class="btn btn-service js_add2compare" data-id="354049">
                                            <span class="glyphicon icon-product-add-comparison"></span>
                                        </a>
                                        <a class="btn btn-service js_heart js_add2wishlist"
                                           data-id="354168">
										<span
                                                class="glyphicon glyphicon-heart-empty"></span>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="product"
                                data-productid="289062"
                                data-parentproductid="288846">
                                <a href="/catalog/product/tefal-tt356e30-398189/" class="pic">
                                    <img class="img-responsive"
                                         src="https://img.positronica.ru/items/398189_v01_m.jpg"
                                         alt="Тостер Tefal TT356E30 красный/черный (1500578364)"
                                         title="Тостер Tefal TT356E30 красный/черный (1500578364)">
                                </a>
                                <div class="item_rating">
                                    <div class="rating-container rating-xs rating-animate stars-styled">
                                        <div class="rating"><span class="empty-stars"><span class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span></span><span
                                                    style="width: 0%;" class="filled-stars"><span
                                                        class="star"><i
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
                                <div class="name"><span><a class="ga_detail"
                                                           data-brand="TEFAL"
                                                           data-category="Тостеры"
                                                           data-articul="398189"
                                                           data-name="Тостер Tefal TT356E30 красный/черный (1500578364)"
                                                           data-price="4730"

                                                           href="/catalog/product/tefal-tt356e30-398189/">Тостер Tefal TT356E30 красный/черный (1500578364)</a><small> красный</small></span>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6 text-left"><span
                                                class="glyphicon glyphicon-ok"></span>
                                        <span
                                                class="status">На складе</span></div>
                                    <div class="col-xs-6 article">Артикул: 398189</div>
                                </div>
                                <div class="price">
                                    <div class="action"></div>
                                    4 730 ₽ <span class="old"></span>
                                    <div class="action"></div>
                                </div>
                                <div class="row">
                                    <div class="buy">
                                        <a class="ga btn btn-default js_add2basket"
                                           data-brand="TEFAL" data-category="Тостеры"
                                           data-articul="398189"
                                           data-name="Тостер Tefal TT356E30 красный/черный (1500578364)"
                                           data-id="289062">
                                            КУПИТЬ
                                        </a>
                                    </div>
                                    <div class="services">
                                        <a class="btn btn-service js_add2compare" data-id="288846">
                                            <span class="glyphicon icon-product-add-comparison"></span>
                                        </a>
                                        <a class="btn btn-service js_heart js_add2wishlist"
                                           data-id="289062">
										<span
                                                class="glyphicon glyphicon-heart-empty"></span>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="product"
                                data-productid="332935"
                                data-parentproductid="332905">
                                <a href="/catalog/product/hp-active-494248/" class="pic">
                                    <img class="img-responsive"
                                         src="https://img.positronica.ru/items/494248_v01_m.jpg"
                                         alt="Рюкзак для ноутбука 15.6&quot; HP Active синий/красный (1MR61AA)"
                                         title="Рюкзак для ноутбука 15.6&quot; HP Active синий/красный (1MR61AA)">
                                </a>
                                <div class="item_rating">
                                    <div class="rating-container rating-xs rating-animate stars-styled">
                                        <div class="rating"><span class="empty-stars"><span class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span></span><span
                                                    style="width: 0%;" class="filled-stars"><span
                                                        class="star"><i
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
                                <div class="name"><span><a class="ga_detail"
                                                           data-brand="HP"
                                                           data-category="Сумки для ноутбуков"
                                                           data-articul="494248"
                                                           data-name="Рюкзак для ноутбука 15.6&quot; HP Active синий/красный (1MR61AA)"
                                                           data-price="1320"

                                                           href="/catalog/product/hp-active-494248/">Рюкзак для ноутбука 15.6&quot; HP Active синий/красный (1MR61AA)</a><small> 15.6&quot;, синтетика, синий, красный</small></span>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6 text-left"><span
                                                class="glyphicon glyphicon-ok"></span>
                                        <span
                                                class="status">На складе</span></div>
                                    <div class="col-xs-6 article">Артикул: 494248</div>
                                </div>
                                <div class="price">
                                    <div class="action"></div>
                                    1 320 ₽ <span class="old"></span>
                                    <div class="action"></div>
                                </div>
                                <div class="row">
                                    <div class="buy">
                                        <a class="ga btn btn-default js_add2basket"
                                           data-brand="HP" data-category="Сумки для ноутбуков"
                                           data-articul="494248"
                                           data-name="Рюкзак для ноутбука 15.6&quot; HP Active синий/красный (1MR61AA)"
                                           data-id="332935">
                                            КУПИТЬ
                                        </a>
                                    </div>
                                    <div class="services">
                                        <a class="btn btn-service js_add2compare" data-id="332905">
                                            <span class="glyphicon icon-product-add-comparison"></span>
                                        </a>
                                        <a class="btn btn-service js_heart js_add2wishlist"
                                           data-id="332935">
										<span
                                                class="glyphicon glyphicon-heart-empty"></span>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="product"
                                data-productid="315711"
                                data-parentproductid="315710">
                                <a href="/catalog/product/transvit-uzor-1-436665/" class="pic">
                                    <img class="img-responsive"
                                         src="https://img.positronica.ru/items/436665_v01_m.jpg"
                                         alt="Прибор для выжигания Трансвит УЗОР-1"
                                         title="Прибор для выжигания Трансвит УЗОР-1">
                                </a>
                                <div class="item_rating">
                                    <div class="rating-container rating-xs rating-animate stars-styled">
                                        <div class="rating"><span class="empty-stars"><span class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span></span><span
                                                    style="width: 0%;" class="filled-stars"><span
                                                        class="star"><i
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
                                <div class="name"><span><a class="ga_detail"
                                                           data-brand="ТРАНСВИТ"
                                                           data-category="Приборы для выжигания по дереву"
                                                           data-articul="436665"
                                                           data-name="Прибор для выжигания Трансвит УЗОР-1"
                                                           data-price="1370"

                                                           href="/catalog/product/transvit-uzor-1-436665/">Прибор для выжигания Трансвит УЗОР-1</a><small></small></span>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6 text-left"><span
                                                class="glyphicon glyphicon-ok"></span>
                                        <span
                                                class="status">На складе</span></div>
                                    <div class="col-xs-6 article">Артикул: 436665</div>
                                </div>
                                <div class="price">
                                    <div class="action"></div>
                                    1 370 ₽ <span class="old"></span>
                                    <div class="action"></div>
                                </div>
                                <div class="row">
                                    <div class="buy">
                                        <a class="ga btn btn-default js_add2basket"
                                           data-brand="ТРАНСВИТ"
                                           data-category="Приборы для выжигания по дереву"
                                           data-articul="436665"
                                           data-name="Прибор для выжигания Трансвит УЗОР-1"
                                           data-id="315711">
                                            КУПИТЬ
                                        </a>
                                    </div>
                                    <div class="services">
                                        <a class="btn btn-service js_add2compare" data-id="315710">
                                            <span class="glyphicon icon-product-add-comparison"></span>
                                        </a>
                                        <a class="btn btn-service js_heart js_add2wishlist"
                                           data-id="315711">
										<span
                                                class="glyphicon glyphicon-heart-empty"></span>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="product"
                                data-productid="330718"
                                data-parentproductid="330652">
                                <a href="/catalog/product/plantronics-backbeat500-495570/" class="pic">
                                    <img class="img-responsive"
                                         src="https://img.positronica.ru/items/495570_v01_m.jpg"
                                         alt="Гарнитура Plantronics BackBeat 500 серый/зеленый (207850-01)"
                                         title="Гарнитура Plantronics BackBeat 500 серый/зеленый (207850-01)">
                                </a>
                                <div class="item_rating">
                                    <div class="rating-container rating-xs rating-animate stars-styled">
                                        <div class="rating"><span class="empty-stars"><span class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span></span><span
                                                    style="width: 0%;" class="filled-stars"><span
                                                        class="star"><i
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
                                <div class="name"><span><a class="ga_detail"
                                                           data-brand="PLANTRONICS"
                                                           data-category="Наушники и гарнитуры"
                                                           data-articul="495570"
                                                           data-name="Гарнитура Plantronics BackBeat 500 серый/зеленый (207850-01)"
                                                           data-price="5090"

                                                           href="/catalog/product/plantronics-backbeat500-495570/">Гарнитура Plantronics BackBeat 500 серый/зеленый (207850-01)</a><small> накладные, серый, зеленый</small></span>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6 text-left"><span
                                                class="glyphicon glyphicon-ok"></span>
                                        <span
                                                class="status">На складе</span></div>
                                    <div class="col-xs-6 article">Артикул: 495570</div>
                                </div>
                                <div class="price">
                                    <div class="action"></div>
                                    5 090 ₽ <span class="old"></span>
                                    <div class="action"></div>
                                </div>
                                <div class="row">
                                    <div class="buy">
                                        <a class="ga btn btn-default js_add2basket"
                                           data-brand="PLANTRONICS" data-category="Наушники и гарнитуры"
                                           data-articul="495570"
                                           data-name="Гарнитура Plantronics BackBeat 500 серый/зеленый (207850-01)"
                                           data-id="330718">
                                            КУПИТЬ
                                        </a>
                                    </div>
                                    <div class="services">
                                        <a class="btn btn-service js_add2compare" data-id="330652">
                                            <span class="glyphicon icon-product-add-comparison"></span>
                                        </a>
                                        <a class="btn btn-service js_heart js_add2wishlist"
                                           data-id="330718">
										<span
                                                class="glyphicon glyphicon-heart-empty"></span>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="product"
                                data-productid="309969"
                                data-parentproductid="309584">
                                <a href="/catalog/product/dell-se2417hg-459801/" class="pic">
                                    <img class="img-responsive"
                                         src="https://img.positronica.ru/items/459801_v01_m.jpg"
                                         alt="Монитор 23.6&quot; Dell SE2417HG черный (2417-4336)"
                                         title="Монитор 23.6&quot; Dell SE2417HG черный (2417-4336)">
                                </a>
                                <div class="item_rating">
                                    <div class="rating-container rating-xs rating-animate stars-styled">
                                        <div class="rating"><span class="empty-stars"><span class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span></span><span
                                                    style="width: 0%;" class="filled-stars"><span
                                                        class="star"><i
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
                                <div class="name"><span><a class="ga_detail"
                                                           data-brand="DELL"
                                                           data-category="Мониторы"
                                                           data-articul="459801"
                                                           data-name="Монитор 23.6&quot; Dell SE2417HG черный (2417-4336)"
                                                           data-price="8850"

                                                           href="/catalog/product/dell-se2417hg-459801/">Монитор 23.6&quot; Dell SE2417HG черный (2417-4336)</a><small> 23.6&quot; (59.9см), 1920x1080, 16:9, TN, матовая, 60Гц, FULL HD (1080p), черный</small></span>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6 text-left"><span
                                                class="glyphicon glyphicon-ok"></span>
                                        <span
                                                class="status">На складе</span></div>
                                    <div class="col-xs-6 article">Артикул: 459801</div>
                                </div>
                                <div class="price">
                                    <div class="action"></div>
                                    8 850 ₽ <span class="old"></span>
                                    <div class="action"></div>
                                </div>
                                <div class="row">
                                    <div class="buy">
                                        <a class="ga btn btn-default js_add2basket"
                                           data-brand="DELL" data-category="Мониторы"
                                           data-articul="459801"
                                           data-name="Монитор 23.6&quot; Dell SE2417HG черный (2417-4336)"
                                           data-id="309969">
                                            КУПИТЬ
                                        </a>
                                    </div>
                                    <div class="services">
                                        <a class="btn btn-service js_add2compare" data-id="309584">
                                            <span class="glyphicon icon-product-add-comparison"></span>
                                        </a>
                                        <a class="btn btn-service js_heart js_add2wishlist"
                                           data-id="309969">
										<span
                                                class="glyphicon glyphicon-heart-empty"></span>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="product"
                                data-productid="317735"
                                data-parentproductid="317734">
                                <a href="/catalog/product/samsung-mb-mc64garu-459735/" class="pic">
                                    <img class="img-responsive"
                                         src="https://img.positronica.ru/items/459735_v01_m.jpg"
                                         alt="Карта памяти microSDXC 64Gb Class10 Samsung EVO PLUS 2 (MB-MC64GA/RU)"
                                         title="Карта памяти microSDXC 64Gb Class10 Samsung EVO PLUS 2 (MB-MC64GA/RU)">
                                </a>
                                <div class="item_rating">
                                    <div class="rating-container rating-xs rating-animate stars-styled">
                                        <div class="rating"><span class="empty-stars"><span class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span></span><span
                                                    style="width: 0%;" class="filled-stars"><span
                                                        class="star"><i
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
                                <div class="name"><span><a class="ga_detail"
                                                           data-brand="SAMSUNG"
                                                           data-category="Карты памяти"
                                                           data-articul="459735"
                                                           data-name="Карта памяти microSDXC 64Gb Class10 Samsung EVO PLUS 2 (MB-MC64GA/RU)"
                                                           data-price="930"

                                                           href="/catalog/product/samsung-mb-mc64garu-459735/">Карта памяти microSDXC 64Gb Class10 Samsung EVO PLUS 2 (MB-MC64GA/RU)</a><small> microSD, 64Гб, UHS-I U3, Class 10</small></span>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6 text-left"><span
                                                class="glyphicon glyphicon-ok"></span>
                                        <span
                                                class="status">На складе</span></div>
                                    <div class="col-xs-6 article">Артикул: 459735</div>
                                </div>
                                <div class="price">
                                    <div class="action"></div>
                                    930 ₽ <span class="old"></span>
                                    <div class="action"></div>
                                </div>
                                <div class="row">
                                    <div class="buy">
                                        <a class="ga btn btn-default js_add2basket"
                                           data-brand="SAMSUNG" data-category="Карты памяти"
                                           data-articul="459735"
                                           data-name="Карта памяти microSDXC 64Gb Class10 Samsung EVO PLUS 2 (MB-MC64GA/RU)"
                                           data-id="317735">
                                            КУПИТЬ
                                        </a>
                                    </div>
                                    <div class="services">
                                        <a class="btn btn-service js_add2compare" data-id="317734">
                                            <span class="glyphicon icon-product-add-comparison"></span>
                                        </a>
                                        <a class="btn btn-service js_heart js_add2wishlist"
                                           data-id="317735">
										<span
                                                class="glyphicon glyphicon-heart-empty"></span>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="product"
                                data-productid="335833"
                                data-parentproductid="335746">
                                <a href="/catalog/product/asus-abtu015-490641/" class="pic">
                                    <img class="img-responsive"
                                         src="https://img.positronica.ru/items/490641_v01_m.jpg"
                                         alt="Мобильный аккумулятор ASUS ZenPower Slim ABTU015 черный (90AC02C0-BBT005)"
                                         title="Мобильный аккумулятор ASUS ZenPower Slim ABTU015 черный (90AC02C0-BBT005)">
                                </a>
                                <div class="item_rating">
                                    <div class="rating-container rating-xs rating-animate stars-styled">
                                        <div class="rating"><span class="empty-stars"><span class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span></span><span
                                                    style="width: 0%;" class="filled-stars"><span
                                                        class="star"><i
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
                                <div class="name"><span><a class="ga_detail"
                                                           data-brand="ASUS"
                                                           data-category="Мобильные аккумуляторы"
                                                           data-articul="490641"
                                                           data-name="Мобильный аккумулятор ASUS ZenPower Slim ABTU015 черный (90AC02C0-BBT005)"
                                                           data-price="1030"

                                                           href="/catalog/product/asus-abtu015-490641/">Мобильный аккумулятор ASUS ZenPower Slim ABTU015 черный (90AC02C0-BBT005)</a><small> 4000мAч, черный</small></span>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6 text-left"><span
                                                class="glyphicon glyphicon-ok"></span>
                                        <span
                                                class="status">На складе</span></div>
                                    <div class="col-xs-6 article">Артикул: 490641</div>
                                </div>
                                <div class="price">
                                    <div class="action"></div>
                                    1 030 ₽ <span class="old"></span>
                                    <div class="action"></div>
                                </div>
                                <div class="row">
                                    <div class="buy">
                                        <a class="ga btn btn-default js_add2basket"
                                           data-brand="ASUS" data-category="Мобильные аккумуляторы"
                                           data-articul="490641"
                                           data-name="Мобильный аккумулятор ASUS ZenPower Slim ABTU015 черный (90AC02C0-BBT005)"
                                           data-id="335833">
                                            КУПИТЬ
                                        </a>
                                    </div>
                                    <div class="services">
                                        <a class="btn btn-service js_add2compare" data-id="335746">
                                            <span class="glyphicon icon-product-add-comparison"></span>
                                        </a>
                                        <a class="btn btn-service js_heart js_add2wishlist"
                                           data-id="335833">
										<span
                                                class="glyphicon glyphicon-heart-empty"></span>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="product"
                                data-productid="356145"
                                data-parentproductid="356144">
                                <a href="/catalog/product/hp-319aio-1034987/" class="pic">
                                    <img class="img-responsive"
                                         src="https://img.positronica.ru/items/1034987_v01_m.jpg"
                                         alt="МФУ HP Ink Tank 319 AiO черный (Z6Z13A)"
                                         title="МФУ HP Ink Tank 319 AiO черный (Z6Z13A)">
                                </a>
                                <div class="item_rating">
                                    <div class="rating-container rating-xs rating-animate stars-styled">
                                        <div class="rating"><span class="empty-stars"><span class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span></span><span
                                                    style="width: 0%!important;" class="filled-stars"><span
                                                        class="star"><i
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
                                <div class="name"><span><a class="ga_detail"
                                                           data-brand="HP"
                                                           data-category="МФУ струйные"
                                                           data-articul="1034987"
                                                           data-name="МФУ HP Ink Tank 319 AiO черный (Z6Z13A)"
                                                           data-price="12490"

                                                           href="/catalog/product/hp-319aio-1034987/">МФУ HP Ink Tank 319 AiO черный (Z6Z13A)</a><small></small></span>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6 text-left"><span
                                                class="glyphicon glyphicon-ok"></span>
                                        <span
                                                class="status">На складе</span></div>
                                    <div class="col-xs-6 article">Артикул: 1034987</div>
                                </div>
                                <div class="price">
                                    <div class="action"></div>
                                    12 490 ₽ <span class="old"></span>
                                    <div class="action"></div>
                                </div>
                                <div class="row">
                                    <div class="buy">
                                        <a class="ga btn btn-default js_add2basket"
                                           data-brand="HP" data-category="МФУ струйные"
                                           data-articul="1034987"
                                           data-name="МФУ HP Ink Tank 319 AiO черный (Z6Z13A)"
                                           data-id="356145">
                                            КУПИТЬ
                                        </a>
                                    </div>
                                    <div class="services">
                                        <a class="btn btn-service js_add2compare" data-id="356144">
                                            <span class="glyphicon icon-product-add-comparison"></span>
                                        </a>
                                        <a class="btn btn-service js_heart js_add2wishlist"
                                           data-id="356145">
										<span
                                                class="glyphicon glyphicon-heart-empty"></span>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="product"
                                data-productid="308445"
                                data-parentproductid="307297">
                                <a href="/catalog/product/kingston-sa400s37120g-420250/" class="pic">
                                    <img class="img-responsive"
                                         src="https://img.positronica.ru/items/420250_v01_m.jpg"
                                         alt="Накопитель SSD 120Gb Kingston A400 SA400S37/120G SATA III"
                                         title="Накопитель SSD 120Gb Kingston A400 SA400S37/120G SATA III">
                                </a>
                                <div class="item_rating">
                                    <div class="rating-container rating-xs rating-animate stars-styled">
                                        <div class="rating"><span class="empty-stars"><span class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span></span><span
                                                    style="width: 0%;" class="filled-stars"><span
                                                        class="star"><i
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
                                <div class="name"><span><a class="ga_detail"
                                                           data-brand="KINGSTON"
                                                           data-category="Накопители SSD"
                                                           data-articul="420250"
                                                           data-name="Накопитель SSD 120Gb Kingston A400 SA400S37/120G SATA III"
                                                           data-price="1590"

                                                           href="/catalog/product/kingston-sa400s37120g-420250/">Накопитель SSD 120Gb Kingston A400 SA400S37/120G SATA III</a><small> 120Гб, SATA III</small></span>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6 text-left"><span
                                                class="glyphicon glyphicon-ok"></span>
                                        <span
                                                class="status">На складе</span></div>
                                    <div class="col-xs-6 article">Артикул: 420250</div>
                                </div>
                                <div class="price">
                                    <div class="action"></div>
                                    1 590 ₽ <span class="old"></span>
                                    <div class="action"></div>
                                </div>
                                <div class="row">
                                    <div class="buy">
                                        <a class="ga btn btn-default js_add2basket"
                                           data-brand="KINGSTON" data-category="Накопители SSD"
                                           data-articul="420250"
                                           data-name="Накопитель SSD 120Gb Kingston A400 SA400S37/120G SATA III"
                                           data-id="308445">
                                            КУПИТЬ
                                        </a>
                                    </div>
                                    <div class="services">
                                        <a class="btn btn-service js_add2compare" data-id="307297">
                                            <span class="glyphicon icon-product-add-comparison"></span>
                                        </a>
                                        <a class="btn btn-service js_heart js_add2wishlist"
                                           data-id="308445">
										<span
                                                class="glyphicon glyphicon-heart-empty"></span>
                                        </a>
                                    </div>
                                </div>
                            </li>
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
            <a href="/news/may-pokupay-ne-zevay/">
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
                            <li class="product"
                                data-productid="411277"
                                data-parentproductid="411276">
                                <a href="/catalog/product/samsung-marvelcasemcomics-1139507/" class="pic">
                                    <img class="img-responsive"
                                         src="https://img.positronica.ru/items/1139507_v01_m.jpg"
                                         alt="Чехол Samsung Marvel Case Mcomics, для Samsung Galaxy S10, красный (GP-G973HIFGKWH)"
                                         title="Чехол Samsung Marvel Case Mcomics, для Samsung Galaxy S10, красный (GP-G973HIFGKWH)">
                                </a>
                                <div class="item_rating">
                                    <div class="rating-container rating-xs rating-animate stars-styled">
                                        <div class="rating"><span class="empty-stars"><span class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span></span><span
                                                    style="width: 0%!important;" class="filled-stars"><span
                                                        class="star"><i
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
                                <div class="name"><span><a class="ga_detail"
                                                           data-brand="SAMSUNG"
                                                           data-category="Чехлы для смартфонов"
                                                           data-articul="1139507"
                                                           data-name="Чехол Samsung Marvel Case Mcomics, для Samsung Galaxy S10, красный (GP-G973HIFGKWH)"
                                                           data-price="2970"

                                                           href="/catalog/product/samsung-marvelcasemcomics-1139507/">Чехол Samsung Marvel Case Mcomics, для Samsung Galaxy S10, красный (GP-G973HIFGKWH)</a><small></small></span>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6 text-left"><span
                                                class="glyphicon glyphicon-ok"></span>
                                        <span
                                                class="status">На складе</span></div>
                                    <div class="col-xs-6 article">Артикул: 1139507</div>
                                </div>
                                <div class="price">
                                    <div class="action"></div>
                                    2 970 ₽ <span class="old"></span>
                                    <div class="action"></div>
                                </div>
                                <div class="row">
                                    <div class="buy">
                                        <a class="ga btn btn-default js_add2basket"
                                           data-brand="SAMSUNG" data-category="Чехлы для смартфонов"
                                           data-articul="1139507"
                                           data-name="Чехол Samsung Marvel Case Mcomics, для Samsung Galaxy S10, красный (GP-G973HIFGKWH)"
                                           data-id="411277">
                                            КУПИТЬ
                                        </a>
                                    </div>
                                    <div class="services">
                                        <a class="btn btn-service js_add2compare" data-id="411276">
                                            <span class="glyphicon icon-product-add-comparison"></span>
                                        </a>
                                        <a class="btn btn-service js_heart js_add2wishlist"
                                           data-id="411277">
										<span
                                                class="glyphicon glyphicon-heart-empty"></span>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="product"
                                data-productid="411108"
                                data-parentproductid="411107">
                                <a href="/catalog/product/microsoft-fmp-00058-m-1139359/" class="pic">
                                    <img class="img-responsive"
                                         src="https://img.positronica.ru/items/1139359_v01_m.jpg"
                                         alt="Игровая консоль Microsoft Xbox One X FMP-00058-M белый"
                                         title="Игровая консоль Microsoft Xbox One X FMP-00058-M белый">
                                </a>
                                <div class="item_rating">
                                    <div class="rating-container rating-xs rating-animate stars-styled">
                                        <div class="rating"><span class="empty-stars"><span class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span></span><span
                                                    style="width: 0%!important;" class="filled-stars"><span
                                                        class="star"><i
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
                                <div class="name"><span><a class="ga_detail"
                                                           data-brand="MICROSOFT"
                                                           data-category="Игровые приставки"
                                                           data-articul="1139359"
                                                           data-name="Игровая консоль Microsoft Xbox One X FMP-00058-M белый"
                                                           data-price="41600"

                                                           href="/catalog/product/microsoft-fmp-00058-m-1139359/">Игровая консоль Microsoft Xbox One X FMP-00058-M белый</a><small></small></span>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6 text-left"><span
                                                class="glyphicon glyphicon-ok"></span>
                                        <span
                                                class="status">На складе</span></div>
                                    <div class="col-xs-6 article">Артикул: 1139359</div>
                                </div>
                                <div class="price">
                                    <div class="action"></div>
                                    41 600 ₽ <span class="old"></span>
                                    <div class="action"></div>
                                </div>
                                <div class="row">
                                    <div class="buy">
                                        <a class="ga btn btn-default js_add2basket"
                                           data-brand="MICROSOFT" data-category="Игровые приставки"
                                           data-articul="1139359"
                                           data-name="Игровая консоль Microsoft Xbox One X FMP-00058-M белый"
                                           data-id="411108">
                                            КУПИТЬ
                                        </a>
                                    </div>
                                    <div class="services">
                                        <a class="btn btn-service js_add2compare" data-id="411107">
                                            <span class="glyphicon icon-product-add-comparison"></span>
                                        </a>
                                        <a class="btn btn-service js_heart js_add2wishlist"
                                           data-id="411108">
										<span
                                                class="glyphicon glyphicon-heart-empty"></span>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="product"
                                data-productid="411281"
                                data-parentproductid="411280">
                                <a href="/catalog/product/samsung-marvelcaseironman-1139516/" class="pic">
                                    <img class="img-responsive"
                                         src="https://img.positronica.ru/items/1139516_v01_m.jpg"
                                         alt="Чехол Samsung Marvel Case IronMan, для Samsung Galaxy S10, красный (GP-G973HIFGKWB)"
                                         title="Чехол Samsung Marvel Case IronMan, для Samsung Galaxy S10, красный (GP-G973HIFGKWB)">
                                </a>
                                <div class="item_rating">
                                    <div class="rating-container rating-xs rating-animate stars-styled">
                                        <div class="rating"><span class="empty-stars"><span class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span></span><span
                                                    style="width: 0%!important;" class="filled-stars"><span
                                                        class="star"><i
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
                                <div class="name"><span><a class="ga_detail"
                                                           data-brand="SAMSUNG"
                                                           data-category="Чехлы для смартфонов"
                                                           data-articul="1139516"
                                                           data-name="Чехол Samsung Marvel Case IronMan, для Samsung Galaxy S10, красный (GP-G973HIFGKWB)"
                                                           data-price="2970"

                                                           href="/catalog/product/samsung-marvelcaseironman-1139516/">Чехол Samsung Marvel Case IronMan, для Samsung Galaxy S10, красный (GP-G973HIFGKWB)</a><small></small></span>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6 text-left"><span
                                                class="glyphicon glyphicon-ok"></span>
                                        <span
                                                class="status">На складе</span></div>
                                    <div class="col-xs-6 article">Артикул: 1139516</div>
                                </div>
                                <div class="price">
                                    <div class="action"></div>
                                    2 970 ₽ <span class="old"></span>
                                    <div class="action"></div>
                                </div>
                                <div class="row">
                                    <div class="buy">
                                        <a class="ga btn btn-default js_add2basket"
                                           data-brand="SAMSUNG" data-category="Чехлы для смартфонов"
                                           data-articul="1139516"
                                           data-name="Чехол Samsung Marvel Case IronMan, для Samsung Galaxy S10, красный (GP-G973HIFGKWB)"
                                           data-id="411281">
                                            КУПИТЬ
                                        </a>
                                    </div>
                                    <div class="services">
                                        <a class="btn btn-service js_add2compare" data-id="411280">
                                            <span class="glyphicon icon-product-add-comparison"></span>
                                        </a>
                                        <a class="btn btn-service js_heart js_add2wishlist"
                                           data-id="411281">
										<span
                                                class="glyphicon glyphicon-heart-empty"></span>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="product"
                                data-productid="411827"
                                data-parentproductid="411826">
                                <a href="/catalog/product/smarterra-fitmaster4-1139207/" class="pic">
                                    <img class="img-responsive"
                                         src="https://img.positronica.ru/items/1139207_v01_m.jpg"
                                         alt="Фитнес-трекер Smarterra FitMaster 4 IPS черный/черный"
                                         title="Фитнес-трекер Smarterra FitMaster 4 IPS черный/черный">
                                </a>
                                <div class="item_rating">
                                    <div class="rating-container rating-xs rating-animate stars-styled">
                                        <div class="rating"><span class="empty-stars"><span class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span></span><span
                                                    style="width: 0%!important;" class="filled-stars"><span
                                                        class="star"><i
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
                                <div class="name"><span><a class="ga_detail"
                                                           data-brand="SMARTERRA"
                                                           data-category="Фитнес-браслеты"
                                                           data-articul="1139207"
                                                           data-name="Фитнес-трекер Smarterra FitMaster 4 IPS черный/черный"
                                                           data-price="1120"

                                                           href="/catalog/product/smarterra-fitmaster4-1139207/">Фитнес-трекер Smarterra FitMaster 4 IPS черный/черный</a><small></small></span>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6 text-left"><span
                                                class="glyphicon glyphicon-ok"></span>
                                        <span
                                                class="status">На складе</span></div>
                                    <div class="col-xs-6 article">Артикул: 1139207</div>
                                </div>
                                <div class="price">
                                    <div class="action"></div>
                                    1 120 ₽ <span class="old"></span>
                                    <div class="action"></div>
                                </div>
                                <div class="row">
                                    <div class="buy">
                                        <a class="ga btn btn-default js_add2basket"
                                           data-brand="SMARTERRA" data-category="Фитнес-браслеты"
                                           data-articul="1139207"
                                           data-name="Фитнес-трекер Smarterra FitMaster 4 IPS черный/черный"
                                           data-id="411827">
                                            КУПИТЬ
                                        </a>
                                    </div>
                                    <div class="services">
                                        <a class="btn btn-service js_add2compare" data-id="411826">
                                            <span class="glyphicon icon-product-add-comparison"></span>
                                        </a>
                                        <a class="btn btn-service js_heart js_add2wishlist"
                                           data-id="411827">
										<span
                                                class="glyphicon glyphicon-heart-empty"></span>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="product"
                                data-productid="411275"
                                data-parentproductid="411274">
                                <a href="/catalog/product/samsung-marvelcasembiglogo-1139509/" class="pic">
                                    <img class="img-responsive"
                                         src="https://img.positronica.ru/items/1139509_v01_m.jpg"
                                         alt="Чехол Samsung Marvel Case MBigLogo, для Samsung Galaxy S10, красный (GP-G973HIFGKWG)"
                                         title="Чехол Samsung Marvel Case MBigLogo, для Samsung Galaxy S10, красный (GP-G973HIFGKWG)">
                                </a>
                                <div class="item_rating">
                                    <div class="rating-container rating-xs rating-animate stars-styled">
                                        <div class="rating"><span class="empty-stars"><span class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span></span><span
                                                    style="width: 0%!important;" class="filled-stars"><span
                                                        class="star"><i
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
                                <div class="name"><span><a class="ga_detail"
                                                           data-brand="SAMSUNG"
                                                           data-category="Чехлы для смартфонов"
                                                           data-articul="1139509"
                                                           data-name="Чехол Samsung Marvel Case MBigLogo, для Samsung Galaxy S10, красный (GP-G973HIFGKWG)"
                                                           data-price="2970"

                                                           href="/catalog/product/samsung-marvelcasembiglogo-1139509/">Чехол Samsung Marvel Case MBigLogo, для Samsung Galaxy S10, красный (GP-G973HIFGKWG)</a><small></small></span>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6 text-left"><span
                                                class="glyphicon glyphicon-ok"></span>
                                        <span
                                                class="status">На складе</span></div>
                                    <div class="col-xs-6 article">Артикул: 1139509</div>
                                </div>
                                <div class="price">
                                    <div class="action"></div>
                                    2 970 ₽ <span class="old"></span>
                                    <div class="action"></div>
                                </div>
                                <div class="row">
                                    <div class="buy">
                                        <a class="ga btn btn-default js_add2basket"
                                           data-brand="SAMSUNG" data-category="Чехлы для смартфонов"
                                           data-articul="1139509"
                                           data-name="Чехол Samsung Marvel Case MBigLogo, для Samsung Galaxy S10, красный (GP-G973HIFGKWG)"
                                           data-id="411275">
                                            КУПИТЬ
                                        </a>
                                    </div>
                                    <div class="services">
                                        <a class="btn btn-service js_add2compare" data-id="411274">
                                            <span class="glyphicon icon-product-add-comparison"></span>
                                        </a>
                                        <a class="btn btn-service js_heart js_add2wishlist"
                                           data-id="411275">
										<span
                                                class="glyphicon glyphicon-heart-empty"></span>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="product"
                                data-productid="412989"
                                data-parentproductid="412988">
                                <a href="/catalog/product/asus-fx705gm-ew019-1139994/" class="pic">
                                    <img class="img-responsive"
                                         src="https://img.positronica.ru/items/1139994_v01_m.jpg"
                                         alt="Ноутбук 17.3&quot; Asus TUF Gaming FX705GM-EW019 черный (90NR0122-M00420)"
                                         title="Ноутбук 17.3&quot; Asus TUF Gaming FX705GM-EW019 черный (90NR0122-M00420)">
                                </a>
                                <div class="item_rating">
                                    <div class="rating-container rating-xs rating-animate stars-styled">
                                        <div class="rating"><span class="empty-stars"><span class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span></span><span
                                                    style="width: 0%!important;" class="filled-stars"><span
                                                        class="star"><i
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
                                <div class="name"><span><a class="ga_detail"
                                                           data-brand="ASUS"
                                                           data-category="Ноутбуки"
                                                           data-articul="1139994"
                                                           data-name="Ноутбук 17.3&quot; Asus TUF Gaming FX705GM-EW019 черный (90NR0122-M00420)"
                                                           data-price="98380"

                                                           href="/catalog/product/asus-fx705gm-ew019-1139994/">Ноутбук 17.3&quot; Asus TUF Gaming FX705GM-EW019 черный (90NR0122-M00420)</a><small></small></span>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6 text-left"><span
                                                class="glyphicon glyphicon-ok"></span>
                                        <span
                                                class="status">На складе</span></div>
                                    <div class="col-xs-6 article">Артикул: 1139994</div>
                                </div>
                                <div class="price">
                                    <div class="action"></div>
                                    98 380 ₽ <span class="old"></span>
                                    <div class="action"></div>
                                </div>
                                <div class="row">
                                    <div class="buy">
                                        <a class="ga btn btn-default js_add2basket"
                                           data-brand="ASUS" data-category="Ноутбуки"
                                           data-articul="1139994"
                                           data-name="Ноутбук 17.3&quot; Asus TUF Gaming FX705GM-EW019 черный (90NR0122-M00420)"
                                           data-id="412989">
                                            КУПИТЬ
                                        </a>
                                    </div>
                                    <div class="services">
                                        <a class="btn btn-service js_add2compare" data-id="412988">
                                            <span class="glyphicon icon-product-add-comparison"></span>
                                        </a>
                                        <a class="btn btn-service js_heart js_add2wishlist"
                                           data-id="412989">
										<span
                                                class="glyphicon glyphicon-heart-empty"></span>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="product"
                                data-productid="411412"
                                data-parentproductid="411411">
                                <a href="/catalog/product/samsung-sm-r325-1139331/" class="pic">
                                    <img class="img-responsive"
                                         src="https://img.positronica.ru/items/1139331_v01_m.jpg"
                                         alt="Очки виртуальной реальности SAMSUNG Galaxy Gear VR SM-R325 темно-синий (SM-R325NZVDSER)"
                                         title="Очки виртуальной реальности SAMSUNG Galaxy Gear VR SM-R325 темно-синий (SM-R325NZVDSER)">
                                </a>
                                <div class="item_rating">
                                    <div class="rating-container rating-xs rating-animate stars-styled">
                                        <div class="rating"><span class="empty-stars"><span class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span></span><span
                                                    style="width: 0%!important;" class="filled-stars"><span
                                                        class="star"><i
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
                                <div class="name"><span><a class="ga_detail"
                                                           data-brand="SAMSUNG"
                                                           data-category="Очки виртуальной реальности"
                                                           data-articul="1139331"
                                                           data-name="Очки виртуальной реальности SAMSUNG Galaxy Gear VR SM-R325 темно-синий (SM-R325NZVDSER)"
                                                           data-price="7990"

                                                           href="/catalog/product/samsung-sm-r325-1139331/">Очки виртуальной реальности SAMSUNG Galaxy Gear VR SM-R325 темно-синий (SM-R325NZVDSER)</a><small></small></span>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6 text-left"><span
                                                class="glyphicon glyphicon-ok"></span>
                                        <span
                                                class="status">На складе</span></div>
                                    <div class="col-xs-6 article">Артикул: 1139331</div>
                                </div>
                                <div class="price">
                                    <div class="action"></div>
                                    7 990 ₽ <span class="old"></span>
                                    <div class="action"></div>
                                </div>
                                <div class="row">
                                    <div class="buy">
                                        <a class="ga btn btn-default js_add2basket"
                                           data-brand="SAMSUNG" data-category="Очки виртуальной реальности"
                                           data-articul="1139331"
                                           data-name="Очки виртуальной реальности SAMSUNG Galaxy Gear VR SM-R325 темно-синий (SM-R325NZVDSER)"
                                           data-id="411412">
                                            КУПИТЬ
                                        </a>
                                    </div>
                                    <div class="services">
                                        <a class="btn btn-service js_add2compare" data-id="411411">
                                            <span class="glyphicon icon-product-add-comparison"></span>
                                        </a>
                                        <a class="btn btn-service js_heart js_add2wishlist"
                                           data-id="411412">
										<span
                                                class="glyphicon glyphicon-heart-empty"></span>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="product"
                                data-productid="411380"
                                data-parentproductid="411379">
                                <a href="/catalog/product/samsung-sm-a105f-1139317/" class="pic">
                                    <img class="img-responsive"
                                         src="https://img.positronica.ru/items/1139317_v01_m.jpg"
                                         alt="Смартфон Samsung Galaxy A10 SM-A105F 32ГБ черный (SM-A105FZKGSER)"
                                         title="Смартфон Samsung Galaxy A10 SM-A105F 32ГБ черный (SM-A105FZKGSER)">
                                </a>
                                <div class="item_rating">
                                    <div class="rating-container rating-xs rating-animate stars-styled">
                                        <div class="rating"><span class="empty-stars"><span class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span></span><span
                                                    style="width: 0%!important;" class="filled-stars"><span
                                                        class="star"><i
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
                                <div class="name"><span><a class="ga_detail"
                                                           data-brand="SAMSUNG"
                                                           data-category="Смартфоны"
                                                           data-articul="1139317"
                                                           data-name="Смартфон Samsung Galaxy A10 SM-A105F 32ГБ черный (SM-A105FZKGSER)"
                                                           data-price="9990"

                                                           href="/catalog/product/samsung-sm-a105f-1139317/">Смартфон Samsung Galaxy A10 SM-A105F 32ГБ черный (SM-A105FZKGSER)</a><small></small></span>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6 text-left"><span
                                                class="glyphicon glyphicon-ok"></span>
                                        <span
                                                class="status">На складе</span></div>
                                    <div class="col-xs-6 article">Артикул: 1139317</div>
                                </div>
                                <div class="price">
                                    <div class="action"></div>
                                    9 990 ₽ <span class="old"></span>
                                    <div class="action"></div>
                                </div>
                                <div class="row">
                                    <div class="buy">
                                        <a class="ga btn btn-default js_add2basket"
                                           data-brand="SAMSUNG" data-category="Смартфоны"
                                           data-articul="1139317"
                                           data-name="Смартфон Samsung Galaxy A10 SM-A105F 32ГБ черный (SM-A105FZKGSER)"
                                           data-id="411380">
                                            КУПИТЬ
                                        </a>
                                    </div>
                                    <div class="services">
                                        <a class="btn btn-service js_add2compare" data-id="411379">
                                            <span class="glyphicon icon-product-add-comparison"></span>
                                        </a>
                                        <a class="btn btn-service js_heart js_add2wishlist"
                                           data-id="411380">
										<span
                                                class="glyphicon glyphicon-heart-empty"></span>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="product"
                                data-productid="413137"
                                data-parentproductid="413136">
                                <a href="/catalog/product/asus-primeb365m-k-1140441/" class="pic">
                                    <img class="img-responsive"
                                         src="https://img.positronica.ru/items/1140441_v01_m.jpg"
                                         alt="Материнская плата Asus PRIME B365M-K Soc-1151v2 mATX"
                                         title="Материнская плата Asus PRIME B365M-K Soc-1151v2 mATX">
                                </a>
                                <div class="item_rating">
                                    <div class="rating-container rating-xs rating-animate stars-styled">
                                        <div class="rating"><span class="empty-stars"><span class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span></span><span
                                                    style="width: 0%!important;" class="filled-stars"><span
                                                        class="star"><i
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
                                <div class="name"><span><a class="ga_detail"
                                                           data-brand="ASUS"
                                                           data-category="Материнские платы"
                                                           data-articul="1140441"
                                                           data-name="Материнская плата Asus PRIME B365M-K Soc-1151v2 mATX"
                                                           data-price="5600"

                                                           href="/catalog/product/asus-primeb365m-k-1140441/">Материнская плата Asus PRIME B365M-K Soc-1151v2 mATX</a><small></small></span>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6 text-left"><span
                                                class="glyphicon glyphicon-ok"></span>
                                        <span
                                                class="status">На складе</span></div>
                                    <div class="col-xs-6 article">Артикул: 1140441</div>
                                </div>
                                <div class="price">
                                    <div class="action"></div>
                                    5 600 ₽ <span class="old"></span>
                                    <div class="action"></div>
                                </div>
                                <div class="row">
                                    <div class="buy">
                                        <a class="ga btn btn-default js_add2basket"
                                           data-brand="ASUS" data-category="Материнские платы"
                                           data-articul="1140441"
                                           data-name="Материнская плата Asus PRIME B365M-K Soc-1151v2 mATX"
                                           data-id="413137">
                                            КУПИТЬ
                                        </a>
                                    </div>
                                    <div class="services">
                                        <a class="btn btn-service js_add2compare" data-id="413136">
                                            <span class="glyphicon icon-product-add-comparison"></span>
                                        </a>
                                        <a class="btn btn-service js_heart js_add2wishlist"
                                           data-id="413137">
										<span
                                                class="glyphicon glyphicon-heart-empty"></span>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="product"
                                data-productid="411829"
                                data-parentproductid="411828">
                                <a href="/catalog/product/hotpoint-ariston-pcn640tanghrha-1139059/"
                                   class="pic">
                                    <img class="img-responsive"
                                         src="https://img.positronica.ru/items/1139059_v01_m.jpg"
                                         alt="Газовая варочная поверхность Hotpoint-Ariston PCN 640T(AN) GH R /HA антрацит (154761)"
                                         title="Газовая варочная поверхность Hotpoint-Ariston PCN 640T(AN) GH R /HA антрацит (154761)">
                                </a>
                                <div class="item_rating">
                                    <div class="rating-container rating-xs rating-animate stars-styled">
                                        <div class="rating"><span class="empty-stars"><span class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span></span><span
                                                    style="width: 0%!important;" class="filled-stars"><span
                                                        class="star"><i
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
                                <div class="name"><span><a class="ga_detail"
                                                           data-brand="HOTPOINT-ARISTON"
                                                           data-category="Варочные поверхности газовые"
                                                           data-articul="1139059"
                                                           data-name="Газовая варочная поверхность Hotpoint-Ariston PCN 640T(AN) GH R /HA антрацит (154761)"
                                                           data-price="16380"

                                                           href="/catalog/product/hotpoint-ariston-pcn640tanghrha-1139059/">Газовая варочная поверхность Hotpoint-Ariston PCN 640T(AN) GH R /HA антрацит (154761)</a><small></small></span>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6 text-left"><span
                                                class="glyphicon glyphicon-ok"></span>
                                        <span
                                                class="status">На складе</span></div>
                                    <div class="col-xs-6 article">Артикул: 1139059</div>
                                </div>
                                <div class="price">
                                    <div class="action"></div>
                                    16 380 ₽ <span class="old"></span>
                                    <div class="action"></div>
                                </div>
                                <div class="row">
                                    <div class="buy">
                                        <a class="ga btn btn-default js_add2basket"
                                           data-brand="HOTPOINT-ARISTON"
                                           data-category="Варочные поверхности газовые"
                                           data-articul="1139059"
                                           data-name="Газовая варочная поверхность Hotpoint-Ariston PCN 640T(AN) GH R /HA антрацит (154761)"
                                           data-id="411829">
                                            КУПИТЬ
                                        </a>
                                    </div>
                                    <div class="services">
                                        <a class="btn btn-service js_add2compare" data-id="411828">
                                            <span class="glyphicon icon-product-add-comparison"></span>
                                        </a>
                                        <a class="btn btn-service js_heart js_add2wishlist"
                                           data-id="411829">
										<span
                                                class="glyphicon glyphicon-heart-empty"></span>
                                        </a>
                                    </div>
                                </div>
                            </li>
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
            <a href="/news/">
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
                            <li class="product"
                                data-productid="333251"
                                data-parentproductid="333153">
                                <a href="/catalog/product/patriot-srge950-1004106/" class="pic">
                                    <img class="img-responsive"
                                         src="https://img.positronica.ru/items/1004106_v01_m.jpg"
                                         alt="Генератор Patriot Max Power SRGE 950 (474103119)"
                                         title="Генератор Patriot Max Power SRGE 950 (474103119)">
                                </a>
                                <div class="item_rating">
                                    <div class="rating-container rating-xs rating-animate stars-styled">
                                        <div class="rating"><span class="empty-stars"><span class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span></span><span
                                                    style="width: 0%;" class="filled-stars"><span
                                                        class="star"><i
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
                                <div class="name"><span><a class="ga_detail"
                                                           data-brand="PATRIOT"
                                                           data-category="Генераторы"
                                                           data-articul="1004106"
                                                           data-name="Генератор Patriot Max Power SRGE 950 (474103119)"
                                                           data-price="6590"

                                                           href="/catalog/product/patriot-srge950-1004106/">Генератор Patriot Max Power SRGE 950 (474103119)</a><small> 0.8кВт, 2-х тактный</small></span>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6 text-left"><span
                                                class="glyphicon glyphicon-ok"></span>
                                        <span
                                                class="status">На складе</span></div>
                                    <div class="col-xs-6 article">Артикул: 1004106</div>
                                </div>
                                <div class="price">
                                    <div class="action"></div>
                                    6 590 ₽ <span class="old"></span>
                                    <div class="action"></div>
                                </div>
                                <div class="row">
                                    <div class="buy">
                                        <a class="ga btn btn-default js_add2basket"
                                           data-brand="PATRIOT" data-category="Генераторы"
                                           data-articul="1004106"
                                           data-name="Генератор Patriot Max Power SRGE 950 (474103119)"
                                           data-id="333251">
                                            КУПИТЬ
                                        </a>
                                    </div>
                                    <div class="services">
                                        <a class="btn btn-service js_add2compare" data-id="333153">
                                            <span class="glyphicon icon-product-add-comparison"></span>
                                        </a>
                                        <a class="btn btn-service js_heart js_add2wishlist"
                                           data-id="333251">
										<span
                                                class="glyphicon glyphicon-heart-empty"></span>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="product"
                                data-productid="159765"
                                data-parentproductid="100910">
                                <a href="/catalog/product/accord-p-25b-792456/" class="pic">
                                    <img class="img-responsive"
                                         src="https://img.positronica.ru/items/792456_v01_m.jpg"
                                         alt="Корпус ATX Accord P-25B черный (ACC-P25B)"
                                         title="Корпус ATX Accord P-25B черный (ACC-P25B)">
                                </a>
                                <div class="item_rating">
                                    <div class="rating-container rating-xs rating-animate stars-styled">
                                        <div class="rating"><span class="empty-stars"><span class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span></span><span
                                                    style="width: 80%;" class="filled-stars"><span
                                                        class="star"><i
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
                                <div class="name"><span><a class="ga_detail"
                                                           data-brand="ACCORD"
                                                           data-category="Корпуса"
                                                           data-articul="792456"
                                                           data-name="Корпус ATX Accord P-25B черный (ACC-P25B)"
                                                           data-price="1420"

                                                           href="/catalog/product/accord-p-25b-792456/">Корпус ATX Accord P-25B черный (ACC-P25B)</a><small> Midi-Tower, ATX, w/o PSU, черный</small></span>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6 text-left"><span
                                                class="glyphicon glyphicon-ok"></span>
                                        <span
                                                class="status">На складе</span></div>
                                    <div class="col-xs-6 article">Артикул: 792456</div>
                                </div>
                                <div class="price">
                                    <div class="action"></div>
                                    1 420 ₽ <span class="old"></span>
                                    <div class="action"></div>
                                </div>
                                <div class="row">
                                    <div class="buy">
                                        <a class="ga btn btn-default js_add2basket"
                                           data-brand="ACCORD" data-category="Корпуса"
                                           data-articul="792456"
                                           data-name="Корпус ATX Accord P-25B черный (ACC-P25B)"
                                           data-id="159765">
                                            КУПИТЬ
                                        </a>
                                    </div>
                                    <div class="services">
                                        <a class="btn btn-service js_add2compare" data-id="100910">
                                            <span class="glyphicon icon-product-add-comparison"></span>
                                        </a>
                                        <a class="btn btn-service js_heart js_add2wishlist"
                                           data-id="159765">
										<span
                                                class="glyphicon glyphicon-heart-empty"></span>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="product"
                                data-productid="249214"
                                data-parentproductid="244730">
                                <a href="/catalog/product/aandd-ua-888em-350587/" class="pic">
                                    <img class="img-responsive"
                                         src="https://img.positronica.ru/items/350587_v01_m.jpg"
                                         alt="Тонометр автоматический A&D UA-888 E M (I01000)"
                                         title="Тонометр автоматический A&D UA-888 E M (I01000)">
                                </a>
                                <div class="item_rating">
                                    <div class="rating-container rating-xs rating-animate stars-styled">
                                        <div class="rating"><span class="empty-stars"><span class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span></span><span
                                                    style="width: 0%;" class="filled-stars"><span
                                                        class="star"><i
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
                                <div class="name"><span><a class="ga_detail"
                                                           data-brand="A&D"
                                                           data-category="Тонометры"
                                                           data-articul="350587"
                                                           data-name="Тонометр автоматический A&D UA-888 E M (I01000)"
                                                           data-price="1670"

                                                           href="/catalog/product/aandd-ua-888em-350587/">Тонометр автоматический A&D UA-888 E M (I01000)</a><small> на предплечье, 22-32см, автоматическая, 40-200уд/мин, +/- 5%, AA</small></span>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6 text-left"><span
                                                class="glyphicon glyphicon-ok"></span>
                                        <span
                                                class="status">На складе</span></div>
                                    <div class="col-xs-6 article">Артикул: 350587</div>
                                </div>
                                <div class="price">
                                    <div class="action"></div>
                                    1 670 ₽ <span class="old"></span>
                                    <div class="action"></div>
                                </div>
                                <div class="row">
                                    <div class="buy">
                                        <a class="ga btn btn-default js_add2basket"
                                           data-brand="A&D" data-category="Тонометры"
                                           data-articul="350587"
                                           data-name="Тонометр автоматический A&D UA-888 E M (I01000)"
                                           data-id="249214">
                                            КУПИТЬ
                                        </a>
                                    </div>
                                    <div class="services">
                                        <a class="btn btn-service js_add2compare" data-id="244730">
                                            <span class="glyphicon icon-product-add-comparison"></span>
                                        </a>
                                        <a class="btn btn-service js_heart js_add2wishlist"
                                           data-id="249214">
										<span
                                                class="glyphicon glyphicon-heart-empty"></span>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="product"
                                data-productid="286804"
                                data-parentproductid="284195">
                                <a href="/catalog/product/seagate-st500lm030-396888/" class="pic">
                                    <img class="img-responsive"
                                         src="https://img.positronica.ru/items/396888_v01_m.jpg"
                                         alt="Жесткий диск 500Gb Seagate Barracuda ST500LM030 SATA-III"
                                         title="Жесткий диск 500Gb Seagate Barracuda ST500LM030 SATA-III">
                                </a>
                                <div class="item_rating">
                                    <div class="rating-container rating-xs rating-animate stars-styled">
                                        <div class="rating"><span class="empty-stars"><span class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span></span><span
                                                    style="width: 0%;" class="filled-stars"><span
                                                        class="star"><i
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
                                <div class="name"><span><a class="ga_detail"
                                                           data-brand="SEAGATE"
                                                           data-category="Жесткие диски"
                                                           data-articul="396888"
                                                           data-name="Жесткий диск 500Gb Seagate Barracuda ST500LM030 SATA-III"
                                                           data-price="2860"

                                                           href="/catalog/product/seagate-st500lm030-396888/">Жесткий диск 500Gb Seagate Barracuda ST500LM030 SATA-III</a><small> HDD, 2.5&quot;, 500Гб, SATA III, 128Мб, 5400об/мин</small></span>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6 text-left"><span
                                                class="glyphicon glyphicon-ok"></span>
                                        <span
                                                class="status">На складе</span></div>
                                    <div class="col-xs-6 article">Артикул: 396888</div>
                                </div>
                                <div class="price">
                                    <div class="action"></div>
                                    2 860 ₽ <span class="old"></span>
                                    <div class="action"></div>
                                </div>
                                <div class="row">
                                    <div class="buy">
                                        <a class="ga btn btn-default js_add2basket"
                                           data-brand="SEAGATE" data-category="Жесткие диски"
                                           data-articul="396888"
                                           data-name="Жесткий диск 500Gb Seagate Barracuda ST500LM030 SATA-III"
                                           data-id="286804">
                                            КУПИТЬ
                                        </a>
                                    </div>
                                    <div class="services">
                                        <a class="btn btn-service js_add2compare" data-id="284195">
                                            <span class="glyphicon icon-product-add-comparison"></span>
                                        </a>
                                        <a class="btn btn-service js_heart js_add2wishlist"
                                           data-id="286804">
										<span
                                                class="glyphicon glyphicon-heart-empty"></span>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="product"
                                data-productid="165967"
                                data-parentproductid="106904">
                                <a href="/catalog/product/samsung-t32e310ex-312850/" class="pic">
                                    <img class="img-responsive"
                                         src="https://img.positronica.ru/items/312850_v01_m.jpg"
                                         alt="Телевизор LED Samsung 310 T32E310EX"
                                         title="Телевизор LED Samsung 310 T32E310EX">
                                </a>
                                <div class="item_rating">
                                    <div class="rating-container rating-xs rating-animate stars-styled">
                                        <div class="rating"><span class="empty-stars"><span class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span></span><span
                                                    style="width: 70%;" class="filled-stars"><span
                                                        class="star"><i
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
                                <div class="name"><span><a class="ga_detail"
                                                           data-brand="SAMSUNG"
                                                           data-category="Телевизоры"
                                                           data-articul="312850"
                                                           data-name="Телевизор LED Samsung 310 T32E310EX"
                                                           data-price="15490"

                                                           href="/catalog/product/samsung-t32e310ex-312850/">Телевизор LED Samsung 310 T32E310EX</a><small> 31.5&quot; (80.01 см), FULL HD (1080p), DVB-T2, DVB-C, черный</small></span>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6 text-left"><span
                                                class="glyphicon glyphicon-ok"></span>
                                        <span
                                                class="status">На складе</span></div>
                                    <div class="col-xs-6 article">Артикул: 312850</div>
                                </div>
                                <div class="price">
                                    <div class="action"></div>
                                    15 490 ₽ <span class="old"></span>
                                    <div class="action"></div>
                                </div>
                                <div class="row">
                                    <div class="buy">
                                        <a class="ga btn btn-default js_add2basket"
                                           data-brand="SAMSUNG" data-category="Телевизоры"
                                           data-articul="312850"
                                           data-name="Телевизор LED Samsung 310 T32E310EX"
                                           data-id="165967">
                                            КУПИТЬ
                                        </a>
                                    </div>
                                    <div class="services">
                                        <a class="btn btn-service js_add2compare" data-id="106904">
                                            <span class="glyphicon icon-product-add-comparison"></span>
                                        </a>
                                        <a class="btn btn-service js_heart js_add2wishlist"
                                           data-id="165967">
										<span
                                                class="glyphicon glyphicon-heart-empty"></span>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="product"
                                data-productid="197950"
                                data-parentproductid="126964">
                                <a href="/catalog/product/armmedia-lcd-101-660219/" class="pic">
                                    <img class="img-responsive"
                                         src="https://img.positronica.ru/items/660219_v01_m.jpg"
                                         alt="Кронштейн для телевизора Arm Media LCD-101 черный (10005)"
                                         title="Кронштейн для телевизора Arm Media LCD-101 черный (10005)">
                                </a>
                                <div class="item_rating">
                                    <div class="rating-container rating-xs rating-animate stars-styled">
                                        <div class="rating"><span class="empty-stars"><span class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span></span><span
                                                    style="width: 0%;" class="filled-stars"><span
                                                        class="star"><i
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
                                <div class="name"><span><a class="ga_detail"
                                                           data-brand="ARM MEDIA"
                                                           data-category="Кронштейны для телевизоров"
                                                           data-articul="660219"
                                                           data-name="Кронштейн для телевизора Arm Media LCD-101 черный (10005)"
                                                           data-price="300"

                                                           href="/catalog/product/armmedia-lcd-101-660219/">Кронштейн для телевизора Arm Media LCD-101 черный (10005)</a><small> настенный, 10&quot;, 26&quot;, -90/+90°, черный</small></span>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6 text-left"><span
                                                class="glyphicon glyphicon-ok"></span>
                                        <span
                                                class="status">На складе</span></div>
                                    <div class="col-xs-6 article">Артикул: 660219</div>
                                </div>
                                <div class="price">
                                    <div class="action"></div>
                                    300 ₽ <span class="old"></span>
                                    <div class="action"></div>
                                </div>
                                <div class="row">
                                    <div class="buy">
                                        <a class="ga btn btn-default js_add2basket"
                                           data-brand="ARM MEDIA" data-category="Кронштейны для телевизоров"
                                           data-articul="660219"
                                           data-name="Кронштейн для телевизора Arm Media LCD-101 черный (10005)"
                                           data-id="197950">
                                            КУПИТЬ
                                        </a>
                                    </div>
                                    <div class="services">
                                        <a class="btn btn-service js_add2compare" data-id="126964">
                                            <span class="glyphicon icon-product-add-comparison"></span>
                                        </a>
                                        <a class="btn btn-service js_heart js_add2wishlist"
                                           data-id="197950">
										<span
                                                class="glyphicon glyphicon-heart-empty"></span>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="product"
                                data-productid="197813"
                                data-parentproductid="126827">
                                <a href="/catalog/product/kromax-dix-15-382870/" class="pic">
                                    <img class="img-responsive"
                                         src="https://img.positronica.ru/items/382870_v01_m.jpg"
                                         alt="Кронштейн для телевизора Kromax DIX-15 белый (20224)"
                                         title="Кронштейн для телевизора Kromax DIX-15 белый (20224)">
                                </a>
                                <div class="item_rating">
                                    <div class="rating-container rating-xs rating-animate stars-styled">
                                        <div class="rating"><span class="empty-stars"><span class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span></span><span
                                                    style="width: 0%;" class="filled-stars"><span
                                                        class="star"><i
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
                                <div class="name"><span><a class="ga_detail"
                                                           data-brand="KROMAX"
                                                           data-category="Кронштейны для телевизоров"
                                                           data-articul="382870"
                                                           data-name="Кронштейн для телевизора Kromax DIX-15 белый (20224)"
                                                           data-price="760"

                                                           href="/catalog/product/kromax-dix-15-382870/">Кронштейн для телевизора Kromax DIX-15 белый (20224)</a><small> настенный, 15&quot;, 28&quot;, -180/+180°, белый</small></span>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6 text-left"><span
                                                class="glyphicon glyphicon-ok"></span>
                                        <span
                                                class="status">На складе</span></div>
                                    <div class="col-xs-6 article">Артикул: 382870</div>
                                </div>
                                <div class="price">
                                    <div class="action"></div>
                                    760 ₽ <span class="old"></span>
                                    <div class="action"></div>
                                </div>
                                <div class="row">
                                    <div class="buy">
                                        <a class="ga btn btn-default js_add2basket"
                                           data-brand="KROMAX" data-category="Кронштейны для телевизоров"
                                           data-articul="382870"
                                           data-name="Кронштейн для телевизора Kromax DIX-15 белый (20224)"
                                           data-id="197813">
                                            КУПИТЬ
                                        </a>
                                    </div>
                                    <div class="services">
                                        <a class="btn btn-service js_add2compare" data-id="126827">
                                            <span class="glyphicon icon-product-add-comparison"></span>
                                        </a>
                                        <a class="btn btn-service js_heart js_add2wishlist"
                                           data-id="197813">
										<span
                                                class="glyphicon glyphicon-heart-empty"></span>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="product"
                                data-productid="290240"
                                data-parentproductid="290033">
                                <a href="/catalog/product/bbk-32lex-5027t2c-412138/" class="pic">
                                    <img class="img-responsive"
                                         src="https://img.positronica.ru/items/412138_v01_m.jpg"
                                         alt="Телевизор LED BBK 32LEX-5027/T2C"
                                         title="Телевизор LED BBK 32LEX-5027/T2C">
                                </a>
                                <div class="item_rating">
                                    <div class="rating-container rating-xs rating-animate stars-styled">
                                        <div class="rating"><span class="empty-stars"><span class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span></span><span
                                                    style="width: 0%;" class="filled-stars"><span
                                                        class="star"><i
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
                                <div class="name"><span><a class="ga_detail"
                                                           data-brand="BBK"
                                                           data-category="Телевизоры"
                                                           data-articul="412138"
                                                           data-name="Телевизор LED BBK 32LEX-5027/T2C"
                                                           data-price="12520"

                                                           href="/catalog/product/bbk-32lex-5027t2c-412138/">Телевизор LED BBK 32LEX-5027/T2C</a><small> 32&quot; (81.28 см), HD READY (720p), DVB-T, DVB-T2, DVB-C, Smart TV, WiFi, черный</small></span>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6 text-left"><span
                                                class="glyphicon glyphicon-ok"></span>
                                        <span
                                                class="status">На складе</span></div>
                                    <div class="col-xs-6 article">Артикул: 412138</div>
                                </div>
                                <div class="price">
                                    <div class="action"></div>
                                    12 520 ₽ <span class="old"></span>
                                    <div class="action"></div>
                                </div>
                                <div class="row">
                                    <div class="buy">
                                        <a class="ga btn btn-default js_add2basket"
                                           data-brand="BBK" data-category="Телевизоры"
                                           data-articul="412138"
                                           data-name="Телевизор LED BBK 32LEX-5027/T2C"
                                           data-id="290240">
                                            КУПИТЬ
                                        </a>
                                    </div>
                                    <div class="services">
                                        <a class="btn btn-service js_add2compare" data-id="290033">
                                            <span class="glyphicon icon-product-add-comparison"></span>
                                        </a>
                                        <a class="btn btn-service js_heart js_add2wishlist"
                                           data-id="290240">
										<span
                                                class="glyphicon glyphicon-heart-empty"></span>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="product"
                                data-productid="298100"
                                data-parentproductid="297998">
                                <a href="/catalog/product/logitech-mk240-428174/" class="pic">
                                    <img class="img-responsive"
                                         src="https://img.positronica.ru/items/428174_v01_m.jpg"
                                         alt="Комплект клавиатура+мышь Logitech MK240 черный/черный (920-008213)"
                                         title="Комплект клавиатура+мышь Logitech MK240 черный/черный (920-008213)">
                                </a>
                                <div class="item_rating">
                                    <div class="rating-container rating-xs rating-animate stars-styled">
                                        <div class="rating"><span class="empty-stars"><span class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span></span><span
                                                    style="width: 90%;" class="filled-stars"><span
                                                        class="star"><i
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
                                <div class="name"><span><a class="ga_detail"
                                                           data-brand="LOGITECH"
                                                           data-category="Комплекты клавиатура+мышь"
                                                           data-articul="428174"
                                                           data-name="Комплект клавиатура+мышь Logitech MK240 черный/черный (920-008213)"
                                                           data-price="1650"

                                                           href="/catalog/product/logitech-mk240-428174/">Комплект клавиатура+мышь Logitech MK240 черный/черный (920-008213)</a><small> USB, черный/жёлтый</small></span>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6 text-left"><span
                                                class="glyphicon glyphicon-ok"></span>
                                        <span
                                                class="status">На складе</span></div>
                                    <div class="col-xs-6 article">Артикул: 428174</div>
                                </div>
                                <div class="price">
                                    <div class="action"></div>
                                    1 650 ₽ <span class="old"></span>
                                    <div class="action"></div>
                                </div>
                                <div class="row">
                                    <div class="buy">
                                        <a class="ga btn btn-default js_add2basket"
                                           data-brand="LOGITECH" data-category="Комплекты клавиатура+мышь"
                                           data-articul="428174"
                                           data-name="Комплект клавиатура+мышь Logitech MK240 черный/черный (920-008213)"
                                           data-id="298100">
                                            КУПИТЬ
                                        </a>
                                    </div>
                                    <div class="services">
                                        <a class="btn btn-service js_add2compare" data-id="297998">
                                            <span class="glyphicon icon-product-add-comparison"></span>
                                        </a>
                                        <a class="btn btn-service js_heart js_add2wishlist"
                                           data-id="298100">
										<span
                                                class="glyphicon glyphicon-heart-empty"></span>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="product"
                                data-productid="340550"
                                data-parentproductid="340549">
                                <a href="/catalog/product/oklick-ok-330-440403/" class="pic">
                                    <img class="img-responsive"
                                         src="https://img.positronica.ru/items/440403_v01_m.jpg"
                                         alt="Колонки Oklick OK-330 черный (HS-01)"
                                         title="Колонки Oklick OK-330 черный (HS-01)">
                                </a>
                                <div class="item_rating">
                                    <div class="rating-container rating-xs rating-animate stars-styled">
                                        <div class="rating"><span class="empty-stars"><span class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span><span
                                                        class="star"><i
                                                            class="glyphicon glyphicon-star-empty"></i></span></span><span
                                                    style="width: 0%!important;" class="filled-stars"><span
                                                        class="star"><i
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
                                <div class="name"><span><a class="ga_detail"
                                                           data-brand="OKLICK"
                                                           data-category="Колонки для компьютера"
                                                           data-articul="440403"
                                                           data-name="Колонки Oklick OK-330 черный (HS-01)"
                                                           data-price="220"

                                                           href="/catalog/product/oklick-ok-330-440403/">Колонки Oklick OK-330 черный (HS-01)</a><small></small></span>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6 text-left"><span
                                                class="glyphicon glyphicon-ok"></span>
                                        <span
                                                class="status">На складе</span></div>
                                    <div class="col-xs-6 article">Артикул: 440403</div>
                                </div>
                                <div class="price">
                                    <div class="action"></div>
                                    220 ₽ <span class="old"></span>
                                    <div class="action"></div>
                                </div>
                                <div class="row">
                                    <div class="buy">
                                        <a class="ga btn btn-default js_add2basket"
                                           data-brand="OKLICK" data-category="Колонки для компьютера"
                                           data-articul="440403"
                                           data-name="Колонки Oklick OK-330 черный (HS-01)"
                                           data-id="340550">
                                            КУПИТЬ
                                        </a>
                                    </div>
                                    <div class="services">
                                        <a class="btn btn-service js_add2compare" data-id="340549">
                                            <span class="glyphicon icon-product-add-comparison"></span>
                                        </a>
                                        <a class="btn btn-service js_heart js_add2wishlist"
                                           data-id="340550">
										<span
                                                class="glyphicon glyphicon-heart-empty"></span>
                                        </a>
                                    </div>
                                </div>
                            </li>
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
        <div class="container-fluid padding0">
            <div class="panel panel-slider news col-lg-6 ">
                <div class="panel-heading"><a href="/news/"> Новости и Акции</a></div>
                <div class="panel-body">
                    <div class="col-xs-4 col-sm-6 col-md-4">
                        <a href="/news/may-pokupay-ne-zevay/" class="pic">
                            <img src="//opt-860641.ssl.1c-bitrix-cdn.ru/upload/iblock/0d3/0d3be0cf36d033115170a939e28ef1da.jpg?15561811155280"
                                 class="img-responsive" width="90"
                                 alt="Май – покупай, не зевай!"
                                 title="Май – покупай, не зевай!">
                        </a>
                        <div class="date">30.04.2019</div>
                        <a href="/news/may-pokupay-ne-zevay/" class="title">Май – покупай, не зевай!</a>
                        <div class="annonce">Ежемесячная газета с лучшими предложениями сети ПОЗИТРОНИКА.
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-6 col-md-4">
                        <a href="/news/pochuvstvuyte-sebya-fantasticheskim-geroem-/" class="pic">
                            <img src="//opt-860641.ssl.1c-bitrix-cdn.ru/upload/iblock/272/272f154af7ef16247ff7873929a17cfb.jpg?15562885754733"
                                 class="img-responsive" width="90"
                                 alt="Почувствуйте себя фантастическим героем! "
                                 title="Почувствуйте себя фантастическим героем! ">
                        </a>
                        <div class="date">26.04.2019</div>
                        <a href="/news/pochuvstvuyte-sebya-fantasticheskim-geroem-/" class="title">Почувствуйте
                            себя фантастическим героем! </a>
                        <div class="annonce">Чехлы Marvel Edition для Galaxy S10, S10&#43; и S10e.</div>
                    </div>
                    <div class="col-xs-4 col-sm-6 col-md-4">
                        <a href="/news/rubetek-umnyy-podkhod/" class="pic">
                            <img src="//opt-860641.ssl.1c-bitrix-cdn.ru/upload/iblock/001/0013f7807252013399e493767f3d839c.jpg?15560036792530"
                                 class="img-responsive" width="90"
                                 alt="Rubetek: умный подход"
                                 title="Rubetek: умный подход">
                        </a>
                        <div class="date">23.04.2019</div>
                        <a href="/news/rubetek-umnyy-podkhod/" class="title">Rubetek: умный подход</a>
                        <div class="annonce">При покупке IP-камеры Rubetek – умная лампа в подарок.</div>
                    </div>
                </div>
            </div>
            <div class="panel panel-slider reviews col-lg-6 ">
                <div class="panel-heading"><a href="/reviews/">Обзоры</a><span class="badge">6</span></div>
                <div class="panel-body">
                    <div class="col-xs-4 col-sm-6 col-md-4">
                        <a href="/reviews/obzor-elektrosamokata-digma-hf5-5-6/" class="pic">
                            <img src="//opt-860641.ssl.1c-bitrix-cdn.ru/upload/iblock/d7c/d7c307b9f0722422fab14919dfae4121.jpg?15562725395517"
                                 class="img-responsive" width="90"
                                 alt="Обзор электросамоката Digma HF5.5-6"
                                 title="Обзор электросамоката Digma HF5.5-6">
                        </a>
                        <div class="date">26.04.2019</div>
                        <a href="/reviews/obzor-elektrosamokata-digma-hf5-5-6/" class="title">Обзор
                            электросамоката Digma HF5.5-6</a>
                        <div class="annonce">Электросамокат Digma HF5.5-6 – праздник каждый день.</div>
                    </div>
                    <div class="col-xs-4 col-sm-6 col-md-4">
                        <a href="/reviews/obzor-shchetki-dlya-ukhoda-za-telom-beurer-fc-55/" class="pic">
                            <img src="//opt-860641.ssl.1c-bitrix-cdn.ru/upload/iblock/222/222c5081a2b3879eabef1d033db49150.jpg?15560277104499"
                                 class="img-responsive" width="90"
                                 alt="Обзор щетки для ухода за телом Beurer FC 55"
                                 title="Обзор щетки для ухода за телом Beurer FC 55">
                        </a>
                        <div class="date">23.04.2019</div>
                        <a href="/reviews/obzor-shchetki-dlya-ukhoda-za-telom-beurer-fc-55/" class="title">Обзор
                            щетки для ухода за телом Beurer FC 55</a>
                        <div class="annonce">Гладкость кожи и никакого мошенничества!</div>
                    </div>
                    <div class="col-xs-4 col-sm-6 col-md-4">
                        <a href="/reviews/obzor_smartfona_sansung_galaxy-a50/" class="pic">
                            <img src="//opt-860641.ssl.1c-bitrix-cdn.ru/upload/iblock/972/97216accdffb9767234a8703d0983c69.jpg?15549702033955"
                                 class="img-responsive" width="90"
                                 alt="Обзор смартфона Samsung Galaxy A50"
                                 title="Обзор смартфона Samsung Galaxy A50">
                        </a>
                        <div class="date">11.04.2019</div>
                        <a href="/reviews/obzor_smartfona_sansung_galaxy-a50/" class="title">Обзор смартфона
                            Samsung Galaxy A50</a>
                        <div class="annonce">Премиальный дизайн в удивительных цветах!</div>
                    </div>
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