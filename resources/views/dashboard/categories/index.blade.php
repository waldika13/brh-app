@extends('dashboard.layout.main')

@section('container')
<link href="{{ asset('css/dashboard/list-item.css') }}" rel="stylesheet">

<div class="header">
    <div>
        <h2>List Category</h2>
    </div>
    <div class="d-flex">
        <a href="/dashboard/categories/create" class="me-4"><button class="btn btn-success rounded-5">
                + Tambah Category
            </button></a>
        <div class="search-input">
            <input type="text" placeholder="Cari Category" class="w-100" />
            <button title="Cari"></button>
        </div>
    </div>
</div>

@if(session()->has('success'))
    <div class="alert alert-success" role="alert">
        <i class="bi bi-check-square"></i> {{ session('success') }}
    </div>
@endif

<div class="container-fluid content pb-5" id="content">
    @foreach ($categories as $category)
    <div class="card-list row justify-content-between mx-0">
        <div class="col-md-2">
            @if($category->image)
                <img src="{{ asset('storage/' . $category->image) }}" style="min-height: 95px;">
            @else
                <img src="https://picsum.photos/300/245" alt="Card image cap" style="min-height: 95px;">
            @endif
        </div>
        <div class="col-md-6">
            <a href="/dashboard/categories/{{ $category->slug }}" class="text-decoration-none text-dark">
                <h4>{{ $category->name }}</h4>
            </a>
        </div>
        <div class="col-md-1">
            <button class="btn btn-warning btn-dropdown">⋮</button>
        </div>
        <div class="list-dropdown">
            {{-- <a href="/dashboard/categories/{{ $hotel->slug }}"><button class="btn">Show</button></a> --}}
            <a href="/dashboard/categories/{{ $category->slug }}/edit"><button class="btn">Edit</button></a>
            <form action="/dashboard/categories/{{ $category->slug }}" method="POST">
                @method('delete')
                    <button class="btn" onclick="return confirm('Are you sure?')">Delete</button>
                @csrf
            </form>
        </div>
    </div>
    @endforeach
</div>

@endsection