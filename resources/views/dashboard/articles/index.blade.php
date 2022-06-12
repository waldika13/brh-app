@extends('dashboard.layout.main')

@section('container')
<link href="{{ asset('css/dashboard/list-item.css') }}" rel="stylesheet">

<div class="header">
    <div>
        <h2>List Artikel</h2>
    </div>
    <div class="d-flex">
        <a href="/dashboard/articles/create" class="me-4"><button class="btn btn-success rounded-5">
                + Buat Artikel Baru
            </button></a>
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
    @foreach($articles as $article)
    <div class="card-list row justify-content-between mx-0 p-3">
        <div class="col-sm-11">
            <a href="/article/{{ $article->slug }}" class="text-black text-decoration-none"><h4>{{ $article->title }}</h4></a>
            <p>
                {{ $article ->excerpt }}
            </p>
            <span class="pe-3">{{ $article->user->name }}</span>
            <span class="pe-3">{{ substr($article->created_at,0,10) }}</span>
        </div>
        <div class="col-sm-1">
            <button class="btn btn-warning btn-dropdown">⋮</button>
        </div>
        <div class="list-dropdown">
            <a href="/dashboard/articles/{{ $article->slug }}/edit"><button class="btn">Edit</button></a>
            <form action="/dashboard/articles/{{ $article->slug }}" method="POST">
                @method('delete')
                    <button class="btn" onclick="return confirm('Are you sure?')">Delete</button>
                @csrf
            </form>
        </div>
    </div>
    @endforeach
</div>

@endsection