@extends('dashboard.layout.main')

@section('container')
    
    <div class="mt-5 mb-2">
        <div class="d-flex">
            <a href="/dashboard/hotels" class="btn btn-primary">Back to list</a>
            <a href="/dashboard/hotels/{{ $hotel->slug }}/edit" class="btn btn-warning mx-1">Edit</a>
            <form action="/dashboard/hotels/{{ $hotel->slug }}" method="POST" id="deleteForm">
                @csrf
                @method('delete')
                <button class="btn btn-danger" type="submit"><i class="bi bi-dash-circle"></i> Delete</button>
            </form>
        </div>
    </div>
    
    @if($hotel->image)
        <div style="max-height: 350px; overflow:hidden;">
            <img src="{{ asset('storage/' . $hotel->image) }}" class="img-fluid my-3" alt="Photo Of {{ $hotel->title }}">
        </div>
    @else
        <img src="https://picsum.photos/1200/400" class="img-fluid my-3" alt="Random Picsum Images">
    @endif
    
    <h1 class="mt-4 d-inline">{{ $hotel->title }}</h1>
    <p>By: {{ $hotel->author->name }}</p>
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

    <div class="d-inline-block pe-5 pb-4">
        <p class="fw-bold">Rating</p>
        <div class="d-inline-block">
            <p class="fw-bold">⭐ {{ $hotel->rating }}</p>
        </div>
    </div>

    <div class="d-inline-block pb-4">
        <p class="fw-bold">Price</p>
        <div class="d-inline-block">
            <p>Rp. {{ $hotel->price }}/Hari</p>
        </div>
    </div>

    <p class="fs-3 border-bottom border-dark mb-3">Reviews</p>

    @if($reviews->count())
        <div class="row my-4 justify-content-start">
            @foreach ($reviews as $review)
                <div class="card col-sm-3 me-3 border-0 shadow p-3 mb-4 rounded">
                    <div class="card-body">
                        <p class="card-title fs-4">{{ $hotel->author->name }}</p>
                        <p class="card-text">{{ $review->body }}</p>
                        <p class="card-subtitle">{{ $review->created_at->diffForHumans() }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <p class="text-center fs-4 mt-5">Review Not Found</p>
    @endif
    
</div>
<script type="text/javascript">
    try {
        const btnDelete = document.querySelectorAll('#deleteForm');
        btnDelete.forEach((button, index) => {
            button.addEventListener('submit', function(e) {
                var form = this;
                e.preventDefault(); // <--- prevent form from submitting
                swal({
                    title: "Are you sure?",
                    text: "You will not be able to recover this hotel!",
                    icon: "warning",
                    buttons: [
                        'No, cancel it!',
                        'Yes, I am sure!'
                    ],
                    dangerMode: true,
                }).then(function(isConfirm) {
                    if (isConfirm) {
                        swal({
                            title: 'Success!',
                            text: 'Hotel are successfully deleted!',
                            icon: 'success'
                        }).then(function() {
                            form.submit();
                        });
                    } else {
                        swal("Cancelled", "Hotel is safe :)", "error");
                    }
                })
            });
        });
    } catch (error) {

    }
</script>
@endsection
