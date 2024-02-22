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

    <!-- FOUNDER Start -->
    <section class="section_block section_team">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12" data-aos="fade-up" data-aos-duration="1000">
                    <h2 class="section_title text-center">FOUNDER</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-8 mx-auto">
                    <div class="row row-cols-md-3 row-cols-lg-5 justify-content-center gy-5">
                        @foreach($founder as $item)
                        <div class="col-12 d-flex">
                            <div class="card flex-grow-1" data-aos="zoom-in-right" data-aos-duration="1000">
                                <img src="{{ asset('assets/web/images/' . $item->image) }}" alt="team" class="card-img-top img-height">
                                <div class="card-body">
                                    <h3 class="card-title">{{ $item->name }}</h3>
                                    <p class="card-text">{{ $item->profession }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FOUNDER End -->

    <!-- BOARD OF DIRECTORS Start -->
    <section class="section_block section_team">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12" data-aos="fade-up" data-aos-duration="1000">
                    <h2 class="section_title text-center">BOARD OF DIRECTORS</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-8 mx-auto">
                    <div class="row row-cols-md-3 row-cols-lg-5 justify-content-center gy-5">
                        @foreach($boardd as $item)
                        <div class="col-12 d-flex">
                            <div class="card flex-grow-1" data-aos="zoom-in-right" data-aos-duration="1000">
                                <img src="{{ asset('assets/web/images/' . $item->image) }}" alt="team" class="card-img-top img-height">
                                <div class="card-body">
                                    <h3 class="card-title">{{ $item->name }}</h3>
                                    <p class="card-text">{{ $item->profession }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- BOARD OF DIRECTORS End -->

    <!-- MANAGEMENT TEAM Start -->
    <section class="section_block section_team">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12" data-aos="fade-up" data-aos-duration="1000">
                    <h2 class="section_title text-center">MANAGEMENT TEAM</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-8 mx-auto">
                    <div class="row row-cols-md-3 row-cols-lg-5 justify-content-center gy-5">
                        @foreach($management as $item)
                        <div class="col-12 d-flex">
                            <div class="card flex-grow-1" data-aos="zoom-in-right" data-aos-duration="1000">
                                <img src="{{ asset('assets/web/images/' . $item->image) }}" alt="team" class="card-img-top img-height">
                                <div class="card-body">
                                    <h3 class="card-title">{{ $item->name }}</h3>
                                    <p class="card-text">{{ $item->profession }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- MANAGEMENT TEAMS End -->
    
    <!-- COUNCIL OF COUNTRY DELEGATES Start -->
    <section class="section_block section_team">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12" data-aos="fade-up" data-aos-duration="1000">
                    <h2 class="section_title text-center">COUNCIL OF COUNTRY DELEGATES</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-8 mx-auto">
                    <div class="row row-cols-md-3 row-cols-lg-5 justify-content-center gy-5">
                        @foreach($councilc as $item)
                        <div class="col-12 d-flex">
                            <div class="card flex-grow-1" data-aos="zoom-in-right" data-aos-duration="1000">
                                <img src="{{ asset('assets/web/images/' . $item->image) }}" alt="team" class="card-img-top img-height">
                                <div class="card-body">
                                    <h3 class="card-title">{{ $item->name }}</h3>
                                    <p class="card-text">{{ $item->profession }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- COUNCIL OF COUNTRY DELEGATES End -->

    <!-- COUNCIL OF INDUSTRY ADVISORS Start -->
    <section class="section_block section_team">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12" data-aos="fade-up" data-aos-duration="1000">
                    <h2 class="section_title text-center">COUNCIL OF INDUSTRY ADVISORS</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-8 mx-auto">
                    <div class="row row-cols-md-3 row-cols-lg-5 justify-content-center gy-5">
                        @foreach($councili as $item)
                        <div class="col-12 d-flex">
                            <div class="card flex-grow-1" data-aos="zoom-in-right" data-aos-duration="1000">
                                <img src="{{ asset('assets/web/images/' . $item->image) }}" alt="team" class="card-img-top img-height">
                                <div class="card-body">
                                    <h3 class="card-title">{{ $item->name }}</h3>
                                    <p class="card-text">{{ $item->profession }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- COUNCIL OF INDUSTRY ADVISORS End -->

    <!-- PROGRAM OF LEADERS Start -->
    <section class="section_block section_team">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12" data-aos="fade-up" data-aos-duration="1000">
                    <h2 class="section_title text-center">PROGRAM OF LEADERS</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-8 mx-auto">
                    <div class="row row-cols-md-3 row-cols-lg-5 justify-content-center gy-5">
                        @foreach($program as $item)
                        <div class="col-12 d-flex">
                            <div class="card flex-grow-1" data-aos="zoom-in-right" data-aos-duration="1000">
                                <img src="{{ asset('assets/web/images/' . $item->image) }}" alt="team" class="card-img-top img-height">
                                <div class="card-body">
                                    <h3 class="card-title">{{ $item->name }}</h3>
                                    <p class="card-text">{{ $item->profession }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- PROGRAM OF LEADERS End -->

    <!-- Staff Start -->
    <section class="section_block section_team pt-0 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12" data-aos="fade-up" data-aos-duration="1000">
                    <h2 class="section_title text-center">STAFF</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-8 mx-auto">
                    <div class="row row-cols-md-3 row-cols-lg-5 justify-content-center gy-5">
                        @foreach($staff as $item)
                        <div class="col-12 d-flex">
                            <div class="card flex-grow-1" data-aos="zoom-in-right" data-aos-duration="1000">
                                <img src="{{ asset('assets/web/images/' . $item->image) }}" alt="team" class="card-img-top img-height">
                                <div class="card-body">
                                    <h3 class="card-title">{{ $item->name }}</h3>
                                    <p class="card-text">{{ $item->profession }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            {{-- <div class="row justify-content-center" data-aos="fade-up" data-aos-duration="1000">
                <a href="#" class="btn btn-primary">see more team</a>
            </div> --}}
        </div>
    </section>
    <!-- Staff End -->

@stop
