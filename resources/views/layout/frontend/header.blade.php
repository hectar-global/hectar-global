<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&amp;display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{asset('assetfront/css/bootstrap.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('assetfront/style.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('assetfront/css/swiper.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('assetfront/css/dark.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('assetfront/css/font-icons.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('assetfront/css/animate.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('assetfront/css/magnific-popup.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('assetfront/css/custom.css')}}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Document Title
	============================================= -->
	<title>Polls Map</title>

</head>

<?php
use Illuminate\Support\Facades\DB;
$navigation = DB::table('categories')->get();
//return $navigation;die();

?>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

<header id="header" class="full-header">
	<div id="header-wrap">
		<div class="container">
			<div class="header-row">

				<!-- Logo
				============================================= -->
				<div id="logo">
					<a href="index.html" class="standard-logo" data-dark-logo="{{asset('assetfront/images/logo.png')}}"><img src="{{asset('assetfront/images/logo.png')}}" alt="Canvas Logo"></a>
					<a href="index.html" class="retina-logo" data-dark-logo="{{asset('assetfront/images/logo%402x.png')}}"><img src="{{asset('assetfront/images/logo%402x.png')}}" alt="Canvas Logo"></a>
				</div><!-- #logo end -->

				<div class="header-misc">

					<!-- Top Search
					============================================= -->
					<!-- <div id="top-search" class="header-misc-icon">
						<a href="#" id="top-search-trigger"><i class="icon-line-search"></i><i class="icon-line-cross"></i></a>
					</div> --><!-- #top-search end -->

					<!-- Top Cart
					============================================= -->
					

				</div>

				<div id="primary-menu-trigger">
					<svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
				</div>

				<!-- Primary Navigation
				============================================= -->
				<nav class="primary-menu">

					<ul class="menu-container">
						<li class="menu-item">
							<a class="menu-link" href="/"><div>Home</div></a>
						</li>
						{{-- @foreach ( $navigation as $nav_results)
						<li class="menu-item">
							@if($nav_results->id =='6')
							   <a class="menu-link" href="{{ url('ourteam') }}"><div>{{$nav_results->name}}</div></a>
							@else
							<a class="menu-link" href="{{$nav_results->id}}/{{str_replace(' ', '-', $nav_results->name)}}/"><div>{{$nav_results->name}}</div></a>
							@endif
						</li>
						@endforeach --}}

						<li class="menu-item"><a class="menu-link" href="{{ url('details/1/types-of-studies') }}"><div>Types Of Studies</div></a></li>
						<li class="menu-item"><a class="menu-link" href="{{ url('details/2/who-we-are') }}"><div>Who We Are</div></a></li>
						<li class="menu-item"><a class="menu-link" href="{{ url('details/3/what-we-do') }}"><div>What We Do</div></a></li>
						<li class="menu-item"><a class="menu-link" href="{{ url('details/4/our-strengths') }}"><div>Our Strengths</div></a></li>
						<li class="menu-item"><a class="menu-link" href="{{ url('details/5/experience') }}"><div>Experience</div></a></li>
						<li class="menu-item"><a class="menu-link" href="{{ url('ourteam') }}"><div>Our Team</div></a></li>
						<li class="menu-item"><a class="menu-link" href="{{ url('details/7/our-clients') }}"><div>Our Clients</div></a></li>
						<li class="menu-item"><a class="menu-link" href="{{ url('details/8/news') }}"><div>News</div></a></li>
						

					</ul>

				</nav><!-- #primary-menu end -->

				<form class="top-search-form" action="http://themes.semicolonweb.com/html/canvas/search.html" method="get">
					<input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter.." autocomplete="off">
				</form>

			</div>
		</div>
	</div>
	<div class="header-wrap-clone"></div>
</header>