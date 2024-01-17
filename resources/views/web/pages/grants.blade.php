@extends('web.layouts.default')
@section('content')

    <!-- Breadcrumb Start -->
    <section class="section_breadcrumb financial_bg">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="breadcrumb_title">grants</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="index.html">home</a></li>
                            <li class="breadcrumb-item"><a href="financial.html">financial</a></li>
                            <li class="breadcrumb-item active" aria-current="page">grants</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb End -->

    <!-- Section Alt Start -->
    <section class="section_block why_join">
        <div class="container">
            <div class="row gy-5 gy-lg-0 gx-md-5">
                <div class="col-lg-6 order-2 order-lg-1" data-aos="fade-right" data-aos-duration="1000">
                    <h2 class="section_title fw-bold">our finance grants program</h2>
                    <p class="about_text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
                    <p class="about_text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen. Lorem Ipsum has been the industry's standard dummy text.</p>
                </div>
                <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-duration="1000">
                    <div class="img_border">
                        <img src="assets/web/images/grant_program.png" alt="grant_program">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section Alt End -->

    <!-- Types of Finance Grants Start -->
    <section class="section_block member_benefits white_ghost_bg">
        <div class="container">
            <div class="row">
                <div class="col-md-9 mx-auto text-center" data-aos="fade-up" data-aos-duration="1000">
                    <h2 class="section_title">Types of Finance Grants</h2>
                </div>
            </div>
            <div class="row gy-4">
                <div class="col-md-4 col-lg-4 d-flex">
                    <div class="card vip_card flex-grow-1 border-radius-0" data-aos="fade-right" data-aos-duration="1000">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="assets/web/images/icon_block.png" alt="icon" class="img-icon">
                            </div>
                            <h3 class="card-text">Innovation Grants</h3>
                            <p class="card-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 d-flex">
                    <div class="card vip_card flex-grow-1 border-radius-0" data-aos="zoom-in" data-aos-duration="1000">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="assets/web/images/icon_graph_up.png" alt="icon" class="img-icon">
                            </div>
                            <h3 class="card-text">Growth Grants</h3>
                            <p class="card-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 d-flex">
                    <div class="card vip_card flex-grow-1 border-radius-0" data-aos="fade-left" data-aos-duration="1000">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="assets/web/images/icon_sustainability.png" alt="icon" class="img-icon">
                            </div>
                            <h3 class="card-text">Sustainability Grants</h3>
                            <p class="card-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Types of Finance Grants End -->

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
