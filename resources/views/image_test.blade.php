<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if(session('message'))
        <span style="color: green">{{ session('message') }}</span>
    @endif
    <form action="{{ route('img_insert') }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    @if(count($errors) > 0)
            @foreach($errors->all() as $error)
            <div>
                <span style="color:red">{{$error}}</span><br>
            </div>
            @endforeach
    @endif
        Name <input type="text" name="name" id=""><br>
        Profile Pic<input type="file" name="profile_pic" id=""><br>
        <input type="submit" name="" id="" value="OK">
    </form>
</body>
</html>