<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Commentaire extends Model
{
    use HasFactory;

    protected $table = 'commentaires';

    protected $fillable = [
        'id',
        'utilisateur_id',
        'contenu'
    ];

    // Relation avec l'utilisateur
    public function user()
    {
        return $this->belongsTo(User::class, 'utilisateur_id');
    }
}
