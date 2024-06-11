<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Fastkart">
    <meta name="keywords" content="Fastkart">
    <meta name="author" content="Fastkart">
    <link rel="icon" href="../assets/images/logo/4.png" type="image/x-icon">
    <title>PlayMore</title>


    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="../../css2-5?family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="../../css2-6?family=Great+Vibes&display=swap" rel="stylesheet">

    <!-- bootstrap css -->
    <link id="rtl-link" rel="stylesheet" type="text/css" href="../assets/css/vendors/bootstrap.css">

    <!-- wow css -->
    <link rel="stylesheet" href="../assets/css/animate.min.css">

    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/font-awesome.css">

    <!-- feather icon css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/feather-icon.css">

    <!-- Plugin CSS file with desired skin css -->
    <link rel="stylesheet" href="../assets/css/vendors/ion.rangeSlider.min.css">

    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/slick/slick-theme.css">

    <!-- animation css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/font-style.css">

    <!-- Template css -->
    <link id="color-link" rel="stylesheet" type="text/css" href="../assets/css/style.css">
</head>

<body class="theme-color-3 dark">

    <!-- Header Start -->

    <header class="header-3">
    <div class="top-nav sticky-header sticky-header-2">
    <div class="container-fluid-lg">
        <div class="row">
        
            <div class="col-12">
                <div class="navbar-top">
                    <button class="navbar-toggler d-xl-none d-block p-0 me-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#primaryMenu">
                        <span class="navbar-toggler-icon">
                            <i class="iconly-Category icli"></i>
                        </span>
                    </button>
                    
                    <!-- Logo -->
                    <a href="{{ route('home') }}" class="web-logo nav-logo" style="color:white">
                        <!-- <img src="../assets/images/logo/4.png" width="100px" height="100px"> -->
                        PlayMore
                    </a>

                    <!-- Barre de recherche -->
                    <div class="search-full">
                        <div class="input-group">
                            <span class="input-group-text">
                                <i data-feather="search" class="font-light"></i>
                            </span>
                            <input type="text" class="form-control search-type mx-auto" placeholder="Search here..">
                            <span class="input-group-text close-search">
                                <i data-feather="x" class="font-light"></i>
                            </span>
                        </div>
                    </div>

                    <!-- Boîte de recherche -->
                    <div class="middle-box">
                        <div class="center-box text-center">
                            <div class="searchbar-box-2 input-group d-xl-flex d-none">
                                <button class="btn search-icon" type="button">
                                    <i class="iconly-Search icli"></i>
                                </button>

                                <!-- Formulaire de recherche -->
                                
                                    
                                <input type="text" class="form-control" name="element" id="elementDeRecherche" placeholder="Recherchez parmi nos milliers de produits...">
                                <button class="btn search-button" onclick="rechercherElement()" type="button">Recherche</button>
                            </div>
                        </div>
                    </div>

                    <!-- Informations de support -->
                    <div class="rightside-menu support-sidemenu">
                        <div class="support-box">
                            <div class="support-image">
                                <img src="../assets/images/icon/support.png" class="img-fluid blur-up lazyload" alt="">
                            </div>
                            <div class="support-number">
                                <h2>(+212) 5223-45678</h2>
                                <h4>Centre d'assistance 24/7</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


        @if(session('success'))
            <!-- <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close text-muted" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div> -->
            <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                </symbol>
                <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                </symbol>
                <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                </symbol>
            </svg>

            <div class="alert alert-success d-flex align-items-center alert-dismissible fade show" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                    <div>
                    {{ session('success') }}
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if($errors->any())
            <!-- <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('danger') }}
                <button type="button" class="close text-muted" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div> -->
            <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                </symbol>
                <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                </symbol>
                <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                </symbol>
            </svg>

            <div class="alert alert-danger d-flex align-items-center alert-dismissible fade show" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                    <div>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li><br>
                            @endforeach
                        </ul>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

                
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12 position-relative">
                    <div class="main-nav nav-left-align">
                        <div class="main-nav navbar navbar-expand-xl navbar-light navbar-sticky p-0">
                            <div class="offcanvas offcanvas-collapse order-xl-2" id="primaryMenu">
                                <div class="offcanvas-header navbar-shadow">
                                    <h5>Menu</h5>
                                    <button class="btn-close lead" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body">
                                    <ul class="navbar-nav">
                                        <li class="nav-item dropdown dropdown-mega">
                                            <a class="nav-link" href="{{route('home')}}" >Acceuil</a>

                                        </li>
                                        <li class="nav-item dropdown dropdown-mega">
                                            <a class="nav-link" href="{{ route('showAllProducts') }}">Nos articles</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link" href="{{ route('categories') }}">Nos catégories</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link" href="{{ route('about') }}" >About Us</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link" href="{{ route('contact') }}">Contactez-nous</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="rightside-menu">
                            <ul class="option-list-2">
                                <li>
                                    <a href="" class="header-icon search-box search-icon">
                                        <i class="iconly-Search icli"></i>
                                    </a>
                                </li>

                                

                                @php
                                    use App\Models\Panier;
                                    $elementsDuPanier = Panier::where('user_id' , Auth::id())->get();
                                
                                @endphp
                                @auth
                                    <li>
                                        <a href="{{ route('panier') }}" class="header-icon bag-icon">
                                            <small class="badge-number badge-light">{{ count($elementsDuPanier) }}</small>
                                            <i class="iconly-Bag-2 icli"></i>
                                        </a>
                                    </li>
                                @endauth
                            </ul>

                            @auth
                                <a href="{{ route('profile') }}" class="user-box">
                                    <span class="header-icon">
                                        <i class="iconly-Profile icli mr-1"></i>
                                    </span>
                                </a>
                                <div class="user-name">
                                    <form action="{{ route('logout') }}" method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-danger m-2">Log out</a>
                                    </form>
                                </div>
                            @endauth

                            @guest
                            <a href="{{route('register')}}" class="user-box">
                                <span class="header-icon">
                                    <i class="iconly-Profile icli"></i>
                                </span>
                                <div class="user-name d-flex">
                                    <a href="{{ route('register') }}" class="btn btn-primary h6">S'inscrire ?</a>
                                    <a href="{{ route('login') }}" class="btn btn-success h6">Se connecter</a>
                                </div>
                            </a>
                            @endguest
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- mobile fix menu start -->
    <div class="mobile-menu d-md-none d-block mobile-cart">
        <ul>
            <li class="active">
                <a href="{{route('home')}}">
                    <i class="iconly-Home icli"></i>
                    <span>Home</span>
                </a>
            </li>

            <li class="mobile-category">
                <a href="">
                    <i class="iconly-Category icli js-link"></i>
                    <span>Category</span>
                </a>
            </li>

            <li>
                <a href="" class="search-box">
                    <i class="iconly-Search icli"></i>
                    <span>Search</span>
                </a>
            </li>

            <li>
                <a href="" class="notifi-wishlist">
                    <i class="iconly-Heart icli"></i>
                    <span>My Wish</span>
                </a>
            </li>

            <li>
                <a href="">
                    <i class="iconly-Bag-2 icli fly-cate"></i>
                    <span>Cart</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- mobile fix menu end -->

    <div>
        @yield('content')
    </div>

       <!-- Footer Start -->
       <footer class="section-t-space footer-section-2 footer-color-2">
        <div class="container-fluid-lg">
            <div class="main-footer">
                <div class="row g-md-4 gy-sm-5">
                    <div class="col-xxl-3 col-xl-4 col-sm-6">
                        <a href="{{route('home')}}" class="foot-logo theme-logo">
                            <img src="{{ asset("/assets/images/logo/4.png") }}" class="img-fluid blur-up lazyload" alt="">
                        </a>
                        <p class="information-text information-text-2">it is a long established fact that a reader will
                            be distracted by the readable content.</p>
                        <ul class="social-icon">
                            <li class="light-bg">
                                <a href="https://www.facebook.com/" class="footer-link-color">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="light-bg">
                                <a href="https://accounts.google.com/signin/v2/identifier?flowName=GlifWebSignIn&flowEntry=ServiceLogin" class="footer-link-color">
                                    <i class="fab fa-google"></i>
                                </a>
                            </li>
                            <li class="light-bg">
                                <a href="https://twitter.com/i/flow/login" class="footer-link-color">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li class="light-bg">
                                <a href="https://www.instagram.com/" class="footer-link-color">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li class="light-bg">
                                <a href="https://in.pinterest.com/" class="footer-link-color">
                                    <i class="fab fa-pinterest-p"></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-xxl-2 col-xl-4 col-sm-6">
                        <div class="footer-title">
                            <h4 class="text-white">About PlayMore</h4>
                        </div>
                        <ul class="footer-list footer-contact footer-list-light">
                            <li>
                                <a href="{{ route('about') }}" class="light-text">About Us</a>
                            </li>
                            <li>
                                <a href="{{ route('contact') }}" class="light-text">Contact Us</a>
                            </li>
                            
                        
                        </ul>
                    </div>

                    <div class="col-xxl-2 col-xl-4 col-sm-6">
                        <div class="footer-title">
                            <h4 class="text-white">Useful Link</h4>
                        </div>
                        <ul class="footer-list footer-list-light footer-contact">
                            <li>
                                <a href="{{route('profile')}}" class="light-text">Your account</a>
                            </li>
                            
                           
                            <li>
                                <a href="" class="light-text">FAQs</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-xxl-2 col-xl-4 col-sm-6">
                        <div class="footer-title">
                            <h4 class="text-white">Store Adresse</h4>
                        </div>
                        <ul class="footer-address footer-contact">
                            <li>
                                <a href="{{ url("javascript:void(0)") }}" class="light-text">
                                    <div class="inform-box flex-start-box">
                                        <i data-feather="map-pin"></i>
                                        <p>PlayMor Casablanca
                                            12 rue Ibn Khaldoun, Casablanca 20000
                                        </p>
                                    </div>
                                </a>
                            </li>
                    </div>

                    <div class="col-xxl-3 col-xl-4 col-sm-6">
                        <div class="footer-title">
                            <h4 class="text-white">Store infomation</h4>
                        </div>
                        <ul class="footer-address footer-contact">
                            

                            <li>
                                <a href="" class="light-text">
                                    <div class="inform-box">
                                        <i data-feather="phone"></i>
                                        <p>Call us: +212 5223-45678</p>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="" class="light-text">
                                    <div class="inform-box">
                                        <i data-feather="mail"></i>
                                        <p>Email Us: contact.playmore@gmail.com</p>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="" class="light-text">
                                    <div class="inform-box">
                                        <i data-feather="printer"></i>
                                        <p>Fax: 123456</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="sub-footer sub-footer-lite section-b-space section-t-space">
                <div class="left-footer">
                    <p class="light-text">2022 Copyright By Themeforest Powered By Pixelstrap</p>
                </div>

                <ul class="payment-box">
                    <li>
                        <img src="{{ asset("/assets/images/icon/paymant/visa.png") }}" class="blur-up lazyload" alt="">
                    </li>
                    <li>
                        <img src="{{ asset("/assets/images/icon/paymant/discover.png") }}" alt="" class="blur-up lazyload">
                    </li>
                    <li>
                        <img src="{{ asset("/assets/images/icon/paymant/american.png") }}" alt="" class="blur-up lazyload">
                    </li>
                    <li>
                        <img src="{{ asset("/assets/images/icon/paymant/master-card.png") }}" alt="" class="blur-up lazyload">
                    </li>
                    <li>
                        <img src="{{ asset("/assets/images/icon/paymant/giro-pay.png") }}" alt="" class="blur-up lazyload">
                    </li>
                </ul>
            </div>
        </div>
    </footer>
    <!-- Footer End -->

    <!-- Quick View Modal Box Start -->
    <div class="modal fade theme-modal view-modal" id="view" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header p-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row g-sm-4 g-2">
                        <div class="col-lg-6">
                            <div class="slider-image">
                                <img src="{{ asset("/assets/images/product/category/1.jpg") }}" class="img-fluid blur-up lazyload" alt="">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="right-sidebar-modal">
                                <h4 class="title-name">Peanut Butter Bite Premium Butter Cookies 600 g</h4>
                                <h4 class="price">$36.99</h4>
                                <div class="product-rating">
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
                                    <span class="ms-2">8 Reviews</span>
                                    <span class="ms-2 text-danger">6 sold in last 16 hours</span>
                                </div>

                                <div class="product-detail">
                                    <h4>Product Details :</h4>
                                    <p>Candy canes sugar plum tart cotton candy chupa chups sugar plum chocolate I love.
                                        Caramels marshmallow icing dessert candy canes I love soufflé I love toffee.
                                        Marshmallow pie sweet sweet roll sesame snaps tiramisu jelly bear claw. Bonbon
                                        muffin I love carrot cake sugar plum dessert bonbon.</p>
                                </div>

                                <ul class="brand-list">
                                    <li>
                                        <div class="brand-box">
                                            <h5>Brand Name:</h5>
                                            <h6>Black Forest</h6>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="brand-box">
                                            <h5>Product Code:</h5>
                                            <h6>W0690034</h6>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="brand-box">
                                            <h5>Product Type:</h5>
                                            <h6>White Cream Cake</h6>
                                        </div>
                                    </li>
                                </ul>

                                <div class="select-size">
                                    <h4>Cake Size :</h4>
                                    <select class="form-select select-form-size">
                                        <option selected="">Select Size</option>
                                        <option value="1.2">1/2 KG</option>
                                        <option value="0">1 KG</option>
                                        <option value="1.5">1/5 KG</option>
                                        <option value="red">Red Roses</option>
                                        <option value="pink">With Pink Roses</option>
                                    </select>
                                </div>

                                <div class="modal-button">
                                    <button onclick="location.href = 'cart.html';" class="btn btn-md add-cart-button icon">Add
                                        To Cart</button>
                                    <button onclick="location.href = 'product-left.html';" class="btn theme-bg-color view-button icon text-white fw-bold btn-md">
                                        View More Details</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quick View Modal Box End -->

    
    <!-- Cookie Bar Box End -->

    <!-- Location Modal Start -->
    <div class="modal location-modal fade theme-modal" id="locationModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Choose your Delivery Location</h5>
                    <p class="mt-1 text-content">Enter your address and we will specify the offer for your area.</p>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="location-list">
                        <div class="search-input">
                            <input type="search" class="form-control" placeholder="Search Your Area">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </div>

                        <div class="disabled-box">
                            <h6>Select a Location</h6>
                        </div>

                        <ul class="location-select custom-height">
                            <li>
                                <a href="">
                                    <h6>Alabama</h6>
                                    <span>Min: $130</span>
                                </a>
                            </li>

                            <li>
                                <a href="">
                                    <h6>Arizona</h6>
                                    <span>Min: $150</span>
                                </a>
                            </li>

                            <li>
                                <a href="">
                                    <h6>California</h6>
                                    <span>Min: $110</span>
                                </a>
                            </li>

                            <li>
                                <a href="">
                                    <h6>Colorado</h6>
                                    <span>Min: $140</span>
                                </a>
                            </li>

                            <li>
                                <a href="">
                                    <h6>Florida</h6>
                                    <span>Min: $160</span>
                                </a>
                            </li>

                            <li>
                                <a href="">
                                    <h6>Georgia</h6>
                                    <span>Min: $120</span>
                                </a>
                            </li>

                            <li>
                                <a href="">
                                    <h6>Kansas</h6>
                                    <span>Min: $170</span>
                                </a>
                            </li>

                            <li>
                                <a href="">
                                    <h6>Minnesota</h6>
                                    <span>Min: $120</span>
                                </a>
                            </li>

                            <li>
                                <a href="">
                                    <h6>New York</h6>
                                    <span>Min: $110</span>
                                </a>
                            </li>

                            <li>
                                <a href="">
                                    <h6>Washington</h6>
                                    <span>Min: $130</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Location Modal End -->

    <!-- Tap to top start -->
    <div class="theme-option">
        

        <div class="back-to-top">
            <a id="back-to-top" href="{{ url("#") }}">
                <i class="fas fa-chevron-up"></i>
            </a>
        </div>
    </div>
    <!-- Tap to top end -->

    <!-- Bg overlay Start -->
    <div class="bg-overlay"></div>
    <!-- Bg overlay End -->

    <!-- latest jquery-->
    <script src="{{ asset("/assets/js/jquery-3.6.0.min.js") }}"></script>

    <!-- jquery ui-->
    <script src="{{ asset("/assets/js/jquery-ui.min.js") }}"></script>

    <!-- Bootstrap js-->
    <script src="{{ asset("/assets/js/bootstrap/bootstrap.bundle.min.js") }}"></script>
    <script src="{{ asset("/assets/js/bootstrap/bootstrap-notify.min.js") }}"></script>
    <script src="{{ asset("/assets/js/bootstrap/popper.min.js") }}"></script>

    <!-- feather icon js-->
    <script src="{{ asset("/assets/js/feather/feather.min.js") }}"></script>
    <script src="{{ asset("/assets/js/feather/feather-icon.js") }}"></script>

    <!-- Lazyload Js -->
    <script src="{{ asset("/assets/js/lazysizes.min.js") }}"></script>

    <!-- Slick js-->
    <script src="{{ asset("/assets/js/slick/slick.js") }}"></script>
    <script src="{{ asset("/assets/js/slick/slick-animation.min.js") }}"></script>
    <script src="{{ asset("/assets/js/custom-slick-animated.js") }}"></script>
    <script src="{{ asset("/assets/js/slick/custom_slick.js") }}"></script>

    <!-- Range slider js -->
    <script src="{{ asset("/assets/js/ion.rangeSlider.min.js") }}"></script>

    <!-- Auto Height Js -->
    <script src="{{ asset("/assets/js/auto-height.js") }}"></script>

    <!-- Lazyload Js -->
    <script src="{{ asset("/assets/js/lazysizes.min.js") }}"></script>

    <!-- Quantity js -->
    <script src="{{ asset("/assets/js/quantity-2.js") }}"></script>

    <!-- Fly Cart Js -->
    <script src="{{ asset("/assets/js/fly-cart.js") }}"></script>

    <!-- Timer Js -->
    <script src="{{ asset("/assets/js/timer1.js") }}"></script>
    <script src="{{ asset("/assets/js/timer2.js") }}"></script>

    <!-- Copy clipboard Js -->
    <script src="{{ asset("/assets/js/clipboard.min.js") }}"></script>
    <script src="{{ asset("/assets/js/copy-clipboard.js") }}"></script>

    <!-- WOW js -->
    <script src="{{ asset("/assets/js/wow.min.js") }}"></script>
    <script src="{{ asset("/assets/js/custom-wow.js") }}"></script>

    <!-- script js -->
    <script src="{{ asset("/assets/js/script.js") }}"></script>

    <!-- thme setting js -->
    <script src="{{ asset("/assets/js/theme-setting.js") }}"></script>

    <script>
    function rechercherElement() {
        var elementDeRecherche = document.getElementById('elementDeRecherche').value;

        if (elementDeRecherche.trim() !== '') {
            window.location.href = "{{ route('chercher.barreNavigation') }}" + "?element=" + encodeURIComponent(elementDeRecherche);
        }
    }
        
    </script>


    <script>
        function copyText() {
            /* Sélectionner l'élément de texte à copier */
            var text = document.getElementById("textToCopy");
            
            /* Sélectionner le contenu du champ de texte */
            text.select();
            text.setSelectionRange(0, 99999); /* Pour les appareils mobiles */
            
            /* Copier le texte dans le presse-papiers */
            document.execCommand("copy");
        }
        function copyText2() {
            /* Sélectionner l'élément de texte à copier */
            var text = document.getElementById("textToCopy2");
            
            /* Sélectionner le contenu du champ de texte */
            text.select();
            text.setSelectionRange(0, 99999); /* Pour les appareils mobiles */
            
            /* Copier le texte dans le presse-papiers */
            document.execCommand("copy");
        }
        function copyText3() {
            /* Sélectionner l'élément de texte à copier */
            var text = document.getElementById("textToCopy3");
            
            /* Sélectionner le contenu du champ de texte */
            text.select();
            text.setSelectionRange(0, 99999); /* Pour les appareils mobiles */
            
            /* Copier le texte dans le presse-papiers */
            document.execCommand("copy");
        }
        function copyText4() {
            /* Sélectionner l'élément de texte à copier */
            var text = document.getElementById("textToCopy4");
            
            /* Sélectionner le contenu du champ de texte */
            text.select();
            text.setSelectionRange(0, 99999); /* Pour les appareils mobiles */
            
            /* Copier le texte dans le presse-papiers */
            document.execCommand("copy");
        }
    </script>
   
            <!--Script pour gérer l'erreur lorsque l'utilisateur cherche un produit inexistant dans la base de données-->

                
            


    



</body>
</html>