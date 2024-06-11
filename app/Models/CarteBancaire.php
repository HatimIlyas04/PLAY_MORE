<?php

namespace App\Models;

use App\Models\User;
use App\Models\Utilisateur;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CarteBancaire extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero_carte_bancaire',
        'date_expiration_carte_bancaire',
        'code_validation_carte_bancaire',
        'solde_carte_bancaire'
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
