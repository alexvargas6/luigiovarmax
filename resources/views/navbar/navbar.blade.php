<nav class="navbar navbar-default navbar-custom">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header logo">
        <div class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <div id="nav-icon1">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <a href="index-2.html"><img class="logo" src="{{ asset('images/logo.svg') }}" alt="" width="119" height="58"></a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse flex-parent" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav flex-child-menu menu-left">
            <li class="hidden">
                <a href="#page-top"></a>
            </li>
            <li class="dropdown first">
                <a class="btn btn-default dropdown-toggle lv1" data-toggle="dropdown">
                    Home <i class="fa fa-angle-down" aria-hidden="true"></i>
                </a>
                <ul class="dropdown-menu level1">
                    <li><a href="index-2.html">Home 01</a></li>
                    <li><a href="homev2.html">Home 02</a></li>
                    <li><a href="homev3.html">Home 03</a></li>
                </ul>
            </li>
            <li class="dropdown first">
                <a class="btn btn-default dropdown-toggle lv1" data-toggle="dropdown" data-hover="dropdown">
                    movies<i class="fa fa-angle-down" aria-hidden="true"></i>
                </a>
                <ul class="dropdown-menu level1">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Movie grid<i class="ion-ios-arrow-forward"></i></a>
                        <ul class="dropdown-menu level2">
                            <li><a href="moviegrid.html">Movie grid</a></li>
                            <li><a href="moviegridfw.html">movie grid full width</a></li>
                        </ul>
                    </li>
                    <li><a href="movielist.html">Movie list</a></li>
                    <li><a href="moviesingle.html">Movie single</a></li>
                    <li class="it-last"><a href="seriessingle.html">Series single</a></li>
                </ul>
            </li>
            <li class="dropdown first">
                <a class="btn btn-default dropdown-toggle lv1" data-toggle="dropdown" data-hover="dropdown">
                    celebrities <i class="fa fa-angle-down" aria-hidden="true"></i>
                </a>
                <ul class="dropdown-menu level1">
                    <li><a href="celebritygrid01.html">celebrity grid 01</a></li>
                    <li><a href="celebritygrid02.html">celebrity grid 02 </a></li>
                    <li><a href="celebritylist.html">celebrity list</a></li>
                    <li class="it-last"><a href="celebritysingle.html">celebrity single</a></li>
                </ul>
            </li>
            <li class="dropdown first">
                <a class="btn btn-default dropdown-toggle lv1" data-toggle="dropdown" data-hover="dropdown">
                    news <i class="fa fa-angle-down" aria-hidden="true"></i>
                </a>
                <ul class="dropdown-menu level1">
                    <li><a href="bloglist.html">blog List</a></li>
                    <li><a href="bloggrid.html">blog Grid</a></li>
                    <li class="it-last"><a href="blogdetail.html">blog Detail</a></li>
                </ul>
            </li>
            <li class="dropdown first">
                <a class="btn btn-default dropdown-toggle lv1" data-toggle="dropdown" data-hover="dropdown">
                    community <i class="fa fa-angle-down" aria-hidden="true"></i>
                </a>
                <ul class="dropdown-menu level1">
                    <li><a href="userfavoritegrid.html">user favorite grid</a></li>
                    <li><a href="userfavoritelist.html">user favorite list</a></li>
                    <li><a href="userprofile.html">user profile</a></li>
                    <li class="it-last"><a href="userrate.html">user rate</a></li>
                </ul>
            </li>
        </ul>
        <ul class="nav navbar-nav flex-child-menu menu-right">
            <li class="dropdown first">
                <a class="btn btn-default dropdown-toggle lv1" data-toggle="dropdown" data-hover="dropdown">
                    pages <i class="fa fa-angle-down" aria-hidden="true"></i>
                </a>
                <ul class="dropdown-menu level1">
                    <li><a href="landing.html">Landing</a></li>
                    <li><a href="404.html">404 Page</a></li>
                    <li class="it-last"><a href="comingsoon.html">Coming soon</a></li>
                </ul>
            </li>
            <li><a href="#">Help</a></li>
            @if (Auth::guest())
            <li class="loginLink"><a href="#">LOG In</a></li>
            <li class="btn signupLink"><a href="#">sign up</a></li>
            @else
            <li><a href="#">MI PERFIL</a></li>
            @endif
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>
