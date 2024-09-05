@extends('dashboard.layout.master')
@section('title','View Contacts')

@section('content')
        <div class="text-left">
            <button class="btn ">
                <a href="{{ route('contact.index') }}" class="btn btn-primary p-2 float-start">Back to List</a>
            </button>
        </div>
    <div class="card mt-4">
        <div class="card-header">
            Contact Info
        </div>
        <div class="card-body">
            <h5 class="card-title">User Name : {{$contact->name}}</h5>
            <p class="card-text "><b>User Email : </b> {{$contact->email}}</p>
            <p class="card-text "><b>Subject : </b> {{$contact->subject}}</p>
            <p class="card-text "><b>Message : </b> {{$contact->message}}</p>
        </div>
    </div>



@endsection
