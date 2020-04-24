 <!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{'/css/ciudad.css'}}">
        <link rel="stylesheet" href="{{'/css/ciudad-mobile.css'}}">
        <script type="text/javascript" src="{{'/js/ciudad.js'}}"></script>

        <title>Gente & Ciudad - Neustros Equipos</title>
    </head>
    <header>
        <div class = "head-section">
            <img id = "main-logo"src = "./images/main_logo1.png" width = 80px>
            <div id="head-tabs">
                <a href="inicio">Inicio &nbsp/</a>
                <a href="nosotros">Nosotros &nbsp/</a>
                <a href="equipos">Equipos &nbsp/</a>
                <a href="http://axb1186.uta.cloud/">Blog &nbsp/</a>
                <a href="contacto">Contacto &nbsp/</a>
                <a href="/">Inicio De Session</a>
            </div>
        </div>
        <!--Hamburger Menu for Mobile Navigation-->
        <nav id="slide-nav">
            <div id="mySidenav" class="sidenav">
                <a href="inicio">Inicio</a>
                <a href="nosotros">Nosotros</a>
                <a href="equipos"></a>
                <a href="http://axb1186.uta.cloud/">Blog</a>
                <a href="contacto">Contacto</a>
                <a href="/">Inicio De Session</a>
            </div>
        </nav>
    </header>
    <body>
    <div id = "wrapper-login">
        <div id="login-background">
            <div id = "content-wrap">
                <div id="head-banner-login">
                    <div class="column" id="menu-icon">
                        <img src="https://img.icons8.com/nolan/40/menu.png"1 onClick=openNav()>
                    </div>
                </div>
            </div>
            <div id = "login-background-text-head">
                <p>
                    <B class = "font_style orange-txt">GENTE<br></B>
                    <I>Y CIUDAD</I>
                </p>
            </div>
            <div id = "login-background-text-body">
                Buscamos marcar un punto de partida para la transformación de nuestras <br>
                dificultades y diferencias en cimientos firmes que, desde las ciudades,<br>
                requieren nuestros países latinoamericanos para convertirse en los mejores<br>
                lugares para vivir, ya no solo por las bellezas y riquezas de nuestras tierras, sino <br>
                por lo decisión de su gente de aportar lo mejor de <br>
                si para mejorar su calidad de vida y asegurar los derechos de las futuras generaciones.
                <div class ="row">
                    <table>
                        <tr>
                            <td><div  id="decoration_login"></div></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="box" id = "login-background-text-body">
                                    <a href="/login"> <button>Login</button></a>
                                </div>
                            </td>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </body>
    @include('user.footer')

