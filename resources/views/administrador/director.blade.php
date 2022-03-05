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
        <!-- modal -->
        @include('upload.directorModal')
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#directorModal">
            Añadir director
        </button>
        <hr>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Actores</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>NOMBRE</th>
                                <th>NACIONALIDAD</th>
                                <th>NACIMIENTO</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>NOMBRE</th>
                                <th>NACIONALIDAD</th>
                                <th>NACIMIENTO</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($dir as $di)
                                <tr>

                                    <td>
                                        {{ $di->nombre }}
                                    </td>
                                    <td>{{ $di->nacionalidad }}</td>
                                    <td>{{ $di->fecha }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
