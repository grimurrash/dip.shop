<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="fullscreen-bg">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>@yield('title')</title>

    {{-- VENDOR CSS --}}
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/bootstrap/css/bootstrap.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/linearicons/style.css') }}">

    {{-- STYLE--}}
    <link rel="stylesheet" href="{{ asset('admin/assets/css/main.css') }}">
    @stack('styles')

    {{-- GOOGLE FONTS --}}
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">

    {{-- Icon --}}
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('admin/assets/img/apple-icon.png') }} ">
    <link rel="shortcut icon" type="image/png" href="{{ asset('favicon.png') }}"/>

</head>
<body>
<!-- WRAPPER -->
<div id="wrapper">
    @yield('content')
</div>
<!-- END WRAPPER -->
<!-- Javascript -->
<script src="{{ asset('admin/assets/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('admin/assets/scripts/klorofil-common.js') }}"></script>
@stack('scripts')
</body>
</html>



{{--<nav class="navbar navbar-expand-md navbar-light navbar-laravel">--}}
{{--<div class="container">--}}
{{--<a class="navbar-brand" href="{{ url('/') }}">--}}
{{--{{ config('app.name', 'Laravel') }}--}}
{{--</a>--}}
{{--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">--}}
{{--<span class="navbar-toggler-icon"></span>--}}
{{--</button>--}}

{{--<div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
{{--<!-- Left Side Of Navbar -->--}}
{{--<ul class="navbar-nav mr-auto">--}}

{{--</ul>--}}

{{--<!-- Right Side Of Navbar -->--}}
{{--<ul class="navbar-nav ml-auto">--}}
{{--<!-- Authentication Links -->--}}
{{--@guest--}}
{{--<li class="nav-item">--}}
{{--<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
{{--</li>--}}
{{--@if (Route::has('register'))--}}
{{--<li class="nav-item">--}}
{{--<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
{{--</li>--}}
{{--@endif--}}
{{--@else--}}
{{--<li class="nav-item dropdown">--}}
{{--<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
{{--{{ Auth::user()->name }} <span class="caret"></span>--}}
{{--</a>--}}

{{--<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
{{--<a class="dropdown-item" href="{{ route('logout') }}"--}}
{{--onclick="event.preventDefault();--}}
{{--document.getElementById('logout-form').submit();">--}}
{{--{{ __('Logout') }}--}}
{{--</a>--}}

{{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--@csrf--}}
{{--</form>--}}
{{--</div>--}}
{{--</li>--}}
{{--@endguest--}}
{{--</ul>--}}
{{--</div>--}}
{{--</div>--}}
{{--</nav>--}}