<?php

namespace App\Models;

use App\Models\Article;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fournisseur extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom_fournisseur',
        'adresse_email_fournisseur',
        'telephone_fournisseur',
        'adresse_fournisseur',
        'description_fournisseur'
    ];

    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
