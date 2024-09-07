@extends('dashboard.layout.master')
@section('title','Admin Profile')
@section('content')
    <div class="text-left">
        <button class="btn ">
            <a href="{{ route('dashboard') }}" class="btn btn-primary p-2 float-start">Back to List</a>
        </button>
    </div>
    <div class="card mb-6">
        <!-- Account -->

        <div class="card-body">
            <div class="d-flex align-items-start align-items-sm-center gap-6">
                <img src="{{asset(Auth::user()->image)}}" alt="user-avatar" class="d-block w-px-100 h-px-100 rounded" id="uploadedAvatar">
            </div>
        </div>
        <div class="card-body pt-0">
            <!-- Show success alert if session has a success message -->
            @if(session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            <form id="formAccountSettings" method="POST" action="{{route('dashboard.admin.update',Auth::user()->id)}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row mt-1 g-5">
                    <div class="col-md-6">
                        <div class="form-floating form-floating-outline">
                            <input class="form-control" type="text" id="firstName" name="name" value="{{Auth::user()->name}}" autofocus="">
                            <label for="firstName"> Name</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating form-floating-outline">
                            <input class="form-control" type="text" id="email" name="email" value="{{Auth::user()->email}}" placeholder="john.doe@example.com">
                            <label for="email">E-mail</label>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="input-group input-group-merge">
                            <div class="form-floating form-floating-outline">
                                <input type="text" id="phoneNumber" name="mobile" class="form-control" value="{{Auth::user()->mobile}}" placeholder="202 555 0111">
                                <label for="phoneNumber">Phone Number</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-floating form-floating-outline">
                            <input type="file" id="profileImage" name="image" class="form-control">
                            <label for="profileImage">Change Profile Image</label>
                        </div>
                    </div>
                </div>
                <div class="mt-6">
                    <button type="submit" class="btn btn-primary me-3 waves-effect waves-light">Save changes</button>
                </div>
            </form>
        </div>
        <!-- /Account -->
    </div>

@endsection
