<!doctype html>
<html lang="en" onload="myFunction()">
<head>

{{--BOOTSTRAP CDN--}}
<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ url('/css/ciudad.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('/css/ciudad-mobile.css') }}" />
    <script type="text/javascript" src="{{'/js/ciudad.js'}}"></script>

</head>
<header>
    <div class = "head-section">
        <img id = "main-logo" src="{{ URL::to('/images/main_logo1.png') }}">
        <div id="head-tabs">
            <a href="successAdminLogin">Team &nbsp/</a>
            <a href="events">Events &nbsp/</a>
            <a href="/admin/participants">Participants &nbsp/</a>
            <a href="/admin/issues">Issues</a>
        </div>
    </div>
    <div id = "content-wrap">
        <div id="head-banner">
            <div class="column" id="menu-icon">
                <img src="https://img.icons8.com/nolan/24/menu.png"1 onClick=openNav()>
            </div>
            <h2  class = "fonts_style, white">
                <span id="myText">{{isset($title) ? $title : 'title'}}</span>
            </h2> <!--Span with #id gets title of the page-->
        </div>
    </div>
    <!--Hamburger Menu for Mobile Navigation-->
    <nav id="slide-nav">
        <div id="mySidenav" class="sidenav">
            <a href="/admin/teams">Team</a>
            <a href="/admin/events">Events</a>
            <a href="/admin/participants">Participants</a>
            <a href="/admin/issues">Issues</a>
        </div>
    </nav>
</header>
</html>
