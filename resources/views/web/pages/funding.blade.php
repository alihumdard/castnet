@extends('web.layouts.default')
@section('content')


    <!-- Breadcrumb Start -->
    <section class="section_breadcrumb financial_bg">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="breadcrumb_title">Funding</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('web.index') }}">home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('web.financial') }}">financial</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Funding</li>
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
            <div class="row gy-5 gy-lg-0 gx-md-5">
                <div class="col-lg-6 order-2 order-lg-1" data-aos="fade-right" data-aos-duration="1000">
                    <h2 class="section_title fw-bold">supporting business growth &amp; innovation</h2>
                    <p class="about_text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <p class="about_text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text.</p>
                </div>
                <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-duration="1000">
                    <div class="img_border">
                        <img src="assets/web/images/support_business_growth.png" alt="support_business_growth">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section Alt End -->

    <!-- Funding Values Start -->
    <section class="section_block membership_values">
        <div class="container">
            <div class="row gy-5 gy-md-0 gx-lg-5">
                <div class="col-md-4 col-lg-4 d-flex">
                    <div class="card border_p" data-aos="zoom-in-right" data-aos-duration="1000">
                        <div class="card-body p-4">
                            <img src="assets/web/images/debt_financing.png" alt="debt_financing" class="img-icon">
                            <p class="card-text fw-bold">Debt Financing</p>
                            <p class="card-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 d-flex">
                    <div class="card border_s" data-aos="zoom-in" data-aos-duration="1000">
                        <div class="card-body p-4">
                            <img src="assets/web/images/equity_financing.png" alt="equity_financing" class="img-icon">
                            <p class="card-text fw-bold">Equity Financing</p>
                            <p class="card-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 d-flex">
                    <div class="card border_p" data-aos="zoom-in-left" data-aos-duration="1000">
                        <div class="card-body p-4">
                            <img src="assets/web/images/govt_grants.png" alt="govt_grants" class="img-icon">
                            <p class="card-text fw-bold">Government Grants</p>
                            <p class="card-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Funding Values end -->

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
