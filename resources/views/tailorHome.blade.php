@extends('layouts.tailor_layout')
@section('title', 'Home')
@section('content')
	<section class="section-slide">
		<div class="wrap-slick1">
			<div class="slick1">
				<div class="item-slick1" style="background-image: url(external_files/home_page/images/slide-01.jpg);">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
								<span class="ltext-101 cl2 respon2">
									If you are out to describe the truth,
								</span>
							</div>
								
							<div class="layer-slick1 animated visible-false p-t-20" data-appear="fadeInUp" data-delay="800">
								<span class="ltext-101 cl2 respon2 ">
									Leave elegance to the tailor.
                            </span>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
                                <h3 class="ltext-102 cl2 p-t-19 p-b-43 respon1">
                                   
                                </h3>
							</div>
						</div>
					</div>
				</div>

				<div class="item-slick1" style="background-image: url(external_files/home_page/images/slide-02.jpg);">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-50 p-b-30 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="rollIn" data-delay="0">
								<span class="ltext-101 cl2 respon2">
                                    Fashion has two purposes.<br>
                                    
								</span>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="lightSpeedIn" data-delay="800">
								<h3 class="ltext-102 cl2 p-t-19 p-b-43 respon1">
									Confort and Love.
								</h3>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="slideInUp" data-delay="1600">
								<p class="ltext-101 cl2 p-t-19 p-b-43 respon1">
                                    Beauty comes when Fashion succeeds.
                                </p>
							</div>
						</div>
					</div>
				</div>

				<div class="item-slick1" style="background-image: url(external_files/home_page/images/slide-03.jpg);">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-20 p-b-30 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="rotateInDownLeft" data-delay="0">
								<p class="ltext-101 cl2 respon2">
									Every generation tailors history to its taste.
								</p>
							</div>
								
							
								
							<div class="layer-slick1 animated visible-false p-t-50" data-appear="rotateIn" data-delay="1600">
								<span class="ltext-101 cl2 p-t-50 p-b-43 respon1">
									#AdaLouiseHuxtable
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
    <section class="bg0 p-t-50 p-b-140">
		<div class="container">
			<div class="p-b-10">
				<h3 class="ltext-103 cl5">
				TRENDING DRESSES!!!
					
				</h3>
			</div><br><br>

			

			<div class="row isotope-grid">
				<!-- Item to be looped -->
                @foreach($dress as $i)
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0" id="dress_image">
							<img src="{{ asset('dresses/' . $i->dress_photo) }}" alt="IMG-PRODUCT">
						</div>
					</div>
				</div>
                @endforeach
				<!-- Item to be looped -->
			</div>
			
		</div>
	</section>
    @endsection