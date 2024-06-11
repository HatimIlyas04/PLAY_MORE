<?php

namespace App\Models;

use App\Models\Commande;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Panier extends Model
{
    use HasFactory;

    protected $table = "paniers";

    protected $primaryKey = "id";

    protected $fillable = [
        "user_id",
        "article_id",
        "quantite",
        "total_HT",
        "total_TTC"
    ];

    public function user()
    {
        return $this->belongsTo(User::class , 'user_id', 'users');
    }

    public function article()
    {
        return $this->belongsTo(Article::class );
    }

    public function commande()
    {
        return $this->belongsTo(Commande::class , 'commande_id', 'commandes');
    }
}
