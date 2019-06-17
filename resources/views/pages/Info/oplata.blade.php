@extends('layouts.app')

@section('title')
Способы, условия оплаты, предоплаты товара и услуг - Теплогазснаб
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
            @slot('active') Оплата @endslot
        @endcomponent
        <div class="panel col-lgx-9 col-lg-8 col-md-8 pull-left">
            <div class="panel-heading main-head">
                <h1>Способы и условия оплаты товаров и услуг</h1>
                <div class="container-fluid">
                    <div class="row">
                        <div class="user-content">
                            <h3>Как оформить заказ</h3>
                            <ul class="user-list">
                                <li><span class="glyphicon glyphicon-ok text-primary"></span> Оформить заказ на нашем
                                    сайте легко. Просто добавьте выбранные товары в корзину, а затем перейдите на
                                    страницу Корзина, проверьте правильность заказанных позиций и нажмите кнопку
                                    «Оформить заказ»
                                </li>

                            </ul>
                            <div class="h5">Оформление заказа в стандартном режиме</div>


                            <ul class="user-list">
                                <li><span class="glyphicon glyphicon-ok text-primary"></span> Если вы уверены в выборе,
                                    то можете самостоятельно оформить заказ, заполнив по этапам всю форму
                                </li>
                            </ul>
                                <div class="h5">Доставка</div>
                            <ul class="user-list">
                                <li><span class="glyphicon glyphicon-ok text-primary"></span> В зависимости от места
                                    жительства вам предложат варианты доставки. Выберите любой удобный способ. Подробнее
                                    об условиях доставки читайте в разделе «Доставка»
                                </li>
                            </ul>

                            <h3>Покупатель</h3>
                            <p>Введите данные о себе: ФИО, E-Mail, адрес доставки, номер телефона, улицу, дом и квартиру.
                                В поле «Комментарии к заказу» введите сведения, которые могут пригодиться курьеру,
                                например: подъезды в доме считаются справа налево. </p>
                            <h3>Оформление заказа</h3>
                            <p></p>Проверьте правильность ввода информации: позиции заказа, выбор местоположения,
                            данные о покупателе. Нажмите кнопку «Оформить заказ».
                            Наш сервис запоминает данные о пользователе, информацию о заказе и в следующий раз предложит
                            вам повторить к вводу данные предыдущего заказа. Если условия вам не подходят, выбирайте
                            другие варианты. <p></p>
                            <h3>Оплаты</h3>
                            <p></p>При выборе варианта оплаты наличными, вы дожидаетесь приезда курьера и передаёте ему
                            сумму за товар в рублях. Курьер предоставляет товар, который можно осмотреть на предмет
                            повреждений, соответствие указанным условиям. Покупатель подписывает товаросопроводительные
                            документы, вносит денежные средства и получает чек.<p></p>

                            <p></p>Также оплата наличными доступна при самовывозе из магазина. <p></p>
                            <p align="center"><img class="img-responsive"
                                                   src="/local/images/from_old/logo.png">
                            </p>
                            <p></p>

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