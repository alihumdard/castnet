@extends('admin.layouts.default')
@section('title','Partner/Sponsor Fees')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Financial</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Financial</a></li>
                            <li class="breadcrumb-item active">Fees</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="container-fluid">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('funding.update') }}" id="eventRequest" method="post">
                              @csrf
                                <div class="row mb-2">
                                    <div class="col-sm-6">
                                        <div class="form-group errorshow">
                                            <label for="prin_title">INVESTMENT FEE</label>
                                            <input type="text" name="INVESTMENT Fee" class="form-control" placeholder="Partner Fee" value="{{ $fee->investment }}">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group errorshow">
                                            <label for="prin_title">LOANS FEE</label>
                                            <input type="text" name="LOANS Fee" class="form-control" placeholder="Sponsor Fee" value="{{ $fee->loans }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-sm-6">
                                        <div class="form-group errorshow">
                                            <label for="prin_title">GRANTS FEE</label>
                                            <input type="text" name="GRANTS Fee" class="form-control" placeholder="Partner Fee" value="{{ $fee->grants }}">
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
    </div>
@stop
