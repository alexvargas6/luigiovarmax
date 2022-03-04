<div id="cast" class="tab">
    <div class="row">
        <h3>Cast</h3>
        <h2>{{$movie->titulo}}</h2>
        <!-- //== -->
        <div class="title-hd-sm">
            <h4>Director</h4>
        </div>
        @foreach($movie->getAlldir as $dir)
        <div class="mvcast-item">
            <div class="cast-it">
                <div class="cast-left">
                    <h4>{{$dir->getDir->nacionalidad}}</h4>
                    <a href="#">{{$dir->getDir->nombre}}</a>
                </div>
                <p>... Director</p>
            </div>
        </div>
        @endforeach


        <!-- //== -->
        <!-- //== -->
        <div class="title-hd-sm">
            <h4>Cast</h4>
        </div>
        <div class="mvcast-item">
            @foreach($movie->getActores as $actormov)
            <div class="cast-it">
                <div class="cast-left">
                    <img src="{{asset($actormov->getActor->foto)}}" alt="{{$actormov->getActor->nombre}}">
                    <a href="#">{{$actormov->getActor->nombre}}</a>
                </div>
                <p>... {{$actormov->getActor->nombre}}</p>
            </div>
            @endforeach
        </div>
        <!-- //== -->
    </div>
</div>
