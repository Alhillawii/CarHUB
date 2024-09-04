@extends('dashboard.layout.master')

@section('content')
    <div class="card">
        <h5 class="card-header">Reviews List</h5>
        <div class="card-body">

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Rating</th>
                        <th>Review</th>
                        <th>User</th>
                        <th>Car</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($reviews as $review)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{ $review->rating }}</td>
                            <td>{{ Str::limit($review->reviews, 50) }}</td>
                            <td>{{ $review->user->name }}</td>
                            <td>{{ $review->car->name }}</td>
                            <td>
                                <a href="{{ route('reviews.show', $review->id) }}" class="btn btn-info btn-sm">View</a>
                                <form action="{{ route('reviews.destroy', $review->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm dlt-btn-t" >Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">No reviews found</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            {{ $reviews->links() }} <!-- Pagination links -->
        </div>
    </div>
    <script>
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
