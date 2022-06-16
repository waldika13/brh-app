@extends('dashboard.layout.main')

@section('container')
<link href="{{ asset('css/dashboard/edit.css') }}" rel="stylesheet">

<div class="header">
    <div>
        <h2>Edit Admin</h2>
    </div>
    <div class="d-flex">
        <button class="btn btn-danger rounded-5 btn-batal">Cancel</button>
    </div>
</div>
<div class="container-fluid content pb-5 mb-3" id="content">
    <div class="bg-white section-add">
        <form action="/dashboard/adminRegister/{{ $users->name }}" method="POST" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="mb-3">
                        <label for="name">Name</label>
                        <input type="text" class="input-type form-control @error('name') is-invalid @enderror " id="name" name="name" value="{{ old('name', $users->name) }}">
                        @error('name')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="username">Username</label>
                        <input type="text" class="input-type form-control @error('username') is-invalid @enderror " id="username" name="username" value="{{ old('username', $users->username) }}">
                        @error('username')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="email" class="input-type form-control @error('email') is-invalid @enderror " id="email" name="email" value="{{ old('email', $users->email) }}">
                        @error('email')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password">Password</label>
                        <input type="password" class="input-type form-control @error('password') is-invalid @enderror " id="password" name="password">
                        @error('password')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <button class="btn btn-success rounded-5 float-end py-3 px-5 my-2" type="submit">
                            Update Admin
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection