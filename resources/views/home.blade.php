@extends('layouts.app')
@section('title',"Бытовая техника и электроника в Казани - интернет-магазин Позитроника")
@section('description','Интернет-магазин Позитроника предлагает большой выбор электроники и бытовой техники по выгодным ценам в Казани')

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
                        <div class="panel-body dropdown open " id="menu">
                            <ul class="dropdown-menu dropdown-submenu pz_menu">
                                <li class="dropdown dropdown-submenu">
                                    <a class="dropdown-toggle pztele"
                                       data-toggle="dropdown">Телевизоры и аудиотехника</a>
                                    <div class="dropdown-menu">
                                        <ul class="block-text">
                                            <li><a>Телевизоры</a>
                                                <ul>
                                                    <li><a href="/catalog/televizory/">Телевизоры</a></li>
                                                </ul>
                                            </li>
                                            <li><a>Аксессуары</a>
                                                <ul>
                                                    <li><a href="/catalog/kronshtejny_tv/">Кронштейны для
                                                            телевизоров</a>
                                                    </li>
                                                    <li><a href="/catalog/kronshtejny_dvd/">Кронштейны для DVD и
                                                            Акустики</a></li>
                                                    <li><a href="/catalog/teleantenna/">Телевизионные антенны</a></li>
                                                    <li><a href="/catalog/kabeli/">Кабели для аудио- и видеотехники</a>
                                                    </li>
                                                    <li><a href="/catalog/pulty_du/">Пульты ДУ</a></li>
                                                    <li><a href="/catalog/zaryadnye_ustrojstva/">Аккумуляторы и
                                                            батарейки</a></li>
                                                </ul>
                                            </li>
                                            <li><a>Плееры и цифровое ТВ</a>
                                                <ul>
                                                    <li><a href="/catalog/resivery/">DVB-T2 приставки</a></li>
                                                    <li><a href="/catalog/dvb_c_pristavki/">DVB-C приставки</a></li>
                                                    <li><a href="/catalog/dvd-pleery/">DVD плееры</a></li>
                                                    <li><a href="/catalog/dvbs/">Спутниковое ТВ</a></li>
                                                    <li><a href="/catalog/portativnye_dvd/">Портативные плееры</a></li>
                                                    <li><a href="/catalog/mediapleery/">Медиаплееры</a></li>
                                                </ul>
                                            </li>
                                            <li><a>Проекторы и экраны</a>
                                                <ul>
                                                    <li><a href="/catalog/proektory/">Проекторы</a></li>
                                                    <li><a href="/catalog/ekrany/">Проекционные экраны</a></li>
                                                    <li><a href="/catalog/kronshtejny_pj/">Кронштейны для проекторов</a>
                                                    </li>
                                                    <li><a href="/catalog/prezentery/">Презентеры</a></li>
                                                    <li><a href="/catalog/lampproektor/">Аксессуары для проекторов</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a>Аудиотехника</a>
                                                <ul>
                                                    <li><a href="/catalog/magnitoly/">Магнитолы</a></li>
                                                    <li><a href="/catalog/muzykalnye_centry/">Музыкальные центры</a>
                                                    </li>
                                                    <li><a href="/catalog/radiobudilniki/">Радиобудильники</a></li>
                                                    <li><a href="/catalog/radiopriemniki/">Радиоприемники</a></li>
                                                    <li><a href="/catalog/domashnie_kinoteatry/">Домашние кинотеатры</a>
                                                    </li>
                                                    <li><a href="/catalog/zvukovye_proectory/">Звуковые панели</a></li>
                                                </ul>
                                            </li>
                                            <li><a>Плееры и диктофоны</a>
                                                <ul>
                                                    <li><a href="/catalog/diktofony/">Диктофоны</a></li>
                                                    <li><a href="/catalog/mp3_pleery/">Плееры MP3</a></li>
                                                    <li><a href="/catalog/chehli_portativnoj_audiotexniki/">Чехлы для
                                                            портативной электроники</a></li>
                                                </ul>
                                            </li>
                                            <li><a>HI-FI Компоненты</a>
                                                <ul>
                                                    <li><a href="/catalog/acoustic_hifi/">Акустические системы Hi-Fi</a>
                                                    </li>
                                                    <li><a href="/catalog/subwoofer_hifi/">Сабвуферы Hi-Fi</a></li>
                                                    <li><a href="/catalog/resiveryhifi/">Ресиверы Hi-Fi</a></li>
                                                    <li><a href="/catalog/usiliteli/">Усилители Hi-Fi</a></li>
                                                    <li><a href="/catalog/turntables/">Проигрыватели винила</a></li>
                                                </ul>
                                            </li>
                                            <li><a>Игровые приставки</a>
                                                <ul>
                                                    <li><a href="/catalog/igrovye_pristavki/">Игровые приставки</a></li>
                                                    <li><a href="/catalog/accesspristavka/">Аксессуары для игровых
                                                            приставок</a></li>
                                                </ul>
                                            </li>
                                            <li><a>Музыкальные инструменты</a>
                                                <ul>
                                                    <li><a href="/catalog/synths/">Синтезаторы</a></li>
                                                    <li><a href="/catalog/professional_acoustics/">Акустические
                                                            комплекты</a></li>
                                                    <li><a href="/catalog/dj_consoles/">Микшерные пульты</a></li>
                                                    <li><a href="/catalog/musicaccessories/">Аксессуары для ЭМИ</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <div class="info visible-lg">
                                            <ul>

                                                <li class="first">
                                                    <div class="thumbnail">
                                                        <img src="//opt-860641.ssl.1c-bitrix-cdn.ru/upload/iblock/b94/b94f422dcca29c0271dd0b76eb8f32d4.png?147618266369705"
                                                             alt="Телевизоры и аудиотехника"><br>
                                                    </div>
                                                    <hr/>
                                                </li>
                                                <li><a href="/shops/">АДРЕСА МАГАЗИНОВ</a></li>
                                                <li><a href="/info/dostavka/">ДОСТАВКА</a></li>
                                                <li><a href="/info/oplata/">ОПЛАТА</a></li>
                                            </ul>

                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown dropdown-submenu">
                                    <a class="dropdown-toggle pzsmart"
                                       data-toggle="dropdown">Смартфоны и планшеты</a>
                                    <div class="dropdown-menu">
                                        <ul class="block-text">
                                            <li><a>Смартфоны и телефоны</a>
                                                <ul>
                                                    <li><a href="/catalog/smartfone/">Смартфоны</a></li>
                                                    <li><a href="/catalog/mobilefone/">Мобильные телефоны</a></li>
                                                </ul>
                                            </li>
                                            <li><a>Планшеты и электронные книги</a>
                                                <ul>
                                                    <li><a href="/catalog/planshet_komp/">Планшеты</a></li>
                                                    <li><a href="/catalog/detskie_planshety/">Детские планшеты</a></li>
                                                    <li><a href="/catalog/pda/">Электронные книги</a></li>
                                                </ul>
                                            </li>
                                            <li><a>Гаджеты</a>
                                                <ul>
                                                    <li><a href="/catalog/accums/">Мобильные аккумуляторы</a></li>
                                                    <li><a href="/catalog/smartwatch/">Умные часы</a></li>
                                                    <li><a href="/catalog/fitnes_braslety/">Фитнес-браслеты</a></li>
                                                    <li><a href="/catalog/pedometer/">Шагомеры</a></li>
                                                    <li><a href="/catalog/vr_glasses/">Очки виртуальной реальности</a>
                                                    </li>
                                                    <li><a href="/catalog/aksessuary_dlya_gadzhetov/">Аксессуары для
                                                            гаджетов</a></li>
                                                </ul>
                                            </li>
                                            <li><a>Наушники и портативная акустика</a>
                                                <ul>
                                                    <li><a href="/catalog/garn_tel/">Наушники и гарнитуры</a></li>
                                                    <li><a href="/catalog/bluetooth_garnitury/">Bluetooth гарнитуры</a>
                                                    </li>
                                                    <li><a href="/catalog/portativnaya_akustica/">Портативная
                                                            акустика</a>
                                                    </li>
                                                    <li><a href="/catalog/aksessuary_dlya_naushnikov/">Аксессуары для
                                                            наушников</a></li>
                                                </ul>
                                            </li>
                                            <li><a>Аксессуары для смартфонов</a>
                                                <ul>
                                                    <li><a href="/catalog/cheholtel/">Чехлы для смартфонов</a></li>
                                                    <li><a href="/catalog/zashitplenkatel/">Защитные пленки и стекла для
                                                            смартфонов</a></li>
                                                    <li><a href="/catalog/zarjdtel/">Зарядные устройства для
                                                            смартфонов</a>
                                                    </li>
                                                    <li><a href="/catalog/cablesmarfon/">Кабели для смартфонов</a></li>
                                                    <li><a href="/catalog/car_holder/">Держатели для смартфонов</a></li>
                                                    <li><a href="/catalog/acestel/">Аксессуары для смартфонов</a></li>
                                                    <li><a href="/catalog/sertifikaty_garantii/">Сертификаты
                                                            дополнительной
                                                            гарантии</a></li>
                                                </ul>
                                            </li>
                                            <li><a>Аксессуары для планшетов</a>
                                                <ul>
                                                    <li><a href="/catalog/bag_planshet/">Чехлы для планшетов</a></li>
                                                    <li><a href="/catalog/plenshet_plenki/">Защитные пленки для
                                                            планшетов</a></li>
                                                    <li><a href="/catalog/avtoderjatel/">Держатели для планшетов</a>
                                                    </li>
                                                    <li><a href="/catalog/dokstancii_dlya_planshetov/">Док-станции для
                                                            планшетов</a></li>
                                                    <li><a href="/catalog/cabely_dlya_planshetov/">Кабели для
                                                            планшетов</a>
                                                    </li>
                                                    <li><a href="/catalog/accessories_planshet/">Аксессуары для
                                                            планшетов</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <div class="info visible-lg">
                                            <ul>

                                                <li class="first">
                                                    <div class="thumbnail">
                                                        <img src="//opt-860641.ssl.1c-bitrix-cdn.ru/upload/iblock/372/372f362d814d93957d1d9458446d5e73.png?147611387574773"
                                                             alt="Смартфоны и планшеты"><br>
                                                    </div>
                                                    <hr/>
                                                </li>
                                                <li><a href="/shops/">АДРЕСА МАГАЗИНОВ</a></li>
                                                <li><a href="/info/dostavka/">ДОСТАВКА</a></li>
                                                <li><a href="/info/oplata/">ОПЛАТА</a></li>
                                            </ul>

                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown dropdown-submenu">
                                    <a class="dropdown-toggle pz_nout_pc"
                                       data-toggle="dropdown">Ноутбуки и компьютеры</a>
                                    <div class="dropdown-menu">
                                        <ul class="block-text">
                                            <li><a>Ноутбуки</a>
                                                <ul>
                                                    <li><a href="/catalog/notebook/">Ноутбуки</a></li>
                                                </ul>
                                            </li>
                                            <li><a>Компьютеры и моноблоки</a>
                                                <ul>
                                                    <li><a href="/catalog/computers/">Компьютеры</a></li>
                                                    <li><a href="/catalog/monoblock/">Моноблоки</a></li>
                                                    <li><a href="/catalog/platforms/">Платформы для сборки ПК</a></li>
                                                </ul>
                                            </li>
                                            <li><a>Аксессуары для компьютеров и ноутбуков</a>
                                                <ul>
                                                    <li><a href="/catalog/bag_notebook/">Сумки для ноутбуков</a></li>
                                                    <li><a href="/catalog/docstation_notebook/">Подставки для
                                                            ноутбуков</a>
                                                    </li>
                                                    <li><a href="/catalog/accessories_notebook/">Аксессуары для
                                                            ноутбуков</a></li>
                                                    <li><a href="/catalog/cha_ntb/">Блоки питания для ноутбуков</a></li>
                                                    <li><a href="/catalog/dockin_n/">Док-станции и порт-репликаторы</a>
                                                    </li>
                                                    <li><a href="/catalog/batt_nb/">Батареи для ноутбуков</a></li>
                                                    <li><a href="/catalog/usb_xaby/">USB Хабы</a></li>
                                                    <li><a href="/catalog/portmane_stika/">Портмоне, стойки для
                                                            дисков</a>
                                                    </li>
                                                    <li><a href="/catalog/chistyashhie/">Чистящие средства</a></li>
                                                    <li><a href="/catalog/cablevga/">Кабели для ПК</a></li>
                                                </ul>
                                            </li>
                                            <li><a>Мониторы и панели</a>
                                                <ul>
                                                    <li><a href="/catalog/monitor/">Мониторы</a></li>
                                                    <li><a href="/catalog/proflcd/">Профессиональные панели</a></li>
                                                    <li><a href="/catalog/kron_monitorov/">Кронштейны для мониторов</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a>Мультимедиа</a>
                                                <ul>
                                                    <li><a href="/catalog/kolonki_pc/">Колонки для компьютера</a></li>
                                                    <li><a href="/catalog/garnitury/">Наушники с микрофоном</a></li>
                                                    <li><a href="/catalog/mikrofony/">Микрофоны</a></li>
                                                    <li><a href="/catalog/veb_kamery/">Веб-камеры</a></li>
                                                    <li><a href="/catalog/usiliteli_dlya_nau/">Усилители для
                                                            наушников</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a>Клавиатуры, мыши, джойстики</a>
                                                <ul>
                                                    <li><a href="/catalog/klaviatury/">Клавиатуры</a></li>
                                                    <li><a href="/catalog/klaviatura_mysh/">Комплекты
                                                            клавиатура+мышь</a>
                                                    </li>
                                                    <li><a href="/catalog/myshitrekboly/">Компьютерные мыши</a></li>
                                                    <li><a href="/catalog/graf_planshety/">Графические планшеты</a></li>
                                                    <li><a href="/catalog/kovriki_myshi/">Коврики для мыши</a></li>
                                                    <li><a href="/catalog/djoy_rul/">Джойстики для компьютера</a></li>
                                                </ul>
                                            </li>
                                            <li><a>Носители информации</a>
                                                <ul>
                                                    <li><a href="/catalog/card_memory/">Карты памяти</a></li>
                                                    <li><a href="/catalog/flash_usb/">Флешки</a></li>
                                                    <li><a href="/catalog/vneshnie_hd_diski/">Внешние жесткие диски</a>
                                                    </li>
                                                    <li><a href="/catalog/nas/">Сетевые хранилища NAS</a></li>
                                                    <li><a href="/catalog/kard_ridery/">Картридеры</a></li>
                                                    <li><a href="/catalog/nositeli/">Оптические диски</a></li>
                                                    <li><a href="/catalog/acc_hdd_ssd/">Аксессуары для HDD</a></li>
                                                </ul>
                                            </li>
                                            <li><a>Защита питания</a>
                                                <ul>
                                                    <li><a href="/catalog/setevye_filtry/">Сетевые фильтры</a></li>
                                                    <li><a href="/catalog/stabilizatory_napryazheniya/">Стабилизаторы
                                                            напряжения</a></li>
                                                    <li><a href="/catalog/ibp/">ИБП</a></li>
                                                    <li><a href="/catalog/batarei_ibp/">Батареи для ИБП</a></li>
                                                    <li><a href="/catalog/aksessuary_ibp/">Аксессуары для ИБП</a></li>
                                                </ul>
                                            </li>
                                            <li><a>Программное обеспечение</a>
                                                <ul>
                                                    <li><a href="/catalog/soft_utility/">Программы и утилиты</a></li>
                                                    <li><a href="/catalog/programmnoe_obespechenie/">Офисные
                                                            программы</a>
                                                    </li>
                                                    <li><a href="/catalog/antivirusy/">Антивирусы</a></li>
                                                    <li><a href="/catalog/opsystem/">Операционные системы</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <div class="info visible-lg">
                                            <ul>

                                                <li class="first">
                                                    <div class="thumbnail">
                                                        <img src="//opt-860641.ssl.1c-bitrix-cdn.ru/upload/iblock/899/89961041f94d8cec288973e9deb6caab.png?147747591849777"
                                                             alt="Ноутбуки и компьютеры"><br>
                                                    </div>
                                                    <hr/>
                                                </li>
                                                <li><a href="/shops/">АДРЕСА МАГАЗИНОВ</a></li>
                                                <li><a href="/info/dostavka/">ДОСТАВКА</a></li>
                                                <li><a href="/info/oplata/">ОПЛАТА</a></li>
                                            </ul>

                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown dropdown-submenu">
                                    <a class="dropdown-toggle pzserv"
                                       data-toggle="dropdown">Комплектующие</a>
                                    <div class="dropdown-menu">
                                        <ul class="block-text">
                                            <li><a>Процессоры</a>
                                                <ul>
                                                    <li><a href="/catalog/processory/">Процессоры</a></li>
                                                </ul>
                                            </li>
                                            <li><a>Материнские платы</a>
                                                <ul>
                                                    <li><a href="/catalog/motherboard/">Материнские платы</a></li>
                                                </ul>
                                            </li>
                                            <li><a>Модули памяти</a>
                                                <ul>
                                                    <li><a href="/catalog/memory/">Модули памяти</a></li>
                                                </ul>
                                            </li>
                                            <li><a>Видеокарты</a>
                                                <ul>
                                                    <li><a href="/catalog/videokarty/">Видеокарты</a></li>
                                                </ul>
                                            </li>
                                            <li><a>Хранение данных</a>
                                                <ul>
                                                    <li><a href="/catalog/hdd/">Жесткие диски</a></li>
                                                    <li><a href="/catalog/ssd/">Накопители SSD</a></li>
                                                </ul>
                                            </li>
                                            <li><a>Корпуса для жестких дисков</a>
                                                <ul>
                                                    <li><a href="/catalog/konteinerhdd/">Корпуса для жестких дисков</a>
                                                    </li>
                                                    <li><a href="/catalog/sata_kabeli/">SATA кабели</a></li>
                                                </ul>
                                            </li>
                                            <li><a>Приводы и дисководы</a>
                                                <ul>
                                                    <li><a href="/catalog/opticdvd/">Приводы DVD</a></li>
                                                    <li><a href="/catalog/fdd/">Дисководы FDD</a></li>
                                                </ul>
                                            </li>
                                            <li><a>Корпуса и блоки питания</a>
                                                <ul>
                                                    <li><a href="/catalog/bloksbp/">Блоки питания</a></li>
                                                    <li><a href="/catalog/korpusa/">Корпуса</a></li>
                                                </ul>
                                            </li>
                                            <li><a>Устройства охлаждения</a>
                                                <ul>
                                                    <li><a href="/catalog/systemohlaj/">Устройства охлаждения
                                                            процессора</a>
                                                    </li>
                                                    <li><a href="/catalog/ustrojstva_ohlazhdeniya_korpusa/">Вентиляторы
                                                            для
                                                            корпуса</a></li>
                                                    <li><a href="/catalog/termopasta/">Термопаста</a></li>
                                                </ul>
                                            </li>
                                            <li><a>Звуковые карты и ТВ-тюнеры</a>
                                                <ul>
                                                    <li><a href="/catalog/soundcard/">Звуковые карты</a></li>
                                                    <li><a href="/catalog/tvtuner/">ТВ-тюнеры и карты видеозахвата</a>
                                                    </li>
                                                    <li><a href="/catalog/acc_dlya_zvukovykh/">Аксессуары для звуковых
                                                            карт</a></li>
                                                </ul>
                                            </li>
                                            <li><a>Контроллеры</a>
                                                <ul>
                                                    <li><a href="/catalog/controlusb/">Контроллеры портов</a></li>
                                                    <li><a href="/catalog/idecontr/">Контроллеры интерфейсов</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <div class="info visible-lg">
                                            <ul>

                                                <li class="first">
                                                    <div class="thumbnail">
                                                        <img src="//opt-860641.ssl.1c-bitrix-cdn.ru/upload/iblock/14f/14f3e889826344e798287512a2868c19.png?1476113554102942"
                                                             alt="Комплектующие"><br>
                                                    </div>
                                                    <hr/>
                                                </li>
                                                <li><a href="/shops/">АДРЕСА МАГАЗИНОВ</a></li>
                                                <li><a href="/info/dostavka/">ДОСТАВКА</a></li>
                                                <li><a href="/info/oplata/">ОПЛАТА</a></li>
                                            </ul>

                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown dropdown-submenu">
                                    <a class="dropdown-toggle pzogtehnika"
                                       data-toggle="dropdown">Офисная техника и мебель</a>
                                    <div class="dropdown-menu">
                                        <ul class="block-text">
                                            <li><a>Мебель</a>
                                                <ul>
                                                    <li><a href="/catalog/kreslastul/">Офисные кресла</a></li>
                                                    <li><a href="/catalog/detskie_kresla/">Детские кресла</a></li>
                                                    <li><a href="/catalog/shkolnye_party/">Школьные парты</a></li>
                                                    <li><a href="/catalog/hanger/">Вешалки</a></li>
                                                    <li><a href="/catalog/kovriki_zashchitnye/">Коврики защитные</a>
                                                    </li>
                                                    <li><a href="/catalog/mebelaccess/">Мебельные аксессуары</a></li>
                                                </ul>
                                            </li>
                                            <li><a>Освещение</a>
                                                <ul>
                                                    <li><a href="/catalog/tab_lamp/">Настольные лампы</a></li>
                                                    <li><a href="/catalog/nochniki/">Ночники</a></li>
                                                </ul>
                                            </li>
                                            <li><a>Принтеры, МФУ, копиры</a>
                                                <ul>
                                                    <li><a href="/catalog/mfu/">МФУ струйные</a></li>
                                                    <li><a href="/catalog/mfu_laser/">МФУ лазерные</a></li>
                                                    <li><a href="/catalog/printery/">Принтеры струйные</a></li>
                                                    <li><a href="/catalog/printer_laser/">Принтеры лазерные</a></li>
                                                    <li><a href="/catalog/portativnye_printery/">Портативные
                                                            принтеры</a>
                                                    </li>
                                                    <li><a href="/catalog/label_printer/">Принтеры для печати
                                                            наклеек</a>
                                                    </li>
                                                    <li><a href="/catalog/kopiry/">Копиры</a></li>
                                                    <li><a href="/catalog/fax/">Факсы</a></li>
                                                    <li><a href="/catalog/plottery/">Плоттеры</a></li>
                                                    <li><a href="/catalog/skanery/">Сканеры</a></li>
                                                    <li><a href="/catalog/doc_scan/">Сканеры для документов</a></li>
                                                    <li><a href="/catalog/bumaga/">Бумага для печати</a></li>
                                                    <li><a href="/catalog/kartridzhi/">Картриджи</a></li>
                                                    <li><a href="/catalog/pechatayushchie_golovki/">Печатающие
                                                            головки</a>
                                                    </li>
                                                    <li><a href="/catalog/tonery/">Тонер</a></li>
                                                    <li><a href="/catalog/termoplenka/">Термопленки для факсов</a></li>
                                                    <li><a href="/catalog/baraban/">Фотобарабаны</a></li>
                                                    <li><a href="/catalog/acc_prn/">Аксессуары для принтеров</a></li>
                                                    <li><a href="/catalog/acc_copir/">Аксессуары для копиров</a></li>
                                                    <li><a href="/catalog/plastik/">Пластик для устройств 3D</a></li>
                                                </ul>
                                            </li>
                                            <li><a>Телефоны для дома и офиса</a>
                                                <ul>
                                                    <li><a href="/catalog/telefony/">Проводные телефоны</a></li>
                                                    <li><a href="/catalog/dect/">Радиотелефоны DECT</a></li>
                                                    <li><a href="/catalog/dop_tel/">Дополнительные трубки</a></li>
                                                    <li><a href="/catalog/iptelefon/">IP Телефоны</a></li>
                                                    <li><a href="/catalog/sys_phone/">Системные телефоны</a></li>
                                                    <li><a href="/catalog/konsoli/">Консоли</a></li>
                                                    <li><a href="/catalog/miniats/">Мини АТС</a></li>
                                                    <li><a href="/catalog/moduli_dlya_mini_ats/">Платы и модули для
                                                            мини-АТС</a></li>
                                                    <li><a href="/catalog/videoconferencing/">Системы
                                                            видеоконференцсвязи</a></li>
                                                </ul>
                                            </li>
                                            <li><a>Офисная техника</a>
                                                <ul>
                                                    <li><a href="/catalog/calc/">Калькуляторы</a></li>
                                                    <li><a href="/catalog/shreder/">Уничтожители бумаги</a></li>
                                                    <li><a href="/catalog/laminator/">Ламинаторы</a></li>
                                                    <li><a href="/catalog/plenki_lam/">Пленки для ламинатора</a></li>
                                                    <li><a href="/catalog/pereplet/">Переплетчики</a></li>
                                                    <li><a href="/catalog/pruzhinyperepleta/">Материалы для
                                                            переплета</a>
                                                    </li>
                                                    <li><a href="/catalog/cutters_of/">Резаки</a></li>
                                                    <li><a href="/catalog/acc_dly_rezakov/">Аксессуары для резаков</a>
                                                    </li>
                                                    <li><a href="/catalog/ergonom/">Эргономика офиса</a></li>
                                                </ul>
                                            </li>
                                            <li><a>Торговое оборудование</a>
                                                <ul>
                                                    <li><a href="/catalog/skanery_shtrikh_koda/">Сканеры штрих-кода</a>
                                                    </li>
                                                    <li><a href="/catalog/detektory_banknot/">Детекторы банкнот</a></li>
                                                    <li><a href="/catalog/schetchik_banknot/">Счетчики банкнот</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <div class="info visible-lg">
                                            <ul>

                                                <li class="first">
                                                    <div class="thumbnail">
                                                        <img src="//opt-860641.ssl.1c-bitrix-cdn.ru/upload/iblock/f5d/f5d5e8cf7fc3789284c4afdd57fd689d.png?151271655985121"
                                                             alt="Офисная техника и мебель"><br>
                                                    </div>
                                                    <hr/>
                                                </li>
                                                <li><a href="/shops/">АДРЕСА МАГАЗИНОВ</a></li>
                                                <li><a href="/info/dostavka/">ДОСТАВКА</a></li>
                                                <li><a href="/info/oplata/">ОПЛАТА</a></li>
                                            </ul>

                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown dropdown-submenu">
                                    <a class="dropdown-toggle pzservery"
                                       data-toggle="dropdown">Серверы и сетевое оборудование</a>
                                    <div class="dropdown-menu">
                                        <ul class="block-text">
                                            <li><a>Сетевое оборудование</a>
                                                <ul>
                                                    <li>
                                                        <a href="/catalog/marshrutizatory_i_tochki_dostupa/">Маршрутизаторы</a>
                                                    </li>
                                                    <li><a href="/catalog/tochki_dostupa/">Точки доступа</a></li>
                                                    <li><a href="/catalog/wifi_usilitel/">Wi-Fi усилители сигнала</a>
                                                    </li>
                                                    <li><a href="/catalog/modemi/">Модемы 4G и ADSL</a></li>
                                                    <li><a href="/catalog/setevye_ehkrany/">Сетевые экраны</a></li>
                                                    <li><a href="/catalog/wi_fi_adaptery/">Адаптеры WiFi и сетевые
                                                            карты</a>
                                                    </li>
                                                    <li><a href="/catalog/bluetooth_adapter/">Адаптеры Bluetooth</a>
                                                    </li>
                                                    <li><a href="/catalog/antenny/">Антенны Wi-Fi</a></li>
                                                    <li><a href="/catalog/print_servery/">Принт серверы</a></li>
                                                    <li><a href="/catalog/kommutatory/">Коммутаторы</a></li>
                                                    <li><a href="/catalog/mediaconverters/">Медиаконвертеры</a></li>
                                                    <li><a href="/catalog/modul_transiver/">Модули и трансиверы</a></li>
                                                    <li><a href="/catalog/instrumenty/">Инструменты для монтажа
                                                            сетей</a>
                                                    </li>
                                                    <li><a href="/catalog/net_oth/">Прочее сетевое оборудование</a></li>
                                                    <li><a href="/catalog/perekluchately_kvm/">Переключатели KVM</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a>Серверы</a>
                                                <ul>
                                                    <li><a href="/catalog/server/">Серверы</a></li>
                                                </ul>
                                            </li>
                                            <li><a>Серверное оборудование</a>
                                                <ul>
                                                    <li><a href="/catalog/serverprocessorbr/">Процессоры для
                                                            серверов</a>
                                                    </li>
                                                    <li><a href="/catalog/servermother/">Материнские платы для
                                                            серверов</a>
                                                    </li>
                                                    <li><a href="/catalog/servermemory/">Модули памяти для серверов</a>
                                                    </li>
                                                    <li><a href="/catalog/serverdrivers/">Оптические приводы для
                                                            серверов</a></li>
                                                    <li><a href="/catalog/serverhdd/">Серверные жесткие диски</a></li>
                                                    <li><a href="/catalog/serv_case/">Корпуса для серверов</a></li>
                                                    <li><a href="/catalog/bloki_pitaniya_dlya_serverov/">Блоки питания
                                                            для
                                                            серверов</a></li>
                                                    <li><a href="/catalog/serveradapt/">Контроллеры для серверов</a>
                                                    </li>
                                                    <li><a href="/catalog/servernye_opcii/">Серверные опции</a></li>
                                                </ul>
                                            </li>
                                            <li><a>Системы хранения</a>
                                                <ul>
                                                    <li><a href="/catalog/diskstorage/">Системы хранения информации</a>
                                                    </li>
                                                    <li><a href="/catalog/lentochnye_biblioteki/">Ленточные
                                                            библиотеки</a>
                                                    </li>
                                                    <li><a href="/catalog/opcii_k_sistemam_hraneniya/">Опции к системам
                                                            хранения</a></li>
                                                </ul>
                                            </li>
                                            <li><a>СКС и инженерное оборудование</a>
                                                <ul>
                                                    <li><a href="/catalog/aksessuary_dlya_kanalov/">Аксессуары для
                                                            кабель-каналов</a></li>
                                                    <li><a href="/catalog/aksessuary_shkafov/">Аксессуары для шкафов и
                                                            стоек</a></li>
                                                    <li><a href="/catalog/acc_tray/">Аксесуары для лотков</a></li>
                                                    <li><a href="/catalog/pdu/">Блоки распределения питания</a></li>
                                                    <li><a href="/catalog/kabelnye_kanaly/">Кабельные каналы</a></li>
                                                    <li><a href="/catalog/komponenty_opticheskih_sistem/">Компоненты
                                                            оптических систем</a></li>
                                                    <li><a href="/catalog/krepezhi/">Крепежи</a></li>
                                                    <li><a href="/catalog/krossovoe_oborudovanie/">Кроссовое
                                                            оборудование</a></li>
                                                    <li><a href="/catalog/lotki/">Лотки</a></li>
                                                    <li><a href="/catalog/moduli_informacionnye/">Модули
                                                            информационные</a>
                                                    </li>
                                                    <li><a href="/catalog/opticheskie_polki/">Оптические полки и
                                                            кроссы</a>
                                                    </li>
                                                    <li><a href="/catalog/paneli_i_korobki/">Панели, коробки,
                                                            вставки</a>
                                                    </li>
                                                    <li><a href="/catalog/patch_panely/">Патч-панели</a></li>
                                                    <li><a href="/catalog/prochee_oborudovanie/">Прочее оборудование</a>
                                                    </li>
                                                    <li><a href="/catalog/resheniya_dlya_rabochih_mest/">Решения для
                                                            рабочих
                                                            мест</a></li>
                                                    <li><a href="/catalog/markirovka/">Средства маркировки</a></li>
                                                    <li><a href="/catalog/stoyki/">Стойки</a></li>
                                                    <li><a href="/catalog/styajki/">Стяжки</a></li>
                                                    <li><a href="/catalog/shkafy_montajnye/">Шкафы монтажные</a></li>
                                                </ul>
                                            </li>
                                            <li><a>Кабельная продукция СКС</a>
                                                <ul>
                                                    <li><a href="/catalog/kabel_mednyi/">Кабель медный</a></li>
                                                    <li><a href="/catalog/kabel_opticheskiy/">Кабель оптический</a></li>
                                                    <li><a href="/catalog/kabel_silovoy/">Кабель силовой</a></li>
                                                    <li><a href="/catalog/patchkordy_opticheskie/">Патчкорды
                                                            оптические</a>
                                                    </li>
                                                    <li><a href="/catalog/patchkordy_mednye/">Патчкорды медные</a></li>
                                                    <li><a href="/catalog/konnektory/">Коннекторы для сетевого
                                                            оборудования</a></li>
                                                    <li><a href="/catalog/prochee_setevoe/">Прочие кабельные
                                                            продукты</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <div class="info visible-lg">
                                            <ul>

                                                <li class="first">
                                                    <div class="thumbnail">
                                                        <img src="//opt-860641.ssl.1c-bitrix-cdn.ru/upload/iblock/c58/c5867b3de496550d48debccebf316d1f.png?151272639486830"
                                                             alt="Серверы и сетевое оборудование"><br>
                                                    </div>
                                                    <hr/>
                                                </li>
                                                <li><a href="/shops/">АДРЕСА МАГАЗИНОВ</a></li>
                                                <li><a href="/info/dostavka/">ДОСТАВКА</a></li>
                                                <li><a href="/info/oplata/">ОПЛАТА</a></li>
                                            </ul>

                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown dropdown-submenu">
                                    <a class="dropdown-toggle pzorg"
                                       data-toggle="dropdown">Канцтовары</a>
                                    <div class="dropdown-menu">
                                        <ul class="block-text">
                                            <li><a>Ручки премиум-класса</a>
                                                <ul>
                                                    <li><a href="/catalog/mech_penpremium/">Карандаши механические
                                                            премиум</a></li>
                                                    <li><a href="/catalog/five_pen_premium/">Ручки 5й пишущий узел
                                                            премиум</a></li>
                                                    <li><a href="/catalog/gel_pens_premium/">Гелевые ручки премиум</a>
                                                    </li>
                                                    <li><a href="/catalog/mfu_pen_premium/">Многофункциональные ручки
                                                            премиум</a></li>
                                                    <li><a href="/catalog/fou_pen_premium/">Перьевые ручки премиум</a>
                                                    </li>
                                                    <li><a href="/catalog/roller_pens_premium/">Ручки-роллеры
                                                            премиум</a>
                                                    </li>
                                                    <li><a href="/catalog/ball_pens_premium/">Шариковые ручки
                                                            премиум</a>
                                                    </li>
                                                    <li><a href="/catalog/podarochnye_nabory/">Наборы пишущих
                                                            инструментов</a></li>
                                                    <li><a href="/catalog/case_pen_premium/">Футляры для пишущих
                                                            инструментов</a></li>
                                                    <li><a href="/catalog/aksesuary_pre_ruchec/">Аксессуары для ручек
                                                            премиум</a></li>
                                                </ul>
                                            </li>
                                            <li><a>Письменные и чертежные принадлежности</a>
                                                <ul>
                                                    <li><a href="/catalog/rods/">Запасные стержни</a></li>
                                                    <li><a href="/catalog/pencil_mech/">Карандаши механические</a></li>
                                                    <li><a href="/catalog/crayons/">Карандаши цветные</a></li>
                                                    <li><a href="/catalog/pencil_ch/">Карандаши чернографитовые</a></li>
                                                    <li><a href="/catalog/line/">Линейки</a></li>
                                                    <li><a href="/catalog/markers_crayons/">Маркеры и фломастеры</a>
                                                    </li>
                                                    <li><a href="/catalog/roller_pens/">Роллеры и капиллярные ручки</a>
                                                    </li>
                                                    <li><a href="/catalog/gel_pens/">Ручки гелевые</a></li>
                                                    <li><a href="/catalog/ball_pens/">Ручки шариковые</a></li>
                                                    <li><a href="/catalog/drawing_supplies/">Чертежные
                                                            принадлежности</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a>Изделия из бумаги для офиса</a>
                                                <ul>
                                                    <li><a href="/catalog/block/">Блоки для записей</a></li>
                                                    <li><a href="/catalog/diares/">Ежедневники</a></li>
                                                    <li><a href="/catalog/zapisnye_knizhki/">Записные книжки</a></li>
                                                    <li><a href="/catalog/nabory_smart_writing/">Наборы Smart
                                                            Writing</a>
                                                    </li>
                                                    <li><a href="/catalog/bookmark/">Закладки самоклеящиеся</a></li>
                                                    <li><a href="/catalog/knigi_buhgalterskie/">Книги бухгалтерские</a>
                                                    </li>
                                                    <li><a href="/catalog/convert/">Конверты почтовые</a></li>
                                                    <li><a href="/catalog/note_pap/">Тетради и Блокноты</a></li>
                                                    <li><a href="/catalog/aksessuary_tetradej/">Аксессуары для
                                                            бизнес-тетрадей</a></li>
                                                </ul>
                                            </li>
                                            <li><a>Папки и файлы</a>
                                                <ul>
                                                    <li><a href="/catalog/folder_comp/">Папки для бумаг</a></li>
                                                    <li><a href="/catalog/files_paper/">Файлы для бумаги</a></li>
                                                    <li><a href="/catalog/ach_box/">Короба архивные</a></li>
                                                    <li><a href="/catalog/index_d/">Разделители индексные</a></li>
                                                    <li><a href="/catalog/acc_arh/">Аксессуары для архивации</a></li>
                                                </ul>
                                            </li>
                                            <li><a>Канцтовары для офиса</a>
                                                <ul>
                                                    <li><a href="/catalog/acc_office/">Канцелярские мелочи</a></li>
                                                    <li><a href="/catalog/acc_badges/">Бейджи и аксессуары</a></li>
                                                    <li><a href="/catalog/visitnicy/">Визитницы</a></li>
                                                    <li><a href="/catalog/board/">Демонстрационное оборудование</a></li>
                                                    <li><a href="/catalog/punchers/">Дыроколы</a></li>
                                                    <li><a href="/catalog/inf_sign/">Информационные таблички и
                                                            пиктограммы</a></li>
                                                    <li><a href="/catalog/glue/">Клей канцелярский</a></li>
                                                    <li><a href="/catalog/adhesive_tape/">Клейкая лента</a></li>
                                                    <li><a href="/catalog/basket/">Корзины для бумаг</a></li>
                                                    <li><a href="/catalog/paper_trays/">Лотки для бумаги</a></li>
                                                    <li><a href="/catalog/table_set/">Настольные наборы</a></li>
                                                    <li><a href="/catalog/table_cover/">Настольные покрытия</a></li>
                                                    <li><a href="/catalog/scissors/">Ножницы и канцелярские ножи</a>
                                                    </li>
                                                    <li><a href="/catalog/rezinki_dlya_deneg/">Резинки для денег</a>
                                                    </li>
                                                    <li><a href="/catalog/staples_stapler/">Скобы для степлера</a></li>
                                                    <li><a href="/catalog/clips/">Скрепки, кнопки, зажимы</a></li>
                                                    <li><a href="/catalog/stapler/">Степлеры</a></li>
                                                    <li><a href="/catalog/pencil_sharpener/">Точилки для карандашей</a>
                                                    </li>
                                                    <li><a href="/catalog/stamp/">Штампы</a></li>
                                                    <li><a href="/catalog/shk_dlya_klyuchej/">Шкафчики и брелки для
                                                            ключей</a></li>
                                                </ul>
                                            </li>
                                            <li><a>Школьная канцелярия</a>
                                                <ul>
                                                    <li><a href="/catalog/pribory_dlya_vyzhiganiya/">Приборы для
                                                            выжигания
                                                            по дереву</a></li>
                                                    <li><a href="/catalog/rantsy_i_ryukzaki/">Ранцы и рюкзаки</a></li>
                                                    <li><a href="/catalog/penaly_i_aksessuary/">Пеналы</a></li>
                                                    <li><a href="/catalog/albomy_i_gravyury/">Альбомы и гравюры</a></li>
                                                    <li><a href="/catalog/voskovye_melki/">Восковые мелки</a></li>
                                                    <li><a href="/catalog/kisti/">Кисти для рисования</a></li>
                                                    <li><a href="/catalog/kraski/">Краски</a></li>
                                                    <li><a href="/catalog/nabory_dlya_tvorc/">Наборы для творчества</a>
                                                    </li>
                                                    <li><a href="/catalog/oblozhki/">Обложки</a></li>
                                                    <li><a href="/catalog/papki_dlya_risunkov/">Папки для рисунков</a>
                                                    </li>
                                                    <li><a href="/catalog/plastilin/">Пластилин</a></li>
                                                    <li><a href="/catalog/tetradi/">Тетради</a></li>
                                                    <li><a href="/catalog/shkolnye_aksessuary/">Школьные аксессуары</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a>Кожгалантерея</a>
                                                <ul>
                                                    <li><a href="/catalog/clutches/">Клатчи</a></li>
                                                    <li><a href="/catalog/housekeeper/">Ключницы</a></li>
                                                    <li><a href="/catalog/beauticians/">Косметички</a></li>
                                                    <li><a href="/catalog/wallets/">Кошельки</a></li>
                                                    <li><a href="/catalog/pass_covers/">Обложки для паспортов</a></li>
                                                    <li><a href="/catalog/purse/">Портмоне</a></li>
                                                    <li><a href="/catalog/portfolios/">Портфели</a></li>
                                                    <li><a href="/catalog/straps/">Ремни</a></li>
                                                    <li><a href="/catalog/backpacks_l/">Рюкзаки</a></li>
                                                    <li><a href="/catalog/bags_l/">Сумки</a></li>
                                                    <li><a href="/catalog/cards_cover/">Чехлы для карт</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <div class="info visible-lg">
                                            <ul>

                                                <li class="first">
                                                    <div class="thumbnail">
                                                        <img src="//opt-860641.ssl.1c-bitrix-cdn.ru/upload/iblock/20e/20e866a69c79daa4ea270709d9e1e760.png?151272619387332"
                                                             alt="Канцтовары"><br>
                                                    </div>
                                                    <hr/>
                                                </li>
                                                <li><a href="/shops/">АДРЕСА МАГАЗИНОВ</a></li>
                                                <li><a href="/info/dostavka/">ДОСТАВКА</a></li>
                                                <li><a href="/info/oplata/">ОПЛАТА</a></li>
                                            </ul>

                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown dropdown-submenu">
                                    <a class="dropdown-toggle pzfoto"
                                       data-toggle="dropdown">Фото и видеотехника</a>
                                    <div class="dropdown-menu">
                                        <ul class="block-text">
                                            <li><a>Фотоаппараты</a>
                                                <ul>
                                                    <li><a href="/catalog/cifrovye_fotoapparaty/">Компактные
                                                            фотоаппараты</a></li>
                                                    <li><a href="/catalog/sys_foto/">Беззеркальные фотоаппараты</a></li>
                                                    <li><a href="/catalog/mir_foto/">Зеркальные фотоаппараты</a></li>
                                                </ul>
                                            </li>
                                            <li><a>Объективы и светофильтры</a>
                                                <ul>
                                                    <li><a href="/catalog/obektivy/">Объективы и конвертеры</a></li>
                                                    <li><a href="/catalog/filtry/">Светофильтры</a></li>
                                                </ul>
                                            </li>
                                            <li><a>Видеокамеры и экшн-камеры</a>
                                                <ul>
                                                    <li><a href="/catalog/videokamery/">Видеокамеры</a></li>
                                                    <li><a href="/catalog/action_cam/">Экшн-камеры</a></li>
                                                </ul>
                                            </li>
                                            <li><a>Аксессуары для фото</a>
                                                <ul>
                                                    <li><a href="/catalog/sumkifotovideotexniki/">Сумки для фото,
                                                            видеотехники</a></li>
                                                    <li><a href="/catalog/fotovspyshki/">Вспышки для фотоаппаратов</a>
                                                    </li>
                                                    <li><a href="/catalog/fotoshtativy/">Штативы</a></li>
                                                    <li><a href="/catalog/zaryadnye_ustrojstva_dlya_fotoapparatov/">Зарядные
                                                            устройства для фотоаппаратов</a></li>
                                                    <li><a href="/catalog/protectglass/">Аксессуары для фото-видео</a>
                                                    </li>
                                                    <li><a href="/catalog/fotoframe/">Фоторамки</a></li>
                                                    <li><a href="/catalog/fotoramki/">Цифровые фоторамки</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <div class="info visible-lg">
                                            <ul>

                                                <li class="first">
                                                    <div class="thumbnail">
                                                        <img src="//opt-860641.ssl.1c-bitrix-cdn.ru/upload/iblock/9d8/9d8a171268f5c8a228cdd0bb0412f111.png?147618298872459"
                                                             alt="Фото и видеотехника"><br>
                                                    </div>
                                                    <hr/>
                                                </li>
                                                <li><a href="/shops/">АДРЕСА МАГАЗИНОВ</a></li>
                                                <li><a href="/info/dostavka/">ДОСТАВКА</a></li>
                                                <li><a href="/info/oplata/">ОПЛАТА</a></li>
                                            </ul>

                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown dropdown-submenu">
                                    <a class="dropdown-toggle pzauto"
                                       data-toggle="dropdown">Автотовары</a>
                                    <div class="dropdown-menu">
                                        <ul class="block-text">
                                            <li><a>Автозвук</a>
                                                <ul>
                                                    <li><a href="/catalog/avtomagnitoly/">Автомагнитолы</a></li>
                                                    <li><a href="/catalog/autoacoustic/">Автомобильные колонки</a></li>
                                                    <li><a href="/catalog/autosub/">Автомобильные сабвуферы</a></li>
                                                    <li><a href="/catalog/fmmodulator/">Модуляторы FM</a></li>
                                                    <li><a href="/catalog/autouselitel/">Автомобильные усилители</a>
                                                    </li>
                                                    <li><a href="/catalog/antennyavtomobilnye/">Автомобильные
                                                            антенны</a>
                                                    </li>
                                                    <li><a href="/catalog/autotv/">Портативные телевизоры</a></li>
                                                    <li><a href="/catalog/car_audio_acc/">Аксессуары для автозвука</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a>Безопасность</a>
                                                <ul>
                                                    <li><a href="/catalog/videoregistrator/">Видеорегистраторы</a></li>
                                                    <li><a href="/catalog/videoreg_s_detektor/">Видеорегистраторы с
                                                            радар-детектором</a></li>
                                                    <li><a href="/catalog/radar_detector/">Радар-детекторы</a></li>
                                                    <li><a href="/catalog/parkovochnyeradar/">Парковочные радары</a>
                                                    </li>
                                                    <li><a href="/catalog/camback/">Камеры заднего вида</a></li>
                                                    <li><a href="/catalog/avtosignalizacii/">Автосигнализации</a></li>
                                                    <li><a href="/catalog/breathalyze/">Алкотестеры</a></li>
                                                    <li><a href="/catalog/cars_monitor/">Автомобильные мониторы</a></li>
                                                </ul>
                                            </li>
                                            <li><a>Навигаторы</a>
                                                <ul>
                                                    <li><a href="/catalog/gpsnavi/">Навигаторы GPS</a></li>
                                                    <li><a href="/catalog/acc_navi/">Аксессуары для навигаторов</a></li>
                                                </ul>
                                            </li>
                                            <li><a>Минимойки и аксессуары</a>
                                                <ul>
                                                    <li><a href="/catalog/minimojki/">Мойки высокого давления</a></li>
                                                    <li><a href="/catalog/acc_mini/">Аксессуары для минимоек</a></li>
                                                </ul>
                                            </li>
                                            <li><a>Автоаксессуары</a>
                                                <ul>
                                                    <li><a href="/catalog/child_seats/">Детские автокресла</a></li>
                                                    <li><a href="/catalog/zaradustro/">Зарядные устройства для
                                                            автомобильных
                                                            аккумуляторов</a></li>
                                                    <li><a href="/catalog/invertor/">Преобразователи напряжения</a></li>
                                                    <li><a href="/catalog/razvetviteli_prikur/">Разветвители
                                                            прикуривателя</a></li>
                                                    <li><a href="/catalog/termoholod/">Автомобильные холодильники</a>
                                                    </li>
                                                    <li><a href="/catalog/sumki_termosy/">Сумки-термосы</a></li>
                                                    <li><a href="/catalog/kompres/">Компрессоры</a></li>
                                                    <li><a href="/catalog/manomerj/">Манометры</a></li>
                                                    <li><a href="/catalog/autopil/">Автомобильные пылесосы</a></li>
                                                    <li><a href="/catalog/autoaccessories/">Аксессуары для
                                                            автомобиля</a>
                                                    </li>
                                                    <li><a href="/catalog/shumoizolyatsiya/">Шумоизоляция</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <div class="info visible-lg">
                                            <ul>

                                                <li class="first">
                                                    <div class="thumbnail">
                                                        <img src="//opt-860641.ssl.1c-bitrix-cdn.ru/upload/iblock/d14/d146868ac8fe56fc1aaaece44e9b0a29.png?147618309365670"
                                                             alt="Автотовары"><br>
                                                    </div>
                                                    <hr/>
                                                </li>
                                                <li><a href="/shops/">АДРЕСА МАГАЗИНОВ</a></li>
                                                <li><a href="/info/dostavka/">ДОСТАВКА</a></li>
                                                <li><a href="/info/oplata/">ОПЛАТА</a></li>
                                            </ul>

                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown dropdown-submenu">
                                    <a class="dropdown-toggle pzhome"
                                       data-toggle="dropdown">Техника для дома</a>
                                    <div class="dropdown-menu">
                                        <ul class="block-text">
                                            <li><a>Климатическая техника</a>
                                                <ul>
                                                    <li><a href="/catalog/kaminy/">Газовые водонагреватели</a></li>
                                                    <li><a href="/catalog/vodonagrevateli/">Водонагреватели</a></li>
                                                    <li><a href="/catalog/ventilytor/">Бытовые вентиляторы</a></li>
                                                    <li><a href="/catalog/vozduxoochistiteli/">Воздухоочистители</a>
                                                    </li>
                                                    <li><a href="/catalog/uvlajniteli/">Увлажнители</a></li>
                                                    <li><a href="/catalog/obogrev/">Тепловентиляторы</a></li>
                                                    <li><a href="/catalog/konvektory/">Конвекторы</a></li>
                                                    <li><a href="/catalog/maslyanyeradiatory/">Масляные радиаторы</a>
                                                    </li>
                                                    <li><a href="/catalog/infrared_heat/">Инфракрасные обогреватели</a>
                                                    </li>
                                                    <li><a href="/catalog/thermal_curtains/">Тепловые завесы</a></li>
                                                    <li><a href="/catalog/heat_gun/">Тепловые пушки</a></li>
                                                    <li><a href="/catalog/acc_vozdukhoochist/">Аксессуары для
                                                            воздухоочистителей</a></li>
                                                </ul>
                                            </li>
                                            <li><a>Стиральные и сушильные машины</a>
                                                <ul>
                                                    <li><a href="/catalog/stiralnye/">Стиральные машины</a></li>
                                                    <li><a href="/catalog/sushilnye/">Сушильные машины</a></li>
                                                </ul>
                                            </li>
                                            <li><a>Уход за одеждой</a>
                                                <ul>
                                                    <li><a href="/catalog/utyugi/">Утюги</a></li>
                                                    <li><a href="/catalog/steam_station/">Паровые станции</a></li>
                                                    <li><a href="/catalog/otparivateli/">Отпариватели</a></li>
                                                    <li><a href="/catalog/gladilnye_doski/">Гладильные доски</a></li>
                                                    <li><a href="/catalog/shvejnye/">Швейные машины</a></li>
                                                    <li><a href="/catalog/overlok/">Оверлоки</a></li>
                                                    <li><a href="/catalog/mashinki_dlya_snyatiya_katyshkov/">Машинки для
                                                            снятия катышков</a></li>
                                                </ul>
                                            </li>
                                            <li><a>Бытовая техника</a>
                                                <ul>
                                                    <li><a href="/catalog/pylesosy/">Пылесосы</a></li>
                                                    <li><a href="/catalog/steam_cleaner/">Пароочистители</a></li>
                                                    <li><a href="/catalog/steam_mop/">Паровые швабры</a></li>
                                                    <li><a href="/catalog/stekloochistiteli/">Стеклоочистители</a></li>
                                                    <li><a href="/catalog/rukosushilka/">Сушилки для рук</a></li>
                                                    <li><a href="/catalog/oth_tech_hom/">Прочая техника для дома</a>
                                                    </li>
                                                    <li><a href="/catalog/acesspyl/">Аксессуары для пылесосов</a></li>
                                                    <li><a href="/catalog/bytaccessories/">Аксессуары для бытовой
                                                            техники</a></li>
                                                </ul>
                                            </li>
                                            <li><a>Уход за волосами</a>
                                                <ul>
                                                    <li><a href="/catalog/feny/">Фены для волос</a></li>
                                                    <li><a href="/catalog/hairdryer_brush/">Фен-щетки</a></li>
                                                    <li><a href="/catalog/multi_stylers/">Мультистайлеры</a></li>
                                                    <li><a href="/catalog/shhipcy/">Щипцы для волос</a></li>
                                                    <li><a href="/catalog/rectifiers/">Выпрямители для волос</a></li>
                                                    <li><a href="/catalog/mashinki_dlya_strijki/">Машинки для
                                                            стрижки</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a>Гигиена и здоровье</a>
                                                <ul>
                                                    <li><a href="/catalog/britvy/">Электробритвы</a></li>
                                                    <li><a href="/catalog/epilyatory/">Эпиляторы</a></li>
                                                    <li><a href="/catalog/ph_epil/">Фотоэпиляторы</a></li>
                                                    <li><a href="/catalog/zubnye/">Зубные щетки</a></li>
                                                    <li><a href="/catalog/vesy/">Напольные весы</a></li>
                                                    <li><a href="/catalog/manikyurnye/">Маникюрные наборы</a></li>
                                                    <li><a href="/catalog/care_p/">Косметические приборы</a></li>
                                                    <li><a href="/catalog/massazhery/">Массажеры</a></li>
                                                    <li><a href="/catalog/acessdlyabritvy/">Аксессуары для бритв</a>
                                                    </li>
                                                    <li><a href="/catalog/acc_tooth/">Аксессуары для зубных щеток</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a>Медицинское оборудование</a>
                                                <ul>
                                                    <li><a href="/catalog/warmer/">Грелки</a></li>
                                                    <li><a href="/catalog/inhaler/">Ингаляторы</a></li>
                                                    <li><a href="/catalog/stethoscope/">Стетоскопы</a></li>
                                                    <li><a href="/catalog/thermometer/">Термометры</a></li>
                                                    <li><a href="/catalog/tonometer/">Тонометры</a></li>
                                                    <li><a href="/catalog/medical_acc/">Аксессуары для медицинского
                                                            оборудования</a></li>
                                                </ul>
                                            </li>
                                            <li><a>Часы и погодные станции</a>
                                                <ul>
                                                    <li><a href="/catalog/pogodnye/">Метеостанции и термометры</a></li>
                                                    <li><a href="/catalog/nastennye_chasy/">Настенные часы</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <div class="info visible-lg">
                                            <ul>

                                                <li class="first">
                                                    <div class="thumbnail">
                                                        <img src="//opt-860641.ssl.1c-bitrix-cdn.ru/upload/iblock/819/8193a2d17c61e6f6550fff488df9c2d7.png?147618312382849"
                                                             alt="Техника для дома"><br>
                                                    </div>
                                                    <hr/>
                                                </li>
                                                <li><a href="/shops/">АДРЕСА МАГАЗИНОВ</a></li>
                                                <li><a href="/info/dostavka/">ДОСТАВКА</a></li>
                                                <li><a href="/info/oplata/">ОПЛАТА</a></li>
                                            </ul>

                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown dropdown-submenu">
                                    <a class="dropdown-toggle pzkitchen"
                                       data-toggle="dropdown">Техника для кухни</a>
                                    <div class="dropdown-menu">
                                        <ul class="block-text">
                                            <li><a>Крупная кухонная техника</a>
                                                <ul>
                                                    <li><a href="/catalog/holodilnik/">Холодильники</a></li>
                                                    <li><a href="/catalog/morozilnye/">Морозильные камеры</a></li>
                                                    <li><a href="/catalog/chest_freezer/">Морозильные лари</a></li>
                                                    <li><a href="/catalog/plitygazovye/">Плиты газовые</a></li>
                                                    <li><a href="/catalog/plityelektricheskie/">Плиты электрические</a>
                                                    </li>
                                                    <li><a href="/catalog/nastolnye_plity/">Настольные плиты</a></li>
                                                    <li><a href="/catalog/svchpechi/">Микроволновые печи</a></li>
                                                    <li><a href="/catalog/minipech/">Мини-печи</a></li>
                                                    <li><a href="/catalog/posudomoechnye/">Посудомоечные машины</a></li>
                                                </ul>
                                            </li>
                                            <li><a>Кухонная техника</a>
                                                <ul>
                                                    <li><a href="/catalog/chajniki_el/">Чайники электрические</a></li>
                                                    <li><a href="/catalog/termopoty/">Термопоты</a></li>
                                                    <li><a href="/catalog/aerogrili/">Аэрогрили</a></li>
                                                    <li><a href="/catalog/blendery/">Блендеры</a></li>
                                                    <li><a href="/catalog/crepes/">Блинницы</a></li>
                                                    <li><a href="/catalog/vakuumnye_upakovshchiki/">Вакуумные
                                                            упаковщики</a>
                                                    </li>
                                                    <li><a href="/catalog/distiller/">Дистилляторы</a></li>
                                                    <li><a href="/catalog/electrogrili/">Электрогрили</a></li>
                                                    <li><a href="/catalog/shreder_c/">Измельчители</a></li>
                                                    <li><a href="/catalog/iogurtnica/">Йогуртницы</a></li>
                                                    <li><a href="/catalog/kuhonvesi/">Кухонные весы</a></li>
                                                    <li><a href="/catalog/kombajny/">Кухонные комбайны</a></li>
                                                    <li><a href="/catalog/kitchen_m/">Кухонные машины</a></li>
                                                    <li><a href="/catalog/lomterezki/">Ломтерезки</a></li>
                                                    <li><a href="/catalog/miksery/">Миксеры</a></li>
                                                    <li><a href="/catalog/multivarki/">Мультиварки</a></li>
                                                    <li><a href="/catalog/myasorubki/">Мясорубки</a></li>
                                                    <li><a href="/catalog/parovarki/">Пароварки</a></li>
                                                    <li><a href="/catalog/other_mbt/">Прочая кухонная техника</a></li>
                                                    <li><a href="/catalog/sokovyzhimalki/">Соковыжималки</a></li>
                                                    <li><a href="/catalog/syshkiovosh/">Сушки для овощей</a></li>
                                                    <li><a href="/catalog/sandwiches_waffle/">Сэндвичницы и
                                                            вафельницы</a>
                                                    </li>
                                                    <li><a href="/catalog/tostery/">Тостеры</a></li>
                                                    <li><a href="/catalog/frityurnicy/">Фритюрницы</a></li>
                                                    <li><a href="/catalog/xlebopechi/">Хлебопечки</a></li>
                                                    <li><a href="/catalog/shashlychnicy/">Шашлычницы</a></li>
                                                    <li><a href="/catalog/yajcevarki/">Яйцеварки</a></li>
                                                    <li><a href="/catalog/hanger_bt/">Кронштейны для СВЧ</a></li>
                                                    <li><a href="/catalog/aksessuary_dlya_kuhonnyh_priborov/">Аксессуары
                                                            для
                                                            кухонных приборов</a></li>
                                                </ul>
                                            </li>
                                            <li><a>Фильтры для воды</a>
                                                <ul>
                                                    <li><a href="/catalog/akvafiltrya/">Аквафильтры</a></li>
                                                    <li><a href="/catalog/akvafiltrykart/">Картриджи для
                                                            аквафильтров</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a>Приготовление кофе</a>
                                                <ul>
                                                    <li><a href="/catalog/kofevarki/">Кофеварки</a></li>
                                                    <li><a href="/catalog/caps_coff/">Кофеварки капсульные</a></li>
                                                    <li><a href="/catalog/kofemashiny/">Кофемашины</a></li>
                                                    <li><a href="/catalog/kofemolki/">Кофемолки</a></li>
                                                    <li><a href="/catalog/kofe/">Кофе</a></li>
                                                    <li><a href="/catalog/acesskofe/">Аксессуары для кофеварок</a></li>
                                                </ul>
                                            </li>
                                            <li><a>Вытяжки</a>
                                                <ul>
                                                    <li><a href="/catalog/hanging_hood/">Подвесные вытяжки</a></li>
                                                    <li><a href="/catalog/chimney_hood/">Каминные вытяжки</a></li>
                                                    <li><a href="/catalog/built_in_hood/">Встраиваемые вытяжки</a></li>
                                                    <li><a href="/catalog/acc_hoods/">Аксессуары для вытяжек</a></li>
                                                </ul>
                                            </li>
                                            <li><a>Встраиваемая техника</a>
                                                <ul>
                                                    <li><a href="/catalog/vstraivaemyepaneli/">Варочные поверхности
                                                            газовые</a></li>
                                                    <li><a href="/catalog/vstraivaemyepaneliel/">Варочные поверхности
                                                            электрические</a></li>
                                                    <li><a href="/catalog/vstraivaemyeduhovka/">Духовые шкафы
                                                            газовые</a>
                                                    </li>
                                                    <li><a href="/catalog/vstraivaemyeduhovkael/">Духовые шкафы
                                                            электрические</a></li>
                                                    <li><a href="/catalog/vstraivaemyesvh/">Встраиваемые микроволновые
                                                            печи</a></li>
                                                    <li><a href="/catalog/vstraivaemyeposuda/">Встраиваемые
                                                            посудомоечные
                                                            машины</a></li>
                                                    <li><a href="/catalog/vstraivaemyeholod/">Встраиваемые
                                                            холодильники</a>
                                                    </li>
                                                    <li><a href="/catalog/fr_cam/">Встраиваемые морозильные камеры</a>
                                                    </li>
                                                    <li><a href="/catalog/vstraivaemye/">Встраиваемые стиральные
                                                            машины</a>
                                                    </li>
                                                    <li><a href="/catalog/oth_cof/">Прочая встраиваимая техника</a></li>
                                                </ul>
                                            </li>
                                            <li><a>Посуда</a>
                                                <ul>
                                                    <li><a href="/catalog/pan/">Кастрюли</a></li>
                                                    <li><a href="/catalog/kovshi/">Ковши</a></li>
                                                    <li><a href="/catalog/cover/">Крышки для посуды</a></li>
                                                    <li><a href="/catalog/posuda/">Кухонные аксессуары</a></li>
                                                    <li><a href="/catalog/knife_k/">Кухонные ножи</a></li>
                                                    <li><a href="/catalog/nabory_posudy/">Наборы посуды</a></li>
                                                    <li><a href="/catalog/posuda_dlya_hraneniya/">Посуда для
                                                            хранения</a>
                                                    </li>
                                                    <li><a href="/catalog/pan_fr/">Сковороды</a></li>
                                                    <li><a href="/catalog/soteiniki/">Сотейники</a></li>
                                                    <li><a href="/catalog/stolovye_pribory/">Столовые приборы</a></li>
                                                    <li><a href="/catalog/thermosy/">Термосы и термокружки</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <div class="info visible-lg">
                                            <ul>

                                                <li class="first">
                                                    <div class="thumbnail">
                                                        <img src="//opt-860641.ssl.1c-bitrix-cdn.ru/upload/iblock/4d1/4d1725b6b245e55f47c05d9b9761dea2.png?147793013893239"
                                                             alt="Техника для кухни"><br>
                                                    </div>
                                                    <hr/>
                                                </li>
                                                <li><a href="/shops/">АДРЕСА МАГАЗИНОВ</a></li>
                                                <li><a href="/info/dostavka/">ДОСТАВКА</a></li>
                                                <li><a href="/info/oplata/">ОПЛАТА</a></li>
                                            </ul>

                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown dropdown-submenu">
                                    <a class="dropdown-toggle pzsad"
                                       data-toggle="dropdown">Садовая техника и инструменты</a>
                                    <div class="dropdown-menu">
                                        <ul class="block-text">
                                            <li><a>Дрели и шуруповерты</a>
                                                <ul>
                                                    <li><a href="/catalog/dreli/">Дрели</a></li>
                                                    <li><a href="/catalog/shurupoverty/">Шуруповерты</a></li>
                                                    <li><a href="/catalog/perforatory/">Перфораторы</a></li>
                                                </ul>
                                            </li>
                                            <li><a>Измерительный инструмент</a>
                                                <ul>
                                                    <li><a href="/catalog/multimetry/">Мультиметры</a></li>
                                                    <li><a href="/catalog/testery/">Тестеры</a></li>
                                                    <li><a href="/catalog/indikatory_napryazheniya/">Индикаторы
                                                            напряжения</a></li>
                                                    <li><a href="/catalog/lazernye_dalnomery/">Лазерные дальномеры</a>
                                                    </li>
                                                    <li><a href="/catalog/lazernye_urovni/">Лазерные уровни</a></li>
                                                    <li><a href="/catalog/detektory_metalla/">Детекторы металла</a></li>
                                                    <li><a href="/catalog/teplovizory_i_termodetektory/">Тепловизоры и
                                                            термодетекторы</a></li>
                                                    <li><a href="/catalog/drugie_izmeritelnye_pribory/">Другие
                                                            измерительные
                                                            приборы</a></li>
                                                </ul>
                                            </li>
                                            <li><a>Пилы</a>
                                                <ul>
                                                    <li><a href="/catalog/cepelekropila/">Цепные пилы</a></li>
                                                    <li><a href="/catalog/discpila/">Дисковые пилы</a></li>
                                                    <li><a href="/catalog/sabelnyepily/">Сабельные пилы</a></li>
                                                    <li><a href="/catalog/torcovochnye_pily/">Торцовочные пилы</a></li>
                                                </ul>
                                            </li>
                                            <li><a>Шлифмашины</a>
                                                <ul>
                                                    <li><a href="/catalog/vibroshlifmashina/">Виброшлифовальные
                                                            машины</a>
                                                    </li>
                                                    <li><a href="/catalog/deltashlifmashiny/">Дельташлифовальные
                                                            машины</a>
                                                    </li>
                                                    <li><a href="/catalog/lentochnyeshlifmashiny/">Ленточные
                                                            шлифмашины</a>
                                                    </li>
                                                    <li><a href="/catalog/ugloshlifovalniemashiny/">Углошлифовальные
                                                            машины</a></li>
                                                    <li><a href="/catalog/ekscentrikovyeshlifmashiny/">Эксцентриковые
                                                            шлифмашины</a></li>
                                                    <li><a href="/catalog/prochie_shlifmashiny/">Прочие шлифмашины</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a>Электроинструмент</a>
                                                <ul>
                                                    <li><a href="/catalog/engravers/">Граверы</a></li>
                                                    <li><a href="/catalog/kleevye_pistolety/">Клеевые пистолеты</a></li>
                                                    <li><a href="/catalog/kraskopulty/">Краскопульты</a></li>
                                                    <li><a href="/catalog/lobziki/">Лобзики</a></li>
                                                    <li><a href="/catalog/multitoolins/">Многофункциональный
                                                            инструмент</a>
                                                    </li>
                                                    <li><a href="/catalog/rubanki/">Рубанки</a></li>
                                                    <li><a href="/catalog/svarochnaeapp/">Сварочные аппараты</a></li>
                                                    <li><a href="/catalog/cons_vc/">Строительные пылесосы</a></li>
                                                    <li><a href="/catalog/cons_st/">Строительные степлеры</a></li>
                                                    <li><a href="/catalog/texfen/">Технические фены</a></li>
                                                    <li><a href="/catalog/tochila/">Точила</a></li>
                                                    <li><a href="/catalog/frezery/">Фрезеры</a></li>
                                                    <li><a href="/catalog/shtroborezy/">Штроборезы</a></li>
                                                </ul>
                                            </li>
                                            <li><a>Оснастка и наборы инструментов</a>
                                                <ul>
                                                    <li><a href="/catalog/zaryadnye_ustrojstva_el/">Зарядные
                                                            устройства</a>
                                                    </li>
                                                    <li><a href="/catalog/lobzikovye_pilki/">Лобзиковые пилки</a></li>
                                                    <li><a href="/catalog/set_drill/">Наборы бит и сверл</a></li>
                                                    <li><a href="/catalog/nabory_instrumentov_i_osnastki/">Наборы
                                                            инструментов и оснастки</a></li>
                                                    <li><a href="/catalog/otreznye_krugi/">Отрезные круги</a></li>
                                                    <li><a href="/catalog/ehlektrody/">Электроды и маски сварщиков</a>
                                                    </li>
                                                    <li><a href="/catalog/akkumulyatory_ehlekt/">Аккумуляторы для
                                                            электроинструмента</a></li>
                                                    <li><a href="/catalog/osnastka/">Аксессуары для
                                                            электроинструмента</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a>Садовая техника</a>
                                                <ul>
                                                    <li><a href="/catalog/blover/">Воздуходувки</a></li>
                                                    <li><a href="/catalog/gazonokosilki/">Газонокосилки</a></li>
                                                    <li><a href="/catalog/generators/">Генераторы</a></li>
                                                    <li><a href="/catalog/cultivators/">Культиваторы</a></li>
                                                    <li><a href="/catalog/polivochnoe/">Оборудование для полива</a></li>
                                                    <li><a href="/catalog/motobloki/">Мотоблоки</a></li>
                                                    <li><a href="/catalog/cutters/">Ножницы и кусторезы</a></li>
                                                    <li><a href="/catalog/tool_gard/">Оснастка к садовой технике</a>
                                                    </li>
                                                    <li><a href="/catalog/sadovye_izmelchitely/">Садовые
                                                            измельчители</a>
                                                    </li>
                                                    <li><a href="/catalog/nasosdrenaj/">Садовые насосы</a></li>
                                                    <li><a href="/catalog/sadtrimer/">Садовые триммеры</a></li>
                                                    <li><a href="/catalog/silovye_udlinitely/">Силовые удлинители</a>
                                                    </li>
                                                    <li><a href="/catalog/snowthrowers/">Снегоуборщики</a></li>
                                                    <li><a href="/catalog/stabilizatory_silovye/">Стабилизаторы
                                                            напряжения
                                                            для дома</a></li>
                                                </ul>
                                            </li>
                                            <li><a>Садовые инструменты</a>
                                                <ul>
                                                    <li><a href="/catalog/rake/">Грабли</a></li>
                                                    <li><a href="/catalog/shovel/">Лопаты</a></li>
                                                    <li><a href="/catalog/plantingtool/">Садово-посадочные
                                                            инструменты</a>
                                                    </li>
                                                    <li><a href="/catalog/gardenshears/">Садовые ножницы</a></li>
                                                    <li><a href="/catalog/gardensaws/">Садовые пилы и ножи</a></li>
                                                    <li><a href="/catalog/pruners/">Секаторы и Сучкорезы</a></li>
                                                    <li><a href="/catalog/axes/">Топоры</a></li>
                                                    <li><a href="/catalog/accsadovye_instrumenty/">Аксессуары для
                                                            садового
                                                            инструмента</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <div class="info visible-lg">
                                            <ul>

                                                <li class="first">
                                                    <div class="thumbnail">
                                                        <img src="//opt-860641.ssl.1c-bitrix-cdn.ru/upload/iblock/224/2243ba56471933fdc01ced663e2c2d61.png?1476183201108638"
                                                             alt="Садовая техника и инструменты"><br>
                                                    </div>
                                                    <hr/>
                                                </li>
                                                <li><a href="/shops/">АДРЕСА МАГАЗИНОВ</a></li>
                                                <li><a href="/info/dostavka/">ДОСТАВКА</a></li>
                                                <li><a href="/info/oplata/">ОПЛАТА</a></li>
                                            </ul>

                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown dropdown-submenu">
                                    <a class="dropdown-toggle pzumnyidom"
                                       data-toggle="dropdown">Умный дом и видеонаблюдение</a>
                                    <div class="dropdown-menu">
                                        <ul class="block-text">
                                            <li><a>Умный дом</a>
                                                <ul>
                                                    <li><a href="/catalog/smarthome/">Системы Умный дом</a></li>
                                                    <li><a href="/catalog/umnye_rozetki/">Умные розетки</a></li>
                                                    <li><a href="/catalog/umnye_lampy/">Умные лампы</a></li>
                                                </ul>
                                            </li>
                                            <li><a>Системы видеонаблюдения</a>
                                                <ul>
                                                    <li><a href="/catalog/netvideoreg/">Видеорегистраторы сетевые</a>
                                                    </li>
                                                    <li><a href="/catalog/cctvanalog/">Камеры для видеонаблюдения</a>
                                                    </li>
                                                    <li><a href="/catalog/kronshtejny_dlya_videokamer/">Кронштейны для
                                                            видеокамер</a></li>
                                                    <li><a href="/catalog/komp_vn/">Комплекты видеонаблюдения</a></li>
                                                    <li><a href="/catalog/videomonitor/">Мониторы для систем
                                                            видеонаблюдения</a></li>
                                                    <li><a href="/catalog/prozhektory/">Прожекторы</a></li>
                                                    <li><a href="/catalog/ipcamaccessories/">Аксессуары для
                                                            видеонаблюдения</a></li>
                                                </ul>
                                            </li>
                                            <li><a>Системы контроля</a>
                                                <ul>
                                                    <li><a href="/catalog/call_panel/">Вызывные панели</a></li>
                                                    <li><a href="/catalog/knopki_vyhoda/">Кнопки выхода</a></li>
                                                    <li><a href="/catalog/domophone/">Домофоны</a></li>
                                                    <li><a href="/catalog/lock/">Электронные замки</a></li>
                                                    <li><a href="/catalog/closers/">Доводчики</a></li>
                                                    <li><a href="/catalog/sensor/">Датчики</a></li>
                                                    <li><a href="/catalog/gsm_signalizaciya/">Комплекты сигнализаций</a>
                                                    </li>
                                                    <li><a href="/catalog/schityvateli_kart/">Считыватели карт</a></li>
                                                    <li><a href="/catalog/kontrollery_dostupa/">Контроллеры доступа</a>
                                                    </li>
                                                    <li><a href="/catalog/terminaly_dostupa/">Терминалы доступа</a></li>
                                                    <li><a href="/catalog/accessories_skud/">Аксессуары для систем
                                                            контроля</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <div class="info visible-lg">
                                            <ul>

                                                <li class="first">
                                                    <div class="thumbnail">
                                                        <img src="//opt-860641.ssl.1c-bitrix-cdn.ru/upload/iblock/ac0/ac04bb39401f5061b9d738b2365110e9.png?151272646871649"
                                                             alt="Умный дом и видеонаблюдение"><br>
                                                    </div>
                                                    <hr/>
                                                </li>
                                                <li><a href="/shops/">АДРЕСА МАГАЗИНОВ</a></li>
                                                <li><a href="/info/dostavka/">ДОСТАВКА</a></li>
                                                <li><a href="/info/oplata/">ОПЛАТА</a></li>
                                            </ul>

                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown dropdown-submenu">
                                    <a class="dropdown-toggle pzturizm"
                                       data-toggle="dropdown">Активный отдых и хобби</a>
                                    <div class="dropdown-menu">
                                        <ul class="block-text">
                                            <li><a>Активный отдых</a>
                                                <ul>
                                                    <li><a href="/catalog/giroskutery/">Гироскутеры</a></li>
                                                    <li><a href="/catalog/electrosamokaty/">Электросамокаты</a></li>
                                                    <li><a href="/catalog/electrobayki/">Электробайки</a></li>
                                                    <li><a href="/catalog/aksessuary_dlya_sredstv_peredvizheniya/">Аксессуары
                                                            для гироскутеров и самокатов</a></li>
                                                </ul>
                                            </li>
                                            <li><a>Хобби</a>
                                                <ul>
                                                    <li><a href="/catalog/kvadrokoptery/">Квадрокоптеры</a></li>
                                                    <li><a href="/catalog/radioupravlyaemye_modeli/">Радиоуправляемые
                                                            модели</a></li>
                                                    <li><a href="/catalog/ruchki_tride/">3D ручки</a></li>
                                                    <li><a href="/catalog/plastik_dlya_3d_ruchek/">Пластик для 3D
                                                            ручек</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a>Туризм, спорт</a>
                                                <ul>
                                                    <li><a href="/catalog/noji/">Складные ножи</a></li>
                                                    <li><a href="/catalog/nozhi_turisticheskie/">Ножи туристические</a>
                                                    </li>
                                                    <li><a href="/catalog/multituly/">Мультитулы</a></li>
                                                    <li><a href="/catalog/mnogofunkcionalnye_braslety/">Многофункциональные
                                                            браслеты</a></li>
                                                    <li><a href="/catalog/nabory_instrumentov_dlya_nozhej/">Наборы
                                                            инструментов для ножей</a></li>
                                                    <li><a href="/catalog/shvejcarskie_karty/">Швейцарские карты</a>
                                                    </li>
                                                    <li><a href="/catalog/tochilki_dlya_nozhej/">Точилки для ножей</a>
                                                    </li>
                                                    <li><a href="/catalog/chekhly_dlya_nozhej/">Чехлы для ножей</a></li>
                                                    <li><a href="/catalog/aksessuary_dlya_nozhej/">Аксессуары для
                                                            ножей</a>
                                                    </li>
                                                    <li><a href="/catalog/zapasnye_chasty_dlya_nojei/">Запасные части
                                                            для
                                                            ножей</a></li>
                                                    <li><a href="/catalog/fonary/">Фонари</a></li>
                                                    <li><a href="/catalog/binokli/">Бинокли</a></li>
                                                    <li><a href="/catalog/dlya_puteshestvij/">Аксессуары для
                                                            путешествий</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <div class="info visible-lg">
                                            <ul>

                                                <li class="first">
                                                    <div class="thumbnail">
                                                        <img src="//opt-860641.ssl.1c-bitrix-cdn.ru/upload/iblock/2a2/2a2e37b8a99c1df66af903a8e8369d30.png?151272651576081"
                                                             alt="Активный отдых и хобби"><br>
                                                        <a href="#"></a>
                                                    </div>
                                                    <hr/>
                                                </li>
                                                <li><a href="/shops/">АДРЕСА МАГАЗИНОВ</a></li>
                                                <li><a href="/info/dostavka/">ДОСТАВКА</a></li>
                                                <li><a href="/info/oplata/">ОПЛАТА</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
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
                            <a class="opacity7" href="/rent/">Арендодателям</a>
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
                            Copyright © 2006-2019 <a href="/">Интернет магазин электроники</a> ПОЗИТРОНИКА<br>
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
                            <li class="mail"><a href="#email">moscow@positronica.ru</a></li>
                        </ul>
                        <ul class="col-sm-5 col-md-4 col-lg-12 cards">
                            <li class="vs"><a href="#vs">&nbsp;</a></li>
                            <li class="mc"><a href="#mc">&nbsp;</a></li>
                            <li class="ms"><a href="#ms">&nbsp;</a></li>
                        </ul>
                        <!--noindex-->
                        <ul class="col-sm-4 col-md-3 col-lg-12 social">
                            <li class="fb"><a target="_blank" href="//www.facebook.com/PositronicaOfficial"
                                              rel="nofollow"></a></li>

                            <li class="vk"><a target="_blank" href="//vk.com/club25319996" rel="nofollow"></a></li>

                            <li class="tw"><a target="_blank" href="//twitter.com/POSITRONICA_ru" rel="nofollow"></a>
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
            _ba.push(["host", "kazan.positronica.ru"]);
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
                    'url': 'alakurtti.positronica.ru'
                }, {'text': 'Александров', 'action': '7', 'id': '7', 'url': 'aleksandrov.positronica.ru'}, {
                    'text': 'Алушта',
                    'action': '366',
                    'id': '366',
                    'url': 'alushta.positronica.ru'
                }, {'text': 'Амурский', 'action': '5643', 'id': '5643', 'url': 'biysk.positronica.ru'}, {
                    'text': 'Анапа',
                    'action': '10',
                    'id': '10',
                    'url': 'anapa.positronica.ru'
                }, {'text': 'Апатиты', 'action': '13', 'id': '13', 'url': 'apatity.positronica.ru'}, {
                    'text': 'Армавир',
                    'action': '5091',
                    'id': '5091',
                    'url': 'armavir.positronica.ru'
                }, {'text': 'Архангельск', 'action': '17', 'id': '17', 'url': 'arkhangelsk.positronica.ru'}, {
                    'text': 'Асбест',
                    'action': '5507',
                    'id': '5507',
                    'url': 'asbest.positronica.ru'
                }, {'text': 'Астрахань', 'action': '19', 'id': '19', 'url': 'astrakhan.positronica.ru'}, {
                    'text': 'Бабаево',
                    'action': '22',
                    'id': '22',
                    'url': 'babaevo.positronica.ru'
                }, {'text': 'Балаково', 'action': '24', 'id': '24', 'url': 'balakovo.positronica.ru'}, {
                    'text': 'Балахна',
                    'action': '26',
                    'id': '26',
                    'url': 'balakhna.positronica.ru'
                }, {'text': 'Барнаул', 'action': '28', 'id': '28', 'url': 'barnaul.positronica.ru'}, {
                    'text': 'Бийск',
                    'action': '32',
                    'id': '32',
                    'url': 'biysk.positronica.ru'
                }, {'text': 'Ботлих', 'action': '5637', 'id': '5637', 'url': 'botlih.positronica.ru'}, {
                    'text': 'Бузулук',
                    'action': '799',
                    'id': '799',
                    'url': 'buzuluk.positronica.ru'
                }, {
                    'text': 'Варениковская',
                    'action': '35',
                    'id': '35',
                    'url': 'varenikovskaya.positronica.ru'
                }, {'text': 'Великий Устюг', 'action': '37', 'id': '37', 'url': 'vustug.positronica.ru'}, {
                    'text': 'Вельск',
                    'action': '39',
                    'id': '39',
                    'url': 'velsk.positronica.ru'
                }, {
                    'text': 'Владивосток',
                    'action': '5149',
                    'id': '5149',
                    'url': 'vladivostok.positronica.ru'
                }, {
                    'text': 'Владикавказ',
                    'action': '41',
                    'id': '41',
                    'url': 'vladikavkaz.positronica.ru'
                }, {'text': 'Владимир', 'action': '962', 'id': '962', 'url': 'vladimir.positronica.ru'}, {
                    'text': 'Волгоград',
                    'action': '984',
                    'id': '984',
                    'url': 'volgograd.positronica.ru'
                }, {'text': 'Вологда', 'action': '42', 'id': '42', 'url': 'vologda.positronica.ru'}, {
                    'text': 'Воркута',
                    'action': '1008',
                    'id': '1008',
                    'url': 'sivtivkar.positronica.ru'
                }, {
                    'text': 'Воронеж',
                    'action': '1011',
                    'id': '1011',
                    'url': 'voronezh.positronica.ru'
                }, {
                    'text': 'Воскресенское',
                    'action': '45',
                    'id': '45',
                    'url': 'voskresenskoe.positronica.ru'
                }, {'text': 'Выборг', 'action': '1052', 'id': '1052', 'url': 'vyborg.positronica.ru'}, {
                    'text': 'Вязьма',
                    'action': '48',
                    'id': '48',
                    'url': 'vyazma.positronica.ru'
                }, {
                    'text': 'Геленджик',
                    'action': '49',
                    'id': '49',
                    'url': 'gelendjik.positronica.ru'
                }, {
                    'text': 'Горно-Алтайск',
                    'action': '214',
                    'id': '214',
                    'url': 'gorno-altaisk.positronica.ru'
                }, {'text': 'Грозный', 'action': '3092', 'id': '3092', 'url': 'grozniy.positronica.ru'}, {
                    'text': 'Дербент',
                    'action': '1357',
                    'id': '1357',
                    'url': 'derbent.positronica.ru'
                }, {
                    'text': 'Динская',
                    'action': '5196',
                    'id': '5196',
                    'url': 'dinskaya.positronica.ru'
                }, {
                    'text': 'Долгопрудный',
                    'action': '1393',
                    'id': '1393',
                    'url': 'dolgoprudnyy.positronica.ru'
                }, {'text': 'Ейск', 'action': '54', 'id': '54', 'url': 'yeysk.positronica.ru'}, {
                    'text': 'Екатеринбург',
                    'action': '56',
                    'id': '56',
                    'url': 'ekaterinburg.positronica.ru'
                }, {
                    'text': 'Железногорск',
                    'action': '58',
                    'id': '58',
                    'url': 'zhceleznogorsk.positronica.ru'
                }, {
                    'text': 'Зеленоборский',
                    'action': '5620',
                    'id': '5620',
                    'url': 'zelenoborsiy.positronica.ru'
                }, {
                    'text': 'Златоуст',
                    'action': '1690',
                    'id': '1690',
                    'url': 'zlatoust.positronica.ru'
                }, {
                    'text': 'Ивантеевка',
                    'action': '1730',
                    'id': '1730',
                    'url': 'ivanteevka.positronica.ru'
                }, {'text': 'Исаклы', 'action': '66', 'id': '66', 'url': 'isakly.positronica.ru'}, {
                    'text': 'Казань',
                    'action': '1832',
                    'id': '1832',
                    'url': 'kazan.positronica.ru'
                }, {'text': 'Калуга', 'action': '72', 'id': '72', 'url': 'kaluga.positronica.ru'}, {
                    'text': 'Камышин',
                    'action': '74',
                    'id': '74',
                    'url': 'kamyshin.positronica.ru'
                }, {'text': 'Кандалакша', 'action': '215', 'id': '215', 'url': 'kandalaksha.positronica.ru'}, {
                    'text': 'Кашира',
                    'action': '76',
                    'id': '76',
                    'url': 'kashira.positronica.ru'
                }, {'text': 'Кинель', 'action': '77', 'id': '77', 'url': 'kinel.positronica.ru'}, {
                    'text': 'Киржач',
                    'action': '79',
                    'id': '79',
                    'url': 'kirjach.positronica.ru'
                }, {'text': 'Кириллов', 'action': '81', 'id': '81', 'url': 'kirillov.positronica.ru'}, {
                    'text': 'Кириши',
                    'action': '84',
                    'id': '84',
                    'url': 'kirishi.positronica.ru'
                }, {'text': 'Киров', 'action': '86', 'id': '86', 'url': 'kirov.positronica.ru'}, {
                    'text': 'Кировск',
                    'action': '1967',
                    'id': '1967',
                    'url': 'kirovsk.positronica.ru'
                }, {
                    'text': 'Кичменгский Городок',
                    'action': '88',
                    'id': '88',
                    'url': 'kichmengorod.positronica.ru'
                }, {'text': 'Ковдор', 'action': '90', 'id': '90', 'url': 'kovdor.positronica.ru'}, {
                    'text': 'Коломна',
                    'action': '91',
                    'id': '91',
                    'url': 'kolomna.positronica.ru'
                }, {'text': 'Кольчугино', 'action': '93', 'id': '93', 'url': 'kolchugino.positronica.ru'}, {
                    'text': 'Кондопога',
                    'action': '2060',
                    'id': '2060',
                    'url': 'kondopoga.positronica.ru'
                }, {'text': 'Копейск', 'action': '2083', 'id': '2083', 'url': 'kopeisk.positronica.ru'}, {
                    'text': 'Коркино',
                    'action': '2097',
                    'id': '2097',
                    'url': 'korkino.positronica.ru'
                }, {'text': 'Королев', 'action': '2110', 'id': '2110', 'url': 'korolev.positronica.ru'}, {
                    'text': 'Краснодар',
                    'action': '96',
                    'id': '96',
                    'url': 'krasnodar.positronica.ru'
                }, {'text': 'Красный Яр', 'action': '98', 'id': '98', 'url': 'samara.positronica.ru'}, {
                    'text': 'Крымск',
                    'action': '101',
                    'id': '101',
                    'url': 'krimsk.positronica.ru'
                }, {'text': 'Кубинка', 'action': '2253', 'id': '2253', 'url': 'kubinka.positronica.ru'}, {
                    'text': 'Лобня',
                    'action': '2447',
                    'id': '2447',
                    'url': 'lobnya.positronica.ru'
                }, {
                    'text': 'Ловозеро',
                    'action': '5616',
                    'id': '5616',
                    'url': 'lovozero.positronica.ru'
                }, {
                    'text': 'Лодейное Поле',
                    'action': '108',
                    'id': '108',
                    'url': 'lodeynoye-pole.positronica.ru'
                }, {'text': 'Луза', 'action': '110', 'id': '110', 'url': 'luza.positronica.ru'}, {
                    'text': 'Магадан',
                    'action': '2523',
                    'id': '2523',
                    'url': 'magadan.positronica.ru'
                }, {'text': 'Магас', 'action': '3069', 'id': '3069', 'url': 'nazran.positronica.ru'}, {
                    'text': 'Майкоп',
                    'action': '2528',
                    'id': '2528',
                    'url': 'maykop.positronica.ru'
                }, {
                    'text': 'Махачкала',
                    'action': '2637',
                    'id': '2637',
                    'url': 'mahachkala.positronica.ru'
                }, {'text': 'Междуреченский', 'action': '5639', 'id': '5639', 'url': 'uray.positronica.ru'}, {
                    'text': 'Миасс',
                    'action': '2686',
                    'id': '2686',
                    'url': 'miass.positronica.ru'
                }, {'text': 'Мончегорск', 'action': '115', 'id': '115', 'url': 'monchegorsk.positronica.ru'}, {
                    'text': 'Москва',
                    'action': '116',
                    'id': '116',
                    'url': ''
                }, {
                    'text': 'Муравленко',
                    'action': '5496',
                    'id': '5496',
                    'url': 'muravlenko.positronica.ru'
                }, {'text': 'Мурманск', 'action': '2781', 'id': '2781', 'url': 'murmansk.positronica.ru'}, {
                    'text': 'Мытищи',
                    'action': '2792',
                    'id': '2792',
                    'url': 'mitishi.positronica.ru'
                }, {
                    'text': 'Набережные Челны',
                    'action': '118',
                    'id': '118',
                    'url': 'nchelny.positronica.ru'
                }, {'text': 'Назрань', 'action': '217', 'id': '217', 'url': 'nazran.positronica.ru'}, {
                    'text': 'Нарьян-Мар',
                    'action': '122',
                    'id': '122',
                    'url': 'naryan-mar.positronica.ru'
                }, {'text': 'Невинномысск', 'action': '124', 'id': '124', 'url': 'nmyssk.positronica.ru'}, {
                    'text': 'Нерехта',
                    'action': '2861',
                    'id': '2861',
                    'url': 'nerekhta.positronica.ru'
                }, {
                    'text': 'Нижневартовск',
                    'action': '125',
                    'id': '125',
                    'url': 'nizhcnevartovsk.positronica.ru'
                }, {
                    'text': 'Нижний Новгород',
                    'action': '2886',
                    'id': '2886',
                    'url': 'nijniy-novgorod.positronica.ru'
                }, {
                    'text': 'Новокуйбышевск',
                    'action': '126',
                    'id': '126',
                    'url': 'novokuibyshevsk.positronica.ru'
                }, {
                    'text': 'Новомосковск',
                    'action': '129',
                    'id': '129',
                    'url': 'novomoskovsk.positronica.ru'
                }, {
                    'text': 'Новопокровская',
                    'action': '5411',
                    'id': '5411',
                    'url': 'novopokrovskaya.positronica.ru'
                }, {
                    'text': 'Новороссийск',
                    'action': '130',
                    'id': '130',
                    'url': 'novorossiysk.positronica.ru'
                }, {
                    'text': 'Новоуральск',
                    'action': '131',
                    'id': '131',
                    'url': 'novouralsk.positronica.ru'
                }, {'text': 'Обливская', 'action': '5677', 'id': '5677', 'url': 'oblivskaya.positronica.ru'}, {
                    'text': 'Озерск',
                    'action': '133',
                    'id': '133',
                    'url': 'ozersk.positronica.ru'
                }, {'text': 'Омск', 'action': '3178', 'id': '3178', 'url': 'omsk.positronica.ru'}, {
                    'text': 'Оренбург',
                    'action': '3199',
                    'id': '3199',
                    'url': 'orenburg.positronica.ru'
                }, {'text': 'Пангоды', 'action': '136', 'id': '136', 'url': 'pangody.positronica.ru'}, {
                    'text': 'Петрозаводск',
                    'action': '138',
                    'id': '138',
                    'url': 'petrozavodsk.positronica.ru'
                }, {'text': 'Печора', 'action': '142', 'id': '142', 'url': 'pechora.positronica.ru'}, {
                    'text': 'Пикалево',
                    'action': '144',
                    'id': '144',
                    'url': 'pikalevo.positronica.ru'
                }, {
                    'text': 'Полярные Зори',
                    'action': '145',
                    'id': '145',
                    'url': 'polyarnye-zori.positronica.ru'
                }, {'text': 'Приозерск', 'action': '147', 'id': '147', 'url': 'priozersk.positronica.ru'}, {
                    'text': 'Пушкино',
                    'action': '151',
                    'id': '151',
                    'url': 'pushkino.positronica.ru'
                }, {'text': 'Ревда', 'action': '5673', 'id': '5673', 'url': 'revda.positronica.ru'}, {
                    'text': 'Ростов-на-Дону',
                    'action': '3753',
                    'id': '3753',
                    'url': 'rostov-na-donu.positronica.ru'
                }, {'text': 'Самара', 'action': '157', 'id': '157', 'url': 'samara.positronica.ru'}, {
                    'text': 'Санкт-Петербург',
                    'action': '99',
                    'id': '99',
                    'url': 'spb.positronica.ru'
                }, {'text': 'Саракташ', 'action': '160', 'id': '160', 'url': 'saraktash.positronica.ru'}, {
                    'text': 'Сасово',
                    'action': '162',
                    'id': '162',
                    'url': 'sasovo.positronica.ru'
                }, {'text': 'Сатка', 'action': '3876', 'id': '3876', 'url': 'satka.positronica.ru'}, {
                    'text': 'Северодвинск',
                    'action': '163',
                    'id': '163',
                    'url': 'severodvinsk.positronica.ru'
                }, {'text': 'Сегежа', 'action': '167', 'id': '167', 'url': 'segezha.positronica.ru'}, {
                    'text': 'Сергиев Посад',
                    'action': '3984',
                    'id': '3984',
                    'url': 'sergiev-posad.positronica.ru'
                }, {'text': 'Серов', 'action': '5543', 'id': '5543', 'url': 'serov.positronica.ru'}, {
                    'text': 'Серпухов',
                    'action': '168',
                    'id': '168',
                    'url': 'serpuhov.positronica.ru'
                }, {
                    'text': 'Славянск-на-Кубани',
                    'action': '4048',
                    'id': '4048',
                    'url': 'slavyansk.positronica.ru'
                }, {'text': 'Сокол', 'action': '172', 'id': '172', 'url': 'sokol.positronica.ru'}, {
                    'text': 'Сортавала',
                    'action': '5635',
                    'id': '5635',
                    'url': 'sortavala.positronica.ru'
                }, {
                    'text': 'Старотитаровская',
                    'action': '4225',
                    'id': '4225',
                    'url': 'temruk.positronica.ru'
                }, {'text': 'Ступино', 'action': '4279', 'id': '4279', 'url': 'stupino.positronica.ru'}, {
                    'text': 'Таганрог',
                    'action': '175',
                    'id': '175',
                    'url': 'taganrog.positronica.ru'
                }, {
                    'text': 'Талица',
                    'action': '5613',
                    'id': '5613',
                    'url': 'talitsa.positronica.ru'
                }, {
                    'text': 'Тарногский Городок',
                    'action': '177',
                    'id': '177',
                    'url': 'tarnogskiy_gorodok.positronica.ru'
                }, {'text': 'Темрюк', 'action': '179', 'id': '179', 'url': 'temruk.positronica.ru'}, {
                    'text': 'Тимашевск',
                    'action': '4420',
                    'id': '4420',
                    'url': 'timashevsk.positronica.ru'
                }, {'text': 'Тихорецк', 'action': '4440', 'id': '4440', 'url': 'tikhoretsk.positronica.ru'}, {
                    'text': 'Тотьма',
                    'action': '181',
                    'id': '181',
                    'url': 'totma.positronica.ru'
                }, {'text': 'Тула', 'action': '4516', 'id': '4516', 'url': 'tyla.positronica.ru'}, {
                    'text': 'Тучково',
                    'action': '185',
                    'id': '185',
                    'url': 'tuchkovo.positronica.ru'
                }, {'text': 'Тюмень', 'action': '187', 'id': '187', 'url': 'tumen.positronica.ru'}, {
                    'text': 'Ульяновск',
                    'action': '191',
                    'id': '191',
                    'url': 'ulianovsk.positronica.ru'
                }, {'text': 'Умба', 'action': '193', 'id': '193', 'url': 'umba.positronica.ru'}, {
                    'text': 'Урай',
                    'action': '5462',
                    'id': '5462',
                    'url': 'uray.positronica.ru'
                }, {
                    'text': 'Усолье-Сибирское',
                    'action': '194',
                    'id': '194',
                    'url': 'usolie-sibirskoe.positronica.ru'
                }, {'text': 'Усть-Лабинск', 'action': '4601', 'id': '4601', 'url': 'krasnodar.positronica.ru'}, {
                    'text': 'Уфа',
                    'action': '4607',
                    'id': '4607',
                    'url': 'ufa.positronica.ru'
                }, {'text': 'Фрязино', 'action': '4679', 'id': '4679', 'url': 'fryazino.positronica.ru'}, {
                    'text': 'Хабаровск',
                    'action': '197',
                    'id': '197',
                    'url': 'habarovsk.positronica.ru'
                }, {'text': 'Чагода', 'action': '199', 'id': '199', 'url': 'chagoda.positronica.ru'}, {
                    'text': 'Чапаевск',
                    'action': '4772',
                    'id': '4772',
                    'url': 'samara.positronica.ru'
                }, {'text': 'Чегдомын', 'action': '201', 'id': '201', 'url': 'chegdomyn.positronica.ru'}, {
                    'text': 'Челябинск',
                    'action': '4789',
                    'id': '4789',
                    'url': 'chelabinsk.positronica.ru'
                }, {
                    'text': 'Череповец',
                    'action': '202',
                    'id': '202',
                    'url': 'cherepovets.positronica.ru'
                }, {
                    'text': 'Черкесск',
                    'action': '4800',
                    'id': '4800',
                    'url': 'cherkessk.positronica.ru'
                }, {
                    'text': 'Черноголовка',
                    'action': '203',
                    'id': '203',
                    'url': 'chernogolovka.positronica.ru'
                }, {
                    'text': 'Черноморское',
                    'action': '5645',
                    'id': '5645',
                    'url': 'chernomorskoe.positronica.ru'
                }, {'text': 'Щелково', 'action': '4964', 'id': '4964', 'url': 'sholkovo.positronica.ru'}, {
                    'text': 'Щигры',
                    'action': '204',
                    'id': '204',
                    'url': 'schigry.positronica.ru'
                }, {'text': 'Юбилейный', 'action': '4986', 'id': '4986', 'url': ''}, {
                    'text': 'Южно-Сахалинск',
                    'action': '206',
                    'id': '206',
                    'url': 'yuzhno-sakhalinsk.positronica.ru'
                }, {'text': 'Якутск', 'action': '5432', 'id': '5432', 'url': 'yakutsk.positronica.ru'}, {
                    'text': 'Ялта',
                    'action': '5043',
                    'id': '5043',
                    'url': 'yalta.positronica.ru'
                }, {'text': 'Ярославль', 'action': '211', 'id': '211', 'url': 'yaroslavl.positronica.ru'}]
            };
            var baseHost = 'positronica.ru';
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
