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
                    <h2>Licenciaturas</h2>
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
                    <span>

                        El Instituto Universitario Puebla es una casa de estudios con más de 25 años de experiencia, enfocada en formar profesionistas altamente capacitados, dotándolos de las herramientas que les permitan incorporarse al mundo laboral siendo competitivos en cada área que se desempeñen.</span> 
                </div>
            </div>
        </div>
    </div>
    <div class="bg">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="Library-box">
                        <figure><img src="{{asset('https://www.iupuebla.edu.mx/img/cabeceras/noescolarizado.jpg')}}" alt="library"/></figure>
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