@extends('admin.dashboard')
@section('title', 'categories')

@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table">
                    <div class="card-body">
                        <div class="title-header option-title d-sm-flex d-block">
                            <h5>Categories List</h5>
                            <div class="right-options">
                                <ul>
                                    
                                    <li>
                                        <a class="btn btn-solid" href="{{route('admin.category.add')}}">Add Category <i class="fas fa-plus"></i></a>
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
                                            <th>Category Image</th>
                                            <th>Category Name</th>
                                            <th>Category Description</th>
                                            <th>Options</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach($categories as $categorie)
                                        <tr>
                                            <td>
                                                <div class="table-image">
                                                 
                             <img src="{{ asset('storage/' .$categorie->image_categorie) }}" class="img-fluid" alt="">
                                                </div>
                                            </td>
                                            </a>
                                            <td>
                                                <a href="{{route('categoryFilter',$categorie)}}">
                                                    {{$categorie->nom_categorie}}
                                                </a>
                                            </td>
                                            <td class="text-dark" >{{$categorie->description_categorie}}</td>
                                            
                                            <td>
                                                <ul>
                                                    <li>
                                                        <a href="{{route('admin.category.show', $categorie->id)}}" >
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{route('admin.category.edit',$categorie->id)}}">
                                                            <i class="ri-pencil-line"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModalToggle{{$categorie->id}}">
                                                            <i class="ri-delete-bin-line"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                    
                                        <!-- Modal for product deletion -->
                                        <div class="modal fade theme-modal remove-coupon" id="exampleModalToggle{{$categorie->id}}" aria-hidden="true" tabindex="-1">
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
                                                            <p>Delete Category: <strong>{{$categorie->nom_categorie}}</strong>?</p>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-animation btn-md fw-bold" data-bs-dismiss="modal">No</button>
                                                        <form id="formDeleteProduct{{ $categorie->id }}" action="{{ route('admin.category.softDelete', $categorie->id) }}" method="POST">
                                                            @csrf
                                                            @method('delete')
                                                            <button type="submit" class="btn btn-animation btn-md fw-bold" data-bs-dismiss="modal" id="confirmDeleteButton{{$categorie->id}}">Yes</button>
                                                        </form>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Modal for product deletion -->
                                        
                                        @endforeach
                                    </tbody>
                                    
                                    
    <!-- Container-fluid Ends-->

    
</div>


@endsection
