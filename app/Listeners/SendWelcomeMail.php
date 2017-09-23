<?php

namespace App\Listeners;

use App\Events\WelcomeMail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Mail;
use Log;
use App\Mail\WelcomeMail as UserWelcomeMail;

class SendWelcomeMail
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
    public function handle(WelcomeMail $event)
    {
        Log::info('SendWelcomeMail Listener');
        Log::info('Sending email...');
        Mail::to($event->user->email)->send(new UserWelcomeMail($event->user));
        Log::info('Done sending email');
    }
}
