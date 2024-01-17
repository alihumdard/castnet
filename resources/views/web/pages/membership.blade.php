@extends('web.layouts.default')
@section('content')

{{-- @dd($widget); --}}

<!-- Breadcrumb Start -->
<section class="section_breadcrumb membership_bg" style="
background: linear-gradient(90deg, rgba(7, 27, 52, 0.80) 0%, rgba(7, 27, 52, 0.61) 51.46%, rgba(7, 27, 52, 0.42) 99.24%, rgba(7, 27, 52, 0.28) 99.7%, rgba(7, 27, 52, 0.00) 100%), url({{ asset('assets/web/images/' . $membershipBanner->image) }}) center no-repeat;
background-size: cover;">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="breadcrumb_title">become a member</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="index.html">home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">membership</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb End -->

<!-- Why Join Start -->
<section class="section_block why_join">
    <div class="container">
        <div class="row gy-5 gy-lg-0 gx-md-5">
            <div class="col-lg-6 order-2 order-lg-1" data-aos="fade-right" data-aos-duration="1000">
                {!! $section1Record -> description !!}
            </div>
            <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-duration="1000">
                <div class="img_border">
                    <img src="{{ asset('assets/web/images/' . ($section1Record->image ?? '')) }}" alt="why-join">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Why Join End -->

<!-- Membership Values Start -->
<section class="section_block membership_values">
    <div class="container">
        <div class="row gy-5 gy-md-0 gx-lg-5">
            @foreach ($section2Record as $section2)
            <div class="col-md-4 col-lg-4 d-flex">
                <div class="card border_p" data-aos="zoom-in-right" data-aos-duration="1000">
                    <div class="card-body">
                        <img src="{{ asset('assets/web/images/' . ($section2 -> image ?? '')) }}" alt="value">
                        <p class="card-text">{{ $section2 -> heading }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Membership Values end -->

<!-- Membership Levels Start -->
<section class="section_block">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section_title text-center" data-aos="fade-up" data-aos-duration="1000">chamber membership levels</h2>
            </div>
            <div class="col-12">
                <img src="assets/web/images//membership_levels.png" alt="membership-levels" class="img-fluid" data-aos="fade-right" data-aos-duration="1000">
            </div>
        </div>
    </div>
</section>
<!-- Membership Levels end -->

<!-- Ready to Join Start -->
<section class="section_block ready_to_join">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto" data-aos="fade-right" data-aos-duration="1000">
                <h2 class="section_title">{{ $widget -> title }}</h2>
                <p class="text">{{ $widget -> description }}</p>
                <div class="d-flex flex-column flex-md-row align-items-center justify-content-center gap-3 gap-md-5">
                    <a href="{{ $widget -> button1_link }}" class="btn btn-primary">
                        <span>{{ $widget -> button1 }}</span>
                        <img src="assets/web/images//icon_log.png" alt="login" class="img-login">
                    </a>
                    <a href="{{ $widget -> button2_link }}" class="btn btn-contact">{{ $widget -> button2 }}</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Ready to Join end -->

@stop
