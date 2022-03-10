@extends('navbar.all')
@section('titulo')
DEVS
@endsection
@section('content')
<!-- END | Header -->

<div class="hero common-hero">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="hero-ct">
                    <h1>PROYECTO PARA IUP POR:</h1>
                    <ul class="breadcumb">
                        <li class="active"><a href="{{route('home')}}">Home</a></li>
                        <li> <span class="ion-ios-arrow-right"></span> DEVS</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- celebrity grid v1 section-->

<div class="page-single">
    <div class="container">
        <div class="row ipad-width2">
            <div class="col-md-9 col-sm-12 col-xs-12">
                <div class="topbar-filter">
                    <p>Found <span>4 Devs</span> in total</p>
                    <!-- <label>Sort by:</label>
                     <select>
                         <option value="popularity">Popularity Descending</option>
                         <option value="popularity">Popularity Ascending</option>
                         <option value="rating">Rating Descending</option>
                         <option value="rating">Rating Ascending</option>
                         <option value="date">Release date Descending</option>
                         <option value="date">Release date Ascending</option>
                     </select>
                     <a href="celebritylist.html" class="list"><i class="ion-ios-list-outline "></i></a>
                     <a  href="celebritygrid01.html" class="grid"><i class="ion-grid active"></i></a>
                    -->
                </div>
                <div class="celebrity-items">
                    <div class="ceb-item">
                        <a href="{{route('single', 1)}}"><img width="270px" height="400px" src="{{asset('public/Film/images/uploads/ceb1.jpg')}}" alt="FOTO DE GIT"></a>
                        <div class="ceb-infor">
                            <h2><a href="{{route('single', 1)}}">Vargas</a></h2>
                            <span>DESARROLLADOR</span>
                        </div>
                    </div>
                    <div class="ceb-item">
                        <a href="{{route('single', 10)}}"><img width="270px" height="400px" src="{{asset('https://avatars.githubusercontent.com/u/72289144?v=4')}}" alt="FOTO DE GIT1"></a>
                        <div class="ceb-infor">
                            <h2><a href="{{route('single', 10)}}">Giovannyi</a></h2>
                            <span>DESARROLLADOR</span>
                        </div>
                    </div>
                    <div class="ceb-item">
                        <a href="{{route('single', 9)}}"><img width="270px" height="400px" src="{{asset('https://scontent.fcjs3-1.fna.fbcdn.net/v/t1.6435-1/118307767_10224132469765979_2795938537660321232_n.jpg?stp=dst-jpg_s200x200&_nc_cat=107&ccb=1-5&_nc_sid=7206a8&_nc_ohc=zflmviYjocUAX8EAWCN&_nc_ht=scontent.fcjs3-1.fna&oh=00_AT8drtNTkmO6D1C4YnsoH305RQSOuPkrArPN5JWkuho8jQ&oe=62518BD5')}}" alt="FOTO DE GIT2"></a>
                        <div class="ceb-infor">
                            <h2><a href="{{route('single', 9)}}">Luis</a></h2>
                            <span>DESARROLLADOR</span>
                        </div>
                    </div>
                    <div class="ceb-item">
                        <a href="{{route('single', 8)}}"><img width="270px" height="400px" src="{{asset('https://scontent.fcjs3-2.fna.fbcdn.net/v/t1.6435-1/188103508_5482638751806075_8270445548026025041_n.jpg?stp=dst-jpg_p200x200&_nc_cat=111&ccb=1-5&_nc_sid=7206a8&_nc_ohc=r9B3mTgpUIUAX8hisfd&_nc_ht=scontent.fcjs3-2.fna&oh=00_AT8z4a2I4pKXm3ER_iWNCjlgzGBU8NDG2ajcYOOFx8yNTg&oe=62517E49')}}" alt="FOTO DE GIT2"></a>
                        <div class="ceb-infor">
                            <h2><a href="{{route('single', 8)}}">Maximiliano</a></h2>
                            <span>DESARROLLADOR</span>
                        </div>
                    </div>
                </div>
                <div class="topbar-filter">
                    <label>Reviews per page:</label>
                    <select>
                        <option value="range">9 Reviews</option>
                        <option value="saab">10 Reviews</option>
                    </select>

                    <div class="pagination2">
                        <span>Page 1 of 6:</span>
                        <a class="active" href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">4</a>
                        <a href="#">5</a>
                        <a href="#">6</a>
                        <a href="#"><i class="ion-arrow-right-b"></i></a>
                    </div>
                </div>
            </div>
            <!--
            <div class="col-md-3 col-xs-12 col-sm-12">
                <div class="sidebar">
                    <div class="searh-form">
                        <h4 class="sb-title">Search celebrity</h4>
                        <form class="form-style-1 celebrity-form" action="#">
                            <div class="row">
                                <div class="col-md-12 form-it">
                                    <label>Celebrity name</label>
                                    <input type="text" placeholder="Enter keywords">
                                </div>
                                <div class="col-md-12 form-it">
                                    <label>Celebrity Letter</label>
                                    <select>
                                        <option value="range">A</option>
                                        <option value="saab">B</option>
                                    </select>
                                </div>
                                <div class="col-md-12 form-it">
                                    <label>Category</label>
                                    <select>
                                        <option value="range">Actress</option>
                                        <option value="saab">Others</option>
                                    </select>
                                </div>
                                <div class="col-md-12 form-it">
                                    <label>Year of birth</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <select>
                                                <option value="range">1970</option>
                                                <option value="number">Other</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <select>
                                                <option value="range">1990</option>
                                                <option value="number">others</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 ">
                                    <input class="submit" type="submit" value="submit">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="ads">
                        <img src="images/uploads/ads1.png" alt="">
                    </div>
                    <div class="celebrities">
                        <h4 class="sb-title">featured celebrity</h4>
                        <div class="celeb-item">
                            <a href="#"><img src="images/uploads/ava1.jpg" alt=""></a>
                            <div class="celeb-author">
                                <h6><a href="#">Samuel N. Jack</a></h6>
                                <span>Actor</span>
                            </div>
                        </div>
                        <div class="celeb-item">
                            <a href="#"><img src="images/uploads/ava2.jpg" alt=""></a>
                            <div class="celeb-author">
                                <h6><a href="#">Benjamin Carroll</a></h6>
                                <span>Actor</span>
                            </div>
                        </div>
                        <div class="celeb-item">
                            <a href="#"><img src="images/uploads/ava3.jpg" alt=""></a>
                            <div class="celeb-author">
                                <h6><a href="#">Beverly Griffin</a></h6>
                                <span>Actor</span>
                            </div>
                        </div>
                        <div class="celeb-item">
                            <a href="#"><img src="images/uploads/ava4.jpg" alt=""></a>
                            <div class="celeb-author">
                                <h6><a href="#">Justin Weaver</a></h6>
                                <span>Actor</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            -->
        </div>
    </div>
</div>

<!--end of celebrity grid v1 section-->
<!-- footer section-->
@endsection