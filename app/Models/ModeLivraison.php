<?php

namespace App\Models;

use App\Models\Livraison;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ModeLivraison extends Model
{
    use HasFactory;

    protected $fillable = [
        'libelle_mode_livraison',
        'description_mode_livraison'
    ];

    public function livraisons()
    {
        return $this->hasMany(Livraison::class);
    }
}
