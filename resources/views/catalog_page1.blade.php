<!DOCTYPE html>
<html lang="en">
<head>
	<title>Product</title>
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
<!-- <style>
input[type="number"]{

background-color : #d1d1d1; 

}
</style> -->
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

							

							<li class="label1 active-menu" data-label1="hot">
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

	@if(session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
    @endif

	<!-- Product -->
	<div class="bg0 m-t-23 p-b-140">
		<div class="container">
			<div class="flex-w flex-sb-m p-b-52">
				<div class="flex-w flex-l-m filter-tope-group m-tb-10">
					<a href="#" class="stext-106 cl6 bor3 trans-04 m-r-32 m-tb-5">All Products</a>

					<a href="{{ route('shop', ['id' => 1]) }}" class="stext-106 cl6 bor3 trans-04 m-r-32 m-tb-5">Cele</a>

					<a href="{{ route('shop', ['id' => 2]) }}" class="stext-106 cl6 bor3 trans-04 m-r-32 m-tb-5">Designer's Creation</a>

					<a href="{{ route('shop', ['id' => 3]) }}" class="stext-106 cl6 bor3 trans-04 m-r-32 m-tb-5">HtaTwarHtaLar</a>

					<a href="{{ route('shop', ['id' => 4]) }}" class="stext-106 cl6 bor3 trans-04 m-r-32 m-tb-5">Long Dress</a>

					<a href="{{ route('shop', ['id' => 5]) }}" class="stext-106 cl6 bor3 trans-04 m-r-32 m-tb-5">Normal</a>

					<a href="{{ route('shop', ['id' => 6]) }}" class="stext-106 cl6 bor3 trans-04 m-r-32 m-tb-5">Pwel-Tat</a>

					<a href="{{ route('shop', ['id' => 7]) }}" class="stext-106 cl6 bor3 trans-04 m-r-32 m-tb-5">Traditional</a>

					<a href="{{ route('shop', ['id' => 8]) }}" class="stext-106 cl6 bor3 trans-04 m-r-32 m-tb-5">White</a>
				</div>

				
				
				<!-- Search product -->
				

				<!-- Filter -->
				
			</div>

			<div  id="load-data">
				<div class="row isotope-grid">
					<!-- Item to be looped -->
					@foreach($dress as $i)
                    
					<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item cele">
						<!-- Block2 -->
						<div class="block2">
							<div class="block2-pic hov-img0" id="dress_image">
								<img src="{{ asset('dresses/' . $i->dress_photo) }}" alt="IMG-PRODUCT">

								<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1" data-photo="{{ asset('dresses/' . $i->dress_photo) }}" data-aa="{{ $i->dress_id }}">
									Quick View
								</a>
							</div>

							<div class="block2-txt flex-w flex-t p-t-14">
								<div class="block2-txt-child1 flex-col-l ">
									<a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
										{{ $i->dress_photo }}
									</a>

									<span class="stext-105 cl3">
										$16.64
									</span>
								</div>

								<div class="block2-txt-child2 flex-r p-t-3">
									<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
										<img class="icon-heart1 dis-block trans-04" src="{{ asset('external_files/home_page/images/icons/icon-heart-01.png') }}" alt="ICON">
										<img class="icon-heart2 dis-block trans-04 ab-t-l" src="{{ asset('external_files/home_page/images/icons/icon-heart-02.png') }}" alt="ICON">
									</a>
								</div>
							</div>
						</div>
					</div>
					@endforeach
					<!-- Item to be looped -->
				</div>
			</div>
            
            <div>
            {{ $dress->links() }}
            </div>
			<!-- Load more -->
			<!-- <div class="flex-c-m flex-w w-full p-t-45">
				<button class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04" id="loadMore">
                    Load more
                </button>
			</div> -->
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- <script>
		$(document).ready(function(){
			$(document).on('click','#btn-more',function(){
			var id = $(this).data('id');
			$("#btn-more").html("Loading....");
			$.ajax({
			url : '{{url("loadmoredata")}}',
			method : "POST",
			data : {id:id, _token:"{{csrf_token()}}"},
			dataType : "text",
			success : function (data)
			{
			if(data != '') 
			{
			$('#remove-row').remove();
			$('#load-data').append(data);
			}
			else
			{
			$('#btn-more').html("No More Data");
			}
			}
			});
			}); 
		});
	</script> -->

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
								
								
								<div class="mt-3">
									<div class="form-group">
										<div class="row">
											<div class="col">
												<label for="tailor">Select Tailor: </label>
												<select name="tailor" id="tailor" class="form-control">
													@foreach($tailor as $i)
													<option value="{{ $i->id }}">{{ $i->name }}</option>
													@endforeach
												</select>
											</div>
										</div>
									</div>
									<div class="form-group">

										<div class="row">
											<div class="col"> 
												<label for="bust">Bust(in cm)</label>
												<input type="number" name="bust" id="bust" class="form-control" min="0" max="100" value="<?php echo ($measurement == null) ? '0' : $measurement->bust ; ?>" required>
											</div>

											<div class="col"> 
												<label for="waist">Waist(in cm)</label>
												<input type="number" name="waist" id="waist" class="form-control" min="0" max="100" value="<?php echo ($measurement == null) ? '0' : $measurement->waist ; ?>" required>
											</div>
										</div>

										<div class="row mt-3">
											<div class="col"> 
												<label for="backlength">Backlength(in cm)</label>
												<input type="number" name="backlength" id="backlength" class="form-control" min="0" max="100" value="<?php echo ($measurement == null) ? '0' : $measurement->backlength ; ?>" required>
											</div>

											<div class="col"> 
												<label for="hip">Hip(in cm)</label>
												<input type="number" name="hip" id="hip" class="form-control" min="0" max="100" value="<?php echo ($measurement == null) ? '0' : $measurement->hip ; ?>" required>
											</div>
										</div>

										<div class="row mt-3">
											<div class="col"> 
												<label for="bicep_left">Bicep-left(in cm)</label>
												<input type="number" name="bicep_left" id="bicep_left" class="form-control" min="0" max="100" value="<?php echo ($measurement == null) ? '0' : $measurement->bicep_left ; ?>" required>
											</div>

											<div class="col"> 
												<label for="bicep_right">Bicep-right(in cm)</label>
												<input type="number" name="bicep_right" id="bicep_right" class="form-control" min="0" max="100" value="<?php echo ($measurement == null) ? '0' : $measurement->bicep_right ; ?>" required>
											</div>
										</div>

										<?php 
											if(count($errors) > 0) {
												$msg = "";
												foreach($errors->all() as $error) {
													$msg .= $error . "\\n";
												}
												echo '<script type="text/javascript">alert("' . $msg . '")</script>';
											}
										?>
										
									</div>
								</div>
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
    <!-- <script>
        $(function () {
            $numOfPhotos = $('.myClass').length;
            //alert($('.myClass').length);
            $('.myClass').slice(8).hide();
            $("#loadMore").on('click', function (e) {
                
                $(".myClass:hidden").slice(0, 4).show();
                /* if ($("div:hidden").length == 0) {
                    $("#load").fadeOut('slow');
                }
                $('html,body').animate({
                    scrollTop: $(this).offset().top
                }, 1500); */
            });
        });
    </script> -->
    
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