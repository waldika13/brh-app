@extends('layout.main')

<link rel="stylesheet" type="text/css" href="{{ asset('/css/home/style.css') }}">

@section('container')

<div class="container min-vh-100">

    <div class="container-bg px-4">
        <div class="row hero-tagline flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="images/home/image-hero.png" class="d-block mx-lg-auto img-fluid" alt="Images Hero Home" width="621" height="565" loading="lazy">
            </div>
            <div class="col-lg-6">
                <h1 class="display-5  fw-bold lh-1 mb-3">Find the best
                    hotel for you</h1>
                <p class="lead text-justify">Searching for hotels is made easier by looking at the hotels available on our website. You can also comment if you have visited the hotel. Make everything more meaningful by using BRH App!</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <a class="btn btn-warning btn-lg px-4 me-md-2 text-decoration-none" href="#main_content">See More <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<main id="main_content">

    <div class="populer py-5">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h2 class="text-decoration-none mb-4">⭐ Top Rated</h2>
                </div>
                <div class="col-6 text-end">
                    <div class="">
                        <a class="btn btn-md btn-warning" href="/hotels/top" class="text-decoration-none" role="button">More Top Hotel <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            @if($populers->count())
            <div class="row">
                @foreach($populers as $populer)
                <div class="col-md-4 col-sm-6 pt-3 pb-4">
                    <div class="card h-100">
                        <div class="position-absolute px-2 py-2 mt-3 text-white rounded-right-2" style="background-color: rgba(0,0,0, 0.7)">
                            ⭐ {{ $populer->rating }}
                        </div>

                        <div style="max-height: 300px; overflow:hidden;">
                            @if($populer->image)
                            <img src="{{ asset('storage/' . $populer->image) }}" class="card-img-top" alt="Photo Of {{ $populer->title }}">
                            @else
                            <img class="card-img-top" src="https://picsum.photos/300/200" alt="Random Picsum Images">
                            @endif
                        </div>


                        <div class="card-body">
                            <h3 class="post-item__title"><a href="/detail_page/{{ $populer->slug }}" class="text-decoration-none">{{ $populer->title }}</a>
                            </h3>
                            <p class="post-item__description card-text text-justify">{{ $populer->excerpt }}</p>

                            <div class="post-item__price">
                                <p>Starting from <span class="price-hotel">Rp. {{ $populer->price }}</span></p>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <p>
                                    in <a href="/?category={{ $populer->category->slug }}" class="text-decoration-none">{{ $populer->category->name }}</a>
                                </p>
                            </div>
                            <div class="btn-group">
                                <a class="btn btn-sm btn-outline-secondary" href="/detail_page/{{ $populer->slug }}" class="text-decoration-none" role="button">View More</a>
                            </div>

                        </div>
                    </div>
                </div>
                @endforeach


            </div>
            @else
            <p class="text-center fs-4 mt-5">Hotel Not Found</p>
            @endif
        </div>
    </div>
    </div>

    <!--List Hotel-->
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="mb-2 col-md-6">
                    <h2 class="text-decoration-none">{{ $title }}</h2>
                </div>
                <div class="col-md-6">

                </div>
            </div>

            @if($hotels->count())
            <div class="card my-3 shadow">

                @if($hotels[0]->image)
                <div style="max-height: 400px; overflow:hidden;">
                    <img src="{{ asset('storage/' . $hotels[0]->image) }}" class="card-img-top" alt="Photo of {{ $hotels[0]->title }}">
                </div>
                @else
                <img class="card-img-top" src="https://picsum.photos/1200/400" alt="Random Picsum Images">
                @endif

                <div class="card-body text-center">
                    <a href="/detail_page/{{ $hotels[0]->slug }}" class="text-decoration-none text-dark">
                        <h3 class="card-title">{{ $hotels[0]->title }}</h3>
                    </a>
                    <p class="card-text">{{ $hotels[0]->excerpt }}</p>
                    <div class="my-3">
                        <p>Starting from <span class="price-hotel">Rp. {{ $hotels[0]->price }}</span></p>
                    </div>
                    <p>
                        in <a href="/?category={{ $hotels[0]->category->slug }}" class="text-decoration-none">{{ $hotels[0]->category->name }}</a>
                    </p>
                    <div class="btn-group">
                        <a class="btn btn-sm btn-outline-secondary" href="/detail_page/{{ $hotels[0]->slug }}" class="text-decoration-none" role="button">View More</a>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach ($hotels->skip(1) as $hotel)
                <div class="col-md-4 col-sm-6 pt-3 pb-4">
                    <div class="card h-100">
                        <div class="position-absolute px-2 py-2 mt-3 text-white rounded-right-2" style="background-color: rgba(0,0,0, 0.7)">
                            ⭐ {{ $hotel->rating }}
                        </div>

                        <div style="max-height: 300px; overflow:hidden;">
                            @if($hotel->image)
                            <img src="{{ asset('storage/' . $hotel->image) }}" class="card-img-top" alt="Photo Of {{ $hotel->title }}">

                            @else
                            <img class="card-img-top" src="https://picsum.photos/300/200" alt="Random Picsum Images">
                            @endif
                        </div>

                        <div class="card-body">
                            <h3 class="post-item__title"><a href="/detail_page/{{ $hotel->slug }}" class="text-decoration-none">{{ $hotel->title }}</a>
                            </h3>
                            <p class="post-item__description card-text text-justify">{{ $hotel->excerpt }}</p>

                            <div class="post-item__price">
                                <p>Starting from <span class="price-hotel">Rp. {{ $hotel->price }}</span></p>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <p>
                                    in <a href="/?category={{ $hotel->category->slug }}" class="text-decoration-none">{{ $hotel->category->name }}</a>
                                </p>
                            </div>
                            <div class="btn-group">
                                <a class="btn btn-sm btn-outline-secondary" href="/detail_page/{{ $hotel->slug }}" class="text-decoration-none" role="button">View More</a>
                            </div>

                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @else
            <p class="text-center fs-4 mt-5">Hotel Not Found</p>
            @endif
        </div>


        <div class="d-flex justify-content-center mt-4">
            {{ $hotels->links() }}
        </div>
    </div>
    @endsection