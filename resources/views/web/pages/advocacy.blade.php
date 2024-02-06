@extends('web.layouts.default')
@section('content')

    <!-- Breadcrumb Start -->
    <section class="section_breadcrumb advocacy_bg" style="
    background: linear-gradient(90deg, rgba(7, 27, 52, 0.80) 0%, rgba(7, 27, 52, 0.61) 51.46%, rgba(7, 27, 52, 0.42) 99.24%, rgba(7, 27, 52, 0.28) 99.7%, rgba(7, 27, 52, 0.00) 100%), url({{ asset('assets/web/images/' . $banner->image) }}) center no-repeat;
    background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="breadcrumb_title">Advocacy</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('web.index') }}">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">advocacy</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb End -->

    <!-- Advocacy Start -->
    <section class="section_block why_join">
        <div class="container">
            <div class="row gy-5 gy-lg-0 gx-md-5">
                <div class="col-lg-6 order-2 order-lg-1" data-aos="fade-right" data-aos-duration="1000">
                    <h2 class="section_title">{{$section1->title}}</h2>
                    <p class="about_text">{!! $section1->description !!}</p>
                </div>
                <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-duration="1000">
                    <div class="img_border">
                        <img src="{{ asset('assets/web/images/'.$section1->image) }}" alt="advocacy">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Advocacy End -->

    <!-- Advocacy Cards Start -->
    <section class="section_block advocacy_cards">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12">
                    <h2 class="section_title">Our Priorities</h2>
                </div>
            </div>
            <div class="row gy-4">
                @foreach($section2 as $item)
                <div class="col-md-6 col-lg-4 d-flex">
                    <div class="card" data-aos="zoom-in-right" data-aos-duration="1000">
                        <img src="{{ asset('assets/web/images/'.$item->image)}}" alt="card photo" class="card-img-top">
                        <div class="card-body">
                            <h3 class="card-title">{{$item->title}}</h3>
                            <p class="card-text">{!! $item->description !!}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Advocacy Cards End -->

    <!-- Regional & Local Priorities Start -->
    <section class="section_block regional_local">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12">
                    <h2 class="section_title" data-aos="fade-right" data-aos-duration="1000">Regional and Local Priorities <span>2023&dash;24</span></h2>
                </div>
            </div>
            <div class="row gy-3 gy-lg-0 gx-3" data-aos="fade-left" data-aos-duration="1000">
                @foreach($section3 as $item)
                <div class="col-md-4 col-lg-2 d-flex">
                    <div class="priorities_box">
                        <img src="{{ asset('assets/web/images/'.$item->image) }}" alt="vector" class="img-vector">
                        <p class="box_title">{{$item->title}}</p>

                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Regional & Local Priorities End -->

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
