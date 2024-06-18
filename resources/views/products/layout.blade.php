<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inventry Management System</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>

    <div class="heading d-flex">
        <img src="{{ asset('images/logo.png') }}" alt="logo" style="height: 100px">
        <h1 style="margin: 20px 40px;">Inventry Management System</h1>
        <form style="margin-left: 650px" method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="btn btn-dark" type="submit">Logout</button>
        </form>
    </div>

    

    
    <div class="d-flex">
        <div class="container">
            <br>
            @yield('content')
        </div>
    </div>

</body>
</html>