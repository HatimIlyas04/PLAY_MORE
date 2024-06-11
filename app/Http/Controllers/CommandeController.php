<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Ville;
use App\Models\Panier;
use App\Models\Article;
use App\Models\Boutique;
use App\Models\Commande;
use App\Models\Livraison;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Events\CommandePasse;
use App\Models\CarteBancaire;
use App\Models\ModeLivraison;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CommandeController extends Controller
{
    public function remplissageInfoCommande(Request $request){
        Session::put('prix_total_hors_taxes_commande', $request->prix_total_hors_taxes_commande);
        Session::put('prix_total_toutes_taxes_comprises_commande' , $request->prix_total_toutes_taxes_comprises_commande);
        Session::put('totalTaxes' , $request->totalTaxes);
        Session::put('totalTTCCommande', $request->totalTTCCommande);
        
        return redirect()->route('afficherInfoCommande');

    }

    public function afficherInfoCommande(Request $request){
        if(count(Commande::all()) > 0){
            $idDerniereCommande = Commande::latest()->first()->id + 1;
        }
        else{
            $idDerniereCommande = 1;
        }

        // Les informations du mode de la livraison et du boutiques de livraison.
        $boutiques = Boutique::all();
        $mode_livraisons = ModeLivraison::all();
        // Les informations nécessaires pour le panier
        $elementsDuPanier = Panier::where('user_id', '=', auth()->user()->id)->get();
        
        $prix_total_hors_taxes_commande = session('prix_total_hors_taxes_commande');
        $prix_total_toutes_taxes_comprises_commande = session('prix_total_toutes_taxes_comprises_commande');
        $totalTaxes = session('totalTaxes');
        $totalTTCCommande = session('totalTTCCommande');

        $villes = Ville::all();
        $randomCaptcha = ucfirst(Str::random(6)); // Génère un texte aléatoire de 6 caractères
        return view('playmor.commande.commande', compact('villes', 'mode_livraisons' , 'boutiques' , 'elementsDuPanier', 'totalTTCCommande' , 'totalTaxes' , 'randomCaptcha', 'prix_total_toutes_taxes_comprises_commande', 'idDerniereCommande', 'prix_total_hors_taxes_commande'));

    }

    public function passerCommande(Request $request){
        
        $request->validate([
            'captcha' => ['required', 'string', 'same:valeur-captcha'],
        ]);

        $informationClient = 'Nom : ' . auth()->user()->nom_utilisateur . ' Prénom : ' . auth()->user()->prenom_utilisateur;
        
        // Consulter la date d'expiration de la carte bancaire
        
        $dateExpirationCarteBancaireUtilisateur = auth()->user()->carteBancaire->date_expiration_carte_bancaire;
        if(Carbon::parse($dateExpirationCarteBancaireUtilisateur)->lessThan(now())){
            // vidage du panier
            $elementsDuPanier = Panier::where('user_id', Auth::id())->get();
            foreach($elementsDuPanier as $elementDuPanier){
                $elementDuPanier->delete();
            };
            return view('playmor.pageIntrouvable.pageDateExpirationCarteBancaire');
        }

        // Consulter le montant de la carte bancaire
        $montantDeLaCarteBancaire = auth()->user()->carteBancaire->solde_carte_bancaire;
        if($montantDeLaCarteBancaire < $request->prix_total_toutes_taxes_comprises_commande){
            // vidage du panier
            $elementsDuPanier = Panier::where('user_id', Auth::id())->get();
            foreach($elementsDuPanier as $elementDuPanier){
                $elementDuPanier->delete();
            };
            return view('playmor.pageIntrouvable.pageMontantInsuffisant');
        }


        // Retirer l'argent du compte utiliseur

        CarteBancaire::where('id' , auth()->user()->carte_bancaire_id)->update([
            'solde_carte_bancaire' => $montantDeLaCarteBancaire - $request->prix_total_toutes_taxes_comprises_commande
        ]);


        $commande = Commande::create([
            'date_commande' => now(),
            'description_commande' => "commande effectuée par le client " . $informationClient . ' à cette date : ' . now(),
            'prix_total_hors_taxes_commande' => $request->prix_total_hors_taxes_commande,
            'prix_total_toutes_taxes_comprises_commande' => $request->prix_total_toutes_taxes_comprises_commande,
            'utilisateur_id' => Auth()->id(),
            'etat_commande_id' => 1,
        ]);

        event(new CommandePasse($commande));

        // Mouvementer le stock

        $elementsDuPanier = Panier::where('user_id', '=', auth()->user()->id)->get();
        foreach($elementsDuPanier as $elementDuPanier){
            $article = Article::findOrFail($elementDuPanier->article->id);
            $quantiteStockInitial = $article->quantite_stock;
            $quantiteDansLePanier = $elementDuPanier->quantite;
            $quantiteStockFinal = $quantiteStockInitial - $quantiteDansLePanier;
            $article->update([
                'quantite_stock' => $quantiteStockFinal
            ]);

            // Remplissage de la table commande_details
            DB::table('commande_details')->insert([
                'article_id' => $elementDuPanier->article->id,
                'commande_id' => $commande->id,
                'quantite_commande' => $quantiteDansLePanier,
                'sous_total' => $elementDuPanier->total_TTC,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }

        // gestion de la livraison
        $dateDeLivraison = now();
        $modeLivraison = $request->libelle_mode_livraison;
        if($modeLivraison == '1'){
            $dateDeLivraison = $dateDeLivraison->addDays(5);
        }elseif($modeLivraison == '2'){
            $dateDeLivraison = $dateDeLivraison->addDays(2);
        }elseif($modeLivraison == '3') {
            $dateDeLivraison = $dateDeLivraison;
        }

        Livraison::create([
            'date_livraison' => $dateDeLivraison,
            'description_livraison' => 'Livraison à réaliser le : ' . $dateDeLivraison,
            'adresse_livraison' => auth()->user()->adresse_utilisateur,
            'frais_livraison' => $request->frais_de_livraison,
            'commande_id' => $commande->id,
            'mode_livraison_id' => $request->libelle_mode_livraison,
            'boutique_id' => is_null($request->libelle_boutique) ? null : $request->libelle_boutique
        ]);



        // vidage du panier
        $elementsDuPanier = Panier::where('user_id', Auth::id())->get();
        foreach($elementsDuPanier as $elementDuPanier){
            $elementDuPanier->delete();
        };

        return view('playmor.commande.commandeSuccess');
    }

}
