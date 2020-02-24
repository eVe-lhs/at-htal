<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
</head>
<body>
<div id="myform">
    <form action="/user_register" method="post">
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

        @if(count($errors) > 0)
            @foreach($errors->all() as $error)
            <div>
                <span style="color:red">{{$error}}</span><br>
            </div>
            @endforeach
        @endif

        Type of user
        <input type="radio" name="user_type" id="" value="tailor">Tailor
        <input type="radio" name="user_type" id="" value="customer">Customer <br>
        Name <input type="text" name="name" id=""><br>
        Password <input type="password" name="password" id=""><br>
        Confirm password <input type="password" name="password_confirmation" id=""><br>
        Email <input type="email" name="email" id=""><br>
        Phone <input type="text" name="phone_number" id=""><br>
        Address <input type="text" name="address" id=""><br>
        <!-- <input type="button" value="Clear" onclick="clearForm('myform')"> -->
        <input type="submit" name="ok_button" id="" value="OK">
        
    </form>
</div>
</body>
</html>