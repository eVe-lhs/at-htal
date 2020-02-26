<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>At-Htel Registeration</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="{{ asset('external_files/sign_up/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css') }}">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="{{ asset('external_files/sign_up/css/style.css') }}">
		<style>
			textarea{
				resize: none;
			}
		</style>
	</head>

	<body>

		<div class="wrapper" style="background-image: url('external_files/sign_up/images/bg-registration-form-1.jpg');">
			<div class="inner">
				<div class="image-holder" style="margin-top: 18%;">
					<img  src="{{ asset('external_files/sign_up/images/registration-form-1.jpg') }}" alt="">
				</div>
				<form action="{{ route('register') }}" method="post">
				@csrf
					<h3>Welcome to <br> At-Htel</h3>
					<h4 >What type of user are you ?</h4>
                    <div class="form-radio">
                        <input type="radio" name="user_type" value="0" id="customer" checked="checked" />
                        <label for="customer">Customer</label>

                        <input type="radio" name="user_type" value="1" id="tailor" />
                        <label for="tailor">Tailor</label>
                    </div>
					<!-- <div class="form_wrapperr">
					@if(count($errors) > 0)
            			@foreach($errors->all() as $error)
            			<div>
                			<span style="color:red">{{$error}}</span><br>
            			</div>
            			@endforeach
        			@endif
					</div> -->
					<?php 
						if(count($errors) > 0) {
							$msg = "";
							foreach($errors->all() as $error) {
								$msg .= $error . "\\n";
							}
							echo '<script type="text/javascript">alert("' . $msg . '")</script>';
						}
					?>
					<div class="form-wrapper">
						<input type="text" placeholder="Username" class="form-control" name="name" value="{{ old('name') }}">
						<i class="zmdi zmdi-account"></i>
					</div>
					<div class="form-wrapper">
						<input type="email" placeholder="Email Address" class="form-control" name="email"  value="{{ old('email') }}">
						<i class="zmdi zmdi-email"></i>
					</div>
					<!-- <div class="form-wrapper">
						<select name="" id="" class="form-control">
							<option value="" disabled selected>Gender</option>
							<option value="male">Male</option>
							<option value="femal">Female</option>
							<option value="other">Other</option>
						</select>
						<i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
					</div> -->
					
					<div class="form-wrapper">
						<input type="password" placeholder="Password" class="form-control" name="password">
						<i class="zmdi zmdi-lock"></i>
						
					</div>
					<div class="form-wrapper">
						<input type="password" placeholder="Confirm Password" class="form-control" name="password_confirmation">
						<i class="zmdi zmdi-lock"></i>
						
					</div>
					<div class="form-wrapper">
						<input type="text" placeholder="Phone Number" class="form-control" name="phone_number"  value="{{ old('phone_number') }}">
						<i class="zmdi zmdi-phone"></i>
					</div>
					<div>
						<label for="address" style="color: grey">Address</label>
						<textarea name="address" id="address" cols="23" rows="5">{{ old('address') }}</textarea>
					</div>

					<button type="submit">Register
						<i class="zmdi zmdi-arrow-right"></i>
					</button><br>
					<br>
					<h4>Already Registered?  <a href="{{ route('login') }}"> Login now>> </a> </h4>
				</form>
			</div>
			<div>
				
			
		</div>
		
	</body>

</html>