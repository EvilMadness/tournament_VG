@extends('layouts.main')
@section('title', 'Torneo Smash')
@section('type', 'signup-page sidebar-collapse')
@section('content')
<div class="wrapper">
    <div class="page-header clear-filter" filter-color="dark">
        <div class="page-header-image" data-parallax="true" style="background-image:url('./assets/img/SmashBros2.jpg');">
        </div>
        <br><br><br><br><br><br><br>
        <div class="container">
            <div class="content-center brand">
                <img class="n-logo" src="{{asset('./assets/img/smashlogo.png')}}" alt="">
                <h1 class="h1-seo">Torneo de Videojuegos</h1>
                <h3>Super Smash Bros</h3>
            </div>
        </div>
    </div>
</div>
@stop
