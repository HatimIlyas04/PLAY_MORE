<?php

namespace App\Models;

use App\Models\Commande;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Facture extends Model
{
    use HasFactory;

    protected $fillable = [
        'date_facture',
        'description_facture',
        'commande_id'
    ];

    public function commande()
    {
        return $this->belongsTo(Commande::class);
    }
}
