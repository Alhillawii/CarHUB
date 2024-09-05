@extends('dashboard.layout.master')
@section('title','Edit Rental')

@section('content')
    <div class="text-left">
        <button class="btn ">
            <a href="{{ route('rental.index') }}" class="btn btn-primary p-2 float-start">Back to List</a>
        </button>
    </div>
    <div class="col-md-12">
        <div class="card">
            <h5 class="card-header">Edit Rental</h5>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{route('rental.update',$rental->id)}}"  method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body demo-vertical-spacing demo-only-element">
                    <div class="row">
                        <div class="form-floating form-floating-outline  col-md-6">
                            <input type="date" name="start_date" class="form-control" id="exampleFormControlSelect1" value="{{$rental->rental_start_date}}">
                            <label  class="form-label" for="exampleFormControlSelect1">Start Date</label>
                        </div>

                        <div class="form-floating form-floating-outline  col-md-6">
                            <input type="date" name="end_date" class="form-control" id="exampleFormControlSelect1" value="{{$rental->rental_end_date}}">
                            <label  class="form-label" for="exampleFormControlSelect1">End Date</label>
                        </div>
                    </div>
                    <div class="form-floating form-floating-outline  ">
                        <select class="form-select" name="status" id="exampleFormControlSelect1" aria-label="Default select example">
                            <option value="Pending" selected="">Pending</option>
                            <option value="Reserved">Reserved</option>
                            <option value="Active">Active</option>
                            <option value="Canceled">Canceled</option>
                            <option value="Rejected">Rejected</option>

                        </select>
                        <label for="exampleFormControlSelect1">Car Type</label>
                    </div>
                    <button class="btn btn-success">update</button>


                </div>

            </form>
        </div>
    </div>
@endsection
