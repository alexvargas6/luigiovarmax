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
        @include('upload.modalCUsuario')
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#usModalLvl">
            Asignar nivel
        </button>
        <hr>
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
                                <th>FOTO</th>
                                <th>NOMBRE</th>
                                <th>EMAIL</th>
                                <th>NIVEL</th>
                                <th>Bloqueado?</th>
                                <th>CREADO EN</th>
                                <th>EDITADO</th>
                                <th>BLOQUEADO</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>FOTO</th>
                                <th>NOMBRE</th>
                                <th>EMAIL</th>
                                <th>NIVEL</th>
                                <th>Bloqueado?</th>
                                <th>CREADO EN</th>
                                <th>EDITADO</th>
                                <th>BLOQUEADO</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($user as $us)
                                <tr>
                                    <td>{{ $us->id }}</td>
                                    <td>
                                        <img src="{{ asset($us->foto) }}" alt="{{ $us->nombre }}" width="70">
                                    </td>
                                    <td>
                                        {{ $us->name }}
                                    </td>
                                    <td>{{ $us->email }}</td>
                                    <td>{{ $us->getNivel->titulonivel }}</td>
                                    <td>
                                        @if ($us->bloqueado == 0)
                                            NO
                                        @else
                                            SI
                                        @endif
                                    </td>
                                    <td>{{ $us->created_at }}</td>
                                    <td>{{ $us->updated_at }}</td>
                                    <td>
                                        <form action="{{ route('bloquear') }}" method="post">
                                            <input class="form-control form-control-lg" type="hidden"
                                                placeholder="ESCRIBE EL ID DEL USUARIO"
                                                aria-label=".form-control-lg example" name="id" value="{{ $us->id }}">
                                            <button type="submit" class="btn btn-primary">Bloquear</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
