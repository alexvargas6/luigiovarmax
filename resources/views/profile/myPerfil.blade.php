@extends('navbar.all')
@section('titulo')
    PERFIL
@endsection
@section('content')
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
                            <a href="#"><img src="{{ asset($usuario->foto) }}" alt="Foto"><br></a>
                            <a href="#" class="redbtn">cambiar avatar</a>
                        </div>
                        <div class="user-fav">
                            <p>Detalles de la cuenta</p>
                            <ul>
                                <li class="active"><a href="userprofile.html">Perfil</a></li>
                                <li><a href="userfavoritelist.html">Peliculas favoritas</a></li>

                            </ul>
                        </div>
                        <div class="user-fav">
                            <p>Others</p>
                            <ul>
                                <li><a href="#">Change password</a></li>
                                <li><a href="#">Log out</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--perfil-->
                <div class="col-md-9 col-sm-12 col-xs-12">

                    @yield('perfil')

                </div>
            </div>
        </div>
    </div>
@endsection
