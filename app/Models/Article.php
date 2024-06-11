<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;


use App\Models\Categorie;
use App\Models\Tag;
use App\Models\Marque;
use App\Models\Commande;
use App\Models\Propriete;
use App\Models\Fournisseur;
use App\Models\QuestionReponse;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;
    use SoftDeletes;


    protected $fillable = [
        'designation_article',
        'description_article',
        'image_article',
        'prix_article',
        'taux_remise',
        'taux_tva',
        'quantite_stock',
        'seuil_stock',
        'fournisseur_id',
        'marque_id',
        'categorie_id'
    ];

    public function fournisseur()
    {
        return $this->belongsTo(Fournisseur::class);
    }

    public function commandes()
    {
        return $this->belongsToMany(Commande::class)->withPivot('quantite_commande' , 'sous_total');
    }

    public function proprietes()
    {
        return $this->belongsToMany(Propriete::class, 'article_proprietes' , 'article_id' , 'propriete_id')->withPivot('valeur');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class , 'article_tags' , 'article_id' , 'tag_id');
    }

    public function questionReponses()
    {
        return $this->hasMany(QuestionReponse::class);
    }

    public function marque()
    {
        return $this->belongsTo(Marque::class);
    }

    public function categorie()
    {
        return $this->belongsTo(Categorie::class)->withTrashed();
    }

    public function paniers()
    {
        return $this->hasMany(Panier::class , 'article_id', 'articles');
    }
    public function commandDetails()
{
    return $this->hasMany(CommandeDetail::class, 'article_id');
}

}
