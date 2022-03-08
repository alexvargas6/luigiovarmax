@extends('navbar.all')
@section('titulo')
    {{ $titulo }}
@endsection
@section('content')
    <div class="hero common-hero">
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
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="hero-ct">
                        <h1> {{ $titulo }}</h1>
                        <ul class="breadcumb">
                            <li class="active"><a href="{{ route('menu') }}">Home</a></li>
                            <li> <span class="ion-ios-arrow-right"></span> {{ $titulo }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-single movie_list">
        <div class="container">
            <div class="row ipad-width2">
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <div class="topbar-filter">
                        <p>Encontrados <span>{{ $movies->count() }}</span></p> Peliculas</span> en total</p>
                        <!--<label>Sort by:</label>
                            <select>
                                <option value="popularity">Popularity Descending</option>
                                <option value="popularity">Popularity Ascending</option>
                                <option value="rating">Rating Descending</option>
                                <option value="rating">Rating Ascending</option>
                                <option value="date">Release date Descending</option>
                                <option value="date">Release date Ascending</option>
                            </select>
                            <a href="movielist.html" class="list"><i class="ion-ios-list-outline active"></i></a>
                            <a href="moviegrid.html" class="grid"><i class="ion-grid"></i></a>-->
                    </div>
                    @foreach ($movies as $mov)
                        <div class="movie-item-style-2">
                            <img src="{{ asset($mov->portada) }}" alt="{{ $mov->titulo }}">
                            <div class="mv-item-infor">
                                <h6><a href="{{ route('movieSingle', $mov->id) }}">{{ $mov->titulo }}
                                        <span>({{ $mov->año }})</span></a></h6>
                                <p class="rate"><i class="ion-android-star"></i><span>{{8.1}}</span> /10</p>
                                <p class="describe">{{ $mov->descripcion }}</p>
                                </p>
                                <p class="run-time"> {{ $mov->duracion }}’ . <span>{{ $mov->pais }} </span> .
                                    <span>Visitas: {{ $mov->total_visitas }}</span>
                                </p>
                            </div>
                        </div>
                    @endforeach
                    <!--<div class="topbar-filter">
                        <label>Peliculas por página page:</label>
                        <select>
                            <option value="range">5 Movies</option>
                            <option value="saab">10 Movies</option>
                        </select>
                        <div class="pagination2">
                            <span>Page 1 of 2:</span>
                            <a class="active" href="#">1</a>
                            <a href="#">2</a>
                            <a href="#"><i class="ion-arrow-right-b"></i></a>
                        </div>
                    </div>-->
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="sidebar">

                        <!--<div class="ads">
                                     <img src="images/uploads/ads1.png" alt="">
                                     </div>-->
                        <div class="sb-facebook sb-it">
                            <h4 class="sb-title">Find us on Facebook</h4>
                            <iframe src="#"
                                data-src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ftemplatespoint.net%2F%3Ffref%3Dts&tabs=timeline&width=340&height=315px&small_header=true&adapt_container_width=false&hide_cover=false&show_facepile=true&appId"
                                height="315" style="width:100%;border:none;overflow:hidden"></iframe>
                        </div>
                        <div class="sb-twitter sb-it">
                            <h4 class="sb-title">Tweet to us</h4>
                            <div class="slick-tw">
                                <div class="tweet item" id="">
                                    <!-- Put your twiter id here -->
                                </div>
                                <div class="tweet item" id="">
                                    <!-- Put your 2nd twiter account id here -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
