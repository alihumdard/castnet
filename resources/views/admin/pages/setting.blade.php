@extends('admin.layouts.default')
@section('title', 'settings')
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
          <div class="col-md-8">
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title">
                  Logo
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="text-align: center;">
                <style>
                    .profile-header-container{
                      display: flex;
                      align-items: center;
                      justify-content: center;
                      height:auto;
                    }
                    
                    .profile-header-img {
                       
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
                <style>
                  .img-circle {
                    cursor: pointer;
                  }
                  .img-circle:hover {
                    cursor: pointer;
                    z-index:1
                  }
              
                  #fileInput1 {
                    display: none;
                  }
              
                  #fileInput2 {
                    display: none;
                  }
              
                  #fileInput3 {
                    display: none;
                  }
                  #overlay1:hover {
                    opacity: 0; /* Hide the section on hover */
                    z-index:-1
                  }
                </style>
                <script>
                  function triggerFileInput(index) {
                    // Trigger the click event of the corresponding hidden file input
                    document.getElementById('fileInput' + index).click();
                  }
                
                  function displaySelectedFile(index) {
                    // Get the image element and file input based on the index
                    const imageElement = document.getElementById('uploadTrigger' + index);
                    const fileInput = document.getElementById('fileInput' + index);
                    
                    // Check if a file is selected
                    if (fileInput.files && fileInput.files[0]) {
                      const reader = new FileReader();
                
                      // Read the selected file
                      reader.onload = function (e) {
                        // Update the image src with the data URL of the uploaded image
                       
                        imageElement.src = e.target.result;
                      };

                      // Read the file as a data URL
                      reader.readAsDataURL(fileInput.files[0]);
                    }
                  }
                </script>
                <div class="">
                    <div class="row">
                      <div class="col-lg-4">
                            <div class="profile-header-container">   
                              <div class="profile-header-img">
                                <form action="{{ route('upload.largelogo') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div>
                                        <div onclick="triggerFileInput(1)" style="
                                              position: absolute;
                                              right:0;/* Adjust as needed */">
                                            <i class="fas fa-edit"></i>
                                        </div>
                                        <img class="img-circle" id="uploadTrigger1" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" height="220" width="220">
                            
                                        <!-- Hidden file input 1 -->
                                        <input type="file" class="file-input" id="fileInput1" name="file1" accept=".jpg, .jpeg, .png" onchange="displaySelectedFile(1)">
                            
                                        <div></div>
                                    </div>
                                    <span>220 x 220</span>
                                    <br/>
                                    <button type="submit" class="btn btn-primary">Large Logo</button>
                                </form>
                            </div>
                            </div> 
                        </div>
                        <div class="col-lg-4" style="    display: flex;
                        justify-content: center;
                        align-self: end;margin-top:10px;">
                            <div class="profile-header-container">   
                              <div class="profile-header-img">
                                <form action="{{ route('upload.mediumlogo') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div>
                                        <div onclick="triggerFileInput(2)" style="
                                              position: absolute;
                                              right:0;/* Adjust as needed */">
                                            <i class="fas fa-edit"></i>
                                        </div>
                                        <img class="img-circle" id="uploadTrigger2" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" height="140" width="140">
                            
                                        <!-- Hidden file input 1 -->
                                        <input type="file" class="file-input" id="fileInput2" name="file2" accept=".jpg, .jpeg, .png" onchange="displaySelectedFile(2)">
                            
                                        <div></div>
                                    </div>
                                    <span>220 x 220</span>
                                    <br/>
                                    <button type="submit" class="btn btn-primary">Medium Logo</button>
                                </form>
                            </div>
                            </div> 
                        </div>
                        <div class="col-lg-4" style="    display: flex;
                        justify-content: center;
                        align-self: end;margin-top:10px;">
                            <div class="profile-header-container">   
                              <div class="profile-header-img">
                                <form action="{{ route('upload.smalllogo') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div>
                                        <div onclick="triggerFileInput(3)" style="
                                              position: absolute;
                                              right:0;/* Adjust as needed */">
                                            <i class="fas fa-edit"></i>
                                        </div>
                                        <img class="img-circle" id="uploadTrigger3" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" height="110" width="110">
                            
                                        <!-- Hidden file input 1 -->
                                        <input type="file" class="file-input" id="fileInput3" name="file3" accept=".jpg, .jpeg, .png" onchange="displaySelectedFile(3)">
                            
                                        <div></div>
                                    </div>
                                    <span>220 x 220</span>
                                    <br/>
                                    <button type="submit" class="btn btn-primary">Small Logo</button>
                                </form>
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

          <div class="col-md-4">
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title">
                  Social Icons
                </h3>
              </div>
              <!-- /.card-header -->
              <style>
                .avatar {
                  vertical-align: middle;
                  width: 21px;
                  height: 21px;
                  border-radius: 50%;
                }
                </style>
              <div class="card-body">
                <div>
                  <!-- Facebook -->
                  <div>
                    <a href="#">
                      <i class="fab fa-facebook-f fa-2x" style="color: #3b5998;margin-right:5px"></i>
                    </a>
                    <!-- Twitter -->
                    <a href="#">
                        <i class="fab fa-twitter fa-2x" style="color: #55acee;margin-right:5px"></i>
                                            </a>
                        <!-- Google -->
                      <a href="#">
                        <i class="fab fa-google fa-2x" style="color: #dd4b39;margin-right:5px"></i>
                      </a>
                        <!-- Instagram -->
                        <a href="#">
                          <i class="fab fa-instagram fa-2x" style="color: #ac2bac;margin-right:5px"></i>
                        </a>
                          <!-- Linkedin -->
                          <a href="#">
                              <i class="fab fa-linkedin-in fa-2x" style="color: #0082ca;margin-right:5px"></i>
                          </a>
                </div>
                <hr>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Icon Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Social Icon Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Icon URL</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Social URL">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputFile">Upload Icon</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                          </div>
                          <div class="input-group-append" style="
                          margin: auto;
                          padding-left: 5px;
                      ">
                            <img src="https://www.w3schools.com/howto/img_avatar.png" alt="Avatar" class="avatar">
                          </div>
                        </div>
                      </div>
                    <!-- /.card-body -->
    
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Add to Menu</button>
                    </div>
                  </form>
           
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