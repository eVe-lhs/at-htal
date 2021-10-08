@extends('layouts.tailor_layout')
@section('title', 'Catalog ')
@section('content')

<!-- Product -->
<div class="bg0 m-t-23 p-b-140">
		<div class="container">
			<div class="flex-w flex-sb-m p-b-52">
				<div class="flex-w flex-l-m filter-tope-group m-tb-10">
					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter=".all">
						All Designs
					</button>

					

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".own">
						My Design
					</button>

				

				
				</div>

				<div class="flex-w flex-c-m m-tb-10">
					<div class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-modal1">
						<i class="icon-plus-sign cl2 m-r-6 fs-15 trans-04 zmdi zmdi-plus"></i>
					
						Add
					</div>

					
				</div>
				<div class="wrap-modal1 js-modal1 p-t-100 p-b-20">
	<div class="overlay-modal1 js-hide-modal1"></div>

	<div class="container">
		<div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent">
			<button class="how-pos3 hov3 trans-04 js-hide-modal1">
				<img src="images/icons/icon-close.png" alt="CLOSE">
			</button>
			<h3 class="m-b-30 m-l-30">* Upload your design *</h3>
			<form action="{{route('dressAdd')}}" method="post" enctype="multipart/form-data">
            @csrf   
			 <div class="form-group m-l-100">

                                        <div class="row">
                                            <div class="col"> 
                                                <label for="fileToUpload">File to Upload</label>
                                                  <input type="file" name="dress_photo" id="fileToUpload" style="width: 500px; " required>
                                            </div>
											
											<div class="col"></div>

                                            
                                        </div>

                                     

                                        <div class="row mt-3">
                                            <div class="col"> 
                                              <label for="designType">Design Type</label>
												
												<select id="designType" name="dress_type_id" class="form-control" style="width: 500px; " required >
												<option value="1">Cele</option>
                                                <option value="2">Designer's Creation</option>
													<option value="3">HtaTwarHtaLar</option>
													<option value="4">LongDress</option>
													<option value="5">Normal</option>
													<option value="6">Pwel-Tat</option>
													<option value="7">Traditional</option>
													<option value="8">White</option>
												</select>
                                            </div>
                                        </div>
		  								  <div class="row mt-3">
                                            <div class="col"> 
                                                <label for="price">Price</label>
												<input type="number" name="price" id="price" class="form-control" style="width: 500px; " required>
                                            </div>
                                        </div>
				 <div class="row m-t-3">
				 <div class="col">
					<button type="submit" class="flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btnS p-lr-15 m-r-16 trans-04 m-t-10 ">
									Upload
								</button>
					 
					 </div></div>
				 
				</div>
				 </form>
			
				
				
			</div>
		</div>
	</div>
				<!-- Search product -->
				

				<!-- Filter -->
				
			</div>

			<div class="row isotope-grid">
				<!-- Item to be looped -->
                @foreach($dress as $i)
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item all">
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
            <div class="row isotope-grid">
				<!-- Item to be looped -->
                @foreach($mydress as $i)
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item own">
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


</div>
@endsection