<!-- movie user review -->
@foreach($movie->getAllCalificaciones->take(1) as $cal)
<div class="mv-user-review-item">
    <h3>{{$cal->titulo}}</h3>
    <div class="no-star">

        @for ($i = 0; $i < $cal->calificacion; $i++)
        <i class="ion-android-star"></i>
        @endfor
        @for ($i = 10; $i > $cal->calificacion; $i--)
        <i class="ion-android-star last"></i>
        @endfor

    </div>
    <p class="time">
        {{$cal->created_at}} por <a href="{{route('single',$cal->getUsuario->id)}}"> {{$cal->getUsuario->name}}</a>
    </p>
    <p>{{$cal->comentario}}</p>
</div>
@endforeach
