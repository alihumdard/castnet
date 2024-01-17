@extends('web.layouts.default')
@section('content')
    <section class="section_breadcrumb blog_bg">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="breadcrumb_title">Blog</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="index.html">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blog</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <section class="section_block section_blogs_head py-5" data-aos="fade-up" data-aos-duration="1000">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="section_title">our blogs</h2>
                </div>
            </div>
        </div>
    </section>
    @foreach($blogs as $key=>$blog)
    @if($key % 2 == 0)
    <section class="section_blogs white_ghost_bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="row gy-4 gy-md-0 align-items-center">
                        <div class="col-md-6 col-lg-6 order-1 order-md-1" data-aos="fade-right" data-aos-duration="1000">
                            <img src="{{ asset('assets/web/images/'.$blog->image)}}" alt="blog" class="img-fluid">
                        </div>
                        <div class="col-md-6 col-lg-6 order-2 order-md-2" data-aos="fade-left" data-aos-duration="1000">
                            <div class="blog_meta">
                                <p>{{ $blog->category }}</p>
                                <p class="dot"></p>
                                <p>{{ $blog->date}}</p>
                            </div>
                            <h2 class="blog_title">{{ $blog->title }}</h2>
                            <p class="blog_desc">{!! $blog->description !!}</p>
                            <a href="blog_single.html" class="btn btn-primary">read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @else
    <section class="section_blogs">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="row gy-4 gy-md-0 align-items-center">
                        <div class="col-md-6 col-lg-6 order-1 order-md-2" data-aos="fade-left" data-aos-duration="1000">
                            <img src="assets/web/images/our_blog_2.png" alt="blog" class="img-fluid">
                        </div>
                        <div class="col-md-6 col-lg-6 order-2 order-md-1" data-aos="fade-right" data-aos-duration="1000">
                        <div class="blog_meta">
                            <p>{{ $blog->category }}</p>
                            <p class="dot"></p>
                            <p>{{ $blog->date}}</p>
                        </div>
                        <h2 class="blog_title">{{ $blog->title }}</h2>
                        <p class="blog_desc">{!! $blog->description !!}</p>
                        <a href="blog_single.html" class="btn btn-primary">read more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
    @endforeach
    <section class="section_block section_blogs_footer py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="zoom-in" data-aos-duration="1000">
                    <a href="#" class="btn btn-more">see more</a>
                </div>
            </div>
        </div>
    </section>
    <section class="section_block ready_to_join">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto" data-aos="fade-right" data-aos-duration="1000">
                    <h2 class="section_title">ready to join?</h2>
                    <p class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p>
                    <div class="d-flex flex-column flex-md-row align-items-center justify-content-center gap-3 gap-md-5">
                        <a href="#" class="btn btn-primary">
                            <span>join chamber</span>
                            <img src="assets/web/images/icon_log.png" alt="login" class="img-login">
                        </a>
                        <a href="#" class="btn btn-contact">contact us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
