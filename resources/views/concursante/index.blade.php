@extends('layouts.main')
@section('title', $title)
@section('type', 'index-page sidebar-collapse')
@section('content')
@include('sweetalert::alert')
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
            {{-- Inicio del contenido --}}
            @if (session('toast'))

            @endif
            <div>
                @isset($concursantes)
                @if($concursantes)
                <table class="table">
                    <thead>
                    <tr>
                        <th class="text-center">Nickname</th>
                        <th class="text-center">Personaje</th>

                        <th class="text-center">Nombre</th>
                        <th class="text-center">Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($concursantes as $concursante)
                    <tr>
                        <td>{{$concursante->nickname}}</td>
                        <td>{{$concursante->personaje->nombre}}</td>

                        <td>{{$concursante->nombre}}</td>

                        <td>
                            <form id="delete_form_{{ $concursante->id }}" action="{{ route('concursante.destroy' , $concursante->id)}}" method="POST"
                                  onsubmit="return deleteElement(
                                      'Concursante {{$concursante->nombre}}.',
                                      'Será eliminado. ¿Está seguro?',
                                      'delete_form_{{ $concursante->id }}',
                                      event);">
                                <a href='{{route('concursante.show', $concursante->id)}}'>
                                <button type="button" class="btn btn-info btn-fab btn-round"  data-toggle="tooltip" data-placement="top" title="Detalles"><i class="now-ui-icons ui-1_calendar-60"></i></button>
                                </a>
                                <a href='{{route('concursante.edit', $concursante->id)}}'>
                                <button type="button" rel="tooltip" class="btn btn-success btn-fab btn-round" data-toggle="tooltip" data-placement="top" title="Editar"><i class="now-ui-icons ui-2_settings-90"></i></button>
                                </a>
                                <input name="_method" type="hidden" value="DELETE">
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger btn-fab btn-round" data-toggle="tooltip" data-placement="top" title="Eliminar"><i class="now-ui-icons ui-1_simple-remove"></i></button>

                            </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                @else
                <div>
                    <h2 >No hay ningún registro de {{$title}}</h2>
                </div>
                @endif
                @endisset
                <a href='{{ route('concursante.create') }}'>
                <button type="button" class="btn btn-primary btn-round" data-toggle="tooltip" data-placement="top" title="Añadir nuevo concursante"><i class="now-ui-icons ui-1_simple-add"></i> Registrar</button>
                </a>
            </div>
            {{-- cierre de divs--}}
        </div>
    </div>
</div>
@stop
