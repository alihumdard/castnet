@extends('web.layouts.default')
@section('content')
{{-- @dd($joinLevels); --}}
<!-- Breadcrumb Start -->
<section class="section_breadcrumb membership_bg" style="
background: linear-gradient(90deg, rgba(7, 27, 52, 0.80) 0%, rgba(7, 27, 52, 0.61) 51.46%, rgba(7, 27, 52, 0.42) 99.24%, rgba(7, 27, 52, 0.28) 99.7%, rgba(7, 27, 52, 0.00) 100%), url({{ asset('assets/web/images/' . $banner->image) }}) center no-repeat;
background-size: cover;">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="breadcrumb_title">join our membership</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ route('web.index') }}">home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('web.membership') }}">membership</a></li>
                        <li class="breadcrumb-item active" aria-current="page">join</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb End -->

<!-- Membership Cards Start -->
<section class="section_block section_membership_cards">
    <div class="container">
        <div class="row mb-50">
            <div class="col-12">
                <h2 class="section_title" data-aos="fade-up" data-aos-duration="1000">membership levels</h2>
            </div>
        </div>
        <div class="row gy-4">
            @foreach($joins as $join)
            <div class="col-md-4 col-lg-4 d-flex">
                <div class="card" data-aos="zoom-in-right" data-aos-duration="1000">
                    <div class="card-body">
                        <h3 class="card-title">{{ $join->title }}</h3>
                        <p class="card-text">{{ $join->description }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Membership Cards end -->

<!-- Membership Form Start -->
<section class="section_block membership_form">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="#">
                    <div class="form_box" data-aos="zoom-in" data-aos-duration="1000">
                        <h2 class="section_title">company information</h2>
                        <div class="row gy-4">
                            <div class="col-12 col-md-6">
                                <input type="text" class="form-control" placeholder="Organization Name">
                            </div>
                            <div class="col-12 col-md-6">
                                <input type="text" class="form-control" placeholder="Phone Number">
                            </div>
                            <div class="col-12 col-md-6">
                                <input type="text" class="form-control" placeholder="Website Address">
                            </div>
                            <div class="col-12 col-md-6">
                                <input type="text" class="form-control" placeholder="Number of Employees">
                            </div>
                            <div class="col-12 col-md-12">
                                <input type="email" class="form-control" placeholder="Billing Email">
                            </div>
                            <div class="col-12 col-md-12">
                                <input type="text" class="form-control" placeholder="Billing Address">
                            </div>
                            <div class="col-12 col-md-6">
                                <input type="text" class="form-control" placeholder="Billing City">
                            </div>
                            <div class="col-12 col-md-6">
                                <input type="text" class="form-control" placeholder="Billing State">
                            </div>
                            <div class="col-12 col-md-6">
                                <input type="text" class="form-control" placeholder="Billing Zip (Billing zip code must match credit card billing address)">
                            </div>
                            <div class="col-12 col-md-6">
                                <input type="text" class="form-control" placeholder="Billing Country">
                            </div>
                            <div class="col-12">
                                <div class="checkbox-border">
                                    <h3 class="checkbox-title">Is the billing address the same as the Physical Address?</h3>
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
                        </div>
                    </div>
                    <div class="form_box" data-aos="zoom-in" data-aos-duration="1000">
                        <h2 class="section_title">primary contact information</h2>
                        <div class="row gy-4">
                            <div class="col-12 col-md-6">
                                <input type="text" class="form-control" placeholder="First Name">
                            </div>
                            <div class="col-12 col-md-6">
                                <input type="text" class="form-control" placeholder="Last Number">
                            </div>
                            <div class="col-12 col-md-6">
                                <input type="text" class="form-control" placeholder="Title">
                            </div>
                            <div class="col-12 col-md-6">
                                <input type="text" class="form-control" placeholder="Phone">
                            </div>
                            <div class="col-12 col-md-12">
                                <input type="email" class="form-control" placeholder="Email">
                            </div>
                        </div>
                    </div>
                    <div class="form_box" data-aos="zoom-in" data-aos-duration="1000">
                        <h2 class="section_title">membership level</h2>
                        <div class="row gy-4">
                            <div class="col-12 col-md-12">
                                <select class="form-select">
                                    <option selected>Please Select A Member Level</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form_box" data-aos="zoom-in" data-aos-duration="1000">
                        <h2 class="section_title">about your organization</h2>
                        <div class="row gy-4">
                            <div class="col-12 col-md-12">
                                <select class="form-select">
                                    <option selected>Please select a category that best describes your business</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-12">
                                <select class="form-select">
                                    <option selected>Ownership Structure</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form_box" data-aos="zoom-in" data-aos-duration="1000">
                        <h2 class="section_title m-0">reasons for joining</h2>
                        <p class="col-md-7 mx-auto joining_text">What are your reasons for joining the CASTNET Chamber? You may select as many options as you would like.</p>
                        <div class="row gy-4">
                            <div class="col-12 col-md-12">
                                <select class="form-select">
                                    <option selected>Select Options</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="text-center" data-aos="fade-right" data-aos-duration="1000">
                        <button type="submit" class="btn btn-submit">submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Membership Form end -->

@stop
