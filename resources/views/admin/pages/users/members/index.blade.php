@extends('admin.layouts.default')
@section('title','Members')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Users</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Users</a></li>
                            <li class="breadcrumb-item active">Members</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="container-fluid">
                <div class="col-md-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                          <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                              <th>#</th>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Phone</th>
                              <th>View</th>
                            </tr>
                            </thead>
                            <tbody>
                                
                                @foreach($members as $member)
                                <tr>
                                    <td>{{ $loop->iteration }}</td> 
                                    <td>{{ $member->first_name }}</td> 
                                    <td>{{ $member->last_name }}</td> 
                                    <td>{{ $member->email }}</td> 
                                    <td>
                                        <button class="btn-outline-danger delete_btn" data-url="/admin/members-delete" data-id="{{ $member->id }}" type="submit"><i class="fa fa-trash"></i></button>
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
