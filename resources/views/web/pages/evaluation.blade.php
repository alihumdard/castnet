@extends('web.layouts.default')
@section('content')

<!-- Breadcrumb Start -->
    <section class="section_breadcrumb membership_bg" style="
    background: linear-gradient(90deg, rgba(7, 27, 52, 0.80) 0%, rgba(7, 27, 52, 0.61) 51.46%, rgba(7, 27, 52, 0.42) 99.24%, rgba(7, 27, 52, 0.28) 99.7%, rgba(7, 27, 52, 0.00) 100%), url({{ asset('assets/web/images/' . $banner->image) }}) center no-repeat;
    background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="breadcrumb_title">membership evaluation</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('web.index') }}">home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('web.membership') }}">membership</a></li>
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
                    <h2 class="section_title">{{ $section1->title }}</h2>
                    {!! $section1->description !!}
                </div>
                <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-duration="1000">
                    <div class="img_border">
                        <img src="{{ asset('assets/web/images/'.$section1->image) }}" alt="evaluation">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Evaluation End -->

    <!-- Evaluation Form Start -->
    @if(Auth::check() && Auth::user()->type == 3)
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
    @endif
    <!-- Evaluation Form End -->

    <!-- Accessibility Start -->
    <section class="section_block accessibility">
        <div class="container">
            <div class="row gy-5 gy-md-0 gx-md-5">
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
                    <div class="img_border">
                        <img src="{{ asset('assets/web/images/'.$section3->image) }}" alt="accessibility">
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000">
                    <h2 class="section_title">{{ $section3->title }}</h2>
                    {!! $section3->description !!}
                </div>
            </div>
        </div>
    </section>
    <!-- Accessibility End -->

    <!-- Benefits Assessment Start -->
    <section class="section_block evaluation light_blue_bg">
        <div class="container">
            <div class="row gy-5 gy-lg-0 gx-md-5">
                <div class="col-lg-6 order-2 order-lg-1" data-aos="fade-right" data-aos-duration="1000">
                    <h2 class="section_title">{{ $section4->title }}</h2>
                    {!! $section4->description !!}
                </div>
                <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-duration="1000">
                    <div class="img_border">
                        <img src="{{ asset('assets/web/images/'.$section4->image) }}" alt="benefit-assesment">
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
