@extends('layouts.admin_layout')

@section('title', 'Dress Add')

@section('content')
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
@endsection