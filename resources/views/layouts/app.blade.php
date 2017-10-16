<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Christian Sims - Web Developer</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" type="text/css" href="/css/app.css">

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/TimelineMax.min.js') }}"></script>
    <script src="{{ asset('js/TweenMax.min.js') }}"></script>


</head>
<body id="app-layout">
    <div class="header flex-col flex-a-center flex-j-center">
        <div class="">
            <a href="{{ url('/work')}}">
                <div class="name flex-row flex-a-center flex-j-center">
                    <h1>Christian Sims</h1>
                    <h2>Web Developer</h2>
                </div>
            </a>
        </div>
    </div>
    <div class="container">
        <div class="nav center">
            <ul class="links flex-row flex-j-center">
                <li id="padleftremove"><a href="{{ url('/work') }}" id="work">Work</a></li>
                <li><a href="{{ url('/about') }}" id="about">About Me</a></li>
                <li><a href="{{ url('/contact') }}" id="contact">Contact</a></li>
            </ul>
        </div>
    </div>

    @yield('content')
    <div class="container">
     <div class="footer sidemar">
         <p>© 2017 Christian Sims All Rights Reserved.</p>
     </div>   
    </div>

</body>

</html>
