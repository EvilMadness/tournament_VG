@extends('layouts.main')
@section('title', 'Torneo Smash')
@section('type', 'login-page sidebar-collapse')
@section('content')
<div class="page-header clear-filter" filter-color="orange">
    <div class="page-header-image" style="background-image:url({{asset('./assets/img/SmashBros1.jpg')}});"></div>
    <div class="content">
        <div class="container">
            <div class="col-md-4 ml-auto mr-auto">
                <div class="card card-login card-plain">
                    <form class="form" method="POST">
                        <div class="card-header text-center">
                            <div class="logo-container">
                                <img src="{{asset('./assets/img/smashlogo.png')}}" alt="">
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="input-group no-border input-lg {% if form.username.errors %}has-danger{% endif %}">
                                <div class="input-group-prepend">
                                        <span class="input-group-text">
                                          <i class="now-ui-icons users_circle-08"></i>
                                        </span>
                                </div>
                                <input type="text" class="form-group">
                            </div>
                            <span class="text-danger text-sm-left"></span>
                            <div class="input-group no-border input-lg {% if form.password.errors %}has-danger{% endif %}">
                                <div class="input-group-prepend">
                                        <span class="input-group-text">
                                          <i class="now-ui-icons ui-1_lock-circle-open"></i>
                                        </span>
                                </div>
                                <input type="password" class="form-group">
                            </div>
                            <span class="text-danger text-sm-left"></span>
                        </div>
                        <div class="card-footer text-center">
                            <button type="submit" class="btn btn-primary btn-round btn-lg btn-block">Ingresar</button>
                            <div class="pull-right">
                                <h6>
                                    <a href="" class="link">Olvidé contraseña</a>
                                </h6>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
