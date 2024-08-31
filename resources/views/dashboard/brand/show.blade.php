@extends('dashboard.layout.master')

@section('content')
    <div class="card">
        <h5 class="card-header">Brand Details</h5>
        <div class="card-body">
            <div class="mb-3">
                <label for="brandId" class="form-label">Brand ID:</label>
                <input type="text" class="form-control" id="brandId" value="{{ $brand->id }}" readonly>
            </div>
            <div class="mb-3">
                <label for="brandName" class="form-label">Brand Name:</label>
                <input type="text" class="form-control" id="brandName" value="{{ $brand->name }}" readonly>
            </div>
            <div class="mb-3">
                <label for="brandLogo" class="form-label">Brand Logo:</label><br>
                <img src="{{ asset('uploads/brands/' . $brand->logo) }}" alt="Brand Logo" width="150">
            </div>
            <a href="{{ route('brands.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </div>
@endsection
