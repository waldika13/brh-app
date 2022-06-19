@extends('layout.main')

@section('container')

<div class="text-center">
    <img src="images/article-photo.jpg" class="img-fluid my-3" style="width:1200px; height:500px;" alt="Image Hero Article">
</div>
<div class="container col-xxl-8 py-4">

    <div class="row justify-content-center g-5">
        <div class="col-lg-12">
            <h1 class="display-5 fw-bold lh-1 mb-3">Share your story with others!</h1>
            <p class="lead text-justify">
                Tell your experience about Bali, its beaches, places, people, culinary, culture, and more everything in Bali.
                Share to the world how the Bali is it, so all people can know more about Bali Island. Click the button below to start creating !</p>
            <a class="d-grid gap-2 d-md-flex justify-content-md-start text-decoration-none" href="/dashboard/articles/create">
                <button type="button" class="btn btn-warning btn-lg px-4 me-md-2" data-toggle="modal" data-target="#articleModal">Create Post</button>
            </a>
        </div>
    </div>
</div>
<div class="container mt-5">
    <h2 class="mb-3 mt-3 fw-bolder text-center">Article</h2>
    <p class="border-bottom border-dark"></p>
    <div class="row my-5">
        @if($articles->count())
        @foreach($articles as $article)
        <div class="col-md-6 px-4">
            <a class="row p-0 border border-2 rounded-3 overflow-hidden mb-4 shadow-sm text-decoration-none text-black" href="/article/{{ $article->slug }}">
                <div class="col-lg-4 overflow-hidden d-flex align-items-center">
                    <div class="rounded" style="max-height: 220px; overflow:hidden;">
                        @if($article->image)
                        <img src="{{ asset('storage/' . $article->image) }}" class="card-img-top" alt="Photo of {{ $article->title }}">
                        @else
                        <img class="card-img-top" src="https://picsum.photos/400/400" alt="Random Picsum Image">
                        @endif
                    </div>

                </div>
                <div class="col-lg-8 p-4 d-flex flex-column position-static">
                    <h3 class="mb-2">{{ $article->title }}</h3>
                    <p class="card-text mb-auto text-justify">
                        {{ $article->excerpt }}
                    </p>
                    <div class="mt-2 text-muted text-right font-italic">
                        <span class="me-3">By: {{ $article->user->name }}</span>
                        <span class="d-inline-block mb-2">{{ date_format(date_create(substr($article->created_at,0,10)),"F d,Y"); }}</span>
                    </div>
                </div>
            </a>
        </div>
        @endforeach

        <div class="d-flex justify-content-center mt-4">
            {{ $articles->links() }}
        </div>

        @else
        <p class="text-center fs-4 mt-5">Articles Not Found</p>
        @endif
    </div>

</div>

@endsection