@extends('layouts.main')
@section('title', $title)
@section('type', 'index-page sidebar-collapse')
@section('content')
@include('sweetalert::alert')
{{-- Titulo o encabezado --}}
<div class="page-header page-header-small-tiny header-filter clear-filter" data-parallax="true" style="background-image: url('{{asset('./assets/img/black.jpg')}}');" >
    <div class="container">
        <div class="row">
            <h1 style="font-family: Roboto" class="title">{{$title}}</h1>
        </div>
    </div>
</div>
<div class="main main-raised">
    <div class="container">
        <div class="section text-center">
            <div class="col-md-8 ml-auto mr-auto">
                <form id="form" class="form-horizontal" name="form_busqueda" action="{{route('concursante.update')}}" method="post" entype="application/x-www-form-urlencoded">
                    <div class="row text-left">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="nombre">Nombre(s)</label>
                                <input type="text" class="form-control" id="nombre" placeholder="Escribe tu nombre" value="$concursantes->$nombre">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="apaterno">Apellido Paterno</label>
                                <input type="text" class="form-control" id="apaterno" placeholder="Escribe tu apellido paterno" value="$concursantes->$apaterno">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="amaterno">Apellido Materno</label>
                                <input type="text" class="form-control" id="amaterno" placeholder="Escribe tu apellido materno" value="$concursantes->$amaterno">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="id_personaje">Personaje</label>
                                <select class="form-control select" name="id_personaje" id="id_personaje">
                                    <option value="0">---Seleccionar---</option>
                                    @foreach($personajes as $personaje)
                                    <option>{{$personaje->nombre}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="nickname">Nickname / Username</label>
                                <input type="text" class="form-control" id="nickname" placeholder="Escribe tu nombre de usuario" value="$concursantes->$nickname">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="id_carrera">Carrera</label>
                                <select name="id_carrera" id="id_carrera">
                                    <option value="1" selected></option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="id_escuela">Escuela</label>
                                <select name="id_escuela" id="id_escuela">
                                    <option value="1" selected></option>
                                </select>
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
