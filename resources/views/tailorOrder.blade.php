@extends('layouts.tailor_layout')
@section('title', 'Orders')
@section('content')

	<!-- Cart -->
	
		

	<!-- Shoping Cart -->
	<form class="bg0 p-t-75 p-b-85">
		<div class="container">
        @foreach($order as $o)
			<div class="row">
				<div class="col-lg-10 col-xl-20 m-lr-auto m-b-50">
					<div class="m-r-38 m-l-30 m-lr-0-xl">
						<div class="wrap-table-shopping-cart">
							<table class="table-shopping-cart">
								    <tr class="table_head">
									<th class="column-1">Product</th>
									<th class="column-2">User Name</th>
									<th class="column-3">Price</th>
									<th class="column-4">Expected Deadline</th>
                                    <th class="column-5">Measurement<br>(cm)</th>
                                    <th class="column-6">Order Status</th>
                                    <th class="column-7">Accept/Deny</th>
								</tr>
                                
								<tr class="table_row">
									<td class="column-1">
										<div class="how-itemcart1">
											<img src="{{ asset('dresses/' . $o->dress_photo) }}" alt="IMG">
										</div>
									</td>
									<td class="column-2">{{ $o->name }}</td>
									<td class="column-3">{{$o->price}}</td>
									<td class="column-4">{{$o->deadline}}</td>
                                    <td class="column-5"><ul>
                                    <li>Bust:{{$o->bust}}</li>
                                    <li>Waist:{{$o->waist}}</li>
                                    <li>Backlength:{{$o->backlength}}</li>
                                    <li>Hip:{{$o->hip}}</li>
                                    <li>Bicep-left:{{$o->bicep_left}}</li>
                                    <li>Bicep-right:{{$o->bicep_right}}</li>
                                    </ul></td>
                                    <td class="column-6">{{ $o->order_status }}</td>
                                    <td class="column-7">
                                    @if($o->order_status=='pending')
                                       <a style="margin-left: 10px;" href="{{route('orderAccept',[$o->order_id,$o->id])}}"> <i class="fa fa-check cl2 m-r-6 fs-15 trans-04 fa fa-check"></i></a>
                                        <a style="margin-left: 10px;" href="{{route('orderDeny',[$o->order_id,$o->id])}}"><i class="fa fa-times cl2 m-r-6 fs-15 trans-04 fa fa-times"></i></a>
                                    @elseif($o->order_status=='confirmed')
                                    <button class="btn btn-primary" style='margin-left: 10px;'><a style="color:white;" href="{{route('orderFinish',[$o->order_id,$o->id])}}"> Finish</a></button>
                                    @elseif($o->order_status=='completed')
                                    <p>Order Finished</p>
                                    @elseif($o->order_status=='denied')
                                    <p>Order Denied</p>
                                    @endif
                                    </td>
								</tr>
							</table>
						</div>

						<div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
							
						</div>
					</div>
				</div>

				
			</div>
            @endforeach
		</div>
	</form>
		
	
		

	<!-- Footer -->
	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>