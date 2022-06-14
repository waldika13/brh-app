@extends('dashboard.layout.main')

@section('container')
<link href="{{ asset('css/dashboard/list-item.css') }}" rel="stylesheet">

<div class="header">
    <div>
        <h2>List Admin</h2>
    </div>
    <div class="d-flex">
        <a href="/dashboard/adminRegister/create" class="me-4"><button class="btn btn-success rounded-5">
                + Registrasi Admin Baru
            </button></a>
    </div>
</div>

@if(session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
@endif

<div class="container-fluid content pb-5" id="content">
    @foreach($users as $user)
    <div class="card-list row justify-content-between mx-0 p-3">
        <div class="col-sm-11">
            <p>
                {{ $user ->name }}
            </p>
            <span class="pe-3">{{ $user->email }}</span>
            <span class="pe-3">{{ substr($user->created_at,0,10) }}</span>
        </div>
        <div class="col-sm-1">
            <button class="btn btn-warning btn-dropdown">⋮</button>
        </div>
        <div class="list-dropdown">
            <a href="/dashboard/adminRegister/{{ $user->name }}/edit"><button class="btn">Edit</button></a>
            <form action="/dashboard/adminRegister/{{ $user->name }}" method="POST">
                @method('delete')
                    <button class="btn" onclick="return confirm('Are you sure?')">Delete</button>
                @csrf
            </form>
        </div>
    </div>
    @endforeach
</div>

@endsection