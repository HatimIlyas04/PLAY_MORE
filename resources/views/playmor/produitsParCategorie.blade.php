@extends('playmor.header')

@section('content')
    <!-- Breadcrumb Section Start -->
    <section class="breadscrumb-section pt-0">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="breadscrumb-contain">
                        <h2>Nos {{ $categorie->nom_categorie }}</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="{{route('home')}}">
                                        <i class="fa-solid fa-house"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Nos {{ $categorie->nom_categorie }}</li>
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
                    <div class="row g-sm-4 g-3 row-cols-xxl-5 row-cols-xl-3 row-cols-lg-2 row-cols-md-3 row-cols-2 product-list-section">
                        @foreach($articles as $article)
                        <div>
                            <div class="product-box-3 h-100 wow fadeInUp">
                                <div class="product-header">
                                    <div class="product-image">
                                        <a href="{{ route('article' , $article->id) }}">
                                          <img src="{{ asset('storage/' . $article->image_article) }}" class='img-fluid blur-up lazyload' alt='{{ $article->designation_article }}' />
                                        </a>
                                    </div>
                                </div>
                                <div class="product-footer">
                                    <div class="product-detail">
                                    <h5 class="price"><span class="theme-color">{{ $article->prix_article - ( $article->prix_article * $article->taux_remise ) }} DH</span> <del>{{ $article->prix_article }} DH</del>
                                        </h5>
                                        <span class="span-name">{{ $article->designation_article }}</span>
                                        <a href="product-left-thumbnail.html">
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
    <!-- Shop Section End -->

    <!-- Quick View Modal Box Start -->

    <!-- Quick View Modal Box End -->





    <!-- Footer Section Start -->
    
    <!-- Footer Section End -->


@endsection