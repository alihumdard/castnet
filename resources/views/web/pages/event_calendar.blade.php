@extends('web.layouts.default')
@section('content')

    <!-- Breadcrumb Start -->
    <section class="section_breadcrumb event_calendar_bg">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="breadcrumb_title">Event Calendar</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="index.html">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Event Calendar</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb End -->

    <!-- Calendar Start -->
    <section class="section_calendar">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-12">
                    <span class="bg-md-primary"></span>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row gy-5 gy-md-0 gx-md-5">
                <div class="col-md-4 col-lg-4">
                    <div class="card" data-aos="fade-right" data-aos-duration="1000">
                        <div class="card-body">
                            <h3 class="card-title">filter events</h3>
                            <p class="card-text">point of interest</p>
                            <form action="#">
                                <div class="input-group mb-4">
                                    <span class="input-group-text" id="search">
                                        <img src="assets/web/images/icon_map.png" alt="map icon">
                                    </span>
                                    <input type="search" class="form-control" placeholder="Places, Cities">
                                </div>
                                <h3 class="card-title">category</h3>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="all">
                                    <label class="form-check-label" for="all"> All </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="chamber">
                                    <label class="form-check-label" for="chamber"> Chamber Events </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="community">
                                    <label class="form-check-label" for="community"> Community Events </label>
                                </div>
                                <button type="submit" class="btn btn-primary">reset filters</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-lg-8" data-aos="fade-left" data-aos-duration="1000">
                    <form action="#" class="form_search">
                        <div class="row gy-4 gy-md-0">
                            <div class="col-md-6">
                                <label for="keyword" class="form-label">Keyword</label>
                                <input type="text" class="form-control" placeholder="search" id="keyword">
                            </div>
                            <div class="col-md-4">
                                <label for="date" class="form-label">Date</label>
                                <input type="date" class="form-control" placeholder="search" id="date">
                            </div>
                            <div class="col-md-2 align-self-end">
                                <button type="submit" class="btn btn-primary">enter</button>
                            </div>
                        </div>
                    </form>
                    <div class="event_box">
                        <h3 class="event_title">CHiPs for Kids Toy Drive at Plaza West Covina</h3>
                        <p class="event_meta">01 December 2023 at 11:00 am - 7:00 pm PT</p>
                        <p class="event_desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <a href="#" class="btn btn-primary">Community Events</a>
                    </div>
                    <div class="event_box">
                        <h3 class="event_title">Holiday VIP Reception</h3>
                        <p class="event_meta">01 December 2023 at 11:00 am - 7:00 pm PT</p>
                        <p class="event_desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <a href="#" class="btn btn-primary">Community Events</a>
                    </div>
                    <div class="event_box">
                        <h3 class="event_title">Women in Leadership</h3>
                        <p class="event_meta">01 December 2023 at 11:00 am - 7:00 pm PT</p>
                        <p class="event_desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <a href="#" class="btn btn-primary">Community Events</a>
                    </div>
                    <div class="event_box">
                        <h3 class="event_title">Social Media Essentials For Business</h3>
                        <p class="event_meta">01 December 2023 at 11:00 am - 7:00 pm PT</p>
                        <p class="event_desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <a href="#" class="btn btn-primary">Community Events</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Calendar End -->

    <!-- Event CTA Start -->
    <section class="section_block event_cta">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto" data-aos="fade-right" data-aos-duration="1000">
                    <h2 class="section_title">Would you like to submit an event to our calendar?</h2>
                    <p class="text col-md-10 mx-auto">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen.</p>
                    <div class="d-flex flex-column flex-md-row align-items-center justify-content-center gap-3">
                        <a href="#" class="btn btn-primary">
                            <span>Global Event Calendar Request</span>
                        </a>
                        <a href="#" class="btn btn-primary">
                            <span>Community Calendar Request</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Event CTA End -->

    @stop