<?php

namespace App\Mail;

use App\Models\Facture;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class FactureModifieeMail extends Mailable
{
    use Queueable, SerializesModels;
    public $facture;
    /**
     * Create a new message instance.
     */
    public function __construct(Facture $facture)
    {
        $this->facture = $facture;
    }

    public function build()
    {
        return $this->view('emails.facture')
            ->subject('Votre Facture');
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
