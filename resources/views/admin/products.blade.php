@extends('admin.dashboard')
@section('title', 'products')

@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table">
                    <div class="card-body">
                        <div class="title-header option-title d-sm-flex d-block">
                            <h5>Products List</h5>
                            <div class="right-options">
                                <ul>
                                    <li>
                                        <select class="form-select" onchange="location = this.value;">
                                            <option value="">Select Category</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ route('categoryFilter', $category) }}">
                                                    {{ $category->nom_categorie }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </li>
                                    
                                    <li>
                                        <a class="btn btn-sm btn-solid" href="{{ route('admin.products') }}">
                                            <i class="fas fa-sync-alt"></i> Refresh
                                        </a>
                                    </li>
                                    
                                    <li>
                                        <a class="btn btn-solid" href="{{ route('admin.product.add') }}">Add Product <i class="fas fa-plus"></i></a>
                                    </li>
                                </ul>
                            </div>
                            
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
                                            <th>Brand</th>
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
                                            <td>
                                                <a href="{{ route('articleCommande', ['id' => $product->id]) }}">
                                                    {{$product->designation_article}}
                                                </a>
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.category.show', ['id' => $product->categorie->id]) }}">
                                                    {{ $product->categorie->nom_categorie }}
                                                </a>
                                            </td>
                                            
                                            
                                            <td>{{$product->quantite_stock}}</td>
                                            <td class="td-price">{{$product->prix_article}} MAD</td>
                                            <td>
                                                <span>{{$product->marque->libelle_marque}}</span>
                                            </td>
                                            <td>
                                                <ul>
                                                    <li>
                                                        <a href="{{route('admin.product.show',$product->id)}}">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{route('admin.product.edit',$product->id)}}">
                                                            <i class="ri-pencil-line"></i>
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
                                                        <form id="formDeleteProduct{{ $product->id }}" action="{{ route('admin.product.softDelete', $product->id) }}" method="POST">
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
                                                    
                                                </div>
                                            </div>
                                        </div>  
                                        @endforeach
                                    </tbody>
                                    
                                    
    <!-- Container-fluid Ends-->

    
</div>


@endsection

