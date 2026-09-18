<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('main.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <title>TradeSphere</title>
</head>
<body>

<nav class="navbar">
    <div class="navbar-brand">
        <a href="{{ url('/') }}">MyLogo</a>
    </div>

     <ul class="navbar-links">
        <li><a href="{{ url('home') }}">Home</a></li>
        <li><a href="{{ url('community') }}">Community</a></li>
        <li><a href="{{ url('learn-to-trade') }}">Learn to Trade</a></li>
        <li><a href="{{ url('about-us') }}">About Us</a></li>
        <li><a href="{{ url('login-register') }}">Login/Register</a></li>
    </ul>

</nav>
</body>
</html>