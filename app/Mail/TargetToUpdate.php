<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TargetToUpdate extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    public $user;
    public $message;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user, $message)
    {
        $this->message = $message;
        $this->user  = $user;
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
            ->subject('Hedrine : Votre cible(Target) doit etre modifié')
            ->view('mail.updateHerb', compact('admin','username', 'msg'));
    }
}