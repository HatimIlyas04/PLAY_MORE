@extends('playmor.header')

@section('content')
    <!-- Breadcrumb Section Start -->
    <section class="breadscrumb-section pt-0">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="breadscrumb-contain">
                        <h2>Nos catégories</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="{{route('home')}}">
                                        <i class="fa-solid fa-house"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Nos catégories</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shop Section Start -->
    <section class="section-b-space shop-section">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    @php
                         $selectedCategoryId = $categories[0]->id ?? null;
                    @endphp 
                    <div class="row g-sm-4 g-3 row-cols-xxl-5 row-cols-xl-3 row-cols-lg-2 row-cols-md-3 row-cols-2 product-list-section">
                        @foreach($categories as $categorie)
                        <div>
                            <div class="product-box-3 h-100 wow fadeInUp">
                                <div class="product-header">
                                    <div class="product-image">
                                        <a href="{{ route('categories.showproducts' , $categorie->id) }}">
                                            <img src="{{ asset('storage/' . $categorie->image_categorie) }}" class='img-fluid blur-up lazyload' alt='{{ $categorie->nom_categorie }}' />
                                        </a>
                                    </div>
                                </div>
                                <div class="product-footer">
                                    <div class="product-detail">
                                        <span class="span-name">{{ $categorie->nom_categorie }}</span>
                                        <a href="{{ route('categories.showproducts' , $categorie->id) }}">
                                            <h5 class="name">{{ $categorie->description_categorie }}</h5>
                                        </a>
                                    </div>
                                        
                                        <div class="add-to-cart-box bg-white">
                                            <a class="btn btn-add-cart addcart-button" href="{{ route('categories.showproducts' , $categorie->id) }}">voir les produits
                                                <span class="add-icon bg-light-gray">
                                                    <i class="fa-solid fa-plus"></i>
                                                </span>
                                            </a>
                                        </div>
                                </div>
                            </div>  
                        </div> 
                        @endforeach
                    </div>
                    <nav class="custome-pagination">
                        <ul class="pagination justify-content-center">
                            {{ $categories->links('pagination::bootstrap-5') }}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>

@endsection