@extends('layouts.main')
@section('title', $title)
@section('type', 'index-page sidebar-collapse')
@section('content')
@include('sweetalert::alert')
{{-- Titulo o encabezado --}}
<div class="page-header page-header-small-tiny header-filter clear-filter" data-parallax="true" style="background-image: url('{{asset('./assets/img/black.jpg')}}');" >
    <div class="container">
        <div class="row">
            <h1 class="title">{{$title}}</h1>
        </div>
    </div>
</div>
<div class="main main-raised">
    <div class="container">
        <div class="section text-center">
            <div class="col-md-8 ml-auto mr-auto">
                <form id="form" class="form-horizontal" name="form_busqueda" action="@if(@empty($carreras)) {{ route('carrera.store')}} @else {{route('carrera.update', $carreras->id)}} @endif" method="post" entype="application/x-www-form-urlencoded" onsubmit="disable('submit')">
                    @if(@empty($carreras))
                    @else
                        {{method_field('PUT')}}
                    @endif
                    <div class="row text-left">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="nombre">Nombre de la carrera</label>
                                <input type="text" class="form-control" name="nombre" placeholder="Escribe el nombre de la carrera" value="@if(!@empty($carreras)) {{$carreras->nombre}} @endif">
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
