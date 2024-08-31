@extends('dashboard.layout.master')
@section('title','create user')

@section('content')
    <div class="col-md-12">
        <div class="card">
            <h5 class="card-header">Add User</h5>
            <form action="{{route('user.store')}}"  method="POST" enctype="multipart/form-data">
                @csrf
            <div class="card-body demo-vertical-spacing demo-only-element">

                <div class="form-floating form-floating-outline mb-6 ">
                    <input type="text" name="name" value="{{old('name')}}" class="form-control" id="exampleFormControlInput1"placeholder="Mohammad" >
                    <label for="exampleFormControlInput1">Name</label>
                </div>
                <div class="form-floating form-floating-outline ">
                    <input type="email" name="email" value="{{old('email')}}" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    <label for="exampleFormControlInput1">Email address</label>
                </div>
                <div class="form-floating form-floating-outline mb-6 ">
                    <input type="text" name="mobile" value="{{old('mobile')}}" class="form-control" id="exampleFormControlInput1"placeholder="079" >
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
                    <input type="password" name="password" value="{{old('password')}}" class="form-control" id="exampleFormControlInput1" placeholder="********">
                    <label for="exampleFormControlInput1">Password</label>
                </div>


                <div class="form-floating form-floating-outline mb-6">
                    <input type="file" name="image" class="form-control" value="{{old('image')}}" >
                    <label  class="form-label">upload image</label>
                </div>
                <button class="btn btn-success">ADD +</button>

            </div>
            </form>
        </div>
    </div>
@endsection
