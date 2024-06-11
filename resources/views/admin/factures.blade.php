@extends('admin.dashboard')
@section('title', 'Factures')

@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table">
                    <div class="card-body">
                        <div class="title-header option-title d-sm-flex d-block">
                            <h5>Order List</h5>
                            
                            
                        </div>
                        <div>
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
                                            <th>User </th>
                                            <th>Facture Description </th>
                                            <th>Facture Date</th>
                                            <th>Order Name </th>
                                            <th>price</th>

                                            <th>Status</th>

                                            <th>Options</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach($factures as $fac)
                                        <tr>
                                            
                                            <td>
                                               <a href="{{route('admin.user.edit' , $fac->commande->user->id)}}" target="_blank" rel="noopener noreferrer"> @if ($fac->commande->user->image_utilisateur)
                                                   <img src="{{ asset('storage/' .$fac->commande->user->image_utilisateur) }}" class="img-fluid" alt="User Image">
                                                @else
                                                    No Image
                                                @endif</a>
                                            </td> 

                                            <td>{{$fac->description_facture	}}</td>

                                            <td>{{$fac->date_facture}}</td>
                                            

                                            <td class="">
                                                {{$fac->commande->description_commande}} </td>


                                                <td>{{$fac->commande->prix_total_toutes_taxes_comprises_commande}} DH</td>
                                            <td class="{{$tdClasses[$fac->etat_facture] }}">
                                                <span>{{$fac->etat_facture}}</span>
                                            </td>
                                            <td>
                                                <ul>
                                                    <li>
                                                        
                                                        <a href="{{route('orderDetails' , $fac->commande->id)}}">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a  data-bs-toggle="modal" data-bs-target="#editModal{{$fac->id}}">
                                                            <i class="ri-pencil-line"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModalToggle{{$fac->id}}">
                                                            <i class="ri-delete-bin-line"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                    
                                        <!-- Modal for product deletion -->
                                        <div class="modal fade theme-modal remove-coupon" id="exampleModalToggle{{$fac->id}}" aria-hidden="true" tabindex="-1">
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
                                                            <p>Delete facture: <strong>{{$fac->description_facture}}</strong>?</p>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-animation btn-md fw-bold" data-bs-dismiss="modal">No</button>
                                                        <form id="formDeleteProduct{{ $fac->id }}" action="{{ route('admin.facture.delete', $fac->id) }}" method="POST">
                                                            @csrf
                                                            @method('delete')
                                                            <button type="submit" class="btn btn-animation btn-md fw-bold" data-bs-dismiss="modal" id="confirmDeleteButton{{$fac->id}}">Yes</button>
                                                        </form>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Modal for product deletion -->
                                        <!-- Modal for order edit -->
                                        <div class="modal fade theme-modal" id="editModal{{$fac->id}}" aria-hidden="true" tabindex="-1">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header d-block text-center">
                                                        <h5 class="modal-title w-100" id="exampleModalLabel{{$fac->id}}">Edit Facture status</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                            <i class="fas fa-times"></i>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('admin.facture.update', $fac->id) }}" method="POST">
                                                            @csrf
                                                            <div class="mb-3">
                                                                <label for="etat_commande_id{{$fac->id}}" class="form-label">Status</label>
                                                                <select class="form-select" id="etat_commande_id{{$fac->id}}" name="etat_facture">
                                                                    @foreach($types as $type)
                                                                        <option value="{{ $type }}" @if($fac->etat_facture == $type) selected @endif>{{ $type }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <button type="submit" class="btn btn-primary">Update</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
<!-- End Modal for order edit -->

                                       
                                        @endforeach
                                    </tbody>
                                    
                                    
    <!-- Container-fluid Ends-->

    
</div>


@endsection

