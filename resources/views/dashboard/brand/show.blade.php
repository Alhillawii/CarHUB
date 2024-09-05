@extends('dashboard.layout.master')
@section('title','Brand View')
@section('content')
    <div class="text-left">
        <button class="btn ">
            <a href="{{ route('brands.index') }}" class="btn btn-primary p-2 float-start">Back to List</a>
        </button>
    </div>
    <div class="card">
        <h5 class="card-header">Brand Details</h5>
        <div class="card-body">
            <div class="mb-3">
                <label for="brandId" class="form-label">Brand ID:</label>
                <p >{{ $brand->id }} </p>
            </div>
            <div class="mb-3">
                <label for="brandName" class="form-label">Brand Name:</label>
                <p>  {{ $brand->name }}</p>
            </div>
            <div class="mb-3">
                <label for="brandLogo" class="form-label">Brand Logo:</label><br>
                <img src="{{ asset('uploads/brands/' . $brand->logo) }}" alt="Brand Logo" width="150">
            </div>

        </div>
    </div>
@endsection
