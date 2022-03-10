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
                    <h2>CAMPUS</h2>
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
                        Contamos con diversos planteles a nivel nacional, cada uno con una oferta educativa apta a las necesidades de nuestros alumnos. Conoce cada uno de los programas educativos con los que cuentan nuestros campus.</span> 
                </div>
            </div>
        </div>
    </div>
    <div class="bg">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="Library-box">
                        <figure><img src="{{asset('https://www.iupuebla.edu.mx/img/cabeceras/campus.jpg')}}" alt="library"/></figure>
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