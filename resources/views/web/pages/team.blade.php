@extends('web.layouts.default')
@section('content')


<!-- Breadcrumb Start -->
    <section class="section_breadcrumb team_bg" style="
    background: linear-gradient(90deg, rgba(7, 27, 52, 0.80) 0%, rgba(7, 27, 52, 0.61) 51.46%, rgba(7, 27, 52, 0.42) 99.24%, rgba(7, 27, 52, 0.28) 99.7%, rgba(7, 27, 52, 0.00) 100%), url({{ asset('assets/web/images/' . $banner->image) }}) center no-repeat;
    background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="breadcrumb_title">our team</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('web.index') }}">home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('web.about') }}">about us</a></li>
                            <li class="breadcrumb-item active" aria-current="page">our team</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb End -->

    <!-- Executive Start -->
    <section class="section_block section_team">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12" data-aos="fade-up" data-aos-duration="1000">
                    <h2 class="section_title text-center">Executive</h2>
                </div>
            </div>
            <div class="row gy-5 gy-md-0">
                @foreach($executiveMembers as $executive)
                <div class="col-md-4 col-lg-4 d-flex">
                    <div class="card" data-aos="zoom-in-right" data-aos-duration="1000">
                        <img src="{{ asset('assets/web/images/' . $executive->image) }}" alt="team" class="card-img-top">
                        <div class="card-body">
                            <h3 class="card-title">{{ $executive -> name }}</h3>
                            <p class="card-text">{{ $executive -> profession }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Executive End -->

    <!-- Staff Start -->
    <section class="section_block section_team pt-0 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12" data-aos="fade-up" data-aos-duration="1000">
                    <h2 class="section_title text-center">staff</h2>
                </div>
            </div>
            <div class="row gy-5">
                @foreach($staffMembers as $staff)
                <div class="col-md-4 col-lg-4 d-flex">
                    <div class="card" data-aos="zoom-in-right" data-aos-duration="1000">
                        <img src="{{ asset('assets/web/images/' . $staff->image) }}" alt="team" class="card-img-top">
                        <div class="card-body">
                            <h3 class="card-title">{{ $staff -> name }}</h3>
                            <p class="card-text">{{ $staff -> profession }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row justify-content-center" data-aos="fade-up" data-aos-duration="1000">
                <a href="#" class="btn btn-primary">see more team</a>
            </div>
        </div>
    </section>
    <!-- Staff End -->

@stop
