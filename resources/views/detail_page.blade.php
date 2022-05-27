@extends('layout.main')

@section('container')
<div class="container">
    <h1>Bali Breezz Hotel</h1>
    <p>Jl. Gatot Subroto, Jimbaran, Bali Selatan</p>
    <div class="d-inline-block pe-5 pb-4">
        <p class="fw-bold mt-4">Wisata Terdekat</p>
        <div class="d-inline-block gap-1">
            <div class="d-inline-block border border-waring bg-warning p-2 mb-2 rounded-pill">Pantai Kuta</div>
            <div class="d-inline-block border border-waring bg-warning p-2 mb-2 rounded-pill">Pantai Duyung</div>
            <div class="d-inline-block border border-waring bg-warning p-2 mb-2 rounded-pill">Bandara</div>
        </div>
    </div>
    <div class="d-inline-block pe-5 pb-4">
        <p class="fw-bold border-bottom border-dark">Room Facility</p>
        <div class="d-inline-block">
            <div class="d-inline-block border border-waring bg-warning p-2 mb-2 rounded-pill"><i class="fa-solid fa-bed ps-1 pe-1"></i>Bed</div>
            <div class="d-inline-block border border-waring bg-warning p-2 mb-2 rounded-pill"><i class="fa-solid fa-mug-saucer ps-1 pe-1"></i>Coffe</div>
            <div class="d-inline-block border border-waring bg-warning p-2 mb-2 rounded-pill"><i class="fa-solid fa-wifi ps-1 pe-1"></i>WiFi</div>
        </div>
    </div>
    <div class="d-inline-block pb-4">
        <p class="fw-bold">Contact</p>
        <div class="d-inline-block">
            <p>+62 882 9281 8722</p>
        </div>
    </div>

    <p class="fs-3 border-bottom border-dark">Reviews</p>
    <div class="d-inline">
        <p class="fw-bold pt-2 fs-5"><i class="fa-solid fa-star pe-1" style="color:gold"></i>4.6</p>
    </div>
    <div class="d-inline-block pt-3">
        <div class="d-inline-block card mb-3 me-3 border-0 shadow p-3 mb-5 bg-body rounded" style="width: 20rem;">
            <div class="card-body">
            <p class="card-title fs-4">John Doe</p>
                <p class="card-subtitle mb-2">10 May</p>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam laoreet libero non tortor gravida, Etiam laoreet libero non tortor gravida,</p>
            </div>
        </div>
        <div class="d-inline-block card mb-3 me-3 border-0 shadow p-3 mb-5 bg-body rounded" style="width: 20rem;">
            <div class="card-body">
            <p class="card-title fs-4">Marry Jane</p>
                <p class="card-subtitle mb-2">10 May</p>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam laoreet libero non tortor gravida, Etiam laoreet libero non tortor gravida,</p>
            </div>
        </div>
        <div class="d-inline-block card mb-3 me-3 border-0 shadow p-3 mb-5 bg-body rounded" style="width: 20rem;">
            <div class="card-body">
            <p class="card-title fs-4">Jane Doe</p>
                <p class="card-subtitle mb-2">10 May</p>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam laoreet libero non tortor gravida, Etiam laoreet libero non tortor gravida,</p>
            </div>
        </div>
    </div>

    
    <div class="d-inline-block card mb-3 me-3 border-0 shadow p-3 mb-5 bg-body rounded mt-5" style="width: 100%">
        <div class="card-body">
            <p class="card-title fs-4 border-bottom border-dark">Add Review</p>
            <form class="pt-3">
                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Your Name" aria-label="Yourname">
                </div>
                <div class="mb-3">
                    <textarea class="form-control" placeholder="Input your review here..." aria-label="With textarea"></textarea>
                </div>
                <button type="submit" class="btn btn-dark">Submit</button>
            </form>
        </div>
    </div>
    
</div>
@endsection
