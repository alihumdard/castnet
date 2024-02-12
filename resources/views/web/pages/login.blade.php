@extends('web.layouts.default')
@section('content')
<!-- Breadcrumb Start -->
<section class="section_breadcrumb login_bg">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="breadcrumb_title">login</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ route('web.index') }}">home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">login</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb End -->

<!-- Login Start -->
<section class="section_block">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="login_form" data-aos="zoom-in" data-aos-duration="1000">
                    <h2 class="form_title">Log in to your account</h2>
                    <form action="#">
                        <input type="email" class="form-control" placeholder="Email">
                        <div class="input-group mt-3">
                            <input type="password" class="form-control border-end-0" placeholder="Password">
                            <span class="input-group-text" id="basic-addon1">
                                <img src="{{asset('assets/web/images/icon_eye.png')}}" alt="eye">
                            </span>
                        </div>
                        <div class="forgot_password">
                            <a href="#">Forgot your password?</a>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-login">login</button>
                        </div>
                        <span class="form-border"></span>
                        <div class="creat_account">
                            <p>No account? Create one <a href="{{route('user.register')}}" class="text-success">here</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Login End -->
@stop