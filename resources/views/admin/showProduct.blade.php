@extends('admin.dashboard')
@section('title', 'Product Details')

@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-header-2">
                            <h5>Product Details</h5>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-4">
                                    <img src="{{ asset('storage/' .$product->image_article) }}" class="img-fluid" alt="Product Image">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-4">
                                    <label class="form-label">Product Name:</label>
                                    <p class="mb-0">{{ $product->designation_article }}</p>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Product Description:</label>
                                    <p class="mb-0">{{ $product->description_article }}</p>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Category:</label>
                                    <p class="mb-0">{{$product->categorie->nom_categorie}}</p>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Brand:</label>
                                    <p class="mb-0">{{ $product->marque->libelle_marque }}</p>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Price:</label>
                                    <p class="mb-0">{{ $product->prix_article }}</p>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Discount Rate:</label>
                                    <p class="mb-0">{{ $product->taux_remise }}</p>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Tax Rate:</label>
                                    <p class="mb-0">{{ $product->taux_tva }}</p>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Tags:</label>
                                    <ul class="mb-0 pl-3">
                                        @foreach ($product->tags as $tag)
                                            <li>{{ $tag->libelle_tag }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4 row align-items-center">
                            <label class="form-label col-sm-3">Product Variations:</label>
                            <div class="col-sm-9">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Property</th>
                                            <th>Value</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($product && $product->proprietes->count() > 0)
                                            @foreach ($product->proprietes as $propriete)
                                            <tr>
                                                <td>{{ $propriete->libelle_propriete }}</td>
                                                <td>{{ $propriete->pivot->valeur  }}</td>
                                            </tr>
                                        @endforeach
                                        @else
                                            <tr>
                                                <td colspan="2">Nothing to show</td>
                                            </tr>
                                        @endif
                                    </tbody>
                                    
                                </table>
                            </div>
                        </div>

                        <div class="mb-4 row align-items-center">
                            <label class="form-label col-sm-3">Quantity in Stock:</label>
                            <div class="col-sm-9">
                                <p>{{ $product->quantite_stock }}</p>
                            </div>
                        </div>

                        <div class="mb-4 row align-items-center">
                            <label class="form-label col-sm-3">Supplier:</label>
                            <div class="col-sm-9">
                                <p>{{ $product->fournisseur->nom_fournisseur }}</p>
                            </div>
                        </div>

                        <div class="text-right">
                            <a href="{{ route('admin.product.edit', $product->id) }}" class="btn btn-primary">Modify Product</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
