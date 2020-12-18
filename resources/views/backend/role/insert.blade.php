@extends('layouts.app')

@section('content')
    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item active">User Roles</li>
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
                    <h5 class="modal-title" id="exampleModalLabel">Insert User </h5>
                </div>
                <div class="modal-body">
                    <form action="{{route('store.writer')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control"   aria-describedby="emailHelp" name="name" required="">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Email</label>
                            <input type="text" class="form-control"  name="email" required="">

                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control"  name="password" required="">

                        </div>

                        <div class="row">
                            <div class="form-group col-lg-3">
                                <label for="exampleInputEmail1">Category</label>
                                <input type="checkbox" class="form-control"   aria-describedby="emailHelp" name="category"value="1">
                            </div>

                            <div class="form-group col-lg-3">
                                <label for="exampleInputEmail1">Division</label>
                                <input type="checkbox" class="form-control"   aria-describedby="emailHelp" name="division"value="1" >
                            </div>

                            <div class="form-group col-lg-3">
                                <label for="exampleInputEmail1">Posts</label>
                                <input type="checkbox" class="form-control"   aria-describedby="emailHelp" name="posts"value="1" >
                            </div>

                            <div class="form-group col-lg-3">
                                <label for="exampleInputEmail1">Setting</label>
                                <input type="checkbox" class="form-control"   aria-describedby="emailHelp" name="setting"value="1" >
                            </div>

                            <div class="form-group col-lg-3">
                                <label for="exampleInputEmail1">Gallery</label>
                                <input type="checkbox" class="form-control"   aria-describedby="emailHelp" name="gallery"value="1" >
                            </div>

                            <div class="form-group col-lg-3">
                                <label for="exampleInputEmail1">Ads</label>
                                <input type="checkbox" class="form-control"   aria-describedby="emailHelp" name="ads"value="1">
                            </div>

                            <div class="form-group col-lg-3">
                                <label for="exampleInputEmail1">Role</label>
                                <input type="checkbox" class="form-control"   aria-describedby="emailHelp" name="role"value="1">
                            </div>

                        </div>
                        <br>
                        <hr>

                        <button type="submit" class="btn btn-success btn-block">Submit</button>
                    </form>
                </div>

            </div>
            {{--</div>--}}
        </div>
    </div>



@endsection
