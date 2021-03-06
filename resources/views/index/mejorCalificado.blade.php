<div class="title-hd">
    <h2>Mejor calificadas</h2>
    <a href="{{ route('morRe') }}" class="viewall">Ver todo <i class="ion-ios-arrow-right"></i></a>
</div>
<div class="tabs">
    <ul class="tab-links">
        <li class="active"><a href="#tab1">#Popular</a></li>
        <!--<li><a href="#tab2"> #Coming soon</a></li>
        <li><a href="#tab3"> #Top rated </a></li>
        <li><a href="#tab4"> #Most reviewed</a></li>-->
    </ul>
    <div class="tab-content">
        <div id="tab1" class="tab active">
            <div class="row">
                <div class="slick-multiItem">
                    @foreach ($best as $mov)
                        <div class="slide-it">
                            <div class="movie-item">
                                <div class="mv-img">
                                    <img src="{{ $mov->portada }}" alt="portada" width="185" height="284">
                                </div>
                                <div class="hvr-inner">
                                    <a href="{{ route('movieSingle', $mov->id) }}"> VER <i
                                            class="ion-android-arrow-dropright"></i>
                                    </a>
                                </div>
                                <div class="title-in">
                                    <h6><a href="{{ route('movieSingle', $mov->id) }}">{{ $mov->titulo }}</a></h6>
                                    <p><i class="ion-android-star"></i><span></span>
                                        /10</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
