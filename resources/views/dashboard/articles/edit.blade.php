@extends('dashboard.layout.main')

@section('container')
<link href="{{ asset('css/dashboard/edit.css') }}" rel="stylesheet">

<div class="header">
    <div>
        <h2>Edit Article</h2>
    </div>
    <div class="d-flex">
        <button class="btn btn-danger rounded-5 btn-batal">Cancel</button>
    </div>
</div>
<div class="container-fluid content pb-5 mb-3" id="content">
    <div class="bg-white section-add">
        <form action="/dashboard/articles/{{ $article->slug }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="mb-3">
                        <div class="mb-3">
                            <label for="title">Article Title</label>
                            <input type="text" class="input-type form-control @error('title') is-invalid @enderror " id="title" name="title" value="{{ $article->title}}" required autofocus>
                            @error('title')
                            <p class="text-danger mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="slug">Slug</label>
                            <input type="text" class="input-type form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug', $article->slug) }}" required>
                            @error('slug')
                            <p class="text-danger mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="image">Article Image</label>
                            <br>
                            @if($article->image)
                                <img class="img-preview img-fluid my-3 col-sm-5 d-block" src="{{asset('storage/'. $article->image)}}" alt="Photo of {{ $article->title }}">
                            @else
                                <img class="img-preview img-fluid col-sm-5">
                            @endif
                            <input type="file" id="image" name="image" class="form-control @error('image') is-invalid @enderror" style="font-weight: normal;" onchange="previewImage()" />
                            @error('image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                            <div class="mt-1">
                                <small class="text-muted">Minimum dimensions is 1200x400 & Max 1 Mb</small>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="body" class="mb-3">Hotel Body</label><br />
                            <input id="body" type="hidden" name="body" value="{{ old('body', $article->body) }}" class="input-type">
                            <trix-editor input="body"></trix-editor>
                            <small class="text-muted mt-2">Body must be at least 100 characters</small>
                            @error('body')
                            <p class="text-danger mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div>
                    <button class="btn btn-success rounded-5 float-end py-3 px-5" type="submit">
                        Update Article
                    </button>
                </div>
            </div>

        </form>
    </div>
</div>

<script src="https://cdn.tiny.cloud/1/d3y4aorb7p5l7ms5vyx9ru8c8qwc9wlb1rij1j6a11vbzdhm/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    try {
        tinymce.init({
            selector: 'textarea#full-featured-non-premium',
            plugins: 'autolink table  wordcount',
            menubar: 'file edit view insert format tools table help',
            toolbar: 'undo redo | bold italic underline strikethrough | fontfamily fontsize blocks | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
            height: 520,
        });
    } catch (error) {

    }

    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function() {
        fetch('/dashboard/articles/checkSlug?title=' + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    });


    function previewImage() {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview')

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>
@endsection