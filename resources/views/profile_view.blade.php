<!DOCTYPE html>
<html lang="en">
<head>
	<title>Product</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

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

    <link rel="stylesheet" type="text/css" href="{{ asset('external_files/home_page/css/bootstrap.profile.css') }}">
    
<!--===============================================================================================-->

</head>
<body class="animsition">
	
	<!-- Header -->
	<header class="header-v4">
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
							<li>
								<a href="{{ route('home_page') }}">Home</a>
								
							</li>

							

							<li>
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
						
						<div class="btn-group dropright">
							<button type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<img src="{{ asset('external_files/home_page/images/icons/Profilelogo.jpg') }}" width="40px" height="40px">
							<div class="pull-right mt-2">{{ Auth::user()->name }}</div>
							</button>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="{{ route('profile') }}">Edit profile</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
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

	<div class="wrapper d-flex align-items-stretch">
		<nav id="sidebar">
			<div class="p-4 pt-5">
			  <a href="#" class="img logo rounded-circle" style="background-image: url(images/logo.jpg);"></a>
		<ul class="list-unstyled components mb-5 nav flex-column">
		  <li>
			<a href="#Dashboard" data-toggle="tab">Dashboard</a>
		  </li>
		  <li>
			  <a href="#updatepassword" data-toggle="tab">Update Password</a>
		  </li>
			<li>
			  <a href="#updateprofile" data-toggle="tab">Update Profile</a>
		  </li>
			 <li>
			  <a href="#measures" data-toggle="tab">Measures</a>
		  </li>
			 <li>
		  <a href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">Log Out</a>
			<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
		  </li>
		</ul>
	  </div>
	</nav>

	

	<!-- Page Content  -->
  <div id="content" class="p-4 p-md-5 tab-content">
	  <!-----customer tab---->
	  <div id="Dashboard" class="active tab-pane"  >
		
		<div class="row" style="">
			<div class="col-xs-12 col-sm-6 col-md-6">
				<div class="well well-sm">
					<div class="row">
						<div class="col-sm-6 col-md-4">
							<img src="{{ asset('external_files/home_page/images/icon-person-512.png') }}" alt="" class="img-rounded img-responsive" />
						</div>
						<div class="col-sm-6 col-md-8">
							<h3>{{ $user->name }}</h3>
							
							   <h4> <i class="glyphicon glyphicon-envelope"></i>{{ $user->email }}</h4>
								
								<h4>&#128241  {{ $user->phone_number }}</h4>
							<h4> <i class="glyphicon glyphicon-home"></i>{{ $user->address }} </h4>
						</div>
					</div>
				</div>
				
				
			</div>
		</div>  
				 
			  
	  </div>
  
	  
	  
	  <!--- Tailor Tab --->
	   <div id="updatepassword" class="tab-pane fade" style="margin-left: 20%; margin-top: -10%;">
	<h2 class="mb-4">Update Password</h2>
	<form method="post" action="{{ route('password_update') }}">
	@csrf
		<div class="row">
			<div class="col-sm-9">Enter Your current password</div>
			<div class="col-sm-9">
			<input type="password" name="old_password" class="form-control"/></div>
		</div>
		
		<div class="row">
			<div class="col-sm-9">Enter Your New Password</div>
			<div class="col-sm-9">
			<input type="password" name="password" class="form-control"/></div>
		</div>
		
		<div class="row">
			<div class="col-sm-9">Enter Your Confirm Password</div>
			<div class="col-sm-9">
			<input type="password" name="password_confirmation" class="form-control"/></div>
		</div>
		<div class="row" style="margin-top:10px;">
			<div class="col-sm-2"></div>
			<div class="col-sm-8">
			
			
			<input type="submit" value="Update Password" name="save" class="btn btn-success"/>
			<input type="reset" class="btn btn-success"/>
			</div>
		</div>
	</form>	
			   
		  </div>
	  
	   <!--- dresses tab ---->
	
		<!--- sliders tab ---->
		<div id="updateprofile" class="tab-pane fade" style="margin-top: -50px; margin-left: 15%;"> 
	<h2 class="mb-4">Update Profile</h2>
	<form method="post" action="{{ route('profile_update') }}">
	@csrf
		<table class="table table-bordered" style="width: 500px;">
			<Tr>
				<Td colspan="2"><?php echo @$err;?></Td>
			</Tr>
			
			<tr>
				<td>Username</td>
				<Td><input class="form-control" value="{{ $user->name }}"  type="text" name="name"/></td>
					
			</tr>
			<tr>
				<td>Email </td>
				<Td><input class="form-control" type="email" readonly="true" value="{{ $user->email }}" name="email"/></td>
			</tr>
			
			
			<tr>
				<td>Phone Number </td>
				<Td><input class="form-control" type="text" value="{{ $user->phone_number }}" name="phone_number"/></td>
			</tr>
			<tr>
				<td>
					Address
				</td>
				<td><textarea name="address" id="" cols="30" rows="5" class="form-control" style="resize: none">{{ $user->address }}</textarea></td>
			</tr>
			
			<tr>
				
				
