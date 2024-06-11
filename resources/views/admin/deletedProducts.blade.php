@extends('admin.dashboard')
@section('title', 'deleted products')

@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table">
                    <div class="card-body">
                        <div class="title-header option-title d-sm-flex d-block">
                            <h5>Deleted Products List</h5>
                            
                            
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
                                            <th>Product Image</th>
                                            <th>Product Name</th>
                                            <th>Category</th>
                                            <th>Current Qty</th>
                                            <th>Price</th>
                                            <th>Deleted at</th>
                                            <th>Options</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach($products as $product)
                                        <tr>
                                            <td>
                                                <div class="table-image">
                                                    <img src="{{ asset('storage/' .$product->image_article) }}" class="img-fluid" alt="">
                                                </div>
                                            </td>
                                            <td>{{$product->designation_article}}</td>
                                            <td>{{$product->categorie->nom_categorie}}</td>
                                            <td>{{$product->quantite_stock}}</td>
                                            <td class="td-price">{{$product->prix_article}} MAD</td>
                                            <td>
                                                <span>{{$product->deleted_at}}</span>
                                            </td>
                                            <td>
                                                <ul>
                                                    <li>
                                                        <a href="{{route('admin.product.restore',$product->id)}}">
                                                            <i class="ri-history-line"></i>

                                                        </a>
                                                    </li>
                                                    
                                                    <li>
                                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModalToggle{{$product->id}}">
                                                            <i class="ri-delete-bin-line"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                    
                                        <!-- Modal for product deletion -->
                                        <div class="modal fade theme-modal remove-coupon" id="exampleModalToggle{{$product->id}}" aria-hidden="true" tabindex="-1">
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
                                                            <p>Delete product: <strong>{{$product->designation_article}}</strong>?</p>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-animation btn-md fw-bold" data-bs-dismiss="modal">No</button>
                                                        <form id="formDeleteProduct{{ $product->id }}" action="{{ route('admin.product.hardDelete', $product->id) }}" method="POST">
                                                            @csrf
                                                            @method('delete')
                                                            <button type="submit" class="btn btn-animation btn-md fw-bold" data-bs-dismiss="modal" id="confirmDeleteButton{{$product->id}}">Yes</button>
                                                        </form>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Modal for product deletion -->
                                        <div class="modal fade theme-modal view-modal" id="view{{$product->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-xl modal-fullscreen-sm-down">
                                                <div class="modal-content">
                                                    <!-- Modal Header -->
                                                    <div class="modal-header p-0">
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                            <i class="fa-solid fa-xmark"></i>
                                                        </button>
                                                    </div>
                                        
                                                    <!-- Modal Body -->
                                                    <div class="modal-body">
                                                        <div class="row g-sm-4 g-2">
                                                            <div class="col-lg-6">
                                                                <div class="slider-image">
                                                                    <img src="{{ asset($product->image_article) }}" class="img-fluid blur-up lazyload" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="right-sidebar-modal">
                                                                    <h4 class="title-name">{{ $product->designation_article }}</h4>
                                                                    <h4 class="price">{{ $product->prix_article }} MAD</h4>
                                                                    <!-- Other product details -->
                                                                    <!-- ... -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>  
                                        @endforeach
                                    </tbody>
                                    
                                    
    <!-- Container-fluid Ends-->

    
</div>


@endsection

