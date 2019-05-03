@extends('layouts.app')

@section('title',"Бытовая техника и электроника в Казани - интернет-магазин Позитроника")
@section('description','Федеральный интернет-магазин Позитроника предлагает большой выбор электроники и бытовой техники по выгодным ценам в Казани')

@section('content')
    @include('components.wrap_menu')
    <div class="content">
        <ul class="breadcrumb hidden-xs" itemscope="" itemtype="http://schema.org/BreadcrumbList">
            <li itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem"><a itemprop="item"
                                                                                                 href="/"><span
                            itemprop="name">Интернет-магазин</span></a>
                <meta itemprop="position" content="1">
            </li>
            <li class="active">Корзина</li>
        </ul>
        <div class="panel panel-row">
            <div class="panel-heading main-head">
                <h1>Корзина</h1>
            </div>
            <div class="panel-body">
                <div class="row container-fluid">
                    <div class="col-xs-12">
                        <p><span>Ваша корзина пуста<br>Воспользуйтесь поиском или каталогом, выберите нужные товары и добавьте их в
                    корзину</span></p>
                        <a href="/" class="btn btn-primary btn-lg">Главная страница</a>
                    </div>
                </div>
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