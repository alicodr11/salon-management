<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   

    <h1>Register Now</h1>
    <h3>To acess all services</h3>
     @guest <a href="{{ route('login') }}" class="nav-link">
Login </a>

@if (Route::has('register'))
    <a href="{{ route('register') }}" class="nav-link">
        Register
    </a>
@endif


@endguest

@auth <a href="{{ route('dashboard') }}" class="nav-link">
Dashboard </a>
@endauth
</body>
</html>