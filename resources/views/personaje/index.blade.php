@extends('layouts.main')
@section('title', $title)
@section('type', 'index-page sidebar-collapse')
@section('content')

<div id="modal"></div>
{{-- Titulo o encabezado --}}
<div class="page-header page-header-small-tiny header-filter clear-filter" data-parallax="true" style="background-image: url('{{asset('./assets/img/black.jpg')}}');"  >
    <div class="container">
        <div class="row">
            <h1 class="title">{{$title}}</h1>
        </div>
    </div>
</div>
{{-- divs necesarios para el contenido --}}
<div class="main main-raised">
    <div class="container">
        <div class="section text-center">
            <div class="row">
                <div class="col-md-3">
                    <div class="card card-blog">
                        <div class="card-image">
                            <img class="img rounded-circle" style="width: 5rem;" src="{{asset('./assets/img/personajes/1.jpg')}}">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">Aldeano</h3>
                            <p class="card-description">Coge un objeto o un proyectil y lo guarda en el bolsillo. Pulsa de nuevo el botón para sacarlo</p>
                        </div>
                        <form action="" method="POST">
                            {{ csrf_field() }}
                            <a href="">
                                <button type="button" rel="tooltip" class="btn btn-success btn-fab btn-round" data-toggle="tooltip" data-placement="top" title="Editar"><i class="now-ui-icons ui-2_settings-90"></i></button>
                            </a>
                            <a href="">
                                <button type="button" rel="tooltip" class="btn btn-danger btn-fab btn-round" data-toggle="tooltip" data-placement="top" title="Eliminar"><i class="now-ui-icons ui-1_simple-remove"></i></button>
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
