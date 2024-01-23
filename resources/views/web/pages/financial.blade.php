@extends('web.layouts.default')
@section('content')

    <!-- Breadcrumb Start -->
    <section class="section_breadcrumb financial_bg">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="breadcrumb_title">Financial</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('web.index') }}">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Financial</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb End -->

    <!-- Financial Cards Start -->
    <section class="section_block advocacy_cards">
        <div class="container">
            <div class="row gy-4 gy-lg-0">
                <div class="col-md-6 col-lg-4">
                    <div class="card" data-aos="zoom-in-right" data-aos-duration="1000">
                        <img src="assets/web/images/financial1.png" alt="card photo" class="card-img-top">
                        <div class="card-body">
                            <h3 class="card-title">Start a good plan</h3>
                            <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card" data-aos="zoom-in" data-aos-duration="1000">
                        <img src="assets/web/images/financial2.png" alt="card photo" class="card-img-top">
                        <div class="card-body">
                            <h3 class="card-title">start an idea</h3>
                            <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card" data-aos="zoom-in-left" data-aos-duration="1000">
                        <img src="assets/web/images/financial3.png" alt="card photo" class="card-img-top">
                        <div class="card-body">
                            <h3 class="card-title">genius consultant</h3>
                            <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Financial Cards End -->

    <!-- Section Alt Start -->
    <section class="section_block section_block_alt white_ghost_bg">
        <div class="container">
            <div class="row gx-md-5">
                <div class="col-lg-6 order-1 order-lg-1" data-aos="fade-right" data-aos-duration="1000">
                    <div class="img_border">
                        <img src="assets/web/images/financial1.png" alt="financial">
                    </div>
                </div>
                <div class="col-lg-6 order-2 order-lg-2" data-aos="fade-left" data-aos-duration="1000">
                    <h2 class="section_title fw-bold">welcome to financial company</h2>
                    <p class="about_text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
                    <p class="about_text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen. Lorem Ipsum has been the industry's standard dummy text.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Section Alt End -->

    <!-- Financial Values Start -->
    <section class="section_block advocacy_values bg_secondary my-50">
        <div class="container">
            <div class="row gy-4 gy-lg-0 gx-lg-4">
                <div class="col-md-6 col-lg-3 d-flex">
                    <div class="card" data-aos="zoom-in-right" data-aos-duration="1000">
                        <div class="card-body">
                            <img src="assets/web/images/icon_employement.png" alt="icon" class="img-icon">
                            <h3 class="card-title">insurance</h3>
                            <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex">
                    <div class="card" data-aos="zoom-in" data-aos-duration="1000">
                        <div class="card-body">
                            <img src="assets/web/images/accounting.png" alt="icon" class="img-icon">
                            <h3 class="card-title">accounting</h3>
                            <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex">
                    <div class="card" data-aos="zoom-in" data-aos-duration="1000">
                        <div class="card-body">
                            <img src="assets/web/images/icon_business_loan.png" alt="icon" class="img-icon">
                            <h3 class="card-title">icon business loan</h3>
                            <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex">
                    <div class="card" data-aos="zoom-in-left" data-aos-duration="1000">
                        <div class="card-body">
                            <img src="assets/web/images/icon_capital_markets.png" alt="icon" class="img-icon">
                            <h3 class="card-title">capital markets</h3>
                            <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Financial Values end -->

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
