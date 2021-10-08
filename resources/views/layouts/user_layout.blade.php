<!DOCTYPE html>
<html lang="en">
<head>
	<title>@yield('title')</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->	
	<link rel="stylesheet" href="{{ asset('external_files/home_page/vendor/bootstrap/css/bootstrap.min.css') }}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" href="{{ asset('external_files/home_page/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" href="{{ asset('external_files/home_page/fonts/iconic/css/material-design-iconic-font.min.css') }}">
    <!--===============================================================================================-->
	<link rel="stylesheet" href="{{ asset('external_files/home_page/fonts/linearicons-v1.0.0/icon-font.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" href="{{ asset('external_files/home_page/vendor/animate/animate.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('external_files/home_page/vendor/css-hamburgers/hamburgers.min.css') }}">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!--===============================================================================================-->	
    <!-- error here--> 
	<!-- <link rel="stylesheet" type="text/css" href="{{ asset('external_files/vendor/animsition/css/animsition.min.css') }}"> -->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('external_files/home_page/vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('external_files/home_page/vendor/daterangepicker/daterangepicker.css') }}">
    <!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('external_files/home_page/vendor/slick/slick.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('external_files/home_page/vendor/MagnificPopup/magnific-popup.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('external_files/home_page/vendor/perfect-scrollbar/perfect-scrollbar.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('external_files/home_page/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('external_files/home_page/css/main.css') }}">
<!--===============================================================================================-->
<link rel="icon" type="image/png" href="{{ asset('external_files/home_page/images/logo.png') }}" sizes="50x20">
<link rel="stylesheet" type="text/css" href="{{ asset('external_files/home_page/css/bootstrap.profile.css') }}">
<!--===============================================================================================-->
</head>
<body class="animsition">
    <!-- Header -->
	<header class="header-v4">   <!--<header> this is original in home page-->
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<!-- Topbar -->
		
			<div class="wrap-menu-desktop">
				<nav class="limiter-menu-desktop container">
					
					<!-- Logo desktop -->		
					<a href="{{ route('home_page') }}" class="logo">
						<img src="{{ asset('external_files/home_page/images/icons/logo-01.png') }}" alt="IMG-LOGO">
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
							<li>
								<a href="{{ route('home_page') }}">Home</a>
								
							</li>

							

							<li class="label1" data-label1="hot">
								<a href="{{ route('shop') }}">Shop</a>
							</li>
							<li>
								<a href="{{ route('cart') }}">Cart</a>
							</li>

						

							<li>
								<a href="{{route('about1')}}">About</a>
							</li>

							<li>
								<a href="{{route('contact1')}}">Contact</a>
							</li>
						</ul>
					</div>	

					<!-- Icon header -->
				
					<div class="wrap-icon-header flex-w flex-r-m">
					<li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <i class="fa fa-bell" style="color:black;"></i><span class="badge badge-light">{{Auth::user()->unreadNotifications->count()}}</span>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <li ><a href="{{route('markRead')}}" style="color:green;">Mark all as Read</a></li>
                                @foreach(Auth::user()->unreadNotifications as $notification)

                         
                                   <li style="background-color:lightgrey;" class="dropdown-item"><a href="{{route('markReadOne')}}" style="color:black;" ><p>Your order to '{{ $notification->data['tailor'] }}' is <b>{{ $notification->data['status'] }}</b></p></a></li>
                                   @endforeach
                                   @foreach(Auth::user()->readNotifications as $notification)

                              
                                   <li class="dropdown-item"><a href="{{ route('cart') }}" style="color:black;" >Your order to '{{ $notification->data['tailor'] }}' is <b>{{ $notification->data['status'] }}</b></p></a></li>
                                   @endforeach
                                </ul>
                            </li>
						<div class="btn-group dropright">
							<button type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<img src="{{ asset('external_files/home_page/images/icons/Profilelogo.jpg') }}" width="40px" height="40px">
							<div class="pull-right mt-2">{{ Auth::user()->name }}</div>
							</button>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="{{ route('profile') }}">Edit profile</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">Logout</a>
								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
							</div>
						</div>
					</div>

					
				</nav>
			</div>	
		</div>

		<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->		
			<div class="logo-mobile">
				<a href="{{route('home_page')}}"><img src="{{ asset('external_files/home_page/images/icons/logo-01.png') }}" alt="IMG-LOGO"></a>
			</div>
			<div class="btn-group dropright">
							<button type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<div class="pull-right mt-2">{{ Auth::user()->name }}</div>
							</button>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="{{ route('profile') }}">Edit profile</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">Logout</a>
								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
							</div>
						</div>
			<!-- Icon header -->
			<li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <i class="fa fa-bell" style="color:black;"></i><span class="badge badge-light">{{Auth::user()->unreadNotifications->count()}}</span>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <li ><a href="{{route('markRead')}}" style="color:green;">Mark all as Read</a></li>
                                @foreach(Auth::user()->unreadNotifications as $notification)

                         
                                   <li style="background-color:lightgrey;" class="dropdown-item"><a href="{{route('markReadOne')}}" style="color:black;" ><p>Your order to '{{ $notification->data['tailor'] }}' is <b>{{ $notification->data['status'] }}</b></p></a></li>
                                   @endforeach
                                   @foreach(Auth::user()->readNotifications as $notification)

                              
                                   <li class="dropdown-item"><a href="{{ route('cart') }}" style="color:black;" >Your order to '{{ $notification->data['tailor'] }}' is <b>{{ $notification->data['status'] }}</b></p></a></li>
                                   @endforeach
                                </ul>
                            </li>

			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>


		<!-- Menu Mobile -->
		<div class="menu-mobile">
			

			<ul class="main-menu-m">
			<li>
								<a href="{{ route('home_page') }}">Home</a>
								
							</li>

							

							<li class="label1" data-label1="hot">
								<a href="{{ route('shop') }}">Shop</a>
							</li>
							<li>
								<a href="{{ route('cart') }}">Cart</a>
							</li>

						

							<li>
								<a href="{{route('about1')}}">About</a>
							</li>

							<li>
								<a href="{{route('contact1')}}">Contact</a>
							</li>
			</ul>
		</div>
	</header>
	@if(session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
    @endif
    @if(session('fail_message'))
    <div class="alert alert-danger" role="alert">
        {{ session('fail_message') }}
    </div>
    @endif

    <div>
    @yield('content')
    </div>
<!-- Modal1 -->
    <!-- Footer -->
	<footer class="bg3 p-t-75 p-b-32">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-lg-2 p-b-50">
					<img src="{{ asset('external_files/home_page/images/icons/WhiteIconWithText.png') }}" alt="logo" style="width: 150px; height: 60px;">
				</div>

				<div class="col-sm-4 col-lg-4 p-b-50">
					<h1 class="stext-301 cl0 p-b-30">
						AT-HTEL
					</h1>
					<p class="stext-107 cl7 size-201">We are trying to give the best services we can.  We Promise our products will not destroy your hopes.</p>

					
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						GET IN TOUCH
					</h4>

					<p class="stext-107 cl7 size-201">
						Any questions? Let us know in store at <br>
						at.htel@outlook.com<br>
						or <br>call us on (+95) 9 691 451 456
					</p>

					<div class="p-t-27">
						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-instagram"></i>
						</a>

						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-pinterest-p"></i>
						</a>
					</div>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Feedbacks
					</h4>

					
<form action="{{ route('feedback') }}" method="post">
                    @csrf

						<div class="wrap-input1 w-full p-b-4">
							<label class=" cl0 " for="email">Email</label>
							<input class="input1 bg-none plh1 stext-107 cl7" type="email" name="email" placeholder="email@example.com">
							<div class="focus-input1 trans-04"></div>
						</div>
						<div class="wrap-input1 w-full p-b-4">
							<label class="cl0" for="details">Details</label>
							<textarea class="input1 bg-none plh1 stext-107 cl7" name="details" rows="3" placeholder="You can leave your feedbacks here"></textarea>
							<div class="focus-input1 trans-04"></div>
						</div>

						<div class="p-t-18">
							<button type="submit" class="flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btn2 p-lr-15 trans-04">
								Submit
							</button>
						</div>
					</form>
				</div>
			</div>

			<div class="p-t-40">
				<p class="stext-107 cl6 txt-center">
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Team AT_HTEL <i class="fa fa-heart-o" aria-hidden="true"></i> 
				</p>
			</div>
		</div>
	</footer>

	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>
    <!--===============================================================================================-->	

</body>
</html>