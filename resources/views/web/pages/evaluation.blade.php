@extends('web.layouts.default')
@section('content')

<!-- Breadcrumb Start -->
    <section class="section_breadcrumb membership_bg">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="breadcrumb_title">membership evaluation</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="index.html">home</a></li>
                            <li class="breadcrumb-item"><a href="membership.html">membership</a></li>
                            <li class="breadcrumb-item active" aria-current="page">evaluation</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb End -->

    <!-- Evaluation Start -->
    <section class="section_block evaluation">
        <div class="container">
            <div class="row gy-5 gy-lg-0 gx-md-5">
                <div class="col-lg-6 order-2 order-lg-1" data-aos="fade-right" data-aos-duration="1000">
                    {!! $section1Record -> description !!}
                </div>
                <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-duration="1000">
                    <div class="img_border">
                        <img src="{{ asset('assets/web/images/' . ($section1Record->image ?? '')) }}" alt="evaluation">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Evaluation End -->

    <!-- Evaluation Form Start -->
    <section class="evaluation_form">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form action="#">
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-4">
                                    <label for="q1" class="form-label">How satisfied are you with your membership experience?</label>
                                    <textarea id="q1" class="form-control" placeholder="Write Your Answer Here..." cols="30" rows="5"></textarea>
                                </div>
                                <div class="mb-4">
                                    <div class="checkbox-border">
                                        <h3 class="checkbox-title">Have you participated in any member events?</h3>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="yes">
                                            <label class="form-check-label" for="yes">Yes</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="no">
                                            <label class="form-check-label" for="no">No</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label for="q2" class="form-label">How would you describe your overall experience as a member of our program?</label>
                                    <textarea id="q2" class="form-control" placeholder="Write Your Answer Here..." cols="30" rows="5"></textarea>
                                </div>
                                <div class="mb-0">
                                    <label for="q3" class="form-label">Are there specific demographics or groups that you believe the program could better serve?</label>
                                    <textarea id="q3" class="form-control" placeholder="Write Your Answer Here..." cols="30" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-submit">submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Evaluation Form End -->

    <!-- Accessibility Start -->
    <section class="section_block accessibility">
        <div class="container">
            <div class="row gy-5 gy-md-0 gx-md-5">
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
                    <div class="img_border">
                        <img src="{{ asset('assets/web/images/' . ($section2Record->image ?? '')) }}" alt="accessibility">
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000">
                    {!! $section2Record -> description !!}
                </div>
            </div>
        </div>
    </section>
    <!-- Accessibility End -->

    <!-- Financial Performance Start -->
    <section class="section_block financial_performance">
        <div class="container">
            <div class="row">
                <div class="col-md-9 mx-auto text-center" data-aos="fade-up" data-aos-duration="1000">
                    <h2 class="section_title">Financial Performance</h2>
                    <p class="section_text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <img src="assets/web/images/performance_graph.png" alt="graph" class="img-fluid" data-aos="zoom-in" data-aos-duration="1000">
                </div>
            </div>
        </div>
    </section>
    <!-- Financial Performance End -->

    <!-- Benefits Assessment Start -->
    <section class="section_block evaluation light_blue_bg">
        <div class="container">
            <div class="row gy-5 gy-lg-0 gx-md-5">
                <div class="col-lg-6 order-2 order-lg-1" data-aos="fade-right" data-aos-duration="1000">
                    {!! $section3Record -> description !!}
                </div>
                <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-duration="1000">
                    <div class="img_border">
                        <img src="{{ asset('assets/web/images/' . ($section3Record->image ?? '')) }}" alt="benefit-assesment">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Benefits Assessment End -->

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
