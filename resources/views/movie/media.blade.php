<div id="media" class="tab">
    <div class="row">
        <div class="rv-hd">
            <div>
                <h3>Videos y fotos de</h3>
                <h2>{{ $movie->titulo }}</h2>
            </div>
        </div>
        <div class="title-hd-sm">
            <h4>Videos <span>({{ $movie->getVideos->count() }})</span></h4>
        </div>
        <div class="mvsingle-item media-item">
            @foreach ($movie->getVideos as $videos)
                <div class="vd-item">
                    <div class="vd-it">
                        <img class="vd-img" src="{{ asset($videos->portada) }}" alt="">
                        <a class="fancybox-media hvr-grow" href="{{ $videos->url }}"><img
                                src="{{ asset('public/Film/images/uploads/play-vd.png') }}" alt=""></a>
                    </div>
                    <div class="vd-infor">
                        <h6> <a href="{{ $videos->url }}">{{ $videos->title }}</a></h6>
                        <p class="time">{{ $videos->duracion }}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="title-hd-sm">
            <h4>Photos <span> ({{ $movie->getFotos->count() }})</span></h4>
        </div>
        <div class="mvsingle-item">
            @foreach ($movie->getFotos as $fotos)
                <a class="img-lightbox" data-fancybox-group="gallery" href="{{ asset($fotos->imagen) }}"><img
                        src="{{ asset($fotos->imagen) }}" alt="{{ $fotos->titulo }}"></a>
            @endforeach
        </div>
    </div>
</div>
