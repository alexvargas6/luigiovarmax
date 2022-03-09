<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="directorModal"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{route('storeVid')}}" method="post">
                <div class="modal-header">
                    <h5 class="modal-title">Añadir video</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Titulo para el video</label>
                        <input class="form-control form-control-lg" type="text" placeholder="Titulo del video"
                               aria-label=".form-control-lg example" name="titulo">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Duración</label>
                        <input class="form-control form-control-lg" type="text" placeholder="00:00"
                               aria-label=".form-control-lg example" name="duracion">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">PORTADA</label>
                        <input class="form-control form-control-lg" type="text" placeholder="URL DE LA IMAGEN"
                               aria-label=".form-control-lg example" name="portada">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">URL DEL VIDEO</label>
                        <input class="form-control form-control-lg" type="text" placeholder="URL DEL VIDEO"
                               aria-label=".form-control-lg example" name="url">
                    </div>
                    <div class="mb-3">
                        <select class="form-select" name="movie" aria-label="Default select example">
                            <option selected>SELECCIONA LA PELICULA</option>
                            @foreach($movies as $mov)
                            <option value="{{$mov->id}}">{{$mov->titulo}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">X</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>
