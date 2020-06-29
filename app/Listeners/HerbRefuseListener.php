<?php

namespace App\Listeners;

use App\Events\HerbRefuseEvent;
use App\Mail\HerbRefuse;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class HerbRefuseListener
{
    public function handle(HerbRefuseEvent $event)
    {
        //dd($event->user->email);
        Mail::to($event->herb->user->email)->send( new HerbRefuse($event->herb->user->name, $event->msg));
    }
}
