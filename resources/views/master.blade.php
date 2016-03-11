@include('public.header')

<body class="home">
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				@if(Auth::guest())
					<a class="navbar-brand" href="/"><img src="images/public/logo.png" alt="TP"></a>
				@else
					@if (Auth::user()->is_admin)
						<a class="navbar-brand" href="/admin"><!-- <img src="assets/images/logo.png" alt="TP"> -->后台管理系统</a>
					@else
						<a class="navbar-brand" href="/"><img src="/images/public/logo.png" alt="homestay logo"></a>
					@endif
				@endif
			</div>
			
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					@if (Auth::guest())
						<li class="active"><a href="/rooms/new" class="btn">Become a Host</a></li>
						<li><a href="#">About</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Help <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="#">Host</a></li>
								<li class="active"><a href="sidebar-right.html">Guest</a></li>
							</ul>
						</li>
					@else
						@if (Auth::user()->user_type == 1)
							<li class="active"><a class="btn" id="">Find a Host</a></li>

							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Host</a>

								<ul class="dropdown-menu" role="menu">
									@if (Auth::user()->user_type == 1)
										<li><a href="{{ url('/host/profile') }}">Dashboard</a></li>
										<li><a href="{{ url('/rooms') }}">Manage Listings</a></li>
										<li><a href="{{ url('/rooms/new') }}">List Your Space</a></li>
										<li><a href="{{ url('') }}">Your Reservations</a></li>
									@endif
									@if (Auth::user()->user_type == 2)
										<li><a href="{{ url('/stu/edit') }}">修改Stu信息</a></li>
									@endif
									<li><a href="{{ url('/logout') }}">Log Out</a></li>
								</ul>
							</li>
						@else
							<li><a href="{{ url('/stu/home') }}">Guest</a></li>
						@endif
					@endif
					
					@if (Auth::guest())
						<li><a href="/register">Sign Up</a></li>
						<li><a href="/login">Log In</a></li>
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<div class="profile-header-img">
									{{ Auth::user()->email }}	
									@if (Auth::user()->photo)
										<img class="img-circle" src="/{{ Auth::user()->photo }}" alt="">
									@endif
								</div>
							</a>
							<ul class="dropdown-menu" role="menu">
								@if (Auth::user()->user_type == 1)
									<li><a href="{{ url('/host/profile') }}">Edit Profile</a></li>
									<li><a href="{{ url('/rooms') }}">Your Listing</a></li>
									<li><a href="{{ url('') }}">Account Setting</a></li>
								@endif
								@if (Auth::user()->user_type == 2)
									<li><a href="{{ url('/stu/edit') }}">修改Stu信息</a></li>
								@endif
								<li><a href="{{ url('/logout') }}">Log Out</a></li>
							</ul>
						</li>
					@endif
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

	<!-- <div class="container"> include('flash') -->
	
	<!-- </div> -->



	@yield('content')


@extends('public.footer')
