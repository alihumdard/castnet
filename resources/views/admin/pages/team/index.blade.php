@extends('admin.layouts.default')
@section('title', 'Our Team')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Our Team</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                            <li class="breadcrumb-item active">Team</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="container-fluid">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{ route('our-team.create') }}" class="btn btn-sm btn-primary" style="float: right;">Add Member</a>
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
                                        <a href="{{ route('our-team.edit',$team->id) }}"><i class="fa fa-edit"></i></a>
                                        <button class="btn-outline-danger delete_btn" data-url="/admin/our-team"
                                            data-id="{{ $team->id }}" type="submit"><i class="fa fa-trash"></i></button>
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
    </div>
@stop
