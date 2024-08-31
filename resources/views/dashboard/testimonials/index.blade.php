@extends('dashboard.layout.master')

@section('content')
    <div class="card">
        <h5 class="card-header">Testimonials</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>review</th>
                    <th>user_id</th>
                    <th>status</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                @foreach ($testimonials as $testimonial)
                    <tr>
                        <td>{{ $testimonial->id }}</td>
                        <td>
                            <i class="ri-chat-quote-line ri-22px text-info me-4"></i>
                            <span>{{ $testimonial->review }}</span>
                        </td>
                        <td>{{ $testimonial->user->name }}</td>
                        <td>
                            @if ($testimonial->trashed())
                                <span class="badge rounded-pill bg-label-danger me-1">Deleted</span>
                            @else
                                <span class="badge rounded-pill bg-label-primary me-1">Active</span>
                            @endif
                        </td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="ri-more-2-line"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ route('testimonials.show', $testimonial->id) }}">
                                        <i class="ri-eye-line me-2"></i> view
                                    </a>
                                    <form action="{{ route('testimonials.destroy', $testimonial->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="dropdown-item" type="submit">
                                            <i class="ri-delete-bin-6-line me-2"></i> Delete
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
