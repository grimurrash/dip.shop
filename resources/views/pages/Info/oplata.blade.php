@extends('layouts.app')

@section('title',"Способы, условия оплаты, предоплаты товара и услуг - ПОЗИТРОНИКА (Казань)")
@section('description','Способы оплаты товара (наличные, безналичные), условия оплаты, предоплаты товара и услуг - ПОЗИТРОНИКА (Казань)')

@section('content')
    @include('components.wrap_menu')
    <div class="content">
        @component('components.breadcrumb')
            @slot('parent_href') {{ route('oplata') }} @endslot
            @slot('parent') Информация @endslot
            @slot('active') Оплата @endslot
        @endcomponent
        <div class="panel col-lgx-9 col-lg-8 col-md-8 pull-left">
            <div class="panel-heading main-head">
                <h1>Способы и условия оплаты товаров и услуг</h1>
                <div class="container-fluid">
                    <div class="row">
                        <div class="user-content">
                            <h3>Предоплата</h3>
                            <p>В каких случаях требуется предоплата?</p>
                            <ul class="user-list">
                                <li><span class="glyphicon glyphicon-ok text-primary"></span> при заказе
                                    некоторых категорий
                                    товара
                                </li>
                                <li><span class="glyphicon glyphicon-ok text-primary"></span> если вы
                                    заказываете товар в
                                    населенный пункт, где нет магазина ПОЗИТРОНИКА или ПОИНТ, вам потребуется
                                    внести предоплату
                                    в размере 100% от стоимости заказа
                                </li>
                            </ul>
                            <div class="h5">Как внести предоплату?</div>

                            <p>Предоплату можно внести: </p>
                            <ul class="user-list">
                                <li><span class="glyphicon glyphicon-ok text-primary"></span> в магазине
                                    ПОЗИТРОНИКА или ПОИНТ
                                </li>
                                <li><span class="glyphicon glyphicon-ok text-primary"></span> полностью или
                                    частично оплатить
                                    заказ на сайте positronica.ru
                                </li>
                            </ul>

                            <h3>Оплатить покупку на сайте через Яндекс</h3>
                            <p><b>В целях безопасности получатель должен предъявить документ, удостоверяющий
                                    личность, ФИО в котором должны соответствовать <font color="#ff0000">ФИО
                                        получателя</font>, указанные при оформлении заказа.</b></p>
                            <p>К оплате принимаются банковские карты платежных систем Visa, MasterCard, Maestro,
                                а также электронные деньги (Сбербанк Онлайн, Яндекс.Деньги, WebMoney, QIWI
                                Wallet) через сервис Яндекс.Касса. </p>
                            <p> Безопасность платежей обеспечивается использованием стандарта PCI DSS 3.0.</p>
                            <h3>Оплата по безналичному расчету (индивидуальные предприниматели и юридические
                                лица)</h3>
                            <p></p>После оформления заказа на сайте интернет-магазина positronica.ru формируется
                            счет для оплаты по безналичному расчету. Для получения платежной информации на
                            странице оплаты заказа нажмите на ссылку Оплатить заказ. Счет и резерв товара
                            действительны в течение трех банковских дней. <p></p>
                            <p></p>
                            <p> Товар отпускается после зачисления средств на наш расчетный счет. При передаче
                                товара получателю необходимо предъявить паспорт и предоставить оригинал
                                доверенности от организации-плательщика с указанием получаемых материальных
                                ценностей. Если товар передается лично генеральному директору, необходимо
                                заверить наш экземпляр товарно-транспортной накладной печатью
                                организации-плательщика и предъявить паспорт, а также документ, подтверждающий
                                полномочия директора (протокол или приказ о назначении). В зависимости от
                                содержимого заказа вам будут предоставлены следующие документы: товарная
                                накладная, счет, счет-фактура, акт приема-передачи материальных ценностей, акт о
                                выполненных работах.</p>При оплате по безналичному расчету стоимость товаров
                            увеличивается на 3.5%.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="info-block-lg" class="col-xs-12 col-lgx-3 col-lg-4 col-md-4 pull-right padding0">
            <div class="info-block">
                <h2>Покупателям</h2>
                <ul class="nav nav-pills nav-stacked">
                    <li class="active"><a href="{{route('oplata')}}">Оплата</a></li>
                    <li><a href="{{route('dostavka')}}">Доставка</a></li>
                    <li><a href="{{route('politika')}}">Политика персональных данных</a></li>
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