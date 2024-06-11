<!DOCTYPE html>
<html>
<head>
    <title>Confirmation de commande</title>
    @vite(['resources/js/app.js' , 'resources/sass/app.scss'])
</head>
<body>
    <h1 class="text-center" style="color:#880000;">Confirmation de commande</h1>
    <p>Merci d'avoir passé une commande sur notre site.</p>
    <p style="font-style: italic;">Voici les détails de votre commande :</p>
    @php
        use App\Models\Panier;
        use App\Models\Commande;

        $elementsPanier = Panier::where('user_id', auth()->user()->id)->get();
        $i = 0;
    @endphp

    <div class="m-5">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Article</th>
                    <th scope="col">Quantité</th>
                    <th scope="col">Total HT</th>
                    <th scope="col">Total TTC</th>
                </tr>
            </thead>
            <tbody>
                @foreach($elementsPanier as $elementPanier)
                    <tr class="table-danger">
                        <th scope="row">{{ ++$i }}</th>
                        <td>{{ $elementPanier->article->designation_article }}</td>
                        <td>{{ $elementPanier->quantite }}</td>
                        <td>{{ $elementPanier->total_HT }}</td>
                        <td>{{ $elementPanier->total_TTC }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <p>Si vous avez des questions ou des préoccupations, n'hésitez pas à nous contacter.</p>
    <p>Cordialement,</p>
</body>
</html>
