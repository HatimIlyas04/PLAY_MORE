<?php

namespace App\Models;


use App\Models\Commande;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EtatCommande extends Model
{
    use HasFactory;

    protected $fillable = [
        'libelle_etat_commande',
        'description_etat_commande'
    ];

    public function commandes()
    {
        return $this->hasMany(Commande::class);
    }

}
