@extends('master')

@section('content')
	<div class="container">
		<div class="jumbotron">
			<h2><div class="quote">{{ Inspiring::quote() }}</div></h2>
			<p>后台管理系统</p>
			<p><a class="btn btn-primary btn-lg" href="/login" role="button">点击登录</a></p>
		</div>
	</div>
@stop