<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class DenyNewUserEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $user;
    public $msg;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($user, $msg)
    {
        //
        $this->user = $user;
        $this->msg = $msg;
    }
}
