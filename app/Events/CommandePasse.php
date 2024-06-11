<?php

namespace App\Events;

use App\Models\Commande;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class CommandePasse
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $commande;

    /**
     * Create a new event instance.
     *
     * @param  Commande  $commande
     * @return void
     */
    public function __construct(Commande $commande)
    {
        $this->commande = $commande;
    }
}
