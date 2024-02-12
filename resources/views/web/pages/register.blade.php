@extends('web.layouts.default')
@section('content')
<!-- Breadcrumb Start -->
<section class="section_breadcrumb login_bg">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="breadcrumb_title">Registration</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ route('web.index') }}">home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Registration</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb End -->

<!-- Login Start -->
<section class="section_block">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="login_form" data-aos="zoom-in" data-aos-duration="1000">
                    <h2 class="form_title">Register your account</h2>
                    <form action="{{route('user.registration')}}" method="post" id="userRegistration">
                        @csrf
                        <div class="errorshow">
                            <input type="text" name="first_name" value="{{ old('first_name') }}" class="form-control" placeholder="First Name">
                        </div>
                        <div class="errorshow">
                            <input type="text" name="last_name" value="{{ old('last_name') }}" class="form-control mt-3" placeholder="Last Name">
                        </div>
                        <div class="errorshow">
                            <input type="email" name="email" value="{{ old('email') }}" class="form-control mt-3" placeholder="Email">
                        </div>
                        @error('email')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <div class="errorshow">
                            <input type="password" name="password" class="form-control mt-3" placeholder="Password">
                        </div>
                        <div class="errorshow">
                            <select name="type" id="" class="form-control mt-3">
                                <option disabled selected>Select Account Type</option>
                                <option value="1" @if(old('type')==2) selected @endif>Sponsor</option>
                                <option value="2" @if(old('type')==3) selected @endif>Member</option>
                            </select>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-login mt-3">Register</button>
                        </div>
                        <span class="form-border"></span>
                        <div class="creat_account">
                            <p>Already have an account? <a href="{{route('user.login')}}" class="text-success">Login</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Login End -->
@stop
@push('scripts')
{{-- <script src="{{ asset('assets/web/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
<script src="{{ asset('assets/web/plugins/jquery-validation/additional-methods.min.js') }}"></script> --}}

<script>
    $('#userRegistration').validate({
        rules: {
            first_name: {
                required: true,
            },
            last_name: {
                required: true,
            },
            email: {
                required: true,
            },
            password: {
                required: true,
            },
            type: {
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