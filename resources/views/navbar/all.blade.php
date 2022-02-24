<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7 no-js" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8 no-js" lang="en-US">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en" class="no-js">

<head>
    <!-- Basic need -->
    <title>peli | @yield('titulo')</title>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <link rel="profile" href="#"> 

    <!--Google Font-->
    <link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Dosis:400,700,500|Nunito:300,400,600' />
    <!-- Mobile specific meta -->
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone-no">

    <!-- CSS files -->
    <link rel="stylesheet" href="{{ asset('public/Film/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('public/Film/css/style.css') }}">
    @yield('estilos')
</head>

<body>
    <!--preloading-->
    <div id="preloader">
        <img class="logo" src="{{ asset('images/logo.svg') }}" alt="logo" width="119"
            height="58">
        <div id="status">
            <span></span>
            <span></span>
        </div>
    </div>
    <!--end of preloading-->

    <!--login form popup-->
    @include('login.lognav')
    <!--end of login form popup-->

    <!--signup form popup-->
    @include('login.signup')
    <!--end of signup form popup-->

    <!-- BEGIN | Header -->
    <header class="ht-header">
        <div class="container">
            @include('navbar.navbar')
            <!-- top search form -->
            <div class="top-search">
                <select>
                    <option value="united">TV show</option>
                    <option value="saab">Others</option>
                </select>
                <input type="text" placeholder="Search for a movie, TV Show or celebrity that you are looking for">
            </div>
        </div>
    </header>
    <!-- END | Header -->
    @yield('content')
    <!-- footer section-->
    @include('navbar.footer')
    <!-- end of footer section-->

    <script src="{{ asset('public/Film/js/jquery.js') }}"></script>
    <script src="{{ asset('public/Film/js/plugins.js') }}"></script>
    <script src="{{ asset('public/Film/js/plugins2.js') }}"></script>
    <script src="{{ asset('public/Film/js/custom.js') }}"></script>
    @yield('javas')
</body>

</html>