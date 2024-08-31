@extends('dashboard.layout.master')
@section('title','car upload image')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Upload Car Images
                            <a href="{{ route('car.index') }}" class="btn btn-primary float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        @if (session('status'))
                            <div class="alert alert-success">{{session('status')}}</div>
                        @endif

                        <h5>Car Name: {{ $car->name }}</h5>
                        <hr>

                        @if ($errors->any())
                            <ul class="alert alert-warning">
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form action="{{ route('car.store.images',$car->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label>Upload Images (Max:10 images only)</label>
                                <input type="file" name="images[]" multiple class="form-control" />
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Upload</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

            <div class="col-md-12 mt-4">
                @foreach ($carImage as $carImg)
                    <img src="{{ asset($carImg->path) }}" class="border p-2 m-3" style="width: 150px; height: 150px;" alt="Img" />
                    <a href="{{ route('car.destroy.images',$car->id)}}" >Delete</a>
                @endforeach
            </div>
        </div>
    </div>
@endsection
