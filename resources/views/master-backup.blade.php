<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> @yield('title') </title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/all.css') }}">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				@if(Auth::guest())
					<a class="navbar-brand" href="/">Logo</a>
				@else
					@if (Auth::user()->is_admin)
						<a class="navbar-brand" href="/admin">后台管理系统</a>
					@else
						<a class="navbar-brand" href="/">Logo</a>
					@endif
				@endif

			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<!-- 				<ul class="nav navbar-nav">
					<li><a href="http://www.golaravel.com" target="__blank">Power by laravel5</a></li>
			</ul> -->
				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<a class="btn btn-primary btn" href="/login" role="button">登录</a>
						<a class="btn btn-success btn" href="/register" role="button">注册</a>
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								@if (Auth::user()->user_type == 1)
									<li><a href="{{ url('/host/edit') }}">修改Host信息</a></li>
									<li><a href="{{ url('') }}">修改房源信息</a></li>
								@endif
								@if (Auth::user()->user_type == 2)
									<li><a href="{{ url('/stu/edit') }}">修改Stu信息</a></li>
								@endif
								<li><a href="{{ url('/logout') }}">退出</a></li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>

	<div class="container">
		@include('flash')
	</div>

	@yield('content')
