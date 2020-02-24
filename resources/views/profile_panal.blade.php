<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table{
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Name</th>
            <th>Profile Picture</th>
        </tr>
        @foreach($profile as $i)
        <tr>
            <td>{{ $i->name }}</td>
            <td><img src="{{ asset('Images/' . $i->profile_pic) }}" width="50px" height="50px" alt="Image"></td>
        </tr>
        @endforeach
    </table>
</body>
</html>