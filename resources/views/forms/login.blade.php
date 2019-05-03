<form class="form-horizontal js_login_form" method="POST" target="_top" id="logForm"
      action="/?login=yes">
    <div
            class="form-group col-lg-12  ">
        <label class="control-label" for="loginEmail">Email <span
                    class="require">*</span></label>
        <input type="text" placeholder="Например, example@gmail.com" id="loginEmail"
               class="form-control" name="email" value="">
        <span class="help-block"></span>
    </div>
    <div
            class="form-group col-lg-12 ">
        <label class="control-label" for="loginPassword">Пароль <span
                    class="require">*</span></label>
        <input type="password" placeholder="Password" id="loginPassword" class="form-control"
               name="password" autocomplete="off">
        <span class="help-block"></span>
    </div>
    <div class="form-group col-lg-12">
        <button class="btn btn-primary btn-lg btn-login" type="submit">ВОЙТИ
        </button>
    </div>
    {{--<div class="form-group col-lg-12">--}}
        {{--<a class="recovery" id="recoveryAuth" data-alternative="Авторизоваться" rel="nofollow">Восстановить--}}
            {{--пароль</a>--}}
    {{--</div>--}}
    <span class="help-block"><span
                class="require">*</span> Поля, отмеченные звездочкой обязательны для заполнения</span>
</form>

@push('scripts')
    <script type="text/javascript"
            src="/local/templates/components/system.auth.form/script.min.js?15477210201775"></script>
@endpush
