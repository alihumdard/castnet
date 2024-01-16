@extends('admin.layouts.default')
@section('title', 'About Banner')
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
                    <div class="card ">
                        <div class="card-body">
                            <form action="{{ route('membershipSection2.update',$item->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row mb-2">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="prin_title">Image</label>
                                            <input type="file" name="image" class="form-control" id="">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <img src="{{ asset('assets/web/images/' . $item->image) }}" alt="" width="120" height="90">
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group errorshow">
                                            <label for="prin_title">Heading</label>
                                            <input type="text" name="heading" class="form-control" placeholder="Enter Heading" value="{{ $item->heading }}" id="">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer" style="background:none;">
                                    <button type="submit" class="btn btn-primary" style="float: right;">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
