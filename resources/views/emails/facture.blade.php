<!DOCTYPE html>
<html>
<head>
    <title>Confirmation de commande</title>
    @vite(['resources/js/app.js' , 'resources/sass/app.scss'])
</head>
<body>
    @php
        use App\Models\Commande;
        use App\Models\Facture;
        use App\Models\Panier;
        use App\Models\Livraison;

        $commande = $facture->commande;
        $user = $commande->user;

    @endphp
    <h1 class="text-center" style="color:#880000;">Facture N° {{ $facture->id }}</h1>
    <p>Nous tenons à vous remercier pour vos achats</p>
    <p style="font-style: italic;">Voici les détails de votre facture :</p>

<h3 class="text-center" style="color:#880000;"></h3>
    <div class="m-5">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Facture N°</th>
                    <th scope="col">Date de Facture</th>
                    <th scope="col">Prix Total HT</th>
                    <th scope="col">Taxes</th>
                    <th scope="col">Frais de livraison</th>
                    <th scope="col">Prix Total TTC</th>
                </tr>
            </thead>
            <tbody>
                <tr class="table-danger">
                    <th scope="row">{{ $facture->id }}</th>
                    <td>{{ $facture->date_facture }}</td>
                    <td>{{ $commande->prix_total_hors_taxes_commande }}</td>
                    <td>{{ $commande->prix_total_toutes_taxes_comprises_commande -  Livraison::where('commande_id', $commande->id)->first()->frais_livraison - $commande->prix_total_hors_taxes_commande}}</td>
                    <td>{{ Livraison::where('commande_id', $commande->id)->first()->frais_livraison }}</td>
                    <td>{{ $commande->prix_total_toutes_taxes_comprises_commande }}</td>
                </tr>
            </tbody>
        </table>
    </div>

    <p>Si vous avez des questions ou des préoccupations, n'hésitez pas à nous contacter.</p>
    <p>Cordialement,</p>
</body>
</html>
