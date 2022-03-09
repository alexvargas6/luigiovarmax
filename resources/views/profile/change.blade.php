@extends('profile.myPerfil')
@section('perfil')
<div class="form-style-1 user-pro" action="#">
    <form action="{{route('upUs')}}" class="user" method="post">
        <input name="id" value="{{$usuario->id}}" type="hidden">
        <h4>01. Profile details</h4>
        <div class="row">
            <div class="col-md-6 form-it">
                <label>Username</label>
                <input type="text" placeholder="edwardkennedy" value="{{$usuario->name}}" disabled>
            </div>
            <div class="col-md-6 form-it">
                <label>Email Address</label>
                <input type="text" placeholder="edward@kennedy.com" value="{{$usuario->email}}" disabled>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 form-it">
                <label>Facebook Link</label>
                <input type="text" placeholder="Pega aquí el link de tu facebook " name="facebook" value="{{$usuario->facebook}}">
            </div>
            <div class="col-md-6 form-it">
                <label>Instagram Link</label>
                <input type="text" placeholder="Pega el link de tu insta" name="instagram" value="{{$usuario->instagram}}">
            </div>
        </div>
        <div class="row">
            <div class="form-it">
                <label>SOBRE MÍ</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="sobremi" rows="3">{{$usuario->sobremi}}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <input class="submit" type="submit" value="save">
            </div>
        </div>
    </form>

</div>
@endsection
