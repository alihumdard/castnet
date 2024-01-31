@extends('admin.layouts.default')
@section('title', 'ContactUs Data')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">ContactUs Data</h1>
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
                              <th>Message</th>
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
                                        {{ $item->email }}
                                    </td>
                                    <td>
                                        {{ $item->telephone }}
                                    </td>
                                    <td>
                                        @php
                                            $text = $item->message;
                                            $words = str_word_count($text, 1);
                                            $trimmedText = implode(' ', array_slice($words, 0, 3));
                                            echo $trimmedText;
                                            if (count($words) > 3) {
                                                echo '...';
                                            }
                                        @endphp
                                    </td>
                                    <td>
                                        <a href="{{ route('contactus.detail', $item->id) }}" class="btn-outline-info"><i class="fa fa-eye"></i></a>
                                            <button class="btn-outline-danger delete_btn" data-url="/admin/contact-delete"
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
