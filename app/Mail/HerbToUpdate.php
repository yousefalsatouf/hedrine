<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class HerbToUpdate extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $message;
    public $herb;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user,Herb $herb, $message)
    {
        //
        $this->message = $message;
        $this->user  = $user;
        $this->herb  = $herb;

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
        $herb = $this->herb->id;
        $msg = $this->message;

        return $this->from($admin->email)
            ->subject('Hedrine : Votre plante doit etre modifié')
            ->view('mail.updateHerb', compact('admin','username', 'msg','herb'));
    }
}
