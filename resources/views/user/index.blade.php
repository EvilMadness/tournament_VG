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
            <script>
                toast_top({
                    type: 'success',
                    title: '{{session('toast')}}'
                })
            </script>
            @endif
            <div>
                @if(isset($users))
                <table class="table">
                    <thead>
                    <tr>
                        <th>
                            Id
                        </th>
                        <th>
                            nombre
                        </th>
                        <th>
                            email
                        </th>
                        <th>
                            Acciones
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>
                            <form id="delete_form_{{ $user->id }}" action="{{ route('user.destroy' , $user->id)}}" method="POST"
                                  onsubmit="return deleteElement(
                                      'Administrador: {{$user->name}}.',
                                      'Será eliminado. ¿Está seguro?',
                                      'delete_form_{{ $user->id }}',
                                      event);">
                                <a href='{{ route('user.show', $user->id) }}'>
                                <button type="button" class="btn btn-info btn-fab btn-round"  data-toggle="tooltip" data-placement="top" title="Detalles"><i class="material-icons">more_vert</i></button>
                                </a>
                                <a href='{{route('user.edit', $user->id)}}'>
                                <button type="button" rel="tooltip" class="btn btn-success btn-fab btn-round" data-toggle="tooltip" data-placement="top" title="Editar"><i class="material-icons">edit</i></button>
                                </a>
                                <input name="_method" type="hidden" value="DELETE">
                                {{ csrf_field() }}

                                <button type="submit" class="btn btn-danger btn-fab btn-round" data-toggle="tooltip" data-placement="top" title="Eliminar"><i class="material-icons">delete_forever</i></button>

                            </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                @else
                <div>
                    <h2>No hay usuarios</h2>
                </div>
                @endif
                <a href='{{ route('user.create') }}'>
                <button type="button" class="btn btn-primary btn-round" data-toggle="tooltip" data-placement="top" title="Añadir personaje"><i class="now-ui-icons ui-1_simple-add"></i> Añadir</button>
                </a>
            </div>
            {{-- cierre de divs--}}
        </div>
    </div>
</div>
@stop
