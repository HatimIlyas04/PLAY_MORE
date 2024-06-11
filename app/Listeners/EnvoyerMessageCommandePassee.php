<?php

namespace App\Listeners;

use App\Events\CommandePasse;
use App\Mail\CommandeMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class EnvoyerMessageCommandePassee implements ShouldQueue
{
    /**
     * Handle the event.
     *
     * @param  CommandePasse  $event
     * @return void
     */
    public function handle(CommandePasse $event)
    {
        $commande = $event->commande;
        $utilisateur = $commande->user;

        // Envoyer l'e-mail
        Mail::to($utilisateur->email)->send(new CommandeMail($commande));
    }
}
