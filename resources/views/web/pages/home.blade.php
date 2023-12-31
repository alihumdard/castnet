@extends('web.layouts.default')
@section('content')
@php
$setting = appSetting();
@endphp
<section class="hero" style="background:linear-gradient(90deg, #071B34 0%, rgba(7, 27, 52, 0.76) 51.46%, rgba(7, 27, 52, 0.00) 100%), url({{ asset('assets/web/images/'.$banner->banner) }}) right center no-repeat">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-8 mt-50">
                <span class="hero_tagline">{{ $banner->short_heading ?? '' }}</span>
                <h1 class="hero_title">{{$banner->heading ?? '' }}</h1>
                <p class="hero_text">{{$banner->description ?? '' }}</p>
                <div class="d-flex flex-column flex-md-row gap-4">
                    <a href="#" class="btn btn-primary">{{ $banner->button1 ?? ''}} <img src="assets/web/images/icon_log.png" alt="icon login" class="icon-login"></a>
                    <a href="#" class="btn btn-sponsor">{{ $banner->button2 ?? ''}} <img src="assets/web/images/icon_arrow.png" alt="icon login" class="icon-login"></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero End -->

<!-- Card Events Start -->
<section class="card_events">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-10 mx-auto">
                <div class="row gy-4">
                    @foreach($section1 as $item)
                    <div class="col-lg-4 d-flex">
                        <div class="card">
                            <div class="card-body">
                                <img src="{{ asset('assets/web/images/'.$item->image) }}" alt="group" class="img-card">
                                <h3 class="card-title">{{ $item->heading }}</h3>
                                <p class="card-text">{{ $item->description }}</p>
                            </div>
                            <div class="card-footer">
                                <a href="{{ $item->buttonlink }}" class="btn btn-secondary">{{ $item->button }}<img src="assets/web/images/icon_log_alt.png" alt="login"></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Card Events End -->

<!-- About Start -->
<section class="section_block about">
    <div class="container">
        <div class="row align-items-center gy-4 gy-md-0 gx-md-5">
            <div class="col-md-6 col-lg-6">
                <span class="sub_title">{{ $section2->heading ?? '' }}</span>
                <div style="color: white !important;font-size: inherit;
                font-family: inherit;">{!! $section2->description ?? '' !!}</div>
                <a href="{{ $section2->buttonlink ?? '' }}" class="btn btn-primary">{{$section2->button ?? ''}}<img src="assets/web/images/icon_arrow_alt.png" alt="icon login" class="img-icon"></a>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="img_border">
                    <img src="{{ asset('assets/web/images/'.$section2->image) }}" alt="about us">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About End -->

<!-- Principles Start -->
<section class="section_block principles">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <span class="sub_title">{{ $section3->title }}</span>
                <h2 class="section_title">{{ $section3->heading }}</h2>
            </div>
        </div>
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-mission-tab" data-bs-toggle="pill" data-bs-target="#pills-mission" type="button" role="tab" aria-controls="pills-mission" aria-selected="true">{{ $section3->subtitle1 }}</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-vision-tab" data-bs-toggle="pill" data-bs-target="#pills-vision" type="button" role="tab" aria-controls="pills-vision" aria-selected="false">{{ $section3->subtitle2 }}</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-purpose-tab" data-bs-toggle="pill" data-bs-target="#pills-purpose" type="button" role="tab" aria-controls="pills-purpose" aria-selected="false">{{ $section3->subtitle3 }}</button>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-mission" role="tabpanel" aria-labelledby="pills-mission-tab" tabindex="0">{{ $section3->description1 }}</div>
            <div class="tab-pane fade" id="pills-vision" role="tabpanel" aria-labelledby="pills-vision-tab" tabindex="0">{{ $section3->description2 }}</div>
            <div class="tab-pane fade" id="pills-purpose" role="tabpanel" aria-labelledby="pills-purpose-tab" tabindex="0">{{ $section3->description3 }}</div>
        </div>
    </div>
</section>
<!-- Principles End -->

