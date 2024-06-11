@extends('admin.dashboard')
@section('title', 'properties')

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
                                        <a class="btn btn-solid" href="{{route('admin.property.add')}}">Add Property</a>
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
                                            <th>property Name</th>
                                            <th>property Description</th>
                                            <th>Options</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach($props as $p)
                                        <tr>
                                            
                                            <td>
                                                
                                                    {{$p->libelle_propriete}}
                                                
                                               
                                                <div class="modal fade" id="editModal{{$p->id}}" aria-hidden="true" tabindex="-1">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Edit Property</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <form action="{{ route('admin.property.update', $p->id) }}" method="POST">
                                                                @csrf
                                                                @method('PATCH')
                                                                <div class="modal-body">
                                                                    <div class="form-group">
                                                                        <label for="propertyName{{$p->id}}">Property Name</label>
                                                                        <input type="text" class="form-control" id="propertyName{{$p->id}}" name="libelle_propriete" value="{{$p->libelle_propriete}}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="propertyDescription{{$p->id}}">Property Description</label>
                                                                        <textarea class="form-control" id="propertyDescription{{$p->id}}" name="description_propriete">{{$p->description_propriete}}</textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Edit Modal -->
                                            </td>
                                            <td>{{$p->description_propriete}}</td>
                                            
                                            <td>
                                                <ul>
                                                    <li>
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#editModal{{$p->id}}">
                                                            <i class="ri-pencil-line"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModalToggle{{$p->id}}">
                                                            <i class="ri-delete-bin-line"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                    
                                        <!-- Modal for product deletion -->
                                        <div class="modal fade theme-modal remove-coupon" id="exampleModalToggle{{$p->id}}" aria-hidden="true" tabindex="-1">
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
                                                            <p>Delete Property: <strong>{{$p->libelle_propriete}}</strong>?</p>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-animation btn-md fw-bold" data-bs-dismiss="modal">No</button>
                                                        <form id="formDeleteProduct{{ $p->id }}" 
                                                            action="{{ route('admin.property.delete', $p->id) }}" method="POST">
                                                            @csrf
                                                            @method('delete')
                                                            <button type="submit" class="btn btn-animation btn-md fw-bold" data-bs-dismiss="modal" id="confirmDeleteButton{{$p->id}}">Yes</button>
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
