<?php

namespace App\Listeners;

use App\Events\HerbRefuseEvent;
use App\Mail\HerbRefuse;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class HerbRefuseListener
{
    public function handle(HerbRefuseEvent $event)
    {
        //dd($event->user->email);
        Mail::to($event->email)->send( new HerbRefuse($event->user, $event->msg));
    }
}
