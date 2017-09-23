<?php

namespace App\Http\Controllers;

use Auth;
use Mail;
use Event;
use App\Mail\WelcomeMail;
use App\Events\WelcomeMail as EventWelcomeMail;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function send()
    {
        $user = Auth::user();

        // Mail::to($user->email)
        //     ->send(new WelcomeMail($user));

        Event::fire(new EventWelcomeMail($user));
        return redirect('/home');
    }
}
