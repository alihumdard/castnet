@extends('web.layouts.default')
@section('content')
<style>
    .fee{
        display:none;
    }
    .radiofull{
        display:none;
    }
</style>
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
                    <form action="{{ route('eventrequest') }}" id="event_request" data-aos="zoom-in" method="post" data-aos-duration="1000">
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
                                    <h3 class="checkbox-title">event request type</h3>
                                    <div class="form-group errorshow">
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" id="free" name="event_req" value="GLOBAL EVENT CALENDER REQUEST" checked>
                                        <label class="form-check-label" for="free">GLOBAL EVENT CALENDER REQUEST</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" id="fee" name="event_req" value="COMMUNITY CALENDER REQUEST">
                                        <label class="form-check-label" for="fee">COMMUNITY CALENDER REQUEST</label>
                                    </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 selectfree">
                                <div class="checkbox-border">
                                    <h3 class="checkbox-title">event cost</h3>
                                    <div class="form-group errorshow">
                                    <div class="form-check">
                                        <input type="radio" onclick="selectfree()" class="form-check-input" id="free" name="event_cost" value="free" checked>
                                        <label class="form-check-label" for="free">FREE</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" onclick="selectfee()" class="form-check-input" id="fee" name="event_cost" value="fee">
                                        <label class="form-check-label" for="fee">FEE</label>
                                    </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 fee">
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
                            <div class="col-md-6 align-self-center">
                                <div class="form-group errorshow">
                                <input type="text" name="telephone" class="form-control" placeholder="Telephone">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group errorshow">
                                <input type="text" name="eventLocation" class="form-control" placeholder="Event Location">
                                </div>
                            </div>
                            <div class="col-md-6 radioinline">
                                <div class="checkbox-border mt-0 h-100">
                                    <h3 class="checkbox-title">Event Type</h3>
                                    <div class="form-group d-flex align-items-center errorshow h-100 gap-5">
                                    <div class="form-check mt-0">
                                        <input type="radio" name="event" class="form-check-input" id="yes" value="Virtual">
                                        <label class="form-check-label" for="virtual">Virtual</label>
                                    </div>
                                    <div class="form-check mb-0">
                                        <input type="radio" name="event" class="form-check-input" id="no" value="Onsite">
                                        <label class="form-check-label" for="onsite">Onsite</label>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 radiofull">
                                <div class="checkbox-border">
                                    <h3 class="checkbox-title">Event Type</h3>
                                    <div class="form-group errorshow">
                                    <div class="form-check">
                                        <input type="radio" name="event" class="form-check-input" id="yes" value="Virtual">
                                        <label class="form-check-label" for="virtual">Virtual</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="event" class="form-check-input" id="no" value="Onsite">
                                        <label class="form-check-label" for="onsite">Onsite</label>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form_box aos-init aos-animate" data-aos="zoom-in" data-aos-duration="1000">
                                <h2 class="section_title" style="margin-bottom: 15px">Payment Details</h2>
                                <div class="row gy-4" style="margin-bottom: 15px">
                                    <div class="col-12 col-md-6">
                                        <div class="form-group errorshow">
                                        <input type="text" class="form-control" placeholder="Name on Card" name="NOCard">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group errorshow">
                                        <input type="number" class="form-control" placeholder="Card Number" name="CName">
                                        </div>
                                    </div>
                                </div>
                                <div class="row gy-4">
                                    <div class="col-12 col-md-4">
                                        <div class="form-group errorshow">
                                        <input type="text" class="form-control" placeholder="CVC" name="cvc">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="form-group errorshow">
                                        <input type="text" class="form-control" placeholder="Expiration Month" name="EMonth">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="form-group errorshow">
                                        <input type="text" class="form-control" placeholder="Expiration Year" name="EYear">
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
            NOCard: {
                required: true,
            },
            CName: {
                required: true,
            },
            cvc: {
                required: true,
            },
            EMonth: {
                required: true,
            },
            EYear: {
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
            event: {
                required: true,
            },
            eventLocation: {
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

    function selectfee(){
        $('.radioinline').hide();
        $('.fee').show();
        $('.radiofull').show();
    }

    function selectfree(){
        $('.radioinline').show();
        $('.fee').hide();
        $('.radiofull').hide();
    }
</script>
@endpush
