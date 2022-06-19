@extends('dashboard.layout.main')

@section('container')
<link href="{{ asset('css/dashboard/list-item.css') }}" rel="stylesheet">

<div class="header">
    <div>
        <h2>Article List</h2>
    </div>
    <div class="d-flex">
        <a href="/dashboard/articles/create" class="me-4"><button class="btn btn-success rounded-5">
                <i class="bi bi-journal-plus"></i>
                Create New Article
            </button></a>
        @if(auth()->user()->is_admin)
        <form action="/dashboard/articles">
            <div class="search-input">
                <input type="text" placeholder="Search Article.." name="search" class="w-100" value="{{ request('search') }}">
                <button title="Cari" type="submit"></button>
            </div>
        </form>
        @endif
    </div>
</div>

@if($articles->count())
<div class="container-fluid content pb-5" id="content">
    @foreach($articles as $article)
    <div class="card-list row justify-content-between mx-0 p-3">

        <div class="col-sm-3">
            @if($article->image)
            <img src="{{ asset('storage/' . $article->image) }}" style="min-height: 95px;" alt="Photo Of {{ $article->title }}">
            @else
            <img src="https://picsum.photos/300/245" alt="Random Picsum Images" style="min-height: 95px;">
            @endif
        </div>
        <div class="col-sm-8">
            <a href="/article/{{ $article->slug }}" class="text-black text-decoration-none">
                <h4>{{ $article->title }}</h4>
            </a>
            <p>
                {{ $article ->excerpt }}
            </p>
            <span class="pe-3">Author: {{ $article->user->name }}</span>
            <span class="pe-3 text-primary">{{ substr($article->created_at,0,10) }}</span>
        </div>

        <div class="col-sm-1">
            <button class="btn btn-warning btn-dropdown">⋮</button>
        </div>
        <div class="list-dropdown">
            <a href="/dashboard/articles/{{ $article->slug }}/edit"><button class="btn"><i class="bi bi-pencil-square"></i> Edit</button></a>

            <form action="/dashboard/articles/{{ $article->slug }}" method="POST" id="deleteForm">
                @csrf
                @method('delete')
                <button class="btn" type="submit"><i class="bi bi-dash-circle"></i> Delete</button>
            </form>
        </div>
    </div>
    @endforeach

    <div class="d-flex justify-content-center mt-4">
        {{ $articles->links() }}
    </div>
</div>
@else
<p class="text-center fs-4 mt-5">Article Not Found</p>
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
                    text: "You will not be able to recover this article!",
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
                            text: 'Article are successfully deleted!',
                            icon: 'success'
                        }).then(function() {
                            form.submit();
                        });
                    } else {
                        swal("Cancelled", "Article is safe :)", "error");
                    }
                })
            });
        });
    } catch (error) {

    }
</script>
@endsection