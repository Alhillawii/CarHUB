@extends('dashboard.layout.master')
@section('title','edit user')

@section('content')
    <div class="col-md-12">
        <div class="card">
            <h5 class="card-header">Edit User</h5>
            <form action="{{route('user.update',$user->id)}}"  method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body demo-vertical-spacing demo-only-element">

                    <div class="form-floating form-floating-outline mb-6 ">
                        <input type="text" name="name" value="{{$user->name}}" class="form-control" id="exampleFormControlInput1"placeholder="Mohammad" >
                        <label for="exampleFormControlInput1">Name</label>
                    </div>
                    <div class="form-floating form-floating-outline ">
                        <input type="email" name="email" value="{{$user->email}}" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                        <label for="exampleFormControlInput1">Email address</label>
                    </div>
                    <div class="form-floating form-floating-outline mb-6 ">
                        <input type="text" name="mobile" value="{{$user->mobile}}" class="form-control" id="exampleFormControlInput1"placeholder="079" >
                        <label for="exampleFormControlInput1">Phone Number</label>
                    </div>
                    <div class="form-floating form-floating-outline mb-6">
                        <select class="form-select" name="role" id="exampleFormControlSelect1" aria-label="Default select example">
                            <option value="0" selected="">User</option>
                            <option value="1">Admin</option>
                        </select>
                        <label for="exampleFormControlSelect1">User Permissions</label>
                    </div>



                    <div class="form-floating form-floating-outline mb-6">
                        <input type="file" name="image" class="form-control" value="{{$user->image}}" >
                        <label  class="form-label">upload image</label>
                    </div>
                    <button class="btn btn-success">Update</button>

                </div>
            </form>
        </div>
    </div>
@endsection
