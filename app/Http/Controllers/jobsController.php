<?php
/* This is the whole new file*/
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Authenticatable;
use DB;
use Validator;
use Redirect;
use View;
class jobsController extends Controller
{
public function loadmoredata(Request $request)
{
$output = '<div class="row isotope-grid">';
$id = $request->id;
$posts = DB::table('dress')->where('dress_id','<',$id)->orderBy('dress_id', 'desc')->limit(4)->get();
if(!$posts->isEmpty())
{
foreach($posts as $i)
{
	$dress_type = "";
	switch($i->dress_type_id) {
		case 1: $dress_type = "cele"; break;
		case 2: $dress_type = "designer"; break;
		case 3: $dress_type = "htaTwarHtaLar"; break;
		case 4: $dress_type = "longDress"; break;
		case 5: $dress_type = "normal"; break;
		case 6: $dress_type = "pwelTat"; break;
		case 7: $dress_type = "traditional"; break;
		case 8: $dress_type = "white"; break;
	}
$output .= '
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item ' . $dress_type . '">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0" id="dress_image">
							<img src="'.asset('dresses/' . $i->dress_photo).'" alt="IMG-PRODUCT">

							<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1" data-photo="'.asset('dresses/' . $i->dress_photo).'" data-aa="'. $i->dress_id .'">
								Quick View
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									 '.$i->dress_photo.'
								</a>

								<span class="stext-105 cl3">
									$16.64
								</span>
							</div>

							<div class="block2-txt-child2 flex-r p-t-3">
								<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
									<img class="icon-heart1 dis-block trans-04" src="'. asset('external_files/home_page/images/icons/icon-heart-01.png') .'" alt="ICON">
									<img class="icon-heart2 dis-block trans-04 ab-t-l" src="'. asset('external_files/home_page/images/icons/icon-heart-02.png') .'" alt="ICON">
								</a>
							</div>
						</div>
					</div>
                </div>';
}
$output .= '
<div id="remove-row" class="flex-c-m flex-w w-full p-t-45">
				<a href="#" id="btn-more" data-id="'.$i->dress_id.'" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
					Load More
				</a>
			</div>';

			$output .=' <script src="'.asset('external_files/home_page/vendor/jquery/jquery-3.2.1.min.js').'"></script>
			<!--===============================================================================================-->
				<script src="'. asset('external_files/home_page/vendor/animsition/js/animsition.min.js').'"></script>
			<!--===============================================================================================-->
				<script src="'. asset('external_files/home_page/vendor/bootstrap/js/popper.js').'"></script>
				<script src="'.asset('external_files/home_page/vendor/bootstrap/js/bootstrap.min.js').'"></script>
			<!--===============================================================================================-->
				<script src="'.asset('external_files/home_page/vendor/select2/select2.min.js').'"></script>
				<script>
					$("#dress_image a").click(function(){
						image = $(this).data("photo");
						$("#modal_image img").attr("src", image);
						$(".zoom").attr("href", image); 
						
						dress_id = $(this).data("aa");
						$("#dress").val(dress_id);
					});
				</script>
				<script>
					$(".js-select2").each(function(){
						$(this).select2({
							minimumResultsForSearch: 20,
							dropdownParent: $(this).next(".dropDownSelect2")
						});
					})
				</script>
			<!--===============================================================================================-->
			<script src="'.asset('external_files/home_page/vendor/daterangepicker/moment.min.js').'"></script>
				<script src="'.asset('external_files/home_page/vendor/daterangepicker/daterangepicker.js').'"></script>
			<!--===============================================================================================-->
				<script src="'.asset('external_files/home_page/vendor/slick/slick.min.js').'"></script>
				<script src="'.asset('external_files/home_page/js/slick-custom.js').'"></script>
			<!--===============================================================================================-->
				<script src="'.asset('external_files/home_page/vendor/parallax100/parallax100.js').'"></script>
				<script>
					$(".parallax100").parallax100();
				</script>
			<!--===============================================================================================-->
			<script src="'.asset('external_files/home_page/vendor/MagnificPopup/jquery.magnific-popup.min.js').'"></script>
				<script>
					$(".gallery-lb").each(function() { // the containers for all your galleries
						$(this).magnificPopup({
							delegate: "a", // the selector for gallery item
							type: "image",
							gallery: {
								enabled:true
							},
							mainClass: "mfp-fade"
						});
					});
				</script>
			<!--===============================================================================================-->
				<script src="'.asset('external_files/home_page/vendor/isotope/isotope.pkgd.min.js').'"></script>
			<!--===============================================================================================-->
				<script src="'.asset('external_files/home_page/vendor/sweetalert/sweetalert.min.js').'"></script>
				<script>
					$(".js-addwish-b2, .js-addwish-detail").on("click", function(e){
						e.preventDefault();
					});
			
					$(".js-addwish-b2").each(function(){
						var nameProduct = $(this).parent().parent().find(".js-name-b2").html();
						$(this).on("click", function(){
							swal(nameProduct, "is added to wishlist !", "success");
			
							$(this).addClass("js-addedwish-b2");
							$(this).off("click");
						});
					});
			
					$(".js-addwish-detail").each(function(){
						var nameProduct = $(this).parent().parent().parent().find(".js-name-detail").html();
			
						$(this).on("click", function(){
							swal(nameProduct, "is added to wishlist !", "success");
			
							$(this).addClass("js-addedwish-detail");
							$(this).off("click");
						});
					});
			
					/*---------------------------------------------*/
			
					$(".js-addcart-detail").each(function(){
						var nameProduct = $(this).parent().parent().parent().parent().find(".js-name-detail").html();
						$(this).on("click", function(){
							swal(nameProduct, "is added to cart !", "success");
						});
					});
				
				</script>
			<!--===============================================================================================-->
				<script src="'.asset('external_files/home_page/vendor/perfect-scrollbar/perfect-scrollbar.min.js').'"></script>
				<script>
					$(".js-pscroll").each(function(){
						$(this).css("position","relative");
						$(this).css("overflow","hidden");
						var ps = new PerfectScrollbar(this, {
							wheelSpeed: 1,
							scrollingThreshold: 1000,
							wheelPropagation: false,
						});
			
						$(window).on("resize", function(){
							ps.update();
						})
					});
				</script>
			<!--===============================================================================================-->
				<script src="'.asset('external_files/home_page/js/main.js').'"></script>
			';

echo $output;
}
}
}