<?php

namespace App\Providers;

use App\Events\AcceptNewUserEvent;
use App\Events\DenyNewUserEvent;
use App\Events\HerbRefuseEvent;
use App\Listeners\AcceptNewUserListener;
use App\Listeners\ActivateNewUser;
use App\Listeners\DenyNewUser;
use App\Listeners\HerbRefuseListener;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Events\Verified;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        Verified::class => [
            ActivateNewUser::class
        ],
        DenyNewUserEvent::class => [
            DenyNewUser::class,
        ],
        AcceptNewUserEvent::class => [
            AcceptNewUserListener::class,
        ],
        HerbRefuseEvent::class => [
            HerbRefuseListener::class,
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
