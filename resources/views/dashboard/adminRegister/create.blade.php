@extends('dashboard.layout.main')


@section('container')
<link href="{{ asset('css/dashboard/artikel.css') }}" rel="stylesheet">

<div class="header">
    <div>
        <h2>Registrasi Admin Baru</h2>
    </div>
    <div class="d-flex">
        <button class="btn btn-secondary rounded-5 btn-batal">Batal</button>
    </div>
</div>
<div class="container-fluid content pb-5 mb-5" id="content">
    <form action="/dashboard/adminRegister" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <div>
                <label for="title">Name</label>
                <input type="text" placeholder="Name" id="name" name="name" value="{{ old('name') }}" required>
                @error('name')
                <p class="text-danger mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="title">Username</label>
                <input type="text" placeholder="Username" id="Username" name="username" value="{{ old('username') }}" required>
                @error('username')
                <p class="text-danger mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="title">E-Mail</label>
                <input type="text" placeholder="E-Mail" required id="E-Mail" name="email" value="{{ old('email') }}" required>
                @error('email')
                <p class="text-danger mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="title">Password</label>
                <input type="password" placeholder="Password" id="Password" name="password" required>
                @error('password')
                <p class="text-danger mt-1">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <button class="btn btn-success rounded-5 float-end py-3 px-5" type="submit">
            Tambahkan
        </button>
    </form>
</div>

@endsection



