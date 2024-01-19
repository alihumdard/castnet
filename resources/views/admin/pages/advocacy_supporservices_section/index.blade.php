@extends('admin.layouts.default')
@section('title', 'Home Section 6')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Support Services Advocacy</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Support Services Advocacy</a></li>
                            <li class="breadcrumb-item active">Section 2</li>
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
                            <a href="{{ route('advocacySSCSection.create') }}" class="btn btn-sm btn-primary" style="float: right;">Add Feature</a>
                        </div>
                        <div class="card-body">
                          <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($advocacySections as $key=>$item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td><img src="{{ asset('assets/web/images/'.$item->image) }}" alt="" width="120" height="80"></td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->description }}</td>
                                    <td>
                                        <a href="{{ route('advocacySSCSection.edit', $item->id) }}"><i class="fa fa-edit"></i></a>
                                        <button class="btn-outline-danger delete_btn" data-url="/admin/advocacySSCSection"
                                            data-id="{{ $item->id  }}" type="submit"><i class="fa fa-trash"></i></button>
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
