<!doctype html>
<html lang="en">
  <head>
  	<title>Admin Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="{{ asset('external_files/admin_page/css/style.css') }}">
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
              <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Page Controls</a>
              <ul class="collapse list-unstyled nav flex-column" id="pageSubmenu">
                <li>
                    <a href="#sliders" data-toggle="tab">Slider</a>
                </li>
                <li>
                    <a href="#models" data-toggle="tab">Models</a>
                </li>
              </ul>
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
            <th>Total orders</th>
          </tr>
            
          <tr>
            @foreach($customer as $i)
              <td>{{ $i->name }}</td>
              <td>{{ $i->id }}</td>
              <td>{{ $i->email }}</td>
              <td>{{ $i->phone_number }}</td>
              <td>{{ $i->address }}</td>
              <td>0</td>
            @endforeach
          </tr>  
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
            <th>Rating</th>
          </tr>
            
          <tr>
            @foreach($tailor as $i)
              <td>{{ $i->name }}</td>
              <td>{{ $i->id }}</td>
              <td>{{ $i->email }}</td>
              <td>{{ $i->phone_number }}</td>
              <td>{{ $i->address }}</td>
              <td>7.5</td>
            @endforeach
          </tr>  
          </table>
              </div>
          
          
          <!--- orders tab ---->
            <div id="orders" class="tab-pane fade">
        <h2 class="mb-4">Order Table will be here</h2>
        <p>Total numbers of tailors:</p>
        <table class="p-l-3">
          <tr>
            <th>Name</th>
            <th>Tailor ID</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Rating</th>
            </tr>
            
            <?php /*$db=mysqli_connect("localhost","root","","accounts");
                 $tablename="";
                 $rowname="";
$query="SELECT * FROM users ... BY id DESC";
    $result=mysqli_query($db,$query);
while($row=mysqli_fetch_array($result)){
echo '<tr>
    <td>'.$row['cname'].'</td>
<td>'.$row['tid'].'</td>
<td>'.$row['email'].'</td>
<td>'.$row['phNo'].'</td>
<td>'.$row['Rating'].'</td>
<td><a href="delete.php?del='.$row['cid'].'">Delete User</a></td>
  </tr>';
}*/ ?>
          </table>
              </div>
          
           <!--- dresses tab ---->
            <div id="dresses" class="tab-pane fade">
        <h2 class="mb-4">Dresses Table will be here</h2>
        <p>Total numbers of dresses:</p>
        <table class="p-l-3">
          <tr>
            <th>Name</th>
            <th>Dress type</th>
            <th>Standard price</th>
            <th>---</th>
            <th>---</th>
            </tr>
            
            <?php /*$db=mysqli_connect("localhost","root","","accounts");
                 $tablename="";
                 $rowname="";
$query="SELECT * FROM users ... BY id DESC";
    $result=mysqli_query($db,$query);
while($row=mysqli_fetch_array($result)){
echo '<tr>
    <td>'.$row['cname'].'</td>
<td>'.$row['tid'].'</td>
<td>'.$row['email'].'</td>
<td>'.$row['phNo'].'</td>
<td>'.$row['Rating'].'</td>
<td><a href="delete.php?del='.$row['cid'].'">Delete User</a></td>
  </tr>';
}*/ ?>
          </table>
              </div>
          
            <!--- sliders tab ---->
            <div id="sliders" class="tab-pane fade">
        <h2 class="mb-4">Slider edition:</h2>
 <!-------Write some slider tab edition codes --->
                    
                
                
                
              </div>
          
          
            <!--- models tab ---->
            <div id="models" class="tab-pane fade">
        <h2 class="mb-4">Model edition:</h2>
 <!-------Write some model tab edition codes --->
                
                
                
                
                
              </div>
          
          
          <!---feedback tab --->
           <div id="feedbacks" class="tab-pane fade">
        <div style="border-bottom:1px grey solid;">
      <h5>Username</h5>
        <small>The email address</small>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
          </div>
      </div>
		</div>

    <script src="{{ asset('external_files/admin_page/js/jquery.min.js') }}"></script>
    <script src="{{ asset('external_files/admin_page/js/popper.js') }}"></script>
    <script src="{{ asset('external_files/admin_page/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('external_files/admin_page/js/main.js') }}"></script>
  </body>
</html>