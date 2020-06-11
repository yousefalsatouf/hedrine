<?php

namespace App\Listeners;

use App\Events\ActivateNewUserEvent;
use App\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class ActivateNewUser
{
    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(ActivateNewUserEvent $event)
    {
        $admins = DB::table('users')->where('role_id', '=', 1)->get();
        //dd($admin[0]->email);
        //  dd($event->user);
        foreach ($admins as $admin)
        {
            //dump($admin->email);
            Mail::to($admin->email)->send( new \App\Mail\ActivateNewUser($event->user));
        }
    }
}
