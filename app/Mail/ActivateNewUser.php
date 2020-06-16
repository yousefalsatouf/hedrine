<?php

namespace App\Mail;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ActivateNewUser extends Mailable
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
        //
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //dd($this->user[0]->email);
        $activateUser = $this->user;
        //dd($activateUser->name);

        return $this->from($this->user->email, $this->user->name)
            ->subject('Hedrine : Activate user')
            ->view('mail.ActivateNewUser', compact('activateUser'));
    }
}
