@extends('dashboard.layout.master')
@section('title','create barnd')
@section('content')
    <div class="text-left">
        <button class="btn ">
            <a href="{{ route('brands.index') }}" class="btn btn-primary p-2 float-start">Back to List</a>
        </button>
    </div>
    <div class="card">
        <h5 class="card-header">Add Brand</h5>
        <div class="table-responsive text-nowrap">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
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
