<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- basic -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- mobile metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1">
        <!-- site metas -->
        <title>memorial books</title>
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- bootstrap css -->
        <link rel="stylesheet" href="{{asset('public/vargas/css/bootstrap.min.css')}}">
        <!-- style css -->
        <link rel="stylesheet" href="{{asset('public/vargas/css/style.css')}}">
        <!-- Responsive-->
        <link rel="stylesheet" href="{{asset('public/vargas/css/responsive.css')}}">
        <!-- fevicon -->
        <link rel="icon" href="{{asset('public/vargas/images/fevicon.png')}}" type="image/gif" />
        <!-- Scrollbar Custom CSS -->
        <link rel="stylesheet" href="{{asset('public/vargas/css/jquery.mCustomScrollbar.min.css')}}">
        <!-- Tweaks for older IEs-->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    </head>
    <body class="@yield('bodyClass')">

        <header>
            <!-- header inner -->
            <div class="header">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                            <div class="full">
                                <div class="center-desk">
                                    <div class="logo"> <a href="{{route('menuVargas')}}"><img src="{{asset('https://www.iupuebla.edu.mx/img/logo.png')}}" alt="#"></a> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                            <div class="menu-area">
                                <div class="limit-box">
                                    <nav class="main-menu">
                                        <ul class="menu-area-main">
                                            <li class="active"> <a href="{{route('menuVargas')}}">Home</a> </li>
                                            <li> <a href="{{route('aboutS')}}">Sobre nosotros</a> </li>
                                            <li><a href="{{route('bookShow')}}">Educación continua</a></li>
                                            <li><a href="{{route('libVar')}}">Posgrados</a></li>
                                            <li><a href="{{route('contact')}}">Contactanos</a></li>
                                             <li><a href="{{route('aboutm')}}">Sobre mi</a></li>
                                             <li><a href="{{route('escno')}}">No escolarizado</a></li>
                                             <li><a href="{{route('licS')}}">Licenciatura</a></li>
                                             <li><a href="{{route('campus')}}">Campus</a></li>
                                             <li><a href="{{route('docente')}}">Formación docente</a></li>
                                            <!--<li class="mean-last"> <a href="#"><img src="{{asset('public/vargas/images/search_icon.png')}}" alt="#" /></a> </li>-->
                                            <li class="mean-last"> <a href="{{route('single',1)}}"><img src="{{asset('public/vargas/images/top-icon.png')}}" alt="#" /></a> </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- end header inner -->
        </header>
        @yield('contenido')
        <footer>
            <div class="footer">
                <div class="container">
                    <div class="row pdn-top-30">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                            <div class="Follow">
                                <h3>Siguenos</h3>
                            </div>
                            <ul class="location_icon">
                                <li> <a href="https://www.facebook.com/iupyucatan/"><img src="{{asset('public/vargas/icon/facebook.png')}}"></a></li>
                                <!--<li> <a href="#"><img src="{{asset('public/vargas/icon/Twitter.png')}}"></a></li>
                                <li> <a href="#"><img src="{{asset('public/vargas/icon/linkedin.png')}}"></a></li>-->
                                <li> <a href="https://instagram.com/iupyucatan?utm_medium=copy_link"><img src="{{asset('public/vargas/icon/instagram.png')}}"></a></li>
                            </ul>
                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                            <div class="Follow">
                                <!--<h3>Newsletter</h3>-->
                            </div>
                            <!--<input class="Newsletter" placeholder="Enter your email" type="Enter your email">
                            <button class="Subscribe">Subscribe</button>-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <p>Copyright 2022 All Right Reserved By <a href="https://alexvargasproyecto6.go.yj.fr/">Vargas</a></p>
                </div>
            </div>
        </footer>

        <script src="public/vargas/js/jquery.min.js"></script>
        <script src="public/vargas/js/popper.min.js"></script>
        <script src="public/vargas/js/bootstrap.bundle.min.js"></script>
        <script src="public/vargas/js/jquery-3.0.0.min.js"></script>
        <script src="public/vargas/js/plugin.js"></script>
        <!-- sidebar -->
        <script src="public/vargas/js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="public/vargas/js/custom.js"></script>
    </body>
</html>