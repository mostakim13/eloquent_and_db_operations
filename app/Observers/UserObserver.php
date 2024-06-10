<?php

namespace App\Observers;

use App\Models\User;
use App\Models\UserActivityLog;

class UserObserver
{
    /**
     * Handle the User "created" event.
     *
     * @param \App\Models\User $user
     * @return void
     */
    public function created(User $user)
    {
        // Log user creation
        UserActivityLog::create([
            'user_id' => $user->id,
            'activity' => 'User created',
        ]);
    }

    public function updated(User $user)
    {
        // Log user update
        UserActivityLog::create([
            'user_id' => $user->id,
            'activity' => 'User updated',
        ]);
    }

    /**
     * Handle the User "deleted" event.
     *
     * @param \App\Models\User $user
     * @return void
     */
    public function deleted(User $user)
    {
        //
    }

    /**
     * Handle the User "restored" event.
     *
     * @param \App\Models\User $user
     * @return void
     */
    public function restored(User $user)
    {
        //
    }

    /**
     * Handle the User "force deleted" event.
     *
     * @param \App\Models\User $user
     * @return void
     */
    public function forceDeleted(User $user)
    {
        //
    }
}
