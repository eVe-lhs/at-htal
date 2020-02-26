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
	<link rel="icon" type="image/png" href="{{ asset('external_files/home_page/images/icons/favicon.png') }}">
<!--===============================================================================================-->
</head>
<body class="animsition">
    <!-- Header -->
	<header>
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<!-- Topbar -->
		
			<div class="wrap-menu-desktop">
				<nav class="limiter-menu-desktop container">
					
					<!-- Logo desktop -->		
					<a href="#" class="logo">
						<img src="{{ asset('external_files/home_page/images/icons/logo-01.png') }}" alt="IMG-LOGO">
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
							<li class="active-menu">
								<a href="#">Home</a>
								
							</li>

							

							<li class="label1" data-label1="hot">
								<a href="{{ route('shop') }}">Shop</a>
							</li>
							<li>
								<a href="shoping-cart.html">Cart</a>
							</li>

						

							<li>
								<a href="about.html">About</a>
							</li>

							<li>
								<a href="contact.html">Contact</a>
							</li>
						</ul>
					</div>	

					<!-- Icon header -->
					<div class="wrap-icon-header flex-w flex-r-m">
						

						<a href="#" class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 " >
							<img src="{{ asset('external_files/home_page/images/icons/Profilelogo.jpg') }}" width="40px" height="40px">
						</a>
					</div>
				</nav>
			</div>	
		</div>

		<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->		
			<div class="logo-mobile">
				<a href="index.html"><img src="{{ asset('external_files/home_page/images/icons/logo-01.png') }}" alt="IMG-LOGO"></a>
			</div>

			<!-- Icon header -->
			

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
					<a href="index.html">Home</a>
					
					<span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
				</li>

				

				<li>
					<a href="product.html" class="label1 rs1" data-label1="hot">Shop</a>
				</li>
				<li>
					<a href="shoping-cart.html">Cart</a>
				</li>


				<li>
					<a href="about.html">About</a>
				</li>

				<li>
					<a href="contact.html">Contact</a>
				</li>
			</ul>
		</div>
	</header>

    <div>
    @yield('content')
    </div>

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
					<p>We are trying to give the best services we can.  We Promise our products will not destroy your hopes.</p>

					
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
						Newsletter
					</h4>

					<form>
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
<script src="{{ asset('external_files/home_page/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('external_files/home_page/vendor/animsition/js/animsition.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('external_files/home_page/vendor/bootstrap/js/popper.js') }}"></script>
	<script src="{{ asset('external_files/home_page/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('external_files/home_page/vendor/select2/select2.min.js') }}"></script>
	<script>
		$('#dress_image a').click(function(){
			image = $(this).data('value');
			//value = $('#dress_image img').attr('src');
			//path = "dresses/" + value;
			//alert($('.item-slick3').data('thumb'))
			$('#modal_image img').attr('src', image);
			$('.zoom').attr('href', image);
			//alert(value);
		});
	</script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="{{ asset('external_files/home_page/vendor/daterangepicker/moment.min.js') }}"></script>
	<script src="{{ asset('external_files/home_page/vendor/daterangepicker/daterangepicker.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('external_files/home_page/vendor/slick/slick.min.js') }}"></script>
	<script src="{{ asset('external_files/home_page/js/slick-custom.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('external_files/home_page/vendor/parallax100/parallax100.js') }}"></script>
	<script>
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script src="{{ asset('external_files/home_page/vendor/MagnificPopup/jquery.magnific-popup.min.js') }}"></script>
	<script>
		$('.gallery-lb').each(function() { // the containers for all your galleries
			$(this).magnificPopup({
		        delegate: 'a', // the selector for gallery item
		        type: 'image',
		        gallery: {
		        	enabled:true
		        },
		        mainClass: 'mfp-fade'
		    });
		});
	</script>
<!--===============================================================================================-->
	<script src="{{ asset('external_files/home_page/vendor/isotope/isotope.pkgd.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('external_files/home_page/vendor/sweetalert/sweetalert.min.js') }}"></script>
	<script>
		$('.js-addwish-b2').on('click', function(e){
			e.preventDefault();
		});

		$('.js-addwish-b2').each(function(){
			var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-b2');
				$(this).off('click');
			});
		});

		$('.js-addwish-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-detail');
				$(this).off('click');
			});
		});

		/*---------------------------------------------*/

		$('.js-addcart-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});
	
	</script>
<!--===============================================================================================-->
	<script src="{{ asset('external_files/home_page/vendor/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
	<script>
		$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});
	</script>
<!--===============================================================================================-->
	<script src="{{ asset('external_files/home_page/js/main.js') }}"></script>
    
</body>
</html>