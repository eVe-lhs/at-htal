@extends('layouts.admin_layout')

@section('title', 'Trending Dress Add')

@section('content')
<h3>Add dress</h3>
    @if(count($errors) > 0)
            @foreach($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
            {{ $error }}
            </div>
            @endforeach
    @endif

    @if(session('message'))
    <div class="alert alert-success" role="alert">
        {{ session('message') }}
    </div>
    @endif
<form action="{{ route('admin_trending_dress_add') }}" method="post" enctype="multipart/form-data">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
    <div class="row">
        <div class="col">
            <select name="dress_id" id="dress_list" class="form-control">
            @foreach($dress as $i)
                <option value="{{ $i->dress_id }}">{{ $i->dress_photo }}</option>
            @endforeach
            </select>
        </div>
        <div class="col">
            <input type="submit" name="" id="" value="Add">
        </div>
    </div>
</form>
@endsection