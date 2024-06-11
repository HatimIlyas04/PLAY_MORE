<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CommandeDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'article_id',
        'commande_id',
        'quantite_commande',
        'sous_total'
    ];

    public function article()
    {
        return $this->belongsTo(Article::class);
    }

    public function commande()
    {
        return $this->belongsTo(Commande::class);
    }
}
