@extends('playmor.header')

@section('content')




    <!-- Breadcrumb Section Start -->
    <section class="breadscrumb-section pt-0">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="breadscrumb-contain">
                        <h2>{{ $article->designation_article }}</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="{{route('home')}}">
                                        <i class="fa-solid fa-house"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item active">{{ $article->designation_article }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                @if(session('message'))
                    <div class="col-12">
                        <div class="alert alert-danger" role="alert">
                            {{ session('message') }}
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Left Sidebar Start -->
    <section class="product-section">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-xxl-9 col-xl-8 col-lg-7 wow fadeInUp">
                    <div class="row g-4">
                        <div class="col-xl-6 wow fadeInUp">
                            <div class="product-left-box">
                                <div class="row g-2">
                                    <div class="col-xs-12">
                                        <div class="product-main-2 d-flex justify-content-center align-items-center">
                                            <img src="{{ asset('storage/' . $article->image_article) }}" alt="" width="100%" height="100%">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="right-box-contain">
                                @foreach($tags as $tag)
                                    <h6 class="offer-top">{{ $tag->libelle_tag }}</h6>
                                @endforeach
                                <h2 class="name text-dark">{{ $article->designation_article }}</h2>
                                <div class="price-rating">
                                    <h3 class="theme-color price">{{ $article->prix_article - ($article->prix_article * $article->taux_remise) }} DH<del class="text-content">{{ $article->prix_article }} DH</del> <span class="offer theme-color">({{ '-' . $article->taux_remise*100 . '%' }})</span></h3>
                                    <div class="product-rating custom-rate">
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
                                        <span class="review">3 commentaires</span>
                                    </div>
                                </div>

                                <div class="procuct-contain">
                                    <p>
                                        {{ $article->description_article }}
                                    </p>
                                </div>

                                <div class="product-packege">
                                   
                                </div>

                                <div class="time deal-timer product-deal-timer mx-md-0 mx-auto" id="clockdiv-1" data-hours="1" data-minutes="2" data-seconds="3">
                                    <div class="product-title">
                                        <h4 class="text-danger">Dépêchez-vous !</h4>
                                    </div>
                                    <ul class="bg-warning">
                                        <li>
                                            <div class="counter d-block">
                                                <div class="days d-block">
                                                    <h5></h5>
                                                </div>
                                                <h6>Jours</h6>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="counter d-block">
                                                <div class="hours d-block">
                                                    <h5></h5>
                                                </div>
                                                <h6>Heures</h6>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="counter d-block">
                                                <div class="minutes d-block">
                                                    <h5></h5>
                                                </div>
                                                <h6>Min</h6>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="counter d-block">
                                                <div class="seconds d-block">
                                                    <h5></h5>
                                                </div>
                                                <h6>Sec</h6>
                                            </div>
                                        </li>
                                    </ul>
                                </div>



                                <div class="note-box product-packege">
                                    @guest

                                    <div class="cart_qty qty-box product-qty">
                                        <div class="input-group">
                                            <button type="button" class="qty-right-plus" data-type="plus" data-field="quantity">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </button>
                                            <input class="form-control input-number qty-input" type="text" name="quantity" id="quantity_{{ $article->id }}">
                                            <button type="button" class="qty-left-minus" data-type="minus" data-field="quantity">
                                                <i class="fa fa-minus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                        <button class="btn btn-md bg-dark cart-button text-white w-100" id="addToCartButton">Ajouter au Panier</button>
                                    @endguest
                                    @auth
                                        <form action="{{ route('panier.store') }}" method="post" class="d-flex">
                                            @csrf
                                            <div class="cart_qty qty-box product-qty">
                                                <div class="input-group">
                                                    <button type="button" class="qty-right-plus" data-type="plus" data-field="quantite">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                    <input class="form-control input-number qty-input" type="number" name="quantite" id="quantite_{{ $article->id }}" min="1" value="1">
                                                    <button type="button" class="qty-left-minus" data-type="minus" data-field="quantite">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <input type="hidden" name="quatre_vingt_dix_pour_cent_quantite_actuel_stock" value="{{ $quantiteAccessiblePourVente }}" id="quatre_vingt_dix_pour_cent_quantite_actuel_stock" />
                                            <input type="hidden" name="article_id" value="{{ $article->id }}" />
                                            <input type="hidden" name="user_id" value="{{ Auth::id() }}" />
                                            <button type="submit" class="btn btn-md bg-dark cart-button text-white w-100 mx-2">Ajouter au panier</button>
                                        </form>
                                    @endauth
                                </div>
                                <div class="pickup-box">
                                    <div class="product-title">
                                        <h4>Store Information</h4>
                                    </div>

                                    <div class="product-info">
                                        <ul class="product-info-list product-info-list-2">
                                            <li>category : <a href="javascript:void(0)">{{ $article->categorie->nom_categorie }}</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="paymnet-option">
                                    <div class="product-title">
                                        <h4>Guaranteed Safe Checkout</h4>
                                    </div>
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <img src="../styleTest/images/product/payment/1.svg" class="blur-up lazyload" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <img src="../styleTest/images/product/payment/2.svg" class="blur-up lazyload" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <img src="../styleTest/images/product/payment/3.svg" class="blur-up lazyload" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <img src="../styleTest/images/product/payment/4.svg" class="blur-up lazyload" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <img src="../styleTest/images/product/payment/5.svg" class="blur-up lazyload" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div> 
                        <div class="col-12">
                            <div class="product-section-box">
                                <ul class="nav nav-tabs custom-nav" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="info-tab" data-bs-toggle="tab" data-bs-target="#info" type="button" role="tab" aria-controls="info" aria-selected="true">Informations supplémentaires</button>
                                    </li>

                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="care-tab" data-bs-toggle="tab" data-bs-target="#care" type="button" role="tab" aria-controls="care" aria-selected="false">Recommandations d'entretien</button>
                                    </li>

                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="review-tab" data-bs-toggle="tab" data-bs-target="#review" type="button" role="tab" aria-controls="review" aria-selected="false">Q&As</button>
                                    </li>
                                </ul>
                                <div class="tab-content custom-tab" id="myTabContent">
                                    <div class="tab-pane fade show active" id="info" role="tabpanel" aria-labelledby="info-tab">
                                        <div class="table-responsive">
                                            <table class="table info-table">
                                                <tbody>
                                                    <tr>
                                                        <td>Désignation</td>
                                                        <td>{{ $article->designation_article }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Description</td>
                                                        <td>{{ $article->description_article }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Prix</td>
                                                        <td>{{ $article->prix_article }} DH</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Taux de remise</td>
                                                        <td>{{ $article->taux_remise * 100 }}%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Quantité en stock</td>
                                                        <td>{{ $article->quantite_stock }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Fournisseur</td>
                                                        <td>{{ $article->fournisseur->nom_fournisseur }} </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Marque</td>
                                                        <td>{{ $article->marque->libelle_marque}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Catégorie</td>
                                                        <td>{{ $article->categorie->nom_categorie}}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="care" role="tabpanel" aria-labelledby="care-tab">
                                        <div class="information-box">
                                            <ul>
                                                <li>
                                                Nettoyez régulièrement votre matériel de gaming à l'aide d'un chiffon doux et non pelucheux pour éliminer la poussière et les saletés accumulées.
                                                </li>

                                                <li>
                                                Évitez de consommer des aliments ou des boissons à proximité de votre matériel pour éviter tout renversement accidentel.
                                                </li>

                                                <li>
                                                Rangez votre matériel de gaming dans un endroit sûr et protégé lorsqu'il n'est pas utilisé pour éviter les chocs, les chutes ou les dommages.
                                                </li>

                                                <li>
                                                Utilisez des protections telles que des housses ou des étuis pour protéger vos consoles de jeux, manettes et autres accessoires lors des déplacements.
                                                </li>

                                                <li>
                                                Évitez d'exposer votre matériel de gaming à des températures extrêmes, à l'humidité ou à la lumière directe du soleil, car cela peut endommager les composants électroniques.
                                                </li>

                                                <li>
                                                Utilisez des solutions de nettoyage spécifiques pour éliminer les taches ou les marques tenaces sur vos accessoires, en suivant les instructions du fabricant.
                                                </li>

                                                <li>
                                                Débranchez correctement les câbles et les connexions lorsque vous déplacez ou rangez votre matériel pour éviter toute tension inutile.
                                                </li>

                                                <li>
                                                Évitez de tirer ou de tordre les câbles, cela peut causer des dommages internes.
                                                </li>

                                                <li>
                                                Mettez à jour régulièrement le firmware et les pilotes de vos périphériques pour bénéficier des dernières améliorations de performance et de compatibilité.
                                                </li>

                                                <li>
                                                Consultez le manuel d'utilisation fourni avec votre matériel de gaming pour des instructions spécifiques concernant l'entretien et les précautions d'utilisation.
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                                        <div class="review-box">
                                            <div class="row g-4">
                                                
                                                <div class="col-12">
                                                    <div class="review-title">
                                                        <h4 class="fw-500">Questions et réponses des clients</h4>
                                                    </div>
                                                    <div class="review-people">
                                                        <ul class="review-list">
                                                            @foreach($question_reponses as $question_reponse)
                                                            <li>
                                                                <div class="people-box">

                                                                    <div class="people-comment">
                                                                        <a class="name" href="javascript:void(0)">{{ $question_reponse->question }}</a>
                                                                        <div class="date-time">
                                                                            <h6 class="text-content">{{ $question_reponse->created_at }}</h6>
                                                                            <div class="product-rating">
                                                                                <ul class="rating">
                                                                                    @php
                                                                                        $randomStars = rand(1, 5);
                                                                                    @endphp
                                                                                    
                                                                                    @for ($i = 1; $i <= 5; $i++)
                                                                                        <li>
                                                                                            @if ($i <= $randomStars)
                                                                                                <i data-feather="star" class="fill"></i>
                                                                                            @else
                                                                                                <i data-feather="star"></i>
                                                                                            @endif
                                                                                        </li>
                                                                                    @endfor
                                                                                </ul>
                                                                                <span>({{ $randomStars }}.0)</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="reply">
                                                                            <p style="text-align: justify;">
                                                                                {{ $question_reponse->reponse }}
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            @endforeach
                                                        </ul>
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

                <div class="col-xxl-3 col-xl-4 col-lg-5 d-none d-lg-block wow fadeInUp">
                    <div class="right-sidebar-box">
                        <div class="vendor-box">
                            <div class="text-center">
                                <div class="text-center">
                                    <img src="{{ asset('/assets/images/logo/4.png') }}" class="" alt="" width="70%" height="70%">
                                </div>

                                <div class="vendor-name text-center">
                                    <h5 class="fw-500 text-danger">PlayMore</h5>

                                    <div class="product-rating mt-1">
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
                                                <i data-feather="star" class="fill"></i>
                                            </li>
                                        </ul>
                                        <span>(36 Reviews)</span>
                                    </div>

                                </div>
                            </div>

                            <p class="vendor-detail" style="text-align: justify;">
                            PlayMore est une entreprise marocaine spécialisée dans la vente de matériel de gaming. Nous offrons une large sélection de produits de haute qualité pour répondre aux besoins des passionnés de jeux vidéo. Notre objectif est de fournir les équipements de gaming les plus performants pour améliorer l'expérience de jeu de nos clients au Maroc. Faites confiance à PlayMore pour tous vos besoins en matériel de gaming.
                            </p>

                            <div class="vendor-list">
                                <ul>
                                    <li>
                                        <div class="address-contact">
                                            <i data-feather="map-pin"></i>
                                            <h5>Adresse: <span class="text-content">12 Ibn Khaldoun</span></h5>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="address-contact">
                                            <i data-feather="headphones"></i>
                                            <h5>Contacte: <span class="text-content">+212 5223-45678</span></h5>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Trending Product -->
                        <div class="pt-25">
                            <div class="category-menu">
                                <h3>Produits tendance</h3>

                                <ul class="product-list product-right-sidebar border-0 p-0">
                                    @foreach($articlesNav as $articleNav)
                                    <li>
                                        <div class="offer-product">
                                            <a href="{{route('article' , $articleNav->id)}}" class="offer-image">
                                                <img src="{{ asset('storage/' . $articleNav->image_article) }}" class="img-fluid blur-up lazyload" alt="">
                                            </a>

                                            <div class="offer-detail">
                                                <div>
                                                    <a href="{{route('article' , $articleNav->id)}}">
                                                        <h6 class="name">{{ $articleNav->designation_article }}</h6>
                                                    </a>
                                                    <span>{{ $articleNav->categorie->nom_categorie }}</span>
                                                    <h6 class="price theme-color">{{ $articleNav->prix_article - ($articleNav->prix_article * $articleNav->taux_remise) }} DH</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Left Sidebar End -->

    <!-- Releted Product Section Start -->
    <section class="product-list-section section-b-space">
        <div class="container-fluid-lg">
            <div class="title">
                <h2>Produits associés</h2>
                <span class="title-leaf">
                    <svg class="icon-width">
                        <use xlink:href="../styleTest/svg/leaf.svg#leaf"></use>
                    </svg>
                </span>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="slider-6_1 product-wrapper">
                    @foreach($articlesMemeCatagorie as $articleMemeCatagorie)
                        <div style="height: 100%">
                            
                            <div class="product-box-3 wow fadeInUp">
                                
                                <div class="product-header">
                                    <div class="product-image">
                                        <a href="{{route('article' , $articleMemeCatagorie->id)}}">
                                            <img src="{{ asset('storage/' . $articleMemeCatagorie->image_article)  }}" class="img-fluid blur-up lazyload" alt="{{ $articleMemeCatagorie->designation_article }}">
                                        </a>
                                    </div>
                                </div>

                                <div class="product-footer">
                                    <div class="product-detail">
                                        <span class="span-name">{{ $articleMemeCatagorie->categorie->nom_categorie }}</span>
                                        <a href="{{route('article' , $articleMemeCatagorie->id)}}">
                                            <h5 class="name">{{ $articleMemeCatagorie->designation_article }}</h5>
                                        </a>
                                        <div class="product-rating mt-2">
                                            <ul class="rating">
                                                @php
                                                    $randomStars = rand(1, 5);
                                                @endphp
                                                
                                                @for ($i = 1; $i <= 5; $i++)
                                                    <li>
                                                        @if ($i <= $randomStars)
                                                            <i data-feather="star" class="fill"></i>
                                                        @else
                                                            <i data-feather="star"></i>
                                                        @endif
                                                    </li>
                                                @endfor
                                            </ul>
                                            <span>({{ $randomStars }}.0)</span>
                                        </div>
                                        <!-- <h6 class="unit">500 G</h6> -->
                                        <h5 class="price"><span class="theme-color">{{ $articleMemeCatagorie->prix_article - ($articleMemeCatagorie->prix_article * $articleMemeCatagorie->taux_remise) }} DH</span> <del>{{ $articleMemeCatagorie->prix_article }} DH</del>
                                        </h5>
                                        <div class="add-to-cart-box bg-white">
                                            <button href="{{route('article' , $articleMemeCatagorie->id)}}" class="btn btn-add-cart addcart-button"><a href="{{route('article' , $articleMemeCatagorie->id)}}">Plus d'info</a>
                                                <span class="add-icon bg-light-gray">
                                                    <i class="fa-solid fa-plus"></i>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- La partie du modale qui s'affiche à l'utilisateur -->
    @guest
        <div id="loginModal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <h4>Connectez-vous pour ajouter au panier</h4>
                <p>Veuillez vous connecter ou créer un compte pour pouvoir ajouter des produits à votre panier.</p>
                <div class="button-container">
                    <button class="btn btn-primary" onclick="seDirigerVersConnecter()">Se connecter</button>
                    <button class="btn btn-secondary" onclick="seDirigerVersRegister()">Créer un compte</button>
                </div>
            </div>
        </div>
    

    <!-- le style css de la modale -->
    <style>
    /* Modal styles */
    .modal {
        display: none;
        position: fixed;
        z-index: 9999;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.6); /* Updated background color */
    }

    .modal-content {
        background-color: #fff;
        margin: 15% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 50%;
    }

    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
        cursor: pointer;
    }

    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }

    .button-container {
        display: flex; /* Added flex display */
        justify-content: space-between; /* Align buttons horizontally */
        margin-top: 20px;
    }

    .btn-primary,
    .btn-secondary {
        width: 45%; /* Adjust button width as desired */
    }
</style>

    <!-- code javascript pour la modale -->
        <script>
            // Get the modal element
            var modal = document.getElementById("loginModal");

            // Get the button that opens the modal
            var addToCartButton = document.getElementById("addToCartButton");

            // Get the <span> element that closes the modal
            var closeButton = document.getElementsByClassName("close")[0];

            // Function to show the modal
            function showModal() {
                modal.style.display = "block";
            }

            // Function to hide the modal
            function hideModal() {
                modal.style.display = "none";
            }

            // Event listener for the "Ajouter au Panier" button
            addToCartButton.addEventListener("click", function() {
                // Check if the user is authenticated (add your own logic here)
                var isAuthenticated = false; // Replace with your authentication check

                if (!isAuthenticated) {
                    showModal(); // Show the modal if not authenticated
                } else {
                    // Proceed with adding the item to the cart
                    // Add your own code here to handle the authenticated action
                }
            });

            // Event listener for the close button
            closeButton.addEventListener("click", hideModal);

            // Event listener to close the modal when clicking outside the modal content
            window.addEventListener("click", function(event) {
                if (event.target == modal) {
                    hideModal();
                }
            });
        </script>
@endguest
            
<script>
    // Ce code permet de gérer le boutton de choix de la quantité au niveau de la page /article/{id}
    
    document.addEventListener("DOMContentLoaded", function() {
        var plusBtn = document.querySelector(".qty-right-plus");
        var minusBtn = document.querySelector(".qty-left-minus");
        var quantityInput = document.querySelector(".qty-input");
        var qteStock = document.getElementById('quatre_vingt_dix_pour_cent_quantite_actuel_stock');

        plusBtn.addEventListener("click", function() {
            var currentQuantity = parseInt(quantityInput.value);
            console.log(parseInt(quatre_vingt_dix_pour_cent_quantite_actuel_stock.value));
            if(parseInt(quatre_vingt_dix_pour_cent_quantite_actuel_stock.value) > currentQuantity){
                quantityInput.value = currentQuantity + 1;
            }else if(parseInt(quatre_vingt_dix_pour_cent_quantite_actuel_stock.value) == currentQuantity){
                alert('Vous avez atteint le maximum disponible au stock !');
            }
        });

        minusBtn.addEventListener("click", function() {
            var currentQuantity = parseInt(quantityInput.value);
            if (currentQuantity >= 2) {
                quantityInput.value = currentQuantity - 1;
            }
        });
    });
</script>

<script>
    function seDirigerVersConnecter() {
        window.location.href = "{{ route('login') }}";
    }
    function seDirigerVersRegister() {
        window.location.href = "{{ route('register') }}";
    }
                    
</script>

    <!-- Releted Product Section End -->
@endsection