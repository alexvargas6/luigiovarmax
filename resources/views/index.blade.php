@extends('navbar.all')
@section('titulo')
menú
@endsection
@section('content')
<!--contenido-->
@include('index.slider')
<div class="movie-items">
    <div class="container">
        <div class="row ipad-width">
            <div class="col-md-8">
                @include('index.mejorCalificado')
                @include('index.recientes')
            </div>
            @include('index.spotlight')
        </div>
    </div>
</div>
@include('index.trailer')

<!-- latest new v1 section-->
@include('index.blogIndex')
<!--end of latest new v1 section-->
@endsection
