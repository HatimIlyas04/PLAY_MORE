<?php

namespace App\Models;

use App\Models\Livraison;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Boutique extends Model
{
    use HasFactory;

    protected $fillable = [
        'libelle_boutique',
        'adresse_boutique',
        'telephone_boutique',
        'adresse_mail_boutique',
        'description_boutique'
    ];

    public function livraisons()
    {
        return $this->hasMany(Livraison::class);
    }

}
