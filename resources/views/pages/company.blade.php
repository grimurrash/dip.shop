@extends('layouts.app')

@section('title')
    Краткая информация о компании «{{ config('app.name', 'Мир котлов') }}»
@endsection

@section('content')
    @include('components.wrap_menu')
    <div class="content">
        @component('components.breadcrumb')
            @slot('active') О компании @endslot
        @endcomponent
        <style>
            .note {
                border-left: 3px solid #96bc33;
                color: #bbb;
                font: 1.2em/140% sans-serif;
                margin: 10px 20px;
                padding: 0 100px 0 10px;
            }
        </style>
        <div class="panel col-lgx-9 col-lg-8 col-md-8 pull-left">
            <div class="panel-heading main-head">
                <h1>О Компании</h1>
                <div class="container-fluid">
                    <div class="row">
                        <div class="user-content">
                            <p>Федеральная сеть магазинов электроники <strong>ПОЗИТРОНИКА</strong> – это
                                совместный проект компании <a href="http://www.merlion.ru" target="_blank">MERLION</a>,
                                крупнейшего российского IT-дистрибьютора, и ее розничных партнеров. Первый
                                магазин ПОЗИТРОНИКА открылся в марте 2006 года в Набережных Челнах, а на
                                сегодняшний день наша <a href="/franchaizing/">франчайзинговая сеть</a> включает
                                в себя уже более 170 магазинов, представленных во всех регионах России.</p>
                            <p class="note">Название &laquo;ПОЗИТРОНИКА&raquo; произошло от сочетания слов <em>&laquo;позитивная
                                    электроника&raquo;</em>, <br>которое отражает концепцию наших магазинов</p>
                            <p>От обычных магазинов электроники сеть <strong>ПОЗИТРОНИКА</strong> отличается
                                расширенным ассортиментом ИТ-продуктов (более 40 000 наименований товаров есть в
                                наличии или доступны на заказ) и высоким уровнем подготовки приблизительно
                                полутора тысяч продавцов-консультантов нашей сети. К ним можно смело обращаться
                                за любым советом, они всегда поймут желания клиента и помогут выбрать нужный
                                товар.</p>
                            <p class="note">ПОЗИТРОНИКА является лауреатом главной премии в области торговли,
                                услуг и сервиса «Российский&nbsp;Торговый&nbsp;Олимп»</p>
                            <p>В оформлении магазинов все создано для максимального удобства покупателей. Каждой
                                товарной группе в интерьере соответствует свой цвет. Благодаря цветовому
                                зонированию торгового зала уже на пороге магазина легко увидеть, где находится
                                нужный продукт.</p>
                            <p align="center"><img class="img-responsive"
                                                   src="/local/images/from_old/prilavok.jpg"
                                                   alt="Прилавок магазина ПОЗИТРОНИКА"
                                                   title="Прилавок магазина ПОЗИТРОНИКА"></p>
                            <p>Большинство крупных товаров (например, компьютеры, принтеры, мониторы) в
                                магазинах сети <strong>ПОЗИТРОНИКА</strong> располагаются в открытом доступе,
                                что позволяет покупателям оценить достоинства той или иной модели
                                самостоятельно.</p>
                            <p>Все это отражает миссию магазина <strong>ПОЗИТРОНИКА</strong> – формировать новый
                                взгляд на покупку техники: процесс покупки становится легким, быстрым и
                                максимально комфортным для покупателя.</p>
                            <h2>Ждем вас в магазине ПОЗИТРОНИКА!</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="info-block-lg" class="col-xs-12 col-lgx-3 col-lg-4 col-md-4 pull-right padding0">
            <div class="info-block">
                <h2>ПОЗИТРОНИКА</h2>
                <ul class="nav nav-pills nav-stacked">
                    <li class="active"><a href="{{ route('company') }}">О компании</a></li>
                    <li><a href="{{ route('rent') }}">Арендодателям</a></li>
                </ul>
            </div>
        </div>

    </div>
@endsection


@push('scripts')
    {{-- Include JS Scripts --}}
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