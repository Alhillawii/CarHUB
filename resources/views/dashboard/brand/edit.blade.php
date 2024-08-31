@extends('dashboard.layout.master')

@section('content')
    <div class="card">
        <h5 class="card-header">Edit Brand</h5>
        <div class="table-responsive text-nowrap">
            <form action="{{ route('brands.update', $brand->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <input class="form-control" name="name" type="text" value="{{ old('name', $brand->name) }}" placeholder="Brand Name"><br>
                    <input class="form-control" name="logo" type="file"><br>
                    <button type="submit" class="btn btn-success">Update Brand</button>
                </div>
            </form>
        </div>
    </div>
@endsection