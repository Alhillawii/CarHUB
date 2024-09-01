@extends('dashboard.layout.master')
@section('title','car')

@section('content')
    <div class="text-left">
        <a href="{{route('car.create')}}" class="btn btn-success waves-effect waves-light">+Add Cars</a>
    </div>
    <div class="card">
        <h5 class="card-header">Cars Table</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>ID</th>
                    <th>Brand</th>
                    <th>Name</th>
                    <th>Year</th>
                    <th>Engine</th>
                    <th>Transmission Type</th>
                    <th>Created At</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                @foreach($cars as $car)


                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$car->id}}</td>
                        <td> {{$car->brand->name}}</td>
                        <td>{{$car->name}}</td>
                        <td>{{$car->year}}</td>
                        <td> {{$car->engine->type}}</td>
                        <td> {{$car->transmission->type}}</td>
                        <td>{{$car->created_at}}</td>
                        <td> <a href="{{route('car.upload.images', $car->id)}}" class="btn btn-info">Add / View Images</a></td>
                        <td class="d-inline-flex">

                            <a class="dropdown-item" href="{{route("car.show", $car->id)}}"><i class="ri-eye-line me-1"></i> </a>
                            <a class="dropdown-item" href="{{route("car.edit", $car->id)}}"><i class="ri-pencil-line me-1"></i></a>
                            <form style="display:inline;" method="post" action="{{route('car.destroy', $car->id)}}">
                                @csrf
                                @method('delete')
                                <button type="submit" style="border: none ;background: none"><i class="ri-delete-bin-6-line me-1"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
