<!-- Modal -->
<div class="modal fade" id="actorMovie" tabindex="-1" role="dialog" aria-labelledby="actorMovie" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('storeDirMov') }}" method="post">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Relacionar Director a pelicula</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <select class="form-select" aria-label="Default select example" name="director">
                            <option selected>Selecciona el Director</option>
                            @foreach ($director as $dir)
                                <option value="{{ $dir->id }}">{{ $dir->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <select class="form-select" name="movie">
                            <option selected>Selecciona la pelicula</option>
                            @foreach ($movies as $mov)
                                <option value="{{ $mov->id }}">{{ $mov->titulo }}</option>
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
