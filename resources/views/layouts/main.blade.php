<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('./assets/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('./assets/img/SmashLogo.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <!-- sirve para mandar los token en el header -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>@yield('title')</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="{{asset('./assets/css/now-ui-kit.css?v=1.2.0')}}" rel="stylesheet" />
    <link href="{{asset('./assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <script src="{{asset('./assets/js/now-ui-kit.js')}}" type="text/javascript"></script>
    <link href="{{asset('./assets/demo/demo.css')}}" />


</head>
<body class="@yield('type')" >
<nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg bg-success2" color-on-scroll="100" id="sectionsNav">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" href="/">
                Inicio </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse">
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
        <nav class="float-left">
            <ul>
                <a class="sharing-area" href="https://www.facebook.com/cuvalles" target="_blank">
                    <button class="btn btn-fab btn-round btn-facebook">
                        <i class="fa fa-facebook"> </i>
                    </button>
                </a>
                <a class="sharing-area" href="https://twitter.com/MnDMzTR" target="_blank">
                    <button class="btn btn-fab btn-round btn-twitter">
                        <i class="fa fa-twitter"></i>
                    </button>
                </a>
                <!--<li>
                    <a href="https://www.creative-tim.com">
                        Creative Tim
                    </a>
                </li>
                <li>
                    <a href="https://presentation.creative-tim.com">
                        About Us
                    </a>
                </li>
                <li>
                    <a href="https://blog.creative-tim.com">
                        Blog
                    </a>
                </li>
                <li>
                    <a href="https://www.creative-tim.com/license">
                        Licenses
                    </a>
                </li>-->
            </ul>
        </nav>
        <div class="copyright float-right">
            &copy;
            <script>
                document.write(new Date().getFullYear())
            </script> <a href="http://www.google.com/" target="_blank">DynaDevs</a>
        </div>
    </div>
</footer>
<!--   Core JS Files   -->
<script src="{{asset('../assets/js/core/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('../assets/js/core/popper.min.js')}}" type="text/javascript"></script>
<script src="{{asset('../assets/js/core/bootstrap.min.js')}}" type="text/javascript"></script>
<!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
<script src="{{asset('../assets/js/plugins/bootstrap-datetimepicker.js')}}" type="text/javascript"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="{{asset('../assets/js/plugins/nouislider.min.js')}}" type="text/javascript"></script>
<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script src="{{asset('../assets/js/now-ui-kit.js?v=1.2.0')}}" type="text/javascript"></script>
<script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
<script src="{{asset('./assets/js/messages_methods.js')}}" type="text/javascript"></script>
@include('sweetalert::alert')
<script>
    $(document).ready(function(){
        $('.myTip').tooltip()
    });
</script>

</body>
</html>
