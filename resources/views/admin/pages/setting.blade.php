{{--  @dd($settings[0]['header_logo']);  --}}
@extends('admin.layouts.default')
@section('title', 'settings')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
      <div class="container-fluid">
          <div class="row mb-2">
              <div class="col-sm-6">
                  <h1 class="m-0">Update Web Setting</h1>
                  
              </div>
              <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                      <li class="breadcrumb-item active">Setting</li>
                  </ol>
              </div>
          </div>
      </div>
  </div>
  <!-- Main content -->
  <div class="content">
      <div class="container-fluid">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-body">
                  <form id="webSetting" action="{{ route('setting.update') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <div class="form-group errorshow">
                                <label for="prin_title">Web title</label>
                                <input type="text" name="title" class="form-control" placeholder="Enter Website Title..." value="{{ $settings[0]['title'] ?? 'CastNet Dev' }}">

                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="prin_title">Header Logo</label>
                                <input type="file" name="header_logo" class="form-control" id="">
                                {{--  <input type="hidden" name="old_header_logo" value="{{ $settings[0]['header_logo'] }}">  --}}
                                <input type="hidden" name="old_header_logo" value="{{ isset($settings[0]['header_logo']) ? $settings[0]['header_logo'] : '' }}">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            {{--  <img src="{{ asset('storage/' . $settings[0]['header_logo']) }}" alt="Header Logo" width="50" height="50">  --}}
                            <img src="{{ isset($settings[0]['header_logo']) ? asset('storage/' . $settings[0]['header_logo']) : asset('assets/web/images/logo.png') }}" alt="Header Logo" width="50" height="50">

                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="prin_title">Popup Logo</label>
                                <input type="file" name="popup_logo" class="form-control" id="">
                                {{--  <input type="hidden" name="old_popup_logo" value="{{ $settings[0]['popup_logo'] }}">  --}}
                                <input type="hidden" name="old_popup_logo" value="{{ isset($settings[0]['popup_logo']) ? $settings[0]['popup_logo'] : '' }}">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            {{--  <img src="{{ asset('storage/' . $settings[0]['popup_logo']) }}" alt="Header Logo" width="50" height="50">  --}}
                            <img src="{{ isset($settings[0]['popup_logo']) ? asset('storage/' . $settings[0]['popup_logo']) : asset('assets/web/images/logo.png') }}" alt="Popup Logo" width="50" height="50">
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="prin_title">Footer Logo</label>
                                <input type="file" name="footer_logo" class="form-control" id="">
                                {{--  <input type="hidden" name="old_footer_logo" value="{{ $settings[0]['footer_logo'] }}">  --}}
                                <input type="hidden" name="old_footer_logo" value="{{ isset($settings[0]['footer_logo']) ? $settings[0]['footer_logo'] : '' }}">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            {{--  <img src="{{ asset('storage/' . $settings[0]['footer_logo']) }}" alt="Header Logo" width="50" height="50">  --}}
                            <img src="{{ isset($settings[0]['footer_logo']) ? asset('storage/' . $settings[0]['footer_logo']) : asset('assets/web/images/logo.png') }}" alt="Footer Logo" width="50" height="50">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <div class="form-group errorshow">
                                <label>Email:</label>
                                <input type="text" name="email" placeholder="Enter Email..." class="form-control" id="" value="{{ $settings[0]['email'] ?? 'castnetdummy@gmail.com' }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group errorshow">
                                <label>Phone:</label>
                                <input type="text" name="phone" placeholder="Enter Phone..." class="form-control" id="" value="{{ $settings[0]['phone'] ?? '(406) 555-0120' }}">
                            </div>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-sm-12">
                            <div class="form-group errorshow">
                                <label>Address:</label>
                                <input type="text" name="address" placeholder="Enter Address..." class="form-control" id="" value="{{ $settings[0]['address'] ?? '11580 State Route 44 #1016 Mantua, OH 44255 United States' }}">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer" style="background:none;">
                      <button type="submit" class="btn btn-primary" style="float: right;">Save changes</button>
                    </div> 
                  </form>
                </div>
            </div>
        </div>
      </div>
  </div>
</div>
@stop
@pushOnce('scripts')
<script>
  $('#webSetting').validate({
        rules: {
            title: {
                 required: true,
            },
            email: {
                 required: true,
            },
            phone: {
                 required: true,
            },
            address: {
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
@endPushOnce