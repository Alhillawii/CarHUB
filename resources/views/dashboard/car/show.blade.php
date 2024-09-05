@extends('dashboard.layout.master')
@section('title','View Car')

@section('content')
    <div class="text-left">
        <button class="btn ">
            <a href="{{ route('car.index') }}" class="btn btn-primary p-2 float-start">Back to List</a>
        </button>
    </div>
    <div class="card mt-4">
        <div class="card-header">
           Car Info
        </div>
        <div class="card-body">
            <h5 class="card-title">Car Name: {{$car->brand->name." ".$car->name}}</h5>
            <p class="card-text "><b>Car Brand:</b> {{$car->brand->name}}</p>
            <p class="card-text "><b>Year:</b> {{$car->year}}</p>
            <p class="card-text "><b>Engine Type:</b> {{$car->engine->type}}</p>
            <p class="card-text "><b>Transmission Type:</b> {{$car->transmission->type}}</p>
            <p class="card-text"><b>Seat:</b> {{$car->seat}} </p>
            <p class="card-text"><b>Car Type:</b> {{$car->type}} </p>
            <p class="card-text"><b>Car Status:</b> {{$car->status}} </p>
            <p class="card-text"><b>Car Price:</b> {{$car->pice}} </p>

        </div>
    </div>



@endsection
