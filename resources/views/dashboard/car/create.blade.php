@extends('dashboard.layout.master')
@section('title','Create Car')

@section('content')
    <div class="text-left">
        <button class="btn ">
            <a href="{{ route('car.index') }}" class="btn btn-primary p-2 float-start">Back to List</a>
        </button>
    </div>
    <div class="col-md-12">
        <div class="card">
            <h5 class="card-header">Add Car</h5>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{route('car.store')}}"  method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body demo-vertical-spacing demo-only-element">
                    <div class="row">
                    <div class="form-floating form-floating-outline  col-md-6">
                        <select name="brand" class="form-select" aria-label="Default select example" id="exampleFormControlSelect1">
                            @foreach ($brands as $brand )
                                <option value={{$brand->id}}>{{$brand->name}}</option>
                            @endforeach
                        </select>
                        <label  class="form-label" for="exampleFormControlSelect1">Brand</label>
                    </div>

                    <div class="form-floating form-floating-outline  col-md-6 ">
                        <input type="text" name="name" value="{{old('name')}}" class="form-control" id="exampleFormControlInput1"placeholder="corolla" >
                        <label for="exampleFormControlInput1">Name</label>
                    </div>
                    </div>

                    <div class="form-floating form-floating-outline ">
                        <input type="text" name="year" value="{{old('year')}}" class="form-control" id="exampleFormControlInput1" placeholder="2024">
                        <label for="exampleFormControlInput1">Year</label>
                    </div>
                        <div class="row">
                    <div class="form-floating form-floating-outline col-md-6 ">
                        <select name="engine" class="form-select" aria-label="Default select example" id="exampleFormControlSelect1">
                            @foreach ($engines as $engine )
                                <option value={{$engine->id}}>{{$engine->type}}</option>
                            @endforeach
                        </select>
                        <label  class="form-label" for="exampleFormControlSelect1">Engine Type</label>
                    </div>

                    <div class="form-floating form-floating-outline col-md-6 ">
                        <select name="transmission" class="form-select" aria-label="Default select example" id="exampleFormControlSelect1">
                            @foreach ($transmissions as $transmission )
                                <option value={{$transmission->id}}>{{$transmission->type}}</option>
                            @endforeach
                        </select>
                        <label  class="form-label" for="exampleFormControlSelect1">Transmission Type</label>
                    </div>
                        </div>
                    <div class="row">
                    <div class="form-floating form-floating-outline  col-md-6 ">
                        <input type="text" name="seat" value="{{old('seat')}}" class="form-control" id="exampleFormControlInput1"placeholder="4" >
                        <label for="exampleFormControlInput1">Seat</label>
                    </div>

                    <div class="form-floating form-floating-outline  col-md-6  ">
                        <input type="text" name="color" value="{{old('color')}}" class="form-control" id="exampleFormControlInput1"placeholder="Black" >
                        <label for="exampleFormControlInput1">Color</label>
                    </div>
                    </div>

                    <div class="row">
                    <div class="form-floating form-floating-outline col-md-6 ">
                        <select class="form-select" name="type" id="exampleFormControlSelect1" aria-label="Default select example">
                            <option value="sedan" selected="">Sedan</option>
                            <option value="hatchback">Hatchback</option>
                            <option value="suv">SUV</option>
                            <option value="coupe">Coupe</option>
                            <option value="sportscare">Sportscare</option>
                            <option value="crossover">Crossover</option>
                            <option value="jeep">Jeep</option>
                            <option value="limousine">Limousine</option>
                            <option value="pickup">Pickup</option>
                        </select>
                        <label for="exampleFormControlSelect1">Car Type</label>
                    </div>

                    <div class="form-floating form-floating-outline col-md-6  ">
                        <select class="form-select" name="status" id="exampleFormControlSelect1" aria-label="Default select example">
                            <option value="available" selected="">Available</option>
                            <option value="rented">Rented</option>
                            <option value="maintenance">Maintenance</option>
                        </select>
                        <label for="exampleFormControlSelect1">Car Status</label>
                    </div>
                    </div>
                    <div class="form-floating form-floating-outline mb-6 ">
                        <input type="text" name="price" value="{{old('price')}}" class="form-control" id="exampleFormControlInput1"placeholder="20JD" >
                        <label for="exampleFormControlInput1">Price</label>
                    </div>


                    <button class="btn btn-success">ADD +</button>

                </div>
            </form>
        </div>
    </div>
@endsection
