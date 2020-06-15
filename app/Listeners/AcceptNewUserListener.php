<?php

namespace App\Listeners;

use App\Events\AcceptNewUserEvent;
use Illuminate\Support\Facades\Mail;

class AcceptNewUserListener
{
    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(AcceptNewUserEvent $event)
    {
        //
        //dd($event->user[0]->email);
        Mail::to($event->user->email)->send( new \App\Mail\AcceptNewUser($event->user));
    }
}
