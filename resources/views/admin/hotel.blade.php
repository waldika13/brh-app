@extends('admin.main')

@section('content')
<link href="{{ asset('css/admin/list-item.css') }}" rel="stylesheet">

<div class="header">
    <div>
        <h2>List Hotel</h2>
    </div>
    <div class="d-flex">
        <a href="/admin/hotel/add" class="me-4"><button class="btn btn-success rounded-5">
                + Tambah Hotel
            </button></a>
        <div class="search-input">
            <input type="text" placeholder="Cari Hotel" class="w-100" />
            <button title="Cari"></button>
        </div>
    </div>
</div>
<div class="container-fluid content pb-5" id="content">
@for($i = 0; $i < 5; $i++)
    <div class="card-list row justify-content-between mx-0">
        <div class="col-md-2">
            <img src="/src/assets/img/hotel1.jpg" alt="" />
            <div class="rating">★ 4.6</div>
        </div>
        <div class="col-md-5">
            <h4>Bali Brezz hotel</h4>
            <p>Jl. Gatot Subroto, Jimbaran, Bali Selatan</p>
            <div class="row">
                <div class="col-5">
                    <b>Contact</b>
                    <p>08954726181</p>
                </div>
                <div class="col-7">
                    <b>Harga</b>
                    <p>Rp. 350.000 / Hari</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <b>Wisata terdekat</b>
            <ul>
                <li>Pantai Kuta</li>
                <li>Pantai Duyung</li>
            </ul>
        </div>
        <div class="col-md-1">
            <button class="btn btn-warning btn-dropdown">⋮</button>
        </div>
        <div class="list-dropdown">
            <a href="/admin/hotel/edit"><button class="btn">Edit</button></a>
            <button class="btn">Hapus</button>
        </div>
    </div>
    @endfor
</div>

@endsection