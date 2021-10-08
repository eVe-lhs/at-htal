<!doctype html>
<html lang="en">
  <head>
  	<title>Admin Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="{{ asset('external_files/admin_page/css/style.css') }}">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <style>
         table,td,th{
             color: black;
             font-size:15px; 
    text-align: center;
    padding: 8px;
          }
          th{
              background-color:#F3C908;
          }
          tr:nth-child(even){
    background-color: #9E9B9B;
}
tr:nth-child(odd) {
    background-color: white;
}
      </style>
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="p-4 pt-5">
		  		<a href="#" class="img logo rounded-circle" style="background-image: url(external_files/admin_page/images/logo.jpg);"></a>
	        <ul class="list-unstyled components mb-5 nav flex-column">
	          <li>
	            <a href="#customers" data-toggle="tab">Customers</a>
	          </li>
	          <li>
	              <a href="#tailors" data-toggle="tab">Tailors</a>
	          </li>
                <li>
	              <a href="#orders" data-toggle="tab">Orders</a>
	          </li>
                 <li>
	              <a href="#dresses" data-toggle="tab">Dresses</a>
	          </li>
	          <li>
              <a href="#feedbacks" data-toggle="tab">Feedbacks</a>
	          </li>
                 <li>
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
	          </li>
	        </ul>
	      </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 tab-content">
      @if(session('message'))
      <div class="alert alert-success" role="alert">
          {{ session('message') }}
      </div>
      @endif
          <!-----customer tab---->
          <div id="customers" class="active tab-pane">
        <h2 class="mb-4">Customer Table will be here</h2>
        <p>Total numbers of customers: <?php echo count($customer); ?></p>
        <table class="p-l-3">
          <tr>
            <th>Name</th>
            <th>ID#</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Address</th>
          </tr>
            
          
            @foreach($customer as $i)
            <tr>
              <td>{{ $i->name }}</td>
              <td>{{ $i->id }}</td>
              <td>{{ $i->email }}</td>
              <td>{{ $i->phone_number }}</td>
              <td>{{ $i->address }}</td>
            </tr> 
            @endforeach
           
        </table>
              </div>
          
          
          <!--- Tailor Tab --->
           <div id="tailors" class="tab-pane fade">
        <h2 class="mb-4">Tailor Table will be here</h2>
        <p>Total numbers of tailors: <?php echo count($tailor); ?></p>
        <table class="p-l-3">
          <tr>
            <th>Name</th>
            <th>ID#</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Address</th>
          </tr>
            
            @foreach($tailor as $i)
            <tr>
              <td>{{ $i->name }}</td>
              <td>{{ $i->id }}</td>
              <td>{{ $i->email }}</td>
              <td>{{ $i->phone_number }}</td>
              <td>{{ $i->address }}</td>
            </tr>
            @endforeach
            
          </table>
              </div>
          
          
         
<!--- orders tab ---->
<div id="orders" class="tab-pane fade">
        <h2 class="mb-4">Orders</h2>
        <table class="p-l-3">
          <tr>
            <th>Order#</th>
            <th>Customer Name</th>
            <th>Tailor Name</th>
            <th>Dress</th>
            <th>Order Status</th>
            <th>Ordered Date</th>
          </tr>
            
          @foreach($orders as $i)
          <tr>
            <td>{{ $i->order_id }}</td>
            <td>{{ $i->name }}</td>
            <td>{{ App\User::select('name')->where('id', $i->tailor_id)->first() }}</td>
            <td><img src="{{ asset('dresses/' . $i->dress_photo) }}" width="100px" height="100px" alt="Image"></td>
            <td>{{ $i->order_status }}</td>
            <td>{{ $i->created_at }}</td>
          </tr>
          @endforeach
          </table>
              </div>

          
         
