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
    @include('upload.modalMedia')
    @include('upload.videoModal')
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mediaModal">
        Añadir imagen
    </button>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#videoModal">
        Añadir Video
    </button>
    <hr>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Fotos</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="fotosMovie" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>TITULO</th>
                            <th>IMAGEN</th>
                            <th>PELICULA</th>
                            <th>UPLOAD</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>TITULO</th>
                            <th>IMAGEN</th>
                            <th>PELICULA</th>
                            <th>UPLOAD</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($images as $img)
                        <tr>
                            <td>
                                {{$img->titulo}}
                            </td>
                            <td>
                                <img src="{{ asset($img->imagen) }}" alt="foto" width="70">
                            </td>
                            <td>
                                {{ $img->idmovie }}
                            </td>
                            <td>{{ $img->upload }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection