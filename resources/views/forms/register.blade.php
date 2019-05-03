<form class="form-horizontal js_reg_form" method="post" action="/" id="regForm"
      enctype="multipart/form-data">

    <div class="form-group col-lg-12 ">
        <label class="control-label" for="regName">Фамилия Имя Отчество <span
                    class="require">*</span></label>
        <input type="text" name="name"
               value=""
               placeholder="Иванов Иван Иванович" id="regName"
               class="form-control">
        <span class="help-block"></span>
    </div>
    <div class="form-group col-lg-12 ">
        <label class="control-label" for="regEmail">Email <span
                    class="require">*</span></label>
        <input type="text" name="email"
               value="" placeholder="Например, example@gmail.com" id="regEmail"
               class="form-control">
        <span class="help-block"></span>
    </div>
    <div class="form-group col-lg-12 ">
        <label class="control-label" for="regPassword">Пароль <span
                    class="require">*</span></label>
        <input type="password" placeholder="Password" id="regPassword"
               class="form-control" name="password"
               value="" autocomplete="off">
        <span class="help-block"></span>
    </div>
    <div class="form-group col-lg-12 checkbox">
        <label class="control-label" for="regPersonalData">
            <input type="checkbox" id="regPersonalData"
                   class="form-control check" name="personalData">
            <span class="cr">
                    <i class="cr-icon glyphicon glyphicon-ok"></i>
                </span>
            <span class="form-controll-static">Согласен на обработку <a
                        href="{{ route('politika') }}" target="_blank">персональных данных</a><span
                        class="require">*</span></span>
        </label>
        <span class="help-block"></span>
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

@push('scripts')
    <script type="text/javascript"
            src="/local/components/positronica/bx_main.register/script.min.js?1544189094858"></script>
@endpush