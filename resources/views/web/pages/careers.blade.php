@extends('web.layouts.default')
@section('content')

    <!-- Breadcrumb Start -->
    <section class="section_breadcrumb career_bg" style="
    background: linear-gradient(90deg, rgba(7, 27, 52, 0.80) 0%, rgba(7, 27, 52, 0.61) 51.46%, rgba(7, 27, 52, 0.42) 99.24%, rgba(7, 27, 52, 0.28) 99.7%, rgba(7, 27, 52, 0.00) 100%), url({{ asset('assets/web/images/' . $banner->image) }}) center no-repeat;
    background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="breadcrumb_title">Careers</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('web.index') }}">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Careers</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb End -->

    <!-- Section Alt Start -->
    <section class="section_block why_join pb-50">
        <div class="container">
            <div class="row gx-md-5">
                <div class="col-lg-6 order-2 order-lg-1" data-aos="fade-right" data-aos-duration="1000">
                    <h2 class="section_title fw-bold">{{ $section1->title }}</h2>
                    {!! $section1->description !!}
                </div>
                <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-duration="1000">
                    <div class="img_border">
                        <img src="{{ asset('assets/web/images/'.$section1->image) }}" alt="career_intro">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section Alt End -->

    <!-- Become Partner Values Start -->
    <section class="section_block become_partner light_blue_bg">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-10 mx-auto">
                    <h2 class="section_title" data-aos="fade-up" data-aos-duration="1000">benefits to work with us</h2>
                </div>
            </div>
            <div class="row gy-4 gy-lg-0 gx-lg-4">
                @foreach($section2 as $item)
                <div class="col-md-6 col-lg-3 d-flex">
                    <div class="card" data-aos="zoom-in-right" data-aos-duration="1000">
                        <div class="card-body">
                            <img src="{{ asset('assets/web/images/'.$item->image) }}" alt="icon" class="img-icon">
                            <h3 class="card-title">{{ $item->title }}</h3>
                            <p class="card-text">{!! $item->description !!}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Become Partner Values End -->

    <!-- Current Opening Start -->
    <section class="section_block current_opening">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12">
                    <h2 class="section_title" data-aos="fade-up" data-aos-duration="1000">current openings</h2>
                </div>
            </div>
            <div class="row gy-4 gy-md-0">
                @foreach($section3 as $job)
                @if($job->status == 0)
                <div class="col-md-4 col-lg-4 d-flex">
                    <div class="card" data-aos="fade-right" data-aos-duration="1000">
                        <div class="card-body">
                            <h3 class="card-title">{{ $job->job_title }}</h3>
                            @foreach(explode(',',$job->duration_detail) as $item)
                            <span class="card-subtext">{{ $item }}</span>
                            @if(!$loop->last)
        <span class="card-subtext"> /</span>
    @endif
                            @endforeach
                            <p class="card-text">{{ $job->job_description}}</p>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn btn-primary">
                                <span>apply now</span>
                                <img src="assets/web/images/icon_arrow.png" alt="arrow">
                            </a>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
                <div class="col-12 mt-5">
                    <a href="#" class="btn-more" data-aos="zoom-in" data-aos-duration="1000">
                        <span>see more</span>
                        <img src="assets/web/images/icon_arrow.png" alt="arrow">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Current Opening End -->

    @stop
