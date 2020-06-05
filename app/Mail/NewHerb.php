<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\{ Herb, User};

class NewHerb extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $herb;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Herb $herb, User $user)
    {
        //
        $this->user = $user;
        $this->herb = $herb;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->from($this->user->email, $this->user->name)
              ->subject('Nouvelle plante')
            ->view('mail.newherb');
    }
}
