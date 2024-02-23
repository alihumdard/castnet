@extends('web.layouts.default')
@section('content')

    <!-- Breadcrumb Start -->
    <section class="section_breadcrumb event_calendar_bg" style="
    background: linear-gradient(90deg, rgba(7, 27, 52, 0.80) 0%, rgba(7, 27, 52, 0.61) 51.46%, rgba(7, 27, 52, 0.42) 99.24%, rgba(7, 27, 52, 0.28) 99.7%, rgba(7, 27, 52, 0.00) 100%), url({{ asset('assets/web/images/' . $banner->image) }}) center no-repeat;
    background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="breadcrumb_title">{{$banner->title}}</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('web.index') }}">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{$banner->title}}</li>
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
                    <h2 class="section_title" data-aos="fade-up" data-aos-duration="1000">{{$title->title}}</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <form action="{{ route('event.request') }}" id="event_request" data-aos="zoom-in" method="post" data-aos-duration="1000">
                        @csrf
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="form-group errorshow">
                                <input type="text" name="title" class="form-control" placeholder="Event Title">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group errorshow">
                                <select name="event_category" class="form-select">
                                    <option selected disabled>Event Category</option>
                                    @foreach ($eventCategory as $level) 
                                        <option value="{{ $level->dropdowns }}">{{ $level->dropdowns }}</option>
                                    @endforeach
                                </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group errorshow">
                                <input type="text" name="event_info" class="form-control" placeholder="Event Information">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group errorshow">
                                <input type="text" class="form-control" name="startDate" placeholder="Start Date" onfocus="(this.type='date')" onblur="(this.type='text')">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group errorshow">
                                <input type="text" class="form-control" name="startTime" placeholder="Start Time" onfocus="(this.type='time')" onblur="(this.type='text')">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group errorshow">
                                <input type="text" class="form-control" name="endDate" placeholder="End Date" onfocus="(this.type='date')" onblur="(this.type='text')">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group errorshow">
                                <input type="text" class="form-control" name="endTime" placeholder="End Time" onfocus="(this.type='time')" onblur="(this.type='text')">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkbox-border">
                                    <h3 class="checkbox-title">event cost</h3>
                                    <div class="form-group errorshow">
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" id="free" name="event_cost" value="free">
                                        <label class="form-check-label" for="free">FREE</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" id="fee" name="event_cost" value="fee">
                                        <label class="form-check-label" for="fee">FEE</label>
                                    </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group errorshow">
                                <input type="text" name="fee" class="form-control" placeholder="Fee">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group errorshow">
                                <input type="text" name="firstName" class="form-control" placeholder="Event Contact - First Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group errorshow">
                                <input type="text" name="lastName" class="form-control" placeholder="Event Contact - Last Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group errorshow">
                                <input type="email" name="email" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group errorshow">
                                <input type="text" name="telephone" class="form-control" placeholder="Telephone">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkbox-border">
                                    <h3 class="checkbox-title">Are you a current Area Chamber Member</h3>
                                    <div class="form-group errorshow">
                                    <div class="form-check">
                                        <input type="radio" name="area" class="form-check-input" id="yes" value="yes">
                                        <label class="form-check-label" for="yes">Yes</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="area" class="form-check-input" id="no" value="no">
                                        <label class="form-check-label" for="no">No</label>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-primary">submit</button>
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
<script src="{{ asset('assets/web/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
<script src="{{ asset('assets/web/plugins/jquery-validation/additional-methods.min.js') }}"></script>

<script>
    $('#event_request').validate({
        rules: {
            title: {
                required: true,
            },
            event_category: {
                required: true,
            },
            event_info: {
                required: true,
            },
            startDate: {
                required: true,
            },
            startTime: {
                required: true,
            },
            endDate: {
                required: true,
            },
            endTime: {
                required: true,
            },
            event_cost: {
                required: true,
            },
            fee: {
                required: true,
            },
            firstName: {
                required: true,
            },
            lastName: {
                required: true,
            },
            email: {
                required: true,
            },
            telephone: {
                required: true,
            },
            area: {
                required: true,
            }
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
