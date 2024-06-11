@extends('admin.dashboard')
@section('title', 'Orders')

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
                            <div class="table-responsive">
                                <table class="table all-package theme-table table-product" id="table_id">
                                    <thead>
                                        <tr>
                                            <th>Order Code</th>
                                            <th>Order User</th>
                                            <th>Order Date  </th>
                                            <th>Total Price</th>
                                            <th>Status</th>
                                            <th>Options</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach($orders as $order)
                                        <tr>
                                            
                                            <td>{{$order->id}}</td>
                                            <td>
                                                <a href="{{ route('admin.user.edit', ['id' => $order->user->id]) }}" target="_blank">
                                                    {{ $order->user->identifiant_utilisateur }}
                                                </a>
                                            </td>
                                            
                                            </a>
                                            <td>{{$order->date_commande	}}</td>
                                            <td class="td-price">
                                                {{$order->prix_total_toutes_taxes_comprises_commande
                                            }} MAD</td>
                                            <td class="{{$tdClasses[$order->etat_commande_id] }}">
                                                <span>{{$order->etatCommande->libelle_etat_commande}}</span>
                                            </td>
                                            <td>
                                                <ul>
                                                        @if (!$order->facture)
                                                        <li>
                                                            <a href="{{ route('admin.order.generate', $order->id) }}">
                                                                <i class="ri-file-add-line"></i>
                                                            </a>
                                                        </li>
                                                        @endif
                                                        <li>
                                                        
                                                        <a href="{{route('orderDetails' , $order->id)}}">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a  data-bs-toggle="modal" data-bs-target="#editModal{{$order->id}}">
                                                            <i class="ri-pencil-line"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModalToggle{{$order->id}}">
                                                            <i class="ri-delete-bin-line"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                    
                                        <!-- Modal for product deletion -->
                                        <div class="modal fade theme-modal remove-coupon" id="exampleModalToggle{{$order->id}}" aria-hidden="true" tabindex="-1">
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
                                                            <p>Delete order: <strong>{{$order->description_commande}}</strong>?</p>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-animation btn-md fw-bold" data-bs-dismiss="modal">No</button>
                                                        <form id="formDeleteProduct{{ $order->id }}" 
                                                            action="{{route('admin.order.delete',$order->id)}}" method="POST">
                                                            @csrf
                                                            @method('delete')
                                                            <button type="submit" class="btn btn-animation btn-md fw-bold" data-bs-dismiss="modal" id="confirmDeleteButton{{$order->id}}">Yes</button>
                                                        </form>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Modal for product deletion -->
                                        <!-- Modal for order edit -->
                                        <div class="modal fade theme-modal" id="editModal{{$order->id}}" aria-hidden="true" tabindex="-1">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header d-block text-center">
                                                        <h5 class="modal-title w-100" id="exampleModalLabel{{$order->id}}">Edit Order</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                            <i class="fas fa-times"></i>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('updateOrder', $order->id) }}" method="POST">
                                                            @csrf
                                                            <div class="mb-3">
                                                                <label for="etat_commande_id{{$order->id}}" class="form-label">Status</label>
                                                                <select class="form-select" id="etat_commande_id{{$order->id}}" name="etat_commande_id">
                                                                    @foreach($types as $type)
                                                                        <option value="{{ $type->id }}" @if($order->etat_commande_id == $type->id) selected @endif>{{ $type->libelle_etat_commande }}</option>
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

