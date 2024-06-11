@extends('admin.dashboard')
@section('title', 'Category Details')

@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-header-2">
                            <h5>Category Details</h5>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{ asset('storage/' .$category->image_categorie) }}" alt="Category Image" width="200">
                            </div>
                            <div class="col-md-8">
                                <div class="mb-4 row align-items-center">
                                    <label class="form-label col-sm-3">Category Name:</label>
                                    <div class="col-sm-9">
                                        <p>{{ $category->nom_categorie }}</p>
                                    </div>
                                </div>

                                <div class="mb-4 row align-items-center">
                                    <label class="form-label col-sm-3">Category Description:</label>
                                    <div class="col-sm-9">
                                        <p>{{ $category->description_categorie }}</p>
                                    </div>
                                </div>
                                

                            </div>
                        </div>
                    </div>
                </div>
                <a href="{{route('admin.category.edit',$category->id)}}" class="btn  btn-primary container">EDIT {{ $category->nom_categorie }}</a>
            </div>
        </div>
    </div>
</div>
@endsection
