@extends('admin.layouts.default')
@section('title', 'Join Section1')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Join Section 1</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Join</a></li>
                            <li class="breadcrumb-item active">Section1</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main content start -->
        <div class="content">
            <div class="container-fluid">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{ route('joinSection1.create') }}" class="btn btn-sm btn-primary" style="float: right;">Add Level</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                          <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                              <th>#</th>
                              <th>Title</th>
                              <th>Description</th>
                              <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($membershipLevels as $membershipLevel)
                                                               <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        {{ $membershipLevel->title }}
                                    </td>
                                    <td>{{ $membershipLevel->description }}</td>
                                    <td>
                                        <a href="{{ route('joinSection1.edit', ['joinSection1' => $membershipLevel->id]) }}"><i class="fa fa-edit"></i></a>
                                        <button class="btn-outline-danger delete_btn" data-url="/admin/joinSection1"
                                            data-id="{{ $membershipLevel->id }}" type="submit"><i class="fa fa-trash"></i></button>
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
        <!-- Main content end -->
        <!-- /.content-wrapper -->
    </div>
@stop
