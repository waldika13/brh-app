@extends('admin.main')


@section('content')
<link href="{{ asset('css/admin/profile.css') }}" rel="stylesheet">

<div class="header">
    <div>
        <h2>Profile</h2>
    </div>
</div>
<div class="container-fluid content pb-5" id="content">
    <div class="row">
        <div class="col-sm-5 me-sm-5">
            <div class="profile-box">
                <form action="">
                    <div class="text-center">
                        <img src="{{ asset('img/icons/profile-icon.png')}}" alt="">
                        <input type="file" id="changeImage">
                    </div>
                    <div>
                        <label for="nama">Nama</label><br />
                        <input type="text" id="nama" required />
                    </div>
                    <div>
                        <label for="email">Email</label><br />
                        <input type="email" id="email" required />
                    </div>
                    <div>
                        <label for="password">Password</label><br />
                        <input type="password" id="password" required />
                    </div>
                    <button class="btn btn-success rounded-5 py-3 px-5" type="submit">
                        Perbarui
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection