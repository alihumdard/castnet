@extends('web.layouts.default')
@section('content')

    <!-- Breadcrumb Start -->
    <section class="section_breadcrumb event_calendar_bg">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="breadcrumb_title">Event Request</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('web.index') }}">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Event Request</li>
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
                    <h2 class="section_title" data-aos="fade-up" data-aos-duration="1000">event calendar request form</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <form action="#" data-aos="zoom-in" data-aos-duration="1000">
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Event Title">
                            </div>
                            <div class="col-md-6">
                                <select class="form-select">
                                    <option selected="">Event Category</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <input type="text" class="form-control" placeholder="Event Information">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Start Date" onfocus="(this.type='date')" onblur="(this.type='text')">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Start Time" onfocus="(this.type='time')" onblur="(this.type='text')">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="End Date" onfocus="(this.type='date')" onblur="(this.type='text')">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="End Time" onfocus="(this.type='time')" onblur="(this.type='text')">
                            </div>
                            <div class="col-md-12">
                                <div class="checkbox-border">
                                    <h3 class="checkbox-title">event cost</h3>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="yes">
                                        <label class="form-check-label" for="yes">FREE</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="no">
                                        <label class="form-check-label" for="no">FEE</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Fee">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Event Contact - First Name">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Event Contact - Last Name">
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="col-md-12">
                                <input type="text" class="form-control" placeholder="Telephone">
                            </div>
                            <div class="col-md-12">
                                <div class="checkbox-border">
                                    <h3 class="checkbox-title">Are you a current Area Chamber Member</h3>
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
                            <div class="col-12 text-center">
                                <a href="#" class="btn btn-primary">submit</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Event Request Form End -->
    @stop