@extends('layouts.admin_layout')

@section('title', 'Dress Add')

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
<form action="{{ route('admin_dress_add') }}" method="post" enctype="multipart/form-data">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
    <div class="row">
        <div class="col">
            <input type="file" name="dress_photo" id="">
        </div>
        <div class="col">
            <select name="dress_type_id" id="dress_list" class="form-control">
            @foreach($dress as $i)
                <option value="{{ $i->dress_type_id }}">{{ $i->dress_type_name }}</option>
            @endforeach
            </select>
        </div>
        <!-- <div class="col">
            <input type="text" name="" id="description">
        </div> -->
        <div class="col">
            <input type="submit" name="" id="" value="Add">
        </div>
    </div>
</form>

<div id="result"></div>
<script>
    $('#dress_list').change(function() {
        //$('#result').text($('#dress_list').find(":selected").val());
        let selected_item = $('#dress_list').find(":selected").val();
        if(selected_item == 1 || selected_item == 3 || selected_item == 7) {
            $('#description').removeAttr('disabled');
        }
        else {
            $('#description').attr('disabled', 'disabled');
        }
    });
</script>
@endsection