<!-- Roadmap Start -->
<section class="section_block roadmap">
    <div class="container">
        <div class="row gy-5 gy-md-0">
            <div class="col-lg-6">
                <div class="img_border">
                    <img src="assets/web/images/laptop_desk.png" alt="laptop desk">
                </div>
            </div>
            <div class="col-lg-6">
                <span class="sub_title">our roadmap</span>
                <h2 class="section_title">how we're working for you</h2>
                {{--  <div class="accordion" id="accordionExample">
                    @forelse($roadmaps ?? [] as $key => $val)
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_{{$val['id'] ?? ''}}" aria-expanded="{{($loop->first) ? 'true' : 'false'}}" aria-controls="collapse_{{$val['id'] ?? ''}}">
                                <span class="text-secondary fs-2">{{ ++$key ?? '' }}</span>
                                <span class="font-roboto ms-4 p-1">{{ $val['title'] ?? '' }}</span>
                            </button>
                        </h2>
                        <div id="collapse_{{$val['id'] ?? ''}}" @class([ 'accordion-collapse' , 'collapse' , 'show'=> $loop->first]) data-bs-parent="#accordionExample">
                            <div class="accordion-body p-4">
                                <ul class="mb-0">
                                    {!! $val['desc'] ?? '' !!}
                                </ul>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_empty" aria-expanded="true" aria-controls="collapse_empty">
                                <span class="text-secondary fs-2">01</span>
                                <span class="font-roboto ms-4 p-1">No Records available </span>
                            </button>
                        </h2>
                        <div id="collapse_empty" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body p-4">
                                <ul class="mb-0">
                                    <li class="accordion-list-item">No Records available. please create road maps.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforelse

                </div>  --}}
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <span class="text-secondary fs-2">01</span>
                                <span class="font-roboto ms-4 p-1">Market Research and Needs Analysis</span>
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                            <div class="accordion-body p-4">
                                <ul class="mb-0">
                                    <li class="accordion-list-item">Develop or partner with digital platforms like BidLock for efficient source-to-pay processes.</li>
                                    <li class="accordion-list-item">Ensure these platforms are accessible, user-friendly, and customizable to various business needs.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <span class="text-secondary fs-2">02</span>
                                <span class="font-roboto ms-4 p-1">Building Digital Infrastructure</span>
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body p-4">
                                <ul class="mb-0">
                                    <li class="accordion-list-item">Develop or partner with digital platforms like BidLock for efficient source-to-pay processes.</li>
                                    <li class="accordion-list-item">Ensure these platforms are accessible, user-friendly, and customizable to various business needs.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <span class="text-secondary fs-2">03</span>
                                <span class="font-roboto ms-4 p-1">Networking and Partnership Development</span>
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body p-4"> 
                                <ul class="mb-0">
                                    <li class="accordion-list-item">Develop or partner with digital platforms like BidLock for efficient source-to-pay processes.</li>
                                    <li class="accordion-list-item">Ensure these platforms are accessible, user-friendly, and customizable to various business needs.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <span class="text-secondary fs-2">04</span>
                                <span class="font-roboto ms-4 p-1">Education and Resource Sharing</span>
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body p-4"> 
                                <ul class="mb-0">
                                    <li class="accordion-list-item">Develop or partner with digital platforms like BidLock for efficient source-to-pay processes.</li>
                                    <li class="accordion-list-item">Ensure these platforms are accessible, user-friendly, and customizable to various business needs.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                <span class="text-secondary fs-2">05</span>
                                <span class="font-roboto ms-4 p-1">Pilot Programs and Feedback Loops</span>
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body p-4"> 
                                <ul class="mb-0">
                                    <li class="accordion-list-item">Develop or partner with digital platforms like BidLock for efficient source-to-pay processes.</li>
                                    <li class="accordion-list-item">Ensure these platforms are accessible, user-friendly, and customizable to various business needs.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                <span class="text-secondary fs-2">06</span>
                                <span class="font-roboto ms-4 p-1">Scaling and Expansion</span>
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body p-4"> 
                                <ul class="mb-0">
                                    <li class="accordion-list-item">Develop or partner with digital platforms like BidLock for efficient source-to-pay processes.</li>
                                    <li class="accordion-list-item">Ensure these platforms are accessible, user-friendly, and customizable to various business needs.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                <span class="text-secondary fs-2">07</span>
                                <span class="font-roboto ms-4 p-1">Continuous Improvement and Adaptation</span>
                            </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body p-4"> 
                                <ul class="mb-0">
                                    <li class="accordion-list-item">Develop or partner with digital platforms like BidLock for efficient source-to-pay processes.</li>
                                    <li class="accordion-list-item">Ensure these platforms are accessible, user-friendly, and customizable to various business needs.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Roadmap End -->

