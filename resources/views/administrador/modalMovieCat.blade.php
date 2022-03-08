<!-- Modal -->
<div class="modal fade" id="relacionCat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('storeCatMov') }}" method="post">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Relacionar categoria y pelicula</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="mb-3 row">
                        <label for="exampleFormControlInput1" class="form-label">Pelicula</label>
                        <input class="form-control form-control-lg" type="text"
                            placeholder="ESCRIBE EL ID DE LA PELICULA" aria-label=".form-control-lg example"
                            name="movie">
                    </div>
                    <div class="mb-3 row">
                        <select class="form-select" name="genero">
                            <option selected>Selecciona la categoria</option>
                            @foreach ($genero as $generos)
                                <option value="{{ $generos->id }}">{{ $generos->nombre }}</option>
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
