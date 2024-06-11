<?php

namespace App\Listeners;

use App\Events\FactureModifiee;
use App\Mail\FactureModifieeMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class EnvoyerEmailFactureModifiee
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(FactureModifiee $event)
    {
        $facture = $event->facture;
        $commande = $facture->commande;
        $utilisateur = $commande->user;


        // Envoyer l'e-mail
        Mail::to($utilisateur->email)->send(new FactureModifieeMail($facture));
    }
}
