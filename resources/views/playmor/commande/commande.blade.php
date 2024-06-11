@extends('playmor.header')

@section('content')



<section class="breadscrumb-section pt-0">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="breadscrumb-contain">
                        <h2>Ma commande</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="index.html">
                                        <i class="fa-solid fa-house"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Commande</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->


    

    <<!-- Section d'informations sur la commande -->
<!-- Section d'informations sur la commande -->
<section class="order-info-section">
    <div class="container-fluid-lg">
        
        <div class="row">
            <div class="col-12">
                <div class="order-info">
                    <div class="h1 text-center mb-5" style="color:#880000;font-weight:bolder">Informations sur la commande</div>
                    <!--
                        Affichage du panier du client
                    -->
                    <section class="cart-section section-b-space">
        <div class="container-fluid-lg">
            <div class="row g-sm-5 g-3">
                <div class="col-12">
                    <div class="cart-table">
                        <div class="table-responsive-xl">
                            <table class="table">
                                <tbody>
                                @foreach($elementsDuPanier as $elementDuPanier)
                                    <tr class="product-box-contain">
                                        <td class="product-detail">
                                            <div class="product border-0">
                                                <a href="product-left-thumbnail.html" class="product-image">
                                                    <img src="{{ asset('storage/' . $elementDuPanier->article->image_article) }}" class="img-fluid blur-up lazyload" alt="">
                                                </a>
                                                <div class="product-detail">
                                                    <ul>
                                                        
                                                            <li class="name">
                                                                <a href="product-left-thumbnail.html">{{ $elementDuPanier->article->designation_article }}</a>
                                                            </li>

                                                            <li class="text-content"><span class="text-title">Fournisseur : 
                                                                    </span> {{ $elementDuPanier->article->fournisseur->nom_fournisseur }}</li>

                                                            <li class="text-content"><span class="text-title">Quantité</span> {{ $elementDuPanier->quantite }}</li>

                                                            <li>
                                                                <h5 class="text-content d-inline-block">Prix :</h5>
                                                                <span>{{ $elementDuPanier->article->prix_article - ($elementDuPanier->article->prix_article *  $elementDuPanier->article->taux_remise ) }}</span>
                                                                <span class="text-content">{{ $elementDuPanier->article->prix_article }}</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>

                                            <td class="price">
                                                <h4 class="table-title text-content">Prix :</h4>
                                                <h5><strong>{{ $elementDuPanier->article->prix_article - ($elementDuPanier->article->prix_article *  $elementDuPanier->article->taux_remise ) }}DH</strong> <del class="text-content">{{ $elementDuPanier->article->prix_article }} DH</del></h5>
                                                <h6 class="theme-color">Vous avez économisé : {{ ($elementDuPanier->article->prix_article *  $elementDuPanier->article->taux_remise ) }}DH</h6>
                                            </td>
                                            <td class="subtotal">
                                                <h4 class="table-title text-content">Total</h4>
                                                <h5>{{ $elementDuPanier->total_HT }}</h5>
                                            </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
                    <div class="row">
                        <table class="table m-5">
                            <thead>
                                <tr>
                                    <th><span class="text-dark fs-3 col">N° Commande</span></th>
                                    <th><span class="text-dark fs-3 col">Total HT</span></th>
                                    <th><span class="text-dark fs-3 col">Total Taxes</span></th>
                                    <th><span class="text-dark fs-3 col">Total TTC</span></th>
                                    <th><span class="text-dark fs-3 col">Total réduction</span></th>
                                    <th><span class="text-dark fs-3 col">Frais de livraison</span></th>
                                    <th><span class="text-dark fs-3 col">Total Commande</span></th>
                                </tr>
                            </thead>
                            <tbody>
                                    <th class="text-dark text-center fs-5" scope="row">{{ $idDerniereCommande }}</th>
                                    <td class="text-dark text-center fs-4">{{ $prix_total_hors_taxes_commande }} DH</td>
                                    <td class="text-dark text-center fs-4">{{ $totalTaxes }} DH</td>
                                    <td class="text-dark text-center fs-4">{{ $totalTTCCommande }} DH</td>
                                    <td class="text-dark text-center fs-4">{{ ($prix_total_toutes_taxes_comprises_commande ? $prix_total_toutes_taxes_comprises_commande - $totalTTCCommande : 0) }} DH</td>
                                    <td class="text-dark text-center fs-4"><span id="frais de livraison">0</span> DH</td>
                                    <td class="text-dark text-center fs-4"><span id="total de la livraison">{{ ($prix_total_toutes_taxes_comprises_commande ? $prix_total_toutes_taxes_comprises_commande: $totalTTCCommande)  }}</span> DH</td>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


    <!-- Section d'information -->
