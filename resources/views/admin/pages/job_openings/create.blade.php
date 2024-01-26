@extends('admin.layouts.default')
@section('title', 'Job Openings')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Create Job</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                            <li class="breadcrumb-item active">Job Openings</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="container-fluid">
                <div class="col-md-12">
                    <div class="card ">
                        <div class="card-body">
                            <form action="{{ route('jobs.store')}}" id="jobs" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-2">
                                    <div class="col-sm-6">
                                        <div class="form-group errorshow">
                                            <label for="prin_title">Job Title</label>
                                            <input type="text" name="title" class="form-control" placeholder="Enter Job Title...">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group errorshow">
                                            <label for="prin_title">Salary</label>
                                                <input type="text" name="salary" class="form-control" placeholder="Enter Salary...">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-sm-12">
                                        <div class="form-group errorshow">
                                            <label>Description</label>
                                            <textarea class="form-control" name="description" rows="3" placeholder="Job Description" style="resize: none;"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label>Job Detail</label>
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="checkboxPrimary1" name="duration[]" value="Fulltime">
                                                <label for="checkboxPrimary1">Fulltime</label>
                                            </div>
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="checkboxPrimary2" name="duration[]" value="Engineering">
                                                <label for="checkboxPrimary2">Engineering</label>
                                            </div>
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="checkboxPrimary3" name="duration[]" value="Onsite">
                                                <label for="checkboxPrimary3">Onsite</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer" style="background:none;">
                                    <button id="sectionslist" type="submit" class="btn btn-sm btn-primary" style="float: right;">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@push('scripts')
<script>
    $('#jobs').validate({
        rules: {
            title: {
                required: true,
            },
            salary: {
                required: true,
            },
            description: {
                required: true,
            },
            'duration[]':{
                required: true,
            },
        },
        messages: {
            'duration[]': {
                required: "You must check at least 1 checkbox"
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

