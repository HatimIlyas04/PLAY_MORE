<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Categorie;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function showArticle(string $id)
    {
        $article = Article::findOrFail($id);
        $quantiteArticle = $article->quantite_stock;
        $quantiteSeuil = $article->seuil_stock;
        $quantiteAccessiblePourVente = $quantiteArticle - $quantiteSeuil;
        $question_reponses = $article->questionReponses;
        $tags = $article->tags;
        $articlesMemeCatagorie = Article::all();
        $articlesNav = Article::latest()->take(5)->get();
        return view('playmor.produit' , compact('article' , 'quantiteAccessiblePourVente' , 'articlesMemeCatagorie', 'articlesNav', 'tags', 'question_reponses'));

    }

    public function showAllProducts(Request $request)
    {
            $titre = "Tous nos article";

            $filtrageParCategories = $request->categories;
            $filtrageParPrix = $request->prix;
            $filtrageParRemise = $request->remises;
            $filtrageParOrdre = $request->ordre;

            if(!empty($filtrageParCategories)){
                $articles = Article::where('categorie_id', '=', $filtrageParCategories)->latest()->paginate(10);
            }
            elseif(!empty($filtrageParPrix)){
                
                switch ($filtrageParPrix) {
                    case "2000":
                        $articles = Article::where('prix_article', '<', 2000)->latest()->paginate(10);
                        break;
                    
                    case "2000-5000":
                        $articles = Article::whereBetween('prix_article', [2000 , 4999])->latest()->paginate(10);
                        break;

                    case "5000-10000":
                        $articles = Article::whereBetween('prix_article', [5000 , 9999])->latest()->paginate(10);
                        break;
                    
                    case "10000-50000":
                        $articles = Article::where('prix_article', [10000, 49999])->latest()->paginate(10);
                        break;
                    
                    case "50000":
                        $articles = Article::where('prix_article', '>=' , 50000)->latest()->paginate(10);
                        break;
                }
                
            }
            elseif(!empty($filtrageParRemise)){
                switch ($filtrageParRemise) {
                    case "5":
                        $articles = Article::where('taux_remise', '<', 0.05)->latest()->paginate(10);
                        break;
                    
                    case "5-10":
                        $articles = Article::whereBetween('taux_remise', [0.05 , 0.99])->latest()->paginate(10);
                        break;

                    case "10-15":
                        $articles = Article::whereBetween('taux_remise', [0.10 , 0.14])->latest()->paginate(10);
                        break;
                    
                    case "15-20":
                        $articles = Article::where('taux_remise', [0.15, 0.24])->latest()->paginate(10);
                        break;
                    
                    case "25":
                        $articles = Article::where('taux_remise', '>=' , 0.25)->latest()->paginate(10);
                        break;
                }
            }
            elseif(!empty($filtrageParOrdre)){
                if($filtrageParOrdre === 'moinsCher'){
                    $articles = Article::orderBy('prix_article', 'asc')->paginate(10);
                }else{
                    $articles = Article::orderBy('prix_article', 'desc')->paginate(10);
                }
            }
            else{
                $articles = Article::latest()->paginate(10);
            }

            

            
            // Filtrage
                // Pour les catégories
                $categories = Categorie::all();

                // Les articles selon leurs prix
                $article2000 = Article::where('prix_article', '<', 2000.00)->count();
                $article2000A5000 = Article::where('prix_article', '>=', 2000.00)->where('prix_article', '<', 5000.00)->count();
                $article5000A10000 = Article::where('prix_article', '>=', 5000.00)->where('prix_article', '<', 10000.00)->count();
                $article10000A50000 = Article::where('prix_article', '>=', 10000.00)->where('prix_article', '<', 50000.00)->count();
                $article50000 = Article::where('prix_article', '>', 50000.00)->count();

                // Les articles selon leurs taux de remises
                $article5 = Article::where('taux_remise' , '<', 0.05)->count();
                $article5A10 = Article::where('taux_remise' , '>=', 0.05)->where('taux_remise' , '<', 0.1)->count();
                $article10A15 = Article::where('taux_remise' , '>=', 0.1)->where('taux_remise' , '<', 0.15)->count();
                $article15A25 = Article::where('taux_remise' , '>=', 0.15)->where('taux_remise' , '<', 0.25)->count();
                $article25 = Article::where('taux_remise' , '>=', 0.25)->count();


            return view('playmor.produits' , compact('articles' , 'categories' , 'titre', 
            'article2000', 'article50000' ,'article10000A50000' ,'article5000A10000' , 'article2000A5000',
            'article5', 'article5A10', 'article10A15', 'article15A25', 'article25'
            ));
    }

    public function showCategoryProducts(string $id)
    {
        $articles = Article::where("categorie_id", "=", $id)->paginate(10);
        $categorie = Categorie::findOrFail($id);
        return view('playmor.produitsParCategorie', compact('articles' , 'categorie'));
    }
}
