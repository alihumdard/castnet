@extends('admin.layouts.default')
@section('title','User Detail')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">User Detail</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                            <li class="breadcrumb-item active">User Detail</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex p-0">
                            <h3 class="card-title p-3">User Detail:</h3>
                            <ul class="nav nav-pills ml-auto p-2">
                                @if(!empty($memberRecord))
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#tab_1" data-toggle="tab">Member</a>
                                    </li>
                                @endif
                                @if(!empty($partnerRecord))
                                    <li class="nav-item">
                                        <a class="nav-link{{ empty($memberRecord) ? ' active' : '' }}" href="#tab_2" data-toggle="tab">Partner</a>
                                    </li>
                                @endif
                                @if(!empty($sponsorRecord))
                                    <li class="nav-item">
                                        <a class="nav-link{{ empty($memberRecord) && empty($partnerRecord) ? ' active' : '' }}" href="#tab_3" data-toggle="tab">Sponsor</a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab_1">
                                    Working on it. We'll provide an update soon.
                                </div>
                                <div class="tab-pane" id="tab_2">
                                    Working on it. We'll provide an update soon.
                                </div>
                                <div class="tab-pane" id="tab_3">
                                    Working on it. We'll provide an update soon.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
