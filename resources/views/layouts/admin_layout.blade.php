<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
<div class="row">
    <div class="col">
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand">Navbar</a>
        <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </nav>
    </div>
</div>

<div class="row mt-3">
    <div class="col-2">
        <ul class="list-group">
        <a href="/admin/customers" class="list-group-item list-group-item-action">Customers</a>
        <a href="/admin/tailors" class="list-group-item list-group-item-action">Tailors</a>
        <a href="#" class="list-group-item list-group-item-action">Dress</a>
        <a href="#" class="list-group-item list-group-item-action">Orders</a>
        <a href="#" class="list-group-item list-group-item-action">Reports</a>
        </ul>
    </div>

    <div class="col-10">
        @yield('content')
    </div>
</div>
</div>
</body>

<!-- <script>
    //let selectedItem = $('.bg-dark, .text-white');
    $('a').click(function() {
        
        $('.bg-dark, .text-white').removeClass('bg-dark text-white');
        $(this).addClass('bg-dark text-white');
        
    });
</script> -->
</html>