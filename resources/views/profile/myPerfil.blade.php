@extends('navbar.all')
@section('titulo')
PERFIL
@endsection
@section('content')
@include('profile.modal.modalChangePass')
<div class="hero user-hero">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="hero-ct">
                    <h1>{{ $usuario->name }}</h1>
                    <ul class="breadcumb">
                        <li class="active"><a href="{{ route('menu') }}">Home</a></li>
                        <li> <span class="ion-ios-arrow-right"></span>Profile</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="page-single">
    <div class="container">
        <div class="row ipad-width">
            <!--perfil-->
            <div class="col-md-3 col-sm-12 col-xs-12">
                <div class="user-information">
                    <div class="user-img">
                        @include('profile.modal.cambioAvatar')
                        <a href="#"><img src="{{ asset($usuario->foto) }}" alt="Foto"><br></a>
                        <a href="#" data-toggle="modal" data-target="#avatarModal" class="redbtn">cambiar avatar</a>

                    </div>
                    <div class="user-fav">
                        <p>Detalles de la cuenta</p>
                        <ul>
                            <li class="active"><a href="userprofile.html">Perfil</a></li>
                            <!--<li><a href="userfavoritelist.html">Peliculas favoritas</a></li>-->

                        </ul>
                    </div>
                    <div class="user-fav">
                        <p>Others</p>
                        <ul>
                            <li><a href="#" data-toggle="modal" data-target="#passModal">Cambiar password</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#logoutModal">Log out</a></li>
                            @include('administrador.nav.logoutNavModal')
                        </ul>
                    </div>
                </div>
            </div>
            <!--perfil-->
            <div class="col-md-9 col-sm-12 col-xs-12">
                @if (\Session::has('success'))
                <div class="alert alert-success">
                    <ul>
                        <li>{!! \Session::get('success') !!}</li>
                    </ul>
                </div>
                @endif
                @if (\Session::has('ERROR'))
                <div class="alert alert-warning">
                    <ul>
                        <li>{!! \Session::get('ERROR') !!}</li>
                    </ul>
                </div>
                @endif
                @yield('perfil')

            </div>
        </div>
    </div>
</div>
@endsection
