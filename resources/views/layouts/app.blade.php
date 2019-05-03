<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <link rel="canonical" href="https://kazan.positronica.ru/">
    <!-- !Meta -->

    <!-- Styles -->
    <script type="text/javascript" data-skip-moving="true">(function (w, d, n) {
            var cl = "bx-core";
            var ht = d.documentElement;
            var htc = ht ? ht.className : undefined;
            if (htc === undefined || htc.indexOf(cl) !== -1) {
                return;
            }
            var ua = n.userAgent;
            if (/(iPad;)|(iPhone;)/i.test(ua)) {
                cl += " bx-ios";
            } else if (/Android/i.test(ua)) {
                cl += " bx-android";
            }
            cl += (/(ipad|iphone|android|mobile|touch)/i.test(ua) ? " bx-touch" : " bx-no-touch");
            cl += w.devicePixelRatio && w.devicePixelRatio >= 2 ? " bx-retina" : " bx-no-retina";
            var ieVersion = -1;
            if (/AppleWebKit/.test(ua)) {
                cl += " bx-chrome";
            } else if ((ieVersion = getIeVersion()) > 0) {
                cl += " bx-ie bx-ie" + ieVersion;
                if (ieVersion > 7 && ieVersion < 10 && !isDoctype()) {
                    cl += " bx-quirks";
                }
            } else if (/Opera/.test(ua)) {
                cl += " bx-opera";
            } else if (/Gecko/.test(ua)) {
                cl += " bx-firefox";
            }
            if (/Macintosh/i.test(ua)) {
                cl += " bx-mac";
            }
            ht.className = htc ? htc + " " + cl : cl;

            function isDoctype() {
                if (d.compatMode) {
                    return d.compatMode == "CSS1Compat";
                }
                return d.documentElement && d.documentElement.clientHeight;
            }

            function getIeVersion() {
                if (/Opera/i.test(ua) || /Webkit/i.test(ua) || /Firefox/i.test(ua) || /Chrome/i.test(ua)) {
                    return -1;
                }
                var rv = -1;
                if (!!(w.MSStream) && !(w.ActiveXObject) && ("ActiveXObject" in w)) {
                    rv = 11;
                } else if (!!d.documentMode && d.documentMode >= 10) {
                    rv = 10;
                } else if (!!d.documentMode && d.documentMode >= 9) {
                    rv = 9;
                } else if (d.attachEvent && !/Opera/.test(ua)) {
                    rv = 8;
                }
                if (rv == -1 || rv == 8) {
                    var re;
                    if (n.appName == "Microsoft Internet Explorer") {
                        re = new RegExp("MSIE ([0-9]+[\.0-9]*)");
                        if (re.exec(ua) != null) {
                            rv = parseFloat(RegExp.$1);
                        }
                    } else if (n.appName == "Netscape") {
                        rv = 11;
                        re = new RegExp("Trident/.*rv:([0-9]+[\.0-9]*)");
                        if (re.exec(ua) != null) {
                            rv = parseFloat(RegExp.$1);
                        }
                    }
                }
                return rv;
            }
        })(window, document, navigator);</script>
    <link href="{{ asset('css/kernel_main.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('css/page.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('css/template.css') }}" type="text/css" data-template-style="true" rel="stylesheet">
    @stack('styles')
    {{-- !Styles--}}

    {{-- Vender--}}
    <link href="{{ asset('vender/fontawesome/css/all.css') }}" type="text/css" rel="stylesheet">
    {{-- !Vender --}}
    {{-- Favicon --}}
    <link rel="shortcut icon" type="image/png" href="{{ asset('favicon.png') }}"/>

</head>
<body>

<div id="panel">
</div>
@include('components.navigation')
@include('components.header')

<div class="container-fluid wrap">
    <div class='row1'>
        <div class='wrap_content'>
            @yield('content')
        </div>
        @include('components.footer')

    </div>
</div>

@include('components.modal')

<!-- Scripts -->
<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
<input type="hidden" name="ajax_check_token" id="ajax_check_token" value="e42109b492e009bb061ef0d173e3edea"/>
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/device.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.mobile.touch.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/carusel.js') }}"></script>
{{--<script type="text/javascript" src="{{ asset('vender/fontawesome/js/all.min.js') }}"></script>--}}
<script type="text/javascript" src="{{ asset('js/jquery.mask.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/select2/select2.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/select2/ru.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.validate.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/main.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/main_prog.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/spinner.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/core.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/core_promise.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/promise.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/core_ajax.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/loadext.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/extension.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/core_ui_widget.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/core_ui_etc.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/core_ui_autocomplete.min.js') }}"></script>
<script>
    var idInBasketFav = [];
    var idInBasketBuy = [];
    var idCompare = [];
    var catalogReCalc = false;
</script>
@stack('scripts')
</body>
</html>
