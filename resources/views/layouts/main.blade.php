<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('./assets/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('./assets/img/favicon.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <!-- sirve para mandar los token en el header -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>@yield('title')</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- CSS Files -->
    <link rel="stylesheet" href="{{asset('./assets/css/now-ui-kit.css?v=1.2.0')}}">
    <link rel="stylesheet" href="{{asset('./assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('./assets/demo/demo.css')}}">

    <link href="{{asset('demo/demo.css')}}" rel="stylesheet" />
    <script src="{{asset('js/core/jquery.min.js')}}" type="text/javascript"></script>

    <script src="{{asset('./assets/js/sweetalert2.all.js')}}" type="text/javascript"></script>
    <script src="{{asset('./assets/js/sweetalert2.js')}}" type="text/javascript"></script>
    <script src="{{asset('./assets/js/message_methods.js')}}" type="text/javascript"></script>
    <script src="{{asset('./assets/js/general_methods.js')}}" type="text/javascript"></script>
    <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
</head>
<body class="@yield('type')">
<nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" href="/">Inicio</a>
            <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar top-bar"></span>
                <span class="navbar-toggler-bar middle-bar"></span>
                <span class="navbar-toggler-bar bottom-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="nav navbar-nav ml-auto">
                @if (Auth::guest())
                    <li class="dropdown nav-item">
                        <a href="" class="nav-link">
                            <i class="now-ui-icons gestures_tap-01"></i> Iniciar sesión
                        </a>
                    </li>
                    <li class="dropdown nav-item">
                        <a href="" class="nav-link">
                            <i class="now-ui-icons ui-1_simple-add"></i> Registrarse
                        </a>
                    </li>
                @else

                    <li class="dropdown nav-item">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                            <i class=now-ui-icons">mail</i> Mensajes
                        </a>
                        <div class="dropdown-menu dropdown-with-icons">
                            <h6 class="dropdown-header">Mensajes</h6>
                            <a href=" class="dropdown-item">
                                <i class="now-ui-icons">list</i> Ver mensajes enviados
                            </a>
                            <div class="dropdown-divider"></div>
                            <h6 class="dropdown-header">Enviar mensaje</h6>
                            <a href="" class="dropdown-item">
                                <i class="now-ui-icons">add</i> Mensaje personalizado
                            </a>
                            <a href="" class="dropdown-item">
                                <i class="now-ui-icons">add</i> Mensaje general
                            </a>
                        </div>
                    </li>
                    <li class="dropdown nav-item">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                            <i class="now-ui-icons">description</i> Justificantes
                        </a>
                        <ul class="dropdown-menu dropdown-with-icons">
                            <h6 class="dropdown-header">Fracciones</h6>
                            <li><a href="" class="dropdown-item">
                                    <i class="now-ui-icons">list</i> Ver fracciones
                                </a></li>
                            <li><a href="" class="dropdown-item">
                                    <i class="now-ui-icons">add</i> Añadir fracciones
                                </a></li>
                            <li class="dropdown-divider"></li>
                            <h6 class="dropdown-header">Tipos de justificantes</h6>
                            <li><a href="" class="dropdown-item">
                                    <i class="now-ui-icons">list</i> Ver tipos de justificantes
                                </a></li>
                            <li><a href="" class="dropdown-item">
                                    <i class="now-ui-icons">add</i> Añadir tipos de justificantes
                                </a></li>
                            <li class="dropdown-divider"></li>
                            <h6 class="dropdown-header">Justificantes</h6>
                            <li><a href="" class="dropdown-item">
                                    <i class="now-ui-icons">add</i> Crear justificante
                                </a></li>
                            <li><a href="" class="dropdown-item">
                                    <i class="now-ui-icons">add</i> Ver justificante
                                </a></li>
                        </ul>
                    </li>
                    <li class="dropdown nav-item">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                            <i class="now-ui-icons">event</i> Eventos
                        </a>
                        <div class="dropdown-menu dropdown-with-icons">
                            <a href="#" class="dropdown-item">
                                <i class="now-ui-icons">list</i> Ver tipos de eventos
                            </a>
                            <a href="#" class="dropdown-item">
                                <i class="now-ui-icons">add</i> Añadir tipos de eventos
                            </a>
                            <a href="#" class="dropdown-item">
                                <i class="now-ui-icons">list</i> Ver eventos
                            </a>
                            <a href="#" class="dropdown-item">
                                <i class="now-ui-icons">add</i> Añadir eventos
                            </a>
                        </div>
                    </li>
                    <li class="dropdown nav-item">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                            <i class="now-ui-icons">supervisor_account</i> Administración
                        </a>
                        <div class="dropdown-menu dropdown-with-icons">
                            <h6 class="dropdown-header">Administradores</h6>
                            <a href="#" class="dropdown-item">
                                <i class="now-ui-icons">list</i> Ver Administradores
                            </a>
                            <a href="#" class="dropdown-item">
                                <i class="now-ui-icons">add</i> Añadir Administradores
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="now-ui-icons">people</i> Usuarios
                            </a>
                            <a href="#" class="dropdown-item">
                                <i class="now-ui-icons">assignment_ind</i> Tipos de usuarios
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="now-ui-icons">security</i> Instancias
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="now-ui-icons">settings</i> Configuraciones
                            </a>
                        </div>
                    </li>
                    <li class="dropdown nav-item">
                        <a href="#" class="profile-photo dropdown-toggle nav-link" data-toggle="dropdown">
                            <div class="profile-photo-small">
                                <img src="{{asset('../assets/img/faces/camp.jpg')}}" alt="Circle Image" class="rounded-circle img-fluid">
                            </div>
                        <!-- <i class="material-icons">person</i> {{Auth()->user()->name}} -->
                        </a>
                        <div class="dropdown-menu dropdown-with-icons">
                            <a href="#" class="dropdown-item">
                                <i class="now-ui-icons">account_circle</i>Mi perfil
                            </a>
                            <a class="dropdown-item" href="#"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="now-ui-icons">exit_to_app</i>Cerrar sesión
                            </a>
                            <form id="logout-form" action="#" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </div>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
@yield('content')
<!--  End Modal -->
<footer class="footer" data-background-color="black">
    <div class="container">
        <nav>
            <ul>
                <li>
                    <a href="https://www.creative-tim.com">
                        Creative Tim
                    </a>
                </li>
                <li>
                    <a href="http://presentation.creative-tim.com">
                        About Us
                    </a>
                </li>
                <li>
                    <a href="http://blog.creative-tim.com">
                        Blog
                    </a>
                </li>
            </ul>
        </nav>
        <div class="copyright float-right">
            &copy;
            <script>
                document.write(new Date().getFullYear())
            </script> <a href="http://www.valles.udg.mx/" target="_blank">CUValles</a>
        </div>
    </div>
</footer>
<!--   Core JS Files   -->
<script src="{{asset('../assets/js/core/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('../assets/js/core/popper.min.js')}}" type="text/javascript"></script>
<script src="{{asset('../assets/js/core/bootstrap-material-design.min.js')}}" type="text/javascript"></script>
<script src="{{asset('../assets/js/plugins/moment.min.js')}}"></script>
<!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
<script src="{{asset('../assets/js/plugins/bootstrap-datetimepicker.js')}}" type="text/javascript"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="{{asset('../assets/js/plugins/nouislider.min.js')}}" type="text/javascript"></script>
<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script src="{{asset('../assets/js/material-kit.js?v=2.0.3')}}" type="text/javascript"></script>

</body>
</html>
