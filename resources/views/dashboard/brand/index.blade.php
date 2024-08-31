@extends('dashboard.layout.master')

@section('content')
    <div class="card">
        <h5 class="card-header">Brand</h5>
        <div class="table-responsive text-nowrap">
            <a id="addBtn" class="btn btn-success" href="{{ route('brands.create') }}">Add Brand</a>
            <br><br>
            <table class="table">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Logo</th>
                        <th>Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach($brands as $brand)
                        <tr>
                            <td>{{ $brand->id }}</td>
                            <td><img src="{{ asset('uploads/brands/' . $brand->logo) }}" alt="Logo" width="50"></td>
                            <td>{{ $brand->name }}</td>
                            <td>
                                <a href="{{ route('brands.edit', $brand->id) }}" class="btn btn-primary">Edit</a>
                                <form action="{{ route('brands.destroy', $brand->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                                <a href="{{ route('brands.show', $brand->id) }}" class="btn btn-info">View</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

