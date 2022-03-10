@extends('vargas.nav.all')
@section('bodyClass')
main-layout home_page
@endsection

@section('contenido')
<!-- end header -->
<section class="slider_section">
    <div id="myCarousel" class="carousel slide banner-main" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="first-slide" src="{{asset('https://www.iupuebla.edu.mx/img/campus/merida.jpg')}}" alt="First slide">
                <div class="container">
                    <div class="carousel-caption relative">
                        <h1>HOLA!<br>Bienvenido al <br> IUP</h1>
                        <p>Estas en el portal del<br> Instituto universitario de puebla<br> Sientete bienvenido </p>
                        <div class="button_section"> <a class="main_bt" href="https://www.iupuebla.edu.mx/index.html">VER MÁS</a>  </div>
                        <ul class="locat_icon">
                            <li> <a href="https://www.facebook.com/iupyucatan/"><img src="{{asset('public/vargas/icon/facebook.png')}}"></a></li>
                            <li> <a href="https://instagram.com/iupyucatan?utm_medium=copy_link"><img src="{{asset('public/vargas/icon/instagram.png')}}"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="third-slide" src="{{asset('https://www.iupuebla.edu.mx/img/campus/puebla.jpg')}}" alt="Third slide">
                <div class="container">
                    <div class="carousel-caption relative">
                        <h1>HOLA!<br>Bienvenido al <br> IUP</h1>
                        <p>Estas en el portal del<br> Instituto universitario de puebla<br> Sientete bienvenido </p>
                        <div class="button_section"> <a class="main_bt" href="https://www.iupuebla.edu.mx/index.html">VER MÁS</a>  </div>
                        <ul class="locat_icon">
                            <li> <a href="https://www.facebook.com/iupyucatan/"><img src="{{asset('public/vargas/icon/facebook.png')}}"></a></li>
                            <li> <a href="https://instagram.com/iupyucatan?utm_medium=copy_link"><img src="{{asset('public/vargas/icon/instagram.png')}}"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>
<!-- about -->
<div class="about">
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
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="aboutheading">
                    <h2>Sobre <strong class="black">nosotros</strong></h2>
                    <span>
                        Promover una educación integral con alto valor humano para la formación de individuos con conciencia social, comprometidos con el desarrollo y cuidado de su comunidad y medio ambiente.
                    </span>
                </div>
            </div>
        </div>
        <div class="row border">
            <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12">
                <div class="about-box">
                    <p>Proporcionamos un entorno especial para el aprendizaje, el trabajo en equipo y la innovación a través de servicios educativos de calidad para formar individuos íntegros con una sólida conciencia de compromiso y responsabilidad social.</p>
                    <a href="{{route('aboutS')}}">Leer más</a>
                </div>
            </div>
            <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12">
                <div class="about-box">
                    <figure><img src="{{asset('public/vargas/images/about.png')}}" alt="img" /></figure>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- end about -->
<!-- Library -->
<div class="Library">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="titlepage">
                    <h2>Código<strong class="black"> de ética </strong></h2>
                    <span>Somos una institución particular consciente de la responsabilidad y el compromiso con nuestra sociedad y respondemos con una propuesta educativa de alto valor académico y económicamente accesible.</span> 
                </div>
            </div>
        </div>
    </div>
    <div class="bg">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="Library-box">
                        <figure><img src="{{asset('public/vargas/images/Library-.jpg')}}" alt="#"/></figure>
                    </div>
                </div>
            </div>
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
<!-- end Library -->
<!--Books -->
<div class="Books">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="titlepage">
                    <h2>Nuestra <strong class="black"> visión </strong></h2>
                    <span>Consolidarnos como una institución dedicada a la educación con alto valor humano, vinculada estrechamente a la sociedad mediante programas de vanguardia; comprometida a impulsar la investigación y el desarrollo de talentos, a través de una academia altamente profesional; con excelentes servicios y procesos permanentes de evaluación integral.</span> 
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
                <p>Explora el campus de IUP en la ciudad de Puebla. Conoce nuestras aulas, laboratorios y auditorios.</p>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="read-more">
                        <!--<a href="#">Ver más</a>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end Books -->
<!-- Contact -->
<div class="Contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage3">
                    <h2>Contacto</h2>
                </div>
            </div>
        </div>
        <form method="post" action="{{route('mandaMsj')}}">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                            <input name="name" class="form-control" placeholder="Name" type="Name">
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                            <input name="tel" class="form-control" placeholder="Phone Number" type="number">
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                            <input name="email" class="form-control" placeholder="Email" type="Email">
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                            <textarea name="mensaje" class="textarea" placeholder="Message"></textarea>
                        </div>
                    </div>
                </div>
                <button class="send-btn">Send</button>
            </div>
        </form>
    </div>
</div>
@endsection