@extends('layouts.tailor_layout')
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

@endsection