<?php

namespace App\Listeners;

use App\Models\User;
use Illuminate\Auth\Events\Login;

class LogSuccessfulLogin
{
    public function handle(Login $event): void
    {
        /** @var User $user */
        $user = $event->user;
        $user->update([
            'last_login' => now(),
        ]);
    }
}
