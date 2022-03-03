  <!-- movie user review -->
  @foreach($movie->getAllCalificaciones->take(1) as $cal)
  <div class="mv-user-review-item">
      <h3>{{$cal->comentario}}</h3>
      <div class="no-star">

          <!--@for ($i = 0; $i >= $cal->calificacion; $i++)
          <i class="ion-android-star"></i>
          @endfor-->

          <!--@while ($i <= $cal->calificacion)
              <i class="ion-android-star last"></i>
              @endwhile-->

      </div>
      <p class="time">
          {{$cal->created_at}} por <a href="#"> {{$cal->usuario}}</a>
      </p>
      <p>{{$cal->descripcion}}</p>
  </div>
  @endforeach