<!-- Events Start -->
<section class="section_block events">
    <div class="container ps-lg-0 pe-lg-5">
        <div class="row mb-lg-60">
            <div class="col-12 text-center">
                <span class="sub_title">events</span>
                <h2 class="section_title">engage with us</h2>
            </div>
        </div>
        <div class="row align-items-center gy-3 gy-md-0 gx-md-5 border-y">
            <span class="border-rt"></span>
            <div class="col-lg-8 m-events px-3">
                <div class="swiper swiperEvents">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="card">
                                <img src="assets/web/images/event_1.png" alt="card" class="card-img-top">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h3 class="card-title font-roboto">
                                            <a href="#">lorem ipsum</a>
                                        </h3>
                                        <a href="#">
                                            <img src="assets/web/images/plus_vector.png" alt="plus" class="img-plus">
                                        </a>
                                    </div>
                                </div>
                                <div class="date_box">
                                    <span class="day">mon</span>
                                    <span class="date">16</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <img src="assets/web/images/event_2.png" alt="card" class="card-img-top">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h3 class="card-title font-roboto">
                                            <a href="#">lorem ipsum</a>
                                        </h3>
                                        <a href="#">
                                            <img src="assets/web/images/plus_vector.png" alt="plus" class="img-plus">
                                        </a>
                                    </div>
                                </div>
                                <div class="date_box">
                                    <span class="day">sat</span>
                                    <span class="date">18</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <img src="assets/web/images/event_1.png" alt="card" class="card-img-top">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h3 class="card-title font-roboto">
                                            <a href="#">lorem ipsum</a>
                                        </h3>
                                        <a href="#">
                                            <img src="assets/web/images/plus_vector.png" alt="plus" class="img-plus">
                                        </a>
                                    </div>
                                </div>
                                <div class="date_box">
                                    <span class="day">mon</span>
                                    <span class="date">20</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mt-5">
                        <div class="swiper-pagination"></div>
                        <div class="d-flex align-items-center gap-60">
                            <div class="swiper-button-prev">
                                <img src="assets/web/images/swiper_prev.png" alt="prev" class="swipe-arrow">
                            </div>
                            <div class="swiper-button-next">
                                <img src="assets/web/images/swiper_next.png" alt="next" class="swipe-arrow">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 m-upcoming">
                <h3 class="events_title">upcoming events</h3>
                <p class="events_text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen.</p>
                <a href="#" class="events_link">
                    <span>see all</span>
                    <img src="assets/web/images/icon_arrow_round.png" alt="arrow" class="icon_arrow">
                </a>
            </div>
            <span class="border-rb"></span>
        </div>
    </div>
</section>
<!-- Events End -->

<!-- Sponsors Start -->
<section class="section_block sponsors">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center">
                <span class="sub_title">our sponsors</span>
                <h2 class="section_title">Lorem Ipsum Dummy Text</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="swiper sponsorSwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="img-box">
                                <img src="assets/web/images/sponsor_1.png" alt="sponsor" class="img-fluid">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="img-box">
                                <img src="assets/web/images/sponsor_2.png" alt="sponsor" class="img-fluid">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="img-box">
                                <img src="assets/web/images/sponsor_3.png" alt="sponsor" class="img-fluid">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="img-box">
                                <img src="assets/web/images/sponsor_4.png" alt="sponsor" class="img-fluid">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="img-box">
                                <img src="assets/web/images/sponsor_5.png" alt="sponsor" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Sponsors End -->

