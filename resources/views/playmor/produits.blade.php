@extends('playmor.header')

@section('content')
    <!-- Breadcrumb Section Start -->
    <section class="breadscrumb-section pt-0">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="breadscrumb-contain">
                        <h2>Tous nos produits</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="{{route('home')}}">
                                        <i class="fa-solid fa-house"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Tous nos articles</li>
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
                    <div class="show-button">
                        <div class="top-filter-menu-2">
                            <div class="sidebar-filter-menu" data-bs-toggle="collapse" data-bs-target="#collapseExample">
                                <a href="javascript:void(0)"><i class="fa-solid fa-filter"></i> Menu de filtrage</a>
                            </div>
                            <div class="ms-auto d-flex align-items-center">
                                <div class="category-dropdown me-md-3">
                                    <h5 class="text-content">Ordre :</h5>
                                    <div class="dropdown">
                                        <button class="dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown">
                                            <span>Ordre par prix</span> <i class="fa-solid fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                            <form action="{{ route('showAllProducts') }}" method="get">
                                                @csrf
                                                <li>
                                                    <input class="checkbox_animated m-2" type="checkbox" name="ordre" value="moinsCher" onchange="this.form.submit()">
                                                        <label class="form-check-label m-1" for="ordre">
                                                            <span class="name">Du moins cher</span>
                                                        </label>
                                                </li>
                                                <li>
                                                    <input class="checkbox_animated m-2" type="checkbox" name="ordre" value="plusCher" onchange="this.form.submit()">
                                                        <label class="form-check-label m-1" for="ordre">
                                                            <span class="name">Du plus cher</span>
                                                        </label>
                                                </li>
                                            </form>
                                        </ul>
                                    </div>
                                </div>
                                <div class="grid-option grid-option-2">
                                    <ul>
                                        <li class="five-grid d-xxl-inline-block d-none active">
                                            <a href="{{ route('showAllProducts') }}">
                                                <img src="../assets/svg/grid-5.svg" class="blur-up lazyload d-lg-inline-block d-none" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="top-filter-category" id="collapseExample">
                        <div class="row g-sm-4 g-3">
                            <div class="col-xl-4 col-md-6">
                                <div class="category-title">
                                    <h3>Par catégorie</h3>
                                </div>
                                <ul class="category-list custom-padding custom-height">
                                    <form action="{{ route('showAllProducts') }}" method="get">
                                        @csrf
                                        @foreach($categories as $categorie)
                                            <li>
                                                <div class="form-check ps-0 m-0 category-list-box">
                                                    <input class="checkbox_animated" type="checkbox" name="categories" value="{{ $categorie->id }}" onchange="this.form.submit()">
                                                    <label class="form-check-label" for="categories">
                                                        <span class="name">{{ $categorie->nom_categorie }}</span>
                                                        <span class="number">({{ count($categorie->articles) }})</span>
                                                    </label>
                                                </div>
                                            </li>
                                        @endforeach
                                    </form>
                                </ul>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="category-title">
                                    <h3>Prix</h3>
                                </div>
                                <ul class="category-list">
                                    <form action="{{ route('showAllProducts') }}" method="get">
                                        @csrf
                                        <li>
                                            <div class="form-check ps-0 m-0 category-list-box">
                                                <input class="checkbox_animated" type="checkbox" name="prix" id="prix" value="2000" onchange="this.form.submit()">
                                                <label class="form-check-label" for="prix">
                                                    <span class="name">< 2000 DH</span>
                                                    <span class="number">({{ $article2000 }})</span>
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check ps-0 m-0 category-list-box">
                                                <input class="checkbox_animated" type="checkbox" id="prix" name="prix" value="2000-5000" onchange="this.form.submit()">
                                                <label class="form-check-label" for="prix">
                                                    <span class="name">2000 DH - 5000 DH</span>
                                                    <span class="number">({{ $article2000A5000 }})</span>
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check ps-0 m-0 category-list-box">
                                                <input class="checkbox_animated" type="checkbox" id="prix" name="prix" value="5000-10000" onchange="this.form.submit()">
                                                <label class="form-check-label" for="prix">
                                                    <span class="name">5000 DH - 10000 DH</span>
                                                    <span class="number">({{ $article5000A10000 }})</span>
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check ps-0 m-0 category-list-box">
                                                <input class="checkbox_animated" type="checkbox" id="prix" name="prix" value="10000-50000" onchange="this.form.submit()">
                                                <label class="form-check-label" for="prix">
                                                    <span class="name">10000 DH - 50000 DH</span>
                                                    <span class="number">({{ $article10000A50000 }})</span>
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check ps-0 m-0 category-list-box">
                                                <input class="checkbox_animated" type="checkbox" id="prix" name="prix" value="50000" onchange="this.form.submit()">
                                                <label class="form-check-label" for="prix">
                                                    <span class="name"> > 50000 DH</span>
                                                    <span class="number">({{ $article50000 }})</span>
                                                </label>
                                            </div>
                                        </li>
                                    </form>
                                </ul>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="category-title">
                                    <h3>Remise</h3>
                                </div>
                                <ul class="category-list">
                                    <form action="{{ route('showAllProducts') }}" method="get">
                                        <li>
                                            <div class="form-check ps-0 m-0 category-list-box">
                                                <input class="checkbox_animated" type="checkbox" id="remises" name="remises" value="5" onchange="this.form.submit()">
                                                <label class="form-check-label" for="remises">
                                                    <span class="name">jusqu'à 5%</span>
                                                    <span class="number">({{ $article5 }})</span>
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check ps-0 m-0 category-list-box">
                                                <input class="checkbox_animated" type="checkbox" id="remises" name="remises" value="5-10" onchange="this.form.submit()">
                                                <label class="form-check-label" for="remises">
                                                    <span class="name">5% - 10%</span>
                                                    <span class="number">({{ $article5A10 }})</span>
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check ps-0 m-0 category-list-box">
                                                <input class="checkbox_animated" type="checkbox" id="remises" name="remises" value="10-15" onchange="this.form.submit()">
                                                <label class="form-check-label" for="remises">
                                                    <span class="name">10% - 15%</span>
                                                    <span class="number">({{ $article10A15 }})</span>
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check ps-0 m-0 category-list-box">
                                                <input class="checkbox_animated" type="checkbox" id="remises" name="remises" value="15-25" onchange="this.form.submit()">
                                                <label class="form-check-label" for="remises">
                                                    <span class="name">15% - 25%</span>
                                                    <span class="number">({{ $article15A25 }})</span>
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check ps-0 m-0 category-list-box">
                                                <input class="checkbox_animated" type="checkbox" id="remises" name="remises" value="25" onchange="this.form.submit()">
                                                <label class="form-check-label" for="remises">
                                                    <span class="name">Plus de 25%</span>
                                                    <span class="number">({{ $article25 }})</span>
                                                </label>
                                            </div>
                                        </li>
                                    </form> 
                                </ul>
                            </div>
                        </div>
                    </div>
                    @php
                         $selectedArticleId = $articles[0]->id ?? null;
                    @endphp 
                    <div class="row g-sm-4 g-3 row-cols-xxl-5 row-cols-xl-3 row-cols-lg-2 row-cols-md-3 row-cols-2 product-list-section">
                        @foreach($articles as $article)
                        <div>
                            <div class="product-box-3 h-100 wow fadeInUp">
                                <div class="product-header">
                                    <div class="product-image">
                                        <a href="{{ route('article' , $article->id) }}">
                                          <img src="{{ asset('storage/' . $article->image_article) }}" class='img-fluid blur-up lazyload' alt='{{ $article->designation_article }}' onclick="<?php echo '$selectedArticleId = ' . $article->id . ';'; ?>"/>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-footer">
                                    <div class="product-detail">
                                    <h5 class="price"><span class="theme-color">{{ $article->prix_article - ( $article->prix_article * $article->taux_remise)}} DH</span> <del>{{ $article->prix_article }} DH</del>
                                        </h5>
                                        <span class="span-name">{{ $article->designation_article }}</span>
                                        <a href="{{ route('article' , $article->id) }}">
                                            <h5 class="name">{{ $article->description_article }}</h5>
                                        </a>
                                    </div>
                                    <div class="add-to-cart-box bg-white">
                                            <a class="btn btn-add-cart addcart-button" href="{{ route('article' , $article->id) }}">voir le produit
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
                            {{ $articles->links('pagination::bootstrap-5') }}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>

@endsection