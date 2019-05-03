@extends('layouts.app')

@section('title',"Бытовая техника и электроника в Казани - интернет-магазин Позитроника")
@section('description','Федеральный интернет-магазин Позитроника предлагает большой выбор электроники и бытовой техники по выгодным ценам в Казани')

@section('content')
    @include('components.wrap_menu')
    <div class="content">
        @component('components.breadcrumb')
            @slot('parent_href') {{ route('profile.index') }} @endslot
            @slot('parent') Личный кабинет @endslot
            @slot('active') Мои данные @endslot
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
                                <li class="active">
                                    <a href="{{ route('profile.index') }}">Мои данные</a>
                                </li>

                                <li class="">
                                    <a href="{{ route('profile.orders') }}">Мои заказы</a>
                                </li>

                                <li class="">
                                    <a href="{{ route('profile.wish') }}">Список желаний</a>
                                </li>

                            </ul>

                            <div id="comp_d17905fb10e1ac4a37444a95604264e7">
                                <div id="cabinet-tabs" class="tab-content">
                                    <div id="info" class="tab-pane fade active in">

                                        <form method="post" id="personForm" name="form1" action="/"
                                              enctype="multipart/form-data"
                                              class="private-data-table"><input type="hidden" name="bxajaxid"
                                                                                id="bxajaxid_d17905fb10e1ac4a37444a95604264e7_8BACKi"
                                                                                value="d17905fb10e1ac4a37444a95604264e7"/><input
                                                    type="hidden" name="AJAX_CALL" value="Y"/>
                                            <div class="header">
                                                <div class="pull-left">Личные данные</div>
                                                <input type="submit" class="editable btn btn-primary pull-right"
                                                       id="edit_personal" name="save"
                                                       data-submit="no" data-alternative="Редактировать"
                                                       value="Сохранить">
                                            </div>
                                            <input type="hidden" name="sessid" id="sessid"
                                                   value="470dd80a8caed2d31b3f636faee292fe"/> <input
                                                    type="hidden" name="lang" value="s1"/>
                                            <input type="hidden" name="ID" value=167148/>

                                            <div class="form-group col-xs-12 col-sm-6 col-md-5 col-lg-4 col-lgx-3">
                                                <label for="inputName" class="control-label cabinet-content">Имя
                                                    <span class="require">*</span></label>
                                            </div>
                                            <div class="form-group col-xs-12 col-sm-6 col-md-7 col-lg-8 col-lgx-9">
                                                <input type="text" class="input_edit form-control" required
                                                       id="inputName" name="NAME" minlength="2" maxlength="50"
                                                       value="Рашит"/>
                                            </div>
                                            <div class="form-group col-xs-12 col-sm-6 col-md-5 col-lg-4 col-lgx-3">
                                                <label for="inputlastName"
                                                       class="control-label cabinet-content">Фамилия <span
                                                            class="require">*</span></label>
                                            </div>
                                            <div class="form-group col-xs-12 col-sm-6 col-md-7 col-lg-8 col-lgx-9">
                                                <input type="text" class="input_edit form-control" required
                                                       id="inputlastName" name="LAST_NAME" minlength="2"
                                                       maxlength="50"
                                                       value="Сабиров"/>
                                            </div>

                                            <div class="form-group col-xs-12 col-sm-6 col-md-5 col-lg-4 col-lgx-3">
                                                <label for="inputPhone"
                                                       class="control-label cabinet-content">Телефон </label>
                                            </div>
                                            <div class="form-group col-xs-12 col-sm-6 col-md-7 col-lg-8 col-lgx-9">
                                                <input type="text" class="input_edit form-control"
                                                       id="inputPhone" name="PERSONAL_MOBILE" maxlength="50"
                                                       value=""/>
                                            </div>
                                            <div class="form-group col-xs-12 col-sm-6 col-md-5 col-lg-4 col-lgx-3">
                                                <label for="inputGender"
                                                       class="control-label cabinet-content">Пол </label>
                                            </div>
                                            <div class="form-group col-xs-12 col-sm-6 col-md-7 col-lg-8 col-lgx-9">
                                                <div id="inputGender" class="radio">
                                                    <label>
                                                        <input type="radio" value="M"
                                                               name="PERSONAL_GENDER" class="input_edit">
                                                        <span class="cr"><i
                                                                    class="cr-icon glyphicon glyphicon-ok-sign cabinet-content"></i></span>
                                                        <span class="text">Мужской</span>
                                                    </label>
                                                    <label>
                                                        <input type="radio" value="F"
                                                               name="PERSONAL_GENDER" class="input_edit">
                                                        <span class="cr"><i
                                                                    class="cr-icon glyphicon glyphicon-ok-sign cabinet-content"></i></span>
                                                        <span class="text">Женский</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="form-group col-xs-12 col-sm-6 col-md-5 col-lg-4 col-lgx-3">
                                                <label for="inputBirthday"
                                                       class="control-label cabinet-content">День
                                                    рождения </label>
                                            </div>
                                            <div class="form-group col-xs-12 col-sm-6 col-md-7 col-lg-8 col-lgx-9">
                                                <div class="input-group date"
                                                     data-provide="datepicker"
                                                     data-date-language="ru"
                                                     data-date-enable-on-readonly="false"
                                                     data-date=""
                                                     data-date-format="dd.mm.yyyy">
                                                    <input type="text" class="input_edit form-control"
                                                           id="inputBirthday" name="PERSONAL_BIRTHDAY"
                                                           maxlength="50"
                                                           value=""/>
                                                    <span class="input-group-addon"><i
                                                                class="far fa-calendar-times"></i></span>
                                                </div>


                                            </div>
                                            <div class="form-group col-xs-12 col-sm-6 col-md-5 col-lg-4 col-lgx-3">
                                                <label for="inputEmail" class="control-label cabinet-content">Электронная
                                                    почта <span class="require">*</span></label>
                                            </div>
                                            <div class="form-group col-xs-12 col-sm-6 col-md-7 col-lg-8 col-lgx-9">
                                                <input type="text" class="input_edit form-control" required
                                                       id="inputEmail" email="true" name="EMAIL" maxlength="50"
                                                       value="rashit.sabirov1999@gmail.com"/>
                                            </div>
                                            <div class="clearfix"></div>
                                            <input type="hidden" class="input_edit form-control" required
                                                   id="inputLogin" name="LOGIN" maxlength="50"
                                                   value="rashit.sabirov1999@gmail.com"/>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="comp_ef9de32d6eb2e968a0d5ec8f0f2e3c97">

                            <form method="post" name="form1" action="/" enctype="multipart/form-data">
                                <input type="hidden" name="bxajaxid"
                                       id="bxajaxid_ef9de32d6eb2e968a0d5ec8f0f2e3c97_Ar8Szp"
                                       value="ef9de32d6eb2e968a0d5ec8f0f2e3c97"/><input type="hidden"
                                                                                        name="AJAX_CALL"
                                                                                        value="Y"/>
                                <input type="hidden" name="sessid" id="sessid_1"
                                       value="470dd80a8caed2d31b3f636faee292fe"/> <input type="hidden"
                                                                                         name="lang"
                                                                                         value="s1"/>
                                <input type="hidden" name="ID" value="167148"/>
                                <input type="hidden" name="LOGIN" maxlength="50"
                                       value="rashit.sabirov1999@gmail.com">
                                <input type="hidden" name="EMAIL" maxlength="50"
                                       value="rashit.sabirov1999@gmail.com">
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
                                                        <input class="form-control input-sm" type="text"
                                                               readonly="" id="proffile_text">
                                                        <div class="input-group-btn">
                                                            <button id="fileupload" class="btn btn-default">
                                                                Выбрать...
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
                                                        <div class="input-group checkbox ">
                                                            <label for="UF_PERSONAL_DATA">
                                                                <input type="hidden" value="0"
                                                                       name="UF_PERSONAL_DATA">
                                                                <input type="checkbox" name="UF_PERSONAL_DATA"
                                                                       value="Y" id="UF_PERSONAL_DATA"
                                                                       checked="checked">
                                                                <span class="cr">
                            <i class="cr-icon glyphicon glyphicon-ok"></i>
                        </span>
                                                                <span class="form-controll-static">Согласен на обработку <a
                                                                            href="{{ route('politika') }}"
                                                                            target="_blank">персональных данных</a>                            </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-btn">
                                                            <input type="submit" class="btn btn-primary "
                                                                   name="save" value="Сохранить">
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
            src="/local/components/positronica/filials.contact_info/script.min.js?15441890941696"></script>
    <script type="text/javascript"
            src="/local/components/positronica/menu/script.min.js?15441890943714"></script>
    <script type="text/javascript"
            src="/local/templates/components/news.list/script.min.js?1544189095185"></script>
    <script type="text/javascript"
            src="/local/components/positronica/bx_catalog.top/script.js?15441890943019"></script>
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