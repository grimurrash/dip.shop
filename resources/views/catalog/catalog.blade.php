@extends('layouts.app')

@section('title',"Каталог товаров бытовой техники и электроники «ПОЗИТРОНИКА (Казань)")
@section('description','Широкий выбор электроники и бытовой техники в каталоге товаров интернет магазина ПОЗИТРОНИКА «ПОЗИТРОНИКА (Казань)')

@section('content')
    @include('components.wrap_menu')
    <div class="content">
        <ul class="breadcrumb hidden-xs" itemscope="" itemtype="http://schema.org/BreadcrumbList">
            <li itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem"><a itemprop="item"
                                                                                                 href="/"><span
                            itemprop="name">Интернет-магазин</span></a>
                <meta itemprop="position" content="1">
            </li>
            <li class="active">Каталог</li>
        </ul>
        <ul class="block-catalog">
            <li><b class="h4">Телевизоры и аудиотехника</b>
                <ul>
                    <li><b class="h5">Телевизоры</b>
                        <ul>
                            <li><a href="/catalog/televizory/">Телевизоры</a></li>
                        </ul>
                    </li>
                    <li><b class="h5">Аксессуары</b>
                        <ul>
                            <li><a href="/catalog/kronshtejny_tv/">Кронштейны для телевизоров</a></li>
                            <li><a href="/catalog/kronshtejny_dvd/">Кронштейны для DVD и Акустики</a></li>
                            <li><a href="/catalog/teleantenna/">Телевизионные антенны</a></li>
                            <li><a href="/catalog/kabeli/">Кабели для аудио- и видеотехники</a></li>
                            <li><a href="/catalog/pulty_du/">Пульты ДУ</a></li>
                            <li><a href="/catalog/zaryadnye_ustrojstva/">Аккумуляторы и батарейки</a></li>
                        </ul>
                    </li>
                    <li><b class="h5">Плееры и цифровое ТВ</b>
                        <ul>
                            <li><a href="/catalog/resivery/">DVB-T2 приставки</a></li>
                            <li><a href="/catalog/dvb_c_pristavki/">DVB-C приставки</a></li>
                            <li><a href="/catalog/dvd-pleery/">DVD плееры</a></li>
                            <li><a href="/catalog/dvbs/">Спутниковое ТВ</a></li>
                            <li><a href="/catalog/portativnye_dvd/">Портативные плееры</a></li>
                            <li><a href="/catalog/mediapleery/">Медиаплееры</a></li>
                        </ul>
                    </li>
                    <li><b class="h5">Проекторы и экраны</b>
                        <ul>
                            <li><a href="/catalog/proektory/">Проекторы</a></li>
                            <li><a href="/catalog/ekrany/">Проекционные экраны</a></li>
                            <li><a href="/catalog/kronshtejny_pj/">Кронштейны для проекторов</a></li>
                            <li><a href="/catalog/prezentery/">Презентеры</a></li>
                            <li><a href="/catalog/lampproektor/">Аксессуары для проекторов</a></li>
                        </ul>
                    </li>
                    <li><b class="h5">Аудиотехника</b>
                        <ul>
                            <li><a href="/catalog/magnitoly/">Магнитолы</a></li>
                            <li><a href="/catalog/muzykalnye_centry/">Музыкальные центры</a></li>
                            <li><a href="/catalog/radiobudilniki/">Радиобудильники</a></li>
                            <li><a href="/catalog/radiopriemniki/">Радиоприемники</a></li>
                            <li><a href="/catalog/domashnie_kinoteatry/">Домашние кинотеатры</a></li>
                            <li><a href="/catalog/zvukovye_proectory/">Звуковые панели</a></li>
                        </ul>
                    </li>
                    <li><b class="h5">Плееры и диктофоны</b>
                        <ul>
                            <li><a href="/catalog/diktofony/">Диктофоны</a></li>
                            <li><a href="/catalog/mp3_pleery/">Плееры MP3</a></li>
                            <li><a href="/catalog/chehli_portativnoj_audiotexniki/">Чехлы для портативной
                                    электроники</a></li>
                        </ul>
                    </li>
                    <li><b class="h5">HI-FI Компоненты</b>
                        <ul>
                            <li><a href="/catalog/acoustic_hifi/">Акустические системы Hi-Fi</a></li>
                            <li><a href="/catalog/subwoofer_hifi/">Сабвуферы Hi-Fi</a></li>
                            <li><a href="/catalog/resiveryhifi/">Ресиверы Hi-Fi</a></li>
                            <li><a href="/catalog/usiliteli/">Усилители Hi-Fi</a></li>
                            <li><a href="/catalog/turntables/">Проигрыватели винила</a></li>
                        </ul>
                    </li>
                    <li><b class="h5">Игровые приставки</b>
                        <ul>
                            <li><a href="/catalog/igrovye_pristavki/">Игровые приставки</a></li>
                            <li><a href="/catalog/accesspristavka/">Аксессуары для игровых приставок</a></li>
                        </ul>
                    </li>
                    <li><b class="h5">Музыкальные инструменты</b>
                        <ul>
                            <li><a href="/catalog/synths/">Синтезаторы</a></li>
                            <li><a href="/catalog/professional_acoustics/">Акустические комплекты</a></li>
                            <li><a href="/catalog/dj_consoles/">Микшерные пульты</a></li>
                            <li><a href="/catalog/musicaccessories/">Аксессуары для ЭМИ</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><b class="h4">Смартфоны и планшеты</b>
                <ul>
                    <li><b class="h5">Смартфоны и телефоны</b>
                        <ul>
                            <li><a href="/catalog/smartfone/">Смартфоны</a></li>
                            <li><a href="/catalog/mobilefone/">Мобильные телефоны</a></li>
                        </ul>
                    </li>
                    <li><b class="h5">Планшеты и электронные книги</b>
                        <ul>
                            <li><a href="/catalog/planshet_komp/">Планшеты</a></li>
                            <li><a href="/catalog/detskie_planshety/">Детские планшеты</a></li>
                            <li><a href="/catalog/pda/">Электронные книги</a></li>
                        </ul>
                    </li>
                    <li><b class="h5">Гаджеты</b>
                        <ul>
                            <li><a href="/catalog/accums/">Мобильные аккумуляторы</a></li>
                            <li><a href="/catalog/smartwatch/">Умные часы</a></li>
                            <li><a href="/catalog/fitnes_braslety/">Фитнес-браслеты</a></li>
                            <li><a href="/catalog/pedometer/">Шагомеры</a></li>
                            <li><a href="/catalog/vr_glasses/">Очки виртуальной реальности</a></li>
                            <li><a href="/catalog/aksessuary_dlya_gadzhetov/">Аксессуары для гаджетов</a></li>
                        </ul>
                    </li>
                    <li><b class="h5">Наушники и портативная акустика</b>
                        <ul>
                            <li><a href="/catalog/garn_tel/">Наушники и гарнитуры</a></li>
                            <li><a href="/catalog/bluetooth_garnitury/">Bluetooth гарнитуры</a></li>
                            <li><a href="/catalog/portativnaya_akustica/">Портативная акустика</a></li>
                            <li><a href="/catalog/aksessuary_dlya_naushnikov/">Аксессуары для наушников</a></li>
                        </ul>
                    </li>
                    <li><b class="h5">Аксессуары для смартфонов</b>
                        <ul>
                            <li><a href="/catalog/cheholtel/">Чехлы для смартфонов</a></li>
                            <li><a href="/catalog/zashitplenkatel/">Защитные пленки и стекла для смартфонов</a>
                            </li>
                            <li><a href="/catalog/zarjdtel/">Зарядные устройства для смартфонов</a></li>
                            <li><a href="/catalog/cablesmarfon/">Кабели для смартфонов</a></li>
                            <li><a href="/catalog/car_holder/">Держатели для смартфонов</a></li>
                            <li><a href="/catalog/acestel/">Аксессуары для смартфонов</a></li>
                            <li><a href="/catalog/sertifikaty_garantii/">Сертификаты дополнительной гарантии</a>
                            </li>
                        </ul>
                    </li>
                    <li><b class="h5">Аксессуары для планшетов</b>
                        <ul>
                            <li><a href="/catalog/bag_planshet/">Чехлы для планшетов</a></li>
                            <li><a href="/catalog/plenshet_plenki/">Защитные пленки для планшетов</a></li>
                            <li><a href="/catalog/avtoderjatel/">Держатели для планшетов</a></li>
                            <li><a href="/catalog/dokstancii_dlya_planshetov/">Док-станции для планшетов</a>
                            </li>
                            <li><a href="/catalog/cabely_dlya_planshetov/">Кабели для планшетов</a></li>
                            <li><a href="/catalog/accessories_planshet/">Аксессуары для планшетов</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><b class="h4">Ноутбуки и компьютеры</b>
                <ul>
                    <li><b class="h5">Ноутбуки</b>
                        <ul>
                            <li><a href="/catalog/notebook/">Ноутбуки</a></li>
                        </ul>
                    </li>
                    <li><b class="h5">Компьютеры и моноблоки</b>
                        <ul>
                            <li><a href="/catalog/computers/">Компьютеры</a></li>
                            <li><a href="/catalog/monoblock/">Моноблоки</a></li>
                            <li><a href="/catalog/platforms/">Платформы для сборки ПК</a></li>
                        </ul>
                    </li>
                    <li><b class="h5">Аксессуары для компьютеров и ноутбуков</b>
                        <ul>
                            <li><a href="/catalog/bag_notebook/">Сумки для ноутбуков</a></li>
                            <li><a href="/catalog/docstation_notebook/">Подставки для ноутбуков</a></li>
                            <li><a href="/catalog/accessories_notebook/">Аксессуары для ноутбуков</a></li>
                            <li><a href="/catalog/cha_ntb/">Блоки питания для ноутбуков</a></li>
                            <li><a href="/catalog/dockin_n/">Док-станции и порт-репликаторы</a></li>
                            <li><a href="/catalog/batt_nb/">Батареи для ноутбуков</a></li>
                            <li><a href="/catalog/usb_xaby/">USB Хабы</a></li>
                            <li><a href="/catalog/portmane_stika/">Портмоне, стойки для дисков</a></li>
                            <li><a href="/catalog/chistyashhie/">Чистящие средства</a></li>
                            <li><a href="/catalog/cablevga/">Кабели для ПК</a></li>
                        </ul>
                    </li>
                    <li><b class="h5">Мониторы и панели</b>
                        <ul>
                            <li><a href="/catalog/monitor/">Мониторы</a></li>
                            <li><a href="/catalog/proflcd/">Профессиональные панели</a></li>
                            <li><a href="/catalog/kron_monitorov/">Кронштейны для мониторов</a></li>
                        </ul>
                    </li>
                    <li><b class="h5">Мультимедиа</b>
                        <ul>
                            <li><a href="/catalog/kolonki_pc/">Колонки для компьютера</a></li>
                            <li><a href="/catalog/garnitury/">Наушники с микрофоном</a></li>
                            <li><a href="/catalog/mikrofony/">Микрофоны</a></li>
                            <li><a href="/catalog/veb_kamery/">Веб-камеры</a></li>
                            <li><a href="/catalog/usiliteli_dlya_nau/">Усилители для наушников</a></li>
                        </ul>
                    </li>
                    <li><b class="h5">Клавиатуры, мыши, джойстики</b>
                        <ul>
                            <li><a href="/catalog/klaviatury/">Клавиатуры</a></li>
                            <li><a href="/catalog/klaviatura_mysh/">Комплекты клавиатура+мышь</a></li>
                            <li><a href="/catalog/myshitrekboly/">Компьютерные мыши</a></li>
                            <li><a href="/catalog/graf_planshety/">Графические планшеты</a></li>
                            <li><a href="/catalog/kovriki_myshi/">Коврики для мыши</a></li>
                            <li><a href="/catalog/djoy_rul/">Джойстики для компьютера</a></li>
                        </ul>
                    </li>
                    <li><b class="h5">Носители информации</b>
                        <ul>
                            <li><a href="/catalog/card_memory/">Карты памяти</a></li>
                            <li><a href="/catalog/flash_usb/">Флешки</a></li>
                            <li><a href="/catalog/vneshnie_hd_diski/">Внешние жесткие диски</a></li>
                            <li><a href="/catalog/nas/">Сетевые хранилища NAS</a></li>
                            <li><a href="/catalog/kard_ridery/">Картридеры</a></li>
                            <li><a href="/catalog/nositeli/">Оптические диски</a></li>
                            <li><a href="/catalog/acc_hdd_ssd/">Аксессуары для HDD</a></li>
                        </ul>
                    </li>
                    <li><b class="h5">Защита питания</b>
                        <ul>
                            <li><a href="/catalog/setevye_filtry/">Сетевые фильтры</a></li>
                            <li><a href="/catalog/stabilizatory_napryazheniya/">Стабилизаторы напряжения</a>
                            </li>
                            <li><a href="/catalog/ibp/">ИБП</a></li>
                            <li><a href="/catalog/batarei_ibp/">Батареи для ИБП</a></li>
                            <li><a href="/catalog/aksessuary_ibp/">Аксессуары для ИБП</a></li>
                        </ul>
                    </li>
                    <li><b class="h5">Программное обеспечение</b>
                        <ul>
                            <li><a href="/catalog/soft_utility/">Программы и утилиты</a></li>
                            <li><a href="/catalog/programmnoe_obespechenie/">Офисные программы</a></li>
                            <li><a href="/catalog/antivirusy/">Антивирусы</a></li>
                            <li><a href="/catalog/opsystem/">Операционные системы</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><b class="h4">Комплектующие</b>
                <ul>
                    <li><b class="h5">Процессоры</b>
                        <ul>
                            <li><a href="/catalog/processory/">Процессоры</a></li>
                        </ul>
                    </li>
                    <li><b class="h5">Материнские платы</b>
                        <ul>
                            <li><a href="/catalog/motherboard/">Материнские платы</a></li>
                        </ul>
                    </li>
                    <li><b class="h5">Модули памяти</b>
                        <ul>
                            <li><a href="/catalog/memory/">Модули памяти</a></li>
                        </ul>
                    </li>
                    <li><b class="h5">Видеокарты</b>
                        <ul>
                            <li><a href="/catalog/videokarty/">Видеокарты</a></li>
                        </ul>
                    </li>
                    <li><b class="h5">Хранение данных</b>
                        <ul>
                            <li><a href="/catalog/hdd/">Жесткие диски</a></li>
                            <li><a href="/catalog/ssd/">Накопители SSD</a></li>
                        </ul>
                    </li>
                    <li><b class="h5">Корпуса для жестких дисков</b>
                        <ul>
                            <li><a href="/catalog/konteinerhdd/">Корпуса для жестких дисков</a></li>
                            <li><a href="/catalog/sata_kabeli/">SATA кабели</a></li>
                        </ul>
                    </li>
                    <li><b class="h5">Приводы и дисководы</b>
                        <ul>
                            <li><a href="/catalog/opticdvd/">Приводы DVD</a></li>
                            <li><a href="/catalog/fdd/">Дисководы FDD</a></li>
                        </ul>
                    </li>
                    <li><b class="h5">Корпуса и блоки питания</b>
                        <ul>
                            <li><a href="/catalog/bloksbp/">Блоки питания</a></li>
                            <li><a href="/catalog/korpusa/">Корпуса</a></li>
                        </ul>
                    </li>
                    <li><b class="h5">Устройства охлаждения</b>
                        <ul>
                            <li><a href="/catalog/systemohlaj/">Устройства охлаждения процессора</a></li>
                            <li><a href="/catalog/ustrojstva_ohlazhdeniya_korpusa/">Вентиляторы для корпуса</a>
                            </li>
                            <li><a href="/catalog/termopasta/">Термопаста</a></li>
                        </ul>
                    </li>
                    <li><b class="h5">Звуковые карты и ТВ-тюнеры</b>
                        <ul>
                            <li><a href="/catalog/soundcard/">Звуковые карты</a></li>
                            <li><a href="/catalog/tvtuner/">ТВ-тюнеры и карты видеозахвата</a></li>
                            <li><a href="/catalog/acc_dlya_zvukovykh/">Аксессуары для звуковых карт</a></li>
                        </ul>
                    </li>
                    <li><b class="h5">Контроллеры</b>
                        <ul>
                            <li><a href="/catalog/controlusb/">Контроллеры портов</a></li>
                            <li><a href="/catalog/idecontr/">Контроллеры интерфейсов</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><b class="h4">Офисная техника и мебель</b>
                <ul>
                    <li><b class="h5">Мебель</b>
                        <ul>
                            <li><a href="/catalog/kreslastul/">Офисные кресла</a></li>
                            <li><a href="/catalog/detskie_kresla/">Детские кресла</a></li>
                            <li><a href="/catalog/shkolnye_party/">Школьные парты</a></li>
                            <li><a href="/catalog/hanger/">Вешалки</a></li>
                            <li><a href="/catalog/kovriki_zashchitnye/">Коврики защитные</a></li>
                            <li><a href="/catalog/mebelaccess/">Мебельные аксессуары</a></li>
                        </ul>
                    </li>
                    <li><b class="h5">Освещение</b>
                        <ul>
                            <li><a href="/catalog/tab_lamp/">Настольные лампы</a></li>
                            <li><a href="/catalog/nochniki/">Ночники</a></li>
                        </ul>
                    </li>
                    <li><b class="h5">Принтеры, МФУ, копиры</b>
                        <ul>
                            <li><a href="/catalog/mfu/">МФУ струйные</a></li>
                            <li><a href="/catalog/mfu_laser/">МФУ лазерные</a></li>
                            <li><a href="/catalog/printery/">Принтеры струйные</a></li>
                            <li><a href="/catalog/printer_laser/">Принтеры лазерные</a></li>
                            <li><a href="/catalog/portativnye_printery/">Портативные принтеры</a></li>
                            <li><a href="/catalog/label_printer/">Принтеры для печати наклеек</a></li>
                            <li><a href="/catalog/kopiry/">Копиры</a></li>
                            <li><a href="/catalog/fax/">Факсы</a></li>
                            <li><a href="/catalog/plottery/">Плоттеры</a></li>
                            <li><a href="/catalog/skanery/">Сканеры</a></li>
                            <li><a href="/catalog/doc_scan/">Сканеры для документов</a></li>
                            <li><a href="/catalog/bumaga/">Бумага для печати</a></li>
                            <li><a href="/catalog/kartridzhi/">Картриджи</a></li>
                            <li><a href="/catalog/pechatayushchie_golovki/">Печатающие головки</a></li>
                            <li><a href="/catalog/tonery/">Тонер</a></li>
                            <li><a href="/catalog/termoplenka/">Термопленки для факсов</a></li>
                            <li><a href="/catalog/baraban/">Фотобарабаны</a></li>
                            <li><a href="/catalog/acc_prn/">Аксессуары для принтеров</a></li>
                            <li><a href="/catalog/acc_copir/">Аксессуары для копиров</a></li>
                            <li><a href="/catalog/plastik/">Пластик для устройств 3D</a></li>
                        </ul>
                    </li>
                    <li><b class="h5">Телефоны для дома и офиса</b>
                        <ul>
                            <li><a href="/catalog/telefony/">Проводные телефоны</a></li>
                            <li><a href="/catalog/dect/">Радиотелефоны DECT</a></li>
                            <li><a href="/catalog/dop_tel/">Дополнительные трубки</a></li>
                            <li><a href="/catalog/iptelefon/">IP Телефоны</a></li>
                            <li><a href="/catalog/sys_phone/">Системные телефоны</a></li>
                            <li><a href="/catalog/konsoli/">Консоли</a></li>
                            <li><a href="/catalog/miniats/">Мини АТС</a></li>
                            <li><a href="/catalog/moduli_dlya_mini_ats/">Платы и модули для мини-АТС</a></li>
                            <li><a href="/catalog/videoconferencing/">Системы видеоконференцсвязи</a></li>
                        </ul>
                    </li>
                    <li><b class="h5">Офисная техника</b>
                        <ul>
                            <li><a href="/catalog/calc/">Калькуляторы</a></li>
                            <li><a href="/catalog/shreder/">Уничтожители бумаги</a></li>
                            <li><a href="/catalog/laminator/">Ламинаторы</a></li>
                            <li><a href="/catalog/plenki_lam/">Пленки для ламинатора</a></li>
                            <li><a href="/catalog/pereplet/">Переплетчики</a></li>
                            <li><a href="/catalog/pruzhinyperepleta/">Материалы для переплета</a></li>
                            <li><a href="/catalog/cutters_of/">Резаки</a></li>
                            <li><a href="/catalog/acc_dly_rezakov/">Аксессуары для резаков</a></li>
                            <li><a href="/catalog/ergonom/">Эргономика офиса</a></li>
                        </ul>
                    </li>
                    <li><b class="h5">Торговое оборудование</b>
                        <ul>
                            <li><a href="/catalog/skanery_shtrikh_koda/">Сканеры штрих-кода</a></li>
                            <li><a href="/catalog/detektory_banknot/">Детекторы банкнот</a></li>
                            <li><a href="/catalog/schetchik_banknot/">Счетчики банкнот</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><b class="h4">Серверы и сетевое оборудование</b>
                <ul>
                    <li><b class="h5">Сетевое оборудование</b>
                        <ul>
                            <li><a href="/catalog/marshrutizatory_i_tochki_dostupa/">Маршрутизаторы</a></li>
                            <li><a href="/catalog/tochki_dostupa/">Точки доступа</a></li>
                            <li><a href="/catalog/wifi_usilitel/">Wi-Fi усилители сигнала</a></li>
                            <li><a href="/catalog/modemi/">Модемы 4G и ADSL</a></li>
                            <li><a href="/catalog/setevye_ehkrany/">Сетевые экраны</a></li>
                            <li><a href="/catalog/wi_fi_adaptery/">Адаптеры WiFi и сетевые карты</a></li>
                            <li><a href="/catalog/bluetooth_adapter/">Адаптеры Bluetooth</a></li>
                            <li><a href="/catalog/antenny/">Антенны Wi-Fi</a></li>
                            <li><a href="/catalog/print_servery/">Принт серверы</a></li>
                            <li><a href="/catalog/kommutatory/">Коммутаторы</a></li>
                            <li><a href="/catalog/mediaconverters/">Медиаконвертеры</a></li>
                            <li><a href="/catalog/modul_transiver/">Модули и трансиверы</a></li>
                            <li><a href="/catalog/instrumenty/">Инструменты для монтажа сетей</a></li>
                            <li><a href="/catalog/net_oth/">Прочее сетевое оборудование</a></li>
                            <li><a href="/catalog/perekluchately_kvm/">Переключатели KVM</a></li>
                        </ul>
                    </li>
                    <li><b class="h5">Серверы</b>
                        <ul>
                            <li><a href="/catalog/server/">Серверы</a></li>
                        </ul>
                    </li>
                    <li><b class="h5">Серверное оборудование</b>
                        <ul>
                            <li><a href="/catalog/serverprocessorbr/">Процессоры для серверов</a></li>
                            <li><a href="/catalog/servermother/">Материнские платы для серверов</a></li>
                            <li><a href="/catalog/servermemory/">Модули памяти для серверов</a></li>
                            <li><a href="/catalog/serverdrivers/">Оптические приводы для серверов</a></li>
                            <li><a href="/catalog/serverhdd/">Серверные жесткие диски</a></li>
                            <li><a href="/catalog/serv_case/">Корпуса для серверов</a></li>
                            <li><a href="/catalog/bloki_pitaniya_dlya_serverov/">Блоки питания для серверов</a>
                            </li>
                            <li><a href="/catalog/serveradapt/">Контроллеры для серверов</a></li>
                            <li><a href="/catalog/servernye_opcii/">Серверные опции</a></li>
                        </ul>
                    </li>
                    <li><b class="h5">Системы хранения</b>
                        <ul>
                            <li><a href="/catalog/diskstorage/">Системы хранения информации</a></li>
                            <li><a href="/catalog/lentochnye_biblioteki/">Ленточные библиотеки</a></li>
                            <li><a href="/catalog/opcii_k_sistemam_hraneniya/">Опции к системам хранения</a>
                            </li>
                        </ul>
                    </li>
                    <li><b class="h5">СКС и инженерное оборудование</b>
                        <ul>
                            <li><a href="/catalog/aksessuary_dlya_kanalov/">Аксессуары для кабель-каналов</a>
                            </li>
                            <li><a href="/catalog/aksessuary_shkafov/">Аксессуары для шкафов и стоек</a></li>
                            <li><a href="/catalog/acc_tray/">Аксесуары для лотков</a></li>
                            <li><a href="/catalog/pdu/">Блоки распределения питания</a></li>
                            <li><a href="/catalog/kabelnye_kanaly/">Кабельные каналы</a></li>
                            <li><a href="/catalog/komponenty_opticheskih_sistem/">Компоненты оптических
                                    систем</a></li>
                            <li><a href="/catalog/krepezhi/">Крепежи</a></li>
                            <li><a href="/catalog/krossovoe_oborudovanie/">Кроссовое оборудование</a></li>
                            <li><a href="/catalog/lotki/">Лотки</a></li>
                            <li><a href="/catalog/moduli_informacionnye/">Модули информационные</a></li>
                            <li><a href="/catalog/opticheskie_polki/">Оптические полки и кроссы</a></li>
                            <li><a href="/catalog/paneli_i_korobki/">Панели, коробки, вставки</a></li>
                            <li><a href="/catalog/patch_panely/">Патч-панели</a></li>
                            <li><a href="/catalog/prochee_oborudovanie/">Прочее оборудование</a></li>
                            <li><a href="/catalog/resheniya_dlya_rabochih_mest/">Решения для рабочих мест</a>
                            </li>
                            <li><a href="/catalog/markirovka/">Средства маркировки</a></li>
                            <li><a href="/catalog/stoyki/">Стойки</a></li>
                            <li><a href="/catalog/styajki/">Стяжки</a></li>
                            <li><a href="/catalog/shkafy_montajnye/">Шкафы монтажные</a></li>
                        </ul>
                    </li>
                    <li><b class="h5">Кабельная продукция СКС</b>
                        <ul>
                            <li><a href="/catalog/kabel_mednyi/">Кабель медный</a></li>
                            <li><a href="/catalog/kabel_opticheskiy/">Кабель оптический</a></li>
                            <li><a href="/catalog/kabel_silovoy/">Кабель силовой</a></li>
                            <li><a href="/catalog/patchkordy_opticheskie/">Патчкорды оптические</a></li>
                            <li><a href="/catalog/patchkordy_mednye/">Патчкорды медные</a></li>
                            <li><a href="/catalog/konnektory/">Коннекторы для сетевого оборудования</a></li>
                            <li><a href="/catalog/prochee_setevoe/">Прочие кабельные продукты</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><b class="h4">Канцтовары</b>
                <ul>
                    <li><b class="h5">Ручки премиум-класса</b>
                        <ul>
                            <li><a href="/catalog/mech_penpremium/">Карандаши механические премиум</a></li>
                            <li><a href="/catalog/five_pen_premium/">Ручки 5й пишущий узел премиум</a></li>
                            <li><a href="/catalog/gel_pens_premium/">Гелевые ручки премиум</a></li>
                            <li><a href="/catalog/mfu_pen_premium/">Многофункциональные ручки премиум</a></li>
                            <li><a href="/catalog/fou_pen_premium/">Перьевые ручки премиум</a></li>
                            <li><a href="/catalog/roller_pens_premium/">Ручки-роллеры премиум</a></li>
                            <li><a href="/catalog/ball_pens_premium/">Шариковые ручки премиум</a></li>
                            <li><a href="/catalog/podarochnye_nabory/">Наборы пишущих инструментов</a></li>
                            <li><a href="/catalog/case_pen_premium/">Футляры для пишущих инструментов</a></li>
                            <li><a href="/catalog/aksesuary_pre_ruchec/">Аксессуары для ручек премиум</a></li>
                        </ul>
                    </li>
                    <li><b class="h5">Письменные и чертежные принадлежности</b>
                        <ul>
                            <li><a href="/catalog/rods/">Запасные стержни</a></li>
                            <li><a href="/catalog/pencil_mech/">Карандаши механические</a></li>
                            <li><a href="/catalog/crayons/">Карандаши цветные</a></li>
                            <li><a href="/catalog/pencil_ch/">Карандаши чернографитовые</a></li>
                            <li><a href="/catalog/line/">Линейки</a></li>
                            <li><a href="/catalog/markers_crayons/">Маркеры и фломастеры</a></li>
                            <li><a href="/catalog/roller_pens/">Роллеры и капиллярные ручки</a></li>
                            <li><a href="/catalog/gel_pens/">Ручки гелевые</a></li>
                            <li><a href="/catalog/ball_pens/">Ручки шариковые</a></li>
                            <li><a href="/catalog/drawing_supplies/">Чертежные принадлежности</a></li>
                        </ul>
                    </li>
                    <li><b class="h5">Изделия из бумаги для офиса</b>
                        <ul>
                            <li><a href="/catalog/block/">Блоки для записей</a></li>
                            <li><a href="/catalog/diares/">Ежедневники</a></li>
                            <li><a href="/catalog/zapisnye_knizhki/">Записные книжки</a></li>
                            <li><a href="/catalog/nabory_smart_writing/">Наборы Smart Writing</a></li>
                            <li><a href="/catalog/bookmark/">Закладки самоклеящиеся</a></li>
                            <li><a href="/catalog/knigi_buhgalterskie/">Книги бухгалтерские</a></li>
                            <li><a href="/catalog/convert/">Конверты почтовые</a></li>
                            <li><a href="/catalog/note_pap/">Тетради и Блокноты</a></li>
                            <li><a href="/catalog/aksessuary_tetradej/">Аксессуары для бизнес-тетрадей</a></li>
                        </ul>
                    </li>
                    <li><b class="h5">Папки и файлы</b>
                        <ul>
                            <li><a href="/catalog/folder_comp/">Папки для бумаг</a></li>
                            <li><a href="/catalog/files_paper/">Файлы для бумаги</a></li>
                            <li><a href="/catalog/ach_box/">Короба архивные</a></li>
                            <li><a href="/catalog/index_d/">Разделители индексные</a></li>
                            <li><a href="/catalog/acc_arh/">Аксессуары для архивации</a></li>
                        </ul>
                    </li>
                    <li><b class="h5">Канцтовары для офиса</b>
                        <ul>
                            <li><a href="/catalog/acc_office/">Канцелярские мелочи</a></li>
                            <li><a href="/catalog/acc_badges/">Бейджи и аксессуары</a></li>
                            <li><a href="/catalog/visitnicy/">Визитницы</a></li>
                            <li><a href="/catalog/board/">Демонстрационное оборудование</a></li>
                            <li><a href="/catalog/punchers/">Дыроколы</a></li>
                            <li><a href="/catalog/inf_sign/">Информационные таблички и пиктограммы</a></li>
                            <li><a href="/catalog/glue/">Клей канцелярский</a></li>
                            <li><a href="/catalog/adhesive_tape/">Клейкая лента</a></li>
                            <li><a href="/catalog/basket/">Корзины для бумаг</a></li>
                            <li><a href="/catalog/paper_trays/">Лотки для бумаги</a></li>
                            <li><a href="/catalog/table_set/">Настольные наборы</a></li>
                            <li><a href="/catalog/table_cover/">Настольные покрытия</a></li>
                            <li><a href="/catalog/scissors/">Ножницы и канцелярские ножи</a></li>
                            <li><a href="/catalog/rezinki_dlya_deneg/">Резинки для денег</a></li>
                            <li><a href="/catalog/staples_stapler/">Скобы для степлера</a></li>
                            <li><a href="/catalog/clips/">Скрепки, кнопки, зажимы</a></li>
                            <li><a href="/catalog/stapler/">Степлеры</a></li>
                            <li><a href="/catalog/pencil_sharpener/">Точилки для карандашей</a></li>
                            <li><a href="/catalog/stamp/">Штампы</a></li>
                            <li><a href="/catalog/shk_dlya_klyuchej/">Шкафчики и брелки для ключей</a></li>
                        </ul>
                    </li>
                    <li><b class="h5">Школьная канцелярия</b>
                        <ul>
                            <li><a href="/catalog/pribory_dlya_vyzhiganiya/">Приборы для выжигания по дереву</a>
                            </li>
                            <li><a href="/catalog/rantsy_i_ryukzaki/">Ранцы и рюкзаки</a></li>
                            <li><a href="/catalog/penaly_i_aksessuary/">Пеналы</a></li>
                            <li><a href="/catalog/albomy_i_gravyury/">Альбомы и гравюры</a></li>
                            <li><a href="/catalog/voskovye_melki/">Восковые мелки</a></li>
                            <li><a href="/catalog/kisti/">Кисти для рисования</a></li>
                            <li><a href="/catalog/kraski/">Краски</a></li>
                            <li><a href="/catalog/nabory_dlya_tvorc/">Наборы для творчества</a></li>
                            <li><a href="/catalog/oblozhki/">Обложки</a></li>
                            <li><a href="/catalog/papki_dlya_risunkov/">Папки для рисунков</a></li>
                            <li><a href="/catalog/plastilin/">Пластилин</a></li>
                            <li><a href="/catalog/tetradi/">Тетради</a></li>
                            <li><a href="/catalog/shkolnye_aksessuary/">Школьные аксессуары</a></li>
                        </ul>
                    </li>
                    <li><b class="h5">Кожгалантерея</b>
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
            </li>
            <li><b class="h4">Фото и видеотехника</b>
                <ul>
                    <li><b class="h5">Фотоаппараты</b>
                        <ul>
                            <li><a href="/catalog/cifrovye_fotoapparaty/">Компактные фотоаппараты</a></li>
                            <li><a href="/catalog/sys_foto/">Беззеркальные фотоаппараты</a></li>
                            <li><a href="/catalog/mir_foto/">Зеркальные фотоаппараты</a></li>
                        </ul>
                    </li>
                    <li><b class="h5">Объективы и светофильтры</b>
                        <ul>
                            <li><a href="/catalog/obektivy/">Объективы и конвертеры</a></li>
                            <li><a href="/catalog/filtry/">Светофильтры</a></li>
                        </ul>
                    </li>
                    <li><b class="h5">Видеокамеры и экшн-камеры</b>
                        <ul>
                            <li><a href="/catalog/videokamery/">Видеокамеры</a></li>
                            <li><a href="/catalog/action_cam/">Экшн-камеры</a></li>
                        </ul>
                    </li>
                    <li><b class="h5">Аксессуары для фото</b>
                        <ul>
                            <li><a href="/catalog/sumkifotovideotexniki/">Сумки для фото, видеотехники</a></li>
                            <li><a href="/catalog/fotovspyshki/">Вспышки для фотоаппаратов</a></li>
                            <li><a href="/catalog/fotoshtativy/">Штативы</a></li>
                            <li><a href="/catalog/zaryadnye_ustrojstva_dlya_fotoapparatov/">Зарядные устройства
                                    для фотоаппаратов</a></li>
                            <li><a href="/catalog/protectglass/">Аксессуары для фото-видео</a></li>
                            <li><a href="/catalog/fotoframe/">Фоторамки</a></li>
                            <li><a href="/catalog/fotoramki/">Цифровые фоторамки</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><b class="h4">Автотовары</b>
                <ul>
                    <li><b class="h5">Автозвук</b>
                        <ul>
                            <li><a href="/catalog/avtomagnitoly/">Автомагнитолы</a></li>
                            <li><a href="/catalog/autoacoustic/">Автомобильные колонки</a></li>
                            <li><a href="/catalog/autosub/">Автомобильные сабвуферы</a></li>
                            <li><a href="/catalog/fmmodulator/">Модуляторы FM</a></li>
                            <li><a href="/catalog/autouselitel/">Автомобильные усилители</a></li>
                            <li><a href="/catalog/antennyavtomobilnye/">Автомобильные антенны</a></li>
                            <li><a href="/catalog/autotv/">Портативные телевизоры</a></li>
                            <li><a href="/catalog/car_audio_acc/">Аксессуары для автозвука</a></li>
                        </ul>
                    </li>
                    <li><b class="h5">Безопасность</b>
                        <ul>
                            <li><a href="/catalog/videoregistrator/">Видеорегистраторы</a></li>
                            <li><a href="/catalog/videoreg_s_detektor/">Видеорегистраторы с радар-детектором</a>
                            </li>
                            <li><a href="/catalog/radar_detector/">Радар-детекторы</a></li>
                            <li><a href="/catalog/parkovochnyeradar/">Парковочные радары</a></li>
                            <li><a href="/catalog/camback/">Камеры заднего вида</a></li>
                            <li><a href="/catalog/avtosignalizacii/">Автосигнализации</a></li>
                            <li><a href="/catalog/breathalyze/">Алкотестеры</a></li>
                            <li><a href="/catalog/cars_monitor/">Автомобильные мониторы</a></li>
                        </ul>
                    </li>
                    <li><b class="h5">Навигаторы</b>
                        <ul>
                            <li><a href="/catalog/gpsnavi/">Навигаторы GPS</a></li>
                            <li><a href="/catalog/acc_navi/">Аксессуары для навигаторов</a></li>
                        </ul>
                    </li>
                    <li><b class="h5">Минимойки и аксессуары</b>
                        <ul>
                            <li><a href="/catalog/minimojki/">Мойки высокого давления</a></li>
                            <li><a href="/catalog/acc_mini/">Аксессуары для минимоек</a></li>
                        </ul>
                    </li>
                    <li><b class="h5">Автоаксессуары</b>
                        <ul>
                            <li><a href="/catalog/child_seats/">Детские автокресла</a></li>
                            <li><a href="/catalog/zaradustro/">Зарядные устройства для автомобильных
                                    аккумуляторов</a></li>
                            <li><a href="/catalog/invertor/">Преобразователи напряжения</a></li>
                            <li><a href="/catalog/razvetviteli_prikur/">Разветвители прикуривателя</a></li>
                            <li><a href="/catalog/termoholod/">Автомобильные холодильники</a></li>
                            <li><a href="/catalog/sumki_termosy/">Сумки-термосы</a></li>
                            <li><a href="/catalog/kompres/">Компрессоры</a></li>
                            <li><a href="/catalog/manomerj/">Манометры</a></li>
                            <li><a href="/catalog/autopil/">Автомобильные пылесосы</a></li>
                            <li><a href="/catalog/autoaccessories/">Аксессуары для автомобиля</a></li>
                            <li><a href="/catalog/shumoizolyatsiya/">Шумоизоляция</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><b class="h4">Техника для дома</b>
                <ul>
                    <li><b class="h5">Климатическая техника</b>
                        <ul>
                            <li><a href="/catalog/kaminy/">Газовые водонагреватели</a></li>
                            <li><a href="/catalog/vodonagrevateli/">Водонагреватели</a></li>
                            <li><a href="/catalog/ventilytor/">Бытовые вентиляторы</a></li>
                            <li><a href="/catalog/vozduxoochistiteli/">Воздухоочистители</a></li>
                            <li><a href="/catalog/uvlajniteli/">Увлажнители</a></li>
                            <li><a href="/catalog/obogrev/">Тепловентиляторы</a></li>
                            <li><a href="/catalog/konvektory/">Конвекторы</a></li>
                            <li><a href="/catalog/maslyanyeradiatory/">Масляные радиаторы</a></li>
                            <li><a href="/catalog/infrared_heat/">Инфракрасные обогреватели</a></li>
                            <li><a href="/catalog/thermal_curtains/">Тепловые завесы</a></li>
                            <li><a href="/catalog/heat_gun/">Тепловые пушки</a></li>
                            <li><a href="/catalog/acc_vozdukhoochist/">Аксессуары для воздухоочистителей</a>
                            </li>
                        </ul>
                    </li>
                    <li><b class="h5">Стиральные и сушильные машины</b>
                        <ul>
                            <li><a href="/catalog/stiralnye/">Стиральные машины</a></li>
                            <li><a href="/catalog/sushilnye/">Сушильные машины</a></li>
                        </ul>
                    </li>
                    <li><b class="h5">Уход за одеждой</b>
                        <ul>
                            <li><a href="/catalog/utyugi/">Утюги</a></li>
                            <li><a href="/catalog/steam_station/">Паровые станции</a></li>
                            <li><a href="/catalog/otparivateli/">Отпариватели</a></li>
                            <li><a href="/catalog/gladilnye_doski/">Гладильные доски</a></li>
                            <li><a href="/catalog/shvejnye/">Швейные машины</a></li>
                            <li><a href="/catalog/overlok/">Оверлоки</a></li>
                            <li><a href="/catalog/mashinki_dlya_snyatiya_katyshkov/">Машинки для снятия
                                    катышков</a></li>
                        </ul>
                    </li>
                    <li><b class="h5">Бытовая техника</b>
                        <ul>
                            <li><a href="/catalog/pylesosy/">Пылесосы</a></li>
                            <li><a href="/catalog/steam_cleaner/">Пароочистители</a></li>
                            <li><a href="/catalog/steam_mop/">Паровые швабры</a></li>
                            <li><a href="/catalog/stekloochistiteli/">Стеклоочистители</a></li>
                            <li><a href="/catalog/rukosushilka/">Сушилки для рук</a></li>
                            <li><a href="/catalog/oth_tech_hom/">Прочая техника для дома</a></li>
                            <li><a href="/catalog/acesspyl/">Аксессуары для пылесосов</a></li>
                            <li><a href="/catalog/bytaccessories/">Аксессуары для бытовой техники</a></li>
                        </ul>
                    </li>
                    <li><b class="h5">Уход за волосами</b>
                        <ul>
                            <li><a href="/catalog/feny/">Фены для волос</a></li>
                            <li><a href="/catalog/hairdryer_brush/">Фен-щетки</a></li>
                            <li><a href="/catalog/multi_stylers/">Мультистайлеры</a></li>
                            <li><a href="/catalog/shhipcy/">Щипцы для волос</a></li>
                            <li><a href="/catalog/rectifiers/">Выпрямители для волос</a></li>
                            <li><a href="/catalog/mashinki_dlya_strijki/">Машинки для стрижки</a></li>
                        </ul>
                    </li>
                    <li><b class="h5">Гигиена и здоровье</b>
                        <ul>
                            <li><a href="/catalog/britvy/">Электробритвы</a></li>
                            <li><a href="/catalog/epilyatory/">Эпиляторы</a></li>
                            <li><a href="/catalog/ph_epil/">Фотоэпиляторы</a></li>
                            <li><a href="/catalog/zubnye/">Зубные щетки</a></li>
                            <li><a href="/catalog/vesy/">Напольные весы</a></li>
                            <li><a href="/catalog/manikyurnye/">Маникюрные наборы</a></li>
                            <li><a href="/catalog/care_p/">Косметические приборы</a></li>
                            <li><a href="/catalog/massazhery/">Массажеры</a></li>
                            <li><a href="/catalog/acessdlyabritvy/">Аксессуары для бритв</a></li>
                            <li><a href="/catalog/acc_tooth/">Аксессуары для зубных щеток</a></li>
                        </ul>
                    </li>
                    <li><b class="h5">Медицинское оборудование</b>
                        <ul>
                            <li><a href="/catalog/warmer/">Грелки</a></li>
                            <li><a href="/catalog/inhaler/">Ингаляторы</a></li>
                            <li><a href="/catalog/stethoscope/">Стетоскопы</a></li>
                            <li><a href="/catalog/thermometer/">Термометры</a></li>
                            <li><a href="/catalog/tonometer/">Тонометры</a></li>
                            <li><a href="/catalog/medical_acc/">Аксессуары для медицинского оборудования</a>
                            </li>
                        </ul>
                    </li>
                    <li><b class="h5">Часы и погодные станции</b>
                        <ul>
                            <li><a href="/catalog/pogodnye/">Метеостанции и термометры</a></li>
                            <li><a href="/catalog/nastennye_chasy/">Настенные часы</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><b class="h4">Техника для кухни</b>
                <ul>
                    <li><b class="h5">Крупная кухонная техника</b>
                        <ul>
                            <li><a href="/catalog/holodilnik/">Холодильники</a></li>
                            <li><a href="/catalog/morozilnye/">Морозильные камеры</a></li>
                            <li><a href="/catalog/chest_freezer/">Морозильные лари</a></li>
                            <li><a href="/catalog/plitygazovye/">Плиты газовые</a></li>
                            <li><a href="/catalog/plityelektricheskie/">Плиты электрические</a></li>
                            <li><a href="/catalog/nastolnye_plity/">Настольные плиты</a></li>
                            <li><a href="/catalog/svchpechi/">Микроволновые печи</a></li>
                            <li><a href="/catalog/minipech/">Мини-печи</a></li>
                            <li><a href="/catalog/posudomoechnye/">Посудомоечные машины</a></li>
                        </ul>
                    </li>
                    <li><b class="h5">Кухонная техника</b>
                        <ul>
                            <li><a href="/catalog/chajniki_el/">Чайники электрические</a></li>
                            <li><a href="/catalog/termopoty/">Термопоты</a></li>
                            <li><a href="/catalog/aerogrili/">Аэрогрили</a></li>
                            <li><a href="/catalog/blendery/">Блендеры</a></li>
                            <li><a href="/catalog/crepes/">Блинницы</a></li>
                            <li><a href="/catalog/vakuumnye_upakovshchiki/">Вакуумные упаковщики</a></li>
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
                            <li><a href="/catalog/sandwiches_waffle/">Сэндвичницы и вафельницы</a></li>
                            <li><a href="/catalog/tostery/">Тостеры</a></li>
                            <li><a href="/catalog/frityurnicy/">Фритюрницы</a></li>
                            <li><a href="/catalog/xlebopechi/">Хлебопечки</a></li>
                            <li><a href="/catalog/shashlychnicy/">Шашлычницы</a></li>
                            <li><a href="/catalog/yajcevarki/">Яйцеварки</a></li>
                            <li><a href="/catalog/hanger_bt/">Кронштейны для СВЧ</a></li>
                            <li><a href="/catalog/aksessuary_dlya_kuhonnyh_priborov/">Аксессуары для кухонных
                                    приборов</a></li>
                        </ul>
                    </li>
                    <li><b class="h5">Фильтры для воды</b>
                        <ul>
                            <li><a href="/catalog/akvafiltrya/">Аквафильтры</a></li>
                            <li><a href="/catalog/akvafiltrykart/">Картриджи для аквафильтров</a></li>
                        </ul>
                    </li>
                    <li><b class="h5">Приготовление кофе</b>
                        <ul>
                            <li><a href="/catalog/kofevarki/">Кофеварки</a></li>
                            <li><a href="/catalog/caps_coff/">Кофеварки капсульные</a></li>
                            <li><a href="/catalog/kofemashiny/">Кофемашины</a></li>
                            <li><a href="/catalog/kofemolki/">Кофемолки</a></li>
                            <li><a href="/catalog/kofe/">Кофе</a></li>
                            <li><a href="/catalog/acesskofe/">Аксессуары для кофеварок</a></li>
                        </ul>
                    </li>
                    <li><b class="h5">Вытяжки</b>
                        <ul>
                            <li><a href="/catalog/hanging_hood/">Подвесные вытяжки</a></li>
                            <li><a href="/catalog/chimney_hood/">Каминные вытяжки</a></li>
                            <li><a href="/catalog/built_in_hood/">Встраиваемые вытяжки</a></li>
                            <li><a href="/catalog/acc_hoods/">Аксессуары для вытяжек</a></li>
                        </ul>
                    </li>
                    <li><b class="h5">Встраиваемая техника</b>
                        <ul>
                            <li><a href="/catalog/vstraivaemyepaneli/">Варочные поверхности газовые</a></li>
                            <li><a href="/catalog/vstraivaemyepaneliel/">Варочные поверхности электрические</a>
                            </li>
                            <li><a href="/catalog/vstraivaemyeduhovka/">Духовые шкафы газовые</a></li>
                            <li><a href="/catalog/vstraivaemyeduhovkael/">Духовые шкафы электрические</a></li>
                            <li><a href="/catalog/vstraivaemyesvh/">Встраиваемые микроволновые печи</a></li>
                            <li><a href="/catalog/vstraivaemyeposuda/">Встраиваемые посудомоечные машины</a>
                            </li>
                            <li><a href="/catalog/vstraivaemyeholod/">Встраиваемые холодильники</a></li>
                            <li><a href="/catalog/fr_cam/">Встраиваемые морозильные камеры</a></li>
                            <li><a href="/catalog/vstraivaemye/">Встраиваемые стиральные машины</a></li>
                            <li><a href="/catalog/oth_cof/">Прочая встраиваимая техника</a></li>
                        </ul>
                    </li>
                    <li><b class="h5">Посуда</b>
                        <ul>
                            <li><a href="/catalog/pan/">Кастрюли</a></li>
                            <li><a href="/catalog/kovshi/">Ковши</a></li>
                            <li><a href="/catalog/cover/">Крышки для посуды</a></li>
                            <li><a href="/catalog/posuda/">Кухонные аксессуары</a></li>
                            <li><a href="/catalog/knife_k/">Кухонные ножи</a></li>
                            <li><a href="/catalog/nabory_posudy/">Наборы посуды</a></li>
                            <li><a href="/catalog/posuda_dlya_hraneniya/">Посуда для хранения</a></li>
                            <li><a href="/catalog/pan_fr/">Сковороды</a></li>
                            <li><a href="/catalog/soteiniki/">Сотейники</a></li>
                            <li><a href="/catalog/stolovye_pribory/">Столовые приборы</a></li>
                            <li><a href="/catalog/thermosy/">Термосы и термокружки</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><b class="h4">Садовая техника и инструменты</b>
                <ul>
                    <li><b class="h5">Дрели и шуруповерты</b>
                        <ul>
                            <li><a href="/catalog/dreli/">Дрели</a></li>
                            <li><a href="/catalog/shurupoverty/">Шуруповерты</a></li>
                            <li><a href="/catalog/perforatory/">Перфораторы</a></li>
                        </ul>
                    </li>
                    <li><b class="h5">Измерительный инструмент</b>
                        <ul>
                            <li><a href="/catalog/multimetry/">Мультиметры</a></li>
                            <li><a href="/catalog/testery/">Тестеры</a></li>
                            <li><a href="/catalog/indikatory_napryazheniya/">Индикаторы напряжения</a></li>
                            <li><a href="/catalog/lazernye_dalnomery/">Лазерные дальномеры</a></li>
                            <li><a href="/catalog/lazernye_urovni/">Лазерные уровни</a></li>
                            <li><a href="/catalog/detektory_metalla/">Детекторы металла</a></li>
                            <li><a href="/catalog/teplovizory_i_termodetektory/">Тепловизоры и
                                    термодетекторы</a></li>
                            <li><a href="/catalog/drugie_izmeritelnye_pribory/">Другие измерительные приборы</a>
                            </li>
                        </ul>
                    </li>
                    <li><b class="h5">Пилы</b>
                        <ul>
                            <li><a href="/catalog/cepelekropila/">Цепные пилы</a></li>
                            <li><a href="/catalog/discpila/">Дисковые пилы</a></li>
                            <li><a href="/catalog/sabelnyepily/">Сабельные пилы</a></li>
                            <li><a href="/catalog/torcovochnye_pily/">Торцовочные пилы</a></li>
                        </ul>
                    </li>
                    <li><b class="h5">Шлифмашины</b>
                        <ul>
                            <li><a href="/catalog/vibroshlifmashina/">Виброшлифовальные машины</a></li>
                            <li><a href="/catalog/deltashlifmashiny/">Дельташлифовальные машины</a></li>
                            <li><a href="/catalog/lentochnyeshlifmashiny/">Ленточные шлифмашины</a></li>
                            <li><a href="/catalog/ugloshlifovalniemashiny/">Углошлифовальные машины</a></li>
                            <li><a href="/catalog/ekscentrikovyeshlifmashiny/">Эксцентриковые шлифмашины</a>
                            </li>
                            <li><a href="/catalog/prochie_shlifmashiny/">Прочие шлифмашины</a></li>
                        </ul>
                    </li>
                    <li><b class="h5">Электроинструмент</b>
                        <ul>
                            <li><a href="/catalog/engravers/">Граверы</a></li>
                            <li><a href="/catalog/kleevye_pistolety/">Клеевые пистолеты</a></li>
                            <li><a href="/catalog/kraskopulty/">Краскопульты</a></li>
                            <li><a href="/catalog/lobziki/">Лобзики</a></li>
                            <li><a href="/catalog/multitoolins/">Многофункциональный инструмент</a></li>
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
                    <li><b class="h5">Оснастка и наборы инструментов</b>
                        <ul>
                            <li><a href="/catalog/zaryadnye_ustrojstva_el/">Зарядные устройства</a></li>
                            <li><a href="/catalog/lobzikovye_pilki/">Лобзиковые пилки</a></li>
                            <li><a href="/catalog/set_drill/">Наборы бит и сверл</a></li>
                            <li><a href="/catalog/nabory_instrumentov_i_osnastki/">Наборы инструментов и
                                    оснастки</a></li>
                            <li><a href="/catalog/otreznye_krugi/">Отрезные круги</a></li>
                            <li><a href="/catalog/ehlektrody/">Электроды и маски сварщиков</a></li>
                            <li><a href="/catalog/akkumulyatory_ehlekt/">Аккумуляторы для электроинструмента</a>
                            </li>
                            <li><a href="/catalog/osnastka/">Аксессуары для электроинструмента</a></li>
                        </ul>
                    </li>
                    <li><b class="h5">Садовая техника</b>
                        <ul>
                            <li><a href="/catalog/blover/">Воздуходувки</a></li>
                            <li><a href="/catalog/gazonokosilki/">Газонокосилки</a></li>
                            <li><a href="/catalog/generators/">Генераторы</a></li>
                            <li><a href="/catalog/cultivators/">Культиваторы</a></li>
                            <li><a href="/catalog/polivochnoe/">Оборудование для полива</a></li>
                            <li><a href="/catalog/motobloki/">Мотоблоки</a></li>
                            <li><a href="/catalog/cutters/">Ножницы и кусторезы</a></li>
                            <li><a href="/catalog/tool_gard/">Оснастка к садовой технике</a></li>
                            <li><a href="/catalog/sadovye_izmelchitely/">Садовые измельчители</a></li>
                            <li><a href="/catalog/nasosdrenaj/">Садовые насосы</a></li>
                            <li><a href="/catalog/sadtrimer/">Садовые триммеры</a></li>
                            <li><a href="/catalog/silovye_udlinitely/">Силовые удлинители</a></li>
                            <li><a href="/catalog/snowthrowers/">Снегоуборщики</a></li>
                            <li><a href="/catalog/stabilizatory_silovye/">Стабилизаторы напряжения для дома</a>
                            </li>
                        </ul>
                    </li>
                    <li><b class="h5">Садовые инструменты</b>
                        <ul>
                            <li><a href="/catalog/rake/">Грабли</a></li>
                            <li><a href="/catalog/shovel/">Лопаты</a></li>
                            <li><a href="/catalog/plantingtool/">Садово-посадочные инструменты</a></li>
                            <li><a href="/catalog/gardenshears/">Садовые ножницы</a></li>
                            <li><a href="/catalog/gardensaws/">Садовые пилы и ножи</a></li>
                            <li><a href="/catalog/pruners/">Секаторы и Сучкорезы</a></li>
                            <li><a href="/catalog/axes/">Топоры</a></li>
                            <li><a href="/catalog/accsadovye_instrumenty/">Аксессуары для садового
                                    инструмента</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><b class="h4">Умный дом и видеонаблюдение</b>
                <ul>
                    <li><b class="h5">Умный дом</b>
                        <ul>
                            <li><a href="/catalog/smarthome/">Системы Умный дом</a></li>
                            <li><a href="/catalog/umnye_rozetki/">Умные розетки</a></li>
                            <li><a href="/catalog/umnye_lampy/">Умные лампы</a></li>
                        </ul>
                    </li>
                    <li><b class="h5">Системы видеонаблюдения</b>
                        <ul>
                            <li><a href="/catalog/netvideoreg/">Видеорегистраторы сетевые</a></li>
                            <li><a href="/catalog/cctvanalog/">Камеры для видеонаблюдения</a></li>
                            <li><a href="/catalog/kronshtejny_dlya_videokamer/">Кронштейны для видеокамер</a>
                            </li>
                            <li><a href="/catalog/komp_vn/">Комплекты видеонаблюдения</a></li>
                            <li><a href="/catalog/videomonitor/">Мониторы для систем видеонаблюдения</a></li>
                            <li><a href="/catalog/prozhektory/">Прожекторы</a></li>
                            <li><a href="/catalog/ipcamaccessories/">Аксессуары для видеонаблюдения</a></li>
                        </ul>
                    </li>
                    <li><b class="h5">Системы контроля</b>
                        <ul>
                            <li><a href="/catalog/call_panel/">Вызывные панели</a></li>
                            <li><a href="/catalog/knopki_vyhoda/">Кнопки выхода</a></li>
                            <li><a href="/catalog/domophone/">Домофоны</a></li>
                            <li><a href="/catalog/lock/">Электронные замки</a></li>
                            <li><a href="/catalog/closers/">Доводчики</a></li>
                            <li><a href="/catalog/sensor/">Датчики</a></li>
                            <li><a href="/catalog/gsm_signalizaciya/">Комплекты сигнализаций</a></li>
                            <li><a href="/catalog/schityvateli_kart/">Считыватели карт</a></li>
                            <li><a href="/catalog/kontrollery_dostupa/">Контроллеры доступа</a></li>
                            <li><a href="/catalog/terminaly_dostupa/">Терминалы доступа</a></li>
                            <li><a href="/catalog/accessories_skud/">Аксессуары для систем контроля</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><b class="h4">Активный отдых и хобби</b>
                <ul>
                    <li><b class="h5">Активный отдых</b>
                        <ul>
                            <li><a href="/catalog/giroskutery/">Гироскутеры</a></li>
                            <li><a href="/catalog/electrosamokaty/">Электросамокаты</a></li>
                            <li><a href="/catalog/electrobayki/">Электробайки</a></li>
                            <li><a href="/catalog/aksessuary_dlya_sredstv_peredvizheniya/">Аксессуары для
                                    гироскутеров и самокатов</a></li>
                        </ul>
                    </li>
                    <li><b class="h5">Хобби</b>
                        <ul>
                            <li><a href="/catalog/kvadrokoptery/">Квадрокоптеры</a></li>
                            <li><a href="/catalog/radioupravlyaemye_modeli/">Радиоуправляемые модели</a></li>
                            <li><a href="/catalog/ruchki_tride/">3D ручки</a></li>
                            <li><a href="/catalog/plastik_dlya_3d_ruchek/">Пластик для 3D ручек</a></li>
                        </ul>
                    </li>
                    </li>
                    <li><b class="h5">Туризм, спорт</b>
                        <ul>
                            <li><a href="/catalog/noji/">Складные ножи</a></li>
                            <li><a href="/catalog/nozhi_turisticheskie/">Ножи туристические</a></li>
                            <li><a href="/catalog/multituly/">Мультитулы</a></li>
                            <li><a href="/catalog/mnogofunkcionalnye_braslety/">Многофункциональные браслеты</a>
                            </li>
                            <li><a href="/catalog/nabory_instrumentov_dlya_nozhej/">Наборы инструментов для
                                    ножей</a></li>
                            <li><a href="/catalog/shvejcarskie_karty/">Швейцарские карты</a></li>
                            <li><a href="/catalog/tochilki_dlya_nozhej/">Точилки для ножей</a></li>
                            <li><a href="/catalog/chekhly_dlya_nozhej/">Чехлы для ножей</a></li>
                            <li><a href="/catalog/aksessuary_dlya_nozhej/">Аксессуары для ножей</a></li>
                            <li><a href="/catalog/zapasnye_chasty_dlya_nojei/">Запасные части для ножей</a></li>
                            <li><a href="/catalog/fonary/">Фонари</a></li>
                            <li><a href="/catalog/binokli/">Бинокли</a></li>
                            <li><a href="/catalog/dlya_puteshestvij/">Аксессуары для путешествий</a></li>
                        </ul>
                    </li>
                    <li><b class="h5">Конструкторы</b></li>
                </ul>
            </li>
        </ul>

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