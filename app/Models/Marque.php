<?php

namespace App\Models;

use App\Models\Article;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Marque extends Model
{
    use HasFactory;

    protected $fillable = [
        'libelle_marque',
        'description_marque',
        'image_marque'
    ];

    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
