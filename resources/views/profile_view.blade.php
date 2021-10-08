@extends('layouts.user_layout')
@section('title', 'Profile')

@section('content')

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
@endsection