@extends('layouts.app')

@section('title',"Купить Телевизоры   в Казани, цена на Телевизоры  в интернет-магазине Позитроника")
@section('description','Интернет-магазин Позитроника предлагает большой выбор электроники и бытовой техники по выгодным ценам в Казани')

@section('content')
    @include('components.wrap_menu')
    <div class="content">
        <ul class="breadcrumb hidden-xs" itemscope="" itemtype="http://schema.org/BreadcrumbList"><li itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem"><a itemprop="item" href="/"><span itemprop="name">Интернет-магазин</span></a><meta itemprop="position" content="1"></li><li itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem"><a itemprop="item" href="/catalog/"><span itemprop="name">Каталог</span></a><meta itemprop="position" content="2"></li><li class="active">Телевизоры</li></ul>
        <div class="panel panel-row">
            <div class="panel-heading main-head">
                <div class="pull-right visible-xs mobile_icon">
                    <a data-toggle="collapse" data-target=".catalog-filter" class="btn glyphicon glyphicon-img-tasks"></a>
                    <a data-toggle="collapse" data-target=".sorting_settings" class="btn glyphicon glyphicon-img-sort"></a>
                </div>
                <h1 class="section-name">Телевизоры  </h1>
                <div class="sorting_settings collapse">
                    <div class="pull-right">
                        <div class="btn-group per-page">
                            <a class="btn btn-sort dropdown-value">30</a>
                            <a class="btn btn-sort dropdown-toggle" data-toggle="dropdown">
                                <span class="icon-product"></span>
                            </a>
                            <!--noindex-->
                            <ul class="dropdown-menu">
                                <li><a href="/catalog/televizory/?n_count=12&SECTION_CODE=televizory&FILTERS="
                                       class=""
                                       rel="nofollow">12</a></li>
                                <li><a href="/catalog/televizory/?n_count=30&SECTION_CODE=televizory&FILTERS="
                                       class="active"
                                       rel="nofollow">30</a></li>
                                <li><a href="/catalog/televizory/?n_count=60&SECTION_CODE=televizory&FILTERS="
                                       class=""
                                       rel="nofollow">60</a></li>
                                <li><a href="/catalog/televizory/?n_count=90&SECTION_CODE=televizory&FILTERS="
                                       class=""
                                       rel="nofollow">90</a></li>
                            </ul>
                            <!--/noindex-->
                        </div>
                    </div>
                    <!--noindex-->
                    <div class="left-side col-xs-9 col-sm-10 col-md-9">
                        <span class="after-title visible-lg-inline-block">Сортировать по: </span>
                        <a href="/catalog/televizory/?sort_by=rating&sort_order=asc" class="btn btn-sort desc" rel="nofollow">рейтингу                        <span class="icon-product"></span></a>
                        <a href="/catalog/televizory/?sort_by=price" class="btn btn-sort " rel="nofollow">цене                        <span class="icon-product"></span></a>
                        <a href="/catalog/televizory/?sort_by=date_add" class="btn btn-sort " rel="nofollow">новизне                        <span class="icon-product"></span></a>
                        <span class="operate hidden-xs">
                            <a class="btn" href="/personal/wish-list/" rel="nofollow">
                                    <span class="glyphicon glyphicon-heart-empty"></span>
                                    <span class="text visible-lgx-inline">Список желаний</span>
                            </a>
                            <a class="btn" href="/compare/?category=3572" rel="nofollow">
                                    <span class="glyphicon icon-product-add-comparison"></span>
                                    <span class="text visible-lgx-inline">Сравнить <span
                                                class="count" id="compare_count">0</span></span>
                            </a>
                        </span>
                    </div>
                    <!--/noindex-->
                </div>
            </div>

            <div class="panel-body">
                <ul class="productList col-xs-12 content">
                    <li class='col-xs-12 col-sm-6 col-md-4 col-lg-3 col-lgx-2 product'
                        data-productid="166106" data-parentproductid="107043">
                        <a href="/catalog/product/lg-22mt58vf-pz-361225/" class="pic">
                            <div class="flags">
                            </div>
                            <img class="img-responsive"
                                 src="https://img.positronica.ru/items/361225_v01_m.jpg"
                                 alt="Телевизор LED LG 22MT58VF-PZ"
                                 title="Телевизор LED LG 22MT58VF-PZ">
                        </a>
                        <div class="item_rating">
                            <div class="rating-container rating-xs rating-animate stars-styled">
                                <div class="rating"><span class="empty-stars"><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span></span><span  style="width: 90%;"                                         class="filled-stars"><span class="star"><i class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span></span></div>
                            </div>
                        </div>
                        <div class="name"><span><a class="ga_detail" data-brand="LG"
                                                   data-category="Телевизоры"
                                                   data-price="12820"
                                                   data-articul="361225"
                                                   data-name="Телевизор LED LG 22MT58VF-PZ" href="/catalog/product/lg-22mt58vf-pz-361225/">Телевизор LED LG 22MT58VF-PZ</a><span class="dopinfo"><small> 22&quot; (55.88 см), FULL HD (1080p), DVB-T2, DVB-C, DVB-S2, черный</small></span></span>
                        </div>
                        <div class="row">
                            <div class="col-xs-6 text-left"><span class="glyphicon glyphicon-ok"></span> <span
                                        class="status stock">На складе</span></div>
                            <div class="col-xs-6 article">Артикул: 361225</div>
                        </div>
                        <div class="price">
                            <div class="action"></div>12 820 ₽<span class="old"></span>
                            <div class="action"></div>
                        </div>
                        <div class="row">
                            <div class="buy">
                                <a  class="ga btn btn-default js_add2basket" data-brand="LG" data-category="Телевизоры" data-articul="361225" data-name="Телевизор LED LG 22MT58VF-PZ" data-id="166106">КУПИТЬ</a>
                            </div>
                            <div class="services">
                                <a class="btn btn-service js_add2compare" data-id="107043">
                                    <span class="glyphicon icon-product-add-comparison"></span>
                                </a>
                                <a class="btn btn-service js_add2wishlist" data-id="166106">
                                    <span class="glyphicon glyphicon-heart-empty"></span>
                                </a>
                            </div>
                        </div>
                        <div class="margin-border-mb"></div>
                    </li>
                    <li class='col-xs-12 col-sm-6 col-md-4 col-lg-3 col-lgx-2 product'
                        data-productid="307825" data-parentproductid="306929">
                        <a href="/catalog/product/telefunken-tf-led32s52t2s-461959/" class="pic">
                            <div class="flags">
                            </div>
                            <img class="img-responsive"
                                 src="https://img.positronica.ru/items/461959_v01_m.jpg"
                                 alt="Телевизор LED Telefunken TF-LED32S52T2S"
                                 title="Телевизор LED Telefunken TF-LED32S52T2S">
                        </a>
                        <div class="item_rating">
                            <div class="rating-container rating-xs rating-animate stars-styled">
                                <div class="rating"><span class="empty-stars"><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span></span><span  style="width: 90%;"                                         class="filled-stars"><span class="star"><i class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span></span></div>
                            </div>
                        </div>
                        <div class="name"><span><a class="ga_detail" data-brand="TELEFUNKEN"
                                                   data-category="Телевизоры"
                                                   data-price="12270"
                                                   data-articul="461959"
                                                   data-name="Телевизор LED Telefunken TF-LED32S52T2S" href="/catalog/product/telefunken-tf-led32s52t2s-461959/">Телевизор LED Telefunken TF-LED32S52T2S</a><span class="dopinfo"><small> 32&quot; (81.28 см), HD READY (720p), DVB-T, DVB-T2, DVB-C, Smart TV, WiFi, черный</small></span></span>
                        </div>
                        <div class="row">
                            <div class="col-xs-6 text-left"><span class="glyphicon glyphicon-ok"></span> <span
                                        class="status stock">На складе</span></div>
                            <div class="col-xs-6 article">Артикул: 461959</div>
                        </div>
                        <div class="price">
                            <div class="action"></div>12 270 ₽<span class="old"></span>
                            <div class="action"></div>
                        </div>
                        <div class="row">
                            <div class="buy">
                                <a  class="ga btn btn-default js_add2basket" data-brand="TELEFUNKEN" data-category="Телевизоры" data-articul="461959" data-name="Телевизор LED Telefunken TF-LED32S52T2S" data-id="307825">КУПИТЬ</a>
                            </div>
                            <div class="services">
                                <a class="btn btn-service js_add2compare" data-id="306929">
                                    <span class="glyphicon icon-product-add-comparison"></span>
                                </a>
                                <a class="btn btn-service js_add2wishlist" data-id="307825">
                                    <span class="glyphicon glyphicon-heart-empty"></span>
                                </a>
                            </div>
                        </div>
                        <div class="margin-border-mb"></div>
                    </li>
                    <li class='col-xs-12 col-sm-6 col-md-4 col-lg-3 col-lgx-2 product'
                        data-productid="166136" data-parentproductid="107073">
                        <a href="/catalog/product/sony-kdl32wd603br-364021/" class="pic">
                            <div class="flags">
                            </div>
                            <img class="img-responsive"
                                 src="https://img.positronica.ru/items/364021_v01_m.jpg"
                                 alt="Телевизор LED Sony BRAVIA KDL32WD603BR"
                                 title="Телевизор LED Sony BRAVIA KDL32WD603BR">
                        </a>
                        <div class="item_rating">
                            <div class="rating-container rating-xs rating-animate stars-styled">
                                <div class="rating"><span class="empty-stars"><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span></span><span  style="width: 80%;"                                         class="filled-stars"><span class="star"><i class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span></span></div>
                            </div>
                        </div>
                        <div class="name"><span><a class="ga_detail" data-brand="SONY"
                                                   data-category="Телевизоры"
                                                   data-price="23990"
                                                   data-articul="364021"
                                                   data-name="Телевизор LED Sony BRAVIA KDL32WD603BR" href="/catalog/product/sony-kdl32wd603br-364021/">Телевизор LED Sony BRAVIA KDL32WD603BR</a><span class="dopinfo"><small> 32&quot; (81.28 см), HD READY (720p), DVB-T, DVB-T2, DVB-C, DVB-S, DVB-S2, Smart TV, WiFi, черный/серебристый</small></span></span>
                        </div>
                        <div class="row">
                            <div class="col-xs-6 text-left"><span class="glyphicon glyphicon-ok"></span> <span
                                        class="status stock">На складе</span></div>
                            <div class="col-xs-6 article">Артикул: 364021</div>
                        </div>
                        <div class="price">
                            <div class="action"></div>23 990 ₽<span class="old"></span>
                            <div class="action"></div>
                        </div>
                        <div class="row">
                            <div class="buy">
                                <a  class="ga btn btn-default js_add2basket" data-brand="SONY" data-category="Телевизоры" data-articul="364021" data-name="Телевизор LED Sony BRAVIA KDL32WD603BR" data-id="166136">КУПИТЬ</a>
                            </div>
                            <div class="services">
                                <a class="btn btn-service js_add2compare" data-id="107073">
                                    <span class="glyphicon icon-product-add-comparison"></span>
                                </a>
                                <a class="btn btn-service js_add2wishlist" data-id="166136">
                                    <span class="glyphicon glyphicon-heart-empty"></span>
                                </a>
                            </div>
                        </div>
                        <div class="margin-border-mb"></div>
                    </li>
                    <li class='col-xs-12 col-sm-6 col-md-4 col-lg-3 col-lgx-2 product'
                        data-productid="166139" data-parentproductid="107076">
                        <a href="/catalog/product/sony-kdl48wd653br-364024/" class="pic">
                            <div class="flags">
                            </div>
                            <img class="img-responsive"
                                 src="https://img.positronica.ru/items/364024_v01_m.jpg"
                                 alt="Телевизор LED Sony BRAVIA KDL48WD653BR"
                                 title="Телевизор LED Sony BRAVIA KDL48WD653BR">
                        </a>
                        <div class="item_rating">
                            <div class="rating-container rating-xs rating-animate stars-styled">
                                <div class="rating"><span class="empty-stars"><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span></span><span  style="width: 80%;"                                         class="filled-stars"><span class="star"><i class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span></span></div>
                            </div>
                        </div>
                        <div class="name"><span><a class="ga_detail" data-brand="SONY"
                                                   data-category="Телевизоры"
                                                   data-price="43650"
                                                   data-articul="364024"
                                                   data-name="Телевизор LED Sony BRAVIA KDL48WD653BR" href="/catalog/product/sony-kdl48wd653br-364024/">Телевизор LED Sony BRAVIA KDL48WD653BR</a><span class="dopinfo"><small> 48&quot; (121.92 см), FULL HD (1080p), DVB-T, DVB-T2, DVB-C, WiFi, Smart TV, черный</small></span></span>
                        </div>
                        <div class="row">
                            <div class="col-xs-6 text-left"><span class="glyphicon glyphicon-ok"></span> <span
                                        class="status stock">На складе</span></div>
                            <div class="col-xs-6 article">Артикул: 364024</div>
                        </div>
                        <div class="price">
                            <div class="action"></div>43 650 ₽<span class="old"></span>
                            <div class="action"></div>
                        </div>
                        <div class="row">
                            <div class="buy">
                                <a  class="ga btn btn-default js_add2basket" data-brand="SONY" data-category="Телевизоры" data-articul="364024" data-name="Телевизор LED Sony BRAVIA KDL48WD653BR" data-id="166139">КУПИТЬ</a>
                            </div>
                            <div class="services">
                                <a class="btn btn-service js_add2compare" data-id="107076">
                                    <span class="glyphicon icon-product-add-comparison"></span>
                                </a>
                                <a class="btn btn-service js_add2wishlist" data-id="166139">
                                    <span class="glyphicon glyphicon-heart-empty"></span>
                                </a>
                            </div>
                        </div>
                        <div class="margin-border-mb"></div>
                    </li>
                    <li class='col-xs-12 col-sm-6 col-md-4 col-lg-3 col-lgx-2 product'
                        data-productid="166214" data-parentproductid="107151">
                        <a href="/catalog/product/sony-kdl32wd756br2-376178/" class="pic">
                            <div class="flags">
                            </div>
                            <img class="img-responsive"
                                 src="https://img.positronica.ru/items/376178_v01_m.jpg"
                                 alt="Телевизор LED Sony BRAVIA KDL32WD756BR2"
                                 title="Телевизор LED Sony BRAVIA KDL32WD756BR2">
                        </a>
                        <div class="item_rating">
                            <div class="rating-container rating-xs rating-animate stars-styled">
                                <div class="rating"><span class="empty-stars"><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span></span><span  style="width: 80%;"                                         class="filled-stars"><span class="star"><i class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span></span></div>
                            </div>
                        </div>
                        <div class="name"><span><a class="ga_detail" data-brand="SONY"
                                                   data-category="Телевизоры"
                                                   data-price="32130"
                                                   data-articul="376178"
                                                   data-name="Телевизор LED Sony BRAVIA KDL32WD756BR2" href="/catalog/product/sony-kdl32wd756br2-376178/">Телевизор LED Sony BRAVIA KDL32WD756BR2</a><span class="dopinfo"><small> 32&quot; (81.28 см), FULL HD (1080p), DVB-T, DVB-T2, DVB-C, Smart TV, WiFi, черный/серебристый</small></span></span>
                        </div>
                        <div class="row">
                            <div class="col-xs-6 text-left"><span class="glyphicon glyphicon-ok"></span> <span
                                        class="status stock">На складе</span></div>
                            <div class="col-xs-6 article">Артикул: 376178</div>
                        </div>
                        <div class="price">
                            <div class="action"></div>32 130 ₽<span class="old"></span>
                            <div class="action"></div>
                        </div>
                        <div class="row">
                            <div class="buy">
                                <a  class="ga btn btn-default js_add2basket" data-brand="SONY" data-category="Телевизоры" data-articul="376178" data-name="Телевизор LED Sony BRAVIA KDL32WD756BR2" data-id="166214">КУПИТЬ</a>
                            </div>
                            <div class="services">
                                <a class="btn btn-service js_add2compare" data-id="107151">
                                    <span class="glyphicon icon-product-add-comparison"></span>
                                </a>
                                <a class="btn btn-service js_add2wishlist" data-id="166214">
                                    <span class="glyphicon glyphicon-heart-empty"></span>
                                </a>
                            </div>
                        </div>
                        <div class="margin-border-mb"></div>
                    </li>
                    <li class='col-xs-12 col-sm-6 col-md-4 col-lg-3 col-lgx-2 product'
                        data-productid="166604" data-parentproductid="107541">
                        <a href="/catalog/product/samsung-ue24h4080au-970500/" class="pic">
                            <div class="flags">
                            </div>
                            <img class="img-responsive"
                                 src="https://img.positronica.ru/items/970500_v01_m.jpg"
                                 alt="Телевизор LED Samsung 4 UE24H4080AU"
                                 title="Телевизор LED Samsung 4 UE24H4080AU">
                        </a>
                        <div class="item_rating">
                            <div class="rating-container rating-xs rating-animate stars-styled">
                                <div class="rating"><span class="empty-stars"><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span></span><span  style="width: 80%;"                                         class="filled-stars"><span class="star"><i class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span></span></div>
                            </div>
                        </div>
                        <div class="name"><span><a class="ga_detail" data-brand="SAMSUNG"
                                                   data-category="Телевизоры"
                                                   data-price="13510"
                                                   data-articul="970500"
                                                   data-name="Телевизор LED Samsung 4 UE24H4080AU" href="/catalog/product/samsung-ue24h4080au-970500/">Телевизор LED Samsung 4 UE24H4080AU</a><span class="dopinfo"><small> 24&quot; (60.96 см), HD READY (720p), DVB-T2, DVB-C, DVB-S2, белый</small></span></span>
                        </div>
                        <div class="row">
                            <div class="col-xs-6 text-left"><span class="glyphicon glyphicon-ok"></span> <span
                                        class="status stock">На складе</span></div>
                            <div class="col-xs-6 article">Артикул: 970500</div>
                        </div>
                        <div class="price">
                            <div class="action"></div>13 510 ₽<span class="old"></span>
                            <div class="action"></div>
                        </div>
                        <div class="row">
                            <div class="buy">
                                <a  class="ga btn btn-default js_add2basket" data-brand="SAMSUNG" data-category="Телевизоры" data-articul="970500" data-name="Телевизор LED Samsung 4 UE24H4080AU" data-id="166604">КУПИТЬ</a>
                            </div>
                            <div class="services">
                                <a class="btn btn-service js_add2compare" data-id="107541">
                                    <span class="glyphicon icon-product-add-comparison"></span>
                                </a>
                                <a class="btn btn-service js_add2wishlist" data-id="166604">
                                    <span class="glyphicon glyphicon-heart-empty"></span>
                                </a>
                            </div>
                        </div>
                        <div class="margin-border-mb"></div>
                    </li>
                    <li class='col-xs-12 col-sm-6 col-md-4 col-lg-3 col-lgx-2 product'
                        data-productid="304380" data-parentproductid="304301">
                        <a href="/catalog/product/telefunken-tf-led32s39t2s-434110/" class="pic">
                            <div class="flags">
                            </div>
                            <img class="img-responsive"
                                 src="https://img.positronica.ru/items/434110_v01_m.jpg"
                                 alt="Телевизор LED Telefunken TF-LED32S39T2S"
                                 title="Телевизор LED Telefunken TF-LED32S39T2S">
                        </a>
                        <div class="item_rating">
                            <div class="rating-container rating-xs rating-animate stars-styled">
                                <div class="rating"><span class="empty-stars"><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span></span><span  style="width: 80%;"                                         class="filled-stars"><span class="star"><i class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span></span></div>
                            </div>
                        </div>
                        <div class="name"><span><a class="ga_detail" data-brand="TELEFUNKEN"
                                                   data-category="Телевизоры"
                                                   data-price="12590"
                                                   data-articul="434110"
                                                   data-name="Телевизор LED Telefunken TF-LED32S39T2S" href="/catalog/product/telefunken-tf-led32s39t2s-434110/">Телевизор LED Telefunken TF-LED32S39T2S</a><span class="dopinfo"><small> 32&quot; (81.28 см), HD READY (720p), DVB-T, DVB-T2, DVB-C, Smart TV, WiFi, черный</small></span></span>
                        </div>
                        <div class="row">
                            <div class="col-xs-6 text-left"><span class="glyphicon glyphicon-ok"></span> <span
                                        class="status stock">На складе</span></div>
                            <div class="col-xs-6 article">Артикул: 434110</div>
                        </div>
                        <div class="price">
                            <div class="action"></div>12 590 ₽<span class="old"></span>
                            <div class="action"></div>
                        </div>
                        <div class="row">
                            <div class="buy">
                                <a  class="ga btn btn-default js_add2basket" data-brand="TELEFUNKEN" data-category="Телевизоры" data-articul="434110" data-name="Телевизор LED Telefunken TF-LED32S39T2S" data-id="304380">КУПИТЬ</a>
                            </div>
                            <div class="services">
                                <a class="btn btn-service js_add2compare" data-id="304301">
                                    <span class="glyphicon icon-product-add-comparison"></span>
                                </a>
                                <a class="btn btn-service js_add2wishlist" data-id="304380">
                                    <span class="glyphicon glyphicon-heart-empty"></span>
                                </a>
                            </div>
                        </div>
                        <div class="margin-border-mb"></div>
                    </li>
                    <li class='col-xs-12 col-sm-6 col-md-4 col-lg-3 col-lgx-2 product'
                        data-productid="311352" data-parentproductid="311317">
                        <a href="/catalog/product/lg-28mt49s-pz-473492/" class="pic">
                            <div class="flags">
                            </div>
                            <img class="img-responsive"
                                 src="https://img.positronica.ru/items/473492_v01_m.jpg"
                                 alt="Телевизор LED LG 28MT49S-PZ"
                                 title="Телевизор LED LG 28MT49S-PZ">
                        </a>
                        <div class="item_rating">
                            <div class="rating-container rating-xs rating-animate stars-styled">
                                <div class="rating"><span class="empty-stars"><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span></span><span  style="width: 80%;"                                         class="filled-stars"><span class="star"><i class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span></span></div>
                            </div>
                        </div>
                        <div class="name"><span><a class="ga_detail" data-brand="LG"
                                                   data-category="Телевизоры"
                                                   data-price="18580"
                                                   data-articul="473492"
                                                   data-name="Телевизор LED LG 28MT49S-PZ" href="/catalog/product/lg-28mt49s-pz-473492/">Телевизор LED LG 28MT49S-PZ</a><span class="dopinfo"><small> 28&quot; (71.1 см), HD READY (720p), DVB-T2, DVB-C, DVB-S2, Smart TV, WiFi, черный</small></span></span>
                        </div>
                        <div class="row">
                            <div class="col-xs-6 text-left"><span class="glyphicon glyphicon-ok"></span> <span
                                        class="status stock">На складе</span></div>
                            <div class="col-xs-6 article">Артикул: 473492</div>
                        </div>
                        <div class="price">
                            <div class="action"></div>18 580 ₽<span class="old"></span>
                            <div class="action"></div>
                        </div>
                        <div class="row">
                            <div class="buy">
                                <a  class="ga btn btn-default js_add2basket" data-brand="LG" data-category="Телевизоры" data-articul="473492" data-name="Телевизор LED LG 28MT49S-PZ" data-id="311352">КУПИТЬ</a>
                            </div>
                            <div class="services">
                                <a class="btn btn-service js_add2compare" data-id="311317">
                                    <span class="glyphicon icon-product-add-comparison"></span>
                                </a>
                                <a class="btn btn-service js_add2wishlist" data-id="311352">
                                    <span class="glyphicon glyphicon-heart-empty"></span>
                                </a>
                            </div>
                        </div>
                        <div class="margin-border-mb"></div>
                    </li>
                    <li class='col-xs-12 col-sm-6 col-md-4 col-lg-3 col-lgx-2 product'
                        data-productid="165967" data-parentproductid="106904">
                        <a href="/catalog/product/samsung-t32e310ex-312850/" class="pic">
                            <div class="flags">
                                <div class="hits">ЛУЧШАЯ ЦЕНА</div>
                                <br>
                                <div class="lider">ХИТ ПРОДАЖ</div>
                                <br>
                            </div>
                            <img class="img-responsive"
                                 src="https://img.positronica.ru/items/312850_v01_m.jpg"
                                 alt="Телевизор LED Samsung 310 T32E310EX"
                                 title="Телевизор LED Samsung 310 T32E310EX">
                        </a>
                        <div class="item_rating">
                            <div class="rating-container rating-xs rating-animate stars-styled">
                                <div class="rating"><span class="empty-stars"><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span></span><span  style="width: 70%;"                                         class="filled-stars"><span class="star"><i class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span></span></div>
                            </div>
                        </div>
                        <div class="name"><span><a class="ga_detail" data-brand="SAMSUNG"
                                                   data-category="Телевизоры"
                                                   data-price="15490"
                                                   data-articul="312850"
                                                   data-name="Телевизор LED Samsung 310 T32E310EX" href="/catalog/product/samsung-t32e310ex-312850/">Телевизор LED Samsung 310 T32E310EX</a><span class="dopinfo"><small> 31.5&quot; (80.01 см), FULL HD (1080p), DVB-T2, DVB-C, черный</small></span></span>
                        </div>
                        <div class="row">
                            <div class="col-xs-6 text-left"><span class="glyphicon glyphicon-ok"></span> <span
                                        class="status stock">На складе</span></div>
                            <div class="col-xs-6 article">Артикул: 312850</div>
                        </div>
                        <div class="price">
                            <div class="action"></div>15 490 ₽<span class="old"></span>
                            <div class="action"></div>
                        </div>
                        <div class="row">
                            <div class="buy">
                                <a  class="ga btn btn-default js_add2basket" data-brand="SAMSUNG" data-category="Телевизоры" data-articul="312850" data-name="Телевизор LED Samsung 310 T32E310EX" data-id="165967">КУПИТЬ</a>
                            </div>
                            <div class="services">
                                <a class="btn btn-service js_add2compare" data-id="106904">
                                    <span class="glyphicon icon-product-add-comparison"></span>
                                </a>
                                <a class="btn btn-service js_add2wishlist" data-id="165967">
                                    <span class="glyphicon glyphicon-heart-empty"></span>
                                </a>
                            </div>
                        </div>
                        <div class="margin-border-mb"></div>
                    </li>
                    <li class='col-xs-12 col-sm-6 col-md-4 col-lg-3 col-lgx-2 product'
                        data-productid="166138" data-parentproductid="107075">
                        <a href="/catalog/product/sony-kdl40wd653br-364023/" class="pic">
                            <div class="flags">
                            </div>
                            <img class="img-responsive"
                                 src="https://img.positronica.ru/items/364023_v01_m.jpg"
                                 alt="Телевизор LED Sony BRAVIA KDL40WD653BR"
                                 title="Телевизор LED Sony BRAVIA KDL40WD653BR">
                        </a>
                        <div class="item_rating">
                            <div class="rating-container rating-xs rating-animate stars-styled">
                                <div class="rating"><span class="empty-stars"><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span></span><span  style="width: 70%;"                                         class="filled-stars"><span class="star"><i class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span></span></div>
                            </div>
                        </div>
                        <div class="name"><span><a class="ga_detail" data-brand="SONY"
                                                   data-category="Телевизоры"
                                                   data-price="34620"
                                                   data-articul="364023"
                                                   data-name="Телевизор LED Sony BRAVIA KDL40WD653BR" href="/catalog/product/sony-kdl40wd653br-364023/">Телевизор LED Sony BRAVIA KDL40WD653BR</a><span class="dopinfo"><small> 40&quot; (101.60 см), FULL HD (1080p), DVB-T, DVB-T2, DVB-C, Smart TV, WiFi, черный/серебристый</small></span></span>
                        </div>
                        <div class="row">
                            <div class="col-xs-6 text-left"><span class="glyphicon glyphicon-ok"></span> <span
                                        class="status stock">На складе</span></div>
                            <div class="col-xs-6 article">Артикул: 364023</div>
                        </div>
                        <div class="price">
                            <div class="action"></div>34 620 ₽<span class="old"></span>
                            <div class="action"></div>
                        </div>
                        <div class="row">
                            <div class="buy">
                                <a  class="ga btn btn-default js_add2basket" data-brand="SONY" data-category="Телевизоры" data-articul="364023" data-name="Телевизор LED Sony BRAVIA KDL40WD653BR" data-id="166138">КУПИТЬ</a>
                            </div>
                            <div class="services">
                                <a class="btn btn-service js_add2compare" data-id="107075">
                                    <span class="glyphicon icon-product-add-comparison"></span>
                                </a>
                                <a class="btn btn-service js_add2wishlist" data-id="166138">
                                    <span class="glyphicon glyphicon-heart-empty"></span>
                                </a>
                            </div>
                        </div>
                        <div class="margin-border-mb"></div>
                    </li>
                    <li class='col-xs-12 col-sm-6 col-md-4 col-lg-3 col-lgx-2 product'
                        data-productid="293075" data-parentproductid="293069">
                        <a href="/catalog/product/bbk-32lex-5037t2c-412139/" class="pic">
                            <div class="flags">
                            </div>
                            <img class="img-responsive"
                                 src="https://img.positronica.ru/items/412139_v01_m.jpg"
                                 alt="Телевизор LED BBK 32LEX-5037/T2C"
                                 title="Телевизор LED BBK 32LEX-5037/T2C">
                        </a>
                        <div class="item_rating">
                            <div class="rating-container rating-xs rating-animate stars-styled">
                                <div class="rating"><span class="empty-stars"><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span></span><span  style="width: 70%;"                                         class="filled-stars"><span class="star"><i class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span></span></div>
                            </div>
                        </div>
                        <div class="name"><span><a class="ga_detail" data-brand="BBK"
                                                   data-category="Телевизоры"
                                                   data-price="12150"
                                                   data-articul="412139"
                                                   data-name="Телевизор LED BBK 32LEX-5037/T2C" href="/catalog/product/bbk-32lex-5037t2c-412139/">Телевизор LED BBK 32LEX-5037/T2C</a><span class="dopinfo"><small> 32&quot; (81.28 см), HD READY (720p), DVB-T, DVB-T2, DVB-C, Smart TV, WiFi, белый</small></span></span>
                        </div>
                        <div class="row">
                            <div class="col-xs-6 text-left"><span class="glyphicon glyphicon-ok"></span> <span
                                        class="status stock">На складе</span></div>
                            <div class="col-xs-6 article">Артикул: 412139</div>
                        </div>
                        <div class="price">
                            <div class="action"></div>12 150 ₽<span class="old"></span>
                            <div class="action"></div>
                        </div>
                        <div class="row">
                            <div class="buy">
                                <a  class="ga btn btn-default js_add2basket" data-brand="BBK" data-category="Телевизоры" data-articul="412139" data-name="Телевизор LED BBK 32LEX-5037/T2C" data-id="293075">КУПИТЬ</a>
                            </div>
                            <div class="services">
                                <a class="btn btn-service js_add2compare" data-id="293069">
                                    <span class="glyphicon icon-product-add-comparison"></span>
                                </a>
                                <a class="btn btn-service js_add2wishlist" data-id="293075">
                                    <span class="glyphicon glyphicon-heart-empty"></span>
                                </a>
                            </div>
                        </div>
                        <div class="margin-border-mb"></div>
                    </li>
                    <li class='col-xs-12 col-sm-6 col-md-4 col-lg-3 col-lgx-2 product'
                        data-productid="286484" data-parentproductid="283890">
                        <a href="/catalog/product/bbk-32lem-1027ts2c-406732/" class="pic">
                            <div class="flags">
                            </div>
                            <img class="img-responsive"
                                 src="https://img.positronica.ru/items/406732_v01_m.jpg"
                                 alt="Телевизор LED BBK 32LEM-1027/TS2C"
                                 title="Телевизор LED BBK 32LEM-1027/TS2C">
                        </a>
                        <div class="item_rating">
                            <div class="rating-container rating-xs rating-animate stars-styled">
                                <div class="rating"><span class="empty-stars"><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span></span><span  style="width: 0%;"                                         class="filled-stars"><span class="star"><i class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span></span></div>
                            </div>
                        </div>
                        <div class="name"><span><a class="ga_detail" data-brand="BBK"
                                                   data-category="Телевизоры"
                                                   data-price="10430"
                                                   data-articul="406732"
                                                   data-name="Телевизор LED BBK 32LEM-1027/TS2C" href="/catalog/product/bbk-32lem-1027ts2c-406732/">Телевизор LED BBK 32LEM-1027/TS2C</a><span class="dopinfo"><small> 32&quot; (81.28 см), HD READY (720p), DVB-T, DVB-T2, DVB-C, DVB-S2, черный</small></span></span>
                        </div>
                        <div class="row">
                            <div class="col-xs-6 text-left"><span class="glyphicon glyphicon-ok"></span> <span
                                        class="status stock">На складе</span></div>
                            <div class="col-xs-6 article">Артикул: 406732</div>
                        </div>
                        <div class="price">
                            <div class="action"></div>10 430 ₽<span class="old"></span>
                            <div class="action"></div>
                        </div>
                        <div class="row">
                            <div class="buy">
                                <a  class="ga btn btn-default js_add2basket" data-brand="BBK" data-category="Телевизоры" data-articul="406732" data-name="Телевизор LED BBK 32LEM-1027/TS2C" data-id="286484">КУПИТЬ</a>
                            </div>
                            <div class="services">
                                <a class="btn btn-service js_add2compare" data-id="283890">
                                    <span class="glyphicon icon-product-add-comparison"></span>
                                </a>
                                <a class="btn btn-service js_add2wishlist" data-id="286484">
                                    <span class="glyphicon glyphicon-heart-empty"></span>
                                </a>
                            </div>
                        </div>
                        <div class="margin-border-mb"></div>
                    </li>
                    <li class='col-xs-12 col-sm-6 col-md-4 col-lg-3 col-lgx-2 product'
                        data-productid="286491" data-parentproductid="283897">
                        <a href="/catalog/product/bbk-24lem-1027t2c-408494/" class="pic">
                            <div class="flags">
                            </div>
                            <img class="img-responsive"
                                 src="https://img.positronica.ru/items/408494_v01_m.jpg"
                                 alt="Телевизор LED BBK 24LEM-1027/T2C"
                                 title="Телевизор LED BBK 24LEM-1027/T2C">
                        </a>
                        <div class="item_rating">
                            <div class="rating-container rating-xs rating-animate stars-styled">
                                <div class="rating"><span class="empty-stars"><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span></span><span  style="width: 0%;"                                         class="filled-stars"><span class="star"><i class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span></span></div>
                            </div>
                        </div>
                        <div class="name"><span><a class="ga_detail" data-brand="BBK"
                                                   data-category="Телевизоры"
                                                   data-price="8140"
                                                   data-articul="408494"
                                                   data-name="Телевизор LED BBK 24LEM-1027/T2C" href="/catalog/product/bbk-24lem-1027t2c-408494/">Телевизор LED BBK 24LEM-1027/T2C</a><span class="dopinfo"><small> 24&quot; (60.96 см), HD READY (720p), DVB-T, DVB-T2, DVB-C, черный</small></span></span>
                        </div>
                        <div class="row">
                            <div class="col-xs-6 text-left"><span class="glyphicon glyphicon-ok"></span> <span
                                        class="status stock">На складе</span></div>
                            <div class="col-xs-6 article">Артикул: 408494</div>
                        </div>
                        <div class="price">
                            <div class="action"></div>8 140 ₽<span class="old"></span>
                            <div class="action"></div>
                        </div>
                        <div class="row">
                            <div class="buy">
                                <a  class="ga btn btn-default js_add2basket" data-brand="BBK" data-category="Телевизоры" data-articul="408494" data-name="Телевизор LED BBK 24LEM-1027/T2C" data-id="286491">КУПИТЬ</a>
                            </div>
                            <div class="services">
                                <a class="btn btn-service js_add2compare" data-id="283897">
                                    <span class="glyphicon icon-product-add-comparison"></span>
                                </a>
                                <a class="btn btn-service js_add2wishlist" data-id="286491">
                                    <span class="glyphicon glyphicon-heart-empty"></span>
                                </a>
                            </div>
                        </div>
                        <div class="margin-border-mb"></div>
                    </li>
                    <li class='col-xs-12 col-sm-6 col-md-4 col-lg-3 col-lgx-2 product'
                        data-productid="286492" data-parentproductid="283898">
                        <a href="/catalog/product/bbk-24lem-1037t2c-408495/" class="pic">
                            <div class="flags">
                            </div>
                            <img class="img-responsive"
                                 src="https://img.positronica.ru/items/408495_v01_m.jpg"
                                 alt="Телевизор LED BBK 24LEM-1037/T2C"
                                 title="Телевизор LED BBK 24LEM-1037/T2C">
                        </a>
                        <div class="item_rating">
                            <div class="rating-container rating-xs rating-animate stars-styled">
                                <div class="rating"><span class="empty-stars"><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span></span><span  style="width: 0%;"                                         class="filled-stars"><span class="star"><i class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span></span></div>
                            </div>
                        </div>
                        <div class="name"><span><a class="ga_detail" data-brand="BBK"
                                                   data-category="Телевизоры"
                                                   data-price="8250"
                                                   data-articul="408495"
                                                   data-name="Телевизор LED BBK 24LEM-1037/T2C" href="/catalog/product/bbk-24lem-1037t2c-408495/">Телевизор LED BBK 24LEM-1037/T2C</a><span class="dopinfo"><small> 24&quot; (60.96 см), HD READY (720p), DVB-T, DVB-T2, DVB-C, белый</small></span></span>
                        </div>
                        <div class="row">
                            <div class="col-xs-6 text-left"><span class="glyphicon glyphicon-ok"></span> <span
                                        class="status stock">На складе</span></div>
                            <div class="col-xs-6 article">Артикул: 408495</div>
                        </div>
                        <div class="price">
                            <div class="action"></div>8 250 ₽<span class="old"></span>
                            <div class="action"></div>
                        </div>
                        <div class="row">
                            <div class="buy">
                                <a  class="ga btn btn-default js_add2basket" data-brand="BBK" data-category="Телевизоры" data-articul="408495" data-name="Телевизор LED BBK 24LEM-1037/T2C" data-id="286492">КУПИТЬ</a>
                            </div>
                            <div class="services">
                                <a class="btn btn-service js_add2compare" data-id="283898">
                                    <span class="glyphicon icon-product-add-comparison"></span>
                                </a>
                                <a class="btn btn-service js_add2wishlist" data-id="286492">
                                    <span class="glyphicon glyphicon-heart-empty"></span>
                                </a>
                            </div>
                        </div>
                        <div class="margin-border-mb"></div>
                    </li>
                    <li class='col-xs-12 col-sm-6 col-md-4 col-lg-3 col-lgx-2 product'
                        data-productid="290240" data-parentproductid="290033">
                        <a href="/catalog/product/bbk-32lex-5027t2c-412138/" class="pic">
                            <div class="flags">
                                <div class="lider">ХИТ ПРОДАЖ</div>
                                <br>
                            </div>
                            <img class="img-responsive"
                                 src="https://img.positronica.ru/items/412138_v01_m.jpg"
                                 alt="Телевизор LED BBK 32LEX-5027/T2C"
                                 title="Телевизор LED BBK 32LEX-5027/T2C">
                        </a>
                        <div class="item_rating">
                            <div class="rating-container rating-xs rating-animate stars-styled">
                                <div class="rating"><span class="empty-stars"><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span></span><span  style="width: 0%;"                                         class="filled-stars"><span class="star"><i class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span></span></div>
                            </div>
                        </div>
                        <div class="name"><span><a class="ga_detail" data-brand="BBK"
                                                   data-category="Телевизоры"
                                                   data-price="11950"
                                                   data-articul="412138"
                                                   data-name="Телевизор LED BBK 32LEX-5027/T2C" href="/catalog/product/bbk-32lex-5027t2c-412138/">Телевизор LED BBK 32LEX-5027/T2C</a><span class="dopinfo"><small> 32&quot; (81.28 см), HD READY (720p), DVB-T, DVB-T2, DVB-C, Smart TV, WiFi, черный</small></span></span>
                        </div>
                        <div class="row">
                            <div class="col-xs-6 text-left"><span class="glyphicon glyphicon-ok"></span> <span
                                        class="status stock">На складе</span></div>
                            <div class="col-xs-6 article">Артикул: 412138</div>
                        </div>
                        <div class="price">
                            <div class="action"></div>11 950 ₽<span class="old"></span>
                            <div class="action"></div>
                        </div>
                        <div class="row">
                            <div class="buy">
                                <a  class="ga btn btn-default js_add2basket" data-brand="BBK" data-category="Телевизоры" data-articul="412138" data-name="Телевизор LED BBK 32LEX-5027/T2C" data-id="290240">КУПИТЬ</a>
                            </div>
                            <div class="services">
                                <a class="btn btn-service js_add2compare" data-id="290033">
                                    <span class="glyphicon icon-product-add-comparison"></span>
                                </a>
                                <a class="btn btn-service js_add2wishlist" data-id="290240">
                                    <span class="glyphicon glyphicon-heart-empty"></span>
                                </a>
                            </div>
                        </div>
                        <div class="margin-border-mb"></div>
                    </li>
                    <li class='col-xs-12 col-sm-6 col-md-4 col-lg-3 col-lgx-2 product'
                        data-productid="290994" data-parentproductid="290958">
                        <a href="/catalog/product/bbk-32lem-1037ts2c-413006/" class="pic">
                            <div class="flags">
                            </div>
                            <img class="img-responsive"
                                 src="https://img.positronica.ru/items/413006_v01_m.jpg"
                                 alt="Телевизор LED BBK 32LEM-1037/TS2C"
                                 title="Телевизор LED BBK 32LEM-1037/TS2C">
                        </a>
                        <div class="item_rating">
                            <div class="rating-container rating-xs rating-animate stars-styled">
                                <div class="rating"><span class="empty-stars"><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span></span><span  style="width: 0%;"                                         class="filled-stars"><span class="star"><i class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span></span></div>
                            </div>
                        </div>
                        <div class="name"><span><a class="ga_detail" data-brand="BBK"
                                                   data-category="Телевизоры"
                                                   data-price="10750"
                                                   data-articul="413006"
                                                   data-name="Телевизор LED BBK 32LEM-1037/TS2C" href="/catalog/product/bbk-32lem-1037ts2c-413006/">Телевизор LED BBK 32LEM-1037/TS2C</a><span class="dopinfo"><small> 32&quot; (81.28 см), HD READY (720p), DVB-T, DVB-T2, DVB-C, DVB-S2, белый</small></span></span>
                        </div>
                        <div class="row">
                            <div class="col-xs-6 text-left"><span class="glyphicon glyphicon-ok"></span> <span
                                        class="status stock">На складе</span></div>
                            <div class="col-xs-6 article">Артикул: 413006</div>
                        </div>
                        <div class="price">
                            <div class="action"></div>10 750 ₽<span class="old"></span>
                            <div class="action"></div>
                        </div>
                        <div class="row">
                            <div class="buy">
                                <a  class="ga btn btn-default js_add2basket" data-brand="BBK" data-category="Телевизоры" data-articul="413006" data-name="Телевизор LED BBK 32LEM-1037/TS2C" data-id="290994">КУПИТЬ</a>
                            </div>
                            <div class="services">
                                <a class="btn btn-service js_add2compare" data-id="290958">
                                    <span class="glyphicon icon-product-add-comparison"></span>
                                </a>
                                <a class="btn btn-service js_add2wishlist" data-id="290994">
                                    <span class="glyphicon glyphicon-heart-empty"></span>
                                </a>
                            </div>
                        </div>
                        <div class="margin-border-mb"></div>
                    </li>
                    <li class='col-xs-12 col-sm-6 col-md-4 col-lg-3 col-lgx-2 product'
                        data-productid="306459" data-parentproductid="306444">
                        <a href="/catalog/product/lg-49uj651v-459762/" class="pic">
                            <div class="flags">
                                <div class="hits">ЛУЧШАЯ ЦЕНА</div>
                                <br>
                            </div>
                            <img class="img-responsive"
                                 src="https://img.positronica.ru/items/459762_v01_m.jpg"
                                 alt="Телевизор LED LG 49UJ651V"
                                 title="Телевизор LED LG 49UJ651V">
                        </a>
                        <div class="item_rating">
                            <div class="rating-container rating-xs rating-animate stars-styled">
                                <div class="rating"><span class="empty-stars"><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span></span><span  style="width: 0%;"                                         class="filled-stars"><span class="star"><i class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span></span></div>
                            </div>
                        </div>
                        <div class="name"><span><a class="ga_detail" data-brand="LG"
                                                   data-category="Телевизоры"
                                                   data-price="46390"
                                                   data-articul="459762"
                                                   data-name="Телевизор LED LG 49UJ651V" href="/catalog/product/lg-49uj651v-459762/">Телевизор LED LG 49UJ651V</a><span class="dopinfo"><small> 49&quot; (124.46 см), Ultra HD 4K (2160p), DVB-T2, DVB-C, DVB-S2, Smart TV, WiFi, серебристый</small></span></span>
                        </div>
                        <div class="row">
                            <div class="col-xs-6 text-left"><span class="glyphicon glyphicon-ok"></span> <span
                                        class="status stock">На складе</span></div>
                            <div class="col-xs-6 article">Артикул: 459762</div>
                        </div>
                        <div class="price">
                            <div class="action"></div>46 390 ₽<span class="old"></span>
                            <div class="action"></div>
                        </div>
                        <div class="row">
                            <div class="buy">
                                <a  class="ga btn btn-default js_add2basket" data-brand="LG" data-category="Телевизоры" data-articul="459762" data-name="Телевизор LED LG 49UJ651V" data-id="306459">КУПИТЬ</a>
                            </div>
                            <div class="services">
                                <a class="btn btn-service js_add2compare" data-id="306444">
                                    <span class="glyphicon icon-product-add-comparison"></span>
                                </a>
                                <a class="btn btn-service js_add2wishlist" data-id="306459">
                                    <span class="glyphicon glyphicon-heart-empty"></span>
                                </a>
                            </div>
                        </div>
                        <div class="margin-border-mb"></div>
                    </li>
                    <li class='col-xs-12 col-sm-6 col-md-4 col-lg-3 col-lgx-2 product'
                        data-productid="310002" data-parentproductid="309706">
                        <a href="/catalog/product/lg-32lj510u-459374/" class="pic">
                            <div class="flags">
                            </div>
                            <img class="img-responsive"
                                 src="https://img.positronica.ru/items/459374_v01_m.jpg"
                                 alt="Телевизор LED LG 32LJ510U"
                                 title="Телевизор LED LG 32LJ510U">
                        </a>
                        <div class="item_rating">
                            <div class="rating-container rating-xs rating-animate stars-styled">
                                <div class="rating"><span class="empty-stars"><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span></span><span  style="width: 0%;"                                         class="filled-stars"><span class="star"><i class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span></span></div>
                            </div>
                        </div>
                        <div class="name"><span><a class="ga_detail" data-brand="LG"
                                                   data-category="Телевизоры"
                                                   data-price="14510"
                                                   data-articul="459374"
                                                   data-name="Телевизор LED LG 32LJ510U" href="/catalog/product/lg-32lj510u-459374/">Телевизор LED LG 32LJ510U</a><span class="dopinfo"><small> 32&quot; (81.28 см), HD READY (720p), DVB-T2, DVB-C, DVB-S2, черный</small></span></span>
                        </div>
                        <div class="row">
                            <div class="col-xs-6 text-left"><span class="glyphicon glyphicon-ok"></span> <span
                                        class="status stock">На складе</span></div>
                            <div class="col-xs-6 article">Артикул: 459374</div>
                        </div>
                        <div class="price">
                            <div class="action"></div>14 510 ₽<span class="old"></span>
                            <div class="action"></div>
                        </div>
                        <div class="row">
                            <div class="buy">
                                <a  class="ga btn btn-default js_add2basket" data-brand="LG" data-category="Телевизоры" data-articul="459374" data-name="Телевизор LED LG 32LJ510U" data-id="310002">КУПИТЬ</a>
                            </div>
                            <div class="services">
                                <a class="btn btn-service js_add2compare" data-id="309706">
                                    <span class="glyphicon icon-product-add-comparison"></span>
                                </a>
                                <a class="btn btn-service js_add2wishlist" data-id="310002">
                                    <span class="glyphicon glyphicon-heart-empty"></span>
                                </a>
                            </div>
                        </div>
                        <div class="margin-border-mb"></div>
                    </li>
                    <li class='col-xs-12 col-sm-6 col-md-4 col-lg-3 col-lgx-2 product'
                        data-productid="310004" data-parentproductid="309708">
                        <a href="/catalog/product/lg-43lj515v-459396/" class="pic">
                            <div class="flags">
                            </div>
                            <img class="img-responsive"
                                 src="https://img.positronica.ru/items/459396_v01_m.jpg"
                                 alt="Телевизор LED LG 43LJ515V"
                                 title="Телевизор LED LG 43LJ515V">
                        </a>
                        <div class="item_rating">
                            <div class="rating-container rating-xs rating-animate stars-styled">
                                <div class="rating"><span class="empty-stars"><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span></span><span  style="width: 0%;"                                         class="filled-stars"><span class="star"><i class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span></span></div>
                            </div>
                        </div>
                        <div class="name"><span><a class="ga_detail" data-brand="LG"
                                                   data-category="Телевизоры"
                                                   data-price="25550"
                                                   data-articul="459396"
                                                   data-name="Телевизор LED LG 43LJ515V" href="/catalog/product/lg-43lj515v-459396/">Телевизор LED LG 43LJ515V</a><span class="dopinfo"><small> 43&quot; (109.22 см), FULL HD (1080p), DVB-T2, DVB-C, DVB-S2, черный</small></span></span>
                        </div>
                        <div class="row">
                            <div class="col-xs-6 text-left"><span class="glyphicon glyphicon-ok"></span> <span
                                        class="status stock">На складе</span></div>
                            <div class="col-xs-6 article">Артикул: 459396</div>
                        </div>
                        <div class="price">
                            <div class="action"></div>25 550 ₽<span class="old"></span>
                            <div class="action"></div>
                        </div>
                        <div class="row">
                            <div class="buy">
                                <a  class="ga btn btn-default js_add2basket" data-brand="LG" data-category="Телевизоры" data-articul="459396" data-name="Телевизор LED LG 43LJ515V" data-id="310004">КУПИТЬ</a>
                            </div>
                            <div class="services">
                                <a class="btn btn-service js_add2compare" data-id="309708">
                                    <span class="glyphicon icon-product-add-comparison"></span>
                                </a>
                                <a class="btn btn-service js_add2wishlist" data-id="310004">
                                    <span class="glyphicon glyphicon-heart-empty"></span>
                                </a>
                            </div>
                        </div>
                        <div class="margin-border-mb"></div>
                    </li>
                    <li class='col-xs-12 col-sm-6 col-md-4 col-lg-3 col-lgx-2 product'
                        data-productid="310009" data-parentproductid="309713">
                        <a href="/catalog/product/bbk-40lem-1027fts2c-461423/" class="pic">
                            <div class="flags">
                            </div>
                            <img class="img-responsive"
                                 src="https://img.positronica.ru/items/461423_v01_m.jpg"
                                 alt="Телевизор LED BBK 40LEM-1027/FTS2C"
                                 title="Телевизор LED BBK 40LEM-1027/FTS2C">
                        </a>
                        <div class="item_rating">
                            <div class="rating-container rating-xs rating-animate stars-styled">
                                <div class="rating"><span class="empty-stars"><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span></span><span  style="width: 0%;"                                         class="filled-stars"><span class="star"><i class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span></span></div>
                            </div>
                        </div>
                        <div class="name"><span><a class="ga_detail" data-brand="BBK"
                                                   data-category="Телевизоры"
                                                   data-price="15430"
                                                   data-articul="461423"
                                                   data-name="Телевизор LED BBK 40LEM-1027/FTS2C" href="/catalog/product/bbk-40lem-1027fts2c-461423/">Телевизор LED BBK 40LEM-1027/FTS2C</a><span class="dopinfo"><small> 39&quot; (99 см), FULL HD (1080p), DVB-T, DVB-T2, DVB-C, черный</small></span></span>
                        </div>
                        <div class="row">
                            <div class="col-xs-6 text-left"><span class="glyphicon glyphicon-ok"></span> <span
                                        class="status stock">На складе</span></div>
                            <div class="col-xs-6 article">Артикул: 461423</div>
                        </div>
                        <div class="price">
                            <div class="action"></div>15 430 ₽<span class="old"></span>
                            <div class="action"></div>
                        </div>
                        <div class="row">
                            <div class="buy">
                                <a  class="ga btn btn-default js_add2basket" data-brand="BBK" data-category="Телевизоры" data-articul="461423" data-name="Телевизор LED BBK 40LEM-1027/FTS2C" data-id="310009">КУПИТЬ</a>
                            </div>
                            <div class="services">
                                <a class="btn btn-service js_add2compare" data-id="309713">
                                    <span class="glyphicon icon-product-add-comparison"></span>
                                </a>
                                <a class="btn btn-service js_add2wishlist" data-id="310009">
                                    <span class="glyphicon glyphicon-heart-empty"></span>
                                </a>
                            </div>
                        </div>
                        <div class="margin-border-mb"></div>
                    </li>
                    <li class='col-xs-12 col-sm-6 col-md-4 col-lg-3 col-lgx-2 product'
                        data-productid="311349" data-parentproductid="311314">
                        <a href="/catalog/product/lg-22mt49vf-pz-473470/" class="pic">
                            <div class="flags">
                            </div>
                            <img class="img-responsive"
                                 src="https://img.positronica.ru/items/473470_v01_m.jpg"
                                 alt="Телевизор LED LG 22MT49VF-PZ"
                                 title="Телевизор LED LG 22MT49VF-PZ">
                        </a>
                        <div class="item_rating">
                            <div class="rating-container rating-xs rating-animate stars-styled">
                                <div class="rating"><span class="empty-stars"><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span></span><span  style="width: 0%;"                                         class="filled-stars"><span class="star"><i class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span></span></div>
                            </div>
                        </div>
                        <div class="name"><span><a class="ga_detail" data-brand="LG"
                                                   data-category="Телевизоры"
                                                   data-price="12450"
                                                   data-articul="473470"
                                                   data-name="Телевизор LED LG 22MT49VF-PZ" href="/catalog/product/lg-22mt49vf-pz-473470/">Телевизор LED LG 22MT49VF-PZ</a><span class="dopinfo"><small> 22&quot; (55.88 см), FULL HD (1080p), DVB-T2, DVB-C, DVB-S2, черный</small></span></span>
                        </div>
                        <div class="row">
                            <div class="col-xs-6 text-left"><span class="glyphicon glyphicon-ok"></span> <span
                                        class="status stock">На складе</span></div>
                            <div class="col-xs-6 article">Артикул: 473470</div>
                        </div>
                        <div class="price">
                            <div class="action"></div>12 450 ₽<span class="old"></span>
                            <div class="action"></div>
                        </div>
                        <div class="row">
                            <div class="buy">
                                <a  class="ga btn btn-default js_add2basket" data-brand="LG" data-category="Телевизоры" data-articul="473470" data-name="Телевизор LED LG 22MT49VF-PZ" data-id="311349">КУПИТЬ</a>
                            </div>
                            <div class="services">
                                <a class="btn btn-service js_add2compare" data-id="311314">
                                    <span class="glyphicon icon-product-add-comparison"></span>
                                </a>
                                <a class="btn btn-service js_add2wishlist" data-id="311349">
                                    <span class="glyphicon glyphicon-heart-empty"></span>
                                </a>
                            </div>
                        </div>
                        <div class="margin-border-mb"></div>
                    </li>
                    <li class='col-xs-12 col-sm-6 col-md-4 col-lg-3 col-lgx-2 product'
                        data-productid="315080" data-parentproductid="315079">
                        <a href="/catalog/product/samsung-ue55mu6500uxru-473530/" class="pic">
                            <div class="flags">
                            </div>
                            <img class="img-responsive"
                                 src="https://img.positronica.ru/items/473530_v01_m.jpg"
                                 alt="Телевизор LED Samsung 6 UE55MU6500UXRU"
                                 title="Телевизор LED Samsung 6 UE55MU6500UXRU">
                        </a>
                        <div class="item_rating">
                            <div class="rating-container rating-xs rating-animate stars-styled">
                                <div class="rating"><span class="empty-stars"><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span></span><span  style="width: 0%;"                                         class="filled-stars"><span class="star"><i class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span></span></div>
                            </div>
                        </div>
                        <div class="name"><span><a class="ga_detail" data-brand="SAMSUNG"
                                                   data-category="Телевизоры"
                                                   data-price="75500"
                                                   data-articul="473530"
                                                   data-name="Телевизор LED Samsung 6 UE55MU6500UXRU" href="/catalog/product/samsung-ue55mu6500uxru-473530/">Телевизор LED Samsung 6 UE55MU6500UXRU</a><span class="dopinfo"><small> 55&quot; (139.70 см), Ultra HD 4K (2160p), DVB-T, DVB-T2, DVB-C, DVB-S2, Smart TV, WiFi, серебристый</small></span></span>
                        </div>
                        <div class="row">
                            <div class="col-xs-6 text-left"><span class="glyphicon glyphicon-ok"></span> <span
                                        class="status stock">На складе</span></div>
                            <div class="col-xs-6 article">Артикул: 473530</div>
                        </div>
                        <div class="price">
                            <div class="action"></div>75 500 ₽<span class="old"></span>
                            <div class="action"></div>
                        </div>
                        <div class="row">
                            <div class="buy">
                                <a  class="ga btn btn-default js_add2basket" data-brand="SAMSUNG" data-category="Телевизоры" data-articul="473530" data-name="Телевизор LED Samsung 6 UE55MU6500UXRU" data-id="315080">КУПИТЬ</a>
                            </div>
                            <div class="services">
                                <a class="btn btn-service js_add2compare" data-id="315079">
                                    <span class="glyphicon icon-product-add-comparison"></span>
                                </a>
                                <a class="btn btn-service js_add2wishlist" data-id="315080">
                                    <span class="glyphicon glyphicon-heart-empty"></span>
                                </a>
                            </div>
                        </div>
                        <div class="margin-border-mb"></div>
                    </li>
                    <li class='col-xs-12 col-sm-6 col-md-4 col-lg-3 col-lgx-2 product'
                        data-productid="315288" data-parentproductid="315287">
                        <a href="/catalog/product/samsung-ue32m5500auxru-476478/" class="pic">
                            <div class="flags">
                            </div>
                            <img class="img-responsive"
                                 src="https://img.positronica.ru/items/476478_v01_m.jpg"
                                 alt="Телевизор LED Samsung 5 UE32M5500AUXRU"
                                 title="Телевизор LED Samsung 5 UE32M5500AUXRU">
                        </a>
                        <div class="item_rating">
                            <div class="rating-container rating-xs rating-animate stars-styled">
                                <div class="rating"><span class="empty-stars"><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span></span><span  style="width: 0%;"                                         class="filled-stars"><span class="star"><i class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span></span></div>
                            </div>
                        </div>
                        <div class="name"><span><a class="ga_detail" data-brand="SAMSUNG"
                                                   data-category="Телевизоры"
                                                   data-price="26020"
                                                   data-articul="476478"
                                                   data-name="Телевизор LED Samsung 5 UE32M5500AUXRU" href="/catalog/product/samsung-ue32m5500auxru-476478/">Телевизор LED Samsung 5 UE32M5500AUXRU</a><span class="dopinfo"><small> 32&quot; (81.28 см), FULL HD (1080p), DVB-T2, DVB-C, DVB-S2, Smart TV, WiFi, титан</small></span></span>
                        </div>
                        <div class="row">
                            <div class="col-xs-6 text-left"><span class="glyphicon glyphicon-ok"></span> <span
                                        class="status stock">На складе</span></div>
                            <div class="col-xs-6 article">Артикул: 476478</div>
                        </div>
                        <div class="price">
                            <div class="action"></div>26 020 ₽<span class="old"></span>
                            <div class="action"></div>
                        </div>
                        <div class="row">
                            <div class="buy">
                                <a  class="ga btn btn-default js_add2basket" data-brand="SAMSUNG" data-category="Телевизоры" data-articul="476478" data-name="Телевизор LED Samsung 5 UE32M5500AUXRU" data-id="315288">КУПИТЬ</a>
                            </div>
                            <div class="services">
                                <a class="btn btn-service js_add2compare" data-id="315287">
                                    <span class="glyphicon icon-product-add-comparison"></span>
                                </a>
                                <a class="btn btn-service js_add2wishlist" data-id="315288">
                                    <span class="glyphicon glyphicon-heart-empty"></span>
                                </a>
                            </div>
                        </div>
                        <div class="margin-border-mb"></div>
                    </li>
                    <li class='col-xs-12 col-sm-6 col-md-4 col-lg-3 col-lgx-2 product'
                        data-productid="315349" data-parentproductid="315348">
                        <a href="/catalog/product/samsung-ue49m5000auxru-477292/" class="pic">
                            <div class="flags">
                            </div>
                            <img class="img-responsive"
                                 src="https://img.positronica.ru/items/477292_v01_m.jpg"
                                 alt="Телевизор LED Samsung 5 UE49M5000AUXRU"
                                 title="Телевизор LED Samsung 5 UE49M5000AUXRU">
                        </a>
                        <div class="item_rating">
                            <div class="rating-container rating-xs rating-animate stars-styled">
                                <div class="rating"><span class="empty-stars"><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span></span><span  style="width: 0%;"                                         class="filled-stars"><span class="star"><i class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span></span></div>
                            </div>
                        </div>
                        <div class="name"><span><a class="ga_detail" data-brand="SAMSUNG"
                                                   data-category="Телевизоры"
                                                   data-price="36460"
                                                   data-articul="477292"
                                                   data-name="Телевизор LED Samsung 5 UE49M5000AUXRU" href="/catalog/product/samsung-ue49m5000auxru-477292/">Телевизор LED Samsung 5 UE49M5000AUXRU</a><span class="dopinfo"><small> 49&quot; (124.46 см), FULL HD (1080p), DVB-T2, DVB-C, DVB-S2, черный</small></span></span>
                        </div>
                        <div class="row">
                            <div class="col-xs-6 text-left"><span class="glyphicon glyphicon-ok"></span> <span
                                        class="status stock">На складе</span></div>
                            <div class="col-xs-6 article">Артикул: 477292</div>
                        </div>
                        <div class="price">
                            <div class="action"></div>36 460 ₽<span class="old"></span>
                            <div class="action"></div>
                        </div>
                        <div class="row">
                            <div class="buy">
                                <a  class="ga btn btn-default js_add2basket" data-brand="SAMSUNG" data-category="Телевизоры" data-articul="477292" data-name="Телевизор LED Samsung 5 UE49M5000AUXRU" data-id="315349">КУПИТЬ</a>
                            </div>
                            <div class="services">
                                <a class="btn btn-service js_add2compare" data-id="315348">
                                    <span class="glyphicon icon-product-add-comparison"></span>
                                </a>
                                <a class="btn btn-service js_add2wishlist" data-id="315349">
                                    <span class="glyphicon glyphicon-heart-empty"></span>
                                </a>
                            </div>
                        </div>
                        <div class="margin-border-mb"></div>
                    </li>
                    <li class='col-xs-12 col-sm-6 col-md-4 col-lg-3 col-lgx-2 product'
                        data-productid="315609" data-parentproductid="315608">
                        <a href="/catalog/product/lg-43lj510v-459394/" class="pic">
                            <div class="flags">
                            </div>
                            <img class="img-responsive"
                                 src="https://img.positronica.ru/items/459394_v01_m.jpg"
                                 alt="Телевизор LED LG 43LJ510V"
                                 title="Телевизор LED LG 43LJ510V">
                        </a>
                        <div class="item_rating">
                            <div class="rating-container rating-xs rating-animate stars-styled">
                                <div class="rating"><span class="empty-stars"><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span></span><span  style="width: 0%;"                                         class="filled-stars"><span class="star"><i class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span></span></div>
                            </div>
                        </div>
                        <div class="name"><span><a class="ga_detail" data-brand="LG"
                                                   data-category="Телевизоры"
                                                   data-price="22570"
                                                   data-articul="459394"
                                                   data-name="Телевизор LED LG 43LJ510V" href="/catalog/product/lg-43lj510v-459394/">Телевизор LED LG 43LJ510V</a><span class="dopinfo"><small> 43&quot; (109.22 см), FULL HD (1080p), DVB-T2, DVB-C, DVB-S2, черный</small></span></span>
                        </div>
                        <div class="row">
                            <div class="col-xs-6 text-left"><span class="glyphicon glyphicon-ok"></span> <span
                                        class="status stock">На складе</span></div>
                            <div class="col-xs-6 article">Артикул: 459394</div>
                        </div>
                        <div class="price">
                            <div class="action"></div>22 570 ₽<span class="old"></span>
                            <div class="action"></div>
                        </div>
                        <div class="row">
                            <div class="buy">
                                <a  class="ga btn btn-default js_add2basket" data-brand="LG" data-category="Телевизоры" data-articul="459394" data-name="Телевизор LED LG 43LJ510V" data-id="315609">КУПИТЬ</a>
                            </div>
                            <div class="services">
                                <a class="btn btn-service js_add2compare" data-id="315608">
                                    <span class="glyphicon icon-product-add-comparison"></span>
                                </a>
                                <a class="btn btn-service js_add2wishlist" data-id="315609">
                                    <span class="glyphicon glyphicon-heart-empty"></span>
                                </a>
                            </div>
                        </div>
                        <div class="margin-border-mb"></div>
                    </li>
                    <li class='col-xs-12 col-sm-6 col-md-4 col-lg-3 col-lgx-2 product'
                        data-productid="317299" data-parentproductid="317298">
                        <a href="/catalog/product/bbk-43lem-1038fts2c-478358/" class="pic">
                            <div class="flags">
                            </div>
                            <img class="img-responsive"
                                 src="https://img.positronica.ru/items/478358_v01_m.jpg"
                                 alt="Телевизор LED BBK 43LEM-1038/FTS2C"
                                 title="Телевизор LED BBK 43LEM-1038/FTS2C">
                        </a>
                        <div class="item_rating">
                            <div class="rating-container rating-xs rating-animate stars-styled">
                                <div class="rating"><span class="empty-stars"><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span></span><span  style="width: 0%;"                                         class="filled-stars"><span class="star"><i class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span></span></div>
                            </div>
                        </div>
                        <div class="name"><span><a class="ga_detail" data-brand="BBK"
                                                   data-category="Телевизоры"
                                                   data-price="19650"
                                                   data-articul="478358"
                                                   data-name="Телевизор LED BBK 43LEM-1038/FTS2C" href="/catalog/product/bbk-43lem-1038fts2c-478358/">Телевизор LED BBK 43LEM-1038/FTS2C</a><span class="dopinfo"><small> 43&quot; (109.22 см), FULL HD (1080p), DVB-T, DVB-T2, DVB-C, черный</small></span></span>
                        </div>
                        <div class="row">
                            <div class="col-xs-6 text-left"><span class="glyphicon glyphicon-ok"></span> <span
                                        class="status stock">На складе</span></div>
                            <div class="col-xs-6 article">Артикул: 478358</div>
                        </div>
                        <div class="price">
                            <div class="action"></div>19 650 ₽<span class="old"></span>
                            <div class="action"></div>
                        </div>
                        <div class="row">
                            <div class="buy">
                                <a  class="ga btn btn-default js_add2basket" data-brand="BBK" data-category="Телевизоры" data-articul="478358" data-name="Телевизор LED BBK 43LEM-1038/FTS2C" data-id="317299">КУПИТЬ</a>
                            </div>
                            <div class="services">
                                <a class="btn btn-service js_add2compare" data-id="317298">
                                    <span class="glyphicon icon-product-add-comparison"></span>
                                </a>
                                <a class="btn btn-service js_add2wishlist" data-id="317299">
                                    <span class="glyphicon glyphicon-heart-empty"></span>
                                </a>
                            </div>
                        </div>
                        <div class="margin-border-mb"></div>
                    </li>
                    <li class='col-xs-12 col-sm-6 col-md-4 col-lg-3 col-lgx-2 product'
                        data-productid="321389" data-parentproductid="321388">
                        <a href="/catalog/product/lg-32lj500v-487015/" class="pic">
                            <div class="flags">
                            </div>
                            <img class="img-responsive"
                                 src="https://img.positronica.ru/items/487015_v01_m.jpg"
                                 alt="Телевизор LED LG 32LJ500V"
                                 title="Телевизор LED LG 32LJ500V">
                        </a>
                        <div class="item_rating">
                            <div class="rating-container rating-xs rating-animate stars-styled">
                                <div class="rating"><span class="empty-stars"><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span></span><span  style="width: 0%;"                                         class="filled-stars"><span class="star"><i class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span></span></div>
                            </div>
                        </div>
                        <div class="name"><span><a class="ga_detail" data-brand="LG"
                                                   data-category="Телевизоры"
                                                   data-price="18430"
                                                   data-articul="487015"
                                                   data-name="Телевизор LED LG 32LJ500V" href="/catalog/product/lg-32lj500v-487015/">Телевизор LED LG 32LJ500V</a><span class="dopinfo"><small> 32&quot; (81.28 см), FULL HD (1080p), DVB-T2, DVB-C, DVB-S2, черный</small></span></span>
                        </div>
                        <div class="row">
                            <div class="col-xs-6 text-left"><span class="glyphicon glyphicon-ok"></span> <span
                                        class="status stock">На складе</span></div>
                            <div class="col-xs-6 article">Артикул: 487015</div>
                        </div>
                        <div class="price">
                            <div class="action"></div>18 430 ₽<span class="old"></span>
                            <div class="action"></div>
                        </div>
                        <div class="row">
                            <div class="buy">
                                <a  class="ga btn btn-default js_add2basket" data-brand="LG" data-category="Телевизоры" data-articul="487015" data-name="Телевизор LED LG 32LJ500V" data-id="321389">КУПИТЬ</a>
                            </div>
                            <div class="services">
                                <a class="btn btn-service js_add2compare" data-id="321388">
                                    <span class="glyphicon icon-product-add-comparison"></span>
                                </a>
                                <a class="btn btn-service js_add2wishlist" data-id="321389">
                                    <span class="glyphicon glyphicon-heart-empty"></span>
                                </a>
                            </div>
                        </div>
                        <div class="margin-border-mb"></div>
                    </li>
                    <li class='col-xs-12 col-sm-6 col-md-4 col-lg-3 col-lgx-2 product'
                        data-productid="324215" data-parentproductid="324214">
                        <a href="/catalog/product/lg-oled65e7v-489670/" class="pic">
                            <div class="flags">
                            </div>
                            <img class="img-responsive"
                                 src="https://img.positronica.ru/items/489670_v01_m.jpg"
                                 alt="Телевизор OLED LG OLED65E7V"
                                 title="Телевизор OLED LG OLED65E7V">
                        </a>
                        <div class="item_rating">
                            <div class="rating-container rating-xs rating-animate stars-styled">
                                <div class="rating"><span class="empty-stars"><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span></span><span  style="width: 0%;"                                         class="filled-stars"><span class="star"><i class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span></span></div>
                            </div>
                        </div>
                        <div class="name"><span><a class="ga_detail" data-brand="LG"
                                                   data-category="Телевизоры"
                                                   data-price="238390"
                                                   data-articul="489670"
                                                   data-name="Телевизор OLED LG OLED65E7V" href="/catalog/product/lg-oled65e7v-489670/">Телевизор OLED LG OLED65E7V</a><span class="dopinfo"><small> 65&quot; (165.10 см), Ultra HD 4K (2160p), DVB-T2, DVB-C, DVB-S2, 3D, Smart TV, WiFi, черный/белый</small></span></span>
                        </div>
                        <div class="row">
                            <div class="col-xs-6 text-left"><span class="glyphicon glyphicon-ok"></span> <span
                                        class="status stock">На складе</span></div>
                            <div class="col-xs-6 article">Артикул: 489670</div>
                        </div>
                        <div class="price">
                            <div class="action"></div>238 390 ₽<span class="old"></span>
                            <div class="action"></div>
                        </div>
                        <div class="row">
                            <div class="buy">
                                <a  class="ga btn btn-default js_add2basket" data-brand="LG" data-category="Телевизоры" data-articul="489670" data-name="Телевизор OLED LG OLED65E7V" data-id="324215">КУПИТЬ</a>
                            </div>
                            <div class="services">
                                <a class="btn btn-service js_add2compare" data-id="324214">
                                    <span class="glyphicon icon-product-add-comparison"></span>
                                </a>
                                <a class="btn btn-service js_add2wishlist" data-id="324215">
                                    <span class="glyphicon glyphicon-heart-empty"></span>
                                </a>
                            </div>
                        </div>
                        <div class="margin-border-mb"></div>
                    </li>
                    <li class='col-xs-12 col-sm-6 col-md-4 col-lg-3 col-lgx-2 product'
                        data-productid="328523" data-parentproductid="328522">
                        <a href="/catalog/product/lg-32lv300c-495581/" class="pic">
                            <div class="flags">
                            </div>
                            <img class="img-responsive"
                                 src="https://img.positronica.ru/items/495581_v01_m.jpg"
                                 alt="Телевизор LED LG 32LV300C"
                                 title="Телевизор LED LG 32LV300C">
                        </a>
                        <div class="item_rating">
                            <div class="rating-container rating-xs rating-animate stars-styled">
                                <div class="rating"><span class="empty-stars"><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span></span><span  style="width: 0%;"                                         class="filled-stars"><span class="star"><i class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span></span></div>
                            </div>
                        </div>
                        <div class="name"><span><a class="ga_detail" data-brand="LG"
                                                   data-category="Телевизоры"
                                                   data-price="19750"
                                                   data-articul="495581"
                                                   data-name="Телевизор LED LG 32LV300C" href="/catalog/product/lg-32lv300c-495581/">Телевизор LED LG 32LV300C</a><span class="dopinfo"><small> 32&quot; (81.28 см), HD READY (720p), DVB-T2, DVB-C, DVB-S2, черный</small></span></span>
                        </div>
                        <div class="row">
                            <div class="col-xs-6 text-left"><span class="glyphicon glyphicon-ok"></span> <span
                                        class="status stock">На складе</span></div>
                            <div class="col-xs-6 article">Артикул: 495581</div>
                        </div>
                        <div class="price">
                            <div class="action"></div>19 750 ₽<span class="old"></span>
                            <div class="action"></div>
                        </div>
                        <div class="row">
                            <div class="buy">
                                <a  class="ga btn btn-default js_add2basket" data-brand="LG" data-category="Телевизоры" data-articul="495581" data-name="Телевизор LED LG 32LV300C" data-id="328523">КУПИТЬ</a>
                            </div>
                            <div class="services">
                                <a class="btn btn-service js_add2compare" data-id="328522">
                                    <span class="glyphicon icon-product-add-comparison"></span>
                                </a>
                                <a class="btn btn-service js_add2wishlist" data-id="328523">
                                    <span class="glyphicon glyphicon-heart-empty"></span>
                                </a>
                            </div>
                        </div>
                        <div class="margin-border-mb"></div>
                    </li>
                    <li class='col-xs-12 col-sm-6 col-md-4 col-lg-3 col-lgx-2 product'
                        data-productid="330182" data-parentproductid="330135">
                        <a href="/catalog/product/lg-49lv340c-498518/" class="pic">
                            <div class="flags">
                            </div>
                            <img class="img-responsive"
                                 src="https://img.positronica.ru/items/498518_v01_m.jpg"
                                 alt="Телевизор LED LG 49LV340C"
                                 title="Телевизор LED LG 49LV340C">
                        </a>
                        <div class="item_rating">
                            <div class="rating-container rating-xs rating-animate stars-styled">
                                <div class="rating"><span class="empty-stars"><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star-empty"></i></span></span><span  style="width: 0%;"                                         class="filled-stars"><span class="star"><i class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span><span class="star"><i
                                                    class="glyphicon glyphicon-star"></i></span></span></div>
                            </div>
                        </div>
                        <div class="name"><span><a class="ga_detail" data-brand="LG"
                                                   data-category="Телевизоры"
                                                   data-price="45230"
                                                   data-articul="498518"
                                                   data-name="Телевизор LED LG 49LV340C" href="/catalog/product/lg-49lv340c-498518/">Телевизор LED LG 49LV340C</a><span class="dopinfo"><small> 49&quot; (124.46 см), FULL HD (1080p), DVB-T2, DVB-C, серебристый/черный</small></span></span>
                        </div>
                        <div class="row">
                            <div class="col-xs-6 text-left"><span class="glyphicon glyphicon-ok"></span> <span
                                        class="status stock">На складе</span></div>
                            <div class="col-xs-6 article">Артикул: 498518</div>
                        </div>
                        <div class="price">
                            <div class="action"></div>45 230 ₽<span class="old"></span>
                            <div class="action"></div>
                        </div>
                        <div class="row">
                            <div class="buy">
                                <a  class="ga btn btn-default js_add2basket" data-brand="LG" data-category="Телевизоры" data-articul="498518" data-name="Телевизор LED LG 49LV340C" data-id="330182">КУПИТЬ</a>
                            </div>
                            <div class="services">
                                <a class="btn btn-service js_add2compare" data-id="330135">
                                    <span class="glyphicon icon-product-add-comparison"></span>
                                </a>
                                <a class="btn btn-service js_add2wishlist" data-id="330182">
                                    <span class="glyphicon glyphicon-heart-empty"></span>
                                </a>
                            </div>
                        </div>
                        <div class="margin-border-mb"></div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="panel panel-row container-fluid paging">
            <div class="row">
                <div class="col-xs-12 col-md-4 col-lg-3 col-lgx-2">
                    <div class="block total">Товаров: 1-30			из 356</div>
                </div>
                <div class="col-xs-12 col-md-6 col-lg-7 col-lgx-8 text-center">
                    <div class="block">
                        <ul class="pagination">
                            <li class="active ">
                                <a>1</a>
                            </li>					<li class=" ">
                                <a href="/catalog/televizory/?PAGEN_1=2">2</a>
                            </li>					<li class=" hidden-xs">
                                <a href="/catalog/televizory/?PAGEN_1=3">3</a>
                            </li>					<li class=" hidden-xs">
                                <a href="/catalog/televizory/?PAGEN_1=4">4</a>
                            </li>					<li class=" hidden-xs">
                                <a href="/catalog/televizory/?PAGEN_1=5">5</a>
                            </li>					<li>
                                <a>...</a>
                            </li>					<li>
                                <a href="/catalog/televizory/?PAGEN_1=12">12</a>
                            </li>					<li>
                                <a href="/catalog/televizory/?PAGEN_1=2" class="last"></a>
                            </li>			</ul>
                    </div>
                </div>
                <div class="col-xs-12 col-md-2 text-right">
                    <div class="block">
                        <a class="btn btn-default btn-sort asc btn-up">Наверх <span class="icon-product"></span></a>
                    </div>
                </div>
            </div></div>
        <div class="well hidden-xs hidden-sm tags">
            <div class="block">
                Интернет-магазин Позитроника.ру предлагает купить Телевизоры  с доставкой по Казани или в любой другой город РФ. В нашем каталоге представлено большое количество товаров на ваш выбор по цене от 6790 рублей. Для того, чтобы купить Телевизоры  вам достаточно сделать заказ на сайте, или позвонить по телефону 8 (800) 333-0-333            		</div>
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