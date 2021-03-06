<div class="slider movie-items">
    <div class="container">
        <div class="row">
            <div class="social-link">
                <p>Siguenos en: </p>
                <a href="#"><i class="ion-social-facebook"></i></a>
                <a href="#"><i class="ion-social-twitter"></i></a>
                <a href="#"><i class="ion-social-googleplus"></i></a>
                <a href="#"><i class="ion-social-youtube"></i></a>
            </div>
            <div class="slick-multiItemSlider">
                @foreach ($movie->take(12) as $movies)
                    <div class="movie-item">
                        <div class="mv-img">
                            <a href="{{ route('movieSingle', $movies->id) }}"><img src="{{ $movies->portada }}"
                                    alt="{{ $movies->titulo }}" width="285" height="437"></a>
                        </div>
                        <div class="title-in">
                            <div class="cate">
                                @foreach ($movies->getGeneros as $belic)
                                    <span class="blue"><a
                                            href="{{ route('listaShow', $belic->getGenero->nombre) }}">{{ $belic->getGenero->nombre }}</a></span>
                                @endforeach
                            </div>
                            <h6><a href="{{ route('movieSingle', $movies->id) }}">{{ $movies->titulo }}</a></h6>
                            <p><i class="ion-android-star"></i><span>{{ $movies->promedioCal($movies->id) }}</span>
                                /10
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
