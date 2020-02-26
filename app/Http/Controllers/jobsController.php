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
$output .= '
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0" id="dress_image">
							<img src="'.asset('dresses/' . $i->dress_photo).'" alt="IMG-PRODUCT">

							<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1" data-value="'.asset('dresses/' . $i->dress_photo).'">
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
echo $output;
}
}
}