<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BRH | {{ $title }}</title>

    <link href="{{ asset('css/admin/main.css') }}" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
</head>

<body class="container-fluid bg-light">
    <div class="row">
        <!-- Left -->
        <div class="col-lg-3 px-4 col-left">
            <div class="app-bar">
                <h4>BRH</h4>
                <button class="btn-show-bar">☰</button>
            </div>
            <div class="side-bar">
                <div>
                    <h3 class="text-center">BRH</h3>
                    <div class="list">
                        <a href="/admin" class="{{ ($title === 'Admin - Dashboard') ? 'active' : '' }}">Dashborad</a>
                        <a href="/admin/hotel" class="{{ ($title === 'Admin - Hotel') ? 'active' : '' }}">Hotel</a>
                        <a href="/admin/artikel" class="{{ ($title === 'Admin - Artikel') ? 'active' : '' }}">Artikel</a>
                    </div>
                </div>
                <div class="profile">
                    <div>
                        <img src="{{ asset('img/icons/profile-icon.png')}}" alt="" />
                    </div>
                    <a href="">
                        <p class="p-3 m-0">Logout</p>
                    </a>
                    <a href="">
                        <button>
                            <b>Admin</b>
                            <span>:</span>
                        </button>
                    </a>
                   
                </div>
                <button class="btn btn-danger btn-close-bar">x</button>
            </div>
        </div>
        <!-- Right -->
        <main class="col-lg-8">
            @yield('content')
        </main>
    </div>
    <script src="{{ asset('js/admin/main.js') }}"></script>
</body>

</html>