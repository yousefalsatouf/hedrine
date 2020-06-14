<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DenyNewUser extends Mailable
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
        $denyUser = $this->user;
        //dd($activateUser);

        return $this->from('Admin')
            ->subject('Hedrine :  request denied')
            ->view('mail.DenyNewUser', compact('$denyUser'));
    }
}
