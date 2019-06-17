@extends('layouts.app')

@section('title')
    Условия доставки товара, сроки, стоимость доставки - Теплогазснаб
@endsection
@push('styles')
    <link href="{{ asset('css/pages.css') }}" type="text/css" data-template-style="true" rel="stylesheet">
@endpush
@section('content')
    @include('components.wrap_menu')
    <div class="content">
        @component('components.breadcrumb')
            @slot('parent_href') {{ route('oplata') }} @endslot
            @slot('parent') Информация @endslot
            @slot('active') Доставка @endslot
        @endcomponent
        <div class="panel col-lgx-9 col-lg-8 col-md-8 pull-left">
            <div class="panel-heading main-head">
                <h1>Доставка</h1>
                <div class="container-fluid">
                    <div class="row">
                        <div class="user-content">
                            В Интернет-магазине Теплогазснаб существует несколько вариантов доставки ваших
                            покупок:
                            <ul class="user-list">
                                <li><span class="glyphicon glyphicon-ok text-primary"></span>
                                    Курьерская доставка
                                </li>

                                <li><span class="glyphicon glyphicon-ok text-primary"></span>
                                   Самовызов
                                </li>
                            </ul>
                            <h4>Курьерская доставка</h4>
                            <p>Вы можете заказать доставку товара с помощью курьера, который прибудет по указанному адресу
                            в будние дни и субботу с 10.00 до 19.00. Курьерская служба, после поступления товара на их
                            склад, свяжется с вами, уточнит адрес доставки и сообщит ориентировочное время доставки.<p/>

                            <p>Вы вскрываете упаковку при курьере, осматриваете на целостность и соответствие указанной
                                комплектации. Время осмотра ограничено 15 минутами. </p>
                            <h4>Самовызов</h4>
                            Вы можете забрать товар  из офиса. Расположенного по адресу г. Казань, ул.Родины 8а.
                            <h4>География и варианты доставки:</h4>
                            В зависимости от региона, доставка осуществляется:
                            <ul class="user-list">
                                <li><span class="glyphicon glyphicon-ok text-primary"></span>
                                    лично в руки
                                </li>
                                <li><span class="glyphicon glyphicon-ok text-primary"></span>
                                    до указанного адреса
                                </li>
                                <li><span class="glyphicon glyphicon-ok text-primary"></span>
                                    до пункта выдачи заказов транспортной компании
                                </li>
                            </ul>

                            <span class="h4"><b>Доставка не осуществляется:</b></span><br>
                            На стройплощадки, вокзалы, в транспортные компании, садово-огородные товарищества,
                            цеха, пункты общественного питания (за исключением их административных помещений),
                            режимные, секретные и несуществующие объекты;
                            В парки, лесные массивы, на пляжи или иные места, не имеющие определенного адреса,
                            либо условий для передачи товаров и сопроводительной документации, получения оплаты,
                            или проезда к месту передачи товара на расстояние менее 200 м.<br/>
                            <h4>Передача товаров</h4>
                            Передача товаров производится в присутствии заказчика, либо его полномочного
                            представителя, в квартире, офисе, холле, кабинете, на складе, в пределах здания
                            (сооружения), однозначно относящегося к адресу доставки.
                            При доставке на территорию с оплачиваемым въездом покупатель оплачивает стоимость
                            въезда, в иных случаях доставка осуществляется только до места платного въезда.<br/>
                            <h4>Обратите внимание!</h4>
                            <ol>
                                <li>Вы получаете только новый товар, убедитесь в этом.</li>
                                <li>Осмотрите внешний вид упаковки на отсутствие повреждений. Если нет следов
                                    вскрытия или повреждения упаковки, вскройте её в присутствии работников
                                    транспортной компании и проверьте вложение. Осмотрите товар на предмет
                                    соответствия заказу, отсутствия механических повреждений, комплектности,
                                    наличия сопроводительной и гарантийной документации.
                                </li>
                                <li>При обнаружении повреждения некомплекта или отсутствия товара необходимо
                                    составить акт приемки, где экспедитор, обязан описать все повреждения
                                    упаковки, повреждения или некомплектность товара.
                                </li>
                                <li>Отсканированный акт отправьте нам по электронной почте <a
                                            href="teplogazsnab@inbox.ru">teplogazsnab@inbox.ru</a>
                                    А так же свяжитесь с нами по телефону
                                    8 950-323-7-783 (Сегодня: 10:00 - 19:00 по МСК) .
                                </li>
                                <li>Без предоставления акта приёмки возмещение или обмен товара не
                                    производится.
                                </li>
                                <li>Будьте внимательны, любые повреждения упаковки могут повлечь за собой
                                    повреждения товара или некомплектность.
                                </li>
                            </ol>
                            Компания Теплогазснаб всегда прилагает максимальные усилия для отправки заказов в
                            указанные сроки, но не может гарантировать доставку точно в заявленное время или к
                            заявленной дате. Компания не принимает на себя никаких обязательств по возмещению
                            любых убытков Заказчика, прямых или косвенных, которые могут быть следствием срыва
                            поставки грузов в заявленные сроки.<br/>
                            <h4>Сопровождающие документы</h4>
                            Совместно с товаром, экспедитор обязан передать Вам:

                            <table>
                                <tr>
                                    <th>Для физических лиц</th>
                                    <th>Для юридических лиц</th>
                                </tr>
                                <tr>
                                    <td>Кассовый чек</td>
                                    <td>Кассовый чек</td>
                                </tr>
                                <tr>
                                    <td>Товарный чек</td>
                                    <td>Оригинал счета</td>
                                </tr>
                                <tr>
                                    <td>Гарантийные талоны с необходимыми отметками</td>
                                    <td>Товарная накладная</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Счет-фактура</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Приложение к товарной накладной</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="info-block-lg" class="col-xs-12 col-lgx-3 col-lg-4 col-md-4 pull-right padding0">
            <div class="info-block">
                <h2>Покупателям</h2>
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="{{route('oplata')}}">Оплата</a></li>
                    <li class="active"><a href="{{route('dostavka')}}">Доставка</a></li>
                </ul>
            </div>
        </div>

    </div>
@endsection

{{-- Include JS Scripts --}}
@push('scripts')
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