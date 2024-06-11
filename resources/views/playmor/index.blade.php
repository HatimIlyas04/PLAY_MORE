@extends('playmor.header')

@section('content')

    <!-- Header Start -->
    
    <!-- Header End -->

    <!-- mobile fix menu start -->
    <div class="mobile-menu d-md-none d-block mobile-cart">
        <ul>
            <li class="active">
                <a href="{{ route('home') }}">
                    <i class="iconly-Home icli"></i>
                    <span>Acceuil</span>
                </a>
            </li>

            <li class="mobile-category">
                <a href="{{ url("javascript:void(0)") }}">
                    <i class="iconly-Category icli js-link"></i>
                    <span>Category</span>
                </a>
            </li>

            <li>
                <a href="{{ url("search.html") }}" class="search-box">
                    <i class="iconly-Search icli"></i>
                    <span>Search</span>
                </a>
            </li>

            <li>
                <a href="{{ url("wishlist.html") }}" class="notifi-wishlist">
                    <i class="iconly-Heart icli"></i>
                    <span>My Wish</span>
                </a>
            </li>

            <li>
                <a href="{{ url("cart.html") }}">
                    <i class="iconly-Bag-2 icli fly-cate"></i>
                    <span>Cart</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- mobile fix menu end -->

    <!-- Home Section Start -->
    <section class="home-section-2 home-section-bg pt-0 overflow-hidden">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-12">
                    <div class="slider-animate">
                        <div>
                            <div class="home-contain rounded-0 p-0">
                                <img src="{{ asset("/assets/images/grocery/banner/1.jpg") }}" class="img-fluid bg-img blur-up lazyload" alt="">
                                <div class="home-detail home-big-space p-center-left home-overlay position-relative">
                                    <div class="container-fluid-lg">
                                        <div>
                                            <h1 class="heding-2">Premium Quality Gaming Product</h1>
                                            <h2 class="content-2">Gaming shopping made Easy</h2>
                                            <h5 class="text-content">Top Quality Gaming accessories are available here!
                                            </h5>
                                            <button class="btn theme-bg-color btn-md text-white fw-bold mt-md-4 mt-2 mend-auto" onclick="location.href = '{{ route('showAllProducts') }}';">Shop Now <i class="fa-solid fa-arrow-right icon"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Home Section End -->

    <!-- Banner Section Start -->
    <!-- <section class="banner-section banner-small ratio_65">
        <div class="container-fluid-lg">
            <div class="slider-4-banner no-arrow slick-height">
                <div>
                    <div class=" banner-contain-3 hover-effect">
                        <a href="{{ url("javascript:void(0)") }}">
                            <img src="assets/images/grocery/banner/2.jpg" class="bg-img blur-up lazyload" alt="">
                        </a>
                        <div class="banner-detail p-center-left w-75 banner-p-sm mend-auto">
                            <div>
                                <h5 class="fw-light mb-2">50% Discount</h5>
                                <h4 class="fw-bold mb-0">Summer Ice Cream</h4>
                                <button onclick="location.href = 'shop-left-sidebar.html';" class="btn shop-now-button mt-3 ps-0 mend-auto theme-color fw-bold">Shop Now <i class="fa-solid fa-chevron-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="banner-contain-3 hover-effect">
                        <a href="{{ url("javascript:void(0)") }}">
                            <img src="assets/images/grocery/banner/3.jpg" class="img-fluid bg-img" alt="">
                        </a>
                        <div class="banner-detail p-center-left w-75 banner-p-sm mend-auto">
                            <div>
                                <h5 class="fw-light mb-2">Today Special</h5>
                                <h4 class="fw-bold mb-0">Fruits Juice Series</h4>
                                <button onclick="location.href = 'shop-left-sidebar.html';" class="btn shop-now-button mt-3 ps-0 mend-auto theme-color fw-bold">Shop Now <i class="fa-solid fa-chevron-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="banner-contain-3 hover-effect">
                        <a href="{{ url("javascript:void(0)") }}">
                            <img src="assets/images/grocery/banner/4.jpg" class="blur-up lazyload bg-img" alt="">
                        </a>
                        <div class="banner-detail p-center-left w-75 banner-p-sm mend-auto">
                            <div>
                                <h5 class="fw-light mb-2">Combo Offer</h5>
                                <h4 class="fw-bold mb-0">Eat Healthy Be Healthy </h4>
                                <button onclick="location.href = 'shop-left-sidebar.html';" class="btn shop-now-button mt-3 ps-0 mend-auto theme-color fw-bold">Shop Now <i class="fa-solid fa-chevron-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="banner-contain-3 hover-effect">
                        <a href="{{ url("javascript:void(0)") }}">
                            <img src="assets/images/grocery/banner/5.jpg" class="blur-up lazyload bg-img" alt="">
                        </a>
                        <div class="banner-detail p-center-left w-75 banner-p-sm mend-auto">
                            <div>
                                <h5 class="fw-light mb-2">Amazing Deals</h5>
                                <h4 class="fw-bold mb-0">As Fresh As Fruit </h4>
                                <button onclick="location.href = 'shop-left-sidebar.html';" class="btn shop-now-button mt-3 ps-0 mend-auto theme-color fw-bold">Shop Now <i class="fa-solid fa-chevron-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Banner Section End -->

    <!-- Category Section Start -->
    <section class="category-section-3" id="category-section"> 
        <div class="container-fluid-lg">
            <div class="title">
                <h2>Consulter nos catégories</h2>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="category-slider-1 arrow-slider wow fadeInUp">
                        @foreach($categories as $categorie)
                        <div>
                            <div class="category-box-list">
                                <a href="{{ route('categories.showproducts' , $categorie->id) }}" class="category-name">
                                    <h4>{{ $categorie->nom_categorie }}</h4>
                                    <h6>{{ count($categorie->articles) }} items</h6>
                                </a>
                                <div class="category-box-view">
                                    <a href="{{ route('categories.showproducts' , $categorie->id) }}">
                                        <img src="{{ asset('storage/' . $categorie->image_categorie) }}" class="" width="120px" height="120px" alt="">
                                    </a>
                                    <form action="{{ route('categories.showproducts' , $categorie->id) }}" method="get">
                                        @csrf
                                        <button onclick="" class="btn shop-button">
                                            <span>Consulter</span>
                                            <i class="fas fa-angle-right"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- <div>
                            <div class="category-box-list">
                                <a href="{{ url("shop-left-sidebar.html") }}" class="category-name">
                                    <h4>LAPTOPS</h4>
                                    <h6>20 items</h6>
                                </a>
                                <div class="category-box-view">
                                    <a href="{{ url("shop-left-sidebar.html") }}">
                                        <img src="{{ asset("/assets/images/grocery/category/2.png") }}" class="img-fluid blur-up lazyload" alt="">
                                    </a>
                                    <button onclick="location.href = 'shop-left-sidebar.html';" class="btn shop-button">
                                        <span>Shop Now</span>
                                        <i class="fas fa-angle-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="category-box-list">
                                <a href="{{ url("shop-left-sidebar.html") }}" class="category-name">
                                    <h4>COMPOSANT PC</h4>
                                    <h6>14 items</h6>
                                </a>
                                <div class="category-box-view">
                                    <a href="{{ url("shop-left-sidebar.html") }}">
                                        <img src="{{ asset("/assets/images/grocery/category/3.png") }}" class="img-fluid blur-up lazyload" alt="">
                                    </a>
                                    <button onclick="location.href = 'shop-left-sidebar.html';" class="btn shop-button">
                                        <span>Shop Now</span>
                                        <i class="fas fa-angle-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="category-box-list">
                                <a href="{{ url("shop-left-sidebar.html") }}" class="category-name">
                                    <h4>PERIPHIRIQUES</h4>
                                    <h6>43 items</h6>
                                </a>
                                <div class="category-box-view">
                                    <a href="{{ url("shop-left-sidebar.html") }}">
                                        <img src="{{ asset("/assets/images/grocery/category/4.png") }}" class="img-fluid blur-up lazyload" alt="">
                                    </a>
                                    <button onclick="location.href = 'shop-left-sidebar.html';" class="btn shop-button">
                                        <span>Shop Now</span>
                                        <i class="fas fa-angle-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="category-box-list">
                                <a href="{{ url("shop-left-sidebar.html") }}" class="category-name">
                                    <h4>ACCESSOIRES</h4>
                                    <h6>23 items</h6><br>
                                </a>
                                <div class="category-box-view">
                                    <a href="{{ url("shop-left-sidebar.html") }}">
                                        <img src="{{ asset("/assets/images/grocery/category/5.png") }}" class="img-fluid blur-up lazyload" alt="">
                                    </a>
                                    <button onclick="location.href = 'shop-left-sidebar.html';" class="btn shop-button">
                                        <span>Shop Now</span>
                                        <i class="fas fa-angle-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="category-box-list">
                                <a href="{{ url("shop-left-sidebar.html") }}" class="category-name">
                                    <h4>STREAMING</h4>
                                    <h6>54 items</h6>
                                </a>
                                <div class="category-box-view">
                                    <a href="{{ url("shop-left-sidebar.html") }}">
                                        <img src="{{ asset("/assets/images/grocery/category/6.png") }}" class="img-fluid blur-up lazyload" alt="">
                                    </a>
                                    <button onclick="location.href = 'shop-left-sidebar.html';" class="btn shop-button">
                                        <span>Shop Now</span>
                                        <i class="fas fa-angle-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="category-box-list">
                                <a href="{{ url("shop-left-sidebar.html") }}" class="category-name">
                                    <h4>NANOLEAF</h4>
                                    <h6>32 items</h6>
                                </a>
                                <div class="category-box-view">
                                    <a href="{{ url("shop-left-sidebar.html") }}">
                                        <img src="{{ asset("/assets/images/grocery/category/7.png") }}" class="img-fluid blur-up lazyload" alt="">
                                    </a>
                                    <button onclick="location.href = 'shop-left-sidebar.html';" class="btn shop-button">
                                        <span>Shop Now</span>
                                        <i class="fas fa-angle-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="category-box-list">
                                <a href="{{ url("shop-left-sidebar.html") }}" class="category-name">
                                    <h4>MOBILIER</h4>
                                    <h6>29 items</h6>
                                </a>
                                <div class="category-box-view">
                                    <a href="{{ url("shop-left-sidebar.html") }}">
                                        <img src="{{ asset("/assets/images/grocery/category/8.png") }}" class="img-fluid blur-up lazyload" alt="">
                                    </a>
                                    <button onclick="location.href = 'shop-left-sidebar.html';" class="btn shop-button">
                                        <span>Shop Now</span>
                                        <i class="fas fa-angle-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="category-box-list">
                                <a href="{{ url("shop-left-sidebar.html") }}" class="category-name">
                                    <h4>ARCADES</h4>
                                    <h6>25 items</h6>
                                </a>
                                <div class="category-box-view">
                                    <a href="{{ url("shop-left-sidebar.html") }}">
                                        <img src="{{ asset("/assets/images/grocery/category/9.png") }}" class="img-fluid blur-up lazyload" alt="">
                                    </a>
                                    <button onclick="location.href = 'shop-left-sidebar.html';" class="btn shop-button">
                                        <span>Shop Now</span>
                                        <i class="fas fa-angle-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Category Section End -->

    <!-- Product Fruit & Vegetables Section Start -->
    <section class="product-section-3">
        <div class="container-fluid-lg">
            <div class="title">
                <h2>New Products</h2>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="slider-7_1 arrow-slider img-slider">
                        @foreach ($produits as $produit)
                        <div>
                            <div class="product-box-4 wow fadeInUp">
                                <div class="product-image product-image-2">
                                    <a href="{{ route('article' , $produit->id) }}">
                                        <img src="{{ asset('storage/' . $produit->image_article) }}" class="img-fluid blur-up lazyload" alt="">
                                    </a>
                                </div>

                                <div class="product-detail">
                                    <a href="{{ route('article' , $produit->id) }}">
                                        <h5 class="name text-title"><a href="{{route('article' , $produit->id)}}">{{$produit->designation_article}} </a></h5>
                                    </a>
                                    <h5 class="price theme-color"><span class="theme-color">{{ $produit->prix_article - ( $produit->prix_article * $produit->taux_remise ) }} DH</span> <del>{{ $produit->prix_article }} DH</del>
                                    </h5>
                                </div>
                            </div>
                        </div>    
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Fruit & Vegetables Section End -->

    <!-- Banner Section Start -->
    <section class="bank-section overflow-hidden">
        <div class="container-fluid-lg">
            <div class="title">
                <h2>Bank & Wallet Offers</h2>
            </div>
            <div class="slider-bank-3 arrow-slider slick-height">
                <div>
                    <div class="bank-offer">
                        <div class="bank-header">
                            <div class="bank-left w-100">
                                <div class="bank-image">
                                    <img src="{{ asset("/assets/images/grocery/bank/name/1.png") }}" class="img-fluid" alt="">
                                </div>
                                <div class="bank-name">
                                    <h2>GET 10% OFF</h2>
                                    <h5 class="discount text-content">When you spend $20</h5>
                                    <h5 class="valid text-content">Valid for 30 days</h5>
                                </div>
                            </div>

                            <div class="bank-right w-100">
                                <img src="{{ asset("/assets/images/grocery/bank/price/1.svg") }}" class="img-fluid" alt="">
                            </div>
                        </div>

                        <div class="bank-footer bank-footer-2">
                            <h4>Code :
                                <input value="SUMMER2023" id="textToCopy">
                            </h4>
                            <button class="bank-coupon btn" id="copyButton" onclick="copyText()">Copy Code</button>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="bank-offer">
                        <div class="bank-header">
                            <div class="bank-left w-100">
                                <div class="bank-image">
                                    <img src="{{ asset("/assets/images/grocery/bank/name/2.png") }}" class="img-fluid" alt="">
                                </div>
                                <div class="bank-name">
                                    <h2 class="bank-offer-2">GET 50% OFF</h2>
                                    <h5 class="discount text-content">When you spend $20</h5>
                                    <h5 class="valid text-content">Valid for 7 days</h5>
                                </div>
                            </div>

                            <div class="bank-right w-100">
                                <img src="{{ asset("/assets/images/grocery/bank/price/2.svg") }}" class="img-fluid" alt="">
                            </div>
                        </div>

                        <div class="bank-footer bank-footer-1">
                            <h4>Code :
                                <input value="SALE50" id="textToCopy2">
                            </h4>
                            <button class="bank-coupon btn" id="copyButton" onclick="copyText2()">Copy Code</button>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="bank-offer">
                        <div class="bank-header">
                            <div class="bank-left w-100">
                                <div class="bank-image">
                                    <img src="{{ asset("/assets/images/grocery/bank/name/3.png") }}" class="img-fluid" alt="">
                                </div>
                                <div class="bank-name">
                                    <h2 class="bank-offer-3">GET 50% OFF</h2>
                                    <h5 class="discount text-content">When you spend $20</h5>
                                    <h5 class="valid text-content">Valid for 3 days</h5>
                                </div>
                            </div>

                            <div class="bank-right w-100">
                                <img src="{{ asset("/assets/images/grocery/bank/price/3.svg") }}" class="img-fluid" alt="">
                            </div>
                        </div>

                        <div class="bank-footer bank-footer-2">
                            <h4>Code :
                                <input value="FREESHIPPING" id="textToCopy3">
                            </h4>
                            <button class="bank-coupon btn" id="copyButton" onclick="copyText3()">Copy Code</button>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="bank-offer">
                        <div class="bank-header">
                            <div class="bank-left w-100">
                                <div class="bank-image">
                                    <img src="{{ asset("/assets/images/grocery/bank/name/1.png") }}" class="img-fluid" alt="">
                                </div>
                                <div class="bank-name">
                                    <h2>GET 15% OFF</h2>
                                    <h5 class="discount text-content">When you spend $20</h5>
                                    <h5 class="valid text-content">Valid for 10 days</h5>
                                </div>
                            </div>
                        </div>

                        <div class="bank-footer bank-footer-1">
                            <h4>Code :
                                <input value="WELCOME15" id="textToCopy4">
                            </h4>
                            <button class="bank-coupon btn" id="copyButton" onclick="copyText4()">Copy Code</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section End -->

    <!-- Deal Section Start -->
    <section class="product-section product-section-3">
        <div class="container-fluid-lg">
            <div class="title">
                <h2>Top Selling Items</h2>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="slider-7_1 arrow-slider img-slider">
                        @foreach ($topSellingProducts as $produit)
                        <div>
                            <div class="product-box-4 wow fadeInUp">
                                <div class="product-image product-image-2">
                                    <a href="{{ route('article' , $produit->id) }}">
                                        <img src="{{ asset('storage/' . $produit->image_article) }}" class="img-fluid blur-up lazyload" alt="">
                                    </a>
                                </div>

                                <div class="product-detail">
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <h5 class="name text-title"><a href="{{route('article' , $produit->id)}}">{{$produit->designation_article}} </a></h5>
                                    </a>
                                    <h5 class="price theme-color"><span class="theme-color">{{ $produit->prix_article - ( $produit->prix_article * $produit->taux_remise ) }} DH</span> <del>{{ $produit->prix_article }} DH</del>
                                    </h5>
                                </div>
                            </div>
                        </div>    
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Deal Section End -->

    <!-- Offer Section Start -->
    <section class="offer-section">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="offer-box hover-effect">
                        <h2><span>FREE GIFT ANY ORDER</span> 70% oFF</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Offer Section End -->

    <!-- Product Breakfast & Dairy Section Start -->
    <!-- <section class="product-section-4">
        <div class="container-fluid-lg">
            <div class="title">
                <h2>Breakfast & Dairy</h2>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="slider-7_1 arrow-slider img-slider">
                        <div>
                            <div class="product-box-4 wow fadeInUp">
                                <div class="product-image product-image-2">
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <img src="assets/images/grocery/product/breakfast/1.png" class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="{{ url("javascript:void(0)") }}" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="{{ url("javascript:void(0)") }}" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="{{ url("compare.html") }}">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <h5 class="name text-title">Bell pepper</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.05s">
                                <div class="product-image product-image-2">
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <img src="assets/images/grocery/product/breakfast/2.png" class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="{{ url("javascript:void(0)") }}" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="{{ url("javascript:void(0)") }}" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="{{ url("compare.html") }}">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <h5 class="name text-title">Grassmilk</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="product-image product-image-2">
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <img src="assets/images/grocery/product/breakfast/3.png" class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="{{ url("javascript:void(0)") }}" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="{{ url("javascript:void(0)") }}" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="{{ url("compare.html") }}">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <h5 class="name text-title">Kellogg's choco </h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.15s">
                                <div class="product-image product-image-2">
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <img src="assets/images/grocery/product/breakfast/4.png" class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="{{ url("javascript:void(0)") }}" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="{{ url("javascript:void(0)") }}" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="{{ url("compare.html") }}">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <h5 class="name text-title">Paneer</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.2s">
                                <div class="product-image product-image-2">
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <img src="assets/images/grocery/product/breakfast/5.png" class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="{{ url("javascript:void(0)") }}" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="{{ url("javascript:void(0)") }}" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="{{ url("compare.html") }}">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <h5 class="name text-title">Bournvita</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.25s">
                                <div class="product-image product-image-2">
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <img src="assets/images/grocery/product/breakfast/6.png" class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="{{ url("javascript:void(0)") }}" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="{{ url("javascript:void(0)") }}" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="{{ url("compare.html") }}">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <h5 class="name text-title">Tulsi</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="product-image product-image-2">
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <img src="assets/images/grocery/product/breakfast/7.png" class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="{{ url("javascript:void(0)") }}" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="{{ url("javascript:void(0)") }}" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="{{ url("compare.html") }}">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <h5 class="name text-title">Kellogg's Muesli</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.35s">
                                <div class="product-image product-image-2">
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <img src="assets/images/grocery/product/breakfast/8.png" class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="{{ url("javascript:void(0)") }}" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="{{ url("javascript:void(0)") }}" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="{{ url("compare.html") }}">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <h5 class="name text-title">Low Fat Milk</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Product Breakfast & Dairy Section End -->

    <!-- Product Chemist Store Section Start -->
    <!-- <section class="product-section">
        <div class="container-fluid-lg">
            <div class="title">
                <h2>Chemist Store</h2>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="slider-7_1 arrow-slider img-slider">
                        <div>
                            <div class="product-box-4 wow fadeInUp">
                                <div class="product-image product-image-2">
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <img src="assets/images/grocery/product/chemist/1.png" class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="{{ url("javascript:void(0)") }}" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="{{ url("javascript:void(0)") }}" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="{{ url("compare.html") }}">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <h5 class="name text-title">Hand Sanitizer</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.05s">
                                <div class="product-image product-image-2">
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <img src="assets/images/grocery/product/chemist/2.png" class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="{{ url("javascript:void(0)") }}" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="{{ url("javascript:void(0)") }}" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="{{ url("compare.html") }}">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <h5 class="name text-title">Cotton Balls</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="product-image product-image-2">
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <img src="assets/images/grocery/product/chemist/3.png" class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="{{ url("javascript:void(0)") }}" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="{{ url("javascript:void(0)") }}" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="{{ url("compare.html") }}">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <h5 class="name text-title">Vicks VapoRub</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.15s">
                                <div class="product-image product-image-2">
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <img src="assets/images/grocery/product/chemist/4.png" class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="{{ url("javascript:void(0)") }}" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="{{ url("javascript:void(0)") }}" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="{{ url("compare.html") }}">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <h5 class="name text-title">Dettol Antiseptic</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.2s">
                                <div class="product-image product-image-2">
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <img src="assets/images/grocery/product/chemist/5.png" class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="{{ url("javascript:void(0)") }}" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="{{ url("javascript:void(0)") }}" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="{{ url("compare.html") }}">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <h5 class="name text-title">Ear Buds</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.25s">
                                <div class="product-image product-image-2">
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <img src="assets/images/grocery/product/chemist/6.png" class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="{{ url("javascript:void(0)") }}" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="{{ url("javascript:void(0)") }}" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="{{ url("compare.html") }}">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <h5 class="name text-title">Eno Lemon</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="product-image product-image-2">
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <img src="assets/images/grocery/product/chemist/7.png" class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="{{ url("javascript:void(0)") }}" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="{{ url("javascript:void(0)") }}" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="{{ url("compare.html") }}">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <h5 class="name text-title">Savlon Antiseptic</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.35s">
                                <div class="product-image product-image-2">
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <img src="assets/images/grocery/product/chemist/8.png" class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="{{ url("javascript:void(0)") }}" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="{{ url("javascript:void(0)") }}" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="{{ url("compare.html") }}">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <h5 class="name text-title">Strawberry</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Product Chemist Store Section End -->

    <!-- Banner Section Start -->
    <!-- <section class="banner-section">
        <div class="container-fluid-lg">
            <div class="row gy-lg-0 gy-3">
                <div class="col-lg-6">
                    <div class="banner-contain-3 hover-effect">
                        <div>
                            <img src="assets/images/grocery/banner/6.jpg" class="bg-img blur-up lazyload" alt="">
                            <div class="banner-detail banner-detail-2 text-dark p-center-left w-75 banner-p-sm position-relative mend-auto">
                                <div>
                                    <h2 class="text-great fw-normal text-danger">50% special offer</h2>
                                    <h3 class="mb-1 fw-bold">Chocolate Shake Back in <br class="d-sm-block d-none">
                                        Stock</h3>
                                    <h4 class="text-content">Offer Of the Week!</h4>
                                    <button class="btn btn-md theme-bg-color text-white mt-sm-3 mt-1 fw-bold mend-auto" onclick="location.href = 'shop-left-sidebar.html';">Shop Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="banner-contain-3 hover-effect">
                        <img src="assets/images/grocery/banner/7.jpg" class="bg-img blur-up lazyload" alt="">
                        <div class="banner-detail banner-detail-2 text-dark p-center-left w-75 banner-p-sm position-relative mend-auto">
                            <div>
                                <h2 class="text-great fw-normal text-danger">Special hot sale</h2>
                                <h3 class="mb-1 fw-bold">Healthy & Fresh Cool <br> Breakfast</h3>
                                <h4 class="text-content">Choose a Nutritious & Healthy Breakfast.</h4>
                                <button class="btn btn-md theme-bg-color text-white mt-sm-3 mt-1 fw-bold mend-auto" onclick="location.href = 'shop-left-sidebar.html';">Shop Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Banner Section End -->

    <!-- Product Drinks Section Start -->
    <!-- <section class="product-section">
        <div class="container-fluid-lg">
            <div class="title">
                <h2>Drinks</h2>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="slider-7_1 arrow-slider img-slider">
                        <div>
                            <div class="product-box-4 wow fadeInUp">
                                <div class="product-image product-image-2">
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <img src="assets/images/grocery/product/drink/1.png" class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="{{ url("javascript:void(0)") }}" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="{{ url("javascript:void(0)") }}" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="{{ url("compare.html") }}">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <h5 class="name text-title">Monster</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.05s">
                                <div class="product-image product-image-2">
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <img src="assets/images/grocery/product/drink/2.png" class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="{{ url("javascript:void(0)") }}" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="{{ url("javascript:void(0)") }}" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="{{ url("compare.html") }}">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <h5 class="name text-title">Red Bull</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="product-image product-image-2">
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <img src="assets/images/grocery/product/drink/3.png" class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="{{ url("javascript:void(0)") }}" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="{{ url("javascript:void(0)") }}" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="{{ url("compare.html") }}">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <h5 class="name text-title">Ginger ale</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.15s">
                                <div class="product-image product-image-2">
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <img src="assets/images/grocery/product/drink/4.png" class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="{{ url("javascript:void(0)") }}" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="{{ url("javascript:void(0)") }}" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="{{ url("compare.html") }}">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <h5 class="name text-title">Spike</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.2s">
                                <div class="product-image product-image-2">
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <img src="assets/images/grocery/product/drink/5.png" class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="{{ url("javascript:void(0)") }}" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="{{ url("javascript:void(0)") }}" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="{{ url("compare.html") }}">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <h5 class="name text-title">Mati Sparklng</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.25s">
                                <div class="product-image product-image-2">
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <img src="assets/images/grocery/product/drink/6.png" class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="{{ url("javascript:void(0)") }}" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="{{ url("javascript:void(0)") }}" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="{{ url("compare.html") }}">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <h5 class="name text-title">Fanta</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="product-image product-image-2">
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <img src="assets/images/grocery/product/drink/7.png" class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="{{ url("javascript:void(0)") }}" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="{{ url("javascript:void(0)") }}" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="{{ url("compare.html") }}">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <h5 class="name text-title">Coca Cola</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.35s">
                                <div class="product-image product-image-2">
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <img src="assets/images/grocery/product/drink/8.png" class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="{{ url("javascript:void(0)") }}" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="{{ url("javascript:void(0)") }}" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="{{ url("compare.html") }}">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <h5 class="name text-title">Sprite</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Product Drinks Section End -->

    <!-- Product Grocery & Staples Section Start -->
    <!-- <section class="product-section">
        <div class="container-fluid-lg">
            <div class="title">
                <h2>Grocery & Staples</h2>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="slider-7_1 arrow-slider img-slider">
                        <div>
                            <div class="product-box-4 wow fadeInUp">
                                <div class="product-image product-image-2">
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <img src="assets/images/grocery/product/grocery/1.png" class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="{{ url("javascript:void(0)") }}" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="{{ url("javascript:void(0)") }}" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="{{ url("compare.html") }}">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <h5 class="name text-title">Chakki Atta</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.05s">
                                <div class="product-image product-image-2">
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <img src="assets/images/grocery/product/grocery/2.png" class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="{{ url("javascript:void(0)") }}" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="{{ url("javascript:void(0)") }}" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="{{ url("compare.html") }}">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <h5 class="name text-title">Fresh Rice</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="product-image product-image-2">
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <img src="assets/images/grocery/product/grocery/3.png" class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="{{ url("javascript:void(0)") }}" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="{{ url("javascript:void(0)") }}" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="{{ url("compare.html") }}">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <h5 class="name text-title">Saffola oli</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.15s">
                                <div class="product-image product-image-2">
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <img src="assets/images/grocery/product/grocery/4.png" class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="{{ url("javascript:void(0)") }}" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="{{ url("javascript:void(0)") }}" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="{{ url("compare.html") }}">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <h5 class="name text-title">Cow Ghee</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.2s">
                                <div class="product-image product-image-2">
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <img src="assets/images/grocery/product/grocery/5.png" class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="{{ url("javascript:void(0)") }}" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="{{ url("javascript:void(0)") }}" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="{{ url("compare.html") }}">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <h5 class="name text-title">Icing Sugar</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.25s">
                                <div class="product-image product-image-2">
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <img src="assets/images/grocery/product/grocery/6.png" class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="{{ url("javascript:void(0)") }}" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="{{ url("javascript:void(0)") }}" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="{{ url("compare.html") }}">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <h5 class="name text-title">Roasted Rava</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="product-image product-image-2">
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <img src="assets/images/grocery/product/grocery/7.png" class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="{{ url("javascript:void(0)") }}" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="{{ url("javascript:void(0)") }}" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="{{ url("compare.html") }}">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <h5 class="name text-title">Maida</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.35s">
                                <div class="product-image product-image-2">
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <img src="assets/images/grocery/product/grocery/8.png" class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="{{ url("javascript:void(0)") }}" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="{{ url("javascript:void(0)") }}" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="{{ url("compare.html") }}">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <h5 class="name text-title">kabuli Chana</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Product Grocery & Staples Section End -->

    <!-- Banner Section Start -->
    <section class="banner-section">
        <div class="container-fluid-lg">
            <div class="row gy-lg-0 gy-3">
                <div class="col-lg-8">
                    <div class="banner-contain-3 h-100 pt-sm-5 hover-effect">
                        <img src="{{ asset("/assets/images/grocery/banner/8.png") }}" class="bg-img blur-up lazyload" alt="">
                        <div class="banner-detail banner-p-sm p-center-right position-relative banner-minus-position banner-detail-deliver">
                            <div>
                                <h3 class="fw-bold banner-contain">Safe Delivery to the door</h3>
                                <h4 class="mb-sm-3 mb-2 delivery-contain">Make money on your terms. Anytime and anyhow.
                                </h4>
                                <ul class="banner-list">
                                    <li>
                                        <div class="delivery-box">
                                            <div class="check-icon">
                                                <i class="fa-solid fa-check"></i>
                                            </div>

                                            <div class="check-contain">
                                                <h5>Get live order tracking</h5>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="delivery-box">
                                            <div class="check-icon">
                                                <i class="fa-solid fa-check"></i>
                                            </div>

                                            <div class="check-contain">
                                                <h5>Get latest feature updates</h5>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="banner-contain-3 pt-lg-4 h-100 hover-effect">
                        <a>
                            <img src="{{ asset("/assets/images/grocery/banner/9.jpg") }}" class="img-fluid social-image blur-up lazyload w-100" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section End -->

    <!-- Product Personal Care Section Start -->
    <!-- <section class="product-section">
        <div class="container-fluid-lg">
            <div class="title">
                <h2>Personal Care</h2>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="slider-7_1 arrow-slider img-slider">
                        <div>
                            <div class="product-box-4 wow fadeInUp">
                                <div class="product-image product-image-2">
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <img src="assets/images/grocery/product/personal-care/1.png" class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="{{ url("javascript:void(0)") }}" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="{{ url("javascript:void(0)") }}" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="{{ url("compare.html") }}">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <h5 class="name text-title">Dove men care</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.05s">
                                <div class="product-image product-image-2">
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <img src="assets/images/grocery/product/personal-care/2.png" class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="{{ url("javascript:void(0)") }}" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="{{ url("javascript:void(0)") }}" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="{{ url("compare.html") }}">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <h5 class="name text-title">Santoor</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="product-image product-image-2">
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <img src="assets/images/grocery/product/personal-care/3.png" class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="{{ url("javascript:void(0)") }}" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="{{ url("javascript:void(0)") }}" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="{{ url("compare.html") }}">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <h5 class="name text-title">Hand Wash</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.15s">
                                <div class="product-image product-image-2">
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <img src="assets/images/grocery/product/personal-care/4.png" class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="{{ url("javascript:void(0)") }}" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="{{ url("javascript:void(0)") }}" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="{{ url("compare.html") }}">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <h5 class="name text-title">Whisper</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.2s">
                                <div class="product-image product-image-2">
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <img src="assets/images/grocery/product/personal-care/5.png" class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="{{ url("javascript:void(0)") }}" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="{{ url("javascript:void(0)") }}" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="{{ url("compare.html") }}">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <h5 class="name text-title">Whisper</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.25s">
                                <div class="product-image product-image-2">
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <img src="assets/images/grocery/product/personal-care/6.png" class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="{{ url("javascript:void(0)") }}" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="{{ url("javascript:void(0)") }}" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="{{ url("compare.html") }}">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <h5 class="name text-title">Hair Color</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="product-image product-image-2">
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <img src="assets/images/grocery/product/personal-care/7.png" class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="{{ url("javascript:void(0)") }}" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="{{ url("javascript:void(0)") }}" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="{{ url("compare.html") }}">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <h5 class="name text-title">Face Wash</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.35s">
                                <div class="product-image product-image-2">
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <img src="assets/images/grocery/product/personal-care/8.png" class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="{{ url("javascript:void(0)") }}" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="{{ url("javascript:void(0)") }}" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="{{ url("compare.html") }}">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <h5 class="name text-title">Hair Oil</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Product Personal Care Section End -->

    <!-- Product Kitchen & Dining Needs Section Start -->
    <!-- <section class="product-section">
        <div class="container-fluid-lg">
            <div class="title">
                <h2>Kitchen & Dining Needs</h2>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="slider-7_1 arrow-slider img-slider">
                        <div>
                            <div class="product-box-4 wow fadeInUp">
                                <div class="product-image product-image-2">
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <img src="assets/images/grocery/product/kichen/1.png" class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="{{ url("javascript:void(0)") }}" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="{{ url("javascript:void(0)") }}" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="{{ url("compare.html") }}">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <h5 class="name text-title">Pressure Cooker</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.05s">
                                <div class="product-image product-image-2">
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <img src="assets/images/grocery/product/kichen/2.png" class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="{{ url("javascript:void(0)") }}" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="{{ url("javascript:void(0)") }}" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="{{ url("compare.html") }}">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <h5 class="name text-title">Cup</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="product-image product-image-2">
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <img src="assets/images/grocery/product/kichen/3.png" class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="{{ url("javascript:void(0)") }}" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="{{ url("javascript:void(0)") }}" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="{{ url("compare.html") }}">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <h5 class="name text-title">Blender</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.15s">
                                <div class="product-image product-image-2">
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <img src="assets/images/grocery/product/kichen/4.png" class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="{{ url("javascript:void(0)") }}" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="{{ url("javascript:void(0)") }}" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="{{ url("compare.html") }}">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <h5 class="name text-title">Cutting Board</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.2s">
                                <div class="product-image product-image-2">
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <img src="assets/images/grocery/product/kichen/5.png" class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="{{ url("javascript:void(0)") }}" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="{{ url("javascript:void(0)") }}" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="{{ url("compare.html") }}">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <h5 class="name text-title">Colander</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.25s">
                                <div class="product-image product-image-2">
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <img src="assets/images/grocery/product/kichen/6.png" class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="{{ url("javascript:void(0)") }}" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="{{ url("javascript:void(0)") }}" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="{{ url("compare.html") }}">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <h5 class="name text-title">Utensils</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="product-image product-image-2">
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <img src="assets/images/grocery/product/kichen/7.png" class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="{{ url("javascript:void(0)") }}" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="{{ url("javascript:void(0)") }}" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="{{ url("compare.html") }}">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <h5 class="name text-title">Jug</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.35s">
                                <div class="product-image product-image-2">
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <img src="assets/images/grocery/product/kichen/8.png" class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="{{ url("javascript:void(0)") }}" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="{{ url("javascript:void(0)") }}" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="{{ url("compare.html") }}">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="{{ url("product-left-thumbnail.html") }}">
                                        <h5 class="name text-title">Microwave</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Product Kitchen & Dining Needs Section End -->

    <!-- Blog Section Start -->
    <section class="blog-section">
        <div class="container-fluid-lg">
            <div class="title title-4">
                <h2>Blog</h2>
            </div>

            <div class="slider-3-blog arrow-slider slick-height">
                <div>
                    <div class=" blog-box ratio_45">
                        <div class="blog-box-image">
                            <a>
                                <img src="{{ asset("/assets/images/grocery/blog/1.jpg") }}" class="blur-up lazyload bg-img" alt="">
                            </a>
                        </div>

                        <div class="blog-detail">
                            <label>Fifa 23 Competition</label>
                            <a>
                                <h3>Best Fifa Tournament ...<h3>
                            </a>
                            <h5 class="text-content">Casablanca - 18 Juillet, 2023</h5>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="blog-box ratio_45">
                        <div class="blog-box-image">
                            <a >
                                <img src="{{ asset("/assets/images/grocery/blog/2.jpg") }}" class="blur-up lazyload bg-img" alt="">
                            </a>
                        </div>

                        <div class="blog-detail">
                            <label>Pubg Mobile</label>
                            <a >
                                <h3>Best Pubg Mobile Tournament ...</h3>
                            </a>
                            <h5 class="text-content">Anil Viradiya - MARCH 9, 2022</h5>
                        </div>
                    </div>
                </div>

                <div>
                    <div class=" blog-box ratio_45">
                        <div class="blog-box-image">
                            <a>
                                <img src="{{ asset("/assets/images/grocery/blog/1.jpg") }}" class="blur-up lazyload bg-img" alt="">
                            </a>
                        </div>

                        <div class="blog-detail">
                            <label>Fifa 23 Competition</label>
                            <a>
                                <h3>Best Fifa Tournament ...<h3>
                            </a>
                            <h5 class="text-content">Casablanca - 18 Juillet, 2023</h5>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="blog-box ratio_45">
                        <div class="blog-box-image">
                            <a >
                                <img src="{{ asset("/assets/images/grocery/blog/2.jpg") }}" class="blur-up lazyload bg-img" alt="">
                            </a>
                        </div>

                        <div class="blog-detail">
                            <label>Pubg Mobile</label>
                            <a >
                                <h3>Best Pubg Mobile Tournament ...</h3>
                            </a>
                            <h5 class="text-content">Anil Viradiya - MARCH 9, 2022</h5>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Blog Section End -->

    <!-- Service Section Start -->
    <section class="service-section section-b-space">
        <div class="container-fluid-lg">
            <div class="row g-3 row-cols-xxl-5 row-cols-lg-3 row-cols-md-2">
                <div>
                    <div class="service-contain-2">
                        <svg class="icon-width">
                            <use xlink:href="assets/svg/svg/service-icon-4.svg#shipping"></use>
                        </svg>
                        <div class="service-detail">
                            <h3>Safe Shipping</h3>
                            <h6 class="text-content">Safe Shipping world wide</h6>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="service-contain-2">
                        <svg class="icon-width">
                            <use xlink:href="assets/svg/svg/service-icon-4.svg#service"></use>
                        </svg>
                        <div class="service-detail">
                            <h3>24 x 7 Service</h3>
                            <h6 class="text-content">Online Service For 24 x 7</h6>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="service-contain-2">
                        <svg class="icon-width">
                            <use xlink:href="assets/svg/svg/service-icon-4.svg#pay"></use>
                        </svg>
                        <div class="service-detail">
                            <h3>Online Pay</h3>
                            <h6 class="text-content">Online Payment Avaible</h6>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="service-contain-2">
                        <svg class="icon-width">
                            <use xlink:href="assets/svg/svg/service-icon-4.svg#offer"></use>
                        </svg>
                        <div class="service-detail">
                            <h3>Festival Offer</h3>
                            <h6 class="text-content">Super Sale Upto 50% off</h6>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="service-contain-2">
                        <svg class="icon-width">
                            <use xlink:href="assets/svg/svg/service-icon-4.svg#return"></use>
                        </svg>
                        <div class="service-detail">
                            <h3>100% Original</h3>
                            <h6 class="text-content">100% Money Back</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service Section End -->



</html>
@endsection