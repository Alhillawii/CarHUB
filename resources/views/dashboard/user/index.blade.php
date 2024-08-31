@extends('dashboard.layout.master')
@section('title','user')

@section('content')
    <div class="text-left">
    <a href="{{route('user.create')}}" class="btn btn-success waves-effect waves-light">+Add User</a>
    </div>
    <div class="card">
        <h5 class="card-header">User Table</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Permissions</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                @foreach($users as $user)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$user->id}}</td>
                    <td> @if($user->image)
                            <img src="{{asset($user->image)}}" alt="user image" width="50px" height="50px">
                        @else {{'NULL'}}
                    @endif

                    </td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        @if($user->role == '0') {{'Uers'}} @endif
                        @if($user->role == '1') {{'Admin'}} @endif
                        @if($user->role == '-1') {{'Super Admin'}} @endif
                    </td>
                    <td>{{$user->created_at}}</td>
                    <td class="d-inline-flex">

                                <a class="dropdown-item" href="{{route("user.show", $user->id)}}"><i class="ri-eye-line me-1"></i> </a>
                                <a class="dropdown-item" href="{{route("user.edit", $user->id)}}"><i class="ri-pencil-line me-1"></i></a>
                        <form style="display:inline;" method="post" action="{{route('user.destroy', $user->id)}}">
                            @csrf
                            @method('delete')
                            <button type="submit" style="border: none ;background: none"><i class="ri-delete-bin-6-line me-1"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
