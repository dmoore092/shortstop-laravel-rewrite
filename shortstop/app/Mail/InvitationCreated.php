<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Invitation;

class InvitationCreated extends Mailable
{
    use Queueable, SerializesModels;
    public $invitation;

    /**
     * Create a new message instance.
     *
     * @param \App\Mail\Invitation $invitation
     */
    public function __construct(Invitation $invitation)
    {
        $this->invitation = $invitation;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('you@example.com')
            ->view('emails.invitation');    }
}
