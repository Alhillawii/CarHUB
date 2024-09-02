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

                    <th>Brand</th>
                    <th>Name</th>
                    <th>Year</th>
                    <th>Engine</th>
                    <th>Transmission</th>
                    <th>Created At</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                @foreach($cars as $car)


                    <tr>

                        <td>{{$loop->iteration}}</td>
                        <td> {{$car->brand->name}}</td>
                        <td>{{$car->name}}</td>
                        <td>{{$car->year}}</td>
                        <td> {{$car->engine->type}}</td>
                        <td> {{$car->transmission->type}}</td>
                        <td>{{$car->created_at->format('y-m-d')}}</td>
                        <td> <a href="{{route('car.upload.images', $car->id)}}" class="btn btn-outline-warning btn-sm">Add / View </a></td>
                        <td class="d-inline-flex">
                            <a  href="{{route("car.show", $car->id)}}" class="btn btn-info p-2 me-1 btn-sm">View</a>
                            <a href="{{route("car.edit", $car->id)}}" class="btn btn-primary p-2 me-1 btn-sm">Edit</a>
                            <form style="display:inline;" method="post" action="{{route('car.destroy', $car->id)}}">
                                @csrf
                                @method('delete')
                                <button type="submit"  class="btn btn-danger p-2 btn-sm dlt-btn-t">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>

    <script>
        // Wait until the DOM is fully loaded
        document.addEventListener('DOMContentLoaded', function() {
            // Select all delete buttons with the class 'dlt-btn-t'
            const deleteButtons = document.querySelectorAll('.dlt-btn-t');

            deleteButtons.forEach(function(button) {
                button.addEventListener('click', function(event) {
                    event.preventDefault(); // Prevent the form from submitting
                    Swal.fire({
                        title: 'Are you sure?',
                        text: "You won't be able to revert this!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Submit the form if the user confirms
                            button.closest('form').submit();
                        }
                    });
                });
            });
        });
    </script>
@endsection
