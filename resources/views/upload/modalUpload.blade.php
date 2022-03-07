<!-- Modal -->
<div class="modal fade" id="movieModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('storeVideo') }}" method="post">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Añadir pelicula</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="mb-3 row">
                        <label for="titulo" class="col-sm-2 col-form-label">Titulo</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control-plaintext" id="titulo"
                                placeholder="titulo de la pelicula" name="titulo">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="portada" class="col-sm-2 col-form-label">Portada</label>
                        <div class="col-sm-10">
                            <input placeholder="Link de la imagen para la portada" type="text" class="form-control"
                                id="portada" name="portada">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="dur" class="col-sm-2 col-form-label">duración</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="dur" placeholder="00:00" name="duracion">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label">descripción</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                name="descripcion"></textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="url" class="col-sm-2 col-form-label">URL</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="url"
                                placeholder="Link de la pelicula" name="url">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="pais" class="col-sm-2 col-form-label">País</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="pais" placeholder="País" name="pais">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="trailer" class="col-sm-2 col-form-label">Trailer</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="trailer" placeholder="Trailer"
                                name="trailer">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">X</button>
                    <button type="submit" class="btn btn-primary">Guardar cambios</button>
                </div>
            </form>
        </div>
    </div>
</div>
