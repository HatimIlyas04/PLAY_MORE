<?php

namespace App\Models;

use App\Models\Boutique;
use App\Models\Commande;
use App\Models\ModeLivraison;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Livraison extends Model
{
    use HasFactory;

    protected $fillable = [
        'date_livraison',
        'description_livraison',
        'adresse_livraison',
        'frais_livraison',
        'client_livré',
        'commande_id',
        'mode_livraison_id',
        'boutique_id'
    ];

    public function commande()
    {
        return $this->belongsTo(Commande::class);
    }

    public function boutique()
    {
        return $this->belongsTo(Boutique::class);
    }

    public function modeLivraison()
    {
        return $this->belongsTo(ModeLivraison::class);
    }
}
