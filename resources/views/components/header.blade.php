{{-- HEADER --}}
<div class="container-fluid head">
    <div class='row'>
        <div class='col-xs-2 col-sm-1 col-md-4 col-lg-3 logo hidden-xs'>
            <a href="/" class="hidden-sm"><img src="{{ asset('images/logo.png') }}"
                                               class="img-responsive"
                                               alt="logo"></a>
            <a href="/" class="min visible-sm"><img src="{{ asset('images/logo_min.png') }}"
                                                    class="img-responsive" alt="logo"></a>
        </div>
        <div class='col-sm-7 col-md-5 col-lg-6'>
            <form action="/search/">
                <div class="input-group" id="title-search">

                    <input placeholder='ПОИСК ТОВАРА' type="search" class="form-control" id="title-search-input"
                           name="q"
                           value=""
                           maxlength="50" autocomplete="off">
                    <span class="input-group-btn">
                  <button class="btn btn-default search" type="submit"></button>
                </span>
                </div>
                <div id="keyboard_wraper" class="keyboard_wraper"></div>
            </form>
        </div>
        <div class='col-sm-4 col-md-3 col-lg-2 hidden-xs'>
            <a class='worktime' data-toggle='popover' id='worktime' data-html='true'
               data-container='.worktime'
               data-placement='bottom'
               data-class-popover='worktimePopoverConfig'
               data-trigger='hover'
               data-value='["\u041f\u043d-\u041f\u0442: 10:00 - 19:00","\u0421\u0431-\u0412\u0441: \u0412\u044b\u0445\u043e\u0434\u043d\u043e\u0439"]'>Сегодня:
                10:00 - 19:00 по МСК</a>

            <a class='phone' data-toggle='popover' data-html='true'>8(800) 333-0-333</a>
        </div>
    </div>
</div>
{{-- END HEADER--}}