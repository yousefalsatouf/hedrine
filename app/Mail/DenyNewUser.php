<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\DocBlock\Tags\Uses;

class DenyNewUser extends Mailable
{
    use Queueable, SerializesModels;
    public $user;
    public $username;
    public $msg;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user, $username, $msg)
    {
        //
        $this->user = $user;
        $this->username = $username;
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
        $username = $this->username;
        $message = $this->msg;
        //dd($message);
        return $this->from($admin->email)
            ->subject('Hedrine : Votre compte est refusé')
            ->view('mail.DenyNewUser', compact('username', 'admin', 'message'));
    }
}
