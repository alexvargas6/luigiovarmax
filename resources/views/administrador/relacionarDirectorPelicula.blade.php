@extends('administrador.navbarAdmin')

@section('content')
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
        @include('upload.dirMovieModal')
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#actorMovie">
            relacionar
        </button>
        <hr>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Relación</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>DIRECTOR</th>
                                <th>PELICULA</th>
                                <th>PORTADA</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>DIRECTOR</th>
                                <th>PELICULA</th>
                                <th>PORTADA</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($dirMov as $dm)
                                <tr>
                                    <td>
                                        {{ $dm->id }}
                                    </td>
                                    <td>
                                        {{ $dm->getDir->nombre }}
                                    </td>
                                    <td>
                                        {{ $dm->getPeli->titulo }}
                                    </td>
                                    <td><img src="{{ asset($dm->getPeli->portada) }}" alt="{{ $dm->getPeli->titulo }}"
                                            width="70"></td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
