@extends('web.layouts.default')
@section('content')

    <!-- Breadcrumb Start -->
    <section class="section_breadcrumb sectors_construction_bg">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="breadcrumb_title">construction</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="index.html">home</a></li>
                            <li class="breadcrumb-item"><a href="sectors.html">sectors</a></li>
                            <li class="breadcrumb-item active" aria-current="page">construction</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb End -->

    <!-- Intro Section Start -->
    <section class="section_block accessibility">
        <div class="container">
            <div class="row gy-5 gy-md-0 gx-md-5">
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
                    <div class="img_border">
                        <img src="assets/web/images/intro_construction.png" alt="construction">
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000">
                    <h2 class="section_title">how we're working for you</h2>
                    <p class="about_text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    <p class="about_text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Intro Section End -->

    <!-- Sector's Blog Section Start -->
    <section class="sector_blog">
        <div class="container">
            <div class="row gy-5 gy-lg-0">
                <div class="col-lg-5" data-aos="fade-right" data-aos-duration="1000">
                    <div class="card">
                        <img src="assets/web/images/main_featured_image.png" alt="main" class="card-img-top">
                        <div class="card-header">
                            <p class="card-meta">1 month ago</p>
                            <h3 class="card-title">
                                <a href="#">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                </a>
                            </h3>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn btn-secondary">read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7" data-aos="fade-left" data-aos-duration="1000">
                    <div class="blog_item">
                        <div class="featured_image">
                            <img src="assets/web/images/featured_image1.png" alt="featured image">
                        </div>
                        <div class="content">
                            <h3 class="blog_title">
                                <a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a>
                            </h3>
                            <p class="blog_meta">Friday, December 1, 2023</p>
                            <p class="blog_desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                    </div>
                    <div class="blog_item">
                        <div class="featured_image">
                            <img src="assets/web/images/featured_image2.png" alt="featured image">
                        </div>
                        <div class="content">
                            <h3 class="blog_title">
                                <a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a>
                            </h3>
                            <p class="blog_meta">Friday, December 1, 2023</p>
                            <p class="blog_desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                    </div>
                    <div class="blog_item">
                        <div class="featured_image">
                            <img src="assets/web/images/featured_image3.png" alt="featured image">
                        </div>
                        <div class="content">
                            <h3 class="blog_title">
                                <a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a>
                            </h3>
                            <p class="blog_meta">Friday, December 1, 2023</p>
                            <p class="blog_desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Sector's Blog Section End -->

    @stop