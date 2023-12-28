@extends('web.layouts.default')
@section('content')

<!-- Breadcrumb Start -->
<section class="section_breadcrumb membership_bg">
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
                <h2 class="section_title">why join the chamber?</h2>
                <p class="about_text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                <p class="about_text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p>
            </div>
            <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-duration="1000">
                <div class="img_border">
                    <img src="assets/web/images//why_join.png" alt="why-join">
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
            <div class="col-md-4 col-lg-4 d-flex">
                <div class="card border_p" data-aos="zoom-in-right" data-aos-duration="1000">
                    <div class="card-body">
                        <img src="assets/web/images//member_1.png" alt="member" class="img-icon">
                        <p class="card-text">Gain VIP access to key decision makers</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 d-flex">
                <div class="card border_s" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="card-body">
                        <img src="assets/web/images//member_2.png" alt="member" class="img-icon">
                        <p class="card-text">Increase profit margins by saving retirement plans</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 d-flex">
                <div class="card border_b" data-aos="zoom-in-left" data-aos-duration="1000">
                    <div class="card-body">
                        <img src="assets/web/images//member_3.png" alt="member" class="img-icon">
                        <p class="card-text">Raise visibility of your brand among influential leaders</p>
                    </div>
                </div>
            </div>
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
                <h2 class="section_title">ready to join?</h2>
                <p class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p>
                <div class="d-flex flex-column flex-md-row align-items-center justify-content-center gap-3 gap-md-5">
                    <a href="#" class="btn btn-primary">
                        <span>join chamber</span>
                        <img src="assets/web/images//icon_log.png" alt="login" class="img-login">
                    </a>
                    <a href="#" class="btn btn-contact">contact us</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Ready to Join end -->

@stop