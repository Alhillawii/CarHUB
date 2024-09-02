@extends('dashboard.layout.master')
@section('title','rental')

@section('content')

    <div class="card">
        <h5 class="card-header">Rentals Table</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>User</th>
                    <th>Car</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Status</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                @foreach($rentals as $rental)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td> {{$rental->user->name}}</td>
                        <td>{{$rental->car->name}}</td>
                        <td>{{$rental->rental_start_date}}</td>
                        <td>{{$rental->rental_end_date}}</td>
                        <td>  @if ($rental->status=='Reserved')
                                <span class="badge rounded-pill bg-label-success me-1">Reserved</span>
                            @elseif($rental->status=='Pending')
                                <span class="badge rounded-pill bg-label-warning me-1">Pending</span>
                            @elseif($rental->status=='Active')
                                <span class="badge rounded-pill bg-label-primary me-1">Active</span>
                            @elseif($rental->status=='Canceled')
                                <span class="badge rounded-pill bg-label-danger me-1">Canceled</span>
                            @else
                                <span class="badge rounded-pill bg-label-danger me-1">Rejected</span>
                            @endif</td>
                        <td>{{$rental->created_at->format('y-m-d')}}</td>
                        <td class="d-inline-flex">
                            <a  href="{{route("rental.show", $rental->id)}}" class="btn btn-info p-2 me-1 btn-sm">View</a>
                            <a href="{{route("rental.edit", $rental->id)}}" class="btn btn-primary p-2 me-1 btn-sm">Edit</a>
                            <form style="display:inline;" method="post" action="{{route('rental.destroy', $rental->id)}}">
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
