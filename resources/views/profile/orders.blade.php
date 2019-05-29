@extends('layouts.app')

@section('title')
    Бытовая техника и электроника в Казани - интернет-магазин {{ config('app.name', 'Мир котлов') }}
@endsection
@push('styles')
    <link href="{{ asset('css/profile.css') }}" type="text/css" data-template-style="true" rel="stylesheet">
@endpush
@section('content')
    @include('components.wrap_menu')
    <div class="content">
        @component('components.breadcrumb')
            @slot('parent_href') {{ route('profile.index') }} @endslot
            @slot('parent') Личный кабинет @endslot
            @slot('active') Мои заказы @endslot
        @endcomponent
        <div class="bx-auth-profile panel panel-row">
            <div class="panel-heading main-head">
                <h1>Личный кабинет</h1>
            </div>
            <div class="panel-body cabinet-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lgx-8 col-lg-8 col-md-8 left-content">
                            <ul class="nav nav-tabs cabinet-tabs">
                                <li>
                                    <a href="{{ route('profile.index') }}">Мои данные</a>
                                </li>

                                <li class="active">
                                    <a href="{{ route('profile.orders') }}">Мои заказы</a>
                                </li>

                                <li>
                                    <a href="{{ route('profile.wish') }}">Список желаний</a>
                                </li>

                            </ul>
                            <div class="header">
                                <div class="pull-left">Мои заказы</div>
                                <a class="btn btn btn-default pull-right"
                                   href="/personal/active-orders/?filter_history=Y">
                                    Посмотреть историю заказов </a>
                            </div>
                            <div class="h3">Текущие заказы не найдены</div>
                            <a class="btn btn-default" href="/catalog/"
                               class="sale-order-history-link">Перейти в каталог</a>
                        </div>
                        <div id="comp_750f31da9765c503d3fc330b00ed9bea">

                            <form method="post" name="form1" action="/personal/active-orders/"
                                  enctype="multipart/form-data"><input type="hidden" name="bxajaxid"
                                                                       id="bxajaxid_750f31da9765c503d3fc330b00ed9bea_8BACKi"
                                                                       value="750f31da9765c503d3fc330b00ed9bea"/><input
                                        type="hidden" name="AJAX_CALL" value="Y"/>
                                <input type="hidden" name="sessid" id="sessid"
                                       value="470dd80a8caed2d31b3f636faee292fe"/> <input type="hidden" name="lang"
                                                                                         value="s1"/>
                                <input type="hidden" name="ID" value="167148"/>
                                <input type="hidden" name="LOGIN" maxlength="50" value="rashit.sabirov1999@gmail.com">
                                <input type="hidden" name="EMAIL" maxlength="50" value="rashit.sabirov1999@gmail.com">
                                <input type="hidden" name="PERSONAL_GENDER" maxlength="50" value="">
                                <div id="profile-block-lg" class="col-lgx-4 col-lg-4 col-md-4 profile-block">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <h2>Сабиров Рашит</h2>
                                                <div class="photo">
                                                    <a title="Увеличить"
                                                       onclick="ImgShw('/upload/main/63d/63d250e37ce7e27244583d5a3e1a6ba5.jpg', 700, 393, ''); return false;"
                                                       href="//opt-860641.ssl.1c-bitrix-cdn.ru/upload/main/63d/63d250e37ce7e27244583d5a3e1a6ba5.jpg?155681108974686"
                                                       target="_blank"><img
                                                                src="//opt-860641.ssl.1c-bitrix-cdn.ru/upload/main/63d/63d250e37ce7e27244583d5a3e1a6ba5.jpg?155681108974686"
                                                                border=0 alt="" width="150" height="84"/></a></div>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <input class="form-control input-sm" type="text" readonly=""
                                                               id="proffile_text">
                                                        <div class="input-group-btn">
                                                            <button id="fileupload" class="btn btn-default">Выбрать...
                                                            </button>
                                                            <div class="hidden">
                                                                <input type="file" size="20" id="proffile"
                                                                       class="typefile" name="PERSONAL_PHOTO">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group checkbox ">
                                                            <label for="PERSONAL_PHOTO_del">
                                                                <input type="checkbox" name="PERSONAL_PHOTO_del"
                                                                       value="Y" id="PERSONAL_PHOTO_del">
                                                                <span class="cr">
                                        <i class="cr-icon glyphicon glyphicon-ok"></i>
                                    </span>
                                                                <span class="form-controll-static">Удалить</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-btn">
                                                            <input type="submit" class="btn btn-primary " name="save"
                                                                   value="Сохранить">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="info-table">
                                            <div class="row">
                                                <div class="col-lg-4">Пол</div>
                                                <div class="col-lg-6">Не указан</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">Аккаунт создан</div>
                                                <div class="col-lg-6">02.05.2019 18:30:21</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
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
            src="/local/components/positronica/bx_main.register/script.min.js"></script>
    <script type="text/javascript"
            src="/local/templates/components/search.title/script.min.js"></script>
    <script type="text/javascript"
            src="/local/components/positronica/filials.contact_info/script.min.js"></script>
    <script type="text/javascript"
            src="/local/components/positronica/menu/script.min.js?15441890943714"></script>
    <script type="text/javascript"
            src="/local/templates/components/news.list/script.min.js?1544189095185"></script>
    <script type="text/javascript"
            src="/local/components/positronica/bx_catalog.top/script.js"></script>
    <script type="text/javascript"
            src="/local/components/positronica/catalog.selected_in_cart/script.min.js"></script>
    <script type="text/javascript"
            src="/local/templates/components/system.field.edit/script.min.js"></script>
    <script type="text/javascript"
            src="/local/templates/components/main.profile/myprofile/script.js"></script>
    <script type="text/javascript"
            src="/local/templates/components/main.profile/right_widjet/script.js"></script>
    <script type="text/javascript"
            src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
    <script type="text/javascript"
            src="{{ asset('js/bootstrap-tabdrop.js') }}"></script>
    <script type="text/javascript"
            src="{{ asset('js/bootstrap-datepicker.ru.min.js') }}"></script>
@endpush