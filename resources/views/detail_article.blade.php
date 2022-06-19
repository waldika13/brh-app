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
                <h1 class="display-5 fw-bold lh-1">{{$article->title}}</h1>
                <div class="img-fluid my-5" style="">
                    @if($article->image)
                        <div style="max-height: 700px; overflow:hidden;">
                            <img src="{{ asset('storage/'. $article->image) }}" class="card-img-top img-fluid rounded-3" alt="Photo of {{ $article->title }}">
                        </div>
                    @else
                        <img src="https://picsum.photos/1200/400" class="card-img-top img-fluid rounded-3" alt="Random Picsum Images">
                    @endif
                    
                </div>
                
                <div class="mb-3 px-3">
                    {!! $article->body !!}
                </div>

            </div>
        </div>
    </div>
</div>

@endsection