<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Commentaire;
use App\Models\Article;
use App\Models\Categorie;
use App\Models\Boutique;
use App\Models\CommandeDetail;
use App\Models\Commande;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class NavBarController extends Controller
{
    public function header()
    {
        $categories = Categorie::all();
        
        return view('playmor.index', compact('categories'));
    }

    public function index()
    {
        $topSellingProducts = DB::table('articles')
            ->join(DB::raw('(SELECT article_id, SUM(quantite_commande) as total_quantite FROM commande_details GROUP BY article_id) as commande_details'), function ($join) {
                 $join->on('articles.id', '=', 'commande_details.article_id');
            })
            ->orderByDesc('commande_details.total_quantite')
            ->take(12)
             ->get();


        $produits = Article::latest()->take(12)->get();
        $categories = Categorie::all();

        return view('playmor.index', compact('categories','produits','topSellingProducts'));
    }

    public function categories()
    {
        $categories = Categorie::paginate(10);
        return view('playmor.categories' , compact('categories'));
    }

    public function chercherProduit(Request $request)
    {
        $categorieDeRecherche = $request->input('element');

        $categorie = Categorie::where('nom_categorie', 'like', '%' . $categorieDeRecherche . '%')->first();

        if ($categorie) {
            return redirect()->route('categories.showproducts', ['id' => $categorie->id]);
        } else {
            // Article non trouvé, vous pouvez gérer le cas où aucun article correspondant n'est trouvé
            // Par exemple, vous pouvez rediriger l'utilisateur vers une page d'erreur ou afficher un message d'erreur.
            // Ici, nous redirigeons simplement l'utilisateur vers la page d'accueil.
            return view('playmor.recherche.categorieIntrouvable' , compact('categorieDeRecherche'));
        }
    }

    public function aboutUs(){

        $utilisateur = Auth::user();
        $commentaires = Commentaire::with('user')->get();
        

        return view('playmor.aboutUs', compact('commentaires','utilisateur'));
    }

    public function addComment(Request $request)
    {
        // Valider les données du formulaire
        $request->validate([
            'contenu' => 'required|string|max:255',
        ]);
    
        // Créer un nouveau commentaire
        $commentaire = new Commentaire();
        $commentaire->contenu = $request->input('contenu');
        $commentaire->utilisateur_id = auth()->user()->id; // Associer le commentaire à l'utilisateur authentifié
        $commentaire->save();
    
        // Rediriger vers la page des commentaires ou afficher un message de succès
        return redirect()->route('about')->with('success', 'Le commentaire a été ajouté avec succès.');
    }

    public function contact()
    {
        $boutiques = Boutique::all();
        return view('playmor.contact', compact('boutiques'));
    }

    public function produit()
    {
        return view('playmor.produit');
    }
    public function productTestView ()
    {
        return view ('playmor.product');
    }

    public function categorieTestView()
    {
        return view('playmor.categorie');
    }
}
