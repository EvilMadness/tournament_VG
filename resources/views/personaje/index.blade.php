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
                @isset($personajes)
                @foreach ($personajes as $personaje)
                <div class="col-md-3">
                    <div class="card2 card-blog">
                        <div class="card-image">
                            <img class="img rounded-circle" style="width: 5rem;" src="../../assets/img/personajes/{{$personaje->imagen}}">
                        </div>
                        <div class="card-body">
                            <h1 type="button" class="btn btn-secondary myTip" data-toggle="collapse" data-placement="top" title="{{$personaje->descripcion}}">
                                {{$personaje->nombre}}
                            </h1>
                        </div>
                        <form action="" method="POST">
                            {{ csrf_field() }}
                            <a href="{{route('personaje.edit', $personaje->id)}}">
                                <button type="button" rel="tooltip" class="btn btn-success btn-fab btn-round" data-toggle="tooltip" data-placement="top" title="Editar"><i class="now-ui-icons ui-2_settings-90"></i></button>
                            </a>
                            <a href="{{route('personaje.destroy', $personaje->id)}}">
                                <button type="button" rel="tooltip" class="btn btn-danger btn-fab btn-round" data-toggle="tooltip" data-placement="top" title="Eliminar"><i class="now-ui-icons ui-1_simple-remove"></i></button>
                            </a>
                        </form>
                    </div>
                </div>
                @endforeach
                @else
                <div>
                    <h2 >No hay ningún registro de {{$title}}</h2>
                </div>
                @endisset
            </div>
            <div>
                <a href='{{ route('personaje.create') }}'>
                <button type="button" class="btn btn-primary btn-round" data-toggle="tooltip" data-placement="top" title="Añadir personaje"><i class="now-ui-icons ui-1_simple-add"></i> Añadir</button>
                </a>
            </div>
        </div>
    </div>
</div>
@stop
