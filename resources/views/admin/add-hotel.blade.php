@extends('admin.main')

@section('content')

<link href="{{ asset('css/admin/add-hotel.css') }}" rel="stylesheet">

<div class="header">
    <div>
        <h2>Tambah Hotel Baru</h2>
    </div>
    <div class="d-flex">
        <button class="btn btn-secondary rounded-5 btn-batal">Batal</button>
    </div>
</div>
<div class="container-fluid content pb-5" id="content">
    <div class="bg-white section-add-hotel">
        <form action="">
            <div class="row">
                <div class="col-sm-8">
                    <div>
                        <label for="namaHotel">Nama Hotel</label><br />
                        <input type="text" id="namaHotel" required />
                    </div>
                    <div>
                        <label for="alamat">Alamat</label><br />
                        <input type="text" id="alamat" required />
                    </div>
                    <div>
                        <label for="contact">Contact</label><br />
                        <input type="text" id="contact" required />
                    </div>
                    <div>
                        <label for="harga">Harga</label><br />
                        <div class="harga">
                            <div>Rp.</div>
                            <input type="text" id="harga" required />
                        </div>
                    </div>
                    <div>
                        <label for="wisata">Wisata Terdekat</label><br />
                        <input type="text" id="wisata" />
                    </div>
                </div>
                <div class="col-side col-sm-4">
                    <div class="float-end">
                        <div>
                            <label for="fotoHotel">Foto Hotel</label><br />
                            <input type="file" id="fotoHotel" class="w-100 border-0" />
                        </div>
                        <div>
                            <label for="wisata">Rating</label><br />
                            <input type="number" id="wisata" class="w-100" />
                        </div>
                    </div>
                    <button class="btn btn-success rounded-5 float-end py-3 px-5" type="submit">
                        Tambahkan
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection