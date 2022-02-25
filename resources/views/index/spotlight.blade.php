<div class="col-md-4">
    <div class="sidebar">
        <div class="ads">
            <img src="" alt="" width="336" height="296">
        </div>
        <div class="celebrities">
            <h4 class="sb-title">Spotlight Actores</h4>
            @foreach ($actores->take(5) as $actor)
                <div class="celeb-item">
                    <a href="#"><img src="{{ $actor->foto }}" alt="" width="70" height="70"></a>
                    <div class="celeb-author">
                        <h6><a href="#">{{ $actor->nombre }}</a></h6>
                        <span>Actor</span>
                    </div>
                </div>
            @endforeach
            <a href="#" class="btn">Ver todos<i class="ion-ios-arrow-right"></i></a>
        </div>
    </div>
</div>
