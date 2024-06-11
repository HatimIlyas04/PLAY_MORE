<?php

namespace App\Models;

use App\Models\Article;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = [
        'libelle_tag',
        'designation_tag'
    ];

    public function articles()
    {
        return $this->belongsToMany(Article::class);
    }
}
