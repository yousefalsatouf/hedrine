<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;

class AcceptNewUser extends Mailable
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
        $admin = Auth::user();
        //dd($admin);
        $username = $this->user->name." ".$this->user->firstname;
        return $this->from($admin->email)
            ->subject('Hedrine :  votre compte est activé!')
            ->view('mail.AcceptedNewUser', compact('username', 'admin'));
    }
}
