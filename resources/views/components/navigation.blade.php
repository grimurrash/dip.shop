<div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Меню</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="/" class="min visible-xs-inline-block logo_mobile"><img
                        src="{{ asset('images/logo.png') }}"
                        class="img-responsive"></a>
            <a class="navbar-brand visible-xs cart"
               data-toggle="popover"
               data-container=".basket"
               data-trigger="manual"
               data-class-popover="basketPopoverConfig"
               data-html="true"
            ></a>
        </div>
        <div class="navbar-collapse collapse">

            <ul class="nav navbar-nav">
                <li class="visible-xs"><a href="/">ГЛАВНАЯ</a></li>
                <li class="visible-xs"><a data-toggle="dropdown" data-target="#menu">КАТАЛОГ</a></li>
                <li><a href="{{ route('dostavka') }}">ДОСТАВКА</a></li>
                <li><a href="{{ route('oplata') }}">ОПЛАТА</a></li>
            </ul>
            <!--noindex-->
            <div class="nav navbar-nav navbar-right hidden-xs">
                <a class="navbar-brand" id='bas' data-toggle="popover"
                   data-container=".basket"
                   data-trigger="manual"
                   data-class-popover="basketPopoverConfig"
                   data-html="true"
                   rel="nofollow"></a>

                <div class="visible-lg visible-md cart" id="cart_informer"> 0 позиций на
                    сумму 0 ₽
                </div>
            </div>

            <ul class="nav navbar-nav navbar-right">
                <li><a id="logon"
                       data-toggle="popover"
                       data-object="login"
                       data-html="true"
                       data-container=".logon"
                       data-placement="bottom"
                       data-class-popover="logonPopoverConfig"
                       data-trigger="manual"
                       rel="nofollow">ВХОД</a></li>
            </ul>

            <div class="logon"></div>
            <div class="hidden_content" id="login_reg_popup_title">
                <button type="button" class="close" data-dismiss="popover" aria-hidden="true">&times;</button>
            </div>
            <div class="hidden_content" id="login_reg_popup_content">
                <ul class="nav nav-tabs link">
                    <li class="active"><a aria-expanded="true" href="#login" data-toggle="tab"
                                          rel="nofollow"><span>Вход</span></a>
                    </li>
                    <li><a aria-expanded="false" href="#registration" data-toggle="tab"
                           rel="nofollow"><span>Регистрация</span></a>
                    </li>
                </ul>
                <div id="logonTabContent" class="tab-content">


                    <div class="tab-pane fade active in" id="login">
                        <legend data-alternative="Для восстановления пароля укажите почту с которой регистрировались на сайте.">
                            Авторизуйтесь, если вы уже зарегистрированы в нашем магазине.
                        </legend>


                        <form class="form-horizontal js_login_form" method="POST" target="_top"
                              action="/?login=yes">

                            <input type="hidden" name="backurl" value="/"/>
                            <input type="hidden" name="AUTH_FORM" value="Y"/>
                            <input type="hidden" name="TYPE" value="AUTH"/>
                            <div
                                    class="form-group col-lg-12  ">
                                <label class="control-label" for="loginEmail">Email <span
                                            class="require">*</span></label>
                                <input type="text" placeholder="Например, example@gmail.com" id="loginEmail"
                                       class="form-control" name="USER_LOGIN" value="" required>
                                <span class="help-block"></span>
                            </div>
                            <div
                                    class="form-group col-lg-12 ">
                                <label class="control-label" for="loginPassword">Пароль <span
                                            class="require">*</span></label>
                                <input type="password" placeholder="Password" id="loginPassword" class="form-control"
                                       name="USER_PASSWORD" autocomplete="off" required>
                                <span class="help-block"></span>
                            </div>
                            <div class="form-group col-lg-12">
                                <button class="btn btn-primary btn-lg btn-login" type="submit" name="enter_sbmt"
                                        data-alternative="ВОССТАНОВИТЬ">ВОЙТИ
                                </button>
                            </div>
                            <div class="form-group col-lg-12">
                                <a class="recovery" id="recoveryAuth" data-alternative="Авторизоваться" rel="nofollow">Восстановить
                                    пароль</a>
                            </div>
                            <span class="help-block"><span
                                        class="require">*</span> Поля, отмеченные звездочкой обязательны для заполнения</span>
                        </form>


                    </div>
                    <div class="tab-pane fade" id="registration">
                        <form class="form-horizontal js_reg_form" method="post" action="/" name="regform"
                              enctype="multipart/form-data">

                            <div class="form-group col-lg-12 ">
                                <label class="control-label" for="regName">Фамилия Имя Отчество <span
                                            class="require">*</span></label>
                                <input type="text" name="REGISTER[IN_ONE_ROW]"
                                       value=""
                                       placeholder="Иванов Иван Иванович" id="regName"
                                       class="form-control" required>
                                <span class="help-block"></span>
                            </div>
                            <div class="form-group col-lg-12 ">
                                <label class="control-label" for="regEmail">Email <span
                                            class="require">*</span></label>
                                <input type="text" name="REGISTER[EMAIL]"
                                       value="" placeholder="Например, example@gmail.com" id="regEmail"
                                       class="form-control" required>
                                <span class="help-block"></span>
                            </div>
                            <div class="form-group col-lg-12 ">
                                <label class="control-label" for="regPassword">Пароль <span
                                            class="require">*</span></label>
                                <input type="password" placeholder="Password" id="regPassword"
                                       class="form-control" name="REGISTER[PASSWORD]"
                                       value="" autocomplete="off" required>
                                <span class="help-block"></span>
                            </div>
                            <div class="form-group col-lg-12 checkbox ">
                                <label class="control-label" for="regPersonalData">
                                    <input type="checkbox" id="regPersonalData"
                                           class="form-control" name="REGISTER[UF_PERSONAL_DATA]"
                                           value="Y" required>
                                    <span class="cr">
                    <i class="cr-icon glyphicon glyphicon-ok"></i>
                </span>
                                    <span class="form-controll-static">Согласен на обработку <a
                                                href="{{ route('politika') }}" target="_blank">персональных данных</a><span
                                                class="require">*</span></span>
                                </label>
                                <span class="help-block"></span>
                            </div>

                            <div class="form-group col-lg-12 ">
                                <label class="control-label" for="regCaptcha">Введите код <span
                                            class="require">*</span></label>
                                <div>
                                    <div class="form-col-left col-lg-6">
                                        <input name="captcha_sid" value="0abc46644ef04c6505bc427d89ec4e0f"
                                               type="hidden">
                                        <img src="{{ asset('images/captcha.jpg') }}"
                                             alt="Каптча" class="img-responsive" height="40">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="form-col-right col-lg-6">
                                        <input name="captcha_word" id="regCaptcha" class="form-control" type="text">
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group col-lg-12">
                                <button class="btn btn-primary btn-lg btn-login" name="register_submit_button"
                                        type="submit" value="1">
                                    ЗАРЕГИСТРИРОВАТЬСЯ
                                </button>
                            </div>
                            <span class="help-block">
		<span class="require">*</span> Поля, отмеченные звездочкой обязательны для заполнения</span>
                        </form>
                    </div>
                </div>
            </div>
            <!--/noindex-->


        </div>
    </div>
    <div class='basket'></div>
</div>
@push('scripts')
    <script type="text/javascript"
            src="/local/templates/components/system.auth.form/script.min.js?15477210201775"></script>
    <script type="text/javascript"
            src="/local/templates/components/sale.basket.basket.line/script.min.js?15441890951174"></script>
@endpush
