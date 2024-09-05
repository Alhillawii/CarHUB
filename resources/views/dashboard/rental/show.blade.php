@extends('dashboard.layout.master')
@section('title','View Rental')

@section('content')
    <div class="text-left">
        <button class="btn ">
            <a href="{{ route('rental.index') }}" class="btn btn-primary p-2 float-start">Back to List</a>
        </button>
    </div>
    <div class="card mt-4">
        <div class="card-header">
            <h3> Rental Info</h3>
        </div>
        <div class="card-body">


            <p class="card-text "><b>Rental Start Date : </b> {{$rental->rental_start_date}}</p>
            <p class="card-text "><b>Rental End Date : </b> {{$rental->rental_end_date}}</p>
            <p class="card-text "><b>Status: </b>
                @if ($rental->status=='Reserved')
                    <span class="badge rounded-pill bg-label-success me-1">Reserved</span>
                @elseif($rental->status=='Pending')
                    <span class="badge rounded-pill bg-label-warning me-1">Pending</span>
                @elseif($rental->status=='Active')
                <span class="badge rounded-pill bg-label-primary me-1">Active</span>
                @elseif($rental->status=='Canceled')
                    <span class="badge rounded-pill bg-label-danger me-1">Canceled</span>
                @else
                    <span class="badge rounded-pill bg-label-danger me-1">Rejected</span>
                @endif
                </p>


        </div>
    </div>

    <div class="card mt-4">
        <div class="card-header">
            <h3> Car Info</h3>
        </div>
        <div class="card-body">
            <p class="card-text "><b>Car Name : </b> {{$rental->car->brand->name." ". $rental->car->name}}</p>
            <p class="card-text "><b>Year:</b> {{$rental->car->year}}</p>
            <p class="card-text "><b>Engine Type:</b> {{$rental->car->engine->type}}</p>
            <p class="card-text "><b>Transmission Type:</b> {{$rental->car->transmission->type}}</p>
            <p class="card-text"><b>Seat:</b> {{$rental->car->seat}} </p>
            <p class="card-text"><b>Car Type:</b> {{$rental->car->type}} </p>
            <p class="card-text"><b>Car Status:</b> {{$rental->car->status}} </p>
            <p class="card-text"><b>Car Price:</b> {{$rental->car->pice}}</p>
        </div>
    </div>

    <div class="card mt-4">
        <div class="card-header">
            <h3> User Info</h3>
        </div>
        <div class="card-body">
            <h5 class="card-title">User Name: {{$rental->user->name}}</h5>
            <p class="card-text">
                <img src="{{asset($rental->user->image)}}" alt="user image" style="width: 150px ;height: 150px">
            </p>
            <p class="card-text "><b>User Email:</b> {{$rental->user->email}}</p>
            <p class="card-text"><b>User Mobile:</b> {{$rental->user->mobile}} </p>
            <p class="card-text"><b>User Permissions:</b>

                @if($rental->user->role == '0') {{'Uers'}} @endif
                @if($rental->user->role == '1') {{'Admin'}} @endif
                @if($rental->user->role == '-1') {{'Super Admin'}} @endif
            </p>
        </div>
    </div>




@endsection
