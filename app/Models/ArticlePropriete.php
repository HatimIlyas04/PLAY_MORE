<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticlePropriete extends Model
{
    use HasFactory;

    protected $fillable = [
        'article_id',
        'propriete_id',
        'valeur'
    ];
}
