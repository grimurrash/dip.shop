@extends('layouts.app')

@section('title')
    Арендодателям торговых помещение: условия сдачи в аренду помещения {{ config('app.name', 'Мир котлов') }}
@endsection

@section('content')
    @include('components.wrap_menu')
    <div class="content">
        @component('components.breadcrumb')
            @slot('active') Арендодателям @endslot
        @endcomponent
        <div class="panel col-lgx-9 col-lg-8 col-md-8 pull-left">
            <div class="panel-heading main-head">
                <h1>Арендодателям</h1>
                <div class="container-fluid">
                    <div class="row">
                        <div class="user-content">
                            <p>Компания ПОЗИТРОНИКА - успешно развивающаяся франчайзинговая сеть магазинов
                                электроники. Мы заинтересованы в аренде торговых площадей и готовы предложить
                                арендодателям выгодные условия сотрудничества, стабильный приток покупателей и
                                эффективную рекламную поддержку.</p>
                            <h2 class="text-primary">Требования к месторасположению:</h2>
                            <ul class="user-list">
                                <li><span class="glyphicon glyphicon-ok text-primary"></span>
                                    Площадь от 30 до 50 м2 под точки выдачи Интернет-магазина, от 200 м2 для
                                    полноформатного магазина ПОЗИТРОНИКА
                                </li>
                                <li><span class="glyphicon glyphicon-ok text-primary"></span>
                                    Высота потолка не ниже 3 метров
                                </li>
                                <li><span class="glyphicon glyphicon-ok text-primary"></span>
                                    Конфигурация зала &ndash; правильный прямоугольник, свободной планировки,
                                    без капитальных перегородок
                                </li>
                                <li><span class="glyphicon glyphicon-ok text-primary"></span>
                                    Электрическая мощность не менее 20 кВт
                                </li>
                                <li><span class="glyphicon glyphicon-ok text-primary"></span>
                                    Помещение обеспечено водоснабжением, канализацией, вентиляцией, отоплением
                                </li>
                                <li><span class="glyphicon glyphicon-ok text-primary"></span>
                                    Отдельный вход для погрузочно-разгрузочных работ
                                </li>
                                <li><span class="glyphicon glyphicon-ok text-primary"></span>
                                    Фасад здания должен выходить на проходную и проезжую часть улицы или
                                    площади, удобен для размещения рекламы, просматриваться с транспортных
                                    перекрестков, остановок общественного транспорта
                                </li>
                                <li><span class="glyphicon glyphicon-ok text-primary"></span>
                                    Возможность размещения рекламной вывески на фасаде здания
                                </li>
                            </ul>
                            <h2 class="text-primary">Местоположение в городе</h2>
                            <ul class="user-list">
                                <li><span class="glyphicon glyphicon-ok text-primary"></span>
                                    Торговое место в наиболее активной зоне (для торговых центров)
                                </li>
                                <li><span class="glyphicon glyphicon-ok text-primary"></span>
                                    Первая линия домов (хорошая видимость с улицы)
                                </li>
                                <li><span class="glyphicon glyphicon-ok text-primary"></span>
                                    Соседство с магазинами сопутствующих товаров (товары для дома, офиса и
                                    интерьера)
                                </li>
                                <li><span class="glyphicon glyphicon-ok text-primary"></span>
                                    Близость транспортных узлов
                                </li>
                                <li><span class="glyphicon glyphicon-ok text-primary"></span>
                                    Удобство подъезда на личном и общественном транспорте, высокий пешеходный
                                    трафик
                                </li>
                                <li><span class="glyphicon glyphicon-ok text-primary"></span>
                                    Наличие автостоянки непосредственно перед входом
                                </li>
                            </ul>
                            <p>Подробную информацию о требованиях к объектам недвижимости и вопросам
                                сотрудничества Вы можете получить по электронной почте - <a
                                        href="mailto:franch@positronica.ru">franch@positronica.ru</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="info-block-lg" class="col-xs-12 col-lgx-3 col-lg-4 col-md-4 pull-right padding0">
            <div class="info-block">
                <h2>ПОЗИТРОНИКА</h2>
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="{{ route('company') }}">О компании</a></li>
                    <li class="active"><a href="{{ route('rent') }}">Арендодателям</a></li>
                </ul>
            </div>
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