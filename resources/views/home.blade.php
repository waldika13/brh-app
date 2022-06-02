@extends('layout.main')

@section('container')
<div class="container-bg col-xxl-8 px-4 py-5">
    <div class="row hero-tagline flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
            <img src="home/img/image hero.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes"
                width="621" height="565" loading="lazy">
        </div>
        <div class="col-lg-6">
            <h1 class="display-5  fw-bold lh-1 mb-3">Find the best
                hotel for you</h1>
            <p class="lead text-justify">Lorem ipsum dolor sit amet, consectetur
                adipiscing elit. Etiam laoreet libero non
                tortor gravida, non volutpat leo iaculis.
                Duis porta luctus imperdiet. Donec lacinia,
                massa eget feugiat malesuada,</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <a class="button-secondary btn-lg px-4 me-md-2" href="#main_content">See More</a>


            </div>
        </div>
    </div>
</div>
</div>

<main id="main_content">
<!--Populer Hotel-->
<div class="populer py-5 bg-light">
    <div class="container">
        <div class="row ">
            <div class="col-12">
                <h2 class="label_hotel">Populer Hotel</h2>
            </div>

        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 position-relative">
                <a href="" class="card-populer mb-4 box-shadow">
                    <div class="card">

                        <img class="card-img-populer" src="home/img/image 12.png" alt="Card image cap">

                        <h5 class="price-populer position-absolute start-0 mt-3 ms-3"><span
                                class="label-populer">Rp.</span> 1.000.000
                        </h5>
                        <h5 class="rating-populer position-absolute end-0 mt-3 me-3"><i class="fa-solid fa-star me-2"></i>4.4
                        </h5>
                        <div class="populer-body position-absolute start-0 bottom-0 ms-3 mb-4">
                            <h3 class="name-populer">Bali Breezz Hotel</h3>
                            <p class="address-populer">☗ Jimbaran, Bali Selatan</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-sm-6 position-relative">
                <a href="" class="card-populer mb-4 box-shadow">
                    <div class="card">

                        <img class="card-img-populer" src="home/img/image 12.png" alt="Card image cap">

                        <h5 class="price-populer position-absolute start-0 mt-3 ms-3"><span
                                class="label-populer">Rp.</span> 1.000.000
                        </h5>
                        <h5 class="rating-populer position-absolute end-0 mt-3 me-3"><i class="fa-solid fa-star me-2"></i>4.4
                        </h5>
                        <div class="populer-body position-absolute start-0 bottom-0 ms-3 mb-4">
                            <h3 class="name-populer">Bali Breezz Hotel</h3>
                            <p class="address-populer">☗ Jimbaran, Bali Selatan</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-sm-6 position-relative">
                <a href="" class="card-populer mb-4 box-shadow">
                    <div class="card">

                        <img class="card-img-populer" src="home/img/image 12.png" alt="Card image cap">

                        <h5 class="price-populer position-absolute start-0 mt-3 ms-3"><span
                                class="label-populer">Rp.</span> 1.000.000
                        </h5>
                        <h5 class="rating-populer position-absolute end-0 mt-3 me-3"><i class="fa-solid fa-star me-2"></i>4.4
                        </h5>
                        <div class="populer-body position-absolute start-0 bottom-0 ms-3 mb-4">
                            <h3 class="name-populer">Bali Breezz Hotel</h3>
                            <p class="address-populer">☗ Jimbaran, Bali Selatan</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
</div>

<!--List Hotel-->
<div class="album py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-6 position-relative">
                <h2 class="label_hotel">Hotel</h2>

            </div>
            <div class="form col-md-4 col-sm-6 position-relative">
                <form class="form-check-inline ">
                    <input class="form-control mr-sm-2" type="search" placeholder="Cari Hotel"
                        aria-label="Search">
                </form>
                <form class="form-check-inline ">
                    <button class="btn  my-2 my-sm-0 ms-3" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top" src="https://picsum.photos/300/200" alt="Card image cap">
                    <div class="card-body">
                        <h3 class="post-item__title"><a href="./detailHotel.html">Dee Mansion</a>
                        </h3>
                        <p class="post-item__description card-text text-justify">Sebuah Guest House di
                            Denpasar
                            Bali, penginapan yang nyaman dan berfasilitas lengkap
                            terbaik</p>

                        <div class="post-item__price">
                            <p>Mulai dari <span class="price-hotel">Rp. 100.000</span></p>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a class="btn btn-sm btn-outline-secondary" href="./detailHotel.html"
                                    role="button">Selengkapnya</a>
                                <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> -->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top" src="https://picsum.photos/300/200" alt="Card image cap">
                    <div class="card-body">
                        <h3 class="post-item__title"><a href="#">Adiwana Monkey Forest</a>
                        </h3>
                        <p class="post-item__description card-text text-justify">Penginapan yang nyaman dan
                            tenang
                            di Ubud Adiwana Monkey Forest, Bali </p>
                        <div class="post-item__price">
                            <p>Mulai dari <span class="price-hotel">Rp. 100.000</span></p>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a class="btn btn-sm btn-outline-secondary" href="./detailHotel.html"
                                    role="button">Selengkapnya</a>
                                <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> -->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top" src="https://picsum.photos/300/200" alt="Card image cap">
                    <div class="card-body">
                        <h3 class="post-item__title"><a href="#">Grand Inna Kuta</a>
                        </h3>
                        <p class="post-item__description card-text text-justify">Tempat yang memberikan
                            suasana
                            tenang dan nyaman saat Anda sedang berlibur</p>
                        <div class="post-item__header__price">
                            <p>Mulai dari <span class="price-hotel">Rp. 100.000</span></p>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a class="btn btn-sm btn-outline-secondary" href="./detailHotel.html"
                                    role="button">Selengkapnya</a>
                                <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> -->
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection