@extends('admin.layouts.default')
@section('title', 'Home Banner')
@section('content')
{{--  @dd($record->banner)  --}}
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Update Banner</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                            <li class="breadcrumb-item active">Banner</li>
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
                            <form action="{{ route('homebanner.update',$banner->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row mb-2">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="prin_title">Banner Image</label>
                                            <input type="file" name="banner" class="form-control" id="">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <img src="{{ asset('assets/web/images/'.$banner->banner) }}" alt="Home page banner" width="50" height="50">
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group errorshow">
                                            <label for="prin_title">Banner title</label>
                                                <input type="text" name="title" class="form-control" placeholder="Enter Banner Title" value="{{ $banner->short_heading }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-sm-6">
                                        <div class="form-group errorshow">
                                            <label>Button 1</label>
                                            <input type="text" name="button1" placeholder="Enter Button1 Text" class="form-control" id="" value="{{ $banner->button1 }}">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group errorshow">
                                            <label>Button 1 Link</label>
                                            <input type="text" name="button1link" placeholder="Enter Button1 Link" pattern="^#|https?://\S+$" class="form-control" id="" value="{{ $banner->button1link }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-sm-6">
                                        <div class="form-group errorshow">
                                            <label>Button 2</label>
                                            <input type="text" name="button2" placeholder="Enter Button2 Text" class="form-control" id="" value="{{ $banner->button2  }}">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group errorshow">
                                            <label>Button 2 Link</label>
                                            <input type="text" name="button2link" placeholder="Enter Button2 Link" pattern="^#|https?://\S+$" class="form-control" id="" value="{{ $banner->button2link }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Heading</label>
                                            <textarea class="form-control" name="heading" rows="3" placeholder="Enter Heading" style="resize: none;">{{ $banner->heading }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" name="description" rows="4" placeholder="Enter Description" style="resize: none;">{{ $banner->description }}</textarea>
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
        <!-- /.content-wrapper -->
    </div>
@stop