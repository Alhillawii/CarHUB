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
                        <th>ID</th>
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
                            <td>{{ $review->id }}</td>
                            <td>{{ $review->rating }}</td>
                            <td>{{ Str::limit($review->reviews, 50) }}</td>
                            <td>{{ $review->user->name }}</td>
                            <td>{{ $review->car->type }}</td>
                            <td>
                                <a href="{{ route('reviews.show', $review->id) }}" class="btn btn-info btn-sm">View</a>
                                <form action="{{ route('reviews.destroy', $review->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this review?')">Delete</button>
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
@endsection
