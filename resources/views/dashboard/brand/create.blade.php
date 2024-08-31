@extends('dashboard.layout.master')

@section('content')
    <div class="card">
        <h5 class="card-header">Add Brand</h5>
        <div class="table-responsive text-nowrap">
            <form action="{{ route('brands.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <input class="form-control" name="name" type="text" placeholder="Brand Name" value="{{ old('name') }}"><br>
                    <input class="form-control" name="logo" type="file"><br>
                    <button type="submit" class="btn btn-success">Add Brand</button>
                </div>
            </form>
        </div>
    </div>
@endsection