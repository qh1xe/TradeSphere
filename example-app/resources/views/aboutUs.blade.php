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

<div class="QuoteAboutUs">

<h1>One trade means&nbsp;<span class="underline">nothing.</span></h1>
<h1>Consistency means&nbsp;<span class="underline">everything</span></h1></br>

</div>

<div class="ShortIntroAboutUs">

    <h3> WHERE IT STARTED</h3>
    <h2>WE STARTED EXACTLY </BR> WHERE YOU DID.</h2>

    <div class="textContainerShort">
    <p> 
    Lorem ipsum dolor sit amet consectetur adipiscing elit. Quisque faucibus ex sapien vitae pellentesque sem placerat. </br>
    In id cursus mi pretium tellus duis convallis. 
    Tempus leo eu aenean sed diam urna tempor. 
    Pulvinar vivamus fringilla lacus nec metus bibendum egestas. 
    Iaculis massa nisl malesuada lacinia integer nunc posuere. Ut hendrerit semper vel class aptent taciti sociosqu. 
    Ad litora torquent per conubia nostra inceptos himenaeos. 
    </p>
    </div>

    <img src="{{ asset('pictures/AboutUS1.jpg') }}" alt="About Us1">

</div>

<div class="StoryAboutUs"> 

    <h2>
    "Lorem ipsum dolor sit amet consectetur adipiscing elit. Quisque faucibus ex sapien vitae pellentesque sem placerat. 
    In id cursus mi pretium tellus duis convallis. </br>
    Tempus leo eu aenean sed diam urna tempor.
    Pulvinar vivamus fringilla lacus nec metus bibendum egestas. 
    Iaculis massa nisl malesuada lacinia integer nunc posuere." 
    </h2>

</div>

<img src="{{ asset('pictures/AboutUS2.jpg') }}" alt="About Us2">





</body>
</html>