<section class="log-in-section section-b-space">
    <div class="container-fluid-lg w-100">
        <div class="row">
            <div class="col-sm-12">
                <div class="log-in-box">
                    <div class="log-in-title">
                        <h3 class="display-4 fw-bold">Pour passer votre commande </h3>
                        <h4>Veuillez compléter ce formulaire</h4>
                    </div>
                    <div class="input-box">
                        <form class="row g-4" action="{{ route('passerCommande') }}" method="POST" onsubmit="return validateForm()" enctype="multipart/form-data">
                            @csrf

                            <div class="col-md-6 form-group">
                                <div class="form-floating theme-form-floating">
                                    <input type="text" class="form-control" id="firstname" value="{{ auth()->user()->prenom_utilisateur }}" name="prenom_utilisateur" placeholder="Prénom" disabled required>
                                    <label for="firstname">Prénom</label>
                                </div>
                                @error('prenom_utilisateur')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6 form-group">
                                <div class="form-floating theme-form-floating">
                                    <input type="text" class="form-control" id="lastname" value="{{ auth()->user()->nom_utilisateur }}" name="nom_utilisateur" placeholder="Nom" disabled required>
                                    <label for="lastname">Nom</label>
                                </div>
                                @error('nom_utilisateur')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-12 form-group">
                                <div class="form-floating theme-form-floating">
                                    <input type="text" class="form-control" id="username" value="{{ auth()->user()->identifiant_utilisateur }}" name="identifiant_utilisateur" disabled  placeholder="Identifiant" required>
                                    <label for="username">Identifiant</label>
                                </div>
                                @error('identifiant_utilisateur')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-12 form-group">
                                <div class="form-floating theme-form-floating">
                                    <input type="email" class="form-control" id="email" value="{{ auth()->user()->email }}" name="email" placeholder="Adresse e-mail" disabled required>
                                    <label for="email">Adresse e-mail</label>
                                </div>
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12 form-group">
                                <div class="form-floating theme-form-floating">
                                    <input type="text" class="form-control" id="phone" value="{{ auth()->user()->telephone_utilisateur }}"  name="telephone_utilisateur" placeholder="Numéro de téléphone" disabled required>
                                    <label for="phone">Numéro de téléphone</label>
                                </div>
                                @error('telephone_utilisateur')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12 form-group">
                                <div class="form-floating theme-form-floating">
                                    <input type="text" class="form-control" id="address" value="{{ auth()->user()->adresse_utilisateur }}"  name="adresse_utilisateur" disabled placeholder="Adresse" required>
                                    <label for="address">Adresse</label>
                                </div>
                                @error('adresse_utilisateur')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12 form-group">
                                <div class="form-floating theme-form-floating">
                                    <input type="text" class="form-control" id="ville" value="{{ auth()->user()->ville->libelle_ville }}"  name="ville" placeholder="ville" disabled required>
                                    <label for="ville">Ville</label>
                                </div>
                                @error('ville')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-6 form-group">
                                <div class="form-floating theme-form-floating">
                                    <input type="text" class="form-control" id="credit-card" value="{{ auth()->user()->carteBancaire->numero_carte_bancaire }}" name="numero_carte_bancaire" disabled required>
                                    <label for="credit-card">Numéro de carte bancaire</label>
                                </div>
                                @error('carte_bancaire_id')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-6 form-group">
                                <div class="form-floating theme-form-floating">
                                    <input type="date" class="form-control" id="date_expiration_carte_bancaire" value="{{ auth()->user()->carteBancaire->date_expiration_carte_bancaire }}" name="date_expiration_carte_bancaire" disabled required>
                                    <label for="date_expiration_carte_bancaire">Date expiration</label>
                                </div>
                                @error('date_expiration_carte_bancaire')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- <div class="col-md-4 form-group">
                                <div class="form-floating theme-form-floating">
                                    <input type="text" class="form-control" id="code_validation_carte_bancaire" value="{{ auth()->user()->carteBancaire->code_validation_carte_bancaire }}" name="code_validation_carte_bancaire" disabled required>
                                    <label for="code_validation_carte_bancaire">Code validation</label>
                                </div>
                                @error('code_validation_carte_bancaire')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div> -->

                            <!-- Mode de livraison -->
                            <div class="col-md-12 form-group">
                                <div class="form-floating theme-form-floating">
                                    <select class="form-select custom-select-dropdown" value="{{ old('libelle_mode_livraison') }}" id="libelle_mode_livraison" name="libelle_mode_livraison" required> 
                                        <option value="">Sélectionnez un mode de livraison  </option>
                                        @foreach($mode_livraisons as $mode_livraison)
                                            <option value="{{ $mode_livraison->id }}">{{ $mode_livraison->libelle_mode_livraison }} ({{ $mode_livraison->description_mode_livraison}})</option>
                                        @endforeach
                                    </select>
                                    <label for="libelle_mode_livraison" id="libelle_mode_livraison" @if(!old('libelle_mode_livraison')) style="display: none;" @endif>Mode De livraison</label>
                                </div>
                                @error('libelle_mode_livraison')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- choix de la boutique -->
                            <div class="col-md-12 form-group" id="choix-boutique-container" style="display: none;">
                                <div class="form-floating theme-form-floating">
                                    <select class="form-select custom-select-dropdown" value="{{ old('libelle_boutique') }}" id="libelle_boutique" name="libelle_boutique"> 
                                        <option value="">Sélectionnez la boutique de livraison  </option>
                                        @foreach($boutiques as $boutique)
                                            <option value="{{ $boutique->id }}">{{ $boutique->libelle_boutique }} ( Adresse : {{ $boutique->adresse_boutique}})</option>
                                        @endforeach
                                    </select>
                                    <label for="libelle_boutique" id="libelle_boutique" @if(!old('libelle_boutique')) style="display: none;" @endif>Boutique de livraison</label>
                                </div>
                                @error('libelle_boutique')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="offset-4 form-group">
                                <div class="form-floating theme-form-floating">
                                    <input type="hidden" class="form-control" id="valeur-captcha" name="valeur-captcha" value="{{ $randomCaptcha }}" > 
                                    <h2 style="text-align: center; background-color: #880000; color: #ffffff; font-style: italic;width : 25%">{{ $randomCaptcha }}</h2>
                                </div>
                            </div>

                            <!-- le système de captcha -->
                            <div class="col-12 form-group">
                                <div class="form-floating theme-form-floating">
                                    <input type="text" class="form-control" id="captcha" name="captcha" placeholder="Code Captcha" required>
                                    <label for="captcha">Code Captcha (utilisez le code ci-dessus)</label>
                                </div>
                                @error('captcha')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            

                            <div class="col-12">
                                <div class="forgot-box">
                                    <div class="form-check ps-0 m-0 remember-box">
                                        <input class="checkbox_animated check-box" type="checkbox" id="terms-checkbox" name="terms">
                                        <label class="form-check-label" for="flexCheckDefault">J'ai lu <span><a href="#"> les conditions de livraisons et remboursement</a></span></label>
                                    </div>
                                </div>
                            </div>

                            <input type="hidden" name="prix_total_hors_taxes_commande" value="{{ $prix_total_hors_taxes_commande }}" />
                            <input type="hidden" name="prix_total_toutes_taxes_comprises_commande" id="prix_total_toutes_taxes_comprises_commande" />
                            <input type="hidden" name="frais_de_livraison" id="frais_de_livraison" />
                            <div class="col-12">
                                <button class="btn btn-animation w-100" type="submit">Confirmer ma commande</button>
                            </div>
                        </form>
                    </div>

                    <div class="other-log-in">
                        <h6>ou</h6>
                    </div>

                    <div class="sign-up-box">
                        <h4>Si vous souhaitez modifiez votre commande</h4>
                        <a href="{{ route('panier') }}">Revenir au Panier</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Fin de la section d'inscription -->
@push('scripts')
    <script>
        $(document).ready(function() {
            $('#city').on('click', function() {
                $('#city-label').show();
            });
        });
    </script>
@endpush

<!-- Le code script pour gérer l'affichage du magasin de livraison lorsque l'utilisateur souhaite se livrer dans un magasin -->
<script>

    document.getElementById('libelle_mode_livraison').addEventListener('change', function() {
        var selectedValue = this.value;
        console.log(selectedValue);
        var choixBoutiqueContainer = document.getElementById('choix-boutique-container');
        
        if (selectedValue == '3') {
            choixBoutiqueContainer.style.display = 'block';
        } else {
            choixBoutiqueContainer.style.display = 'none';
        }
    });
</script>

<!--Script pour gérer les frais de livraisons-->
<script>
    var fraisDeLivraison = document.getElementById('frais de livraison');
    var modeDeLivraison = document.getElementById('libelle_mode_livraison');
    var totalDeLaLivraison = document.getElementById('total de la livraison');
    var valeurAenvoyerDuTotalDeLaLivraison = document.getElementById('prix_total_toutes_taxes_comprises_commande');
    var valeurAenvoyerDuFraisDeLaLivraison = document.getElementById('frais_de_livraison');
    valeurAenvoyerDuTotalDeLaLivraison.value = parseFloat(totalDeLaLivraison.textContent);
    valeurAenvoyerDuFraisDeLaLivraison.value = fraisDeLivraison.textContent;
    modeDeLivraison.addEventListener('change', function(){
        if(modeDeLivraison.value == '1'){
            fraisDeLivraison.textContent = 20;
            totalDeLaLivraison.textContent = parseFloat(totalDeLaLivraison.textContent) + 20;
            var valeur = totalDeLaLivraison.textContent;
            valeurAenvoyerDuTotalDeLaLivraison.value = parseFloat(valeur);
            valeurAenvoyerDuFraisDeLaLivraison.value = 20;
        }else if(modeDeLivraison.value == '2'){
            fraisDeLivraison.textContent = 50;
            totalDeLaLivraison.textContent = parseFloat(totalDeLaLivraison.textContent) + 50;
            var valeur = totalDeLaLivraison.textContent;
            valeurAenvoyerDuTotalDeLaLivraison.value = parseFloat(valeur);
            valeurAenvoyerDuFraisDeLaLivraison.value = 50;
        }else if (modeDeLivraison.value == '3'){
            fraisDeLivraison.textContent = 0;
            totalDeLaLivraison.textContent = parseFloat(totalDeLaLivraison.textContent) + 0;
            var valeur = totalDeLaLivraison.textContent;
            valeurAenvoyerDuTotalDeLaLivraison.value = parseFloat(valeur);
            valeurAenvoyerDuFraisDeLaLivraison.value = 0;
        }
    });
</script>
   
<!--Cochage du formulaire -->
<script>
    function validateForm() {
        var termsCheckbox = document.getElementById('terms-checkbox');
        
        if (!termsCheckbox.checked) {
            alert("Veuillez accepter les conditions de livraison et de remboursement.");
            return false; // Empêche la soumission du formulaire
        }
        
        return true; // Autorise la soumission du formulaire
    }
</script>


@endsection