<div class="modal fade" id="directorModal" tabindex="-1" role="dialog" aria-labelledby="directorModal"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('storeDir') }}" method="post">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Añadir director</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                        <input class="form-control form-control-lg" type="text" placeholder="nombre"
                            aria-label=".form-control-lg example" name="nombre">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nacionalidad</label>
                        <input class="form-control form-control-lg" type="text" placeholder="nacionalidad"
                            aria-label=".form-control-lg example" name="nacionalidad">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">FECHA</label>
                        <input class="form-control form-control-lg" type="date" placeholder="FECHA"
                            aria-label=".form-control-lg example" name="fecha">
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
