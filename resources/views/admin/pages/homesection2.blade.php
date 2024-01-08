@extends('admin.layouts.default')
@section('title', 'Banner')
{{--  @dd($data->image);  --}}
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Section 2</h1>
                    </div> 
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                            <li class="breadcrumb-item active">Section 2</li>
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
                            <form action="{{ route('setting.homeSection2') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-2">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="prin_title">Upload Image</label>
                                            <input type="file" name="image" class="form-control" id="">
                                            <input type="hidden" name="old_image" value="{{ $data->image ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group errorshow">
                                            <label for="prin_title">Title</label>
                                                <input type="text" name="title" class="form-control" placeholder="Enter Title" value="{{ $data->heading ?? '' }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-sm-6">
                                        <div class="form-group errorshow">
                                            <label>Button Text</label>
                                            <input type="text" name="button" placeholder="Enter Button Text" class="form-control" value="{{ $data->button ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group errorshow">
                                            <label>Button Link</label>
                                            <input type="text" name="buttonlink" placeholder="Enter Button Link" pattern="^#|https?://\S+$" value="{{ $data->buttonlink ?? '' }}" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                
                                        <div class="col-md-12">
                                            <!-- /.card-header -->
                                            <div class="card-body" style="padding: 0px">
                                              <textarea id="summernote" name="description">
                                                {{ $data->description ?? '' }}
                                              </textarea>
                                            </div>
                                        </div>
                                </div>
                                <div class="card-footer" style="background:none;">
                                    <button id="sectionslist" type="submit" class="btn btn-sm btn-primary" style="float: right;">Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content-wrapper -->
    </div>
@stop

@pushOnce('scripts')
    <!-- data table -->
    <script>
        $(function() {
            $('#allpages_tbl').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": false,
                "info": true,
                "autoWidth": false,
                "responsive": false,
            });
        });
    </script>
@endPushOnce
