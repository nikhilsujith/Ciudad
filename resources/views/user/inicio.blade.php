<!doctype html>
<html lang="en">
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

    <link rel="stylesheet" href="{{'/css/ciudad.css'}}">
    <link rel="stylesheet" href="{{'/css/ciudad-mobile.css'}}">
    <script type="text/javascript" src="{{'/js/ciudad.js'}}"></script>

    <title>INICIO</title>
</head>

<header>
    <div class = "head-section">
        <img id=main-logo src = "/images/main_logo1.png">
        <div id="head-tabs">
            <a href="/inicio">Inicio &nbsp/</a>
            <a href="/nosotros">Nosotros &nbsp/</a>
            <a href="/equipos">Equipos &nbsp/</a>
            <a href="http://axb1186.uta.cloud/">Blog &nbsp/</a>
            <a href="/contacto">Contacto &nbsp/</a>
            <a href="/">Inicio De Session</a>
        </div>
    </div>


    <!--Hamburger Menu for Mobile Navigation-->
    <nav id="slide-nav">
        <div id="mySidenav" class="sidenav">
            <a href="/inicio">Inicio</a>
            <a href="/nosotros">Nosotros</a>
            <a href="/equipos">Equipos</a>
            <a href="http://axb1186.uta.cloud/">Blog</a>
            <a href="/contacto">Contacto</a>
            <a href="/">Inicio De Session</a>
        </div>
    </nav>
</header>
{{--LARAVEL CODE TO CHECK FOR ERRORS AND DISPLAY BOOTSTRAP STYLE ALERT--}}
@if(count($errors)>0)
    <div class = "alert alert-danger"> {{--bootstrap class--}}
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(\Session::has('success'))
    <div class = "alert alert-success"> {{--bootstrap class--}}
        <p>{{\Session::get('success')}}</p>
    </div>
@endif

