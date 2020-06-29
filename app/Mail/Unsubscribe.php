<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;

class Unsubscribe extends Mailable
{
    use Queueable, SerializesModels;

    public $user;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        $this->user  = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $username = $this->user->name." ".$this->user->firstname;

        return $this->from("david.dubois@ulb.be")
            ->subject('Hedrine : mail suite à la suppression de votre compte sur le portail Hedrine.!')
            ->view('mail.unsubscribe', compact('username'));
    }
}
