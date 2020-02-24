<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/continued" method="post">
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
        <input type="hidden" name="tailor_email" value="{{ $tailor_info->tailor_email }}">
        <span>{{ $tailor_info->tailor_name }}</span>
        TestingField <input type="text" name = "testing_field"><br>
        <input type="submit" name="" id="" value="OK">
    </form>
</body>
</html>