<?php

namespace App\Events;

use App\Models\Facture;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Ramsey\Uuid\Type\Integer;

class FactureModifiee
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $facture;

    /**
     * Create a new event instance.
     */
    public function __construct(Facture $facture)
    {
        $this->facture = $facture;
    }

    
}
