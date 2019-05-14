@extends('layouts.app_admin')

@section('title'," Вход | Админ панель")


@section('content')
    <div class="vertical-align-wrap">
        <div class="vertical-align-middle">
            <div class="auth-box ">
                <div class="left">
                    <div class="content" style="width: 98%">
                        <div class="header">
                            <div class="logo text-center"><img src="{{ asset('images/logo.png') }}" alt="Klorofil Logo">
                            </div>
                        </div>
                        <form class="form-auth-small" method="Post" action="{{ route('admin.loginPost') }}">
                            <div class="form-group">
                                <label for="signin-email" class="control-label sr-only">Email</label>
                                <input name="email" type="email"
                                       class="form-control  {{ $errors->has('email') ? ' is-invalid' : '' }}"
                                       id="signin-email" value="{{ old('email') }}" placeholder="Email">
                            </div>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                            <div class="form-group">
                                <label for="signin-password" class="control-label sr-only">Password</label>
                                <input name="password" type="password"
                                       class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}"
                                       id="signin-password" value="thisisthepassword" placeholder="Password">
                            </div>
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                            <div class="form-group clearfix">
                                <label class="fancy-checkbox element-left">
                                    <input name="remember" {{ old('remember') ? 'checked' : '' }} type="checkbox">
                                    <span>Remember me</span>
                                </label>
                            </div>
                            @include('components.message')
                            <button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
                        </form>
                    </div>
                </div>
                <div class="right">
                    <div class="overlay"></div>
                    <div class="content text">
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
@endsection