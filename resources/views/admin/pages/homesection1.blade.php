@extends('admin.layouts.default')
@section('title', 'Banner')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Section 1</h1>
                    </div> 
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                            <li class="breadcrumb-item active">Section 1</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                    @if(isset($additionalData))
                    <div class="col-md-12">
                        <div class="card ">
                            <div class="card-body">
                                <form action="{{ route('admin.homesection1updated')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <div class="row mb-2">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="prin_title">Update Image</label>
                                                <input type="file" name="image" class="form-control" id="">
                                                <input type="hidden" name="id" value="{{ $item->id }}">
                                                <input type="hidden" name="old_image" value="{{ $item->image }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group errorshow">
                                                <label for="prin_title">Heading</label>
                                                    <input type="text" name="heading" class="form-control" placeholder="Enter Heading" value="{{ $item->heading }}" required>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-sm-6">
                                            <div class="form-group errorshow">
                                                <label>Button Text</label>
                                                <input type="text" name="button" placeholder="Enter Button Text" class="form-control"  value = {{ $item->button }}  required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group errorshow">
                                                <label>Button Link</label>
                                                <input type="text" name="buttonlink" placeholder="Enter Button Link" pattern="^#|https?://\S+$"  value = {{ $item->buttonlink }}  class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea class="form-control" name="description" rows="3" placeholder="Enter Description" style="resize: none;">{{ $item->description }}
                                                </textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer" style="background:none;">
                                        <button id="sectionslist" type="submit" class="btn btn-sm btn-primary" style="float: right;">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>  
                @else
                    <div class="col-md-12" id="hiddenElement" style="display: none">
                    <div class="card ">
                        <div class="card-body">
                            <form action="{{ route('setting.homeSection1') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-2">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="prin_title">Upload Image</label>
                                            <input type="file" name="image" class="form-control" id="" required>
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
                                    <div class="col-sm-6">
                                        <div class="form-group errorshow">
                                            <label>Button Text</label>
                                            <input type="text" name="button" placeholder="Enter Button Text" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group errorshow">
                                            <label>Button Link</label>
                                            <input type="text" name="buttonlink" placeholder="Enter Button Link" pattern="^#|https?://\S+$" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" name="description" rows="3" placeholder="Enter Description" style="resize: none;"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer" style="background:none;">
                                    <button id="sectionslist" type="submit" class="btn btn-sm btn-primary" style="float: right;">Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-12" id="visibleElement">
                    <div class="card">
                        <div class="card-header">
                          <Button id="addSectionLink" class="btn btn-sm btn-primary" style="float: right;">Add Section</Button>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                          <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                              <th>#</th>
                              <th>heading</th>
                              <th>Image</th>
                              <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach(homeSection1() as $index => $item)
                            <tr>
                              <td>{{ $index + 1 }}</td>
                              <td>
                                <div>
                                     <div>{{ $item['heading'] }}</div>
                                </div>
                              </td>
                              <td>
                                <img src="{{ asset('storage/' . $item['image']) }}" alt="section img" height="50" width="50">
                              </td>
                              <td>
                                <div style="display: flex;">
                                    <div style="margin-right: 10px">
                                        <form action="{{ route('admin.homeSection1Update', ['id' => $item['id']]) }}" method="post">
                                            @csrf
                                            @method('PATCH')
                                            <button type="submit" class="btn btn-sm btn-primary">Edit</button>
                                        </form>
                                   </div>
                                   <div>
                                        <form action="{{ route('admin.homesection1Delete', ['id' => $item['id']]) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </div>
                              </td>
                            </tr>
                            @endforeach
                            </tbody>
                          </table>
                        </div>
                        <!-- /.card-body -->
                      </div>
          
                </div>
                @endif
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

       
            document.getElementById('addSectionLink').addEventListener('click', function(event) {
                event.preventDefault();
                toggleVisibility('visibleElement');
                toggleVisibility('hiddenElement');
            });
        
            function toggleVisibility(elementId) {
                var element = document.getElementById(elementId);
                element.style.display = (element.style.display === 'none') ? 'block' : 'none';
            }
            
    </script>
@endPushOnce
