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
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <h2 class="section_title" data-aos="fade-up" data-aos-duration="1000">{{$section1->title}}</h2>
                    <p class="section_text" data-aos="fade-up" data-aos-duration="1000">{!! $section1->description !!}</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Become Partner Values End -->

    <!-- Sponsorship Category Start -->
    <section class="section_block sponsorship_category">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12">
                    <h2 class="section_title" data-aos="fade-up" data-aos-duration="1000">{{$title->title}}</h2>
                </div>
            </div>
            <div class="row gy-4 gx-md-4">
                @foreach($section2 as $item)
                <div class="col-md-4 col-lg-4 d-flex">
                    <div class="card" data-aos="fade-right" data-aos-duration="1000">
                        <div class="card-body">
                            <h3 class="card-title">{{$item->title}}</h3>
                            <p class="card-text">{!! $item->description !!}</p>
                        </div>
                    </div>
                </div>
               @endforeach
            </div>
        </div>
    </section>
    <!-- Sponsorship Category End -->

    <!-- Sponsors Start -->
    <section class="section_block sponsors">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="section_title mb-5 mt-0" data-aos="fade-up" data-aos-duration="1000">{{ $title2->title }}</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="swiper sponsorSwiper">
                        <div class="swiper-wrapper">
                            @foreach($partners as $item)
                            <div class="swiper-slide">
                                <div class="img-box">
                                    <a href="{{$item->url}}">
                                        <img src="{{ asset('assets/web/images/'.$item->image) }}" alt="{{$item->title}}" class="img-fluid">
                                        <h3 class="text-center">{{$item->title}}</h3>
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

<!-- Become Sponsor Form Start -->
<section class="section_block become_sponsor_form">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="section_title">Sponsorship Form</h2>
                <form action="#">
                    <div class="form_box aos-init aos-animate" data-aos="zoom-in" data-aos-duration="1000">
                        <div class="row mb-4">
                            <div class="col-12">
                                <h3 class="form_box_title">Sponsor Information:</h3>
                            </div>
                        </div>
                        <div class="row gy-4 mb-4 row_padding">
                            <div class="col-12 col-md-6">
                                <input type="text" class="form-control" placeholder="Sponsor's Name">
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
                                <input type="text" class="form-control" placeholder="Website URL (optional)">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-12">
                                <h3 class="form_box_title">Sponsorship Interest Area:</h3>
                            </div>
                        </div>
                        <div class="row gy-4 mb-4 row_padding">
                            <div class="col-12 col-md-6">
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
                            <div class="col-12 col-md-6">
                                <select class="form-select">
                                    <option selected="">Interest in Sponsorship</option>
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
                                <input type="text" class="form-control" placeholder="Preferred Geographic Focus">
                            </div>
                            <div class="col-12">
                                <div class="checkbox-border">
                                    <h3 class="checkbox-title">Sponsorship Level Preferences</h3>
                                    <div class="row gy-3">
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="sponsorship_level" id="platinum_sponsor">
                                                <label class="form-check-label" for="platinum_sponsor">Platinum Sponsor</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="sponsorship_level" id="gold_sponsor">
                                                <label class="form-check-label" for="gold_sponsor">Gold Sponsor</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="sponsorship_level" id="silver_sponsor">
                                                <label class="form-check-label" for="silver_sponsor">Silver Sponsor</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="sponsorship_level" id="custom_sponsorship">
                                                <label class="form-check-label" for="custom_sponsorship">Custom Sponsorship</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-12">
                                <h3 class="form_box_title">Sponsorship Goals and Objectives:</h3>
                            </div>
                        </div>
                        <div class="row gy-4 mb-4 row_padding">
                            <div class="col-12">
                                <textarea cols="30" rows="7" class="form-control" placeholder="what you hope to achieve through their sponsorship"></textarea>
                            </div>
                            <div class="col-12">
                                <div class="checkbox-border">
                                    <h3 class="checkbox-title">Previous Sponsorship Experiences</h3>
                                    <div class="row gy-3">
                                        <div class="col-12">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="sponsorship_experiences" id="prev_yes">
                                                <label class="form-check-label" for="prev_yes">Yes</label>
                                                <input type="text" class="form-control w-md-50" placeholder="details about past sponsorships">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="sponsorship_experiences" id="prev_no">
                                                <label class="form-check-label" for="prev_no">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-12">
                                <h3 class="form_box_title">Budget Information:</h3>
                            </div>
                        </div>
                        <div class="row gy-4 mb-4 row_padding">
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Estimated Budget for Sponsorship">
                            </div>
                            <div class="col-md-6">
                                <select class="form-select">
                                    <option selected="">Preferred Payment Schedule</option>
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
                                    <h3 class="checkbox-title">Sponsorship Agreement Preferences</h3>
                                    <div class="row gy-3">
                                        <div class="col-12">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="sponsorship_preferences" id="pref_yes">
                                                <label class="form-check-label" for="pref_yes">Yes</label>
                                                <input type="text" class="form-control w-md-50" placeholder="Specific terms or conditions">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="sponsorship_preferences" id="pref_no">
                                                <label class="form-check-label" for="pref_no">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="checkbox-border">
                                    <h3 class="checkbox-title">Additional Support Offered</h3>
                                    <div class="row gy-3">
                                        <div class="col-md-4">
                                            <div class="form-check d-inline-block">
                                                <input type="radio" class="form-check-input" name="additional_support" id="kind_support">
                                                <label class="form-check-label" for="kind_support">In-kind Support (services, products, expertise)</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 text-md-center">
                                            <div class="form-check d-inline-block">
                                                <input type="radio" class="form-check-input" name="additional_support" id="volunteer_support">
                                                <label class="form-check-label" for="volunteer_support">Volunteer Support</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 text-md-center">
                                            <div class="form-check d-inline-block">
                                                <input type="radio" class="form-check-input" name="additional_support" id="other">
                                                <label class="form-check-label" for="other">Other</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-12">
                                <h3 class="form_box_title">How Did You Hear About Us?</h3>
                            </div>
                        </div>
                        <div class="row gy-4 row_padding">
                            <div class="col-12">
                                <select class="form-select">
                                    <option selected="">Select</option>
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
                                    <h3 class="checkbox-title">Data Protection Consent</h3>
                                    <div class="row gy-3">
                                        <div class="col-md-4">
                                            <div class="form-check d-inline-block">
                                                <input type="radio" class="form-check-input" name="data_protection_consent" id="compliance">
                                                <label class="form-check-label" for="compliance">GDPR compliance</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 text-md-center">
                                            <div class="form-check d-inline-block">
                                                <input type="radio" class="form-check-input" name="data_protection_consent" id="consent_to_store">
                                                <label class="form-check-label" for="consent_to_store">Consent to Store</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 text-md-center">
                                            <div class="form-check d-inline-block">
                                                <input type="radio" class="form-check-input" name="data_protection_consent" id="data_protection_consent_other">
                                                <label class="form-check-label" for="data_protection_consent_other">Other</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-5 aos-init aos-animate" data-aos="fade-right" data-aos-duration="1000">
                        <button type="submit" class="btn btn-submit">Submit Your Sponsorship Inquiry</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Become Sponsor Form End -->


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
