@extends('layouts.app')

@section('title')
    Краткая информация о компании Теплогазснаб
@endsection
@push('styles')
    <link href="{{ asset('css/pages.css') }}" type="text/css" data-template-style="true" rel="stylesheet">
@endpush
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
                            <p> Теплогазснаб – это интернет-магазин, в котором вы сможете купить газовые котлы для
                                отопления дома, электрокотлы, отопительные печи, водонагреватели, камины и различные
                                комплектующие для отопительных систем.
                                Мы представляем только сертифицированную продукцию от лучших отечественных и зарубежных
                                производителей. Весь товар имеет фирменную гарантию.
                                </p>
                            <p>Мы предлагаем оборудование не только для частных домовладельцев, но и для
                                промышленных нужд. Наши специалисты помогут с выбором, рассчитают стоимость, а также
                                выполнят профессиональный монтаж отопительного оборудования.
                                Большой выбор различных решений, низкие цены и честный сервис – с интернет-магазином
                                «Теплогазснаб» в вашем доме всегда будет тепло!
                            </p>
                            <p>В оформлении магазинов все создано для максимального удобства покупателей. Каждой
                                товарной группе в интерьере соответствует свой цвет. Благодаря цветовому
                                зонированию торгового зала уже на пороге магазина легко увидеть, где находится
                                нужный продукт.</p>
                            <p align="center"><img class="img-responsive"
                                                   src="/local/images/from_old/logo.png">
                                                   </p>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="info-block-lg" class="col-xs-12 col-lgx-3 col-lg-4 col-md-4 pull-right padding0">
            <div class="info-block">
                <h2>ТЕПЛОГАЗСНАБ</h2>
                <ul class="nav nav-pills nav-stacked">
                    <li class="active"><a href="{{ route('company') }}">О компании</a></li>
                </ul>
            </div>
        </div>

    </div>
@endsection


@push('scripts')
    {{-- Include JS Scripts --}}
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