@extends('dashboard.layout.master')
@section('title','View User')

@section('content')
    <div class="text-left">
        <button class="btn ">
            <a href="{{ route('user.index') }}" class="btn btn-primary p-2 float-start">Back to List</a>
        </button>
    </div>
    <div class="card mt-4">
        <div class="card-header">
            User Info
        </div>
        <div class="card-body">
            <h5 class="card-title">User Name: {{$user->name}}</h5>
            <p class="card-text">
                <img src="{{asset($user->image)}}" alt="user image" style="width: 150px ;height: 150px">
            </p>
            <p class="card-text "><b>User Email:</b> {{$user->email}}</p>
            <p class="card-text"><b>User Mobile:</b> {{$user->mobile}} </p>
            <p class="card-text"><b>User Permissions:</b>

                @if($user->role == '0') {{'Uers'}} @endif
                @if($user->role == '1') {{'Admin'}} @endif
                @if($user->role == '-1') {{'Super Admin'}} @endif
            </p>
        </div>
    </div>


            <h5 class="card-title">User reviews: </h5>


<div class="row ">
    @foreach($user->testeimonials as $testeimonial)
        <div class="col-md-4">
            <div class="card mt-2">
                <div class="card-body">
                    <h4 class="card-title">User {{$user->name}}</h4>
                    <p class="card-text">User review: {{$testeimonial->review}}</p>
                    <p class="card-text">Created At {{$testeimonial->created_at}}</p>
                    {{-- <a href="#" class="btn btn-primary">See Profile</a> --}}
                </div>
            </div>
        </div>
    @endforeach
                </div>


@endsection
