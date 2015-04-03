<?php namespace App\Observers;

use App\Events\UserRegistered;
use App\User;

class UserObserver
{
    public function created(User $user)
    {
        event(new UserRegistered($user));
    }
}