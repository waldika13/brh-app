@extends('admin.main')

@section('content')
<link href="{{ asset('css/admin/list-item.css') }}" rel="stylesheet">

<div class="header">
    <div>
        <h2>List Artikel</h2>
    </div>
    <div class="d-flex">
        <a href="" class="me-4"><button class="btn btn-success rounded-5">
                + Buat Artikel Baru
            </button></a>
        <div class="search-input">
            <input type="text" placeholder="Cari Artikel" class="w-100" />
            <button title="Cari"></button>
        </div>
    </div>
</div>
<div class="container-fluid content pb-5" id="content">
    <div class="card-list row justify-content-between mx-0 p-3">
        <div class="col-sm-11">
            <h4>Bali Brezz hotel</h4>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam
                cum officia rem. Temporibus molestiae est sed odit odio eum
                aliquam quam reprehenderit et doloremque, quis esse
                voluptatibus, culpa tempora ducimus!
            </p>
        </div>
        <div class="col-sm-1">
            <button class="btn btn-warning btn-dropdown">⋮</button>
        </div>
        <div class="list-dropdown">
            <a href="#"><button class="btn">Edit</button></a>
            <button class="btn">Hapus</button>
        </div>
    </div>
</div>

@endsection