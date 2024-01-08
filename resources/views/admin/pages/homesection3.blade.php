@extends('admin.layouts.default')
@section('title', 'Banner')
{{--  @dd($data->image);  --}}
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Section 3</h1>
                    </div> 
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                            <li class="breadcrumb-item active">Section 3</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                    <div class="col-md-12">
                    <div class="card ">
                        <div class="card-body">
                            <form action="{{ route('admin.homesection3data') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-2">
                                    <div class="col-sm-6">
                                        <div class="form-group errorshow">
                                            <label for="prin_title">Title</label>
                                                <input type="text" name="title" class="form-control" placeholder="Enter Title" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group errorshow">
                                            <label for="prin_title">Heading</label>
                                                <input type="text" name="heading" class="form-control" placeholder="Enter Heading" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="container">
                                        <table id="myTable" class=" table order-list">
                                        <thead>
                                            <tr>
                                                <td style="padding-left: 0px"><label for="prin_title">Principle Heading</label></td>
                                                <td><label for="prin_title">Principle Description</label></td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="col-sm-4" style="padding-left: 0px">
                                                    <input type="text" name="principleHeading" class="form-control" placeholder="Enter Principle Heading"/>
                                                </td>
                                                <td class="col-sm-5">
                                                    <textarea id="principleTextarea" class="form-control" name="principleData" rows="4" style="width: 100%;" placeholder="Enter Principle Description"></textarea>
                                                </td>
                                                <td class="col-sm-1"><a class="deleteRow"></a>
                                                </td>
                                                <td class="col-sm-3">
                                                    <button type="button" class="btn btn-sm btn-primary" id="addrow" style="float: right;">Add More Principle</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                                <div class="card-footer" style="background:none;">
                                    <button type="submit" class="btn btn-sm btn-primary" style="float: right;">Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content-wrapper -->
    </div>
@stop

@pushOnce('scripts')
    <!-- data table -->
    <script>
        $(function() {
            $('#allpages_tbl').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": false,
                "info": true,
                "autoWidth": false,
                "responsive": false,
            });
        });

        $(document).ready(function () {
            var counter = 0;
        
            $("#addrow").on("click", function () {
                var newRow = $("<tr>");
                var cols = "";
        
                cols += '<td style="padding-left: 0px"><input type="text" class="form-control" name="principleHeading' + counter + '" placeholder="Enter Principle Heading" required/></td>';
                cols += '<td><textarea id="principleTextarea" class="form-control" name="principleData' + counter + '" rows="4" style="width: 100%;" placeholder="Enter Principle Description" required></textarea></td>';
                cols += '<td><input type="button" class="ibtnDel btn btn-md btn-danger "  value="Delete"></td>';
                newRow.append(cols);
                $("table.order-list").append(newRow);
                counter++;
            });
        
        
        
            $("table.order-list").on("click", ".ibtnDel", function (event) {
                $(this).closest("tr").remove();       
                counter -= 1
            });
        
        
        });
        
        
        
        function calculateRow(row) {
            var price = +row.find('input[name^="price"]').val();
        
        }
        
        function calculateGrandTotal() {
            var grandTotal = 0;
            $("table.order-list").find('input[name^="price"]').each(function () {
                grandTotal += +$(this).val();
            });
            $("#grandtotal").text(grandTotal.toFixed(2));
        }
    </script>
@endPushOnce
