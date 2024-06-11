@extends('admin.dashboard')
@section('title', 'contacts')

@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table">
                    <div class="card-body">
                        <div class="title-header option-title d-sm-flex d-block">
                            <h5>Contact List</h5>
                            
                        </div>
                        <div>
                            @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                            @if(Session::has('success'))
                            <div class="text-center mb-4">
                                <div class="alert alert-success">
                                    {{ Session::get('success') }}
                                </div>
                            </div>
                            @endif
                            @if(Session::has('error'))
                            <div class="text-center mb-4">
                                <div class="alert alert-danger">
                                    {{ Session::get('error') }}
                                </div>
                            </div>
                            @endif
                            <div class="table-responsive">
                                <table class="table all-package theme-table table-product" id="table_id">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Last Name</th>
                                            <th>Email</th>
                                            <th>Telephone</th>
                                            
                                            <th>Options</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($mails as $mail)
                                        <tr>
                                            <td>{{ $mail->nom }}</td>
                                            <td>{{ $mail->prenom }}</td>
                                            <td>{{ $mail->email }}</td>
                                            <td>{{ $mail->telephone }}</td>
                                            
                                            

                                            <td>
                                                <ul>
                                                    <li>
                                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#showModal{{ $mail->id }}">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                    </li>
                                                    
                                                    <li>
                                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $mail->id }}">
                                                            <i class="ri-delete-bin-line"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        
                                        <!-- End Edit Modal -->
                                        
                                        <!-- Delete Modal -->
                                        <div class="modal fade" id="deleteModal{{ $mail->id }}" aria-hidden="true" tabindex="-1">
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
                                                            <p>Delete Mail: <strong>{{ $mail->id }}</strong>?</p>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-animation btn-md fw-bold" data-bs-dismiss="modal">No</button>
                                                        <form id="formDeleteTag{{ $mail->id }}" action="{{ route('admin.mail.delete', $mail->id) }}" method="POST">
                                                            @csrf
                                                            @method('delete')
                                                            <button type="submit" class="btn btn-animation btn-md fw-bold" data-bs-dismiss="modal" id="confirmDeleteButton{{ $mail->id }}">Yes</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- End Delete Modal -->
                                        <!-- Show Modal -->
                                        <div class="modal fade" id="showModal{{ $mail->id }}" aria-hidden="true" tabindex="-1">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Details</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p><strong>Email:</strong> {{ $mail->email }}</p>
                                                        <p><strong>Message:</strong> {{ $mail->message }}</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Show Modal -->


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
</div>
@endsection