<!-- Community News Start -->
<section class="section_block community pt-3 pb-0">
    <div class="container-fluid">
        <div class="row align-items-center gy-5 gy-md-0">
            <div class="col-md-6 offset-lg-1 col-lg-5 order-2 order-md-1">
                <div class="mt-content pb-5">
                    <span class="sub_title">community news</span>
                    <h2 class="section_title">don't miss an update</h2>
                    <p class="community_text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen.</p>
                    <a href="#" class="btn btn-primary">read more <img src="assets/web/images/icon_arrow_alt.png" alt="arrow" class="img-icon"></a>
                </div>
            </div>
            <div class="col-md-6 offset-lg-1 col-lg-5 px-0 order-1 order-md-2">
                <img src="assets/web/images/img_vector.png" alt="vector" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<!-- Community News End -->

<!-- Key Start -->
<section class="section_block key">
    <div class="container">
        <div class="row gy-5 gy-md-0 gx-lg-5">
            <div class="col-md-4 col-lg-4">
                <span class="sub_title">castnet focus</span>
                <h2 class="section_title">our key attributes</h2>
                <div class="img_border">
                    <img src="assets/web/images/img_key.png" alt="key">
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="key_box">
                    <div class="box_head">
                        <img src="assets/web/images/marker.png" alt="mark" class="img-marker">
                        <h3 class="key_title">Expanding Beyond Local Markets</h3>
                    </div>
                    <p class="key_text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p>
                </div>
                <div class="key_box">
                    <div class="box_head">
                        <img src="assets/web/images/marker.png" alt="mark" class="img-marker">
                        <h3 class="key_title">Sector&dash;Specific Focus</h3>
                    </div>
                    <p class="key_text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p>
                </div>
                <div class="key_box">
                    <div class="box_head">
                        <img src="assets/web/images/marker.png" alt="mark" class="img-marker">
                        <h3 class="key_title">Leveling the Playing Field</h3>
                    </div>
                    <p class="key_text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="key_box">
                    <div class="box_head">
                        <img src="assets/web/images/marker.png" alt="mark" class="img-marker">
                        <h3 class="key_title">Real Professional Opportunities</h3>
                    </div>
                    <p class="key_text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p>
                </div>
                <div class="key_box">
                    <div class="box_head">
                        <img src="assets/web/images/marker.png" alt="mark" class="img-marker">
                        <h3 class="key_title">Digital Integration</h3>
                    </div>
                    <p class="key_text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p>
                </div>
                <div class="key_box">
                    <div class="box_head">
                        <img src="assets/web/images/marker.png" alt="mark" class="img-marker">
                        <h3 class="key_title">Expanding Beyond Local Markets:</h3>
                    </div>
                    <p class="key_text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Key End -->

<!-- Impact Start -->
<section class="section_block impact">
    <div class="container">
        <div class="row">
            <div class="col-md-9 text-center mx-auto">
                <span class="sub_title">the imapct</span>
                <h2 class="section_title">Lorem Ipsum inquiriestment</h2>
                <p class="impact_text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p>
            </div>
        </div>
        <div class="row gy-4 gy-md-0 gx-md-5">
            <div class="col-md-4 col-lg-4">
                <div class="impact_box blue_bd">
                    <h3 class="box_title">650k</h3>
                    <p class="box_text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="impact_box second_bd">
                    <h3 class="box_title">135yrs</h3>
                    <p class="box_text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="impact_box blue_bd">
                    <h3 class="box_title">244k+</h3>
                    <p class="box_text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <a href="#" class="btn btn-primary">learn more <img src="assets/web/images/icon_arrow_alt.png" alt="" class="img-arrow"></a>
            </div>
        </div>
    </div>
</section>
<!-- Impact End -->
<!-- Modal Start -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row gx-4">
                    <div class="col-lg-5 text-center text-lg-start">
                        <img src="{{ asset('assets/web/images/'.$setting->popup_logo) }}" alt="logo" class="img-logo">
                    </div>
                    <div class="col-lg-7">
                        <h2 class="modal-title">castnet purpose</h2>
                        <p class="modal-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <p class="modal-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span>get started</span>
                            <img src="assets/web/images/icon_arrow_alt.png" alt="arrow">
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal End -->

@stop