<?php

namespace App\Http\Controllers;

use App\Models\Panier;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PanierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        $elementsDuPanier = Panier::where('user_id' , Auth::id())->get();

        $totalHTCommande = 0;
        $totalTTCCommande = 0;
        $totalTaxes = 0;

        $prixLivraison = 0;
        
        foreach($elementsDuPanier as $elementDuPanier){
            $totalHTCommande += $elementDuPanier->total_HT;
            $totalTTCCommande += $elementDuPanier->total_TTC;
            $totalTaxes = $totalTTCCommande - $totalHTCommande;
        }

        $totalCommandeAvecLivraison = $totalTTCCommande + $prixLivraison;

        return view('playmor.panier' , compact('elementsDuPanier' , 'prixLivraison' ,'totalTaxes' ,
        'totalTTCCommande' , 'totalCommandeAvecLivraison' ,'totalHTCommande'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        // récupérer le produit 
        $article = Article::findOrFail($request->article_id);
        $quantiteDestineeVente = $article->quantite_stock - $article->seuil_stock;
        // Revérification de la quantité
        if($request->quantite > $quantiteDestineeVente){
            return redirect()->back()->with('message', 'Veuillez choisir la bonne quantité !');
        }

        $prixArticle = $article->prix_article;
        $tauxRemiseSurArticle = $article->taux_remise;
        $tauxTVA = $article->taux_tva;
        $prixArticleApresTauxRemise = $prixArticle - ($prixArticle * $tauxRemiseSurArticle);
        $prixArticleAvecTVA = $prixArticleApresTauxRemise + ($prixArticleApresTauxRemise * $tauxTVA);

        $totalHT = $request->quantite * $prixArticleApresTauxRemise;
        $totalTTC = $request->quantite * $prixArticleAvecTVA;

        Panier::create([
            "user_id" => $request->user_id,
            "article_id" => $request->article_id,
            "quantite" => $request->quantite,
            "total_HT" => $totalHT,
            "total_TTC" => $totalTTC,
            "commande_id" => null
        ]);

        return back();
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $elementDuPanier = Panier::findOrFail($id);
        $elementDuPanier->delete();
        return back();
    }
}
