@extends('dashboard.layout.main')

@section('container')

<link href="{{ asset('css/dashboard/add-hotel.css') }}" rel="stylesheet">

<div class="header">
    <div>
        <h2>Add New Category</h2>
    </div>
    
    <a href="/dashboard/hotels" class="btn btn-danger rounded-5">Batal</a>
</div>
<div class="container-fluid content pb-5" id="content">
    <div class="bg-white section-add-hotel">
        <form action="/dashboard/categories" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="mb-3">
                        <label for="name">Category Name</label><br />
                        <input type="text" class="input-type form-control @error('name') is-invalid @enderror " id="name" name="name" value="{{ old('name') }}" required autofocus/>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="slug">Slug</label><br />
                        <input type="text" class="input-type form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug') }}" required/>
                        @error('slug')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="image">Category Picture</label>
                        <img class="img-preview img-fluid my-3 col-sm-5">
                        <input type="file" id="image" name="image" class="form-control @error('image') is-invalid @enderror" onchange="previewImage()"/>
                        @error('image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
            
                    <button class="btn btn-success rounded-5 py-2 px-3 w-40 mt-3" type="submit">
                        Add New Category
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    const name = document.querySelector('#name');
    const slug = document.querySelector('#slug');

    name.addEventListener('change', function(){
        fetch('/dashboard/categories/checkSlug?name=' + name.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });

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