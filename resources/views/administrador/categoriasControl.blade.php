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
        @include('administrador.modalAddCat')
        @include('administrador.modalMovieCat') 
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#catMovie">
            AÑADIR CATEGORIA
        </button>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#relacionCat">
            RELACIONAR PELICULA Y CATEGORIA
        </button>
        <hr>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">USUARIOS</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>GENERO</th>
                                <th>CREADO EN:</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>GENERO</th>
                                <th>CREADO EN:</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($genero as $gen)
                                <tr>
                                    <td>{{ $gen->id }}</td>
                                    <td>{{ $gen->nombre }}</td>
                                    <td>{{ $gen->created_at }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
