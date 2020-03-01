@extends('layouts.user_layout')
@section('title', 'Home')

@section('content')
<!-- Title page -->
<section class="bg-img1 txt-center p-lr-15 p-tb-50" style="background-image: url(external_files/home_page/images/bg-03.jpg);">
		<h2 class="ltext-105 cl0 txt-center">
			Measurements
		</h2>
	</section>	


	<!-- Content page -->
	<section class="bg0 p-t-75 p-b-120">
		<div class="container">
			
			<h3 class="mb-4 cl2 p-t-50">
				Let's Get Started
			</h3>

			<p class="stext-150 cl2 p-b-65">
				Take a tape measure first and a piece of string (or thread) for marking. <br>
				After you collected up your supplies, we can begin. <br>
				Follow the description steps and you can get your self-body measurements. (image provided for reasearch)
			</p>
			
			<div class="row">
				<div class="order-md-2 col-md-7 col-lg-8 p-b-30">
					<div class="p-t-7 p-l-85 p-l-15-lg p-l-0-md">
						<h3 class="mtext-111 cl2 p-b-16">
							1. Bust
						</h3>

						<p class="stext-113 cl6 p-r-60 p-b-26">
							Let's begin to take a measurement around the bust. This needs to be around the fullest part of the bust over the apex of the breast or nipple. You should drop you arms because you want ot make sure that when you're taking this measurements that the tape measure is snug around the body. You're not pulling it tight or leaving a finger underneath or anything like that. You just need a nice flat measurement against the body. Make sure the tape measure is straight around the front and back of the body and then you can record this measurement.
						</p>
						
					</div>
				</div>

				<div class="order-md-1 col-11 col-md-5 col-lg-3 m-lr-auto p-b-30">
					<div class="how-bor2">
						<div class="hov-img0">
							<img src="{{ asset('external_files/home_page/images/measure-01.jpg')}}" alt="IMG">
						</div>
					</div>
				</div>
			</div>
		
			
			<div class="row">
				<div class="order-md-1 col-md-7 col-lg-8 p-b-30">
					<div class="p-t-7 p-l-110 p-l-15-lg p-l-0-md">
						<h3 class="mtext-111 cl2 p-b-16">
							2. Waist
						</h3>

						<p class="stext-113 cl6 p-b-26">
							Firstly you need to find your waist on your body. Generally the waist is just above the belly button and it should be the smallest part of your torso between your bust and your hip. If you just put your hand on your waist in an happy mood, then you can take the string and tie it around the body just touching your hand. This helps make sure the correct position of your waist in a good placement. It doesn't make you look very long on the top or the bottom of the body. Now take your tape measure and position it around the body on the string again. You need to make sure it's a nice flat and straight around the body again. You can record this measurement now. You would leave the string on your body for a while because it will be useful in measuring you length later.
						</p>
					</div>
				</div>

				<div class="order-md-2 col-11 col-md-5 col-lg-3 m-lr-auto p-r-55 p-b-30">
					<div class="how-bor2">
						<div class="hov-img0">
							<img src="{{ asset('external_files/home_page/images/measure-02.jpg')}}" alt="IMG">
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="order-md-2 col-md-7 col-lg-8 p-b-30">
					<div class="p-t-7 p-l-85 p-l-15-lg p-l-0-md">
						<h3 class="mtext-111 cl2 p-b-16">
							3. Hip
						</h3>

						<p class="stext-113 cl6 p-r-60 p-b-26">
							The hip is not the hip bone. It's the fullest part of the body below the waist. Generally this is going to be the fullest part of the bottom. Generally in the industry, the hip may be 20 centimetres length from the waist. Now you will measurement the circumference of your hip. Take your tape measure and position it around the fullest part of your bottom or thigh area. Make sure your tape measure is straight around the body and take your flat snug measurement and your can record this down.
						</p>
						
					</div>
				</div>

				<div class="order-md-1 col-11 col-md-5 col-lg-3 m-lr-auto p-b-30">
					<div class="how-bor2">
						<div class="hov-img0">
							<img src="{{ asset('external_files/home_page/images/measure-03.jpg')}}" alt="IMG">
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="order-md-1 col-md-7 col-lg-8 p-b-30">
					<div class="p-t-7 p-l-110 p-l-15-lg p-l-0-md">
						<h3 class="mtext-111 cl2 p-b-16">
							4. Back Length
						</h3>

						<p class="stext-113 cl6 p-b-26">
							The back length is the measurement that you will often find on dressmaking patterns. You are going to mesure from the nape of the neck. That's where the neck meets the back and there's generally a sort of protruding vertebrae. So with your tape measure you should take it nice and flat down your back from the protruding vertebrae to the waist string. Again you can record this measurement.
						</p>
					</div>
				</div>

				<div class="order-md-2 col-11 col-md-5 col-lg-3 m-lr-auto p-r-55 p-b-30">
					<div class="how-bor2">
						<div class="hov-img0">
							<img src="{{ asset('external_files/home_page/images/measure-04.jpg')}}" alt="IMG">
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="order-md-2 col-md-7 col-lg-8 p-b-30">
					<div class="p-t-7 p-l-85 p-l-15-lg p-l-0-md">
						<h3 class="mtext-111 cl2 p-b-16">
							5. Bicep
						</h3>

						<p class="stext-113 cl6 p-r-60 p-b-26">
							Bicep is the measurement you will need if you are woriking with sleeves. You don't need to flex your arm because it's great anyway. You just need to make sure to measure around the fullest part of the bicep in a nice flat snug position. You may do this on both of your arms because you may find that one arm is slightly larger than the other. Then you can record those down.
						</p>
						
					</div>
				</div>

				<div class="order-md-1 col-11 col-md-5 col-lg-3 m-lr-auto p-b-30">
					<div class="how-bor2">
						<div class="hov-img0">
							<img src="{{ asset('external_files/home_page/images/measure-05.jpg')}}" alt="IMG">
						</div>
					</div>
				</div>
			</div>



			<div class="" style="margin-top: -50px; margin-left: 15%;"> 
				<h2 class="mb-4 cl2 p-t-100">Fill Your Measurements</h2>
				<p class="stext-113 cl2 p-r-60 p-b-26">All the measurements are in centimetres (cm).</p>
				<form method="post" action="{{ route('measurement_update') }}">
                @csrf
					<table class="table table-bordered" style="width: 450px;">

						<tr>
							<td>Bust</td>
							<Td><input class="form-control" value="0"  type="number" min="0" name="bust" style="width: 100px;"/></td>
								
						</tr>
						<tr>
							<td>Waist</td>
							<Td><input class="form-control" value="0"  type="number" min="0" name="waist" style="width: 100px;"/></td>
						</tr>
						<tr>
							<td>Hip</td>
							<Td><input class="form-control" value="0"  type="number" min="0" name="hip" style="width: 100px;"/></td>
						</tr>
						<tr>
							<td>Back Length</td>
							<Td><input class="form-control" value="0"  type="number" min="0" name="backlength" style="width: 100px;"/></td>
						</tr>
						<tr>
							<td>Bicep (Left & Right) </td>
							<Td style="text-align: center;">
								<input class="form-control" value="0"  type="number" min="0" name="bicep_left" style="width: 100px; float: left;">L / R
								<input class="form-control" value="0"  type="number" min="0" name="bicep_right" style="width: 100px; float: right;"/></td>
											
						<tr>
							
			<Td colspan="2" align="center">
			
			<input type="submit" class="btn btn-success" value="Submit" name="submit" />
            <input type="reset" class="btn btn-success" value="Reset"/>
						
							</td>
						</tr>
					</table>
				</form>
                @if(session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
                @endif
							
						
					  </div>
		</div>
	</section>
@endsection