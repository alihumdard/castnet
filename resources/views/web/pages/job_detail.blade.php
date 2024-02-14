@extends('web.layouts.default')
@section('content')

     <!-- Breadcrumb Start -->
     <section class="section_breadcrumb job_detail_bg">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="breadcrumb_title">Job Details</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="index.html">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Job Details</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb End -->

    <!-- Deal Job Start -->
    <section class="section_job_details section_job_details_bg">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12">
                    <div class="detail_job_card">
                        <div class="deal-flex">
                            <div class="icon-box">
                                <img src="{{ asset('assets/web/images/logo.png') }}" alt="logo" class="img-logo">
                                <!-- <div class="icon">
                                    <span>deal!</span>
                                </div> -->
                            </div>
                            <div class="content-box text-center text-lg-start">
                                <h2 class="title">{{ $selectedJob->job_title }}</h2>
                                {{-- <p class="text">We connect top talents with top companies</p> --}}
                                <div class="icon-media">
                                    <!-- <div class="d-flex align-items-center gap-2">
                                        <img src="assets/images/icon_tech.png" alt="icon">
                                        <p class="icon-text">tech</p>
                                    </div> -->
                                    <div class="d-flex align-items-center gap-2">
                                        <img src="{{ asset('assets/web/images/icon_loc.png') }}" alt="icon">
                                        <p class="icon-text">Punjab, Pakistan</p>
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        @foreach(explode(',',$selectedJob->duration_detail) as $item)
                                        <img src="{{ asset('assets/web/images/icon_bag.png') }}" alt="icon">
                                        <span class="tag">{{ $item }}</span>
                                        @endforeach
                                    </div>
                                    <!-- <div class="d-flex align-items-center gap-2">
                                        <img src="assets/images/icon_usergroup.png" alt="icon">
                                        <p class="icon-text">1 &dash; 50 employees</p>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="job-content">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                            <h2 class="title">Job Description:</h2>
                            <p style="color: white">{{ $selectedJob->job_description }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Deal Job End -->

    <!-- Active Job Start -->
    <section class="section_active_job">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="active_title">Apply for Job</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <form action="{{ route('job.application',$selectedJob->id) }}" id="application_form" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row gy-4">
                            <div class="col-md-6" >
                                <div class="form-group errorshow">
                                <input type="text" class="form-control" placeholder="First name" name="first_name">
                                </div>
                            </div>
                            <div class="col-md-6" >
                                <div class="form-group errorshow">
                                <input type="text" class="form-control" placeholder="Last name" name="last_name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group errorshow">
                                <input type="email" class="form-control" placeholder="Your email address" name="email">
                                </div>
                            </div>
                            <div class="col-md-6" >
                                <div class="form-group errorshow">
                                <input type="text" class="form-control" placeholder="Phone No#" name="phone_number">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group errorshow">
                                    <input type="file" class="form-upload" name="cv">
                                </div>
                                @error('cv')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-12 text-center">
                                <button type="submit" class="btn-submit">submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Active Job End -->
    @stop
    @push('scripts')
<script src="{{ asset('assets/web/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
<script src="{{ asset('assets/web/plugins/jquery-validation/additional-methods.min.js') }}"></script>

<script>
    $('#application_form').validate({
        rules: {
            fName: {
                required: true,
            },
            lName: {
                required: true,
            },
            address: {
                required: true,
            },
            number: {
                required: true,
            },
            cv: {
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
