<?php

namespace App\Listeners;

use App\Events\LoginEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Twilio;

class LoginEventListener implements ShouldQueue
{

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\RoomCreated  $event
     * @return void
     */
    public function handle(LoginEvent $event)
    {
        Twilio::message("+201554584901", $event->user->name . " login the app");
        //
    }
}
