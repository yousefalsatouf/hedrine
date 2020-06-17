<?php

namespace App\Listeners;

use App\Events\DenyNewUserEvent;
use Illuminate\Support\Facades\Mail;

class DenyNewUser
{
    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(DenyNewUserEvent $event)
    {
        //dd($event->user->email);
        Mail::to($event->user->email)->send( new \App\Mail\DenyNewUser($event->user, $event->msg));
    }
}
