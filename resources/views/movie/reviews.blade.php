<div id="reviews" class="tab review">
    <div class="row">
        <div class="rv-hd">
            <div class="div">
                <h3>Comentarios</h3>
                <h2>{{$movie->titulo}}</h2>
            </div>
            <a href="#" class="redbtn">Write Review</a>
        </div>
        <div class="topbar-filter">
            <p>Hay <span>{{$movie->getAllCalificaciones->count()}} reviews</span> en total</p>
            <!--<label>Filtrar por by:</label>
            <select>
                <option value="popularity">Popularity Descending</option>
                <option value="popularity">Popularity Ascending</option>
                <option value="rating">Rating Descending</option>
                <option value="rating">Rating Ascending</option>
                <option value="date">Release date Descending</option>
                <option value="date">Release date Ascending</option>
            </select>-->
        </div>
        @foreach($movie->getAllCalificaciones as $cal)
        <div class="mv-user-review-item">
            <div class="user-infor">
                <img src="{{ asset($cal->getUsuario->foto) }}" alt="perfil">
                <div>
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
                        {{$cal->created_at}} <a href="#"> {{$cal->getUsuario->name}}</a>
                    </p>
                </div>
            </div>
            <p>{{$cal->comentario}}</p>
        </div>
        @endforeach
        <div class="topbar-filter">
            <div class="pagination2">
                <span>Page 1 of 6:</span>
                <a class="active" href="#">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <a href="#">5</a>
                <a href="#">6</a>
                <a href="#"><i class="ion-arrow-right-b"></i></a>
            </div>
        </div>
    </div>
</div>
