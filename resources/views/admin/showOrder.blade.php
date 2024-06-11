@extends('admin.dashboard')
@section('title', 'order')
@section('content')

<div class="page-body">
    <!-- tracking table start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="title-header title-header-block package-card">
                            <div>
                                <h5>Order {{$order->id}} : {{$order->description_commande}}</h5>
                            </div>
                            <div class="card-order-section">
                                <ul>
                                    <li>{{$order->date_commande}}</li>
                                    <li>{{$totalQuantite}} Items</li>
                                    <li>Total (no shipping) : {{$order->prix_total_toutes_taxes_comprises_commande}} DH</li>
                                </ul>
                            </div>
                        </div>
                        <div class="bg-inner cart-section order-details-table">
                            <div class="row g-4">
                                <div class="col-xl-8">
                                    <div class="table-responsive table-details">
                                        <table class="table cart-table table-borderless">
                                            <thead>
                                                <tr>
                                                    <th colspan="2">Items</th>
                                                    <th class="text-end" colspan="2">
                                                        <a href="#" class="theme-color"></a>
                                                    </th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach($order->commandeDetails as $line)
                                                <tr class="table-order">
                                                    <td>
                                                        <a href="{{route('admin.product.show' , $line->article->id)}}">
                                                            <img src="{{ asset('storage/' .$line->article->image_article) }}" class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <p>{{$line->article->designation_article}}</p>
                                                        <h5>{{$line->article->categorie->nom_categorie}}</h5>
                                                    </td>
                                                    <td>
                                                        <p>Quantity</p>
                                                        <h5>{{$line->quantite_commande}}</h5>
                                                    </td>
                                                    <td>
                                                        <p>Price</p>
                                                        <h5>{{$line->sous_total}} DH</h5>
                                                    </td>
                                                </tr>
                                                @endforeach
                                              

                                               

                                                
                                            </tbody>

                                            <tfoot>
                                                <tr class="table-order">
                                                    <td colspan="3">
                                                        <h5>Subtotal :</h5>
                                                    </td>
                                                    <td>
                                                        <h4>{{$order->prix_total_hors_taxes_commande}} DH</h4>
                                                    </td>
                                                </tr>
                                                <tr class="table-order">
                                                    <td colspan="3">
                                                        <h5>Tax :</h5>
                                                    </td>
                                                    <td>
                                                        <h4>{{$tax}} %</h4>
                                                    </td>
                                                </tr>

                                                

                                                <tr class="table-order">
                                                    <td colspan="3">
                                                        <h5>Shipping :</h5>
                                                    </td>
                                                    <td>
                                                        <h4>
                                                            @if ($order->livraison && $order->livraison->frais_livraison)
                                                                {{$order->livraison->frais_livraison}} DH
                                                            @else
                                                                not defined
                                                            @endif
                                                        </h4>
                                                    </td>
                                                    
                                                </tr>

                                                <tr class="table-order">
                                                    <td colspan="3">
                                                        <h4 class="theme-color fw-bold">Total Price :</h4>
                                                    </td>
                                                    <td>
                                                        <h4 class="theme-color fw-bold">{{$total}} DH</h4>
                                                    </td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>

                                <div class="col-xl-4">
                                    <div class="order-success">
                                        <div class="row g-4">
                                            <h4>summery</h4>
                                            <ul class="order-details">
                                                <li>Order ID: {{$order->id}}</li>
                                                <li>Order Date: {{$order->date_commande}}</li>
                                                <li>Order Total: {{$order->prix_total_toutes_taxes_comprises_commande}} DH</li>
                                            </ul>

                                            <h4>shipping address</h4>
                                            <br>
                                            <ul class="order-details">
                                                @if ($order->livraison && $order->livraison->adresse_livraison)
                                                    <li>{{$order->livraison->adresse_livraison}}</li>
                                                @else
                                                    <li>{{$order->user->adresse_utilisateur}}</li>
                                                @endif
                                            </ul>
                                            

                                            <div class="payment-mode">
                                                <h4>payment method</h4>
                                                <p>Bank Card :  {{$order->user->carteBancaire->numero_carte_bancaire}}.</p>
                                            </div>
                                            <div class="payment-mode">
                                                <h4>Order State</h4>
                                                <p>  {{$order->etatCommande->libelle_etat_commande}}.</p>
                                            </div>

                                            <div class="delivery-sec">
                                                <h3>expected date of delivery: <span>{{$maybeDate}}</span>
                                                </h3>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- section end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- tracking table end -->

  
</div>
@endsection