<Td colspan="2" align="center">
<input type="submit" class="btn btn-success" value="Update My Profile" name="update" />
<input type="reset" class="btn btn-success" value="Reset"/>
			
				</td>
			</tr>
		</table>
	</form>
				
			
			
			
		  </div>
	  
	  
		<!--- models tab ---->
		<div id="measures" class="tab-pane fade" style="margin-top: -60px; ">
	<h2 >Update your body measure</h2>
	<form method="post" action="{{ route('measurement_update') }}">
	@csrf
		<table class="table table-bordered" style="width: 500px;">
			<Tr>
				<Td colspan="2"><?php echo @$err;?></Td>
			</Tr>
			
			
			<tr>
				<td>Bust</td>
				<Td><input class="form-control" value="<?php echo ($measurement == null) ? '0' : $measurement->bust ; ?>"  type="number" name="bust"/></td>
			</tr>
			<tr>
				<td>Waist </td>
				<Td><input class="form-control" type="number"  value="<?php echo ($measurement == null) ? '0' : $measurement->waist ; ?>"  name="waist"/></td>
			</tr>
			
			
			<tr>
				<td>Hip</td>
				<Td><input class="form-control" type="number" value="<?php echo ($measurement == null) ? '0' : $measurement->hip ; ?>"  name="hip"/></td>
			</tr>
			
		<tr>
			<td>
				Back Length
			</td>
			<td>
				<input class="form-control" type="number" value="<?php echo ($measurement == null) ? '0' : $measurement->backlength ; ?>"  name="backlength"/>	
			</td>
		</tr>
			<tr>
				<td>
					Left Biceps
				</td>
				<td><input class="form-control" type="number" value="<?php echo ($measurement == null) ? '0' : $measurement->bicep_left ; ?>" name="bicep_left"></td>
			</tr>
			<tr>
				<td>
					Right Biceps
				</td>
				<td><input class="form-control" type="number" value="<?php echo ($measurement == null) ? '0' : $measurement->bicep_right ; ?>" name="bicep_right"></td>
			</tr>
			<tr>
				
				
			<td colspan="2" align="center">
			<input type="submit" class="btn btn-success" value="Update My Measures" name="update" />
			<input type="reset" class="btn btn-success" value="Reset"/>
			</td>
			</tr>
		</table>
	</form>
				
			
			
			
			
			
		  </div>
	  
	  
	  <!---feedback tab --->
	   <div id="feedbacks" class="tab-pane fade">
	<div style="border-bottom:1px grey solid;">
  <h5>Username</h5>
	<small>The email address</small>
  <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>
	  </div>
  </div>
	</div>

	@if(count($errors) > 0)
            @foreach($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
            {{ $error }}
            </div>
            @endforeach
    @endif

	@if(session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
    @endif	

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

	<!-- Modal1 -->
	<div class="wrap-modal1 js-modal1 p-t-60 p-b-20">
		<div class="overlay-modal1 js-hide-modal1"></div>

		<div class="container">
			<div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent">
				<button class="how-pos3 hov3 trans-04 js-hide-modal1">
					<img src="{{ asset('external_files/home_page/images/icons/icon-close.png') }}" alt="CLOSE">
				</button>

				<div class="row">
					<div class="col-md-6 col-lg-7 p-b-30">
						<div class="p-l-25 p-r-30 p-lr-0-lg">
							<div class="wrap-slick3 flex-sb flex-w">
								<div class="wrap-slick3-dots"></div>
								<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

								<div class="slick3 gallery-lb">
									<div class="item-slick3" data-thumb="images/product-detail-01.jpg">
										<div class="wrap-pic-w pos-relative"  id="modal_image">
											<img src="images/product-detail-01.jpg" alt="IMG-PRODUCT">

											<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04 zoom" href="images/product-detail-01.jpg">
												<i class="fa fa-expand"></i>
											</a>
										</div>
									</div>

									
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-md-6 col-lg-5 p-b-30">
					<div class="p-r-50 p-t-5 p-lr-0-lg">
						<h4 class="mtext-105 cl2 js-name-detail p-b-14">
							Lightweight Jacket
						</h4>

						<span class="mtext-106 cl2">
							MMK58.79
						</span>

						
						
						<!--  -->
						<div class="mt-3">
							<form action="{{ route('order') }}" method="post">
							@csrf
							<input type="hidden" name="customer" id="" value="{{ Auth::user()->id }}">
							<input type="hidden" name="dress" id="dress" value="">
								
								
								
								<br>
								<div>
									<h6>Duration :</h6>

								</div>
								<br>
								<div>

									<button type="submit" class="flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btnS p-lr-15 m-r-16 trans-04">
										Order
									</button>
								</div>
							</form>
						</div>

						
						
					</div>
				</div>
			</div>
		</div>
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
			image = $(this).data('photo');
			$('#modal_image img').attr('src', image);
			$('.zoom').attr('href', image); 
			
			dress_id = $(this).data('aa');
			$('#dress').val(dress_id);
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
		$('.js-addwish-b2, .js-addwish-detail').on('click', function(e){
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