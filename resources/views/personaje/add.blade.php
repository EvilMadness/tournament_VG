@extends('layouts.main')
@section('title', $title)
@section('type', 'index-page sidebar-collapse')
@section('content')
@include('sweetalert::alert')
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
                <form id="form" class="form-horizontal" name="form_busqueda" action="@if(@empty($personajes)) {{ route('personaje.store')}} @else {{route('personaje.update', $personajes->id)}} @endif" method="post" entype="application/x-www-form-urlencoded" onsubmit="disable('submit')">
                    @if(@empty($personajes))
                    @else
                    {{method_field('PUT')}}
                    @endif
                    <div class="row text-left">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="nombre">Nombre del personaje</label>
                                <input type="text" class="form-control" name="nombre" placeholder="Ingresa el nombre del personaje" value="@if(!@empty($personajes)) {{$personajes->nombre}} @endif">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="descripcion">Descripción</label>
                                <textarea class="form-control" name="descripcion" id="descripcion" cols="30" rows="10">@if(!@empty($personajes)){{$personajes->descripcion}}@endif</textarea>
                            </div>
                        </div>
                        <div class="col-sm-12 was-validated">
                            <div class="form-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="imagen" lang="es" required>
                                    <label class="custom-file-label" for="imagen">Seleccionar Archivo</label><p><br></p>
                                    <div class="invalid-feedback">No se ha seleccionado ningún archivo</div>
                                    <div class="valid-feedback">Archivo seleccionado</div>
                                </div>
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
