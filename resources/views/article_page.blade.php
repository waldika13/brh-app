@extends('layout.main')

@section('container')

<div class="text-center">
    <img src="https://picsum.photos/1200/400" class="img-fluid my-3">
</div>
<div class="container col-xxl-8 py-4">

    <div class="row justify-content-center g-5">
        <div class="col-lg-12">
            <h1 class="display-5 fw-bold lh-1 mb-3">Berbagi kisah mu kepada orang lain yuk!</h1>
            <p class="lead text-justify">
                Ceritakan pengalamanmu tentang Bali agar orang lain dapat mengetahui lebih tentang Bali
                Quickly design and customize responsive mobile-first sites with
                Bootstrap, the
                world's most popular front-end open source toolkit, featuring Sass variables and mixins,
                responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
            <a class="d-grid gap-2 d-md-flex justify-content-md-start text-decoration-none" href="/dashboard/articles/create">
                <button type="button" class="btn btn-warning btn-lg px-4 me-md-2" data-toggle="modal" data-target="#articleModal">Create Post</button>
            </a>
            <!-- <div class="modal fade" id="articleModal" tabindex="-1" role="dialog" aria-labelledby="articleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="articleModalLabel">Create Post</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Name:</label>
                                    <input type="text" class="form-control" id="recipient-name">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Title:</label>
                                    <input type="text" class="form-control" id="recipient-name">
                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Description:</label>
                                    <textarea class="form-control" id="message-text"></textarea>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Send message</button>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</div>
<div class="container mt-5">
    <h2 class="mb-3 mt-3 fw-bolder">Article</h2>
    <!-- <p class="border-bottom border-dark"></p> -->
    <div class="row my-5">
        @if($articles->count())
        @foreach($articles as $article)
        <div class="col-md-6 px-4">
            <a class="row p-2 border rounded-3 overflow-hidden mb-4 shadow-sm h-md-250 position-relative text-decoration-none text-black" href="/article/{{ $article->slug }}" style="">
                <div class="col-lg-4 overflow-hidden d-flex align-items-center justify-content-center">
                    <img src="{{asset('storage/'. $article->image)}}" alt="" style="width: 100%; max-height: 150px;">
                </div>
                <div class="col-lg-8 p-4 d-flex flex-column position-static">
                    <h3 class="mb-2">{{ $article->title }}</h3>
                    <p class="card-text mb-auto text-justify">
                        {{ $article->excerpt }}
                    </p>
                    <div class="mt-2 text-muted text-right font-italic">
                        <span class="me-3">By: {{ $article->user->name }}</span>
                        <span class="d-inline-block mb-2 text-primary">{{ substr($article->created_at,0,10) }}</span>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
        @else
        <p class="text-center fs-4 mt-5">No Articles Found</p>
        @endif
    </div>

</div>

@endsection