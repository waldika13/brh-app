@extends('dashboard.layout.main')

@section('container')

<link href="{{ asset('css/dashboard/list-item.css') }}" rel="stylesheet">

<div class="header">
    <div>
        <h2>Hotel List</h2>
    </div>
    <div class="d-flex">
        <a href="/dashboard/hotels/create" class="me-4"><button class="btn btn-success rounded-5"><i class="bi bi-plus-circle"></i>
             Create Hotel
            </button></a>
            <form action="/dashboard/hotels">
                <div class="search-input">
                    <input type="text" placeholder="Search Hotel.." name="search" class="w-100" value="{{ request('search') }}">
                    <button title="Cari" type="submit" ></button>
                </div>
            </form>
    </div>
</div>

@if(session()->has('success'))
    <div class="alert alert-success col-md-6 text-center" role="alert">
        <i class="bi bi-check-square"></i> {{ session('success') }}
    </div>
@endif

@if($hotels->count())
<div class="container-fluid content pb-5" id="content">
    @foreach ($hotels as $hotel)
    <div class="card-list row justify-content-between mx-0">
        <div class="col-md-2">
            @if($hotel->image)
                <img src="{{ asset('storage/' . $hotel->image) }}" style="min-height: 95px;" alt="Photo Of {{ $hotel->title }}">
            @else
                <img src="https://picsum.photos/300/245" alt="Random Picsum Images" style="min-height: 95px;">
            @endif
    
            <div class="rating">★ {{ $hotel->rating }}</div>
        </div>
        <div class="col-md-6">
            <a href="/dashboard/hotels/{{ $hotel->slug }}" class="text-decoration-none text-dark">
                <h4>{{ $hotel->title }}</h4>
            </a>
            <p><i class="bi bi-geo-alt"></i> {{ $hotel->location }}</p>
            <div class="row">
                <div class="col-6">
                    <b><i class="bi bi-telephone"></i> Contact</b>
                    <p>{{ $hotel->contact }}</p>
                </div>
                <div class="col-6">
                    <b><i class="bi bi-cash-coin"></i> Harga</b>
                    <p>Rp. {{ $hotel->price }} / Hari</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <b>Category</b>
            <a href="/?category={{ $hotel->category->slug }}" class="text-decoration-none text-dark">
                <div class="category mt-3">
                    <p class="text-center mt-3">
                        {{ $hotel->category->name }}
                    </p>
                </div>
            </a>
        </div>
        <div class="col-md-1">
            <button class="btn btn-warning btn-dropdown">⋮</button>
        </div>
        <div class="list-dropdown">
            <a href="/dashboard/hotels/{{ $hotel->slug }}"><button class="btn"><i class="bi bi-eye"></i> Show</button></a>
            <a href="/dashboard/hotels/{{ $hotel->slug }}/edit"><button class="btn"><i class="bi bi-pencil-square"></i> Edit</button></a>
            <form action="/dashboard/hotels/{{ $hotel->slug }}" method="POST">
                @method('delete')
                    <button class="btn" onclick="return confirm('Are you sure?')"><i class="bi bi-dash-circle"></i> Delete</button>
                @csrf
            </form>
            
        </div>
    </div>
    @endforeach
</div>
@else
    <p class="text-center fs-4 mt-5">Hotel Not Found</p>
@endif

@endsection