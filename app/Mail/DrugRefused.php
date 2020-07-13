<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;
use App\Drug;
use App\User;

class DrugRefused extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $message;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user, $message)
    {
        //
        $this->user  = $user;
        $this->message = $message;

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
        $msg = $this->message;

        return $this->from($admin->email)
            ->subject('Hedrine : Votre Médicament (DCI) est refusée !')
            ->view('mail.refuseHerb', compact('admin','username', 'msg'));
    }
}
