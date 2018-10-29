@extends('layouts.main')
@section('title', $title)
@section('type', 'profile-page sidebar-collapse')
@section('content')
<div class="wrapper">
    <div class="page-header page-header-small clear-filter" filter-color="dark-red">
        <div class="page-header-image" data-parallax="true" style="background-image: url('{{asset('./assets/img/black.jpg')}}');"></div>
        <div class="container">
            <div>
                <div class="photo-container">
                    <img src="{{asset('./assets/img/faces/camp.jpg')}}" alt="">
                </div>
                <h3 class="title">{{$users->name}}</h3>
            </div>
            <p class="category"></p>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <div class="button-container">
                <a href="#" class="btn btn-danger btn-round btn-lg" rel="tooltip" title="Contacto">
                    <i class="now-ui-icons ui-1_email-85"></i> {{$users->email}}
                </a>
            </div>
            <br>
            <div class="description text-center">
                <h6 style="color: #3C4858;">Carrera:</h6>
                <p>{{$title}}</p>
                <h6 style="color: #3C4858;">Institución Educativa:</h6>
                <p>{{$title}}</p>
                <h6 style="color: #3C4858;">Personaje:</h6>
                <p>{{$title}}</p>
                <form id="delete_form_{{ $users->id }}" action="{{ route('user.destroy' , $users->id)}}" method="POST"
                      onsubmit="return deleteElement(
                                      'Usuario: {{$users->name}}.',
                                      'Será eliminado. ¿Está seguro?',
                                      'delete_form_{{ $users->id }}',
                                      event);">
                    <a href="{{route('user.edit', $users->id)}}">
                        <button type="submit" class="btn btn-sm btn-success">
                            <i class="now-ui-icons ui-2_settings-90"></i>  Editar perfil
                        </button>
                    </a>
                    <!--AQUI VA UN IF -->
                    <a href="">
                        <button type="submit" class="btn btn-sm btn-info">
                            <i class="now-ui-icons objects_key-25"></i> Cambiar contraseña
                        </button>
                    </a>
                    <!--AQUI VA UN IF -->
                    <a>
                        <button type="submit" class="btn btn-sm btn-danger">
                            <i class="now-ui-icons ui-1_simple-remove"></i> Eliminar
                        </button>
                    </a>
                </form>

            </div>
        </div>
    </div>
</div>
@stop
