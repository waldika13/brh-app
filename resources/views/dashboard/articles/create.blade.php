@extends('dashboard.layout.main')


@section('container')
<link href="{{ asset('css/dashboard/artikel.css') }}" rel="stylesheet">

<div class="header">
    <div>
        <h2>Buat Artikel Baru</h2>
    </div>
    <div class="d-flex">
        <button class="btn btn-secondary rounded-5 btn-batal">Batal</button>
    </div>
</div>
<div class="container-fluid content pb-5 mb-5" id="content">
    <form action="/dashboard/articles" method="POST">
        @csrf
        <div class="mb-4">
            <label for="Judul">Judul Artikel</label>
            <input type="text" placeholder="Judul" id="Judul" name="title">
            <label for="slug">Slug</label>
            <input type="text" id="slug" name="slug">
            <label for="full-featured-non-premium">Isi Artikel</label>
            <textarea id="full-featured-non-premium" name="body"></textarea>
        </div>
        <button class="btn btn-success rounded-5 float-end py-3 px-5" type="submit">
            Tambahkan
        </button>
    </form>
</div>

<script src="https://cdn.tiny.cloud/1/d3y4aorb7p5l7ms5vyx9ru8c8qwc9wlb1rij1j6a11vbzdhm/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: 'textarea#full-featured-non-premium',
        plugins: 'autolink table  wordcount',
        menubar: 'file edit view insert format tools table help',
        toolbar: 'undo redo | bold italic underline strikethrough | fontfamily fontsize blocks | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
        height: 520,
        image_caption: true,
        quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
        toolbar_mode: 'sliding',
        contextmenu: "link table",
    });

</script>
@endsection