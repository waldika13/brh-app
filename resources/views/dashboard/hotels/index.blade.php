@extends('dashboard.layout.main')

@section('container')

<link href="{{ asset('css/dashboard/list-item.css') }}" rel="stylesheet">

<div class="header">
    <div>
        <h2>Hotel List</h2>
    </div>
    <div class="d-flex">
        <a href="/dashboard/hotels/create" class="me-4"><button class="btn btn-success rounded-5"><i class="bi bi-plus-circle"></i>
                Create Hotel
            </button></a>
        <form action="/dashboard/hotels">
            <div class="search-input">
                <input type="text" placeholder="Search Hotel.." name="search" class="w-100" value="{{ request('search') }}">
                <button title="Cari" type="submit"></button>
            </div>
        </form>
    </div>
</div>

@if($hotels->count())
<div class="container-fluid content pb-5" id="content">
    @foreach ($hotels as $hotel)
    <div class="card-list row justify-content-between mx-0">
        <div class="col-md-2">
            @if($hotel->image)
            <img src="{{ asset('storage/' . $hotel->image) }}" alt="Photo Of {{ $hotel->title }}">
            @else
            <img src="https://picsum.photos/300/245" alt="Random Picsum Images">
            @endif

            <div class="rating">★ {{ $hotel->rating }}</div>
        </div>
        <div class="col-md-6">
            <a href="/dashboard/hotels/{{ $hotel->slug }}" class="text-decoration-none text-dark">
                <h4>{{ $hotel->title }}</h4>
            </a>
            <p><i class="bi bi-geo-alt"></i> {{ $hotel->location }}</p>
            <div class="row">
                <div class="col-6">
                    <b><i class="bi bi-telephone"></i> Contact</b>
                    <p>{{ $hotel->contact }}</p>
                </div>
                <div class="col-6">
                    <b><i class="bi bi-cash-coin"></i> Price</b>
                    <p>Rp. {{ $hotel->price }} / Hari</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <b>Category</b>
            <div class="d-flex">
                <a href="/?category={{ $hotel->category->slug }}" class="text-decoration-none text-dark">
                    <div class="category mt-3 ">
                        <p class="text-center m-2">
                            {{ $hotel->category->name }}
                        </p>
                    </div>
                </a>
            </div>

        </div>
        <div class="col-md-1">
            <button class="btn btn-warning btn-dropdown">⋮</button>
        </div>
        <div class="list-dropdown">
            <a href="/dashboard/hotels/{{ $hotel->slug }}"><button class="btn"><i class="bi bi-eye"></i> Show</button></a>
            <a href="/dashboard/hotels/{{ $hotel->slug }}/edit"><button class="btn"><i class="bi bi-pencil-square"></i> Edit</button></a>

            <form action="/dashboard/hotels/{{ $hotel->slug }}" method="POST" id="deleteForm">
                @csrf
                @method('delete')
                <button class="btn" type="submit"><i class="bi bi-dash-circle"></i> Delete</button>
            </form>
        </div>
    </div>
    @endforeach
    <div class="d-flex justify-content-center mt-4">
        {{ $hotels->links() }}
    </div>
</div>

@else
<p class="text-center fs-4 mt-5">Hotel Not Found</p>
@endif

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