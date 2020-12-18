@extends('layouts.app')

@section('content')
    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item active">User Role</li>
            <li class="breadcrumb-item">
                <a href="{{route('home')}}">Home</a>
            </li>

        </ol>
    </div>

    <!-- DataTables Example -->
    <div class="card mb-3">
        <div class="card-header">

            User Role

        </div>
        <div class="card-body col-lg-6">

            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Writer</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="{{route('update.writer',$writer->id)}} " method="post">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control"  aria-describedby="emailHelp" name="name" required=""value="{{$writer->name}}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Email</label>
                            <input type="text" class="form-control" name="email" required="" value="{{$writer->email}}">
                        </div>

                        <div class="row">
                            <div class="form-group col-lg-3">
                                <label for="exampleInputEmail1">Category</label>
                                <input type="checkbox" class="form-control"  aria-describedby="emailHelp" name="category" value="1" @if($writer->category==1)checked="" @endif>
                            </div>

                            <div class="form-group col-lg-3">
                                <label for="exampleInputEmail1">Division</label>
                                <input type="checkbox" class="form-control"  aria-describedby="emailHelp" name="district" value="1" @if($writer->division==1)checked="" @endif>
                            </div>

                            <div class="form-group col-lg-3">
                                <label for="exampleInputEmail1">Post</label>
                                <input type="checkbox" class="form-control"  aria-describedby="emailHelp" name="post" value="1" @if($writer->post==1)checked="" @endif>
                            </div>

                            <div class="form-group col-lg-3">
                                <label for="exampleInputEmail1">Setting</label>
                                <input type="checkbox" class="form-control"  aria-describedby="emailHelp" name="setting" value="1" @if($writer->setting==1)checked="" @endif>
                            </div>

                            <div class="form-group col-lg-3">
                                <label for="exampleInputEmail1">Gallery</label>
                                <input type="checkbox" class="form-control"  aria-describedby="emailHelp" name="gallery" value="1" @if($writer->gallery==1)checked="" @endif>
                            </div>

                            <div class="form-group col-lg-3">
                                <label for="exampleInputEmail1">Ads</label>
                                <input type="checkbox" class="form-control"  aria-describedby="emailHelp" name="ads" value="1" @if($writer->ads==1)checked="" @endif>
                            </div>

                            <div class="form-group col-lg-3">
                                <label for="exampleInputEmail1">Role</label>
                                <input type="checkbox" class="form-control"  aria-describedby="emailHelp" name="role" value="1" @if($writer->role==1)checked="" @endif>
                            </div>

                        </div>
                        <br><hr>

                        <button type="submit" class="btn btn-success btn-block">Update</button>
                    </form>
                </div>

            </div>

        </div>
    </div>



@endsection
