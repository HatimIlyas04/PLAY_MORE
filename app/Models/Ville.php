<?php

namespace App\Models;

use App\Models\User;
use App\Models\Utilisateur;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ville extends Model
{
    use HasFactory;

    protected $fillable = [
        'libelle_ville'
    ];

    public function user()
    {
        return $this->hasMany(User::class);
    }
}
