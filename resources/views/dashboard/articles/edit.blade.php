@extends('dashboard.layout.main')

@section('container')
<link href="{{ asset('css/dashboard/artikel.css') }}" rel="stylesheet">

<div class="header">
    <div>
        <h2>Edit Artikel</h2>
    </div>
    <div class="d-flex">
        <button class="btn btn-secondary rounded-5 btn-batal">Batal</button>
    </div>
</div>
<div class="container-fluid content pb-5 mb-3" id="content">
    <form action="/dashboard/articles/{{ $article->slug }}" method="POST">
        @method('put')
        @csrf
        <div class="mb-4">
        <label for="Judul">Judul Artikel</label>
            <input type="text" placeholder="Judul" id="Judul" name="title" value="{{ $article->title}}">
            <label for="slug">Slug</label>
            <input type="text" id="slug" name="slug" value="{{ $article->slug}}">
            <label for="full-featured-non-premium">Isi Artikel</label>
            <textarea id="full-featured-non-premium" name="body">{{ $article->body }}</textarea>
        </div>
        <button class="btn btn-success rounded-5 float-end py-3 px-5" type="submit">
            Simpan
        </button>
    </form>
</div>

<script src="https://cdn.tiny.cloud/1/d3y4aorb7p5l7ms5vyx9ru8c8qwc9wlb1rij1j6a11vbzdhm/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: 'textarea#full-featured-non-premium',
        plugins: 'autolink table  wordcount',
        menubar: 'edit format table',
        toolbar: 'undo redo | bold italic underline strikethrough | fontfamily fontsize blocks | alignleft aligncenter alignright alignjustify | outdent indent | forecolor backcolor removeformat',
        height: 520,
    });
</script>
@endsection