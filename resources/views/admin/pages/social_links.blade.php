@extends('admin.layouts.default')
@section('title', 'Social links')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
      <div class="container-fluid">
          <div class="row mb-2">
              <div class="col-sm-6">
                  <h1 class="m-0">Update Social Links</h1>
              </div>
              <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                      <li class="breadcrumb-item active">Social Links</li>
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
                  <form action="" method="post">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="prin_title">Facebook</label>
                                <input type="text" name="title" id="prin_title" class="form-control" placeholder="Enter Title" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="prin_title">Twitter</label>
                                <input type="text" name="title" id="prin_title" class="form-control" placeholder="Enter Title" required>
                            </div>
                        </div>                        
                    </div>
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="prin_title">Instagram</label>
                                <input type="text" name="title" id="prin_title" class="form-control" placeholder="Enter Title" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="prin_title">Linkedin</label>
                                <input type="text" name="title" id="prin_title" class="form-control" placeholder="Enter Title" required>
                            </div>
                        </div>                        
                    </div>                    
                    <div class="row mb-2">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="prin_title">Pinterest</label>
                                <input type="text" name="title" id="prin_title" class="form-control" placeholder="Enter Title" required>
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
            vendor_note: {
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