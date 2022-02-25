<div class="title-hd">
    <h2>Recientes</h2>
    <a href="#" class="viewall">Ver todo <i class="ion-ios-arrow-right"></i></a>
</div>
<div class="tabs">
    <ul class="tab-links-2">
        <li class="active"><a href="#tab22">#Reciente</a></li>
    </ul>
    <div class="tab-content">
        <div id="tab21" class="tab">
            <div class="row">
                <div class="slick-multiItem">
                    <!--slide-->
                    @foreach ($movie->sortBy('total_visitas')->take(9) as $movies)
                        <div class="slide-it">
                            <div class="movie-item">
                                <div class="mv-img">
                                    <img src="{{ $movies->portada }}" alt="{{ $movies->titulo }}" width="185"
                                        height="284">
                                </div>
                                <div class="hvr-inner">
                                    <a href="moviesingle.html"> Ver <i class="ion-android-arrow-dropright"></i> </a>
                                </div>
                                <div class="title-in">
                                    <h6><a href="#">{{ $movies->titulo }}</a></h6>
                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!--slide-->
                </div>
            </div>
        </div>
    </div>
</div>
