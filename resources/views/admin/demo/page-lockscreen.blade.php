
@extends('layouts.app_demo')


@section('title',"Lockscreen | Klorofil - Free Bootstrap Dashboard Template")

@section('content')
	<div class="vertical-align-wrap">
		<div class="vertical-align-middle">
			<div class="auth-box lockscreen clearfix">
				<div class="content">
					<h1 class="sr-only">Klorofil - Free Bootstrap dashboard</h1>
					<div class="logo text-center"><img src="{{ asset('admin/assets/img/logo-dark.png') }}" alt="Klorofil Logo"></div>
					<div class="user text-center">
						<img src="{{ asset('admin/assets/img/user-medium.png') }}" class="img-circle" alt="Avatar">
						<h2 class="name">Samuel Gold</h2>
					</div>
					<form action="{{ route('admin.demo.dashboard') }}">
						<div class="input-group">
							<input type="password" class="form-control" placeholder="Enter your password ...">
							<span class="input-group-btn"><button type="submit" class="btn btn-primary"><i class="fa fa-arrow-right"></i></button></span>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection