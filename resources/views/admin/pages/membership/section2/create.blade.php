@extends('admin.layouts.default')
@section('title', 'About Banner')
@section('content')
{{--  @dd($record->banner)  --}}
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Membership Section 2</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Membership</a></li>
                            <li class="breadcrumb-item active">Section 2</li>
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
                            <form action="{{ route('membershipSection2.store') }}" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="cL0pTUgSrR5lHXpXp9SF96LEP3h4GqNvNiP3Sm95">                                <div class="row mb-2">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="prin_title">Image</label>
                                            <input type="file" required name="image" class="form-control" id="">
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="form-group errorshow">
                                            <label for="prin_title">Heading</label>
                                            <input type="text" required name="heading" placeholder="Enter Heading" class="form-control" id="">
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
        <!-- Main content end -->
        <!-- /.content-wrapper -->
    </div>
@stop
