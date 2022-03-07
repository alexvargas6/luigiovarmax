<div class="modal fade" id="usModalLvl" tabindex="-1" role="dialog" aria-labelledby="usModalLvl" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('cambiarNivel') }}" method="post">
                <div class="modal-header">
                    <h5 class="modal-title" id="usModalLvl">Modificar Usuario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">USUARIO</label>
                        <input class="form-control form-control-lg" type="text" placeholder="ESCRIBE EL ID DEL USUARIO"
                            aria-label=".form-control-lg example" name="id">
                        <select class="form-select" name="nivel">
                            <option selected>Selecciona el nivel</option>
                            @foreach ($nivel as $lvl)
                                <option value="{{ $lvl->id }}">{{ $lvl->titulonivel }}</option>
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
