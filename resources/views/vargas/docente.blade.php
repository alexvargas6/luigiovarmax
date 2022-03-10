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
                    <h2>Formación docente</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Library -->
<div class="Library">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="titlepage">
                    <span>Nuestros cursos de actualización y formación para docentes ofrecen una educación continua y de calidad para profesores de todos los niveles y especializaciones a través de un enfoque en el trabajo colaborativo y desempeño catedrático.</span> 
                </div>
            </div>
        </div>
    </div>
    <div class="bg">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="Library-box">
                        <figure><img src="{{asset('public/vargas/images/docente.jpg')}}" alt="docente"/></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="read-more">
                   <!-- <a href="#">Read More</a>-->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection