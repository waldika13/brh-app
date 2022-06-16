@extends('dashboard.layout.main')

@section('container')
<link href="{{ asset('css/dashboard/list-item.css') }}" rel="stylesheet">

<div class="header">
    <div>
        <h2>Category List</h2>
    </div>
    <div class="d-flex">
        <a href="/dashboard/categories/create" class="me-4"><button class="btn btn-success rounded-5"><i class="bi bi-plus-circle"></i>
             Create Category
            </button></a>
            <form action="/dashboard/categories">
                <div class="search-input">
                    <input type="text" placeholder="Search Category.." name="search" class="w-100" value="{{ request('search') }}">
                    <button title="Cari" type="submit" ></button>
                </div>
            </form>
    </div>
</div>

@if($categories->count())
<div class="container-fluid content pb-5" id="content">
    @foreach ($categories as $category)
    <div class="card-list row justify-content-between mx-0">
        <div class="col-md-2">
            @if($category->image)
                <img src="{{ asset('storage/' . $category->image) }}" style="min-height: 95px;" alt="Photo Of {{ $category->name }}">
            @else
                <img src="https://picsum.photos/300/245" alt="Card image cap" style="min-height: 95px;">
            @endif
        </div>
        <div class="col-md-6">
            <h4>{{ $category->name }}</h4>
            <p> Slug: {{ $category->slug }}</p>
        </div>
        <div class="col-md-1">
            <button class="btn btn-warning btn-dropdown">⋮</button>
        </div>
        <div class="list-dropdown">
            <a href="/dashboard/categories/{{ $category->slug }}/edit"><button class="btn"><i class="bi bi-pencil-square"></i> Edit</button></a>
            <form action="/dashboard/categories/{{ $category->slug }}" method="POST" id="deleteForm">
                @csrf
                @method('delete')
                    <button class="btn" type="submit"><i class="bi bi-dash-circle"></i> Delete</button>
            </form>     
        </div>
    </div>
    @endforeach
</div>
@else
    <p class="text-center fs-4 mt-5">Category Not Found</p>
@endif

<script type="text/javascript">
    try {
        const btnDelete = document.querySelectorAll('#deleteForm');
        btnDelete.forEach((button, index) => {
            button.addEventListener('submit', function (e) {
                var form = this;
                e.preventDefault(); // <--- prevent form from submitting
                swal({
                    title: "Are you sure?",
                    text: "You will not be able to recover this category!",
                    icon: "warning",
                    buttons: [
                        'No, cancel it!',
                        'Yes, I am sure!'
                    ],
                    dangerMode: true,
                }).then(function (isConfirm) {
                    if (isConfirm) {
                        swal({
                            title: 'Success!',
                            text: 'Category are successfully deleted!',
                            icon: 'success'
                        }).then(function () {
                            form.submit();
                        });
                    } else {
                        swal("Cancelled", "Category is safe :)", "error");
                    }
                })
            });
        });
    } catch (error) {
        
    }
</script>
@endsection