@extends('dashboard.layout.master')

@section('content')
    <div class="text-left">
        <button class="btn ">
            <a href="{{ route('testimonials.index') }}" class="btn btn-primary p-2 float-start">Back to List</a>
        </button>
    </div>
    <div class="card">
        <h5 class="card-header">Testimonial Details</h5>
        <div class="card-body">
            <p><strong>Review:</strong> {{ $testimonial->review }}</p>
            <p><strong>User:</strong> {{ $testimonial->user->name }}</p>
            @if ($testimonial->trashed())
                <p><strong>Status:</strong> <span class="badge bg-danger">Deleted</span></p>
            @else
                <p><strong>Status:</strong> <span class="badge bg-primary">Active</span></p>
            @endif
        </div>
    </div>
@endsection