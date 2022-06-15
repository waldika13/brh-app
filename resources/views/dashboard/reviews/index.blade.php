@extends('dashboard.layout.main')

@section('container')
<link href="{{ asset('css/dashboard/list-item.css') }}" rel="stylesheet">

<div class="header">
    <div>
        <h2>Reviews</h2>
    </div>
    <div class="d-flex">
        <div class="search-input">
            <input type="text" placeholder="Cari Artikel" class="w-100" />
            <button title="Cari"></button>
        </div>
    </div>
</div>

@if(session()->has('success'))
<div class="alert alert-success" role="alert">
    {{ session('success') }}
</div>
@endif

<div class="container-fluid content pb-5" id="content">
    @foreach($reviews as $review)
    <div class="card-list row justify-content-between mx-0 p-3">
        <div class="col-sm-11">
            <span>Review :</span>
            <h4 class="mb-3">
                {{ $review ->body }}
            </h4>
            <a href="/detail_page/{{ $review->hotel->slug }}" class="text-black text-decoration-none pe-5">Hotel : {{ $review->hotel->title }}</a>
            <span class="pe-5">Reviewer : {{ $review->user->name }}</span>
            <span class="pe-5">Date : {{ substr($review->created_at,0,10) }}</span>
        </div>
        <div class="col-sm-1">
            <button class="btn btn-warning btn-dropdown">⋮</button>
        </div>
        <div class="list-dropdown">
            <form action="/dashboard/reviews/{{ $review->id }}" method="POST">
                @method('delete')
                <button class="btn" onclick="return confirm('Are you sure?')">Delete</button>
                @csrf
            </form>
        </div>
    </div>
    @endforeach
</div>

@endsection