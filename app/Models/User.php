<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Ville;
use App\Models\Commande;
use App\Models\Privilège;
use App\Models\CarteBancaire;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Contracts\Auth\CanResetPassword;


use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class User extends Authenticatable implements MustVerifyEmail
{
    use AuthenticableTrait;
    use SoftDeletes;
    use Notifiable;
    
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'email',
        'identifiant_utilisateur',
        'password',
        'nom_utilisateur',
        'prenom_utilisateur',
        'sexe_utilisateur',
        'telephone_utilisateur',
        'adresse_utilisateur',
        'image_utilisateur',
        'ville_id',
        'privilege_id',
        'carte_bancaire_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function ville()
    {
        return $this->belongsTo(Ville::class);
    }

    public function carteBancaire()
    {
        return $this->belongsTo(CarteBancaire::class);
    }

    public function privilege()
    {
        return $this->belongsTo(Privilege::class);
    }

    public function commandes()
    {
    return $this->hasMany(Commande::class, 'utilisateur_id');
    }


    public function paniers()
    {
        return $this->hasMany(Panier::class , 'user_id', 'users');
    }

    public function commentaires()
    {
        return $this->hasMany(Commentaire::class);
    }

    public function sendEmailVerificationNotification()
    {
        $this->notify(new \App\Notifications\CustomVerifyEmail);
    }
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new \App\Notifications\CustomResetPassword($token));
    }


}
