<div class="trailers">
    <div class="container">
        <div class="row ipad-width">
            <div class="col-md-12">
                <div class="title-hd">
                    <h2>Trailer</h2>
                    <a href="#" class="viewall">View all <i class="ion-ios-arrow-right"></i></a>
                </div>
                <div class="videos">
                    <div class="slider-for-2 video-ft">
                        @foreach ($videos as $vid)
                            <div>
                                <iframe class="item-video" src="#" data-src="{{ $vid->url }}"></iframe>
                            </div>
                        @endforeach
                    </div>
                    <div class="slider-nav-2 thumb-ft">
                        @foreach ($videos as $vid)
                            <div class="item">
                                <div class="trailer-img">
                                    <img src="{{ $vid->portada }}" alt="{{ $vid->titulo }}" width="360"
                                        height="189">
                                </div>
                                <div class="trailer-infor">
                                    <h4 class="desc">{{ $vid->getMovie->titulo }}</h4>
                                    <p>{{ $vid->getMovie->duracion }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