<body>
<div>
    <div id = "content-wrap">
        <div id="head-banner1">
            <div class="column" id="menu-icon">
                <img src="https://img.icons8.com/nolan/24/menu.png"1 onClick=openNav()>
            </div>
            <div id="inicio-head-main-banner-title">
                <B id = "title-inicio-banner-gente">GENTE<br></B>
                <I id="title-inicio-banner-yCiudad">Y CIUDAD</I>
            </div>
            <div id = "login-background-text-body-inicio">
                Buscamos marcar un punto de partida para la transformación de nuestras <br>
                dificultades y diferencias en cimientos firmes que, desde las ciudades,<br>
                requieren nuestros países latinoamericanos para convertirse en los mejores<br>
                lugares para vivir, ya no solo por las bellezas y riquezas de nuestras tierras, sino <br>
                por lo decisión de su gente de aportar lo mejor de <br>
                si para mejorar su calidad de vida y asegurar los derechos de las futuras generaciones.
            </div>
        </div>
    </div>

    <div id="wrapper">
        <div id="inicio-objectives-card">
            <div class="row" id="inicio-objectives-card-title">
                <h2>OBJECTIVOS</h2>
            </div>
            <div class="row">
                <p id="inicio-objectives-card-body">
                    Realizar investigaciones, estudios y propuestas legislativas, <br>relacionados con la gestión de los gobierno <br>locales para el desarrollo sostenible.
                    Formular proyectos para promover la participación ciudadana en <br>iniciativas locales para la sostenibilidad.
                    Desarrollar programas de capacitación en las áreas de participación <br>ciudadana local y gobierno abierto para la sostenibilidad.
                    Promover iniciativas de responsabilidad social y voluntariado, como <br>espacios de participación ciudadana
                    Implementar campañas de sensibilización para motivar en la audiencia el <br>ejercicio activo de la ciudadanía como eje fundamental para la transformación de las ciudades.

                </p>
            </div>
        </div>

        <!--	Our Values Cards-->
        <div>
            <div id="nosotros-ourValues">
                <!--Heading row-->
                <div id="inicio-ourValues-title" class = "row">
                    <div class = "column-heading">
                        <h2 class="font_style">Nuestros <em class = "orange-txt"> Valores</em></h2>
                    </div>
                </div>
                <!-- Our values row 1-->
                <div class = "row" id="nosotros-ourValues-row1">
                    <div class = "container-ourValues">
                        <h2><p><B><U class="orange-u">CA</U>LIDAD</B></p></h2>
                        <p class = "para-font">
                            Es la práctica de los integrantes de Gente<br> & Ciudad que fomenta una mejora continua <br> para alcanzar la misión de la organización.<br>
                        </p>
                    </div>
                    <div class = "container-ourValues">
                        <h2><p><B><U class="orange-u">CO</U>NFIANZA</B></p></h2>
                        <p class = "para-font">
                            Es la seguridad que Gente <br>& Ciudad genera a través de sus actos.
                        </p>
                    </div>

                    <div class = "container-ourValues">
                        <h2><p><B><U class="orange-u">CO</U>HERANCIA</B></p></h2>
                        <p class = "para-font">
                            Todas las actuaciones de Gente & Ciudad <br>estarán en consonancia con sus valores<br> institucionales.<br>
                        </p>
                    </div>
                </div>
                <!-- Our values row 2-->
                <div class = "row" id="nosotros-ourValues-row2">
                    <div class = "container-ourValues">
                        <h2><p><B><U class="orange-u">CO</U>MPROMISO</B></p></h2>
                        <p class = "para-font">
                            Los integrantes de Gente & Ciudad asumen <br>como propio el cumplimiento de las<br> obligaciones de la institución.<br>
                        </p>
                    </div>
                    <div class = "container-ourValues">
                        <h2><p><B><U class="orange-u">CO</U>OPERACIÓN</B></p></h2>
                        <p class = "para-font">
                            En Gente & Ciudad se promueve la suma de <br>fuerzas para lograr objetivos compartidos.<br>
                        </p>
                    </div>
                    <div class = "container-ourValues">
                        <h2><p><B><U class="orange-u">TR</U>ANSPERANCIA</B></p></h2>
                        <p class = "para-font">
                            Es la cualidad que caracteriza y promueve <br>Gente & Ciudad que permite conocer <br>claramente nuestro planteamientos y <br>acciones.<br>
                        </p>
                    </div>
                </div>
            </div>
        </div><!--        Our Value Cards End-->
        <div id = "inicio-events-div" class = "row">
            <div class = "column" id="inicio-events-div-eventList">

            </div>
            <div class = "column" id="inicio-events-div-register" >
                <div class="row" id="inicio-events-div-register-title">
                    <h4>Registrate Con <I class="orange-txt">Nosotros</I><br></h4>
                </div>
                <div class="row" id="inicio-events-div-register-subTitle">
                    Para estas informado de nuestas actividades y eventos
                </div>

                <div class="row" id="inicio-events-div-register-body">
                    <form method="POST" action="/RegisterUser">
                        {{csrf_field()}}
                        <div class = column>
                            <div class="row">
                                <input class="inicio-events-textInput" type="text" id="inicio-events-div-register-body-phone" name = "uName" placeholder="Name">
                            </div>
                            <div class="row">
                                <input class="inicio-events-textInput" type="text" id="inicio-events-div-register-body-phone" name="uEmail" placeholder="Email">
                            </div>
                        </div>
                        <div class = column>
                            <div class="row">
                                <input class="inicio-events-textInput" type="password" id="inicio-events-div-register-body-mail" name= "uPassword"placeholder="Password">
                            </div>
                            <div class="row">
                                <input class="inicio-events-textInput" type="text" id="inicio-events-div-register-body-mail" name= "uLocation"placeholder="Location">
                            </div>
                            <input type="hidden" name="field" value="registration"></input>
                        </div>
                        <button id="inicio-events-div-register-button">Registrar Ahora</button>
                     </form>
                </div>
            </div>
    </div>

    <div id="footer_register">
        <h2  class="font_style"><B id="black-txt">Nuestros Aliados</B><em class = "orange-txt"> Estrategicos </em></h2>
        <div class="row">
            <div class="column">
                <img src = "../images/image3.jpg">
            </div>
            <div class="column">
                <img src = "../images/main_logo1.png">
            </div>
        </div>

    </div>



    <div id="inicio-blog-cards">
        <div class = "row" id="inicio-blog-cards-title">
            <div class = "column-heading">
                <h2 class="font_style">Nuestro <em class = "orange-txt">Blog</em></h2>
            </div>
        </div>
        <div class = "row" id = "inicio-blog-card-subTitle">
            <p>Esta sección esta pensada para integrar a los ciudadanos y poder tener un feedback directo con nuestra comunidad.</p>
        </div>

        <!--BLOG CARDS-->
        <div class="blog-cards">
            <div class="row">
                <div class="column-card">
                    <div class="card">
                        <div class="card-image">
                            <a href="http://axb1186.uta.cloud/uncategorized/improvements/">
                                <img src="../images/blog1.jpeg" width="100%" height="100%">
                            </a>
                            <div class="card-date">
                                25<br>May
                            </div>
                        </div>
                        <div class="card-topic">
                            How can we improve the project?
                            <p><hr></p>
                            <p class="column">
                                <img src="https://img.icons8.com/ios/32/000000/user.png" width="20px"/>
                                Admin
                            </p>
                            <p class="column">
                                <img src="https://img.icons8.com/metro/26/000000/like.png" width="20px"/>
                                20
                            </p>
                            <p class="column">
                                <img src="https://img.icons8.com/metro/26/000000/chat.png" width="20px"/>
                                15
                            </p>
                        </div>
                    </div>
                </div>


                <div class="column-card">
                    <div class="card">
                        <div class="card-image">
                            <a href="http://axb1186.uta.cloud/uncategorized/negative-aspect-project/">
                                <img src="../images/blog2.jpg" width="100%" height="100%">
                            </a>
                            <div class="card-date">
                                23<br>May
                            </div>
                        </div>
                        <div class="card-topic">
                            Negative aspects of the project
                            <p><hr></p>
                            <p class="column">
                                <img src="https://img.icons8.com/ios/32/000000/user.png" width="20px"/>
                                Admin
                            </p>
                            <p class="column">
                                <img src="https://img.icons8.com/metro/26/000000/like.png" width="20px"/>
                                200
                            </p>
                            <p class="column">
                                <img src="https://img.icons8.com/metro/26/000000/chat.png" width="20px"/>
                                90
                            </p>
                        </div>
                    </div>
                </div>

                <div class="column-card">
                    <div class="card">
                        <div class="card-image">
                            <a href="http://axb1186.uta.cloud/uncategorized/positive-project-aspect/">
                                <img src="../images/blog3.png" width="100%" height="100%">
                            </a>
                            <div class="card-date">
                                21<br>May
                            </div>
                        </div>
                        <div class="card-topic">
                            Positive aspects of the project
                            <p><hr></p>
                            <p class="column">
                                <img src="https://img.icons8.com/ios/32/000000/user.png" width="20px"/>
                                Admin
                            </p>
                            <p class="column">
                                <img src="https://img.icons8.com/metro/26/000000/like.png" width="20px"/>
                                420
                            </p>
                            <p class="column">
                                <img src="https://img.icons8.com/metro/26/000000/chat.png" width="20px"/>
                                150
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
