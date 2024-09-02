@extends('dashboard.layout.master')

@section('content')
    <div class="text-left">
        <button class="btn ">
            <a href="{{ route('reviews.index') }}" class="btn btn-primary p-2 float-start">Back to List</a>
        </button>
    </div>
    <div class="card">
        <h5 class="card-header">Review Details</h5>
        <div class="card-body">
            <div class="mb-3">
                <label for="reviewId" class="form-label">Review ID:</label>
                <input type="text" class="form-control" id="reviewId" value="{{ $review->id }}" readonly>
            </div>
            <div class="mb-3">
                <label for="reviewRating" class="form-label">Rating:</label>
                <input type="text" class="form-control" id="reviewRating" value="{{ $review->rating }}" readonly>
            </div>
            <div class="mb-3">
                <label for="reviewContent" class="form-label">Review Content:</label>
                <textarea class="form-control" id="reviewContent" rows="4" readonly>{{ $review->reviews }}</textarea>
            </div>
            <div class="mb-3">
                <label for="reviewUser" class="form-label">User:</label>
                <input type="text" class="form-control" id="reviewUser" value="{{ $review->user->name }}" readonly>
            </div>
            <div class="mb-3">
                <label for="reviewCar" class="form-label">Car:</label>
                <input type="text" class="form-control" id="reviewCar" value="{{ $review->car->model }}" readonly>
            </div>
            <a href="{{ route('reviews.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </div>
@endsection
