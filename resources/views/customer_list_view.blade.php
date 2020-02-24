@extends('layouts.admin_layout')

@section('title', 'Customers')

@section('content')
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Address</th>
    </tr>
  </thead>
  <tbody>
        @foreach($customer as $i)
        <tr>
            <td>{{ $i->customer_name }}</td>
            <td>{{ $i->customer_email }}</td>
            <td>{{ $i->phone_number }}</td>
            <td>{{ $i->address }}</td>
        </tr>
        @endforeach
  </tbody>
</table>
@endsection