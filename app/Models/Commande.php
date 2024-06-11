<?php

namespace App\Models;

use App\Models\User;
use App\Models\Panier;
use App\Models\Article;
use App\Models\Facture;
use App\Models\Livraison;
use App\Models\Utilisateur;
use App\Models\EtatCommande;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Commande extends Model
{
    use HasFactory;

    protected $fillable = [
        'date_commande',
        'description_commande',
        'prix_total_hors_taxes_commande',
        'prix_total_toutes_taxes_comprises_commande',
        'utilisateur_id',
        'etat_commande_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'utilisateur_id');
    }
    

    public function etatCommande()
    {
        return $this->belongsTo(etatCommande::class);
    }

    public function facture()
    {
        return $this->hasOne(Facture::class);
    }

    public function livraison()
    {
        return $this->hasOne(Livraison::class);
    }

    public function articles()
    {
        return $this->belongsToMany(Article::class)->withPivot('quantite_commande' , 'sous_total');
    }

    public function paniers()
    {
        return $this->hasMany(Panier::class , 'commande_id', 'id');
    }

    public function commandeDetails()
    {
        return $this->hasMany(CommandeDetail::class);
    }
}
