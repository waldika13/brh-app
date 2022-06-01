@extends('admin.main')

@section('content')
<link href="{{ asset('css/admin/add-hotel.css') }}" rel="stylesheet">
<link href="{{ asset('css/admin/edit-hotel.css') }}" rel="stylesheet">


<div class="header">
    <div>
        <h2>Edit Hotel</h2>
    </div>
    <div class="d-flex">
        <button class="btn btn-secondary rounded-5 btn-batal">Batal</button>
    </div>
</div>
<div class="container-fluid content pb-5" id="content">
    <div class="bg-white section-add-hotel">
        <form action="">
            <div class="row">
                <div class="col-side col-sm-5">
                    <div>
                        <div>
                            <label for="fotoHotel">Foto Hotel</label><br />
                            <input type="file" id="fotoHotel" class="w-100 border-0" />
                        </div>
                        <div>
                            <label for="wisata">Review</label><br />
                            <div class="list-review">
                                <div class="card-review">
                                    <p class="review-name">Jhon Doe</p>
                                    <p>Bagus Hotelnya</p>
                                    <button class="btn btn-danger btn-delete">x</button>
                                </div>
                                <div class="card-review">
                                    <p class="review-name">Jhon Doe</p>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing
                                        elit. Nisi, soluta.
                                    </p>
                                    <button class="btn btn-danger btn-delete">x</button>
                                </div>
                                <div class="card-review">
                                    <p class="review-name">Jhon Doe</p>
                                    <p>Bagus Hotelnya</p>
                                    <button class="btn btn-danger btn-delete">x</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-7">
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
                        <label for="wisata">Rating</label><br />
                        <input type="number" id="wisata" />
                    </div>
                    <div>
                        <label for="wisata">Wisata Terdekat</label><br />
                        <input type="text" id="wisata" />
                        <div class="list-wisata row">
                            <div class="item-wisata">
                                <span>Pantai Kuta</span><button class="btn btn-danger btn-delete">x</button>
                            </div>
                            <div class="item-wisata">
                                <span>Pantai Kuta Bali</span><button class="btn btn-danger btn-delete">x</button>
                            </div>
                            <div class="item-wisata">
                                <span>Pantai</span><button class="btn btn-danger btn-delete">x</button>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-success rounded-5 py-3 px-5" type="submit">
                        Simpan
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection