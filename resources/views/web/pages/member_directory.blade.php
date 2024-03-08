@extends('web.layouts.default')
@section('content')

    <!-- Breadcrumb Start -->
    <section class="section_breadcrumb rfx_bg" style="
    background: linear-gradient(90deg, rgba(7, 27, 52, 0.80) 0%, rgba(7, 27, 52, 0.61) 51.46%, rgba(7, 27, 52, 0.42) 99.24%, rgba(7, 27, 52, 0.28) 99.7%, rgba(7, 27, 52, 0.00) 100%), url({{ asset('assets/web/images/' . $banner->image) }}) center no-repeat;
    background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="breadcrumb_title">{{$banner->title}}</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('web.index') }}">home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('web.opportunities') }}">Opportunities</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{$banner->title}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb End -->
    <!-- secton project detail start -->
    <section class="section_block section_block_alt ">
        <div class="container">
            <h2 class="section_title fw-bold text-center mb-5">Our Business Members</h2>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 row-cols-xxl-6 gx-md-5 gy-5">
                @foreach($members as $member)
                <div class="col" data-aos="fade-right" data-aos-duration="1000">
                    <div class="sec-dir-card text-center">
                        <img src="{{ asset('assets/web/images/'.$member->image) }}" alt="card-img">
                        <h3 class="sec-dir-card-title">{{$member->name}}</h3>
                        <div class="sec-dir-card-info">
                            <p class="sec-dir-card-company">Company:</p>
                            <p class="sec-dir-card-company-text">{{$member->company}}</p>
                        </div>
                        <div class="sec-dir-card-info">
                            <p class="sec-dir-card-company">Position:</p>
                            <p class="sec-dir-card-company-text">{{$member->position}}</p>
                        </div>
                        <div class="sec-dir-card-med-icon">
                            <a href="{{$member->lindedin}}" class="media-icon-bg">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@stop