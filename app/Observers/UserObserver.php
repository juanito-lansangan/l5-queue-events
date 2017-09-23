<?php

namespace App\Observers;

use Event;
use App\User;
use App\Events\WelcomeMailEvent;

class UserObserver
{
    /**
     * Listen to the User created event.
     *
     * @param  User  $user
     * @return void
     */
    public function created(User $user)
    {
        // fire WelcomeMailEvent after user created
        Event::fire(new WelcomeMailEvent($user));
    }

    /**
     * Listen to the User deleting event.
     *
     * @param  User  $user
     * @return void
     */
    public function deleting(User $user)
    {
        //
    }
}
