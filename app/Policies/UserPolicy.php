<?php

namespace App\Policies;

use App\Models\User;

class UserPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function update(User $user, User $target)
    {
        return $user->role == 'admin' || $user->id === $target->id;
    }
}