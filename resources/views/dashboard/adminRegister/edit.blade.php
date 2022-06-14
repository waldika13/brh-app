@extends('dashboard.layout.main')

@section('container')
<link href="{{ asset('css/dashboard/artikel.css') }}" rel="stylesheet">

<div class="header">
    <div>
        <h2>Edit Admin</h2>
    </div>
    <div class="d-flex">
        <button class="btn btn-secondary rounded-5 btn-batal">Batal</button>
    </div>
</div>
<div class="container-fluid content pb-5 mb-3" id="content">
    <form action="/dashboard/adminRegister/{{ $user->name }}" method="POST" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-4">
            <div>
                <label for="name">Name</label>
                <input type="text" placeholder="Name" id="name" name="name" value="{{ old('name', $user->name) }}">
                @error('name')
                <p class="text-danger mt-1">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <button class="btn btn-success rounded-5 float-end py-3 px-5" type="submit">
            Simpan
        </button>
    </form>
</div>

@endsection