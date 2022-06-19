@extends('dashboard.layout.main')

@section('container')
<link href="{{ asset('css/dashboard/list-item.css') }}" rel="stylesheet">

<div class="header">
    <div>
        <h2>Admin & User List</h2>
    </div>
    <div class="d-flex">
        <a href="/dashboard/adminRegister/create" class="me-4"><button class="btn btn-success rounded-5"><i class="bi bi-person-plus"></i>
             Create New Admin
            </button></a>
    </div>
</div>

    @if(session()->has('success'))
        <div class="alert alert-success col-md-6 text-center" role="alert">
            <i class="bi bi-check-square"></i> {{ session('success') }}
        </div>
    @endif
    
<div class="card text-center mb-5" style="border-color: #f0be40">
    <div class="card-header" style="border-color: #f0be40">
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
                <div class="container-fluid content pb-2" id="content">
                    @foreach($admins as $admin)
                        <div class="card-list row justify-content-between mx-0 p-3">
                            <div class="col-sm-11">
                                <p>
                                    {{ $admin->name }}
                                </p>
                                <span class="pe-3">{{ $admin->email }}</span>
                                <span class="pe-3">{{ substr($admin->created_at,0,10) }}</span>
                            </div>
                            <div class="col-sm-1">
                                <button class="btn btn-warning btn-dropdown">⋮</button>
                            </div>
                            <div class="list-dropdown">
                                @if(auth()->user()->username == $admin->username)
                                    <a href="/dashboard/adminRegister/{{ $admin->name }}/edit"><button class="btn"><i class="bi bi-pencil-square"></i> Edit</button></a>
                                @endif
                                @if($admin->id != 1)
                                    <form action="/dashboard/adminRegister/{{ $admin->id }}" method="POST" id="deleteFormAdmin">
                                        @csrf
                                        @method('delete')
                                            <button class="btn" type="submit"><i class="bi bi-dash-circle"></i> Delete</button>
                                    </form> 
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane fade" id="user">
            <div class="card-body bg-light">
                <div class="container-fluid content pb-2" id="content">
                    @foreach($users as $user)
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
                                @if(auth()->user()->username == $user->username)
                                    <a href="/dashboard/adminRegister/{{ $user->name }}/edit"><button class="btn"><i class="bi bi-pencil-square"></i> Edit</button></a>
                                @endif
                                <form action="/dashboard/adminRegister/{{ $user->id }}" method="POST" id="deleteFormUser">
                                    @csrf
                                    @method('delete')
                                        <button class="btn" type="submit"><i class="bi bi-dash-circle"></i> Delete</button>
                                </form>  
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
  </div>

<script type="text/javascript">
    try {
        const btnDelete = document.querySelectorAll('#deleteFormAdmin');
        btnDelete.forEach((button, index) => {
            button.addEventListener('submit', function (e) {
                var form = this;
                e.preventDefault(); // <--- prevent form from submitting
                swal({
                    title: "Are you sure?",
                    text: "You will not be able to recover this admin!",
                    icon: "warning",
                    buttons: [
                        'No, cancel it!',
                        'Yes, I am sure!'
                    ],
                    dangerMode: true,
                }).then(function (isConfirm) {
                    if (isConfirm) {
                        swal({
                            title: 'Success!',
                            text: 'Admin are successfully deleted!',
                            icon: 'success'
                        }).then(function () {
                            form.submit();
                        });
                    } else {
                        swal("Cancelled", "Admin is safe :)", "error");
                    }
                })
            });
        });
    } catch (error) {
        
    }
    
    try {
        const btnDelete = document.querySelectorAll('#deleteFormUser');
        btnDelete.forEach((button, index) => {
            button.addEventListener('submit', function (e) {
                var form = this;
                e.preventDefault(); // <--- prevent form from submitting
                swal({
                    title: "Are you sure?",
                    text: "You will not be able to recover this user!",
                    icon: "warning",
                    buttons: [
                        'No, cancel it!',
                        'Yes, I am sure!'
                    ],
                    dangerMode: true,
                }).then(function (isConfirm) {
                    if (isConfirm) {
                        swal({
                            title: 'Success!',
                            text: 'User are successfully deleted!',
                            icon: 'success'
                        }).then(function () {
                            form.submit();
                        });
                    } else {
                        swal("Cancelled", "User is safe :)", "error");
                    }
                })
            });
        });
    } catch (error) {
        
    }
</script>
@endsection