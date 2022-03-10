@extends('vargas.nav.all')
@section('bodyClass')
main-layout Books-bg
@endsection
@section('contenido')
<div class="about-bg">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="abouttitle">
                    <h2>Educación continua</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="Books">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="titlepage">
                    <span>
                        El Instituto Universitario Puebla brinda una oferta educativa amplia y variada en diversos niveles, desde preescolar hasta posgrado. Contamos con la certificación ISO 9001-2015, lo que garantiza calidad en todos nuestros programas de estudio.</span> 
                </div>
            </div>
        </div>
        <div class="row box">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                <div class="book-box">
                    <figure><img src="{{asset('public/vargas/images/book-1.jpg')}}" alt="img"/></figure>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="book-box">
                    <figure><img src="{{asset('public/vargas/images/book-2.jpg')}}" alt="img"/></figure>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                <div class="book-box">
                    <figure><img src="{{asset('public/vargas/images/book-1.jpg')}}" alt="img"/></figure>
                </div>
            </div>
            <div class="col-md-6 offset-md-3">
                <p>Cursos de actualización para diversas áreas y especialidades, con horarios flexibles y costos accesibles.</p>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="read-more">
                        <!--<a href="#">Read More</a>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection