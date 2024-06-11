@extends('admin.dashboard')
@section('title', 'Edit')

@section('content')

<form class="theme-form theme-form-2 mega-form" method="POST" action="{{ route('admin.category.update', ['id'=>$category->id]) }}"  enctype="multipart/form-data"> 
    @csrf 
    @method('PATCH')

    <div class="page-body">

        <!-- New Product Add Start -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-sm-8 m-auto">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-header-2">
                                        <h5>{{$category->nom_categorie}}'s Information</h5>
                                    </div>
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-3 mb-0">Category
                                                Name </label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="text" placeholder="Category Name" 
                                                name='nom_categorie'
                                                value='{{$category->nom_categorie}}'>
                                            </div>
                                        </div>

                                        <div class="mb-4 row align-items-center">
                                            <label class="col-sm-3 col-form-label form-label-title">Category
                                                Description </label>
                                                <div class="col-sm-9">
                                                    <textarea name="description_categorie" id="description" class="form-control" rows="5">{{$category->description_categorie}}</textarea>

                                                </div>
                                        </div>

                                        

                                       
                                        

                                        
                                       
                                        
                                           
                                        
                                        
                                    
                                </div>
                            </div>
                        
                           
                        

                            <div class="card">
                                <div class="card-body">
                                    <div class="card-header-2">
                                        <h5>Category </h5>
                                    </div>

                                    <div class="theme-form theme-form-2 mega-form">
                                        <div class="mb-4 row align-items-center">
                                            <label class="col-sm-3 col-form-label form-label-title">Image</label>
                                            <div class="col-sm-9">
                                                <input class="form-control form-choose" type="file" id="formFile" name='image_categorie'>
                                            </div>
                                        </div>

                                        
                                    </div>
                                </div>
                            </div>

                           <button type="submit" class="btn  btn-primary container">UPDATE <i class="fas fa-folder"></i></button>

                            
                        </div>
                       

                    
                    </div>
                </div>
            </div>
        </div>
        

       
    </div></form>
  
       
@endsection

