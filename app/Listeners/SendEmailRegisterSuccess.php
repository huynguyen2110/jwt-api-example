<?php

namespace App\Listeners;

use App\Events\RegisterEvent;
use App\Mail\RegisterSuccess;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendEmailRegisterSuccess
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
     * @param  \App\Events\RegisterEvent  $event
     * @return void
     */
    public function handle(RegisterEvent $event)
    {
        Mail::to($event->user->email)->send(new RegisterSuccess($event->user));
    }
}
