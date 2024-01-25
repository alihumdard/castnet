@extends('admin.layouts.default')
@section('title',$page)
@section('content')
@if(strtolower($page)=='advocacy' && $sn=='Section 4')
<style>
    .bgchange{
        background-color:blue;
        padding:10px;
    }
</style>
@endif
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{ $page.' '.$sn }}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                            <li class="breadcrumb-item active">{{$page}}</li>
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
                            <a href="{{route('create.job')}}" class="btn btn-sm btn-primary" style="float: right;">
                                Add Job
                            </a>
                        </div>
                        <div class="card-body">
                          <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Salary</th>
                                <th>Status</th>
                                <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($section as $index => $item)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>
                                        {{ $item->job_title }}
                                    </td>
                                    <td>{{ $item->salary_detail }}</td>
                                    <td>
                                        @if($item->status == 1)
                                        <p class="btn btn-sm bg-gradient-success">Active</p>
                                        @elseif ($item->status == 0)
                                        <p class="btn btn-sm bg-gradient-danger">InActive</p>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('Jobs.edit',$item->id) }}"><i class="fa fa-edit"></i></a>
                                        {{-- <a href="{{route('Jobs.edit')}}"><i class="fa fa-edit"></i></a> --}}
                                        <button class="btn-outline-danger delete_btn" type="submit" data-url="/admin/Jobs" data-id="{{ $item->id }}"><i class="fa fa-trash"></i></button>
                                        @if($item->status == 0)
                                        <button class="btn btn-sm bg-gradient-success">Active</button>
                                        @elseif ($item->status == 1)
                                        <button class="btn btn-sm bg-gradient-danger">InActive</button>
                                        @endif
                                        {{-- <button class="btn-outline-danger delete_btn" data-url="/admin/Jobs"
                                            data-id="{{ $item->id }}" type="submit"><i class="fa fa-trash"></i></button> --}}
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
        <!-- Modal -->
        <div class="modal fade" id="newModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('careers.store') }}" id="advocacy" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="row mb-2">
                                <div class="col-sm-6">
                                    <div class="form-group errorshow">
                                        <label for="prin_title">Image</label>
                                        <input type="file" name="image" class="form-control" id="">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group errorshow">
                                        <label for="prin_title">Title</label>
                                        <input type="text" name="title" class="form-control" placeholder="Enter Title...">
                                    </div>
                                </div>
                            </div>
                            @if(strtolower($page)!='advocacy' && $sn!='Section 4')
                            <div class="row mb-2">
                                <div class="col-md-12">
                                    <div class="card-body" style="padding: 0px">
                                        <textarea class="summernote" name="description"></textarea>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                        @if(strtolower($page)=='careers')
                            <input type="hidden" name="page" value="careers">
                            @if($sn=='Section 2')
                                <input type="hidden" name="section" value="2">
                            @elseif($sn=='Section 3')
                                <input type="hidden" name="section" value="3">
                            @elseif($sn=='Section 4')
                                <input type="hidden" name="section" value="4">
                            @endif
                        @elseif($page=='Women Advocacy')
                            <input type="hidden" name="page" value="women">
                            @if($sn=='Section 2')
                                <input type="hidden" name="section" value="2">
                            @endif
                        @elseif($page=='Veterans')
                            <input type="hidden" name="page" value="veterans">
                            @if($sn=='Section 2')
                                <input type="hidden" name="section" value="2">
                            @endif
                        @elseif($page=='Support Services')
                            <input type="hidden" name="page" value="support_services">
                            @if($sn=='Section 2')
                                <input type="hidden" name="section" value="2">
                            @endif
                        @endif
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
@push('scripts')
<script>
    $('#advocacy').validate({
        rules: {
            title: {
                required: true,
            },
            image: {
                required: true,
            },
        },
        errorElement: 'span',
        errorPlacement: function (error, element) {
            error.addClass('invalid-feedback');
            element.closest('.errorshow').append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        }
    });
</script>
@endpush
