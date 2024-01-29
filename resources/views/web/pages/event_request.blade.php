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
                    <form action="{{ route('event.request') }}" data-aos="zoom-in" method="post" data-aos-duration="1000">
                        @csrf
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <input type="text" name="title" class="form-control" placeholder="Event Title">
                            </div>
                            <div class="col-md-6">
                                <select name="event_category" class="form-select">
                                    <option selected>Event Category</option>
                                    <option value="One">One</option>
                                    <option value="Two">Two</option>
                                    <option value="Three">Three</option>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <input type="text" name="event_info" class="form-control" placeholder="Event Information">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="startDate" placeholder="Start Date" onfocus="(this.type='date')" onblur="(this.type='text')">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="startTime" placeholder="Start Time" onfocus="(this.type='time')" onblur="(this.type='text')">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="endDate" placeholder="End Date" onfocus="(this.type='date')" onblur="(this.type='text')">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="endTime" placeholder="End Time" onfocus="(this.type='time')" onblur="(this.type='text')">
                            </div>
                            <div class="col-md-12">
                                <div class="checkbox-border">
                                    <h3 class="checkbox-title">event cost</h3>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" id="free" name="event_cost" value="free">
                                        <label class="form-check-label" for="free">FREE</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" class="form-cmainheck-input" id="fee" name="event_cost" value="fee">
                                        <label class="form-check-label" for="fee">FEE</label>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="fee" class="form-control" placeholder="Fee">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="firstName" class="form-control" placeholder="Event Contact - First Name">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="lastName" class="form-control" placeholder="Event Contact - Last Name">
                            </div>
                            <div class="col-md-6">
                                <input type="email" name="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="col-md-12">
                                <input type="text" name="telephone" class="form-control" placeholder="Telephone">
                            </div>
                            <div class="col-md-12">
                                <div class="checkbox-border">
                                    <h3 class="checkbox-title">Are you a current Area Chamber Member</h3>
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
