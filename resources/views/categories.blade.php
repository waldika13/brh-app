@extends('layout.main')

@section('container')

<div class="container min-vh-100">
    <h1 class="mb-5"> Hotel Category </h1>

    <div class="container">
        
        @if($categories->count())
            <div class="row">
                @foreach ($categories as $category)
                    <div class="col-md-4 mb-3">
                        <a href="/?category={{ $category->slug }}">
                            <div class="card bg-dark text-white">
                                @if($category->image)
                                    <img src="{{ asset('storage/' . $category->image) }}" style="max-height: 350px" alt="Photo Of {{ $category->name }}">
                                @else
                                    <img src="https://picsum.photos/500/500?blur=2" class="card-img" alt="Random Picsum Images">
                                @endif
                            
                                <div class="card-img-overlay d-flex align-items-center p-0">
                                <h5 class="card-title text-center flex-fill p-4" style="background-color: rgba(0,0,0,0.7)">{{ $category->name }}</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-center fs-4 mt-5">Categories Not Found</p>
        @endif
    </div>
</div>

@endsection
