@extends('web.layouts.default')
@section('content')

    <!-- Breadcrumb Start -->
    <section class="section_breadcrumb partners_sponsors_bg" style="
    background: linear-gradient(90deg, rgba(7, 27, 52, 0.80) 0%, rgba(7, 27, 52, 0.61) 51.46%, rgba(7, 27, 52, 0.42) 99.24%, rgba(7, 27, 52, 0.28) 99.7%, rgba(7, 27, 52, 0.00) 100%), url({{ asset('assets/web/images/' . $banner->image) }}) center no-repeat;
    background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="breadcrumb_title">{{$banner->title}}</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('web.index') }}">home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('web.partners_sponsors') }}">partners/sponsors</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{$banner->title}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb End -->

    <!-- Become Partner Values Start -->
    <section class="section_block become_partner">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-10 mx-auto">
                    <h2 class="section_title" data-aos="fade-up" data-aos-duration="1000">{{$section1->title}}</h2>
                    <p class="section_text" data-aos="fade-up" data-aos-duration="1000">{!! $section1->description !!}</p>
                </div>
            </div>
            <div class="row gy-4 gy-lg-0 gx-lg-4">
                @foreach($section1s as $item)
                <div class="col-md-6 col-lg-3 d-flex">
                    <div class="card" data-aos="zoom-in-right" data-aos-duration="1000">
                        <div class="card-body">
                            <img src="{{ asset('assets/web/images/'.$item->image) }}" alt="icon" class="img-icon">
                            <h3 class="card-title">{{$item->title}}</h3>
                            <p class="card-text">{!! $item->description !!}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Become Partner Values End -->

    <!-- Section Alt Start -->
    <section class="section_block why_join light_blue_bg pb-50">
        <div class="container">
            <div class="row gy-5 gy-lg-0 gx-md-5">
                <div class="col-lg-6 order-2 order-lg-1" data-aos="fade-right" data-aos-duration="1000">
                    <h2 class="section_title fw-bold">{{$section2->title}}</h2>
                    <p class="about_text">{!! $section2->description !!}</p>
                </div>
                <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-duration="1000">
                    <div class="img_border">
                        <img src="{{ asset('assets/web/images/'.$section2->image) }}" alt="startup">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section Alt End -->

    <!-- Partnership Scale Start -->
    <section class="section_block member_benefits white_ghost_bg">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-9 mx-auto text-center" data-aos="fade-up" data-aos-duration="1000">
                    <h2 class="section_title mb-0">{{$title->title}}</h2>
                </div>
            </div>
            <div class="row gy-4">
                @foreach($section3 as $item)
                <div class="col-md-4 col-lg-4 d-flex">
                    <div class="card vip_card flex-grow-1 border-radius-0" data-aos="fade-right" data-aos-duration="1000">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="{{ asset('assets/web/images/'.$item->image) }}" alt="icon" class="img-icon">
                            </div>
                            <h3 class="card-text">{{$item->title}}</h3>
                            <p class="card-desc">{!! $item->description !!}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Partnership Scale End -->

    <!-- Sponsors Start -->
    <section class="section_block sponsors">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="section_title mb-5 mt-0" data-aos="fade-up" data-aos-duration="1000">our partners</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="swiper sponsorSwiper">
                        <div class="swiper-wrapper">
                            @foreach($partners as $partner)
                            <div class="swiper-slide">
                                <div class="img-box">
                                    <a href="{{$partner->url}}">
                                        <img src="{{ asset('assets/web/images/'.$partner->image)}}" alt="{{$partner->title}}" class="img-fluid">
                                        <h3 class="text-center">{{$partner->title}}</h3>
                                    </a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Sponsors End -->

    {{-- form start ********************************************************************************************** --}}
    <section class="section_block become_partner_form">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="section_title">Partnership Form</h2>
                    <form action="#">
                        <div class="form_box aos-init aos-animate" data-aos="zoom-in" data-aos-duration="1000">
                            <div class="row mb-4">
                                <div class="col-12">
                                    <h3 class="form_box_title">Partner Information:</h3>
                                </div>
                            </div>
                            <div class="row gy-4 mb-4 row_padding">
                                <div class="col-12 col-md-6">
                                    <input type="text" class="form-control" placeholder="Organization/Individual Name">
                                </div>
                                <div class="col-12 col-md-6">
                                    <input type="text" class="form-control" placeholder="Contact Person's Name">
                                </div>
                                <div class="col-12 col-md-6">
                                    <input type="email" class="form-control" placeholder="Email Address">
                                </div>
                                <div class="col-12 col-md-6">
                                    <input type="text" class="form-control" placeholder="Phone Number">
                                </div>
                                <div class="col-12 col-md-12">
                                    <input type="text" class="form-control" placeholder="Organization's Website (if applicable)">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-12">
                                    <h3 class="form_box_title">Partnership Interest Area:</h3>
                                </div>
                            </div>
                            <div class="row gy-4 mb-4 row_padding">
                                <div class="col-12">
                                    <select class="form-select">
                                        <option selected="">Industry Sectors</option>
                                        <option value="construction">Construction</option>
                                        <option value="agriculture">Agriculture</option>
                                        <option value="supply chain">Supply Chain</option>
                                        <option value="technology">Technology</option>
                                        <option value="natural_resources">Natural Resources</option>
                                        <option value="energy">Energy</option>
                                        <option value="textiles">Textiles</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <div class="checkbox-border">
                                        <h3 class="checkbox-title">Type of Partnership Interest</h3>
                                        <div class="row gy-3">
                                            <div class="col-md-4">
                                                <div class="form-check">
                                                    <input type="radio" class="form-check-input" name="partnership_interest" id="project_collaboration">
                                                    <label class="form-check-label" for="project_collaboration">Project Collaboration</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-check">
                                                    <input type="radio" class="form-check-input" name="partnership_interest" id="kind_support">
                                                    <label class="form-check-label" for="kind_support">In‐Kind Support</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-check">
                                                    <input type="radio" class="form-check-input" name="partnership_interest" id="expertise_sharing">
                                                    <label class="form-check-label" for="expertise_sharing">Expertise Sharing</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-check">
                                                    <input type="radio" class="form-check-input" name="partnership_interest" id="advocacy_programs">
                                                    <label class="form-check-label" for="advocacy_programs">Advocacy Programs</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <input type="text" class="form-control" placeholder="Target Geographic Region(s) for Partnership">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-12">
                                    <h3 class="form_box_title">Partnership Contribution Details:</h3>
                                </div>
                            </div>
                            <div class="row gy-4 mb-4 row_padding">
                                <div class="col-12">
                                    <textarea cols="30" rows="7" class="form-control" placeholder="Project Opportunities"></textarea>
                                </div>
                                <div class="col-12">
                                    <textarea cols="30" rows="7" class="form-control" placeholder="Non-Monetary Support Offered (e.g., services, expertise, equipment, software)"></textarea>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-12">
                                    <h3 class="form_box_title">Goals and Objectives of Partnership:</h3>
                                </div>
                            </div>
                            <div class="row gy-4 mb-4 row_padding">
                                <div class="col-12">
                                    <input type="text" class="form-control" placeholder="goals or objectives in partnering with C.A.S.T.N.E.T. (e.g., community impact, market expansion, technology transfer)">
                                </div>
                                <div class="col-12">
                                    <div class="checkbox-border">
                                        <h3 class="checkbox-title">Previous Partnership Experiences:</h3>
                                        <div class="row gy-3">
                                            <div class="col-12">
                                                <div class="form-check">
                                                    <input type="radio" class="form-check-input" name="previous_partnership" id="prev_yes">
                                                    <label class="form-check-label" for="prev_yes">Yes</label>
                                                    <input type="text" class="form-control w-md-50" placeholder="Details about past partnership experiences">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-check">
                                                    <input type="radio" class="form-check-input" name="previous_partnership" id="prev_no">
                                                    <label class="form-check-label" for="prev_no">No</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-12">
                                    <h3 class="form_box_title">Preferred Terms of Partnership:</h3>
                                </div>
                            </div>
                            <div class="row gy-4 mb-4 row_padding">
                                <div class="col-12">
                                    <div class="checkbox-border">
                                        <h3 class="checkbox-title">Duration of Partnership</h3>
                                        <div class="row gy-3">
                                            <div class="col-md-4">
                                                <div class="form-check d-inline-block">
                                                    <input type="radio" class="form-check-input" name="partnership_dur" id="short_term">
                                                    <label class="form-check-label" for="short_term">Short-Term</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4 text-md-center">
                                                <div class="form-check d-inline-block">
                                                    <input type="radio" class="form-check-input" name="partnership_dur" id="long_term">
                                                    <label class="form-check-label" for="long_term">Long Term</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <textarea cols="30" rows="7" class="form-control" placeholder="Expected Outcomes and Deliverables"></textarea>
                                </div>
                                <div class="col-12">
                                    <textarea cols="30" rows="7" class="form-control" placeholder="Non-Monetary Support Offered (e.g., services, expertise, equipment, software)"></textarea>
                                </div>
                            </div>
                            <div class="row gy-4 mb-4 row_padding">
                                <div class="col-12">
                                    <div class="checkbox-border">
                                        <h3 class="checkbox-title">Legal Compliance and Agreements</h3>
                                        <div class="row gy-3">
                                            <div class="col-12">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" name="legal_compliance" id="legal_compliance_agrre">
                                                    <label class="form-check-label" for="legal_compliance_agrre">Agreement to discuss legal terms and conditions</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" name="legal_compliance" id="legal_compliance_under">
                                                    <label class="form-check-label" for="legal_compliance_under">Understanding of data protection and privacy policy</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row gy-4 mb-4 row_padding">
                                <div class="col-12">
                                    <div class="checkbox-border">
                                        <h3 class="checkbox-title">How Did You Hear About Us?</h3>
                                        <div class="row gy-3">
                                            <div class="col-lg-3">
                                                <div class="form-check">
                                                    <input type="radio" class="form-check-input" name="hear_about" id="social_media">
                                                    <label class="form-check-label" for="social_media">Social Media</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-check">
                                                    <input type="radio" class="form-check-input" name="hear_about" id="referral">
                                                    <label class="form-check-label" for="referral">Referral</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-check">
                                                    <input type="radio" class="form-check-input" name="hear_about" id="event">
                                                    <label class="form-check-label" for="event">Event</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-check">
                                                    <input type="radio" class="form-check-input" name="hear_about" id="online_search">
                                                    <label class="form-check-label" for="online_search">Online Search</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-check">
                                                    <div class="d-flex gap-4 align-items-center">
                                                        <div>
                                                            <input type="radio" class="form-check-input" name="hear_about" id="hear_other">
                                                            <label class="form-check-label" for="hear_other">Other</label>
                                                        </div>
                                                        <input type="text" class="form-control w-md-50" placeholder="Details about past partnership experiences">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-12">
                                    <h3 class="form_box_title">Additional Information:</h3>
                                </div>
                            </div>
                            <div class="row gy-4 row_padding">
                                <div class="col-12">
                                    <div class="row gy-4 mb-4">
                                        <div class="col-12">
                                            <textarea cols="30" rows="7" class="form-control" placeholder="Information"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row gy-4 row_padding">
                                <div class="col-12">
                                    <div class="checkbox-border">
                                        <h3 class="checkbox-title">Data Protection Consent</h3>
                                        <div class="row gy-3">
                                            <div class="col-12">
                                                <div class="form-check d-inline-block">
                                                    <input type="radio" class="form-check-input" name="data_protection_consent" id="data_consent">
                                                    <label class="form-check-label" for="data_consent">Store and use the provided information for partnership purposes according to privacy laws</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-5 aos-init aos-animate" data-aos="fade-right" data-aos-duration="1000">
                            <button type="submit" class="btn btn-submit">Submit Partnership Inquiry</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    {{-- form end ********************************************************************************************** --}}
    
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