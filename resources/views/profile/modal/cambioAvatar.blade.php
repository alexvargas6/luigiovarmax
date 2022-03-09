<div class="modal fade" id="avatarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{route('upFoto')}}" class="user" method="post">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">>Cambiar foto de perfil</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="hidden" name="id" value="{{$usuario->id}}">
                        <label for="exampleInputEmail1">URL DE LA IMAGEN</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="foto" aria-describedby="emailHelp" placeholder="COLOCA AQUÍ LA URL DE TU FOTO">
                        <small id="emailHelp" class="form-text text-muted">COPIA Y PEGA LA URL DE TU FOTO.</small>
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
