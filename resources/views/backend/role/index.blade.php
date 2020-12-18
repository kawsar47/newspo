@extends('layouts.app')

@section('content')
    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item active">All Writers</li>
            <li class="breadcrumb-item">
                <a href="{{route('home')}}">Home</a>
            </li>

        </ol>
    </div>

    <!-- DataTables Example -->
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            All Writers Table
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Role</th>
                        <th>Action</th>

                    </tr>
                    </thead>

                    <tbody>
                    @foreach($writer as $row)
                        <tr>
                            <td>{{$row->name}}</td>
                            <td>
                                @if($row->category==1)
                                    <span class="badge badge-success">Category</span>
                                @else
                                @endif

                                    @if($row->division==1)
                                        <span class="badge badge-success">Division</span>
                                    @else
                                    @endif

                                    @if($row->post==1)
                                        <span class="badge badge-success">Post</span>
                                    @else
                                    @endif

                                    @if($row->setting==1)
                                        <span class="badge badge-success">Setting</span>
                                    @else
                                    @endif

                                    @if($row->gallery==1)
                                        <span class="badge badge-success">Gallery</span>
                                    @else
                                    @endif

                                    @if($row->ads==1)
                                        <span class="badge badge-success">Ads</span>
                                    @else
                                    @endif

                                    @if($row->role==1)
                                        <span class="badge badge-success">Role</span>
                                    @else
                                    @endif

                            </td>
                            <td>

                                <a href="{{route('edit.writer',$row->id)}}" class="btn btn-info"> <i class="fa fa-edit"></i></a>

                                <a href="{{route('delete.writer',$row->id)}}" class="btn btn-danger" id="delete"> <i class="fa fa-trash"></i></a>


                            </td>
                        </tr>
                    @endforeach
                    </tbody>

                    <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>

                </table>
            </div>
        </div>
    </div>




@endsection
