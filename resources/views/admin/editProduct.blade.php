@extends('admin.dashboard')
@section('title', 'Edit  ')

@section('content')

<form class="theme-form theme-form-2 mega-form" method="POST" action="{{ route('admin.product.update', ['id'=>$product->id]) }}"  enctype="multipart/form-data"> 
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
                                        <h5>{{$product->designation_article}}'s Information</h5>
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
                                            <label class="form-label-title col-sm-3 mb-0">Product
                                                Name </label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="text" placeholder="Product Name" 
                                                name='designation_article'
                                                value='{{$product->designation_article}}'>
                                            </div>
                                        </div>

                                        <div class="mb-4 row align-items-center">
                                            <label class="col-sm-3 col-form-label form-label-title">Product
                                                Description </label>
                                                <div class="col-sm-9">
                                                    <textarea name="description_article" id="description" class="form-control" rows="5">{{$product->description_article}}</textarea>

                                                </div>
                                        </div>

                                        <div class="mb-4 row align-items-center">
                                            <label class="col-sm-3 col-form-label form-label-title">Category</label>
                                            <div class="col-sm-9">
                                                <select class="js-example-basic-single w-100" name="categorie_id">
                                                    <option disabled="">Category Menu</option>
                                                    @foreach($categories as $category)
                                                        <option value="{{ $category->id }}"
                                                             @if($category->id == $product->categorie_id) selected @endif>{{ $category->nom_categorie }}</option>
                                                    @endforeach
                                                </select>   
                                            </div>
                                        </div>

                                        <div class="mb-4 row align-items-center">
                                            <label class="col-sm-3 col-form-label form-label-title">Brand</label>
                                            <div class="col-sm-9">
                                                <select class="js-example-basic-single w-100" name="marque_id">
                                                    <option disabled="">Category Menu</option>
                                                    @foreach($marques as $marque)
                                                        <option value="{{ $marque->id }}"
                                                             @if($marque->id == $product->marque_id) selected @endif>{{ $marque->libelle_marque }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        

                                        
                                       
                                        
                                           
                                        
                                        
                                    
                                </div>
                            </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="card-header-2">
                                    <h5>Product Price</h5>
                                </div>

                                
                                <div class="mb-4 row align-items-center">
                                    <label class="col-sm-3 form-label-title">price</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="number"  step="0.01" name="prix_article" placeholder="0" value="{{ $product->prix_article }}">
                                    </div>
                                </div>
                                <div class="mb-4 row align-items-center">
                                    <label class="col-sm-3 form-label-title">taux remise</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="number"  step="0.01" name="taux_remise" placeholder="0" value="{{ $product->taux_remise }}">
                                    </div>
                                </div>
                                <div class="mb-4 row align-items-center">
                                    <label class="col-sm-3 form-label-title">taux tva</label>
                                    <div class="col-sm-5">
                                        <input class="form-control" type="number"  step="0.01" name="taux_tva" placeholder="0" value="{{ $product->taux_tva }}">
                                    </div>
                                </div>
                                
                            
                            </div>
                        </div>
                           
                        <div class="card">
                            <div class="mb-4 row align-items-center mt-3">
                                <label class="col-sm-3 col-form-label form-label-title">Tags</label>
                                <div class="col-sm-9">
                                    <div id="tag-inputs">
                                        @foreach ($product->tags as $tag)
                                            <div class="d-flex tag-row my-1">
                                                <div class="form-group flex-grow-1 mr-2">
                                                    <select name="tag_ids[]" class="form-control mt-3">
                                                        @foreach ($tags as $t)
                                                            <option value="{{ $t->id }}" {{ $tag->id == $t->id ? 'selected' : '' }}>
                                                                {{ $t->libelle_tag }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <button type="button" class="btn btn-danger remove-tag btn-sm"><b><i class="ri-delete-bin-line"></i></b></button>                                            </div>
                                        @endforeach
                                    </div>  
                                    <center><button type="button" class="btn btn-success add-tag mt-3 mr-1"> <i class="fas fa-plus"></i></button></center>
                                </div>
                            </div>
                        </div>

                            <div class="card">
                                <div class="card-body">
                                    <div class="card-header-2">
                                        <h5>Product </h5>
                                    </div>

                                    <div class="theme-form theme-form-2 mega-form">
                                        <div class="mb-4 row align-items-center">
                                            <label class="col-sm-3 col-form-label form-label-title">Image</label>
                                            <div class="col-sm-9">
                                                <input class="form-control form-choose" type="file" id="formFile" name='image_article'>
                                            </div>
                                        </div>

                                        
                                    </div>
                                </div>
                            </div>

                            

                            
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-header-2">
                                        <h5>Product variations</h5>
                                    </div>
                            
                                    <div class="theme-form theme-form-2 mega-form" id="options-container">
                                        @foreach($product->proprietes as $propriete)
                                        <div class="mb-4 row align-items-center option-row">
                                            <div class="col-sm-3">
                                                <label class="form-label-title">Property</label>
                                            </div>
                                            <div class="col-sm-4">
                                                <select class="form-control" name="property_ids[]">
                                                    @foreach($props as $prop)
                                                    <option value="{{ $prop->id }}" {{ $prop->libelle_propriete == $propriete->libelle_propriete ? 'selected' : '' }}>
                                                        {{ $prop->libelle_propriete }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" name="property_values[]" 
                                                placeholder="Enter value" value="{{ $propriete->pivot->valeur }}" required>
                                            </div>
                                            <div class="col-sm-1 ">
                                                <a href="#" class="remove-option btn btn-primary"><i class="ri-close-line"></i></a> 
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                            
                                    <a href="#" class="add-option"><i class="ri-add-line me-2"></i> Add Another Option</a>
                                </div>
                            </div>
                            
                           
                            
                            

                            

                            

                            <div class="card">
                                <div class="card-body">
                                    <div class="card-header-2">
                                        <h5>Product Stock</h5>
                                    </div>

                                    <div class="theme-form theme-form-2 mega-form">
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-3 mb-0">Quantity</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="text" value="{{$product->quantite_stock}}" name='quantite_stock'>
                                            </div>
                                        </div>
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-3 mb-0">fournisseur</label>
                                            <div class="col-sm-9">
                                                <select class="js-example-basic-single w-100" name="fournisseur_id">
                                                    <option disabled="">select fournisseur
                                                    </option>
                                                    @foreach($fourni as $f)
                                                        <option value="{{ $f->id }}"
                                                             @if($f->id == $product->fournisseur_id) selected @endif>{{ $f->nom_fournisseur }}</option>
                                                    @endforeach
                                                </select>                                              </div>
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
        <!-- New Product Add End -->

        <!-- footer Start -->
        
        <!-- footer En -->
    </div></form>
    <script>
        $(document).ready(function() {
    // Add tag input field
        $(document).on('click', '.add-tag', function() {
            var tagInputs = $('#tag-inputs');
            var tagInput = $(
            '<div class="d-flex tag-row my-1">' +
                '<div class="form-group flex-grow-1 mr-2">' +
                '<select name="tag_ids[]" class="form-control "></select>' +
                '</div>' +
                '<button type="button" class="btn btn-danger remove-tag btn-sm"><b><i class="ri-delete-bin-line"></i></b></button>' +
                '</div>'
    );

            var select = tagInput.find('select');

            @foreach ($tags as $t)
                var option = $('<option value="{{ $t->id }}">{{ $t->libelle_tag }}</option>');
                select.append(option);
            @endforeach

            tagInputs.append(tagInput);
    });

    // Remove tag input field
    $(document).on('click', '.remove-tag', function() {
        $(this).closest('.tag-row').remove();
    });
});

$(document).on('click', '.remove-option', function(e) {
    e.preventDefault();
    $(this).closest('.option-row').remove();
});

$('.add-option').click(function(e) {
    e.preventDefault();
    var optionsContainer = $('#options-container');
    var newOption = $('<div class="mb-4 row align-items-center option-row">' +
        '<div class="col-sm-3">' +
        '<label class="form-label-title">Property</label>' +
        '</div>' +
        '<div class="col-sm-4">' +
        '<select class="form-control" name="property_ids[]">' +
        '@foreach($props as $prop)' +
        '<option value="{{ $prop->id }}">{{ $prop->libelle_propriete }}</option>' +
        '@endforeach' +
        '</select>' +
        '</div>' +
        '<div class="col-sm-4">' +
        '<input type="text" class="form-control" name="property_values[]" placeholder="Enter value">' +
        '</div>' +
        '<div class="col-sm-1">' +
        '<a href="#" class="remove-option btn btn-primary"><i class="ri-close-line"></i></a>' +
        '</div>' +
        '</div>');

    optionsContainer.append(newOption);
});

    </script>

@endsection

