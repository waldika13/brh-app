@extends('layout.main')

<link rel="stylesheet" type="text/css" href="{{ asset('/css/home/style.css') }}">

@section('container')

<!--List Hotel-->
<div class="album py-5">
    <div class="container">
        <div class="mb-2">
            <h2 class="text-decoration-none">{{ $title }}</h2>
        </div>

        @if($hotels->count())

        <div class="row">
            @foreach ($hotels as $hotel)
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


    @if($title !== 'Top Hotel')
    <div class="d-flex justify-content-center mt-4">
        {{ $hotels->links() }}
    </div>
    @endif
</div>
@endsection