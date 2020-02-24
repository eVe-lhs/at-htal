@extends('layouts.admin_layout')

@section('title', 'Trending Dress View')

@section('content')
<h3>Add Trending Dress</h3>
    @if(count($errors) > 0)
            @foreach($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
            {{ $error }}
            </div>
            @endforeach
    @endif

    <!-- @if(session('message'))
    <div class="alert alert-success" role="alert">
        {{ session('message') }}
    </div>
    @endif -->

    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
    <div class="row">
        <div class="col-9"></div>
        <div class="col-3">
            
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Photo</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dress as $i)
            <tr>
            <th scope="row">{{ $i->trending_dress_id }}</th>
            <td>{{ $i->dress_photo }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection