<?php

namespace App\Models;

use App\Models\Utilisateur;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Privilege extends Model
{
    use HasFactory;

    protected $fillable = [
        'libelle_privilege',
        'description_privilege'
    ];

    public function utilisateurs()
    {
        return $this->hasMany(Utilisateur::class);
    }
}
