<div id="overview" class="tab active">
    <div class="row">
        <div class="col-md-8 col-sm-12 col-xs-12">
            <p>{{$movie->descripcion}}</p>
            <div class="title-hd-sm">
                <h4>Videos & Photos</h4>
                <a href="#" class="time">All 5 Videos & 245 Photos <i class="ion-ios-arrow-right"></i></a>
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
                <a href="#" class="time">Full Cast & Crew <i class="ion-ios-arrow-right"></i></a>
            </div>
            @include('movie.movieCat')
            <div class="title-hd-sm">
                <h4>User reviews</h4>
                <a href="#" class="time">See All 56 Reviews <i class="ion-ios-arrow-right"></i></a>
            </div>
            @include('movie.calificacion')
        </div>
        <div class="col-md-4 col-xs-12 col-sm-12">
            <div class="sb-it">
                <h6>Director: </h6>
                <p><a href="#">Joss Whedon</a></p>
            </div>
            <div class="sb-it">
                <h6>Writer: </h6>
                <p><a href="#">Joss Whedon,</a> <a href="#">Stan Lee</a></p>
            </div>
            <div class="sb-it">
                <h6>Stars: </h6>
                <p><a href="#">Robert Downey Jr,</a> <a href="#">Chris Evans,</a> <a href="#">Mark Ruffalo,</a><a href="#"> Scarlett Johansson</a>
                </p>
            </div>
            <div class="sb-it">
                <h6>Genres:</h6>
                <p><a href="#">Action, </a> <a href="#"> Sci-Fi,</a> <a href="#">Adventure</a></p>
            </div>
            <div class="sb-it">
                <h6>Release Date:</h6>
                <p>May 1, 2015 (U.S.A)</p>
            </div>
            <div class="sb-it">
                <h6>Run Time:</h6>
                <p>141 min</p>
            </div>
            <div class="sb-it">
                <h6>MMPA Rating:</h6>
                <p>PG-13</p>
            </div>
            <div class="sb-it">
                <h6>Plot Keywords:</h6>
                <p class="tags">
                    <span class="time"><a href="#">superhero</a></span>
                    <span class="time"><a href="#">marvel
                            universe</a></span>
                    <span class="time"><a href="#">comic</a></span>
                    <span class="time"><a href="#">blockbuster</a></span>
                    <span class="time"><a href="#">final battle</a></span>
                </p>
            </div>
            <div class="ads">
                <img src="public/Film/images/uploads/ads1.png" alt="">
            </div>
        </div>
    </div>
</div>
