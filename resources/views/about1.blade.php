@extends('layouts.tailor_layout')
@section('title', 'About')
@section('content')

    <section class="bg0 p-t-75 p-b-120">
		<div class="container">
			<div class="row p-b-148">
				<div class="col-md-7 col-lg-8">
					<div class="p-t-7 p-r-85 p-r-15-lg p-r-0-md">
						<h3 class="mtext-111 cl2 p-b-16">
							Our Story
						</h3>

						<p class="stext-113 cl6 p-b-26">
                        As tailoring is one of the famous Burmese women traditional ways to earn money, we are very passionate to upgrade Burmese tailoring community by using technology. 
We realized that for ordinary women especially house wives, they don’t know how to find their market though they have talents in tailoring. What if there is a platform for them to broaden market size? Therefore, we start our webite. 
We want to fulfil the needs of society by applying our technology skills in innovative ways. 
						</p>
					</div>
				</div>

				<div class="col-11 col-md-5 col-lg-4 m-lr-auto">
					<div class="how-bor1 ">
						<div class="hov-img0">
							<img src="images/about-01.jpg" alt="IMG">
						</div>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="order-md-2 col-md-7 col-lg-8 p-b-30">
					<div class="p-t-7 p-l-85 p-l-15-lg p-l-0-md">
						<h3 class="mtext-111 cl2 p-b-16">
							Our Mission
						</h3>

						<p class="stext-113 cl6 p-b-26">
                        To  build a connection between tailor and customer<br>
To save time in finding dress designs for users<br>
To save tailoring data and use it again and again
 
						</p>

						<div class="bor16 p-l-29 p-b-9 m-t-22">
							<p class="stext-114 cl6 p-r-40 p-b-11">
								Creativity is just connecting things. When you ask creative people how they did something, they feel a little guilty because they didn't really do it, they just saw something. It seemed obvious to them after a while.
							</p>

							<span class="stext-111 cl8">
								- Steve Job’s 
							</span>
						</div>
					</div>
				</div>

				<div class="order-md-1 col-11 col-md-5 col-lg-4 m-lr-auto p-b-30">
					<div class="how-bor2">
						<div class="hov-img0">
							<img src="images/about-02.jpg" alt="IMG">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>	
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
			
			dress_id = $(this).data('id');
			$('#dress').val(dress_id);
			price = $(this).data('price');
			$('#price-modal').text('MMK ' + price);
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