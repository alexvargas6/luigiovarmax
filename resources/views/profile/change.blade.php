@extends('profile.myPerfil')
@section('perfil')
    <div class="form-style-1 user-pro" action="#">
        <form action="#" class="user">
            <h4>01. Profile details</h4>
            <div class="row">
                <div class="col-md-6 form-it">
                    <label>Username</label>
                    <input type="text" placeholder="edwardkennedy">
                </div>
                <div class="col-md-6 form-it">
                    <label>Email Address</label>
                    <input type="text" placeholder="edward@kennedy.com">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 form-it">
                    <label>First Name</label>
                    <input type="text" placeholder="Edward ">
                </div>
                <div class="col-md-6 form-it">
                    <label>Last Name</label>
                    <input type="text" placeholder="Kennedy">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 form-it">
                    <label>Country</label>
                    <select>
                        <option value="united">United States</option>
                        <option value="saab">Others</option>
                    </select>
                </div>
                <div class="col-md-6 form-it">
                    <label>State</label>
                    <select>
                        <option value="united">New York</option>
                        <option value="saab">Others</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <input class="submit" type="submit" value="save">
                </div>
            </div>
        </form>
        <form action="#" class="password">
            <h4>02. Change password</h4>
            <div class="row">
                <div class="col-md-6 form-it">
                    <label>Old Password</label>
                    <input type="text" placeholder="**********">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 form-it">
                    <label>New Password</label>
                    <input type="text" placeholder="***************">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 form-it">
                    <label>Confirm New Password</label>
                    <input type="text" placeholder="*************** ">
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <input class="submit" type="submit" value="change">
                </div>
            </div>
        </form>
    </div>
@endsection
