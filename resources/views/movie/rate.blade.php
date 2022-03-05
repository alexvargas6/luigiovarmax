<div class="movie-rate">
    <div class="rate">
        <i class="ion-android-star"></i>
        <p>
            <span>{{$movie->promedioCal($movie->id)}}</span>/10<br>
            <span class="rv">{{$movie->total_visitas}} Vistas</span>
        </p>
    </div>
    <div class="rate-star">
        <p>Calificación promedio: </p>
        @for ($i = 0; $i < $movie->promedioCal($movie->id); $i++)
            <i class="ion-android-star"></i>
            @endfor
            @for ($i = 10; $i > $movie->promedioCal($movie->id); $i--)
            <i class="ion-android-star last"></i>
            @endfor
    </div>
</div>
