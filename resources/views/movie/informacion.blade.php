<div class="col-md-4 col-xs-12 col-sm-12">
    <div class="sb-it">
        <h6>Director: </h6>
        @foreach($movie->getAlldir as $dir)
        <p><a href="#">{{$dir->getDir->nombre}}</a></p>
        @endforeach
    </div>
    <div class="sb-it">
        <h6>Generos:</h6>
        <p>
            @foreach ($movie->getGeneros as $belic)
            <a href="#">{{ $belic->getGenero->nombre }}, </a>
            @endforeach
        </p>
    </div>
    <div class="sb-it">
        <h6>País y año:</h6>
        <p>{{$movie->año}} ({{$movie->pais}})</p>
    </div>
    <div class="sb-it">
        <h6>Duración:</h6>
        <p>{{$movie->duracion}}</p>
    </div>


    <!--<div class="ads">
        <img src="public/Film/images/uploads/ads1.png" alt="">
    </div>-->
</div>
