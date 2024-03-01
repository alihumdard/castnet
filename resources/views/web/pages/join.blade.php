@extends('web.layouts.default')
@section('content')
<section class="section_breadcrumb membership_bg" style="
background: linear-gradient(90deg, rgba(7, 27, 52, 0.80) 0%, rgba(7, 27, 52, 0.61) 51.46%, rgba(7, 27, 52, 0.42) 99.24%, rgba(7, 27, 52, 0.28) 99.7%, rgba(7, 27, 52, 0.00) 100%), url({{ asset('assets/web/images/' . $banner->image) }}) center no-repeat;
background-size: cover;">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="breadcrumb_title">{{$banner->title}}</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ route('web.index') }}">home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('web.membership') }}">membership</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{$banner->title}}</li>
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
        <div class="row justify-content-center gy-4">
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
                <form action="{{ route('charge.member')}}" id="join_form" method="POST">
                    @csrf
                    <div class="form_box" data-aos="zoom-in" data-aos-duration="1000">
                        <h2 class="section_title">company information</h2>
                        <div class="row gy-4">
                            <div class="col-12 col-md-6">
                                <div class="form-group errorshow">
                                <input type="text" class="form-control" placeholder="Organization Name" name="organization_name">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group errorshow">
                                <input type="text" class="form-control" placeholder="Phone Number" name="phone_number">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group errorshow">
                                <input type="text" class="form-control" placeholder="Website Address" name="website_address">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group errorshow">
                                <input type="number" class="form-control" placeholder="Number of Employees" name="number_of_employees">
                                </div>
                            </div>
                            <div class="col-12 col-md-12">
                                <div class="form-group errorshow">
                                <input type="email" class="form-control" placeholder="Billing Email" name="billing_email">
                                </div>
                            </div>
                            <div class="col-12 col-md-12">
                                <div class="form-group errorshow">
                                <input type="text" class="form-control" placeholder="Billing Address" name="billing_address">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group errorshow">
                                <input type="text" class="form-control" placeholder="Billing City" name="billing_city">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group errorshow">
                                <input type="text" class="form-control" placeholder="Billing State" name="billing_state">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group errorshow">
                                <input type="text" class="form-control" placeholder="Billing Zip (Billing zip code must match credit card billing address)" name="zip">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group errorshow">
                                <input type="text" class="form-control" placeholder="Billing Country" name="billing_country">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group errorshow">
                                <div class="checkbox-border">
                                    <h3 class="checkbox-title">Is the billing address the same as the Physical Address?</h3>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" id="yes" name="address_check" value="1">
                                        <label class="form-check-label" for="yes">Yes</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" id="no" name="address_check" value="0">
                                        <label class="form-check-label" for="no">No</label>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form_box" data-aos="zoom-in" data-aos-duration="1000">
                        <h2 class="section_title">primary contact information</h2>
                        <div class="row gy-4">
                            <div class="col-12 col-md-6">
                                <div class="form-group errorshow">
                                <input type="text" class="form-control" placeholder="First Name" name="first_name">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group errorshow">
                                <input type="text" class="form-control" placeholder="Last Number" name="last_name">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group errorshow">
                                <input type="text" class="form-control" placeholder="Title" name="title">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group errorshow">
                                <input type="text" class="form-control" placeholder="Phone" name="primary_phone">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group errorshow">
                                <input type="email" class="form-control" placeholder="Email" name="primary_email">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group errorshow">
                                <input type="password" class="form-control" placeholder="Password" name="password">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form_box" data-aos="zoom-in" data-aos-duration="1000">
                        <h2 class="section_title">membership level</h2>
                        <div class="row gy-4">
                            <div class="col-12 col-md-12">
                                <div class="form-group errorshow">
                                <select class="form-select" name="membership_level">
                                    <option selected disabled>Please Select A Member Level</option>
                                    @foreach ($memberLevel as $level)
                                        <option value="{{ $level->dropdowns }}">{{ $level->dropdowns }}</option>
                                    @endforeach
                                </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form_box" data-aos="zoom-in" data-aos-duration="1000">
                        <h2 class="section_title">about your organization</h2>
                        <div class="row gy-4">
                            <div class="col-12 col-md-12">
                                <div class="form-group errorshow">
                                <select class="form-select" name="about_organization">
                                    <option selected disabled>Please select a category that best describes your business</option>
                                    @foreach ($businessDescription as $level) 
                                        <option value="{{ $level->dropdowns }}">{{ $level->dropdowns }}</option>
                                    @endforeach
                                </select>
                                </div>
                            </div>
                            <div class="col-12 col-md-12">
                                <div class="form-group errorshow">
                                <select class="form-select" name="ownership_structure">
                                    <option selected disabled>Ownership Structure</option>
                                    @foreach ($ownershipStructure as $level)
                                        <option value="{{ $level->dropdowns }}">{{ $level->dropdowns }}</option>
                                    @endforeach
                                </select>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form_box" data-aos="zoom-in" data-aos-duration="1000">
                        <h2 class="section_title m-0">reasons for joining</h2>
                        <p class="col-md-7 mx-auto joining_text">What are your reasons for joining the CASTNET Chamber? You may select as many options as you would like.</p>
                        <div class="row gy-4">
                            <div class="col-12 col-md-12">
                                <div class="form-group errorshow">
                                    <select class="form-select" name="reason_to_join">
                                        <option selected disabled>Select Options</option>
                                        @foreach ($reasonsForJoining as $level)
                                            <option value="{{ $level->dropdowns }}">{{ $level->dropdowns }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form_box" data-aos="zoom-in" data-aos-duration="1000">
                        <h2 class="section_title">Payment Details</h2>
                        <div class="row gy-4" style="margin-bottom: 15px">
                            <div class="col-12 col-md-6">
                                <div class="form-group errorshow">
                                <input type="text" class="form-control" placeholder="Name on Card" name="full_name">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group errorshow">
                                <input type="number" class="form-control" min="1" placeholder="Card Number" name="card_number">
                                </div>
                            </div>
                        </div>
                        <div class="row gy-4">
                            <div class="col-12 col-md-4">
                                <div class="form-group errorshow">
                                <input type="number" class="form-control" placeholder="CVC" name="cvv">
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-group errorshow">
                                    <select class="form-control" name="expiry_month">
                                        <option disabled selected>MM</option>
                                        @foreach(range(1, 12) as $month)
                                            <option value="{{$month}}">{{$month}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-group errorshow">
                                    <select class="form-control" name="expiry_year">
                                        <option disabled selected>YYYY</option>
                                        @foreach(range(date('Y'), date('Y') + 10) as $year)
                                            <option value="{{$year}}">{{$year}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-4" data-aos="fade-right" data-aos-duration="1000">
                            <button type="submit" class="btn btn-submit">submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Membership Form end -->

@stop
@push('scripts')
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script>
    $('#join_form').validate({
        rules: {
            organization_name: {
                required: true,
            },
            full_name: {
                required: true,
            },
            card_number: {
                required: true,
                number: true,
                creditcard: true,
            },
            expiry_month: {
                required: true,
            },
            expiry_year: {
                required: true,
            },
            cvv: {
                required: true,
                number: true,
                maxlength: 4,
            },
            phone_number: {
                required: true,
            },
            website_address: {
                required: true,
            },
            number_of_employees: {
                required: true,
            },
            billing_email: {
                required: true,
            },
            billing_address: {
                required: true,
            },
            billing_city: {
                required: true,
            },
            billing_state: {
                required: true,
            },
            zip: {
                required: true,
            },
            billing_country: {
                required: true,
            },
            address_check: {
                required: true,
            },
            first_name: {
                required: true,
            },
            last_name: {
                required: true,
            },
            title: {
                required: true,
            },
            primary_phone: {
                required: true,
            },
            primary_email: {
                required: true,
            },
            password: {
                required: true,
            },
            membership_level: {
                required: true,
            },
            about_organization: {
                required: true,
            },
            ownership_structure: {
                required: true,
            },
            reason_to_join: {
                required: true,
            },
        },
        errorElement: 'span',
        errorPlacement: function (error, element) {
            error.addClass('invalid-feedback');
            element.closest('.errorshow').append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        }
    });
</script>
@endpush
