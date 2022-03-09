@extends('navbar.all')
@section('titulo')
{{ $movie->titulo }}
@endsection
@section('content')
@include('movie.modalRepro')
<div class="hero mv-single-hero">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- <h1> movie listing - list</h1>
                               <ul class="breadcumb">
                                <li class="active"><a href="#">Home</a></li>
                                <li> <span class="ion-ios-arrow-right"></span> movie listing</li>
                               </ul> -->
            </div>
        </div>
    </div>
</div>
<div class="page-single movie-single movie_single">
    <div class="container">
        <div class="row ipad-width2">
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
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="movie-img sticky-sb">
                    <img src="{{ asset($movie->portada) }}" alt="{{ $movie->titulo }}">
                    <div class="movie-btn">
                        <div class="btn-transform transform-vertical red">
                            <div><a href="#" class="item item-1 redbtn"> <i class="ion-play"></i> Ver
                                    Trailer</a></div>
                            <div><a href="{{ $movie->trailer }}" class="item item-2 redbtn fancybox-media hvr-grow"><i class="ion-play"></i></a></div>
                        </div>
                        <div class="btn-transform transform-vertical">
                            <div><a href="#" class="item item-1 yellowbtn" data-toggle="modal" data-target="#reproModal"> <i class="ion-card"></i> Ver
                                    pelicula</a></div>
                            <div><a href="#" class="item item-2 yellowbtn" data-toggle="modal" data-target="#reproModal"><i class="ion-card"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-sm-12 col-xs-12">
                <div class="movie-single-ct main-content">
                    <h1 class="bd-hd">{{ $movie->titulo }} <span>{{ $movie->año }}</span></h1>
                    <div class="social-btn">
                        @auth
                        <!--<form action="{{ route('like') }}" method="post">-->
                        @if(!$existe)
                        <a href="{{route('like',[auth()->user()->id,$movie->id])}}" class="parent-btn"><i class="ion-heart"></i> Añadir a favoritos</a>
                        @endif
                        <!--</form>-->
                        @endauth
                        <div class="hover-bnt">
                            <a href="#" class="parent-btn"><i class="ion-android-share-alt"></i>Comparte</a>
                            <div class="hvr-item">
                                <a href="#" class="hvr-grow"><i class="ion-social-facebook"></i></a>
                                <a href="#" class="hvr-grow"><i class="ion-social-twitter"></i></a>
                                <a href="#" class="hvr-grow"><i class="ion-social-googleplus"></i></a>
                                <a href="#" class="hvr-grow"><i class="ion-social-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                    @include('movie.rate')
                    <div class="movie-tabs">
                        <div class="tabs">
                            <ul class="tab-links tabs-mv">
                                <li class="active"><a href="#overview">Overview</a></li>
                                <li><a href="#reviews"> Comentarios</a></li>
                                <li><a href="#cast"> Cast </a></li>
                                <li><a href="#media"> Media</a></li>
                                @auth
                                @if(!$comentario)
                                <li><a href="#coment"> Comentar y puntuar</a></li>
                                @endif
                                @endauth
                                <!--<li><a href="#moviesrelated"> Peliculas relacionadas</a></li>-->
                            </ul>
                            <div class="tab-content">
                                @include('movie.overide')

                                @include('movie.reviews')

                                @include('movie.cast')

                                @include('movie.media')

                                @include('movie.moviesrelated')

                                @include('movie.comentario')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
