<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>At-Htel Registeration</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="{{ asset('external_files/sign_in/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css') }}">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="{{ asset('external_files/sign_in/css/style.css') }}">
	</head>

	<body>
	@if(session()->has('message')))
    <div class="alert alert-success" role="alert">
        {{ session()->get('message') }}
    </div>
    @endif
		<div class="wrapper" style="background-image: url('external_files/sign_in/images/bg-registration-form-1.jpg');">
			<div class="inner">
				<div class="image-holder">
					<img src="{{ asset('external_files/sign_in/images/registration-form-1.jpg') }}" alt="">
				</div>
				<form action="/user_login" method="post">
                <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
					<h3>Welcome to <br> At-Htel</h3>
					<br><br>
					
					<div class="form-wrapper">
						<input type="email" placeholder="Email Address" class="form-control" name="email">
						<i class="zmdi zmdi-email"></i>
					</div>
					
					<div class="form-wrapper">
						<input type="password" placeholder="Password" class="form-control" name="password">
						<i class="zmdi zmdi-lock"></i>
					</div>
				
					
					<button>Sign in
						<i class="zmdi zmdi-arrow-right"></i>
					</button><br>
					<br>
					<div>
						<h4>Don't have an account?<a href="/user_register"> Sign up Now!</a> </h4></div>
				</form>
			</div>
			<div>
				
			
		</div>
		
	</body>
</html>