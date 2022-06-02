@extends('layout.main')

@section('container')
    <div class="container">
        <div class="card bg-dark text-white rounded-4">
            <img src="/images/Bali Breezz Hotel.jpg" class="card-img rounded-4"  style="height: 700px;" alt="...">
            <div class="card-img-overlay d-flex flex-column-reverse ms-2">
                <p class="text-dark card-text d-inline-flex justify-content-start align-items-start border border-waring bg-warning p-2 mb-2 rounded-pill" style="width: 170px">Rp. 350.000 /hari</p>
                <p class="text-white card-text d-flex justify-content-start align-items-start ms-3 mb-1">Mulai dari</p>
            </div>
        </div>
    </div>
    <h1 class="mt-4">Bali Breezz Hotel</h1>
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
    <div class="d-inline-block pe-5 pb-4">
        <p class="fw-bold">Contact</p>
        <div class="d-inline-block">
            <p>+62 882 9281 8722</p>
        </div>
    </div>

    <div class="d-inline-block pb-4">
        <p class="fw-bold">Rating</p>
        <div class="d-inline-block">
            <p class="fw-bold"><i class="fa-solid fa-star pe-1" style="color:gold"></i>4.6</p>
        </div>
    </div>

    <p class="fs-3 border-bottom border-dark mb-3">Reviews</p>

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
