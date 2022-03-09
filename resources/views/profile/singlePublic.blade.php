@extends('navbar.all')
@section('titulo')
PERFIL
@endsection
@section('content')
<div class="hero hero3">
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
<div class="page-single movie-single cebleb-single">
    <div class="container">
        <div class="row ipad-width">
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="mv-ceb">
                    <img src="{{ asset($usuario->foto) }}" alt="perfil">
                    @auth
                    @if(auth()->user()->id == $usuario->id)
                    <a href="{{route('perfil',$usuario->id)}}" class="redbtn">Editar Perfil</a>
                    @endif
                    @endauth
                </div>
            </div>
            <div class="col-md-8 col-sm-12 col-xs-12">
                <div class="movie-single-ct">
                    <h1 class="bd-hd">{{ $usuario->name }}</h1>
                    <p class="ceb-single">{{ $usuario->getNivel }}</p>
                    <div class="social-link cebsingle-socail">
                        <a href="{{ $usuario->facebook }}"><i class="ion-social-facebook"></i></a>
                        <a href="{{ $usuario->instagram }}"><i class="ion-social-instagram"></i></a>
                    </div>
                    <div class="movie-tabs">
                        <div class="tabs">
                            <ul class="tab-links tabs-mv">
                                <li class="active"><a href="#overviewceb">Resumen</a></li>
                                <li><a href="#biography"> biography</a></li>
                                <li><a href="#filmography">Peliculas subidas</a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="overviewceb" class="tab active">
                                    <div class="row">
                                        <div class="col-md-8 col-sm-12 col-xs-12">
                                            <p>
                                                {{ \Illuminate\Support\Str::limit($usuario->sobremi, 80, $end = '...') }}
                                            </p>
                                            <p class="time"><a href="#biography">Ver todo <i class="ion-ios-arrow-right"></i></a></p>

                                            <div class="title-hd-sm">
                                                <h4>Peliculas favoritas</h4>
                                                <a href="#" class="time">..<i class="ion-ios-arrow-right"></i></a>
                                            </div>
                                            <!-- movie cast -->
                                            <div class="mvcast-item">
                                                @foreach ($usuario->getLikes as $like)
                                                <div class="cast-it">
                                                    <div class="cast-left cebleb-film">
                                                        <img src="{{ asset($like->getMovie->portada) }}" alt="portada">
                                                        <div>
                                                            <a href="#">{{ $like->getMovie->titulo }} </a>
                                                            <p class="time">{{ $like->getMovie->pais }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p>... {{ $like->getMovie->año }}</p>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-12 col-sm-12">
                                            <div class="sb-it">
                                                <h6>User: </h6>
                                                <p><a href="#">{{ $usuario->name }}</a></p>
                                            </div>
                                            <div class="sb-it">
                                                <h6>Se unió: </h6>
                                                <p>{{ $usuario->created_at }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="biography" class="tab">
                                    <div class="row">
                                        <div class="rv-hd">
                                            <div>
                                                <h3>Más sobre: </h3>
                                                <h2>{{ $usuario->name }}</h2>
                                            </div>
                                        </div>
                                        <p>{{ $usuario->sobremi }}</p>


                                    </div>
                                </div>



                                <div id="filmography" class="tab">
                                    <div class="row">
                                        <div class="rv-hd">
                                            <div>
                                                <h3>Peliculas subidas por:</h3>
                                                <h2>{{ $usuario->name }}</h2>
                                            </div>

                                        </div>
                                        <div class="topbar-filter">
                                            <p>Se encontraron: <span>{{ count($movies) }}</span></p> movies</span>
                                            en
                                            total</p>
                                        </div>
                                        <!-- movie cast -->
                                        @foreach ($movies as $mov)
                                        <div class="mvcast-item">
                                            <div class="cast-it">
                                                <div class="cast-left cebleb-film">
                                                    <img src="{{ asset($mov->portada) }}" alt="portada">
                                                    <div>
                                                        <a href="#">{{ $mov->pais }} </a>
                                                        <p class="time">{{ $mov->duracion }}</p>
                                                    </div>
                                                </div>
                                                <p>... {{ $mov->duracion }}</p>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
