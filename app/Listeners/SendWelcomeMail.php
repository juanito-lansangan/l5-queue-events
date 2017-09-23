<?php

namespace App\Listeners;

use Mail;
use Log;
use App\Events\WelcomeMailEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Mail\WelcomeMail;

class SendWelcomeMail implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  WelcomeMail  $event
     * @return void
     */
    public function handle(WelcomeMailEvent $event)
    {
        Log::info('SendWelcomeMail Listener');
        Log::info('Sending email...');
        Mail::to($event->user->email)->send(new WelcomeMail($event->user));
        Log::info('Done sending email');
    }
}
