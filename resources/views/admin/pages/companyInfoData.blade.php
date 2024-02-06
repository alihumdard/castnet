@extends('admin.layouts.default')
@section('title', 'CompanyInfo Data')
@section('content')

{{-- @dd($data); --}}
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">CompanyInfo Data</h1>
                    </div>
                    {{-- <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                            <li class="breadcrumb-item active">Team</li>
                        </ol>
                    </div> --}}
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
                              <th>Organization</th>
                              <th>View</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $index => $item)
                               <tr>
                                <td>{{ $index + 1 }}</td>
                                    <td>
                                        {{ $item->first_name . ' ' . $item->last_name }}
                                    </td>
                                    <td>
                                        {{ $item->primary_email }}
                                    </td>
                                    <td>
                                        {{ $item->primary_phone_number }}
                                    </td>
                                    <td>{{ $item->organization_name }}</td>
                                    <td>
                                        <a href="{{ route('companyInfo.detail', $item->id) }}" class="btn-outline-info"><i class="fa fa-eye"></i></a>

                                        <button class="btn-outline-danger delete_btn" data-url="/admin/companyInfo-delete"
                                            data-id="{{ $item->id }}" type="submit"><i class="fa fa-trash"></i></button>
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