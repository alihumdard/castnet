@extends('admin.layouts.default')
@section('title', 'About Banner')
@section('content')
 {{-- @dd($team); --}}
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Our Team Section 1</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Our Team</a></li>
                            <li class="breadcrumb-item active">Section 1</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main content start -->

        <div class="content">
            <div class="container-fluid">
                <div class="col-md-12">
                    <div class="card ">
                        <div class="card-body">
                            <form action="{{ route('ourTeam.updateTeamMember', ['id' => $team->id]) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row mb-2">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="prin_title">Image</label>
                                            <input type="file" value="" name="banner" class="form-control" id="" placeholder="Update Image">
                                            <input type="hidden" value="{{ $team -> image }}" name="previousbanner" class="form-control" id="">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <img src="{{ asset('storage/' . $team->image) }}" alt="" width="120" height="140">
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group errorshow">
                                            <label for="prin_title">Name</label>
                                            <input type="text" name="name" value="{{ $team -> name ?? '' }}" class="form-control" placeholder="Enter Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-sm-6">
                                        <div class="form-group errorshow">
                                            <label for="prin_title">Profession</label>
                                            <input type="text" name="profession" value="{{ $team -> profession ?? '' }}" class="form-control" placeholder="Enter Profession">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group errorshow">
                                            <label for="prin_title">Type</label>
                                                <select class="form-control" name="type">
                                                    <option value="0" {{ $team->type == 0 ? 'selected' : '' }}>EXECUTIVE</option>
                                                    <option value="1" {{ $team->type == 1 ? 'selected' : '' }}>STAFF</option>
                                                </select>
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



        <!-- Main content end -->
        <!-- /.content-wrapper -->
    </div>
@stop
