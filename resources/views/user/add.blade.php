@extends('layouts.main')
@section('title', $title)
@section('type', 'index-page sidebar-collapse')
@section('content')
{{-- Titulo o encabezado --}}
<div id="modal"></div>
{{-- Titulo o encabezado --}}
<div class="page-header page-header-small-tiny header-filter clear-filter" data-parallax="true" style="background-image: url('{{asset('./assets/img/black.jpg')}}');"  >
    <div class="container">
        <div class="row">
            <h1 class="title">{{$title}} @if(@isset($users)){{$users->name}}@endif</h1>
        </div>
    </div>
</div>
{{-- divs necesarios para el contenido --}}
<div class="main main-raised">
    <div class="container">
        <div class="section text-center">
            <div class="col-md-8 ml-auto mr-auto">
                <form id="form" class="form-horizontal" name="form_busqueda" action="{{route('user.store')}}" method="post" entype="application/x-www-form-urlencoded" onsubmit="disable('submit')">
                    <div class="row text-left">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="nombre">Nombre(s)</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="email">Email / Correo electronico</label>
                                <input type="email" class="form-control" name="email">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="password">Contraseña</label>
                                <input type="password" class="form-control" name="password">
                                <small id="passwordHelpBlock" class="form-text text-info">
                                    Su contraseña debe tener una longitud de 8 a 20 caracteres, contener letras y números, y no debe contener espacios, caracteres especiales o emoji.
                                </small>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="bmd-label-floating">Confirmar contraseña</label>
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                                <small id="passwordHelpBlock" class="form-text text-info">
                                    Confirma la contraseña que acabas de crear.
                                </small>
                            </div>
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <div>
                        <input type="submit" class="btn btn-primary btn-round" value="Guardar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop
