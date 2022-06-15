@extends('layout.main')

@section('container')
<div class="mt-5">
    <div class="container col-xxl-8 py-4">
        <div class="d-flex justify-content-between">
            <p>Penulis : {{ $article->user->name }}</p>
            <p>{{ substr($article->created_at,0,10) }}</p>
        </div>
        <div class="row justify-content-center g-5">
            <div class="col-lg-12">
                <h1 class="display-5 fw-bold lh-1 ">{{$article->title}}</h1>
                <div class="img-fluid my-3 mb-5" style="max-height: 400px; overflow:hidden;">
                    <img src="{{ asset('storage/'. $article->image) }}">
                </div>
                
                <div class="mb-3">
                    {!! $article->body !!}
                </div>

            </div>
        </div>
    </div>
</div>

@endsection