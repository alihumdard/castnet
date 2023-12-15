@extends('admin.layouts.default')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Principles</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Principles</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <!-- card for principle data -->
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                    <form id="fromdata" method="POST" action="{{route('store.principle')}}">
                        @csrf
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- text input -->
                                <div class="form-group">
                                    <label for="prin_title">Principle Title</label>
                                    <input type="text" name="title" id="prin_title" class="form-control" placeholder="Enter Title" required>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="row">
                          <div class="col-sm-12">
                              <div class="form-group">
                                  <label>Heading</label>
                                  <input type="text" name="heading" id="prin_heading" class="form-control" placeholder="Enter Heading" required>
                              </div>
                          </div>
                      </div> -->

                        <div class="row">
                            <div class="col-sm-12">
                                <!-- textarea -->
                                <div class="form-group">
                                    <label> Principle Description</label>
                                    <textarea name="desc" id="prin_desc" class="form-control" rows="3" placeholder="Enter Description" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer" style="background:none;">
                            <button type="submit" class="btn btn-primary" style="float: right;">Add</button>
                        </div>
                    </form>
                </div>

                <!-- /.card-body -->
            </div>
            <!-- form for principle data -->

            <!-- card for principle table -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Principles data is here</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="principle_tbl" class="table table-bordered table-striped datatable">
                        <thead>
                            <tr>
                                <th >#</th>
                                <th>Principle Name</th>
                                <th>Principle Description</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($principles ?? [] as $key => $val)
                            <tr>
                                <td class="td-center" >{{ ++$key ?? '' }}</td>
                                <td class="td-center" >{{ $val['title'] ?? '' }}</td>
                                <td>{{ $val['desc'] ?? '' }}</td>
                                <td class="td-center" >
                                    <span class="{{ ($val['status'] == 'Active' ?? NULL) ? 'btn btn-success' : 'btn btn-warning' }}" style="display: inline-block;">{{ $val['status'] ?? '' }}</span>
                                </td>
                                <td class="td-center" >
                                    <input type="submit" class="btn btn-primary m-1" value="Edit">
                                    <input type="submit" class="btn btn-danger m-1" value="Dell">
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- end table card for principle data -->

        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->

    <!-- /.content-wrapper -->
</div>

@stop