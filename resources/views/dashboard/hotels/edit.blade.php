@extends('dashboard.layout.main')

@section('container')

<link href="{{ asset('css/dashboard/add-hotel.css') }}" rel="stylesheet">

<div class="header">
    <div>
        <h2>Edit Hotel</h2>
    </div>
    
    <a href="/dashboard/hotels" class="btn btn-danger rounded-5 justify-content-center">Batal</a>
</div>
<div class="container-fluid content pb-5" id="content">
    <div class="bg-white section-add-hotel">
        <form action="/dashboard/hotels/{{ $hotel->slug }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="mb-3">
                        <label for="title">Hotel Name</label><br />
                        <input type="text" class="form-control @error('title') is-invalid @enderror " id="title" name="title" value="{{ old('title', $hotel->title) }}" required autofocus/>
                        @error('title')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="slug">Slug</label><br />
                        <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug', $hotel->slug) }}" required/>
                        @error('slug')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="category"> Category</label><br />
                        <select class="form-select" name="category_id">
                            @foreach($categories as $category)
                                @if(old('category_id', $hotel->category_id) == $category->id)
                                    <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                @else
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="image">Hotel Picture</label>
                        @if($hotel->image)
                        <img src="{{ asset('storage/' . $hotel->image) }}" class="img-preview img-fluid my-3 col-sm-5 d-block">
                        @else
                        <img class="img-preview img-fluid my-3 col-sm-5">
                        @endif
                        
                        <input type="file" id="image" name="image" class="form-control @error('image') is-invalid @enderror" onchange="previewImage()"/>
                        @error('image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="body" class="mb-3">Body</label><br />
                        <input id="body" type="hidden" name="body" value="{{ old('body', $hotel->body) }}">
                        <trix-editor input="body"></trix-editor>
                        @error('body')
                            <p class="text-danger mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <label for="price">Price</label><br />
                    <div class="input-group mb-3">
                        <span class="input-group-text">Rp.</span>
                        <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" id="price" value="{{ old('price', $hotel->price) }}" required>
                        @error('price')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="location">Location</label><br />
                        <input type="text" class="form-control @error('location') is-invalid @enderror" id="location" name="location" value="{{ old('location', $hotel->location) }}" required/>
                        @error('location')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="facility">Facility</label><br />
                        <input type="text" class="form-control @error('facility') is-invalid @enderror" id="facility" name="facility" value="{{ old('facility', $hotel->facility) }}" required/>
                        @error('facility')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="rating">Rating</label><br />
                        <input type="text" id="rating" class="form-control @error('rating') is-invalid @enderror" name="rating" value="{{ old('rating', $hotel->rating) }}" required/>
                        @error('rating')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-5">
                        <label for="contact">Contact</label><br />
                        <input type="text" class="form-control @error('contact') is-invalid @enderror" id="contact" name="contact" value="{{ old('contact', $hotel->contact) }}" required/>
                        @error('contact')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                    <button class="btn btn-success rounded-5 float-end py-3 px-5" type="submit">
                        Update Hotel
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function(){
        fetch('/dashboard/hotels/checkSlug?title=' + title.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });

    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault();
    })

    function previewImage(){
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview')

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent){
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>
@endsection
