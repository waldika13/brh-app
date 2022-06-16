<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link href="{{ asset('css/dashboard/main.css') }}" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="/css/trix.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="/js/trix.js"></script>

    <style>
        trix-toolbar [data-trix-button-group="file-tools"] {
            display: none;
        }
    </style>
</head>

<body class="container-fluid bg-light">
    @include('sweetalert::alert')
    <div class="row">
        <!-- Left -->
        <div class="col-lg-3 px-4 col-left">
            <div class="app-bar">
                <h4>BRH</h4>
                <button class="btn-show-bar">☰</button>
            </div>
            <div class="side-bar">
                <div>
                    <div class="mb-4">
                        <h3 class="text-center">
                            <a href="/" class="fw-bold fs-2 text-dark text-decoration-none">BRH</a>
                        </h3>
                    </div>
                    <div class="list">
                        <a href="/dashboard" class="{{ Request::is('dashboard') ? 'active' : '' }} "><i class="bi bi-house-door"></i> Dashboard</a>
                        <a href="/dashboard/articles" class="{{ Request::is('dashboard/articles*') ? 'active' : '' }}"><i class="bi bi-journal-text"></i> Article</a>
                        <a href="/dashboard/reviews" class="{{ Request::is('dashboard/reviews*') ? 'active' : '' }}"><i class="bi bi-chat-left-text"></i> Review</a>
                    </div>
                </div>
                <div class="list">
                    @can('admin')

                    <div class="my-5">
                        <h6 class="text-center text-muted "><i class="bi bi-person-circle"></i> Administrator</h6>
                    </div>
                    <a href="/dashboard/hotels" class="{{ Request::is('dashboard/hotels*') ? 'active' : '' }}"><i class="bi bi-building"></i> Hotel</a>
                    <a href="/dashboard/categories" class="{{ Request::is('dashboard/categories*') ? 'active' : '' }}"><i class="bi bi-list-ul"></i> Category</a>
                    <a href="/dashboard/adminRegister" class="{{ Request::is('dashboard/adminRegister*') ? 'active' : '' }}"><i class="bi bi-people"></i> View User</a>
                    @endcan
                    <a class="btn btn-outline-warning text-dark mt-4">
                        <form action="/signout" method="POST">
                            @csrf
                            <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Log Out</button>
                        </form>
                    </a>
                </div>
                <button class="btn btn-danger btn-close-bar">x</button>
            </div>
        </div>
        <!-- Right -->
        <main class="col-lg-8">
            @yield('container')
        </main>
    </div>
    <script src="{{ asset('js/dashboard/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

</html>