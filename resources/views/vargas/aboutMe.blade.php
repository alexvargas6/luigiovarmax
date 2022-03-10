@extends('vargas.nav.all')
@section('bodyClass')
main-layout
@endsection
@section('contenido')
<div class="about-bg">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="abouttitle">
                    <h2>Sobre mi</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="about">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="aboutheading">
                    <span>VARGAS PINTO MANUEL ALEJANDRO</span>
                </div>
            </div>
        </div>
        <div class="row border">
            <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12">
                <div class="about-box">
                    <p> Hola, soy estudiante de septimo cuatrimestre de la ING. En sistemas computacionales y desarrollo de software, este es mi proyecto para desarrollo de internet</p>
                    <a href="{{route('single', 1)}}">Leer más</a>
                </div>
            </div>
            <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12">
                <div class="about-box">
                    <figure><img src="{{asset('public/vargas/images/perfil.jpg')}}" alt="img" /></figure>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection