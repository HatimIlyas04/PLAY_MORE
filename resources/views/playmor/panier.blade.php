@extends('playmor.header')

@section('content')

<section class="breadscrumb-section pt-0">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="breadscrumb-contain">
                        <h2>Mon Panier</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="{{route('home')}}">
                                        <i class="fa-solid fa-house"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Panier</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Cart Section Start -->
    <section class="cart-section section-b-space">
        <div class="container-fluid-lg">
            <div class="row g-sm-5 g-3">
                <div class="col-xxl-9">
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

                                            <td class="save-remove text-center">
                                                <h4 class="table-title text-content">Supprimer du Panier</h4>
                                                <form action="{{route('panier.destroy',$elementDuPanier->id)}}"method="post" onsubmit="return confirm('Voulez-vous supprimez ce produit de votre panier?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button  type="submit" class="btn-sm" style="background-color: #880000; border-color:#880000;"><i class="fa fa-trash-o fa-lg" style="color:white"></i></button></td>
                                                </form>
                                            </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-3">
                    <div class="summery-box p-sticky">
                        <div class="summery-header">
                            <h3 style="color: #880000;">Total du panier</h3>
                        </div>

                        <div class="summery-contain">
                            <div class="coupon-cart">
                                <h6 class="text-content mb-2">Appliquer le coupon</h6>
                                <div class="mb-3 coupon-box input-group">
                                    <input type="email" class="form-control" id="monCoupon" placeholder="Code du coupon">
                                    <button class="btn-apply" onclick="recuperationCoupon();calculeDetotalCommandeAvecLivaisonFinal();">Appliquer</button>
                                </div>
                            </div>
                            <ul>
                                <li>
                                    <h4>Total HT</h4>
                                    <h4 class="price">{{ $totalHTCommande }} DH</h4>
                                </li>

                                <li>
                                    <h4>Total Taxes</h4>
                                    <h4 class="price">{{ $totalTaxes }} DH</h4>
                                </li>

                                <li>
                                    <h4>Total TTC</h4>
                                    <h4 class="price">{{ $totalTTCCommande }} DH</h4>
                                </li>

                                <li>
                                    <h4>Coupon de réduction</h4>
                                    <h4 class="price" id="couponDeReduction">0.00</h4>
                                </li>

                                <li class="align-items-start">
                                    <h4>Expédition</h4>
                                    <h4 class="price text-end">{{ $prixLivraison }} DH</h4>
                                </li>
                            </ul>
                        </div>

                        <ul class="summery-total">
                            <li class="list-total border-top-0">
                                <h4>Total commande</h4>
                                <input type="hidden" value="{{ $totalCommandeAvecLivraison }}" id="totalCommandeAvecLivraison"/>
                                <h4 class="price theme-color">{{ $totalCommandeAvecLivraison }} DH</h4>
                            </li>
                        </ul>

                        <div class="button-group cart-button">
                            <ul>
                                <li>
                                    <form action="{{ route('remplissageInfoCommande') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="prix_total_hors_taxes_commande" value="{{ $totalHTCommande }}" />
                                        <input type="hidden" name="prix_total_toutes_taxes_comprises_commande" id="totalCommandeAvecLivaisonFinal"/>
                                        <input type="hidden" name="totalTaxes" value="{{ $totalTaxes }}" />
                                        <input type="hidden" name="totalTTCCommande" value="{{ $totalTTCCommande }}" />
                                        <button class="btn btn-animation proceed-btn fw-bold">Processus de paiement</button>
                                    </form>
                                    
                                </li>

                                <li>
                                    <button onclick="retournerAuxAchats()" class="btn btn-light shopping-button text-dark">
                                        <i class="fa-solid fa-arrow-left-long"></i>Retour aux achats</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Cart Section End -->

    <script>
        function recuperationCoupon(){
            var coupons = [
                { code: 'SUMMER2023', taux: 0.1 },
                { code: 'SALE50', taux: 0.5 },
                { code: 'WELCOME15', taux: 0.15 },
                { code: 'FREESHIPPING', taux: 0.50 },
                ];

            var valeurCoupon = document.getElementById('monCoupon').value;

            // Parcourir le tableau des coupons
            for (var i = 0; i < coupons.length; i++) {
                if (coupons[i].code === valeurCoupon) {
                    var tauxReduction = coupons[i].taux;
                    var elementTotalLivraison = document.querySelector('.price.theme-color');
                    var valeurElementTotalLivraison = document.getElementById('totalCommandeAvecLivraison').value;
                    var nouveauTotalAvecLivraison = Number(valeurElementTotalLivraison) - (Number(valeurElementTotalLivraison) * tauxReduction);
                    var couponDeReduction = document.getElementById('couponDeReduction');

                    couponDeReduction.textContent = Number(tauxReduction)*100 + ' %';

                    
                    elementTotalLivraison.textContent = nouveauTotalAvecLivraison + ' DH';
                    return ;
                }
            }
            // Si le code de coupon n'est pas trouvé dans le tableau
            alert('Le code de coupon est invalide.');
        }
    </script>

    <script>
        function retournerAuxAchats(){
            window.location.href = "{{ route('showAllProducts') }}";
        }
    </script>

    <script>
        function calculeDetotalCommandeAvecLivaisonFinal(){
            var totalCommande = document.getElementById('totalCommandeAvecLivraison').value;
            var valeurCoupon = document.getElementById('couponDeReduction').textContent;
            var resultat = parseFloat(totalCommande) - (parseFloat(totalCommande) * parseFloat(valeurCoupon) / 100);
            document.getElementById('totalCommandeAvecLivaisonFinal').value = resultat;
            
        }
    </script>

@endsection