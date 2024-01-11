@extends('admin.layouts.default')
@section('title', 'About Banner')
@section('content')
 {{-- @dd($teams); --}}
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
        @if(count($teams) == 0)
        <div class="content">
            <div class="container-fluid">
                <div class="col-md-12">
                    <div class="card ">
                        <div class="card-body">
                            <form action="{{ route('ourTeam.createUpdateTeam') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row mb-2">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="prin_title">Image</label>
                                            <input type="file" name="banner" class="form-control" id="">
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <img src="" alt="Image" width="50" height="50">
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group errorshow">
                                            <label for="prin_title">Name</label>
                                            <input type="text" name="name" class="form-control" placeholder="Enter Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-sm-6">
                                        <div class="form-group errorshow">
                                            <label for="prin_title">Profession</label>
                                            <input type="text" name="profession" class="form-control" placeholder="Enter Profession">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group errorshow">
                                            <label for="prin_title">Type</label>
                                                <select class="form-control" name="type">
                                                    <option selected disabled hidden>SELECT TYPE</option>
                                                    <option value="0">EXECUTIVE</option>
                                                    <option value="1">STAFF</option>
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
        @endif

        {{-- Table start here --}}
        @if(count($teams) > 0)
        <div class="content">
            <div class="container-fluid">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="http://127.0.0.1:8000/admin/homesection1/create" class="btn btn-sm btn-primary" style="float: right;">Add Section</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                          <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                              <th>#</th>
                              <th>Image</th>
                              <th>Name</th>
                              <th>Profession</th>
                              <th>Type</th>
                              <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($teams as $team)
                                {{-- {{ dd($team->image) }} --}}
                                                            <tr>
                              <td>{{ $loop->iteration }}</td>
                              <td>
                                <img src="{{ asset('storage/' . $team->image) }}" alt="section img" height="50" width="50">

                              </td>
                              <td>{{ $team->name }}</td>
                              <td>
                                {{ $team->profession }}
                              </td>
                              <td>
                               {{ $team->type == 0 ? 'EXECUTIVE' : 'STAFF' }}
                              </td>
                              <td>
                                <a href="http://127.0.0.1:8000/admin/homesection1/1/edit"><i class="fa fa-edit"></i></a>

                                    <form action="{{ route('ourTeam.delete', ['id' => $team->id]) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn-outline-danger delete_btn" type="submit"><i class="fa fa-trash"></i></button>
                                    </form>
                              </td>
                            </tr>
                            @endforeach
                                                        </tbody>
                          </table>
                        </div>
                        <!-- /.card-body -->
                      </div>

                </div>
            </div>
        </div>
        @endif
        {{-- Table end here --}}
        <!-- Main content end -->
        <!-- /.content-wrapper -->
    </div>
@stop
