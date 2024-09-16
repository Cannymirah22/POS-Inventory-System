@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <body style="background-color:rgb(201, 207, 213)">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header">
                            <h4 style="float: left">Add User</h4>
                            <a href="#" style="float: right" class="btn btn-dark" data-toggle="modal"
                                data-target="#addUser">
                                <i class="fa fa-plus-circle"></i> Add New User</a>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-left">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        {{-- <th>Phone</th> --}}
                                        <th>Role</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $key => $user)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>
                                                @if ($user->is_admin == 1)
                                                    Admin
                                                @else
                                                    Cashier
                                                @endif
                                            </td>
                                            <td>
                                                {{-- modal edit user --}}
                                                <!-- Modal -->
                                                <div class="btn-group">
                                                    <a href="#" class="btn btn-sm btn-primary" data-toggle="modal"
                                                        data-target="#editUser{{ $user->id }}"><i
                                                            class="fa fa-edit"></i> Edit</a>
                                                    <a href="#" class="btn btn-sm btn-danger" data-toggle="modal"
                                                        data-target="#deleteUser{{ $user->id }}"><i
                                                            class="fa fa-trash"></i> Remove</a>
                                            </td>
                                        </tr>
                                        <div class="modal right fade" id="editUser{{ $user->id }}"
                                            data-backdrop="static" data-keyboard="false" tabindex="-1"
                                            aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="staticBackdropLabel">Edit User</h4>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>

                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('users.update', $user->id) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('put')
                                                            <div class="form-group">
                                                                <label for="">Name</label>
                                                                <input type="text" name="name" id=""
                                                                    value="{{ $user->name }}" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">Email</label>
                                                                <input type="email" name="email" id=""
                                                                    value="{{ $user->email }}" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">Phone</label>
                                                                <input type="text" name="phone" id=""
                                                                    value="{{ $user->phone }}" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">Password</label>
                                                                <input type="password" name="password" id=""
                                                                    readonly value="{{ $user->password }}"
                                                                    class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">Role</label>
                                                                <select name="is_admin" id="" class="form-control">
                                                                    <option value="1"
                                                                        @if ($user->is_admin == 1) selected @endif>
                                                                        Admin</option>
                                                                    <option value="2"
                                                                        @if ($user->is_admin == 2) selected @endif>
                                                                        Cashier</option>
                                                                </select>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button class="btn btn-success btn-block">Update
                                                                    User</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- modal delete user --}}
                                        <!-- Modal -->
                                        <div class="modal right fade" id="deleteUser{{ $user->id }}"
                                            data-backdrop="static" data-keyboard="false" tabindex="-1"
                                            aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="staticBackdropLabel">Delete User
                                                        </h4>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>

                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('users.destroy', $user->id) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('delete')
                                                            <p> Are you sure you want to delete
                                                                <strong>{{ $user->name }} ?</strong>
                                                            </p>
                                                            <div class="modal-footer">
                                                                <button class="btn btn-secondary" class="close"
                                                                    data-dismiss="modal"
                                                                    aria-label="Close">Cancel</button>
                                                                <button type="submit"
                                                                    class="btn btn-danger">Delete</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    {{ $users->links() }}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">
                            <h4>User Details</h4>
                        </div>
                        <div class="card-body">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- modal add user --}}
    <!-- Modal -->
    <div class="modal right fade" id="addUser" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="staticBackdropLabel">Add User</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="close">
                        <span aria-hidden="true">&times; </span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('users.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name="name" id="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" name="email" id="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Phone</label>
                            <input type="text" name="phone" id="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="password" id="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Confirm Password</label>
                            <input type="password" name="confirm_password" id="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Role</label>
                            <select name="is_admin" id="" class="form-control">
                                <option value="1">Admin</option>
                                <option value="2">Cashier</option>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary btn-block">Save User</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- Edit user --}}

    <style>
        .modal.right .modal-dialog {
            top: 0;
            right: 0;
            margin-right: 20vh;
        }

        .modal.fade:not(.in).right .modal-dialog {
            -webkit-transform: translate3d(25%, 0, 0);
            transform: translate3d(25%, 0, 0);
        }

        .card-header {
            background-color: rgb(52, 73, 94);
            color: #fff;
        }
    </style>
@endsection
