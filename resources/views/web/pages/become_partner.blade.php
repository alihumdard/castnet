@extends('web.layouts.default')
@section('content')

    <!-- Breadcrumb Start -->
    <section class="section_breadcrumb partners_sponsors_bg" style="
    background: linear-gradient(90deg, rgba(7, 27, 52, 0.80) 0%, rgba(7, 27, 52, 0.61) 51.46%, rgba(7, 27, 52, 0.42) 99.24%, rgba(7, 27, 52, 0.28) 99.7%, rgba(7, 27, 52, 0.00) 100%), url({{ asset('assets/web/images/' . $banner->image) }}) center no-repeat;
    background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="breadcrumb_title">Become a Partner</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('web.index') }}">home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('web.partners_sponsors') }}">partners/sponsors</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Become a Partner</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb End -->

    <!-- Become Partner Values Start -->
    <section class="section_block become_partner">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-10 mx-auto">
                    <h2 class="section_title" data-aos="fade-up" data-aos-duration="1000">{{$section1->title}}</h2>
                    <p class="section_text" data-aos="fade-up" data-aos-duration="1000">{!! $section1->description !!}</p>
                </div>
            </div>
            <div class="row gy-4 gy-lg-0 gx-lg-4">
                @foreach($section1s as $item)
                <div class="col-md-6 col-lg-3 d-flex">
                    <div class="card" data-aos="zoom-in-right" data-aos-duration="1000">
                        <div class="card-body">
                            <img src="{{ asset('assets/web/images/'.$item->image) }}" alt="icon" class="img-icon">
                            <h3 class="card-title">{{$item->title}}</h3>
                            <p class="card-text">{!! $item->description !!}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Become Partner Values End -->

    <!-- Section Alt Start -->
    <section class="section_block why_join light_blue_bg pb-50">
        <div class="container">
            <div class="row gy-5 gy-lg-0 gx-md-5">
                <div class="col-lg-6 order-2 order-lg-1" data-aos="fade-right" data-aos-duration="1000">
                    <h2 class="section_title fw-bold">{{$section2->title}}</h2>
                    <p class="about_text">{!! $section2->description !!}</p>
                </div>
                <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-duration="1000">
                    <div class="img_border">
                        <img src="{{ asset('assets/web/images/'.$section2->image) }}" alt="startup">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section Alt End -->

    <!-- Partnership Scale Start -->
    <section class="section_block member_benefits white_ghost_bg">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-9 mx-auto text-center" data-aos="fade-up" data-aos-duration="1000">
                    <h2 class="section_title mb-0">{{$title->title}}</h2>
                </div>
            </div>
            <div class="row gy-4">
                @foreach($section3 as $item)
                <div class="col-md-4 col-lg-4 d-flex">
                    <div class="card vip_card flex-grow-1 border-radius-0" data-aos="fade-right" data-aos-duration="1000">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="{{ asset('assets/web/images/'.$item->image) }}" alt="icon" class="img-icon">
                            </div>
                            <h3 class="card-text">{{$item->title}}</h3>
                            <p class="card-desc">{!! $item->description !!}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Partnership Scale End -->

    <!-- Sponsors Start -->
    <section class="section_block sponsors">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="section_title mb-5 mt-0" data-aos="fade-up" data-aos-duration="1000">our partners</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="swiper sponsorSwiper">
                        <div class="swiper-wrapper">
                            @foreach($partners as $partner)
                            <div class="swiper-slide">
                                <div class="img-box">
                                    <img src="{{ asset('assets/web/images/'.$partner->image)}}" title="{{$partner->title}}" alt="{{$partner->title}}" class="img-fluid">
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Sponsors End -->
    
    <!-- Ready to Join Start -->
    <section class="section_block ready_to_join">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto" data-aos="fade-right" data-aos-duration="1000">
                    <h2 class="section_title">{{ joinWidget()->title }}</h2>
                    <p class="text">{{ joinWidget()->description }}</p>
                    <div class="d-flex flex-column flex-md-row align-items-center justify-content-center gap-3 gap-md-5">
                        <a href="{{ joinWidget()->button1_link }}" class="btn btn-primary">
                            <span>{{ joinWidget()->button1 }}</span>
                            <img src="assets/web/images/icon_log.png" alt="login" class="img-login">
                        </a>
                        <a href="{{ joinWidget()->button2_link }}" class="btn btn-contact">{{ joinWidget()->button2 }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Ready to Join end -->

    @stop