@extends('admin.main')



@section('content')

<link href="{{ asset('css/admin/dashboard.css') }}" rel="stylesheet">

<div class="header">
    <div>
        <h2>Dashboard</h2>
    </div>
</div>
<div class="container-fluid content" id="content">
    <div class="row">
        <div class="h-70vh col-sm-7 pe-sm-5">
            <div class="image">
                <h1 class="fs-1">Bali <br />Recomendation <br />Hotel</h1>
            </div>
        </div>
        <div class="h-70vh col-sm-5 card bg-transparent border-0 justify-content-between">
            <div class="box-card d-flex">
                <div class="d-flex overflow-hidden">
                    <img src="{{ asset('img/icons/icons8-hotel-64.png')}}" alt="" />
                    <div>
                        <h4>Hotel</h4>
                        <h1 class="fs-1 fw-semibold">3652</h1>
                    </div>
                </div>
                <div>
                    <a href="tambah-hotel.html"><button class="btn btn-warning">+</button></a>
                </div>
            </div>
            <div class="box-card d-flex">
                <div class="d-flex overflow-hidden">
                    <img src="{{ asset('img/icons/icons8-article-64.png')}}" alt="" />
                    <div>
                        <h4>Artikel</h4>
                        <h1 class="fs-1 fw-semibold">30</h1>
                    </div>
                </div>
                <div>
                    <a href=""><button class="btn btn-warning">+</button></a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection