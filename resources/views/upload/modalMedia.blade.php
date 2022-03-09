<div class="modal fade" id="mediaModal" tabindex="-1" role="dialog" aria-labelledby="directorModal"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{route('storePicture')}}" method="post">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Añadir imagen</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Titulo para la imagen</label>
                        <input class="form-control form-control-lg" type="text" placeholder="nombre de la imagen"
                               aria-label=".form-control-lg example" name="titulo">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">URL PARA LA IMAGEN</label>
                        <input class="form-control form-control-lg" type="text" placeholder="URL DE LA IMAGEN"
                               aria-label=".form-control-lg example" name="imagen">
                    </div>
                    <div class="mb-3">
                        <select class="form-select" name="idmovie" aria-label="Default select example">
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
