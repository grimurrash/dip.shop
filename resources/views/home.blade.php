images/logo.png@extends('layouts.app')
@section('title',"Теплогазснаб - интернет-магазин котлов в Казани")
@section('description','Интернет-магазин Теплогазснаб предлагает большой выбор газовых котлов по выгодным ценам в Казани')

@section('content')
    <div id="panel">
    </div>
    @include('components.navigation')
    <div class='city_change'></div>
    <div class="container-fluid head">
        <div class='row'>
            <div class='col-xs-2 col-sm-1 col-md-4 col-lg-3 logo hidden-xs'>
                <a href="/" class="hidden-sm"><img src="{{ asset('images/logo.png') }}"
                                                   class="img-responsive"
                                                   alt="logo"></a>
                <a href="/" class="min visible-sm"><img src="{{ asset('images/logo_min.png') }}"
                                                        class="img-responsive" alt="logo"></a>
            </div>
            <div class='col-sm-7 col-md-5 col-lg-6'>
                <form action="/search/">
                    <div class="input-group" id="title-search">

                        <input placeholder='ПОИСК ТОВАРА' type="search" class="form-control" id="title-search-input"
                               name="q"
                               value=""
                               maxlength="50" autocomplete="off">
                        <span class="input-group-addon hidden-xs"><a class="keypad">&nbsp;</a></span>
                        <span class="input-group-btn">
                  <button class="btn btn-default search" type="submit"></button>
                </span>
                    </div>
                    <div id="keyboard_wraper" class="keyboard_wraper"></div>
                </form>
            </div>
            <div class='col-sm-4 col-md-3 col-lg-2 hidden-xs'>
                <a class='worktime' data-toggle='popover' id='worktime' data-html='true'
                   data-container='.worktime'
                   data-placement='bottom'
                   data-class-popover='worktimePopoverConfig'
                   data-trigger='hover'
                   data-value='["\u041f\u043d-\u041f\u0442: 10:00 - 19:00","\u0421\u0431-\u0412\u0441: \u0412\u044b\u0445\u043e\u0434\u043d\u043e\u0439"]'>Сегодня:
                    10:00 - 19:00 по МСК</a>

                <a class='phone' data-toggle='popover' id='feedback' data-html='true'
                   data-container='.feedback'
                   data-placement='bottom'
                   data-class-popover='feedbackPopoverConfig'
                   data-trigger='manual'>8(800) 333-0-333</a>
            </div>
            <div class='feedback'></div>
        </div>
    </div>
    <div class="container-fluid wrap">
        <div class='row1'>
            <div class='wrap_content'>
                <div class='col-xs-12 col-sm-5 col-md-4 col-lg-3 padding0 menu'>

                    <div class="panel panel-primary">
                        <div class="panel-heading hidden-xs">
                            <button data-toggle="dropdown" data-target="#menu"
                                    class="hamburger animated fadeInLeft noclose is-open"
                                    type="button">
                                <span class="hamb-top"></span>
                                <span class="hamb-middle"></span>
                                <span class="hamb-bottom"></span>
                            </button>
                            <div class="label menu-label">КАТАЛОГ ТОВАРОВ</div>
                        </div>

                </div>
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
                                    <a href="/news/vyigrayte-odin-iz-shesti-televizorov/">
                                        <img class="third-slide"
                                             src="public/images/10.jpg"
                                             alt="1">
                                    </a>
                                </div>
                                <div class="item " id="bx_3218110189_406914">
                                    <a href="/news/vmeste-vygodno/">
                                        <img class="third-slide"
                                             src="public/images/3.jpg"
                                             alt="2">
                                    </a>
                                </div>
                                <div class="item " id="bx_3218110189_413607">
                                    <a href="/news/may-pokupay-ne-zevay/">
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


                    <div class="panel panel-slider">
                        <div class="panel-heading flags">Новинки
                            <div class="new">НОВИНКИ</div>
                        </div>

                    <div class="panel panel-slider">
                        <div class="panel-heading flags">Хиты продаж
                            <div class="lider">ХИТЫ ПРОДАЖ</div>
                        </div>
                        <div class="panel-body">
                            <div id="hitsaCarousel" class="wrap-carousel" data-toggle="electroCarousel">

                                <a class="btnLeft hidden-xs"><span class="upl"></span><span
                                            class="downl"></span></a>
                                <a class="btnRight hidden-xs"><span class="upr"></span><span
                                            class="downr"></span></a>
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
                            <h1>"Интернет-магазин Теплогазснаб"</h1>
                            <p>Основным направлением деятельности компании «Теплогазснаб» является поставка
                                высококачественного оборудования для котельных, а также отопительного оборудования и
                                комплектующих. В ассортименте нашей компании представлены изделия наиболее крупных и
                                известных производителей..</p>
                            <p>Одним из главных принципов нашей работы является обеспечение качественной поддержки
                                клиенту: мы предоставляем услуги по обслуживанию приобретенного оборудования на
                                протяжении всего срока эксплуатации</p>

                            <!--/noindex--></div>
                    </div>


                </div>
            </div>
            <div class="footer">
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 col-lgx-2 logo">
                    <div></div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-6 col-lgx-7 cols">
                    <div class="row">
                        <div class="col-xs-12 col-sm-4 col-md-3">
                            <p class="h5 green">ПОЗИТРОНИКА</p>
                            <a class="opacity7" href="/company/">О компании</a>
                            <a class="opacity7" href="/franchaizing/">Франчайзинг</a>
                            <a class="opacity7" href="/media/">Контакты для СМИ</a>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <p class="h5 green">ПОКУПАТЕЛЯМ</p>
                            <a class="opacity7" href="/info/dostavka/">Доставка</a>
                            <a class="opacity7" href="/info/oplata/">Оплата</a>
                            <a class="opacity7" href="/info/buy/">Как сделать заказ</a>
                            <a class="opacity7" href="#feedback">Обратная связь</a>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-5">
                            <p class="h5 green">ИНФОРМАЦИЯ</p>
                            <a class="opacity7" href="/shops/">Адреса магазинов</a>
                            <a class="opacity7" href="/catalog/">Каталог товаров</a>
                            <a class="opacity7" href="/info/oferta/">Публичная оферта</a>
                            <a class="opacity7" href="/info/politika-personalnykh-dannykh/">Политика персональных
                                данных</a>
                        </div>
                        <div class="col-xs-12 info opacity7">
                            Copyright © 2006-2019 <a href="/">Интернет магазин газовых котлов</a> Теплогазснаб<br>
                        </div>
                    </div>

                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 col-lgx-3 contact">
                    <div>
                        <div class="col-md-5 col-lg-12 phone">
                            8 (800) 333-0-333
                        </div>
                        <small class="opacity7 visible-lg">Единая справочная бесплатно по России</small>
                        <ul class="col-sm-4 col-md-3 col-lg-12 contacts">
                            <li class="mail"><a href="#email">moscow@teplo.ru</a></li>
                        </ul>
                        <ul class="col-sm-5 col-md-4 col-lg-12 cards">
                            <li class="vs"><a href="#vs">&nbsp;</a></li>
                            <li class="mc"><a href="#mc">&nbsp;</a></li>
                            <li class="ms"><a href="#ms">&nbsp;</a></li>
                        </ul>
                        <!--noindex-->
                        <ul class="col-sm-4 col-md-3 col-lg-12 social">
                            <li class="fb"><a target="_blank" href="//www.facebook.com/teploOfficial"
                                              rel="nofollow"></a></li>

                            <li class="vk"><a target="_blank" href="//vk.com/club25319996" rel="nofollow"></a></li>

                            <li class="tw"><a target="_blank" href="//twitter.com/teplo_ru" rel="nofollow"></a>
                            </li>

                            <li class="ok"><a target="_blank" href="//www.odnoklassniki.ru/group/51966957125829"
                                              rel="nofollow"></a></li>

                            <li class="ym">
                                <noindex><a target="_blank" href="//market.yandex.ru/shop/385207/reviews?from=385207"
                                            rel="nofollow"></a></noindex>
                            </li>

                        </ul>
                        <!--/noindex-->
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div id="location_search_field" class="hidden">
        <span>Не нашли нужный город в списке? Воспользуйтесь поиском по городам доставки:</span>


        <div id="sls-66237" class="bx-sls ">


            <div class="dropdown-block bx-ui-sls-input-block">

                <span class="dropdown-icon"></span>
                <input type="text" autocomplete="off" name="LOCATION" value="" class="dropdown-field"
                       placeholder="Введите название ..."/>

                <div class="dropdown-fade2white"></div>
                <div class="bx-ui-sls-loader"></div>
                <div class="bx-ui-sls-clear" title="Отменить выбор"></div>
                <div class="bx-ui-sls-pane"></div>

            </div>

            <script type="text/html" data-template-id="bx-ui-sls-error">
                <div class="bx-ui-sls-error">
                    <div></div>
                </div>
            </script>

            <script type="text/html" data-template-id="bx-ui-sls-dropdown-item">
                <div class="dropdown-item bx-ui-sls-variant">
                    <span class="dropdown-item-text"></span>
                </div>
            </script>

            <div class="bx-ui-sls-error-message">
            </div>

        </div>


    </div>
    <div class="modal fade orderStatus" id="orderStatus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            </div>
        </div>
    </div>
    <div class="modal fade availableStore" id="availableStore" tabindex="-1" role="dialog"
         aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            </div>
        </div>
    </div>
    <div class="modal fade modalBuy" id="modalBuy" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <br>
                        <div class="h4 modal-title">Товар добавлен в корзину</div>
                    </div>
                    <div class="modal-body">
                        <span class="move_basket">Товар перемещен из Списка желаний в Корзину!<br></span>
                    </div>
                    <div class="modal-footer container-fluid row">
                        <div class="col-lg-6">
                            <button type="button" data-dismiss="modal" class="btn btn-default continue w100">ПРОДОЛЖИТЬ
                                ПОКУПКИ
                            </button>
                        </div>
                        <div class="col-lg-6">
                            <button onclick="location.href='/cart/';" type="button" class="btn btn-primary w100">
                                ОФОРМИТЬ
                                ЗАКАЗ
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade modalFavorit" id="modalFavorit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <br>
                        <div class="h4 modal-title">Товар добавлен в список желаний</div>
                    </div>
                    <div class="modal-body">
                        <span class="move_wish">Товар перемещен из Корзины в Список желаний!<br></span><span>Вы всегда можете посмотреть его в Личном кабинете!</span>
                    </div>
                    <div class="modal-footer container-fluid row">
                        <div class="col-lg-6">
                            <button type="button" data-dismiss="modal" class="btn btn-default continue w100">ПРОДОЛЖИТЬ
                                ПОКУПКИ
                            </button>
                        </div>
                        <div class="col-lg-6">
                            <button onclick="location.href='/personal/wish-list/';" type="button"
                                    class="btn btn-primary w100">СПИСОК ЖЕЛАНИЙ
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade modalCompare" id="modalCompare" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <br>
                        <div class="h4 modal-title">Товар добавлен в сравнение</div>
                    </div>
                    <div class="modal-body"></div>
                    <div class="modal-footer container-fluid row">
                        <div class="col-lg-6">
                            <button type="button" data-dismiss="modal" class="btn btn-default continue w100">ПРОДОЛЖИТЬ
                                ПОКУПКИ
                            </button>
                        </div>
                        <div class="col-lg-6">
                            <button onclick="location.href='/compare/';" type="button" class="btn btn-primary w100">
                                СПИСОК
                                СРАВНЕНИЯ
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @push('scripts')
        <script type="text/javascript"
                src="{{ asset('js/components/city.selector/script.min.js') }}"></script>
        <script type="text/javascript"
                src="{{ asset('js/components/sale.basket/script.min.js') }}"></script>
        <script type="text/javascript"
                src="{{ asset('js/components/system.auth.form/script.min.js') }}"></script>
        <script type="text/javascript"
                src="{{ asset('js/components/bx_main.register/script.min.js') }}"></script>
        <script type="text/javascript"
                src="{{ asset('js/components/search.title/script.min.js') }}"></script>
        <script type="text/javascript"
                src="{{ asset('js/components/search.title/top_search/script.min.js') }}"></script>
        <script type="text/javascript"
                src="{{ asset('js/components/filials.contact_info/script.min.js') }}"></script>
        <script type="text/javascript"
                src="{{ asset('js/components/menu/script.min.js') }}"></script>
        <script type="text/javascript"
                src="{{ asset('js/components/sale.location/script.min.js') }}"></script>
        <script type="text/javascript"
                src="{{ asset('js/components/news.list/script.min.js') }}"></script>
        <script type="text/javascript"
                src="{{ asset('js/components/bx_catalog.top/script.js') }}"></script>
        <script type="text/javascript"
                src="{{ asset('js/components/catalog.selected_in_cart/script.min.js') }}"></script>
    @endpush
    @push('scripts')
        <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/device.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.mobile.touch.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/carusel.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.mask.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/select2/select2.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/select2/ru.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.validate.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/main.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/main_prog.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/spinner.min.js') }}"></script>
    @endpush
    @push('scripts')
        <script type="text/javascript">var _ba = _ba || [];
            _ba.push(["aid", "73969e1ac792d178f19f895ffdedd1ae"]);
            _ba.push(["host", "kazan.teplo.ru"]);
            (function () {
                var ba = document.createElement("script");
                ba.type = "text/javascript";
                ba.async = true;
                ba.src = (document.location.protocol == "https:" ? "https://" : "http://") + "bitrix.info/ba.js";
                var s = document.getElementsByTagName("script")[0];
                s.parentNode.insertBefore(ba, s);
            })();</script>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <script>
            (function (w, d) {
                var xhr = new XMLHttpRequest(),
                    s = d.createElement("script"),
                    f = document.body.firstChild;
                s.type = "text/javascript";
                s.async = true;
                s.setAttribute("id", "81bcfec71601e830722578f5c3ee61ab");
                f.parentNode.insertBefore(s, f);
                xhr.onreadystatechange = function () {
                    if (this.readyState === 4 && this.status === 200) {
                        d.getElementById("81bcfec71601e830722578f5c3ee61ab").innerHTML = this.responseText;
                    }
                };
                xhr.open("GET", "https://sovetnik-off.ru/block/81bcfec71601e830722578f5c3ee61ab");
                xhr.send();
            })(window, document);</script>
        <script type="text/javascript">(function (d, w, c) {
                (w[c] = w[c] || []).push(function () {
                    try {
                        //Новая Позитроника
                        w.yaCounter23730472 = new Ya.Metrika({
                            id: 23730472,
                            clickmap: true,
                            trackLinks: true,
                            accurateTrackBounce: true,
                            webvisor: true,
                            ecommerce: "dataLayer"
                        });
                        //Вся Позитроника
                        w.yaCounter18705514 = new Ya.Metrika({
                            id: 18705514,
                            clickmap: true,
                            trackLinks: true,
                            accurateTrackBounce: true,
                            webvisor: true,
                            ecommerce: "dataLayer"
                        });
                    } catch (e) {
                    }
                });
                var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () {
                    n.parentNode.insertBefore(s, n);
                };
                s.type = "text/javascript";
                s.async = true;
                s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";
                if (w.opera == "[object Opera]") {
                    d.addEventListener("DOMContentLoaded", f, false);
                } else {
                    f();
                }
            })(document, window, "yandex_metrika_callbacks");</script>
        <script src="//mc.yandex.ru/metrika/watch.js" type="text/javascript" defer="defer"></script>
        <script type="text/javascript">
            window.dataLayer = window.dataLayer || [];
        </script>
        <script>(function (w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({
                    'gtm.start':
                        new Date().getTime(), event: 'gtm.js'
                });
                var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
                j.async = true;
                j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', 'GTM-NWFVFQF');</script>
        <script type="text/javascript">

            var _tmr = window._tmr || (window._tmr = []);

            _tmr.push({id: "2939096", type: "pageView", start: (new Date()).getTime()});

            (function (d, w, id) {

                if (d.getElementById(id)) return;

                var ts = d.createElement("script");
                ts.type = "text/javascript";
                ts.async = true;
                ts.id = id;

                ts.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//top-fwz1.mail.ru/js/code.js";

                var f = function () {
                    var s = d.getElementsByTagName("script")[0];
                    s.parentNode.insertBefore(ts, s);
                };

                if (w.opera == "[object Opera]") {
                    d.addEventListener("DOMContentLoaded", f, false);
                } else {
                    f();
                }

            })(document, window, "topmailru-code");

        </script>
        <script>
            var productPrice = 'VALUE';
        </script>
        <script type="text/javascript">
            var _tmr = _tmr || [];
            _tmr.push({
                type: 'itemView',
                productid: 'VALUE',
                pagetype: 'main',
                list: '1',
                totalvalue: productPrice
            });
        </script>
        <script>
            var allCityLinks = {
                'key': ['А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ж', 'З', 'И', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ч', 'Щ', 'Ю', 'Я'],
                'city': [{
                    'text': 'Алакуртти',
                    'action': '212',
                    'id': '212',
                    'url': 'alakurtti.teplo.ru'
                }, {'text': 'Александров', 'action': '7', 'id': '7', 'url': 'aleksandrov.teplo.ru'}, {
                    'text': 'Алушта',
                    'action': '366',
                    'id': '366',
                    'url': 'alushta.teplo.ru'
                }, {'text': 'Амурский', 'action': '5643', 'id': '5643', 'url': 'biysk.teplo.ru'}, {
                    'text': 'Анапа',
                    'action': '10',
                    'id': '10',
                    'url': 'anapa.teplo.ru'
                }, {'text': 'Апатиты', 'action': '13', 'id': '13', 'url': 'apatity.teplo.ru'}, {
                    'text': 'Армавир',
                    'action': '5091',
                    'id': '5091',
                    'url': 'armavir.teplo.ru'
                }, {'text': 'Архангельск', 'action': '17', 'id': '17', 'url': 'arkhangelsk.teplo.ru'}, {
                    'text': 'Асбест',
                    'action': '5507',
                    'id': '5507',
                    'url': 'asbest.teplo.ru'
                }, {'text': 'Астрахань', 'action': '19', 'id': '19', 'url': 'astrakhan.teplo.ru'}, {
                    'text': 'Бабаево',
                    'action': '22',
                    'id': '22',
                    'url': 'babaevo.teplo.ru'
                }, {'text': 'Балаково', 'action': '24', 'id': '24', 'url': 'balakovo.teplo.ru'}, {
                    'text': 'Балахна',
                    'action': '26',
                    'id': '26',
                    'url': 'balakhna.teplo.ru'
                }, {'text': 'Барнаул', 'action': '28', 'id': '28', 'url': 'barnaul.teplo.ru'}, {
                    'text': 'Бийск',
                    'action': '32',
                    'id': '32',
                    'url': 'biysk.teplo.ru'
                }, {'text': 'Ботлих', 'action': '5637', 'id': '5637', 'url': 'botlih.teplo.ru'}, {
                    'text': 'Бузулук',
                    'action': '799',
                    'id': '799',
                    'url': 'buzuluk.teplo.ru'
                }, {
                    'text': 'Варениковская',
                    'action': '35',
                    'id': '35',
                    'url': 'varenikovskaya.teplo.ru'
                }, {'text': 'Великий Устюг', 'action': '37', 'id': '37', 'url': 'vustug.teplo.ru'}, {
                    'text': 'Вельск',
                    'action': '39',
                    'id': '39',
                    'url': 'velsk.teplo.ru'
                }, {
                    'text': 'Владивосток',
                    'action': '5149',
                    'id': '5149',
                    'url': 'vladivostok.teplo.ru'
                }, {
                    'text': 'Владикавказ',
                    'action': '41',
                    'id': '41',
                    'url': 'vladikavkaz.teplo.ru'
                }, {'text': 'Владимир', 'action': '962', 'id': '962', 'url': 'vladimir.teplo.ru'}, {
                    'text': 'Волгоград',
                    'action': '984',
                    'id': '984',
                    'url': 'volgograd.teplo.ru'
                }, {'text': 'Вологда', 'action': '42', 'id': '42', 'url': 'vologda.teplo.ru'}, {
                    'text': 'Воркута',
                    'action': '1008',
                    'id': '1008',
                    'url': 'sivtivkar.teplo.ru'
                }, {
                    'text': 'Воронеж',
                    'action': '1011',
                    'id': '1011',
                    'url': 'voronezh.teplo.ru'
                }, {
                    'text': 'Воскресенское',
                    'action': '45',
                    'id': '45',
                    'url': 'voskresenskoe.teplo.ru'
                }, {'text': 'Выборг', 'action': '1052', 'id': '1052', 'url': 'vyborg.teplo.ru'}, {
                    'text': 'Вязьма',
                    'action': '48',
                    'id': '48',
                    'url': 'vyazma.teplo.ru'
                }, {
                    'text': 'Геленджик',
                    'action': '49',
                    'id': '49',
                    'url': 'gelendjik.teplo.ru'
                }, {
                    'text': 'Горно-Алтайск',
                    'action': '214',
                    'id': '214',
                    'url': 'gorno-altaisk.teplo.ru'
                }, {'text': 'Грозный', 'action': '3092', 'id': '3092', 'url': 'grozniy.teplo.ru'}, {
                    'text': 'Дербент',
                    'action': '1357',
                    'id': '1357',
                    'url': 'derbent.teplo.ru'
                }, {
                    'text': 'Динская',
                    'action': '5196',
                    'id': '5196',
                    'url': 'dinskaya.teplo.ru'
                }, {
                    'text': 'Долгопрудный',
                    'action': '1393',
                    'id': '1393',
                    'url': 'dolgoprudnyy.teplo.ru'
                }, {'text': 'Ейск', 'action': '54', 'id': '54', 'url': 'yeysk.teplo.ru'}, {
                    'text': 'Екатеринбург',
                    'action': '56',
                    'id': '56',
                    'url': 'ekaterinburg.teplo.ru'
                }, {
                    'text': 'Железногорск',
                    'action': '58',
                    'id': '58',
                    'url': 'zhceleznogorsk.teplo.ru'
                }, {
                    'text': 'Зеленоборский',
                    'action': '5620',
                    'id': '5620',
                    'url': 'zelenoborsiy.teplo.ru'
                }, {
                    'text': 'Златоуст',
                    'action': '1690',
                    'id': '1690',
                    'url': 'zlatoust.teplo.ru'
                }, {
                    'text': 'Ивантеевка',
                    'action': '1730',
                    'id': '1730',
                    'url': 'ivanteevka.teplo.ru'
                }, {'text': 'Исаклы', 'action': '66', 'id': '66', 'url': 'isakly.teplo.ru'}, {
                    'text': 'Казань',
                    'action': '1832',
                    'id': '1832',
                    'url': 'kazan.teplo.ru'
                }, {'text': 'Калуга', 'action': '72', 'id': '72', 'url': 'kaluga.teplo.ru'}, {
                    'text': 'Камышин',
                    'action': '74',
                    'id': '74',
                    'url': 'kamyshin.teplo.ru'
                }, {'text': 'Кандалакша', 'action': '215', 'id': '215', 'url': 'kandalaksha.teplo.ru'}, {
                    'text': 'Кашира',
                    'action': '76',
                    'id': '76',
                    'url': 'kashira.teplo.ru'
                }, {'text': 'Кинель', 'action': '77', 'id': '77', 'url': 'kinel.teplo.ru'}, {
                    'text': 'Киржач',
                    'action': '79',
                    'id': '79',
                    'url': 'kirjach.teplo.ru'
                }, {'text': 'Кириллов', 'action': '81', 'id': '81', 'url': 'kirillov.teplo.ru'}, {
                    'text': 'Кириши',
                    'action': '84',
                    'id': '84',
                    'url': 'kirishi.teplo.ru'
                }, {'text': 'Киров', 'action': '86', 'id': '86', 'url': 'kirov.teplo.ru'}, {
                    'text': 'Кировск',
                    'action': '1967',
                    'id': '1967',
                    'url': 'kirovsk.teplo.ru'
                }, {
                    'text': 'Кичменгский Городок',
                    'action': '88',
                    'id': '88',
                    'url': 'kichmengorod.teplo.ru'
                }, {'text': 'Ковдор', 'action': '90', 'id': '90', 'url': 'kovdor.teplo.ru'}, {
                    'text': 'Коломна',
                    'action': '91',
                    'id': '91',
                    'url': 'kolomna.teplo.ru'
                }, {'text': 'Кольчугино', 'action': '93', 'id': '93', 'url': 'kolchugino.teplo.ru'}, {
                    'text': 'Кондопога',
                    'action': '2060',
                    'id': '2060',
                    'url': 'kondopoga.teplo.ru'
                }, {'text': 'Копейск', 'action': '2083', 'id': '2083', 'url': 'kopeisk.teplo.ru'}, {
                    'text': 'Коркино',
                    'action': '2097',
                    'id': '2097',
                    'url': 'korkino.teplo.ru'
                }, {'text': 'Королев', 'action': '2110', 'id': '2110', 'url': 'korolev.teplo.ru'}, {
                    'text': 'Краснодар',
                    'action': '96',
                    'id': '96',
                    'url': 'krasnodar.teplo.ru'
                }, {'text': 'Красный Яр', 'action': '98', 'id': '98', 'url': 'samara.teplo.ru'}, {
                    'text': 'Крымск',
                    'action': '101',
                    'id': '101',
                    'url': 'krimsk.teplo.ru'
                }, {'text': 'Кубинка', 'action': '2253', 'id': '2253', 'url': 'kubinka.teplo.ru'}, {
                    'text': 'Лобня',
                    'action': '2447',
                    'id': '2447',
                    'url': 'lobnya.teplo.ru'
                }, {
                    'text': 'Ловозеро',
                    'action': '5616',
                    'id': '5616',
                    'url': 'lovozero.teplo.ru'
                }, {
                    'text': 'Лодейное Поле',
                    'action': '108',
                    'id': '108',
                    'url': 'lodeynoye-pole.teplo.ru'
                }, {'text': 'Луза', 'action': '110', 'id': '110', 'url': 'luza.teplo.ru'}, {
                    'text': 'Магадан',
                    'action': '2523',
                    'id': '2523',
                    'url': 'magadan.teplo.ru'
                }, {'text': 'Магас', 'action': '3069', 'id': '3069', 'url': 'nazran.teplo.ru'}, {
                    'text': 'Майкоп',
                    'action': '2528',
                    'id': '2528',
                    'url': 'maykop.teplo.ru'
                }, {
                    'text': 'Махачкала',
                    'action': '2637',
                    'id': '2637',
                    'url': 'mahachkala.teplo.ru'
                }, {'text': 'Междуреченский', 'action': '5639', 'id': '5639', 'url': 'uray.teplo.ru'}, {
                    'text': 'Миасс',
                    'action': '2686',
                    'id': '2686',
                    'url': 'miass.teplo.ru'
                }, {'text': 'Мончегорск', 'action': '115', 'id': '115', 'url': 'monchegorsk.teplo.ru'}, {
                    'text': 'Москва',
                    'action': '116',
                    'id': '116',
                    'url': ''
                }, {
                    'text': 'Муравленко',
                    'action': '5496',
                    'id': '5496',
                    'url': 'muravlenko.teplo.ru'
                }, {'text': 'Мурманск', 'action': '2781', 'id': '2781', 'url': 'murmansk.teplo.ru'}, {
                    'text': 'Мытищи',
                    'action': '2792',
                    'id': '2792',
                    'url': 'mitishi.teplo.ru'
                }, {
                    'text': 'Набережные Челны',
                    'action': '118',
                    'id': '118',
                    'url': 'nchelny.teplo.ru'
                }, {'text': 'Назрань', 'action': '217', 'id': '217', 'url': 'nazran.teplo.ru'}, {
                    'text': 'Нарьян-Мар',
                    'action': '122',
                    'id': '122',
                    'url': 'naryan-mar.teplo.ru'
                }, {'text': 'Невинномысск', 'action': '124', 'id': '124', 'url': 'nmyssk.teplo.ru'}, {
                    'text': 'Нерехта',
                    'action': '2861',
                    'id': '2861',
                    'url': 'nerekhta.teplo.ru'
                }, {
                    'text': 'Нижневартовск',
                    'action': '125',
                    'id': '125',
                    'url': 'nizhcnevartovsk.teplo.ru'
                }, {
                    'text': 'Нижний Новгород',
                    'action': '2886',
                    'id': '2886',
                    'url': 'nijniy-novgorod.teplo.ru'
                }, {
                    'text': 'Новокуйбышевск',
                    'action': '126',
                    'id': '126',
                    'url': 'novokuibyshevsk.teplo.ru'
                }, {
                    'text': 'Новомосковск',
                    'action': '129',
                    'id': '129',
                    'url': 'novomoskovsk.teplo.ru'
                }, {
                    'text': 'Новопокровская',
                    'action': '5411',
                    'id': '5411',
                    'url': 'novopokrovskaya.teplo.ru'
                }, {
                    'text': 'Новороссийск',
                    'action': '130',
                    'id': '130',
                    'url': 'novorossiysk.teplo.ru'
                }, {
                    'text': 'Новоуральск',
                    'action': '131',
                    'id': '131',
                    'url': 'novouralsk.teplo.ru'
                }, {'text': 'Обливская', 'action': '5677', 'id': '5677', 'url': 'oblivskaya.teplo.ru'}, {
                    'text': 'Озерск',
                    'action': '133',
                    'id': '133',
                    'url': 'ozersk.teplo.ru'
                }, {'text': 'Омск', 'action': '3178', 'id': '3178', 'url': 'omsk.teplo.ru'}, {
                    'text': 'Оренбург',
                    'action': '3199',
                    'id': '3199',
                    'url': 'orenburg.teplo.ru'
                }, {'text': 'Пангоды', 'action': '136', 'id': '136', 'url': 'pangody.teplo.ru'}, {
                    'text': 'Петрозаводск',
                    'action': '138',
                    'id': '138',
                    'url': 'petrozavodsk.teplo.ru'
                }, {'text': 'Печора', 'action': '142', 'id': '142', 'url': 'pechora.teplo.ru'}, {
                    'text': 'Пикалево',
                    'action': '144',
                    'id': '144',
                    'url': 'pikalevo.teplo.ru'
                }, {
                    'text': 'Полярные Зори',
                    'action': '145',
                    'id': '145',
                    'url': 'polyarnye-zori.teplo.ru'
                }, {'text': 'Приозерск', 'action': '147', 'id': '147', 'url': 'priozersk.teplo.ru'}, {
                    'text': 'Пушкино',
                    'action': '151',
                    'id': '151',
                    'url': 'pushkino.teplo.ru'
                }, {'text': 'Ревда', 'action': '5673', 'id': '5673', 'url': 'revda.teplo.ru'}, {
                    'text': 'Ростов-на-Дону',
                    'action': '3753',
                    'id': '3753',
                    'url': 'rostov-na-donu.teplo.ru'
                }, {'text': 'Самара', 'action': '157', 'id': '157', 'url': 'samara.teplo.ru'}, {
                    'text': 'Санкт-Петербург',
                    'action': '99',
                    'id': '99',
                    'url': 'spb.teplo.ru'
                }, {'text': 'Саракташ', 'action': '160', 'id': '160', 'url': 'saraktash.teplo.ru'}, {
                    'text': 'Сасово',
                    'action': '162',
                    'id': '162',
                    'url': 'sasovo.teplo.ru'
                }, {'text': 'Сатка', 'action': '3876', 'id': '3876', 'url': 'satka.teplo.ru'}, {
                    'text': 'Северодвинск',
                    'action': '163',
                    'id': '163',
                    'url': 'severodvinsk.teplo.ru'
                }, {'text': 'Сегежа', 'action': '167', 'id': '167', 'url': 'segezha.teplo.ru'}, {
                    'text': 'Сергиев Посад',
                    'action': '3984',
                    'id': '3984',
                    'url': 'sergiev-posad.teplo.ru'
                }, {'text': 'Серов', 'action': '5543', 'id': '5543', 'url': 'serov.teplo.ru'}, {
                    'text': 'Серпухов',
                    'action': '168',
                    'id': '168',
                    'url': 'serpuhov.teplo.ru'
                }, {
                    'text': 'Славянск-на-Кубани',
                    'action': '4048',
                    'id': '4048',
                    'url': 'slavyansk.teplo.ru'
                }, {'text': 'Сокол', 'action': '172', 'id': '172', 'url': 'sokol.teplo.ru'}, {
                    'text': 'Сортавала',
                    'action': '5635',
                    'id': '5635',
                    'url': 'sortavala.teplo.ru'
                }, {
                    'text': 'Старотитаровская',
                    'action': '4225',
                    'id': '4225',
                    'url': 'temruk.teplo.ru'
                }, {'text': 'Ступино', 'action': '4279', 'id': '4279', 'url': 'stupino.teplo.ru'}, {
                    'text': 'Таганрог',
                    'action': '175',
                    'id': '175',
                    'url': 'taganrog.teplo.ru'
                }, {
                    'text': 'Талица',
                    'action': '5613',
                    'id': '5613',
                    'url': 'talitsa.teplo.ru'
                }, {
                    'text': 'Тарногский Городок',
                    'action': '177',
                    'id': '177',
                    'url': 'tarnogskiy_gorodok.teplo.ru'
                }, {'text': 'Темрюк', 'action': '179', 'id': '179', 'url': 'temruk.teplo.ru'}, {
                    'text': 'Тимашевск',
                    'action': '4420',
                    'id': '4420',
                    'url': 'timashevsk.teplo.ru'
                }, {'text': 'Тихорецк', 'action': '4440', 'id': '4440', 'url': 'tikhoretsk.teplo.ru'}, {
                    'text': 'Тотьма',
                    'action': '181',
                    'id': '181',
                    'url': 'totma.teplo.ru'
                }, {'text': 'Тула', 'action': '4516', 'id': '4516', 'url': 'tyla.teplo.ru'}, {
                    'text': 'Тучково',
                    'action': '185',
                    'id': '185',
                    'url': 'tuchkovo.teplo.ru'
                }, {'text': 'Тюмень', 'action': '187', 'id': '187', 'url': 'tumen.teplo.ru'}, {
                    'text': 'Ульяновск',
                    'action': '191',
                    'id': '191',
                    'url': 'ulianovsk.teplo.ru'
                }, {'text': 'Умба', 'action': '193', 'id': '193', 'url': 'umba.teplo.ru'}, {
                    'text': 'Урай',
                    'action': '5462',
                    'id': '5462',
                    'url': 'uray.teplo.ru'
                }, {
                    'text': 'Усолье-Сибирское',
                    'action': '194',
                    'id': '194',
                    'url': 'usolie-sibirskoe.teplo.ru'
                }, {'text': 'Усть-Лабинск', 'action': '4601', 'id': '4601', 'url': 'krasnodar.teplo.ru'}, {
                    'text': 'Уфа',
                    'action': '4607',
                    'id': '4607',
                    'url': 'ufa.teplo.ru'
                }, {'text': 'Фрязино', 'action': '4679', 'id': '4679', 'url': 'fryazino.teplo.ru'}, {
                    'text': 'Хабаровск',
                    'action': '197',
                    'id': '197',
                    'url': 'habarovsk.teplo.ru'
                }, {'text': 'Чагода', 'action': '199', 'id': '199', 'url': 'chagoda.teplo.ru'}, {
                    'text': 'Чапаевск',
                    'action': '4772',
                    'id': '4772',
                    'url': 'samara.teplo.ru'
                }, {'text': 'Чегдомын', 'action': '201', 'id': '201', 'url': 'chegdomyn.teplo.ru'}, {
                    'text': 'Челябинск',
                    'action': '4789',
                    'id': '4789',
                    'url': 'chelabinsk.teplo.ru'
                }, {
                    'text': 'Череповец',
                    'action': '202',
                    'id': '202',
                    'url': 'cherepovets.teplo.ru'
                }, {
                    'text': 'Черкесск',
                    'action': '4800',
                    'id': '4800',
                    'url': 'cherkessk.teplo.ru'
                }, {
                    'text': 'Черноголовка',
                    'action': '203',
                    'id': '203',
                    'url': 'chernogolovka.teplo.ru'
                }, {
                    'text': 'Черноморское',
                    'action': '5645',
                    'id': '5645',
                    'url': 'chernomorskoe.teplo.ru'
                }, {'text': 'Щелково', 'action': '4964', 'id': '4964', 'url': 'sholkovo.teplo.ru'}, {
                    'text': 'Щигры',
                    'action': '204',
                    'id': '204',
                    'url': 'schigry.teplo.ru'
                }, {'text': 'Юбилейный', 'action': '4986', 'id': '4986', 'url': ''}, {
                    'text': 'Южно-Сахалинск',
                    'action': '206',
                    'id': '206',
                    'url': 'yuzhno-sakhalinsk.teplo.ru'
                }, {'text': 'Якутск', 'action': '5432', 'id': '5432', 'url': 'yakutsk.teplo.ru'}, {
                    'text': 'Ялта',
                    'action': '5043',
                    'id': '5043',
                    'url': 'yalta.teplo.ru'
                }, {'text': 'Ярославль', 'action': '211', 'id': '211', 'url': 'yaroslavl.teplo.ru'}]
            };
            var baseHost = 'teplo.ru';
        </script>
        <script type="text/javascript">
            var bx_basket_small_top =
                new BitrixSmallCart;
            bx_basket_small_top.siteId = 's1';
            bx_basket_small_top.cartId = 'bx_basket_small_top';
            bx_basket_small_top.ajaxPath = '/bitrix/components/bitrix/sale.basket.basket.line/ajax.php';
            bx_basket_small_top.templateName = 'mini_top';
            bx_basket_small_top.arParams = {
                'HIDE_ON_BASKET_PAGES': 'N',
                'PATH_TO_BASKET': '/personal/cart/',
                'PATH_TO_ORDER': '/personal/order/make/',
                'PATH_TO_PERSONAL': '/personal/',
                'PATH_TO_PROFILE': '/personal/',
                'PATH_TO_REGISTER': '/login/',
                'POSITION_FIXED': 'N',
                'POSITION_HORIZONTAL': 'right',
                'POSITION_VERTICAL': 'top',
                'SHOW_AUTHOR': 'N',
                'SHOW_DELAY': 'N',
                'SHOW_EMPTY_VALUES': 'Y',
                'SHOW_IMAGE': 'Y',
                'SHOW_NOTAVAIL': 'N',
                'SHOW_NUM_PRODUCTS': 'Y',
                'SHOW_PERSONAL_LINK': 'N',
                'SHOW_PRICE': 'Y',
                'SHOW_PRODUCTS': 'Y',
                'SHOW_SUBSCRIBE': 'N',
                'SHOW_SUMMARY': 'Y',
                'SHOW_TOTAL_PRICE': 'Y',
                'COMPONENT_TEMPLATE': '.default',
                'CACHE_TYPE': 'A',
                'SHOW_REGISTRATION': 'N',
                'PATH_TO_AUTHORIZE': '/login/',
                'MAX_IMAGE_SIZE': '70',
                'AJAX': 'N',
                '~HIDE_ON_BASKET_PAGES': 'N',
                '~PATH_TO_BASKET': '/personal/cart/',
                '~PATH_TO_ORDER': '/personal/order/make/',
                '~PATH_TO_PERSONAL': '/personal/',
                '~PATH_TO_PROFILE': '/personal/',
                '~PATH_TO_REGISTER': '/login/',
                '~POSITION_FIXED': 'N',
                '~POSITION_HORIZONTAL': 'right',
                '~POSITION_VERTICAL': 'top',
                '~SHOW_AUTHOR': 'N',
                '~SHOW_DELAY': 'N',
                '~SHOW_EMPTY_VALUES': 'Y',
                '~SHOW_IMAGE': 'Y',
                '~SHOW_NOTAVAIL': 'N',
                '~SHOW_NUM_PRODUCTS': 'Y',
                '~SHOW_PERSONAL_LINK': 'N',
                '~SHOW_PRICE': 'Y',
                '~SHOW_PRODUCTS': 'Y',
                '~SHOW_SUBSCRIBE': 'N',
                '~SHOW_SUMMARY': 'Y',
                '~SHOW_TOTAL_PRICE': 'Y',
                '~COMPONENT_TEMPLATE': '.default',
                '~CACHE_TYPE': 'A',
                '~SHOW_REGISTRATION': 'N',
                '~PATH_TO_AUTHORIZE': '/login/',
                '~MAX_IMAGE_SIZE': '70',
                '~AJAX': 'N',
                'cartId': 'bx_basket_small_top'
            };
        </script>
        <script>
            $(document).ready(function () {
                $('#recoveryAuth').click(function () {
                    var pwd = $('.logon #login #loginPassword'),
                        is_disabled = pwd.is(":disabled");
                    $("#alertBlockWrongPass").css('display', 'none');
                    $('.logon #login *[data-alternative]').each(function () {
                        var _tmp_text = $(this).text();
                        $(this).text($(this).data("alternative"))
                            .data("alternative", _tmp_text);
                    });

                    if (is_disabled) {
                        pwd.attr("disabled", false)
                            .closest(".form-group").removeClass("hidden");
                        $('.logon input[name="TYPE"]').val('AUTH');
                        $('.logon button[type="submit"]').attr('name', 'enter_sbmt')
                    } else {
                        pwd.attr("disabled", true)
                            .closest(".form-group").addClass("hidden");
                        $('.logon input[name="TYPE"]').val('SEND_PWD');
                        $('.logon button[type="submit"]').attr('name', 'send_account_info')
                    }

                });
            });
        </script>
        <script>
            BX.ready(function () {
                new JCTitleSearch({
                    'AJAX_PAGE': '/',
                    'CONTAINER_ID': 'title-search',
                    'INPUT_ID': 'title-search-input',
                    'MIN_QUERY_LEN': 2
                });
            });
        </script>
        <script>
            var idInBasketFav = [];
            var idInBasketBuy = [];
            var idCompare = [];
            var catalogReCalc = false;
        </script>
        <script>

            if (!window.BX && top.BX)
                window.BX = top.BX;


            if (typeof window.BX.locationSelectors == 'undefined') window.BX.locationSelectors = {};
            window.BX.locationSelectors['lolka'] =

                new BX.Sale.component.location.selector.search({
                    'scope': 'sls-66237',
                    'source': '/bitrix/components/bitrix/sale.location.selector.search/get.php',
                    'query': {
                        'FILTER': {'EXCLUDE_ID': 0, 'SITE_ID': ''},
                        'BEHAVIOUR': {'SEARCH_BY_PRIMARY': '0', 'LANGUAGE_ID': 'ru'}
                    },
                    'selectedItem': false,
                    'knownItems': [],
                    'provideLinkBy': 'id',
                    'messages': {
                        'nothingFound': 'К сожалению, ничего не найдено',
                        'error': 'К сожалению, произошла внутренняя ошибка'
                    },
                    'callback': 'locationUpdated',
                    'useSpawn': false,
                    'initializeByGlobalEvent': '',
                    'globalEventScope': '',
                    'pathNames': [],
                    'types': {
                        '1': {'CODE': 'COUNTRY'},
                        '2': {'CODE': 'COUNTRY_DISTRICT'},
                        '3': {'CODE': 'REGION'},
                        '4': {'CODE': 'SUBREGION'},
                        '5': {'CODE': 'CITY'},
                        '6': {'CODE': 'VILLAGE'},
                        '7': {'CODE': 'STREET'}
                    }
                });


        </script>
    @endpush
@endsection
