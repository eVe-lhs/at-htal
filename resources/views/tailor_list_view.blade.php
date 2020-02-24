@extends('layouts.admin_layout')

@section('title', 'Tailors')

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
        @foreach($tailor as $i)
        <tr>
            <td>{{ $i->tailor_name }}</td>
            <td>{{ $i->tailor_email }}</td>
            <td>{{ $i->phone_number }}</td>
            <td>{{ $i->address }}</td>
        </tr>
        @endforeach
  </tbody>
</table>
@endsection