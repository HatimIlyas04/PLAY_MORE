<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;


use App\Models\Article;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Categorie extends Model
{
    use HasFactory;
    use SoftDeletes;


    protected $fillable = [
        'nom_categorie',
        'description_categorie',
        'image_categorie'
    ];

    public function articles()
    {
        return $this->hasMany(Article::class);
    }


    protected static function boot()
    {
        parent::boot();

        // Soft delete related products when the category is soft deleted
        static::deleting(function ($categorie) {
            $categorie->articles()->delete();
        });
    }
}
