@extends('dashboard.layout.main')

@section('container')

<link href="{{ asset('css/dashboard/dashboard.css') }}" rel="stylesheet">

<div class="header">
    <div>
        <h2>Dashboard</h2>
    </div>
    <div class="d-flex">
        <a href="/" class="me-3"><button class="btn btn-success rounded-5">
            <i class="bi bi-arrow-bar-left"></i> Back to Home
        </button></a>
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
            @can('admin')
            <div class="box-card d-flex">
                <div class="d-flex overflow-hidden">
                    <img src="{{ asset('images/icons/icons8-hotel-64.png')}}" alt="Hotel Icons" />
                    <div>
                        <h4>Hotel</h4>
                        <h1 class=" fw-semibold">{{ $hotels->count() }}</h1>
                    </div>
                </div>
                <div>
                    <a href="/dashboard/hotels/create"><button class="btn btn-warning">+</button></a>
                </div>
            </div>
            @endcan
            <div class="box-card d-flex">
                <div class="d-flex overflow-hidden">
                    <img src="{{ asset('images/icons/icons8-article-64.png')}}" alt="Article Icons" />
                    <div>
                        <h4>Article</h4>
                        <h1 class="fs-1 fw-semibold">{{ $articles->count() }}</h1>
                    </div>
                </div>
                <div>
                    <a href="/dashboard/articles/create"><button class="btn btn-warning">+</button></a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection