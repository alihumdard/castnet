@extends('admin.layouts.default')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1 class="m-0">Setting</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Setting</li>
               </ol>
            </div><!-- /.col -->
         </div><!-- /.row -->
      </div><!-- /.container-fluid -->
   </div>
   <!-- /.content-header -->

   <!-- Main content -->
   <div class="content">
      <div class="container-fluid">
        <!-- START ALERTS AND CALLOUTS -->

        <div class="row">
          <div class="col-md-6">
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title">
                  Logo and favicon
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <style>
                    .profile-header-container{
                        
                    }
                    
                    .profile-header-img {
                        padding: 54px;
                    }
                    
                    .profile-header-img > img.img-circle {
                        width: 120px;
                        height: 120px;
                        border: 2px solid #51D2B7;
                    }
                    
                    .profile-header {
                        margin-top: 43px;
                    }
                </style>
                <div class="">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="profile-header-container">   
                                <div class="profile-header-img">
                                    <div>
                                        <img class="img-circle" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" />
                                    <div></div>
                                    </div>
                                    <br/>
                                    <br/>
                                    <button type="submit" class="btn btn-primary">Upload Logo</button>
                                </div>
                            </div> 
                        </div>
                        <div class="col-sm-6" style="
                        margin: auto;
                    ">
                            <div class="profile-header-container">   
                                <div class="profile-header-img">
                                    <img class="" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" height="21" width="21" style="border: 2px solid #51D2B7; border-radius:5px"
                                    />
                                    <br/>
                                    <br/>
                                    <button type="submit" class="btn btn-primary btn-sm">Upload favicon</button>
                                </div>
                            </div> 
                        </div>
                    </div>
                   
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->

          <div class="col-md-6">
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title">
                  Social Icons
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        <!-- END ALERTS AND CALLOUTS -->
      </div><!-- /.container-fluid -->
   </div>
   <!-- /.content -->

</div>
<!-- /.content-wrapper -->

@stop