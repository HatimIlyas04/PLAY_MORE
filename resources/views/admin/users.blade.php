@extends('admin.dashboard')
@section('title', 'Users')

@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table">
                    <div class="card-body">
                        <div class="title-header option-title d-sm-flex d-block">
                            <h5>Users List</h5>
                            
                        </div>
                        @if (Session::has('success'))
                            <div class="text-center mb-4">
                                <div class="alert alert-success">
                                    {{ Session::get('success') }}
                                </div>
                            </div>
                        @endif
                        <div class="table-responsive">
                            <table class="table all-package theme-table table-product" id="table_id">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Email</th>
                                        <th>Username</th>
                                        <th>Name</th>
                                        <th>Gender</th>
                                        <th>Phone</th>
                                      
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>
                                                @if ($user->image_utilisateur)
                                                    <img src="{{ asset('storage/' .$user->image_utilisateur) }}" class="img-fluid" alt="User Image">
                                                @else
                                                    No Image
                                                @endif
                                            </td>
                                            <td>{{ $user->email }}</td>
                                            <td>
                                                <a href="{{ route('userOrder', $user) }}">{{ $user->identifiant_utilisateur }}</a>
                                            </td>
                                            <td>{{ $user->nom_utilisateur }} {{ $user->prenom_utilisateur }}</td>
                                            <td>{{ $user->sexe_utilisateur }}</td>
                                            <td>{{ $user->telephone_utilisateur }}</td>
                                            
                                            
                                            <td>
                                                <ul>
                                                    <li>
                                                        <a href="{{ route('admin.user.edit', $user->id) }}">
                                                            <i class="ri-pencil-line"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModalToggle{{ $user->id }}">
                                                            <i class="ri-delete-bin-line"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <!-- Modal for user deletion -->
                                        <div class="modal fade theme-modal remove-coupon" id="exampleModalToggle{{ $user->id }}" aria-hidden="true" tabindex="-1">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header d-block text-center">
                                                        <h5 class="modal-title w-100" id="exampleModalLabel22">Are You Sure?</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                            <i class="fas fa-times"></i>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="remove-box">
                                                            <p>Delete user: <strong>{{ $user->identifiant_utilisateur }}</strong>?</p>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-animation btn-md fw-bold" data-bs-dismiss="modal">No</button>
                                                        <form id="formDeleteUser{{ $user->id }}" action="{{ route('admin.user.delete', $user) }}" method="POST">
                                                            @csrf
                                                            @method('delete')
                                                            <button type="submit" class="btn btn-animation btn-md fw-bold" data-bs-dismiss="modal" id="confirmDeleteButton{{ $user->id }}">Yes</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Modal for user deletion -->
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
