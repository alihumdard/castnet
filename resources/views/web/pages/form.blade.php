@extends('web.layouts.default')
@section('content')

    <!-- Breadcrumb Start -->
    <section class="section_breadcrumb forms_bg-1">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="breadcrumb_title">Forms</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="index.html">home</a></li>
                            <li class="breadcrumb-item"><a href="about_us.html">FINANCIAL</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Forms</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb End -->

    <!-- Event Request Form Start -->
    <section class="section_block request_form">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12">
                    <h2 class="section_title" data-aos="fade-up" data-aos-duration="1000">Financial Form</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <form action="{{route('charge.financial')}}" method="POST" enctype="multipart/form-data" id="financial_form" data-aos="zoom-in" data-aos-duration="1000">
                        @csrf
                        <div class="row gy-4">
                            <div class="col-md-6 errorshow">
                                <input type="text" class="form-control" name="first_name" value="{{ session('formData.first_name') }}" placeholder="First Name">
                            </div>
                            <div class="col-md-6 errorshow">
                                <input type="text" class="form-control" placeholder="Last Name" name="last_name" value="{{ session('formData.last_name') }}">
                            </div>
                            <div class="col-md-6 errorshow">
                                <input type="email" class="form-control" placeholder="Email" name="email" value="{{ session('formData.email') }}">
                            </div>
                            <div class="col-md-6 errorshow">
                                <input type="number" class="form-control" placeholder="Phone" name="phone" value="{{ session('formData.phone') }}">
                            </div>
                            <div class="col-md-12 errorshow">
                                <input type="text" class="form-control" placeholder="Business Name" name="business_name" value="{{ session('formData.business_name') }}">
                            </div>
                            <div class="col-md-12 errorshow">
                                <input type="text" class="form-control" placeholder="Business Address" name="business_address" value="{{ session('formData.business_address') }}">
                            </div>
                            <div class="col-md-4 errorshow">
                                <select class="form-select" name="fund_purpose">
                                    <option selected disabled>Purpose of Funding</option>
                                    <option value="Investments" {{ session('formData.fund_purpose') == 'Investments' ? 'selected' : '' }}>Investments</option>
                                    <option value="Loans" {{ session('formData.fund_purpose') == 'Loans' ? 'selected' : '' }}>Loans</option>
                                    <option value="Grants" {{ session('formData.fund_purpose') == 'Grants' ? 'selected' : '' }}>Grants</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-group errorshow">
                                    <input type="text" class="form-control" value="$20" disabled>
                                </div>
                            </div>
                            <div class="col-md-4 errorshow">
                                <input type="text" class="form-control" placeholder="Country" name="country" value="{{ session('formData.country') }}">
                            </div>
                            <div class="col-md-12">
                                <div class="errorshow">
                                <div class="checkbox-border">
                                    <h3 class="checkbox-title">Business Type</h3>
                                    <div class="form-check py-5">
                                        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
                                            <div class="col">
                                                <input type="radio" class="form-check-input" id="btype1" name="business_type" value="Private Limited Company" {{ session('formData.business_type') == 'Private Limited Company' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="btype1">Private Limited Company</label>
                                            </div>
                                            <div class="col">
                                                <input type="radio" class="form-check-input" id="btype2" name="business_type" value="Public Listed Company" {{ session('formData.business_type') == 'Public Listed Company' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="btype2">Public Listed Company</label>
                                            </div>
                                            <div class="col">
                                                <input type="radio" class="form-check-input" id="btype3" name="business_type" value="Cooperative" {{ session('formData.business_type') == 'Cooperative' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="btype3">Cooperative</label>
                                            </div>
                                            <div class="col">
                                                <input type="radio" class="form-check-input" id="btype4" name="business_type" value="Sole Proprietorship" {{ session('formData.business_type') == 'Sole Proprietorship' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="btype4">Sole Proprietorship</label>
                                            </div>
                                            <div class="col">
                                                <input type="radio" class="form-check-input" id="btype5" name="business_type" value="Partnership" {{ session('formData.business_type') == 'Partnership' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="btype5">Partnership</label>
                                            </div>
                                            <div class="col">
                                                <input type="radio" class="form-check-input" id="btype6" name="business_type" value="Other" {{ session('formData.business_type') == 'Other' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="btype6">Other</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="col-md-12 errorshow">
                                    <div class="checkbox-border">
                                        <h3 class="checkbox-title">Your Net Worth</h3>
                                        <div class="form-check py-5">
                                            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4">
                                                <div class="col">
                                                    <input type="radio" id="newtop1" class="form-check-input" name="net_worth" value="More than $320k" {{ session('formData.net_worth') == 'More than $320k' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="newtop1">More than $320k</label>
                                                </div>
                                                <div class="col">
                                                    <input type="radio" id="newtop2" class="form-check-input" name="net_worth" value="Less than $320k" {{ session('formData.net_worth') == 'Less than $320k' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="newtop2">Less than $320k</label>
                                                </div>
                                                <div class="col">
                                                    <input type="radio" id="newtop3" class="form-check-input" name="net_worth" value="I am not sure" {{ session('formData.net_worth') == 'I am not sure' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="newtop3">I am not sure</label>
                                                </div>
                                                <div class="col">
                                                    <input type="radio" id="newtop4" class="form-check-input" name="net_worth" value="Other" {{ session('formData.net_worth') == 'Other' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="newtop4">Other</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group errorshow">
                                <select class="form-select" name="program">
                                    <option selected disabled>Select Program</option>
                                    <option value="Advocacy Program" {{ session('formData.program') == 'Advocacy Program' ? 'selected' : '' }}>Advocacy Program</option>
                                    <option value="Active Project" {{ session('formData.program') == 'Active Project' ? 'selected' : '' }}>Active Project</option>
                                    <option value="Planned Project" {{ session('formData.program') == 'Planned Project' ? 'selected' : '' }}>Planned Project</option>
                                    <option value="Development / Prototype" {{ session('formData.program') == 'Development / Prototype' ? 'selected' : '' }}>Development / Prototype</option>
                                    <option value="Research / Feacibility Reports" {{ session('formData.program') == 'Research / Feacibility Reports' ? 'selected' : '' }}>Research / Feacibility Reports</option>
                                    <option value="Event / Workshop" {{ session('formData.program') == 'Event / Workshop' ? 'selected' : '' }}>Event / Workshop</option>
                                    <option value="Education / Training" {{ session('formData.program') == 'Education / Training' ? 'selected' : '' }}>Education / Training</option>
                                </select>
                            </div>
                            </div>
                            <div class="col-md-6 errorshow">
                                <input type="text" class="form-control" name="recent_year_income"
                                    placeholder="Declared Personal Income for Recent Year" value="{{ session('formData.recent_year_income') }}">
                            </div>
                            <div class="upl-head">
                                <h2 class="form-heading-upl">Please upload related documents about partnerships, shareholder's fund, key management.</h2>
                            </div>
                            <div class="col-md-4 mx-auto errorshow">
                                <input type="file" name="file" class="form-control" id="">
                            </div>
                            <div class="form_box" data-aos="zoom-in" data-aos-duration="1000">
                                <h2 class="section_title" style="margin-bottom: 25px;">Payment Details</h2>
                                <div class="row gy-4" style="margin-bottom: 15px">
                                    <div class="col-12 col-md-6">
                                        <div class="form-group errorshow">
                                            <input type="text" class="form-control" placeholder="Name on Card" name="full_name" value="{{ session('formData.full_name') }}">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group errorshow">
                                            <input type="number" class="form-control" min="1" placeholder="Card Number" name="card_number" value="{{ session('formData.card_number') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row gy-4">
                                    <div class="col-12 col-md-4">
                                        <div class="form-group errorshow">
                                        <input type="number" class="form-control" placeholder="CVC" name="cvv" value="{{ session('formData.cvv') }}">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="form-group errorshow">
                                            <select class="form-control" name="expiry_month">
                                                <option disabled selected>MM</option>
                                                @foreach(range(1, 12) as $month)
                                                    <option value="{{$month}}" {{ session('formData.expiry_month') == $month ? 'selected' : '' }}>{{$month}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="form-group errorshow">
                                            <select class="form-control" name="expiry_year">
                                                <option disabled selected>YYYY</option>
                                                @foreach(range(date('Y'), date('Y') + 10) as $year)
                                                    <option value="{{$year}}" {{ session('formData.expiry_year') == $year ? 'selected' : '' }}>{{$year}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center mt-4" data-aos="fade-right" data-aos-duration="1000">
                                    <button type="submit" class="btn btn-submit1">submit</button>
                                </div>
                            </div>
        
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Event Request Form End -->

    @stop
    @push('scripts')
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script>
    $('#financial_form').validate({
        rules: {
            first_name: {
                required: true,
            },
            last_name: {
                required: true,
            },
            email: {
                required: true,
                email: true,
            },
            phone: {
                required: true,
            },
            business_name: {
                required: true,
            },
            business_address: {
                required: true,
            },
            fund_purpose: {
                required: true,
            },
            country: {
                required: true,
            },
            business_type: {
                required: true,
            },
            net_worth: {
                required: true,
            },
            program: {
                required: true,
            },
            recent_year_income: {
                required: true,
            },
            file: {
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
        },
        messages: {
            email: {
                required: "Please enter your email address.",
                email: "Please enter a valid email address."
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

    $("body").on("submit", "#join_form", function (e) {
        var data = $('#email_valid').val();
        if(data=='not valid'){
            e.preventDefault();
        }
   });
</script>
@endpush