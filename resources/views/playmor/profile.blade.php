@extends('playmor.header')

@section('content')

    <!-- Breadcrumb Section Start -->
    <section class="breadscrumb-section pt-0">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="breadscrumb-contain">
                        <h2>User Dashboard</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="{{route('home')}}">
                                        <i class="fa-solid fa-house"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">User Dashboard</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- User Dashboard Section Start -->
    <section class="user-dashboard-section section-b-space">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-xxl-3 col-lg-4">
                    <div class="dashboard-left-sidebar">
                        <div class="close-button d-flex d-lg-none">
                            <button class="close-sidebar">
                                <i class="fa-solid fa-xmark"></i>
                            </button>
                        </div>
                        <div class="profile-box">
                            <div class="cover-image">
                                <img src="../assets/images/inner-page/cover-img.jpg" class="img-fluid blur-up lazyload" alt="">
                            </div>

                            <div class="profile-contain">
                                <div class="profile-image">
                                    <div class="position-relative">
                                        <img src="{{ asset('storage/' . $user->image_utilisateur) }}" class="blur-up lazyload update_img" alt="">
                                        <form id="profileForm" action="{{route('profile.update')}}" method="POST">
                                            @csrf
                                            @method('PATCH')
                                            <div class="cover-icon">
                                                <a href="" data-bs-toggle="modal" data-bs-target="#editImage">
                                                <i class="fa-solid fa-pen">   
                                                </i>
                                                </a>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="profile-name">
                                    <h3>{{$user->identifiant_utilisateur}}</h3>
                                    <h6 class="text-content">{{$user->email}}</h6>
                                </div>
                            </div>
                        </div>

                        <ul class="nav nav-pills user-nav-pills" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"  aria-selected="true"><i data-feather="user"></i>
                                    Profile</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-order-tab" data-bs-toggle="pill" data-bs-target="#pills-order" type="button" role="tab" aria-controls="pills-order" aria-selected="false"><i data-feather="shopping-bag"></i>Order</button>
                            </li>

                            

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-card-tab" data-bs-toggle="pill" data-bs-target="#pills-card" type="button" role="tab" aria-controls="pills-card" aria-selected="false"><i data-feather="credit-card"></i> Saved Card</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-security-tab" data-bs-toggle="pill" data-bs-target="#pills-security" type="button" role="tab" aria-controls="pills-security" aria-selected="false"><i data-feather="shield"></i>
                                    Privacy</button>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-xxl-9 col-lg-8">
                    <button class="btn left-dashboard-show btn-animation btn-md fw-bold d-block mb-4 d-lg-none">Show
                        Menu</button>
                    <div class="dashboard-right-sidebar">
                        <div class="tab-content" id="pills-tabContent">
                            

                            <div class="tab-pane fade show" id="pills-order" role="tabpanel" aria-labelledby="pills-order-tab">
                                <div class="dashboard-order">
                                    <div class="title">
                                        <h2>My Orders History</h2>
                                        <span class="title-leaf title-leaf-gray">
                                            <svg class="icon-width bg-gray">
                                                <use xlink:href="../assets/svg/leaf.svg#leaf"></use>
                                            </svg>
                                        </span>
                                    </div>

                                    @if (count($commandes) < 1){
                                        <div class="alert alert-danger">Vous n'avez passez aucune commande!</div>
                                    }
                                    @else
                                    <div class="order-contain">
                                        @foreach($commandes as $commande)
                                        <div class="order-box dashboard-bg-box">
                                            
                                            <div class="order-container">
                                                <div class="order-icon">
                                                    <i data-feather="box"></i>
                                                </div>

                                                <div class="order-detail">
                                                    <h4>{{ $commande->etatCommande->libelle_etat_commande }} </h4>{{-- <span>Panding</span>--}}
                                                   
                                                </div>
                                            </div>

                                            <div class="product-order-detail">
                                               

                                                <div class="order-wrap">
                                                    <a href="product-left-thumbnail.html">
                                                        <h3>{{ $commande->id }}</h3>
                                                    </a>
                                                    <p class="text-content">{{ $commande->description_commande }}</p>
                                                    <ul class="product-size">
                                                        <li>
                                                            <div class="size-box">
                                                                <h6 class="text-content">Prix HT: </h6>
                                                                <h5>{{ $commande->prix_total_hors_taxes_commande }}</h5>
                                                            </div>
                                                        </li>

                                                        <li>
                                                            <div class="size-box">
                                                                <h6 class="text-content">Prix Total : </h6>
                                                                <h5>{{ $commande->prix_total_toutes_taxes_comprises_commande }}</h5>
                                                            </div>
                                                        </li>

                                                        <li>
                                                            <div class="size-box">
                                                                <h6 class="text-content">Date : </h6>
                                                                <h5>{{ $commande->date_commande }}</h5>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                           
                                        </div>
                                        @endforeach
                                    </div>       
                                    @endif
                                </div>
                            </div>

                            

                            <div class="tab-pane fade show" id="pills-card" role="tabpanel" aria-labelledby="pills-card-tab">
                                <div class="dashboard-card">
                                    <div class="title title-flex">
                                        <div>
                                            <h2>My Card Details</h2>
                                            <span class="title-leaf">
                                                <svg class="icon-width bg-gray">
                                                    <use xlink:href="../assets/svg/leaf.svg#leaf"></use>
                                                </svg>
                                            </span>
                                        </div>

                                        {{-- <button class="btn theme-bg-color text-white btn-sm fw-bold mt-lg-0 mt-3" data-bs-toggle="modal" data-bs-target="#editCard"><i data-feather="plus" class="me-2"></i> Add New Card</button> --}}
                                    </div>

                                    <div class="row g-4">
                                        <div class="col-xxl-4 col-xl-6 col-lg-12 col-sm-6">
                                            <div class="payment-card-detail">
                                                <div class="card-details">
                                                    <div class="card-number">
                                                        <h4>{{ substr($carteBancaire->numero_carte_bancaire, 0, 4) }} - XXXX - XXXX - XXXX<h4>
                                                    </div>

                                                    <div class="valid-detail">
                                                        <div class="title">
                                                            <span>valid</span>
                                                            <span>thru</span>
                                                        </div>
                                                        <div class="date">
                                                            @php
                                                                $dateExpiration = explode('-', $carteBancaire->date_expiration_carte_bancaire);
                                                                $annee = substr($dateExpiration[0], 2);
                                                                $mois = $dateExpiration[1];
                                                            @endphp

                                                            
                                                            <h3>{{ $mois }} / {{ $annee }}</h3>
                                                        </div>
                                                        <div class="primary">
                                                            <span class="badge bg-pill badge-light">primary</span>
                                                        </div>
                                                    </div>

                                                    <div class="name-detail">
                                                        <div class="name">
                                                            <h5>{{$user->nom_utilisateur}} {{$user->prenom_utilisateur}}</h5>
                                                        </div>
                                                        <div class="card-img">
                                                            <img src="../assets/images/payment-icon/1.jpg" class="img-fluid blur-up lazyloaded" alt="">
                                                        </div>
                                                    </div>
                                                </div>

                                                {{-- <div class="edit-card">
                                                    <a data-bs-toggle="modal" data-bs-target="#editCard" href="javascript:void(0)"><i class="far fa-edit"></i> edit</a>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#removeProfile"><i class="far fa-minus-square"></i> delete</a>
                                                </div> --}}
                                            </div>

                                            <div class="edit-card-mobile">
                                                <a data-bs-toggle="modal" data-bs-target="#editCard" href="javascript:void(0)"><i class="far fa-edit"></i> edit</a>
                                                <a href="javascript:void(0)"><i class="far fa-minus-square"></i>
                                                    delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade show active" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                <div class="dashboard-profile">
                                    <div class="title">
                                        <h2>My Profile</h2>
                                        <span class="title-leaf">
                                            <svg class="icon-width bg-gray">
                                                <use xlink:href="../assets/svg/leaf.svg#leaf"></use>
                                            </svg>
                                        </span>
                                    </div>

                                    <div class="profile-detail dashboard-bg-box">
                                        <div class="dashboard-title">
                                            <h3>{{$user->prenom_utilisateur}} {{$user->nom_utilisateur}}</h3>
                                        </div>
                                        <div class="profile-name-detail">
                                            <div class="d-sm-flex align-items-center d-block">
                                                <h3 style="text-transform: capitalize;" >{{$user->identifiant_utilisateur}}</h3>
                                            </div>

                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#editProfile">Edit</a>
                                            
                                        </div>

                                        <div class="location-profile">
                                            <ul>
                                                <li>
                                                    <div class="location-box">
                                                        <i data-feather="map-pin"></i>
                                                        <h6 style="text-transform: capitalize;">{{$villeUser->libelle_ville}}</h6>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="location-box">
                                                        <i data-feather="mail"></i>
                                                        <h6>{{$user->email}}</h6>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="location-box">
                                                        <i data-feather="check-square"></i>
                                                        <h6>Créer depuis {{ $duree }} {{ $unite }}</h6>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="profile-description">
                                            <p>Bienvenue sur votre profil utilisateur PlayMore !</p>
                                            <p>Merci d'utiliser notre application et n'hésitez pas à mettre à jour vos informations si nécessaire.</p>
                                        </div>
                                    </div>

                                    <div class="profile-about dashboard-bg-box">
                                        <div class="row">
                                            <div class="col-xxl-7">
                                                <div class="dashboard-title mb-3">
                                                    <h3>Profile About</h3>
                                                </div>

                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <tbody>
                                                            <tr>
                                                                <td>Gender :</td>
                                                                <td>{{$user->sexe_utilisateur}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Phone Number :</td>
                                                                <td>
                                                                    <a href="javascript:void(0)"> {{$user->telephone_utilisateur}}</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Address :</td>
                                                                <td>{{$user->adresse_utilisateur}}</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>

                                                <div class="dashboard-title mb-3">
                                                    <h3>Login Details</h3>
                                                </div>

                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <tbody>
                                                            <tr>
                                                                <td>Email :</td>
                                                                <td>
                                                                    <a href="javascript:void(0)">{{$user->email}}
                                                                        <span data-bs-toggle="modal" data-bs-target="#editEmail">Edit</span></a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Password :</td>
                                                                <td>
                                                                    <a href="javascript:void(0)">●●●●●●
                                                                        <span data-bs-toggle="modal" data-bs-target="#editPassword">Edit</span></a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                            <div class="col-xxl-5">
                                                <div class="profile-image">
                                                    <img src="../assets/images/inner-page/dashboard-profile.png" class="img-fluid blur-up lazyload" alt="">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade show" id="pills-security" role="tabpanel" aria-labelledby="pills-security-tab">
                                <div class="dashboard-privacy">

                                    <div class="dashboard-bg-box mt-4">
                                        <div class="dashboard-title mb-4">
                                            <h3>Account settings</h3>
                                        </div>

                                        <div class="privacy-box">
                                            <div class="d-flex align-items-start">
                                                <h2>La suppression de votre compte sera définitive.</h2>
                                                
                                            </div>
                                            <p class="text-content">Une fois votre compte supprimé, vous serez déconnecté et vous devrez créer un nouveau compte.</p>
                                            <p class="text-content">Si vous aves passé des commande, vous ne pouvez pas supprimer votre compte </p>
                                        </div>


                                        <button class="btn theme-bg-color btn-md fw-bold mt-4 text-white" data-bs-toggle="modal" data-bs-target="#removeProfile">Delete My
                                            Account</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- User Dashboard Section End -->

   

     <!-- Add address modal box start -->
     <div class="modal fade theme-modal" id="add-address" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add a new address</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-floating mb-4 theme-form-floating">
                            <input type="text" class="form-control" id="fname" placeholder="Enter First Name">
                            <label for="fname">First Name</label>
                        </div>
                    </form>

                    <form>
                        <div class="form-floating mb-4 theme-form-floating">
                            <input type="text" class="form-control" id="lname" placeholder="Enter Last Name">
                            <label for="lname">Last Name</label>
                        </div>
                    </form>

                    <form>
                        <div class="form-floating mb-4 theme-form-floating">
                            <input type="email" class="form-control" id="email" placeholder="Enter Email Address">
                            <label for="email">Email Address</label>
                        </div>
                    </form>

                    <form>
                        <div class="form-floating mb-4 theme-form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="address" style="height: 100px"></textarea>
                            <label for="address">Enter Address</label>
                        </div>
                    </form>

                    <form>
                        <div class="form-floating mb-4 theme-form-floating">
                            <input type="email" class="form-control" id="pin" placeholder="Enter Pin Code">
                            <label for="pin">Pin Code</label>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-md" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn theme-bg-color btn-md text-white" data-bs-dismiss="modal">Save
                        changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Add address modal box end -->

    <!-- Edit Profile Start -->
    
    <div class="modal fade theme-modal" id="editProfile" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel2">Edit Profile</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <form method="POST" action="{{ route('profile.update') }}" >
                    @csrf
                    @method('PATCH')
                    <div class="modal-body">
                        <div class="row g-4">
                            <div class="col-xxl-12">
                                <div class="form-floating theme-form-floating">
                                    <input type="text" class="form-control" id="nom" name="nom_utilisateur" value="{{ old('nom_utilisateur', $user->nom_utilisateur) }}">
                                    <label for="nom">Nom</label>
                                </div>
                                <br>
                                <div class="form-floating theme-form-floating">
                                    <input type="text" class="form-control" id="prenom" name="prenom_utilisateur" value="{{ old('prenom_utilisateur', $user->prenom_utilisateur) }}">
                                    <label for="prenom">Prenom</label>
                                </div>
                            </div>
                    
                            <div class="col-12">
                                <div class="form-floating theme-form-floating">
                                    <input type="text" class="form-control" id="address1" name="adresse_utilisateur" value="{{ old('adresse_utilisateur', $user->adresse_utilisateur) }}">
                                    <label for="address1">Address</label>
                                </div>
                            </div>
                            <div class="col-xxl-4">
                                <div class="form-floating theme-form-floating">
                                    <select class="form-select" id="floatingSelect" name="ville_id">
                                        <option selected="">Choose Your City</option>
                                        @foreach($villes as $ville)
                                        <option value="{{$ville->id}}" {{ old('ville_id', $user->ville_id) == $ville->id ? 'selected' : '' }}>{{$ville->libelle_ville}}</option>
                                        @endforeach
                                    </select>
                                    <label for="floatingSelect">City</label>
                                </div>
                            </div>
                    
                            <div class="col-xxl-4">
                                <div class="form-floating theme-form-floating">
                                    <select class="form-select" id="floatingSelect" name="sexe_utilisateur">
                                        <option value="">Choose Your Gender</option>
                                        <option value="Homme" {{ old('sexe_utilisateur', $user->sexe_utilisateur) == 'Homme' ? 'selected' : '' }}>Homme</option>
                                        <option value="Femme" {{ old('sexe_utilisateur', $user->sexe_utilisateur) == 'Femme' ? 'selected' : '' }}>Femme</option>
                                    </select>
                                    <label for="floatingSelect">Gender</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating theme-form-floating">
                                    <input type="text" class="form-control" id="Telephone" name="telephone_utilisateur" value="{{ old('telephone_utilisateur', $user->telephone_utilisateur) }}">
                                    <label for="telephone">Telephone</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating theme-form-floating">
                                    <input type="password" class="form-control" id="Password" name="password" value="">
                                    <label for="Password">Confirmation du mot de passe</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                <div class="modal-footer">
                    <button type="button" class="btn btn-animation btn-md fw-bold" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn theme-bg-color btn-md fw-bold text-light">Save changes</button>
                </div>
            </form>
            </div>
        </div>
    </div>
    
    <!-- Edit Profile End -->

    <!-- Edit Email Start -->
    <div class="modal fade theme-modal" id="editEmail" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel2">Edit Profile</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <form method="POST" action="{{ route('profile.update') }}">
                @csrf
                @method('PATCH')
                <div class="modal-body">
                    <div class="row g-4">
                        <div class="col-xxl-12">
                                <div class="form-floating theme-form-floating">
                                    <input type="email" class="form-control" name="new_email" id="new_email" value="{{$user->email}}">
                                    <label for="new_email">Email</label>
                                </div>
                                <br>
                                <div class="form-floating theme-form-floating">
                                    <input type="password" class="form-control" name="password" id="password" value="" >
                                    <label for="password">Password</label>
                                </div>                                                          
                        </div>                                                                                        
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-animation btn-md fw-bold" data-bs-dismiss="modal">Close</button>
                    <button type="submit"  data-bs-dismiss="modal" class="btn theme-bg-color btn-md fw-bold text-light">Save changes</button>
                </div>
            </form>
            </div>
        </div>
    </div>
    <!-- Edit Profile End -->

    <!-- Edit Password Start -->
    <div class="modal fade theme-modal" id="editPassword" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel2">Edit Password</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <form  method="POST" action="{{ route('profile.update') }}">
                @csrf
                @method('PATCH')
                <div class="modal-body">
                    <div class="row g-4">
                        <div class="col-xxl-12">
                                <div class="form-floating theme-form-floating">
                                    <input type="password" class="form-control" name="password" id="password" value="">
                                    <label for="password">Old Password</label>
                                </div>
                                <br>
                                <div class="form-floating theme-form-floating">
                                    <input type="password" class="form-control" name="new_password" id="new_password" value="" >
                                    <label for="new_password">New Password</label>
                                </div>
                                <br>
                                <div class="form-floating theme-form-floating">
                                    <input type="password" class="form-control" name="new_password_confirmation" id="new_password_confirmation" value="" >
                                    <label for="new_password_confirmation">Confirmation</label>
                                </div>                                                          
                        </div>                                                                                        
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-animation btn-md fw-bold" data-bs-dismiss="modal">Close</button>
                    <button type="submit" data-bs-dismiss="modal" class="btn theme-bg-color btn-md fw-bold text-light">Save changes</button>
                </div>
            </form>
            </div>
        </div>
    </div>
    <!-- Edit Password End -->

    <!-- Edit Email Start -->
    <div class="modal fade theme-modal" id="editImage" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel2">Edit Image</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="modal-body">
                    <div class="row g-4">
                        <div class="col-xxl-12">
                                <div class="form-floating theme-form-floating">
                                    <input type="file" class="form-control" name="image_utilisateur" id="image_utilisateur" value="">
                                    <label for="new_image">Email</label>
                                </div>
                                <br>
                                <div class="form-floating theme-form-floating">
                                    <input type="password" class="form-control" name="password" id="password" value="" >
                                    <label for="password">Password</label>
                                </div>                                                          
                        </div>                                                                                        
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-animation btn-md fw-bold" data-bs-dismiss="modal">Close</button>
                    <button type="submit"  data-bs-dismiss="modal" class="btn theme-bg-color btn-md fw-bold text-light">Save changes</button>
                </div>
            </form>
            </div>
        </div>
    </div>
    <!-- Edit Profile End -->

    <!-- Edit Card Start -->
    {{-- <div class="modal fade theme-modal" id="editCard" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel8">Edit Card</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row g-4">
                        <div class="col-xxl-6">
                                <div class="form-floating theme-form-floating">
                                    <input type="text" class="form-control" id="numero_carte_bancaire" value="{{ old('numero_carte_bancaire') }}" name="numero_carte_bancaire" required>
                                    <label for="numero_carte_bancaire">N° de carte bancaire</label>
                                </div>
                                @error('numero_carte_bancaire')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                        </div>

                        <div class="col-xxl-6">
                                <div class="form-floating theme-form-floating">
                                    <input type="date" class="form-control" id="date_expiration_carte_bancaire" value="{{ old('date_expiration_carte_bancaire') }}" name="date_expiration_carte_bancaire" required>
                                    <label for="date_expiration_carte_bancaire">Date expiration</label>
                                </div>
                                @error('date_expiration_carte_bancaire')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror                        
                        </div>

                        <div class="col-xxl-4">
                            <form>
                                <div class="form-floating theme-form-floating">
                                    <select class="form-select" id="floatingSelect12" aria-label="Floating label select example">
                                        <option selected="">Card Type</option>
                                        <option value="kindom">Visa Card</option>
                                        <option value="states">MasterCard Card</option>
                                        <option value="fra">RuPay Card</option>
                                        <option value="china">Contactless Card</option>
                                        <option value="spain">Maestro Card</option>
                                    </select>
                                    <label for="floatingSelect12">Card Type</label>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-animation btn-md fw-bold" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn theme-bg-color btn-md fw-bold text-light">Update Card</button>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Edit Card End -->

    <!-- Remove Profile Modal Start -->
    <div class="modal fade theme-modal remove-profile" id="removeProfile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header d-block text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel22">Are You Sure ?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="remove-box">
                        <p>Voulez-vous SUPPRIMER VOTRE COMPTE ??</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-animation btn-md fw-bold" data-bs-dismiss="modal">No</button>
                    <form method="post" action="{{route('profile.delete',$user->id)}}">
                        @csrf
                        @method('DELETE')
                    <button type="submit" class="btn theme-bg-color btn-md fw-bold text-light" data-bs-target="#removeAddress" data-bs-toggle="modal">Yes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade theme-modal remove-profile" id="removeAddress" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center" id="exampleModalLabel12">Done!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="remove-box text-center">
                        <h4 class="text-content">It's Removed.</h4>
                    </div>
                </div>
                <div class="modal-footer pt-0">
                    <button type="button" class="btn theme-bg-color btn-md fw-bold text-light" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Remove Profile Modal End -->
    <script>
        function submitForm() {
            document.getElementById('profileForm').submit();
        }
    </script>
@endsection