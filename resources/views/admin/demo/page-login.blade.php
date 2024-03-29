@extends('layouts.app_demo')

@section('title',"Login | Klorofil - Free Bootstrap Dashboard Template")

@section('content')
	<div class="vertical-align-wrap">
		<div class="vertical-align-middle">
			<div class="auth-box ">
				<div class="left">
					<div class="content">
						<div class="header">
							<div class="logo text-center"><img src="{{ asset('admin/assets/img/logo-dark.png') }}" alt="Klorofil Logo"></div>
							<p class="lead">Login to your account</p>
						</div>
						<form class="form-auth-small" action="{{ route('admin.demo.dashboard') }}">
							<div class="form-group">
								<label for="signin-email" class="control-label sr-only">Email</label>
								<input type="email" class="form-control" id="signin-email" value="samuel.gold@domain.com" placeholder="Email">
							</div>
							<div class="form-group">
								<label for="signin-password" class="control-label sr-only">Password</label>
								<input type="password" class="form-control" id="signin-password" value="thisisthepassword" placeholder="Password">
							</div>
							<div class="form-group clearfix">
								<label class="fancy-checkbox element-left">
									<input type="checkbox">
									<span>Remember me</span>
								</label>
							</div>
							<button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
							<div class="bottom">
								<span class="helper-text"><i class="fa fa-lock"></i> <a href="#">Forgot password?</a></span>
							</div>
						</form>
					</div>
				</div>
				<div class="right">
					<div class="overlay"></div>
					<div class="content text">
						<h1 class="heading">Free Bootstrap dashboard template</h1>
						<p>by The Develovers</p>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
@endsection