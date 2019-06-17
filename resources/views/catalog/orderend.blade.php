@extends('layouts.app')

@section('title',"Оформление товаров Теплогазснаб" )
@section('description','Широкий выбор котлов и других отопительных оборудований интернет-магазина  Теплогазснаб')
@push('styles')
    <link href="{{ asset('css/order.css') }}" type="text/css" data-template-style="true" rel="stylesheet">
@endpush
@section('content')
    @include('components.wrap_menu')
    <div class="content">
        @component('components.breadcrumb')
            @slot('active')Корзина @endslot
        @endcomponent
        <div class="panel panel-row">
            <form action="{{ route('order.store') }}" method="POST" id="bx-soa-order-form">
                <h1>Оформление заказа</h1>
                @if(session()->get('errors'))
                    <div class="alert alert-danger">{{ session()->get('errors') }}</div>
                @endif
                <div id="bx-soa-order" class="row basket_content">
                    <!--	MAIN BLOCK	-->
                    <div class="alert alert-success">Заказ № {{ session()->get('orderId') }} успешно создан. В течении 24 часов с вами свяжется специалист.</div>
                    <div class="bx-soa-cart-total-ghost" style="padding-top: 0px;"></div>
                </div>
            </form>
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