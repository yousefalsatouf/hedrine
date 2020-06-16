<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;

class DenyNewUser extends Mailable
{
    use Queueable, SerializesModels;
    public $user;
    public $msg;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user, $msg)
    {
        //
        $this->user = $user;
        $this->msg = $msg;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $admin = Auth::user();
        $username = $this->user->name." ".$this->user->firstname;
        $msg = $this->msg;
        //settype($message, 'string');
        //dd($message);
        return $this->from($admin->email)
            ->subject('Hedrine :  votre compte est refusé!')
            ->view('mail.denyNewUser', compact('username', 'admin', 'msg'));

    }
}
