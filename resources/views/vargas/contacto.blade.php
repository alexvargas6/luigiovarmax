@extends('vargas.nav.all')
@section('bodyClass')
main-layout contact-page
@endsection
@section('contenido')
<div class="about-bg">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="abouttitle">
                    <h2>Contactanos</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact -->
<div class="Contact">
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