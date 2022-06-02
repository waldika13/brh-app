@extends('layout.main')

@section('container')

<h1 class="mb-5"> Post Category </h1>

<div class="container">
    <div class="row">
        <div class="col-md-4 mb-3">
            <a href="#">
                <div class="card bg-dark text-white">
                    <img src="https://picsum.photos/500/500?blur=2" class="card-img" alt="">
                    <div class="card-img-overlay d-flex align-items-center p-0">
                    <h5 class="card-title text-center flex-fill p-4" style="background-color: rgba(0,0,0,0.7)">Aesthetic</h5>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 mb-3">
            <a href="#">
                <div class="card bg-dark text-white">
                    <img src="https://picsum.photos/500/500?blur=2" class="card-img" alt="">
                    <div class="card-img-overlay d-flex align-items-center p-0">
                    <h5 class="card-title text-center flex-fill p-4" style="background-color: rgba(0,0,0,0.7)">Beach</h5>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 mb-3">
            <a href="#">
                <div class="card bg-dark text-white">
                    <img src="https://picsum.photos/500/500?blur=2" class="card-img" alt="">
                    <div class="card-img-overlay d-flex align-items-center p-0">
                    <h5 class="card-title text-center flex-fill p-4" style="background-color: rgba(0,0,0,0.7)">Outdoor</h5>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

@endsection
