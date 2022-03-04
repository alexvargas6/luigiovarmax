<div id="overview" class="tab active">
    <div class="row">
        <div class="col-md-8 col-sm-12 col-xs-12">
            <p>{{$movie->descripcion}}</p>
            <div class="title-hd-sm">
                <h4>Videos y fotos</h4>
                <a href="#" class="time">Ver {{$movie->getVideos->count()}} Videos y {{$movie->getFotos->count()}} Fotos <i class="ion-ios-arrow-right"></i></a>
            </div>
            <div class="mvsingle-item ov-item">
                @foreach($movie->getFotos as $fotos)
                <a class="img-lightbox" data-fancybox-group="gallery" href="{{ asset($fotos->imagen) }}">
                    <img src="{{$fotos->imagen}}" alt="$fotos->titulo">
                </a>
                @endforeach
                @foreach($movie->getVideos as $videos)
                <div class="vd-it">
                    <img class="vd-img" src="{{asset($videos->portada)}}" alt="">
                    <a class="fancybox-media hvr-grow" href="{{$videos->url}}"><img src="{{asset('public/Film/images/uploads/play-vd.png')}}" alt=""></a>
                </div>
                @endforeach
            </div>
            <div class="title-hd-sm">
                <h4>cast</h4>
                <!--<a href="#" class="time">Todos los actores <i class="ion-ios-arrow-right"></i></a>-->
            </div>
            @include('movie.movieCat')
            <div class="title-hd-sm">
                <h4>Opiniones de los usuarios</h4>
                <a href="#reviews" class="time">ver {{$movie->getAllCalificaciones->count()}} Reviews <i class="ion-ios-arrow-right"></i></a>
            </div>
            @include('movie.calificacion')
        </div>

        @include('movie.informacion')

    </div>
</div>
