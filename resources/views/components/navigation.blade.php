{{-- NAVBAR--}}
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
                <?php
                    if(session()->get('basket') !== null){
                        $basket = session()->get('basket');
                    }else{
                        $basket = [];
                    }
                ?>
                <div class="visible-lg visible-md cart" id="cart_informer">
                    {{ count($basket) }} позиций на сумму <?php
                        $total = 0;
                        foreach ($basket as $item) {
                            $total += $item['count'] * $item['price'];
                        }
                        echo $total;
                     ?> ₽
                </div>
            </div>

            <ul class="nav navbar-nav navbar-right">
                @guest
                    <li><a id="logon"
                           data-toggle="popover"
                           data-object="login"
                           data-html="true"
                           data-container=".logon"
                           data-placement="bottom"
                           data-class-popover="logonPopoverConfig"
                           data-trigger="manual"
                           rel="nofollow">ВХОД</a></li>
                @else
                    <li><a href="{{ route('profile.index') }}" id="personal" rel="nofollow">ЛИЧНЫЙ КАБИНЕТ</a></li>
                    <li><a href="{{ route('logout') }}" rel="nofollow" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">ВЫХОД</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                @endguest

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

                        @include('forms.login')

                    </div>
                    <div class="tab-pane fade" id="registration">
                        @include('forms.register')
                    </div>
                </div>
            </div>
            <!--/noindex-->


        </div>
    </div>
    <div class='basket'></div>
</div>
{{-- END NAVBAR--}}
@push('scripts')
    <script type="text/javascript"
            src="/local/templates/components/system.auth.form/script.min.js?15477210201775"></script>
    <script type="text/javascript"
            src="/local/templates/components/sale.basket.basket.line/script.min.js?15441890951174"></script>
@endpush
