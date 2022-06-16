@extends('layout.main')

@section('container')
    <a href="/" class="btn btn-primary mb-3"><i class="bi bi-arrow-left-square"></i> Back to home</a>
    <div class="container">
        <div class="card text-white rounded-5 border-5">
            @if($hotel->image)
                <div style="max-height: 700px; overflow:hidden;">
                    <img src="{{ asset('storage/' . $hotel->image) }}" class="card-img-top rounded-4" alt="Photo of {{ $hotel->title }}">
                </div>
            @else
                <img src="https://picsum.photos/1200/400" class="card-img-top img-fluid" alt="Random Picsum Images">
            @endif
            <div class="card-img-overlay d-flex flex-column-reverse ms-2 fw-bold">
                <p class="text-dark text-center bg-warning py-2 mb-2 rounded-pill" style="width: 200px">Rp. {{ $hotel->price }}/day</p>
            </div>
        </div>
    </div>
    <h1 class="mt-4 d-inline-block">{{ $hotel->title }}</h1>
    <p><i class="bi bi-geo-alt"></i> {{ $hotel->location }}</p>
    <div class="container">
        {!! $hotel->body !!}
    </div>
    <div class="d-inline-block pe-5 pb-4">
        <p class="fw-bold mt-4">Category</p>
        <div class="d-inline-block gap-1">
            <div class="d-inline-block border border-waring bg-warning p-2 mb-2 rounded-pill">
                <a href="/?category={{ $hotel->category->slug }}" class="text-decoration-none text-dark mx-2">{{ $hotel->category->name }}</a>
            </div>
        </div>
    </div>
    <div class="d-inline-block pe-5 pb-4">
        <p class="fw-bold border-bottom border-dark">Room Facility</p>
        <p>{{ $hotel->facility }}</p>
    </div>
    <div class="d-inline-block pe-5 pb-4">
        <p class="fw-bold">Contact</p>
        <div class="d-inline-block">
            <p>{{ $hotel->contact }}</p>
        </div>
    </div>

    <div class="d-inline-block pb-4">
        <p class="fw-bold">Rating</p>
        <div class="d-inline-block">
            <p class="fw-bold"><i class="fa-solid fa-star pe-1" style="color:gold"></i>{{ $hotel->rating }}</p>
        </div>
    </div>

    <p class="fs-3 border-bottom border-dark mb-3">Reviews</p>
    
    @if($reviews->count())
        <div class="row my-4 mx-4">
            @foreach ($reviews as $review)
                <div class="card me-3 border-0 shadow p-3 mb-4 rounded" style="width: 20rem;">
                    <div class="card-body">
                        <p class="card-title fs-4">{{ $review->user->name }}</p>
                        <p class="card-text">{{ $review->body }}</p>
                        <p class="card-subtitle">{{ $review->created_at->diffForHumans() }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <p class="text-center fs-4 mt-5">Review Not Found</p>
    @endif

    @auth
        @if(session()->has('success'))
            <div class="alert alert-success col-md-3 text-center" role="alert">
                <i class="bi bi-check-square"></i> {{ session('success') }}
            </div>
        @endif
        <div class="d-inline-block card mb-3 me-3 border-0 shadow p-3 mb-5 bg-body rounded mt-3" style="width: 100%">
            <div class="card-body">
                <p class="card-title fs-4 border-bottom border-dark">Add Review</p>
                <form class="pt-3" method="post" action="/detail_page/{{$hotel->slug}}/review">
                    @csrf
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Your Name" name="text" id="text" value="{{ auth()->user()->name }}" disabled>
                    </div>
                    <div class="mb-2">
                        <textarea class="form-control @error('body') is-invalid @enderror" placeholder="Input your review here..." name="body" id="body" aria-label="With textarea"></textarea>
                        @error('body')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <p class="mt-2" id="result" style="color: #b2b2b2"></p>
                        
                    </div>
                    <button type="submit" class="btn btn-dark">Submit</button>
                </form>
            </div>
        </div>
    @else
        <div class="mb-5">
            <p class="fs-4">Any Reviews? Please login first.</p>
            <a href="/signin" class="btn btn-warning"><i class="bi bi-box-arrow-in-right"></i> Login</a>
        </div>
    @endauth
</div>

<script>
    var body = document.getElementById("body");
    var result = document.getElementById("result");
    var limit = 30;

    result.textContent = 0 + "/" + limit;

    body.addEventListener("input", function(){
        var textLength = body.value.length;
        result.textContent = textLength + "/" + limit;

        if(textLength > limit){
            body.style.borderColor = "#ff2851";
            result.style.color = "#ff2851";
        } else {
            body.style.borderColor = "#b2b2b2";
            result.style.color = "#b2b2b2";
        }
    })
</script>
@endsection