@extends('admin.layouts.default')
@section('title', 'Membership')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Membership Section 2</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Membership</a></li>
                            <li class="breadcrumb-item active">Membership</li>
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
                            <a href="{{ route('membershipSection2.create') }}" class="btn btn-sm btn-primary" style="float: right;">Add Member</a>
                        </div>
                        <div class="card-body">
                          <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                              <th>#</th>
                              <th>Image</th>
                              <th>Heading</th>
                              <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($membershipSection2 as $index => $section2)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>
                                        <img src="{{ asset('assets/web/images/'.$section2->image) }}" alt="section img" height="50" width="50">
                                    </td>
                                    <td>{{ $section2->heading }}</td>
                                    <td>
                                        <a href="{{ route('membershipSection2.edit',$section2->id) }}"><i class="fa fa-edit"></i></a>
                                        <button class="btn-outline-danger delete_btn" data-url="/admin/membershipSection2"
                                            data-id="{{ $section2->id }}" type="submit"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                          </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
