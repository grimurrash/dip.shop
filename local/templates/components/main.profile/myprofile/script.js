$(document).ready(function () {

    $(document).on("click", "#edit_personal", editData);
    $(document).on("click", "#btn_save_pass", editPswd);
    maskPhone($('#inputPhone'));
    $("#edit_personal").trigger('click');
    $(".input_edit").prop('readonly', true);
    $("#btn_save_pass").trigger('click');

    $(document).on("keyup", "#password", function (event) {
        refreshSavePass();
    });
    $(document).on("keyup", "#password-again", function (event) {
        refreshSavePass();
    });
    // $('.cabinet-tabs').tabdrop({text: '<span class="icon-product"></span>'});
    $('#personForm').validate({
        submitHandler: function (form) {
            form.submit();
        },
        errorElement: "span",
        errorPlacement: function (error, element) {
            duble = element.next(".help-block");
            if (duble.size() > 0) duble.remove();
            error.addClass("help-block").insertAfter(element);
        },
        showErrors: function (errorMap, errorList) {
            BX.closeWait();
            $(this.currentElements).closest(".form-group").removeClass("has-error");
            if (errorList.length > 0) {
                for (k in errorList)
                    $(errorList[k].element).closest(".form-group").addClass("has-error");
            }
            this.defaultShowErrors(errorMap, errorList);
        },
        messages: {
            NAME: {
                required: "Укажите Ваще имя",
                minlength: "Имя должно быть не меньше 2 символов",
                maxlength: "Имя должно быть не больше 50 символов"
            },
            LAST_NAME: {
                required: "Укажите Вашу фамилию",
                minlength: "Фамилия должна быть не меньше 2 символов",
                maxlength: "Фамилия должна быть не больше 50 символов"
            },
            EMAIL: {
                required: "Укажите Ваш электронный адрес",
                email: "Укажите валидный электронный адрес"
            }
        }
    });

});
function editPswd(event) {
    if ($(this).html() != 'Изменить' && $(this).is(":visible")) {
        if (!$("#edit_personal").hasClass('editable'))
            $("#edit_personal").trigger('click');

        $("#edit_personal").trigger('click');
    }

    $(this).changeHtml();

    value = ($(this).html() == 'Изменить') ? 'disabled' : '';
    $('#password').prop('disabled', value);
    $('#password-again').prop('disabled', value);
    if ($(this).html() != 'Изменить') {
        $(this).addClass('hidden');
        $('#password').focus();
    }
    else
        $(this).removeClass('hidden');
    return false;
}

function editData(event) {
    if ($(this).data("submit") == "yes" && $(this).hasClass('editable')) return true;
    var value = '', dvalue = '';
    $(this).changeVal();
    if ($(this).hasClass('editable')) {
        //преобразуем кнопку в редактировать
        value = 'readonly';
        dvalue = 'disabled';
        $(this).removeClass('editable').removeClass('btn-primary').addClass('btn-default');

    } else {
        value = '';
        dvalue = '';
        $(this).addClass('editable').removeClass('btn-default').addClass('btn-primary');
    }
    $(".input_edit").each(function (index) {
        $(this).prop('readonly', value);
    });

    if (value != 'readonly' || $(this).data("submit") == "no") {
        $('#inputGender input[type=radio]').prop('disabled', dvalue);
        event.preventDefault();
        $(this).data("submit", "yes");
        return false;
    }
}

$.fn.changeHtml = function () {
    var _tmp = $(this).data("alternative");
    $(this).data("alternative", $(this).html())
        .html(_tmp);
    return this;
}
$.fn.changeVal = function () {
    var _tmp = $(this).data("alternative");
    $(this).data("alternative", $(this).val())
        .val(_tmp);
    return this;
}

function refreshSavePass() {
    var pvd = passValidate();
    var new_pass = $('#password').val(), new_pass_confirm = $('#password-again').val();
    if (new_pass != '' && new_pass == new_pass_confirm && pvd == true)
        $('#btn_save_pass').removeClass('hidden');
    else
        $('#btn_save_pass').addClass('hidden');

}

function passValidate() {
    var new_pass = $('#password').val(), new_pass_confirm = $('#password-again').val(), result = '', cnt = 0;
    var regexp0 = /[A-Z]/, regexp1 = /[a-z]/, regexp2 = /[,.<>\/?;:'"[\]{}|`~!@#$%^&*()\-_+=]/;
    if (new_pass != new_pass_confirm) {
        cnt++;
        result += '<span>Неверное подтверждение пароля<br /></span>';
    }
    if (new_pass.length < 10) {
        cnt++;
        result += '<span>Пароль должен быть не менее 10 символов длиной.<br /></span>';
    }
    if (!regexp0.test(new_pass)) {
        cnt++;
        result += '<span>Пароль должен содержать латинские символы верхнего регистра (A-Z).<br /></span>';
    }
    if (!regexp1.test(new_pass)) {
        cnt++;
        result += '<span>Пароль должен содержать латинские символы нижнего регистра (a-z).<br /></span>';
    }
    if (!regexp2.test(new_pass)) {
        cnt++;
        result += '<span>Пароль должен содержать знаки пунктуации (,.<>/?;:\'"[]{}\|`~!@#$%^&*()-_+=).<br /></span>';
    }
    $('.alert.alert-dismissible.alert-danger span').remove();
    if (cnt > 0) {
        $('.alert.alert-dismissible.alert-danger').append(result).show();
        return false;
    }
    else {
        $('.alert.alert-dismissible.alert-danger').append(result).hide();
        return true;
    }
}