<!--- dresses tab ---->
<div id="dresses" class="tab-pane fade">
              <div id="show_dresses">
                <button type="button" class="btn btn-primary" id="dress_add_btn">Add New Dress</button>
                <p>Total numbers of dresses:<?php echo count($dress); ?></p>
                <table class="p-l-3">
                  <tr>
                    <th>Dress</th>
                    <th>Name</th>
                    <th>Price</th>
                    </tr>
                  @foreach($dress as $i)
                  <tr>
                    <td><img src="{{ asset('dresses/' . $i->dress_photo) }}" width="100px" height="100px" alt="Image"></td>
                    <td>{{ $i->dress_photo }}</td>
                    <td>{{ $i->price }}</td>
                  </tr>
                  @endforeach
                  </table>
              </div>
              <div id="new_dress">
                <form action="{{ route('admin_dress_add') }}" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="row">
                      <div class="col">
                          <label for="">Dress Photo</label>
                          <input type="file" name="dress_photo" id="">
                      </div>
                      <div class="col">
                          <label for="dress_list">Dress Type</label>
                          <select name="dress_type_id" id="dress_list" class="form-control">
                          @foreach($dress_type as $i)
                              <option value="{{ $i->dress_type_id }}">{{ $i->dress_type_name }}</option>
                          @endforeach
                          </select>
                      </div>
                      <div class="col">
                        <label for="price">Price</label>
                        <input type="text" name="price" id="price" class="form-control">
                      </div>
                      <!-- <div class="col">
                          <input type="text" name="" id="description">
                      </div> -->
                      
                  </div>
                  <div class="row">
                    <div class="col">
                    <input type="submit" name="" id="" value="Add">
                    </div>
                  </div>
                </form>
                <br><br>
                <button type="button" id="new_dress_back_btn">Back</button>
              </div>
            </div>
              
            <script>
                $('#new_dress').hide();
                if($('#new_dress').is(':hidden')) {
                  $('#new_dress_back_btn').hide();
                }
                $('#dress_add_btn').click(function() {
                  $('#show_dresses').hide();
                  $('#new_dress').show();
                  $('#new_dress_back_btn').show();
                });
                $('#new_dress_back_btn').click(function() {
                  $('#show_dresses').show();
                  $('#new_dress').hide();
                  $('#new_dress_back_btn').hide();
                });
            </script>

          
            <!--- sliders tab ---->
            <div id="sliders" class="tab-pane fade">
        <h2 class="mb-4">Slider edition:</h2>
 <!-------Write some slider tab edition codes --->
                    
                
                
                
              </div>
          
          
            <!--- models tab ---->
            <div id="models" class="tab-pane fade">
              <h2 class="mb-4">Trending product edition:</h2>
              <div id="product-viewer">
                <table class="p-l-3">
                  <th>ID#</th>
                  <th>Trending dress</th>

                  @foreach($trending_dress as $dress)
                  <tr>
                    <td>{{ $dress->dress_id }}</td>
                    <td>{{ $dress->dress_photo }}</td>
                    <td><button type="button" class="edit-btn" value="{{ asset('dresses/' . $dress->dress_photo) }}">Edit</button></td>
                  </tr>
                  @endforeach
                </table>
                <!-- <button type="button" id="edit-btn">Edit</button> -->
              </div>

              <div id="product-editor">
                <img src="" alt="IMG-PRODUCT" width="230" height="300">
                <form action="" method="post" enctype="multipart/form-data">
                  <input type="file">
                </form>
              </div>
              <br><br>

              <button type="button" id="back">Back</button>                
            </div>
          <script>
            $('#product-editor').hide();
            if($('#product-editor').is(':hidden')) {
              $('#back').hide();
            }
            
            $('.edit-btn').click(function() {
              image = $(this).val();
              $('#product-viewer').hide();
              $('#product-editor img').attr('src', image);
              $('#product-editor').show();
              $('#back').show();
            });
            $('#back').click(function() {
              $('#product-viewer').show();
              $('#product-editor').hide();
              $('#back').hide();
            });
          </script>
          
          
         <!---feedback tab --->
         <div id="feedbacks" class="tab-pane fade">
           <h2 class="mb-4">Feedbacks</h2>
            <table class="p-l-3">
              <tr>
                <th>Customer Name</th>
                <th>Feedback Description</th>
              </tr>
              @foreach($feedbacks as $i)
              <tr>
               
                <td>{{ $i->name }}</td>
                <td>{{ $i->content }}</td>
                @endforeach
              </tr>
            </table>
          </div>

    <script src="{{ asset('external_files/admin_page/js/jquery.min.js') }}"></script>
    <script src="{{ asset('external_files/admin_page/js/popper.js') }}"></script>
    <script src="{{ asset('external_files/admin_page/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('external_files/admin_page/js/main.js') }}"></script>
  </body>
</html>