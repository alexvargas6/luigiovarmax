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
                    <h2>Sobre nosotros</h2>
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
                    <span>Estimulando a través de programas educativos de vanguardia la capacidad de producir respuestas originales a cualquier problema actual.</span>
                </div>
            </div>
        </div>
        <div class="row border">
            <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12">
                <div class="about-box">
                    <p> Plantamos como una cualidad humana consistente en pensar, comportarse y expresarse con coherencia y sinceridad, de acuerdo con los valores de verdad y justicia. En su sentido más evidente, aplicarse como el simple respeto a la verdad en relación con el mundo, los hechos y las personas.</p>
                   <!--<a href="#">Read More</a>-->
                </div>
            </div>
            <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12">
                <div class="about-box">
                    <figure><img src="{{asset('https://i0.wp.com/www.iupyucatan.mx/wp-content/uploads/2017/07/cropped-perfiliup.png?fit=512%2C512&ssl=1')}}" alt="img" /></figure>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection