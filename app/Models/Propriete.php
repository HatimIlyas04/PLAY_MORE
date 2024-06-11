<?php

namespace App\Models;

use App\Models\Article;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Propriete extends Model
{
    use HasFactory;

    protected $fillable = [
        'libelle_propriete',
        'description_propriete'
    ];

    public function articles()
    {
        return $this->belongsToMany(Article::class);
    }
}
