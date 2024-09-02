@extends('dashboard.layout.master')
@section('title','user')

@section('content')
    <div class="text-left">
    <a href="{{route('user.create')}}" class="btn btn-success waves-effect waves-light">+Add User</a>
    </div>
    <div class="card">
        <h5 class="card-header">User Table</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Permissions</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                @foreach($users as $user)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td> @if($user->image)
                            <img src="{{asset($user->image)}}" alt="user image" width="50px" height="50px">
                        @else {{'NULL'}}
                    @endif

                    </td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        @if($user->role == '0') {{'Uers'}} @endif
                        @if($user->role == '1') {{'Admin'}} @endif
                        @if($user->role == '-1') {{'Super Admin'}} @endif
                    </td>
                    <td>{{$user->created_at->format('y-m-d')}}</td>
                    <td >
                                <a class="btn btn-info p-2 btn-sm" href="{{route("user.show", $user->id)}}">View </a>
                                <a class="btn btn-primary p-2 btn-sm " href="{{route("user.edit", $user->id)}}">Edit</a>
                        <form style="display:inline;" method="post" action="{{route('user.destroy', $user->id)}}">
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
