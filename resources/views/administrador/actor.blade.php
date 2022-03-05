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
        @include('upload.actorModal')
       
        <!-- modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#actrizModal">
            Añadir actor
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
                                <th>FOTO</th>
                                <th>NOMBRE</th>
                                <th>NACIONALIDAD</th>
                                <th>NACIMIENTO</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>FOTO</th>
                                <th>NOMBRE</th>
                                <th>NACIONALIDAD</th>
                                <th>NACIMIENTO</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($actor as $act)
                                <tr>
                                    <td>
                                        <img src="{{ asset($act->foto) }}" alt="{{ $act->nombre }}" width="70">
                                    </td>
                                    <td>
                                        {{ $act->nombre }}
                                    </td>
                                    <td>{{ $act->nacionalidad }}</td>
                                    <td>{{ $act->fecha }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection
