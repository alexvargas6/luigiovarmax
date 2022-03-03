<!-- movie cast -->
<div class="mvcast-item">
    @foreach($movie->getActores as $actormov)
    <div class="cast-it">
        <div class="cast-left">
            <img src="{{asset($actormov->getActor->foto)}}" alt="">
            <a href="#">{{$actormov->getActor->nombre}}</a>
        </div>
        <p>... {{$actormov->getActor->nombre}}</p>
    </div>
    @endforeach
</div>
