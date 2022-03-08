<!-- Modal -->
<div class="modal fade" id="modalLvl" tabindex="-1" role="dialog" aria-labelledby="modalLvl" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{route('addLvl')}}" method="post">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">NIVELES</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nombre o titulo</label>
                        <input class="form-control form-control-lg" type="text" placeholder="nombre o titulo del nivel" aria-label=".form-control-lg example" name="titulonivel">
                    </div>
                    <div class="mb-3">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="lvlTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>NIVEL</th>
                                        <th>TITULO</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>NIVEL</th>
                                        <th>TITULO</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($nivel as $lvls)
                                    <tr>
                                        <td>{{ $lvls->nivel }}</td>
                                        <td>{{ $lvls->titulonivel }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
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
