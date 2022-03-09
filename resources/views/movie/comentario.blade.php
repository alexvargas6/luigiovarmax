<div id="coment" class="comment-form">
    @auth
    @if(!$comentario)
    <h4>Aquí puedes comentar</h4>
    <form action="{{route('calificar')}}" method="post">
        <div class="row">
            <div class="col-md-4">
                <input type="hidden" name="usuario" placeholder="usuario" value="{{auth()->user()->id}}">
            </div>
            <div class="col-md-4">
                <input type="hidden" name="movie" placeholder="movie" value="{{$movie->id}}">
            </div>
            <div class="col-md-4">
                <input type="number" name="calificacion" placeholder="Puntua del 1 al 10" min="0" max="10">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <textarea name="comentario" id="message" placeholder="¿Quieres comentar algo?"></textarea>
            </div>
        </div>
        <input class="submit" type="submit" placeholder="submit">
    </form>
    @endif
    @endauth
</div>
