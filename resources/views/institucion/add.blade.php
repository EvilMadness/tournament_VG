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
                <form id="form" class="form-horizontal" name="form_busqueda" action="@if(@empty($escuelas)) {{ route('escuela.store')}} @else {{route('escuela.update', $escuelas->id)}} @endif" method="post" entype="application/x-www-form-urlencoded">
                    @if(@empty($escuelas))
                    @else
                        {{method_field('PUT')}}
                    @endif
                    <div class="row text-left">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="nombre">Nombre de la institución</label>
                                <input type="text" class="form-control" name="nombre" placeholder="Escribe el nombre de la institución eduactiva" value="@if(!@empty($escuelas)) {{$escuelas->nombre}} @endif">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="municipio">Municipio</label>
                                <input type="text" class="form-control" name="municipio" placeholder="Escribe el nombre del municipio" value="@if(!@empty($escuelas)) {{$escuelas->municipio}} @endif">
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
