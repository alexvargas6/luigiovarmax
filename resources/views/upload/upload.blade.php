@extends('administrador.navbarAdmin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    @if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
    @endif
    @if (\Session::has('ERROR'))
    <div class="alert alert-warning">
        <ul>
            <li>{!! \Session::get('ERROR') !!}</li>
        </ul>
    </div>
    @endif
    <!-- modal -->

    @include('upload.modalUpload')

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#movieModal">
        Añadir pelicula
    </button>

    <hr>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Movies</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Titulo</th>
                            <th>Portada</th>
                            <th>duración</th>
                            <th>descripción</th>
                            <th>url</th>
                            <th>País</th>
                            <th>Total vistas</th>
                            <th>Subido</th>
                            <th>Trailer</th>

                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Titulo</th>
                            <th>Portada</th>
                            <th>duración</th>
                            <th>descripción</th>
                            <th>url</th>
                            <th>País</th>
                            <th>Total vistas</th>
                            <th>Subido</th>
                            <th>Trailer</th>

                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($movies as $mov)
                        <tr>
                            <td>{{ $mov->titulo }}</td>
                            <td><img src="{{ asset($mov->portada) }}" alt="{{ $mov->titulo }}" width="70">
                            </td>
                            <td>{{ $mov->duracion }}</td>
                            <td>{{ $mov->descripcion }}</td>
                            <td>{{ $mov->url }}</td>
                            <td>{{ $mov->pais }}</td>
                            <td>{{ $mov->total_visitas }}</td>
                            <td>{{ $mov->upload }}</td>
                            <td>{{ $mov->trailer }}</td>
                            @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection
