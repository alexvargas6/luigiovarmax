<!-- Modal -->
<div class="modal fade" id="catMovie" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('storeCat') }}" method="post">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Añadir categoria</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="mb-3 row">
                        <label for="titulo" class="col-sm-2 col-form-label">Titulo categoria</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control-plaintext" id="titulo"
                                placeholder="titulo de la categoria" name="nombre">
                        </div>
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
