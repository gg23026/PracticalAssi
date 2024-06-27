<?php

use App\Notifications\UserRegistered;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        Registered::class => [
            'App\Listeners\SendUserRegisteredNotification',
        ],
    ];

    public function boot()
    {
        Event::listen(Registered::class, function ($event) {
            $event->user->notify(new UserRegistered());
        });
    }
}
