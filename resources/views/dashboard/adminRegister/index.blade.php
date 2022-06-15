@extends('dashboard.layout.main')

@section('container')
<link href="{{ asset('css/dashboard/list-item.css') }}" rel="stylesheet">

<div class="header">
    <div>
        <h2>List Admin</h2>
    </div>
    <div class="d-flex">
        <a href="/dashboard/adminRegister/create" class="me-4"><button class="btn btn-success rounded-5">
                + Registrasi Admin Baru
            </button></a>
    </div>
</div>

<div class="card text-center" style="border-color: #f0be40">
    <div class="card-header">
      <ul class="nav nav-tabs card-header-tabs">
        <li class="nav-item">
          <a class="nav-link active" role="tab" data-bs-toggle="tab" href="#admin">Admin</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" role="tab" data-bs-toggle="tab" href="#user">User</a>
        </li>
      </ul>
    </div>
    <div class="tab-content mb-1">
        <div role="tabpanel" class="tab-pane active" id="admin">
            <div class="card-body bg-light">
                @if(session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
                @endif
                <div class="container-fluid content pb-3" id="content">
                    @foreach($users as $user)
                        @if($user->is_admin == 1)
                            <div class="card-list row justify-content-between mx-0 p-3">
                                <div class="col-sm-11">
                                    <p>
                                        {{ $user ->name }}
                                    </p>
                                    <span class="pe-3">{{ $user->email }}</span>
                                    <span class="pe-3">{{ substr($user->created_at,0,10) }}</span>
                                </div>
                                <div class="col-sm-1">
                                    <button class="btn btn-warning btn-dropdown">⋮</button>
                                </div>
                                <div class="list-dropdown">
                                    @if(auth()->user()->name == $user->name)
                                        <a href="/dashboard/adminRegister/{{ $user->name }}/edit"><button class="btn">Edit</button></a>
                                    @endif
                                    <form action="/dashboard/adminRegister/{{ $user->id }}" method="POST">
                                        @method('delete')
                                        @csrf
                                            <button class="btn" onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                    <input type="hidden">
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane fade" id="user">
            <div class="card-body bg-light">
                @if(session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
                @endif
                <div class="container-fluid content pb-3" id="content">
                    @foreach($users as $user)
                        @if($user->is_admin == 0)
                            <div class="card-list row justify-content-between mx-0 p-3">
                                <div class="col-sm-11">
                                    <p>
                                        {{ $user ->name }}
                                    </p>
                                    <span class="pe-3">{{ $user->email }}</span>
                                    <span class="pe-3">{{ substr($user->created_at,0,10) }}</span>
                                </div>
                                <div class="col-sm-1">
                                    <button class="btn btn-warning btn-dropdown">⋮</button>
                                </div>
                                <div class="list-dropdown">
                                    @if(auth()->user()->name == $user->name)
                                        <a href="/dashboard/adminRegister/{{ $user->name }}/edit"><button class="btn">Edit</button></a>
                                    @endif
                                    <form action="/dashboard/adminRegister/{{ $user->id }}" method="POST">
                                        @method('delete')
                                        @csrf
                                            <button class="btn" onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
  </div>

@endsection